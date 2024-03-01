<?php
$connection = mysqli_connect("localhost","sandesh","#@sandesh1721@#","users");
$query1 = "Select * from customer";
$result1 = mysqli_query($connection,$query1);
$row1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);
// var_dump($row1);

$query2 = "select count(*) as count from customer;";
$result2 = mysqli_query($connection,$query2);
$row2= mysqli_fetch_all($result2,MYSQLI_ASSOC);
// var_dump($row2);

$query3 = "select gender,count(*) as count from customer group by gender having gender in('male','female');";
$result3 = mysqli_query($connection,$query3);
$row3= mysqli_fetch_all($result3,MYSQLI_ASSOC);
// var_dump($row3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
   <style>
    table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
    }
    th,td{
        padding: 10px;
    }
    th{
        background-color: skyblue;
        font-size: 20px;
        color: red;
    }
    td{
        background-color: blanchedalmond;
        color:black;
    }
    a{
        text-decoration: none;
        color: black;
    }
   </style>
</head>
<body>
     <div>
        <table>
            <tbody>
                <tr>
                    <td>Total no. Name</td>
                    <td><?php echo $row2[0]['count'];?></td>
                </tr>
                <?php
            for($i = 0; $i <count($row3) ;$i++){
                echo "<tr>
                <td>Total no.of {$row3[$i]['gender']} customer</td>
                <td>{$row3[$i]['count']}</td>
                </tr>.<br>";
            }
            ?>
            </tbody>
        </table><br>
       
</div>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($row1 as $data)
                echo"<tr>
            <td>{$data['id']}</td>
            <td>{$data['NAME']}</td>
            <td>{$data['EMAIL']}</td>
            <td>{$data['GENDER']}</td>
            <td>
            <a href='delete.php?id=$data[id]'>Delete</a>
            <a href='edit.php?id=$data[id]'>Edit</a>
            </td>
            </tr>"
            ?>
        </tbody>
    </table>

</body>
</html>