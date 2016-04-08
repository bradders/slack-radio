<html>
<head>

  <title>Slack Radio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="/css/main.css">

</head>
<body>

  <main class="section">

    <div class="wrapper">

      <h1><span class="slack--pink">slack</span><span class="slack--blue">rad</span><span class="slack--yellow">.</span><span class="slack--blue">io</span></h1>

      <p><strong>Use APCO 10 codes in your Slack channel for quick replies.</strong></p>

      <pre><code>/radio 10-4</code></pre>

      <hr>

      <h2>All Codes</h2>
      <?php if( isset($codes) ) { ?>
      <dl class="codes">
      <?php foreach( $codes as $code ) { ?>
        <dt class="code__code"><strong><em><?php echo $code->code; ?>:</em></strong></dt>
        <dd class="code__definition"><?php echo $code->definition; ?></dd>
      <?php } ?>
      </dl>
      <?php } ?>

    </div>
    <!-- /.wrapper -->

  </main>

  <footer class="section">

    <div class="wrapper">
      <p class="copyright"><a href="http://mattmade.co.uk">&copy; Copyright Matt Bradley 2016</a></p>
    </div>
    <!-- /.wrapper -->

  </footer>

  <?php if(app()->environment() != "local") { ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-715960-11', 'auto');
    ga('send', 'pageview');
  </script>
  <?php } ?>
</body>
</html>
