<?php
if (
    isset($_POST['id']) &&
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['gender'])
) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $id = $_POST['id'];

    $servername = 'localhost';
    $username = 'sandesh';
    $password = '#@sandesh1721@#';
    $dbname = 'users';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "Connection error:" . $conn->connect_error;
    } else {
        echo "Connection is created successfully";
        $query = "UPDATE customer SET name = ?, email = ?, gender = ? WHERE id = ?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('sssi', $name, $email, $gender, $id);
        $stmt->execute();
        header("Location:index.php"); // Specify the URL to redirect to after updating
        exit(); // Always exit after header redirect
    }
}
?>
