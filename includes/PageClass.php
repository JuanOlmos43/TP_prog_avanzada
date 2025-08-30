<?php

class PageClass
{
    private string $title  = 'Sys Admin';
    private string $header = '';
    private string $navbar = '';
    private string $body   = ''; 
    private string $footer = '';

    public function __construct()
    {
        $this->setHeader();
        $this->setNavBar(false); // false = invitado; true = autenticado
        $this->setFooter();
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    private function setHeader(): void
    {
        $this->header = '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>' . htmlspecialchars($this->title) . '</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="js/procesoLogin.js"></script>
        </head>
        <body class="bg-light d-flex flex-column min-vh-100">';
    }

    public function setNavBar(bool $isAuthenticated, ?string $username = null): void
    {
        // Bloque a la derecha: varia segun si el usuario esta o no autenticado
        $right = $isAuthenticated
            ? $this->navRightAuth($username ?? 'Usuario')
            : $this->navRightGuest();

        $this->navbar = '
            <nav class="navbar navbar-light bg-white border-bottom shadow-sm ">
                <div class="container d-flex align-items-center">
                    <a class="navbar-brand d-flex align-items-center gap-2 m-0" href="index.php">
                        <img src="imgs/logo.svg" alt="Sys Admin" width="28" height="28" onerror="this.style.display=\'none\'">
                        <span class="fw-semibold">El sitio de administración de inventarios</span>
                    </a>
                    
                    <div class="ms-auto">
                        ' . $right . '
                    </div>
                </div>
            </nav>';
    }

    // Navbar para usuarios no autenticados
    private function navRightGuest(): string
    {
        return '<a class="btn btn-primary" href="login.php">Autenticarse</a>';
    }

    // Navbar para usuarios autenticados --> UNA VEZ HECHA LA PANTALLA DE USUARIO AUTENTICADO PROBAR ESTA FUNCION
    private function navRightAuth(string $username): string
    {
        $name = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        return '<span class="navbar-text">Hola, <strong>' . $name . '</strong></span>';
    }

    /** Solo asigna el cuerpo (HTML). El <main> se agrega en getHtml(). */
    public function setBody(string $html): void
    {
        $this->body = $html;
    }

    private function setFooter(): void
    {
        $this->footer = '
        <footer class="mt-auto py-3 bg-white border-top">
        <div class="container text-center">
            <img src="imgs/pie.jpg" alt="Pie" class="img-fluid" style="max-height:80px;">
        </div>
        </footer>';
        }

    public function getHtml(): string
    {
        return $this->header
             . $this->navbar
             . '<main class="container py-4">' . $this->body . '</main>'
             . $this->footer
             . '</body></html>';
    }
}