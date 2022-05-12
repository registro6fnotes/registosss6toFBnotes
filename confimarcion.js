function confimarcion(e) {
    if (confirm("¿Esta segura que desea eliminar este registro?")) {
        return true;

    } else {
      e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".container--item--link");

for  (var i = 0; i < linkDelete.length; i++) {
 linkDelete[i].addEventListener('click', confimarcion );
}