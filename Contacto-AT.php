<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>k&A Washing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Free Website Template">
    <meta name="description" content="Free Website Template">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">
     
    <!-- BIBLIOTECAS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> 
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- INICIO DA BARRA DE TOPO -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="index.html">
                            <h1>k&A <span>Washing</span></h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DA BARRA DE TOPO -->

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Registrar funcionario</p>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate>

                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Nome" required>
                                <div class="invalid-feedback">Por favor, preencha o campo Nome.</div>
                            </div>

                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Seu Email" required>
                                <div class="invalid-feedback">Por favor, informe um email válido.</div>
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" id="subject" placeholder="Assunto" required>
                                <div class="invalid-feedback">Por favor, preencha o campo Assunto.</div>
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control" id="message" placeholder="Mensagem" required></textarea>
                                <div class="invalid-feedback">Por favor, digite a sua mensagem.</div>
                            </div>
                            
                            <div class="text-center">
                                <button class="btn btn-custom" type="submit" id="sendMessageButton">Enviar Mensagem</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
    
    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owl.carousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
