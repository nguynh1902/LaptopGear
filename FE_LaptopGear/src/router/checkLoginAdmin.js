import axios from "axios";
import { createToaster } from "@meforma/vue-toaster";
const toaster = createToaster({ position: "top-right" });
export default function (to, from, next) {
    var token = localStorage.getItem("admin_login");
    if (!token) {
        toaster.error("Bạn cần đăng nhập hệ thống!");
        return next("/admin/dang-nhap");
    }

    axios
        .get("http://127.0.0.1:8000/api/admin/check-token", {
            headers: {
                Authorization: "Bearer " + token,
            },
        })
        .then((res) => {
            if (res.data.status) {
                localStorage.setItem("ho_ten_admin", res.data.ho_ten_admin);
                if (res.data.admin) {
                    localStorage.setItem("admin", JSON.stringify(res.data.admin));
                }
                next();
            } else {
                toaster.error(res.data.message || "Phiên đăng nhập hết hạn!");
                next("/admin/dang-nhap");
            }
        })
        .catch(() => {
            toaster.error("Phiên đăng nhập không hợp lệ hoặc máy chủ không phản hồi!");
            next("/admin/dang-nhap");
        });
}
