<section class="module-accordion">

  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-10 offset-md-1">

        <div class="accordion" id="accordion-{!! $module_id !!}">

          @if ($accordion_items)
            @foreach ($accordion_items as $row)

            <div class="accordion__card">
              <div class="accordion__card-label" id="accordion-{!! $module_id !!}-heading-{{ $loop->index }}">
                <button class="accordion__label-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-{!! $module_id !!}-collapse-{{ $loop->index }}" aria-expanded="false" aria-controls="accordion-{!! $module_id !!}-collapse-{{ $loop->index }}">
                  {!! $row['accordion_item_label'] !!}
                  <div class="accordion__label-btn-icons">
                    <svg class="accordion__icon-plus icon icon-plus"><use xlink:href="@asset('images/icons/symbol-defs.svg')#icon-plus"></use></svg>
                    <svg class="accordion__icon-minus icon icon-minus"><use xlink:href="@asset('images/icons/symbol-defs.svg')#icon-minus"></use></svg>
                  </div>
                </button>
              </div>
              <div id="accordion-{!! $module_id !!}-collapse-{{ $loop->index }}" class="collapse" aria-labelledby="accordion-{!! $module_id !!}-heading-{{ $loop->index }}" data-parent="#accordion-{!! $module_id !!}">
                <div class="accordion__card-body">{!! $row['accordion_item_content'] !!}</div>
              </div>
            </div>

            @endforeach
          @endif

        </div><!-- /.module-accordion__accordion -->

      </div>
    </div>
  </div>
</section>
