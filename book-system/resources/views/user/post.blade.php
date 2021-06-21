@extends('user.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
      <li class="active">Posts</li>
    </ol>
  </div>
  <!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Posts</h1>
    </div>
  </div>
  <!--/.row-->
  <a href="#" class="btn btn-primary">{{__('messages.Add')}} {{__('messages.Post')}}</a>
  <div class="card ">
    <div class="card-body">

      <table class="table table-striped">
        <thead>
          <tr>
            <td>ID</td>
            <td>{{__('messages.title')}}</td>
            <td>{{__('messages.content')}}</td>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a href="/" class="btn btn-default">{{__('messages.Detail')}}</a>
              <a href="/" class="btn btn-success">{{__('messages.Edit')}}</a>
              <a href="" class="btn btn-danger">{{__('messages.Delete')}}</a>
            </td>

          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>


</div>
<!--/.row-->
</div>
<!--/.main-->
@endsection