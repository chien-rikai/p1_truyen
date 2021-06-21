<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span
          class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span></button>
      <a href="{!! route('user.change-language', ['en']) !!}">English</a>
      <a href="{!! route('user.change-language', ['vi']) !!}">Vietnam</a>
      <a class="navbar-brand" href="#">{{trans('messages.Admin')}}</a>
      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
          </a>
          <ul class="dropdown-menu dropdown-messages">
            <li>
              <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                </a>
                <div class="message-body"><small class="pull-right">3 {{trans('messages.mins')}}</small>
                  <a href="#"><strong>John Doe</strong> {{trans('messages.commented')}} <strong>your
                      photo</strong>.</a>
                  <br /><small class="text-muted">1:24 pm - 25/03/2015</small>
                </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                </a>
                <div class="message-body"><small class="pull-right">1 {{trans('messages.hour')}}</small>
                  <a href="#">{{trans('messages.messenger')}} {{trans('messages.from')}} <strong>Jane
                      Doe</strong>.</a>
                  <br /><small class="text-muted">12:27 pm - 25/03/2015</small>
                </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="all-button"><a href="#">
                  <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                </a></div>
            </li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <em class="fa fa-bell"></em><span class="label label-info">5</span>
          </a>
          <ul class="dropdown-menu dropdown-alerts">
            <li><a href="#">
                <div><em class="fa fa-envelope"></em> 1 {{trans('messages.messenger')}}
                  <span class="pull-right text-muted small">3 {{trans('messages.mins')}}</span>
                </div>
              </a></li>
            <li class="divider"></li>
            <li><a href="#">
                <div><em class="fa fa-heart"></em> 12 {{trans('messages.like')}}
                  <span class="pull-right text-muted small">4 {{trans('messages.mins')}}</span>
                </div>
              </a></li>
            <li class="divider"></li>
            <li><a href="#">
                <div><em class="fa fa-user"></em> 5 {{trans('messages.follow')}}
                  <span class="pull-right text-muted small">4 {{trans('messages.mins')}}</span>
                </div>
              </a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /.container-fluid -->
</nav>