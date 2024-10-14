<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Case_model;

class Record extends Controller
{
  public function index()
  {    
    $data['error'] = ""; 
    echo view('template/header');
    echo view('template/pro-bono-header');
    echo view('record', $data);
    echo view('template/footer');
  }

  public function check_record()
    {
        $error['error'] = "<div class=\"alert alert-danger\" role=\"alert\"> Sorry, ensure all essential fields are marked</div> ";
        $email = $this->request->getPost('email');
        $firstName = $this->request->getPost('firstName');
        $lastName = $this->request->getPost('lastName');
        $password = $this->request->getPost('password');
        $model = model('App\Models\Case_model');

        $validationRules = [
            'firstname' => 'required|alpha_numeric_space',
            'lastName' => 'required|alpha_numeric_space',
            'email' => 'required|is_unique[users.email]',
            'password' => 'required|min_length[8]',
        ];
        if ($this->validate($validationRules)) {
            $model->new_user($email, $firstName, $lastName, $new_pass);
            # Create a session 
            $session = session();
            $session->set('firstName', $firstName);
            $session->set('lastName', $lastName);
            $session->set('email',$email);
            $token = md5(uniqid());
            $session->set('token', $token);
            $data = $model->get_user($email);
            foreach ($data as $row) {
                $session->set('uid',$row['uid']);
            }
            return redirect()->to(base_url());
        } else {
            echo view('template/header');
            echo view('register', $error);
            echo view('template/footer');
        }
    }
}