@extends('layouts.landing-main')
@section('container')
<!-- Start Page Title Area -->
<div class="page-title-area">
   <div class="container">
      <div class="page-title-content">
         <h2>Paket Pembuatan Aplikasi Mobile</h2>
         <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Paket Pembuatan Aplikasi Mobile</li>
         </ul>
      </div>
   </div>
   <div class="divider"></div>
   <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
   </div>
   <div class="banner-shape1"><img src="{{ url('landing-assets/img/shape/shape9.png') }}" alt="image"></div>
</div>
<!-- End Page Title Area -->

<!-- Start Features Area -->
<div class="features-area pt-100">
   <div class="container">
      <div class="section-title">
         <span class="sub-title">KEUNGGULAN PENGEMBANGAN APLIKASI MOBILE DARI KAMI</span>
         <h2>Mengapa Harus Jasa Pembuatan Aplikasi Mobile Kakanda Tech?</h2>
      </div>
      <div class="row justify-content-center">
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon">
                  <i class="ri-eye-line"></i>
               </div>
               <h3>Berkualitas</h3>
               <p>Kami siap membuat project aplikasi mobile atau Android Anda dengan kualitas desain dan sistem terbaik.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg2">
                  <i class="ri-stack-line"></i>
               </div>
               <h3>Harga Murah</h3>
               <p>Dapatkan aplikasi mobile dengan kualitas terbaik dengan harga terjangkau hanya dari jasa pembuatan aplikasi mobile kami.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg3">
                  <i class="ri-leaf-line"></i>
               </div>
               <h3>Responsive</h3>
               <p>Kami siap membangun apliaksi mobile full responsive agar dapat diakses di seluruh tipe atau model smartphone.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg4">
                  <i class="ri-secure-payment-line"></i>
               </div>
               <h3>Gratis Maintenance</h3>
               <p>Mengalami kendala atau masalah? Kami siap memberikan maintenance gratis kepada para pelanggan tercinta kami.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg5">
                  <i class="ri-cloud-line"></i>
               </div>
               <h3>Playstore</h3>
               <p>Ingin aplikasi Anda bisa diakses melalui playstore. Kami siap mem-publish aplikasi Anda dengan mudah dan cepat (biaya ekstra).</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg6">
                  <i class="ri-pie-chart-2-line"></i>
               </div>
               <h3>Sesuai Keinginan</h3>
               <p>Ingin memiliki aplikasi dengan desain dan fitur yang keren? Kami selalu siap memanjakan para pelanggan sesuai dengan keinginan mereka.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Features Area -->

<!-- Start Pricing Area -->
<div class="pricing-area pt-100 pb-75">
   <div class="container">
      <div class="section-title">
         <span class="sub-title">Paket Pembuatan Konten SEO</span>
         <h2>Pilih Paket Berkualitas Terbaik Menurut Anda</h2>
      </div>
      <div class="row align-items-center justify-content-center">
         @foreach ($data as $item)
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-pricing-box">
               <div class="title">
                  <h3>{{ $item->nama_package }}</h3>
                  <p>{!! $item->deskripsi !!}</p>
               </div>
               <div class="price">
                  <span>Rp.</span>{{ $item->harga }}
               </div>
               @if ($maxtrx >= 4)
                  <button class="default-btn" onclick="limittrx()">
                     Pilih Paket
                  </button>
               @else
                  <a href="{{ route('verification', $item->slug) }}" class="default-btn">Pilih Paket</a>
               @endif
               <ul class="features-list">
                  <li><i class="{{ ($item->keuntungan_1 == '') ? '' : 'ri-check-line' }}"></i> {{ $item->keuntungan_1 }}
                  </li>
                  <li><i class="{{ ($item->keuntungan_2 == '') ? '' : 'ri-check-line' }}"></i> {{ $item->keuntungan_2 }}
                  </li>
                  <li><i class="{{ ($item->keuntungan_3 == '') ? '' : 'ri-check-line' }}"></i> {{ $item->keuntungan_3 }}
                  </li>
                  <li><i class="{{ ($item->keuntungan_4 == '') ? '' : 'ri-check-line' }}"></i> {{ $item->keuntungan_4 }}
                  </li>
                  <li><i class="{{ ($item->keuntungan_5 == '') ? '' : 'ri-check-line' }}"></i> {{ $item->keuntungan_5 }}
                  </li>
                  <li><i class="{{ ($item->keuntungan_6 == '') ? '' : 'ri-check-line' }}"></i> {{ $item->keuntungan_6 }}
                  </li>
                  <li><i class="{{ ($item->keuntungan_7 == '') ? '' : 'ri-check-line' }}"></i> {{ $item->keuntungan_7 }}
                  </li>
                  <li><i class="{{ ($item->keuntungan_8 == '') ? '' : 'ri-check-line' }}"></i> {{ $item->keuntungan_8 }}
                  </li>
               </ul>
            </div>
         </div>
         @endforeach
      </div>
   </div>
   <div class="shape12"><img src="{{ url('landing-assets/img/shape/shape11.png') }}" alt="shape"></div>
   <div class="shape13"><img src="{{ url('landing-assets/img/shape/shape15.png') }}" alt="shape"></div>
</div>
<!-- End Pricing Area -->
@endsection

@foreach ($getdeadline as $deadlineasc)
<script>
   function limittrx() {
      Swal.fire({
         title: 'Ups, Gagal Memilih Paket!',
         text: 'Saat ini tidak bisa melakukan pemesanan karena jumlah orderan melebihi batas. Silahkan lakukan pemesanan kembali pada tanggal {{ $deadlineasc->deadline }}',
         icon: 'error',
         padding: '0px 0px 36px 0px',
         showConfirmButton: false,
         timer: 5000
      })
   }
</script>
@endforeach