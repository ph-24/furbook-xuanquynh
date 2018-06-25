1. class abstract 
* abstract class là 1 lớp dùng để ĐỊNH NGHĨA CÁC thuộc tính, phương thức thường  chứa các phương thức abstract. Nhờ đó định nghĩa các xử lí giống nhau 
=> ĐÓng vai trò parent class để cho các sub class định nghĩa lại các phương thức ma nó kế thừa(tính đa hình).

* Public, protected, private (ngoại trừ abstract sẽ ko có private)

* class con kế thừa abstract class thì nó sử dụng từ khóa "extend"

* 1 class chỉ có thể kế thừa 1 lớp cha
* có thể chứa mã code bên trong
2.  CLASS INTERFACE
* là 1 khuôn mẫu(template), dựa vào đó ta có thể biết các phương thức của đối tượng implement từ nó=> che giấu mã code
* chứa các phương thức abstract public
* phương thức sẽ ko chứa mã code
* 1 class có thể implement nhiều interface
3. CLASS FINAL và phương thức final
chỉ dùng để gọi chứ ko thể kế thừa và ghi đè
final function functionName(){}
4. CLOSURE và ANONYMOUS function
* là function ẩn danh(ko có tên)
* gán nó vào biến, function, class
* nó chỉ có tác dụng trong khu vực mà nó được định nghĩa
* closures có thể sử dụng được biến bên ngoài thông qua từ khóa USE
5. OVERLOADING
* Hỗ trợ gọi được các phương thức có cùng tên nhưng khác tham số và  kiểu trả về
* gọi thông qua magic method __call

6. TRAITS
* chứa các thuộc tính và phương thức dùng chung
* 1 class có thể use nhiều TRAITS
* khai báo dùng TRAITS ở trong class
7. THIS & SELF(static)
* self dùng để gọi phương thức của lớp hiện tại & phương thức static
self::$var    static::$var
* this dùng gọi thuộc tính & phương thức của lớp hiện tại và lớp kế thừa


1. OPP=> hỗ trợ tăng năng suất và đơn giản hóa công việc phát triển và bảo trì phần mềm
Hỗ trợ LTV phản ánh, mô tả đối tượng vào mã code giống như ngoài thực tế.
2. CÁC TÍNH CHẤT CỦA OPP
* KẾ THỪA
* ĐA HÌNH=> class con có thể định nghĩa lại phương thức mà nó kế thừa
* ĐÓNG GÓI=> ko thể hiện ra bên ngoài
* TRỪU TƯỢNG=> bao gồm thuộc tính và phương thức; mối liên hệ giữa các thuộc tính
----------------------------------------------------------------------
1. View Composer
- Chia sẻ data cho các view được chỉ định
- trong trường hợp chia sẻ cho tất cả view=>dùng " * "
2. View Share
- Chia sẻ data cho tất cả các view
---------------------------------------
DB::enableQueryLog();
Route::get('/cats/{id}', function ($id) {
dd(DB::getQueryLog())}