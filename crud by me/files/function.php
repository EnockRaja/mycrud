<?php 
include('db.php');
// print_r($_POST);
// print_r($_FILES);

class allFunction extends database{
    public $op;

    function create($table){
        extract($_REQUEST);
        $insert = "INSERT INTO `$table`(`name`,`phone`,`email`,`passport`)VALUES('$name','$phone','$mail','$passport')";
       
        $con_fn =$this->connectivity();
        // $op;
        if($con_fn->query($insert)){
          $op = "Data Submitted";
        }else{
            $op = "Data Couldn't Submitted";
        }
        return $op;
    }


}
$first = new allFunction;

extract($_REQUEST);

if(isset($_REQUEST['hidden']) && $hidden =="create"){
 echo  $first->create("customer"); 
}
?>