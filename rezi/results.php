<?php


//$results = querysearch();
?>
	
    
    <div  ng-app="propertyApp">
    
    
    <div class="eshop-section section" ng-controller="SearchResults">
    
    <div class="container">
	    		<h2>Search returned {{data.TotalCount}} Properties</h2>
				<div class="row" >
					<div class="col-sm-4" style="min-height: 550px;" ng-repeat="RoleId in Property">
						<div class="shop-item">
							<div class="image">
								<a href="property-details?pid={{RoleId.RoleId}}"><span ng-if="RoleId.Images[0].IsPrimaryImage == true">
                          <img class="sprim" width="400" ng-src="{{RoleId.Images[0].Url}}?width=300"/>
                          </span>
                                                      <span ng-if="RoleId.Images[1].IsPrimaryImage == true">
                          <img class="sprim" width="400" ng-src="{{RoleId.Images[1].Url}}?width=300"/>
                          </span>
                                                      <span ng-if="RoleId.Images[2].IsPrimaryImage == true">
                          <img class="sprim" width="400" ng-src="{{RoleId.Images[2].Url}}?width=300"/>
                          </span></a>
							</div>
							<div class="title">
								<h3><a href="property-details?pid={{RoleId.RoleId}}">{{RoleId.Address.Street}},{{RoleId.Address.Town}}</a></h3>
							</div>
							<div class="price">
								{{RoleId.Price.PriceValue | currency:"£": "0"}}
							</div>
							<div class="description">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
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

