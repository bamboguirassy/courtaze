angular.module('Katalog',['gm'],()=>{})
.controller('MainController',($scope, $http)=>{
    $scope.lat = undefined;
    $scope.lng = undefined;
    
    $scope.$on('gmPlacesAutocomplete::placeChanged', function(){
        var location = $scope.placeAutoComplete.getPlace().geometry.location;
        $scope.lat = location.lat();
        $scope.lng = location.lng();
        $scope.$apply();
    });
}).controller('MapMarker',($scope) => {
    $scope.offres = [];
    $scope.initOffres = (offres) => {
        $scope.offres = offres;
        console.log(offres);
    }

    navigator.geolocation.getCurrentPosition(function(position) {
        const myLatLng = { lat: position.coords.latitude, lng: position.coords.longitude };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: myLatLng,
        });
    });
});