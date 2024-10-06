<?php

namespace App\Service;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table border="1">';
        
        // Première ligne de l'entête vide
        $html .= '<tr>';
            for ($i = 0; $i <= 10; $i++) {
                $html .= "<th></th>";
            }

        $html .= '</tr>';

        // Deuxième ligne de l'entête (0 à 10)
        $html .= '<tr><th>0</th>';
        for ($i = 1; $i <= 10; $i++) {
            $html .= "<th>$i</th>";
        }
        $html .= '</tr>';

        // Génération des lignes du tableau
        for ($i = 1; $i <= 10; $i++) {
            $html .= "<tr><th>$i</th>"; // Colonne des entêtes (0 à 10)
            for ($j = 1; $j <= 10; $j++) {
                if ($i == $j) {
                    $html .= '<td>X</td>';
                } else {
                    $html .= '<td>' . ($i * $j) . '</td>';
                }
            }
            $html .= '</tr>';
        }

        $html .= '</table>';

        return $html;
    }
}
