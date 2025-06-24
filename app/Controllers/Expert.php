<?php
namespace App\Controllers;

use App\Models\RuleModel;
use CodeIgniter\Controller;

class Expert extends Controller
{
    public function index()
    {
        $ruleModel = new RuleModel();
        $data['rules'] = $ruleModel->getAllRules();
        return view('expert_rules', $data);
    }
}