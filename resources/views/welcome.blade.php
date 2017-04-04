<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <title>Laravel</title>

        <!--<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet" type="text/css">-->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!-- Include AlgoliaSearch JS Client Angular module and autocomplete.js Angular directive after jQuery and Angular dependencies -->
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.angular.min.js"></script>
        <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.angular.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;               
                font-family: 'Raleway';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
                margin-bottom: 450px;
            }

            .title {
                font-size: 60px;                
            }

           .algolia-autocomplete {
            width: 30%;
            }
            .algolia-autocomplete .aa-input, .algolia-autocomplete .aa-hint {
            width: 100%;
            }
            .algolia-autocomplete .aa-hint {
            color: #999;
            }
            .algolia-autocomplete .aa-dropdown-menu {
            width: 100%;
            background-color: #fff;
            border: 1px solid #999;
            border-top: none;
            }
            .algolia-autocomplete .aa-dropdown-menu .aa-suggestion {
            cursor: pointer;
            padding: 5px 4px;
            
            }
            .algolia-autocomplete .aa-dropdown-menu .aa-suggestion.aa-cursor {
            background-color: #B2D7FF;
            }
            .algolia-autocomplete .aa-dropdown-menu .aa-suggestion em {
            font-weight: bold;
            font-style: normal;
            background-color: yellow;
            }

            .actorsContainers{
            width: 100%;
            overflow: hidden;
            padding: 16px;
            background-color: #ecf0f1;
            margin-bottom: 16px;
            }
            .left {
            float: left;
            }
            .actorsContainers .img-container {
             width: 20%;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="content">
              <div class="title">Search you favorite Actor/Actris.</div>                 
                Write the name of you favorite Actor/Actriss :
                <div ng-controller="yourController">                   
                   <input type="text" id="search-input" class="form-control" autocomplete aa-datasets="getDatasets()" placeholder="Will smith">
                </div>
                 <hr/>    
                    <section id="app-body">        
                        <div class="actorsContainers">

                        </div>        
                    </section>
               </div>                
            </div> 
        </div>
     
    <script src="js/master.js"></script>
    </body>
</html>
