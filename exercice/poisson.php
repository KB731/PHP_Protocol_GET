<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<style>
    body {
        height: 600px;
        width: auto;
        background: gray;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
    }

    img {
        width : 500px;
        height : 500px;
    }
</style>

<?php
        if (isset($_GET['plat'])) 
        {
?>
            <h3>Vous avez choisi du <?php echo $_GET['plat']?></h3>
            <img src="https://www.japonparis.fr/wp-content/uploads/2021/02/fugu-posson-japonais-toxique.jpg" alt="Poisson"><br>
<?php
        } else {
            echo "Erreur";
        }
?>
    <a href="index.php">Retour à la carte des plats</a>

</body>
</html>