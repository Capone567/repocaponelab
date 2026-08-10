let tareas = JSON.parse(localStorage.getItem("tareas")) || [];
const lista = document.getElementById("lista");
const tareaInput = document.getElementById("tareaInput");
const btnAgregar = document.getElementById("btnAgregar");

// 1. RENDERIZAR (Modificado para incluir el botón eliminar)
function renderizar() {
  lista.innerHTML = ""; 
  
  tareas.forEach((t, index) => {
    const li = document.createElement("li");
    li.textContent = t.texto; 

    // Creamos el botón de eliminar para cada tarea
    const btnEliminar = document.createElement("button");
    btnEliminar.textContent = "Eliminar";
    btnEliminar.className = "btn-eliminar";
    
    // Le asignamos la función de borrar usando su índice (posición en el array)
    btnEliminar.onclick = function() {
      eliminarTarea(index);
    };

    li.appendChild(btnEliminar);
    lista.appendChild(li);
  });
}

// 2. AGREGAR TAREA
btnAgregar.addEventListener("click", () => {
  const texto = tareaInput.value.trim();
  if (texto === "") return; // Evita agregar tareas vacías

  tareas.push({ texto: texto }); // Guardamos como objeto por si luego quieres añadir "completada: true/false"
  guardarYActualizar();
  tareaInput.value = ""; // Limpiamos el input
});

// 3. ELIMINAR TAREA
function eliminarTarea(index) {
  tareas.splice(index, 1); // Quita 1 elemento en la posición 'index'
  guardarYActualizar();
}

// 4. GUARDAR EN LOCALSTORAGE Y RENDERIZAR
function guardarYActualizar() {
  localStorage.setItem("tareas", JSON.stringify(tareas));
  renderizar();
}

// Renderizar al cargar la página por primera vez
renderizar();