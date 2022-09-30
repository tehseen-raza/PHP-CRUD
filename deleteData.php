<?php
include 'connection.php';
$id = $_GET['id'];
$deleteQuery = "DELETE FROM crud WHERE id='$id'";
$result = mysqli_query($conn, $deleteQuery);

if ($result) {
?>
    <script type="text/javascript">
        alert('Data Updated Successfully.');
        window.open('http://localhost:8080/php-programs/crud/view.php', '_self');
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert('Something Went Wrong! Please Try Again!');
    </script>
<?php
}


?>