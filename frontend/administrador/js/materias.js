

/**
 *
 * ? JAVASCRIPT DE LAS MATERIAS HABILITADAS
 *
 */

//MOSTRAR DATOS DE LA TABLA MATERIAS HABILITADAS
var cargar_tabla_materias_habilitadas = function () {
  var tableMaterias = $("#tabla_materias_habilitadas").DataTable({
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json", // spanish version
    },
    destroy: true, //para que no se buguee cuando agregas o editas etc
    ajax: {
      method: "POST",
      url: "../../backend/materias/buscarmateriashabilitadas.php",
    },
    columns: [
      {
        data: "id", //con "data" vas cargando los campos que tenes en tu bd, data es una funcion nativa de datatables.
      },
      {
        data: "nombre",
      },
      {
        data: "abreviatura",
      },
      {
        data: "estado_m",
      },
      // {
      //   defaultContent:
      //     "<div ><div class='btn-group'><button class='btn btn-info btnEditar' data-toggle='modal' data-target='#modal_form_materias'>Editar</button><button class='btn btn-danger btn-sm btnEstado'><i class='material-icons'>Dar de baja</i></button></div></div>",
      // },
      {
        defaultContent:
          "<div><div class='btn-group'><button class='btn btn-primary btnEditar m-1 rounded' data-toggle='modal' data-id='" +
          id +
          "' data-target='#modal_form_materias'><i class=' fa-solid fa-pen-to-square'></i></button><button class='btn btn-danger btn-sm btnEstado m-1 rounded'>Dar de baja <i class='fa-solid fa-download'></i></button></div></div>",
      },
    ],

    columnDefs: [
      {
        // width: "30%",
        targets: [0, 1, 2, 3, 4], //aclarar el ancho y a cuales columnas
      },
    ],
  });
};
//MOSTRAR DATOS DE LA TABLA MATERIAS HABILITADAS

//AGREGAR MATERIAAA
$(document).on("click", ".btnAgregar", function () {
  opcion = 1;

  /**
   * MODIFICACIONES MODAL
   */
  $("#inputestadomateria").hide();
  $("#labelestadomateria").hide();

  $("#inputnombremateria").val(""); //DEBERIA IR EL INPUT DEL NOMBRE DEL MODAL
  $("#inputabreviaturamateria").val("");
  $("#inputestadomateria").val(1);

  /**
   * CSS MODAL
   */
  $(".modal-header").css("background-color", "#007bff");
  $(".modal-header").css("color", "white");
  $("#boton_enviarform").css("background-color", "#007bff");
  $("#boton_enviarform").css("color", "white");
  $(".modal-title").text("Agregar Materia");

  if (opcion === 1) {
    //  MODAL AGREGAR
    $("#boton_enviarform").click(function () {
      let nombre_materia = document.getElementById("inputnombremateria").value;
      let abreviatura_materia = document.getElementById(
        "inputabreviaturamateria"
      ).value;
      let estado_materia = document.getElementById("inputestadomateria").value;

      console.log(nombre_materia, abreviatura_materia, estado_materia);

      if (
        nombre_materia == "" ||
        abreviatura_materia == "" ||
        estado_materia == ""
      ) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Por favor no deje ningun campo vacio",
          //  footer: '<a href="">Why do I have this issue?</a>'
        });
      } else {
        Swal.fire({
          title: "Los datos son correctos?",
          text: "La materia se cargara al sistema",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Si, estoy seguro",
          cancelButtonText: "Cancelar",
        }).then((result) => {
          if (result.isConfirmed) {
            /**
             * Si confirma el formulario lo envia por post mediante Jquery
             */

            $.post(
              "../../backend/materias/crudmaterias.php",
              {
                opcion: opcion,
                var_nombre_materia: nombre_materia,
                var_abreviatura_materia: abreviatura_materia,
                var_estado_materia: estado_materia,
              },
              function (data) {
                if (data == "1") {
                  Swal.fire(
                    "Buen Trabajo!",
                    "La materia ha sido cargada!",
                    "success"
                  ).then(() => {
                    $("#form_agregar_materias").trigger("reset"); //Reiniciar el formulario
                    $("#modal_form_materias .close").click(); //Cerrar el formulario
                    $("#probandoreiniciotabla").load(" #probandoreiniciotabla");
                    console.log("estoyharto");

                  });
                } else {
                  // alert(data);
                  Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Revisa los campos nuevamente",
                    //  footer: '<a href="">Why do I have this issue?</a>'
                  });
                }
              }
            );
          }
        });
      }
    });
  }
});

