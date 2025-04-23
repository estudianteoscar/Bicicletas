document.addEventListener('DOMContentLoaded', () => {
    const formulario = document.querySelector('.formulario');
    const btnVolver = document.querySelector('.btn-volver');

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Capturar valores
        const datos = {
            nombre: document.getElementById('nombre').value,
            apellido: document.getElementById('apellido').value,
            cedula: document.getElementById('cedula').value,
            telefono: document.getElementById('telefono').value,
            email: document.getElementById('email').value,
            torre: document.getElementById('torre').value,
            apartamento: document.getElementById('apartamento').value
        };

        // Validación básica
        if(Object.values(datos).some(value => value === '')) {
            alert('Por favor complete todos los campos');
            return;
        }

        // Enviar datos (simulación)
        console.log('Datos enviados:', datos);
        alert('Registro exitoso!');
        formulario.reset();
    });
});