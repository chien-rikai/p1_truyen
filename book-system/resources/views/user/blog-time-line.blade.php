@extends('user.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div id="wrapper">
    <!-- Main -->
    <div id="main">
      <div class="inner">
        <h1>Blog</h1>

        <div class="image main">
          <img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-9">
              <div class="row">
                <div class="text-center">
                  <img src="images/blog-1-720x480.jpg" class="img-fluid" alt="" />

                  <h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                  </h2>

                  <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                  <button class="btn">{{__('messages.Like')}}</button> <button
                    class="btn">{{__('messages.comment')}}</button>
                </div>

                <div class="text-center">
                  <img src="images/blog-2-720x480.jpg" class="img-fluid" alt="" />

                  <h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                  </h2>

                  <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>

                <div class="text-center">
                  <img src="images/blog-3-720x480.jpg" class="img-fluid" alt="" />

                  <h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                  </h2>

                  <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>

                <div class="text-center">
                  <img src="images/blog-4-720x480.jpg" class="img-fluid" alt="" />

                  <h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                  </h2>

                  <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>

                <div class="text-center">
                  <img src="images/blog-5-720x480.jpg" class="img-fluid" alt="" />

                  <h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                  </h2>

                  <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>

                <div class="text-center">
                  <img src="images/blog-6-720x480.jpg" class="img-fluid" alt="" />

                  <h2 class="m-n"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                  </h2>

                  <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>
              </div>
            </div>

            <div class="col-3">



              <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>

              <p><a href="#">Non, magni, sequi. Explicabo illum quas debitis ut.</a></p>

              <p><a href="#">Vatae expedita deleniti optio ex adipisci . </a></p>

              <p><a href="#">Soluta non modi dolorem voluptates dolor laborum.</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection