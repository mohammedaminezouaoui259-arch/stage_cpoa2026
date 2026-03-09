<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courrier extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'type',
        'objet',
        'description',
        'date_courrier',
        'expediteur',
        'destinataire',
        'fichier',
        'status_id',
        'user_id',
    ];

    /* =====================
       RELATIONS
    ====================== */

    // 🔹 Courrier appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 🔹 Courrier appartient à un status
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    // 🔹 Courrier peut avoir plusieurs affectations
    public function affectations()
    {
        return $this->hasMany(Affectation::class);
    }

    // 🔹 Courrier peut avoir plusieurs traitements
    public function traitements()
    {
        return $this->hasMany(Traitement::class);
    }

    // 🔹 Courrier peut avoir une archive
    public function archive()
    {
        return $this->hasOne(Archive::class);
    }
}
