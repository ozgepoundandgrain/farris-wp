<footer class="footer">

  <div class="footer__main">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="footer__nav-wrap">

            <nav class="footer__nav footer__nav--primary">
              @if (has_nav_menu('footer_primary_navigation'))
                {!! bem_menu('footer_primary_navigation', 'footer-nav-list') !!}
              @endif
            </nav>
            <nav class="footer__nav footer__nav--secondary">
              @if (has_nav_menu('footer_secondary_navigation'))
                {!! bem_menu('footer_secondary_navigation', 'footer-nav-list', 'footer-nav-list--secondary') !!}
              @endif
            </nav>

          </div>
          <div class="footer__content">
            {!! App::footerContent() !!}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer__info">
    <div class="container">
      <div class="row">
        <div class="col-12">
          {{-- TODO: add copyright info to options page settings --}}
          <p class="footer__info-content">&copy; Copyright Company Info Here</p>
        </div>
      </div>
    </div>
  </div>
</footer>
