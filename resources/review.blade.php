@extends('admin.dashboard')
@section('title','Show All Category')
@section('content')

<link rel="stylesheet" type="text/css" href="rating.css">
<script type="text/javascript" src="rating.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>Admin Featueres</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active">Category Data tables</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-7 container">
          @include('includes.info') <br>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Category Data (Edit & Delete)</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="#{{$review->id}}-rating" data-toggle="modal"><i class="fa fa-trash pull-center"></i></a>

                  @if($products->comments->isEmpty())
                    <div class="text-center">No Review</div>
                  @else
                  @foreach($products->comments as $review)
                  <div class="post-item">
                    <div class="post-inner">
                      <div class="post-head clearfix">
                        <div class="col-md-2">
                          <img src="//a.disquscdn.com/1504815928/images/noavatar92.png" style="border-radius: 90px;">
                        </div>

                        <div class="col-md-10">
                          <p>{{$review->rating}}</p>
                          <p>{{$review->comment}}</p>
                            <hr>
                          <p>by <a href="">{{$review->user->name}}</a></p>
                          <span class="pull-right"><small><i class="fa fa-clock-o"></i> {{$review->created_at->diffForHumans()}}</small></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @endif


                <div class="modal fade" id="{{$review->id}}-rating">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Make YOur Riview</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('comment',$products->id)}}" method="post"
                              role='form'>
                                {{csrf_field()}}
                                {{method_field('POST')}}
                                <div class="form-group">
                                  <div class="ratings form-control">
                                    <input type="radio" name="rating" id="rating" value="1">
                                    <input type="radio" name="rating" id="rating" value="2">
                                    <input type="radio" name="rating" id="rating" value="3">
                                    <input type="radio" name="rating" id="rating" value="4">
                                    <input type="radio" name="rating" id="rating" value="5">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="comment">Review</label>
                                  <input type="text" name="comment" class="form-control" placeholder="make review here">
                                </div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </form>
                          </div>
        <!--                  <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>

@endsection