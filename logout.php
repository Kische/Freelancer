<?php

session_start();

ob_start();

session_destroy();

echo "<center>Cikis Yaptiniz. Ana Sayfaya Yonlendiriliyorsunuz.</center>";

header("Refresh: 1; url=index.php");

ob_end_flush();

?>