 @extends('backend.layout')
 @section('content')

 
    <div class="tab-content">
        <button class="btn btn-primary"> <a class="text-light "  href=" {{ url('admin/product/create') }}">Add new product</a> </button>
      <table class="table table-light">
  <thead>
    <tr>

      <th scope="col">danh mục</th>
      <th scope="col">photo</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">content</th>
      <th scope="col">hot</th>
      <th scope="col">price</th>
      <th scope="col">discount</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
    
      <th scope="row">{{ $product->category_id }}</th>
      <td scope="row">
        @if(file_exists('images/'.$product->photo))
            <img style="width:150px;height: 150px" src="{{ asset('images/'.$product->photo) }}">
            @endif
      </td>
    
      <td>{{ $product->name }}</td>
      <td>{{ $product->description }}</td>
      <td>{{ $product->content }}</td>
      <td><input type="checkbox" @if(isset($product->hot) && $product->hot == 1)checked  @endif name="hot" id="hot"> </td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->discount }} %</td>
      
      <td><a href=" {{url('admin/product'.'/'.$product->id) }}" class="btn btn-success">view</a>
          <a href="{{url('admin/product'.'/'.$product->id.'/edit') }}" class="btn btn-warning">edit</a>
          <form action="{{ url('admin/product/'.$product->id)}}" method="post" style="display: inline;">
             @csrf
              @method("DELETE")
          <button class="btn btn-danger" onclick="return confirm('bạn có muốn xóa {{ $product->name }}') ">delete</button> 
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>

</table>
 {{$products->render() }}

  @stop
