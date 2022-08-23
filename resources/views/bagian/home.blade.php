<!-- HOME -->
<div class="cavani_tm_section animated" id="home">
  <div class="cavani_tm_home">
    <div class="content">
      @if (session('status'))
      <div class="cavani_tm_title">
        <span>{{ session('status') }}</span>
      </div>
      @endif
      <h3 class="name">Airlangga Joyonegoro</h3>
      <span class="line"></span>
      <h3 class="job">
        <span class="cd-headline loading-bar">
          <!-- ANIMATE TEXT VALUES: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push,  -->
          <span class="blc">I'm a </span>
          <span class="cd-words-wrapper">
            <b class="is-visible">Web Developer</b>
            <b>Freelancer</b>
            <b>Technology Enthusiast</b>
          </span>
        </span>
      </h3>
      <div class="cavani_tm_button transition_link">
        <a href="/cv.pdf" onclick="myFunction()" rel="nofollow noopener noreferrer">Download My Resume</a>
          <script>
            function myFunction() {
            window.open("/cv.pdf");
          }
          </script>
      </div>
    </div>
  </div>
</div>
<html>

</html>