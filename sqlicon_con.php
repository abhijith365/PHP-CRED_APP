<?php

$conn = new mysqli('localhost', 'root', "", 'students');


if (!$conn) {
    echo "Your connection failed please try again " . mysqli_connect_errno();
}
