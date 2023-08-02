<?php

session_start();
if (isset($_SESSION['access_token'])) {

    // Reset OAuth access token
    header('location:Sign In With Google\logout.php');
}
session_destroy();
// header('location:login.php');
?>
<script>
    location.replace("index.php");
</script>
<?php

?>