@extends('user.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div id="wrapper">
    <!-- Main -->
    <div id="main" style="margin-top:  50px;">
      <div class="inner">
        <h1>{{__('messages.product')}}</h1>
        <select id="cars">
          <option value="volvo"></option>
          <option value="saab"></option>
          <option value="vw"></option>
          <option value="audi" selected></option>
        </select>

        <div class="image main">
          <img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
        </div>

        <!-- Products -->

        <section class="tiles">
          <article class="style">
            <span class="image">
              <img style="width: 100px" src="{{$book->url_img}}" alt="" />
            </span>
            <a href="/detail/book/{{$book->id}}">
              <h2></h2>

              <p> <strong></strong></p>


            </a>
          </article>

        </section>

      </div>
    </div>
  </div>
</div>
@endsection