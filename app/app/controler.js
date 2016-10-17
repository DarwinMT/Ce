app.controller("home",function($scope){
	$scope.Title="Citas";

	$scope.ModifyCita=function() {
		$("#EditarCita").modal("show");
	};
});


app.controller("AgregarPersona",function($scope,$http){
	$scope.MensajeError="";
	$scope.TipoPersona=[];
	$scope.Persona={};
	$scope.LoadTipoPersona=function () {
		
		$http.get("getTpersona")
		.success(function(data){
			$scope.TipoPersona=data;
		})
		.error(function(data){
			console.log(data);
		});	
	};

	$scope.AddPersona=function () {
		if($scope.CmbTipp!="" & $scope.CmbTipp!=undefined){
			$scope.Persona={
				TipoPersona: $scope.CmbTipp,
				Ci: $scope.ci,
				FechaN :$("#FechaNac").val(),
				NomreP: $scope.NombreP,
				ApellidoP : $scope.ApellidoP
			};
			
		}else{
			$scope.MensajeError="Llene los campos para guardar..!!";
			$("#MnsjErr").modal("show");
		}

		console.log($scope.Persona);
	};

});