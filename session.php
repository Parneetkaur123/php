<?php
session_start();
$_SESSION["favcolor"]= "orange";
echo "session variable is set<br>";
print_r($_SESSION);
?>
<?php
session_unset($_SESSION["favcolor"]);
print_r($_SESSION);
session_destroy();
?>



