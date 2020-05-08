<?php 
// class post

class mp {private $db;private $publish = 'stat LIKE 1';public function __construct(){$this->db=new DB;}

public function as($slug){ //article_single
   $this->db->query('SELECT p.nama,p.des,p.auth,p.date,p.cont,p.cats,p.slug FROM'.XP.'WHERE slug=:slug AND '.$this->publish);
   $this->db->bind('slug',$slug);
   return $this->db->ef();
}

public function ac(){ // article count
   $this->db->query('SELECT count(nama) FROM'.XP.'WHERE '.$this->publish);
   return $this->db->efc();
}

public function aa($os){ // article all
   
   $this->db->query('SELECT * FROM'.XP.'WHERE '.$this->publish.' ORDER BY date DESC LIMIT '.PL.' OFFSET '.$os);
   return $this->db->efa();
}

public function aabc($name,$offset){ // article all by cats
   $this->db->query('SELECT p.nama,p.des,p.auth,p.date,p.cont,p.cats,p.slug from'.XP.'p left join'.XC.'c on c.slug = p.cats WHERE c.slug = :name and p.'.$this->publish.' ORDER BY date DESC LIMIT '.PL.' OFFSET '.$offset);
   $this->db->bind('name',$name);
   return $this->db->efa();
}
public function acbc($name){ // article count by cats
   $this->db->query('SELECT count(p.nama) from'.XP.'p left join'.XC.'c on c.slug = p.cats WHERE c.slug = :name and p.'.$this->publish);
   $this->db->bind('name',$name);
   return $this->db->efc();
}

public function ap(){ // article popular
   $this->db->query('select id,name,slug,cont from'.XP.'WHERE FIND_IN_SET(`id`, (select CONCAT(",", popular, ",") from'.XS.'where id = 1))');
   return $this->db->efa();
   }

public function asm(){ // article sitemap
   $this->db->query('SELECT p.nama,p.date,p.slug FROM'.XP.'WHERE '.$this->publish.' ORDER BY date DESC LIMIT 20');
   return $this->db->efa();
}

}