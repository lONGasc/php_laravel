 @extends('frontend.layouttrangtrong')
 @section('content')


 
  @foreach($product as $row)

 <div class="top">
    <div class="row">
      <div class="col-xs-12 col-md-6 product-image">
      
        <div class="featured-image"> 
          <img src="{{ asset('images/'.$row->photo) }}" style="width: 100%;" class="img-responsive"/>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 info">
        <h1 itemprop="name">{{$row->name}}</h1>
      
        <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> {{ $row->price }}₫ </span></span></p>
        <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"> {{ number_format($row->price - $row->price * $row->discount/100) }} ₫ </span></span></p>
      
      </div>
    
    
      <!-- /rating -->
  </div>
</div>


<div class="middle" style="margin-top:20px;">
  <!-- chi tiet -->
  
  <!-- chi tiet -->

</div>
  @endforeach
  @stop