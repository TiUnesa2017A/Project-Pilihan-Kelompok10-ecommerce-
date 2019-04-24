@extends('includes.head2')
@section('title','Bank Transfer')
@section('content')

<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>

<div class="main">  
    <h1>Transfer Payment Method</h1>
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
          </ul>
        </div>
        <div class="agile_amount">
          <h3>Grand Total</h3>
          <h4>Rp. {{Cart::total()}}</h4>
          <p>Price allready includes all taxes</p>
        </div>
      </div>
      <div class="agileits_main_grid_right">
        <div class="wthree_payment_grid">
          <h2>Credit Card Payment</h2>
          <div id="horizontalTab">
            <ul class="resp-tabs-list">
              <li><img src="../images/visa.jpg" alt=" " /></li>
              <li><img src="../images/paypal.jpg" alt=" " /></li>
            </ul>
            <div class="resp-tabs-container">
              <div class="agileits_w3layouts_tab1">
                <form action="#" method="post" class="creditly-card-form agileinfo_form">
                  <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                    <div class="credit-card-wrapper">
                      <div class="first-row form-group">
                        <div class="controls">
                          <label class="control-label">Name on Card</label>
                          <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                        </div>
                        <div class="w3_agileits_card_number_grids">
                          <div class="w3_agileits_card_number_grid_left">
                            <div class="controls">
                              <label class="control-label">Card Number</label>
                              <input class="number credit-card-number form-control" type="text" name="number"
                                      inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
                                      placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                            </div>
                          </div>
                          <div class="w3_agileits_card_number_grid_right">
                            <div class="controls">
                              <label class="control-label">CVV</label>
                              <input class="security-code form-control"Â·
                                      inputmode="numeric"
                                      type="text" name="security-code"
                                      placeholder="&#149;&#149;&#149;">
                            </div>
                          </div>
                          <div class="clear"> </div>
                        </div>
                        <div class="controls">
                          <label class="control-label">Expiration Date</label>
                          <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                        </div>
                      </div>
                      <button class="submit"><span>Make a payment <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></button>
                    </div>
                  </section>
                </form>
              </div>
              <div class="agileits_w3layouts_tab2">
                <h3>Already have a paypal Account <a href="#">Login here</a></h3>
                <form action="#" method="post">
                  <input type="email" name="Email" placeholder="Email" required="">
                  <input type="password" name="Password" placeholder="Password" required="">
                  <input type="text" inputmode="numeric" name="pin" placeholder="Your Paypal Number" required="">
                  <input type="text" inputmode="numeric" name="pin" placeholder="Your Paypal PIN" required="">
                  <br><br>
                  <input type="submit" value="Login">
                </form>
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

