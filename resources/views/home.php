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

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-715960-11', 'auto');
    ga('send', 'pageview');
  </script>

</body>
</html>
