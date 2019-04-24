@extends('includes.head2')

@section('content')


<div class="productPage" style="margin-bottom: 50px;">
 <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Fashion</h2>
        <ol class="breadcrumb">
          <li><a href="{{route('home')}}">Home</a></li>         
          <li class="active">produk</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
  <br>

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container"> 
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <!-- <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select> -->
                </form>
                <form action="" class="aa-show-form">
                  <!-- <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select> -->
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <!-- <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a> -->
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
               
                
                <!-- start single product item -->
               @foreach($products as $product)
                <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src="{{asset('../image/'.$product->image)}}" style="height: 270px; width: 550px;" alt=""></a>
                    <a class="aa-add-card-btn"href="{{route('addToCart', $product->id)}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#">{{$product->name}}</a></h4>
                      <span class="aa-product-price">Rp. {{ number_format($product->price, 2, ',','.') }}   ||</span><span class="aa-product-price">   Qty: {{$product->quantity}}</span>
                      <p class="aa-product-descrip">{!! str_limit($product->description,100)!!}</p>
                    </figcaption>
                  </figure>                          
                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Rating This"><span class="fa fa-star"></span></a>
                    <a href="{{route('product.show', $product->id)}}" title="View Product Detail" data-target=""><span class="fa fa-search"></span></a>
                  </div>
                </li>   
               @endforeach                                       
              </ul>
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
                {!!$products->links()!!}
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Category</h3>
              <ul class="aa-catg-nav">
                <li><a href="#">Men</a></li>
                <li><a href="">Women</a></li>
                <li><a href="">Kids</a></li>
                <li><a href="">Electornics</a></li>
                <li><a href="">Sports</a></li>
              </ul>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Tags</h3>
              <div class="tag-cloud">
                <a href="#">Fashion</a>
                <a href="#">Ecommerce</a>
                <a href="#">Shop</a>
                <a href="#">Hand Bag</a>
                <a href="#">Laptop</a>
                <a href="#">Head Phone</a>
                <a href="#">Pen Drive</a>
              </div>
            </div>
            <!-- single sidebar -->
            
            <!-- single sidebar -->
            
            <!-- single sidebar -->
            
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>We Are The Best</h3>
              <div class="aa-recently-views">
                <div class="alert alert-info" style="margin-bottom: 90px; ">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s 
                </div>
              </div>                            
            </div>
          </aside>
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->
  <!-- / product category -->
</div>

@endsection