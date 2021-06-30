<?php include 'sqlicon_con.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = $_GET['uid'];
$query = "SELECT * From marksheet WHERE $id;";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$subject = $row['subject'];
$mark = $row['mark'];


if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $subject =  $_POST['subject'];
    $mark = $_POST['mark'];
    $id = $_GET['uid'];

    $udQuery = "UPDATE marksheet SET id=$id, name='$name',subject='$subject', mark=$mark WHERE id=$id;";




    $run = mysqli_query($conn, $udQuery);



    if (!$run) {
        echo "<script>alert('something wrong')</script>";
        // header('Location: student_detail.php');

    } else {
        // echo "<script>alert('updated')</script>";
        header('Location: student_detail.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update form</title>
    <style>
        input {
            padding: 10px 20px;
            margin: 10px auto;
            display: flex;
            justify-content: center;
        }
    </style>

</head>

<body style="text-align: center;">
    <h2> Update form </h2>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="enter your name" value='<?php echo $name ?> ' />
        </div>
        <div>
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="enter your subject" value='<?php echo $subject ?> ' />
        </div>
        <div>
            <label for="mark">Mark</label>
            <input type="text" name="mark" placeholder="enter your mark" value='<?php echo $mark ?>' />
        </div>

        <input type="submit" name="submit" value="submit" />



    </form>


</body>

</html>