 <?php 
 $aDeviner = 150;
 $erreur = null;
 $success = null;
 $value = null; 
 if (isset($_POST['chiffre'])) {
     if ($_POST['chiffre'] > $aDeviner) {
         $erreur = "Votre chiffre est trop grand";
     } elseif ($_POST['chiffre'] < $aDeviner) {
         $erreur = "Votre chiffre est trop petit";
     } else {
         $success = "BRAVO ! vous avez devine le chiffre <b>$aDeviner<?b>";
     }
 }
 require 'header.php';
 ?>

 <?php if ($erreur) : ?>
    <div class="alert alert-danger m-3">
        <?= $erreur ?>
    </div>
 <?php elseif ($success) : ?>
    <div class="alert alert-success m-3">
        <?= $success ?>
    </div>
 <?php endif ?>
 
 <form action="deviner.php" method="POST">
     <div class="form-group m-3">
        <input class="form-control" type="number" name="chiffre" placeholder="Entre 0 et 1000" value="<?= $value ?>">
     </div>
     <button class="btn btn-primary m-3" type="submit">Deviner</button>
 </form>

 <?php require 'footer.php' ?>