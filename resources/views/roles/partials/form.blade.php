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
        <label for="lastname" class="col-md-2 control-label">Slug</label>

        <div class="col-md-10">

          {!! Form::text('slug', null,['class' => 'form-control', 'id' =>  'slug', 'placeholder' => 'Slug']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->
   
    <div class="col-md-6">
      <div class="form-group">
        <label for="description" class="col-md-2 control-label">Description</label>

        <div class="col-md-10">

          {!! Form::text('description', null,['class' => 'form-control', 'id' =>  'description', 'placeholder' => 'Description']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->
                <div class="col-md-6">
                <div class="form-group">
                  <label for="special_permission" class="col-md-2 control-label">Special Permission</label>

                  <div class="col-md-10">
                    <div class="checkbox">
                    <label>
                      {!! Form::radio('special', 'all-access') !!} Total Access
                    </label>
                    
                  </div>
                  <div class="checkbox">
                    <label>
                      {!! Form::radio('special', 'no-access') !!} No Access
                    </label>
                  </div>
                  </div>
                </div>
              </div> 
              <!-- ./ col -->

            </div>
            <!-- /.row -->

            
            <hr>
           
            
            <h3>List of Permissions</h3>
            <div class="col-md-6 col-md-offset-1 scroll">
              <div class="form-group">
                @foreach($permissions as $permission)
                  <div class="checkbox">
                    <label>
                      
                    {!! Form::checkbox('permissions[]', $permission->id, null) !!}
                      {{ $permission->name }}
                      <em>({{$permission->description ?: 'Without description'}})</em>
                    </label>
                  </div>
                  @endforeach
                </div>
              </div>
            
          </div>
          <!-- /.box-body -->