<?php
   require_once('layers/template_header.php');
?>
    <div class="header">
        <div class="titre">
            <div class="text">
                <h1>
                    PROJECTS
                </h1>
            </div>
            <img loading="lazy" class="tete" src="../images/sun.jpg" alt="soleil">
        </div>
    </div>
    <div class="content">
        <div class="info">
            <div class="hobbies">
                <div class="hobbie">
                    <img loading="lazy" class="" src="../images/favicon.ico" alt="soleil">
                    <h2>
                        FAIRFAIR WEB
                    </h2>
                </div>
                <div class="hobbie">
                    <img loading="lazy" class="" src="../images/logo.png" alt="soleil">
                    <h2>
                        BOIS ET SOLAIRE
                    </h2>
                </div>
            </div>
        </div>
        <?php
            require_once('layers/template_menu.php');
            renderMenuToHTML('projets');
        ?>
    </div>
<?php
   require_once('layers/template_footer.php');
?>