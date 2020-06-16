@extends('template/main')

@section('title', 'Sejarah')



@section('main')
    <div class="container">
        <div class="col-md-12 page">
            <div class="article">
                <p class="title-article"> Desa Jangga Dolok </p>
                <p class="admin-article">Admin, 28 Juni 2020</p>
                <div class="gambar">
                    <img src="{{asset('/image/1.jpg')}}" alt="">
                </div>
                <div class="content d-block">
                    <p class="t text-justify">Desa Jangga Dolok adalah Salah satu desa wisata yang ada di Kecamatan Lumbanjulu, Kabupaten Toba, Provinsi Sumatera Utara, Indonesia. 
                        Desa ini berjarak sekitar 40 Km dari kota Balige. Jika ingin mengunjunginya, dapat menggunakan transportasi umum kurang lebih selama 
                        1jam. Kemudian wisatawan harus berjalan kaki dari jalan raya dan menuruni jalan yang sudah beraspal mulus, dengan waktu tempuh kurang 
                        ih 30 menit. Desa ini menawarkan 2 potensi wisata yaitu , potensi wisata budaya dan alamnya. Mayoritas penduduk desa bekerja sebagai 
                        petani dan sisanya menjadi guru, pendeta, dan bekerja di kantor desa. Pesona budaya yang masih sangat melekat dari desa ini adalah 
                        masih terdapat rumah adat batak yaitu Rumah Bolon yang berdiri tegak . Ada 2 rumah bolon yang masih terawat di desa jangga. Biasanya
                         tourist yang datang akan menginap dan tinggal disana dan mengikuti aktivitas yang dilakoni masyarakat desa jangga, seperti permainan
                          tradisional yaitu tali goyang dengan ijuk dan mengikuti kegiatan masyarakat membajak padi dengan cangkul da nada sebagian dengan
                           menggunakan tenaga kerbau. 
                    </p>
                           
                           <p class="t text-justify">Masyarakat desa jangga masih mengunakan bahasa batak dalam kesehariaannya. Kemudian pesona alamnya
                            yaitu desa ini memiliki hamparan persawahan yang sangat luas dan di himpit oleh bukit-bukit yang masih terjaga, disana juga
                             terdapat kolam pemandian yang airnya bersumber langsung dari pegunungan. Namun lokasi dari kolam tersebut agak curam karena
                              terdapat jurang dan bebatuan. Aparat desa merencanakan akan membuat penginapan untuk mendukung perkembangan parawisata disana. 
                              Namun bagi wisatawan yang ingin berkunjung akan kesulitan dalam memperoleh makanan karena di desa ini tidak ada restoran atau 
                              tenpat makan, untuk itu disarankan wisatawan membawa makanan dari tempat masing-masing dan memakai pakaian yang nyaman agar 
                              lebih leluasa mengelilingi desa. </p>
                              
                            <p class="t text-justify">Dengan hamparan persawahan yang luas , setiap tahunnya desa ini mengadakan Harvest Festival 
                              (Festival Panen Raya) yang diadakan dari bulan juni/juli. Festival ini dilakukan langsung di tengah sawah , para petani dapat 
                              langsung memanen padinya dengan cara tradisional. Festival ini menarik banyak wisatawan bahkan tourist luar negri. Pemandangan 
                              desa ini akan tampak pada saat pagi hari sampai sore hari, disarankan untuk mengunjunginya sekitar pukul 9 pagi sampai 4 sore, 
                              namun jika ingin pulang dari desa tersebut disarankan agar memperhatikan waktu karena kendaraan yang masih sulit ditemui di 
                              sekitaran desa. Penyebaran sistem informasi tentang desa belum terkomputerisasi atau masih dari mulut ke mulut. </p>
                   
                </div>    

                <div>
                    <div>
                    <p style="font-family: 'Lexend';font-weight: bold; font-size: 20px">Comments</p>
                    </div>
                    @comments(['model' => $post])
                </div>
            </div>


           


            <div class="article-Others">
                <div class="title-others">
                    Artikel Terkait
                </div>
                <div class="item-others">
                    <div class="content-item">
                        <div class="image">
                            <img src="{{asset('image/1.jpg')}}" alt="">
                        </div>
                        <div class="others-content">
                            <p>Masyarakat desa jangga masih mengunakan bahasa batak dalam kesehariaannya. Kemudian pesona alamnya
                                yaitu desa ini memiliki hamparan persawahan yang sangat luas
                                 <a href="">Read More</a></p>
                        </div>
                    </div>
                    
                    <div class="content-item">
                        <div class="image">
                            <img src="{{asset('image/2.jpg')}}" alt="">
                        </div>
                        <div class="others-content">
                            <p>Harvest Festival 
                                (Festival Panen Raya) yang diadakan dari bulan juni/juli.
                                 <a href="">Read More</a></p>
                        </div>
                    </div>
                    
                    <div class="content-item">
                        <div class="image">
                            <img src="{{asset('image/7.jpg')}}" alt="">
                        </div>
                        <div class="others-content">
                            <p>2 rumah bolon yang masih terawat di desa jangga. Biasanya
                                tourist yang datang akan menginap dan tinggal disana
                                 <a href="">Read More</a></p>
                        </div>
                    </div>
                    
                    <div class="content-item">
                        <div class="image">
                            <img src="{{asset('image/5.jpg')}}" alt="">
                        </div>
                        <div class="others-content">
                            <p>Mayoritas penduduk desa bekerja sebagai 
                                petani dan sisanya menjadi guru, pendeta, dan bekerja di kantor desa. 
                                 <a href="">Read More</a></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

