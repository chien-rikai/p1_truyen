@extends('user.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div id="main">


    <div class="inner">
      <!-- About Us -->

      <br>

      <h2 class="h2">Featured Products</h2>

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
            <img src="images/product-3-720x480.jpg" alt="" />
          </span>
          <a href="product-details.html">
            <h2>Lorem ipsum dolor sit amet, consectetur</h2>

            <p><del>$19.00</del> <strong>$19.00</strong></p>

            <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
          </a>
        </article>

        <article class="style4">
          <span class="image">
            <img src="images/product-4-720x480.jpg" alt="" />
          </span>
          <a href="product-details.html">
            <h2>Lorem ipsum dolor sit amet, consectetur</h2>

            <p><del>$19.00</del> <strong>$19.00</strong></p>

            <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
          </a>
        </article>

        <article class="style5">
          <span class="image">
            <img src="images/product-5-720x480.jpg" alt="" />
          </span>
          <a href="product-details.html">
            <h2>Lorem ipsum dolor sit amet, consectetur</h2>

            <p><del>$19.00</del> <strong>$19.00</strong></p>

            <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
          </a>
        </article>

        <article class="style6">
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

      <p class="text-center"><a href="products.html">More Books &nbsp;<i class="fa fa-long-arrow-right"></i></a>
      </p>

      <br>

      <h2 class="h2">Testimonials</h2>

      <div class="row">
        <div class="col-sm-6 text-center">
          <p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus
              mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique,
              delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas
              reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

          <p><strong> - John Doe</strong></p>
        </div>

        <div class="col-sm-6 text-center">
          <p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus
              mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique,
              delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas
              reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

          <p><strong>- John Doe</strong> </p>
        </div>
      </div>

      <p class="text-center"><a href="testimonials.html">{{__('messages.rm')}} &nbsp;<i
            class="fa fa-long-arrow-right"></i></a></p>

      <br>

      <h2 class="h2">Blog</h2>

      <div class="row">
        <div class="col-sm-4 text-center">
          <img src="images/blog-1-720x480.jpg" class="img-fluid" alt="" />

          <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

          <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
        </div>

        <div class="col-sm-4 text-center">
          <img src="images/blog-2-720x480.jpg" class="img-fluid" alt="" />

          <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

          <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
        </div>

        <div class="col-sm-4 text-center">
          <img src="images/blog-3-720x480.jpg" class="img-fluid" alt="" />

          <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

          <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
        </div>
      </div>

      <p class="text-center"><a href="blog.html">{{__('messages.rm')}} &nbsp;<i class="fa fa-long-arrow-right"></i></a>
      </p>


    </div>
  </div>
</div>
@endsection