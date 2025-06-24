<?php
namespace App\Models;

use CodeIgniter\Model;

class SymptomModel extends Model
{
    protected $table = 'symptoms';
    protected $primaryKey = 'id';
    protected $allowedFields = ['code', 'name'];
}