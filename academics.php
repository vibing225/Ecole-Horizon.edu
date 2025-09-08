<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmes Académiques - Complexe Scolaire Nouveaux Horizon</title>
    <meta name="description" content="Découvrez nos programmes d'excellence : Primaire, Collège et Lycée. Un parcours éducatif complet de la petite enfance aux études supérieures.">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php include './includes/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="section" style="padding-top: 140px; background: linear-gradient(135deg, rgba(26, 90, 62, 0.1), rgba(212, 175, 55, 0.1));">
            <div class="container">
                <div class="text-center" style="max-width: 800px; margin: 0 auto;">
                    <h1 class="text-gradient" style="font-size: clamp(3rem, 6vw, 5rem); margin-bottom: 1.5rem;">Nos Programmes Académiques</h1>
                    <p style="font-size: 1.25rem; color: var(--gray-600);">
                        Un parcours d'excellence de la petite enfance aux études supérieures, conçu pour révéler le potentiel unique de chaque élève.
                    </p>
                </div>
            </div>
        </section>

        <!-- Primaire Program -->
        <section class="section">
            <div class="container">
                <div class="grid grid-2" style="gap: 4rem; align-items: center;">
                    <div class="fade-in">
                        <div style="position: relative; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-luxury);">
                            <img src="./assets/images/primaire.jpg" alt="École Primaire" style="width: 100%; height: 400px; object-fit: cover;">
                            <div style="position: absolute; top: 1.5rem; left: 1.5rem; width: 64px; height: 64px; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fade-in">
                        <h2 class="text-gradient" style="font-size: clamp(2rem, 4vw, 3rem); margin-bottom: 0.5rem;">École Primaire</h2>
                        <p class="text-accent" style="font-size: 1.25rem; font-weight: 500; margin-bottom: 1.5rem;">CP - CM2 (6-11 ans)</p>
                        <p style="color: var(--gray-600); font-size: 1.125rem; margin-bottom: 2rem;">
                            Fondations solides pour un avenir brillant avec des méthodes pédagogiques innovantes et un accompagnement personnalisé.
                        </p>
                        
                        <div style="margin-bottom: 2rem;">
                            <h3 style="color: var(--gray-800); margin-bottom: 1rem;">Points Forts du Programme</h3>
                            <ul style="list-style: none; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0.75rem;">
                                <li style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                                        <polyline points="20,6 9,17 4,12"></polyline>
                                    </svg>
                                    Classes à effectif réduit (15 élèves max)
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                                        <polyline points="20,6 9,17 4,12"></polyline>
                                    </svg>
                                    Méthodes pédagogiques innovantes
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                                        <polyline points="20,6 9,17 4,12"></polyline>
                                    </svg>
                                    Éveil artistique et sportif
                                </li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-luxury">
                            En Savoir Plus
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Collège Program -->
        <section class="section bg-gray-light">
            <div class="container">
                <div class="grid grid-2" style="gap: 4rem; align-items: center;">
                    <div class="fade-in" style="order: 2;">
                        <div style="position: relative; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-luxury);">
                            <img src="./assets/images/college.jpg" alt="Collège" style="width: 100%; height: 400px; object-fit: cover;">
                            <div style="position: absolute; top: 1.5rem; left: 1.5rem; width: 64px; height: 64px; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fade-in" style="order: 1;">
                        <h2 class="text-gradient" style="font-size: clamp(2rem, 4vw, 3rem); margin-bottom: 0.5rem;">Collège</h2>
                        <p class="text-accent" style="font-size: 1.25rem; font-weight: 500; margin-bottom: 1.5rem;">6ème - 3ème (11-15 ans)</p>
                        <p style="color: var(--gray-600); font-size: 1.125rem; margin-bottom: 2rem;">
                            Construction des compétences essentielles avec orientation personnalisée et laboratoires scientifiques modernes.
                        </p>
                        
                        <div style="margin-bottom: 2rem;">
                            <h3 style="color: var(--gray-800); margin-bottom: 1rem;">Points Forts du Programme</h3>
                            <ul style="list-style: none; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0.75rem;">
                                <li style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                                        <polyline points="20,6 9,17 4,12"></polyline>
                                    </svg>
                                    Orientation personnalisée
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                                        <polyline points="20,6 9,17 4,12"></polyline>
                                    </svg>
                                    Laboratoires scientifiques modernes
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                                        <polyline points="20,6 9,17 4,12"></polyline>
                                    </svg>
                                    Projets collaboratifs
                                </li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-luxury">
                            En Savoir Plus
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lycée Program -->
        <section class="section">
            <div class="container">
                <div class="grid grid-2" style="gap: 4rem; align-items: center;">
                    <div class="fade-in">
                        <div style="position: relative; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-luxury);">
                            <img src="./assets/images/lycee.jpg" alt="Lycée" style="width: 100%; height: 400px; object-fit: cover;">
                            <div style="position: absolute; top: 1.5rem; left: 1.5rem; width: 64px; height: 64px; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <circle cx="12" cy="8" r="7"></circle>
                                    <polyline points="8.21,13.89 7,23 12,20 17,23 15.79,13.88"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fade-in">
                        <h2 class="text-gradient" style="font-size: clamp(2rem, 4vw, 3rem); margin-bottom: 0.5rem;">Lycée</h2>
                        <p class="text-accent" style="font-size: 1.25rem; font-weight: 500; margin-bottom: 1.5rem;">2nde - Terminale (15-18 ans)</p>
                        <p style="color: var(--gray-600); font-size: 1.125rem; margin-bottom: 2rem;">
                            Excellence vers l'enseignement supérieur avec préparation intensive au Baccalauréat et orientation universitaire.
                        </p>
                        
                        <div style="margin-bottom: 2rem;">
                            <h3 style="color: var(--gray-800); margin-bottom: 1rem;">Points Forts du Programme</h3>
                            <ul style="list-style: none; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0.75rem;">
                                <li style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                                        <polyline points="20,6 9,17 4,12"></polyline>
                                    </svg>
                                    Préparation intensive au Baccalauréat
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                                        <polyline points="20,6 9,17 4,12"></polyline>
                                    </svg>
                                    Orientation universitaire
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2">
                                        <polyline points="20,6 9,17 4,12"></polyline>
                                    </svg>
                                    Excellence académique
                                </li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-luxury">
                            En Savoir Plus
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include './includes/footer.php'; ?>
    <script src="./assets/js/main.js"></script>
</body>
</html>