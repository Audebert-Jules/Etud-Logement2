window.onload = function (){
    const listElement = document.getElementById('listing');
    const items = getList();

    let html = '';

    items.forEach(item => {
        /*html += `<div>${item.name}: ${item.adresse}</div>`;
    });*/
        html += `<div class="list">
            <img src="${item.image}" height="100" width="100" alt="studio"/>
            <h3><u>${item.name}</u></h3>
            <ul>
                <li>${item.rent}€/mois</li>
                <li>${item.adresse}</li>
            </ul>
        </div>`;});

    listElement.innerHTML = html;
}

function getList() {
    return [
        { name: 'Studio 14m²', rent: 600, adresse: "142, rue du coin 75004 Paris" , image : "images/appart1.jpg"},
        { name: 'Studio 10m²', rent: 400 , adresse: "35, rue d'a coté 75012 Paris", image : "images/appart2.jpg"},
        { name: 'Studio 13m²', rent: 550 , adresse: "154, avenue henry barbusse 75019 Paris", image : "images/appart3.jpg"}
    ];
}

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