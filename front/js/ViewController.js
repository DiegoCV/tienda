/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    They call me Mr. Espagueti  \\
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

////////// ADMIN \\\\\\\\\\
function preAdminInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/admin/AdminInsert.php',postAdminInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postAdminInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Admin registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preAdminList(container){
     //Solicite información del servidor
     cargaContenido(container,'AdminList.html'); 
 	enviar("",'../back/outerController/admin/AdminList.php',postAdminList); 
}

 function postAdminList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("AdminList").innerHTML=result;
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
     cargaContenido(container,'CategoriaList.html'); 
 	enviar("",'../back/outerController/categoria/CategoriaList.php',postCategoriaList); 
}

 function postCategoriaList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("CategoriaList").innerHTML=result;
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

////////// CLIENTES_HAS_VENTAS \\\\\\\\\\
function preClientes_has_ventasInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/clientes_has_ventas/Clientes_has_ventasInsert.php',postClientes_has_ventasInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postClientes_has_ventasInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
 			alert("Clientes_has_ventas registrado con éxito");
 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preClientes_has_ventasList(container){
     //Solicite información del servidor
     cargaContenido(container,'Clientes_has_ventasList.html'); 
 	enviar("",'../back/outerController/clientes_has_ventas/Clientes_has_ventasList.php',postClientes_has_ventasList); 
}

 function postClientes_has_ventasList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("Clientes_has_ventasList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// PRODUCTOS \\\\\\\\\\
function preProductosInsert(event,idForm){
    event.preventDefault();
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
     cargaContenido(container,'VendedorList.html'); 
 	enviar("",'../back/outerController/vendedor/VendedorList.php',postVendedorList); 
}

 function postVendedorList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("VendedorList").innerHTML=result;
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

//That´s all folks!