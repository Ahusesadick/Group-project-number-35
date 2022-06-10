<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'reports';
    protected $primaryKey = 'id';
    protected $fillable = [
          'Sname',
            'RegNo',
           'programe',
           'date_reported',
           'date_finished',
            'day_attend',
           'day_missing',
           'Org_name',
            'Attitude',
            'organizes',
            'panctual',
           'resourcefulness',
           'accuracy',
           'adapts',
            'has_ability_to_get_along_with_others_work',
           'Follows_upon_assignments',
            'ability_to_communicate_with_supervisor',
           'ability_to_apply_theory_in_practice',
           'ability_to_judge',
            'Adherence_to_general_code_of_conduct',
            'comments',
            'name',
            'designation',
            'contact',
            'email',
           'date',
           'signature',
    ];
}
