@extends('frontend.layouttrangchu')
 @section('content')

<!-- end middle header --> 
<!-- bottom header -->


      
        
        <!-- category product -->
        <div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="head-tabs head-tab1 col-lg-11">
                <h2>Hot products</h2>
              </div>
<div class="clearfix"> 
                <style type="text/css">
                  .discount{position: absolute; width: 50px; line-height: 50px; text-align: center; background: black; color: white; border-radius: 50px;}
                </style>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex"> 
              
              <!-- box product -->
              @foreach($hotproducts as $rows)
              <div class="col-xs-6 col-md-2 col-sm-6 ">
              	<div class="discount">{{ $rows->discount }} %</div>
                <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                  <div class="image"> <a href="{{url('home/product/'.$rows->id)}}"><img style="width: 200px;height: 200px" src="{{ asset('images/'.$rows->photo) }}" title="product ..." alt="product ..." class="img-responsive"></a> </div>
                  <div class="info">
                    <h3 class="name"><a href="{{url('home/product/'.$rows->id)}}">{{ $rows->name }}</a></h3>
                    <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> {{ number_format($rows->price) }}</span> ₫ </span> </p>
                    <p class="price-box"> <span class="special-price"> <span class="price product-price"> {{ number_format($rows->price - ($rows->price * $rows->discount)/100) }} </span>₫ </span> </p>
                   
                    <div class="action-btn">
                      <form>
                        <a href="#" class="button">Add to Cart</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            
              <!-- end box product --> 
            </div>
          </div>
        </div>
    </div>

      
        <!-- /category product --> 
        

        <!-- ------------------------------------------------------- -->
          <div class="special-collection">
          <div class="tabs-container">
          	 @foreach($categories as $value)
            <div class="row" style="margin-top:10px;">
              <div class="head-tabs head-tab1 col-lg-11">
                <h2>{{$value->name }}</h2>
              </div>
<div class="clearfix"> 
                <style type="text/css">
                  .discount{position: absolute; width: 50px; line-height: 50px; text-align: center; background: black; color: white; border-radius: 50px;}
                </style>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex"> 
              
              <!-- box product -->
              @foreach($products as $rows)
              @if($rows->category_id == $value->id)
              <div class="col-xs-6 col-md-2 col-sm-6 ">
              	<div class="discount"> {{ $rows->discount }} %</div>
                <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                  <div class="image"> <a href="#"><img style="width: 200px;height: 200px" src="{{ asset('images/'.$rows->photo) }}  " title="product ..." alt="product ..." class="img-responsive"></a> </div>
                  <div class="info">
                    <h3 class="name"><a href="#">{{ $rows->name }}</a></h3>
                    <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> {{ number_format($rows->price) }}</span> ₫ </span> </p>
                    <p class="price-box"> <span class="special-price"> <span class="price product-price"> {{ number_format($rows->price - ($rows->price * $rows->discount)/100) }} </span>₫ </span> </p>
                   
                    <div class="action-btn">
                      <form>
                        <a href="#" class="button">Add to Cart</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @endif
              @endforeach
              @endforeach
            
              <!-- end box product --> 
            </div>
          </div>
        </div>
    </div>

      
        <!-- /category product --> 
        
    

@stop