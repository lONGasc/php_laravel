 @extends('backend.layout')
 @section('content')

 
   
    <div class="card">
        <div class="card-header">User Form</div>
       
           
              
  <div class="card-body">
    
<form action=" {{  $action }}" method="post" enctype= "multipart/form-data">
  @if(isset($user->id))
  @method('PATCH')
  @endif
             @csrf 
            <label>Avatar</label>
            <input type="file" name="photo" class ="form-control"> </br>
            <label>Name</label>
            <input type="text" name="name" id="name" class ="form-control" value="{{ isset($user->name)?$user->name:'' }}"> </br>

            <label>Email</label>
            <input type="text" name="email"  class ="form-control" value="{{ isset($user->email)?$user->email:'' }}"> </br>

            <label>Password</label>
            <input type="text" name="password"  class ="form-control" @if(isset($user->email)) placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" @else required @endif> </br>

            <input type="submit" value="Save" class="btn btn-success"> 


            </form>
</form>


 
  </div>


            
        </div>
    </div>
  </div>
  @stop
