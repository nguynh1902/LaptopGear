import axios from "axios";
import { createToaster } from "@meforma/vue-toaster";
const toaster = createToaster({ position: "top-right" });
export default function (to, from, next) {
    var token = localStorage.getItem("khach_hang_login");
    if (!token) {
        toaster.error("Vui lòng đăng nhập để tiếp tục!");
        return next("/khach-hang/dang-nhap");
    }

    axios
        .get("http://127.0.0.1:8000/api/khach-hang/check-token", {
            headers: {
                Authorization: "Bearer " + token,
            },
        })
        .then((res) => {
            if (res.data.status) {
                localStorage.setItem("ho_ten_khach_hang", res.data.ho_ten);
                localStorage.setItem("avatar_khach_hang", res.data.avatar);
                if (res.data.data) {
                    localStorage.setItem("khach_hang", JSON.stringify(res.data.data));
                }
                next();
            } else {
                toaster.error(res.data.message || "Phiên đăng nhập đã hết hạn!");
                next("/khach-hang/dang-nhap");
            }
        })
        .catch(() => {
            toaster.error("Phiên đăng nhập không hợp lệ hoặc máy chủ không phản hồi!");
            next("/khach-hang/dang-nhap");
        });
}
