<?php 
    $con = mysqli_connect("localhost","root","","book_db");

    if(!$con){
        die("Error when Connectiong".mysqli_error($con));
    } else{

        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $location = $_POST['location'];
            $guests = $_POST['guests'];
            $arrivals = $_POST['arrivals'];
            $leaving = $_POST['leaving'];

            $query = "INSERT INTO `book_form` (`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`)
                                   VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals', '$leaving')";


        if(empty($name) || empty($email) || empty( $phone) || empty($address) || empty($location) || empty($guests) || empty($arrivals) || empty($leaving)){
            header("Refresh:0; url=book.php");
        }else {
            $result = mysqli_query($con,$query);
            if($result){
                header('location:book.php');
            }else{
                die(mysqli_error($con));
            }
        }
        }
    }
?>