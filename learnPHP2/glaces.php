<?php
     $parfums = [
        'fraise' => 1200,
        'chocolat' => 1150,
        'vanille' => 1000
    ];
    $cornets = [
        'pot' => 200,
        'cornet' => 350
    ];
    $suplements = [
         'cesam' => 50,
         'chantilly' => 25,
         'pépites de chocolat' => 75
    ];
    $title = 'Composer votre glace';

    $ingredients = [];
    $total = 0;

    if (isset($_POST['parfum'])) {
        foreach ($_POST['parfum'] as $parfum) {
            if (isset($parfums[$parfum])) {
                $ingredients[] = $parfum;
                $total += $parfums[$parfum];
            }
        }
    }

    if (isset($_POST['suplement'])) {
        foreach ($_POST['suplement'] as $suplement) {
            if (isset($suplements[$suplement])) {
                $ingredients[] = $suplement;
                $total += $suplements[$suplement];
            }
        }
    }

    if (isset($_POST['cornet'])) {
        $cornet = $_POST['cornet'];
        $ingredients[] = $cornet[0];
        $total += $cornets[$cornet[0]];
    }

    require 'header.php';
?>

<pre>
    <!-- <?php var_dump($ingredients); ?> -->
</pre>

<div class="container">
<h2 class="m-3">Composer votre glace : </h2>

<div class="alert alert-success m-3">
    <ul>
        <?php foreach($ingredients as $ingredient) : ?>
            <li><?= $ingredient ?></li>
        <?php endforeach ?>
    </ul>
    <p>
        <b class="text-danger p-3 card bg-muted">
            PRIX : <?= $total ?> FCFA
        </b>
    </p>
</div>

<?php
    
?>

<form action="glaces.php" method="POST">
    <h4>Choisissez votre parfum</h4>
    <?php foreach($parfums as $parfum => $prix) : ?>
    <div class="checkbox m-3">
        <label>
            <input type="checkbox" name="parfum[]" value="<?= $parfum ?>" <?php if(isset($_POST['parfum']) && in_array($parfum, $_POST['parfum'])) {echo 'checked';} ?>>
            <?= $parfum ?> - <?= $prix ?> FCFA
        </label>
    </div>
    <?php endforeach ?>
    <h4>Choisissez votre cornet</h4>
    <?php foreach($cornets as $cornet => $prix) : ?>
    <div class="checkbox m-3">
        <label>
            <input type="radio" name="cornet[]" value="<?= $cornet ?>" <?php if(isset($_POST['cornet']) && in_array($cornet, $_POST['cornet'])) {echo 'checked';} ?>>
            <?= $cornet ?> - <?= $prix ?> FCFA
        </label>
    </div>
    <?php endforeach ?>
    <h4>Choisissez votre suplement</h4>
    <?php foreach($suplements as $suplement => $prix) : ?>
    <div class="checkbox m-3">
        <label>
            <input type="checkbox" name="suplement[]" value="<?= $suplement ?>" <?php if(isset($_POST['suplement']) && in_array($suplement, $_POST['suplement'])) {echo 'checked';} ?>>
            <?= $suplement ?> - <?= $prix ?> FCFA
        </label>
    </div>
    <?php endforeach ?>
    <button class="btn btn-primary m-3" type="submit">Composer ma glace</button>
</form>
</div>


<?php require 'footer.php' ?>