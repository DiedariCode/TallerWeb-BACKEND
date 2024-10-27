// JavaScript para cambiar entre formularios
document.addEventListener('DOMContentLoaded', function () {
    const enlaces = document.querySelectorAll('.autenticacion__enlace');
    const formLogin = document.querySelector('.autenticacion__formulario');
    const formRegistro = document.querySelector('.autenticacion__formulario--oculto');

    enlaces.forEach(enlace => {
        enlace.addEventListener('click', (e) => {
            e.preventDefault();
            enlaces.forEach(el => el.classList.remove('autenticacion__enlace--activo'));
            enlace.classList.add('autenticacion__enlace--activo');

            if (enlace.textContent === 'REGISTRARME') {
                formLogin.style.display = 'none';
                formRegistro.style.display = 'flex';
            } else {
                formLogin.style.display = 'flex';
                formRegistro.style.display = 'none';
            }
        });
    });
});