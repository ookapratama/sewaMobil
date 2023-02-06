@extends('layouts.main_admin')

@section('adminpage')
<section class="section testimoni">
    <div class="col-12">
        <div class="card">
           <div class="card-body">
            <h5 class="card-title">Testimoni <span>| All</span></h5>
            <table class="table datatable" >
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Armada</th>
                        <th scope="col">Testimoni</th>
                        <th scope="col">Timestamp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonis as $data)
                    <tr>
                        <th> {{ $data-> id }}</th>
                        <td scope="row">{{ $data -> armada_name }}</a></th>
                        <td><span> {{$data -> text }}</span></td>
                        <td> {{$data -> created_at }}</td>
                        <td> <button type="button" class="btn btn-danger"> <i class="bi bi-trash"></i></button></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
           </div>
        </div>
     </div>
</section>
</main>
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
