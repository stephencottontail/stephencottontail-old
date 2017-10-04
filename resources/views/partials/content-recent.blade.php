<article @php(post_class('recent'))>
  <header class="entry-header">
    <h3 class="entry-title display-3"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
  </header>
  <div class="entry-content">
    @php(@empty(get_the_post_thumbnail()) ? the_excerpt() : the_post_thumbnail())
  </div>
</article>
