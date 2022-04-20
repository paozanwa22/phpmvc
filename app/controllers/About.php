<?php 

class About extends Controller {
    public function index($nama='paozan', $hoby='quirkyalone'){
        $data['nama'] = $nama;
        $data['hoby'] = $hoby;
        $data['judul'] = 'about';


        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = 'about page';

        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}