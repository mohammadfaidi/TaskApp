<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<title>Login form</title>
</head>

<body>
	<form method="post">
<table width="600" align="center" border="1" cellspacing="5" cellpadding="5"  class="table table-dark" >

  <tr>
    <td>Enter ID </td>
    <td><input type="text" name="id"class="form-control" id="exampleInputEmail1" aria-describedby="idhelp" placeholder="Enter ID"/></td>
 </tr>
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" /></td>
 </tr>

 <tr>
    <td width="230">Enter Your Password </td>
    <td width="329"><input type="password" name="pass"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password"/></td>
  </tr> 
   <tr>
    <td colspan="2" align="center">
	<input type="submit" name="login" value="Login"class="btn btn-primary"/></td>
  </tr>

  <tr>
    <td colspan="1" align="center">
	<input type="submit" name="delete" value="Delete"/ class="btn btn-danger"></td>
  <td colspan="2" align="center">
	<input type="submit" name="update" value="update" class="btn btn-warning"/>
</td>
  </tr>

  

  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="read" value="Read All"class="btn btn-primary"/></td>
  </tr>
</table>

	</form>

  <img src="https://images.pexels.com/photos/574073/pexels-photo-574073.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-fluid" alt="Responsive image">

</body>
</html>