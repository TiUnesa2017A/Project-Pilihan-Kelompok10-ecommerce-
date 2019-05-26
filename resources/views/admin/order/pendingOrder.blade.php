@extends('admin.includes.main_admin')
@section('title','All Orders')
@section('content')
  
<div class="container">
  <div class="row">
     @include('admin.includes.sidebar_admin')
      <div class="col-md-9">
        <div class="panel panel-primary">
          <div class="panel-heading">All Orders</div>
            <div class="panel-body">

      @forelse($pendingOrder as $order)  
        <div class="row">
        <div class="col-md-8 ">
          <div class="panel panel-default"> 
            <div class="panel-body"> 
          <div class="row">
           <div class="col-md-5" style="padding-right: 0;">
              <div class="thumnail-image">
                <img src="{{asset('/images/'.$order->image)}}" alt="" />
                 </div>
              </div>
           <div class="col-md-7">  
            <h4 style="margin-bottom:4px; margin-top: 0"><b>{{$order->title}}</b></h4>  
            <span><i class="fa fa-clock-o"></i> {{$order->created_at->diffForHumans()}}</span>
             @if($order->status =='0')  
                  <div class="alert alert-warning" style=" margin-bottom: 0px;">
                     <i class="fa fa-exclamation"></i>  Not yet send.
                    </div>
                  @else
             <div class="alert alert-success" style=" margin-bottom: 0px;">
                     <i class="fa fa-check"></i>  Delivered.
                    </div>
                  @endif 
              </div> 
           </div> <!-- row   --> 
          </div> <!-- panel body --> 
       <div class="panel-footer">
          <div class="row">
            <div class="panel-body">
                <table class="table table-bordered" style="    margin-bottom: 0;">
              <thead>
                <tr>
                  <th>Qty</th>
                  <th>Size</th>
                  <th>Tax</th>
                  <th>Subtotal</th>
                  <th>Grand Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$order->qty}} </td>
                  <td>{{$order->size}} </td>
                  <td>{{$order->tax}} </td>
                  <td>{{$order->subtotal}} </td>
                  <td> {{$order->total}}</td>
                </tr> 
                 </tbody>
                </table> 
                  </div>
                <div class="col-md-4"></div>
                <div class="col-md-8"></div>
              </div>
            </div> <!-- panel footer -->      
          </div>
      </div> <!-- col md 8 --> 
         <div class="col-md-4">
          <div class="panel-group">
            <div class="panel panel-default">
            <div class="panel-body">
              <div class="alert alert-info" style=" margin-bottom: 0px;">
                 <h4>{{$order->full_name}}</h4>
                 <p>{{$order->phone}}</p>
                 <p>{{$order->address}},{{$order->city}},{{$order->zip}}</p> 
              </div>
        </div>
      </div>
     </div>
       <div class="panel-group">
        <div class="panel panel-default">
           <div class="panel-body">
              <div class="alert alert-info" style=" margin-bottom: 0px;">
                @if($order->status == '0')  
                  <form action="{{route('statusOrder', $order->id)}}" method="post">
                  {{csrf_field()}} 
                  <input type="hidden" value="1" name="status" {{$order->status==1}}>  
                  <input type="submit" class="btn btn-success btn-block" value="Send order">
                 </form>
                 @else
                  <form action="#" method="post">
                  {{csrf_field()}} 
                  <input type="hidden" value="0" name="status" {{$order->status==1}}>  
                  <input type="submit" class="btn btn-info btn-block" value="Cancel Order" >
                 </form>
                 @endif
              </div>
            </div>
          </div>
         </div>
          </div> <!-- col md 4 --> 
        </div> 
          <hr style="margin-top: 0;">

          @empty

          <div class="text-center">no pending orders.</div>

           @endforelse
           
          </div>
            </div>
            </div>
          </div>
        </div>

      @endsection