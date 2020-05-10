<?='<ul class="bc"><li><a href="'.L.'">Home</a></li><li><a href="'.L.$d['l'].'">'.ucwords($d['l']).'</a></li><li><a href="'.L.LC.$d['ps']['cats'].'">'.$d['ps']['cn'].'</a></li></ul>
<article class="ac"><h1 class="t">'.$d['ps']['nama'].'</h1><div class="i">'.ucwords(str_replace('-',' ',$d['ps']['auth'])).' <span>&#9998;</span> '.date('d M Y', strtotime($d['ps']['date'])).'</div>'.$d['ps']['cont'].'</article>';
if (!empty($d['rp'])){
echo '<div class="wt"><h3 class="wtt">BACA JUGA</h3></div><div class="w">';
foreach($d['rp']as$rp){echo '<div class="wp"><h2 class="wpt"><a href="'.$rp['slug'].$rp['nama'].'</a></h2><div class="wpi">'.ucwords(str_replace('-',' ',$rp['cats'])).'</div><div class="wpl">'.$rp['nama'][0].'</div></div>';}
echo '</div>';}
?>