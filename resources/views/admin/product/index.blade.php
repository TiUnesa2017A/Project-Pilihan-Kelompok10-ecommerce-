@extends('admin.includes.main_admin')
@section('title','Product')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">AllProducts</div>
      <div class="panel-body">
        
        <table class="table table-hover">
          <thead>
            
            <tr>
              
              <th>Image</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Quantity</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach($products as $product)
            <tr>
              <td><img src="{{asset('/image/'.$product->image)}}" style="width: 100%;"></td>
              <td>{{$product -> name}}</td>
              <td>{{$product -> description}}</td>
              <td>{{$product -> price}}</td>
              <td>{{$product -> quantity}}</td>
              <td>
                <a href="{{route('product.edit', $product->id)}}" class="btn btn-success btn-sm">Edit</a>
              </td>
              <td>
                <form action="{{route('product.destroy', $product->id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}

                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
        <hr>

        </div>
    </div>

    <div class="text-center">
      {!!$products->links()!!}
    </div>

    </div>
  </div>
</div>

@endsection