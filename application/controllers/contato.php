<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'B.Canton | Gestão de MKT e Desenvolvimento Imobiliário';
        $data['description'] = 'Marketing Online e Offline - Desenvolvimento de produto - Gestao de equipe de vendas - Eventos Corporativos - Desenvolvimento de Sites e Aplicativos - Campanhas publicitárias - Diagramação de materiais impressos';
        $data['keywords'] = '#';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $empresa = $this->input->post('empresa');
            $assunto = utf8_decode('Contato enviado pelo site www.bcanton.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@bcanton.com.br","B.Canton");
            $this->email->to('contato@bcanton.com.br');
            $this->email->cc('paulobaronista@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome: {$nome}<br/>
                E-mail: {$email}<br/>
                    Telefone/Celular: {$telefone}<br/>
                        Agência/Empresa: {$empresa}<br/>
                                </body></html>");

            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }

        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'B.Canton | Gestão de MKT e Desenvolvimento Imobiliário';
        $data['description'] = 'Marketing Online e Offline - Desenvolvimento de produto - Gestao de equipe de vendas - Eventos Corporativos - Desenvolvimento de Sites e Aplicativos - Campanhas publicitárias - Diagramação de materiais impressos';
        $data['keywords'] = '#';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'B.Canton | Gestão de MKT e Desenvolvimento Imobiliário';
        $data['description'] = 'Marketing Online e Offline - Desenvolvimento de produto - Gestao de equipe de vendas - Eventos Corporativos - Desenvolvimento de Sites e Aplicativos - Campanhas publicitárias - Diagramação de materiais impressos';
        $data['keywords'] = '#';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */
