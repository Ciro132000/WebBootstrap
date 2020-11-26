<?php
    session_start();
    if(!empty($_SESSION['Usuario'])){
        session_destroy();
    }elseif(!empty($_SESSION['Usuario2'])){
        session_destroy();
    }
?>
<script type="text/javascript">
    window.location.href="Ingresar/index.php"
</script>