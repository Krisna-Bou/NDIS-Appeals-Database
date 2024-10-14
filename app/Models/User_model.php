<?php

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class User_model extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'uid';
    protected $useAutoIncrement = true;

    public function login($email, $password)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->where('email', $email);
        $query = $builder->get();
        $result = $query->getRowArray();
        if ($result == NULL) {
            return false;
        }
        if ($password == $result['password']) {
            return true;
        }
        return false;
    }

    public function new_user($email, $name, $password)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $data = [
            'email' => $email,
            'name' => $name,
            'password' => $password,
        ];
        return $builder->insert($data);
    }

    public function set_session($email) {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('uid, name');
        $builder->where('email', $email);
        $results = $builder->get()->getResultArray();
        return $results;
    }
}