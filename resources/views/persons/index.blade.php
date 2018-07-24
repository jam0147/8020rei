@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
        <h1>
          <i class="fa fa-male"></i><i class="fa fa-female"></i> PERSONS
          <small>Show person</small>
        </h1>
      </section>
  
      <!-- Main content -->
      <section class="content container-fluid">
  
            <div class="box">
                    <div class="box-header">
                      @can('persons.create')
                      <a href="{{route('persons.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> New Person</a>
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
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Company</th>
                            <th>Email</th>
                            <th>Status</th>                    
                            <th>Kind</th>                    
                            <th>Priority of Contact</th>                    
                            <th colspan="3">Actions</th>
                        </tr>
                        
                        @foreach ($persons as $person)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$person->name}}</td>
                            <td>{{$person->lastname}}</td>
                            <td>{{$person->company}}</td>
                            <td>{{$person->email}}</td>
                            <td>{{$person->status}}</td>
                            <td>{{$person->kind}}</td>
                            <td>{{$person->priority_of_contact}}</td>
                            
                            <td width="10px">
                                
                                @can('persons.show')
                                    <a href="{{route('persons.show', ['id' => $person->id])}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('persons.edit')
                                <a href="{{route('persons.edit', ['id' => $person->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                @endcan
                                </td>
                              <td width="10px">
                                @can('persons.destroy')
                                {!! Form::open(['route' => ['persons.destroy', $person->id], 'method' => 'DELETE']) !!}
                                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                  {!! Form::close() !!}
                                @endcan
                                </td>

                            
                        </tr>
                        @endforeach 
                      </table>
                    {{  $persons->links() }}
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
  
      </section>
      <!-- /.content -->
@endsection