# PHP1-TEST1-FALL-2022

Đề 8 (thời gian: 60’)
BẮT BUỘC đ 
ể được chấm bài: 
-	Tạo thư mục tên MSV_08_WEB2014. 
-	Trong quá trình làm bài không tắt VSCode, chỉ để 1 thư mục bài làm trong đó. Không mở lại các bài thực hành cũ.

1. (1 điểm)Tạo database có tên: masv_exam_2014_08
Tạo 2 bảng sau: 
types (id, name)
rooms (id, name, image, intro, description, number, price, type_id)
Yêu cầu
-	id tự động tăng
-	nhập trước bảng types ít nhất 2 bản ghi (ví dụ: single room, double room…)
2. (2 điểm) Thực hiện chức năng hiển thị danh sásbch phòng (yêu cầu tại đây có nút thêm mới phòng và nút sửa, xóa cho từng phòng)
3. (3 điểm) Thực hiện chức năng thêm mới phòng
Yêu cầu:
	- Tên loại phòng lấy từ database cho vào list
- Có validate Size, type Image. Type image: jpg, png. Size<=2Mb
- Có validate number, price là số dương
4. (3 điểm) Thực hiện chức năng chỉnh sửa phòng – yêu cầu giống thêm phòng (chú ý không update ảnh lên phải giữ lại ảnh cũ)
5. (1 điểm) Thực hiện chức năng xóa phòng – có confirm

