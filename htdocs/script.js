var app = angular.module('Wapp',[ "ngRoute"]);



// app.controller('Wctrl' , ['$scope', function($scope) {
//     $scope.message1 = "WELCOME TO THE WARD APPLICATION";
//     $scope.message2 = "SELECT USER TYPE";
// }]);

app.config( ['$routeProvider' , function($routeProvider){
        $routeProvider.when("/" , {
            templateUrl : "adminpage.html",
            // controller : "adminCtrl"
        })
        $routeProvider.when("/adminpage" , {
            templateUrl : "voterpage.html" ,
            // controller : "voterCtrl"
        });
        // $routeProvider.otherwise({
            // redirectTo : "main.html"
        // });

}]);

// function HomeFragmentController($scope) {
//     $scope.$on("$routeChangesSuccess" , function(scope , next,current){
//         $scope.transitionState = "active"
//     });
// }
//
//
//
// app.controller("adminCtrl" , function($scope){
//   $scope.mess = "hii ";
// });
//
// app.controller("VoterCtrl" , function($scope){
//   $scope.mess = "hello";
// }]);
