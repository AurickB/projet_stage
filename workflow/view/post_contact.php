<?php 

// session_start();

// // Tableau d'erreurs.
// $errors=[]; 

// // Vérification des informations contenues dans le formulaire.
// if(!isset($_POST['name']) || $_POST['name'] == ''){
//     $errors['name'] = "Vous n'avez pas renseigné votre nom";
// }

// if(!isset($_POST['email'])  || $_POST['email'] == '' ||!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
//     $errors['email'] = "Vous n'avez pas renseigné un email valide";
// }

// if(!isset($_POST['content'])  || $_POST['content'] == ''){
//     $errors['content'] = "Vous n'avez pas renseigné votre message";
// }

// // Si on a des erreurs on redirige vers la page précédente.
// if(!empty($errors)){
//     // On envoie le tableau qui contient les erreurs.
//     $_SESSION['errors'] = $errors;
//     // On sauvegarde tous les champs renseignés.
//     $_SESSION['inputs'] = $_POST;
//     header('Location: ../index.php?page=contact');
// // Si il n'y a pas d'erreurs on traite les informations.
// } else {
//     $_SESSION['success']=1;
//     $message = $_POST['content'];
//     $headers = 'FROM: site@local.dev';
//     mail('aurickbelenus@gmail.com', 'Formulaire de contact', $message, $headers);
//     header('Location: ../index.php?page=contact');
// }
// var_dump($errors);
// die();

var_dump($_POST);

$message = $_POST['content'];
$headers = 'FROM: site@local.dev';
mail('aurickbelenus@gmail.com', 'Formulaire de contact', $message, $headers);

?>