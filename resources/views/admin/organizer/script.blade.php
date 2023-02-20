@push('script')
    <script>
        $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // function show modal store
        function insert() {
            $('#modalTitle').html('Tambah Staff')
            $('.modal-content form').attr('action', "{{ route('organizer.store')}}")
            $('.modal-footer button[type=submit]').html('Tambah Staff')
            $('#modalhide').val('POST')
            $('#name').val("")
            $('#address').val("")
            $('#job').val("")
            $('#photo').val("")
            $('#imgpriview').attr('src','')
            $('#showModal').modal().show
        }

        // function show modal update
        function edit(id) {
            $.get("/organizer/" +id + "/edit", function(e) {
                $('#formModal').attr('action', '/organizer/' + id)
                $('#modalhide').val('PUT')
                $('#modalTitle').html('Ubah Staff')
                $('.modal-footer button[type=submit]').html('Ubah Staff')
                $('#name').val(e.organizer.name)
                $('#address').val(e.organizer.address)
                $('#job').val(e.organizer.job)
                $('#imgpriview').attr('src',e.organizer.photo)
                $('#showModal').modal().show
            })
        }

        // preview img
        function imgpreview(){
            const imgPreview = document.querySelector('#imgpriview')
            const file = document.querySelector('input[type=file]').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", () => {
            // convert image file to base64 string
            imgPreview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endpush