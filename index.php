<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Clique no sentimento para assistir a um vídeo sobre o assunto.">
<meta name="author" content="Marcelo Oliveira - mesavirtual.com">
<meta name="generator" content="Jekyll v3.7.0">

<title>Sentimentos</title>


<!-- Bootstrap core CSS -->

<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!-- Documentation extras -->

<link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">

<link href="https://getbootstrap.com/docs/4.0/assets/css/docs.min.css" rel="stylesheet">

<!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="https://getbootstrap.com/docs/4.0/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@getbootstrap">
<meta name="twitter:creator" content="@getbootstrap">
<meta name="twitter:title" content="Sentimentos">
<meta name="twitter:description" content="Clique no sentimento para assistir a um vídeo sobre o assunto.">
<meta name="twitter:image" content="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="https://getbootstrap.com/docs/4.0/components/modal/">
<meta property="og:title" content="Sentimentos">
<meta property="og:description" content="Clique no sentimento para assistir a um vídeo sobre o assunto.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://getbootstrap.com/docs/4.0/assets/brand/bootstrap-social.png">
<meta property="og:image:secure_url" content="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-social.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-146052-10', 'getbootstrap.com');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');
</script>

  </head>
  <body>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Vídeos</h1>
    <?php
    $feelings = include('src/content.php');
    foreach ($feelings->data as $feeling) {
    ?>
  
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" id="#buttonModalLong<?php echo $feeling->feeling; ?>" data-target="#exampleModalLong<?php echo $feeling->feeling; ?>">
      <?php echo $feeling->feeling; ?>
    </button>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalLong<?php echo $feeling->feeling; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $feeling->feeling; ?></h5>
            <button type="button" id="myStop<?php echo $feeling->feeling; ?>X" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $feeling->text; ?>
          </div>
          <div class="modal-footer">
            <button type="button" id="myStop<?php echo $feeling->feeling; ?>" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="product-device box-shadow d-none d-md-block"></div>
  <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script><script src="https://getbootstrap.com/docs/4.0/assets/js/docs.min.js"></script>
<script>


$('#myStopMedo, #myStopVergonha, #myStopTristeza, #myStopMedoX, #myStopVergonhaX, #myStopTristezaX').click(function(){
  $('.yt_player_iframe').each(function(){
    $(this).stopVideos();
  });
});

(function( $ ) {

$.fn.stopVideos = function() {
	var videos = document.querySelectorAll('iframe, video');
	Array.prototype.forEach.call(videos, function (video) {
		if (video.tagName.toLowerCase() === 'video') {
			video.pause();
		} else {
			var src = video.src;
			video.src = src;
		}
	});
}; })( jQuery );

</script>

  </body>
</html>
