<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/basicResponsiveMenu.css">
<script src='js/lib/moment.min.js'></script>
<script src='js/lib/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<style>
html,* { margin: 0; padding: 0; font-family: 'Montserrat';}
.show-nav, .hide-nav {
    padding: 10px;
 background-color: #E74C3C;
 border: 0;
 color: #fff;
}
.response--site-menu {
    display:flex;
    z-index: 5;
    justify-content:space-around;
    background:#333;
}
.response--site-menu a {
    color: #fff;
}
h1 { margin: 150px auto 50px auto; text-align: center; }

</style>
    
    <script src="dist/js/basicResponsiveMenu.js"></script>
    <script>
        $(function(){
            $('.response--main-navigation').basicResponsiveMenu({
                browserWidth:960,
                slideDir:'left',
                slideSpeed:400
            });
        });
    </script>
</head>
<body>
    <nav class="response--main-navigation">
        <ul class="response--site-menu">
            <li> <a href="index.php?page=homepage" class="actief">Homepagina</a> </li>
            <li> <a href="index.php?page=agenda">  Agenda </a> </li>
            <li> <a href="index.php?page=contact"> Contact </a> </li>
            <li> <a>Over ons</a></li>
        </ul>
    </nav>

</script></div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


