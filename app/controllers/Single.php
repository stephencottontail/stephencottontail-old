<?php

namespace App;

use Sober\Controller\Controller;

class Single extends Controller
{
    public function entryFooter ()
    {
        $footer = '';
        if ('post' == get_post_type()) {
            if (get_the_category_list()) {
                $footer .= sprintf('<p class="categories mb-0"><span class="meta-title">Posted In</span> %s</p>', get_the_category_list(', '));
            }
            if (get_the_tag_list()) {
                $footer .= sprintf('<p class="tags mb-0"><span class="meta-title">Tagged</span> %s</p>', get_the_tag_list('', ', '));
            }
        }
        $footer .= sprintf('<p class="meta-title"><a href="%s">Edit <span class="screen-reader-text">%s</span></a></p>', get_edit_post_link(), get_the_title());
        return $footer;
    }

    public function singleNavArgs ()
    {
        $args = [
            'prev_text' => '<span class="nav-title">&larr; Previous Post</span>%title',
            'next_text' => '<span class="nav-title">Next Post &rarr;</span>%title'
        ];

        if ('jetpack-portfolio' == get_post_type()) {
            $args = [
                'in_same_term' => true,
                'taxonomy'     => 'jetpack-portfolio-type'
            ] + $args;
        }

        return $args;
    }

    public function attachmentMeta ()
    {
        return wp_get_attachment_metadata();
    }
}
