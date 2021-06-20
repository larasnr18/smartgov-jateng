@extends('layouts.default')

@section('content')
<div class="container-fluid p-4">
    <div class="bg-overlay-black text-white p-5">
        <div class="font-24 font-weight-bold">
            <div class="grad-line"></div>
            MISI 3
        </div>
        <div class="font-20 pt-4">
            “Memperkuat kapasitas ekonomi rakyat dan membuka lapangan kerja untuk mengurangi kemiskinan dan pengangguran.”
        </div>
    </div>
    <div class="rounded shadow-2 mt-5 px-5 py-4">
        <div class="font-20 font-weight-bold">Program Unggulan</div>
        <div class="font-18 pt-4">
            <ul>
                <li>Satgas kemiskinan, bantuan desa, rumah sederhana layak huni.</li>
                <li>Obligasi daerah, kemudahan akses kredit UMKM.</li>
                <li>Penguatan BUMDesa dan pelatihan startup untuk wirausaha muda.</li>
                <li>Sekolah biaya pemerintah khusus untuk siswa miskin (SMAN, SMKN, SLB).</li>
                <li>Pembukaan kawasan industri baru dan rintisan pertanian terintegrasi.</li>
                <li>Pengembangan transportasi massal, revitaliasi jalur kereta dan bandara serta pembangunan embung/irigasi.</li>
                <li>Menjaga harga komoditas dan asuransi gagal panen untuk petani serta melindungi kepentingan nelayan.</li>
            </ul>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12 pb-4">
            <div class="font-20 font-weight-bold">Grafik Data</div>
        </div>
        <div class="col-lg-12">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Angka Kemiskinan</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='JABARJATENG&#47;BYTAHUN-PersentasePendudukMiskin' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p class="pt-3 pl-3">Sumber : Dummy</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Pertumbuhan Ekonomi</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='JABARJATENG&#47;pertumbuhanekonomi' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p class="pt-3 pl-3">Sumber : Dummy</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Produk Domestik Regional Bruto (PDRB) per Kapita</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='JABARJATENG&#47;ALL-ProyeksiJumlah' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p class="pt-3 pl-3">Sumber : Dummy</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Indeks Williamson</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='JABARJATENG&#47;IndeksWilliamson' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p class="pt-3 pl-3">Sumber : Dummy</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('before-style')
<style>
    .bg-overlay-black {
        background-color: rgba(0, 0, 0, 0.7);
        background-image: url("images/profil-page/bg-dark.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        border-radius: 10px;
    }
    .grad-line {
        width: 27px;
        height: 5px;
        background: linear-gradient(258.28deg, #E53935 4.73%, #575988 94.22%);
        border-radius: 10px;
    }
    .mis-1-grad {
    position: relative;
    bottom: 15px;
    left: 30px;
    background-image: linear-gradient(to right, #575988  5%, #E53935 95%); 
    width: max-content;
    border-radius: 8px;
    padding: 5px 15px 5px 15px;
    color: white;
    text-align: center;
}
</style>
@endpush

@push('after-script')

@endpush
