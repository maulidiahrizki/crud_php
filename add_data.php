<?php
    require_once "config.php";
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $grade = $_POST['grade'];
        $marks = $_POST['marks'];

        if($name != "" && $grade != "" && $marks != "" ){
            $sql = "INSERT INTO results ( name, grade, marks) VALUES ('$name', '$grade', $marks)";
            if (mysqli_query($conn, $sql)) {
                header("location: form.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Name, Class and Marks cannot be empty!";
        }
    }
?>