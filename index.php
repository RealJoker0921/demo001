<?php
    include 'new.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="example2.php">Go to Next Page</a>
    <h2>Username: <?php echo $username ?></h2>
    <h2>User ID: <?php echo $user_id ?></h2>
    <h2>Name: <?php echo $firstName?></h2>
    <h2>SurName: <?php echo $surName?></h2>
    <button type="button" onclick="GreetUser()">Greet User</button>

    <script>

        var username = "<?php echo $username ?>";
        var userID = "<?php  echo $user_id ?>";
        var firstName = "<?php echo $firstName ?>";
        var surname = "<?php echo $surName ?>";

        function GreetUser(){
            alert("Hello " + firstName + " "+ surname + " Your Username is " + username + " and Your User ID is "+ userID)
        }
    
    </script>
    
</body>
</html>