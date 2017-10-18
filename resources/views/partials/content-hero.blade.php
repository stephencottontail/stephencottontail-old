<article @php(post_class(['hero', 'py-5']))>
  <div class="container">
    <header class="entry-header">
      <h1 class="entry-title">{{ get_the_title() }}</h1>
    </header>
    <div class="entry-content">
      {{ the_content() }}
    </div>
  </div>
</article>
