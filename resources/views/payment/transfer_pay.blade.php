@extends('includes.head2')
@section('title','Credit Card Payment')
@section('content')

<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>

<div class="main">  
    <h1>Credit Card Payment Method</h1>
    <div class="w3_agile_main_grids">
      <div class="w3layouts_main_grid_left">
        <div class="agileinfo_main_grid_left_grid">
          <h3>Your Payment Orders</h3>
          <ul>
            <li>Total Items: <span>{{Cart::count()}} Items</span></li>
            <li>01</li>
          </ul>
          <ul>
            <li>Tax: <span>Rp. {{Cart::tax()}}</span></li>
            <li>02</li>
          </ul>
          <ul>
            <li>Sub Total: <span>Rp. {{Cart::subtotal()}}</span></span></li>
            <li>03</li>
          </ul>
          <ul>
            <li>Grand Total: <span>Rp. {{Cart::subtotal()}}</span></span></li>
            <li>04</li>
          </ul>
        </div>
        <div class="agile_amount"> <br>
          <h3 style="font-size: 26px;">Please Make a Transfer Purchase to Here</h3> <br>
          <h4 style="font-size: 18px;">Bank BNI An Fahri Muhammad</h4> <br><br><br>
          <p style="color: black;">*Submit Your Data and Make the Transfer if you Allready Sure</p> <br>
        </div>
      </div>
      <div class="agileits_main_grid_right">
        <div class="wthree_payment_grid">
          <h2 style="text-align: center;">Bank Transfer Payment Method</h2>
          <div id="horizontalTab">
            <ul class="resp-tabs-list" style="text-align: center; margin-left: 35px;">
              <li><img src="..\images\bank.png"></li>
            </ul>
            <div class="resp-tabs-container">
              <div class="agileits_w3layouts_tab1">
                <form action="#" method="post" class="creditly-card-form agileinfo_form">
                  <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                    <div class="credit-card-wrapper">
                      <div class="first-row form-group">
                        <div class="controls">
                          <label class="control-label">Name on Card</label>
                          <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name here.....">
                        </div>
                        <div class="controls">
                          <label class="control-label">Address</label>
                          <input class="billing-address-name form-control" type="text" name="name" placeholder="Address here....">
                        </div>
                        <div class="controls">
                          <label class="control-label">City</label>
                          <input class="billing-address-name form-control" type="text" name="name" placeholder="City Name">
                        </div>
                        <div class="controls">
                          <label class="control-label">Phone Number</label>
                          <input class="billing-address-name form-control" inputmode="numeric" type="text" name="name" placeholder="Phone Number Here....">
                        </div>
                        <div class="controls">
                          <label class="control-label">ZIP Code</label>
                          <input class="billing-address-name form-control" inputmode="numeric" type="text" name="name" placeholder="ZIP Code Here....">
                        </div>
                        <div class="controls">
                          <label class="control-label">Date Of Birth</label>
                          <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                        </div>
                      </div>
                      <button class="submit"><span>Make a payment <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></button>
                    </div>
                  </section>
                </form>
              </div>
              <div class="agileits_w3layouts_tab2">
               <!-- second paymnet (Optional) with js -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"> </div>
    </div>
  </div>
  <br><br><br>
@endsection

