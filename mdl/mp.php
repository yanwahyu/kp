<?php class mp {private$d;private$publish=' stat LIKE 1 ';function __construct(){$this->d=new DB;}
function as($s){ //article_single
   $this->d->query('SELECT p.id,p.nama,p.des,p.auth,p.date,p.cont,p.cats,p.slug FROM'.XP.'WHERE slug=:s AND'.$this->publish);
   $this->d->b('s',$s);
   return $this->d->ef();
}
function aa($o){ // article count && show all
   $this->d->query('SELECT count(nama) FROM'.XP.'WHERE'.$this->publish);
   $a['a'] = $this->d->efc();
   $this->d->query('SELECT p.id,p.nama,p.des,p.auth,p.date,p.cont,p.cats,p.slug FROM'.XP.'WHERE'.$this->publish.'ORDER BY date DESC LIMIT '.PL.' OFFSET '.$o);
   $a['b'] = $this->d->efa();
   return $a;
}

function aabc($s,$o){ // article all by cats
   $this->d->query('SELECT count(p.id) from'.XP.'p left join'.XC.'c on c.slug = p.cats WHERE c.slug = :s and p.'.$this->publish);
   $this->d->b('s',$s);
   $a['a']= $this->d->efc();
   $this->d->query('SELECT p.nama,p.des,p.auth,p.date,p.cont,p.cats,p.slug from'.XP.'p left join'.XC.'c on c.slug = p.cats WHERE c.slug = :s and p.'.$this->publish.'ORDER BY date DESC LIMIT '.PL.' OFFSET '.$o);
   $this->d->b('s',$s);
   $a['b']=  $this->d->efa();
   return $a;
}
function abd($n,$o){ // article by default ** count & get article **
   $this->d->query('SELECT count(p.id) from'.XP.'p left join'.XC.'c on c.slug = p.cats WHERE c.slug IN ("'.$n.'") and p.'.$this->publish);
   $a['a']= $this->d->efc();
   $this->d->query('SELECT p.nama,p.des,p.auth,p.date,p.cont,p.cats,p.slug from'.XP.'p left join'.XC.'c on c.slug = p.cats WHERE c.slug IN ("'.$n.'") and p.'.$this->publish.'ORDER BY date DESC LIMIT '.PL.' OFFSET '.$o);
   $a['b']= $this->d->efa();
   return $a;
}
function asm(){ // article sitemap
   $this->d->query('SELECT p.nama,p.date,p.slug FROM'.XP.'WHERE'.$this->publish.'ORDER BY date DESC LIMIT 20');
   return $this->d->efa();
}
function acd($s){ // article category default
   $this->d->query('SELECT slug FROM'.XC.',(SELECT def FROM'.XC.'WHERE slug=:s) AS f WHERE'.XC.'.id=f.def');
   $this->d->b('s',$s);
   return $this->d->efc();
}
function cd(){ // category default
   $this->d->query('SELECT slug,id,des FROM'.XC.'WHERE def=0');
   $r=$this->d->efa();
   foreach($r as$k=>$v){$d['s'][$k]=$v['slug'];$d['d'][$v['slug']]=$v['des'];$d['id'][$v['slug']]=$v['id'];}
   return$d;
}
function cbd($d){ // category by default category
   $this->d->query('SELECT slug FROM'.XC.'WHERE def=:d');
   $this->d->b('d',$d);
   return $this->d->efa();
}
function cabp($s){ // category all by parrent
   $this->d->query('SELECT slug FROM'.XC.',(SELECT def FROM'.XC.'WHERE slug=:s) AS f WHERE'.XC.'.def=f.def');
   $this->d->b('s',$s);
   return $this->d->efa();
}
function rpbt($n){ // related post by tags
   $this->d->query('SELECT DISTINCT pid FROM'.XPT.',(SELECT tid,id FROM'.XPT.'WHERE pid=:n) as f WHERE'.XPT.'.tid=f.tid AND '.XPT.'.id<f.id OR '.XPT.'.id>f.id AND'.XPT.'.pid!=:n LIMIT 0');
   $this->d->b('n',$n);
   $r=$this->d->efa();
   if (!empty($r)){
      for($i=0;$i<count($r);$i++){$f[$i]=$r[$i]['pid'];} // looping subcategory
      $this->d->query('SELECT p.nama,p.cats,p.slug FROM'.XP.'WHERE id IN ("'.implode('","',$f).'") AND '.$this->publish.'');
      return $this->d->efa();
   }
   
}
}