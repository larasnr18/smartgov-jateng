@extends('layouts.default')

@section('content')
<div class="container-fluid py-4">
    <div class="row mx-3">
        <div class="col-2">
            <img class="img" src="images/gub.png" alt="" width="100%" height="auto">
        </div>
        <div class="col-8 text-center my-auto">
            <h3 class="text-danger pb-3 font-weight-bold">VISI</h3>
            <h5 class="font-weight-bold">"MENUJU JAWA TENGAH SEJAHTERA DAN BERDIKARI"</h5>
            <h5 class="text-muted font-weight-bold">TETEP MBOTEN KORUPSI, MBOTEN NGAPUSI</h5>
        </div>
        <div class="col-2">
            <img class="img" src="images/wagub.png" alt="" width="100%" height="auto">
        </div>
        <div class="col-4 offset-8 mt-5">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Pencarian Sektor</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text"><em class="fas fa-search"></em></div>
                </div>
                <input type="text" class="form-control form-control-sm" id="inlineFormInputGroupUsername2" placeholder="Pencarian Sektor">
            </div>
        </div>
    </div>


    <div class="row mx-3 sektor">
        <div class="sektor-col col-4 my-auto px-2">
            <div class="flipper">
                <div class="flip-content">
                    <div class="front">
                        <div id="front-card" class="front-card text-center shadow-2 rounded pt-5 pb-2 mb-2">
                            <div class="font-20 font-weight-bold">Sektor Pertanian</div>
                            <img class="img mx-auto" style="margin:48px 0px" src="images/pertanian.png" alt="" height="90px" width="auto">
                            <div class="font-36">101,49</div>
                            <div class="font-16 font-weight-bold">Nilai Tukar Petani</div>
                            <div class="description-box">Rasio antara indeks harga yang diterima petani dengan indeks harga yang dibayar petani pada tahun 2020. </div>
                        </div>
                    </div>
                    <div class="back">
                        <div id="back-card" class="back-card text-center shadow-2 rounded pt-5 pb-2 mb-2">
                            <div class="px-2">

                                <div class="font-20 font-weight-bold mb-5"><span><img class="img" src="images/pertanian.png" height="20px" alt=""></span> Sektor Pertanian</div>

                                <div class="row mx-0" data-toggle="tooltip" data-html="true" data-placement="right" 
                                    title="<div style='max-width:500px;width:500px;position:relative;overflow:auto;'>
                                        <div class='font-weight-bold'>Nilai Tukar Petani</div> 
                                        <br> Nilai tukar petani adalah rasio antara indeks harga yang diterima petani dengan indeks harga yang dibayar petani yang dinyatakan dalam persentase. Nilai tukar petani merupakan salah satu indikator dalam menentukan tingkat kesejahteraan petani. 
                                        <div class='row mx-0 pt-3'>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>102,19</div>
                                                November
                                            </div>
                                            <div class='col-2 p-0 my-auto text-danger'>
                                                <div class='h3 m-0 p-0 fas fa-sort-down'></div>
                                            </div>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>102,19</div>
                                                Desember
                                            </div>
                                        </div>
                                    </div>">
                                    <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Nilai Tukar Petani</div>
                                    <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">101,49</div>
                            </div>
                                <div class="row mx-0" data-toggle="tooltip" data-html="true" data-placement="right" 
                                    title="<div style='max-width:500px;width:500px;position:relative;overflow:auto;'>
                                        <div class='font-weight-bold'>Pertumbuhan Sektor Kehutanan, Perikanan dan Pertanian</div> 
                                        <br> Pertumbuhan Sektor Kehutanan, Perikanan dan Pertanian 
                                        <div class='row mx-0 pt-3'>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>75%</div>
                                                November
                                            </div>
                                            <div class='col-2 p-0 my-auto text-success'>
                                                <div class='h3 m-0 p-0 fas fa-caret-up'></div>
                                            </div>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>80%</div>
                                                Desember
                                            </div>
                                        </div>
                                    </div>">
                                    <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Pertumbuhan Sektor Kehutanan, Perikanan, dan Pertanian</div>
                                    <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">80%</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="btn" class="px-2 w-100" style="position:absolute;bottom:0;left:0">
                <a href="/data-pendukung-pertanian" class="btn btn-red rounded-bottom px-2 w-100" >Data Pendukung</a>
            </div>

        </div>

        <div class="sektor-col col-4 px-2">
            <div class="flipper">
                <div class="flip-content">
                    <div class="front">
                        <div class=" text-center shadow-2 rounded pt-5 pb-2 mb-2">
                            <div class="font-20 font-weight-bold">Sektor Pariwisata</div>
                            <img class="img mx-auto" style="margin:48px 0px" src="images/pariwisata.png" alt="" height="90px" width="auto">
                            <div class="font-36">3,21%</div>
                            <div class="font-16 font-weight-bold">PRDB</div>
                            <div class="description-box">Kontribusi Produk Domestik Regional Bruto (PDRB) Capaian Kinerja Program di Sektor Pariwisata pada tahun 2019.</div>
                        </div>
                    </div>
                    <div class="back">
                        <div id="back-card" class="back-card text-center shadow-2 rounded pt-5 pb-2 mb-2">
                            <div class="px-2">
    
                                <div class="font-20 font-weight-bold mb-5"><span><img class="img" src="images/pariwisata.png" height="20px" alt=""></span> Sektor Pariwisata</div>
    
                                <div class="row mx-0" data-toggle="tooltip" data-html="true" data-placement="right" 
                                    title="<div style='max-width:500px;width:500px;position:relative;overflow:auto;'>
                                        <div class='font-weight-bold'>PRDB</div> 
                                        <br> Produk Domestik Regional Bruto atas dasar harga pasar adalah jumlah nilai tambah bruto (gross value added) yang timbul dari seluruh sektor perekonomian di suatu wilayah. 
                                        <div class='row mx-0 pt-3'>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>3.19%</div>
                                                2018
                                            </div>
                                            <div class='col-2 p-0 my-auto text-success'>
                                                <div class='h3 m-0 p-0 fas fa-caret-up'></div>
                                            </div>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>3.21%</div>
                                                2019
                                            </div>
                                        </div>
                                    </div>">
                                    <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Kontribusi Produk Domestik Regional Bruto (PDRB)</div>
                                    <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">3.21%</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-2 w-100" style="position:absolute;bottom:0;left:0">
                <a href="/data-pendukung-pertanian" class="btn btn-red rounded-bottom px-2 w-100" >Data Pendukung</a>
            </div>
        </div>

        <div class="sektor-col col-4 px-2">
            <div class="flipper">
                <div class="flip-content">
                    <div class="front">
                        <div class=" text-center shadow-2 rounded pt-5 pb-2 mb-2">
                            <div class="font-20 font-weight-bold">Sektor UMKM</div>
                            <img class="img mx-auto" style="margin:48px 0px" src="images/umkm.png" alt="" height="90px" width="auto">
                            <div class="font-36">14,18%</div>
                            <div class="font-16 font-weight-bold">Pertumbuhan Omset</div>
                            <div class="description-box">Pertumbuhan omzet perusahaan kecil yang dimiliki dan dikelola oleh seseorang atau dimiliki oleh sekelompok kecil orang pada tahun 2019.</div>
                        </div>                    
                    </div>
                    <div class="back">
                        <div id="back-card" class="back-card text-center shadow-2 rounded pt-5 pb-2 mb-2">
                            <div class="px-2">
    
                                <div class="font-20 font-weight-bold mb-5"><span><img class="img" src="images/umkm.png" height="20px" alt=""></span> Sektor UMKM</div>
    
                                <div class="row mx-0" data-toggle="tooltip" data-html="true" data-placement="right" 
                                    title="<div style='max-width:500px;width:500px;position:relative;overflow:auto;'>
                                        <div class='font-weight-bold'>Pertumbuhan Omset</div> 
                                        <br> Pertumbuhan omzet perusahaan kecil yang dimiliki dan dikelola oleh seseorang atau dimiliki oleh sekelompok kecil orang pada tahun 2019. 
                                        <div class='row mx-0 pt-3'>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>13,41</div>
                                                November
                                            </div>
                                            <div class='col-2 p-0 my-auto text-success'>
                                                <div class='h3 m-0 p-0 fas fa-caret-up'></div>
                                            </div>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>14,18</div>
                                                Desember
                                            </div>
                                        </div>
                                    </div>">
                                    <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Pertumbuhan Omset</div>
                                    <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">13,41</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-2 w-100" style="position:absolute;bottom:0;left:0">
                <a href="/data-pendukung-pertanian" class="btn btn-red rounded-bottom px-2 w-100" >Data Pendukung</a>
            </div>
        </div>

        <div class="sektor-col col-4 px-2">
            <div class="flipper">
                <div class="flip-content">
                    <div class="front">
                        <div class=" text-center shadow-2 rounded pt-5 pb-2 mb-2">
                            <div class="font-20 font-weight-bold">Sektor Kesehatan</div>
                            <img class="img mx-auto" style="margin:48px 0px" src="images/kesehatan.png" alt="" height="90px" width="auto">
                            <div class="font-36">238</div>
                            <div class="font-16 font-weight-bold">Angka Kematian Ibu</div>
                            <div class="description-box">Angka kematian ibu yang disebabkan karena  pendarahan, infeksi, eklamsi/PEB, atau lain-lain pada tahun 2020.</div>
                        </div>
                    </div>
                    <div class="back">
                        <div id="back-card" class="back-card text-center shadow-2 rounded pt-5 pb-2 mb-2">
                            <div class="px-2">
    
                                <div class="font-20 font-weight-bold mb-5"><span><img class="img" src="images/kesehatan.png" height="20px" alt=""></span> Sektor Kesehatan</div>
    
                                <div class="row mx-0" data-toggle="tooltip" data-html="true" data-placement="right" 
                                    title="<div style='max-width:500px;width:500px;position:relative;overflow:auto;'>
                                        <div class='font-weight-bold'>Angka Kematian Ibu</div> 
                                        <br> Angka kematian ibu yang disebabkan karena  pendarahan, infeksi, eklamsi/PEB, atau lain-lain pada tahun 2020. 
                                        <div class='row mx-0 pt-3'>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>416</div>
                                                2019
                                            </div>
                                            <div class='col-2 p-0 my-auto text-danger'>
                                                <div class='h3 m-0 p-0 fas fa-sort-down'></div>
                                            </div>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>238</div>
                                                2020
                                            </div>
                                        </div>
                                    </div>">
                                    <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Angka Kematian Ibu</div>
                                    <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">238</div>
                                </div>
                                <div class="row mx-0" data-toggle="tooltip" data-html="true" data-placement="right" 
                                    title="<div style='max-width:500px;width:500px;position:relative;overflow:auto;'>
                                        <div class='font-weight-bold'>Angka Kematian Bayi</div> 
                                        <br> Angka kematian bayi menunjukkan banyaknya kematian bayi usia 0-11 bulan dari setiap 1.000 kelahiran hidup pada tahun tertentu atau dapat dikatakan juga sebagai probabilitas bayi meninggal sebelum mencapai usia satu tahun (dinyatakan dengan per seribu kelahiran hidup). 
                                        <div class='row mx-0 pt-3'>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>5.208</div>
                                                November
                                            </div>
                                            <div class='col-2 p-0 my-auto text-danger'>
                                                <div class='h3 m-0 p-0 fas fa-sort-down'></div>
                                            </div>
                                            <div class='col-5 p-0'>
                                                <div class='h5 p-0 m-0'>2.691</div>
                                                Desember
                                            </div>
                                        </div>
                                    </div>">
                                    <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Angka Kematian Bayi</div>
                                    <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">2.691</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-2 w-100" style="position:absolute;bottom:0;left:0">
                <a href="/data-pendukung-pertanian" class="btn btn-red rounded-bottom px-2 w-100" >Data Pendukung</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('before-style')
