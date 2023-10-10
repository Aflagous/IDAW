<?php
   require_once('layers/template_header.php');
?>
    <div class="header">
        <div class="titre">
            <div class="text">
                <h1>
                    GRATENS Baptiste
                </h1>
                <h2>L'heure courante est : <?php echo date('H:i:s'); ?></h2>
            </div>
            <img loading="lazy" class="tete" src="../images/sun.jpg" alt="soleil">
        </div>
    </div>
    <div class="content">
        <div class="vie">
            <h2> Ma vie:</h2>
            <p>Je suis un étudiant en école d'ingénieure à l'IMT Nord Euorpe</p>
        </div>
        <?php
            require_once('layers/template_menu.php');
            renderMenuToHTML('index');
        ?>
    </div>
    
    <?php
   require_once('layers/template_footer.php');
?>