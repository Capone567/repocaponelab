<?php

// Encabezado para indicarle al cliente (Postman, navegador, frontend) que la respuesta es un JSON
header('Content-Type: application/json; charset=utf-8');

$datosEscuela = [
    'escuela' => [
        'id' => 'ESC-2026-001',
        'nombre' => 'Instituto Educativo San Martín',
        'tipo' => 'Privado Subvencionado',
        'fundacion' => 1985,
        'contacto' => [
            'telefono' => '+54 11 4555-0199',
            'email' => 'contacto@sanmartin.edu.ar',
            'sitio_web' => 'https://www.sanmartin.edu.ar',
            'direccion' => [
                'calle' => 'Av. Belgrano',
                'numero' => 1240,
                'ciudad' => 'Buenos Aires',
                'codigo_postal' => 'C1093AAA',
                'pais' => 'Argentina',
            ],
        ],
        'directorio' => [
            'director' => 'Dr. Roberto Gómez',
            'vicedirectora' => 'Lic. Marta Fernández',
            'secretario' => 'Carlos Benítez',
        ],
    ],
    'periodo_lectivo' => [
        'anio' => 2026,
        'semestre_actual' => 1,
        'inicio' => '2026-03-02',
        'fin' => '2026-12-18',
    ],
    'departamentos' => [
        [
            'id' => 'DEP-MAT',
            'nombre' => 'Matemáticas y Ciencias Exactas',
            'jefe_departamento' => 'PROF-001',
        ],
        [
            'id' => 'DEP-LEN',
            'nombre' => 'Lengua y Literatura',
            'jefe_departamento' => 'PROF-002',
        ],
        [
            'id' => 'DEP-NAT',
            'nombre' => 'Ciencias Naturales',
            'jefe_departamento' => 'PROF-003',
        ],
    ],
    'profesores' => [
        [
            'id' => 'PROF-001',
            'nombre' => 'Ricardo',
            'apellido' => 'Darín',
            'email' => 'r.darin@sanmartin.edu.ar',
            'telefono' => '+54 11 5555-0101',
            'especialidad' => 'Matemáticas',
            'materias_asignadas' => ['MAT-5A', 'FIS-5A'],
            'estado' => 'Activo',
        ],
        [
            'id' => 'PROF-002',
            'nombre' => 'Elena',
            'apellido' => 'Santi',
            'email' => 'e.santi@sanmartin.edu.ar',
            'telefono' => '+54 11 5555-0102',
            'especialidad' => 'Literatura',
            'materias_asignadas' => ['LEN-5A', 'LEN-4B'],
            'estado' => 'Activo',
        ],
        [
            'id' => 'PROF-003',
            'nombre' => 'Mariana',
            'apellido' => 'Torres',
            'email' => 'm.torres@sanmartin.edu.ar',
            'telefono' => '+54 11 5555-0103',
            'especialidad' => 'Biología',
            'materias_asignadas' => ['BIO-5A'],
            'estado' => 'Licencia',
        ],
    ],
    'cursos' => [
        [
            'id' => 'CURSO-5A',
            'nombre' => '5to Año A',
            'nivel' => 'Secundario',
            'turno' => 'Mañana',
            'aula' => 'Aula 12 - Planta Alta',
            'tutor_id' => 'PROF-001',
            'materias' => [
                [
                    'codigo' => 'MAT-5A',
                    'nombre' => 'Matemática Avanzada',
                    'profesor_id' => 'PROF-001',
                    'carga_horaria_semanal' => 5,
                    'horario' => 'Lunes y Miércoles 08:00 - 10:00',
                ],
                [
                    'codigo' => 'LEN-5A',
                    'nombre' => 'Lengua y Literatura V',
                    'profesor_id' => 'PROF-002',
                    'carga_horaria_semanal' => 4,
                    'horario' => 'Martes y Jueves 10:15 - 12:15',
                ],
                [
                    'codigo' => 'BIO-5A',
                    'nombre' => 'Biología Celular',
                    'profesor_id' => 'PROF-003',
                    'carga_horaria_semanal' => 3,
                    'horario' => 'Viernes 08:00 - 11:00',
                ],
            ],
        ],
    ],
    'estudiantes' => [
        [
            'id' => 'EST-2026-001',
            'documento' => '45123890',
            'nombre' => 'Lucas',
            'apellido' => 'González',
            'fecha_nacimiento' => '2008-05-14',
            'genero' => 'Masculino',
            'curso_id' => 'CURSO-5A',
            'estado' => 'Regular',
            'contactos_emergencia' => [
                [
                    'nombre' => 'María González',
                    'relacion' => 'Madre',
                    'telefono' => '+54 11 6666-1001',
                ],
            ],
            'asistencia' => [
                'dias_lectivos' => 90,
                'presente' => 85,
                'ausente' => 3,
                'tardanzas' => 2,
            ],
            'calificaciones' => [
                [
                    'materia_codigo' => 'MAT-5A',
                    'notas' => [8.5, 9.0, 7.5],
                    'promedio_parcial' => 8.33,
                    'estado' => 'Aprobado',
                ],
                [
                    'materia_codigo' => 'LEN-5A',
                    'notas' => [10.0, 9.5],
                    'promedio_parcial' => 9.75,
                    'estado' => 'Aprobado',
                ],
                [
                    'materia_codigo' => 'BIO-5A',
                    'notas' => [6.0, 7.0],
                    'promedio_parcial' => 6.5,
                    'estado' => 'En Curso',
                ],
            ],
        ],
        [
            'id' => 'EST-2026-002',
            'documento' => '45890123',
            'nombre' => 'Sofia',
            'apellido' => 'Martínez',
            'fecha_nacimiento' => '2008-11-22',
            'genero' => 'Femenino',
            'curso_id' => 'CURSO-5A',
            'estado' => 'Regular',
            'contactos_emergencia' => [
                [
                    'nombre' => 'Jorge Martínez',
                    'relacion' => 'Padre',
                    'telefono' => '+54 11 6666-1002',
                ],
            ],
            'asistencia' => [
                'dias_lectivos' => 90,
                'presente' => 88,
                'ausente' => 1,
                'tardanzas' => 1,
            ],
            'calificaciones' => [
                [
                    'materia_codigo' => 'MAT-5A',
                    'notas' => [6.0, 6.5, 7.0],
                    'promedio_parcial' => 6.5,
                    'estado' => 'En Curso',
                ],
                [
                    'materia_codigo' => 'LEN-5A',
                    'notas' => [8.0, 8.5],
                    'promedio_parcial' => 8.25,
                    'estado' => 'Aprobado',
                ],
                [
                    'materia_codigo' => 'BIO-5A',
                    'notas' => [9.0, 9.5],
                    'promedio_parcial' => 9.25,
                    'estado' => 'Aprobado',
                ],
            ],
        ],
    ],
    'instalaciones' => [
        [
            'id' => 'LAB-01',
            'nombre' => 'Laboratorio de Química y Biología',
            'capacidad' => 30,
            'recursos' => ['Proyector', 'Microscopios', 'Mecheros Bunsen'],
        ],
        [
            'id' => 'BIB-01',
            'nombre' => 'Biblioteca Central',
            'capacidad' => 60,
            'recursos' => ['Computadoras', 'Zona de lectura', 'Impresora'],
        ],
    ],
];

// JSON_UNESCAPED_UNICODE: Mantiene las tildes y caracteres especiales sin codificar
echo json_encode($datosEscuela, JSON_UNESCAPED_UNICODE);

