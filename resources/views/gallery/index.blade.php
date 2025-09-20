<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Air Manis Tour Experience</title>
    <meta name="description" content="Jelajahi koleksi foto-foto menakjubkan dari destinasi wisata Air Manis dan sekitarnya. Temukan keindahan pantai, kuliner, dan budaya lokal.">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .font-space-grotesk {
            font-family: 'Space Grotesk', sans-serif;
        }

        .gallery-item {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-8px);
        }

        .gallery-item img {
            transition: all 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(8px);
        }

        .lightbox.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            animation: lightboxFadeIn 0.3s ease;
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 100%;
            border-radius: 1rem;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .lightbox-close {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .lightbox-close:hover {
            transform: scale(1.1);
            color: #67e8f9;
        }

        .lightbox-info {
            position: absolute;
            bottom: -80px;
            left: 0;
            right: 0;
            color: white;
            text-align: center;
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 2rem;
            cursor: pointer;
            padding: 1rem;
            transition: all 0.2s ease;
            user-select: none;
        }

        .lightbox-nav:hover {
            color: #67e8f9;
            transform: translateY(-50%) scale(1.1);
        }

        .lightbox-prev {
            left: -60px;
        }

        .lightbox-next {
            right: -60px;
        }

        @keyframes lightboxFadeIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Filter animation */
        .filter-btn {
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #06b6d4 0%, #14b8a6 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(6, 182, 212, 0.3);
        }

        /* Gallery animations */
        .gallery-grid {
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .gallery-grid.filtering {
            opacity: 0.7;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-900 via-cyan-900 to-teal-900 min-h-screen">
    <!-- Include Navbar -->
    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="relative pt-24 pb-12 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-72 h-72 bg-cyan-400/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-teal-400/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-gradient-to-r from-cyan-500/20 to-teal-500/20 border border-cyan-400/30 rounded-full text-cyan-300 text-sm font-medium mb-4">
                    📸 Galeri Foto
                </span>
                <h1 class="font-space-grotesk font-black text-4xl md:text-6xl text-white mb-6 leading-tight">
                    Koleksi Foto
                </h1>
                <!-- <p class="text-xl text-cyan-100/80 max-w-3xl mx-auto leading-relaxed">
                    Jelajahi keindahan Air Manis dan destinasi wisata sekitarnya melalui koleksi foto-foto menakjubkan
                </p> -->
            </div>
        </div>
    </section>


    <!-- Gallery Grid -->
    <section class="py-8 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($photos->count() > 0)
            <div class="gallery-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="gallery-grid">
                @foreach($photos as $index => $photo)
                <div class="gallery-item bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/10 rounded-2xl overflow-hidden hover:border-cyan-400/30 hover:shadow-2xl hover:shadow-cyan-500/20"
                    data-index="{{ $index }}"
                    data-title="{{ $photo['title'] }}"
                    data-description="{{ $photo['description'] ?? '' }}"
                    data-image="{{ asset($photo['image']) }}">

                    <div class="relative aspect-square overflow-hidden">
                        <img src="{{ asset($photo['image']) }}"
                            alt="{{ $photo['title'] }}"
                            class="w-full h-full object-cover">

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="font-semibold text-lg mb-1">{{ $photo['title'] }}</h3>
                                <p class="text-sm text-cyan-300">{{ $photo['description'] }}</p>
                            </div>
                        </div>

                        <!-- View Icon -->
                        <div class="absolute top-3 right-3 opacity-0 hover:opacity-100 transition-opacity duration-300">
                            <div class="w-10 h-10 bg-black/50 backdrop-blur-sm rounded-full flex items-center justify-center text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="text-6xl mb-4">📸</div>
                <h3 class="text-2xl font-bold text-white mb-2">Belum Ada Foto</h3>
                <p class="text-white/60 mb-6">Silakan tambahkan foto ke folder public/assets</p>
            </div>
            @endif
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <span class="lightbox-close" id="lightbox-close">&times;</span>
            <span class="lightbox-nav lightbox-prev" id="lightbox-prev">&#8249;</span>
            <img class="lightbox-image" id="lightbox-image" alt="">
            <span class="lightbox-nav lightbox-next" id="lightbox-next">&#8250;</span>
            <div class="lightbox-info">
                <h3 class="text-xl font-bold mb-2" id="lightbox-title"></h3>
                <p class="text-white/80 mt-2" id="lightbox-description"></p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const galleryItems = document.querySelectorAll('.gallery-item');
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');
            const lightboxTitle = document.getElementById('lightbox-title');
            const lightboxDescription = document.getElementById('lightbox-description');
            const lightboxClose = document.getElementById('lightbox-close');
            const lightboxPrev = document.getElementById('lightbox-prev');
            const lightboxNext = document.getElementById('lightbox-next');

            let currentImageIndex = 0;
            let galleryData = [];

            // Collect gallery data
            galleryItems.forEach((item, index) => {
                galleryData.push({
                    index: index,
                    title: item.dataset.title,
                    description: item.dataset.description,
                    image: item.dataset.image
                });

                // Add click event
                item.addEventListener('click', () => {
                    openLightbox(index);
                });
            });

            function openLightbox(index) {
                currentImageIndex = index;
                const data = galleryData[index];

                lightboxImage.src = data.image;
                lightboxTitle.textContent = data.title;
                lightboxDescription.textContent = data.description || '';

                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeLightbox() {
                lightbox.classList.remove('active');
                document.body.style.overflow = '';
            }

            function nextImage() {
                currentImageIndex = (currentImageIndex + 1) % galleryData.length;
                openLightbox(currentImageIndex);
            }

            function prevImage() {
                currentImageIndex = (currentImageIndex - 1 + galleryData.length) % galleryData.length;
                openLightbox(currentImageIndex);
            }


            // Event listeners
            lightboxClose.addEventListener('click', closeLightbox);
            lightboxNext.addEventListener('click', nextImage);
            lightboxPrev.addEventListener('click', prevImage);

            // Close on background click
            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) {
                    closeLightbox();
                }
            });

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (!lightbox.classList.contains('active')) return;

                switch (e.key) {
                    case 'Escape':
                        closeLightbox();
                        break;
                    case 'ArrowLeft':
                        prevImage();
                        break;
                    case 'ArrowRight':
                        nextImage();
                        break;
                }
            });

        });
    </script>
</body>

</html>