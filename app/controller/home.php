<?php

class Home extends SENE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
      $data = array();

      $this->setTitle('Typography BS5');
      $this->setDescription("Typography BS5 from Seme Framework.");
      $this->setKeyword('Seme Framework');
      $this->setAuthor('Seme Framework');

      $this->putThemeContent("home/home",$data); //pass data to view
      $this->loadLayout("col-1",$data);
      $this->render();
    }
}
