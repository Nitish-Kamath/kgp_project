<?php
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$con  = new mysqli("localhost","root","","mas");

if($con -> connect_error)
{
    die("Failed to connect : ". $con->connect_error );
    
}
else{
    $stmt = $con -> prepare("select * from table02 where User_Id = ?");
    $stmt -> bind_param("s",$user_id);
    $stmt-> execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result -> num_rows > 0)
    {
        $data = $stmt_result -> fetch_assoc();
        if($data['Password'] === $password)
        {
            echo "<h1>Login Successfully</h1>";
        }
        else
        {
            echo "<h1>Incorrect UserId or Password </h1>";
        }
    }
    else
    {
        echo "<h1>Incorrect UserId or Password </h1>";
    }
}

?>