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
            <h3>Vous avez choisi de la <?php echo $_GET['plat']?></h3>
            <img src="https://static.mamanpourlavie.com/uploads/images/articles.cache/2008/02/02/file_main_image_1456_1_tout_savoir_purees_viande_1456_01_1500X1000_cache_640x360.jpg" alt="Viande"><br>
<?php
        } else {
            echo "Erreur";
        }
?>
    <a href="index.php">Retour à la carte des plats</a>

</body>
</html>