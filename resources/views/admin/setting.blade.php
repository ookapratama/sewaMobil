@extends('layouts.main_admin')

@section('adminpage')

<section class="section setting">
    <div class="col-xl-8">
    <div class="card">
       <div class="card-body pt-3">
          <ul class="nav nav-tabs nav-tabs-bordered">
             <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
          </ul>
          <div class="tab-content pt-2">
             <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">About</h5>
                <p class="small fst-italic">Rental mobil balikpapan terpercaya yang mengutamakan pelayanan yang cepat & tepat dengan harga terjangkau</p>
                <h5 class="card-title">Company Details</h5>
                <div class="row">
                   <div class="col-lg-3 col-md-4 label ">Company Name</div>
                   <div class="col-lg-9 col-md-8">CV. Sarfaraz Borneo Utama</div>
                </div>
                <div class="row">
                   <div class="col-lg-3 col-md-4 label">Name</div>
                   <div class="col-lg-9 col-md-8">Sarfaraz Rent Car</div>
                </div>
                <div class="row">
                   <div class="col-lg-3 col-md-4 label">Address</div>
                   <div class="col-lg-9 col-md-8">Jl.Soekarno Hatta 4.5 Perumahan Puri Mandastana Blok Q no 3, Batu Ampar
                    Kota Balikpapan, Kalimantan Timur</div>
                </div>
                <div class="row">
                   <div class="col-lg-3 col-md-4 label">Phone</div>
                   <div class="col-lg-9 col-md-8">085247768054</div>
                </div>
                <div class="row">
                   <div class="col-lg-3 col-md-4 label">Email</div>
                   <div class="col-lg-9 col-md-8">sarfarazrentcar@gmail.com</div>
                </div>
             </div>

          </div>
       </div>
    </div>
 </div>
</div>
</section>
</main>
@include('partials.footerAdmin')

@endsection
