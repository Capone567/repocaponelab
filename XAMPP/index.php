<?php
?>
<html>
    <body> <!-- Es buena práctica incluir el body -->
        <div id="resultado"></div>
    </body>
</html>
<script>
    async function cargar() {
    try {
        const res = await fetch("index1.php");
        const data = await res.json();

        const profesActivos = data.profesores.filter(profesor => profesor.estado == 'Activo');
        console.log(profesActivos);

        let str = "";

        data.estudiantes.forEach(estudiante => {
            str = str + estudiante.nombre + " " + estudiante.apellido + ":  <br>";
            estudiante.calificaciones.forEach( calificacion =>{
                str = str + calificacion.materia_codigo +  "Nota: " + calificacion.promedio_parcial + "<br>";
                })
            })
        document.getElementById("resultado").innerHTML = str;

        let alumnosRiesgoAusencias = data.estudiantes.filter(estudiante => ((estudiante.asistencia.dias_lectivos * 0.90) > estudiante.asistencia.presente))
        let alumnosRiesgoNotas = data.estudiantes.filter(estudiante => {
            let sumaNotas = 0;
            let materias = 0;
            estudiante.calificaciones.forEach(calificacion => {
                sumaNotas += calificacion.promedio_parcial;
                materias++;
            });
            let promedio = (sumaNotas/materias);

            return promedio < 7;
        })

        console.log(alumnosRiesgoNotas);
        console.log(alumnosRiesgoAusencias);
    
        }
        
     catch(error){
        console.error(error);
        }
    

    }

    cargar();


</script>

    1. Filtro de Profesores Activos
    2. Boletín de Calificaciones por Estudiante
    3. Alumnos en Riesgo (Asistencia < 90% o Nota < 7)
    4. Registrar Asistencia (Modificación Local)
    5. Carga de Nuevas Notas y Recálculo de Promedio
    6. Buscador de Horarios por Profesor
    7. Detalle de Curso Completo con Tutor
    8. Asignación de Recursos (> 40 Personas)
    9. Cálculo de Carga Horaria Total por Curso
    10. Renderizado en HTML (Tabla Dinámica)


