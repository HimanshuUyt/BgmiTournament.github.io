<?php
    $servername="sql202.infinityfree.com";
    $username= "if0_35401440";
    $password= "K4tZsu8xifwTfAf";
    $dbname= "if0_35401440_bgmitournament";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if(!$conn)
    {
        die("Connection Failed:" . mysqli_connect_error());
    }

    if(isset($_POST['submit']))
    {
        $bgmiuid = $_POST['bgmiuid'];
        $bgmiusername = $_POST['bgmiusername'];
        $phoneno = $_POST['phoneno'];
        $description = $_POST['descriptions'];

        $sql_query = "INSERT INTO bgmimaster (bgmiuid,bgmiusername,phoneno ,descriptions) 
        VALUES ('$bgmiuid','$bgmiusername','$phoneno','$description')";

        if(mysqli_query($conn, $sql_query))
        {
              
        }
        else
        {
            echo "Error" . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou</title>
    <link rel="stylesheet" href="css/details_entry.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body class="main">
    <h1 style="text-align: center;color: white;">THANKYOU FOR ENTRY</h1>
    <div class="info">
        <h3 style="text-align: center;color: white;">ROOM ID AND PASSWORD GIVING IN 30 MINUTES BEFORE IN WHATSAPP GROUP</h3>
        <h4 style="text-align: center;color: white;">When You Send Entry fee ScreenShort, You will Added in Group 😊</h4>
    </div>
</body>
</html>