<?php
$defaultTitle = "Best Tour Operator in Ahmedabad, Gujarat | Gujarat Darshan";
$defaultDesc = "Looking for a reliable and affordable tour operator in Ahmedabad? Look no further than Gujarat Darshan! We offer a wide range of tour packages that are perfect for both leisure and business travelers.";

// Get the current URL
$currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$title = !empty($title) ? $title : $defaultTitle;
$desc = !empty($desc) ? $desc : $defaultDesc;
$canonical = !empty($canonical) ? $canonical : $currentUrl;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Krish Panchani and Thunder Develops">

  <link rel="stylesheet" href="/gujarattravels/css/output.css?v=1.0">
  <link rel="stylesheet" href="/gujarattravels/css/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <script src="https://kit.fontawesome.com/9584aecba5.js" crossorigin="anonymous"></script>
  <script src="/js/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- SEO meta tags -->
  <meta name="keywords" content="tour operator, Ahmedabad, Gujarat, travel, tour packages">
  <meta name="robots" content="index, follow">
  <meta name="rating" content="general">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="7 days">
  <meta name="language" content="en">

  <!-- Open Graph (og) meta tags -->
  <meta property="og:title" content="<?php echo $title; ?>t">
  <meta property="og:description" content="<?php echo $desc; ?>">
  <meta property="og:image" content="your-image-url.jpg">
  <meta property="og:url" content="https://www.gujaratdarshans.com/">
  <meta property="og:type" content="website">

  <link rel="icon" type="image/png" href="/gujarattravels/images/logo.png">
  <link rel="canonical" href="<?php echo $canonical; ?>">
  <meta name="description" content="<?php echo $desc; ?>">
  <title><?php echo $title; ?></title>

  <style>
    .swiper-wrapper {
      width: 100%;
      height: max-content !important;
      padding-bottom: 64px !important;
      -webkit-transition-timing-function: linear !important;
      transition-timing-function: linear !important;
      position: relative;
    }

    .swiper-pagination-bullet {
      background: #4F46E5;
    }

    .swiper-pagination-bullet-active {
      background: #4F46E5 !important;
    }

    .skeleton {
      background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
      background-size: 200% 100%;
      animation: shimmer 1.5s infinite;
    }

    @keyframes shimmer {
      0% {
        background-position: -200% 0;
      }

      100% {
        background-position: 200% 0;
      }
    }
  </style>
</head>

<body>