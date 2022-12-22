function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {lat: 48.8566, lng: 2.3522}
    })
}

function changeMarker(long,lat){
    const marker = new google.maps.Marker({
        position: {lat: lat, lng: long},
        map: map

    })
}

function generateMarkers(lodgings){
    lodgings.forEach(lodging => {
        changeMarker(parseFloat(lodging.Longitude), parseFloat(lodging.Latitude))
    })
}


window.initMap = initMap
