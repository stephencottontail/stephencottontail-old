<article @php(post_class('py-5'))>
  <header class="entry-header">
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    <a href="{{ wp_get_attachment_url() }}">See full-size image ({{ $attachment_meta['width']}} x {{$attachment_meta['height']}})</a>
  </header>
  <div class="entry-content">
    @php(the_content())
  </div>
  <footer class="entry-footer my-5">
    {!! Single::entryFooter() !!}
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>
