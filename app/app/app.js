var app=angular.module("Ce",["ngRoute"]);
app.config(function($routeProvider){
	$routeProvider
	.when("/",{
		templateUrl : "app/view/main.html",
		controller : "home"
	});
});
app.controller("home",function($scope){
	$scope.Title="Citas";

	$scope.ModifyCita=function() {
		$("#EditarCita").modal("show");
	};
});