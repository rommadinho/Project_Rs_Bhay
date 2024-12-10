// Data contoh untuk grafik pelatihan
const dataGrafikPelatihan = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
  datasets: [{
      label: 'Jumlah Pelatihan',
      data: [10, 20, 15, 30, 25, 20],
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1
  }]
};

// Data contoh untuk statistik karyawan
const dataStatistikKaryawan = {
  jumlahKaryawan: 100,
  jumlahPelatihan: 50
};

// Data contoh untuk peringatan
const dataPeringatan = [
  { tanggal: '2023-07-01', pesan: 'Pelatihan A hampir kadaluarsa' },
  { tanggal: '2023-07-15', pesan: 'Pelatihan B hampir kadaluarsa' }
];

// Fungsi untuk menampilkan grafik pelatihan
function tampilkanGrafikPelatihan() {
  const canvas = document.getElementById('grafik-pelatihan');
  if (!canvas) {
      console.error('Elemen canvas untuk grafik pelatihan tidak ditemukan.');
      return;
  }

  const ctx = canvas.getContext('2d');
  new Chart(ctx, {
      type: 'bar',
      data: dataGrafikPelatihan,
      options: {
          plugins: {
              title: {
                  display: true,
                  text: 'Grafik Pelatihan Bulanan'
              }
          },
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
}

// Fungsi untuk menampilkan statistik karyawan
function tampilkanStatistikKaryawan() {
  const jumlahKaryawanEl = document.getElementById('jumlah-karyawan');
  const jumlahPelatihanEl = document.getElementById('jumlah-pelatihan');
  
  if (jumlahKaryawanEl && jumlahPelatihanEl) {
      jumlahKaryawanEl.innerHTML = dataStatistikKaryawan.jumlahKaryawan || 0;
      jumlahPelatihanEl.innerHTML = dataStatistikKaryawan.jumlahPelatihan || 0;
  } else {
      console.error('Elemen untuk statistik karyawan tidak ditemukan.');
  }
}

// Fungsi untuk menampilkan peringatan
function tampilkanPeringatan() {
  const peringatanList = document.getElementById('peringatan-list');
  if (!peringatanList) {
      console.error('Elemen daftar peringatan tidak ditemukan.');
      return;
  }

  dataPeringatan.forEach((peringatan) => {
      const listItem = document.createElement('li');
      listItem.innerHTML = `
          <span class="tanggal">${peringatan.tanggal}</span> - 
          <span class="pesan">${peringatan.pesan}</span>
      `;
      listItem.classList.add('peringatan-item');
      peringatanList.appendChild(listItem);
  });

  // Ringtone hanya diputar jika ada peringatan
  if (dataPeringatan.length > 0) {
      const sound = new Howl({
          src: ['sounds/peringatan.mp3'], // Pastikan path file benar
          autoplay: true,
          loop: false,
          volume: 1,
      });
      sound.play();
  }
}

// Fungsi untuk mereset atau menghapus peringatan
function resetPeringatan() {
  const peringatanList = document.getElementById('peringatan-list');
  if (peringatanList) {
      peringatanList.innerHTML = ''; // Hapus semua peringatan
  }
}

// Fungsi untuk memainkan ringtone manual
function mainkanRingtone() {
  const audio = new Audio('sounds/peringatan.mp3');
  audio.play();
}

// Event listener untuk kontrol tambahan
document.addEventListener('DOMContentLoaded', () => {
  try {
      tampilkanGrafikPelatihan();
      tampilkanStatistikKaryawan();
      tampilkanPeringatan();
  } catch (error) {
      console.error('Terjadi kesalahan saat memuat dashboard:', error);
  }

  // Event listener untuk tombol tambahan
  const refreshChartButton = document.getElementById('refresh-chart');
  const clearWarningsButton = document.getElementById('clear-warnings');
  
  if (refreshChartButton) {
      refreshChartButton.addEventListener('click', tampilkanGrafikPelatihan);
  }

  if (clearWarningsButton) {
      clearWarningsButton.addEventListener('click', resetPeringatan);
  }
});
