<section class="front-page-section recent-posts">
  <div class="container">
    <h2 class="section-title">Recent Posts<small class="mx-3"><a href="{{ get_option('page_for_posts') }}">See More&hellip;</a></small></h2>
    @php($args=['posts_per_page'=>4, 'ignore_sticky_posts'=>true])
    @query($args)
      @include('partials.content-recent')
    @endquery
  </div>
</section>
