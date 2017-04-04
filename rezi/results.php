<?php


//$results = querysearch();
?>
	
    
    <div  ng-app="propertyApp">
    
    
    <div class="section" ng-controller="SearchResults">
    
    <div class="container">
	    		<h2>Search returned {{data.TotalCount}} Properties</h2>
				<div class="row" >
					<div ng-repeat="RoleId in Property">
						<div>
							<div class="image">
								<a href="property-details?pid={{RoleId.RoleId}}"><span>
                          <img class="sprim" width="400" ng-src="{{RoleId.Primary}}"/>
                          </span></a>
							</div>
							<div class="title">
								<h3><a href="property-details?pid={{RoleId.RoleId}}">{{RoleId.Address.Street}},{{RoleId.Address.Town}}</a></h3>
							</div>
							<div class="price">
								{{RoleId.usePrice}}
							</div>
							<div class="description">
								<p ng-bind-html="RoleId.summary"></p>
							</div>
							<div class="actions">
								<a href="property.php?pid={{RoleId.RoleId}}" class="btn"><i class="icon-shopping-cart icon-white"></i> Read More</a>
							</div>
						</div>
					</div>
				</div>
    </div>
    <div class="row pages">	
                    <div id="pages" class="pagination-wrapper ">
                    </div>
                </div>
    
    
    </div>

<!--foreach ($dezrezproperty as $property){

$apikey = get_option('dezrez_api');


PROPERTY RESULT HTML HERE

include 'templates/resultstemplate.php';

}

	END PROPERTY HTML CODE

?>-->

