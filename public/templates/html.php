<?php
ini_set("include_path", "../".ini_get("include_path"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>
    <?php echo $head_title; ?>
  </title>
  <link rel="stylesheet" href="css/styles.css">
  <!-- favicon -->
  <?php include_once $webroot.'/favicon/html_code.php'; die;?>
  <!-- endfavicon -->
  <link href="https://fonts.googleapis.com/css?family=Audiowide|Roboto:300,400,500|Ubuntu+Mono:400,700|Ubuntu:300,400,500&amp;subset=greek,greek-ext,latin-ext"
    rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script async="async" type="text/javascript" src="/js/modernizr.custom.js"></script>
</head>

<body class=<?php echo 'path-' .$body_class; ?> >
  <a href="#main-content" class="visually-hidden focusable skip-link">
    'Skip to main content'
  </a>
  <div id="content-wrapper">
    <?php echo $page_top; ?>
    <main id="main" role="main">
      <?php echo $page; ?>
    </main>
    <!-- <?php echo $page_bottom; ?> -->
    <footer>

    </footer>
  </div>
</body>
<script async="async" type="text/javascript" src="/js/drawLines.js"></script>
<script async="async" type="text/javascript" src="/js/loader.js"></script>
<script async="async" type="text/javascript" src="/js/svgReplace.js"></script>

</html>