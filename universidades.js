const DATA_URL = "data_universidad/data_U.json";

async function cargarUniversidades() {
    const response = await fetch(DATA_URL);
    const data = await response.json();
    const universidadSelect = document.getElementById("universidad");
    const carreraSelect = document.getElementById("carrera");s
    const universidades = [...new Set(data.map(item => item.UNIVERSIDAD))];

    universidades.forEach(u => {
        const option = document.createElement("option");
        option.value = u;
        option.textContent = u;
        universidadSelect.appendChild(option);
    });

    universidadSelect.addEventListener("change", () => {
        carreraSelect.innerHTML = '<option value="">Seleccione carrera...</option>';
        const seleccion = universidadSelect.value;

        const carreras = data
            .filter(item => item.UNIVERSIDAD === seleccion)
            .map(item => item.CARRERA);

        carreras.forEach(c => {
            const option = document.createElement("option");
            option.value = c;
            option.textContent = c;
            carreraSelect.appendChild(option);
        });
    });
}

document.addEventListener("DOMContentLoaded", cargarUniversidades);
