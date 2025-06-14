@extends('layout.master')

@section('title', 'jiva petani ')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
  <div class="container-fluid p-0">

    <style>
          @keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.fade-in {
  opacity: 0; 
  transition: opacity 1s ease;
}

.fade-in.show {
  animation: fadeIn 1s ease-out forwards;
}
    </style>
    
    <div style="width: 100%; overflow: hidden;">
        <img src="{{ asset('img/mdpmerah.jpg') }}" alt="BannerMDP"style="width: 100%; height: auto; display: block;">
    </div>
    
    <section class="py-5" id="#home">
        <div class="container fade-in">
          <div class="row align-items-center">
            <div class="col-md-4 mb-3">
              <img src="{{ asset('img/rektor.jpg') }}" alt="Rektor Universitas MDP" style="max-width: 100%; height: auto; border: 3px solid #800000;">
            </div>
            <div class="col-md-8">
              <h3 class="text-danger">Sambutan Rektor ganti MDP</h3>
              <p><strong>Dr. Yulistia, S.Kom., M.T.I.</strong></p>
              <p>Universitas MDP berkomitmen untuk mencetak generasi unggul yang siap bersaing di dunia global, dengan mengutamakan pendidikan berbasis teknologi dan bisnis. Kami menghadirkan kurikulum yang relevan dengan kebutuhan industri, serta fasilitas modern yang mendukung pembelajaran yang efektif.</p>
      
              <p>Melalui peningkatan kualitas pembelajaran, kami berupaya membekali mahasiswa dengan pengetahuan, keterampilan, serta karakter yang siap menghadapi tantangan dunia kerja. Kami juga mendorong mahasiswa untuk memiliki wawasan global agar dapat bersaing di tingkat internasional.</p>
      
              <p>Terima kasih kepada seluruh sivitas akademika, mitra industri, orang tua mahasiswa, dan masyarakat atas dukungan yang telah diberikan kepada Universitas MDP. Mari bersama-sama membangun masa depan yang lebih baik melalui pendidikan yang berkualitas.</p>
      
              <p><strong>Dr. Yulistia, S.Kom., M.T.I.</strong></p>
            </div>
          </div>
        </div>
      </section>
      

     <section class="py-5">
        <div class="container fade-in">
          <h2 class="mb-4 text-danger">Berita</h2>
          <div class="row g-4">
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/berita1.jpg') }}" class="card-img-top" alt="Berita 1">
                <div class="card-body">
                  <p class="card-text">Wisuda tahun 2025 Universitas MDP telah meluluskan lebih dari 500 mahasiswa pada wisuda tahun ini.</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/berita2.jpg') }}" class="card-img-top" alt="Berita 2">
                <div class="card-body">

                  <p class="card-text">UMDP FEST Universitas MDP kembali mengadakan UMDP FEST pada tahun 2025 dan akan di selengarakan di PTC MALL</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/berita3.jpg') }}" class="card-img-top" alt="Berita 3">
                <div class="card-body">
                  <p class="card-text">Universitas MDP menjalin kerja sama dengan IMA (Indonesai Marketin Association) dan menjalin beberapa kerjasama</p>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container fade-in">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/berita4.jpg') }}" class="card-img-top" alt="Berita 4">
                <div class="card-body">
                  <p class="card-text">Dosen dari Universitas Multi Data Palembang (MDP) melaksanakan kegiatan pengabdian kepada masyarakat di Poltekkes Palembang</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/berita5.jpg') }}" class="card-img-top" alt="Berita 5">
                <div class="card-body">

                  <p class="card-text">Universitas MDP Rayakan Dies Natalis dengan Jalan Santai dan Fun Games Meriahkan Kebersamaan Sivitas Akademika</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/berita6.jpg') }}" class="card-img-top" alt="Berita 6">
                <div class="card-body">
                  <p class="card-text">Tim Robotika Universitas MDP mencetak prestasi luar biasa dalam ajang (SAUVC) 2025 dengan meraih peringkat ke-4</p>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </section>
    
    <section class="py-5 mr-5 ml-5">
        <div class="container fade-in" id="tentang">
          <h2 class="text-center text-danger mb-4">Sejarah Singkat Universitas Multi Data Palembang</h2>
          <p><strong>Universitas MDP</strong> berawal dari lembaga kursus yang berorientasi untuk memberikan pelatihan dan kursus berbagai program aplikasi komputer. Didirikan pada tanggal <strong>1 Juli 1987</strong> di kota Palembang, tepatnya di Jalan Rupit No. 20. Pada saat itu, fasilitas laboratorium komputer yang ada hanya terdiri dari 2 ruangan. Pada bulan November 1988, cabang pertama dibuka di Jalan Letkol Iskandar dengan fasilitas serupa.</p>
      
          <p>Seiring berkembangnya zaman dan untuk memenuhi kebutuhan tenaga terampil di bidang komputer, manajemen MDP memutuskan untuk pindah ke lokasi baru pada <strong>7 Mei 1990</strong> di Jalan Lingkaran 1 No. 305 Palembang. Lokasi baru ini memiliki kapasitas 6 kelas dengan fasilitas yang lebih baik.</p>
      
          <p>Untuk memenuhi permintaan masyarakat akan pendidikan terarah sesuai bidang pekerjaan, mulai <strong>Agustus 1993</strong> MDP membuka Pendidikan Ahli Komputer (Program 1 tahun) setara dengan Diploma I (D1) dengan pilihan jurusan seperti:</p>
          <ul>
            <li>Teknik Informatika (S1)</li>
            <li>Sistem Informasi (S1)</li>
            <li>Akuntansi (S1)</li>
            <li>Manajemen (S1)</li>
            <li>Teknik Elektro (S1)</li>
            <li>Magister Sistem informasi (S2)</li>
          </ul>
      
          <p>Seiring keinginan untuk berpartisipasi dalam pembangunan manusia yang berintegritas, pada <strong>7 September 2000</strong> terbit Surat Keputusan dari Direktorat Pendidikan Tinggi, yang menyatakan pendirian Akademi Manajemen Informatika dan Komputer MDP (AMIK MDP) serta pemberian Status Terdaftar untuk dua program studi: <em>Manajemen Informatika (D3)</em> dan <em>Teknik Komputer (D3)</em>.</p>
      
          <p>Pada <strong>5 Juli 2001</strong>, AMIK MDP bertransformasi menjadi Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK MDP), dengan penambahan dua program studi baru, yaitu <em>Teknik Informatika (S1)</em> dan <em>Sistem Informasi (S1)</em>. Tak lama setelahnya, program studi <em>Komputerisasi Akuntansi (D3)</em> ditambahkan.</p>
      
          <p>Pada <strong>2 Maret 2004</strong>, STMIK MDP berhasil mendapatkan sertifikasi ISO 9001-2000 dalam manajemen dari SGS. Semua program studi di STMIK MDP juga mendapatkan status “AKREDITASI” dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) pada tahun yang sama.</p>
      
          <p>Terakhir, pada <strong>9 April 2021</strong>, berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan, AMIK MDP, STMIK GI MDP, dan STIE MDP resmi bergabung menjadi <strong>Universitas Multi Data Palembang</strong>.</p>
        </div>
      </section>
      
      <div class="row mx-5 fade-in" style="color: #f4f4f4; text-align: center;">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>6</h3>
              <p>Program Studi</p>
            </div>
          </div>
        </div>
      
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>120</h3>
              <p>Dosen</p>
            </div>
          </div>
        </div>
      
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>2500</h3>
              <p>Mahasiswa Aktif</p>
            </div>

          </div>
        </div>
      
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>95%</h3>
              <p>Lulusan Terserap Kerja</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container py-5 mx-5">
        <h1 class="text-danger mb-4">Visi</h1>
        <p class="fs-5">
            “Menjadi perguruan tinggi yang berdaya saing global dan inovasi berkelanjutan dalam bidang rekayasa dan bisnis berbasiskan teknologi informasi pada tahun 2040”
        </p>

        <h2 class="text-danger mt-5 mb-3">Misi</h2>
        <p class="fs-5">Misi Universitas MDP yaitu:</p>
        <ol class="fs-5">
            <li>Menerapkan sistem penjaminan mutu terpadu untuk memenuhi kepuasan para pemangku kepentingan sesuai dengan standar yang telah ditetapkan.</li>
            <li>Melaksanakan proses pembelajaran dan pembimbingan yang berkualitas kepada mahasiswa didukung suasana akademis yang kondusif, harmonis, sehingga dapat menghasilkan lulusan yang inovatif, kompeten dan mempunyai daya saing.</li>
            <li>Melakukan kegiatan penelitian dan pengabdian kepada masyarakat yang berkualitas secara terprogram dalam rangka mengembangkan bidang ilmu rekayasa dan bisnis yang bermanfaat bagi kemajuan bangsa.</li>
            <li>Melakukan pengembangan profesi bagi dosen dan tenaga kependidikan.</li>
            <li>Membangun jejaring dan kerjasama untuk pengembangan dan penerapan tri darma perguruan tinggi.</li>
        </ol>
    </div>
    <section class="py-5"> 
      <div class="container fade-in" id="alumni">
        <h2 class="text-center mb-4 text-danger">Testimoni Alumni</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card w-75 mx-auto p-2">
              <img src="{{ asset('img/alumni1.jpg') }}" class="card-img-top" alt="Alumni 1">
              <div class="card-body p-2">
                <p class="card-text fs-6">"Universitas MDP memberi saya keterampilan yang sangat berguna di dunia kerja!"</p>
                <p class="fs-6">- Adeka Oktisha Siregar</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card w-75 mx-auto p-2">
              <img src="{{ asset('img/alumni2.jpg') }}" class="card-img-top" alt="Alumni 2">
              <div class="card-body p-2">
                <p class="card-text fs-6">"Saya merasa siap menghadapi tantangan di dunia profesional setelah lulus dari MDP."</p>
                <p class="fs-6">- Yovina M. Valentina</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card w-75 mx-auto p-2">
              <img src="{{ asset('img/alumni3.jpg') }}" class="card-img-top" alt="Alumni 3">
              <div class="card-body p-2">
                <p class="card-text fs-6">"MDP memberikan kesempatan luar biasa untuk berkembang dan berkarir."</p>
                <p class="fs-6">- Budi Manto Tan Jaya</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </div>
</main>
@endsection


