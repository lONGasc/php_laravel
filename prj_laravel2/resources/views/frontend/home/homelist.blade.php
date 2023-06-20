@extends('frontend.layouttrangtrong')
 @section('content')

   @foreach($category as $rows)
<div class="special-collection">
	
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="head-tabs head-tab1 col-lg-3">
                <h2>
                   {{ $rows->name}}
                </h2>
              </div>              
              
                
              </div>
              <div class="clearfix"> 
                <style type="text/css">
                  .discount{position: absolute; width: 50px; line-height: 50px; text-align: center; background: black; color: white; border-radius: 50px;}
                </style>
            </div>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex"> 
              
              <!-- box product -->
              @foreach($products as $rows)
              <div class="col-xs-6 col-md-4 col-sm-6 ">
              	<div class="discount">{{ $rows->discount }} %</div>
                <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                  <div class="image"> <a href="{{ url('home/product/'.$rows->id) }}"><img style="width: 200px;height: 200px" src="{{ asset('images/'.$rows->photo) }}" title="product ..." alt="product ..." class="img-responsive"></a> </div>
                  <div class="info">
                    <h3 class="name"><a href="{{ url('home/product/'.$rows->id) }}">{{ $rows->name }}</a></h3>
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
        @endforeach
 <!-- paging -->
                <div style="clear: both;"></div>
                <div style="margin-top: -50px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                  <ul class="pagination">
                    <li class="page-item"><span>Trang</span></li>
                   >
                  </ul>
                </div>
                <!-- end paging --> 


 @stop