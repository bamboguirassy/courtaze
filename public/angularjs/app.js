angular.module('Katalog',['gm'],()=>{})
.controller('MainController',($scope, $rootScope)=>{
    $rootScope.appUrl = window.location.protocol+'//'+window.location.host;
    $scope.lat = undefined;
    $scope.lng = undefined;
    
    $scope.$on('gmPlacesAutocomplete::placeChanged', function(){
        var location = $scope.placeAutoComplete.getPlace().geometry.location;
        $scope.lat = location.lat();
        $scope.lng = location.lng();
        $scope.$apply();
    });
}).controller('MapMarker',($scope, $rootScope, $http) => {
    $scope.offres = [];

    $scope.getOffres = () => {
        $http.get($rootScope.appUrl+'/offers-ws')
        .then((response)=>{
            $scope.offres = response.data;
            navigator.geolocation.getCurrentPosition(function(position) {
                const myLatLng = { lat: position.coords.latitude, lng: position.coords.longitude };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 10,
                    center: myLatLng,
                });
                $scope.offres.forEach((offre)=>{
                    if(offre.villeLongitude) {
                        new google.maps.Marker({
                            position: {lat: offre.villeLatitude, lng: offre.villeLongitude},
                            map,
                            title: offre.categorie_bien.nom,
                          });
                    }
                })
            });
        },err=>alert(err.data.message));
    }
    $scope.getOffres();

});