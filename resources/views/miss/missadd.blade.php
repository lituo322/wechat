<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>登陆</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.
">
<link rel="stylesheet" href="lib/weui.min.css">
<link rel="stylesheet" href="css/jquery-weui.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body ontouchstart style="background:#323542;">
<!--主体-->
<div class="login-box">
  	<div class="lg-title">欢迎使用hAdmin</div>
    <div class="login-form">
    	<form action="#" >
         <meta name="csrf-token" content="{{ csrf_token() }}">

        	<div class="login-user-name common-div">
                <input type="type" name="user_name" id="user_name" value="" placeholder="请输入您的用户名" />        
            </div>
            <div class="login-user-pasw common-div">
            	<span class="pasw-icon common-icon">
                	<img src="images/password.png" />
                </span>
                <input type="password" name="user_pwd" id="user_pwd" value="" placeholder="请输入您的密码" />        
            </div>
           <tr>
                <td>
                  <input type="button" class="login-oth-btn common-div" value="登录" id="dd">
                </td>
            </tr>
        </form>
    </div>
</div>
<script src="lib/jquery-2.1.4.js"></script> 
<script src="lib/fastclick.js"></script> 
<script type="text/javascript" src="js/jquery.Spinner.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
$('#dd').on('click',function(){
    var user_name=$('#user_name').val();
    var user_pwd=$('#user_pwd').val();
    $.ajax({
      headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
     url:"missadd",
     data:{user_name:user_name,user_pwd:user_pwd},
     type:"POST",
     dataType:'json',
     success:function(data){
        if(data.err==1){
            alert(data.msg);
            location.href="/missindex";
        }else{  
                alert(data.msg);
            }
        }
       
     

    },'json')
})

</script>