 @extends('backend.layout')
 @section('content')

 
   
    <div class="card">
        <div class="card-header">Product Form</div>
       
           
              
  <div class="card-body">
    
<form action=" {{  $action }}" method="post" enctype= "multipart/form-data">
  @if(isset($product->id))
  @method('PATCH')
  @endif
             @csrf 
            <label>Avatar</label>
            <input type="file" name="photo" class ="form-control"> </br>
            <label>Name</label>
            <input type="text" name="name" id="name" class ="form-control" value=" {{ isset($product->name) ? $product->name:'' }}"> </br>
             <label>category_id</label>
            <input type="text" name="category_id" id="name" class ="form-control" value=" {{ isset($product->category_id) ? $product->category_id:'' }}" required> </br>
         
           
								
					

            <label>description</label>
            <input type="text" name="description"  class ="form-control" value="{{ isset($product->description)?$product->description:'' }}"> </br>
             <label>content</label>
            <input type="text" name="content"  class ="form-control" value="{{ isset($product->content)?$product->content:'' }}"> </br>
             <label>Sản phẩm nổi bật</label>

           
            <input type="checkbox"  @if(isset($product->hot) && $product->hot == 1)checked  @endif name="hot" id="hot"  > 

</br>
             <label>price</label>
            <input type="text" name="price"  class ="form-control" value="{{ isset($product->price)?$product->price:'' }}"> </br>
            <label>discount</label>
            <input type="text" name="discount"  class ="form-control" value="{{ isset($product->discount)?$product->discount:'' }}"> </br> 

            

            <input type="submit" value="Save" class="btn btn-success"> 


</form>

</div>
</div>


 



    
  @stop
