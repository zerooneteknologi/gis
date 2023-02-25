
@push('script')

{{-- ckeditor5 cdn --}}
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

<script>

    // map    

    let map = new L.map('map').setView([-7.324542931485562, 108.22048455476762], 13);
    
    let layer = new L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    
    // L.marker([-7.324542931485562, 108.22048455476762]).addTo(map);
    
    let marker = null;
    
    map.on('click', (event)=> {

        if(marker !== null){
            map.removeLayer(marker);
        }

        marker = L.marker([event.latlng.lat , event.latlng.lng]).addTo(map);

        document.getElementById('latitude').value = event.latlng.lat;
        document.getElementById('longitude').value = event.latlng.lng;
        
    })

    // ckeditor
    ClassicEditor.create( document.querySelector( '#tourDesc' )).catch( error => {
        console.error( error );
    } );

</script>
@endpush