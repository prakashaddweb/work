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

                $qry = "insert into User (username,email,password) values('$name','$email','$password')";
                $result = mysqli_query($this->con,$qry);
                if ($result) 
                {

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