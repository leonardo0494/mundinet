// Animação topbar

const topBar = document.querySelector(".topbar");

document.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
        topBar.classList.add('topbar-fix');
    } else {
        topBar.classList.remove('topbar-fix');
    }
});

// Construção dos slides do site

const swiperHeader = new Swiper('.swiper-banners', {
    loop: true,
    slidesPerView: 1,
    speed: 1500,
    autoplay: {
        delay: 500,
        disableOnInteraction: false
    },
    pauseOnMouseEnter: true,
    effect: 'slide'
});

const swiperPlanos = new Swiper('.swiper-planos', {
    loop: true,

    breakpoints: {
        1280: {
            slidesPerView: 4
        },
        1024: {
            slidesPerView: 3
        },
        960: {
            slidesPerView: 3
        },
        480: {
            slidesPerView: 1,
        },
        320: {
            slidesPerView: 1,
            initialSlide: 1
        }
    },

    // Navigation arrows
    navigation: {
        nextEl: '.next-planos-internet',
        prevEl: '.prev-planos-internet',
    },

});

const swiperPlanosStreaming = new Swiper('.swiper-planos-streaming', {
    loop: true,

    breakpoints: {
        1280: {
            slidesPerView: 4
        },
        1024: {
            slidesPerView: 3
        },
        960: {
            slidesPerView: 3
        },
        480: {
            slidesPerView: 1,
        },
        320: {
            slidesPerView: 1,
            initialSlide: 1
        }
    },

    // Navigation arrows
    navigation: {
        nextEl: '.next-planos-internet-streaming',
        prevEl: '.prev-planos-internet-streaming',
    },

});
let ibiapinaSlideIndex = -1;

// Acao menu mobile 

const openMenuMobile = document.querySelector("#open-menu-mobile"),
    closeMenuMobile = document.querySelector("#close-mobile-menu"),
    menuMobile = document.querySelector("#header-menu-mobile");

openMenuMobile.addEventListener('click', function () {
    menuMobile.classList.remove('closed');
});

closeMenuMobile.addEventListener('click', function () {
    menuMobile.classList.add('closed');
});

// links de ação do APP 

const acaoApp = document.querySelectorAll('.acao');
const userAgent = navigator.userAgent || window.opera;

const isAndroid = /android/gi.test(userAgent);
const isIos = /iphone|ipad|ipod/gi.test(userAgent);

const linkAndroid = "https://play.google.com/store/apps/details?id=com.r3r.mundinet";
const linkApple = "https://apps.apple.com/br/app/mundi-net-telecom/id6744907321";

const linkApp = isAndroid
    ? linkAndroid
    : isIos
        ? linkApple
        : "/#download-app";


acaoApp.forEach(acao => {

    if(!acao.classList.contains('acao-central'))
        acao.href = `${linkApp}`
})

// Setar pagina no formulario do modal
document.querySelector("#pagina-modal").value = window.location.href;

// Envio formulario de contato
const formularioContato = document.querySelector("#formulario-contato"),
    modalPrincipal = document.querySelector(".modal-principal"),
    modalSucesso = document.querySelector(".modal-sucesso"),
    btnFecharmodal = document.querySelectorAll(".close-modal"),
    overlay = document.querySelector('.overlay'),
    btnAbrirModal = document.querySelector('.open-modal-contato'),
    inputsFormulario = document.querySelectorAll("#formulario-contato input");

formularioContato.addEventListener('submit', async (event) => {
    event.preventDefault();

    const formData = new FormData(event.target);
    const dados = Object.fromEntries(formData.entries());

    await sendEmail(dados)
        .then( () => {
            trocarModal(modalPrincipal, modalSucesso);
            resetarInputsFormulario(inputsFormulario);
        });
});

btnFecharmodal.forEach(btnFechar =>
    btnFechar.addEventListener("click", function () {
        resetarInputsFormulario(inputsFormulario);
        overlay.style.display = 'none';
    })
);

btnAbrirModal.addEventListener("click", function () {
    resetarInputsFormulario(inputsFormulario);
    overlay.style.display = 'flex';
});

function resetarInputsFormulario(inputs) {
    inputs.forEach(input => input.value = "");
}

function trocarModal(atual, proximo) {
    atual.classList.add('saindo');
    atual.classList.remove('ativo');

    setTimeout(() => {
        atual.classList.remove('saindo');
        proximo.classList.add('ativo');
    }, 400); 
    
    atual.style.display = 'none';    
    proximo.style.display = "flex";
}

