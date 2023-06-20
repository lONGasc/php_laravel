 
 @extends('frontend.layouttrangtrong')
 @section('content')
 <!-- main -->
        
        <div class="template-cart">
          <form action="index.php?controller=cart&action=update" method="post">
            <div class="table-responsive">
              <table class="table table-cart">
                <thead>
                  <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Số lượng</th>
                    <th class="price">Thành tiền</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td><img src="" class="img-responsive" /></td>
                    <td><a href="i">name</a></td>
                    <td> ₫ </td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="" name="" required="Không thể để trống"></td>
                    <td><p><b> ₫</b></p></td>
                    <td><a href="" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                  </tr>
          
                </tbody>

 
                // gọi hàm trong model
                 
                <tfoot>
                  <tr>
                    <td colspan="6"><a href="index.php?controller=cart&action=destroy" class="button pull-left">Xóa toàn bộ</a> <a href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
                      <input type="submit" class="button pull-right" value="Cập nhật"></td>
                  </tr>
          
                </tfoot>
              </table>
            </div>
          </form>
     
          <div class="total-cart"> Tổng tiền thanh toán:
         ₫  <br>
            <a href="" class="button black">Thanh toán</a> 
          </div>
     
        </div>
        
        <!-- end main --> 
        @stop