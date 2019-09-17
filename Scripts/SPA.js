
var spa = angular.module ("Spa", ["ngRoute"]);

spa.config(function($routeProvider){
    $routeProvider
    .when("/p1", {
        templateUrl: "Templates/Pg1.php"
    })
    .when("/p2", {
        templateUrl: "Templates/Pg2.php"
    })
    .when("/p3", {
        templateUrl: "Templates/Pg3.php"
    })

    .otherwise({redirectTo: '/'});
});
