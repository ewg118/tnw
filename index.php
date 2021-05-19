<?php 
header ('Content-type: text/html; charset=utf-8');
date_default_timezone_set("America/New_York");

//perform date math for countdown
$currentDateTime = strtotime("now");
$next = strtotime("this Tuesday 18:00");
$rem = $next - $currentDateTime;

$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);

$title = "Tuesday Night Worlds begins in ";
if($day) $title .= "$day Days ";
if($hr) $title .= "$hr Hours ";
if($min) $title .= "$min Minutes ";
if($sec) $title .= "$sec Seconds ";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">//</script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">//</script>
        <script type="text/javascript" src="js/tnw.js">//</script>
         <link rel="stylesheet" href="css/style.css" />
        <title><?php echo $title ?></title>

		<meta property="og:url" content="http://tuesdaynightworlds.org"/>
		<meta property="og:type" content="article"/>
		<meta property="og:title" content="<?php echo $title ?>"/>
		<meta property="og:description" content="Tuesday Night Worlds is the Charlottesville area's premier grassroots race-pace group ride. Multiple professional cyclists have cut their teeth on the traditional TNW long course. The TNW has been going strong for over two decades."/>
		<meta property="og:image" content="http://tuesdaynightworlds.org/images/TNW_WORLD_19-01.jpg"/>
		<meta property="og:image:width" content="308"/>
		<meta property="og:image:height" content="325"/>
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="<?php echo $title ?>"/>
		<meta name="twitter:url" content="http://tuesdaynightworlds.org">		
		<meta name="twitter:image" content="http://tuesdaynightworlds.org/images/TNW_WORLD_19-01.jpg"/>
    </head>
    <body>
        <div class="container-fluid" style="height:100%">
            <div class="row hidden-xs hidden-sm" style="height:50%">
                <div class="col-md-12 text-center" style="height:100%">
                    <img src="images/TNW_WORLD_19-01.png" alt="TNW logo" style="height:100%;max-width:100%"/>
                </div>
            </div>
            <div class="row visible-xs visible-sm">
            	<img src="images/TNW_WORLD_19-01.png" alt="TNW logo" style="width:100%"/>
            </div>
            <div class="row">
            	<div class="col-md-12 text-center">
            		<div>Next TNW begins in</div>
            		<div class="timer"><span id="day"><?php echo $day; ?></span><br/>days</div> 
            		<div class="timer"><span id="hr"><?php echo $hr; ?></span><br/>hours</div> 
            		<div class="timer"><span id="min"><?php echo $min; ?></span><br/>minutes</div> 
            		<div class="timer"><span id="sec"><?php echo $sec; ?></span><br/>seconds</div>            		
            	</div>
            	<div class="col-md-12 text-center">
            		<span>Tuesday Night Worlds is the Charlottesville area's premier grassroots race-pace group ride.<br/>TNW meets near the Earlysville Post Office every Tuesday at 6pm from mid-March to late-October</span>
            		<br/>•<br/>
            		<a href="https://www.strava.com/segments/850343">Strava Segment</a>
            		<br/>•<br/>
            		<span>Logos by <a href="https://www.cutawayusa.com/">Cutaway</a>. <a href="https://www.cutawayusa.com/collections/tnw">Buy the jersey</a></span>
            	</div>
            </div>
        </div>
        <div class="hidden">
        	<span id="nextTime"><?php echo date(DATE_W3C, $next) ?></span>
        </div>
    </body>
</html>