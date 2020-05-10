<?php 
function cc($d){ return str_replace('-',' ',ucwords($d));}
$d['ps']['cn']=cc($d['ps']['cats']);
$d['n']=$d['ps']['nama'].'- '.T;
$d['d']=$d['ps']['des'];
$d['l']=$this->m('mp')->acd($d['ps']['cats']);
$d['nt']=' '.strtoupper(str_replace('-',' ',$d['l']));
$r=$this->m('mp')->cabp($d['ps']['cats']);
$d['cl']=LC;
$d['rp']=$this->m('mp')->rpbt($d['ps']['id']);
for($i=0;$i<count($r);$i++){$d['c'][$i]=$r[$i]['slug'];} 
$this->v('h',$d);
$this->v('a',$d);
$this->v('f',$d);