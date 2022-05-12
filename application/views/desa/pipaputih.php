<!-- Masthead-->
<header class="masthead" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url('<?= base_url('assets/img/piput.jpg') ?>')">
    <div class=" container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 style="font-size:6rem;" class="mx-auto my-0 text-uppercase">Desa Pipa Putih</h1>
                <p class="text-white-50 mx-auto mt-2 mb-5">Desa Pipa Putih memiliki luas wilayah 420 Ha. Sebelah Utara berbatasan dengan Desa Sungai Buaya Kec. Pemulutan, sebelah Selatan berbatasan dengan Desa Pegayut Kec. Pemulutan, sebelah Timur berbatasan dengan Sungai Ogan Kec. Jakabaring, sebelah Barat berbatasan dengan Desa Ibul Besar II Kec. Pemulutan. Jarak dari Desa Pipa Putih ke ibukota Kecamatan Pemulutan sekitar 10 km, jarak dari Desa Pipa Putih ke ibukota Kabupaten Ogan Ilir sekitar 32 km, serta jarak antara Desa Pipa Putih ke Ibukota Provinsi Sumatera Selatan sekitar 5 km.
                </p>
            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="about-section text-center" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-white mb-4">Sejarah Desa</h2>
                <p class="text-white-50">
                    Desa Pipa Putih merupakan salah satu desa yang terletak di Kecamatan Pemulutan Kabupaten Ogan Ilir. Pada tahun 1993 Desa Pipa Putih adalah bagian dari wilayah dusun VII Desa Pemulutan Ilir Kecamatan Pemulutan Kabupaten Ogan Komering Ilir (OKI). Kemudian pada tahun 1994 Dusun VI Pegayut ditingkatkan menjadi Desa Persiapan Pegayut yang merupakan penggabungan Dusun VI dan Dusun VII Desa Pemulutan Ilir. Semenjak menjadi Desa Persiapan Pegayut maka terbentuklah organisasi pemerintahan desa yang dikepalai oleh Kepala Desa Persiapan dengan 5 (lima) wilayah dusun antara lain Dusun I Ibul Kecil, Dusun II, Dusun III Pipa Putih, Dusun IV, dan Dusun V. Pada tahun 2006 Desa Pegayut dimekarkan menjadi 4 (empat) Desa antara lain adalah desa Pegayut, wilayah Dusun I Ibul kecil menjadi desa Harapan, wilayah dusun III menjadi desa Pipa Putih dan wilayah Dusun IV menjadi Desa Sungai Buaya.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container text-center">
        <h3 class="mb-4">Demografi</h3>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title center-bold">Jumlah Penduduk Berdasarkan Pendidikan Terakhir</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="bar-chart-pendidikan"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title center-bold">Jumlah Penduduk Berdasarkan Dusun Tempat Tinggal</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="bar-chart-pendidikan"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title center-bold">Jumlah Penduduk Berdasarkan Pekerjaan</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="bar-chart-pendidikan"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="contact-section bg-black" id="kab">
    <div class="container px-4 px-lg-5">
        <div class="row gx-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="<?= base_url('assets/img/demo-image-02.jpg'); ?>" alt="..." /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Kabupaten Ogan Ilir</h4>
                            <p class="mb-0 text-white-50">Kabupaten Ogan Ilir adalah salah satu kabupaten di Provinsi Sumatera Selatan. Ogan Ilir berada di jalur lintas timur Sumatra dan pusat pemerintahannya terletak sekitar 35 km dari Kota Palembang. Kabupaten ini merupakan pemekaran dari Kabupaten Ogan Komering Ilir.</p>
                            <hr class="d-none d-lg-block mb-0 me-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    new Chart(document.getElementById("bar-chart-pendidikan"), {
        type: 'horizontalBar',
        data: {
            labels: ["SD", "SLTP", "SLTA", "Kuliah"],
            datasets: [{
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9"],
                data: [1156, 418, 372, 41]
            }]
        },
        options: {
            legend: {
                display: false,
            },
            title: {
                display: true,
                text: 'Total Penduduk  : 2294'
            }
        }
    });
</script>