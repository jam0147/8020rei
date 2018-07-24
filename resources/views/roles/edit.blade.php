@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-users"></i> ROLES
    <small>Edit Role</small>
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
    {!! Form::model($role,['route' => ['roles.update', $role->id],'method' => 'put', 'class' => 'form-horizontal']) !!}
          @include('roles.partials.form')
          <div class="box-footer">
            <a href="{{ route('roles.index')}}" class="btn btn-default"><i class="fa fa-reply"></i> Cancel</a>
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

@section('js_footer')
<script type="text/javascript">
  $(function(){
  $('.scroll').slimScroll({
    height: '200px'
  });
});
</script>
@endsection