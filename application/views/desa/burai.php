<style>
    #map {
        height: 500px;
    }

    .info {
        padding: 6px 8px;
        font: 14px/16px Arial, Helvetica, sans-serif;
        background: white;
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .info h4 {
        margin: 0 0 5px;
        color: #777;
    }

    .legend {
        line-height: 18px;
        color: #555;
    }

    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.7;
    }
</style>
<!-- Masthead-->
<header class="masthead" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url('<?= base_url('assets/img/burai.png') ?>'); width: 100%; background-repeat: no-repeat; background-size: cover !important;">
    <div class=" container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 style="font-size:6rem;" class="mx-auto my-0 text-uppercase">Desa Burai</h1>
                <p class="text-white-50 mx-auto mt-2 mb-5">Desa Burai merupakan satu dari dua puluh satu desa/kelurahan yang termasuk dalam wilayah Kecamatan Tanjung Batu, dengan luas wilayah sekitar 11.000 Ha. Sebelah Utara berbatasan dengan Desa Tanjung Baru. Sebelah Selatan berbatasan dengan Kelurahan Tanjung Batu. Sebelah Barat berbatasan dengan Desa Sentul. Sebelah Timur berbatasan dengan Desa Tanjung Sejaro.
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
                <h2 class="text-white mb-4">Visi Misi Desa</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="text-white-50">
                            Visi:</br></br>"Terwujudnya Kehidupan Masyarakat Desa Burai yang Sehat, Adil dan Sejahtera"
                        </h4>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-white-50">
                            Misi:</br>
                            1. Meningkatkan kualitas kehidupan beragama dalam mewujudkan masyarakat Desa Burai yang Beriman dan Bertaqwa</br>
                            2. Meningkatkan kualitas kesehatan yang baik di Desa Burai</br>
                            3. Meningkatkan ekonomi kerakyatan</br>
                            4. Meningkatkan pelayanan aparatur desa bagi pemenuhan pelayanan publik</br>
                            5. Meningkatkan pembangunan infrastruktur yang proporsional, berkualitas dan berkelanjutan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Peta Tematik-->
<section class="projects-section bg-light" id="peta-tematik">
    <div class="container px-4 px-lg-5 text-center">
        <h3>Peta Tematik Jumlah Penduduk</h3>
        <div id="map"></div>
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
                        <h5 class="card-title center-bold">Jumlah Penduduk Dewasa (di atas 17 tahun) Berdasarkan Dusun</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="bar-chart-dewasa"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="contact-section bg-black" id="kab">
    <div class="container px-4 px-lg-5 text-center text-white">
        <h2 class="text-white mb-4">Data Pengunjung Wisata Desa Burai</h2>
        <div class="card">
            <div class="card-body">
                <canvas id="line-chart-wisata"></canvas>
            </div>
        </div>
    </div>
</section>

