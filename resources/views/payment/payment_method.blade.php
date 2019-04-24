@extends('includes.head2')
@section('title','Payment Method')
@section('content')

<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>

<div class="container"> 
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li> 
  <li class="breadcrumb-item active">Payment Method</li>
</ol>
<div class="row">
<div class="col-md-8 ">
  <div class="panel panel-default">
    <div class="panel-heading">Payment Method</div>
      <div class="panel-body"> 
        @foreach($cartItems as $cart)
      <br>
        <div class="row">
         <div class="col-md-5">
            <div class="thumnail-image">
          <img src="http://localhost:8000/image/{{$cart->options->has('image')?$cart->options->image:''}}" alt="" />
           </div>
        </div>
      <div class="col-md-7">    
        <div class="title-product"> <h3 style="margin-top: 0;"><b>{{$cart->name}}</b></h3></div>
           <form action="{{route('updateCart',$cart->rowId)}}" method="post">
                {{ csrf_field() }}
                 {{ method_field('PUT') }}
               <input name="image" type="hidden" value="{{$cart->options->has('image')?$cart->options->image:''}}">
                  <div class="price"> <h4> {{$cart->price}}</h4></div>
        <div class="row">
        <div class="col-md-2">
            <label>QTY :</label>
        </div>
        <div class="col-md-8">
             <span>{{$cart->qty}}</span>
        </div>
         </div>
  
          <div class="row"> 
        <div class="col-md-2">
            
        </div>
          <div class="col-md-8">
               <span>{{$cart->options->has('size')?$cart->options->size:''}}</span>
        </div>
         </div>
         <br> 
       </form>  
        </div> 
       </div> <!-- row foreach --> 
      @endforeach
     </div> <!-- panel body --> 
       <div class="panel-footer">
          <div class="row">
            <div class="panel-footer">
           </div>
         <div class="col-md-7"> 
              <a href="{{route('cartIndex')}}" class="btn btn-success" style="background-color: #303734; border: none">Edit Cart</a>
          </div> 
          <div class="col-md-5">
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
                        Grand Total:$ {{Cart::total()}}
                      </b>
                  </div>
            </div>
          </div>
         </div>
        </div> <!-- panel footer -->      
        </div>
      </div> <!-- col md 8 --> 
         <div class="col-md-4">
          <div class="panel-group">
          <div class="panel panel-default">
           <div class="panel-body">
              <div class="alert alert-info" style=" margin-bottom: 0px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s 
              </div>
          </div>
         </div>
         </div>
           <a href="{{route('bankTransfer')}}" class="btn btn-success btn-lg btn-block">Bank Transfer </a>
           <a href="{{route('creditPayment')}}" class="btn btn-warning btn-lg btn-block">Credit Cart</a>
        </div> <!-- col md 4 --> 
      </div>
    </div> <!-- container -->

<br><br><br><br>

@endsection