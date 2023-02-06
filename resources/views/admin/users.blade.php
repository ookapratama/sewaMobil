@extends('layouts.main_admin')

@section('adminpage')
<section class="section user">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title ">User Account <span>| All</span></h5>
              <table class="table table-borderless datatable" >
                 <thead>
                    <tr>
                       <th scope="col">User_ID</th>
                       <th scope="col">Name</th>
                       <th scope="col">Email</th>

                    </tr>
                 </thead>
                 <tbody>
                    @foreach ($user as $data )
                    <tr>
                        <th scope="row">{{$loop -> iteration }}</a></th>
                        <td><span>{{ $data -> username }} </span></td>
                        <td>{{ $data -> email }} </a></td>
                    </tr>
                    @endforeach
                    </tbody>
              </table>
           </div>
        </div>
     </div>
</section>
@include('partials.footerAdmin')

@endsection

@push('addon-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
@endpush

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".selectx").select2({
            theme: "bootstrap-5"
        });
    </script>
@endpush
