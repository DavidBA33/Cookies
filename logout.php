<?php
session_start();

// on détruit les variables de notre session
session_unset();

// on détruit notre session
session_destroy();

// on redirige le visiteur vers la page d'accueil
header('location:index.php');

/*
Chaque session a un id différent (ce qui permet d'éviter la confusion entre les connexions).
A chaque page où notre session doit être active, on doit placer un session_start en tout début de page (avant tout code HTML).
Toutes les variables enregistrées au cours de notre session, seront accessibles dans les pages de notre session.
N'oubliez JAMAIS de détruire vos variables de session lors de la déconnexion.
*/
?>

