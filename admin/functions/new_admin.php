
<?php

  /* DATABASE CONNECTION*/


        $db['db_host'] = '127.0.0.1';
        $db['db_user'] = 'u863616108_nds';
        $db['db_pass'] = 'sS8&0TgiIY5';
        $db['db_name'] = 'u863616108_labagua';

      foreach($db as $key=>$value){
          define(strtoupper($key),$value);
      }
      global $connection;
      $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME, 3306);
      if(!$connection){
          die("Cannot Establish A Secure Connection To The Host Server At The Moment!");
      }

      try{
          $db = new PDO('mysql:dbhost=127.0.0.1;dbname=u863616108_labagua;charset=utf8','u863616108_nds','sS8&0TgiIY5');


      }
      catch(Exception $e){

          die('Cannot Establish A Secure Connection To The Host Server At The Moment!');
      }

      /*DATABASE CONNECTION */


  if (isset($_POST['submit'])) {


      //-- Get Employee Data --//
      $email = $_POST['email'];
      

      // CHECK IF EMPLOYEE EMAIL EXISTS //
      
      $sql = "SELECT id FROM admin WHERE email = ?";
      $stmt = $db->prepare($sql);
      $stmt->execute([$email]);


      if ($stmt->rowCount()>0) {
          // email already EXISTS
            echo "Oops...This email already exists!";
            // die();
      }
      else {



      }
      // END OF - CHECK IF EMPLOYEE EMAIL EXISTS //

      $password = password_hash($_POST['password'],PASSWORD_BCRYPT,array('cost'=>12));

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                  echo $emailErr;
                  die();
                  $email = $_POST['email'];
               }
               else {

               }
      //-- Get Employee Data --//


      //-- Insert Data Into DB --//
      $sql = "INSERT INTO admin (email, password)
      VALUES (?,?)";
      //-- Insert Data Into DB --//

      $stmt = $db->prepare($sql);

      try {
        $stmt->execute([$email, $password]);
        
        header('Location:../users.php?success');

      }

       catch (Exception $e) {
          $e->getMessage();
          echo "Error";
      }



      }















?>
