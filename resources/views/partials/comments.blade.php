@php
if (post_password_required()) {
  return;
}
@endphp

<section id="comments" class="comments">
  @if (have_comments())
    <h2>Comments ({{ get_comments_number() }})</h2>

    <ol class="comment-list">
      {!! wp_list_comments(['style' => 'ol', 'avatar_size' => 64, 'short_ping' => true, 'callback' => 'App\display_comments']) !!}
    </ol>

    @php(the_comments_navigation($args = ['prev_text' => '&larr; Older Comments', 'next_text' => 'Newer Comments &rarr;']))
  @endif

  @if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
    <div class="alert alert-warning">
      {{ __('Comments are closed.', 'sage') }}
    </div>
  @endif

  @php(comment_form())
</section>
