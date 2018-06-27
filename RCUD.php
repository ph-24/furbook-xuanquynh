<?php  
1. retrieving data
all(): lấy tất cae record
get(): lấy tất cả record tùy theo dkien where
first(): lấy 1 record
where(): lấy dữ liệu theo dkien lọc
find(): lấy data theo cột id
orderBy: sắp xếp dữ liệu theo chiều tăng dần
take(x): lấy tối đa x records
2. Saving data
*update:
$cat->name='ABC';
$cat->save();
* các phương thức trong Eloquent
-firstOrCreate(): 2 trong 1 nếu tìm ra dữ liệu thì trả về kqua ko thì tạo dlieu	
-create()										
-update()



- insert()
- Model instance()


-$fillable: cho phép(white list)
-$guard:(black white)
=> có tác dụng cho 3 đối tượng trên trừ insert(), Model instance()

3. Delete data
*delete():kiểm tra dữ liệu tồn tại rồi mới xóa đc
* destroy(): xóa dữ liệu dù có hay ko

4. soft deletion: xóa mềm
- deleted_at
- truy vấn bình thường sẽ loại bỏ record bị xóa mềm
- migration tạo softDeletes()
- model: khai báo dùng trait softDeletes
- withTrashed(): lấy dữ liệu đã bị xóa và ko bị xóa
- onlyTrashed(): chỉ lấy dữ liệu đã bị xóa
- restore(): khôi phục dữ liệu bị xóa
- forceDelete(): xóa dữ liệu vĩnh viễn

5. Querry scopes: phạm vi truy vấn
- định nghĩa các điều kiện truy vấn giống nhau, mục đích để tái sử dụng
- khai báo function bắt buộc có tiền tố scope
function scopeFunctionName

6. relationship
* 1-1
* 1-n
* n-n
- attach(): thêm data vào relation n-n
- detach(): loại bỏ data 
- sync(): đồng bộ (thiếu->insert, thừa-> loại bỏ đi)
* trung gian
* đa hình
* đa hình n-n 

7. model events
- đăng kí xử lí các hành động trước khi event được thực thi
- để đki model event có 2 cách
+ C1: đki trực tiếp trong EvenServiceProvider
+ C2: tạo ra 1 class Observer, rồi đki trong EventServiceProvider;

8. Collection
- ngoài trả về kết quả, còn kèm theo các funciton helper hỗ trợ ng dùng thao tác với dữ liệu trc khi hiển thị.
--------------------------------------------------------------------
AUTH AND SECURITY
1. Auth users
* xem tất cả các route hiện có:
php artisan route:list
* Cấu hình config/auth.php+user model
	- các route Cat->auth.
	- route cat.edit->user: admin  hoặc own của cat.
	- route cat.destroy->admin.
?>