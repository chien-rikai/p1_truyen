@extends('user.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div id="wrapper">
    <!-- Main -->

    <div id="main">
      <div class="inner" style="margin-top:  50px;">
        <h1>{{$books->title}}<span class="pull-right">{{$books->price}}</span></h1>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5">
              <img src="{{$books->url_img}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7">
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
      </div>
    </div>

  </div>
</div>
@endsection