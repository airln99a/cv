<!-- CONTACT -->
<div class="cavani_tm_section" id="contact">
  <div class="section_inner">
    <div class="cavani_tm_contact">
      <div class="cavani_tm_title">
        <span>Get in Touch</span>
      </div>
      <div class="short_info">
        <ul>
          <li>
            <div class="list_inner">
              <img class="svg" src="img/svg/location.svg" alt="" />
              <span>Malang, Indonesia</span>
            </div>
          </li>
          <li>
            <div class="list_inner">
              <img class="svg" src="img/svg/mail.svg" alt="" />
              <span><a href="#">airlanggaj@gmail.com</a></span>
            </div>
          </li>
          <li>
            <div class="list_inner">
              <img class="svg" src="img/svg/call.svg" alt="" />
              <span>+62 859 545 883 32</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="form">
        <div class="left">
          <div class="fields">
            <form action="/email" method="post" class="contact_form" id="contact_form">
              @csrf
              {{-- <div class="empty_notice"><span>Please Fill Required Fields</span></div> --}}
              <div class="first">
                <ul>
                  <li>
                    <input id="name" name="name" type="text" placeholder="Your Name" autocomplete="off"
                      value="{{ old('name') }}" required>
                    @error('name')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </li>
                  <li>
                    <input id="from" name="from" type="email" placeholder="Your Email" autocomplete="off"
                      value="{{ old('from') }}" required>
                    @error('from')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </li>
                  <li>
                    <input id="telepon" name="telepon" type="number" placeholder="Your Number Telephone"
                      autocomplete="off" value="{{ old('telepon') }}" required>
                    @error('telepon')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </li>
                  <li>
                    <input id="perusahaan" name="perusahaan" type="text" placeholder="Your Company" autocomplete="off"
                      value="{{ old('perusahaan') }}" required>
                    @error('perusahaan')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </li>
                </ul>
              </div>
              <div class="last">
                <textarea id="message" name="message" placeholder="Your Message">{{ old('message') }}</textarea>
                @error('message')
                <small style="color: red">{{ $message }}</small>
                @enderror
              </div>
              <div class="cavani_tm_button">
                <a id="send_message" href="#" onclick="document.getElementById('contact_form').submit()">Send
                  Message</a>
              </div>

              <!-- If you want change mail address to yours, just open "modal" folder >> contact.php and go to line 4 and change detail to yours.  -->

            </form>
          </div>
        </div>
        <div class="right">
          <div class="map_wrap">
            <div class="mapouter">
              <div class="gmap_canvas"><iframe width="100%" height="355" id="gmap_canvas"
                  src="https://maps.google.com/maps?q=jalan%20simpang%20kalpataru%201c&t=&z=13&ie=UTF8&iwloc=&output=embed"
                  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                <style>
                  .mapouter {
                    position: relative;
                    text-align: right;
                    height: 355px;
                    width: 100%;
                  }

                  .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 355px;
                    width: 100%;
                  }
                </style>
              </div>
            </div>
            <!-- Get your API here https://www.embedgooglemap.net -->

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CONTACT -->