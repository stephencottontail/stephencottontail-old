<?php

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function recentContent()
    {
        if (has_post_thumbnail()) {
            return the_post_thumbnail();
        } else {
            return the_excerpt();
        }
    }
}
