<?php
class CtrlAccueil extends CI_Controller
{
    public function index()
    {
        $data['titre'] = "Les activités";
        $this->load->model("Model_Activite");
        $data['lesActivites'] = $this->Model_Activite->GetAllactivite();
        $this->load->view("v_accueil",$data);
    }
    public function AfficherLesFormations()
    {
        $lActivite = $this->uri->segment(3);
        $this->load->model("Model_Formation");
        //Appel de la méthode
        $data['lesFormations'] = $this->Model_Formation->GetAllFormationsByActivite($lActivite);
        //Appel de la vue
        $this->load->view("v_formation",$data);
    }
    
    public function AfficherLesAgents()
    {
        $lAgent = $this->uri->segment(3);
        $this->load->model("Model_Agent");
        //Appel de la méthode
        $data['lesAgents'] = $this->Model_Agent->GetAllAgents($lAgent);
        //Appel de la vue
        $this->load->view("v_agent",$data);
    }
}