<?php
/* Template Name: صفحه نخست اپلیکیشن */
get_header();
echo '<main id="application-template">';
    echo '<div class="application-preview-navbar">
<svg class="docs-demo-device__md-bar" viewBox="0 0 1384.3 40.3"><path class="st0" d="M1343 5l18.8 32.3c.8 1.3 2.7 1.3 3.5 0L1384 5c.8-1.3-.2-3-1.7-3h-37.6c-1.5 0-2.5 1.7-1.7 3z"></path><circle class="st0" cx="1299" cy="20.2" r="20"></circle><path class="st0" d="M1213 1.2h30c2.2 0 4 1.8 4 4v30c0 2.2-1.8 4-4 4h-30c-2.2 0-4-1.8-4-4v-30c0-2.3 1.8-4 4-4zM16 4.2h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H16c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path></svg>
</div>';
if ( have_posts() ) {
    the_post();
    $output = do_shortcode(get_the_content());
    if(strpos($output,'fw-container')>0) {
        $output = str_replace('fw-container', 'container', $output);
        echo $output;
    }else{
        the_content();
    }
}
echo '</main>';
get_footer();