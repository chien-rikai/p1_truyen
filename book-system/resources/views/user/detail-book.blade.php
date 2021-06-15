@extends('user.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div id="wrapper">
    <!-- Main -->

    <div id="main">
      <div class="inner">
        <h1>Lorem ipsum dolor sit amet <span class="pull-right"><del>$99.00</del> $79.00</span></h1>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5">
              <img src="{{$books->url_img}}" class="img-fluid" alt="">
            </div>

            <div class="col-md-7">
              <p> Quas qui, repellendus ullam, quam possimus ducimus earum!</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, iste neque, ut
                recusandae quibusdam perferendis qui modi aliquam quaerat molestiae.</p>

              <div class="row">

                <div class="col-sm-8">
                  <label class="control-label">Quantity</label>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" name="name" id="name">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <input type="submit" class="primary" value="Add to Cart">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br>
        <br>

        <div class="container-fluid">
          <h2 class="h2">Similar Products</h2>

          <!-- Products -->
          <section class="tiles">
            <article class="style1">
              <span class="image">
                <img src="images/product-1-720x480.jpg" alt="" />
              </span>
              <a href="product-details.html">
                <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                <p><del>$19.00</del> <strong>$19.00</strong></p>

                <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
              </a>
            </article>

            <article class="style2">
              <span class="image">
                <img src="images/product-2-720x480.jpg" alt="" />
              </span>
              <a href="product-details.html">
                <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                <p><del>$19.00</del> <strong>$19.00</strong></p>

                <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
              </a>
            </article>

            <article class="style3">
              <span class="image">
                <img src="images/product-6-720x480.jpg" alt="" />
              </span>
              <a href="product-details.html">
                <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                <p><del>$19.00</del> <strong>$19.00</strong></p>

                <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
              </a>
            </article>
          </section>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection