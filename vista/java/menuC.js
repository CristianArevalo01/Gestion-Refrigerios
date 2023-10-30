let listElements = document.querySelectorAll('.list_button--click');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=>{ 

        //Darle la varible arrow y moverla con el estilo
        listElement.classList.toggle('arrow');

        let height = 0;
        //OBTENER AL HERMANO DIV (LIST_SHOW)
        let menu = listElement.nextElementSibling;
        if(menu.clientHeight == "0"){
            height=menu.scrollHeight;
        }

        menu.style.height = `${height}px`; 


    })
    
});