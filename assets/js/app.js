var vendasApp = angular.
	module('vendasApp', ['ngMaterial']).
	config(['$httpProvider', function($httpProvider) {
	  $httpProvider.interceptors.push('LoadingListener');
	}]).
	factory('LoadingListener', [ '$q', '$rootScope', function($q, $rootScope) {

	  function onResponse() {
	    $rootScope.loading = false;
	  }
	  return {
	    'request': function(config) {
	      $rootScope.loading = true;
	      return config;
	    },
	    'response': function(response) {
	      if (!response || !response.config) {
	        return response;
	      }
	      onResponse();
	      return response;
	    },
	    'responseError': function(rejection) {
	      if (!rejection || !rejection.config) {
	        return $q.reject(rejection);
	      }
	      onResponse();
	      return $q.reject(rejection);
	    }
	  };
	}]);

vendasApp.controller('UsuarioCtrl', function($scope, $http, $mdDialog){
	$scope.usuario = null;
	$scope.usuarios = [];

	// onInit = function() {}

	$scope.showListUsuarios = function() {
		$scope.listUsuarios = !$scope.listUsuarios;
		$scope.getUsuarios();
	}

	$scope.getUsuarios = function() {
		// $scope.usuarios = ['User 1', 'User 2', 'User 3'];
		$http.
		get('/inforgeneses/projeto-vendas/usuario/getUsuarios').
		then(function(response) {
			$scope.usuarios = response.data;
		});
	};

	$scope.getUsuario = function(usuarioId) {
		$scope.usuario = $scope.usuarios[usuarioId];
	};

	$scope.showAdvanced = function(ev) {
		$mdDialog.show({
		  contentElement: '#dialogEditUsuario',
		  parent: angular.element(document.body),
		  targetEvent: ev,
		  clickOutsideToClose: true
		})
		.then(function(answer) {
		  $scope.status = 'You said the information was "' + answer + '".';
		}, function() {
		  $scope.status = 'You cancelled the dialog.';
		});
	};

  $scope.hide = function() {
    $mdDialog.hide();
  };

  $scope.cancel = function() {
    $mdDialog.cancel();
  };

  $scope.answer = function(answer) {
    $mdDialog.hide(answer);
  };

	// onInit();

});