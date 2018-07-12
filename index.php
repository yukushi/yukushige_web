<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="UTF-8">
  <title>Yukushige.com</title>
  
  <meta name="description" content="なにもありません">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:site_name" content="Yukushige.com">
  <meta property="og:url" content="https://yukushige.com/">

  <link rel="stylesheet" href="main.css" type="text/css">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
</head>

<body>
<?php
  $browser = strtolower($_SERVER['HTTP_USER_AGENT']);
  if (strstr($browser , 'trident') || strstr($browser , 'msie')) {
    echo('<div class="ie">Sorry, your browser is not supported.</div>');
  }
?>

    <div class="mainTitle">
         <div class="t1">Yu</div><!--
      --><div class="t2">ku</div><!--
      --><div class="t1">shi</div><!--
      --><div class="t2">ge</div><!--
      --><span id="dot">.</span><!--
      --><div class="t1">co</div><!--
      --><label for="modal-check" class="t1 maction text2">m</label><div class="fukidashi2 me">Click me!</div>
         <input type="checkbox" id="modal-check">
          <span class="modal">
            <label for="modal-check" class="cl"></label>
            <p class="mail">e-mail address : hiragi (at) yukushige.com</p>
          </span>
    </div>

  <main>
    <section>
      <div class="test1"><a href="https://yukushige.com/blog/"><img src="img/wp-logo.png" class="text"><div class="fukidashi">Blog</div></a></div>
      <div class="test2"><a href="https://github.com/"><img src="img/GitHub-Mark-Light-120px-plus.png" class="text"><div class="fukidashi">GitHub</div></a></div>
      <div class="test3"><a href="https://bitbucket.org/"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 62.4 56.13" width="50" class="text"><defs><style>.cls-1{fill:none;}.cls-2{fill:#949494;}.cls-3{fill:url(#New_Gradient_Swatch_1);}</style><linearGradient id="New_Gradient_Swatch_1" x1="64.01" y1="24.01" x2="32.99" y2="48.23" gradientUnits="userSpaceOnUse"><stop offset="0.18" stop-color="#aaaaaa"/><stop offset="1" stop-color="#bbbbbb"/></linearGradient></defs><title></title><g id="Layer_2" data-name="Layer 2"><g id="Blue"><polygon class="cls-1" points="24.7 37.25 37.75 37.25 40.9 18.87 21.23 18.87 24.7 37.25"/><path class="cls-2" d="M2,0A2,2,0,0,0,0,2.32L8.49,53.86a2.72,2.72,0,0,0,2.66,2.27H51.88a2,2,0,0,0,2-1.68L62.37,2.33A2,2,0,0,0,60.4,0ZM37.75,37.25h-13L21.23,18.87H40.9Z"/><path class="cls-3" d="M59.67,18.87H40.9L37.75,37.25h-13L9.4,55.48a2.71,2.71,0,0,0,1.75.66H51.89a2,2,0,0,0,2-1.68Z"/></g></g></svg><div class="fukidashi">Bitbucket</div></a></div>
      <div class="test4"><a href="https://www.slideshare.net/"><img src="img/SS_Logo_Desktop_White.png" class="text"><div class="fukidashi">SlideShare</div></a></div>
      <div class="test5"><a href="https://www.facebook.com/"><img src="img/flogo-HexRBG-Wht-100.png" class="text"><div class="fukidashi">Facebook</div></a></div>
    </section>
  </main>

<aside>
  <a href="https://yukushige.com/login.php"><img src="img/key.png" class="key">
</aside>

<footer>
  <a href="#">Copyright(c) 2018 Yukushige.com All Rights Reserved.</a>
</footer>

</body>

</html>
