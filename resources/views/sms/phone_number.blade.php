@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
        <h1>
          SMS Test
          <small>Listing sms</small>
        </h1>
      </section>
  
      <!-- Main content -->
      <section class="content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-info text-center"><h4>Verify the Messages Sended And Received</h4></div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-12">
                    @if(Session::has('phone'))
                        <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                            <ul>
                                <li>{{ Session::get('phone') }}</li>
                            </ul>
                        </div>
                      @endif

               @if ($errors->any())
                  <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                            <ul>
                              @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                  </div>
               @endif
          </div>
         <div class="col-md-6">
            <div class="box">
                    <div class="box-header">
                      @can('sms.create')
                      <a href="{{route('sms.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> New Sms</a>
                      @endcan
                  
                      <div class="box-tools">
                        <form method="post" action="{{ URL::asset('sms/search') }}">
                         {{ csrf_field() }}
                          <div class="input-group input-group-sm" style="width: 150px;">
                              <input type="text" name="search_num" id="search_num" class="form-control pull-right" placeholder="Search">
          
                                <div class="input-group-btn">
                                <button type="submit" class="btn btn-default" id="search"><i class="fa fa-search"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                      
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-check"></i> Successful!</h4>
                                {{ session('status') }}
                            </div>
                        @endif
                      <table class="table table-hover">
                        
                        <tr>
                          <th>ID</th>
                          <th>From</th>
                          <th>Body</th>
                          <th>Status</th>
                          <th>Date</th>
                        </tr>
                            @include('partials.sms.sms_sended_filter')
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
             </div>
             <div class="col-md-6">
            <div class="box">
                    <div class="box-header">
                    <!-- /.box-header -->
                    <div class="alert text-center" style="background-color:#009688;color:white"><b>Received Messages</b></div>
                    <div class="box-body table-responsive no-padding">
                           
                      <table class="table table-hover">
                        
                        <tr>
                          <th>ID</th>
                          <th>From</th>
                          <th>Body</th>
                          <th>Date</th>
                        </tr>
                       @include('partials.sms.sms_received_filter')
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
             </div>
        </div>
      </section>
      <!-- /.content -->
@endsection