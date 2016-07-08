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

function featured(){
include 'featured.php';	
}

function latest(){
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


function create_dezrez_admin(){
    //add_menu_page( 'Rezi Options', 'Rezi', 'administrator', 'dezrez_settings', 'dezrez_display_settings');
}
?>