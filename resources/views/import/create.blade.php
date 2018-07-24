@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-users"></i> USERS
    <small>Create User</small>
  </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

  <div class="box">
    <div class="box-header">


    </div>
    <!-- /.box-header -->
    @component('components.alert')
    @endcomponent
    {!! Form::open(['route' => 'users.store', 'class' => 'form-horizontal']) !!}
          @include('users.partials.form')
          <div class="box-footer">
            <a href="{{ route('users.index')}}" class="btn btn-default"><i class="fa fa-reply"></i> Cancel</a>
            <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Save</button>
          </div>
          <!-- /.box-footer -->
        {!! Form::close() !!}

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection