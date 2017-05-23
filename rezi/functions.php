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
ob_start();
include 'details.php';
$output = ob_get_contents();
ob_end_clean();
return $output;
}

function results(){
	ob_start();
include 'results.php';
$output = ob_get_contents();
ob_end_clean();
return $output;
}

function searchform(){
	ob_start();
include 'templates/searchform.php';
$output = ob_get_contents();
ob_end_clean();
return $output;
}

function featured(){
	ob_start();
include 'featured.php';
$output = ob_get_contents();
ob_end_clean();
return $output;
}

function latest(){
	ob_start();
include 'latest.php';
$output = ob_get_contents();
ob_end_clean();
return $output;
}

function latestSales(){
	ob_start();
include 'latestSales.php';
$output = ob_get_contents();
ob_end_clean();
return $output;
}

function latestLettings(){
	ob_start();
include 'latestLettings.php';
$output = ob_get_contents();
ob_end_clean();
return $output;
}

function mapSearch() {
	ob_start();
include 'mapSearch.php';
$output = ob_get_contents();
ob_end_clean();
return $output;
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


function create_dezrez_admin(){
    //add_menu_page( 'Rezi Options', 'Rezi', 'administrator', 'dezrez_settings', 'dezrez_display_settings');
}
?>