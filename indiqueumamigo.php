<?php 

    include_once('header.php');

?>   


        <div class="header-banners swiper-banners swiper">
            <div class="container swiper-wrapper">
                <div class="swiper-slide" data-bg="assets/background_indique.jpg">
                    <picture>
                        <source media="(max-width:480px)" srcset="assets/banner_indique_mobile.png">
                        <source media="(max-width:1024px)" srcset="assets/banner_indique_tablet.png">

                        <img src="assets/banner_indique_desktop.png" alt="Combo internet mais premiere">
                    </picture>
                </div>
            </div>
        </div>
    </header>

    <section class="indique">
        <div class="container">
            <h2>Para indicar um amigo, preencha os dados abaixo.</h2>
            <div class="dados-indicacao">
                <div class="dados-titular">
                    <h3>Dados do titlular</h3>
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome-titular" data-campo="Nome" />
                    </div>
                    <div>
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf-titular" data-campo="CPF"/>
                    </div>
                    <div>
                        <label for="cpf">Telefone</label>
                        <input type="text" id="telefone-titular" data-campo="Telefone"/>
                    </div>
                </div>

                <div class="dados-amigo">
                    <h3>Dados do amigo</h3>
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome-amigo" data-campo="Nome"/>
                    </div>
                    <div>
                        <label for="cpf">Telefone</label>
                        <input type="text" id="telefone-amigo" data-campo="Telefone"/>
                    </div>
                    <div>
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade-amigo" data-campo="Cidade"/>
                    </div>
                </div>

                <span id="error-message"></span>

                <a target="_blank" id="enviar-indicacao-link"></a>
                
                <button id="enviar-indicacao">Indicar agora</button>

            </div>

            <div class="card">
                <div class="card-title">
                    <i class="fa-solid fa-user-group"></i>
                    <span>Dúvidas sobre o programa</span>
                </div>
                <div class="card-content">
                    <details>
                        <summary>Como funciona a promoção "Indique um amigo"?</summary>
                        <p>Estamos com mais essa novidade na Mundinet, todo cliente que indica nossos
                            serviços para um amigo ou familiar, fechando o contrato, automaticamente recebe
                            50% de desconto em sua próxima mensalidade, unindo forças conseguimos cada vez
                            mais! * Promoção validade apenas para cliente Pessoa Física.</p>
                    </details>
                    <details>
                        <summary>Como faço para participar da promoção?</summary>
                        <p>É muito simples! Acesse a página da promoção e indique seus amigos.</p>
                        <p>Acesse a promoção em <a href="indique-um-amigo.html">https://www.mundinet.com.br/indiqueumamigo</a></p>
                    </details>
                </div>
            </div>

        </div>
    </section>

    <div class="overlay">
        <div class="modal modal-principal ativo">
            <div class="modal-header">
                <h2>Entre em contato</h2>
                <button class="close-modal"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-content">
                <form id="formulario-contato">
                    <input type="hidden" name="pagina" id="pagina-modal">
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome">
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div>
                        <label for="assunto">Assunto</label>
                        <input type="text" id="assunto" name="assunto">
                    </div>
                    <div>
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" cols="50" rows="5"></textarea>
                    </div>
                    <button type="submit">Enviar mensagem</button>
                </form>
            </div>            
        </div>
        <div class="modal modal-sucesso">
            <div class="modal-header">
                <button class="close-modal"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <i class="fa-solid fa-check"></i>
            <span>E-mail enviado com sucesso!</span>
        </div>
    </div>

<?php include_once('footer.php'); ?>
