<div class="box-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="address_line1" class="col-sm-2 control-label">Address</label>

        <div class="col-md-10">

          {!! Form::text('address_line1',null ,['class' => 'form-control', 'id' =>  'address_line1', 'placeholder' => 'Address']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="address_line2" class="col-sm-4 control-label">Address optional</label>

        <div class="col-md-8">

          {!! Form::text('address_line2',null ,['class' => 'form-control', 'id' =>  'address_line2', 'placeholder' => 'Address (Optional)']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->

    <div class="col-md-6">
      <div class="form-group">
        <label for="city" class="col-sm-2 control-label">City</label>

        <div class="col-md-10">

          {!! Form::text('city', null, ['class' => 'form-control', 'id' => 'city', 'placeholder' => 'City']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="state" class="col-sm-4 control-label">State</label>

        <div class="col-md-8">

          {!! Form::text('state', null, ['class' => 'form-control', 'id' => 'state', 'placeholder' => 'State']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->

    <div class="col-md-6">
      <div class="form-group">
        <label for="zip" class="col-sm-2 control-label">Zip</label>

        <div class="col-md-10">

          {!! Form::text('zip', null, ['class' => 'form-control', 'id' => 'zip', 'placeholder' => 'Zip']) !!}
        </div>
      </div>
    </div>
    <!-- ./ col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="country" class="col-sm-4 control-label">Country</label>

        <div class="col-md-8">

          {!! Form::text('country', null, ['class' => 'form-control', 'id' => 'country', 'placeholder' => 'Country']) !!}
        </div>
      </div>
    </div>




            </div>
            <!-- /.row -->

  
            
          </div>
          <!-- /.box-body -->