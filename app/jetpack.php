<?php

namespace App;

add_action('after_setup_theme', function() {
    add_theme_support('jetpack-social-menu');
});
