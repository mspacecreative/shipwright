<?php 
get_header();

get_template_part('templates/promo-overlay');

get_template_part('templates/front-page-content');

echo '<div class="feedContainer">';
echo do_shortcode('[instagram-feed]');
echo '</div>';

get_footer();
?>