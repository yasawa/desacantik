<style>
    #map { height: 500px; }
    .info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
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
<header class="masthead" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url('<?= base_url('assets/img/piput.jpg') ?>'); width: 100%; background-repeat: no-repeat; background-size: cover !important;">
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

<script type="text/javascript">
    var map = L.map('map').setView([-3.049529, 104.769174], 15);
    map.scrollWheelZoom.disable();

    L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>, Desa Cantik (Cinta Statistik) © <a href="https://oganilirkab.bps.go.id/">BPS Kabupaten Ogan Ilir</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11'
    }).addTo(map);

    var data =[
{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[104.77908250300004,-3.046616380999978],[104.77908410000003,-3.046597479999946],[104.77908440000004,-3.046593978999965],[104.77910097600005,-3.046397808999927],[104.77911813300005,-3.046194771999978],[104.77916490600006,-3.045641275999969],[104.77918644000005,-3.045386441999938],[104.77897887600005,-3.044319794999979],[104.77811370900008,-3.044872968999925],[104.77703136400004,-3.045555938999939],[104.77552404900007,-3.046464354999955],[104.77530492400007,-3.046587023999962],[104.77496428100005,-3.046771409999963],[104.77485339400005,-3.047253415999933],[104.77476043100006,-3.047982799999943],[104.77471356900008,-3.048515101999953],[104.77477668300008,-3.048538614999927],[104.77501056500006,-3.048625741999956],[104.77515552000006,-3.04745233899996],[104.77674251700006,-3.047757353999941],[104.77673587700008,-3.047071069999959],[104.77667943600005,-3.046590338999977],[104.77676907800009,-3.046590338999977],[104.77708116500008,-3.046610231999978],[104.77908250300004,-3.046616380999978]]]},"properties":{"fid":108,"OBJECTID_1":7954,"OBJECTID":0,"kk":54,"gid":14754,"bstt":34,"luas":81780.7613217,"bsbtt":3,"idsls":"16100500380004","kdkab":"10","kdkec":"050","kdsls":"0004","nmkab":"OGAN ILIR","nmkec":"PEMULUTAN","nmsls":"RT 4 DUSUN 2","bstt_k":4,"kddesa":"038","kdprov":"16","khusus":0,"muatan":61,"nmdesa":"PIPA PUTIH","nmprov":"SUMATERA SELATAN","posisi":"","rw_dki":"","segmen":"","sumber":"BPS","dom_sls":"1, 1, 1, 1","periode":"2019_1","tingkat":0,"nm_gedung":"","wil_campur":0,"fid_1":0,"layer":"","path":"","Shape_Leng":0.01547964686,"Shape_Area":0.00000659014, "pdd":157}},
{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[104.77534407000007,-3.043531450999978],[104.77586463200004,-3.045161816999951],[104.77586435700005,-3.045168038999975],[104.77594326000008,-3.045379791999949],[104.77582783600008,-3.045479684999975],[104.77546428800008,-3.045768123999949],[104.77534780900004,-3.045871016999968],[104.77545930800005,-3.045879188999947],[104.77556555000007,-3.045864269999925],[104.77591415800003,-3.04563882399998],[104.77650679200008,-3.045300653999959],[104.77693176200006,-3.045048684999927],[104.77726863300006,-3.044868213999962],[104.77660912200008,-3.043084058999966],[104.77597454500005,-3.043348431999959],[104.77534705100004,-3.04353077899998],[104.77534407000007,-3.043531450999978]]]},"properties":{"fid":196,"OBJECTID_1":8042,"OBJECTID":0,"kk":59,"gid":14843,"bstt":40,"luas":35876.7261253,"bsbtt":2,"idsls":"16100500380007","kdkab":"10","kdkec":"050","kdsls":"0007","nmkab":"OGAN ILIR","nmkec":"PEMULUTAN","nmsls":"RT 7 DUSUN 4","bstt_k":0,"kddesa":"038","kdprov":"16","khusus":0,"muatan":61,"nmdesa":"PIPA PUTIH","nmprov":"SUMATERA SELATAN","posisi":"","rw_dki":"","segmen":"","sumber":"BPS","dom_sls":"1, 1","periode":"2019_1","tingkat":0,"nm_gedung":"","wil_campur":0,"fid_1":0,"layer":"","path":"","Shape_Leng":0.00815468333,"Shape_Area":0.00000289106, "pdd":249}},
{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[104.76832292800003,-3.052348325999958],[104.76892898000006,-3.052625259999957],[104.76933792000005,-3.052812119999942],[104.76975248000008,-3.053000809999958],[104.77074427100007,-3.05345222699998],[104.77371038000007,-3.054802259999974],[104.77516648000005,-3.055465],[104.77523677900007,-3.055496995999931],[104.77626664900004,-3.055965731999947],[104.77626872000008,-3.055958929999974],[104.77627247800007,-3.055946590999952],[104.77644542300004,-3.055359200999931],[104.77647817000008,-3.055247979999933],[104.77663055000005,-3.0546548799999],[104.77751034500005,-3.052810052999973],[104.77509638200007,-3.051536880999947],[104.77413023900004,-3.050969952999935],[104.77454856900005,-3.049418358999958],[104.77477668300008,-3.048538614999927],[104.77471356900008,-3.048515101999953],[104.77329358000009,-3.047986114999958],[104.77328292600004,-3.047995379999975],[104.76974773800004,-3.051069413999926],[104.76832292800003,-3.052348325999958]]]},"properties":{"fid":264,"OBJECTID_1":8110,"OBJECTID":0,"kk":52,"gid":14912,"bstt":38,"luas":415229.781261,"bsbtt":35,"idsls":"16100500380001","kdkab":"10","kdkec":"050","kdsls":"0001","nmkab":"OGAN ILIR","nmkec":"PEMULUTAN","nmsls":"RT 1 DUSUN 1","bstt_k":1,"kddesa":"038","kdprov":"16","khusus":0,"muatan":88,"nmdesa":"PIPA PUTIH","nmprov":"SUMATERA SELATAN","posisi":"","rw_dki":"","segmen":"","sumber":"BPS","dom_sls":"1, 1, 1, 1","periode":"2019_1","tingkat":0,"nm_gedung":"","wil_campur":0,"fid_1":0,"layer":"","path":"","Shape_Leng":0.02669445164,"Shape_Area":0.00003346028, "pdd":193}},
{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[104.77818175300007,-3.049853145999975],[104.77751671800007,-3.049676957999964],[104.77619200700008,-3.049199543999976],[104.77521590400005,-3.048702236999929],[104.77501056500006,-3.048625741999956],[104.77477668300008,-3.048538614999927],[104.77454856900005,-3.049418358999958],[104.77413023900004,-3.050969952999935],[104.77509638200007,-3.051536880999947],[104.77751034500005,-3.052810052999973],[104.77792510000006,-3.051940359999946],[104.77819426500008,-3.051630422999949],[104.77820483200009,-3.051618254999937],[104.77820956900007,-3.0516128],[104.77819430100004,-3.051606427999957],[104.77747262500009,-3.051305250999974],[104.77787433600008,-3.050454113999933],[104.77798741600009,-3.0502145199999],[104.77801198600008,-3.050165872999969],[104.77803658100004,-3.050120567999954],[104.77818175300007,-3.049853145999975]]]},"properties":{"fid":290,"OBJECTID_1":8136,"OBJECTID":0,"kk":48,"gid":14939,"bstt":28,"luas":123507.821689,"bsbtt":14,"idsls":"16100500380002","kdkab":"10","kdkec":"050","kdsls":"0002","nmkab":"OGAN ILIR","nmkec":"PEMULUTAN","nmsls":"RT 2 DUSUN 1","bstt_k":2,"kddesa":"038","kdprov":"16","khusus":0,"muatan":64,"nmdesa":"PIPA PUTIH","nmprov":"SUMATERA SELATAN","posisi":"","rw_dki":"","segmen":"","sumber":"BPS","dom_sls":"1, 1, 1, 1","periode":"2019_1","tingkat":0,"nm_gedung":"","wil_campur":0,"fid_1":0,"layer":"","path":"","Shape_Leng":0.0138378151,"Shape_Area":0.00000995259, "pdd":132}},
{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[104.77894719800008,-3.044157005999978],[104.77809710900004,-3.044329244999972],[104.77770533900008,-3.044634260999942],[104.77726863300006,-3.044868213999962],[104.77693176200006,-3.045048684999927],[104.77650679200008,-3.045300653999959],[104.77591415800003,-3.04563882399998],[104.77556555000007,-3.045864269999925],[104.77545930800005,-3.045879188999947],[104.77534780900004,-3.045871016999968],[104.77520532200003,-3.045996884999965],[104.77504595800008,-3.04618088899997],[104.77503572500007,-3.046187737999958],[104.77494967600006,-3.04677931599997],[104.77496428100005,-3.046771409999963],[104.77530492400007,-3.046587023999962],[104.77552404900007,-3.046464354999955],[104.77703136400004,-3.045555938999939],[104.77811370900008,-3.044872968999925],[104.77897887600005,-3.044319794999979],[104.77895177700009,-3.044180534999953],[104.77895120000005,-3.044177569999931],[104.77894719800008,-3.044157005999978]]]},"properties":{"fid":457,"OBJECTID_1":8303,"OBJECTID":0,"kk":73,"gid":15103,"bstt":58,"luas":25809.5577603,"bsbtt":4,"idsls":"16100500380009","kdkab":"10","kdkec":"050","kdsls":"0009","nmkab":"OGAN ILIR","nmkec":"PEMULUTAN","nmsls":"RT 9 DUSUN 5","bstt_k":1,"kddesa":"038","kdprov":"16","khusus":0,"muatan":78,"nmdesa":"PIPA PUTIH","nmprov":"SUMATERA SELATAN","posisi":"","rw_dki":"","segmen":"","sumber":"BPS","dom_sls":"1, 1","periode":"2019_1","tingkat":0,"nm_gedung":"","wil_campur":0,"fid_1":0,"layer":"","path":"","Shape_Leng":0.00998325768,"Shape_Area":0.00000207981, "pdd":315}},
{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[104.77908250300004,-3.046616380999978],[104.77708116500008,-3.046610231999978],[104.77676907800009,-3.046590338999977],[104.77667943600005,-3.046590338999977],[104.77673587700008,-3.047071069999959],[104.77674251700006,-3.047757353999941],[104.77515552000006,-3.04745233899996],[104.77501056500006,-3.048625741999956],[104.77521590400005,-3.048702236999929],[104.77619200700008,-3.049199543999976],[104.77751671800007,-3.049676957999964],[104.77818175300007,-3.049853145999975],[104.77819412900004,-3.049830348999933],[104.77819566000005,-3.049827519999951],[104.77840025400008,-3.049450629999967],[104.77840642600006,-3.049439218999964],[104.77840868500004,-3.049433316999966],[104.77846120800007,-3.049296117999972],[104.77848461800005,-3.049234966999961],[104.77865089000005,-3.048800637999932],[104.77873466600005,-3.048581800999955],[104.77874495400005,-3.048554926999941],[104.77874535300003,-3.048553884999933],[104.77894122200007,-3.047717804999934],[104.77901387200006,-3.047407691999979],[104.77901663000006,-3.047395905999963],[104.77901698400007,-3.047391732999927],[104.77904661800005,-3.047041047999926],[104.77908250300004,-3.046616380999978]]]},"properties":{"fid":482,"OBJECTID_1":8328,"OBJECTID":0,"kk":54,"gid":15130,"bstt":48,"luas":107577.947034,"bsbtt":3,"idsls":"16100500380003","kdkab":"10","kdkec":"050","kdsls":"0003","nmkab":"OGAN ILIR","nmkec":"PEMULUTAN","nmsls":"RT 3 DUSUN 2","bstt_k":1,"kddesa":"038","kdprov":"16","khusus":0,"muatan":58,"nmdesa":"PIPA PUTIH","nmprov":"SUMATERA SELATAN","posisi":"","rw_dki":"","segmen":"","sumber":"BPS","dom_sls":"1","periode":"2019_1","tingkat":0,"nm_gedung":"","wil_campur":0,"fid_1":0,"layer":"","path":"","Shape_Leng":0.01317372272,"Shape_Area":0.00000866894, "pdd":192}},
{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[104.77496428100005,-3.046771409999963],[104.77494967600006,-3.04677931599997],[104.77503572500007,-3.046187737999958],[104.77457782700009,-3.046494192999944],[104.77367642600007,-3.047125773999937],[104.77318588500003,-3.047518646999947],[104.77281237800008,-3.047815424999953],[104.77328292600004,-3.047995379999975],[104.77329358000009,-3.047986114999958],[104.77471356900008,-3.048515101999953],[104.77476043100006,-3.047982799999943],[104.77485339400005,-3.047253415999933],[104.77496428100005,-3.046771409999963]]]},"properties":{"fid":678,"OBJECTID_1":8524,"OBJECTID":0,"kk":46,"gid":15326,"bstt":34,"luas":29218.3207104,"bsbtt":0,"idsls":"16100500380010","kdkab":"10","kdkec":"050","kdsls":"0010","nmkab":"OGAN ILIR","nmkec":"PEMULUTAN","nmsls":"RT 10 DUSUN 5","bstt_k":2,"kddesa":"038","kdprov":"16","khusus":0,"muatan":48,"nmdesa":"PIPA PUTIH","nmprov":"SUMATERA SELATAN","posisi":"","rw_dki":"","segmen":"","sumber":"BPS","dom_sls":"1, 1","periode":"2019_1","tingkat":0,"nm_gedung":"","wil_campur":0,"fid_1":0,"layer":"","path":"","Shape_Leng":0.00716903972,"Shape_Area":0.0000023545, "pdd":154}},
{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[104.77894719800008,-3.044157005999978],[104.77894596400006,-3.044150664999961],[104.77891730000005,-3.044003361999955],[104.77890541900007,-3.043942304999973],[104.77887896100003,-3.043806340999936],[104.77885846500004,-3.043701014999954],[104.77877894000005,-3.043292341999972],[104.77876139700004,-3.043202191999967],[104.77875975500007,-3.043193751999979],[104.77875779700008,-3.043183686999953],[104.778734,-3.043073566999965],[104.77869777700005,-3.042905943999926],[104.77867336100007,-3.042792954999925],[104.77856057900004,-3.042271054999958],[104.77660912200008,-3.043084058999966],[104.77726863300006,-3.044868213999962],[104.77770533900008,-3.044634260999942],[104.77809710900004,-3.044329244999972],[104.77894719800008,-3.044157005999978]]]},"properties":{"fid":869,"OBJECTID_1":8715,"OBJECTID":0,"kk":61,"gid":15520,"bstt":53,"luas":44697.3872368,"bsbtt":0,"idsls":"16100500380008","kdkab":"10","kdkec":"050","kdsls":"0008","nmkab":"OGAN ILIR","nmkec":"PEMULUTAN","nmsls":"RT 8 DUSUN 4","bstt_k":1,"kddesa":"038","kdprov":"16","khusus":0,"muatan":62,"nmdesa":"PIPA PUTIH","nmprov":"SUMATERA SELATAN","posisi":"","rw_dki":"","segmen":"","sumber":"BPS","dom_sls":"1, 1","periode":"2019_1","tingkat":0,"nm_gedung":"","wil_campur":0,"fid_1":0,"layer":"","path":"","Shape_Leng":0.00780075376,"Shape_Area":0.00000360186, "pdd":219}},
{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[104.77011912300009,-3.044711314999972],[104.76786742600007,-3.045220860999962],[104.76725003300004,-3.045360572999925],[104.76724999700008,-3.045360580999954],[104.76711717400008,-3.045390637999958],[104.76706649300007,-3.045361919999948],[104.76698119500008,-3.045340594999971],[104.76686390900005,-3.04527129],[104.76676794800005,-3.045169997999949],[104.76667465300005,-3.04504471499996],[104.76656803000009,-3.044892776999973],[104.76648806200006,-3.04478348799995],[104.76631479900004,-3.044754166999951],[104.76615219900003,-3.044743504999929],[104.76593628700005,-3.044735507999974],[104.76583499500003,-3.044735507999974],[104.76570171600008,-3.04474883599994],[104.76563774200008,-3.044767494999974],[104.76555777400006,-3.04481547499995],[104.76549113500005,-3.044852792999961],[104.76542449500005,-3.04491143599995],[104.76529121600004,-3.044986072999961],[104.76511528800006,-3.045028721999927],[104.76492869700007,-3.04504471499996],[104.76479008700005,-3.0450420499999],[104.76473944100007,-3.045058042999926],[104.76461682400009,-3.045087364999972],[104.76436625900004,-3.045183325999972],[104.76415834400007,-3.04520731599996],[104.76404905500004,-3.045231305999948],[104.76392377300004,-3.04527129],[104.76378782800003,-3.045311273999971],[104.76358257800007,-3.04537258199997],[104.76334001000004,-3.045452548999947],[104.76310543900007,-3.045497863999969],[104.76299081900004,-3.04553251699997],[104.76284421200006,-3.045551175999947],[104.76269494000007,-3.045561837999969],[104.76263096600007,-3.045577831999935],[104.76247902800009,-3.045609818999935],[104.76239825100004,-3.045625579999978],[104.76226045000004,-3.045652467999957],[104.76219114500009,-3.045668460999934],[104.76211117700007,-3.04569511699998],[104.76203387600003,-3.045737766999935],[104.76198856100007,-3.045756425999969],[104.76194324600004,-3.045772418999945],[104.76188993400007,-3.045804405999945],[104.76184995000006,-3.045833726999945],[104.76181529800004,-3.045871045999945],[104.76178064500004,-3.045897700999944],[104.76175132400004,-3.045975002999967],[104.76172999900007,-3.046020317999933],[104.76168201900003,-3.046049639999978],[104.76163670400007,-3.046062967999944],[104.76160205100007,-3.046068298999955],[104.76156473300006,-3.046070963999966],[104.76151941800003,-3.046057635999944],[104.76146877200006,-3.046036311999956],[104.76142345700003,-3.046009655999967],[104.76138347400007,-3.045993661999944],[104.76136748000005,-3.045988330999933],[104.76133282800004,-3.045969671999956],[104.76127685000006,-3.045972337999956],[104.76123153500004,-3.045980333999978],[104.76118622100006,-3.045996327999944],[104.76115423400006,-3.046006989999967],[104.76110891900004,-3.046020317999933],[104.76104494500004,-3.046044307999978],[104.76102362000006,-3.046049639999978],[104.76100762700008,-3.046049639999978],[104.76097564000008,-3.046049639999978],[104.76095698100005,-3.046049639999978],[104.76094098700008,-3.046049639999978],[104.76090100300007,-3.046054970999933],[104.76087701300008,-3.046065632999955],[104.76086368500006,-3.046076294999978],[104.76076772400006,-3.046118944999932],[104.76071174700007,-3.046169590999966],[104.76069841900005,-3.046201577999966],[104.76067709500006,-3.046260220999955],[104.76066909800005,-3.046334856999977],[104.76064244200006,-3.046492125999976],[104.76061845200007,-3.046542771999952],[104.76061845200007,-3.04656409699993],[104.76062644800004,-3.046614742999964],[104.76062111700008,-3.046657391999929],[104.76064110900006,-3.04669604299994],[104.76065043900007,-3.046717367999975],[104.76066110100004,-3.046736026999952],[104.76066509900005,-3.046753352999929],[104.76066909800005,-3.046777342999974],[104.76066909800005,-3.046801333999952],[104.76066909800005,-3.046849798999972],[104.76024069800008,-3.046946742999978],[104.76021868500004,-3.04695040699994],[104.76021906700004,-3.046959460999972],[104.76024403700006,-3.047601836999945],[104.76029508900007,-3.048915159999979],[104.76034127300005,-3.050103272999934],[104.76035721500006,-3.050513395999928],[104.76031689400008,-3.050634187999947],[104.76031037900003,-3.050653704999945],[104.76030342800004,-3.050662497999951],[104.76016097500008,-3.050842681999939],[104.75983716000007,-3.050987159999977],[104.75952849100008,-3.051097050999942],[104.75912155200007,-3.051256062999926],[104.75907032000003,-3.051276080999969],[104.75902031600003,-3.051296922999938],[104.75869682200005,-3.051409609999951],[104.75851761600006,-3.051528910999934],[104.75834986300003,-3.051620879999973],[104.75821011800008,-3.051783143999955],[104.75820710000005,-3.051786647999961],[104.75944772000008,-3.051822729999969],[104.76040839400008,-3.051845772999968],[104.76129333000006,-3.051867],[104.76171059000006,-3.051876989999926],[104.76211738000006,-3.051891779999949],[104.76476272000008,-3.051987959999963],[104.76476372000008,-3.0519879899999],[104.766512,-3.052051549999931],[104.76736684500008,-3.052082626999947],[104.76756388000007,-3.052089789999968],[104.76777386000003,-3.052097429999947],[104.76832292800003,-3.052348325999958],[104.76974773800004,-3.051069413999926],[104.77328292600004,-3.047995379999975],[104.77281237800008,-3.047815424999953],[104.77249115900008,-3.048070656999926],[104.77238159600006,-3.047926437999934],[104.77011912300009,-3.044711314999972]]]},"properties":{"fid":998,"OBJECTID_1":8844,"OBJECTID":0,"kk":108,"gid":15649,"bstt":89,"luas":919542.956427,"bsbtt":0,"idsls":"16100500380006","kdkab":"10","kdkec":"050","kdsls":"0006","nmkab":"OGAN ILIR","nmkec":"PEMULUTAN","nmsls":"RT 6 DUSUN 3","bstt_k":5,"kddesa":"038","kdprov":"16","khusus":0,"muatan":113,"nmdesa":"PIPA PUTIH","nmprov":"SUMATERA SELATAN","posisi":"","rw_dki":"","segmen":"","sumber":"BPS","dom_sls":"1, 1, 1, 1","periode":"2019_1","tingkat":0,"nm_gedung":"","wil_campur":0,"fid_1":0,"layer":"","path":"","Shape_Leng":0.03926125748,"Shape_Area":0.00007409938, "pdd":318}},
{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[104.77534780900004,-3.045871016999968],[104.77546428800008,-3.045768123999949],[104.77582783600008,-3.045479684999975],[104.77594326000008,-3.045379791999949],[104.77586435700005,-3.045168038999975],[104.77586463200004,-3.045161816999951],[104.77534407000007,-3.043531450999978],[104.77257764900008,-3.044154965999951],[104.77011928200005,-3.044711278999955],[104.77011912300009,-3.044711314999972],[104.77238159600006,-3.047926437999934],[104.77249115900008,-3.048070656999926],[104.77281237800008,-3.047815424999953],[104.77318588500003,-3.047518646999947],[104.77367642600007,-3.047125773999937],[104.77457782700009,-3.046494192999944],[104.77503572500007,-3.046187737999958],[104.77504595800008,-3.04618088899997],[104.77520532200003,-3.045996884999965],[104.77534780900004,-3.045871016999968]]]},"properties":{"fid":1318,"OBJECTID_1":9164,"OBJECTID":0,"kk":90,"gid":15968,"bstt":80,"luas":176732.259439,"bsbtt":5,"idsls":"16100500380005","kdkab":"10","kdkec":"050","kdsls":"0005","nmkab":"OGAN ILIR","nmkec":"PEMULUTAN","nmsls":"RT 5 DUSUN 3","bstt_k":0,"kddesa":"038","kdprov":"16","khusus":0,"muatan":95,"nmdesa":"PIPA PUTIH","nmprov":"SUMATERA SELATAN","posisi":"","rw_dki":"","segmen":"","sumber":"BPS","dom_sls":"1, 1","periode":"2019_1","tingkat":0,"nm_gedung":"","wil_campur":0,"fid_1":0,"layer":"","path":"","Shape_Leng":0.01579809723,"Shape_Area":0.00001424163, "pdd":375}}
]

