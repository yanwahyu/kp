<?php 
if($d['tp']!=1){
echo'<div class="p atc">';echo$d['pg']!=1?'<a href="'.L.$d['l'].'" class="pg">Halaman Awal</a>':'<span class="pg">Halaman Awal</span>';$t=2;$s=($d['pg']>$t)?$d['pg']-$t:2;$s=(2>$d['tp']-$s)?$d['tp']-2:$s;$s=($s==1)?2:$s;$e=($d['pg']<($d['tp']-$t))?$d['pg']+$t:$d['tp'];$e=($d['pg']<3)?5:$e;$e=($d['tp']<2*2)?$d['tp']:$e;$s=($d['tp']<2*2)?2:$s;
for($i=$s;$i<=$e;$i++){
echo $d['pg']==$i?'<span class="pg on">'.$i.'</span>':'<a href="'.L.$d['l'].$d['pl'].$i.'" class="pg">'.$i.'</a>';echo $d['pg']!=$d['tp']&&$d['tp']!=0&&$d['tp']>5?'<a href="'.L.$d['l'].$d['tp'].'" class="pg">Halaman Terakhir</a>':'';
}
echo '</div>';
}?>