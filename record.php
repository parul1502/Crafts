<!DOCTYPE html>
<html>
<body>
 <form class="modal-content animate" name="loginkaro"name="form1" method="post" id="reset" action="authenticate1.php">
<h1>Login to Buy</h1> 
  <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required size="30"><br><br>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>
     
       <input type="Submit" name="loginkaro" value="Login" style="height: 30px; width: 110px"> <br><br>
       <input type="checkbox" checked="checked style="height: 20px; width: 70px""> Remember me
</form>

<script>
    if (confirm("details has been recorded to buy product login!") == true) {
        header("Location: index.php");
    }
</script>

</body>
</html>
