<section class="module-news-posts">
  <div class="container">
    
    <div class="row">
      <div class="col-12">
        <h2 class="module-news-posts__heading">{!! $news_posts_heading !!}</h2>
      </div>
    </div>

    <div class="row align-items-stretch">
      @if (!$latest_news_posts && $news_posts)
        
        @foreach ($news_posts as $news_post)
          @php $news_post = $news_post['news_post'] @endphp
          <div class="col-10 offset-1 col-md-4 offset-md-0">
            <div class="news-post-block">
              <h6 class="news-post-block__title">{!! $news_post->post_title !!}</h6>
              <div class="news-post-block__content">
                <p class="news-post-block__exerpt">{!! $news_post->post_excerpt !!}</p>
                <a class="news-post-block__cta chevron-link" href="{!! get_the_permalink($news_post->ID) !!}">{{ __('Read More', 'starter-theme') }} </a>
              </div>
            </div>
          </div>
        @endforeach

      @else

        @foreach(App::latest_news_post_query() as $news_post)
          <div class="col-10 offset-1 col-md-4 offset-md-0">
            <div class="news-post-block">
              <h6 class="news-post-block__title">{!! $news_post['title'] !!}</h6>
              <div class="news-post-block__content">
                <p class="news-post-block__exerpt">{!! $news_post['excerpt'] !!}</p>
                <a class="news-post-block__cta chevron-link" href="{!! $news_post['permalink'] !!}">{{ __('Read More', 'starter-theme') }} </a>
              </div>
            </div>
          </div>
        @endforeach

      @endif
    </div>

  </div>
</section>