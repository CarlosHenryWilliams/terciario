var cargartablahabilitados = function () {
  var tableMaterias = $("#tabla_habilitado_plan_estudio").DataTable({
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json", // spanish version
    },
    destroy: true, //para que no se buguee cuando agregas o editas etc
    ajax: {
      method: "POST",
      url: "../../backend/plandeestudio/buscarhabilitados.php",
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
          "<div ><div class='btn-group'><button id='botoneditardocente2' class='btn btn-primary btnEditar m-1 rounded' data-toggle='modal' data-target='#modal_plan_estudio'><i class=' fa-solid fa-pen-to-square'></i></button><button class='btn btn-danger btn-sm btnEstado m-1 rounded'>Dar de baja <i class='fa-solid fa-download'></i></button><button type='button' class='btn btn-secondary btn-sm btnMaterias m-1 rounded' data-toggle='modal' data-target= '#modal_materias_plan_estudio'>Materias</button></div></div>",
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

$(document).ready(function () {
  cargartablahabilitados();
});
