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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Hello world!</h1>
                </div>
            </div>
        </div>
    </body>
</html>