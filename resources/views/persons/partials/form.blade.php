<div class="box-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>

        <div class="col-md-10">

          {!! Form::text('name',null ,['class' => 'form-control', 'id' =>  'name', 'placeholder' => 'Name']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="lastname" class="col-sm-4 control-label">Lastname</label>

        <div class="col-md-8">

          {!! Form::text('lastname',null ,['class' => 'form-control', 'id' =>  'lastname', 'placeholder' => 'Lastname']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->

    <div class="col-md-6">
      <div class="form-group">
        <label for="company" class="col-sm-2 control-label">Company</label>

        <div class="col-md-10">

          {!! Form::text('company', null, ['class' => 'form-control', 'id' => 'company', 'placeholder' => 'Company']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="email" class="col-sm-4 control-label">Email</label>

        <div class="col-md-8">

          {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->

    <div class="col-md-6">
      <div class="form-group">
        <label for="status" class="col-sm-2 control-label">Status</label>

        <div class="col-md-10">

          {!! Form::text('status', null, ['class' => 'form-control', 'id' => 'status', 'placeholder' => 'Status']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->



    <div class="col-md-6">
      <div class="form-group">
        <label for="priority_of_contact" class="col-sm-4 control-label">Priority of Contact</label>

        <div class="col-md-8">

          {!! Form::number('priority_of_contact', null, ['class' => 'form-control', 'id' => 'priority_of_contact', 'placeholder' => 'Priority of Contact']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="kind" class="col-sm-2 control-label">Kind</label>

        <div class="col-md-10">

          {!! Form::text('kind', null, ['class' => 'form-control', 'id' => 'kind', 'placeholder' => 'Kind']) !!}
        </div>
      </div>
    </div>


            </div>
            <!-- /.row -->

  
            
          </div>
          <!-- /.box-body -->