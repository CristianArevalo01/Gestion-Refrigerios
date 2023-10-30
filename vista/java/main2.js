const openModal = document.querySelectorAll('.lapiz');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.modal_close');
const borrarbtn = document.querySelector('.borrar');

openModal.forEach(m=>{m.addEventListener('click', (e)=>{
    e.preventDefault();
    borrarbtn.href=`../controlador/EliminarRe.php?id=${m.dataset.id}&estado=${m.dataset.estado}`
    console.log(m)
    modal.classList.add('modal--show');
    })
});     

closeModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.remove('modal--show');
});     