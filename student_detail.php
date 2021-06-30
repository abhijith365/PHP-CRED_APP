<?php include "sqlicon_con.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            margin: 10px 0;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        a {
            text-decoration: none;
            color: white;
            font-size: 18px;
        }
    </style>
</head>
<!-- data from database -->
<?php
$query = "SELECT * FROM marksheet;";

$result = mysqli_query($conn, $query);
?>

<body style="text-align: center;">
    <div>
        <h1>student detail</h1>
        <button class="btn"><a href="index.php">Add new Student</a></button>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Mark</th>
                <th>Date</th>
                <th>Operation</th>
            </tr>


            <?php foreach ($result as $value) : ?>

                <tr>
                    <?php
                    $id = $value['id'];
                    $name = $value['name'];
                    $subject = $value['subject'];
                    $mark = $value['mark'];
                    $date = $value['date'];

                    ?>

                    <td> <?php echo $id ?> </td>
                    <td> <strong><?php echo $name ?> </strong> </td>
                    <td> <?php echo $subject ?> </td>
                    <td> <?php echo $mark ?> </td>
                    <td> <?php echo $date ?> </td>
                    <td> <a href="update.php?uid=<?php echo $id ?>"><button>Update</button></a>
                        <a href="delete.php?id=<?php echo $id ?>"><button> Delete </button></a>
                    </td>
                </tr>

            <?php endforeach ?>


        </table>

    </div>



</body>

</html>














































<!-- <?php

// $conn = mysqli_connect('localhost', 'root', "", 'students');

// //create query
// $query = "SELECT * FROM marksheet";

// // get result
// $result = mysqli_query($conn, $query);

// var_dump($result);

// echo "<br>";
// echo "<br>";

// //fetch data
// $fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);

// var_dump($fetch);
// echo "<br>";
// echo "<br>";

// //free result

// mysqli_free_result($result);
// echo "<br>";
// echo "<br>";


// mysqli_close($conn); -->
