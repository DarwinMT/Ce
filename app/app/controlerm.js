app.controller("home",function($scope){
	$scope.Title="Citas";

	$scope.ModifyCita=function() {
		$('#modal1').openModal();
	};
});