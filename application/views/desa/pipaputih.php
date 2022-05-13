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
                        <canvas id="bar-chart-dusun"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title center-bold">Jumlah Penduduk Berdasarkan Pekerjaan</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="bar-chart-pekerjaan"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="contact-section bg-black" id="kab">
    <div class="container px-4 px-lg-5 text-center text-white">
        <h2 class="text-white mb-4">Sumber Daya Alam</h2>
        <div class="table-responsive">
            <table class="table text-white">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Uraian</th>
                        <th>Volume</th>
                        <th>Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lahan Hutan</td>
                        <td>7132</td>
                        <td>M</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pasir Urug</td>
                        <td>37500</td>
                        <td>M3</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Lahan Perkebunan</td>
                        <td>-</td>
                        <td>Ha</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Tanah Urug</td>
                        <td>-</td>
                        <td>M3</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Lahan Persawahan</td>
                        <td>302</td>
                        <td>Ha</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Sungai</td>
                        <td>45000</td>
                        <td>M</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Lebak Lebung</td>
                        <td>150</td>
                        <td>M</td>
                    </tr>
                </tbody>
            </table>
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
                display: false,
                text: 'Total Penduduk  : 2294'
            }
        }
    });
</script>

<script type="text/javascript">
    new Chart(document.getElementById("bar-chart-dusun"), {
        type: 'doughnut',
        data: {
            labels: ["Dusun I", "Dusun II", "Dusun III", "Dusun IV", "Dusun V"],
            datasets: [{
                // label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: [325, 349, 693, 468, 459]
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Total Penduduk  : 2294'
            }
        }
    });
</script>

<script type="text/javascript">
    new Chart(document.getElementById("bar-chart-pekerjaan"), {
        type: 'horizontalBar',
        data: {
            labels: ['Petani', 'Buruh', 'Wiraswasta', 'Pedagang', 'PNS', 'Polisi'],
            datasets: [{
                // label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#3c2a40"],
                data: [52, 321, 85, 10, 4, 4]
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: false,
                text: 'Total Penduduk  :'
            }
        }
    });
</script>