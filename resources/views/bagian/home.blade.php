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
        <a href="#" onclick="myFunction()">Download My Resume</a>
          <script>
            function myFunction() {
            var link      = document.createElement('a');
            link.href     = "https://bit.ly/CV-Airlangga-Joyonegoro"
            link.download = "CV-Airlangga-Joyonegoro.pdf";
            document.body.appendChild(link);
            link.target   = "_blank";
            link.click();
            document.body.removeChild(link);
          }
          </script>
      </div>
    </div>
  </div>
</div>
<html>

</html>