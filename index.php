<?php
include("connexionbd.php");

// Récupération des articles
$requeteArticles = "SELECT id, photo_url, prix, nom, description FROM article";
$resultatsArticles = $connexion->query($requeteArticles);

// Récupération des utilisateurs
$requeteUsers = "SELECT id, numero, nom, prenom, email FROM user";
$resultatsUsers = $connexion->query($requeteUsers); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Accueil</title>
</head>

<body>
    <div class="container" id="index">
        <div class="Navbar">
            <img src="images/Logo.jpg" class="logo">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">A Propos</a></li>
                <li><a href="#">Services</a></li>
                <li><a class="scroll-link" href="#footer">Contacts</a></li>
            </ul>
        </div>
    </div>

    <header class="w-90 bg-white-500 p-5 grid grid-cols-3 gap-4 mt-24">
        <button class="text-white font-bold px-4 py-2 rounded bg-red-500 active:bg-red-700">MON COMPTE</button>
        <button class="text-white font-bold px-4 py-2 rounded bg-red-500 active:bg-red-700">VOIR MON PANIER</button>
        <button class="text-white font-bold px-4 py-2 rounded bg-red-500 active:bg-red-700">PASSER UNE COMMANDE</button>
    </header>





    <div  class="w-screen flex justify-evenly p-10">

        <div id="articles-container" class="w-4/5 grid grid-cols-3 gap-4 bg-white-500 p-2">
           
        <!-- Une occurence -->
            <div class="h-80 w-70 bg-white rounded-xl shadow-md overflow-hidden">
                <img class="h-40 w-full object-contain " src="https://th.bing.com/th/id/OIP.VKB1I_Nw_oHlIm90nTQCtgHaEK?rs=1&pid=ImgDetMain" alt="">
                <div class="p-1 font-bold text-2xl text-center uppercase">Iphone X Haut de game</div>
                <div class="text-gray-700 text-center font-bold uppercase">150,000 FCFA</div>
                <button id="bouton" class="bg-red-500 active:bg-red-700 font-bold text-white rounded-full px-7 text-lg flex mx-auto mt-3">Ajouter au panier+</button> 
            </div>
        </div>
    </div>






        <!-- <div class="w-1/5 h-32 bg-white p-3 shadow-xl rounded-lg">
            <div class="text-2xl text-center font-semibold mb-4">PANIER</div>

            <div id="panier" class="flex flex-col">
                <div class="items-center justify-between mb-2">
                    <div class="truncate">Iphone X haut de gamme</div>
                    <div class="text-gray-700">150,000 FCFA</div>
                    <button class="bg-red-500 active:bg-red-700  px-2 rounded-full ml-2 text-white">Supprimer</button>
                </div>

            </div>

            <div class="flex justify-between mt-2">
                <div class="font-bold mt-2">TOTAL:</div>
                <div class="text-blue-500 font-bold mt-2">500,000 FCFA</div>
            </div>
        </div>-->

    <footer id="footer">
        <div class="footer-section">
            <h2>À propos de nous</h2>
            <p>DASI SITE E-COMMERCE</p>
        </div>

        <div class="footer-section">
            <h2>Liens utiles</h2>
            <ul>
                <li><a class="scroll-link" href="#index">Accueil</a></li>
                <li><a href="#">A Propos</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h2>Assistance</h2>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Politique de retour</a></li>
                <li><a href="#">Service client</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h2>Restez connecté</h2>
            <p>Suivez-nous sur les réseaux sociaux.</p>
            <div class="social-icons">
                <a href="#"><img src="images/facebook.jpg" alt="Facebook"></a>
                <a href="#"><img src="images/instagram.jpg" alt="Instagram"></a>
                <a href="#"><img src="images/twitter.jpg" alt="Twitter"></a>
            </div>
        </div>
    </footer>
    <script src="data.js"></script>
    <script src="panier.js"></script>


</body>
</html>