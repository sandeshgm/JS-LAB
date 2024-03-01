<?php
 if(
    isset($_POST['name']) 
    && isset($_POST['email']) 
    && isset($_POST['gender'])
    )
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
    
    

        // echo "$name <br>";
        // echo "$email <br>";
        // echo "$gender <br>";

    $servername='localhost';
    $username='sandesh';
    $password='#@sandesh1721@#';
    $dbname='users';
    $conn= mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){
        echo "Connection error:". $conn->connect_error;
    }
    else{
        echo "Connection is created successfully";
        $query = "INSERT INTO CUSTOMER(name,email,gender)VALUES(?,?,?)";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('sss',$name,$email,$gender);
        $stmt->execute();
        header("Location: http://localhost/LABJS/index.php");
    }
   
    
 }
?>