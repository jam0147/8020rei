@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
        <h1><i class="fa fa-address-card-o"></i> ADDRESSES
          <small>Address details</small>
        </h1>
      </section>
  
      <!-- Main content -->
      <section class="content container-fluid">
<div class="box">
<div class="box-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="address_line1" class="col-sm-2 control-label">Address</label>

        <div class="col-md-10">

{{$address->address_line1}}

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="address_line2" class="col-sm-4 control-label">Address optional</label>

        <div class="col-md-8">
{{$address->address_line2}}
        </div>
      </div>
    </div>
    <!-- ./ col -->

    <div class="col-md-6">
      <div class="form-group">
        <label for="city" class="col-sm-2 control-label">City</label>

        <div class="col-md-10">
{{$address->city}}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="state" class="col-sm-4 control-label">State</label>

        <div class="col-md-8">
{{$address->state}}
        </div>
      </div>
    </div>
    <!-- ./ col -->

    <div class="col-md-6">
      <div class="form-group">
        <label for="zip" class="col-sm-2 control-label">Zip</label>

        <div class="col-md-10">
{{$address->zip}}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="country" class="col-sm-4 control-label">Country</label>

        <div class="col-md-8">

{{$address->country}}
        </div>
      </div>
    </div>



            </div>
            <!-- /.row -->

            <div class="box-footer">
            <a href="{{ route('addresses.index')}}" class="btn btn-default"><i class="fa fa-reply"></i> Back</a>
                          <div class="pull-right">
                                @can('addresses.destroy')
                                {!! Form::open(['route' => ['addresses.destroy', $address->id], 'method' => 'DELETE']) !!}
                                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                  {!! Form::close() !!}
                                @endcan
                            </div> 
                            <div class="pull-right">&nbsp;</div>
                            <div class="pull-right">     
                                @can('addresses.edit')
                                <a href="{{route('addresses.edit', ['id' => $address->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                @endcan
                            </div> 
          </div>
            
          </div>
     <!-- /.box-body -->
      </div>
      </section>
      <!-- /.content -->
@endsection