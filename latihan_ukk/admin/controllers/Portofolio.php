<?php

class Portofolio extends Controller
{
    public function index()
    {
        $data['profile'] = $this->model('portofolioModel');

        $this->view('portofolio/index',$data); 
    }
}