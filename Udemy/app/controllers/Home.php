<?php

class Home{
    public function index($id)
    {
        echo "Homepage view ".$id;
    } 
    
    public function edit($id)
    {
        echo "Homepage editing ".$id;
    } 

    public function delete($id)
    {
        echo "Homepage delete ".$id;
    } 
}