function sendEmail(dados) {
    return new Promise(function (resolve, reject) {
        fetch('enviar-email.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams(dados)
        })
            .then(response => response.text())
            .then(result => {
                resolve(result);
            })
            .catch(error => {
                reject(error);
            });
    });
}

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

        if (valor == "Ibiapina") {
            if (ibiapinaSlideIndex === -1) {
            swiperPlanos.appendSlide(`<div class="plano swiper-slide" data-slide="ibiapina">
                <h2>50<span>MB</span></h2>
                <ul>
                <li>Até 50 Mbps de Download</li>
                <li>Até 25 Mbps de Upload</li>
                <li>Taxa de Instalação Grátis</li>
                <li>Internet 100% Fibra Óptica</li>
                </ul>
                <div class="preco">
                <h4>R$ <span>55,00</span>/mês</h4>
                </div>
                <a href="https://api.whatsapp.com/send?phone=5588997526022&text=Ol%C3%A1!%20Gostaria%20de%20mais%20informações%20sobre%20o%20plano%20de%20internet%20de%2050mb" target="_blank">Contrate agora</a>
            </div>`);
    
            ibiapinaSlideIndex = swiperPlanos.slides.length - 1;
            }
            swiperPlanos.slideTo(swiperPlanos.params.initialSlide, 0);
            swiperPlanos.update();
            // Reseta o estado do slide ao adicionar um slide novo
            swiperPlanos.slideToLoop(0); 
        } else {
            if (ibiapinaSlideIndex !== -1) {
                swiperPlanos.removeSlide(ibiapinaSlideIndex);
                swiperPlanos.update();
                // Reseta o estado do slide ao remover um slide
                swiperPlanos.slideToLoop(0);
                ibiapinaSlideIndex = -1;
            }
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

// Construção do mapa dinamico

const map = L.map('map')
    .setView([-4.045144101266519, -40.86501587763489], 16);

const lojas = {
    "SaoBenedito": [
        { name: "São Benedito - Centro", lat: -4.045144101266519, lng: -40.86501587763489 },
        { name: "São Benedito - Inhucu", lat: -4.112037971549726, lng: -40.87060792962749 }
    ],
    "Carnaubal" : [
        { name: "Carnaubal - Centro", lat: -4.165039387316344, lng: -40.94250187565347 },
        { name: "Carnaubal - Faveira", lat: -4.059554785283042, lng: -40.965857327094696 }
    ],
    "Ubajara" : [
        { name: "Ubajara - Centro", lat: -3.852629504337531, lng: -40.92058060264129 },
        { name: "Ubajara - Distrito Jaburuna", lat: -3.8902581758467383, lng: -40.97335143379739 }
    ],
    "Ibiapina" : [
        { name: "Ibiapina - Centro", lat: -3.915814131663868, lng: -40.88954540264118 },
        { name: "Ibiapina - Distrito Alto Lindo", lat: -3.9825308546660314, lng: -40.94309815002901 }
    ],
    "GuaracibaDoNorte" : [
        { name: "Guaraciaba do Norte", lat: -4.172425599063241, lng: -40.877936828625195 }
    ]
};

const customIcon = L.icon({
    iconUrl: 'assets/Logo@2x.png',
    iconSize: [32, 32],
    iconAnchor: [16, 32],
    popupAnchor: [0, -32]
});

// Camada do OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

// Adicionando um marcador de exemplo
Object.keys(lojas).forEach(cidade => {
    lojas[cidade].forEach(loja =>
        L.marker([loja.lat, loja.lng], { icon: customIcon }).addTo(map)
            .bindPopup(`<b>${loja.name}</b>`)
    )
});

const startMarker = L.marker([-4.045144101266519, -40.86501587763489], { icon: customIcon })
    .addTo(map)
    .bindTooltip('<b>Bem-vindo a São Benedito!</b>');

startMarker.openTooltip();

let currentMarkers = [];

function showLocations(location) {
    
    currentMarkers.forEach(marker => map.removeLayer(marker));
    currentMarkers = [];
    startMarker.closeTooltip();

    const bounds = [];
    lojas[location].forEach(loja => {
        
        const marker = L.marker([loja.lat, loja.lng], { icon: customIcon })
            .addTo(map)
            .bindTooltip(`<b>${loja.name}</b>`, { permanent: true, direction: 'top' });

        
        marker.on('click', function () {
            if (marker.isTooltipOpen()) {
                marker.closeTooltip();
            } else {
                marker.openTooltip();
            }
        });

        currentMarkers.push(marker);
        bounds.push([loja.lat, loja.lng]);
    });

    if (bounds.length > 0) {
        map.fitBounds(bounds);
    }
}


cityMarkers.forEach(marker => {
    marker.addEventListener('click', function (){
        cityMarkers.forEach(item => item.classList.remove('ativo'));
        this.classList.add('ativo');
        const cidade = this.getAttribute('data-city');
        showLocations(cidade);
    });
});
