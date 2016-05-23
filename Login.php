<html>
<head>
 

</head>
<body>
<?php 

  include("connection.php");
  $Bool= 0;
  if (isset($_POST['login'])) {
    $email=$_POST["email"];
    $pass=$_POST["pass"];
     
          include 'connection.php';
          if ($conn->connect_error) {
          die("Connection error".$conn->connect_error);
           }
         $sql="SELECT * FROM users";//email='$email' AND pass='$pass'";
         $result=$conn->query($sql);
          if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if ($email==$row['email'] and $pass==$row['pass']){
               
                $j = $row['email'];
                if($j=='admin@mail.ru') {
                  header("location: /PROJEECT/CRUD.php");
                }
                else
                  header("Location: /PROJEECT/energy2.php ");

                $Bool = 1;  
            }}}
          $Bool = 2;         
       }


 ?>



          <h1 >Log in</h1>
          <br>
          <?php 
            if($Bool==2){

            echo "<h4>You have not registrated</h4>";
            }
           ?>
          <form role="form" method="post" onsubmit="login()" name ="frm"> 
            <div>
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Your email" name="email">
            </div>
            <div >
              <label for="password">Password:</label>
              <input type="password" name="pass" class="form-control" id="password" placeholder="Your pasword">
            </div>
            
            <input type="submit" class="btn btn-info" onclick="Validate()" name="login">
            <br>
           Haven't registered?<br>
              <form>
                <input type="button" class="btn btn-info" value="Sign in" onClick='location.href="Register.php"'>
              </form>
          </form>
   

<script type="text/javascript">
    function Validate(){
  if(document.forms['frm'].email.value == "")
  {
    alert("Please, fill the blanks below.");
    return false;
  }
    return true;
}
</script>
</body>
</html>