<?php

class Portofolio extends Controller
{
    public function index()
    {
        $data['profile'] = $this->model('portofolioModel');

        $this->view('portofolio/index',$data); 
    }
    public function pesan()
    {
       if ( $this->model('PortofolioModel')->tampungPesan($_POST) > 0) {
            echo "
            <script>
            alert('Data berhasil dikirim')
            window.location.href= 'http://localhost/latihan_ukk/public/'
            </script>      
            ";
            
        }
        else{
            echo "gagal terkirim
            window.location.href= 'http://localhost/latihan_ukk/public/'
            ";
        }   
    }
}
