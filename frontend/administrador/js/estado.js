// $("#plan_deshabiltados").click(function () {
//   $("#estado").val("0");
//   let estado = document.getElementById("estado").value;
//   console.log(estado);

//   $.post(
//     "../../backend/plandeestudio/buscardeshabilitados.php",
//     {
//       var_estado: estado,
//     },
//     function (data) {
//       // if (data == '1') {
//       //     Swal.fire(
//       //         'Se ha agregado con exito!',
//       //         'Haz click para continuar',
//       //         'success'
//       //     ).then(() => {
//       //         $("#form_plan_estudio").trigger(
//       //             "reset"); //Reiniciar el formulario
//       //         $("#modal_plan_estudio .close")
//       //             .click(); //Cerrar el formulario
//       //         listar();
//       //     });
//       // } else {
//       //     // alert(data);
//       //     Swal.fire({
//       //         icon: 'error',
//       //         title: 'Oops...',
//       //         text: 'Revisa los campos nuevamente',
//       //         //  footer: '<a href="">Why do I have this issue?</a>'
//       //     })
//       // }
//     }
//   );
//   listar();
// });

// $("#plan_habiltados").click(function () {
//   $("#estado").val("1");
//   let estado = document.getElementById("estado").value;
//   console.log(estado);
// });
