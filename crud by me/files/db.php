<?php 
class database{
    function connectivity(){
        $connect = new mysqli("localhost","root","","users");
               if(!$connect){
                   echo "Connection Error".$connect->error;
               }else{
                   return $connect;
               }
          }
}
?>