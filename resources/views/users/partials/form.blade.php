<div class="box-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="name" class="col-md-2 control-label">Name</label>

        <div class="col-md-10">

          {!! Form::text('name',null ,['class' => 'form-control', 'id' =>  'name', 'placeholder' => 'Name']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="lastname" class="col-md-2 control-label">LastName</label>

        <div class="col-md-10">

          {!! Form::text('lastname', null,['class' => 'form-control', 'id' =>  'lastname', 'placeholder' => 'Last Name']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="email" class="col-md-2 control-label">Email</label>

        <div class="col-md-10">

          {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="password" class="col-md-2 control-label">Password</label>

        <div class="col-md-10">

          {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->
               <!-- <div class="col-md-6">
                <div class="form-group">
                  <label for="password_confirmation" class="col-sm-2 control-label">Confirm Password</label>

                  <div class="col-sm-10">
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation', 'placeholder' => 'Confirm Password']) !!}
                  </div>
                </div>
              </div> -->
              <!-- ./ col -->

            </div>
            <!-- /.row -->

            
            <hr>
            <h3>List of Roles</h3>
            <div class="col-md-6 col-sm-offset-1">
              <div class="form-group">
                @foreach($roles as $role)
                  <div class="checkbox">
                    <label>
                      {!! Form::checkbox('roles[]', $role->id, null) !!}
                      {{ $role->name }}
                      <em>({{$role->description ?: 'Without description'}})</em>
                    </label>
                  </div>
                  @endforeach
                </div>
              </div>
            
          </div>
          <!-- /.box-body -->