 @extends('backend.layout')
 @section('content')

 
   
    <div class="card">
        <div class="card-header">Category Form</div>
       
           
              
  <div class="card-body">
    
<form action=" {{  $action }}" method="post" enctype= "multipart/form-data">
  @if(isset($category->id))
  @method('PATCH')
  @endif
             @csrf 
            <label>Danh mục lớn</label>
            <input type="text" name="name" id="name" class ="form-control" value=" {{ isset($category->name) ? $category->name:'' }}"> </br>
            
            <div style="display: none;" >
            <label>Danh mục lớn</label>
            <input type="text" name="parent_id" id="parent_id" class ="form-control" value=" {{ isset($category->parent_id) ? $category->parent_id: 0 }}"> 
        </br>
            </div>
            

            <input type="submit" value="Save" class="btn btn-success"> 


</form>

</div>
</div>


 



    
  @stop
