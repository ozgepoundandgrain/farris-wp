<section class="news-feed section-container">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-8 offset-md-2">
        
        @if (!have_posts())
          <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
          </div>
          {!! get_search_form(false) !!}
        @endif

        @while (have_posts()) @php the_post() @endphp
          @include('partials.news-feed-item')
        @endwhile

        {!! get_the_posts_navigation() !!}

      </div>
    </div>
  </div>
</section>