// var geojson = L.geoJson(data).addTo(map);
// L.geoJSON(data, {
//     style: function(feature) {
//         if (feature.properties.pdd > 300) {
//             return {
//                 weight: 0.3,
//                 opacity: 1,
//                 color: "#fb4762",
//                 dashArray: "5",
//                 fillOpacity: 0.8,
//                 fillColor: "#fb4762"
//             };
//         } else if (250 < feature.properties.pdd < 300) {
//             return {
//                 weight: 0.3,
//                 opacity: 1,
//                 color: "#fb788c",
//                 dashArray: "5",
//                 fillOpacity: 0.8,
//                 fillColor: "#fb788c"
//             };
//         } else if (200 < feature.properties.pdd < 250) {
//             return {
//                 weight: 0.3,
//                 opacity: 1,
//                 color: "#fd9fad",
//                 dashArray: "5",
//                 fillOpacity: 0.8,
//                 fillColor: "#fd9fad"
//             };
//         } else if (150 < feature.properties.pdd < 200) {
//             return {
//                 weight: 0.3,
//                 opacity: 1,
//                 color: "#fbc1ca",
//                 dashArray: "5",
//                 fillOpacity: 0.8,
//                 fillColor: "#fbc1ca"
//             };
//         } else {
//             return {
//                 weight: 0.3,
//                 opacity: 2,
//                 color: "#fde2e6",
//                 dashArray: "5",
//                 fillOpacity: 0.3,
//                 fillColor: "#fde2e6"
//             };
//         }
//     }
// }).addTo(map);
 var info = L.control();

info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
    this.update();
    return this._div;
};

// method that we will use to update the control based on feature properties passed
info.update = function (properties) {
    this._div.innerHTML = '<h4>Data</h4>' +  (properties ?
        '<b>' + properties.nmsls + '</b><br />' + 'Jumlah Penduduk: ' + properties.pdd + ' Jiwa <br/>' + 'Luas: ' + properties.luas + ' m<sup>2</sup>'
        : 'sorot pada daerah untuk melihat data');
};

info.addTo(map);

function getColor(d) {
    return d > 300 ? '#800026' :
           d > 250  ? '#BD0026' :
           d > 200  ? '#E31A1C' :
           d > 150  ? '#FC4E2A' :
            '#FD8D3C' ;
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

var legend = L.control({position: 'bottomright'});

var legend = L.control({position: 'bottomright'});

legend.onAdd = function (map) {

    var div = L.DomUtil.create('div', 'info legend'),
        grades = [0, 150, 200, 250, 300],
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