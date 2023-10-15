<?php
    require_once("layers/template_header.php");
    require_once("layers/template_menu.php");
    $currentPageId = 'index';
    $defaultLang = 'fr';
    $currentLang = isset($_GET['lang']) ? $_GET['lang'] : $defaultLang;
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    $pageToInclude =  '?page=' . $currentPageId;
 ?>

<?php
   $pageToInclude = $currentLang . "/" . $currentPageId . ".php";
   echo '<div class="total">';
      renderMenuToHTML($currentPageId, $currentLang);
      if(is_readable($pageToInclude))
         require_once($pageToInclude);
   echo '</div>';
?>


<a class="lien" href="index.php?page=<?php echo $currentPageId; ?>&lang=en">Anglais</a>
<a class="lien" href="index.php?page=<?php echo $currentPageId; ?>&lang=fr">Francais</a>



<?php
require_once("layers/template_footer.php");
?>