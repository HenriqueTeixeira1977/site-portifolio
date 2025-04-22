<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henrique Teixeira | Web Developer</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mediaquery.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarMenu" data-bs-offset="70" tabindex="0">
    <button class="theme-toggle" onclick="toggleTheme()">
        <i class="fas fa-moon"></i>
    </button>

    <!-- HEADER -->
    <header class="sticky-top shadow">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#" data-aos="fade-down">
                    <img src="assets/img/favicon.ico" alt="HT Logo" width="40" height="40" class="me-2">
                    <div>
                        <span class="h4 mb-0 text-white">Henrique Teixeira</span>
                        <small class="text-light">Web Developer</small>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item"><a class="nav-link" href="#home">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfólio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                        <li class="nav-item ms-md-3">
                            <a class="btn btn-gold" href="http://bit.ly/WhatsAppHDTBusiness" target="_blank">
                                <i class="fab fa-whatsapp me-1"></i> Orçamento
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- SECTION HERO  -->
    <section class="py-5 bg-light text-dark text-center" id="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="display-4 fw-bold">Crie um site que <span style="color: var(--gold-accent);">conquista clientes</span></h2>
                    <p class="lead mt-4">Transforme sua visão em um site profissional, responsivo e otimizado para conversões. Integrações com WhatsApp, Instagram e mais para alavancar seu negócio.</p>
                    <a href="http://bit.ly/WhatsAppHDTBusiness" target="_blank" class="btn btn-gold btn-lg mt-3">Comece Seu Projeto Agora</a>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="img/imagem-home.png" class="img-fluid floating" alt="Construção de Sites">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION SERVISES  -->
    <section class="py-5" id="services">
        <div class="container">
            <h2 class="text-center mb-5">Serviços</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="img/website-institucional.png" width="80" alt="Website Institucional">
                    <h4 class="mt-3">Website Institucional</h4>
                    <p>Marque presença online com um site que transmite profissionalismo e autoridade. Sua empresa precisa ser vista.</p>
                    <a href="http://bit.ly/WhatsAppHDTBusiness" class="text-success">Saiba mais &raquo;</a>
                </div>
                <div class="col-md-4">
                    <img src="img/website.png" width="80" alt="Landing Pages">
                    <h4 class="mt-3">Landing Pages</h4>
                    <p>Páginas otimizadas para campanhas. Aumente suas conversões com uma estrutura pensada em resultados.</p>
                    <a href="http://bit.ly/WhatsAppHDTBusiness" class="text-success">Saiba mais &raquo;</a>
                </div>
                <div class="col-md-4">
                    <img src="img/responsivo.png" width="80" alt="Responsivo">
                    <h4 class="mt-3">Sites Responsivos</h4>
                    <p>Design que se adapta a todos os dispositivos, garantindo excelente experiência de navegação para seus clientes.</p>
                    <a href="http://bit.ly/WhatsAppHDTBusiness" class="text-success">Saiba mais &raquo;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO SECTION -->
    <section class="py-5" id="portfolio" style="background: linear-gradient(135deg, #212529, #343a40); color: #fff;">
        <div class="container text-center">
            <h2 class="mb-4 fw-bold" data-aos="fade-up">Portfólio</h2>
            <p data-aos="fade-up" data-aos-delay="100">Descubra projetos que combinam design impactante com performance excepcional. Cada site é uma história de sucesso!</p>
            <div class="row g-4 mt-4">
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/img/cafeverde.png" class="img-fluid portfolio-img" alt="Projeto 1">
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/Arbcrypto.png" class="img-fluid portfolio-img" alt="Projeto 2">
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                    <img src="assets/img/empire.png" class="img-fluid portfolio-img" alt="Projeto 3">
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <img src="assets/img/RickWebDesigner.png" class="img-fluid portfolio-img" alt="Projeto 4">
                </div>
            </div>
            <a href="http://bit.ly/WhatsAppHDTBusiness" class="btn btn-gold mt-4" data-aos="fade-up" data-aos-delay="500">Ver Mais Projetos</a>
        </div>
    </section>


    <!-- SECTION SOBRE  -->
    <section class="py-5" id="sobre">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center">
                    <img src="img/henrique-circle.png" class="img-fluid rounded-circle" alt="Henrique Teixeira">
                </div>
                <div class="col-md-7">
                    <h2 class="mb-3">Sobre Mim</h2>
                    <p>Sou <strong>Henrique Teixeira</strong>, desenvolvedor especializado em criar sites que encantam visualmente e entregam resultados reais. Meu foco é construir soluções digitais sob medida, responsivas e com excelente performance.</p>
                    <p>Se você busca um site profissional que realmente gera valor para seu negócio, <strong>vamos conversar!</strong></p>
                    <a href="http://bit.ly/WhatsAppHDTBusiness" class="btn btn-success mt-3">Fale comigo</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION CONTATO  -->
    <section id="contato" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Contato</h2>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Henrique Teixeira</strong><br>
                    (19) 98270-8339<br>
                    contato@heriqueteixeiraoficial.com.br</p>
                    <div class="d-flex gap-3">
                        <a href="https://www.facebook.com/HenriqueTeixeiraOfficial/" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>
                        <a href="https://www.instagram.com/htwebsitesbuilder/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                        <a href="https://bit.ly/HenriqueTeixeiraFrontEnd" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/henriqueteixeiraoficial/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                        <a href="https://github.com/HenriqueTeixeira1977" target="_blank"><i class="fa fa-github fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="enviar.php" method="POST">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp" class="form-label">WhatsApp</label>
                            <input type="tel" class="form-control" id="whatsapp" name="whatsapp" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo de site</label>
                            <select class="form-select" id="tipo" name="tipo" required>
                                <option value="">Selecione...</option>
                                <option value="institucional">Institucional</option>
                                <option value="landing">Landing Page</option>
                                <option value="loja">Loja Virtual</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Solicitar Orçamento</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION FOOTER  -->
    <footer class="bg-dark text-light py-4 text-center">
        <p class="mb-0">Henrique Teixeira WebDeveloper FrontEnd &copy; 2025 - Todos os direitos reservados</p>
    </footer>

    <!-- SECTION SCRIPTS JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/main.js"></script>
    <script src="js/scripts.js"></script>

</body>
</html>