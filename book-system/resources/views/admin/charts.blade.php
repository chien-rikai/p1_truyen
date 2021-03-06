@extends('admin.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
      <li class="active">{{trans('messages.Charts')}}</li>
    </ol>
  </div>
  <!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">{{trans('messages.Charts')}}</h1>
    </div>
  </div>
  <!--/.row-->

  <div class="row">
    <div class="col-xs-6 col-md-3">
      <div class="panel panel-default">
        <div class="panel-body easypiechart-panel">
          <div class="easypiechart" id="easypiechart-teal" data-percent="10"><span class="percent">10%</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-md-3">
      <div class="panel panel-default">
        <div class="panel-body easypiechart-panel">
          <div class="easypiechart" id="easypiechart-blue" data-percent="92"><span class="percent">92%</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-md-3">
      <div class="panel panel-default">
        <div class="panel-body easypiechart-panel">
          <div class="easypiechart" id="easypiechart-orange" data-percent="65"><span class="percent">65%</span></div>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-md-3">
      <div class="panel panel-default">
        <div class="panel-body easypiechart-panel">
          <div class="easypiechart" id="easypiechart-red" data-percent="27"><span class="percent">27%</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          {{__('messages.Line')}}
          <ul class="pull-right panel-settings panel-button-tab-right">
            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                <em class="fa fa-cogs"></em>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li>
                  <ul class="dropdown-settings">
                    <li><a href="#">
                        <em class="fa fa-cog"></em> {{__('messages.Settings')}} 1
                      </a></li>
                    <li class="divider"></li>
                    <li><a href="#">
                        <em class="fa fa-cog"></em> {{__('messages.Settings')}} 2
                      </a></li>
                    <li class="divider"></li>
                    <li><a href="#">
                        <em class="fa fa-cog"></em> {{__('messages.Settings')}} 3
                      </a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
        </div>
        <div class="panel-body">
          <div class="canvas-wrapper">
            <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.row-->


</div>
<!--/.row-->
</div>
<!--/.main-->
@endsection