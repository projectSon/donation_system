pragma solidity >=0.4.21 <0.6.0;

import "./ConvertLib.sol";

contract MetaCoin {
    struct Location{
      string name;
      address Receiver; // address => 30bytes 고정 Ethereum 계정주소
      address PreviousLocationId; // 이전 위치 파악을 위한 30bytes 고정 Ethereum 계정주소
      uint Timestamp; // 이슈가 일어난 날짜와 시간을 기록하여 사실 존재를 증명하는 전후 관계를 보장
      uint amount; // 기부자가 기부한 기부금의 양
    }

    mapping (address => string)  getID;
    mapping (string => Location) ID;
    mapping (uint => Location)  Trail;
    uint8 TrailCount = 0;
    mapping (address => uint) balances;

    event Transfer(address indexed _from, address indexed _to, uint256 _value); // 송금 event _from => msg.sender 과 _to => receiver 와 _value => amount 값 입력

    constructor() public {
        balances[tx.origin] = 10000;
    }
    // 계약 생성자의 초기 balance 값을 10000 지정

    function sendCoin(address receiver, uint amount, string memory name, string memory id) public returns(bool sufficient)
    {
        Location memory newLocation;
        newLocation.Receiver = receiver; //newLocation의 Receiver값 => sendCoin의 receiver 계정주소
        newLocation.Timestamp = now; // now를 통해 현재시간 기준으로 newLocation의 Timestamp값 지
        newLocation.name = name; //sendCoin의 name => newLocation의 name
        newLocation.amount = amount; // sendCoin의 amount => newLocation의 amount
        getID[receiver] = id;

        if(TrailCount !=0) // TrailCount의 값이 0이 아닐경우 수행
        {
            newLocation.PreviousLocationId = Trail[TrailCount].Receiver; // Trail[TrailCount]의 Receiver를 newLocation의 PreviousLocationId로 입력
        }

        Trail[TrailCount] = newLocation;
        ID[id] = Trail[TrailCount];
        TrailCount++;
        // newLocation이 발생할 때마다 Trail 배열에 저장 => Trail[TrailCount]의 값을 ID[id]에 저장
        // 이후 TrailCount++

        if(balances[msg.sender] < amount) return false;
        // msg.sender의 bakance의 값이 기부금 보다 작으면 bool 값 false로 수행 종료
        balances[msg.sender] -= amount;
        balances[receiver] += amount;

        emit Transfer(msg.sender, receiver, amount);
        return true;
        // 위에서 정의한 event에 msg.sender, receiver, amount의 값을 넣어 event 수행 후 bool 값 true로서 실행
        }

        function getInfoPrevious(address receiver) public view returns(string memory, uint, string memory) {
            string memory id = getID[receiver];
            if (bytes(id).length == 0) {
                return ("Null",0,id);
            }
            return (ID[id].name,ID[id].amount,id);
            //  receiver 계정 주소에 대해 id로서 이름과 기부금 id return
        }

        function getTransactionByID(string memory id) public view returns(uint, string memory, address) {
		        return (ID[id].amount,ID[id].name,ID[id].Receiver);
	      }
            // Transaction에 대한 기부금과 이름 받은 계정 주소 return

 	      function GetTrailCount() public pure returns(uint8){
            return MetaCoin.TrailCount;
        }
            // MetaCoin의 TrailCount return

        function GetLocation(uint8 TrailNo) public view returns (string memory, uint, address)
        {
            return (Trail[TrailNo].name,Trail[TrailNo].amount,Trail[TrailNo].Receiver);
        }

	      function getBalanceInEth(address addr) public view returns(uint){
		        return ConvertLib.convert(getBalance(addr),2);
	      }

	      function getBalance(address addr) public view returns(uint) {
		      return balances[addr];
	     }

	      function getaddress() public view returns(address) {
		       return msg.sender;
	      }

  }
