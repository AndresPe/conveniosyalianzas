$('#formLogin').submit(function(e){
   e.preventDefault();
   var id_usuario = $.trim($("#id_usuario").val());    
   var clave =$.trim($("#clave").val());    
    
   if(id_usuario.length == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un usuario y/o password',
      });
      return false; 
    }else{
        $.ajax({
           url:"Autentificacion/login.php",
           type:"POST",
           datatype: "json",
           data: {id_usuario:id_usuario, clave:clave}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario y/o password incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡Conexión exitosa!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           window.location.href = "Vistas/Intercambios/index.php";
                       }
                   })
                   
               }
           }    
        });
    }     
});