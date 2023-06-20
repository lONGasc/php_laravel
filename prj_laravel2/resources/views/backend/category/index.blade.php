 @extends('backend.layout')
 @section('content')

 
    <div class="tab-content">
        <button class="btn btn-primary"> <a class="text-light "  href=" {{ url('admin/category/create') }}">Add new category</a> </button>
      <table class="table table-light">
  <thead>
    <tr>
     
      <th scope="col">danh mục</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $category->name }}</th>
  
      
      <td>
        <!-- <a href=" {{url('admin/category'.'/'.$category->id) }}" class="btn btn-success">view</a> -->
          <a href="{{url('admin/category'.'/'.$category->id.'/edit') }}" class="btn btn-warning">edit</a>
          <form action="{{ url('admin/category/'.$category->id)}}" method="post" style="display: inline;">
             @csrf
              @method("DELETE")
          <button class="btn btn-danger" onclick="return confirm('bạn có muốn xóa {{ $category->name }}') ">delete</button> 
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>

</table>
 {{$categories->render() }}

  @stop
