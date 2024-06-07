const registrarTrabajador = async()=>{
    var tipo_documento = document.querySelector("#tipo_documento").value;
    var cedula = document.querySelector("#documento").value;
    var nombreTrabajador = document.querySelector("#nombre_del_beneficiario").value;
    var genero = document.querySelector("#genero").value;
    var areaTrabajador = document.querySelector("#area").value;
    var cargoTrabajador = document.querySelector("#cargo").value;
    var correoBene = document.querySelector("#correoBene").value;
    var phone = document.querySelector("#phone").value;
    var estado = document.querySelector("#estado").value;
    var municipio = document.querySelector("#municipio").value;
    var direccion = document.querySelector("#direccion").value;
    var discapacidadOCondicion = document.querySelector("#discapacidad_o_condicion").value;
    var descripcionDiscapacidad = document.querySelector("#descripcionDiscapacidad").value;
    var origen = document.querySelector("#origen").value;

    if (tipo_documento.trim() === ''||
    cedula.trim() === '' ||
    nombreTrabajador.trim() === '' ||
    genero.trim() === '' ||
    areaTrabajador.trim() === '' ||
    cargoTrabajador.trim() === '' ||
    correoBene.trim() === '' ||
    phone.trim() === '' ||
    estado.trim() === '' ||
    municipio.trim() === '' ||
    direccion.trim() === '' ||
    discapacidadOCondicion.trim() === '' ||
    origen.trim() === '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Faltan Campos por completar",
          });
        return;
    }
    if (!validarTipoDeDocumento(tipo_documento)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "El tipo de documento no cumple con los caracteres.",
          });
        return;
    }
    if (!validarcedula(cedula)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "La cedula no cumple con la cantidad de digitos necesarios. (Recuerde que debe ingresarse sin '.')",
          });
        return;
    }
    if (!validarnombre(nombreTrabajador)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "El nombre no cumple con los caracteres establecidos.",
          });
        return;
    }
    if (!validarcorreo(correoBene)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "El correo ingreso no cumple con los caracteres especificados.",
          });
        return;
    }
    if (!validarTelefono(phone)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ingrese el numero de telefono de la siguiente forma: (02123456765). Sin '-' o '.'",
          });
        return;
    }
    if (!validarMunicipio(municipio)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "El municipio no cumple con los caracteres solicitados.",
          });
        return;
    }
    if (!validarDireccion(direccion)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "La dirección ingresada no cumple con los caracteres solicitados.",
          });
        return;
    }
     // Envio de datos al backend 
     const datos = new FormData();
     datos.append("tipo_documento", tipo_documento);
     datos.append("documento", cedula);
     datos.append("nombre_del_beneficiario", nombreTrabajador);
     datos.append("genero", genero);
     datos.append("area", areaTrabajador);
     datos.append("cargo", cargoTrabajador);
     datos.append("correoBene", correoBene);
     datos.append("phone", phone);
     datos.append("estado", estado);
     datos.append("municipio", municipio);
     datos.append("direccion", direccion);
     datos.append("discapacidad_o_condicion", discapacidadOCondicion);
     datos.append("descripcionDiscapacidad", descripcionDiscapacidad);
     datos.append("origen", origen);

     var respuesta = await fetch("php/registro/registrotrabajador.php", {
         method: 'POST',
         body: datos
       });
     var resultado=await respuesta.json();
     if (resultado.success == true) {
         Swal.fire({
           icon: "success",
           title: "EXITO",
           text: resultado.mensaje,
         });
         document.querySelector("#registrarTrabajador").reset();
       }else{
         Swal.fire({
           icon: "error",
           title: "ERROR",
           text: resultado.mensaje,
         });
       }
}

console.log("Archivo de trabajador enlazado");