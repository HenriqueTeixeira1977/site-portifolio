<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henrique Teixeira | Web Developer</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <!--    
    <style>
        :root {
            --primary-bg: #ffffff;
            --text-color: #212529;
            --card-bg: #f8f9fa;
            --gold-accent: #d4af37;
            --card-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        [data-theme="dark"] {
            --primary-bg: #1a1a1a;
            --text-color: #e9ecef;
            --card-bg: #2c2c2c;
            --gold-accent: #e6c200;
            --card-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--primary-bg);
            color: var(--text-color);
            transition: all 0.3s ease;
        }

        header {
            background: linear-gradient(135deg, #212529, #343a40);
            box-shadow: var(--card-shadow);
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            padding: 10px 15px;
            transition: color 0.3s ease, background 0.3s ease;
            border-radius: 5px;
        }

        .navbar-nav .nav-link:hover {
            color: var(--gold-accent) !important;
            background: rgba(255, 255, 255, 0.1);
        }

        .btn-gold {
            background-color: var(--gold-accent);
            border-color: var(--gold-accent);
            color: #fff;
            font-weight: 500;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-gold:hover {
            background-color: #b8860b;
            border-color: #b8860b;
            transform: translateY(-2px);
        }

        .card {
            background-color: var(--card-bg);
            box-shadow: var(--card-shadow);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .hero-section {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 80px 0;
        }

        .floating-img {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0); }
        }

        .portfolio-img {
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .portfolio-img:hover {
            transform: scale(1.05);
        }

        .theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-color);
            z-index: 1000;
        }

        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--gold-accent);
            box-shadow: 0 0 5px rgba(212, 175, 55, 0.5);
        }

        footer {
            background: linear-gradient(135deg, #212529, #343a40);
        }

        @media (max-width: 767.98px) {
            .hero-section {
                padding: 40px 0;
            }

            .hero-section h2 {
                font-size: 2rem;
            }

            .btn-gold {
                padding: 10px 20px;
            }

            .portfolio-img {
                margin-bottom: 20px;
            }

            .navbar-nav {
                background: #343a40;
                padding: 15px;
                border-radius: 10px;
            }
        }
    </style>
-->
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

    <!-- HERO SECTION -->
    <section class="hero-section text-center text-md-start" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="display-4 fw-bold">Crie um site que <span style="color: var(--gold-accent);">conquista clientes</span></h2>
                    <p class="lead mt-4">Transforme sua visão em um site profissional, responsivo e otimizado para conversões. Integrações com WhatsApp, Instagram e mais para alavancar seu negócio.</p>
                    <a href="http://bit.ly/WhatsAppHDTBusiness" target="_blank" class="btn btn-gold btn-lg mt-3">Comece Seu Projeto Agora</a>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <img src="assets/img/imagem-home.png" class="img-fluid floating-img" alt="Construção de Sites">
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="py-5" id="services">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold" data-aos="fade-up">Nossos Serviços</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card text-center p-4 h-100">
                        <img src="assets/img/website-institucional.png" width="80" alt="Website Institucional" class="mb-3">
                        <h4 class="fw-bold">Website Institucional</h4>
                        <p>Estabeleça sua presença online com um site que reflete autoridade e profissionalismo. Seja encontrado e conquiste confiança.</p>
                        <a href="http://bit.ly/WhatsAppHDTBusiness" class="text-gold" style="color: var(--gold-accent);">Saiba mais »</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card text-center p-4 h-100">
                        <img src="assets/img/website.png" width="80" alt="Landing Pages" class="mb-3">
                        <h4 class="fw-bold">Landing Pages</h4>
                        <p>Páginas estratégicas para campanhas, projetadas para maximizar conversões e gerar resultados reais.</p>
                        <a href="http://bit.ly/WhatsAppHDTBusiness" class="text-gold" style="color: var(--gold-accent);">Saiba mais »</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card text-center p-4 h-100">
                        <img src="assets/img/responsivo.png" width="80" alt="Responsivo" class="mb-3">
                        <h4 class="fw-bold">Sites Responsivos</h4>
                        <p>Design adaptável para todos os dispositivos, garantindo uma experiência impecável para seus clientes.</p>
                        <a href="http://bit.ly/WhatsAppHDTBusiness" class="text-gold" style="color: var(--gold-accent);">Saiba mais »</a>
                    </div>
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

    <!-- SOBRE SECTION -->
    <section class="py-5" id="sobre">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center" data-aos="fade-right" data-aos-duration="1000">
                    <img src="assets/img/henrique_webdev.png" class="img-fluid rounded" alt="Henrique Teixeira">
                </div>
                <div class="col-md-7" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="mb-3 fw-bold">Sobre Mim</h2>
                    <p>Eu sou <strong>Henrique Teixeira</strong>, um desenvolvedor apaixonado por criar sites que não apenas impressionam visualmente, mas também geram resultados concretos. Minha missão é transformar sua ideia em uma solução digital sob medida, com performance excepcional e design responsivo.</p>
                    <p><strong>Pronto para levar seu negócio ao próximo nível?</strong> Vamos construir algo extraordinário juntos!</p>
                    <a href="http://bit.ly/WhatsAppHDTBusiness" class="btn btn-gold mt-3">Fale Comigo Agora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTATO SECTION -->
    <section id="contato" class="py-5" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef);">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold" data-aos="fade-up">Entre em Contato</h2>
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="card p-4 h-100">
                        <h4 class="fw-bold mb-3">Conecte-se Comigo</h4>
                        <p><strong>Henrique Teixeira</strong><br>
                           (19) 98270-8339<br>
                           contato@heriqueteixeiraoficial.com.br</p>
                        <div class="d-flex gap-3">
                            <a href="https://www.facebook.com/HenriqueTeixeiraOfficial/" target="_blank" style="color: var(--gold-accent);"><i class="fab fa-facebook-f fa-2x"></i></a>
                            <a href="https://www.instagram.com/htwebsitesbuilder/" target="_blank" style="color: var(--gold-accent);"><i class="fab fa-instagram fa-2x"></i></a>
                            <a href="https://bit.ly/HenriqueTeixeiraFrontEnd" target="_blank" style="color: var(--gold-accent);"><i class="fab fa-whatsapp fa-2x"></i></a>
                            <a href="https://www.linkedin.com/in/henriqueteixeiraoficial/" target="_blank" style="color: var(--gold-accent);"><i class="fab fa-linkedin-in fa-2x"></i></a>
                            <a href="https://github.com/HenriqueTeixeira1977" target="_blank" style="color: var(--gold-accent);"><i class="fab fa-github fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="card p-4 h-100">
                        <h4 class="fw-bold mb-3">Solicite um Orçamento</h4>
                        <form action="actions/contatos/enviar.php" method="POST">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
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
                                <label for="tipo_site" class="form-label">Tipo de Site</label>
                                <select class="form-select" id="tipo_site" name="tipo_site" required>
                                    <option value="">Selecione...</option>
                                    <option value="Institucional">Institucional</option>
                                    <option value="Portfólio">Portfólio</option>
                                    <option value="Loja Virtual">Loja Virtual</option>
                                    <option value="Landing Page">Landing Page</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="mensagem" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-gold">Enviar Solicitação</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-4 text-center text-light">
        <p class="mb-0">Henrique Teixeira Web Developer © 2025 - Todos os direitos reservados</p>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        function toggleTheme() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            document.querySelector('.theme-toggle i').className = newTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        }

        // Carregar tema salvo
        const savedTheme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', savedTheme);
        document.querySelector('.theme-toggle i').className = savedTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
    </script>
</body>
</html>