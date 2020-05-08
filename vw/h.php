<!-- WHAT ARE YOU DOING ? -->
<!DOCTYPE html>
<html lang="id">
<head>
<title><?=$d['n']?></title>
<meta name="description" content="<?=$d['d']?>"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="shortcut icon" href="/favicon.ico" />
<?php if(!empty($d['pg'])&&$d['pg'] != $d['tp']){?>
<link rel="next" href="<?= $d['pl'].$d['np']?>" />
<?php }?>
<?php if(!empty($d['ni'])){?>
<meta name="robots" content="noindex" />
<?php }?>
<meta charset="UTF-8">
<link rel="canonical" href="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" />
<link rel='stylesheet' href='/aset/css/kp.css?<?php echo date('l jS \of F Y h:i:s A'); ?>' type='text/css' media='all'/>
</head>
<body>
<header>
<div class="hm xw">
<input type="checkbox" id="hc" name="hc"/>
<label for="hc">
<div class="hh" type="button" aria-label="Menu" aria-controls="hc">
<span class="hb">
<span class="hi"></span>
</span></div></label>
<div class="hl"><a href="/">Kowpi<span class="hlc">x</span>Tech</a></div>
<nav class="hn"><ul>
<?php $n[0]=array('t'=>'Komputer');
$n[1]=array('t'=>'Internet');
$n[2]=array('t'=>'Games');
$n[3]=array('t'=>'Software');
$n[4]=array('t'=>'Telco'); ?>
<?php foreach($n as $v){?>
<li><a href="/kategori/<?=strtolower($v['t'])?>" title="Menuju Halaman <?=$v['t']?>" <?php if(!empty($d['pagetitle'])){if($v['t']==$d['pagetitle']){echo'class="on"';}}?>><?=$v['t']?></a></li>
<?php }?>
</ul></nav></div></header><main><div class="xw">