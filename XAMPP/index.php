<?php

?>
<html>
    <div id= "resultado"></div>
</html>
<script>
    
    async function cargar() {
        try {
            const response = await fetch('index1.php');
            const data = await response.json();
            console.log(data);
            let profesorAct = 0;

            const activo = data.profesores.filter(profesor => profesor.estado == 'Activo');
            //console.log(activo);
            let str = "";
            const boletin = data.estudiantes.forEach(estudiante => {
                let nombre = estudiante.nombre
                str += `<br>${nombre}: <br>`;
                
                estudiante.calificaciones.forEach(materia => {
                        let nombre_mat = materia.materia_codigo; 
                        let nota = materia.promedio_parcial;
                        let str2 = `${nombre_mat}: ${nota}`
                        str += `<br>${str2}`
                    });
                            
            });
            //document.getElementById("resultado").innerHTML = str;
            str = ""
            const alumnosRiesgo = data.estudiantes.forEach(estudiante => {
                    var aprobado = false;
                    
                    let notas = 0;
                    estudiante.calificaciones.forEach(calificacion =>{
                        notas += calificacion.promedio_parcial;
                    })
                    if (notas/3 < 7)
                        aprobado = false;
                    else
                        aprobado = true
                    if (estudiante.asistencia.presente < ((estudiante.ciclo_lectivo * 90) / 100) || aprobado == false) {
                        str = `<br>${estudiante.nombre} esta en riesgo por tener menos del 90% de asistencia o tiene menos de 7`
                    }

            })
            //document.getElementById("resultado").innerHTML = str;


            data.estudiante.asistencia.forEach(registro =>{
                registro.presente += 1;
                console.log(registro.presente)
            })
            

        } catch (error) {
            
            console.error('Error al obtener los datos:', error);
        }
    }
    cargar();
</script>