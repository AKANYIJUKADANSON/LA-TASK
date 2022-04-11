<?php
    // Calling the coonection file
    require_once('../conn.php');

    ############---REGISTRATION---#############
    if(isset($_POST['register'])){

        $name = $_POST['fname'];
        $company = $_POST['company'];
        $telno = $_POST['telNo'];
        $email = $_POST['email'];
        $to_sha1 = $_POST['password'];
        // To sha1
        $passwd = sha1($to_sha1);

        echo $name, $company, $telno, $email, $passwd;

        // TODO:----------------Creating the ID letter plus digits


        // Storing data to the database
        $store = "INSERT INTO client (`Name`, `Company`, `Mobile`, `Email`, `Password`) VALUES ('$name', '$company', '$telno', '$email', '$passwd')";

        $query = mysqli_query($conn, $store);
        if ($query) {
            echo"</br>";
            echo "Account created successfully";
        } else {
            echo"</br>";
            echo "Account not created";
        }
        
    }










    ####################---LOGIN---#####################
    if(isset($_POST['login'])){

        // Determining the table
        $table = $_POST['role'];

        // Capturing user details
        $uEmail = $_POST['email'];
        $plaintxt = $_POST['password'];
        // To sha1
        $uPasswd = sha1($plaintxt);

        // echo $table, $email, $passwd;

        // Retrieving data for comparison
        $retrieve = "SELECT * FROM $table where Email = '$uEmail' ";
        $loginQuery = mysqli_query($conn, $retrieve);
        $rows = mysqli_fetch_assoc($loginQuery);

        $dbemail = $rows['Email'];
        $dbpasswd = $rows['Password'];

        if ($uEmail == $dbemail && $uPasswd == $dbpasswd) {

            // Saving the logged in persons details
            $_SESSION['email'] = $uEmail;
            header('location: ../dashboard.html');

        }else{
            echo "Wrong password or Email ID";
        }   
    }
?>