<html>
  <table width="800px" height="300px" border="1" align="center">
    <tr height="100px">
      <td align="right">
        <img src="logo.png" alt="" align="left" />
        <a href="home.html"> Home</a> | <a href="login.html"> Login</a> |
        <a href="registration.html"> Registration</a>
      </td>
    </tr>
    <tr height="100px">
      <td><h1>Welcome to xCompany</h1></td>
    </tr>
    <tr height="100px">
      <td align="center">Copyright &copy; 2017</td>
    </tr>
  </table>
</html>
<fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="logcheck.php" method="POST">
        <table>
            <tr>
                <td>User Name</td>
				<td>:</td>
                <td><input type="text" name="userName"></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <hr />
		<input name="remember" type="checkbox">Remember Me
		<br/><br/>
        <input type="submit" name="submit" value="Submit">     

		<a href="forgot_password.html">Forgot Password?</a>
    </form>
</fieldset>
<fieldset>
    <legend><b>FORGOT PASSWORD</b></legend>
    <form action="forgot_passwordCheck.php" method="POST">
		Enter Email:
        <input type="text" name="email"/>
        <hr />
        <input type="submit" name="submit "value="Submit" />
    </form>
</fieldset>