<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>


    <div class="row">

     <div class="col-12">

        <div id="mapid" style="width: 100%;height: 480px;box-shadow: 5px 5px 5px #888;"></div>

    </div>


</div>

<hr>



<script>

    {{-- var map = L.map('mapid').setView([51.505, -0.09], 13); --}}

    var marker;

    var markes;

    var map = L.map('mapid');


    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  // attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
    }).addTo(map);

    L.control.scale().addTo(map);


    $.ajax({
        url: "http://127.0.0.1:8000/api/getdata",
    type: "GET",               // Defines the HTTP method
    dataType: "json",          // Tells jQuery to automatically parse JSON response
    success: function(result) {
        console.log("Success!", result);

            for (let i = 0; i < result.length; i++) {


            view = map.setView([result[i].geometry.coordinates[1],result[i].geometry.coordinates[0]],2);


      

            var marker = L.marker([result[i].geometry.coordinates[1], result[i].geometry.coordinates[0]]).addTo(map);
            marker.bindPopup(result[i].properties.title)

       

        var circle = L.circle([result[i].geometry.coordinates[1], result[i].geometry.coordinates[0]], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5
            {{-- radius: 2000000             --}}
        }).addTo(map);









}


    },
    error: function(xhr, status, error) {
        console.error("Error occurred:", error);
    }
});
    

</script>

</body>
</html>
