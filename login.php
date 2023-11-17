<?php

if(isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)){
        header("location: index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("location: index.php?error=User Name is required");
        exit();
    }else{
        echo "valid input";
    }
}else{
    header("location: index.php");
    exit();
}


?>
