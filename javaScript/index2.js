
var id_fname = document.getElementById("id_fname");
var id_lname = document.getElementById("id_lname");
var id_uid = document.getElementById("id_uid");
var id_email = document.getElementById("id_email");
var id_question = document.getElementById("id_question");
var id_ans = document.getElementById("id_ans");

var id_contact = document.getElementById("id_contact");
var id_img2 = document.getElementById("id_img2");
var id_img3 = document.getElementById("id_img3");


var id_pwd = document.getElementById("id_pwd");
var id_rpwd = document.getElementById("id_rpwd");


id_img2.onclick = function () {
    if (id_pwd.type == "password") {
      id_pwd.type = "text";
      id_img2.src = "image/show_icon.png";
    } else {
      id_pwd.type = "password";
      id_img2.src = "image/hide_icon.png";
    }
  };

  
  id_img3.onclick = function () {
    if (id_rpwd.type == "password") {
      id_rpwd.type = "text";
      id_img3.src = "image/show_icon.png";
    } else {
      id_rpwd.type = "password";
      id_img3.src = "image/hide_icon.png";
    }
  };



  

// btn_register.onclick = function()
// {
//     alert("register")

// }

// btn_login.onclick = function()
// {
//     alert("Clicked on login");
//     validator()
// }



function validator()
{

    var str_email = id_email.value.trim();
    var str_userid = id_uid.value.trim();

    

   var pattern  = /^[0-9a-zA-Z_]+$/;

     
    if(id_fname.value.trim() == "")
     {
            alert("First Name cann't be Empty");
            return false;
     }
    else if(id_lname.value.trim() == "")
    {
        alert("Last Name cann't be Empty");
        return false;
    }
    else if(str_userid == "")
    {
        alert("User Id cann't be Empty");
        return false;
    }
    else if(!pattern.test(str_userid))
    {
        alert("Please Enter Valid UserId")
        return false;
    }
    else if(!(str_email.includes("@gmail.com") ))
    {
        alert("Please Enter Valid Email");
        return false;
    }
    else if( str_email.length < 11)
    {
        alert("Please Enter Valid Email")
            return false;
    }
    else if(id_question.value.trim() == "")
    {
        alert("Question cann't be Empty");
        return false;
    }

    else if(id_question.value.trim().includes(" ") == true)
    {
        alert("Please Enter Valid Question");
        return false;
    }

    else if(id_ans.value.trim() == "")
    {
        alert("Answer cann't be Empty");
        return false;
    }
    else if(id_ans.value.trim().includes(" ") == true)
    {
        alert("Please Enter Valid Answer");
        return false;
    }
    else if(id_pwd.value.trim() == "")
    {
        alert("Password cann't be Empty");
        return false;
    }
    else if(id_pwd.value.length < 8)
    {
        alert("Password Length Should be minimum 8 ");
    }
    else if(id_rpwd.value.trim() == "")
    {
        alert("Retype Password cann't be Empty");
        return false;
    }
    else if(id_rpwd.value.length < 8)
    {
        alert("Retype Password Length Should be minimum 8");
        return false;
    }

    else if(id_pwd.value != id_rpwd.value)
    {
        alert("Password doesn't match");
        return false;
    }
    else if(id_contact.value.length != 10)
    {
        alert("Contact Number should be of 10 digit");
        return false;
    }
    else if(id_contact.value == null)
    {
        alert("Contact Number should not be null");
        return false;
    }
    else
    {
        return true;
    }
    

}