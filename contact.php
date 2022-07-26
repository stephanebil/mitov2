<?php 
    $title="Contact"; 
    include ("partials/_header.php");
    $titleone="Nous contacter";
    include ("partials/_titleone.php")
?>
<section class="container md:px-[200px]  ">
<p class="text-center">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quis at pariatur quasi officiis nam tempora provident, fugit explicabo aliquid possimus iste quia tempore, dignissimos voluptatem, rerum quas ipsam eveniet dicta. Quasi voluptate excepturi illo optio corporis sint ea veritatis!
</p>

<form class="w-full p-10 pt-5 my-20 mx-auto bg-green-50 rounded drop-shadow-md" method="POST" action="submit_post.php">
    <!-- name -->
    <label  class="font-bold" for="nom">Nom</label>
    <input name="nom" type="text" class="form-control mb-4 mt-2" placeholder="votre nom" required>
    <!-- message -->
    <label class="font-bold" for="message">Message</label>
    <textarea class="form-control mb-4 mt-2" name="message" id="" cols="30" rows="10" placeholder="votre message" required ></textarea>
    <!-- envoie -->
    <input type="submit" value="Envoyer" class="btn text-white bg-blue-500 ">
</form>

<img class= "w-full pb-20 "src="assets/img/map-img.png" alt="carte de l'emplacement de l'entrprise Mito">

</section>
<?php
    include ("partials/_footer.php")
?>
