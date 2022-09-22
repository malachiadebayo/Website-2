<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
</head>
<body>
    <h1>Thank you <?php echo $_POST["YourName"];?> </h1>
    <p>
        Your comments have been noted below
        <br>
        <?php echo $_POST["YourComments"];?>

    </p>
    <p>
        We send you a further reply at <?php echo $_POST["YourEmail"];?>
    </p>

    <p>
        Your colour choice of <?php echo $_POST["YourColor"]?> is a nice one.
    </p>
    <div style="width:400px; height:200px; background-color:<?php echo $_POST["YourColor"]?>;">
                    <p><b><?php echo $_POST["YourColor"]?></b></p>
    </div>
</body>
</html>