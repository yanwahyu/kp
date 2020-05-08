<?php class i extends ctr{
// untuk url[0] 'domain/url[0]'
// $a untuk membuat default variable jika url[1] tidak ada
// $b untuk membuat default variable jika url[2] tidak ada
function b0t($a='g0',$b=1){
switch($a){
   // HOMEPAGE
   case $a=='g0'||$a=='page': 
   if($a=='page' && $b==1){header('Location: /');exit;}
   $d['pg']=$b; // page
   $d['ni']=$d['pg']!=1?'0':''; // noindex
   $d['os']=($d['pg'] - 1) * PL; //offset
   $d['np']=$b + 1; // nextpage
   $d['pl']='/page/'; //pagelink
   // JIKA di HOMEPAGE
   if($b==1){ 
   $d['n']='Cari di '.T.' Aja'; // title halaman utama
   }else{ 
   $d['n']='Halaman '.$b.' '.T; // title halaman pages
   }
   $d['d']='Situs Anak Muda Indonesia'; // deskripsi
   $d['ta']=$this->m('mp')->ac(); // total article
   $d['tp']=ceil($d['ta']/PL); // total pages
   $d['p']=$this->m('mp')->aa($d['os']); // post
   $this->v('h',$d);
   $this->v('i',$d);
   $this->v('p',$d);
   $this->v('f',$d);
   break;
   // ARTICLE PAGE
   case !empty($d['as']=$this->m('mp')->as($a)):
   $d['as']['tags']=explode(',',$d['as']['tags']);
   function cc($d){ // convert category
   return str_replace('-',' ',ucwords($d));
   }
   $d['as']['catNama']=cc($d['as']['cats']);
   $d['n']=$d['as']['nama'].'- '.T;
   $d['d']=$d['as']['des'];
   $this->v('h',$d);
   $this->v('a',$d);
   $this->v('f',$d);
   break;
   // 404 PAGE
   case $a=='404':
   $this->v('404');
   break;
   default:$this->v('404');
}
}

function saya($a='g0',$b=1){

   
}

}