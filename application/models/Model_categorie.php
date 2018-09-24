<?php 
class Model_Categorie extends CI_Model
{
    public function getAllCategories()
    {
        // On écrit notre requête SQL
        $query = $this->db->query('select idCateg, nomCateg from categorie');
        return $query->result();
    }
}

?>
