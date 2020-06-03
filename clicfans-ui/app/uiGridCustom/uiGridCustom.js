'use strict';

angular.module('myApp').component('uiGridCustom',  
{
    bindings: {
    },
    templateUrl: 'uiGridCustom/uiGridCustom.html',    
    controller: 'uiGridCustomController'
});

angular.module('myApp').controller('uiGridCustomController', function($log, $scope, $http) {

    $log.debug("uiGrid Controller");

    $scope.gridOptions = {
        enableSorting: true,
        enableRowSelection: true,
        enableFullRowSelection: true,
        enableCellEdit: true,
        multiSelect: true,
        enableRowHeaderSelection: false,
        enableColumnMenus: false,
        enableFiltering: true,        
        paginationPageSizes: [5, 10, 25],
        paginationPageSize: 5, 
        columnDefs: [            
            {field: 'name', displayName: 'Nombre'},
            {field: 'comment', displayName: 'Comentario'},
            {field: 'date', displayName: 'Fecha'},
        ],       
        data : []
      }; 
      
      function loadComments() {
        $http.get('http://localhost/comments').then(function (result){
           $log.debug(result.data); 
           $scope.gridOptions.data = result.data.data;
        })
      }

      loadComments();
});
