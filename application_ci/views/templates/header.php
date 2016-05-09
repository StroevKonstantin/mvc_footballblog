<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title><?php echo $news_item['title'];?> - <?php echo $news_item['subtitle'];?> - <?php echo $title; ?></title>
		<meta name="description" content="<?php echo $meta_d; ?>">
		<meta name="keywords" content="<?php echo $meta_k; ?>">
		
        <meta name="google-site-verification" content="LwGNWgZoxF6oWgj39GFPGG-nOHKUqsl71f63jqw6FXE" />

		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/component.css">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/default.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    	<script src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
<script>

$(document).ready(function(){
   var f = $("#f").width() ;
   // alert(f); 
   $('.single-box').css('width', f);   
});
    
</script>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76157746-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36664410 = new Ya.Metrika({
                    id:36664410,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36664410" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



	<body class="body_custom">
		<div class="row header">
			<div class="container">
				<div class="col-md-10 col-sm-9 col-xs-10 top-box">
                	<a href="<?php echo base_url();?>/footballnews" class="logo"></a>
                	<p><?php echo $title; ?><br><?php echo $subtitle; ?></p>
                	<div class="clear"></div>
            	</div>
            	<div class="col-md-2 col-sm-3 col-xs-1 country-list">
                    <a href="<?php echo base_url('langswitch/switchlanguage/russian'); ?>" class="ru">Русский</a>
                    <!-- <a href="" class="kz">Kazakh</a> -->
                    <a href="<?php echo base_url('langswitch/switchlanguage/english'); ?>" class="en">English</a> 
                </div>
            </div>
		</div>