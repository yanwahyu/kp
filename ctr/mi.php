<?php    
$pg=$c!=1?'Page '.$c.' ':''; // jika bukan halaman pertama
$d['n']=$pg.T; // title halaman
$d['d']='Situs Anak Muda Indonesia';
$d['l']='';
$d['p']=$this->m('mp')->aa($d['os']); // method untuk count & get aritcle
$d['tp']=ceil($d['p']['a']/PL); // total pages
$d['c']=$d['cd']['s'];
$d['cl']='';
$this->v('h',$d);
$this->v('i',$d);
$this->v('p',$d);
$this->v('f',$d);