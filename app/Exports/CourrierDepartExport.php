<?php

namespace App\Exports;

use App\Models\CourrierDepart;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CourrierDepartExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return CourrierDepart::orderBy('id', 'desc')->get()->map(function ($c) {
            return [
                'Numéro' => $c->numero,
                'Année' => $c->annee,
                'Objet' => $c->objet,
                'Date départ' => $c->date_depart,
                'Destinataire' => $c->destinataire_externe,
                'Statut' => $c->status_id == 1 ? 'Draft' : 'Validé',
            ];
        });
    }

    public function headings(): array
    {
        return ['Numéro', 'Année', 'Objet', 'Date départ', 'Destinataire', 'Statut'];
    }
}
