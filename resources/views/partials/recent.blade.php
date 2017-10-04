<section class="recent-posts">
  <div class="container">
    <h2 class="section-title">Recent Posts</h2>
    @php($args=['posts_per_page'=>4, 'ignore_sticky_posts'=>true])
    @query($args)
      @include('partials.content-recent')
    @endquery
  </div>
</section>
