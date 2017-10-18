<article @php(post_class('py-3'))>
  @if(has_post_thumbnail())
    <figure class="entry-thumbnail mb-3">
      @php(the_post_thumbnail())
    </figure>
  @endif
  <header class="entry-header">
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php(the_content())
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>Pages: ', 'after' => '</p></nav>', 'link_before' => '<span class="page-link">', 'link_after' => '</span>']) !!}
  </div>
  <footer class="entry-footer my-5">
    {!! Single::entryFooter() !!}
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>