<style >
    
    .description-box{
        margin: 1.5rem 1rem;
        padding: 0.5rem;
        border: 1px solid #dee2e6;
        font-size: 12px;
    }
    .slick-slider{
      height: 520px !important;
    }
    .input-group-text{
        background-color: #fff !important;
        border-right: 0px solid white !important;
    }
    .form-control{
        border-left:0px !important
    }
    .form-control:focus {
        border-color: none !important;
        box-shadow: none !important;
    }
    .tooltip-inner {
        max-width: 300px !important;
        background-color: #fff !important;
        color: #212121 !important;
        border: 1px solid #212121;

    }
    .flipper{
        cursor: pointer;
    }
    .flip-content {
      text-align: center;
      width: 100%;
      transition: 0.6s;
      min-height: 350px;
      transform-style: preserve-3d;
      /* position: relative; */
    }
    /* flip the pane when hovered */
    .flipper.flip .flip-content {
      transform: rotateY(180deg);
    }
    .front,
    .back {
      width: 100%;
      backface-visibility: hidden;
      position: absolute;
    }
    /* front pane, placed above back */
    .front {
      z-index: 2;
      /* for firefox 31 */
      transform: rotateY(0deg);
      height: 100%;
    }
    /* back, initially hidden pane */
    .back {
      transform: rotateY(180deg);
      height: 100%;
    }
    .goback {
      bottom: 0px;
      left: 0px;
      text-decoration: underline;
      cursor: pointer;
    }
    .btn-back{
        position: absolute;
        left: 0px;
    }

    @media only screen and (min-device-aspect-ratio:16/10) {
        .description-box{
            min-height:70px;
        }
    }
    
