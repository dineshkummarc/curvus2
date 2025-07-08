<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"> 
<html>
<head>
<title>Curvus Cafe</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<script type="text/javascript" src="js/boxOver.js"></script>

        
        <link href="admin/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        
		<link href="jquery-ui.css" rel="stylesheet">
		
		<style>
		</style>	
    </head>
    <script src="admin/js/jquery.js" type="text/javascript"></script>
    <script src="admin/js/bootstrap.js" type="text/javascript"></script>



    <link rel="stylesheet" href="admin/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="admin/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="admin/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="admin/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="admin/css/nivo-slider.css" type="text/css" media="screen" /> 

    <script type="text/javascript" src="admin/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        });
    </script>


    <script language="javascript" type="text/javascript">
        /* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
        <!-- Begin
        var timerID = null;
        var timerRunning = false;
        function stopclock (){
            if(timerRunning)
                clearTimeout(timerID);
            timerRunning = false;
        }
        function showtime () {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds()
            var timeValue = "" + ((hours >12) ? hours -12 :hours)
            if (timeValue == "0") timeValue = 12;
            timeValue += ((minutes < 10) ? ":0" : ":") + minutes
            timeValue += ((seconds < 10) ? ":0" : ":") + seconds
            timeValue += (hours >= 12) ? " P.M." : " A.M."
            document.clock.face.value = timeValue;
            timerID = setTimeout("showtime()",1000);
            timerRunning = true;
        }
        function startclock() {
            stopclock();
            showtime();
        }
        window.onload=startclock;
        // End -->
    </SCRIPT>	

