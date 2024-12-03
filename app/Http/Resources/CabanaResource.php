<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CabanaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'nivel' => $this->convertNivelIdToLetter($this->nivel_id), // Convertir el nivel_id a letra
            'aforo' => $this->aforo,

        ];
    }

    /**
     * Convertir nivel_id a su representación en letra.
     *
     * @param  int  $nivelId
     * @return string
     */
    private function convertNivelIdToLetter($nivel_id)
    {
        switch ($nivel_id) {
            case 1:
                return 'A';
            case 2:
                return 'B';
            case 3:
                return 'C';
            case 4:
                return 'D';
            case 5:
                return 'E';
            case 6:
                return 'F';

            default:
                return 'Desconocido'; // Valor por defecto si no coincide
        }
    }
}
