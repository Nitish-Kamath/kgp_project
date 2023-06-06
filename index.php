<?php
 // Set connection variables
 if(isset($_POST['first_name'])){
 $server = "localhost";
 $username = "root";
 $password = "";

 // Create a database connection
 $con = mysqli_connect($server, $username, $password);

 // Check for connection success
 if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
 }


 $first_name = $_POST['first_name'];
 $middle_name = $_POST['middle_name'];
 $last_name = $_POST['last_name']; 
 $user_id = $_POST['user_id'];
 $email = $_POST['email'];
 $question = $_POST['question'];
 $answer = $_POST['answer'];
 $password= $_POST['password'];
 $contact_number = $_POST['contact_number'];
 

 $sql = "INSERT INTO `mas`.`table02` ( `First_Name`, `Middle_Name`, `Last_Name`, `User_Id`, `Email`, `Question`, `Answer`, `Password`, `Contact`) VALUES (' $first_name', ' $middle_name', ' $last_name', '$user_id', '$email', '$question', '$answer', '$password', '$contact_number')";
//  echo "$sql";



     // Execute the query
     if($con->query($sql) == true){
        // echo "Successfully inserted";
        echo '<script>alert("Data SuccessFully Inserted")</script>';
        

        // Flag for successful insertion
        // $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();

}
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script
      src="https://kit.fontawesome.com/b97c8d442a.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style1.css" />
  </head>
  <body>
    <div class="bg_img"></div>
    <div class="container">
      <input type="image" src="image/new_drdo_logo.png" id="id_sl" alt="" />
      <form
        class="form_box"
        onsubmit="return validator()"
        action="index.php"
        method="post"
      >
        <h1>REGISTRATION PAGE</h1>

        <div class="form_element" id="name">
          <i class="fa-solid fa-user-pen"></i>
          <input
            type="text"
            placeholder="First Name"
            id="id_fname"
            name="first_name"
          />
          <input type="text" id="id_mname" name = "middle_name" placeholder="Middle Name" />
          <input type="text" id="id_lname" name = "last_name" placeholder="Last Name" />
        </div>

        <div class="form_element"></div>

        <div class="form_element">
          <i class="fa-solid fa-user-gear"></i>
          <input type="text" name="user_id" id="id_uid" placeholder="User Id" />
        </div>
        <div class="form_element">
          <i class="fa-solid fa-envelope"></i>
          <input type="text" id="id_email" name = "email" placeholder="Email" />
        </div>
        <div class="form_element">
          <i class="fa-solid fa-circle-question"></i
          ><input
            type="text"
            id="id_question"
            name = "question"
            placeholder="One Word Question"
          />
        </div>
        <div class="form_element">
          <i class="fa-solid fa-square-poll-vertical"></i>
          <input type="text" id="id_ans" name= "answer" placeholder="One Word Answer" />
        </div>
        <div class="form_element">
          <i class="fa-solid fa-lock"></i>
          <img src="image/hide_icon.png" id="id_img2" alt="" />
          <input type="password" id="id_pwd" name = "password" placeholder="Password" />
        </div>

        <div class="form_element">
          <i class="fa-solid fa-lock"></i>
          <img src="image/hide_icon.png" id="id_img3" alt="" />
          <input type="password" id="id_rpwd"name = "retype_password" placeholder="Retype Password" />
        </div>
        <div class="form_element">
          <i class="fa-solid fa-phone"></i>
          <input type="number" id="id_contact" name = "contact_number" placeholder="Contact Number" />
        </div>
        <!-- </div class = > -->
        <button class="btn_field" id="btn_submit">Submit</button>
      </form>
    </div>
    </script> 
    <script src="javaScript/index2.js"></script>
  </body>
</html>
