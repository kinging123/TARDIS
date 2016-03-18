var app = angular.module('TARDIS', ['ngSanitize']);

app.controller('GeneralController', ['$scope', '$http', function ($scope, $http) {
	$http.get('wp-json/wp/v2/posts').success(function(data) {
		
		console.log(data);

		$scope.posts = data;

	});
}]);