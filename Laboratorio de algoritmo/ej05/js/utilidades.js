const opciones = document.querySelectorAll('.grupo1');

opciones.forEach(radio => {
    radio.addEventListener('change', (e) => {
        if (e.target.checked) {
            alert(e.target.value);
        }
    });
});