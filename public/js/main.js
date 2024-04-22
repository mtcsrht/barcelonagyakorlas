let app = angular.module('sightShowing', []);
app.controller('SightsController', function($scope, $http){

    $http.get("/backend/data.php").then((result) => {
        $scope.results = result.data;
        console.log(result.data);
    }).catch((err) => {
        console.log(err);
    });
})