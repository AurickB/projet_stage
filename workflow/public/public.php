<?php 

require_once 'controller/frontendController.php';

if (isset($_GET['page']) && $_GET['page'] == 'post'){
    displayPost($_GET['id']);
} else if (isset($_GET['page'])){
    displayPage();
} else {
    displayHome();
}

?>