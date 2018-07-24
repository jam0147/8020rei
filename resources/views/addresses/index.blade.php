@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
        <h1>
          <i class="fa fa-address-card-o"></i> ADDRESSES
          <small>Show address</small>
        </h1>
      </section>
  
      <!-- Main content -->
      <section class="content container-fluid">
  
            <div class="box">
                    <div class="box-header">
                      @can('addresses.create')
                      <a href="{{route('addresses.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> New Address</a>
                      @endcan
                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
        
                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                         
                          @component('components.status')
                          @endcomponent
           <table class="table table-hover">
                        
                        <tr>
                            <th>N°</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Zip</th>                    
                            <th colspan="3">Actions</th>
                        </tr>
                          
                        @foreach ($addresses as $address)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$address->address_line1}} {{$address->address_line2}}</td>
                            <td>{{$address->country}}</td>
                            <td>{{$address->state}}</td>
                            <td>{{$address->city}}</td>
                            <td>{{$address->zip}}</td>
                            
                            <td width="10px">
                                
                                @can('addresses.show')
                                    <a href="{{route('addresses.show', ['id_address' => $address->id])}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('addresses.edit')
                                <a href="{{route('addresses.edit', ['id_address' => $address->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                @endcan
                                </td>
                              <td width="10px">
                                @can('addresses.destroy')
                                {!! Form::open(['route' => ['addresses.destroy', $address->id], 'method' => 'DELETE']) !!}
                                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                  {!! Form::close() !!}
                                @endcan
                                </td>

                            
                        </tr>
                        @endforeach
                      </table>
                      {{ $addresses->links() }}       
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
  
      </section>
      <!-- /.content -->
@endsection