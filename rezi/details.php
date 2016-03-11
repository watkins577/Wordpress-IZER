<div  ng-app="propertyApp">

<div ng-controller="FullDetails" >


	    		<div class="row">
	    			<!-- Product Image & Available Colors -->
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
                        	
	    					<img ng-src="{{Property.Images[0].Url}}" alt="Item Name">
                            
	    				</div>
                         
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-6 product-details">
	    				<h2>{{Property.Address.Street}}, {{Property.Address.Town}}</h2>
	    				<div class="price">
							{{Property.Price.PriceValue | currency:"£": "0"}}  {{Property.Price.PriceText}}
						</div>
                        <div class="row contactbuttons">
                        	<div class="col-xs-4">
								<button type="button" class="btn btn-info">Contact Us</button>
                            </div>
                            <div class="col-xs-4">
                            <button type="button" class="btn btn-info">Request Viewing</button>
                            </div>
                            <div class="col-xs-4">
                            <button type="button" class="btn btn-info">Request Brochure</button>
                            </div>
                        </div>
                        <div class="row nm brief">
						<h3>Quick Overview</h3>
	    				<p ng-bind-html="summary"></p>
                        <p></p>
                        </div>
	    			</div>
                   </div>
                   <div class="row nm" >
                    <div ng-repeat="Id in imagesArr">
                       <span class="col-xs-1" style="padding:0px;">
                            <a class="fancybox" rel="gallery1" href="{{Id.Url}}?width=1000" title="" >
                                <img style="margin:10px;" width="80" height="60" src="{{Id.Url}}?width=100" alt="" />
                            </a>
                        </span>  
                    </div>
                    </div>

</div>


</div>