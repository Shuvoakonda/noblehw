<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primary Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            padding-top: 140px;
        }

        .quick-link-item {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: transform 0.3s ease, color 0.3s ease;
            color: #0dcaf0;

        }

        .quick-link-item i,
        .quick-link-item small {
            transition: color 0.3s ease;
        }

        .quick-link-item:hover {
            transform: scale(1.1);
            color: #0d6efd;

        }




        .quick-link-item:hover i,
        .quick-link-item:hover small {
            color: #0d6efd;
        }

        .nav-link {
            position: relative;
            color: #000;
            font-weight: 500;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #4a90e2;
        }

        .nav-link::after {
            content: '';
            display: block;
            width: 0%;
            height: 2px;
            background: #4a90e2;
            transition: 0.3s;
            position: absolute;
            bottom: 0;
            left: 10%;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        .hero {
            background: linear-gradient(to right, #d9c9e9, #4a90e2);
            color: #000;
            padding: 100px 0;
            text-align: center;
        }

        .section-title {
            color: #000;
            border-bottom: 2px solid #c0c0c0;
            display: inline-block;
            margin-bottom: 20px;
        }

        #mobileMenuOverlay {
            transition: transform 0.3s ease, opacity 0.3s ease;
            transform: translateY(-100%);
            opacity: 0;
        }

        #mobileMenuOverlay.show {
            transform: translateY(0);
            opacity: 1;
        }
    </style>
</head>

<body>

    <div class="fixed-top" style="z-index: 1030;">
        <!-- Top Quick Links -->
        <div class="bg-white py-3 border-bottom">
            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                <!-- Logo -->
                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" height="45" class="me-2" />
                    <span class="fs-4 fw-bold text-primary">PrimaryCare</span>
                </div>

                <!-- Quick Links (hide on mobile) -->
                <div class="d-none d-md-flex flex-wrap justify-content-end gap-4 text-center quick-links">
                    <div class="quick-link-item">
                        <i class="bi bi-person-lines-fill text-info fs-4 d-block"></i>
                        <small>Find a Doctor</small>
                    </div>
                    <div class="quick-link-item">
                        <i class="bi bi-display text-info fs-4 d-block"></i>
                        <small>24/7 Virtual Care</small>
                    </div>
                    <div class="quick-link-item">
                        <i class="bi bi-credit-card text-info fs-4 d-block"></i>
                        <small>Pay Your Bill</small>
                    </div>
                    <div class="quick-link-item">
                        <i class="bi bi-hospital text-info fs-4 d-block"></i>
                        <small>Patient Portal</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light"
            style="background-color: #f5f9fb; border-top: 1px solid #c0c0c0;">
            <div class="container">
                <button class="navbar-toggler" type="button" onclick="openMobileMenu()">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                    <ul class="navbar-nav gap-4">
                        <li class="nav-item">
                            <a class="nav-link @if (request()->routeIs('home')) active @endif"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (request()->routeIs('services')) active @endif"
                                href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (request()->routeIs('about')) active @endif"
                                href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (request()->routeIs('contact')) active @endif"
                                href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="mobileMenuOverlay" class="d-lg-none position-fixed top-0 start-0 w-100 h-100 bg-light overflow-auto"
        style="z-index: 1040; display: none;">
        <div class="p-4">
            <!-- Logo & Close -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40">
                <button onclick="closeMobileMenu()" class="btn btn-outline-secondary rounded-circle">
                    &times;
                </button>
            </div>

            <!-- Page Links -->
            <div class="d-grid gap-3 mb-4">
                <a href="{{ route('about') }}" class="btn btn-white border shadow-sm text-start">About Us</a>
                <a href="{{ route('contact') }}" class="btn btn-white border shadow-sm text-start">Contact</a>
                <a href="#" class="btn btn-white border shadow-sm text-start">Medicare</a>
                <a href="#" class="btn btn-white border shadow-sm text-start">Patient Forms</a>
            </div>

            <!-- Quick Action Links -->
            <div class="d-grid gap-3">
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                    <i class="bi bi-person-lines-fill me-2 fs-4 text-info"></i> Find a Doctor
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                    <i class="bi bi-display me-2 fs-4 text-info"></i> 24/7 Virtual Care
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                    <i class="bi bi-credit-card me-2 fs-4 text-info"></i> Pay Your Bill
                </a>
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                    <i class="bi bi-hospital me-2 fs-4 text-info"></i> Patient Portal
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->

    <footer class="bg-white pt-5 border-top" style="border-color: #c0c0c0;">
        <div class="container pb-4">
            <div class="row text-center text-md-start">
                <!-- Left Column -->
                <div class="col-md-3 mb-4">
                    <div class="mb-3 d-flex align-items-center">
                        <i class="bi bi-person-lines-fill text-info fs-4 me-2"></i>
                        <span>Find a Doctor</span>
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                        <i class="bi bi-display text-info fs-4 me-2"></i>
                        <span>24/7 Virtual Care</span>
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                        <i class="bi bi-credit-card text-info fs-4 me-2"></i>
                        <span>Pay Your Bill</span>
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                        <i class="bi bi-hospital text-info fs-4 me-2"></i>
                        <span>Patient Portal</span>
                    </div>
                </div>

                <!-- Center Column -->
                <div class="col-md-3 mb-4 text-center text-md-start">
                    <img src="{{ asset('images/logo.png') }}" alt="PrimaryCare Logo" height="40" class="mb-2">
                    <h6 class="text-primary fw-semibold">Connect with Us</h6>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3">
                        <i class="bi bi-facebook fs-5"></i>
                        <i class="bi bi-instagram fs-5"></i>
                        <i class="bi bi-twitter-x fs-5"></i>
                        <i class="bi bi-linkedin fs-5"></i>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-3 mb-4 text-center text-md-start">
                    <h6 class="fw-semibold text-primary">Download the App</h6>
                    <ul class="list-unstyled small">
                        <li>• Make appointments</li>
                        <li>• Message your provider</li>
                        <li>• Manage Medications</li>
                        <li>• Get care on the go</li>
                    </ul>
                    <div class="d-flex gap-2 mb-3">
                        <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                            alt="App Store" height="32">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                            alt="Google Play" height="32">
                    </div>
                </div>

                <div class="col-md-3 text-center text-md-start d-flex  justify-content-md-center">
                    <div>
                        <a href="#" class="btn btn-warning fw-bold rounded-pill px-4 mb-3">Patient Login</a>
                        <a href="#" class="btn btn-outline-info fw-bold rounded-pill px-4">For Physicians</a>
                    </div>
                </div>
            </div>

            <hr style="border-color: #c0c0c0;">

            <!-- Bottom Bar -->
            <div class="text-center small text-muted py-2">
                © {{ date('Y') }} PrimaryCare
                <span class="mx-2">|</span>
                <a href="#" class="text-muted text-decoration-none">Privacy Policy</a>
                <span class="mx-2">|</span>
                <a href="#" class="text-muted text-decoration-none">Sitemap</a>
                <span class="mx-2">|</span>
                <a href="#" class="text-muted text-decoration-none">HIPAA Notice</a>
            </div>
        </div>
    </footer>

    <script>
        function openMobileMenu() {
            const menu = document.getElementById('mobileMenuOverlay');
            menu.style.display = 'block';
            setTimeout(() => menu.classList.add('show'), 10);
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            const menu = document.getElementById('mobileMenuOverlay');
            menu.classList.remove('show');
            document.body.style.overflow = '';
            setTimeout(() => menu.style.display = 'none', 300);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
