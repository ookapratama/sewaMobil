@extends('layouts.main_admin')

@section('adminpage')
    <section class="section transaction">
        <div class="col-12">
            <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                    <h5 class="card-title">Transaction List <span>|
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#scrollingModal"> Tambah Data </button>
                    </h5>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Booking Code</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Armada</th>
                                <th scope="col">Grand Total</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $data)
                                <tr>
                                    <th scope="row">00{{ $data->id }}</a></th>
                                    <td>{{ $data->fullname }}</td>
                                    <td>{{ $data->start_date }} </a></td>
                                    <td>{{ $data->end_date }}</td>
                                    <td>{{ $data->armada_id }}</td>
                                    <td>{{ $data->total }} </td>
                                    <td><span class="badge bg-primary rounded">{{ $data->status }}</span></td>
                                    {{-- {{ $data -> status == 'success' ? 'bg-success' : 'bg-warning' }} --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- modal --}}
        <div class="modal fade" id="scrollingModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Transaction</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    {{-- <form action="{{ route('transaction.store') }}" method="post"> --}}
                    <form action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-6">
                                <label for="armada_id" class="col-sm-3 col-form-label">Armada</label>
                                <div class="col-sm-12">
                                    <select name="armada_id" class="form-control selectx" required>
                                        <option value="">Armada Name </option>
                                        <option value="">Armada Name </option>

                                        {{-- @foreach ($armadas as $armada)
                                    <option value="{{ $armada->id }}" {{ (old('id') == $armada->id)? 'selected':''; }}>{{ $armada->name }}</option>
                                @endforeach --}}
                                    </select>
                                </div>
                                @error('armada_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="start-date">Start-Date</label>
                                        <input type="date" name="start-date" class="form-control"
                                            placeholder="Pilih Tanggal" required></input>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="start-date">End-Date</label>
                                        <input type="date" name="start-date" class="form-control"
                                            placeholder="Masukan Harga.." required></input>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email.."
                                            required>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="address">Alamat</label>
                                        <input type="adress" name="address" class="form-control" placeholder="Alamat.."
                                            required>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="invoice">Bukti Pembayaran</label>
                                        <input type="file" name="invoice" class="form-control" placeholder="Upload.."
                                            required>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="ktp">KTP</label>
                                        <input type="file" name="ktp" class="form-control" placeholder="Upload.."
                                            required>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="col-md-12">
                                        <label for="sim">SIM</label>
                                        <input type="file" name="sim" class="form-control" placeholder="Upload.."
                                            required>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="armada_id" class="col-sm-3 col-form-label">Supir</label>
                                    <div class="col-sm-12">
                                        <select name="armada_id" class="form-control selectx" required>
                                            <option value="">Lepas Kunci</option>
                                            <option value="">Delivery</option>
                                            {{-- @foreach ($armadas as $armada)
                                    <option value="{{ $armada->id }}" {{ (old('department_id') == $armada->id)? 'selected':''; }}>{{ $armada->name }}</option>
                                @endforeach --}}
                                        </select>
                                    </div>
                                    @error('driver_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    {{-- <td><span class="badge bg-success rounded-pill">Completed</span></td>
<td><span class="badge bg-info rounded-pill">Success</span></td>
<td><span class="badge bg-warning rounded-pill">Pending</span></td>
<td><span class="badge bg-danger rounded-pill">Canceled</span></td> --}}

    @include('partials.footerAdmin')
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
