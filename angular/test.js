(function() {
  var app = angular.module('test', []);

  app.controller('TestController', function($scope){
    $scope.inputs = [{value:""}, {value:""}, {value:""}];
    $scope.triggedFocus = false;
  });

  app.directive('changeFocusOnEnd', function() {
    return {
      restrict: 'A',
      transclude: true,
      link: function(scope, elem, attrs) {
        scope.$watch('input.value', function(value) {
          if (value == undefined) {
            if(!scope.$first) {
              scope.triggedFocus = true;
              elem[0].previousElementSibling.focus();
            }
          }
          else if (value.length == "10") {
            if(!scope.$last) {
              scope.triggedFocus = true;
              elem[0].nextElementSibling.focus();
            }
          }
        });
        elem.bind('keyup', function (e, a, b, c, d) {
          if (!scope.triggedFocus && scope.input != undefined && scope.input.value.length == "10") {
            if(!scope.$last) {
              elem[0].nextElementSibling.focus();
            }
          }
          if (scope.triggedFocus) {
            scope.triggedFocus = false;
          }
        });
      }
    };
  });

})();
