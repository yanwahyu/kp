<?php 
$pg=$c!=1?'Page '.$c.' ':''; // jika bukan halaman pertama
$d['nt']=' '.strtoupper(str_replace('-',' ',$a));
$d['n']=$pg.T.$d['nt']; // title halaman
$d['d']=$d['cd']['d'][$a]; // deskripsi halamanan
$d['l']=$a; // link url
$d['cl']=LC;
$r=$this->m('mp')->cbd($d['cd']['id'][$a]); // get all category slug
for($i=0;$i<count($r);$i++){$d['c'][$i]=$r[$i]['slug'];} // looping subcategory
$t=implode('","',$d['c']);
$d['p']=$this->m('mp')->abd($t,$d['os']); // method untuk count & get aritcle
$d['tp']=ceil($d['p']['a']/PL); // total pages
$this->v('h',$d); // header
$this->v('i',$d); // category
$this->v('p',$d); // pagination
$this->v('f',$d); // footer