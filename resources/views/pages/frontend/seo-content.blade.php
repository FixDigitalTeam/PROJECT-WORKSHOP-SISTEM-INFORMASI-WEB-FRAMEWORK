@extends('layouts.landing-main')
@section('container')
<!-- Start Page Title Area -->
<div class="page-title-area">
   <div class="container">
      <div class="page-title-content">
         <h2>Paket Pembuatan Konten SEO</h2>
         <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Paket Pembuatan Konten SEO</li>
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
         <span class="sub-title">KEUNGGULAN JASA PENULISAN ARTIKEL SEO KAMI</span>
         <h2>Mengapa Harus Jasa Penulisan Artikel Kakanda Tech?</h2>
      </div>
      <div class="row justify-content-center">
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon">
                  <i class="ri-eye-line"></i>
               </div>
               <h3>Human Friendly & SEO Friendly</h3>
               <p>Jasa penulis artikel kami SEO & human friendly sehingga website Anda mudah ditemukan di mesin pencari dan artikel menarik untuk dibaca.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg2">
                  <i class="ri-stack-line"></i>
               </div>
               <h3>Harga Murah Kualitas Terjamin</h3>
               <p>Kami menawarkan layanan penulis artikel dengan harga yang murah sehingga Anda dapat menghemat kantong.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg3">
                  <i class="ri-leaf-line"></i>
               </div>
               <h3>Gratis Revisi Sepuasnya</h3>
               <p>Jasa penulis artikel kami memberikan garansi revisi hingga klien puas. Karena bagi kami, klien adalah raja.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg4">
                  <i class="ri-secure-payment-line"></i>
               </div>
               <h3>Optimasi Keyword</h3>
               <p>Kami akan mengoptimasi longtail keyword pada artikel Anda supaya artikel bisa mendapatkan peringkat tinggi di berbagai kata kunci.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg5">
                  <i class="ri-cloud-line"></i>
               </div>
               <h3>Original, Tanpa Copas</h3>
               <p>Kami menulis artikel mengetik manual. Kami tidak menggunakan tools untuk rewrite. Jadi, tidak usah khawatir terkait originalitas artikel.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg6">
                  <i class="ri-pie-chart-2-line"></i>
               </div>
               <h3>Konsultasi SEO</h3>
               <p>Anda bisa berkonsultasi terkait SEO dengan kami. Apabila ada kendala terkait SEO, silakan diskusikan bersama kami.</p>
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