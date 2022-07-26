<!-- header -->
<?php
$title = "Submit Post";
include('partials/_header.php');
include('functions.php')
?>

<main>
    <?php
    if (empty($_POST['nom']) && empty($_POST['message'])) {
        echo "Il faut un nom et un message pour afficher cette page";
    } else { ?>
        <h1 class="text-center">Message du formulaire</h1>
        <p>Nom:<?php trim_stag_post('nom') ?></p>
        <p>Message:<?php trim_stag_post('message') ?></p>
    <?php } ?>    
</main>

<!-- footer -->
<?php include('partials/_footer.php') ?>