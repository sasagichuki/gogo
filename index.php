<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Post Like</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400|Armata' rel='stylesheet' type='text/css'>


  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>

<?php
/**
 * get the signed request parameter and decode it to get the user's
 * 'liked' status for the current page
 */
if (!empty($_REQUEST['signed_request'])) {
  $signedRequest = $_REQUEST['signed_request'];
  list($sig, $payload) = explode('.', $signedRequest, 2);
  $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);
}

/**
 * if the user has already 'liked' the page then render the 'liked' view
 * else, render the 'pre liked' view
 */
if (empty($data['page']['liked'])) {
  include 'views' . DIRECTORY_SEPARATOR . 'pre_liked.php';
} else {
  include 'views' . DIRECTORY_SEPARATOR . 'post_liked.php';
}
?>

<script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>

</body>
</html>