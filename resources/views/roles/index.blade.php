@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
        <h1>
                <i class="fa fa-users"></i> ROLES
          <small>Listing roles</small>
        </h1>
      </section>
  
      <!-- Main content -->
      <section class="content container-fluid">
  
            <div class="box">
                    <div class="box-header">
                      @can('roles.create')
                      <a href="{{route('roles.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> New Rol</a>
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            
                            <th colspan="3">Actions</th>
                        </tr>
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->slug}}</td>
                            <td>{{$role->description}}</td>
                            
                            <td width="10px">
                                
                                @can('roles.show')
                                    <a href="{{route('roles.show', ['id' => $role->id])}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('roles.edit')
                                <a href="{{route('roles.edit', ['id' => $role->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('roles.destroy')
                                {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                  {!! Form::close() !!}
                                @endcan
                                </td>
                           
                            
                        </tr>
                        @endforeach
                      </table>
                      {{ $roles->links() }}
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
  
      </section>
      <!-- /.content -->
@endsection

