<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>{{__('messages.Online')}}</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			
			<li><a href="/"><em class="glyphicon glyphicon-pencil">&nbsp;</em> {{__('messages.Post')}}</a></li>
			
			<li><a href="/"><em class="glyphicon glyphicon-list-alt">&nbsp;</em>{{__('messages.History')}}</a></li>

			<li><a href="/"><em class="glyphicon glyphicon-star">&nbsp;</em>{{__('messages.Follow')}}</a></li>
			
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> {{__('messages.Logout')}}</a></li>
		</ul>
	</div><!--/.sidebar-->