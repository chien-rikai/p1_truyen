@extends('user.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="margin-top: 5%;">

  <div id="main">
    <div class="border-bottom p-4">
      <div class="osahan-user text-center">
        <div class="osahan-user-media">
          <img class="mb-3 rounded-pill shadow-sm mt-1" src="https://bootdey.com/img/Content/avatar/avatar1.png"
            alt="gurdeep singh osahan">
          <div class="osahan-user-media-body">
            <h6 class="mb-2">Gurdeep Singh</h6>
            <p class="mb-1">+91 85680-79956</p>
            <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal"
                data-target="#edit-profile-modal" href="#"><i class="btn btn-primary">{{__('messages.Follow')}}</i> </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-lg-12">
      <h5 class="page-header">{{__('messages.fbl')}}</h5>
    </div>
  </div>
  <!--/.row-->

  <div class="card ">
    <div class="card-body">

      <table class="table table-striped">
        <thead>
          <tr>
            <td>{{__('messages.name')}}</td>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tên bài viết</td>
            <td></td>



          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>


</div>
<!--/.row-->
<!--/.main-->
@endsection