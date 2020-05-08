<?php class mp {private$d;private$publish=' stat LIKE 1 ';function __construct(){$this->d=new DB;}
function as($s){ //article_single
   $this->d->query('SELECT p.nama,p.des,p.auth,p.date,p.cont,p.cats,p.slug FROM'.XP.'WHERE slug=:s AND'.$this->publish);
   $this->d->b('s',$s);
   return $this->d->ef();
}
function ac(){ // article count
   $this->d->query('SELECT count(nama) FROM'.XP.'WHERE'.$this->publish);
   return $this->d->efc();
}
function aa($o){ // article all
   $this->d->query('SELECT * FROM'.XP.'WHERE'.$this->publish.'ORDER BY date DESC LIMIT '.PL.' OFFSET '.$o);
   return $this->d->efa();
}
function aabc($s,$o){ // article all by cats
   $this->d->query('SELECT p.nama,p.des,p.auth,p.date,p.cont,p.cats,p.slug from'.XP.'p left join'.XC.'c on c.slug = p.cats WHERE c.slug = :s and p.'.$this->publish.'ORDER BY date DESC LIMIT '.PL.' OFFSET '.$o);
   $this->d->b('s',$s);
   return $this->d->efa();
}
function acbc($n){ // article count by cats
   $this->d->query('SELECT count(p.id) from'.XP.'p left join'.XC.'c on c.slug = p.cats WHERE c.slug = :n and p.'.$this->publish);
   $this->d->b('n',$n);
   return $this->d->efc();
}
function ap(){ // article popular
   $this->d->query('select id,name,slug,cont from'.XP.'WHERE FIND_IN_SET(`id`, (select CONCAT(",", popular, ",") from'.XS.'where id = 1))');
   return $this->d->efa();
}
function asm(){ // article sitemap
   $this->d->query('SELECT p.nama,p.date,p.slug FROM'.XP.'WHERE'.$this->publish.'ORDER BY date DESC LIMIT 20');
   return $this->d->efa();
}

}