<?php
    $uname=$_POST['uname'];
    $Enum=$_POST['Enum'];
    $Email=$_POST['Email'];
    $message=$_POST['msg'];
    $con= mysqli_connect('localhost','root','','sonudb2');
    if($con->connect_error){
        die('Connection Failed : '.$con->connect_error);
    }else{
        $stmt = $con->prepare("insert into in_a_flash0(uname,Enum,Email,msg) 
        values(?,?,?,?)");
        $stmt->bind_param("siss",$uname,$Enum,$Email,$msg);
        $stmt->execute();
        echo "Query submitted succesfully";
        $stmt->close();
        $con->close();
    }
   
?>
