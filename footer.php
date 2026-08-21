    <footer>
        <div class="container">
            <div class="footer-main">
                <div class="brand">
                    <div class="logo">
                        <img src="./assets/logo_footer.png" alt="Logomarca mundinet" />
                    </div>
                    <div class="separator"></div>
                    <div class="sociais">
                        <span>Redes Sociais</span>
                        <ul>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=5588997526022&text=Ol%C3%A1!%20Gostaria%20de%20conhecer%20as%20ofertas%20da%20Mundinet"
                                    target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/mundinet_telecom?igsh=djNrN2F2aHZoenlw"
                                    target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="link">
                        <h2>Contatos</h2>
                        <ul>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=5588997526022&text=Ol%C3%A1!%20Gostaria%20de%20conhecer%20as%20ofertas%20da%20Mundinet"
                                    target="_blank">Central de atendimento</a>
                            </li>
                            <li>
                                <a href="tel:+558899567013">Ouvidoria</a>
                            </li>
                            <li class="open-modal-contato">
                                E-mail
                            </li>
                        </ul>
                    </div>
                    <div class="link">
                        <h2>Internet</h2>
                        <ul>
                            <li>
                                <a href="planos-internet.html">Fibra</a>
                            </li>
                            <li>
                                <a href="combos-internet.html">Nossos combos</a>
                            </li>
                            <li>
                                <a href="index.html#unidades">Nossas lojas</a>
                            </li>
                        </ul>
                    </div>
                    <div class="link">
                        <h2>Planos</h2>
                        <ul>
                            <li>
                                <a href="planos.html">Internet</a>
                            </li>
                            <li>
                                <a href="planos-streaming.html">Internet + Streaming</a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=5588997526022&text=Ol%C3%A1!%20Gostaria%20de%20conhecer%20as%20ofertas%20da%20Mundinet"
                                    target="_blank">Contrate já</a>
                            </li>
                        </ul>
                    </div>
                    <div class="link">
                        <h2>Cliente</h2>
                        <ul>
                            <li>
                                <a href="faq.html">Central de Ajuda</a>
                            </li>
                            <li>
                                <a href="indiqueumamigo.html">Indique um amigo</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
            <span class="copyright">© 2026 - MUNDINET. Todos os direitos reservados.<br /><br />
            FR INFORMÁTICA LTDA - CNPJ: 17.449.347/0001-19</span>
        </div>
    </footer>

    <script>
    
        // Enviar indicacao do amigo

        const btnEnviarIndicacao = document.querySelector("#enviar-indicacao");

        btnEnviarIndicacao.addEventListener('click', function () {

            let enviarIndicacao = document.querySelector("#enviar-indicacao-link"),
                errorMessage = document.querySelector("#error-message");

            let dadosIndicacaoInput = document.querySelectorAll(".dados-indicacao input");

            let todosPreenchidos = true;
            let mensagemIndicacao = "Olá, quero fazer uma indicação%0A%0A*Meus dados são:*%0A%0A";

            errorMessage.textContent = "";

            dadosIndicacaoInput.forEach((inputForm, index) => {
                if (inputForm.value == "") {
                    inputForm.classList.add("error");
                    todosPreenchidos = false;
                } else {

                    if (index == 3)
                        mensagemIndicacao += "%0A*Dados do meu amigo:*%0A%0A";

                    let nomeCampo = inputForm.dataset.campo;
                    mensagemIndicacao += `*${nomeCampo}:* ${inputForm.value}%0A`;

                    todosPreenchidos = !todosPreenchidos ? todosPreenchidos : true;
                    inputForm.classList.remove("error");
                }
            });

            if (!todosPreenchidos) {
                errorMessage.style.display = "block";
                errorMessage.textContent = "* Preencha todos os campos.";
            } else {
                enviarIndicacao.href = `https://api.whatsapp.com/send?phone=5588997526022&text=${mensagemIndicacao}`;
                enviarIndicacao.click();
                dadosIndicacaoInput.forEach(input => input.value = "");
            }

        });
    </script>
    
    <script src="https://kit.fontawesome.com/27467a36ca.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
