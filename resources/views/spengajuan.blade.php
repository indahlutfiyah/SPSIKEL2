@extends('layout.navbar')

@section('login')
<div class="site-section courses-title" id="courses-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
          <h2 class="section-title">Courses</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
    <div class="container">
      <div class="row">

        <div class="owl-carousel col-12 nonloop-block-14">

          <div class="course bg-white h-100 align-self-stretch">
            <figure class="m-0">
              <img src="img/kaprodi.png" alt="Image" width="200" height="200"/>
            </figure>
            <div class="course-inner-text py-4 px-4">
              <h3><a href="#">Klik Disini</a></h3>
              <p>Surat Pihak Kaprodi </p>
            </div>
            <div class="d-flex border-top stats">
              <div class="py-3 px-4"></div>
              <div class="py-3 px-4 w-25 ml-auto border-left"></div>
            </div>
          </div>

          <div class="course bg-white h-100 align-self-stretch">
            <figure class="m-0">
              <img src="img/kadep.png" alt="Image" width="200" height="200"/>
            </figure>
            <div class="course-inner-text py-4 px-4">
     
             
              <h3><a href="#">Klik Disini</a></h3>
              <p>Surat Pihak Kadep </p>
            </div>
            <div class="d-flex border-top stats">
              <div class="py-3 px-4"></div>
              <div class="py-3 px-4 w-25 ml-auto border-left"></div>
            </div>
          </div>

          <div class="course bg-white h-100 align-self-stretch">
            <figure class="m-0">
              <img src="img/WadekII.png" alt="Image" width="200" height="200"/>
            </figure>
            <div class="course-inner-text py-4 px-4">
     
             
              <h3><a href="#">Klik Disini</a></h3>
              <p>Surat Pihak Wadek II </p>
            </div>
            <div class="d-flex border-top stats">
              <div class="py-3 px-4"></div>
              <div class="py-3 px-4 w-25 ml-auto border-left"></div>
            </div>
          </div>

          <div class="course bg-white h-100 align-self-stretch">
            <figure class="m-0">
              <img src="img/keuangan.png" alt="Image" width="200" height="200"/>
            </figure>
            <div class="course-inner-text py-4 px-4">
                 <h3><a href="#">Klik Disini</a></h3>
              <p>Surat Pihak Keuangan </p>
            </div>
            <div class="d-flex border-top stats">
              <div class="py-3 px-4"></div>
              <div class="py-3 px-4 w-25 ml-auto border-left"></span></div>
            </div>
          </div>



        </div>
        @endsection