<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户列表</title>
</head>
<body>
<center>
<form action="" method="post" >
@csrf
<input type="submit" value='提交'></br>

<table border="1">
<tr>
   <td>用户昵称</td>
   <td>用户性别</td>
   <td>用户省份</td>
   <td>市</td>
</tr>
@foreach($dtinfo as $v)
<tr>
   <td>{{$v['nickname']}}</td>
   <td>{{$v['sex']}}</td>
   <td>{{$v['province']}}</td>
   <td>{{$v['city']}}</td>

</tr>

@endforeach
</table>
</form>
	
</body>
</html>