var userLogin=false;
var currentUser="";
var previousUser="";
if(!userLogin){
  $("#username").html("Enter Username");
  $("#logoutBtn").css("display","none");
}

$("#chatRoom").submit((e)=>{

  e.preventDefault();

  var values = $("#chatRoom").serialize();

  $.ajax({
    url:"process.php",
    type:"post",
    data:values
  }).done((reponse)=>{
    var data = JSON.parse(reponse);
    currentUser=data.username;
    if(!newUser(currentUser)){
      $(".messages").append("<li>"+data.message+"</li>");
    }else {
      $("#username").html("<h2>"+"User: "+data.username+"</h2>");
      $(".messages").append("<h3>"+"User: "+data.username+"</h3>");
      $(".messages").append("<li>"+data.message+"</li>");
      $("#logoutBtn").css("display","block");
    }
    userLoing=true;
  })
})
function newUser(nUser){
  if(nUser==previousUser){
    return false;
  }else{
    previousUser=nUser;
    return true;
  }
}
function logout(){
  $("#username").html("Enter Username");
  $("#logoutBtn").css("display","none");
}
