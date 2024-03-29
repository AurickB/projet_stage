<?php
require_once 'frontend/header.php';

/**
 * Disposition des articles.
 */

echo '<section id=postAdmin>';
echo '<div class="container">';

if (empty($posts)){
    echo '</br></br></br><p>aucun article, la base de données est vide...</p>';
}
foreach ($posts as $post){
    if ($post['img'] != null){
        echo '<div class="post-header" style="background-image: url(../images/' . $post['img'] . ');"></div></br></br>';
        // echo '<div><img src="view/images/' . $post['img'] . '"></div></br></br>' ;
    }
    
    echo '<h2>' . $post['title'] . '</h2></br>';
    echo '<p>Publié par : ' . $post['service'] . '</p></br>';
    echo '<p>' . $post['content'] . '</p></br>';
    if ($post['id_user'] == $_SESSION['auth']['id_user']){
        echo '<a href="index.php?idpost='.$post['id_post']. '&page=delete">Supprimer article</a><br>';
    }
    echo '<br>';
    echo '<hr>';
}
echo '</div>';
echo '</section>';

/**
 *  Apparence de la pagination
 */

echo '<ul class="pagination">';
if ($page!=1){ // Si la page actuelle est différente de 1 on crée la variable $precedent égale à $pageActuelle-1
    $precedent=$page-1;
    echo '<li class="page-item">
    <a class="page-link" href="index.php?page='.$precedent.'" aria-disabled="true">Précédent</a>
    </li>';
}
for ($i=1; $i<=$pageTotale; $i++){
    echo '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'.'page '.$i.'</a></li>';
}
if ($page<$pageTotale){ // Tant que $pageActuelle est inférieur à $pageTotal on crée la variable $suivant.
    $suivant=$page+1;
    echo' <li class="page-item">
    <a class="page-link" href="index.php?page='.$suivant.'" >Suivant</a>
    </li>';
}
echo '</ul>';
?>


<?php require_once 'frontend/footer.php';?>