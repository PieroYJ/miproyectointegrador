<?php 

session_destroy();

echo '<script>

localStorage.removeItem("token_user");



</script>';


