<?php require ('includes/header.php'); ?>
  <div id="page">
    <header>
      <h1><a href="index.php">HENRY STEINBERG</a></h1>
       <!--Start Main Nav-->
      <nav class="main-nav" id="main-nav">
        <a href="./press.php" class="home-print"><span>print</span></a>
        <a href="./web.php" class="home-web"><span>web</span></a>
        <a href="./about.php" class="home-about"><span>about</span></a>
      </nav>
      <!--End Home Nav-->
    </header>

    <!--Start Home Content-->
    <div class="folio-grid">
      <a href="./press.php" class="home-print"><div class="full-width" id="C"><span id="ampersand">&amp;</span></div></a>
      <a href="./web.php" class="home-web"><div class="half-width" id="M"><span id="curly-brace">&#x7b;</span></div></a>
      <a href="./about.php" class="home-about"><div class="quarter-width" id="Y"><span id="ellipses">&hellip;</span></div></a>
      <a href="mailto:henryjosephsteinberg@gmail.com" target="blank"><div class="quarter-width" id="K"><span id="at-symbol">@</span></div></a>
    </div>
    <!--END Main Content-->
  </div>
<?php include ('includes/footer.php'); ?>
