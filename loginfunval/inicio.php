<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login.php");
}

?>
<HTML>
    <head>
        <title>Pagina de inicio:PHP</title>
    </head>

    <body>
        <h1>Bienvenidos al Himalaya.... Helado? </h1>
        <?php echo $_SESSION['username']; ?>
        <br/>
        <a href="perfil.php?id=<?php echo $_SESSION['id']; ?>" > Mi perfil </a>
        <br/>
        <a href="logout.php">Salir</a>
    </body>
</HTML>