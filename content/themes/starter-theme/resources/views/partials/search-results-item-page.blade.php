<article class="news-feed-entry">
  <div class="row">
    <div class="col-12 col-md-12">
      <header>
        <h3 class="news-feed-entry__title">
          {{ get_the_title() }}
        </h3>
      </header>
      <div class="news-feed-entry__summary">
        @php the_excerpt() @endphp
      </div>
      <a class="news-feed-entry__cta chevron-link" href="{{ get_permalink() }}">
        {{ __('Read More', 'starter-theme') }}
      </a>
    </div>
  </div>
</article>
