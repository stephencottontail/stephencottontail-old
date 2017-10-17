<?php

namespace App;

function display_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    global $post;

    if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>
        <li id="div-comment-<?php echo comment_ID(); ?>" <?php comment_class(); ?>>
            <article class="pingback-body mb-5">
                <header class="pingback-header">Pingback</header>
                <div class="pingback-content">
                    <cite><?php comment_author_link(); ?></cite>
                    <?php edit_comment_link('Edit', '<span class="pingback-edit">', '</span>'); ?>
                </div>
            </article>
    <?php else : ?>
        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article class="comment-body mb-5">
                <header class="comment-header">
                    <?php echo get_avatar($comment, $args['avatar_size']); ?>
                    <cite class="fn"><?php echo get_comment_author_link(); ?></cite>
                    <div class="comment-meta">
                        <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>" class="comment-time"><time datetime="<?php comment_time('c'); ?>"><?php echo get_comment_date(); ?></time></a>
                        <?php
                        comment_reply_link(array_merge($args, [
                            'add_below' => 'comment',
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth'],
                            'before'    => '<span class="comment-reply">',
                            'after'     => '</span>'
                        ]));

                        if (get_edit_post_link()) : ?>
                            <span class="sep"> / </span>
                            <?php
                            edit_post_link('Edit', '<span class="comment-edit">', '</span>');

                        endif;
                        ?>
                    </div>
                </header>
                <div class="comment-content">
                    <?php if (!empty($comment->comment_parent)) :
                        $parent_comment = get_comment($comment->comment_parent);
                        ?>
                        <span class="in-reply-to mb-3 text-muted">In reply to <a href="<?php echo esc_url(get_comment_link(get_comment($parent_comment))); ?>"><?php echo esc_html($parent_comment->comment_author); ?></a></span>
                    <?php
                    endif;

                    if ('0' == $comment->comment_approved) :
                    ?>
                        <span class="awaiting-moderation mb-3 text-muted">Your comment is awaiting moderation.</span>
                    <?php
                    endif;

                    comment_text();
                    ?>
                </div>
            </article>
    <?php endif;
}
