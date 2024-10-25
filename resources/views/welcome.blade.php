<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VideoVault - Save Your Favorite Video Links</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Figtree', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f0f4f8;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        /* Header styles */
        header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #3b82f6;
        }
        .nav-links a {
            color: #4b5563;
            text-decoration: none;
            margin-left: 1.5rem;
            transition: color 0.3s ease;
        }
        .nav-links a:hover {
            color: #3b82f6;
        }
        /* Hero section styles */
        .hero {
            background-color: #3b82f6;
            color: #ffffff;
            padding: 4rem 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .cta-button {
            display: inline-block;
            background-color: #ffffff;
            color: #3b82f6;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #2563eb;
            color: #ffffff;
        }
        /* Features section styles */
        .features {
            padding: 4rem 0;
            background-color: #ffffff;
        }
        .features h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        .feature-item {
            text-align: center;
            padding: 1.5rem;
            background-color: #f9fafb;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .feature-item img {
            width: 64px;
            height: 64px;
            margin-bottom: 1rem;
        }
        /* Footer styles */
        footer {
            background-color: #1f2937;
            color: #ffffff;
            padding: 2rem 0;
            text-align: center;
        }
        /* Responsive styles */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .hero h1 {
                font-size: 2rem;
            }
            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo">VideoVault</div>
            @if (Route::has('login'))
                <div class="nav-links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Save and Organize Your Favorite Video Links</h1>
                <p>Never lose a great video again. Store, categorize, and access your video collection from anywhere.</p>
                <a href="#" class="cta-button">Get Started</a>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2>Why Choose VideoVault?</h2>
                <div class="feature-grid">
                    <div class="feature-item">
                        <img src="https://via.placeholder.com/64" alt="Save icon">
                        <h3>Easy Saving</h3>
                        <p>Quickly save video links from any platform with just one click.</p>
                    </div>
                    <div class="feature-item">
                        <img src="https://via.placeholder.com/64" alt="Organize icon">
                        <h3>Smart Organization</h3>
                        <p>Categorize your videos and create custom playlists for easy access.</p>
                    </div>
                    <div class="feature-item">
                        <img src="https://via.placeholder.com/64" alt="Share icon">
                        <h3>Share Collections</h3>
                        <p>Share your video collections with friends or keep them private.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 VideoVault. All rights reserved.</p>
            <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
        </div>
    </footer>
</body>
</html>