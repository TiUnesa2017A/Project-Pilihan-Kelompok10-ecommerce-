@extends('includes.head2')

@section('content')

 
 <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->
<hr>
  <!-- product category -->
  <section id="aa-product-details" style="margin-top: -40px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="{{asset('../image/'.$product->image)}}" class="simpleLens-lens-image"><img src="{{asset('../image/'.$product->image)}}" class="simpleLens-big-image" style="height: 300px;"></a></div>
                      </div>
                      <div class="simpleLens-thumbnails-container">
                          <a data-big-image="{{asset('../image/'.$product->image)}}" data-lens-image="{{asset('../image/'.$product->image)}}" class="simpleLens-thumbnail-wrapper" >
                            <img src="{{asset('../image/'.$product->image)}}" style="width: 90px; height: 65px;">
                          </a>                                    
                          <a data-big-image="{{asset('../image/'.$product->image)}}" data-lens-image="{{asset('../image/'.$product->image)}}" class="simpleLens-thumbnail-wrapper" >
                            <img src="{{asset('../image/'.$product->image)}}" style="width: 90px; height: 65px;">
                          </a>
                          <a data-big-image="{{asset('../image/'.$product->image)}}" data-lens-image="{{asset('../image/'.$product->image)}}" class="simpleLens-thumbnail-wrapper" >
                            <img src="{{asset('../image/'.$product->image)}}" style="width: 90px; height: 65px;">
                          </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{$product->name}}</h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">Rp. {{ number_format($product->price, 2, ',','.') }}</span>
                      <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                    </div>
                    <p>Barang ini telah telah terbukti kualitasnya dan lolos kualifikasi Kami!!!</p>
                    <div class="aa-prod-quantity">
                      <p>Quantity in Stock:  {{$product->quantity}}<span></span></p>
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn">Wishlist</a>
                      <a class="aa-add-to-cart-btn" href="{{route('addToCart', $product->id)}}">Add To Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2" style="justify-content: center; line-height: 40px;">
                <li><a href="#description" data-toggle="tab" style="padding-right: 20px;">Description</a></li>
                <li><a href="#review" data-toggle="tab" style="padding-left: 20px;">Reviews</a></li>                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane in active" id="description">
                  <p>{{$product->description}}</p>
                    <br><br>
                </div>
                <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4>Total Customers Reviews</h4> 
                   <ul class="aa-review-nav">
                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="" alt="image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Fahri MM</strong> - <span>Just Now</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="" alt="image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Fahri MM</strong> - <span>Just Noe</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                   </ul>
                   <h4>Add a review</h4>
                   <div class="aa-your-rating">
                     <p>Your Rating</p>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                   </div>
                   <!-- review form -->
                   <form action="" class="aa-review-form">
                      <div class="form-group">
                        <label for="message">Your Review</label>
                        <textarea class="form-control" rows="3" id="message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>  

                      <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                   </form>
                 </div>
                </div>            
              </div>
            </div>
            <!-- Related product -->
            
            <!-- <div class="aa-product-related-item">
              <h3>Related Products</h3>
              <ul class="aa-product-catg aa-related-item-slider">
                start single product item
                <li>
                  <figure>
                    <a class="aa-product-img"><img src="{{asset('images/slider/rlpro.jpg')}}" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                     <figcaption>
                      <h4 class="aa-product-title"><a>Polo T-Shirt</a></h4>
                      <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                    </figcaption>
                  </figure>                     
                  <div class="aa-product-hvr-content">
                    <a  data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a  data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                    <a  data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                  </div> -->

                  <!-- product badge -->
<!--                   <span class="aa-badge aa-sale" href="#">SALE!</span>
                </li>
                
                start single product item
                <li>
                  <figure>
                    <a class="aa-product-img" ><img src="{{asset('images/slider/rlpro.jpg')}}" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                     <figcaption>
                      <h4 class="aa-product-title"><a >This is Title</a></h4>
                      <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                    </figcaption>
                  </figure>                     
                  <div class="aa-product-hvr-content">
                    <a  data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a  data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                    <a  data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>   
                  </div> -->
                  <!-- product badge -->
                  <!-- <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                </li>                                                                               
              </ul>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->


@endsection
