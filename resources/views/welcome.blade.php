<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: white;
            }

            .image img {
                width: 100px;
                height: 100px;
                object-fit: cover;
                border-radius: 50%;
                opacity: 0.8;
                border: 3px solid white;
            }

            .card {
                width: 350px;
                height: 350px;
                background: transparent;
                box-shadow: inset 20px 20px 20px rgba(0, 0, 0, 0.05),
                    5px 25px 20px rgba(0, 0, 0, 0.05),
                    5px 25px 30px rgba(0, 0, 0, 0.05),
                    inset -20px -20px 25px rgba(255, 255, 255, 0.9);
                border-radius: 61% 39% 52% 48% / 44% 59% 41% 56%;
                margin-bottom: 2rem;
            }

            .card:hover {
                border-radius: 50%;
            }

            .card .card-content {
                position: relative;
                display: flex;
                align-items: center;
                flex-direction: column;
                padding: 30px;
            }

            .icons {
                display: flex;
                justify-content: center;
                gap: 1rem;
                margin-top: 1rem;
            }

            .icons a {
                color: grey;
                font-size: 1.8rem;
                transition: color 0.3s ease;
            }

            .icons a:hover {
                color: #fff;
            }

            .name h5 {
                margin-top: 1rem;
                margin-bottom: 0.5rem;
                color: #333;
            }

            .description-box {
                margin-top: 1rem;
                padding: 1rem;
               
                color: #333;
                font-size: 1rem;
                text-align: center;
                min-height: 60px;
            }

            .cards-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 2rem;
                max-width: 1200px;
                margin: auto;
                padding: 2rem 0;
            }
        </style>
    @endif
