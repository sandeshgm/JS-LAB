<?php
if (
    isset($_GET['id']) 
    // isset($_POST['name']) &&
    // isset($_POST['email']) &&
    // isset($_POST['gender'])
) {
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $gender = $_POST['gender'];
    $id = $_GET['id'];

    $servername = 'localhost';
    $username = 'sandesh';
    $password = '#@sandesh1721@#';
    $dbname = 'users';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "Connection error:" . $conn->connect_error;
    } else {
        echo "Connection is created successfully";
        $query = "DELETE FROM  CUSTOMER WHERE id = ?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        header("Location:index.php"); // Specify the URL to redirect to after updating
        exit(); // Always exit after header redirect
    }
}
?>
