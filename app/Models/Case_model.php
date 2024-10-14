<?php 

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model; 

class Case_model extends Model
{
    protected $table = 'cases';
    protected $primaryKey = 'cid';
    protected $useAutoIncrement = true;

    public function get_cases() {
        $db = \Config\Database::connect();
        $temp = $db->table('cases')->select('cid, decisionDate, citation, location, applicantGender, applicantAge, applicantImpairment, decisionIssue, decisionType')->where('status','Completed')->get()->getResultArray();
        
        // Mapping column names to human-readable ones
        $data = array_map(function($row) {
            return [
                'cid'                 => $row['cid'],
                'Date'                => $row['decisionDate'],
                'Citation'            => $row['citation'],
                'State'               => $row['location'],
                'Gender'              => $row['applicantGender'],
                'Age'                 => $row['applicantAge'],
                'Impairment'          => $row['applicantImpairment'],
                'Issue'               => $row['decisionIssue'],
                'Decision'            => $row['decisionType']
            ];
        }, $temp);
        return $data;
    }

    public function get_case($cid) {
        $db = \Config\Database::connect();
        $data = $db->table('cases')->where('cid',$cid)->get()->getResultArray();
        return $data;
    }

    public function net_case($cid) {
        $db = \Config\Database::connect();
        $data = $db->table('cases')->where('cid',$cid)->get()->getResultArray();
        return $data;
    }
}