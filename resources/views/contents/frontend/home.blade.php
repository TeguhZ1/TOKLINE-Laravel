@extends('layouts.frontend')
@section('content')

<div id="carouselId" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('https://www.eiga.de/wp-content/uploads/2019/08/EIGA_ADI_Cooperation_Header.png')}}" class="img-fluid w-100" id="gambar_slider" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('https://www.cesstm.com/wp-content/uploads/2018/05/header2.jpg')}}" class="img-fluid w-100" id="gambar_slider" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('https://pbs.twimg.com/media/Dl22xMeXoAAn5vy.jpg')}}" class="img-fluid w-100" id="gambar_slider" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('https://cdn.accentuate.io/88117248061/1680111332783/SP23_003.jpg?v=1680113136253')}}" class="img-fluid w-100" id="gambar_slider" alt="Fourth slide">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <!--product -->
            <div class="product">
                <h4 class="mb-4"><b>Rilis Terbaru</b></h4>
                @include('components.frontend.produk_list')
            </div>
            <!-- end product -->
            <div class="official mt-3">
                <div class="row">
                        <div class="official-content">
                            <h4><b>Tentang Kami</b></h4>
                            <p>Kami adalah toko online yang berdedikasi untuk memberikan pengalaman berbelanja yang unik, menyediakan koleksi pakaian dari beberapa brand terkemuka di dunia fashion.
                                Kami percaya bahwa pakaian bukan hanya tentang gaya, tetapi juga tentang ekspresi diri.
                                Setiap item yang kami tawarkan telah dipilih dengan hati-hati untuk mencerminkan kualitas, style, dan harga yang terbaik.
                                Komitmen kami terhadap pelanggan tidak hanya berhenti pada produk yang luar biasa.
                                Kami juga berusaha memberikan pelayanan yang sempurna, mulai dari pengalaman berbelanja yang mudah hingga layanan pelanggan yang responsif dan informatif.
                                Ayo gabung dalam komunitas TOKLINE dan mulai belanja sekarang!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')

@endsection
