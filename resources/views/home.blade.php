@extends('includes.head2')

@section('content')


  @if (session('status'))
    <div class="alert alert-success" role="alert">
     {{ session('status') }}
    </div>
  @endif
   
<!-- wpf loader Two -->
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up" class="scrollToTop" href="#"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('images/slider/slider4.jpg')}}" alt="Men slide img" />
              </div>
              <div class="seq-title">
               <span data-seq>Save Up to 50% Off</span>                
                <h2 data-seq>New Product</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="{{route('produk')}}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('images/slider/slider5.jpg')}}" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 40% Off</span>                
                <h2 data-seq>All Collections</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="{{route('produk')}}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('images/slider/slider4.jpg')}}" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 75% Off</span>                
                <h2 data-seq>Better Product</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="{{route('produk')}}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('images/slider/slider5.jpg')}}" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 75% Off</span>                
                <h2 data-seq>Exclusive Product</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="{{route('produk')}}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="{{asset('images/slider/slider4.jpg')}}" alt="Male Female slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 50% Off</span>                
                <h2 data-seq>Best Product</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="{{route('produk')}}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>                   
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="{{asset('images/slider/img3.jpg')}}" alt="img">                    
                    <div class="aa-prom-content">
                      <span>75% Off</span>
                      <h4><a href="#">Product 1</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('images/slider/img1.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="#">Product 2</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('images/slider/img2.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="#">Product 3</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('images/slider/img2.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="#">Product 4</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('images/slider/img1.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>25% Off</span>
                        <h4><a href="#">Product 5</a></h4>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo section -->
    <br>
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                  <br>
                 <ul class="nav nav-tabs aa-products-tab" style="justify-content: center;">
                    <li class=""><a href="#men" data-toggle="tab">Kategori 1</a></li>
                    <li><a href="#women" data-toggle="tab">kategori 2</a></li>
                    <li><a href="#sports" data-toggle="tab">kategori 3</a></li>
                    <li><a href="#electronics" data-toggle="tab">kategori 4</a></li>
                  </ul>
                  <br><br>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start product category 2 -->
                    <div class="tab-pane in active" id="men">
                      <ul class="aa-product-catg">
                       @foreach($products as $product)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="{{asset('../image/'.$product->image)}}" style="height: 270px; width: 550px;" alt=""></a>
                            <a class="aa-add-card-btn"href="{{route('addToCart', $product->id)}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title">{{$product->name}}</h4>
                              <span class="aa-product-price">Rp. {{ number_format($product->price, 2, ',','.') }}</span>
                            </figcaption>
                            <figcaption>
                              <h4 class="aa-product-title">Quantity : </h4>
                              <span class="aa-product-price">{{$product->quantity}}</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Rate This Product"><span class="fa fa-star"></span></a>
                            <a href="{{route('product.show', $product->id)}}" title="View Product Detail"  data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li> 
                       @endforeach                        
                      </ul>
                        <a class="aa-browse-btn" href="{{route('produk')}}">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / product category 2 -->
                    
                    <!-- start product category 2 -->
                    <div class="tab-pane fade" id="women">
                      <ul class="aa-product-catg">
                       @foreach($products as $product)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="{{asset('../image/'.$product->image)}}" style="height: 270px; width: 550px;" alt=""></a>
                            <a class="aa-add-card-btn"href="{{route('addToCart', $product->id)}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title">{{$product->name}}</h4>
                              <span class="aa-product-price">Rp. {{$product->price}}</span>
                            </figcaption>
                            <figcaption>
                              <h4 class="aa-product-title">Quantity : </h4>
                              <span class="aa-product-price">{{$product->quantity}}</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Rating This"><span class="fa fa-star"></span></a>
                            <a href="{{route('product.show', $product->id)}}" data-toggle2="tooltip" data-placement="top" title="View Product Detail" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li> 
                       @endforeach                        
                      </ul>
                        <a class="aa-browse-btn" href="{{route('produk')}}">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / women product category -->
                    <!-- start product category 3-->
                    <div class="tab-pane fade" id="sports">
                      <ul class="aa-product-catg">
                       @foreach($products as $product)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="{{asset('../image/'.$product->image)}}" style="height: 270px; width: 550px;" alt=""></a>
                            <a class="aa-add-card-btn"href="{{route('addToCart', $product->id)}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title">{{$product->name}}</h4>
                              <span class="aa-product-price">Rp. {{$product->price}}</span>
                            </figcaption>
                            <figcaption>
                              <h4 class="aa-product-title">Quantity : </h4>
                              <span class="aa-product-price">{{$product->quantity}}</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-star"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li> 
                       @endforeach                   
                      </ul>
                        <a class="aa-browse-btn justify-content-center text-center" href="{{route('produk')}}" style="margin-bottom: 35px; margin-left: 41.4%;">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / product category 3 -->
                    <!-- start electronic product category -->
                    <div class="tab-pane fade" id="electronics">
                      <ul class="aa-product-catg">
                       @foreach($products as $product)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="{{asset('../image/'.$product->image)}}" style="height: 270px; width: 550px;" alt=""></a>
                            <a class="aa-add-card-btn"href="{{route('addToCart', $product->id)}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title">{{$product->name}}</h4>
                              <span class="aa-product-price">Rp. {{$product->price}}</span>
                            </figcaption>
                            <figcaption>
                              <h4 class="aa-product-title">Quantity : </h4>
                              <span class="aa-product-price">{{$product->quantity}}</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-star"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li> 
                       @endforeach                        
                      </ul>
                        <a class="aa-browse-btn " href="{{route('produk')}}">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / product category 4 -->
                  </div>
                  <!-- quick view modal -->                    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  
  <!-- / popular section -->
  <!-- Support section -->
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="{{asset('images/slider/ppl.png')}}" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Fahri MM</p>
                    <span>CEO</span>
                    <a href="#">The Dagels Team</a>
                  </div>
                </div>
              </li>
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="{{asset('images/slider/ppl.png')}}" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Fahri MM</p>
                    <span>CEO</span>
                    <a href="#">The Dagels Team</a>
                  </div>
                </div>
              </li>
               <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="{{asset('images/slider/ppl.png')}}" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Fahri MM</p>
                    <span>CEO</span>
                    <a href="#">The Dagels Team</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->


  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="{{asset('images/slider/gj.jpg')}}" alt=""></a></li>
              <li><a href="#"><img src="{{asset('images/slider/grb.jpg')}}" alt=""></a></li>
              <li><a href="#"><img src="{{asset('images/slider/gj.jpg')}}" alt=""></a></li>
              <li><a href="#"><img src="{{asset('images/slider/grb.jpg')}}" alt=""></a></li>
              <li><a href="#"><img src="{{asset('images/slider/gj.jpg')}}" alt=""></a></li>
              <li><a href="#"><img src="{{asset('images/slider/grb.jpg')}}" alt=""></a></li>
              <li><a href="#"><img src="{{asset('images/slider/gj.jpg')}}" alt=""></a></li>
              <li><a href="#"><img src="{{asset('images/slider/grb.jpg')}}" alt=""></a></li>
              <li><a href="#"><img src="{{asset('images/slider/gj.jpg')}}" alt=""></a></li>
              <li><a href="#"><img src="{{asset('images/slider/grb.jpg')}}" alt=""></a></li>
              <li><a href="#"><img src="{{asset('images/slider/gj.jpg')}}" alt=""></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->



@endsection
