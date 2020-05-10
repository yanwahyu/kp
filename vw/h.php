<?='<!DOCTYPE html><html lang="id"><head>
<title>'.$d['n'].'</title>
<meta name="description" content="'.$d['d'].'"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta charset="UTF-8">
<link rel="shortcut icon" href="'.L.'favicon.ico"/>
<link rel="canonical" href="https://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'"/>
<link rel="stylesheet" href="'.L.'aset/css/kp.css?'.date("lFYh:i:sA").'" type="text/css" media="all"/>';
echo isset($d['pg'])&&isset($d['tp'])&&$d['pg']!=$d['tp']?'<link rel="next" href="'.L.$d['l'].$d['pl'].$d['np'].'" />':'';
echo $d['ni']!=1?'<meta name="robots" content="noindex" />':'<meta name="robots" content="index"/>';
echo '</head>
<body>
<header>
<div class="hm xw">
<input type="checkbox" id="hc" name="hc"/>
<label for="hc">
<span class="hh">
<span class="hb">
<span class="hi"></span>
</span></span></label>
<div class="hl">';
echo isset($d['nt'])?'<a href="'.L.$d['l'].'">'.T.$d['nt'].'</a>':'<a href="/">'.T.'<span class="hlc">.com</span></a>';
echo '</div>
<nav class="hn"><ul>';
foreach($d['c']as$v){echo'<li><a href="'.L.$d['cl'].$v.'">'.str_replace('-',' ',ucwords($v)).'</a></li>';}
echo '</ul></nav></div>
</header>
<main>
<div class="xw">'
?>