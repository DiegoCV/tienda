/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora con 25% menos groserías  \\
/** Valida los campos requeridos en un formulario
 * Returns flag Devuelve true si el form cuenta con los datos mínimos requeridos
 */
function validarForm(idForm){
	var form=$('#'+idForm)[0];
	for (var i = 0; i < form.length; i++) {
		var input = form[i];
		if(input.required && input.value==""){
			return false;
		}
	}
	return true;
}

////////// ADMINISTRADOR \\\\\\\\\\
function preAdministradorInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/administrador/AdministradorInsert.php',postAdministradorInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postAdministradorInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Administrador registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preAdministradorList(container){
     //Solicite información del servidor
     cargaContenido(container,'AdministradorList.html'); 
 	enviar("",'../back/outerController/administrador/AdministradorList.php',postAdministradorList); 
}

 function postAdministradorList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("AdministradorList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// CATEGORIA \\\\\\\\\\
function preCategoriaInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/categoria/CategoriaInsert.php',postCategoriaInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postCategoriaInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Categoria registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preCategoriaList(container){
     //Solicite información del servidor
     //cargaContenido(container,'CategoriaList.html'); 
 	enviar("",'../back/outerController/categoria/CategoriaList.php',postCategoriaList); 
}

 function postCategoriaList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("cont").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// CLIENTES \\\\\\\\\\
function preClientesInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/clientes/ClientesInsert.php',postClientesInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postClientesInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Clientes registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preClientesList(container){
     //Solicite información del servidor
     cargaContenido(container,'ClientesList.html'); 
 	enviar("",'../back/outerController/clientes/ClientesList.php',postClientesList); 
}

 function postClientesList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("ClientesList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// PRODUCTOS \\\\\\\\\\
function preProductosInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/productos/ProductosInsert.php',postProductosInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postProductosInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Productos registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preProductosList(container){
     //Solicite información del servidor
     cargaContenido(container,'ProductosList.html'); 
 	enviar("",'../back/outerController/productos/ProductosList.php',postProductosList); 
}

 function postProductosList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("ProductosList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// PROVEEDORES \\\\\\\\\\
function preProveedoresInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/proveedores/ProveedoresInsert.php',postProveedoresInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postProveedoresInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Proveedores registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preProveedoresList(container){
     //Solicite información del servidor
     cargaContenido(container,'ProveedoresList.html'); 
 	enviar("",'../back/outerController/proveedores/ProveedoresList.php',postProveedoresList); 
}

 function postProveedoresList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("ProveedoresList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// TIENDA \\\\\\\\\\
function preTiendaInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/tienda/TiendaInsert.php',postTiendaInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postTiendaInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Tienda registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preTiendaList(container){
     //Solicite información del servidor
     cargaContenido(container,'TiendaList.html'); 
 	enviar("",'../back/outerController/tienda/TiendaList.php',postTiendaList); 
}

 function postTiendaList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("TiendaList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// VENDEDOR \\\\\\\\\\
function preVendedorInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/vendedor/VendedorInsert.php',postVendedorInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postVendedorInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Vendedor registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preVendedorList(container){
     //Solicite información del servidor
    // cargaContenido(container,'VendedorList.html'); 
 	enviar("",'../back/outerController/vendedor/VendedorList.php',postVendedorList); 
}

 function postVendedorList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("cont").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// VENTAS \\\\\\\\\\
function preVentasInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/ventas/VentasInsert.php',postVentasInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postVentasInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Ventas registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preVentasList(container){
     //Solicite información del servidor
     cargaContenido(container,'VentasList.html'); 
 	enviar("",'../back/outerController/ventas/VentasList.php',postVentasList); 
}

 function postVentasList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("VentasList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// VENTAS_HAS_PRODUCTOS \\\\\\\\\\
function preVentas_has_productosInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/ventas_has_productos/Ventas_has_productosInsert.php',postVentas_has_productosInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postVentas_has_productosInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Ventas_has_productos registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preVentas_has_productosList(container){
     //Solicite información del servidor
     cargaContenido(container,'Ventas_has_productosList.html'); 
 	enviar("",'../back/outerController/ventas_has_productos/Ventas_has_productosList.php',postVentas_has_productosList); 
}

 function postVentas_has_productosList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("Ventas_has_productosList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

//That´s all folks!