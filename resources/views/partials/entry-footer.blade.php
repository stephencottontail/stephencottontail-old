<p class="categories mb-0"><span class="meta-title">Posted In</span> {!! get_the_category_list(', ') !!}</p>
<p class="tags mb-0"><span class="meta-title">Tagged</span> {!! get_the_tag_list('', ', ') !!}</p>
{{ edit_post_link('Edit <span class="screen-reader-text">' . get_the_title() . '</span>', '<p class="meta-title">', '</p>') }}
