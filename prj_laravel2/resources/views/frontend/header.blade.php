<!-- header -->

<header id="header">
<!-- top header -->
<div class="top-header">
  <div class="container">

  </div>
</div>
<!-- end top header --> 
<!-- middle header -->
<div class="mid-header">
<div class="container">
 
</div>
<!-- end middle header --> 
<!-- bottom header -->
<?php      
          $cate  = DB::table('categories')->where("parent_id","=",0)->latest()->get();   ?>
<div class="bottom-header">
  <div class="container">
    <div class="clearfix">
      <ul class="main-nav hidden-xs hidden-sm list-unstyled">
        <li class="active"><a href="{{ url('home') }}">Trang chủ</a></li>
        <li class="has-submenu"> <a href="{{ url('home') }}"> <span>Sản phẩm</span><i class="fa fa-caret-down" style="margin-left: 5px;"></i> </a>
          <ul class="list-unstyled level1">
            
         
            
  @foreach($cate as $rows)
            <li><a href="{{ url('home/category/'.$rows->id) }}">{{ $rows->name }} </a></li>
         @endforeach
          </ul>
        </li>
       
  
      </ul>
      <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
     
    </div>
  </div>
</div>
<!-- end bottom header -->
</header>
<!-- end header -->