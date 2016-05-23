<?php  
  include 'connection.php';
 if (isset($_POST['submit'])){ 
  $name=$_POST["name"];
  $surname=$_POST["surname"];
  $email=$_POST["email"];
  $pass=$_POST["pass"];
  

        include 'connection.php';
        if ($conn->connect_error) {
          die("Connection error".$conn->error);
          }
           $sql="SELECT Email FROM users ";
           $result=$conn->query($sql);
           $cnt = 0;
            if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if ($email==$row['Email']) {
               $cnt++;
              }         
         }
    }
  
        if($cnt==0){
          $sql="INSERT INTO users(name,surname,email,pass) VALUES ('$name','$surname','$email','$pass')";
          if($conn->query($sql)===TRUE){
            header("Location: /PROJEECT/index.php");
            
          }
      
        $conn->close();}else { echo "Account has already registrated";}
      
  } 
 ?>


   
      <h1>Registration</h1>
          <br>
          <form role="form" method="post">
            <div>
              <label for="name">Name:</label>
              <input type="Name" class="form-control" id="name" placeholder="Your name" name="name" required>
            </div>
            <div>
              <label for="Surname">Surname:</label>
              <input type="Surname"  name="surname" class="form-control" id="Surname" placeholder="Your surname" required>
            </div>
            <div>
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Your email" required>
            </div>
            <div>
              <label for="pwd">Password:</label>
              <input type="password" name="pass" class="form-control" id="pwd" placeholder="Your pasword" required>
            </div>
            <button type="submit" class="btn btn-info" name="submit">Submit</button>
            <br>
            
          
          </form>
    