# JPM DEVELOPMENT STANDARD

Tài liệu định hướng Coding Style chuẩn cho Backend và Frontend logic, áp dụng cho dự án (nghiệp vụ Phụ tùng ô tô, tàu thuyền, v.v.).

## 1. BACKEND CONVENTION (Laravel)

### 1.1. Migration
- **Cấu trúc bảng:** Khai báo rõ ràng bằng `Schema::create`. Tên bảng dùng `snake_case` số nhiều.
- **Kiểu dữ liệu & Nullable:** Đa số các cột cho phép `nullable()`, ngoại trừ khóa chính hoặc các trường tên bắt buộc.
- **Trạng thái:** Các trường trạng thái dùng kiểu `integer('tinh_trang')` và set giá trị mặc định bằng `->default(1)`.
- **Timestamps:** Luôn có `$table->timestamps()`.

**Mẫu code (Ví dụ bảng PhuTung):**
```php
public function up(): void
{
    Schema::create('phu_tungs', function (Blueprint $table) {
        $table->id();
        $table->string('ten_phu_tung');
        $table->string('hinh_anh')->nullable();
        $table->integer('gia_ban')->nullable();
        $table->longText('mo_ta')->nullable();
        $table->integer('tinh_trang')->default(1);
        $table->timestamps();
    });
}
```

### 1.2. Model
- **Khai báo table & fillable:** Phải có `protected $table = 'tên_bảng';` và `protected $fillable = [...];`.
- **Hằng số trạng thái:** Định nghĩa bằng `const UPPER_SNAKE_CASE = value;`.

**Mẫu code:**
```php
class PhuTung extends Model
{
    protected $table = 'phu_tungs';
    
    protected $fillable = [
        'ten_phu_tung',
        'hinh_anh',
        'gia_ban',
        'mo_ta',
        'tinh_trang',
    ];

    const NGUNG_KINH_DOANH = 0;
    const DANG_KINH_DOANH = 1;
}
```

### 1.3. Controller (CRUD, Query, Validation & Response)
- **Tên hàm chuẩn:** `getData`, `addData`, `update`, `destroy`, `changeStatus`, `search`.
- **Validation:** **Không** sử dụng `$request->validate()` hay FormRequest. Trực tiếp lấy dữ liệu từ `$request` để query.
- **Authorization (Phân quyền):** Validate phân quyền trực tiếp đầu mỗi hàm bằng cách query bảng `PhanQuyen` kết hợp `Auth::guard('sanctum')`.
- **Query Eloquent:** Dùng cú pháp cơ bản: `Model::get()`, `Model::create()`, `Model::where('id', $request->id)->update()` / `delete()` / `first()`.
- **JSON Response:**
  - Lấy danh sách: `return response()->json(['data' => $data]);`
  - Thực hiện hành động: `return response()->json(['status' => true/0, 'message' => '...']);`

**Mẫu code:**
```php
class PhuTungController extends Controller
{
    public function getData()
    {
        $data = PhuTung::get();
        return response()->json([
            'data' => $data
        ]);
    }

    public function addData(Request $request)
    {
        // 1. Phân quyền (bắt buộc đầu mỗi hàm action)
        $id_chuc_nang = [ID_MODULE_PHU_TUNG];
        $id_chuc_vu   = Auth::guard('sanctum')->user()->id_chuc_vu;
        $check        = PhanQuyen::where('id_chuc_vu', $id_chuc_vu)
                                 ->where('id_chuc_nang', $id_chuc_nang)
                                 ->first();
        
        if (!$check) {
            return response()->json([
                'status'  => 0,
                'message' => 'Bạn không có quyền thực hiện chức năng này!'
            ]);
        }

        // 2. Không có Validate, insert trực tiếp
        PhuTung::create([
            'ten_phu_tung' => $request->ten_phu_tung,
            'hinh_anh'     => $request->hinh_anh,
            'gia_ban'      => $request->gia_ban,
            'mo_ta'        => $request->mo_ta,
            'tinh_trang'   => $request->tinh_trang,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Thêm phụ tùng ' . $request->ten_phu_tung . ' thành công',
        ]);
    }
}
```

---

## 2. FRONTEND CONVENTION (VueJS - phần `<script>`)

### 2.1. Quản lý Dữ liệu `data()`
- **Biến:** Dùng `snake_case`. 
- Luôn có các nhóm biến độc lập cho từng thao tác:
  - Danh sách: `list_phu_tung: []`
  - Thêm mới: `create_phu_tung: {}`
  - Cập nhật: `edit_phu_tung: {}`
  - Xóa: `del_phu_tung: {}`
  - Tìm kiếm: `tim_kiem: { noi_dung: '' }`

### 2.2. Phương thức (Methods) & API Calls
- **Tên hàm:** Dùng `camelCase` (VD: `getPhuTung`, `themPhuTung`, `capNhatPhuTung`, `xoaPhuTung`, `doiTrangThai`).
- **Axios:** Gọi trực tiếp từ trong Vue methods.
- **URL:** Hardcode đầy đủ (VD: `http://127.0.0.1:8000/api/admin/phu-tung/add-data`).
- **Headers:** Bắt buộc đính kèm Authorization token lấy từ `localStorage.getItem("key_admin")`.
- **Xử lý Response:** 
  - Kiểm tra `res.data.status`. 
  - Nếu thành công: gọi `$toast.success`, **reset lại Object** (như `this.create_phu_tung = {}`) và gọi lại hàm lấy list dữ liệu. 
  - Nếu thất bại: gọi `$toast.error`.

**Mẫu code:**
```javascript
import axios from 'axios';

export default {
    data() {
        return {
            list_phu_tung: [],
            create_phu_tung: {},
            edit_phu_tung: {},
            del_phu_tung: {},
            tim_kiem: { noi_dung: '' },
        };
    },
    mounted() {
        this.getPhuTung();
    },
    methods: {
        getPhuTung() {
            axios.get('http://127.0.0.1:8000/api/admin/phu-tung/get-data')
                .then((res) => {
                    this.list_phu_tung = res.data.data;
                });
        },
        themPhuTung() {
            axios.post('http://127.0.0.1:8000/api/admin/phu-tung/add-data', this.create_phu_tung, {
                headers: {
                    Authorization: 'Bearer ' + localStorage.getItem("key_admin")
                }
            })
            .then((res) => {
                if (res.data.status) {
                    this.$toast.success(res.data.message);
                    this.create_phu_tung = {}; // Reset form
                    this.getPhuTung();         // Load lại list
                } else {
                    this.$toast.error(res.data.message);
                }
            });
        }
    }
};
```
