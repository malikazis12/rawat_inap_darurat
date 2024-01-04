<?php
session_start();
session_destroy();

setcookie("cid",$id, time() - (60*60*24*30), "/");
setcookie("cnama",$nama, time() - (60*60*24*30), "/");
setcookie("cemail",$email, time() - (60*60*24*30), "/");
?>
<script>
    document.location="login.php";
</script>