<header class="header section-container">
  <div class="container">
    <div class="header__outer-wrap">

      <a class="header__brand" href="{{ home_url('/') }}"><img src="@asset('images/company-logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" /></a>

      <button class="header__nav-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="header__nav-toggler-bar header__nav-toggler-bar--1"></span>
        <span class="header__nav-toggler-bar header__nav-toggler-bar--2"></span>
        <span class="header__nav-toggler-bar header__nav-toggler-bar--3"></span>
      </button>

      <div class="header__navbar-collapse collapse navbar-collapse" id="navbarSupportedContent">
      <div class="header__nav-wrap">
        <nav class="header__nav header__nav--secondary">
          @if (has_nav_menu('secondary_navigation'))
            {!! bem_menu('secondary_navigation', 'button-list') !!}
          @endif
        </nav>
        <nav class="header__nav header__nav--primary">
          @if (has_nav_menu('primary_navigation'))
            {!! bem_menu('primary_navigation', 'header-nav-list', '') !!}
          @endif

          <button class="header__search-toggle btn-text-link js-search-toggle" data-toggle="modal" data-target="#searchModal">
            <svg class="icon icon-search"><use xlink:href="@asset('images/icons/symbol-defs.svg')#icon-search"></use></svg>
          </button>
        </nav>
      </div>
      </div>

    </div>
  </div>
</header>
