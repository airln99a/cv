@include('bagian.header')
<!-- MAINPART -->
<div class="cavani_tm_mainpart">
  <div class="author_image">
    <div class="main" data-img-url="img/about/cool.jpg"></div>
    <div class="particle_wrapper">
      <div id="particles-js"></div>
    </div>
  </div>
  <div class="main_content">
    @include('bagian.home')
    @include('bagian.about')
    @include('bagian.portfolio')
    @include('bagian.service')
    @include('bagian.contact')

  </div>
</div>
<!-- /MAINPART -->
@include('bagian.footer')