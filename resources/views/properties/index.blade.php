@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-building"></i> PROPERTY
    <small>Create Properties</small>
  </h1>
</section>


<!-- Main content -->
<section class="content container-fluid">

  <div class="box">
    <div class="box-header text-center"style="font-weight: bold;font-size: large; background-color:rgba(185,180,180,0.2);">
        Property
      
    </div>


  <div class=" center-block" style='width:100%; margin-top:12px;'>

      <hr>
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3" style="margin: 2px;">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" name="search" placeholder="Search" class="form-control">
          </div>
        </div>
      </div>
      <hr>
      <form class="form" action="index.html" method="post">
      <div class="panel-body">
            <div class="row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" name="address" placeholder="Address" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="city">City:</label>
                  <input type="text" name="city" placeholder="City" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="zip">Zip:</label>
                  <input type="text" name="zip" placeholder="Zip" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="year">Year:</label>
                  <input type="text" name="year" placeholder="Year" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="land">Land:</label>
                  <input type="text" name="land" placeholder="Land" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="bldg">Bldg:</label>
                  <input type="text" name="bldg" placeholder="Bldg" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="total">Total:</label>
                  <input type="text" name="total" placeholder="total" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="total_value">Total Value:</label>
                  <input type="text" name="total_value" placeholder="Total Value" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="assessed">Assessed:</label>
                  <input type="text" name="assessed" placeholder="Assessed" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="millcode">millcode:</label>
                  <input type="text" name="millcode" placeholder="Millcode" class="form-control">
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group"></div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group"></div>
              </div>
            </div>
            <hr>
            <ul class="nav nav-tabs" role='tablist'>
                <li class="active" role="presentation">
                  <a data-toggle="tab" href="#owner" role="tab" aria-controls="owner">Owner</a>
                </li>
                <li role="presentation">
                  <a data-toggle="tab" href="#evaluation" role="tab" aria-controls="evaluation">Evaluation</a>
                </li>
                <li class="presentation">
                  <a data-toggle="tab" href="#assessed" role="tab" aria-controls="assessed">Assessed</a>
                </li>
                <li role="presentation">
                  <a data-toggle="tab" href="#feature" role="tab" aria-controls="feature">Feature</a>
                </li>
                <li role="presentation">
                  <a data-toggle="tab" href="#links" role="tab" aria-controls="links">Links</a>
                </li>
            </ul>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="owner" >
              <h3 class="text-center text-info">Owner</h3>
              <hr>
              <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="owner">Owner:</label>
                    <input type="text" name="owner" placeholder="Owner" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="num_of_properties">Num Of Properties:</label>
                    <input type="text" name="num_of_properties" placeholder="Num Of Properties" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="type_of_owner">Type Of Owner:</label>
                    <input type="text" name="type_of_owner" placeholder="Type Of Owner" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="private_owners">Private Owners:</label>
                    <input type="text" name="private_owners" placeholder="Private Owners" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="non_seller">Non Seller:</label>
                    <input type="text" name="non_seller" placeholder="Non Seller" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="companies_gov">Companies Gov:</label>
                    <input type="text" name="companies_gov" placeholder="Companies Gov" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="trusts">Trusts:</label>
                    <input type="text" name="trusts" placeholder="Trusts" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="mailing_address">Mailing Address:</label>
                    <input type="text" name="mailing_address" placeholder="Mailing Address" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="mailing_city">Mailing City:</label>
                    <input type="text" name="mailing_city" placeholder="Mailing City" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="mailing_state">Mailing State:</label>
                    <input type="text" name="mailing_state" placeholder="Mailing State" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="mailing_zip">Mailing Zip:</label>
                    <input type="text" name="mailing_zip" placeholder="Mailing Zip" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="mailing_country">Mailing Country:</label>
                    <input type="text" name="mailing_country" placeholder="Mailing Country" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="evaluation">
              <h3 class="text-center text-info">Evaluation</h3>
              <hr>
              <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="sale_type">Sale Type:</label>
                    <input type="text" name="sale_type" placeholder="Sale Type" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="sale_qual">Sale Qual:</label>
                    <input type="text" name="sale_qual" placeholder="Sale Qual" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="sale_date">Sale Date:</label>
                    <input type="text" name="sale_date" placeholder="Sale Date" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="sale_amt">Sale Amt:</label>
                    <input type="text" name="sale_amt" placeholder="Sale Amt" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="percentage">Percentage:</label>
                    <input type="text" name="percentage" placeholder="Percentage" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="total">total:</label>
                    <input type="text" name="total" placeholder="Total" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="assessed">
              <h3 class="text-center text-info">Assessed</h3>
              <hr>
              <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="living_sqft">Living Sqft:</label>
                    <input type="text" name="living_sqft" placeholder="Living Sqft" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="actual_sqft">Actual Sqft:</label>
                    <input type="text" name="actual_sqft" placeholder="Actual Sqft" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="just_value_last_sale_date">Just Value Last Sale Date:</label>
                    <input type="text" name="just_value_last_sale_date" placeholder="Just Value Last Sale Date" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="yards_od_ownership">Yards Od Ownership:</label>
                    <input type="text" name="yards_od_ownership" placeholder="Yards Od Ownership" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="new_last_sale_date">New Last Sale Date:</label>
                    <input type="text" name="new_last_sale_date" placeholder="New Last Sale Date" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="last_sale_date">Last Sale Date:</label>
                    <input type="text" name="last_sale_date" placeholder="Last Sale Date" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="sale_amount">Sale Amount:</label>
                    <input type="text" name="sale_amount" placeholder="Sale Amount" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="actial_sale">Actial Sale:</label>
                    <input type="text" name="actial_sale" placeholder="Actial Sale" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="land_bldg_value">Land Bldg Value:</label>
                    <input type="text" name="land_bldg_value" placeholder="Land Bldg Value" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="diff">Diff:</label>
                    <input type="text" name="diff" placeholder="Diff" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="feature" >
              <h3 class="text-center text-info">Feature</h3>
              <hr>
              <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="adjusted_sqft">Adjusted Sqft:</label>
                    <input type="text" name="adjusted_sqft" placeholder="Adjusted Sqft" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="lot_size">Lot Size:</label>
                    <input type="text" name="lot_size" placeholder="Lot Size" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="bed">Bed:</label>
                    <input type="text" name="bed" placeholder="Bed" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="bath">Bath:</label>
                    <input type="text" name="bath" placeholder="Bath" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="stories">Stories:</label>
                    <input type="text" name="stories" placeholder="Stories" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="units">Units:</label>
                    <input type="text" name="units" placeholder="Units" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="year_built">Year Built:</label>
                    <input type="text" name="year_built" placeholder="Year Built" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="form-group">
                    <label for="effective_year_built">Effective Year Built:</label>
                    <input type="text" name="effective_year_built" placeholder="Effective Year Built" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="links" >
              <h3 class="text-center text-info">Link</h3>
              <hr>
              <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="code">Code:</label>
                    <input type="text" name="code" placeholder="Code" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="country_link">Country Link:</label>
                    <input type="text" name="country_link" placeholder="Country Link" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="tax_link">Tax Link:</label>
                    <input type="text" name="tax_link" placeholder="Tax Link" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="panel-footer text-right text-center" style="background-color:rgba(204, 204, 204, 0.3);">
        <button class="btn btn-primary disabled" >To Register<span class="glyphicon glyphicon-"></span></button>
      </div>
    </form>
  </div>
<br>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection
