<?php 
$currentPage = $_SERVER["REQUEST_URI"];
// var_dump nous permet de connaitre le lien parfait pour faire fontionner les fonctions, voir les <a> ci-dessous!!!
// var_dump($currentPage)
?>
<nav class="md:flex justify-center md:justify-between py-4 px-20 bg-green-50 w-full fixed z-50">
    <div>
        <a class="mb-3 grid justify-center" href="index.php"><img class="w-[60px]" src="assets/img/mito.png" alt="logo mito"></a>
    </div>
    <div class="flex justify-center md:justify-end">
        <ul class="flex space-x-[40px] font-medium " >
            <li><a href="index.php" class="py-2 hover:font-bold hover:border-b-2 border-green-400 hover:text-green-400 <?php echo $currentPage ===  "/php/mitov2/index.php" ? "font-bold border-b-2 border-green-400 text-green-400" : "" ?>">Home</a></li>
            <li><a href="products.php" class="py-2 hover:font-bold hover:border-b-2 border-green-400 hover:text-green-400 <?php echo $currentPage ===  "/php/mitov2/products.php" ? "font-bold border-b-2 border-green-400 text-green-400" : "" ?>">Produits</a></li>
            <li><a href="contact.php" class="py-2 hover:font-bold hover:border-b-2 border-green-400 hover:text-green-400 <?php echo $currentPage ===  "/php/mitov2/contact.php" ? "font-bold border-b-2 border-green-400 text-green-400" : "" ?>">Contact</a></li>
        </ul>
    </div>
</nav>