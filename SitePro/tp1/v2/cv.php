<?php
   require_once('layers/template_header.php');
?>
    <div class="header">
        <div class="titre">
            <div class="text">
                <h1>
                    CV
                </h1>
            </div>
            <img loading="lazy" class="tete" src="../images/sun.jpg" alt="soleil">
        </div>
    </div>
    <div class="content">
        <div class="info">
            <div class="hobbies">
                <div class="hobbie">
                    <div class="boite"><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div></div>
                    <h2>
                        Grand
                    </h2>
                </div>
                <div class="hobbie">
                    <div class="boite"><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div></div>
                    <h2>
                        Fort
                    </h2>
                </div>
                <div class="hobbie">
                    <div class="boite"><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div><div class="boiboite"></div></div>
                    <h2>
                        Intelligent
                    </h2>
                </div>
            </div>
        </div>
        <?php
            require_once('layers/template_menu.php');
            renderMenuToHTML('cv');
        ?>
    </div>
<?php
   require_once('layers/template_footer.php');
?>