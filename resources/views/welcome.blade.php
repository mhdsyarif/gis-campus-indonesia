@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Geografis Indonesia</div>
                <div class="panel-body">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Google Maps API -->
<script>
  function initMap() {
    var indonesia = {lat: -2.811371, lng: 116.015625};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: indonesia,
      mapTypeId: 'terrain'
    });
    // var marker = new google.maps.Marker({
    //   position: indonesia,
    //   map: map
    // });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2U1tvuNQITB9fUM9j8JzKae8AlW21jYw&callback=initMap">
</script>
