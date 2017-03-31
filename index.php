<?php include('config.php') ?>

<!DOCTYPE HTML>
<html>
<head>
  <title><?php echo($site_title) ?></title>
  <meta name="description" content="<?php echo($site_description); ?>">
  <meta name="keywords" content="<?php echo($site_keywords); ?>">
  <?php include($meta_top) ?>
</head>
<body>

<div class="wrapper">
  <?php include ($header) ?>

  <div class="ban_1">

    <div class="row">
      <div class="col-12"></div>
    </div>
  </div>

<?php include ($footer) ?>
</div>


<?php include( $meta_bot); ?>
</body>
</html>