</head>
<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col"
>
    <div class="container">
        <div class="cards-container">
            <!-- Original 5 Cards -->
            <div class="card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('image/girl2.jpeg') }}" alt="Card 1" />
                    </div>
                    <div class="icons">
                        <a href="https://example.com/email" target="_blank" rel="noopener noreferrer" aria-label="Email" class="text-light"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-light"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="https://instagram.com/yourprofile" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-light"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="name">
                        <h5 class="card-name mt-3 mb-2">Hamd Foundation</h5>
                    </div>
                    <div class="description-box mt-3 px-3 py-2">
                        <p class="card-text">Description text for card 1 goes here. Brief and concise.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('image/girl.jpeg') }}" alt="Card 2" />
                    </div>
                    <div class="icons">
                        <a href="https://example.com/email2" target="_blank" rel="noopener noreferrer" aria-label="Email" class="text-light"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://wa.me/0987654321" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-light"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="https://facebook.com/yourprofile2" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="text-light"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="name">
                        <h5 class="card-name mt-3 mb-2">Charity Group</h5>
                    </div>
                    <div class="description-box mt-3 px-3 py-2">
                        <p class="card-text">Description text for card 2 goes here. Brief and concise.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('image/girl3.jpeg') }}" alt="Card 3" />
                    </div>
                    <div class="icons">
                        <a href="https://example.com/email3" target="_blank" rel="noopener noreferrer" aria-label="Email" class="text-light"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://wa.me/1122334455" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-light"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="https://instagram.com/yourprofile3" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-light"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="name">
                        <h5 class="card-name mt-3 mb-2">Helping Hands</h5>
                    </div>
                    <div class="description-box mt-3 px-3 py-2">
                        <p class="card-text">Description text for card 3 goes here. Brief and concise.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('image/girl5.jpeg') }}" alt="Card 4" />
                    </div>
                    <div class="icons">
                        <a href="https://example.com/email4" target="_blank" rel="noopener noreferrer" aria-label="Email" class="text-light"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://wa.me/5566778899" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-light"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="https://facebook.com/yourprofile4" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="text-light"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="name">
                        <h5 class="card-name mt-3 mb-2">Red Cross</h5>
                    </div>
                    <div class="description-box mt-3 px-3 py-2">
                        <p class="card-text">Description text for card 4 goes here. Brief and concise.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('image/girl6.jpeg') }}" alt="Card 5" />
                    </div>
                    <div class="icons">
                        <a href="https://example.com/email5" target="_blank" rel="noopener noreferrer" aria-label="Email" class="text-light"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://wa.me/6677889900" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-light"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="https://instagram.com/yourprofile5" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-light"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="name">
                        <h5 class="card-name mt-3 mb-2">Blood Donors</h5>
                    </div>
                    <div class="description-box mt-3 px-3 py-2">
                        <p class="card-text">Description text for card 5 goes here. Brief and concise.</p>
                    </div>
                </div>
            </div>

            <!-- Additional 5 Cards -->
            <div class="card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('image/lgb.png') }}" alt="Card 6" />
                    </div>
                    <div class="icons">
                        <a href="https://example.com/email6" target="_blank" rel="noopener noreferrer" aria-label="Email" class="text-light"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://wa.me/7788990011" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-light"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="https://facebook.com/yourprofile6" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="text-light"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="name">
                        <h5 class="card-name mt-3 mb-2">Hope Foundation</h5>
                    </div>
                    <div class="description-box mt-3 px-3 py-2">
                        <p class="card-text">Description text for card 6 goes here. Brief and concise.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('image/bn.jpg') }}" alt="Card 7" />
                    </div>
                    <div class="icons">
                        <a href="https://example.com/email7" target="_blank" rel="noopener noreferrer" aria-label="Email" class="text-light"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://wa.me/8899001122" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-light"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="https://instagram.com/yourprofile7" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-light"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="name">
                        <h5 class="card-name mt-3 mb-2">Care Group</h5>
                    </div>
                    <div class="description-box mt-3 px-3 py-2">
                        <p class="card-text">Description text for card 7 goes here. Brief and concise.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('image/banr1.jpg') }}" alt="Card 8" />
                    </div>
                    <div class="icons">
                        <a href="https://example.com/email8" target="_blank" rel="noopener noreferrer" aria-label="Email" class="text-light"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://wa.me/9900112233" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-light"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="https://facebook.com/yourprofile8" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="text-light"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="name">
                        <h5 class="card-name mt-3 mb-2">Helping Hands 2</h5>
                    </div>
                    <div class="description-box mt-3 px-3 py-2">
                        <p class="card-text">Description text for card 8 goes here. Brief and concise.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('image/banr2.jpg') }}" alt="Card 9" />
                    </div>
                    <div class="icons">
                        <a href="https://example.com/email9" target="_blank" rel="noopener noreferrer" aria-label="Email" class="text-light"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://wa.me/0011223344" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-light"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="https://instagram.com/yourprofile9" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-light"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="name">
                        <h5 class="card-name mt-3 mb-2">Charity Helpers</h5>
                    </div>
                    <div class="description-box mt-3 px-3 py-2">
                        <p class="card-text">Description text for card 9 goes here. Brief and concise.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="image">
                        <img src="{{ asset('image/girl2.jpeg') }}" alt="Card 10" />
                    </div>
                    <div class="icons">
                        <a href="https://example.com/email10" target="_blank" rel="noopener noreferrer" aria-label="Email" class="text-light"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://wa.me/1122334455" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-light"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="https://facebook.com/yourprofile10" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="text-light"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="name">
                        <h5 class="card-name mt-3 mb-2">Life Savers</h5>
                    </div>
                    <div class="description-box mt-3 px-3 py-2">
                        <p class="card-text">Description text for card 10 goes here. Brief and concise.</p>
                    </div>
                </div>
            </div>
        </div>
         <!-- Carousel Controls outside cards -->
    <div class="d-flex justify-content-center gap-3 mt-4">
        <button id="prevBtn" class="btn btn-primary" type="button">Previous</button>
        <button id="nextBtn" class="btn btn-primary" type="button">Next</button>
    </div>
    </div>
    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cardsContainer = document.querySelector('.cards-container');
        const cards = cardsContainer.children;
        const cardsPerPage = 3;
        let currentIndex = 0;
        
        function updateVisibility() {
            for (let i = 0; i < cards.length; i++) {
                if (i >= currentIndex && i < currentIndex + cardsPerPage) {
                    cards[i].style.display = 'flex'; // cards are flex items
                } else {
                    cards[i].style.display = 'none';
                }
            }
        }
        
        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentIndex + cardsPerPage < cards.length) {
                currentIndex += cardsPerPage;
                updateVisibility();
            }
        });
        
        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentIndex - cardsPerPage >= 0) {
                currentIndex -= cardsPerPage;
                updateVisibility();
            }
        });
        
        // Initialize first view
        updateVisibility();
    });
</script>
</body>
</html>
