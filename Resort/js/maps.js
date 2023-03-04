function mapaCarga(){
    map = new google.maps.Map(document.getElementById( 'map' ), {
        center: {
                lat: 40.419450,
                lng: -3.692910
        },
        zoom: 14,
        mapTypeId: 'hybrid',
        scaleControl: true,
        fullscreenControlOptions: {
                position: google.maps.ControlPosition.RIGHT_BOTTOM
        },
    });
}

mapaCarga();