//AGREGAR MATERIA

//DAR DE BAJA UNA MATERIA

$(document).on("click", ".btnEstado", function () {
  opcion = 3; //DAR DE BAJA

  fila = $(this).closest("tr");
  id = parseInt(fila.find("td:eq(0)").text());

  Swal.fire({
    title: "Deshabilitar Materia",
    text: "Esta seguro que desea dar de baja la materia?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, estoy seguro",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      /**
       * Si confirma el formulario lo envia por post mediante Jquery
       */
      $.post(
        "../../backend/materias/crudmaterias.php",
        {
          opcion: opcion,
          id: id,
        },
        function (data) {
          if (data == 1) {
            Swal.fire(
              "Perfecto!",
              "La materia ha sido dada de baja!",
              "success"
            ).then(() => {
              cargar_tabla_materias_habilitadas();
              cargar_tabla_materias_deshabilitadas();
            });
          } else {
            // alert(data);
            Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Ha ocurrido un error inesperado",
              footer: '<a href="">Why do I have this issue?</a>',
            });
          }
        }
      );
    }
  });
});

//DAR DE BAJA

//EDITAR MATERIA
$(document).on("click", ".btnEditar", function () {
  opcion = 2; //Editar

  //fila seria seleccionar la fila, la selecionas con el this, que this seria agarrar el elemento que pusiste en el click de arriba o sea el btn editar, closest lo mas cerca el TR obvio y despues abajo ya esta explicado el find.
  fila = $(this).closest("tr");
  //capturo el ID   el td:eq() , es un selector de indices, por ende si hay 4 <td>, para seleccionar el 4to td tendrias que poner td:eq(3) y con el .text agarras el texto obvio
  id = parseInt(fila.find("td:eq(0)").text());
  nombre = fila.find("td:eq(1)").text();
  abreviatura = fila.find("td:eq(2)").text();
  estado_m = fila.find("td:eq(3)").text();

  // console.log(id);
  // console.log(nombre);
  // console.log(abreviatura);
  // console.log(estado_m);

  /**Configuraciones del MODAL */
  $("#inputnombremateria").val(nombre); //insertando valores a un input
  $("#inputabreviaturamateria").val(abreviatura);
  $("#inputestadomateria").val(estado_m);
  $("#inputestadomateria").show();
  $("#labelestadomateria").show();
  $(".modal-header").css("background-color", "#00aeae");
  $(".modal-header").css("color", "white");
  $("#boton_enviarform").css("background-color", "#00aeae");
  $("#boton_enviarform").css("color", "white");
  $(".modal-title").text("Editar Materia");
  //
  /**Configuraciones del MODAL */

  // Si opcion es igual a 2 o sea Editar
  if (opcion === 2) {
    $("#boton_enviarform").click(function () {
      console.log("ENTRO NOMAS PERRO");
      // console.log(id);
      // console.log(nombre);
      // console.log(abreviatura);
      // console.log(estado_m);

      valor_input_nombremateria = $("#inputnombremateria").val();
      valor_input_abreviaturamateria = $("#inputabreviaturamateria").val();
      valor_input_estadomateria = $("#inputestadomateria").val();

      console.log(valor_input_nombremateria);
      console.log(valor_input_abreviaturamateria);
      console.log(valor_input_estadomateria);

      if (
        $("#inputnombremateria").val().length === 0 ||
        $("#inputabreviaturamateria").val().length === 0 ||
        $("#inputestadomateria").val().length === 0
      ) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Por favor no deje ningun campo vacio",
          //  footer: '<a href="">Why do I have this issue?</a>'
        });
      } else {
        Swal.fire({
          title: "Los datos son correctos?",
          text: "Esta seguro de editar esta materia?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Si, estoy seguro",
          cancelButtonText: "Cancelar",
        }).then((result) => {
          if (result.isConfirmed) {
            /**
             * Si confirma el formulario lo envia por post mediante Jquery
             */

            $.post(
              "../../backend/materias/crudmaterias.php",
              {
                opcion: opcion,
                id: id,
                nombre_materia: valor_input_nombremateria,
                abreviatura_materia: valor_input_abreviaturamateria,
                estado_materia: valor_input_estadomateria,
              },
              function (data) {
                if (data == "1") {
                  Swal.fire(
                    "Buen Trabajo!",
                    "La materia ha sido cargada!",
                    "success"
                  ).then(() => {
                    $("#form_agregar_materias").trigger("reset"); //Reiniciar el formulario

                    $("#modal_form_materias .close").click(); //Cerrar el Modal
                    //cargar_tabla_materias_habilitadas(); //Listar la tabla de nuevo
                    //cargar_tabla_materias_deshabilitadas();
                  });
                } else {
                  Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Revisa los campos nuevamente",
                    //  footer: '<a href="">Why do I have this issue?</a>'
                  });
                }
              }
            );
          }
        });
      }
    });
  }
});
//EDITAR MATERIA

