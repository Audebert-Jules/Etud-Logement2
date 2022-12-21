let map

let list

function setList(listjson){
    list = listjson
}

function initMap(list) {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {lat: 48.8566, lng: 2.3522}
    })
    for(lieu in list){
        const marker = new google.maps.Marker({
            position: {lat: lieu.latitude, lng: lieu.longitude},
            map: map
        })
    }

}

window.initMap = initMap
