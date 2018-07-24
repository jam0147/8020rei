@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
        <h1>
          SMS
          <small>Optional description</small>
        </h1>
      </section>
  <!-- Main content -->
<section class="content container-fluid">

  <div class="box">
    <div class="box-header text-center"style="font-weight: bold;font-size: large; background-color:rgba(185,180,180,0.2);">
        Message
      
    </div>
   <br>
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
          {!! Form::open(['route' => 'sms.store'], ['class' => 'form-inline']) !!}
          <div class="row">
              <div class="col-md-12">
                  <label class="col-md-2">To</label>
          <div class="input-group col-md-8">
              <span class="input-group-addon"><i class="fa fa-tablet"></i></span>
              <input type="text" name="phone_number" class="form-control" placeholder="To">
          </div>
          <br><br>
        </div>
        <div class="col-md-12">
            <label class="col-md-2">Body</label>
          <div class="input-group col-md-8">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <textarea type="text" name="body" class="form-control" placeholder="Message"></textarea>
          </div>
        </div>
      </div>
      <br><br>
      <div class="row">
       <div class="col-md-12">
            <div class="pull-left">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('sms.index')}}" class="btn btn-default"><i class="fa fa-reply"></i> Cancel</a>
            </div>
            
           <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-send-o"></i> Sent</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        </div>
        <br><br>
      </div>
          {!! Form::close() !!}



      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->



      </section>
      <!-- /.content -->
@endsection