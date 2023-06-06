var id_img1 = document.getElementById("id_img1");
var id_pwd1 = document.getElementById("id_pwd1");
var id_user1 = document.getElementById("id_user1");
var btn_submit = document.getElementById("btn_submit");
var btn_register = document.getElementById("btn_register");


id_img1.onclick = function () {
  if (id_pwd1.type == "password") {
    id_pwd1.type = "text";
    id_img1.src = "image/show_icon.png";
  } else {
    id_pwd1.type = "password";
    id_img1.src = "image/hide_icon.png";
  }
};

function loginValid()
{
  if(id_user1.value.trim() == "" || id_pwd1.value.trim() == "" )
  {
    alert("Please, Enter all credentials!!")
    return false;
  }
  else
  return true;

}


  




