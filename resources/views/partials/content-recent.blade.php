<article @php(post_class(['recent', 'front-post']))>
  <header class="entry-header">
    <h3 class="entry-title display-3"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
  </header>
  <div class="entry-content">
    {{ FrontPage::recentContent() }}
  </div>
</article>
