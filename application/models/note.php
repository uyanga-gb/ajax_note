<?php
class Note extends CI_Model {
     function get_all()
     {
         $query=$this->db->query("SELECT * FROM notes");
          return $query->result();
    }
    function create($post)
     {
        $this->db->query("INSERT INTO notes (title, created_at) VALUES (?,?, NOW())", array($post['title'])); 
              // return $this->db->query('SELECT * from notes WHERE id='.$id)->row();
     }
     function update($post)
     {
        if($this->input->post('title'))
        {
        $this->db->query("UPDATE notes SET title=?, description=? WHERE id=?", array($post['title'], $post['description'], $post['id']));
         }
     }
     function delete($post)
     {
        $this->db->query("DELETE FROM notes WHERE id=?", array($post['id']));
     }
}
?>