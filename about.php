<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - Complexe Scolaire Nouveaux Horizon</title>
    <meta name="description" content="Découvrez l'histoire, la mission et les valeurs de Nouveaux Horizon, école d'excellence depuis plus de 20 ans.">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php include './includes/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="section" style="padding-top: 140px; background: linear-gradient(135deg, rgba(26, 90, 62, 0.1), rgba(212, 175, 55, 0.1));">
            <div class="container">
                <div class="text-center" style="max-width: 800px; margin: 0 auto;">
                    <h1 class="text-gradient" style="font-size: clamp(3rem, 6vw, 5rem); margin-bottom: 1.5rem;">À Propos de Nous</h1>
                    <p style="font-size: 1.25rem; color: var(--gray-600);">
                        Depuis plus de 20 ans, nous façonnons l'avenir de nos élèves avec passion, dévouement et excellence.
                    </p>
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="section">
            <div class="container">
                <div class="grid grid-2" style="gap: 4rem; align-items: center;">
                    <div class="card fade-in">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                            <div style="width: 64px; height: 64px; background: var(--gradient-primary); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M12 1v6m0 6v6m11-7h-6m-6 0H1"></path>
                                </svg>
                            </div>
                            <h2 class="text-gradient">Notre Mission</h2>
                        </div>
                        <p style="color: var(--gray-600); font-size: 1.125rem; line-height: 1.7;">
                            Offrir une éducation d'excellence qui permet à chaque élève de révéler son plein potentiel, 
                            de développer ses talents uniques et de devenir un citoyen responsable et engagé.
                        </p>
                    </div>

                    <div class="card fade-in">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                            <div style="width: 64px; height: 64px; background: var(--gradient-accent); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--black)" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </div>
                            <h2 class="text-accent-gradient">Notre Vision</h2>
                        </div>
                        <p style="color: var(--gray-600); font-size: 1.125rem; line-height: 1.7;">
                            Être reconnue comme l'école de référence au Maroc, formant les leaders de demain 
                            grâce à une approche pédagogique innovante et des valeurs humaines fortes.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values -->
        <section class="section bg-gray-light">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title text-gradient">Nos Valeurs Fondamentales</h2>
                </div>
                
                <div class="grid grid-3">
                    <div class="card text-center fade-in">
                        <div style="width: 80px; height: 80px; background: var(--gradient-primary); border-radius: var(--radius-xl); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M12 1v6m0 6v6m11-7h-6m-6 0H1"></path>
                            </svg>
                        </div>
                        <h3 style="color: var(--gray-800); margin-bottom: 1rem;">Excellence Académique</h3>
                        <p style="color: var(--gray-600);">
                            Nous visons l'excellence dans tous les aspects de l'éducation, offrant un enseignement de qualité supérieure.
                        </p>
                    </div>

                    <div class="card text-center fade-in">
                        <div style="width: 80px; height: 80px; background: var(--gradient-primary); border-radius: var(--radius-xl); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </div>
                        <h3 style="color: var(--gray-800); margin-bottom: 1rem;">Bienveillance</h3>
                        <p style="color: var(--gray-600);">
                            Un environnement chaleureux où chaque élève se sent valorisé et encouragé à donner le meilleur de lui-même.
                        </p>
                    </div>

                    <div class="card text-center fade-in">
                        <div style="width: 80px; height: 80px; background: var(--gradient-primary); border-radius: var(--radius-xl); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        </div>
                        <h3 style="color: var(--gray-800); margin-bottom: 1rem;">Ouverture au Monde</h3>
                        <p style="color: var(--gray-600);">
                            Nous préparons nos élèves à devenir des citoyens du monde, ouverts aux autres cultures.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include './includes/footer.php'; ?>
    <script src="./assets/js/main.js"></script>
</body>
</html>