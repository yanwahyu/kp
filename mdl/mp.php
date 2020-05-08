<?php 
// class post

class mp {private $db;private $publish = 'stat LIKE "publish"';public function __construct(){$this->db=new DB;}

public function as($slug){ //article_single
   $this->db->query('SELECT p.tags,p.nama,p.des,p.auth,p.date,p.cont,p.cats,p.slug FROM'.XP.'WHERE slug=:slug AND '.$this->publish);
   $this->db->bind('slug',$slug);
   return $this->db->ef();
}

public function ac(){ // article count
   $this->db->query('SELECT count(nama) FROM'.XP.'WHERE '.$this->publish);
   return $this->db->efc();
}

public function aa($offset){ // article all
   $this->db->query('SELECT * FROM'.XP.'WHERE '.$this->publish.' ORDER BY date DESC LIMIT '.PL.' OFFSET '.$offset);
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

public function aabt($id,$offset){ // aticle all by tags
   $this->db->query('SELECT p.id,nama,slug,cats,tags,auth,date,cont,desc FROM'.XP.'p INNER JOIN'.XPT.'pt ON p.id = pt.postId WHERE pt.tagsId = :id AND '.$this->publish);
   $this->db->bind('id',$id);
   return $this->db->efa();
}

public function acbt($name){ // article count by tags
   $this->db->query('SELECT count(pt.id) as pTotal,t.id as tId  FROM'.XPT.'pt INNER JOIN'.XT.'t ON pt.tagsId = t.id WHERE t.t_slug = :name');
   $this->db->bind('name',$name);
   return $this->db->ef();
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