<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="script.php" method="POST">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter your name" required>
        </div><br>

        <div>
        <label for="">Email</label>
            <input type="text" name="email" placeholder="Enter your email" required>
        </div><br>
        <div>
            <label for="">Gender</label>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div><br>
        <button type="submit">Save</button>
    </form>

</body> 
</html>