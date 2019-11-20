<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "elite");

if ($conn) {

    if (isset($_POST['register'])) {

        $email = $_POST['register']['email'];
        $name = $_POST['register']['name'];
        $password = $_POST['register']['password'];

        $email = stripslashes($email);
        $name = stripslashes($name);
        $password = stripslashes($password);
        $email = mysql_real_escape_string($email);
        $name = mysql_real_escape_string($name);
        $password = mysql_real_escape_string($password);
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO admins(email,name,password,role) VALUES('$email','$name','$hash',0)";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['login'])) {
        $email = $_POST['login']['email'];
        $password = $_POST['login']['password'];
        $sql = "SELECT id,name,email,password,role FROM admins WHERE email='$email'";
        $processQuery = mysqli_query($conn, $sql);

        if (mysqli_num_rows($processQuery) == 1) {
            $row = mysqli_fetch_assoc($processQuery);
            if (password_verify($password, $row["password"])) {
                $_SESSION['admin'] = $row;
                echo "Authenticated";

            } else {
                echo "Invalid password";

            }
        } else {
            echo "This email is not registered";
        }

    } elseif (isset($_POST['hostel'])) {
        $name = $_POST['hostel']['name'];
        $total_capacity = $_POST['hostel']['capacity'];
        $sql = "INSERT INTO hostels(name,total_capacity) VALUES('$name','$total_capacity')";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['updatehostel'])) {
        $id = $_POST['updatehostel']['id'];
        $name = $_POST['updatehostel']['name'];
        $capacity = $_POST['updatehostel']['capacity'];
        $occupied = $_POST['updatehostel']['occupied'];

        $sql = "UPDATE hostels SET name='$name',occupied_rooms='$occupied',total_capacity='$capacity' WHERE id='$id'";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['deletehostel'])) {
        $id = $_POST['deletehostel']['id'];

        $sql = "DELETE FROM hostels WHERE id='$id'";
        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['student'])) {
        $id = $_POST['student']['id'];
        $name = $_POST['student']['name'];
        $hostel = $_POST['student']['hostel'];
        $fee_cleared = $_POST['student']['fee_cleared'];

        $sql = "INSERT INTO students(id,name,hostel,fee_cleared) VALUES('$id','$name','$hostel','$fee_cleared')";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['updatestudent'])) {
        $id = $_POST['updatestudent']['id'];
        $name = $_POST['updatestudent']['name'];
        $hostel = $_POST['updatestudent']['hostel'];
        $fee_cleared = $_POST['updatestudent']['fee'];

        $sql = "UPDATE students SET id='$id',name='$name',hostel='$hostel',fee_cleared='$fee_cleared' WHERE id='$id'";

        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['deletestudent'])) {
        $id = $_POST['deletestudent']['id'];

        $sql = "DELETE FROM students WHERE id='$id'";
        $processQuery = mysqli_query($conn, $sql);
        if ($processQuery) {
            echo true;
        } else {
            echo false;
        }

    } elseif (isset($_POST['logout'])) {

        unset($_SESSION['admin']);
        $dest = session_destroy();
        echo $dest;

    }

} else {
    echo "CONNECTION TO THE DB FAILED";

}
