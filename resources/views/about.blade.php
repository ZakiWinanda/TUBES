@php use Illuminate\Support\Facades\Auth; @endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/bd9b5a24ba.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>About - Interio.</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .about-section {
            padding: 4rem 2rem;
            text-align: center;
            background-color: #f8f9fa;
        }

        .about-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }

        .about-description {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 2rem;
        }

        .about-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 2rem;
        }
    </style>
</head>

<body class="antialiased">
    @if (Auth::guest())
        <header class="header">
            <nav class="navbar">
                <div class="navbar-container">
                    <a href="/" class="navbar-brand">
                        <span class="brand-text">Interio.</span>
                    </a>
                    <div class="navbar-links">
                        <ul class="nav-list">
                            <li><a href="/home" class="nav-link">Home</a></li>
                            <li><a href="/products" class="nav-link">Products</a></li>
                            <li><a href="/about" class="nav-link">About</a></li>
                            <li><a href="/contact" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    @elseif(Auth::user()->type == 'client')
        <header class="header">
            <nav class="navbar">
                <div class="navbar-container">
                    <a href="/home" class="navbar-brand">
                        <span class="brand-text">Interio.</span>
                    </a>
                    <div class="navbar-links">
                        <ul class="nav-list">
                            <li><a href="/home" class="nav-link">Home</a></li>
                            <li><a href="/products" class="nav-link">Products</a></li>
                            <li><a href="/about" class="nav-link">About</a></li>
                            <li><a href="/contact" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                    <div class="navbar-items">
                        <a href="/cart" class="cart-button">
                            <i class="fas fa-shopping-cart fa-lg"></i>
                        </a>
                        <div class="dropdown">
                            <button id="dropdownNavbarLink" class="dropdown-button">
                                <i class="fa-solid fa-bars fa-lg"></i>
                            </button>
                            <div id="dropdownNavbar" class="dropdown-menu">
                                <ul class="dropdown-list">
                                    <li><a href="/orders" class="dropdown-link">Your orders</a></li>
                                    <li><a href="/logout" class="dropdown-link">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    @elseif(Auth::user()->type == 'admin')
        <header class="header">
            <nav class="navbar">
                <div class="navbar-container">
                    <a href="/" class="navbar-brand">
                        <span class="brand-text">Interio.</span>
                    </a>
                    <div class="navbar-links">
                        <ul class="nav-list">
                            <li><a href="/" class="nav-link">Home</a></li>
                            <li><a href="/product" class="nav-link">Products</a></li>
                            <li><a href="/about" class="nav-link">About</a></li>
                            <li><a href="/contact" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                    <div class="navbar-items">
                        <div class="dropdown">
                            <button id="dropdownNavbarLink" class="dropdown-button">
                                <i class="fa-solid fa-bars fa-lg"></i>
                            </button>
                            <div id="dropdownNavbar" class="dropdown-menu">
                                <ul class="dropdown-list">
                                    <li><a href="/admin" class="dropdown-link">Dashboard</a></li>
                                    <li><a href="/logout" class="dropdown-link">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    @endif

    <section class="about-section">
        <h1 class="about-title">About Us</h1>
        <p class="about-description">
            At Interio, we are passionate about creating spaces that reflect your personality and style. From cozy
            living rooms to elegant dining spaces, we design furniture that not only looks great but also feels
            great. We are committed to quality, innovation, and exceptional customer service.
        </p>
        <img src="{{ asset('images/about-us.jpg') }}" alt="About Us" class="about-image">
    </section>

    @component('Layouts.Components.footer')
    @endcomponent
</body>

</html>
