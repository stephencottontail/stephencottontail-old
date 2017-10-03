<?php

namespace App;

add_action('after_setup_theme', function() {
    /**
     * Create @query directive
     *
     * Used @query($args) ... @endquery, where
     * $args has previously been defined as an
     * array with the standard WP_Query
     * arguments
     */
    sage('blade')->compiler()->directive('query', function ($args) {
        $output = '<?php $bladeQuery = new WP_Query($args); ?>';
        $output .= '<?php while ($bladeQuery->have_posts()) : ?>';
        $output .= '<?php $bladeQuery->the_post(); ?>';

        return $output;
    });

    sage('blade')->compiler()->directive('endquery', function () {
        return '<?php endwhile; ?>';
    });
});
