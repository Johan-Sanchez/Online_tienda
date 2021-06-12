const btn = document.getElementById('change');

btn.addEventListener("click",(e) =>{
    e.preventDefault();
    const display_pas = document.getElementById('admin-data')
    if (display_pas.style.display === 'none'){
        display_pas.style.display = "initial";
    }else{
        display_pas.style.display = "none";
    }
    
   
})
