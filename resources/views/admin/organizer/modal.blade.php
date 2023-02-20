<div id="showModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="modalTitle">Large Modal</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" enctype="multipart/form-data" id="formModal">
                @csrf
                <div class="modal-body row">
                    <div class="col-sm-4">
                        <img class="img-preview img-fluid" src="" alt="" id="imgpriview" style="max-height: 400px">
                        <input onchange="imgpreview()" name="photo" class="form-control" type="file" id="photo">
                    </div>
                    <div class="col-sm-8">
                        <input name="_method" type="hidden" id="modalhiden">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="name">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input name="name" type="text" class="form-control" id="name" required>
                                <small id="name" class="form-text text-muted">max 100 karakter</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="address">Alamat</label>
                            <div class="col-sm-9">
                                <textarea name="address" type="text" class="form-control" id="address" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="job">Jabatan</label>
                            <div class="col-sm-9">
                                <input name="job" type="text" class="form-control" id="job" required>
                                <small id="job" class="form-text text-muted">max 100 karakter</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn  btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>