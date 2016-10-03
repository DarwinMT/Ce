app.controller("home",function($scope){
	$scope.Title="Citas";

	$scope.ModifyCita=function() {
		$("#EditarCita").modal("show");
	};
});