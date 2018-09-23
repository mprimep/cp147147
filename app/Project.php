<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //for mass assignable
    protected $fillable = [
        'commune',
        'douars',
        'liaison',
        'cout',
        'longueur',
        'nb_ouvrages',
        'type_d_intervention',
        'programme',
        'sous_programme',
        'etat_d_avancement',
        'annee_de_l_operation'
];
    
}
