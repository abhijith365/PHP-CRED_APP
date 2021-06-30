<?php include 'sqlicon_con.php';

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $mark = mysqli_real_escape_string($conn, $_POST['mark']);


    if (empty($name) || empty($subject) || empty($mark)) {
        echo "<script>alert('all column required')</script>";
    } else {
        $query = "INSERT INTO `marksheet`(`name`, `subject`, `mark`) VALUES ('$name','$subject','$mark');";
        $run = mysqli_query($conn, $query);
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
    <title>student form</title>

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
    <h2> student form </h2>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="enter your name" />
        </div>
        <div>
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="enter your subject" />
        </div>
        <div>
            <label for="mark">Mark</label>
            <input type="text" name="mark" placeholder="enter your mark" />
        </div>

        <input type="submit" name="submit" value="submit" />



    </form>


    <a href="student_detail.php"> <button style="padding: 10px 15px;">Student table</button></a>


</body>

</html>