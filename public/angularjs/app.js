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
});