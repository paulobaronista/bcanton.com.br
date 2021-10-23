<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'B.Canton | Gestão de MKT e Desenvolvimento Imobiliário';
        $data['description'] = 'Marketing Online e Offline - Desenvolvimento de produto - Gestao de equipe de vendas - Eventos Corporativos - Desenvolvimento de Sites e Aplicativos - Campanhas publicitárias - Diagramação de materiais impressos';
        $data['keywords'] = '#';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade() {
        $data['title'] = 'B.Canton | Gestão de MKT e Desenvolvimento Imobiliário';
        $data['description'] = 'Marketing Online e Offline - Desenvolvimento de produto - Gestao de equipe de vendas - Eventos Corporativos - Desenvolvimento de Sites e Aplicativos - Campanhas publicitárias - Diagramação de materiais impressos';
        $data['keywords'] = '#';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/home.php */
