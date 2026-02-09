<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="css/styles.css">

    <title>Portfolio Héctor Alejandro</title>
</head>

<body>
    <!-- Encabezado -->
    <header class="text-center py-5 bg-light">
        <h1 class="mb-2">I am Héctor Alejandro</h1>
        <p class="lead mb-3">Web Developer Junior</p>
        <a href="https://www.linkedin.com/in/héctor-alejandro-provenzano-blanco" target="_blank"
            class="text-decoration-none text-primary fs-3 me-2">
            <i class="bi bi-linkedin"></i>
        </a>
        <a href="https://github.com/AlejandroProve" target="_blank" class="text-decoration-none text-dark fs-3">
            <i class="bi bi-github"></i>
        </a>
    </header>

    <!-- Proyectos -->
    <section id="projects" class="container my-5">
        <h2 class="mb-4 text-center">Projects</h2>
        <div class="row g-4">
            <!-- Proyecto 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">Brief description of the project goes here.</p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Source Code</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">Brief description of the project goes here.</p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Source Code</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">Brief description of the project goes here.</p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Source Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contact" class="container my-5">
        <h2 class="mb-4 text-center">Contact</h2>

        <form action="send_mail.php" method="POST" class="mx-auto" style="max-width:500px;">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Write your message:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send</button>
        </form>

        <!-- Mensaje de confirmación -->
        <?php if(isset($_GET['success']) && $_GET['success'] == '1'): ?>
        <p class="text-center text-success mt-3">Sucessfily sended</p>
        <?php elseif(isset($_GET['success']) && $_GET['success'] == '0'): ?>
        <p class="text-center text-danger mt-3">Error.</p>
        <?php endif; ?>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>