  <?php
 session_start();

//test DB Info : root/qwe123
 $db = new mysqli("localhost","root","qwe123","blockchain");
 $db->set_charset("utf8");

 function mq($sql){
   global $db;
   return $db->query($sql);
 }
 ?>
