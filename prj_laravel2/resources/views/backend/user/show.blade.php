 @extends('backend.layout')
 @section('content')

    <div class="card">
        <div class="card-header">Student info</div>
       
           
              
  <div class="card-body">
  	

<table class="table table-light">
  <thead>
    <tr>

     
      <th scope="col">Avatar</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
   
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
   
    <tr>

      <th scope="row" >
          @if(file_exists('images/'.$user->photo))
            <img style="width:150px;height: 150px" src="{{ asset('images/'.$user->photo) }}">
            @endif
      </th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
    
      <td>
      		<a href="{{url('admin/user'.'/'.$user->id.'/edit') }}" class="btn btn-warning">edit</a>
      		 <form action="{{ url('admin/user/'.$user->id)}}" method="post" style="display: inline;">
             @csrf
              @method("DELETE")
          <button class="btn btn-danger" onclick="return confirm('bạn có muốn xóa {{ $user->name }}') ">delete</button> 
          </form>
      </td>
    </tr>
    
  </tbody>
  
</table>


 
  </div>


            
        </div>
    </div>

  @stop