<?php

//////////////////////////////////////////

//REGISTER JS DROPDOWN BOX SCRIPT

//////////////////////////////////////////



//	CUSTOM SHORTCODE FOR SITEURL - EVERY TIME YOU WANT

//	TO DISPLAY THE SITE URL IN A POST TYPE %SITEURL%



function replace_content($dzsite)

{

$siteurl2 = site_url();

$dzsite = str_replace('%siteurl%', $siteurl2 ,$dzsite);

return $dzsite;

}





function pagifix( $query ) {

    if( 'search-results' == $query->query_vars['pagename'] )

        remove_filter( 'template_redirect', 'redirect_canonical' );

}







//////////////////////////////////////////

//SHORTCODE PROCESSING

//////////////////////////////////////////

function fulldetails(){

include 'details.php';

}

function results(){

include 'results.php';

}

function searchform(){

include 'templates/searchform.php';

}



function vendorlogin($atts){

$apikey = get_option('dezrez_api');

$eaid = get_option('dezrez_eaid');

include 'templates/vendorlogin.php';

}



function featured(){

include 'featured.php';	

}



function latest($atts){

include 'latest.php';	

}

//////////////////////////////////////////

//ACTTIVATION 

//////////////////////////////////////////

function deactivate()

{

include 'deactivation.php';	

}

function activate()

{

include 'activation.php';	

}



function dezrez_display_settings() {

	if ($_GET['settings-updated'] == "true")

	{

	echo '<div class="updated">

        <p>Settings Updated!</p>

    </div>';

	}

    $apikey = get_option('dezrez_api');

    $agentid = get_option('dezrez_eaid');

		

    $html = '</pre>
	

<div class="wrap"><form action="options.php" method="post" name="options">

' . wp_nonce_field('update-options') . '

<table width="449" cellpadding="10">

<tbody>

<tr>

<td colspan="2" align="left" scope="row">



  <h2>Welcome to the Rezi Wordpress Plugin</h2>


 </td>
</tr>
<tr>

<td width="101" align="left">

 <label>API KEY</label></td>

<td width="348" align="left"><input name="dezrez_api" type="text" value="' . $apikey . '" size="120"  /></td>

</tr>

</tbody>

</table>

<br>

 <input type="hidden" name="action" value="update" />



 <input type="hidden" name="page_options" value="dezrez_eaid,dezrez_api" />



 <input type="submit" name="Submit" value="Update Dezrez Settings" /></form></div>


<pre>

';



    echo $html;

}



function create_dezrez_admin(){

    //add_menu_page( 'Rezi Options', 'Rezi', 'administrator', 'dezrez_settings', 'dezrez_display_settings');

}



?>