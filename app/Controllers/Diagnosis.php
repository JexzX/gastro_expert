<?php
namespace App\Controllers;

use App\Models\SymptomModel;
use App\Models\RuleModel;
use CodeIgniter\Controller;

class Diagnosis extends Controller
{
    public function index()
    {
        $symptomModel = new SymptomModel();
        $data['symptoms'] = $symptomModel->findAll();
        return view('diagnosis_form', $data);
    }

    public function result()
    {
        $selectedSymptoms = $this->request->getPost('symptoms');
        $threshold = (float)$this->request->getPost('threshold');

        $ruleModel = new RuleModel();
        $rules = $ruleModel->findAll();

        $scores = [];
        foreach ($rules as $rule) {
            if (in_array($rule['symptom_code'], $selectedSymptoms)) {
                if (!isset($scores[$rule['disease_code']])) {
                    $scores[$rule['disease_code']] = 0;
                }
                $scores[$rule['disease_code']] += $rule['weight'];
            }
        }

        // tarik nama penyakity
        $db = \Config\Database::connect();
        $diseaseNames = [];
        $query = $db->query("SELECT code, name FROM diseases");
        foreach ($query->getResult() as $row) {
            $diseaseNames[$row->code] = $row->name;
        }

        // hasil akhir
        $results = [];
        foreach ($scores as $code => $score) {
            if ($score >= $threshold) {
                $results[] = [
                    'code' => $code,
                    'name' => $diseaseNames[$code],
                    'score' => round($score * 100, 2)
                ];
            }
        }

        $data['results'] = $results;
        return view('diagnosis_result', $data);
    }
}