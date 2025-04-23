document.addEventListener('DOMContentLoaded', () => {
    const formulario = document.querySelector('.formulario');
    const btnVolver = document.querySelector('.btn-volver');

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();

        // Capturar valores
        const datos = {
           /** marca: document.getElementById('marca').value, */
           gancho: document.getElementById('gancho').value,
            estado: document.getElementById('estado').value
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