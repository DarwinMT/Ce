var app=angular.module("Ce",["ngRoute"]);
app.config(function($routeProvider){
	$routeProvider
	.when("/",{
		templateUrl : "app/view/bo/main.html",
		controller : "home"
	});
});
