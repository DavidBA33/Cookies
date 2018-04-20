<?php require 'inc/head.php'; 
if (empty ($_SESSION['login'])) {
header ('location:login.php');
}


for ($i=0; $i < count($_SESSION['basket']); $i++) { 
	?>
	<section class="cookies container-fluid">
    <div class="row">
      <?php 
      
      echo '<img src="assets/img/product-'. $_SESSION['basket'][$i]['id'] . '.jpg">';
      echo '<p>'. $_SESSION['basket'][$i]['name'] . '<p>';
      ?>
    </div>
</section> 
<?php }
?>
 
<?php require 'inc/foot.php'; 