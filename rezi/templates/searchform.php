<script>

function lettingsdrop()

{

document.getElementById("minprice").innerHTML = '<label class="select"><select name="minprice" id="minPrice"><option value="0">Min price</option><option value="200">200 PCM</option><option value="300">300 PCM</option><option value="400">400 PCM</option><option value="500">500 PCM</option><option value="600">600 PCM</option><option value="700">700 PCM</option><option value="800">800 PCM</option><option value="900">900 PCM</option><option value="1000">1000 PCM</option><option value="1500">1500 PCM</option><option value="2000">2000 PCM</option></select></label>';

	

document.getElementById("maxPrice").innerHTML = ' <label class="select"><select name="maxprice" id="maxPrice"><option value="0">Max price</option><option value="200">200 PCM</option><option value="300">300 PCM</option><option value="400">400 PCM</option><option value="500">500 PCM</option><option value="600">600 PCM</option><option value="700">700 PCM</option><option value="800">800 PCM</option><option value="900">900 PCM</option><option value="1000">1000 PCM</option><option value="1500">1500 PCM</option><option value="2000">2000 PCM</option></select></label>'

}



function salesdrop()

{

	document.getElementById("minprice").innerHTML = '<select id="minPrice" name="minprice"><option value="0">Min price</option><option value="50000">£50,000</option><option value="100000">£100,000</option><option value="150000">£150,000</option><option value="200000">£200,000</option><option value="250000">£250,000</option><option value="300000">£300,000</option><option value="350000">£350,000</option><option value="400000">£400,000</option><option value="500000">£500,000</option><option value="750000">£750,000</option><option value="1000000">£1,000,000</option><option value="99999999">+£1,000,000</option></select>'

		document.getElementById("maxPrice").innerHTML = '<select id="maxPrice" name="maxprice"><option value="0">Max price</option><option value="50000">£50,000</option><option value="100000">£100,000</option><option value="150000">£150,000</option><option value="200000">£200,000</option><option value="250000">£250,000</option><option value="300000">£300,000</option><option value="350000">£350,000</option><option value="400000">£400,000</option><option value="500000">£500,000</option><option value="750000">£750,000</option><option value="1000000">£1,000,000</option><option value="99999999">+£1,000,000</option></select>'	

}

</script>

<div class="row">
<form class="form1-1 form1" id="form3" action="<?php echo get_site_url();?>/search-results" method="GET" name="searchForm">
    <div class="row">
        <div class="col-xs-6">
        	<label class="text"> <span>Sales: </span> </label>
        	<input id="rentalperiod" type="radio" name="rentalperiod" value="0" onclick="salesdrop()" />
        </div>
        <div class="col-xs-6">
        	<label class="text"> <span>Lettings: </span> </label>
        	<input id="rentalperiod2" type="radio" name="rentalperiod" value="4" onclick="lettingsdrop()"/>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4">
        	<label class="text"> <span>Area: </span> </label>
        </div>
        <div class="col-xs-8">
        	<input id="searchTown" name="searchTown" type="text" />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
		<label class="text"> <span>Min price:</span> </label>
        <select id="minprice" name="minprice">
            <option value="0">Min price</option>
            <option value="50000">£50,000</option>
            <option value="100000">£100,000</option>
            <option value="150000">£150,000</option>
            <option value="200000">£200,000</option>
            <option value="250000">£250,000</option>
            <option value="300000">£300,000</option>
            <option value="350000">£350,000</option>
            <option value="400000">£400,000</option>
            <option value="500000">£500,000</option>
            <option value="750000">£750,000</option>
            <option value="1000000">£1,000,000</option>
            <option value="99999999">+£1,000,000</option>
        </select>
        </div>
        <div class="col-xs-6">
        <label class="text"> <span>Max price:</span> </label>
		<select id="maxPrice" name="maxprice">
            <option value="9999999">Max price</option>
            <option value="50000">£50,000</option>
            <option value="100000">£100,000</option>
            <option value="150000">£150,000</option>
            <option value="200000">£200,000</option>
            <option value="250000">£250,000</option>
            <option value="300000">£300,000</option>
            <option value="350000">£350,000</option>
            <option value="400000">£400,000</option>
            <option value="500000">£500,000</option>
            <option value="750000">£750,000</option>
            <option value="1000000">£1,000,000</option>
        </select>
        </div>
    </div>
    <div class="row">
    	<div class="col-xs-12">
        <input type="submit" />
        </div>
    </div>


</form>
</div>





