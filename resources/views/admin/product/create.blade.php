@extends('admin.includes.main_admin')
@section('title','Create Product')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">AllProducts</div>
      <div class="panel-body">
        
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
          <div class="form_group">
            <label for="name">Name: </label>
            <input type="text" name="name" class="form-control" placeholder="Here....">
          </div>

          <div class="form_group">
            <label for="description">Descriptions: </label>
            <input type="text" name="description" class="form-control" placeholder="Here....">
          </div>

          <div class="form_group">
            <label for="price">Price: </label>
            <input type="text" name="price" class="form-control" placeholder="Here....">
          </div>

          <div class="form_group">
            <label for="image">Image: </label>
            <input type="file" name="image" class="form-control" placeholder="Here....">
          </div>

          <div class="form_group">
            <label for="quantity">Quantity: </label>
            <input type="text" name="quantity" class="form-control" placeholder="Here....">
          </div>
<br>
          <button type="submit" class="btn btn-info">Submit</button>
          
        </form>

        </div>
    </div>
    </div>
  </div>
</div>

@endsection