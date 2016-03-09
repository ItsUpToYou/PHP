<?php
session_start();
session_destroy();
header ('Location: index.php');
exit;

?>
<?php
include 'A/footer.php';
?>
<? ob_flush(); ?>