      function initMap() {
        var uluru = {lat: 28.523317, lng:  76.277005};
        var map = new google.maps.Map(document.getElementById('maps'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          icon: 'images/map-marker.png'
        });
      }
