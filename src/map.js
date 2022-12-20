
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {lat: 48.8566, lng: 2.3522}
    })

    const marker = new google.maps.Marker({
        position: {lat: 48.8566, lng: 2.3522},
        map: map
    })
}

window.initMap = initMap
