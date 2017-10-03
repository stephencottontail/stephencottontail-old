<section class="recent-posts">
  <div class="container">
    @php($args=['posts_per_page'=>4, 'ignore_sticky_posts'=>true])
    @query($args)
      {{ 'r3' }}
    @endquery
  </div>
</section>
