@extends('layout')
@section('page_title')
 <title>{{config('app.name')}} - Map</title>
@stop
@section('page_content')
 <!-- START CONTENT INNER -->
<div class="content full-width full-height overlay-footer">
<!-- Map -->
<div class="map-container full-width full-height">
            <div id="map" class="full-width full-height"></div>
          </div>
     </div>
 <!-- END CONTENT INNER -->
@stop
@section('page_level_js')
  <script type="text/javascript" src="//maps.google.com/maps/api/js?key={{config('app.google_map_api_key')}}"></script>
  <script type="text/javascript" src="{{url('/')}}/js/gmaps.js"></script>
               <script type="text/javascript">
    var map;
    $(document).ready(function(){ 
      map = new GMaps({
        div: '#map',
        lat: 9.071798,
        lng: 7.486378,
        mapTypeControlOptions: {
          mapTypeIds : ["hybrid", "roadmap", "satellite", "terrain", "osm"]
        }
      }); 
        
    map.addMapType("osm", {
     getTileUrl: function(coord, zoom) {
        return "https://a.tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
      tileSize: new google.maps.Size(256, 256),
      name: "OpenStreetMap",
      maxZoom: 18
     });
        
        onload();
    });
      
                   
    function onload() {
      if(map != null) {
               $.ajax({
        type:"GET",
        url:"@if(isset($endpoint)){{url('/api/report')."/".$endpoint}}@else{{url('/api/report')}}@endif",
        success:function(data){
            $.each(data, function(index, element) {
                    var coordinates = element.coordinates.split(',');
                    map.addMarker({
                      lat: coordinates[0],
                      lng: coordinates[1],
                      //icon:"{{url('/')}}/img/marker.png",
                      title: element.category,
                      infoWindow: {
                          content: "<p> <strong>Category: </strong>"+element.category+"<br>"+
                                        "<strong>Subcategory: </strong>"+element.sub_category+"<br>"+
                                        "<strong>Coordinates: </strong>"+element.coordinates+"<br>"+
                                        "<strong>Comment: </strong>"+element.comment+"<br>"+ 
                                        "<img src='data:image/png;base64,"+element.image+"' alt=photo />"+
                                   "</p>"
                        }
                    });
        });
    }
  });
      }
    
  }
    
  </script>

@stop