<!-- Main Header Page Start -->
  <header class="flex justify-between items-center">

    <!-- Header Left Start -->
      <div class="main-header-left">
        <h1 class="main-header-left-title">{{ $page_title }}</h1>
        <p class="main-header-left-title">{{ $page_meta }}</p>
      </div>
    <!-- Header Left End -->

    <!-- Header Right Start -->
      <div class="main-header-right">
        @if ($page_button === "show")
          <a href="{{ $page_button_link }}" class="h-button button-primary">{{ $page_button_text }}</a>
        @else
          <span class="sr-only">{{ __('No action buttons for this page.') }}</span>
        @endif
      </div>
    <!-- Header Right End -->

  </header>
<!-- Main Header Page End -->
