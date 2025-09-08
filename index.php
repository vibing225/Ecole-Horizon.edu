<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complexe Scolaire Nouveaux Horizon - École d'Excellence</title>
    <meta name="description" content="École privée d'élite - Primaire, Collège, Lycée. Excellence académique et formation de qualité supérieure au Maroc.">
    <meta name="keywords" content="école privée, Casablanca, primaire, collège, lycée, excellence académique, éducation de qualité">
    <meta name="author" content="Complexe Scolaire Nouveaux Horizon">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://nouveauxhorizon.ma/">
    <meta property="og:title" content="Complexe Scolaire Nouveaux Horizon - École d'Excellence">
    <meta property="og:description" content="École privée d'élite - Primaire, Collège, Lycée. Excellence académique et formation de qualité supérieure.">
    <meta property="og:image" content="./assets/images/hero-school.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://nouveauxhorizon.ma/">
    <meta property="twitter:title" content="Complexe Scolaire Nouveaux Horizon - École d'Excellence">
    <meta property="twitter:description" content="École privée d'élite - Primaire, Collège, Lycée. Excellence académique et formation de qualité supérieure.">
    <meta property="twitter:image" content="./assets/images/hero-school.jpg">

    <!-- Favicon -->
    <link rel="canonical" href="https://nouveauxhorizon.ma/">
    
    <!-- Styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <?php include './includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <img src="./assets/images/hero-school.jpg" alt="École Nouveaux Horizon - Bâtiment Principal" class="hero-bg">
        <div class="hero-overlay"></div>
        
        <div class="hero-content fade-in">
            <!-- Badge -->
            <div class="hero-badge">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="#d4af37" stroke="#d4af37" stroke-width="2">
                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                </svg>
                École d'Excellence depuis 2004
            </div>

            <!-- Main Heading -->
            <h1 class="hero-title">
                Complexe Scolaire<br>
                <span class="text-accent-gradient">Nouveaux Horizon</span>
            </h1>

            <!-- Subheading -->
            <p class="hero-subtitle">
                Façonnons l'avenir de nos étudiants avec excellence académique, 
                innovation pédagogique et valeurs humaines solides.
            </p>

            <!-- Program Pills -->
            <div class="hero-pills">
                <div class="hero-pill">Primaire</div>
                <div class="hero-pill">Collège</div>
                <div class="hero-pill">Lycée</div>
            </div>

            <!-- CTA Buttons -->
            <div class="hero-buttons">
                <a href="academics.php" class="btn btn-luxury">
                    Découvrir Nos Programmes
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12,5 19,12 12,19"></polyline>
                    </svg>
                </a>
                <a href="contact.php" class="btn btn-white">
                    Planifier une Visite
                </a>
            </div>

            <!-- Stats -->
            <div class="hero-stats">
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Élèves Excellents</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Taux de Réussite</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">20+</div>
                    <div class="stat-label">Années d'Excellence</div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-dot"></div>
        </div>
    </section>

    <!-- Program Highlights -->
    <section class="section bg-gray-light">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header fade-in">
                <div class="section-badge">Nos Programmes d'Excellence</div>
                <h2 class="section-title text-gradient">Un Parcours d'Excellence</h2>
                <p class="section-subtitle">
                    De la petite enfance aux études supérieures, nous accompagnons chaque élève 
                    dans son épanouissement personnel et sa réussite académique.
                </p>
            </div>

            <!-- Programs Grid -->
            <div class="grid grid-3">
                <!-- Primaire -->
                <article class="card program-card fade-in">
                    <div class="program-image">
                        <img src="./assets/images/primaire.jpg" alt="École Primaire - Élèves en classe">
                        <div class="program-image-overlay"></div>
                        <div class="program-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-gradient">Primaire</h3>
                        <p class="text-accent" style="font-weight: 500; margin-bottom: 1rem;">CP - CM2</p>
                        <p style="color: var(--gray-600); margin-bottom: 1.5rem;">
                            Fondations solides dans un environnement bienveillant où chaque enfant développe sa curiosité naturelle et ses compétences essentielles.
                        </p>
                        
                        <ul class="program-features">
                            <li>Classes à effectif réduit</li>
                            <li>Méthodes pédagogiques innovantes</li>
                            <li>Éveil artistique et sportif</li>
                        </ul>
                        
                        <a href="academics.php" class="btn btn-outline">
                            En Savoir Plus
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Collège -->
                <article class="card program-card fade-in" style="animation-delay: 0.2s;">
                    <div class="program-image">
                        <img src="./assets/images/college.jpg" alt="Collège - Laboratoire de sciences">
                        <div class="program-image-overlay"></div>
                        <div class="program-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-gradient">Collège</h3>
                        <p class="text-accent" style="font-weight: 500; margin-bottom: 1rem;">6ème - 3ème</p>
                        <p style="color: var(--gray-600); margin-bottom: 1.5rem;">
                            Accompagnement personnalisé pour construire les bases académiques solides et développer l'autonomie et la confiance en soi.
                        </p>
                        
                        <ul class="program-features">
                            <li>Orientation personnalisée</li>
                            <li>Laboratoires modernes</li>
                            <li>Projets collaboratifs</li>
                        </ul>
                        
                        <a href="academics.php" class="btn btn-outline">
                            En Savoir Plus
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Lycée -->
                <article class="card program-card fade-in" style="animation-delay: 0.4s;">
                    <div class="program-image">
                        <img src="./assets/images/lycee.jpg" alt="Lycée - Cérémonie de remise des diplômes">
                        <div class="program-image-overlay"></div>
                        <div class="program-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="8" r="7"></circle>
                                <polyline points="8.21,13.89 7,23 12,20 17,23 15.79,13.88"></polyline>
                            </svg>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-gradient">Lycée</h3>
                        <p class="text-accent" style="font-weight: 500; margin-bottom: 1rem;">2nde - Terminale</p>
                        <p style="color: var(--gray-600); margin-bottom: 1.5rem;">
                            Préparation excellence au baccalauréat et aux études supérieures avec un accompagnement vers la réussite universitaire.
                        </p>
                        
                        <ul class="program-features">
                            <li>Préparation Bac</li>
                            <li>Orientation universitaire</li>
                            <li>Excellence académique</li>
                        </ul>
                        
                        <a href="academics.php" class="btn btn-outline">
                            En Savoir Plus
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Bottom CTA -->
            <div class="text-center" style="margin-top: 4rem;">
                <a href="academics.php" class="btn btn-luxury">
                    Découvrir Tous Nos Programmes
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12,5 19,12 12,19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Carousel -->
    <section class="section testimonials">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header fade-in">
                <div class="section-badge" style="background: linear-gradient(135deg, #d4af37, #e6c866);">Témoignages</div>
                <h2 class="section-title text-gradient">Ce Que Disent Nos Familles</h2>
                <p class="section-subtitle">
                    Découvrez les expériences authentiques de nos élèves et parents qui témoignent 
                    de l'excellence de notre accompagnement éducatif.
                </p>
            </div>

            <!-- Carousel -->
            <div class="carousel fade-in">
                <div class="carousel-content">
                    <div class="carousel-track">
                        <!-- Testimonial 1 -->
                        <div class="carousel-slide">
                            <div class="card card-glass">
                                <div style="text-align: center; margin-bottom: 1.5rem;">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="#d4af37" style="margin-bottom: 1rem;">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                
                                <div class="stars">
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                </div>
                                
                                <blockquote class="testimonial-quote">
                                    Nouveaux Horizon a transformé l'approche éducative de ma fille. L'attention personnalisée et la qualité d'enseignement sont exceptionnelles. Elle s'épanouit chaque jour davantage.
                                </blockquote>
                                
                                <div class="testimonial-author">
                                    <div class="author-avatar">AB</div>
                                    <div class="author-info">
                                        <h4>Mme Amina Benali</h4>
                                        <p>Parent d'élève - CM2</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="carousel-slide">
                            <div class="card card-glass">
                                <div style="text-align: center; margin-bottom: 1.5rem;">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="#d4af37" style="margin-bottom: 1rem;">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                
                                <div class="stars">
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                </div>
                                
                                <blockquote class="testimonial-quote">
                                    Un établissement qui allie excellence académique et valeurs humaines. Mon fils a développé une véritable passion pour les sciences grâce aux méthodes innovantes des enseignants.
                                </blockquote>
                                
                                <div class="testimonial-author">
                                    <div class="author-avatar">KM</div>
                                    <div class="author-info">
                                        <h4>M. Karim Mansouri</h4>
                                        <p>Parent d'élève - 3ème</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="carousel-slide">
                            <div class="card card-glass">
                                <div style="text-align: center; margin-bottom: 1.5rem;">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="#d4af37" style="margin-bottom: 1rem;">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                
                                <div class="stars">
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                    <svg class="star" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2">
                                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                                    </svg>
                                </div>
                                
                                <blockquote class="testimonial-quote">
                                    Grâce à la préparation exceptionnelle reçue à Nouveaux Horizon, j'ai intégré l'université de mes rêves. Les enseignants croient vraiment en le potentiel de chaque élève.
                                </blockquote>
                                
                                <div class="testimonial-author">
                                    <div class="author-avatar">SE</div>
                                    <div class="author-info">
                                        <h4>Sarah El Idrissi</h4>
                                        <p>Ancienne élève - Promotion 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <button class="carousel-nav prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="15,18 9,12 15,6"></polyline>
                    </svg>
                </button>
                <button class="carousel-nav next">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9,18 15,12 9,6"></polyline>
                    </svg>
                </button>

                <!-- Dots -->
                <div class="carousel-dots">
                    <button class="carousel-dot active"></button>
                    <button class="carousel-dot"></button>
                    <button class="carousel-dot"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section bg-primary text-white" style="position: relative; overflow: hidden;">
        <!-- Background Pattern -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; z-index: 0;">
            <div style="position: absolute; top: -200px; left: -200px; width: 400px; height: 400px; background: #d4af37; border-radius: 50%;"></div>
            <div style="position: absolute; bottom: -200px; right: -200px; width: 400px; height: 400px; background: #d4af37; border-radius: 50%;"></div>
        </div>

        <div class="container" style="position: relative; z-index: 1;">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <!-- Badge -->
                <div class="hero-badge" style="margin-bottom: 2rem;">
                    Rejoignez l'Excellence
                </div>

                <!-- Main Heading -->
                <h2 style="font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 700; margin-bottom: 1.5rem; line-height: 1.1;">
                    Prêt à Offrir le Meilleur 
                    <span class="text-accent-gradient">à Votre Enfant ?</span>
                </h2>

                <!-- Description -->
                <p style="font-size: clamp(1.25rem, 3vw, 1.5rem); margin-bottom: 3rem; line-height: 1.5; opacity: 0.9;">
                    Découvrez comment notre approche éducative unique peut transformer 
                    l'avenir de votre enfant. Planifiez votre visite dès aujourd'hui.
                </p>

                <!-- Stats -->
                <div class="hero-stats" style="margin-bottom: 3rem;">
                    <div class="stat-card">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Satisfaction Parents</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">15:1</div>
                        <div class="stat-label">Ratio Élève/Enseignant</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Admission Universités</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1.5rem; margin-bottom: 3rem;">
                    <a href="contact.php" class="btn" style="background: #d4af37; color: #1a1a1a; border: none;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 0.5rem;">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        Planifier une Visite
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12,5 19,12 12,19"></polyline>
                        </svg>
                    </a>
                    
                    <a href="contact.php" class="btn btn-white">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 0.5rem;">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        Nous Contacter
                    </a>
                </div>

                <!-- Additional Info -->
                <div style="padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.2);">
                    <p style="color: rgba(255,255,255,0.7); margin-bottom: 1rem;">
                        📞 Appelez-nous au <span style="color: #d4af37; font-weight: 600;">+212 522 000 000</span>
                    </p>
                    <p style="color: rgba(255,255,255,0.7); margin: 0;">
                        📧 Ou écrivez-nous à <span style="color: #d4af37; font-weight: 600;">contact@nouveauxhorizon.ma</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include './includes/footer.php'; ?>

    <!-- JavaScript -->
    <script src="./assets/js/main.js"></script>
</body>
</html>