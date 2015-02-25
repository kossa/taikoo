<?php include_once 'header.php'; ?>

    <section class="slider">
      <div id="carousel-kossa" class="carousel slide" data-ride="carousel">
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="wrapper" style="background-image: url(img/slide-01.jpg);">
              <a href="#" class="play"></a>
            </div>
            <video autobuffer autoloop loop controls>
              <source src="http://spl.blob.core.windows.net/tpa/video/test.mp4">
            </video>
          </div>
          <div class="item">
            <div class="wrapper" style="background-image: url(img/slide-01.jpg);">
              <a href="#" class="play"></a>
            </div>
            <video autobuffer autoloop loop controls>
              <source src="http://spl.blob.core.windows.net/tpa/video/test.mp4">
            </video>
          </div>
          <div class="item">
            <div class="wrapper" style="background-image: url(img/slide-01.jpg);">
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left control-carousel" href="#carousel-kossa" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="right control-carousel" href="#carousel-kossa" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-kossa" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-kossa" data-slide-to="1"></li>
          <li data-target="#carousel-kossa" data-slide-to="2"></li>
        </ol>

      </div>
    </section><!-- slider -->

    <section class="contemporary-comfort">
      <div class="container">
        <h3>HOME OF</h3>
        <h2>CONTEMPORARY COMFORT</h2>
      </div>
    </section><!-- contemporary-comfort -->

    <section class="building-information">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 mb40">
            <h4>Taikoo Place Apartments brings cosmopolitan living to the heart of Taikoo Place, with intelligently designed residences tailored for professionals with discerning tastes.</h4> 

            <p>Our contemporary and hospitable homes include spacious studios, elegant one and two-bedroom apartments, and luxurious penthouses — each carefully crafted to maximise space, efficiency and natural light. Managed alongside Pacific Place Apartments, Taikoo Place Apartments offers exceptional standards of service and amenities. Our residentsindulge in a premium lifestyle experience, including an exclusive clubhouse complete with two spas and a gym, in addition to a deluxe three-floor restaurant managed by the acclaimed Swire Hotels.</p>

            <p> Located in the heart of Taikoo Place, a dynamic business and leisure hub of Hong Kong, Taikoo Place Apartments is set to become your new definition of sophisticated living.</p>

          </div>
          <div class="col-sm-5 col-sm-offset-1">
            <section class="table">
              <div class="first">
                <h3>Building Information</h3>

                <ul class="list-unstyled">
                  <li><span class="prop">NUMBER OF RESIDENCES</span> <span class="pull-right">111</span></li>
                  <li><span class="prop">STUDIO</span> <span class="value">63</span></li>
                  <li><span class="prop">ONE-BEDROOM</span> <span class="value">40</span></li>
                  <li><span class="prop">TWO-BEDROOM</span> <span class="value">6</span></li>
                  <li><span class="prop">PENTHOUSE</span> <span class="value">2</span></li>
                </ul>

                <!-- <dl class="dl-horizontal">
                  <dt>NUMBER OF RESIDENCES</dt>
                  <dd>111</dd>
                
                  <dt>STUDIO</dt>
                  <dd>63</dd>
                
                  <dt>ONE-BEDROOM</dt>
                  <dd>40</dd>
                
                  <dt>TWO-BEDROOM</dt>
                  <dd>6</dd>
                
                  <dt>PENTHOUSE</dt>
                  <dd>2</dd>
                </dl> -->
              </div>
              
              <div class="second">
                <h3>Amenities</h3>
                <ul class="list-unstyled">
                  <li><span class="prop">SQUARE FEET OF AMENITIES</span> <span class="value">1,378</span></li>
                  <li><span class="prop">SPA</span></li>
                  <li><span class="prop">GYM</span></li>
                  <li><span class="prop">LOUNGE</span></li>
                  <li><span class="prop">LAUNDRY</span></li>
                </ul>
                <!-- <dl class="dl-horizontal">
                  <dt>SQUARE FEET OF AMENITIES </dt>
                  <dd>1,378</dd>
                
                  <dt>SPA</dt>
                  <dd></dd>
                
                  <dt>GYM </dt>
                  <dd></dd>
                
                  <dt>LOUNGE </dt>
                  <dd></dd>
                
                  <dt>LAUNDRY</dt>
                  <dd></dd>
                </dl> -->
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>

    <section class="our-products">
      <div class="container0">
        <div class="row">
          <a href="#" class="col4">
            <div class="wrapper" style="background-image: url(img/img-01.jpg);"></div>
            <footer>
              <h3>Location</h3>
              <p>A fully integrated network of business and entertainment</p>
            </footer>
          </a>
          <a href="#" class="col4">
            <div class="wrapper" style="background-image: url(img/img-02.jpg);"></div>
            <footer>
              <h3>Residences</h3>
              <p>Instantly inviting and effortlessly chic</p>
            </footer>
          </a>
          <a href="#" class="col4">
            <div class="wrapper" style="background-image: url(img/img-03.jpg);"></div>
            <footer>
              <h3>Amenities</h3>
              <p>Exclusive homes optimized for comfort, space and efficiency</p>
            </footer>
          </a>
        </div>
      </div>
    </section><!-- our-products -->

<?php include_once 'footer.php'; ?>
