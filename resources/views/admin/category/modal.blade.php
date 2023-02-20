<!-- [ Main model ] start -->
<div id="showModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Modal Title</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="formModal">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <input type='hidden' name='_method' id="modalhide">
                        <label for="categoryName" class="col-sm-3 col-form-label">Kategori <code>*</code></label>
                        <div class="col-sm-9">
                            <input name="categoryName" required type="text" class="form-control" id="categoryName" placeholder="max 15 karakter">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="categoryDesc" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <input name="categoryDesc" type="text" class="form-control" id="categoryDesc">
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
<!-- [ Main model ] end -->