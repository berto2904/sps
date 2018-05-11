
var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_2: 'short_name',
        // country: 'long_name',
         postal_code: 'short_name'
      };



$(document).ready(function() {

  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });

});

function reloadMap(){

  $('#latLng').val('');
  $('#googleMapDireccion').append('<input id="autocomplete" class="controls" type="text" placeholder="Ingresar direccion">');
  initAutocomplete();
}

function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.615872, lng: -58.433298},
          zoom: 11,
          mapTypeId: 'roadmap'
        });

        var centerControlDiv = document.createElement('div');
        var centerControl = new CenterControl(centerControlDiv, map);
        centerControlDiv.index = 1;
        map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(centerControlDiv);

        // Create the search box and link it to the UI element.
        var input = document.getElementById('autocomplete');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];
          //
          // if (!$('#gmap').val() == '') {
          //   markers.push(new google.maps.Marker({
          //     map: map,
          //     zoom: 11,
          //     icon: icon,
          //     position: $('#gmap').val(),
          //   }));
          // }

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {

            $('#gmap').val(place.geometry.location);
            $('#gmap').val($('#gmap').val().replace('(','').replace(')','').replace(' ',''));
            // $('#gmap').val('{"'+$('#gmap').val().replace('(','lat":').replace(',',',"lng":').replace(')','')+'}');

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
              }
              for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];

                if (place.address_components[i].types[0] === "sublocality_level_1" && document.getElementById('locality').value === "") {
                  var val = place.address_components[i][componentForm['locality']];
                  document.getElementById('locality').value = val;
                }
                if (componentForm[addressType]) {
                  var val = place.address_components[i][componentForm[addressType]];
                  document.getElementById(addressType).value = val;
                }
              }
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(35, 35)
              // scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              zoom: 11,
              icon: icon,
              title: place.name,
              position: place.geometry.location,
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }


      function CenterControl(controlDiv, map) {

            // Set CSS for the control border.
            var controlUI = document.createElement('div');
            controlUI.style.backgroundColor = '#fff';
            controlUI.style.border = '2px solid #fff';
            controlUI.style.borderRadius = '3px';
            controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
            controlUI.style.cursor = 'pointer';
            controlUI.style.textAlign = 'center';
            controlUI.title = 'Refrescar Seleccion';
            controlDiv.appendChild(controlUI);

            // Set CSS for the control interior.
            var controlText = document.createElement('div');
            controlText.style.color = 'rgb(25,25,25)';
            controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
            controlText.style.fontSize = '12px';
            controlText.style.lineHeight = '17px';
            controlText.style.paddingTop = '3px';
            controlText.style.paddingRight = '0px';
            controlText.style.height = '2em';
            controlText.style.width = '5em';
            controlText.innerHTML = 'Refrescar';
            controlUI.appendChild(controlText);

            // Setup the click event listeners: simply set the map to Chicago.
            controlUI.addEventListener('click', function() {
            reloadMap()
            });

          }
