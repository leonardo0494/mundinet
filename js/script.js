// Dropdown menu cidades 

let selectCidades = document.querySelector('.cities-select'),
    valorSelecionado = document.getElementById("selected-value"),
    botaoOpcoes = document.getElementById("city-options-toggle"),
    inputOpcoes = document.querySelectorAll('.city input'),
    regiaoPlanos = document.querySelector("#regiao_planos"),
    tipoInternet = document.querySelector("#internet"),
    tipoInternetStreaming = document.querySelector("#internet-streaming")
    cityMarkers = document.querySelectorAll("#city-markers li");

let cidadeSelecionada = valorSelecionado.textContent;
regiaoPlanos.textContent = `* Planos para a região de ${cidadeSelecionada}`;

inputOpcoes.forEach((input) => {
    input.addEventListener('click', event => {
        const valor = event.target.dataset.label;

        if (valor != "fechar") {
            valorSelecionado.textContent = valor;
            cidadeSelecionada = valor;
            regiaoPlanos.textContent = `* Planos para a região de ${valor}`;
        }

        selectCidades.classList.remove("aberto");

    });
});

selectCidades.addEventListener('click', () => {
    selectCidades.classList.toggle("aberto");
});

document.addEventListener('click', (event) => {
    
    if (
        selectCidades.classList.contains("aberto") &&
        !botaoOpcoes.contains(event.target)
    ) {
        botaoOpcoes.click();
        selectCidades.classList.remove("aberto");
    }

    return;
});

tipoInternet.addEventListener('click', () => {
    tipoInternetStreaming.classList.remove("ativo");
    tipoInternet.classList.add("ativo");
});

tipoInternetStreaming.addEventListener('click', () => {
    tipoInternet.classList.remove("ativo");
    tipoInternetStreaming.classList.add("ativo");
});

cityMarkers.forEach(marker => {
    marker.addEventListener('click', function (){
        cityMarkers.forEach(item => item.classList.remove('ativo'));
        this.classList.add('ativo');
        const cidade = this.getAttribute('data-city');
        console.log(cidade);
        showLocations(cidade);
    });
});