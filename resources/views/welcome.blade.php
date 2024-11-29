<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        :root {
    --primary-dark: #111827;
    --primary-light: #1f2937;
    --gray-light: #f3f4f6;
    --gray-medium: #9ca3af;
    --gray-dark: #4b5563;
    --accent: #3b82f6;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
}

body {
    background-color: var(--primary-dark);
    color: var(--gray-light);
    line-height: 1.6;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* Header Styles */
header {
    background-color: rgba(17, 24, 39, 0.95);
    padding: 1rem 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    backdrop-filter: blur(8px);
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    color: white;
    font-size: 1.8rem;
    font-weight: 700;
    background: linear-gradient(to right, var(--accent), #60a5fa);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.nav-links {
    display: flex;
    gap: 1rem;
}

.nav-link {
    color: var(--gray-light);
    text-decoration: none;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    transition: all 0.3s ease;
}

.nav-link:hover {
    background-color: var(--primary-light);
    color: white;
}

/* Hero Section */
.hero {
    padding: 10rem 0 5rem;
    background: linear-gradient(to bottom, var(--primary-dark), var(--primary-light));
    text-align: center;
}

.hero h1 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    background: linear-gradient(to right, #fff, var(--gray-medium));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: var(--gray-medium);
    max-width: 600px;
    margin: 0 auto 2rem;
}

/* Feature Cards */
.features {
    padding: 5rem 0;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 3rem;
    color: white;
}

.cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    padding: 1rem;
}

.feature-card {
    background: var(--primary-light);
    padding: 2rem;
    border-radius: 1rem;
    transition: transform 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.feature-card:hover {
    transform: translateY(-5px);
}

.card-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.feature-card h3 {
    color: white;
    margin-bottom: 1rem;
    font-size: 1.5rem;
}

.feature-card p {
    color: var(--gray-medium);
}

/* Highlights Section */
.highlights {
    padding: 5rem 0;
    background-color: var(--primary-light);
}

.highlight-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.highlight-card {
    padding: 2rem;
    background: var(--primary-dark);
    border-radius: 1rem;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.highlight-card h3 {
    color: white;
    margin-bottom: 1rem;
    font-size: 1.25rem;
}

.highlight-card p {
    color: var(--gray-medium);
}

/* CTA Section */
.cta-section {
    padding: 5rem 0;
    text-align: center;
    background: linear-gradient(to top, var(--primary-dark), var(--primary-light));
}

.cta-section h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: white;
}

.cta-section p {
    color: var(--gray-medium);
    margin-bottom: 2rem;
}

.cta-button {
    display: inline-block;
    padding: 1rem 2rem;
    background: var(--accent);
    color: white;
    text-decoration: none;
    border-radius: 0.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.cta-button:hover {
    background: #2563eb;
    transform: translateY(-2px);
}

/* Footer */
footer {
    background-color: var(--primary-dark);
    padding: 2rem 0;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.footer-content {
    text-align: center;
    color: var(--gray-medium);
}

.footer-content p {
    margin: 0.5rem 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero h1 {
        font-size: 2.5rem;
    }
    
    .nav-links {
        gap: 0.5rem;
    }
    
    .nav-link {
        padding: 0.5rem;
    }
    
    .cards-grid,
    .highlight-grid {
        grid-template-columns: 1fr;
    }
}
    </style>
    <title>VideoVault - Save Your Favorite Video Links</title>
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo">VideoVault</div>
            @if (Route::has('login'))
                <div class="nav-links">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Tu destino definitivo para contenido premium</h1>
                <p class="hero-subtitle">
                    Explora un mundo de posibilidades a través de nuestro catálogo de videos cuidadosamente seleccionados para esta comunidad.
                </p>
                <a href="#explore" class="cta-button">¿Qué ofrecemos?</a>
            </div>
        </section>

        <section class="features" id="explore">
            <div class="container">
                <h2 class="section-title">Descubre VideoVault</h2>
                <div class="cards-grid">
                    <div class="feature-card">
                        <div class="card-icon">🎥</div>
                        <h3>Contenido Premium</h3>
                        <p>Accede a contenido exclusivo en alta calidad, producido por la oganización y para usted nuestro cliente.</p>
                    </div>
                    <div class="feature-card">
                        <div class="card-icon">🚀</div>
                        <h3>Experiencia Centralizada</h3>
                        <p>Aquí encontrarás el contenido necesario para que puedas evolucionar con nosotros.</p>
                    </div>
                    <div class="feature-card">
                        <div class="card-icon">💫</div>
                        <h3>Calidad Garantizada</h3>
                        <p>Revisión rigurosa antes de publicar un video y así ofrecerles un espacio sano y seguro.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="highlights">
            <div class="container">
                <div class="highlight-grid">
                    <div class="highlight-card">
                        <h3>Capacitación dinamica</h3>
                        <p>Accede al contenido cuando quieras y desde donde quieras. Tu tiempo, tus reglas, tu capacitación.</p>
                    </div>
                    <div class="highlight-card">
                        <h3>Contenido Actualizado</h3>
                        <p>Retroalimentación constante de los videos para que siempre estés informado y actualizado.</p>
                    </div>
                    <div class="highlight-card">
                        <h3>Soporte Premium</h3>
                        <p>Asistencia personalizada para garantizar la mejor experiencia.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <h2>¿Listo para comenzar tu viaje?</h2>
                <p>Únete a nuestra comunidad <br>
                    TE ESPERAMOS</p>
                <a href="{{ route('register') }}" class="cta-button">Crear Cuenta</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2024 VideoVault. Todos los derechos reservados.</p>
                <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
            </div>
        </div>
    </footer>
</body>
</html>