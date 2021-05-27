
$(document).ready(function(){
$("#form").submit(function(e){
    e.preventDefault();
    var token = $("input[name=_token]").val(); // The CSRF token
    var name = $("input[name=name]").val();
    var email = $("input[name=email]").val();
    var phone = $("input[name=phone]").val();
    var bodyMessage = $("textarea[name=message]").val();

    $.ajax({
       type:'POST',
       url:'/contact',
       dataType: 'json',
       data:{_token: token, name:name, email:email, phone:phone, bodyMessage:bodyMessage},
       success:function(data){
          alert(data.success);
       }
    });
});
});