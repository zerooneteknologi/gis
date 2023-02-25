
@push('script')
<script>
    
    $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

    // function show modal insert data
    function insert() {
        $('form').attr('action', '/post')
        $("form input[name='_method']").attr('value', 'POST')
        $('.modal-title').html('Tambah Berita')
        $(".modal-footer button[type='submit']").html('Tambah')
        $('#postTitle').val("")
        $('#categoryId').val("")
        $('#postDesc').val("")
        $('#showModal').modal().show
    }

    // function show modal edit data
    function edit(id) {
        $.get('post/' + id + '/edit', function(e) {
            $('form').attr('action', '/post/' + id)
            $("form input[name='_method']").attr('value', 'PUT')
            $('.modal-title').html('Edit Berita')
            $(".modal-footer button[type='submit']").html('Edit')
            $('#categoryId').val(e.category_id)
            $('#postTitle').val(e.postTitle)
            $('#postDesc').val(e.postDesc)
            $('#showModal').modal().show
        })
    }
</script>
@endpush