</style>
@endpush

@push('after-script')
<script type="text/javascript">
    $(document).ready(function() {
        var frontCardHeight = document.getElementById('front-card').offsetHeight;
        var back = document.querySelectorAll(".back-card");
        for(let i = 0; i < back.length; i++){
            back[i].style.height = (frontCardHeight-2) + "px";
        }
        var col = document.querySelectorAll(".sektor-col");
        var btn = document.getElementById("btn").offsetHeight;
        for(let i = 0; i < col.length; i++){
            col[i].style.height = (frontCardHeight+btn) + "px";
        }

        var flipContent = document.getElementsByClassName('flip-content');
        var flipContentHeight = flipContent[0].offsetHeight;
        var jarak = frontCardHeight - flipContentHeight -2;
        var btnBack = document.querySelectorAll(".btn-back");
        for(let i = 0; i < back.length; i++){
            btnBack[i].style.bottom = -(jarak) + "px";
        }

    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(".flipper").click(function() {
        var target = $( event.target );
        if ( target.is("a") ) {
          //follow that link
          return true;
        } else {
          $(this).toggleClass("flip");
        }
        return false;
    });

    $(document).ready(function() {
        $('.sektor').slick({
            slidesToShow: 3,
            infinite: false,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }]
        });
    });
</script>
@endpush
