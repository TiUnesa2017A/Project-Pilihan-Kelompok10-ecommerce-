@extends('includes.head2')
@section('title','Cart')
@section('content')
  
  <hr>
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  
<div class="container"> 
<div class="row">
<div class="col-md-8 ">
  <div class="panel panel-default">
    <div class="panel-heading">Shopping Cart</div>
      <div class="panel-body">
    @foreach($cartItems as $cart)
<br>
    <div class="row">
     <div class="col-md-5">
        <div class="thumnail-image">
          <img src="http://localhost:8000/image/{{$cart->options->has('image')?$cart->options->image:''}}" class="img-responsive" alt="" />
           </div>
        </div>
    <div class="col-md-7">    
        <div class="title-product"> <h4 style="margin-top: 0;"><b>{{$cart->name}}</b></h4></div>
           <form action="{{route('updateCart', $cart->rowId)}}" method="post">
                {{ csrf_field() }}
                 {{ method_field('PUT') }}
               <input name="image" type="hidden" value="{{$cart->options->has('image')?$cart->options->image:''}}">
                  <div class="price"> <p> {{$cart->price}} </p></div>
    <div class="row">
        <div class="col-md-2">
            <label>QTY :</label>
        </div>
        <div class="col-md-8">
             <select  type="text" name="qty" class="form-control" >
                    <option value="{{$cart->qty}}" class="disable selected">{{$cart->qty}}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="6">7</option>
                        <option value="6">8</option>
                        <option value="6">9</option>
                        <option value="6">10</option>
              </select>
        </div>
    </div>
    <br>
    
    <br>
    <div class="row">
       <div class="col-md-4"></div>
         <div class="col-md-3">
            <button type="submit" class="btn btn-success btn-sm btn-block"><i class="fa fa-check"></i></button>
         </div>
       </form> 
        <div class="col-md-3"> 
            <form action="{{route('deleteCart', $cart->rowId)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                 <button type="submit" class="btn btn-danger btn-block btn-sm"><i class="fa fa-trash-o"></i></button>
            </form>

         </div>
        </div>
      </div>
     </div> <!-- row foreach --> <hr>
     @endforeach
      <br>
<div style="border: 1px solid grey;"></div>
  </div> <!-- panel body -->
       <div class="panel-footer">
          <div class="row">
            <div class="panel-footer">
           </div>
         <div class="col-md-5">
             <a href="{{route('product')}}" class="btn btn-success" style="background-color: #303734; border: none">Back to Shop</a>
              <a href="{{route('paymentMethod')}}" class="btn btn-success" style="background-color: #303734; border: none">Checkout Now</a>
          </div>
                     
          <div class="col-md-7">
             <div class="row">
                 <div class="col-md-5">
                     <b>
                      Items: Rp.{{Cart::count()}} <br>
                      Tax: {{Cart::tax()}} <br> 
                      </b>
                </div>
                  <div class="col-md-7">
                      <b>
                        Sub Total: Rp. {{Cart::subtotal()}} <br>
                        Grand Total: Rp. {{Cart::total()}} </b>
                  </div>
            </div>
          </div>
         </div>
      </div> <!-- panel footer -->       
    </div>
</div> <!-- col md 8 -->

         <div class="col-md-4">
           @include('includes.cart_sidebar')
        </div> <!-- col md 4 -->

    </div>
</div> <!-- container -->
  <br><br><br><br><br>

@endsection

