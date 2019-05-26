@extends('includes.head2')
@section('title','Bank Transfer')
@section('content')

<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>

<div class="container"> 
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="#">Payment Method</a></li>
  <li class="breadcrumb-item active">Credit Card</li>
</ol>
<div class="row">
<div class="col-md-8 ">
  <div class="panel panel-default">
    <div class="panel-heading">Credit Card</div>
      <div class="panel-body" style="background:rgb(217, 237, 247)">
    <form action="" method="post" id="payment-form">
     {{csrf_field()}}
      <div class="form-group">
      <label for="full_name">Full Name</label>
      <input type="text" name="full_name" class="form-control" value="" >
    </div> 
    <div class="form-group">
      <label for="address">Adress</label>
      <textarea type="text" name="address" class="form-control" placeholder="Your Adress.."></textarea>
    </div>
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" name="city" class="form-control" placeholder="Your City..">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" name="phone" class="form-control" placeholder="Your Phone..">
    </div>
    <div class="form-group">
      <label for="zip">Zip Code</label>
      <input type="text" name="zip" class="form-control" placeholder="Zip Code..">
    </div>
    <div class="form-group">
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>
    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>
  </div>
    <button type="submit" class="btn btn-success btn-block">Submit</button>
  </form>
    </div> <!-- panel body -->
         <div class="panel-footer">
          <div class="row">
            <div class="panel-footer">
           </div>
         <div class="col-md-7">
              <a href="{{route('paymentMethod')}}" class="btn btn-success" style="background-color: #303734; border: none"><< Payment Method</a>
          </div>
          <div class="col-md-5"></div>
         </div>
          </div> <!-- panel footer -->     
        </div>
    </div> <!-- col md 8 -->

         <div class="col-md-4">
        <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading"><div class="text-center">Info!</div></div>
           <div class="panel-body">
              <div class="alert alert-warning" style=" margin-bottom: 0px;">
               <div class="row">
                 <div class="col-md-5">
                     <b>
                      Items: {{Cart::count()}} <br>
                      Tax:$ {{Cart::tax()}}<br> 
                      </b>
                </div>
                  <div class="col-md-7">
                      <b>
                        Sub Total:$ {{Cart::subtotal()}}<br>
                        Grand Total:$ {{Cart::total()}}</b>
                  </div>
            </div>
              </div>
        </div>
      </div>
     </div>
         <div class="panel-group">
        <div class="panel panel-default">
           <div class="panel-body">
              <div class="alert alert-info" style=" margin-bottom: 0px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s 
              </div>
        </div>
      </div>
     </div>

     <div class="panel-group">
        <div class="panel panel-default">
           <div class="panel-body"> 
              <div class="alert alert-warning" style=" margin-bottom: 0px;"> 
              </div><br>
               <div class="alert alert-info" style=" margin-bottom: 0px;"> 
              </div><br>
               <div class="alert alert-warning" style=" margin-bottom: 0px;"> 
              </div>
        </div>
      </div>
     </div>
        </div> <!-- col md 4 -->
    </div>
</div> <!-- container --><br><br>

@endsection

<style type="text/css">
  /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  background-color: white;
  height: 40px;
  padding: 10px 12px;
  border-radius: 4px;
  border: 1px solid transparent;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
</style>

@section('js')

<script type="text/javascript">
  // Create a Stripe client.
var stripe = Stripe('pk_test_6pRNASCoBOKtIshFeQd4XMUh');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    lineHeight: '18px',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

function stripeTokenHandler(token) {
 
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
</script>

@endsection
