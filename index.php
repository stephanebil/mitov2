<?php 
    $title="Home"; 
    include ("partials/_header.php");
    $titleone="Qui sommes nous?";
    include ("partials/_titleone.php")
?>



<p class="container">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore illo temporibus sapiente aliquam eius tempora optio possimus voluptatibus quis odit quae eveniet velit placeat error quos ea facilis quisquamdolore similique aliquid, veniam esse minima laboriosam at hic ad quo. Hic consequatur explicabo at sit soluta?</p>

<div class="container md:flex mt-20 md:space-x-10 ">
    <img class="md:max-w-lg" src="assets/img/home-mito.jpeg" alt="personnes faisant leurs courses">
    <p class="mt-10 md:mt-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos iusto perferendis fugiat aperiam ex. Id voluptatem voluptas veniam, nesciunt ex sunt sapiente cumque a saepe, voluptatum eos, rerum dignissimos minus. Atque autem, beatae odit animi possimus aspernatur expedita distinctio a laudantium dignissimos ratione sequi dolores. Nam reprehenderit tempora eum laboriosam!</p>
</div>


<section class="section-home__service">
    <h2 class="font-black text-5xl text-center p-20 mt-10">Nos services</h2>


    <div class="flex justify-center space-x-10 mb-20">
        <?php
        $services=[
            [
                "src"=>"gift-box.png",
                "altname"=>"l'emballage",
                "name"=>"Emballage"
            ],
            [
                "src"=>"advice.png",
                "altname"=>"les conseils",
                "name"=>"Conseils"
            ],
            [
                "src"=>"fast-delivery.png",
                "altname"=>"la livraison",
                "name"=>"Livraison"
            ]
        ]
        ?> 

        <?php foreach ($services as $service) { ?>
        <div class="grid ">
            <a href="#"><img class="w-[65px]" src="assets/img/<?= $service['src'] ?>" alt="logo repésentant <?= $service['altname']  ?>"></a>
            <p class="font-medium"><?= $service['name'] ?></p>
        </div>
        <?php }?>
    </div>
</section>

<?php
    include ("partials/_footer.php")
?>
