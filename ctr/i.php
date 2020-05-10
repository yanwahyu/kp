<?php class i extends ctr{
// untuk url[0] 'domain/url[0]'
// $a untuk membuat default variable jika url[1] tidak ada
// $b untuk membuat default variable jika url[2] tidak ada
// $c untuk membuat default variable jika url[3] tidak ada
function b0t($a='g0',$b=1,$c=1){
   $x=$a=='g0'||$a=='page'||!empty($d['ps']=$this->m('mp')->as($a))?$b:$c;
   $d['cd']=$this->m('mp')->cd(); // cat default
   $d['pg']=$x; // page
   $d['ni']=$x==1?1:0; // noindex
   $d['os']=($x-1)*PL; //offset
   $d['np']=$x+1; // nextpage
   $d['pl']='/page/'; //pagelink
   if($a=='page'&&$b==1){header('Location: /');exit;}
   switch($a){
   case $a=='g0'||$a=='page':  // HOMEPAGE ----------
   require 'mi.php';
   break;
   case !empty($d['ps']): // ARTICLE PAGE ----------
   require 'ma.php';
   break;
   case in_array($a,$d['cd']['s']):
   require 'mc.php';
   break;
   default: // 404 PAGE
   $this->v('404');
}
}
function category($a='g0',$b=1,$c=1){
   require 'c.php';
}
function about($a='g0'){
   require 'ab.php';
}
}