<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lumino - Login</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/datepicker3.css" rel="stylesheet">
  <link href="/css/styles.css" rel="stylesheet">
  <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">{{trans('messages.Register')}}</div>
        <div class="panel-body">
          <form role="form">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="{{trans('messages.First_name')}}" name="first_name" type="text"
                  autofocus="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="{{trans('messages.Last_name')}}" name="Last name" type="text"
                  autofocus="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="{{trans('messages.phone')}}" name="phone" type="text"
                  autofocus="">
              </div>
              {{trans('messages.Gender')}}
              <div class="form-group">
                <input class="" placeholder="Last name" name="Last name" type="radio" autofocus="">&nbsp;
                {{trans('messages.male')}} &nbsp;
                <input class="" placeholder="Last name" name="Last name" type="radio" autofocus="">&nbsp;
                {{trans('messages.female')}} &nbsp;
                <input class="" placeholder="Last name" name="Last name" type="radio" autofocus="">
                &nbsp;{{trans('messages.other')}}

              </div>
              <div class="form-group">
                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
              </div>

              <div class="form-group">
                <input class="form-control" placeholder="{{trans('messages.Password')}}" name="password" type="password"
                  value="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="{{trans('messages.Re-password')}}" name="password"
                  type="password" value="">
              </div>

              <a href="index.html" class="btn btn-primary">{{trans('messages.Register')}}</a>
            </fieldset>
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->


  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>