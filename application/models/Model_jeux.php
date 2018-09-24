<?php
class Model_jeux extends CI_Model
{
    public function getAllJeuxByIdCateg($id)
    {
        $query = $this->db->query('select idJeux, nomJeux from jeux where numCateg = '.$id);
        return $query->result();
    }
}
?>