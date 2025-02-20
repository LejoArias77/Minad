//CARD FABRICACION
const openModal = document.getElementById('info');
const modal = document.getElementById('modal');
const closeModal = document.getElementById('volver')

openModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.add('modal-show');
});

closeModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.remove('modal-show');
});

//CARD MANTENIMIENTO
const openModal1 = document.getElementById('info1');
const modal1 = document.getElementById('modal1');
const closeModal1 = document.getElementById('volver1')

openModal1.addEventListener('click', (e) => {
    e.preventDefault();
    modal1.classList.add('modal-show');
});

closeModal1.addEventListener('click', (e) => {
    e.preventDefault();
    modal1.classList.remove('modal-show');
});

//CARD MONTAJES
const openModal2 = document.getElementById('info2');
const modal2 = document.getElementById('modal2');
const closeModal2 = document.getElementById('volver2')

openModal2.addEventListener('click', (e) => {
    e.preventDefault();
    modal2.classList.add('modal-show');
});

closeModal2.addEventListener('click', (e) => {
    e.preventDefault();
    modal2.classList.remove('modal-show');
});

//BOTON ENVIAR FORMULARIO DE CONTACTO
let enviar = document.getElementById('btn-enviar');
const nombre = document.getElementById('nombre');
const email = document.getElementById('email');
const asunto = document.getElementById('asunto');
const mensaje = document.getElementById('mensaje');
const nHiddent = document.getElementById('labelNombre');
const eHiddent = document.getElementById('labelEmail');

//FUNCION PARA VALIDAR CAMPOS
function validarCampos(){
    if(nombre.value === "" ){
        nombre.style.border = "1px solid red";
        nHiddent.style.visibility = "visible";

        
    }
    if(email.value === ""){
        eHiddent.style.visibility = "visible";
        email.style.border = "1px solid red";
         
    }
    if(asunto.value === ""){
        alert("El campo asunto es obligatorio");
        asunto.style.border = "1px solid red";
       
    }
    if(mensaje.value === ""){
        alert("El campo mensaje es obligatorio");
        mensaje.style.border = "1px solid red";
           
    }
    else{
        alert("Mensaje enviado correctamente");
        document.getElementById('nombre').value="";
        document.getElementById('email').value="";
        document.getElementById('asunto').value="";
        document.getElementById('mensaje').value=""; 

        nombre.style.border = "none";
        email.style.border = "none";
        asunto.style.border = "none";
        mensaje.style.border = "none";
    }

}

//EVENTO 
enviar.addEventListener('click', (e) =>{
    validarCampos();
    e.preventDefault();
       
});