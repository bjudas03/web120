<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


switch(THIS_PAGE) {
  case 'index.php':
    $title = "Ben Judas WEB120 Title Page";
    $logo = 'fa-fa home';
    $PageID = 'Welcome';
  break;

  case 'contactme.php':
    $title = "Contact Ben";
    $logo = 'fa-pencil-square-o';
    $PageID = 'Contact Ben';
  break;

  case 'flowchart.php':
    $title = "Flowchart and Wireframes";
    // $logo = 'iconForFlowchart';
    $PageID = 'Flowchart and Wireframes';
  break;

  case 'aia.php':
    $title = "AIA";
    // $logo = 'iconforAIA';
    $PageID = 'Audience, Issues and Approach';
  break;

  default:
    $title = THIS_PAGE;
    $logo = '';
    $PageID = '';
  break;  

}

$nav1['index.php'] = 'Welcome';
$nav1['aia.php'] = 'Audience, Issues and Approach';
$nav1['contactme.php'] = 'Contact Me';
$nav1['flowchart.php'] = 'Flowchart and Wireframes';
$nav1['fp/index.php'] = 'Final Project';
$nav1['big/index.php'] = 'Big Project';


// Function for dynamic/highlighting nav
function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}


?>