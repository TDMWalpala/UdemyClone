<?php

class Home extends Controller{
    public function index()
    {
        $data['title'] = "Home";
        $this->view('home',$data);
    } 
    
    public function edit()
    {
        echo "Homepage editing ";
    } 

    public function delete()
    {
        echo "Homepage delete ";
    } 
}