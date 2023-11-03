<!-- Swiper -->
<div class="main-character">
    <h3 class="perso perso-transition" id="chats">Les personnages</h3>
</div>
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);

        if ($characters_query->have_posts()) :
            while ($characters_query->have_posts()) : $characters_query->the_post();
        ?>
                <div class="swiper-slide">
                    <?php
                    // Affichez l'image du personnage en utilisant la fonction get_the_post_thumbnail()
                    echo get_the_post_thumbnail(get_the_ID(), 'full');
                    ?>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>


