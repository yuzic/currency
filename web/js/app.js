var app = angular.module('myApp', []);
//var appController = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

    $scope.myFunction = function() {
        $http.get('/site/list', { foo: 'bar' }).success(function(response)
        {
            $scope.documents = response;
        });

    }
});
