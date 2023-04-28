<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public array $estudiantes = [
        ["nombre" => "Ana García",
            "correo" => "ana.garcia@example.com",
            "edad" => 22,
            "ciudad" => "Madrid"],
        ["nombre" => "Juan Pérez",
            "correo" => "juan.perez@example.com",
            "edad" => 21,
            "ciudad" => "Barcelona"],
        ["nombre" => "Sofía Martínez",
            "correo" => "sofia.martinez@example.com",
            "edad" => 23,
            "ciudad" => "Sevilla"],
        [
            "nombre" => "Diego Hernández",
            "correo" => "diego.hernandez@example.com",
            "edad" => 20,
            "ciudad" => "Valencia"],
        ["nombre" => "Gabriela Torres",
            "correo" => "gabriela.torres@example.com",
            "edad" => 24,
            "ciudad" => "Bilbao"]
    ];

    public function searchWhereId(): array
    {
        return [
            'mensaje' => 'estudiante',
            'data' => $this->estudiantes
        ];
    }

    public function store(): array
    {
        return [
            'mensaje' => 'recurso creado exitosamente',
            'data'=> $this->estudiantes[2]
        ];
    }
}
