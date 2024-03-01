<?php
$id = $_GET['id'];
// echo $id;
$connection = mysqli_connect("localhost","sandesh","#@sandesh1721@#","users");
$query = "Select * from customer where id=" .$id;
$result  = mysqli_query($connection,$query);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
// var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row[0]['id']?>">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="<?php echo $row[0]['NAME'] ?>" placeholder="Enter your name" required>
        </div><br>

        <div>
        <label for="">Email</label>
            <input type="text" name="email" value="<?php echo $row[0]['EMAIL'] ?>" placeholder="Enter your email" required>
        </div><br>
        <div>
            <label for="">Gender</label>
            <select name="gender" required>
                <option <?php echo $row[0]['GENDER']== 'male' ? 'selected':'' ?> value="male">Male</option>
                <option <?php echo $row[0]['GENDER']== 'female' ? 'selected' : '' ?> value="female">Female</option>
            </select>
        </div><br>
        <button type="submit">Save</button>
    </form>

</body> 
</html>