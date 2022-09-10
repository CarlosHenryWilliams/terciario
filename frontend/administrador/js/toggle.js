function toggleElement(el) {
  // el argumento 'el' trae un string que contiene el id del elemento que quiero togglear
  let otro;
  // el elemento que no traigo
  if (el === "table_deshabilitado") {
    otro = "table_habilitado";
    document.getElementById("plan_deshabiltados").classList.remove("btn-activo");
    document.getElementById("plan_habiltados").className += " btn-activo";
  } else {
    otro = "table_d";
    document.getElementById("plan_habiltados").classList.remove("btn-activo");
    document.getElementById("plan_deshabiltados").className += " btn-activo";
  }
  let element = document.getElementById(el);
  let elementotro = document.getElementById(otro);
  element.style.display = "inline-table";
  elementotro.style.display = "none";
}
