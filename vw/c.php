<section>
<div class="wt"><h1 class="wtt"><?= $d['nama'];?></h1></div>
<?php $i=1;foreach ($d['p'] as $p){?>
<article>
<h2 class="t"><a href="/<?=$p['slug']?>" target="_self">
<?=$p['nama']?>
</a></h2>
<div class="i">
<?=$p['cats']?> <span>&#9998;</span> <?=ucwords(str_replace('-',' ',$p['auth']))?>, <?= date('d M Y', strtotime($p['date']));?>
</div>
<div class="c">
<?php $cont=explode("<!--more-->", $p['cont']);
echo $cont[0];?>
</div>
<div class="rm"><a href="/<?=$p['slug']?>" target="_self">Lanjutkan Membaca</a></div>
</article>
<?php }?>
</section>