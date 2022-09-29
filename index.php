<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php CRUD</title>
</head>

<body>
    
    <?php include 'connection.php'; ?>

    <div class="container">
        <div class="innerContainer">
            <h1 class="main_Heading">Enter Your Detail</h1>
            <form action="create.php" method="POST">
                <div style="display: flex; align-items: center; gap: 30px;">
                    <input style="width: 50%;" type="text" placeholder="Enter Name" name="name">
                    <input style="width: 50%;" type="tel" placeholder="Enter Phone Number" name="phone">
                </div>
                <div style="display: flex; align-items: center; gap: 30px; margin-top: 30px;">
                    <input style="width: 50%;" type="email" placeholder="Enter Email Address" name="email">
                    <input style="width: 50%;" type="text" placeholder="Enter Your City" name="city">
                </div>
                <textarea name="message" rows="8" placeholder="Enter Message"></textarea>

                <button class="submitBTN" type="submit">Submit</button>
                <!-- <a class="viewRecords" href="#!">View Existing Records</a> -->
            </form>
        </div>
    </div>
</body>

</html>