<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CourrierDepartTemplateExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return collect([
            [
                'numero' => '001',
                'annee' => date('Y'),
                'objet' => 'Objet du courrier',
                'date_depart' => date('Y-m-d'),
                'destinataire_externe' => 'Nom du destinataire',
                'mode_envoi' => 'Poste',
                'nature_id' => '1',
                'type' => 'Officiel',
                'description' => 'Description optionnelle',
                'nombre_pieces' => '1',
                'observations' => 'Observations optionnelles',
                'courrier_arrive_id' => '',
            ],
        ]);
    }

    public function headings(): array
    {
        return [
            'numero',
            'annee',
            'objet',
            'date_depart',
            'destinataire_externe',
            'mode_envoi',
            'nature_id',
            'type',
            'description',
            'nombre_pieces',
            'observations',
            'courrier_arrive_id',
        ];
    }
}
