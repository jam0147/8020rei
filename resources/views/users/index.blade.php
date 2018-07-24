@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
        <h1>
                <i class="fa fa-users"></i> USERS
          <small>Listing users</small>
        </h1>
      </section>
  
      <!-- Main content -->
      <section class="content container-fluid">
  
            <div class="box">
                    <div class="box-header">
                      @can('users.create')
                      <a href="{{route('users.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> New User</a>
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
                            <th>Lastname</th>
                            <th>Email</th>
                            
                            <th colspan="3">Actions</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                            
                            <td width="10px">
                                
                                @can('users.show')
                                    <a href="{{route('users.show', ['id' => $user->id])}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('users.edit')
                                <a href="{{route('users.edit', ['id' => $user->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('users.destroy')
                                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                  {!! Form::close() !!}
                                @endcan
                                </td>
                           
                            
                        </tr>
                        @endforeach
                      </table>
                      {{ $users->links() }}
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
  
      </section>
      <!-- /.content -->
@endsection