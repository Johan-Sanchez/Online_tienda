
// filtrar datos por tipo de producto seleccionado
const filtering=(element) =>
{
    // this is reference to the a tag you clicked on
    let filter = element.getAttribute("value")
    passVal(filter);

}

// se envian los datos a la logica por medio de metodo GET
const passVal =(filter) =>
{
    window.location.href = "http://localhost/Online_tienda/controllers/post_controller.php?filter=" + filter;
   
}

