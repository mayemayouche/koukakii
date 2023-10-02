<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Vos balises meta, liens vers les feuilles de style, scripts, etc. -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>
<body <?php body_class(); ?>>
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
    </section>

        <section id="#story" class="story">
            <div class="Sunflower"></div>
            <div class="sunflowerfeuilles"></div>
            <h2>L'histoire</h2>
            <article id="" class="story__article">
                <div class="petithibiscus"></div>
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
?>
<article>
    <?php get_template_part('chats'); ?></article>
<?php
            /*$args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3>Les personnages</h3>
                    <?php
                    $main_character = $characters_query->posts[0];
                    echo '<figure>';
                    echo get_the_post_thumbnail( $main_character->ID, 'full' );
                    echo '<figcaption>'. $main_character->post_title . '</figcaption>';
                    echo '</figure>';
                    $characters_query->next_post();
                    ?>
                </div>
                <div class="other-characters">
                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }*/
                    ?>
                </div>
                </article>
            <article>
                <div id="place">
                    <h3 class="apparition">Le Lieu</h3>
                    <p class="ou"><?php echo get_theme_mod('place'); ?></p>
                    <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/big_cloud.png'; ?>" alt="grosnuage" class="nuage" id="grosnuage">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/little_cloud.png'; ?>" alt="petitnuage" class="nuage" id="petitnuage">
                </div>
				
                   
                </div>
        </section>

        <section id="studio">
            <h2>Studio Koukaki</h2>
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
