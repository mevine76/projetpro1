<?php
session_start();
require_once '../views/confirmation.php';
?>
<script>
setTimeout(function () {
   window.location.href = "controller_home.php"; //will redirect to your blog page (an ex: blog.html)
}, 5000); //will call the function after 2 secs.
</script>