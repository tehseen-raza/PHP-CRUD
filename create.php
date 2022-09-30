<?php

include 'connection.php';

if (isset($_POST['submitBtn'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $msg = $_POST['message'];

    $query = "INSERT INTO crud (Name, Phone, Email, City, Message) VALUES ('$name', '$phone', '$email', '$city', '$msg')";

    $formData = mysqli_query($conn, $query);

    if ($formData) {
?>
        <script type="text/javascript">
            alert('Data Saved Successfully.');
            window.location.href = 'http://localhost:8080/php-programs/crud/index.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Something Went Wrong! Please Try Again!');
            window.location.href = 'http://localhost:8080/php-programs/crud/index.php';
        </script>
<?php
    }
}
?>