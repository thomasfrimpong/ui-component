@extends('ui::template.layout')
@section('content')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>{{$table}}</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transactions
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="container">
          <div class="col-md-11">
            <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Transactions Table </h3>
  
               
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table">
                  <tbody>
                    <tr>
                    @foreach($columns as $key=>$value)
                    <th>{{ucfirst($value)}}</th>
                    
                    @endforeach

                  </tr>
                  
                    @foreach($records as $record)
                    <tr>
                    @foreach($columns as $key=>$value)
                    <td>{{$record->$value}}</td>
                     @endforeach
                  </tr>
                
                    @endforeach
                </tbody>
               

              </table>
              </div>
              <!-- /.box-body -->
            </div>

          </div>

        </div>

      </div>

     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection