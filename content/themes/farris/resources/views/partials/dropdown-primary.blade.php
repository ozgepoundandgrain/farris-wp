<script type="text/javascript">
  jQuery(function($) {
    $('.dropdown-menu').on('click', function(e) {
      e.stopPropagation();
    });
  });
</script>

<div class="container">
  <div class="dropdown">
    <button id="dLabel" type="button" class="btn dropdown__primary-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-6 text-left">Dropdown Title</div>
              <div class="col-6 text-right"><span class="icon-Dropdown-Dark"></span></div>
            </div>
          </div>
        </div>
      </div>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dLabel">
      <label class="checkbox-container">
          <input type="checkbox">
          <span class="checkmark"></span>
          <p class="label">TWO</p>
      </label>
      <label class="checkbox-container">
        <input type="checkbox">
        <span class="checkmark"></span>
        <p class="label">TWO</p>
      </label>
      <label class="checkbox-container">
        <input type="checkbox">
        <span class="checkmark"></span>
        <p class="label">TWO</p>
      </label>
      <label class="checkbox-container">
        <input type="checkbox">
        <span class="checkmark"></span>
        <p class="label">TWO</p>
      </label>
      <label class="checkbox-container">
        <input type="checkbox">
        <span class="checkmark"></span>
        <p class="label">TWO</p>
      </label>
      <label class="checkbox-container">
        <input type="checkbox">
        <span class="checkmark"></span>
        <p class="label">TWO</p>
      </label>
      <label class="checkbox-container">
        <input type="checkbox">
        <span class="checkmark"></span>
        <p class="label">TWO</p>
      </label>
    </ul>
  </div>
</div>