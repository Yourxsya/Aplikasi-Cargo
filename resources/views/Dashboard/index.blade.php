@extends('layouts.master')
@section('content')
<div class="container">
    <h4><strong>Layanan Ekspedisi Barang ke <span style="color: purple;">Seluruh Indonesia</span></strong></h4>
  </div>
  
  
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold" style="color: purple;">Paket Kecil</p>
                  <p> Paket kecil dari Online-Shop atau UKM </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-app text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold" style="color: purple;">Kargo Besar</p>
                  <p>
                    Barang-barang dengan tonase besar diatas 1 ton
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fa fa-bank text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold" style="color: purple;">Elektronik</p>
                  <p>
                    Barang-barang elektronik, mesin, sparepart dan garmen
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fa fa-wrench text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold" style="color: purple;">Produk Industri</p>
                  <p>Peralatan & perlangkapan industri pabrik maupun alat produksi </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fa fa-cogs text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold" style="color: purple;">Jasa Sewa Truk</p>
                  <p>
                    Sewa truk ke seluruh Indonesia dengan supir terpercaya
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fa fa-truck text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
  <br>
  <br>

  {{-- faq --}}
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <h4><strong>FAQ</strong></h4>
      </div>
    </div>
  
    <div class="row mt-4">
      <div class="col-12">
        <div class="accordion" id="faqAccordion">
  
          <!-- FAQ Item 1 -->
          <div class="accordion-item" style="margin-bottom: 20px;">
            <h2 class="accordion-header" id="faqHeading1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1" style="background-color: #E5CFF7; color: purple; border-radius: 10px;">
                <strong>Apakah SolusiLogistik adalah salah satu ekspedisi?</strong>
              </button>
            </h2>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Bukan. SolusiLogistik adalah satu aplikasi yang melingkup ekspedisi-ekspedisi favorit dan terbaik di Indonesia.
              </div>
            </div>
          </div>
  
          <!-- FAQ Item 2 -->
          <div class="accordion-item" style="margin-bottom: 20px;">
            <h2 class="accordion-header" id="faqHeading2">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2" style="background-color: #E5CFF7; color: purple; border-radius: 10px;">
                <strong>Siapa yang cocok dengan aplikasi SolusiLogisitik?</strong>
              </button>
            </h2>
            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
               SolusiLogistik sangat cocok untuk kamu yang berjualan diluar marketplace.
              </div>
            </div>
          </div>

          <div class="accordion-item" style="margin-bottom: 20px;">
            <h2 class="accordion-header" id="faqHeading3">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3" style="background-color: #E5CFF7; color: purple; border-radius: 10px;">
                <strong> Apakah bisa kirim produk ke seluruh Indonesia? </strong>
              </button>
            </h2>
            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Di aplikasi SolusiLogistik kamu bisa pilih ekspedisi yang tersedia di lokasi tujuanmu.
              </div>
            </div>
          </div>

          <div class="accordion-item" style="margin-bottom: 20px;">
            <h2 class="accordion-header" id="faqHeading4">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4" style="background-color: #E5CFF7; color: purple; border-radius: 10px;">
                <strong> Berapa biaya berlangganan SolusiLogistik? </strong>
              </button>
            </h2>
            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Aplikasi SolusiLogistik bisa kamu manfaatkan secara gratis. Tidak akan ada iklan atau pungutan biaya.
              </div>
            </div>
          </div>

          <div class="accordion-item" style="margin-bottom: 20px;">
            <h2 class="accordion-header" id="faqHeading5">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5" style="background-color: #E5CFF7; color: purple; border-radius: 10px;">
                <strong> Apakah SolusiLogistik cocok untuk COD? </strong>
              </button>
            </h2>
            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Fitur terbaik dari aplikasi SolusiLogistik adalah COD yang bisa cair dalam waktu tercepat (rata-rata 1 hari).
              </div>
            </div>
          </div>

          <div class="accordion-item" style="margin-bottom: 20px;">
            <h2 class="accordion-header" id="faqHeading6">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6" style="background-color: #E5CFF7; color: purple; border-radius: 10px;">
               <strong> Apakah dengan SolusiLogistik paket bisa dijemput di rumah? </strong>
              </button>
            </h2>
            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Dengan aplikasi SolusiLogistik paket kamu bisa langsung di jemput oleh ekspedisi yang kamu pilih dari aplikasi.
              </div>
            </div>
          </div>
  
          <!-- Add more FAQ items here as needed -->
  
        </div>
      </div>
    </div>
  </div>
  @endsection