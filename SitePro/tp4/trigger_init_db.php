<?php
    $url = "http://localhost/IDAW/SitePro/tp4/init_db.php";
    $result = file_get_contents($url);
    echo $result;