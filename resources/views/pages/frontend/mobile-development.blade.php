@extends('layouts.landing-main')
@section('container')
   <!-- Start Page Title Area -->
   <div class="page-title-area">
      <div class="container">
         <div class="page-title-content">
            <h2>Paket Pembuatan Aplikasi Mobile</h2>
            <ul>
               <li><a href="/">Home</a></li>
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
      <div class="banner-shape1"><img src="landing-assets/img/shape/shape9.png" alt="image"></div>
   </div>
   <!-- End Page Title Area -->

   <!-- Start Features Area -->
   <div class="features-area pt-100">
      <div class="container">
         <div class="section-title">
            <span class="sub-title">KEUNGGULAN PENGEMBANGAN WEB DARI KAMI</span>
            <h2>Mengapa Harus Jasa Pembuatan Website Kakanda Tech?</h2>
         </div>
         <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
               <div class="single-features-item">
                  <div class="icon">
                     <i class="ri-eye-line"></i>
                  </div>
                  <h3>SEO Friendly</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem dolorum.</p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
               <div class="single-features-item">
                  <div class="icon bg2">
                     <i class="ri-stack-line"></i>
                  </div>
                  <h3>Harga Murah</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem dolorum.</p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
               <div class="single-features-item">
                  <div class="icon bg3">
                     <i class="ri-leaf-line"></i>
                  </div>
                  <h3>Responsive</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem dolorum.</p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
               <div class="single-features-item">
                  <div class="icon bg4">
                     <i class="ri-secure-payment-line"></i>
                  </div>
                  <h3>Gratis Maintenance</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem dolorum.</p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
               <div class="single-features-item">
                  <div class="icon bg5">
                     <i class="ri-cloud-line"></i>
                  </div>
                  <h3>Hosting dan Domain</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem dolorum.</p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
               <div class="single-features-item">
                  <div class="icon bg6">
                     <i class="ri-pie-chart-2-line"></i>
                  </div>
                  <h3>Sesuai Keinginan</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem dolorum.</p>
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
                        <p>{{ $item->deskripsi }}</p>
                     </div>
                     <div class="price">
                        <span>Rp.</span>{{ $item->harga }}
                     </div>
                     <a href="#" class="default-btn">Pilih Paket</a>
                     <ul class="features-list">
                        <li><i class="ri-check-line"></i> {{ $item->keuntungan_1 }}</li>
                        <li><i class="ri-check-line"></i> {{ $item->keuntungan_2 }}</li>
                        <li><i class="ri-check-line"></i> {{ $item->keuntungan_3 }}</li>
                        <li><i class="ri-check-line"></i> {{ $item->keuntungan_4 }}</li>
                        <li><i class="ri-close-line"></i> {{ $item->keuntungan_5 }}</li>
                        <li><i class="ri-close-line"></i> {{ $item->keuntungan_6 }}</li>
                        <li><i class="ri-close-line"></i> {{ $item->keuntungan_7 }}</li>
                        <li><i class="ri-close-line"></i> {{ $item->keuntungan_8 }}</li>
                     </ul>
               </div>
            </div>
            @endforeach
         </div>
      </div>
      <div class="shape12"><img src="landing-assets/img/shape/shape11.png" alt="shape"></div>
      <div class="shape13"><img src="landing-assets/img/shape/shape15.png" alt="shape"></div>
   </div>
   <!-- End Pricing Area -->
@endsection