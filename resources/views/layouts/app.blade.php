<div class="theme-app d-flex flex-column">
  <div class="theme-wrap position-relative">
    @include('sections.header')
    <main id="main" class="main">
      @yield('content')
    </main>
  </div>
  @include('sections.footer')
</div>
