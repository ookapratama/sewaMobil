{{-- modal edit --}}
<div class="modal fade" id="verticalycentered editModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Cars</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('cars.update') }}" method="post" id="editForm" enctype="multipart/form-data">
                {{ method_field('put') }}
                @csrf
                <input type="hidden">
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="name">Armada Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{  }}"
                                placeholder="Masukan Nama Armada.." required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="address">Price</label>
                            <input name="price" class="form-control" id="price" placeholder="Masukan Harga.."
                                required></input>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="email">Picture</label>
                            <input type="file" name="picture_url" id="picture" class="form-control"
                                placeholder="Upload Picture" required>
                            <input type="hidden" name="picture_old" id="picture_old">
                        </div>
                        <div class="form-row text-center">
                            <div class="form-group col-md-12">
                                <img class="rounded img-fluid" id="showImage">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
