<?php class DB {
private$dbh;
private$st;
function __construct(){$d='mysql:host='.H.';dbname='.N;$o=[PDO::ATTR_PERSISTENT=>true,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];try{$this->dbh=new PDO($d,U,P,$o);} catch(PDOException$e){die($e->getMessage());}}
function query($q){$this->st=$this->dbh->prepare($q);}
function b($p,$v,$t=null){if(is_null($t)){switch(true){case is_int($v):$t=PDO::PARAM_INT;break;case is_bool($v):$t=PDO::PARAM_BOOL;break;case is_null($v):$t=PDO::PARAM_NULL;break;default:$t=PDO::PARAM_STR;}}$this->st->bindValue($p,$v,$t);}
function exe(){$this->st->execute();}
function ef(){$this->st->execute();return$this->st->fetch(PDO::FETCH_ASSOC);}
function efa(){$this->st->execute();return$this->st->fetchAll(PDO::FETCH_ASSOC);}
function efc(){$this->st->execute();return$this->st->fetchColumn();}
function nr(){$this->st->nextRowset();}
function rc(){return$this->st->rowCount();}}