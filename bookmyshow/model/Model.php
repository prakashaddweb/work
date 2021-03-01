<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Alert Boxe</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

include_once('model/dbconnect.php');
 Class Model
 {
  public $con;
   public function Model()
   {

        $obj=new dbconnect();
        $this->con=$obj->connection();

   }

  public function insert_data()
  {

   if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) 
   {

       $name = $_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $query="select * from User where email='$email'";
       $result1=mysqli_query($this->con,$query);
       if($result1->num_rows>0)
       {

               echo "<div class='bs-example'>";
               echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>".
              "user already Exists!!".
              "<button type='button' class='close' data-dismiss='alert'>"."&times;"."</button>".
                "</div>";
                echo "</div>";
              
       }
       else
       {
                $msg="<p style='font-size:15px'>Hello $name.<br>Please Verify Your Account using the below link.<br> www.google.com.</p><br><h4>Thanks.<br>Team TicketGenie</h4>";
                $qry = "insert into User (username,email,password) values('$name','$email','$password')";
                $result = mysqli_query($this->con,$qry);
                if ($result) 
                {
                      //Import PHPMailer classes into the global namespace
                      //These must be at the top of your script, not inside a function
                     
                      //Instantiation and passing `true` enables exceptions
                      $mail = new PHPMailer(true);

                      try 
                      {
                          //Server settings
                         // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                          $mail->SMTPDebug = 0; 
                          $mail->isSMTP();                                            //Send using SMTP
                          $mail->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
                          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                          $mail->Username   = 'apikey';                     //SMTP username
                          $mail->Password   = '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';                               //SMTP password
                          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                          $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                          //Recipients
                          $mail->setFrom('smith27202@gmail.com', 'TicketGenie');
                          $mail->addAddress($email, 'Joe User');     //Add a recipient
                          //$mail->addAddress('yuvraj.addweb@gmail.com');               //Name is optional
                          $mail->addReplyTo('info@example.com', 'Information');
                          $mail->addCC('cc@example.com');
                          $mail->addBCC('bcc@example.com');

                          //Attachments
                         // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                          //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                          //Content
                          $mail->isHTML(true);                                  //Set email format to HTML
                          $mail->Subject = 'Team TicketGenie';
                          $mail->Body    = $msg;
                          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                          $mail->send();
                          echo 'Message has been sent';
                      } 
                      catch (Exception $e) 
                      {
                              echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                      }
                      
                      echo "Insert Data Successfully.";

                }
                else
                {

                   echo "Error...! Not Inserted.";

                } 
          
       }
       
   }
   else
   {

    return "";

   }
  }

  public function login()
  {

    if(isset($_POST['email']) && isset($_POST['password']))
    {

      $email=$_POST['email'];
      $password=$_POST['password'];
      echo $_POST['email'];
      echo $_POST['password'];

      $qry="SELECT * from User where email='$email' && password='$password'";
      $result=mysqli_query($this->con,$qry);

      if(mysqli_num_rows($result)>0)
      {
         //echo "<script>alert('logged')</script>";
         header('location:view/index.php');

      }
      else
      {
        
         header('location:view/sign-in.php');

      }
    }
  }
 }
?>