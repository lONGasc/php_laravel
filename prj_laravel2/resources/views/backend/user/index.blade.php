 @extends('backend.layout')
 @section('content')

 
    <div class="tab-content">
        <button class="btn btn-primary"> <a class="text-light "  href=" {{ url('admin/user/create') }}">Add new user</a> </button>
      <table class="table table-light">
  <thead>
    <tr>
      
      <th scope="col">photo</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      
      <td scope="row">
        @if(file_exists('images/'.$user->photo))
            <img style="width:150px;height: 150px" src="{{ asset('images/'.$user->photo) }}">
            @endif
      </td>
    
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      
      <td><a href=" {{url('admin/user'.'/'.$user->id) }}" class="btn btn-success">view</a>
          <a href="{{url('admin/user'.'/'.$user->id.'/edit') }}" class="btn btn-warning">edit</a>
          <form action="{{ url('admin/user/'.$user->id)}}" method="post" style="display: inline;">
             @csrf
              @method("DELETE")
          <button class="btn btn-danger" onclick="return confirm('bạn có muốn xóa {{ $user->name }}') ">delete</button> 
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>

</table>
 {{$users->render() }}

  @stop
