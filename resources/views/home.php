<html>
<body>
  <h1>slackrad.io</h1>

  <?php if( isset($codes) ) { ?>
  <dl>
  <?php foreach( $codes as $code ) { ?>
    <dt><?php echo $code->code; ?></dt>
    <dd><?php echo $code->definition; ?></dd>
  <?php } ?>
  </dl>
  <?php } ?>

</body>
</html>
