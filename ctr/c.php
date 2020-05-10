<?php
$d['pg']=$c; // page
$d['ni']=$c==1?1:0; // noindex
$d['os']=($c-1)*PL; //offset
$d['np']=$c+1; // nextpage
$d['pl']='/page/'; //pagelink
$d['cl']=LC;
$d['l']=$a;
$pg=$c!=1?'Page '.$c.' ':''; // jika bukan halaman pertama
$d['n']=$pg.T.' '.strtoupper(str_replace('-',' ',$a)); // title halaman
$r=$this->m('mp')->cabp($a);
for($i=0;$i<count($r);$i++){$d['c'][$i]=$r[$i]['slug'];} 
$t=implode('","',$d['c']);
$d['p']=$this->m('mp')->aabc($a,$d['os']); // method untuk count & get aritcle
$d['tp']=ceil($d['p']['a']/PL); // total pages
$this->v('h',$d); // header
$this->v('i',$d); // category
$this->v('p',$d); // pagination
$this->v('f',$d); // foote