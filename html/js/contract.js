// 필요한 라이브러리 import
import Web3 from "web3";
import contract from 'truffle-contract'

// 게약서 아티팩트를 가져와 사용가능한 추상화로 변환
import metaCoinArtifact from "../build/contracts/MetaCoin.json";

// metaCoinArtifact를 MetaCoin으로 사용
const MetaCoin = contract(metaCoinArtifact)

let accounts;
let account;

const App = {

start: function(){
  const self = this;

  MetaCoin.setProvider(web3.currentProvider);

  web3.eth.getAccounts(function (err, accs) {
    if (err != null) {
      alert('계정을 가져오는 중에 오류가 발생 했습니다.');
      return
    }

    if (accs.length == 0) {
      alert('계정을 가져올 수 없습니다! Ethereum 클라이언트가 올바르게 구성되었는지 확인 하십시오.');
      return
    }

    accounts = accs
    account = accounts[0]

    self.refreshBalance();
  })
},

setStatus: function(message) {
    const status = document.getElementById('status');
    status.innerHTML = message;
},

refreshBalance: function() {
  const self = this;

  let meta
  MetaCoin.deployed().then(function (instance) {
    meta = instance;
    return meta.getBalance.call(account, { from: account})
  }).then(function (value) {
    const balanceElement = document.getElementById('balance');
    balanceElement.innerHTML = value.valueOf();
  }).catch(function (e) {
    console.log(e);
    self.setStatus('balance를 가져오는중 오류가 발행했습니다. log를 참조 하세요.')
  })
},

generateID: function() {
  document.getElementById('uniqueID').value=Math.random().toString(36).substr(2, 9);
},

getPreviousInfo: function() {
  let meta
  MetaCoin.deployed().then(function(instance){
    meta = instance;
    meta.getaddress.call({from: account}).then(function(value) {
      const receiver = value;
      meta.getInfoPrevious.call(receiver, {from: account}).then(function(returnValues) {
        document.getElementById("amount").value = returnValues[1];
        document.getElementById("uniqueID").value = returnValues[2];
      })
    })
  })
},

getAccount: function() {
  alert(account);
},

getInfoByID: function() {
  let meta;
  MetaCoin.deployed().then(function(instance){
    meta = instance;
    const id = document.getElementById('uniqueID').value
    meta.getTransactionByID.call(id, {from:account}).then(function(returnValues) {
      alert("당신의" + returnValues[0] + "Coin " + returnValues[1])
    })
  })
},

getAnyLocation: function() {
  let meta
  MetaCoin.deployed().then(function(instance) {
    meta = instance
    const locationno = parseInt(document.getElementById('Transactionno').value)
    meta.GetLocation.call(locationno-1,{ from: account}).then(function(returnValues) {
      document.getElementById("receiver").value = returnValues[2];
      document.getElementById("amount").value = returnValues[1];
      document.getElementById("locationName").value = returnValues[0];
    }).catch(function(e) {
      console.log(e);
    })
  })
},

sendCoin: function() {
  const self = this;
  const id = document.getElementById('uniqueID').value
  const amount = parseInt(document.getElementById('amount').value)
  const receiver = document.getElementById('receiver').value
  const name = document.getElementById('locationName').value

  this.setStatus('거래 시작중... (잠시만 기다려 주세요.)')
  if (id == "") {
    alert("transaction id를 넣어주세요")
    return
  }
  let meta
  MetaCoin.deployed().then(function(instance) {
    meta = instance
    return meta.sendCoin(receiver, amount, name, id, {from: account})
  }).then(function() {
    self.setStatus('Transaction 완료하였습니다.')
    self.refreshBalance()
  }).catch(function(e) {
    console.log(e);
    self.setStatus('coin 보내기 오류 log를 확인하세요')
  })

},

getCurrentLocation: function() {
  let meta
  MetaCoin.deployed().then(function(instance){
    meta = instance
    meta.GetTrailCount.call({from: account}).then(function(value){
      var s = value.valueOf()
      alert("현재 Transaction Number:- "+s)
      meta.GetLocation.call(s-1,{from: account}).then(function(returnValues){
        document.getElementById("receiver").value = returnValues[2];
        document.getElementById("amount").value = returnValues[1];
        document.getElementById("locationName").value = returnValues[0];
      })
    }).catch(function(e) {
      console.log(e);
      })
    })
  },
};

window.App = App;

window,addEventListener("load", function() {
  if (window.ethereum) {
    // use MetaMask's provider
    App.web3 = new Web3(window.ethereum);
    window.ethereum.enable(); // get permission to access accounts
  } else {
    console.warn(
      "No web3 detected. Falling back to http://127.0.0.1:9545. You should remove this fallback when you deploy live",
    );
    // fallback - use your fallback strategy (local node / hosted node + in-dapp id mgmt / fail)
    App.web3 = new Web3(
      new Web3.providers.HttpProvider("http://127.0.0.1:9545"),
    );
  }
  App.start();
});
