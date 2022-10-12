<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
            </div>
        </div>
        <div class="row mt-5">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12 mp-5">
                <div class="well-left">
                    <div class="single-well">
                        <h2 class="welcome"> Welcome!<br>
                            Let’s Make Something<br> Amazing Together<br>
                        </h2>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg">GET 10% OFF</button>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <a href="#">
                            <h4 class="sec-head">EXPLORE THE BEST REVIEWS & UPDATES</h4>
                        </a>
                        <p class="para">
                            <b>ThePromohelp</b> is always ready to help you there are all kinds of ways to make money online,
                             like building an eCommerce store, growing a popular blog, selling services and affiliate products,
                              eBooks, selling online courses, and more
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i> Latest Appsumo Lifetime Deals
                            </li>
                            <li>
                                <i class="bi bi-check"></i> SEO for free and build a money-making blog
                            </li>
                            <li>
                                <i class="bi bi-check"></i> Affiliate Marketing
                            </li>
                            <li>
                                <i class="bi bi-check"></i> Bloging and More...
                            </li>

                        </ul>
                    </div>
                </div> <br>

                <form action="{{ route('store.subscribe') }}" method="post">
                  @csrf
                  <input type="text" name="email" placeholder="Email Address" style="height:44px; width:300px;"required>
                <button type="submit" class="btn small btn-primary btn-lg">Subscribe Now</button><br>
                </form>

                  <small  class="form-text text-muted">We'll never share your email with anyone else.<br>Subscribe To Our Weekly Newsletter</small>


            </div>
            <!-- End col-->
        </div>
    </div>
</div><!-- End About Section -->
