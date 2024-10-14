<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Case_model;

class Cases extends Controller
{
  public function index()
  {    
    $model = new Case_model(); 
    $data['cases'] = $model->get_cases();  
    
    echo view('template/header');
    echo view('template/pro-bono-header');
    echo view('cases', $data);
    echo view('template/footer');
  }

  public function view_case($cid)
  {    
    $model = new Case_model(); 
    $data['case'] = $model->get_case($cid);  
    echo view('template/header');
    echo view('template/pro-bono-header');
    echo view('case', $data);
    echo view('template/footer');
  }
}