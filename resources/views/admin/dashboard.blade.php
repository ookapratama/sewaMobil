@extends('layouts.main_admin')

@section('adminpage')
<section class="section dashboard">
    <div class="row">
       <div class="col-lg-12">
          <div class="row">
             <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                   <div class="card-body">
                      <h5 class="card-title">Sales <span>| All</span></h5>
                      <div class="d-flex align-items-center">
                         <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bx bx-user-check"></i></div>
                         <div class="ps-3">
                            <h6>145</h6>
                            <span class="text-muted small pt-2 ps-1">Transaction Completed</span>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                   <div class="card-body">
                      <h5 class="card-title">Revenue <span>| All</span></h5>
                      <div class="d-flex align-items-center">
                         <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bx bx-money"></i></div>
                         <div class="ps-3">
                            <h6>Rp. 55.800.000</h6>
                            <span class="text-muted small pt-2 ps-1">Payment Completed</span>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-xxl-12 col-xl-12">
        <div class="card info-card customers-card">
           <div class="card-body">
              <h5 class="card-title"> <a href="/transaction">Transaction <span></a>| All</span></h5>
              <div class="d-flex align-items-center">
                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">  <i class="bx bx-calendar-exclamation"></i></div>
                 <div class="ps-3">
                    <h6>2</h6>
                    <span class="text-danger small pt-1 fw-bold">Need Confirmation</span>
                 </div>
              </div>
           </div>
        </div>
     </div>

     <div class="col-xxl-12 col-xl-12">
        <div class="card info-card customers-card">
           <div class="card-body">
              <h5 class="card-title"><a href="/cars">Armada</a> <span>| All</span></h5>
              <div class="d-flex align-items-center">
                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bx bxs-car-garage"></i></div>
                 <div class="ps-3">
                    <h6> 10 </h6>
                    {{-- {{ ($armada->id)->count()}} --}}
                    <span class="text-success small pt-1 fw-bold">Available</span> <span class="text-muted small pt-2 ps-1">cars</span>
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

