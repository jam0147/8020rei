@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-male"></i><i class="fa fa-female"></i>  PERSONS
    <small>Edit person</small>
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
    {!! Form::model($person,['route' => ['persons.update', $person->id],'method' => 'put', 'class' => 'form-horizontal']) !!}
       @include('persons.partials.form')
          <div class="box-footer">
            <a href="{{ route('persons.index')}}" class="btn btn-default"><i class="fa fa-reply"></i> Cancel</a>
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