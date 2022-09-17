$(document).ready(function() {

    $("#estado").val("0");
    let estado = document.getElementById('estado').value;
    console.log(estado);

    $.post('../../backend/plandeestudio/buscardeshabilitados.php', {
        var_estado: estado
    }, function(data) {
        // if (data == '1') {
        //     Swal.fire(
        //         'Se ha agregado con exito!',
        //         'Haz click para continuar',
        //         'success'
        //     ).then(() => {
        //         $("#form_plan_estudio").trigger(
        //             "reset"); //Reiniciar el formulario
        //         $("#modal_plan_estudio .close")
        //             .click(); //Cerrar el formulario
        //         listar();

        //     });
        // } else {
        //     // alert(data);
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: 'Revisa los campos nuevamente',
        //         //  footer: '<a href="">Why do I have this issue?</a>'
        //     })
        // }
    });
    listar();
});

var listar = function() {
    var tableMaterias = $("#tabla_deshabilitado_plan_estudio").DataTable({

        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json" // spanish version
        },
        "destroy": true, //para que no se buguee cuando agregas o editas etc
        "ajax": {
            "method": "POST",
            "url": "../../backend/plandeestudio/buscardeshabilitados.php"
        },
        "columns": [{
                "data": "id" //con "data" vas cargando los campos que tenes en tu bd, data es una funcion nativa de datatables.
            },
            {
                "data": "titulo"
            },
            {
                "data": "nombre"
            },
            {
                "data": "resolucion"
            },
            {
                "data": "estado_p"
            },
            {
                "defaultContent": "<div ><div class='btn-group'><button id='botoneditardocente' class='btn btn-primary btnEditar m-1 rounded' data-toggle='modal' data-target='#modal_plan_estudio'><i class=' fa-solid fa-pen-to-square'></i></button><button class='btn btn-danger btn-sm btnEstado m-1 rounded'>Dar de baja</button></div></div>"
            }
        ],

        "columnDefs": [{
            "width": "30%",
            "targets": [0, 1, 2, 3, 4] //aclarar el ancho y a cuales columnas
        }]

    });
}