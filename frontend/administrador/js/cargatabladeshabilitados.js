$(document).ready(function () {
  listar();
});

var listar = function () {
  var tableMaterias = $("#tabla_deshabilitado_plan_estudio").DataTable({
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json", // spanish version
    },
    destroy: true, //para que no se buguee cuando agregas o editas etc
    ajax: {
      method: "POST",
      url: "../../backend/plandeestudio/buscardeshabilitados.php",
    },
    columns: [
      {
        data: "id", //con "data" vas cargando los campos que tenes en tu bd, data es una funcion nativa de datatables.
      },
      {
        data: "titulo",
      },
      {
        data: "nombre",
      },
      {
        data: "resolucion",
      },
      {
        data: "estado_p",
      },
      {
        defaultContent:
          "<div ><div class='btn-group'><button id='botoneditardocente' class='btn btn-primary btnEditar m-1 rounded' data-toggle='modal' data-target='#modal_plan_estudio'><i class=' fa-solid fa-pen-to-square'></i></button><button class='btn btn-success btn-sm btnEstado2 m-1 rounded'>Dar de alta <i class='fa-solid fa-upload'></i></button><button type='button' class='btn btn-secondary btn-sm btnMaterias m-1 rounded' data-toggle='modal' data-target= '#modal_materias_plan_estudio'>Matarias</button></div></div>",
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
