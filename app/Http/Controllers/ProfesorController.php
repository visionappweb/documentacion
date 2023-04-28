<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public array $profesores = [
        [
            "nombre" => "María Sánchez",
            "correo" => "maria.sanchez@ejemplo.com",
            "edad" => 45,
            "ciudad" => "Madrid",
            "especialidad" => "Matemáticas"
        ],
        ["nombre" => "Juan Pérez",
            "correo" => "juan.perez@ejemplo.com",
            "edad" => 52,
            "ciudad" => "Barcelona",
            "especialidad" => "Historia"
        ],
        [
            "nombre" => "Ana García",
            "correo" => "ana.garcia@ejemplo.com",
            "edad" => 37,
            "ciudad" => "Sevilla",
            "especialidad" => "Literatura"
        ],
        [
            "nombre" => "Pedro Rodríguez",
            "correo" => "pedro.rodriguez@ejemplo.com",
            "edad" => 41,
            "ciudad" => "Valencia",
            "especialidad" => "Física"
        ],
        [
            "nombre" => "Laura Torres",
            "correo" => "laura.torres@ejemplo.com",
            "edad" => 39,
            "ciudad" => "Bilbao",
            "especialidad" => "Inglés"
        ]
    ];

    public
    function searchWhereId(): array
    {
        return [
            'mensaje' => 'profesor',
            'data' => $this->profesores[1]
        ];
    }

    public
    function store(): array
    {
        return [
            'mensaje' => 'recurso creado exitosamente',
            'data' => $this->profesores[2]
        ];
    }
}
