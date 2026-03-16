<template>
  <div>
    <!-- PHẦN THỐNG KÊ KHÁCH HÀNG -->
    <div class="row">
      <div class="col-lg-4">
        <div class="card radius-10 border-top border-0 border-3 border-info">
          <div class="card-header d-flex justify-content-between">
            <h4 class="mt-2 text-primary"><b>THỐNG KÊ KHÁCH HÀNG MỚI</b></h4>
          </div>
          <div class="card-body table-responsive">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Từ Ngày</label>
                <input v-model="search1.begin" type="date" class="form-control" />
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Đến Ngày</label>
                <input v-model="search1.end" type="date" class="form-control" />
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="button" class="btn btn-primary" @click="thongKeKhachHang">
              Thống Kê
            </button>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="card">
          <div class="card-header mt-3 text-dark text-center">
            <h4>BIỂU ĐỒ THỐNG KÊ KHÁCH HÀNG</h4>
          </div>
          <div class="card-body" style="height: 500px">
            <Bar v-if="is_view1" :data="chartData1" :options="chartOptions" />
          </div>
        </div>
      </div>
    </div>

    <!-- PHẦN THỐNG KÊ HÓA ĐƠN -->
    <div class="row mt-4">
      <div class="col-lg-4">
        <div class="card radius-10 border-top border-0 border-3 border-info">
          <div class="card-header d-flex justify-content-between">
            <h4 class="mt-2 text-primary"><b>THỐNG KÊ HÓA ĐƠN THEO NGÀY</b></h4>
          </div>
          <div class="card-body table-responsive">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Từ Ngày</label>
                <input v-model="search2.begin" type="date" class="form-control" />
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Đến Ngày</label>
                <input v-model="search2.end" type="date" class="form-control" />
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="button" class="btn btn-primary" @click="thongKeHoaDon">
              Thống Kê
            </button>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="card">
          <div class="card-header mt-3 text-dark text-center">
            <h4>BIỂU ĐỒ THỐNG KÊ HÓA ĐƠN</h4>
          </div>
          <div class="card-body"   style="height: 500px">
            <Line v-if="is_view2" :data="chartData2" :options="chartOptions" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import { Bar, Line } from "vue-chartjs";
import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  BarElement,
  LineElement,
  PointElement,
  CategoryScale,
  LinearScale,
} from "chart.js";

ChartJS.register(
  Title,
  Tooltip,
  Legend,
  BarElement,
  LineElement,
  PointElement,
  CategoryScale,
  LinearScale
);

export default {
  name: "ThongKe",
  components: {
    Bar,
    Line,
  },
  data() {
    return {
      search1: {
        begin: '',
        end: ''
      },
      search2: {
        begin: '',
        end: ''
      },
      is_view1: false,
      is_view2: false,
      chartData1: {
        labels: [],
        datasets: []
      },
      chartData2: {
        labels: [],
        datasets: []
      },
      chartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: "top",
          },
          title: {
            display: true,
            // text: "",
          },
        },
      },
    };
  },
  methods: {
    thongKeKhachHang() {
      axios
        .post("http://127.0.0.1:8000/api/admin/thong-ke/duyet-khach-hang", this.search1)
        .then((res) => {
          if (res.data.status) {
            this.is_view1 = true;
            this.chartData1 = {
              labels: res.data.labels,
              datasets: res.data.datasets,
            };
          }
        })
        .catch((err) => {
          console.error("Lỗi thống kê khách hàng:", err);
        });
    },
    thongKeHoaDon() {
      axios
        .post("http://127.0.0.1:8000/api/admin/thong-ke/duyet-hoa-don", this.search2)
        .then((res) => {
          if (res.data.status) {
            this.is_view2 = true;
            this.chartData2 = {
              labels: res.data.labels,
              datasets: res.data.datasets,
            };
          }
        })
        .catch((err) => {
          console.error("Lỗi thống kê hóa đơn:", err);
        });
    },
  },
};
</script>

<style scoped>
.card-header h4 {
  font-weight: bold;
}
</style>
