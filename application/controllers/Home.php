<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model("Model_categorie");
        $data['lesCateg'] = $this->Model_categorie->getAllCategories();
        $this->load->view("index", $data);
    }

    public function AfficherLesJeux()
    {
        // $this->load->model('Model_jeux');
        // $data['lesJeux'] = $this->Model_jeux->getAllJeuxByIdCateg($_GET['nomCateg']);
        // $this->load->view("view_jeux", $data);

        $id = $this->uri->segment(3);
        $this->load->model('Model_jeux');
        $data['lesJeux'] = $this->Model_jeux->getAllJeuxByIdCateg($id);
        $this->load->view("view_jeux", $data
    }
}
?>