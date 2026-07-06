import axios from "axios";
import { createToaster } from "@meforma/vue-toaster";
const toaster = createToaster({ position: "top-right" });
export default function (to, from, next) {
    var token = localStorage.getItem("khach_hang_login");
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
                next();
            } else {
                next("/khach-hang/dang-nhap");
                toaster.error(res.data.message);
            }
        });
}
