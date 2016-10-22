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

	$scope.ClearAll=function() {
		$scope.CmbTipp="";
		$scope.ci="";
		$scope.NombreP="";
		$scope.ApellidoP="";
		$("#FechaNac").val("");
	};

	$scope.AddPersona=function () {
		if($scope.CmbTipp!="" & $scope.CmbTipp!=undefined){
			$scope.Persona={
				id_tp: $scope.CmbTipp,
				ci: $scope.ci,
				nombre: $scope.NombreP,
				apellido : $scope.ApellidoP,
				fechaN :$("#FechaNac").val()
			};
			
			$http.post("addTpersona",$scope.Persona)
			.success(function(data){
				if(data!=0){
					$scope.MensajeError="Se guardo correctamente";
					$("#MnsjErr").modal("show");
					$scope.ClearAll();
				}else{
					$scope.MensajeError="Error al guardar";
					$("#MnsjErr").modal("show");
					$scope.ClearAll();
				}
			})
			.error(function(data){
			});

		}else{
			$scope.MensajeError="Llene los campos para guardar..!!";
			$("#MnsjErr").modal("show");
		}

		
	};

});