@extends('layouts.main_admin')

@section('adminpage')
    <section class="section driver">
        <div class="col-12">
            <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                    <h5 class="card-title">Driver List <span>|
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#verticalycentered"> Tambah Data </button>
                    </h5>

                    @if ($errors->any())
                        @foreach ($errors->all() as $v)
                            <li class="list-group-item list-group-item-danger">{{ $v }}</li>
                        @endforeach
                    @endif

                    <table class="table table-sm datatable">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Driver Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($drivers as $i => $driver)
                                <tr>
                                    <th scope="row"> {{ ++$i }}</a></th>
                                    <td><span> {{ $driver->name }} </span></td>
                                    <td>{{ $driver->phone }}</td>
                                    <td>
                                        <button class="btn btn-{{ $driver->status == 'available' ? 'primary' : 'secondary'}}">{{ $driver->status }}</button> 
                                        {{-- <button type="button" class="btn btn-success rounded-pill" data-bs-toggle="modal" data-bs-target="#verticalycentered"> Available </button>
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                   <div class="modal-content">
                                      <div class="modal-header">
                                         <h5 class="modal-title">Input Car Name</h5>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="row mb-3 mt-3">
                                           <label for="inputText" class="col-sm-1 col-form-label"></label>
                                           <div class="col-sm-10"> <input type="text" class="form-control"></div>
                                        </div>
                                    </form>
                                    <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Assign</button></div>
                                   </div>
                                </div>
                            </div> --}}
                                    </td>
                                    <td>
                                        <div class="d-flex">

                                            <form class="me-2" action="{{ route('driver.destroy', $driver->id) }} "
                                                method="post">
                                                {{ method_field('delete') }}
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                            <button type="button" value="{{ $driver->id }}"
                                                class="btn editBtn btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr>
                        <th scope="row">#2457</a></th>
                        <td><span>Driver 2 </span></td>
                        <td>08325464323</td>
                        <td>
                            <button type="button" class="btn btn-warning rounded-pill" data-bs-toggle="tooltip" data-bs-placement="right" title="Finish?"> Assigned </button>
                        </td>
                        <td>Fortuner 4x4</td>
                    </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- modal tambah --}}
        <div class="modal fade" id="verticalycentered" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Driver</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    {{-- <form action="{{ route('cars.store') }}" method="post"> --}}
                    <form action="{{ route('driver.store') }} " method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="name">Driver Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Masukan Nama Driver.." required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Phone Number</label>
                                    <input name="phone" class="form-control" placeholder="08xx..." required></input>
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

        {{-- modal edit --}}
        <div class="modal fade" id="editModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah Driver</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    {{-- <form action="{{ route('cars.store') }}" method="post"> --}}
                    <form action="{{ route('driver.update') }} " method="post">
                        {{ method_field('put') }}
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="name">Driver Name</label>
                                    <input type="text" name="name" id="name_old" class="form-control"
                                        placeholder="Masukan Nama Driver.." required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="address">Phone Number</label>
                                    <input name="phone" class="form-control" id="phone_old" placeholder="08xx..."
                                        required></input>
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
    </main>
    @include('partials.footerAdmin')
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.editBtn', function() {
                var id = $(this).val();
                // alert(id);
                $('#editModal').modal('show');

                $.ajax({
                    type: "GET",
                    url: "/admin/driver/edit/" + id,
                    success: function(response) {
                        console.log(response.driver.name);
                        $('#name_old').val(response.driver.name);
                        $('#phone_old').val(response.driver.phone);
                        $('#id').val(id);
                    }
                });

            });
        });
    </script>
@endsection

@push('addon-style')
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
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
