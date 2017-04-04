
var data = [];

angular.module('myApp', ['algoliasearch', 'algolia.autocomplete'])
    .controller('yourController', ['$scope', 'algolia', function($scope, algolia) {
      var client = algolia.Client('DJ6O2NI2DH', 'eeac13ad737de4e3ab220bbffff5d491');
      var index = client.initIndex('getstarted_actors');

      $scope.getDatasets = function() {
         return {
          source: algolia.sources.hits(index, { hitsPerPage: 5 }),
          displayKey: 'name',
          templates: {
            suggestion: function(suggestion) {
              return suggestion._highlightResult.name.value;
            }
          }
        };
      };

var $actorContainer = $("#app-body").find(".actorsContainers");

$actorContainer.hide();
      
   $scope.$on('autocomplete:selected', function(event, suggestion, dataset) {
        //suggestions me retorna los datos
        data = suggestion;
        console.log(data, dataset);
              var template = '<article class="contenedor">'+
                '<div class="left img-container">'+
                '<img src="'+data.image_path+'" alt="">'+                               
                '</div>'+
                '<div align="center">'+
                'Name: '+data.name+''+
                '<p>Rating: '+data.rating+'</p>'+ 
                '</div>'+
                '</article>';
    $actorContainer.show();
    $actorContainer.append(template);        
      });
      
    }]);
