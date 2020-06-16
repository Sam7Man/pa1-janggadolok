

@extends('template/main')

@section('title', 'Desa Jangga Dolok')

@section('main')
    



    <div id="carouselId" class="carousel slide carousel-fade p-0" data-animation="bounce">
        <div class="carousel-inner" role="listbox">
        <div class="carousel-item active p-0">
            <img src="{{asset('/image/home.png')}}" alt="First slide"  >
        </div>
        </div>
        <div class="carousel-caption" style="overflow: hidden">
        <div class="container">
            <img src="{{asset('/image/logo.png')}}" alt="" class="image-home" id="image">
            <h1 class="headline">Culture Of Batak Village</h1>
            <p class="headlineParag">This village is very thick with it's Batak culture and traditions. <br>
                                        This is a very beautiful village</p>
        </div>
        </div>
    </div>
  <main class="position-relative">
    <div class="image-back one" style="z-index: -200">
        <img src="{{asset('image/penginapan.jpg')}}" alt="" srcset="">
    </div>
    <div class="image-back-two">
        <img src="{{asset('image/kolam.jpg')}}" alt="" srcset="">
    </div>
    <div class="image-back-three">
        <img src="{{asset('image/coba.jpg')}}" alt="" srcset="">
    </div>
    <div class="container ">
        <div class="profile-village">
            <div class="title-profile">Profile Desa</div>
            <div class="profile">
                <div class="profile-caption">
                    <p class="title-child">Visi</p>
                    <p class="description">Terwujudnya Pembangunan Di Seluruh Aspek Kehidupan Menuju Masyarakat Desa Jangga Dolok Yang Sehat, Cerdas dan Sejahtera</p>
                </div>
                <div class="profile-caption">
                    <p class="title-child">Misi</p>
                    <p class="description">Meningkatkan ketahanan ekonomi dengan menggalakkan usaha ekonomi kerakyatan, melalui program strategis di bidang produksi pertanian, pemasaran, koperasi, usaha kecil dan menengah, serta pariwisata</p>
                </div>
            </div>  
        </div>
        <div class="potensi-desa">
            <div class="title-potensi-desa">
                <p>Potensi Desa</p>
            </div>
            <div class="box-potensi">
                <div class="potensi">
                    <div class="image-potensi">
                        <img src="{{asset('image/penginapan.jpg')}}" alt="">
                    </div>
                    <div class="content-potensi">
                        <p class="title-potensi-content">Penginapan</p>
                        <p>Penginapan dalam desa Jangga Dolok menggunakan rumah adat asli batak</p>
                        <p>Sudah banyak tourist yang sudah pernah berkunjung dan menginap di rumah adat tersebut yang digunakan untuk Penginapan</p>

                        <span><a href="">Read More</a></span>
                    </div>
                </div>
               
                <div class="potensi">
                    <div class="image-potensi">
                        <img src="{{asset('image/kolam2.jpg')}}" alt="">
                    </div>
                    <div class="content-potensi">
                        <p class="title-potensi-content">Kolam</p>
                        <p>Kolam tersebut baru dibuat pada tahun 2018-2019 dan sudah memiliki banyak pengunjung</p>
                        <p>Pada lokasi kolam tersebut terdapat tiga kolam dan yang terletak pada kaki bukit tersebut</p>

                        <span><a href="">Read More</a></span>
                    </div>
                </div>
               
                <div class="potensi">
                    <div class="image-potensi">
                        <img src="{{asset('image/sawah.jpg')}}" class="sawah" alt="">
                    </div>
                    <div class="content-potensi">
                        <p class="title-potensi-content">Pemandangan Sawah</p>
                        <p>Pemandangan Sawah sangat dominan ditemukan di Desa ini, hal tersebut dapat
                            ditemukan saat masuk dari gerbang masuk.
                        </p>

                        <span><a href="">Read More</a></span>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="news">
            <div class="title-profile">Informasi dan Berita</div>
            <div class="box-news">
                <div class="news-label">
                    <img src="{{asset('/image/tourist.jpg')}}" alt="">
                    <div class="news-caption">
                        <p class="title-news">Kunjugan Tourist Ke Desa Jangga</p>
                        <p class="date"><i class="fa fa-user"></i> Admin, 1 Mei 2020</p>
                        <p class="text-news">Desa Jangga Dolok adalah Salah satu desa wisata yang ada di Kecamatan Lumbanjulu, Kabupaten Toba, Provinsi Sumatera Utara.. </p>
                        <div class="btns"><a href="/post/1">Read More</a></div>    
                    </div>
                </div>
                <div class="news-label">
                    <img src="{{asset('/image/16.jpg')}}" alt="">
                    <div class="news-caption">
                        <p class="title-news">Sejarah Desa Jangga Dolok, Kecamatan Lumban Julu</p>
                        <p class="date"><i class="fa fa-user"></i> Admin, 1 Mei 2020</p>
                        <p class="text-news">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Eius maxime odit reprehenderit. Fugit mollitia, </p>
                         <div class="btns"><a href="http://">Read More</a></div>
                    </div>
                </div>
                <div class="news-label">
                    <img src="{{asset('/image/tourist.jpg')}}" alt="">
                    <div class="news-caption">
                        <p class="title-news">Festival Desa</p>
                        <p class="date"><i class="fa fa-user"></i> Admin, 1 Mei 2020</p>
                        <p class="text-news">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Eius maxime odit reprehenderit. Fugit mollitia, </p>
                         <div class="btns"><a href="http://">Read More</a></div>
                    </div>
                </div>
                <div class="news-label">
                    <img src="{{asset('/image/16.jpg')}}" alt="">
                    <div class="news-caption">
                        <p class="title-news">Kunjugan Tourist Ke Desa Jangga</p>
                        <p class="date"><i class="fa fa-user"></i> Admin, 1 Mei 2020</p>
                        <p class="text-news">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Eius maxime odit reprehenderit. Fugit mollitia, </p>
                         <div class="btns"><a href="http://">Read More</a></div>
                    </div>
                </div>
                <div class="news-label">
                    <img src="{{asset('/image/tourist.jpg')}}" alt="">
                    <div class="news-caption">
                        <p class="title-news">Kunjugan Tourist Ke Desa Jangga</p>
                        <p class="date"><i class="fa fa-user"></i> Admin, 1 Mei 2020</p>
                        <p class="text-news">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Eius maxime odit reprehenderit. Fugit mollitia, </p>
                         <div class="btns"><a href="http://">Read More</a></div>    
                    </div>
                </div>
                <div class="news-label">
                    <img src="{{asset('/image/16.jpg')}}" alt="">
                    <div class="news-caption">
                        <p class="title-news">Kunjugan Tourist Ke Desa Jangga</p>
                        <p class="date"><i class="fa fa-user"></i> Admin, 1 Mei 2020</p>
                        <p class="text-news">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Eius maxime odit reprehenderit. Fugit mollitia, </p>
                         <div class="btns"><a href="http://">Read More</a></div>
                    </div>
                </div>
                <div class="news-label">
                    <img src="{{asset('/image/tourist.jpg')}}" alt="">
                    <div class="news-caption">
                        <p class="title-news">Kunjugan Tourist Ke Desa Jangga</p>
                        <p class="date"><i class="fa fa-user"></i> Admin, 1 Mei 2020</p>
                        <p class="text-news">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Eius maxime odit reprehenderit. Fugit mollitia, </p>
                            <div class="btns"><a href="http://">Read More</a></div>
                    </div>
                </div>
                <div class="news-label">
                    <img src="{{asset('/image/16.jpg')}}" alt="">
                    <div class="news-caption">
                        <p class="title-news">Kunjugan Tourist Ke Desa Jangga</p>
                        <p class="date"><i class="fa fa-user"></i> Admin, 1 Mei 2020</p>
                        <p class="text-news">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Eius maxime odit reprehenderit. Fugit mollitia, </p>
                        <div class="btns"><a href="http://">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="images-village">
        <div class="title-image">Gambar Desa</div>
        <div class="content">
            <div class="images">
                <div class="box-images"><img src="{{asset('image/1.jpg')}}" alt=""></div>
                <div class="box-images"><img src="{{asset('image/2.jpg')}}" alt=""></div>
                <div class="box-images"><img src="{{asset('image/3.jpg')}}" alt=""></div>
                <div class="box-images"><img src="{{asset('image/4.jpg')}}" alt=""></div>
                <div class="box-images"><img src="{{asset('image/5.jpg')}}" alt=""></div>
                <div class="box-images"><img src="{{asset('image/6.jpg')}}" alt=""></div>
                <div class="box-images"><img src="{{asset('image/7.jpg')}}" alt=""></div>
                <div class="box-images"><img src="{{asset('image/8.jpg')}}" alt=""></div>
                <div class="box-images"><img src="{{asset('image/9.jpg')}}" alt=""></div>
            </div>
        </div>
    </div>
    



    <div class="col-md-12 maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12654.090853248324!2d99.06768095449902!3d2.5753306404663876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031fa706e04b3fd%3A0xac53ac2caf514e77!2sJangga%20Dolok%2C%20Lumban%20Julu%2C%20Kabupaten%20Toba%20Samosir%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1588501202589!5m2!1sid!2sid" 
        class="maps-image" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </main>

    <div class="lightbox">
        <div class="lightbox-content">
            <div class="lightbox-close">&times;</div>
            <img src="image/1.jpg" class="image-lightbox" alt="" srcset="">
            <div class="lightbox-caption">
                <span class="lightbox-text">Desa Jangga Dolok</span>
                <span class="lightbox-counter">3 0f 6</span>
            </div>
        </div>
        <div class="lightbox-control">
            <div class="prev"> <i class="fas fa-arrow-left"></i></div>
            <div class="next"> <i class="fas fa-arrow-right"></i></div>
        </div>
    </div>








@endsection

@section('tweenMax')
    
<script src="{{ asset('/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('/js/TimelineMax.min.js') }}"></script>
<script src="{{ asset('/js/index.js') }}"></script>

@endsection