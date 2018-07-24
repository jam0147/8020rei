@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
        <h1><i class="fa fa-male"></i><i class="fa fa-female"></i> PERSONS
          <small>Person details</small>
        </h1>
      </section>
  
      <!-- Main content -->
      <section class="content container-fluid">
<div class="box">
<div class="box-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>

        <div class="col-md-10">

{{$person->name}}

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="lastname" class="col-sm-4 control-label">Lastname</label>

        <div class="col-md-8">
{{$person->lastname}}
        </div>
      </div>
    </div>
    <!-- ./ col -->

    <div class="col-md-6">
      <div class="form-group">
        <label for="company" class="col-sm-2 control-label">Company</label>

        <div class="col-md-10">
{{$person->company}}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="email" class="col-sm-4 control-label">Email</label>

        <div class="col-md-8">
{{$person->email}}
        </div>
      </div>
    </div>
    <!-- ./ col -->

    <div class="col-md-6">
      <div class="form-group">
        <label for="status" class="col-sm-2 control-label">Status</label>

        <div class="col-md-10">
{{$person->status}}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="kind" class="col-sm-4 control-label">Kind</label>

        <div class="col-md-8">

{{$person->kind}}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="priority_of_contact" class="col-sm-4 control-label">Priority of Contact</label>

        <div class="col-md-8">

{{$person->priority_of_contact}}
        </div>
      </div>
    </div>


            </div>
            <!-- /.row -->

            <div class="box-footer">
            <a href="{{ route('persons.index')}}" class="btn btn-default"><i class="fa fa-reply"></i> Back</a>
                      


                            <div class="pull-right">
                                @can('persons.destroy')
                                {!! Form::open(['route' => ['persons.destroy', $person->id], 'method' => 'DELETE']) !!}
                                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                  {!! Form::close() !!}
                                @endcan
                            </div> 
                             <div class="pull-right">&nbsp;</div>
                            <div class="pull-right">     
                                @can('persons.edit')
                                <a href="{{route('persons.edit', ['id' => $person->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                @endcan
                            </div> 

          </div>
            
          </div>
     <!-- /.box-body -->
      </div>
      </section>
      <!-- /.content -->
@endsection