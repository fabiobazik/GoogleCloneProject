<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Google search script</title>

<script async="" src="//www.google.com/adsense/search/async-ads.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="js/app.js"></script>
<script src="js/suggest.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/magnific-popup.min.js" type="text/javascript"></script>

<link rel="icon" type="icon/ico" href="favicon.ico">

<link rel="stylesheet" href="css/app.css" type="text/css">
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">

<script type="text/javascript" charset="utf-8">
  (function(G,o,O,g,L,e){G[g]=G[g]||function(){(G[g]['q']=G[g]['q']||[]).push(
   arguments)},G[g]['t']=1*new Date;L=o.createElement(O),e=o.getElementsByTagName(
   O)[0];L.async=1;L.src='//www.google.com/adsense/search/async-ads.js';
  e.parentNode.insertBefore(L,e)})(window,document,'script','_googCsa');
</script>

</head>

<body>

<div id="wrap">

<div id="search_home" style="display: block;">
	<img id="logo" src="images/logo.png"><br><br>
	<input type="text" id="qs" autofocus="" class="q_mobile"><br><br>
	<button id="sbt">Search</button> <button id="lucky">Get first</button>
</div>

<div id="search">

<div id="top">
	<img id="logo_top" src="images/logo.png" style="display: none;"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" id="q" autofocus="" class="ui-autocomplete-input" autocomplete="off" style="width: 693px;"><div id="sbtn" style="height: 40px;"></div>
	<div id="sug" style="top: 127px; left: 0px; height: 0px; width: 693px;"></div>
	<img id="branding" src="images/branding.png" style="display: none;">
</div>

<div style="height:80px;"></div>

<div id="results_wrap" style="margin-left: 0px;">

	<div id="tabs">
		<span class="tab tsel" id="web">Web</span>
		<span class="tab" id="images">Images</span>
		<span class="tab" id="videos">Videos</span>
		<span class="tab" id="news">News</span>
	</div>

	<div id="stats">About&nbsp;<span id="count"></span>&nbsp;results for&nbsp;<span id="query"></span>&nbsp;(<span id="speed"></span>&nbsp;seconds)</div>

	<div id="answer"></div>
	
	<div id="results" class="clearfix"></div>

	<div id="pages"></div>

</div>

</div>

<div id="footer">Google search script v. 1.9</div>

</div>



<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul>
</body>

</html>