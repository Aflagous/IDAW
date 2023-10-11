<?php
if(isset($_GET['style'])){
    $style = $_GET['style'];
    setcookie('style', $style, time() + 30*24*60*60);
} else {
    $style = isset($_COOKIE['style']) ? $_COOKIE['style'] : 'style1';
}
?>



<!doctype html>
<html>
   <head>
        <link rel="stylesheet" href="<?php echo $style; ?>.css">    
   </head>
    <body>   
        <h1>Contenu de la page avec le style choisi</h1>
        <form id="style_form" action="index.php" method="GET">
            <select name="style">
                <option value="style1">style1</option>
                <option value="style2">style2</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>
    </body>
</html>


        

