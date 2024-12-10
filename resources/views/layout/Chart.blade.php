<div class="container my-5">
    <div class="row">
        <!-- Chart Pegawai -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Chart Pegawai</h4>
                    <div style="position: relative; height: 300px; max-width: 100%; margin: 0 auto;">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Pegawai S1</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">50 orang</h6>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Pegawai S2</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">20 orang</h6>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Pegawai S3</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">15 orang</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart Belum -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Belum Menggikuti Pelatihan</h4>
                    <div style="position: relative; height: 300px; max-width: 100%; margin: 0 auto;">
                        <canvas id="belumChart"></canvas>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Unit Rekam Medis</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">5 orang</h6>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Unit Assuransi</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">3 orang</h6>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Unit Staff</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">7 orang</h6>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Unit Front Office</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">8 orang</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart Sudah -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Sudah Menggikuti Pelatihan</h4>
                    <div style="position: relative; height: 300px; max-width: 100%; margin: 0 auto;">
                        <canvas id="sudahChart"></canvas>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Unit Rekam Medis</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">12 orang</h6>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Unit Asuransi</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">8 orang</h6>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Unit Staff</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">9 orang</h6>
                        </div>
                    </div>
                    <div class="bg-gray-dark d-flex flex-row py-3 px-4 rounded mt-3">
                        <div class="text-left">
                            <h6 class="mb-1">Unit Front Office</h6>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">6 Orang</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan script Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      // Data untuk chart Pegawai
      var pegawaiLabels = ['Pegawai S1', 'Pegawai S2', 'Pegawai S3'];
      var pegawaiData = [50, 20, 15];

      // Inisialisasi Chart Pegawai
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: pegawaiLabels,
              datasets: [{
                  label: 'Jumlah Pegawai',
                  data: pegawaiData,
                  backgroundColor: [
                      'rgba(75, 192, 192, 0.8)',
                      'rgba(255, 206, 86, 0.8)',
                      'rgba(54, 162, 235, 0.8)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                  legend: {
                      display: false
                  }
              },
              scales: {
                  y: {
                      beginAtZero: true,
                      ticks: {
                          color: '#fff'
                      }
                  },
                  x: {
                      ticks: {
                          color: '#fff'
                      }
                  }
              }
          }
      });

      // Data untuk chart Belum
      var belumLabels = ['Ruangan Rekam Medis', 'Ruangan Asuransi', 'Ruangan Staff', 'Ruangan Front Office'];
      var belumData = [5, 10, 7, 8];

      // Inisialisasi Chart Belum
      var ctxBelum = document.getElementById('belumChart').getContext('2d');
      var belumChart = new Chart(ctxBelum, {
          type: 'bar',
          data: {
              labels: belumLabels,
              datasets: [{
                  label: 'Belum mengikuti pelatihan',
                  data: belumData,
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.8)',
                      'rgba(54, 162, 235, 0.8)',
                      'rgba(75, 192, 192, 0.8)',
                      'rgba(153, 102, 255, 0.8)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                  legend: {
                      display: false
                  }
              },
              scales: {
                  y: {
                      beginAtZero: true,
                      ticks: {
                          color: '#fff'
                      }
                  },
                  x: {
                      ticks: {
                          color: '#fff'
                      }
                  }
              }
          }
      });

      // Data untuk chart Sudah
      var sudahData = [12, 8, 9, 6];

      // Inisialisasi Chart Sudah
      var ctxSudah = document.getElementById('sudahChart').getContext('2d');
      var sudahChart = new Chart(ctxSudah, {
          type: 'bar',
          data: {
              labels: belumLabels,
              datasets: [{
                  label: 'Sudah mengikuti pelatihan',
                  data: sudahData,
                  backgroundColor: [
                      'rgba(255, 159, 64, 0.8)',
                      'rgba(255, 99, 132, 0.8)',
                      'rgba(75, 192, 192, 0.8)',
                      'rgba(153, 102, 255, 0.8)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                  legend: {
                      display: false
                  }
              },
              scales: {
                  y: {
                      beginAtZero: true,
                      ticks: {
                          color: '#fff'
                      }
                  },
                  x: {
                      ticks: {
                          color: '#fff'
                      }
                  }
              }
          }
      });
  });
</script>
