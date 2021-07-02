$(document).ready(function () {
    let $grado = document.getElementById('grado')
    let $curso = document.getElementById('curso')

    function cargargrado() {
        $.ajax({
            type: 'GET',
            url: 'select.php',
            success: function (response) {
                console.log(response);
                const grado = JSON.parse(response)
                let template = `<option disabled selected>Elija su Grado</option>`;
                grado.forEach(grado => {
                    template += `<option value="${grado.Id_Grado}">${grado.Nombre_Grado}</option>`;
                })
                $grado.innerHTML = template;
            }
        })
    }
    cargargrado()

    function cargarcurso(sendDatos) {
        $.ajax({
            url: 'llamar.php?Id_Grado=' + sendDatos,
            type: 'POST',
            success: function (response) {
                const curso = JSON.parse(response);
                console.log(response);
                let template = `<option disabled selected>Elija su Curso</option>`;
                curso.forEach(curso => {
                    template += `<option value="${curso.Id_curso}">${curso.Id_curso}</option>`;
                })
                $curso.innerHTML = template;
            }
        })
    }
    $grado.addEventListener('change', () => {
        const Id_Grado = $grado.options[$grado.selectedIndex].value;
        console.log(Id_Grado);
        cargarcurso(Id_Grado);
    })
    $curso.addEventListener('change', () => {
        const Id_curso = $curso.options[$curso.selectedIndex].value;
        console.log(Id_curso);
    })
})