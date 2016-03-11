<div  ng-app="propertyApp">
    			    <div ng-controller="FeaturedProp">
                <div ng-repeat="RoleId in Property">
                          <img class="sprim" width="400" ng-src="{{RoleId.Images[0].Url}}?width=300"/>
                         <h3>{{RoleId.Address.Town}}</h3>
                         <h4>{{RoleId.Price.PriceValue | currency:"£": "0"}}</h4>
    			        </div>
    			       </div>
    			   </div>
