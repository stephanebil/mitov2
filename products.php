<?php 
    $title="Produits"; 
    include ("partials/_header.php");
    $titleone="Nos produits";
    include ("partials/_titleone.php")
?>

<p class="container">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore illo temporibus sapiente aliquam eius tempora optio possimus voluptatibus quis odit quae eveniet velit placeat error quos ea facilis quisquamdolore similique aliquid, veniam esse minima laboriosam at hic ad quo. Hic consequatur explicabo at sit soluta?</p>

<section class="section-products__cards container mt-20 ">
    
    <div>
        <?php 
            $cards=[
                [
                    "src"=>"tomato.jpeg",
                    "alt"=>"étalage de tomates",
                    "titlecard"=>"Tomates de Russie",
                    "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sit aliquid minus itaque obcaecati voluptates nobis officiis, deserunt ducimus similique. Ratione cupiditate alias totam fugit?"
                ],
                [
                    "src"=>"orange.webp",
                    "alt"=>"étalage d'oranges'",
                    "titlecard"=>"Oranges d'Ukraine",
                    "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sit , deserunt ducimus similique. Ratione cupiditate alias totam fugit?"
                ],
                [
                    "src"=>"carrote.jpeg",
                    "alt"=>"étalage de carottes",
                    "titlecard"=>"Carottes de l'Antarctique",
                    "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sit aliquid minus itaque obcaecati voluptates nobis officiis, deserunt ducimus similique. Ratione cupiditate alias totam fugit ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sit aliquid minus itaque obcaecati?"
                ],
            ]?>
        
        <?php foreach ($cards as $card) {?>
        <div class="my-10 md:flex md:items-center md:space-x-10">
            <img class="w-[400px] rounded" src="assets/img/<?= $card['src']?>" alt=<?= $card['alt']?>>
            <div>
                <h3 class="mt-2 font-extrabold text-xl mb-3 "><?= $card['titlecard']?></h3>
                <p><?=$card['description'] ?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sit aliquid minus itaque obcaecati voluptates nobis officiis, deserunt ducimus similique. Ratione cupiditate alias totam fugit?</p>
            </div>
        </div>
        <?php } ?>
    </div>

</section>

<?php
    include ("partials/_footer.php")
?>
