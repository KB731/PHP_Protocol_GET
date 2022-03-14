<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['ville']) && isset($_GET['pays']))
        {
?>
        <h3>
            Je suis actuellement à <?php echo $_GET['ville']; ?> qui se situe en <?php echo $_GET['pays']; ?> 
        </h3>
<?php       
        } else {
            echo "Erreur";
        }
?>

        
    
</body>
</html>