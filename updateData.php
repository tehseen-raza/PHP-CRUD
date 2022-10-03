<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Updata Existing Data</title>
</head>

<body>

    <?php
    include 'connection.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM crud WHERE ID='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <div class="innerContainer">
            <h1 class="main_Heading">Update Your Details</h1>
            <form action="" method="POST">
                <div style="display: flex; align-items: center; gap: 30px;">
                    <input style="width: 50%;" type="text" value="<?php echo $row['Name'] ?>" placeholder="Enter Name" name="name">
                    <input style="width: 50%;" type="tel" value="<?php echo $row['Phone'] ?>" placeholder="Enter Phone Number" name="phone">
                </div>
                <div style="display: flex; align-items: center; gap: 30px; margin-top: 30px;">
                    <input style="width: 50%;" type="email" value="<?php echo $row['Email'] ?>" placeholder="Enter Email Address" name="email">
                    <input style="width: 50%;" type="text" value="<?php echo $row['City'] ?>" placeholder="Enter Your City" name="city">
                </div>
                <textarea name="Message" rows="8" placeholder="Enter Message"></textarea>

                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <button class="submitBTN" type="submit" name="updateBtn">Update Record</button>
                    <a class="viewRecords" href="view.php">Go Back</a>
                </div>
            </form>
        </div>
    </div>

    <?php

    if (isset($_POST['updateBtn'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        // $msg = $_POST['message'];



        $query = "UPDATE crud SET Name='$name', Phone='$phone', Email='$email', City='$city' WHERE ID='$id'";

        $data = mysqli_query($conn, $query);

        if ($data) {
    ?>
            <script type="text/javascript">
                alert('Data Updated Successfully.');
                window.location.href = 'http://localhost:8080/php-programs/crud/view.php';
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert('Something Went Wrong! Please Try Again!');
                window.location.href = 'http://localhost:8080/php-programs/crud/view.php';
            </script>
    <?php
        }
    }
    $conn->close();
    ?>







</body>

</html>