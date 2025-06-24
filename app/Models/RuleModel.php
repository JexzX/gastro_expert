<?php
namespace App\Models;

use CodeIgniter\Model;

class RuleModel extends Model
{
    protected $table = 'rules';
    protected $primaryKey = 'id';
    protected $allowedFields = ['disease_code', 'symptom_code', 'weight'];

    public function getAllRules()
    {
        return $this->select('rules.*, diseases.name as disease_name, symptoms.name as symptom_name')
                    ->join('diseases', 'diseases.code = rules.disease_code')
                    ->join('symptoms', 'symptoms.code = rules.symptom_code')
                    ->findAll();
    }
}