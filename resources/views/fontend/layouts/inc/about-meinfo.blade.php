<footer>
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="footer-content">
            <div class="footer-head">
              <div class="footer-logo">
                <img src="{{ asset('fontend/assets/img/logo.png') }}" alt="logo">
              </div>

              <div class="footer-contacts">
                <p><span>Email:</span> sohag21us@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end single footer -->
        <div class="col-md-8">
          <div class="footer-content">
            <div class="footer-head">
              <div class="footer-logo">
                <h2><span>Who AM I ?</span></h2>
              </div>
              <p class="aboutme">
            {!! $about[0]->des !!}
              </p>
            </div>
          </div>
        </div>
        <!-- end single footer -->

      </div>
    </div>
  </div>

</footer><!-- End  Footer -->
