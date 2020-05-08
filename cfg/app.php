<?php 
require 'cfg.php';
require 'dbs.php';
// CLASS CONTROLLER
class ctr{
// method untuk menampilkan theme
function v($v,$d=[]){require_once 'vw/'.$v.'.php';}
// method untuk melakukan conect database
function m($m){require_once 'mdl/'.$m.'.php';return new$m;}
}

// CLASS APP
class App{

// contructor function
function __construct(){
// insisiasi fungsi p 'ada dibawah'
$u=$this->p();
// require controller
require 'ctr/i.php';
// instansiasi class i pada controller i
$c=new i; // controller
$m='b0t'; // method
$p=[]; // parameter
// jika ada url

print_r($u);
// jika ada url[0] atau slug awal
if(isset($u[0])){ 
// jika method ada pada class i maka meth adalah url[0]
if(method_exists($c,$u[0])){$m=$u[0];unset($u[0]);}
}
// jika ada url maka 

if(isset($u)){
$p=array_values($u);}
// memanggil fungsi dan memberikan array $p pada fungsi
call_user_func_array([$c,$m],$p);
}


// PARSEURL FUNCTION untuk mendapatkan url dan menjadikannya array
function p(){if(isset($_GET['u'])){
return explode('/',filter_var(rtrim($_GET['u'],'/'),FILTER_SANITIZE_URL));}
}
}