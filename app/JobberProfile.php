<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobberProfile extends Model
{
    protected $fillable = [
        'jobber_id', 'jobber_category_id', 'diploma', 'diploma_name', 'experince', 'personal_description', 'certifie',
        'equipement1','equipement2','equipement3','equipement4','equipement5','equipement6','equipement7','equipement8','equipement9','equipement10','equipement11','equipement12','equipement13','equipement14','equipement15','equipement16',
        'eng1', 'eng2', 'eng3', 'eng4', 'eng5', 'eng6', 'eng7', 'eng8', 'eng9', 'eng10', 'eng11', 'eng12', 'eng13', 'eng14', 'eng15', 'eng16',
    ];
}
