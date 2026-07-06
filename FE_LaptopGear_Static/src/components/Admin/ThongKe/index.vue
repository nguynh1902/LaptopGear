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
                <input type="date" class="form-control" />
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Đến Ngày</label>
                <input type="date" class="form-control" />
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="button" class="btn btn-primary">
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
            <Bar :data="chartData1" :options="chartOptions" />
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
                <input type="date" class="form-control" />
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Đến Ngày</label>
                <input type="date" class="form-control" />
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="button" class="btn btn-primary">
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
            <Line :data="chartData2" :options="chartOptions" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
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
  name: "ThongKeAdmin",
  components: {
    Bar,
    Line,
  },
  data() {
    return {
      chartData1: {
        labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7"],
        datasets: [
          {
            label: "Khách hàng mới",
            backgroundColor: "#00c853",
            data: [40, 20, 12, 39, 10, 40, 39]
          }
        ]
      },
      chartData2: {
        labels: ["Tuần 1", "Tuần 2", "Tuần 3", "Tuần 4"],
        datasets: [
          {
            label: "Doanh thu",
            borderColor: "#2962ff",
            data: [15000000, 25000000, 18000000, 32000000],
            fill: false,
            tension: 0.1
          }
        ]
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
          },
        },
      },
    };
  }
};
</script>

<style scoped>
.card-header h4 {
  font-weight: bold;
}
</style>
