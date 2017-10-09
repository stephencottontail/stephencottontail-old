<section class="front-page-section recent-portfolio">
  <h2 class="section-title">Recent Work<small class="mx-3"><a href="{{ get_post_type_archive_link('jetpack-portfolio') }}">See More&hellip;</a></small></h2>
  @php($args=['posts_per_page'=>4, 'post_type'=>'jetpack-portfolio',  'ignore_sticky_posts'=>true])
  @query($args)
    @include('partials.content-recent')
  @endquery
</section>
