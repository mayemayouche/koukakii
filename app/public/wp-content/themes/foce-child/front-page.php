<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

</head>
 <?php 
    get_header();
    ?>
    
    <main id="primary" class="site-main">
    <section class="banner">
        <div class="background">
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/banner.png'; ?>" alt="Image de fond" class="background-image">
        <video id="background-video" autoplay loop muted playsinline class="video-overlay">
         <source src="<?php echo get_stylesheet_directory_uri() . '/media/images/videokoukaki.mp4'; ?>" type="video/mp4">
        </video>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants" class="logo">
        <div class="image-overlay">
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/cat.png'; ?>" id="cat" alt="chat bleu">
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/Catgris.png'; ?>" id="gris"alt="chat gris">
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/chatjaune.png'; ?>" id="jaune"alt="chatjaune">  
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/orchid.png'; ?>" id="orchidee"alt="orchid"> 
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/Sunflower.png'; ?>" id="tournesol"alt="Sunflower"> 
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/Random_flower.png'; ?>" id="marguerite"alt="marguerite"> 
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/flower.png'; ?>" id="flower"alt="petitefleur">
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/Hibiscus.png'; ?>" id="hibiscus" alt="hibiscus">  
        <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/logoparalax.png'; ?>" id="petitlogo"alt="petit logo"> 
        </div>
    
    </section>

        <section id="#story" class="story">
            <div class="Sunflower"></div>
            <div class="sunflowerfeuilles"></div>
            <div class="titres">
            <h2 class="titre titre-transition" id="histoire">L'histoire</h2>
            </div>
            <article id="" class="story__article">
                <div class="petithibiscus"></div>
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            </div>
            <?php
?>
<article>
    <?php get_template_part('chats'); ?></article>
                </article>
                
                <div id="lieu">
                    <div id="lefond"></div>
                    <h3 class="apparition" id="lelieu">Le Lieu</h3>
                    <p class="ou"> Le pays fantastique des Nekos Nekos : Nekosnotochi. Loin, très loin, au delà des monts Karma, à mille lieues des pays Mizukage et Kagura. Ils vivent en retrait, sur les côtes du Funato, un vaste océan d’arbres fruitier. Un petit ruisseau coule en leur lieu et les approvisionne en règlalades nécessaires en tout genre; un pays paradisiaque... </p>
                    <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/big_cloud.png'; ?>" alt="grosnuage" class="grosnuage grosnuage-transition" id="grosnuage">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/little_cloud.png'; ?>" alt="petitnuage" class="petitnuage petitnuage-transition" id="petitnuage">
                </div>
                
            

                </div>
        </section>

        <section id="studio">
            <div class="random"></div>
            <h2 id="studio h2 studio transform h2"  id="lestudio">Studio Koukaki</h2>
            <section class="paragraphe">
                <div class="para">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p></div>
                <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/trple-leaf.png'; ?>" alt="feuillemilieu" class="feuillemilieu">
                <div class="para">
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div></div>
            <div class="flower"></div>
            </section>
    </main><!-- #main -->

<?php
get_footer();
