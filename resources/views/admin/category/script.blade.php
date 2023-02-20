
@push('script')
<script>
    
    $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

    // function shoh modal insert data
    function insert() {
        $('#formModal').attr('action', '/category')
        $("#modalhide").attr('value', 'POST')
        $('.modal-title').html('Tambah Kategori')
        $(".modal-footer button[type='submit']").html('Tambah')
        $('#categoryName').val("")
        $('#categoryDesc').val("")
        $('#showModal').modal().show
    }

    // function shoh modal edit data
    function edit(id) {
        $.get('category/' + id + '/edit', function(e) {
            $('#formModal').attr('action', '/category/' + id)
            $("#modalhide").attr('value', 'PUT')
            $('.modal-title').html('Edit Kategori')
            $(".modal-footer button[type='submit']").html('Edit')
            $('#categoryName').val(e.categoryName)
            $('#categoryDesc').val(e.categoryDesc)
            $('#showModal').modal().show
        })
    }
</script>
@endpush