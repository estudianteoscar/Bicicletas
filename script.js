document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.card');
    
    buttons.forEach(button => {
        button.addEventListener('click', (e) => {
            const section = e.currentTarget.id;
            // Redirección real
            switch(section) {
                case 'propietarios':
                    window.location.href = 'Secciones/propietarios.php';
                    break;
                case 'bicicletas':
                    //alert('Formulario en construcción');
                    window.location.href = 'Secciones/bicicletas.php';
                    break;
                case 'parqueadero':
                   /** alert('Formulario en construcción'); */
                   window.location.href = 'Secciones/Espacio_parqueadero.php'
                    break;
            }
        });

        // Efecto hover mantiene igual
        button.addEventListener('mouseover', () => {
            button.style.transform = 'scale(1.02)';
        });
        
        button.addEventListener('mouseout', () => {
            button.style.transform = 'scale(1)';
        });
    });
});