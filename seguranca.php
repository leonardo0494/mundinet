<?php 

    include_once('header.php');
    include_once('banner-slide.php');

?>   

    <section class="seguranca">
        <div class="container">
            
            <div class="aviso">
                <h1>Confira com se proteger das ameaças</h1>
                <div class="ameacas">

                    <div class="ameaca">
                        <div class="ameaca-title">
                            <div class="icon-group">
                                <i class="fa-solid fa-shield"></i>
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <span>WiFi-Seguro</span>
                        </div>
                        <div class="ameaca-content">Proteja sua rede utilizando senhas seguras e mantenha o firmware do roteador sempre atualizado. Evite realizar transações bancárias ou digitar senhas enquanto estiver conectado a redes públicas.</div>
                    </div>

                    <div class="ameaca">
                        <div class="ameaca-title">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <span>Fraudes e golpes online</span>
                        </div>
                        <div class="ameaca-content">Criminosos podem se fazer passar por empresas de confiança para obter seus dados. Antes de fornecer qualquer informação pessoal ou financeira, sempre confirme se o contato é realmente legítimo.</div>
                    </div>
                    
                    <div class="ameaca">
                        <div class="ameaca-title">
                            <div class="icon-group">
                                <i class="fa-solid fa-shield"></i>
                                <i class="fa-solid fa-user-secret"></i>
                            </div>
                            <span>Phishing e engenharia social</span>
                        </div>
                        <div class="ameaca-content">Esteja atento a mensagens suspeitas recebidas por e-mail, SMS ou WhatsApp. Sempre desconfie de links e verifique a autenticidade do remetente antes de acessá-los.</div>
                    </div>
                    
                    <div class="ameaca">
                        <div class="ameaca-title">
                            <i class="fa-solid fa-lock"></i>
                            <span>Segurança em aplicativos e redes sociais</span>
                        </div>
                        <div class="ameaca-content">Ative a autenticação em dois fatores (2FA) sempre que puder, revise regularmente as permissões dos aplicativos e evite expor informações sensíveis nas redes sociais.</div>
                    </div>
                    
                    <div class="ameaca">
                        <div class="ameaca-title">
                            <div class="icon-group">
                                <i class="fa-solid fa-shield"></i>
                                <i class="fa-solid fa-key"></i>
                            </div>
                            <span>Proteção contra malwares e ransomwares</span>
                        </div>
                        <div class="ameaca-content">Utilize um antivírus de confiança e mantenha-o sempre atualizado. Evite baixar arquivos de fontes não confiáveis e tenha cautela com anexos de e-mails que você não solicitou.</div>
                    </div>
                    
                    <div class="ameaca">
                        <div class="ameaca-title">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>Compras e pagamentos online</span>
                        </div>
                        <div class="ameaca-content">Dê preferência aos cartões virtuais para compras na internet e certifique-se de que o site possui o cadeado de segurança (HTTPS). Jamais compartilhe seus dados em páginas que não sejam seguras.</div>
                    </div>

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