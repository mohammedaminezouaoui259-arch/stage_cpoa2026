<?php

namespace App\Imports;

use App\Models\CourrierDepart;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithValidation;

class CourrierDepartImport implements ToModel, WithHeadingRow, WithMultipleSheets, WithValidation
{
    public function model(array $row)
    {
        \Log::info('Row data:', $row);

        return new CourrierDepart([
            'numero' => $row['numero'] ?? null,
            'annee' => $row['annee'] ?? null,
            'objet' => $row['objet'] ?? null,
            'type' => $row['type'] ?? null,
            'date_depart' => $row['date_depart'] ?? null,
            'destinataire_externe' => $row['destinataire_externe'] ?? null,
            'mode_envoi' => $row['mode_envoi'] ?? null,
            'description' => $row['description'] ?? null,
            'nombre_pieces' => $row['nombre_pieces'] ?? null,
            'observations' => $row['observations'] ?? null,
            'nature_id' => $row['nature_id'] ?? null,
            'courrier_arrive_id' => $row['courrier_arrive_id'] ?? null,
            'user_id' => 1,
            'status_id' => 1,
        ]);
    }

    public function rules(): array
    {
        return [
            'numero' => 'required',
            'annee' => 'required|integer',
            'objet' => 'required',
            'date_depart' => 'required|date',
            'destinataire_externe' => 'required',
            'mode_envoi' => 'required',
            'nature_id' => 'required',
            'type' => 'nullable',
            'nombre_pieces' => 'nullable',
            'courrier_arrive_id' => 'nullable',
        ];
    }

    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }
}
