@extends('layouts.main_admin')

@section('adminpage')
<section class="section cars">
    <div class="col-12">
        <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <h5 class="card-title">Cars List <span>|
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                    {{-- <a href="{{ route('Armada.create') }}"></a> --}}
                     Tambah Data
                    </button>
                </h5>
            <table class="table table-sm datatable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Preview</th>
                    <th scope="col">Armada Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($armadas as $data)
                <tr>
                    <th><p class="card-title-desc"> {{ $data -> id }}</p></th>
                    <th scope="row"> <img src={{ $data -> picture_url ?? '/image/rentcar.jpg' }} alt="" class="card-img-preview"></th>
                    <th><a href="#"> </a><h5 class="card-title product-name"> {{ strtoupper($data -> name) }}</h5>
                    <span class="badge bg-success"> {{ $data -> transmission }}</span></th>
                    <th><p class="card-title-desc"> Rp. {{ number_format($data -> price, 0,",","." )}} </p></th>
                    <th><button class="btn btn-primary rounded"> {{ $data -> status }} </button></th>
                    <th>
                    </th>
                    <th>
                        <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        <button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                    </th>
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="verticalycentered" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Cars</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- <form action="{{ route('cars.store') }}" method="post"> --}}
                    <form action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="name">Armada Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukan Nama Armada.." required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Price</label>
                                    <input name="price" class="form-control" placeholder="Masukan Harga.." required></input>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="email">Picture</label>
                                    <input type="file" name="picture" class="form-control" placeholder="Upload Picture" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>

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

