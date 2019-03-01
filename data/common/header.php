 <?php 
session_start();
if(!isset($_SESSION["admin_id"])) {
  header("location:/data/login.php");
}
include_once '../lib/dao.php';
include_once '../lib/model.php';
// create a is_object
$d = new dao();
$m = new model();

extract($_POST);
extract($_GET);
$response = array();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head> 
    <meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>



     YOUR_COMPANEY_NAME



</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!-- Extra details for Live View on GitHub Pages -->
<!-- Canonical SEO -->
<link rel="canonical" href="https://www.appdevbuild.com" />
<!--  Social tags      -->
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="">
<meta itemprop="description" content="">

<meta itemprop="image" content="../new/opt_mdp_thumbnail.jpg">


<!-- Twitter Card data -->
<meta name="twitter:card" content="YOUR_COMPANEY_NAME">
<meta name="twitter:site" content="YOUR_COMPANEY_NAME">
<meta name="twitter:title" content="YOUR_COMPANEY_NAME">

<meta name="twitter:description" content="">
<meta name="twitter:creator" content="YOUR_COMPANEY_NAME">
<meta name="twitter:image" content="../new/opt_mdp_thumbnail.jpg">


<!-- Open Graph data -->
<meta property="fb:app_id" content="">
<meta property="og:title" content="" />
<meta property="og:type" content="article" />
<meta property="og:url" content="index.php" />
<meta property="og:image" content="../new/opt_mdp_thumbnail.jpg"/>
<meta property="og:description" content="" />
<meta property="og:site_name" content="" />




<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="../font-awesome/latest/css/font-awesome.min.css">

<!-- CSS Files -->





<link href="../assets/css/material-dashboard.min40a0.css?v=2.0.2" rel="stylesheet" />


<link href="../assets/demo/demo.css" rel="stylesheet" />




<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
<!-- End Google Tag Manager -->




    </head>

    <body class="">
 
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<!-- End HeDER ENDEND 10-10-1018 -->