<!-- Contact-->
<section class="contact-section bg-black" id="galeri">
    <div class="container px-4 px-lg-5 text-center text-white">
        <h2 class="text-white mb-4">Galeri Wisata Desa Burai</h2>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/img/Picture1.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Wisata Kampung Warna Warni</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/Picture2.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Wisata Bahari</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/Picture3.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Atraksi Beranyut</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/Picture4.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Gowes Trip</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/Picture5.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Atraksi Tari Beume</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/Picture6.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Wisata Edukasi dan Budaya</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/Picture7.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Wisata Religi</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/Picture8.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kerajinan Songket</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/Picture9.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kerajinan Purun Warna Warni</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/Picture10.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kuliner Olahan Ikan</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/Picture11.png') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Homestay</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<script type="text/javascript">
    new Chart(document.getElementById("bar-chart-dewasa"), {
        type: 'doughnut',
        data: {
            labels: ["Dusun I", "Dusun II", "Dusun III", "Dusun IV", "Dusun V", "Dusun VI"],
            datasets: [{
                // label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#3c2a40"],
                data: [314, 236, 192, 178, 260, 284]
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Total Penduduk  : 1889'
            }
        }
    });
</script>

<script type="text/javascript">
    new Chart(document.getElementById("bar-chart-pendidikan"), {
        type: 'horizontalBar',
        data: {
            labels: ["Pra Sekolah", "SD", "SLTP", "SLTA", "Diploma", "Sarjana"],
            datasets: [{
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#3c2a40"],
                data: [83, 657, 297, 621, 50, 181]
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
            labels: ["Dusun I", "Dusun II", "Dusun III", "Dusun IV", "Dusun V", "Dusun VI"],
            datasets: [{
                // label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#3c2a40"],
                data: [421, 324, 233, 222, 327, 362]
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Total Penduduk  : 1889'
            }
        }
    });
</script>

<script type="text/javascript">
    new Chart(document.getElementById("line-chart-wisata"), {
        type: 'line',
        data: {
            labels: ["Agustus 2020", "September 2020", "Oktober 2020", "November 2020", "Desember 2020", "Januari 2021", "Februari 2021", "Maret 2021", "April 2021", "Mei 2021", "Juni 2021", "Juli 2021"],
            datasets: [{
                // label: "Population (millions)",
                data: [66, 75, 111, 130, 112, 200, 100, 175, 190, 200, 215, 235, 270],
                fill: false,
                borderColor: "#3e95cd",
                tension: 0.1
            }]
        },
        options: {
            legend: {
                display: false
            }
        }
    });
</script>

<script type="text/javascript">
    var map = L.map('map').setView([-3.2783267142661807, 104.60126058062933], 12);
    map.scrollWheelZoom.disable();

    L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>, Desa Cantik (Cinta Statistik) © <a href="https://oganilirkab.bps.go.id/">BPS Kabupaten Ogan Ilir</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11'
    }).addTo(map);

    var data = [{
            "type": "Feature",
            "properties": {
                "fid": 324,
                "OBJECTID_1": 8170,
                "OBJECTID": 0,
                "kk": 90.0,
                "gid": 14972.0,
                "bstt": 135.0,
                "luas": 14314921.2907,
                "bsbtt": 5.0,
                "idsls": "16100200300006",
                "kdkab": "10",
                "kdkec": "020",
                "kdsls": "0006",
                "nmkab": "OGAN ILIR",
                "nmkec": "TANJUNG BATU",
                "nmsls": "RT 006 DUSUN VI",
                "bstt_k": 36.0,
                "kddesa": "030",
                "kdprov": "16",
                "khusus": 0.0,
                "muatan": 176.0,
                "nmdesa": "BURAI",
                "nmprov": "SUMATERA SELATAN",
                "posisi": null,
                "rw_dki": null,
                "segmen": null,
                "sumber": "BPS",
                "dom_sls": "1, 1, 1, 1, 1",
                "periode": "2019_1",
                "tingkat": 0.0,
                "nm_gedung": null,
                "wil_campur": 0.0,
                "fid_1": 0.0,
                "layer": null,
                "path": null,
                "Shape_Leng": 0.15971867567,
                "Shape_Area": 0.00115324899,
                "pdd": 362
            },
            "geometry": {
                "type": "MultiPolygon",
                "coordinates": [
                    [
                        [
                            [104.633819490000064, -3.303690259999939],
                            [104.63207562000008, -3.306010986999979],
                            [104.630796500000088, -3.307713229999933],
                            [104.630988800000068, -3.307907559999933],
                            [104.630795160000048, -3.307713289999981],
                            [104.630218670000033, -3.308593549999955],
                            [104.629155920000073, -3.310257169999943],
                            [104.627377640000077, -3.312985419999961],
                            [104.627362390000087, -3.313007809999931],
                            [104.62734271000005, -3.313036699999941],
                            [104.626920540000071, -3.31365632],
                            [104.625793191000071, -3.315341303999958],
                            [104.625212880000049, -3.316208659999972],
                            [104.624396440000055, -3.317360939999958],
                            [104.622823330000074, -3.319581149999976],
                            [104.622859170000083, -3.319617189999974],
                            [104.622849190000068, -3.319631829999935],
                            [104.62282177600008, -3.31960380299995],
                            [104.622818320000079, -3.319600269999967],
                            [104.622815930000058, -3.31960380299995],
                            [104.618396090000033, -3.326136709999957],
                            [104.618397967000078, -3.326137504999963],
                            [104.618396090000033, -3.326140278999958],
                            [104.618412380000052, -3.326147178999975],
                            [104.618360001000042, -3.330839368999932],
                            [104.618359979000047, -3.330841322999959],
                            [104.618359939000072, -3.330841322999959],
                            [104.612262894000082, -3.33073335399996],
                            [104.612287412000057, -3.330770068999925],
                            [104.611109557000077, -3.330720031999931],
                            [104.609248683000033, -3.330640979999941],
                            [104.607639190000043, -3.32845643],
                            [104.607559690000073, -3.326784769999961],
                            [104.607455710000067, -3.324598199999969],
                            [104.607396330000086, -3.324549829999967],
                            [104.60368907600008, -3.321529743999974],
                            [104.602619570000059, -3.320658479999963],
                            [104.602378643000065, -3.320462207999981],
                            [104.599222800000064, -3.317891289999977],
                            [104.593706630000042, -3.3134292299999],
                            [104.588650090000044, -3.309302269999932],
                            [104.588598650000051, -3.308425089999957],
                            [104.588585110000054, -3.308070339999972],
                            [104.588574556000083, -3.307793480999976],
                            [104.594675603000042, -3.306351850999931],
                            [104.597998700000062, -3.305466378999938],
                            [104.599896460000082, -3.304865206999978],
                            [104.601246790000062, -3.304172946999927],
                            [104.603527753000037, -3.302824860999976],
                            [104.605060559000037, -3.301877556999955],
                            [104.605264024000064, -3.301782340999978],
                            [104.612907070000063, -3.29304207499996],
                            [104.622395874000063, -3.280799793999961],
                            [104.626710417000083, -3.280851073999941],
                            [104.626723077000065, -3.280851223999946],
                            [104.626725480000061, -3.280873699999972],
                            [104.626727490000064, -3.280892479999977],
                            [104.626735300000064, -3.280965525999932],
                            [104.62674923700007, -3.28098842199995],
                            [104.627117130000045, -3.283885579999946],
                            [104.62765667900004, -3.286043777999964],
                            [104.627813840000044, -3.286576569999966],
                            [104.629131190000066, -3.287282384999969],
                            [104.631531846000087, -3.288438255999949],
                            [104.632445254000061, -3.290308566999954],
                            [104.632456370000057, -3.290329109999959],
                            [104.632513352000046, -3.290431467999952],
                            [104.632559660000084, -3.290514649999977],
                            [104.632783992000043, -3.29063729],
                            [104.632909400000074, -3.290705849999938],
                            [104.632933427000069, -3.290736913999979],
                            [104.632935350000082, -3.2907394],
                            [104.633064540000078, -3.290956349999931],
                            [104.633113790000039, -3.290970029999926],
                            [104.633295200000077, -3.291020447999927],
                            [104.633347130000061, -3.291034879999927],
                            [104.633680870000035, -3.291127619999941],
                            [104.634144411000079, -3.291381043999934],
                            [104.634768496000049, -3.291601309999976],
                            [104.635116733000075, -3.291687712999931],
                            [104.637820430000033, -3.292358539999952],
                            [104.640625709000062, -3.292459271999974],
                            [104.642160515000057, -3.292521916999931],
                            [104.642120060000082, -3.292577779999931],
                            [104.641325970000082, -3.293630269999937],
                            [104.641325940000058, -3.293630299999961],
                            [104.639856320000035, -3.295601489999967],
                            [104.63895049000007, -3.2968988699999],
                            [104.637192500000083, -3.299228729999925],
                            [104.637146146000077, -3.29928886099998],
                            [104.636205290000078, -3.30050935],
                            [104.635218080000072, -3.301789969999959],
                            [104.633860600000048, -3.303690269999947],
                            [104.633819490000064, -3.303690259999939]
                        ]
                    ]
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "fid": 452,
                "OBJECTID_1": 8298,
                "OBJECTID": 0,
                "kk": 69.0,
                "gid": 15097.0,
                "bstt": 67.0,
                "luas": 13122547.7081,
                "bsbtt": 6.0,
                "idsls": "16100200300005",
                "kdkab": "10",
                "kdkec": "020",
                "kdsls": "0005",
                "nmkab": "OGAN ILIR",
                "nmkec": "TANJUNG BATU",
                "nmsls": "RT 005 DUSUN V",
                "bstt_k": 10.0,
                "kddesa": "030",
                "kdprov": "16",
                "khusus": 0.0,
                "muatan": 85.0,
                "nmdesa": "BURAI",
                "nmprov": "SUMATERA SELATAN",
                "posisi": null,
                "rw_dki": null,
                "segmen": null,
                "sumber": "BPS",
                "dom_sls": "1, 1, 1, 1, 1, 1",
                "periode": "2019_1",
                "tingkat": 0.0,
                "nm_gedung": null,
                "wil_campur": 0.0,
                "fid_1": 0.0,
                "layer": null,
                "path": null,
                "Shape_Leng": 0.15143777232,
                "Shape_Area": 0.00105721518,
                "pdd": 327
            },
            "geometry": {
                "type": "MultiPolygon",
                "coordinates": [
                    [
                        [
                            [104.588574556000083, -3.307793480999976],
                            [104.588573850000046, -3.307774959999961],
                            [104.588450720000083, -3.30570101],
                            [104.588282320000076, -3.302600009999935],
                            [104.588263190000077, -3.30254224],
                            [104.588034540000081, -3.301851899999974],
                            [104.587302893000071, -3.299642810999956],
                            [104.590133941000033, -3.291584667999928],
                            [104.591520766000087, -3.285536407999928],
                            [104.593213241000058, -3.281685632999938],
                            [104.593573633000062, -3.28107989199998],
                            [104.593687681000063, -3.280922763999968],
                            [104.593628376000083, -3.280856723999932],
                            [104.593813134000072, -3.280638110999973],
                            [104.59389752900006, -3.280537912999932],
                            [104.593965958000069, -3.280490090999933],
                            [104.594105097000067, -3.280367120999927],
                            [104.594173526000077, -3.280312467999977],
                            [104.594196335000049, -3.280257813999981],
                            [104.594285293000041, -3.280184942999938],
                            [104.620213041000056, -3.252540206999925],
                            [104.620541909000053, -3.25341577699993],
                            [104.621303660000081, -3.252386831999956],
                            [104.623234561000061, -3.254300712999964],
                            [104.623244545000034, -3.254310608999958],
                            [104.623402687000066, -3.254716602999963],
                            [104.624487628000054, -3.257400404999942],
                            [104.624387970000043, -3.257445704999952],
                            [104.624315123000088, -3.257479615999955],
                            [104.624313177000033, -3.257479701999955],
                            [104.624312626000062, -3.257479951999926],
                            [104.624003883000057, -3.257495011999936],
                            [104.623808429000064, -3.257542394999973],
                            [104.623755351000057, -3.257556141999942],
                            [104.623753683000075, -3.257556573999977],
                            [104.623698456000056, -3.259140969999976],
                            [104.623248987000068, -3.27203560199996],
                            [104.623248213000068, -3.272057803999928],
                            [104.626322708000032, -3.272505545999934],
                            [104.626330310000071, -3.272712469999931],
                            [104.626390910000055, -3.274362019999955],
                            [104.626629470000069, -3.279975839999963],
                            [104.626632620000066, -3.280005209999956],
                            [104.626656470000057, -3.280228289999968],
                            [104.626701480000065, -3.280649235999931],
                            [104.626723077000065, -3.280851223999946],
                            [104.626710417000083, -3.280851073999941],
                            [104.622395874000063, -3.280799793999961],
                            [104.612907070000063, -3.29304207499996],
                            [104.605264024000064, -3.301782340999978],
                            [104.605060559000037, -3.301877556999955],
                            [104.603527753000037, -3.302824860999976],
                            [104.601246790000062, -3.304172946999927],
                            [104.599896460000082, -3.304865206999978],
                            [104.597998700000062, -3.305466378999938],
                            [104.594675603000042, -3.306351850999931],
                            [104.588574556000083, -3.307793480999976]
                        ]
                    ]
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "fid": 681,
                "OBJECTID_1": 8527,
                "OBJECTID": 0,
                "kk": 98.0,
                "gid": 15329.0,
                "bstt": 94.0,
                "luas": 14015303.926100001,
                "bsbtt": 2.0,
                "idsls": "16100200300001",
                "kdkab": "10",
                "kdkec": "020",
                "kdsls": "0001",
                "nmkab": "OGAN ILIR",
                "nmkec": "TANJUNG BATU",
                "nmsls": "RT 001 DUSUN 1",
                "bstt_k": 10.0,
                "kddesa": "030",
                "kdprov": "16",
                "khusus": 0.0,
                "muatan": 110.0,
                "nmdesa": "BURAI",
                "nmprov": "SUMATERA SELATAN",
                "posisi": null,
                "rw_dki": null,
                "segmen": null,
                "sumber": "BPS",
                "dom_sls": "1, 1, 1, 1, 1",
                "periode": "2019_1",
                "tingkat": 0.0,
                "nm_gedung": null,
                "wil_campur": 0.0,
                "fid_1": 0.0,
                "layer": null,
                "path": null,
                "Shape_Leng": 0.15547491743,
                "Shape_Area": 0.00112916567,
                "pdd": 421
            },
            "geometry": {
                "type": "MultiPolygon",
                "coordinates": [
                    [
                        [
                            [104.571114087000069, -3.228454412999952],
                            [104.57111567000004, -3.228455529999962],
                            [104.57110152000007, -3.228457089999949],
                            [104.572863720000043, -3.229689619999931],
                            [104.575506100000041, -3.231555069999956],
                            [104.576930520000076, -3.232987969999954],
                            [104.576952460000086, -3.233010049999962],
                            [104.577590520000058, -3.2350484899999],
                            [104.578659880000032, -3.238464849999957],
                            [104.579326510000044, -3.240594569999928],
                            [104.579376400000058, -3.24062399],
                            [104.582310250000035, -3.242354259999956],
                            [104.582323100000053, -3.242361839999944],
                            [104.589247930000056, -3.242468569999971],
                            [104.593718250000052, -3.242643249999958],
                            [104.594622380000033, -3.24267852],
                            [104.595177470000067, -3.242800039999963],
                            [104.59630055000008, -3.2430459],
                            [104.59691113000008, -3.243179569999938],
                            [104.597957800000074, -3.243860879999943],
                            [104.598824944000057, -3.244425327999977],
                            [104.598821978000046, -3.244439266999962],
                            [104.591820694000035, -3.277338004999933],
                            [104.591651748000061, -3.277574860999948],
                            [104.591680504000067, -3.277628691999951],
                            [104.591561882000065, -3.277844014999971],
                            [104.591209611000068, -3.279067768999937],
                            [104.591108962000078, -3.279168252999966],
                            [104.588761686000055, -3.280984142999955],
                            [104.58853163200007, -3.280826239999953],
                            [104.584347513000068, -3.278644299999939],
                            [104.580033988000082, -3.276347516999977],
                            [104.576094303000048, -3.274237341999935],
                            [104.573463053000069, -3.272787491999964],
                            [104.555290416000048, -3.263080186999957],
                            [104.556293220000043, -3.263573109999925],
                            [104.556304470000043, -3.263561429999925],
                            [104.557982080000045, -3.2618186],
                            [104.560865440000043, -3.258823139999947],
                            [104.56111788000004, -3.258457649999968],
                            [104.562604880000038, -3.256304809999961],
                            [104.567870830000061, -3.248680739999941],
                            [104.568616340000062, -3.247601369999927],
                            [104.568662040000049, -3.247535201999938],
                            [104.568670170000075, -3.247523429999944],
                            [104.57146189000008, -3.241767699999968],
                            [104.571507650000058, -3.239532299999951],
                            [104.571500240000034, -3.239506529999971],
                            [104.568782550000037, -3.230056499999932],
                            [104.568776030000038, -3.23003382],
                            [104.569394660000057, -3.228832929999953],
                            [104.569859400000041, -3.228728029999957],
                            [104.571059890000072, -3.228457069999934],
                            [104.571110030000057, -3.228451549999932],
                            [104.571114087000069, -3.228454412999952]
                        ]
                    ]
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "fid": 1351,
                "OBJECTID_1": 9197,
                "OBJECTID": 0,
                "kk": 55.0,
                "gid": 16001.0,
                "bstt": 52.0,
                "luas": 2481434.2222600002,
                "bsbtt": 0.0,
                "idsls": "16100200300004",
                "kdkab": "10",
                "kdkec": "020",
                "kdsls": "0004",
                "nmkab": "OGAN ILIR",
                "nmkec": "TANJUNG BATU",
                "nmsls": "RT 004 DUSUN IV",
                "bstt_k": 1.0,
                "kddesa": "030",
                "kdprov": "16",
                "khusus": 0.0,
                "muatan": 56.0,
                "nmdesa": "BURAI",
                "nmprov": "SUMATERA SELATAN",
                "posisi": null,
                "rw_dki": null,
                "segmen": null,
                "sumber": "BPS",
                "dom_sls": "1, 1, 1",
                "periode": "2019_1",
                "tingkat": 0.0,
                "nm_gedung": null,
                "wil_campur": 0.0,
                "fid_1": 0.0,
                "layer": null,
                "path": null,
                "Shape_Leng": 0.12733056733000001,
                "Shape_Area": 0.00019991903,
                "pdd": 222
            },
            "geometry": {
                "type": "MultiPolygon",
                "coordinates": [
                    [
                        [
                            [104.587302893000071, -3.299642810999956],
                            [104.587218540000038, -3.299388119999946],
                            [104.587049670000056, -3.298878249999973],
                            [104.586449660000085, -3.2985215899999],
                            [104.586043458000063, -3.298251329999971],
                            [104.58669425000005, -3.297182008999926],
                            [104.587570140000082, -3.291498134999927],
                            [104.587779988000079, -3.288446682999961],
                            [104.587989837000066, -3.288182526999947],
                            [104.58859201100006, -3.287645105999957],
                            [104.589668625000058, -3.286269670999957],
                            [104.590389409000068, -3.28505819399993],
                            [104.59170324300004, -3.282544145999964],
                            [104.592524390000051, -3.280831674999945],
                            [104.592636157000072, -3.280610783999975],
                            [104.592811791000088, -3.280280586999936],
                            [104.593051292000041, -3.279977715999962],
                            [104.593204117000084, -3.27983880499994],
                            [104.593329570000037, -3.27971355699998],
                            [104.593304479000039, -3.279681675999939],
                            [104.593311322000034, -3.279640685999937],
                            [104.593327289000058, -3.279615636999949],
                            [104.593413965000082, -3.27956781499995],
                            [104.593432213000085, -3.279526824999948],
                            [104.593505204000053, -3.279467616999966],
                            [104.593582756000046, -3.279390190999948],
                            [104.59358959900004, -3.279321873999947],
                            [104.593678557000032, -3.279283160999967],
                            [104.614000287000067, -3.248647326999958],
                            [104.614042943000072, -3.248583019999955],
                            [104.614203632000056, -3.248571609999942],
                            [104.614602266000077, -3.248555449999969],
                            [104.614735297000038, -3.248550055999942],
                            [104.618076162000079, -3.249031427999967],
                            [104.618722781000088, -3.249175120999951],
                            [104.619017351000082, -3.249297260999981],
                            [104.619117800000083, -3.249384607999957],
                            [104.619223125000076, -3.249394622999944],
                            [104.619401339000035, -3.249821648999955],
                            [104.619722124000077, -3.250640114999953],
                            [104.619755724000072, -3.250841389999948],
                            [104.619756402000064, -3.250842065999962],
                            [104.619923989000085, -3.251462668999977],
                            [104.620214536000049, -3.252538612999956],
                            [104.620213041000056, -3.252540206999925],
                            [104.594285293000041, -3.280184942999938],
                            [104.594196335000049, -3.280257813999981],
                            [104.594173526000077, -3.280312467999977],
                            [104.594105097000067, -3.280367120999927],
                            [104.593965958000069, -3.280490090999933],
                            [104.59389752900006, -3.280537912999932],
                            [104.593813134000072, -3.280638110999973],
                            [104.593628376000083, -3.280856723999932],
                            [104.593687681000063, -3.280922763999968],
                            [104.593573633000062, -3.28107989199998],
                            [104.593213241000058, -3.281685632999938],
                            [104.591520766000087, -3.285536407999928],
                            [104.590133941000033, -3.291584667999928],
                            [104.587302893000071, -3.299642810999956]
                        ]
                    ]
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "fid": 1363,
                "OBJECTID_1": 9209,
                "OBJECTID": 0,
                "kk": 69.0,
                "gid": 16010.0,
                "bstt": 66.0,
                "luas": 6544955.8606399996,
                "bsbtt": 3.0,
                "idsls": "16100200300002",
                "kdkab": "10",
                "kdkec": "020",
                "kdsls": "0002",
                "nmkab": "OGAN ILIR",
                "nmkec": "TANJUNG BATU",
                "nmsls": "RT 002 DUSUN II",
                "bstt_k": 4.0,
                "kddesa": "030",
                "kdprov": "16",
                "khusus": 0.0,
                "muatan": 76.0,
                "nmdesa": "BURAI",
                "nmprov": "SUMATERA SELATAN",
                "posisi": null,
                "rw_dki": null,
                "segmen": null,
                "sumber": "BPS",
                "dom_sls": "1, 1, 1, 1",
                "periode": "2019_1",
                "tingkat": 0.0,
                "nm_gedung": null,
                "wil_campur": 0.0,
                "fid_1": 0.0,
                "layer": null,
                "path": null,
                "Shape_Leng": 0.18237946793000001,
                "Shape_Area": 0.0005272979,
                "pdd": 324
            },
            "geometry": {
                "type": "MultiPolygon",
                "coordinates": [
                    [
                        [
                            [104.572214360000032, -3.285824599999955],
                            [104.567852380000033, -3.2839162399999],
                            [104.564208030000088, -3.279438479999953],
                            [104.560007383000084, -3.274182087999975],
                            [104.559779060000039, -3.2738963799999],
                            [104.558417905000056, -3.272202567999955],
                            [104.556936800000074, -3.270359489999976],
                            [104.550435150000055, -3.262268759999927],
                            [104.550437490000036, -3.262264659999971],
                            [104.551137960000062, -3.261039059999973],
                            [104.551731480000058, -3.261330809999947],
                            [104.555290416000048, -3.263080186999957],
                            [104.573463053000069, -3.272787491999964],
                            [104.576094303000048, -3.274237341999935],
                            [104.580033988000082, -3.276347516999977],
                            [104.584347513000068, -3.278644299999939],
                            [104.58853163200007, -3.280826239999953],
                            [104.588761686000055, -3.280984142999955],
                            [104.591108962000078, -3.279168252999966],
                            [104.591209611000068, -3.279067768999937],
                            [104.591561882000065, -3.277844014999971],
                            [104.591680504000067, -3.277628691999951],
                            [104.591651748000061, -3.277574860999948],
                            [104.591820694000035, -3.277338004999933],
                            [104.598821978000046, -3.244439266999962],
                            [104.598824944000057, -3.244425327999977],
                            [104.599491320000084, -3.244859089999977],
                            [104.599758970000039, -3.2450333099999],
                            [104.600641850000045, -3.245608],
                            [104.602914460000079, -3.246638399999938],
                            [104.602963960000068, -3.246656812999959],
                            [104.604008640000075, -3.247045409999942],
                            [104.60400861100004, -3.247041925999952],
                            [104.604012199000067, -3.247044870999957],
                            [104.604351484000063, -3.247181181999963],
                            [104.605237183000042, -3.247537019999925],
                            [104.606342270000084, -3.247911625999961],
                            [104.607042285000034, -3.248205477999932],
                            [104.593229207000036, -3.278301675999955],
                            [104.593110597000077, -3.278410982999958],
                            [104.593051292000041, -3.278488408999976],
                            [104.59290074900008, -3.278584051999928],
                            [104.592754767000088, -3.278675140999951],
                            [104.592690900000036, -3.278748012999927],
                            [104.592590538000081, -3.278811774999951],
                            [104.592526671000087, -3.278839101999949],
                            [104.592581414000051, -3.27895751799997],
                            [104.59260422400007, -3.278998507999972],
                            [104.592467366000051, -3.279057715999954],
                            [104.592216460000088, -3.279180685999961],
                            [104.59205679300004, -3.279262665999966],
                            [104.592020297000033, -3.279340091999927],
                            [104.591783077000059, -3.279558705999932],
                            [104.591719210000065, -3.279649794999955],
                            [104.591691839000077, -3.279677121999953],
                            [104.591650781000055, -3.27971355699998],
                            [104.590797701000042, -3.280747417999976],
                            [104.588425500000085, -3.282186621999927],
                            [104.575118365000037, -3.288421228999937],
                            [104.572214360000032, -3.285824599999955]
                        ]
                    ]
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "fid": 1383,
                "OBJECTID_1": 9229,
                "OBJECTID": 0,
                "kk": 54.0,
                "gid": 16034.0,
                "bstt": 49.0,
                "luas": 3151415.4924400002,
                "bsbtt": 2.0,
                "idsls": "16100200300003",
                "kdkab": "10",
                "kdkec": "020",
                "kdsls": "0003",
                "nmkab": "OGAN ILIR",
                "nmkec": "TANJUNG BATU",
                "nmsls": "RT 003 DUSUN III",
                "bstt_k": 9.0,
                "kddesa": "030",
                "kdprov": "16",
                "khusus": 0.0,
                "muatan": 65.0,
                "nmdesa": "BURAI",
                "nmprov": "SUMATERA SELATAN",
                "posisi": null,
                "rw_dki": null,
                "segmen": null,
                "sumber": "BPS",
                "dom_sls": "1, 1, 1, 1, 1",
                "periode": "2019_1",
                "tingkat": 0.0,
                "nm_gedung": null,
                "wil_campur": 0.0,
                "fid_1": 0.0,
                "layer": null,
                "path": null,
                "Shape_Leng": 0.13404111322000001,
                "Shape_Area": 0.00025389413,
                "pdd": 233
            },
            "geometry": {
                "type": "MultiPolygon",
                "coordinates": [
                    [
                        [
                            [104.586043458000063, -3.298251329999971],
                            [104.581157460000043, -3.295000509999966],
                            [104.581125830000076, -3.2949794699999],
                            [104.579389440000057, -3.292883469999936],
                            [104.577476850000039, -3.290574779999929],
                            [104.576094810000086, -3.289294319999954],
                            [104.575618850000069, -3.288868739999941],
                            [104.575118365000037, -3.288421228999937],
                            [104.588425500000085, -3.282186621999927],
                            [104.590797701000042, -3.280747417999976],
                            [104.591650781000055, -3.27971355699998],
                            [104.591691839000077, -3.279677121999953],
                            [104.591719210000065, -3.279649794999955],
                            [104.591783077000059, -3.279558705999932],
                            [104.592020297000033, -3.279340091999927],
                            [104.59205679300004, -3.279262665999966],
                            [104.592216460000088, -3.279180685999961],
                            [104.592467366000051, -3.279057715999954],
                            [104.59260422400007, -3.278998507999972],
                            [104.592581414000051, -3.27895751799997],
                            [104.592526671000087, -3.278839101999949],
                            [104.592590538000081, -3.278811774999951],
                            [104.592690900000036, -3.278748012999927],
                            [104.592754767000088, -3.278675140999951],
                            [104.59290074900008, -3.278584051999928],
                            [104.593051292000041, -3.278488408999976],
                            [104.593110597000077, -3.278410982999958],
                            [104.593229207000036, -3.278301675999955],
                            [104.607042285000034, -3.248205477999932],
                            [104.607053479000058, -3.248181087999967],
                            [104.607130685000072, -3.248178885999948],
                            [104.608173853000039, -3.248149128999955],
                            [104.609920351000085, -3.248433812999963],
                            [104.611060921000046, -3.24846939899993],
                            [104.612771776000045, -3.248611740999934],
                            [104.614043478000042, -3.248582213999953],
                            [104.614042943000072, -3.248583019999955],
                            [104.614000287000067, -3.248647326999958],
                            [104.593678557000032, -3.279283160999967],
                            [104.59358959900004, -3.279321873999947],
                            [104.593582756000046, -3.279390190999948],
                            [104.593505204000053, -3.279467616999966],
                            [104.593432213000085, -3.279526824999948],
                            [104.593413965000082, -3.27956781499995],
                            [104.593327289000058, -3.279615636999949],
                            [104.593311322000034, -3.279640685999937],
                            [104.593304479000039, -3.279681675999939],
                            [104.593329570000037, -3.27971355699998],
                            [104.593204117000084, -3.27983880499994],
                            [104.593051292000041, -3.279977715999962],
                            [104.592811791000088, -3.280280586999936],
                            [104.592636157000072, -3.280610783999975],
                            [104.592524390000051, -3.280831674999945],
                            [104.59170324300004, -3.282544145999964],
                            [104.590389409000068, -3.28505819399993],
                            [104.589668625000058, -3.286269670999957],
                            [104.58859201100006, -3.287645105999957],
                            [104.587989837000066, -3.288182526999947],
                            [104.587779988000079, -3.288446682999961],
                            [104.587570140000082, -3.291498134999927],
                            [104.58669425000005, -3.297182008999926],
                            [104.586043458000063, -3.298251329999971]
                        ]
                    ]
                ]
            }
        }
    ]

    var info = L.control();

    info.onAdd = function(map) {
        this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
        this.update();
        return this._div;
    };

    // method that we will use to update the control based on feature properties passed
    info.update = function(properties) {
        this._div.innerHTML = '<h4>Data</h4>' + (properties ?
            '<b>' + properties.nmsls + '</b><br />' + 'Jumlah Penduduk: ' + properties.pdd + ' Jiwa <br/>' + 'Luas: ' + properties.luas + ' m<sup>2</sup>' :
            'sorot pada daerah untuk melihat data');
    };

    info.addTo(map);

    function getColor(d) {
        return d > 400 ? '#800026' :
            d > 350 ? '#BD0026' :
            d > 300 ? '#E31A1C' :
            d > 250 ? '#FC4E2A' :
            '#FD8D3C';
    }

    function style(feature) {
        return {
            fillColor: getColor(feature.properties.pdd),
            weight: 2,
            opacity: 1,
            color: 'white',
            dashArray: '3',
            fillOpacity: 0.7
        };
    }

    function highlightFeature(e) {
        var layer = e.target;

        layer.setStyle({
            weight: 5,
            color: '#666',
            dashArray: '',
            fillOpacity: 0.7
        });

        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
            layer.bringToFront();
        }

        info.update(layer.feature.properties);
    }

    function resetHighlight(e) {
        geojson.resetStyle(e.target);
        info.update();
    }

    var geojson;

    function zoomToFeature(e) {
        map.fitBounds(e.target.getBounds());
    }

    function onEachFeature(feature, layer) {
        layer.bindPopup('<b>' + feature.properties.nmsls + '</b><br />' + 'Jumlah Penduduk: ' + feature.properties.pdd + ' Jiwa <br/>' + 'Luas: ' + feature.properties.luas + ' m<sup>2</sup>');
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight,
            click: zoomToFeature
        });
    }

    geojson = L.geoJson(data, {
        style: style,
        onEachFeature: onEachFeature
    }).addTo(map);

    var legend = L.control({
        position: 'bottomright'
    });

    var legend = L.control({
        position: 'bottomright'
    });

    legend.onAdd = function(map) {

        var div = L.DomUtil.create('div', 'info legend'),
            grades = [0, 250, 300, 350, 400],
            labels = [];

        // loop through our density intervals and generate a label with a colored square for each interval
        for (var i = 0; i < grades.length; i++) {
            div.innerHTML +=
                '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
                grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
        }

        return div;
    };

    legend.addTo(map);
</script>