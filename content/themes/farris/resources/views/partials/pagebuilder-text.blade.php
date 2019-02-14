<section class="module-text module--previous-{!! $previous_module_style !!} section-container">
  
  @if( $previous_module_style == 'transparent')
  <div class="module__cap-outer module__cap-outer--bottom">
    <div class="container">
      <div class="row">
        <div class="col-10 offset-1">
          <div class="module__capper module__capper--bottom"></div>
        </div>
      </div>
    </div>
  </div>
  @endif
  
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-10 offset-md-1">
        {!! $text_module !!}
      </div>
    </div>
  </div>

</section>