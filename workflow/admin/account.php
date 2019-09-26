<?php
session_start(); 
require 'inc/functions.php';
require 'inc/header.php';

// On empêche l'accès à la page account.php si l'utilisateur ne s'est pas connecté avec ses identifiants.
if(!isset($_SESSION['auth'])){
    $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'être sur cette page. Veuillez vous connecter";
	header('Location: login.php');
	// exit();
}

if (!empty([$_POST])){
    require_once 'inc/functions.php';
    require_once 'inc/bddConfig.php';
    $pdo = connect();
    $req = $pdo->prepare('INSERT INTO post SET title = ?, content = ?, created_at = NOW()');
    $req->execute([
        $_POST['title'],
        $_POST['content']
	]);
	$_SESSION['flash']['success'] = "L'article a bien été créé";
	// header('Location: ../public.php?page=actualite');
}

?>

<h1>Bienvenue <?= $_SESSION['auth']['email']?></h1>

<?//php debug($_SESSION);?>

<div class="container">
	<form action="" method="post" enctype="multipart/form-data" class="">
		<div class="form-group">
			<label for="title">Titre</label>
			<input class="form-control" id="title" type="text" name="title">
		</div>
		<div class="form-group">
			<label for="content">Contenu</label>
			<textarea id="content" type="textarea" name="content" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="img">Image</label>
			<div class="">
				<input id="img" type="file" name="img" style="width : 100%;">
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Créer un article</button>
	</form>
</div>

<?php require 'inc/footer.php'?>