/**
 *
 *   ? JAVASCRIPT DE LAS MATERIAS HABILITADAS
 *
 */

/**
 * ? JAVASCRIPT DE LAS MATERIAS DESHABILITADAS
 */

//MOSTRAR DATOS DE LA TABLA MATERIAS HABILITADAS
var cargar_tabla_materias_deshabilitadas = function () {
  var tableMaterias = $("#tabla_materias_deshabilitadas").DataTable({
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json", // spanish version
    },
    destroy: true, //para que no se buguee cuando agregas o editas etc
    ajax: {
      method: "POST",
      url: "../../backend/materias/buscarmateriasdeshabilitadas.php",
    },
    columns: [
      {
        data: "id", //con "data" vas cargando los campos que tenes en tu bd, data es una funcion nativa de datatables.
      },
      {
        data: "nombre",
      },
      {
        data: "abreviatura",
      },
      {
        data: "estado_m",
      },
      // {
      //   defaultContent:
      //     "<div ><div class='btn-group'><button class='btn btn-info btnEditar' data-toggle='modal' data-target='#modal_form_materias'>Editar</button><button class='btn btn-danger btn-sm btnEstado'><i class='material-icons'>Dar de baja</i></button></div></div>",
      // },
      {
        defaultContent:
          "<div><div class='btn-group'><button class='btn btn-primary btnEditar m-1 rounded' data-toggle='modal' data-target='#modal_form_materias'><i class=' fa-solid fa-pen-to-square'></i></button><button class='btn btn-success btn-sm btnEstado2 m-1 rounded'>Dar de alta <i class='fa-solid fa-upload'></i></button></div></div>",
      },
    ],

    columnDefs: [
      {
        width: "30%",
        targets: [0, 1, 2, 3, 4], //aclarar el ancho y a cuales columnas
      },
    ],
  });
};
//MOSTRAR DATOS DE LA TABLA MATERIAS HABILITADAS

//DAR DE ALTA UNA MATERIA

$(document).on("click", ".btnEstado2", function () {
  opcion = 4; //DAR DE ALTA

  fila = $(this).closest("tr");
  id = parseInt(fila.find("td:eq(0)").text());

  Swal.fire({
    title: "Deshabilitar Materia",
    text: "Esta seguro que desea dar de alta esta materia?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, estoy seguro",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      /**
       * Si confirma el formulario lo envia por post mediante Jquery
       */
      $.post(
        "../../backend/materias/crudmaterias.php",
        {
          opcion: opcion,
          id: id,
        },
        function (data) {
          if (data == 1) {
            Swal.fire(
              "Perfecto!",
              "La materia ha sido dada de alta!",
              "success"
            ).then(() => {
              //cargar_tabla_materias_habilitadas();
              //cargar_tabla_materias_deshabilitadas();
            });
          } else {
            // alert(data);
            Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Ha ocurrido un error inesperado",
              footer: '<a href="">Why do I have this issue?</a>',
            });
          }
        }
      );
    }
  });
});

//DAR DE BAJA

//TOGGLE, PARA VER LAS TABLAS HABILITADAS Y DESHABILITADAS
function toggleElement(el) {
  // el argumento 'el' trae un string que contiene el id del elemento que quiero togglear
  let otro;
  // el elemento que no traigo
  if (el === "div_tabla_materias_deshabilitadas") {
    otro = "div_tabla_materias_habilitadas";
    document
      .getElementById("materias_deshabiltadas")
      .classList.remove("btn-activo");
    document.getElementById("materias_habiltadas").className += " btn-activo";
  } else {
    otro = "div_tabla_materias_deshabilitadas";
    document
      .getElementById("materias_habiltadas")
      .classList.remove("btn-activo");
    document.getElementById("materias_deshabiltadas").className +=
      " btn-activo";
  }
  let element = document.getElementById(el);
  let elementotro = document.getElementById(otro);
  element.style.display = "inline-table";
  elementotro.style.display = "none";
}
