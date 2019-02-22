<script type="text/javascript">
  jQuery(function($) {
    $('.dropdown-menu').on('click', function(e) {
      e.stopPropagation();
    });

    $(".dropdown__item-green").on("click", function() {
      var me = $(this);
      if (me.hasClass('active')) {
        me.removeClass('active');
      } else {
        me.addClass('active');
      }
    });
  });
</script>

<div class="container">
  <div class="dropdown">
    <button id="dLabel" type="button" class="btn dropdown__button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-6 text-left">Dropdown Title</div>
              <div class="col-6 text-right"><span class="icon-Dropdown-White"></span></div>
            </div>
          </div>
        </div>
      </div>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dLabel">
      <li><p class="small dropdown__item-green">ITEM</p></li>
      <li><p class="small dropdown__item-green">ITEM</p></li>
      <li><p class="small dropdown__item-green">ITEM</p></li>
      <li class="divider"></li>
      <li><p class="small dropdown__item-green">ITEM</p></li>
      <li class="divider"></li>
      <li><p class="small dropdown__item-green">ITEM</p></li>
      <li><p class="small dropdown__item-green">ITEM</p></li>
      <li><p class="small dropdown__item-green">ITEM</p></li>
      <li><p class="small dropdown__item-green">ITEM</p></li>
      <li><p class="small dropdown__item-green">ITEM</p></li>
      <li><p class="small dropdown__item-green">ITEM</p></li>
      <li><p class="small dropdown__item-green">ITEM</p></li>
    </ul>
  </div>
</div>