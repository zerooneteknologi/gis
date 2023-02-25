<!-- [ Main model ] start -->
<div id="showModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Modal </div>
            <form method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">    
                        <div class="col col-4">
                            <label for="categoryId" class="col-sm-3 col-form-label">Kategori <code>*</code></label>
                            <input type='hidden' name='_method'>
                                <select name="categoryId" id="categoryId" class="form-control" required>
                                    <option value="" selected disabled>-- Pilih Kategori --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" >{{ $category->categoryName }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="col col-8">
                            <label for="postTitle" class="col-sm-3 col-form-label">Judul <code>*</code></label>
                            <input name="postTitle" type="text" class="form-control" id="postTitle" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <textarea name="postDesc" id="postDesc" rows="14" class="form-control" required></textarea>
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