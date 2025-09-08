<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités - Complexe Scolaire Nouveaux Horizon</title>
    <meta name="description" content="Dernières nouvelles, événements et annonces du Complexe Scolaire Nouveaux Horizon.">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php include './includes/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="section" style="padding-top: 140px; background: linear-gradient(135deg, rgba(26, 90, 62, 0.1), rgba(212, 175, 55, 0.1));">
            <div class="container">
                <div class="text-center" style="max-width: 800px; margin: 0 auto;">
                    <h1 class="text-gradient" style="font-size: clamp(3rem, 6vw, 5rem); margin-bottom: 1.5rem;">Actualités</h1>
                    <p style="font-size: 1.25rem; color: var(--gray-600);">
                        Restez informés des dernières nouvelles, événements et réussites de nos élèves.
                    </p>
                </div>
            </div>
        </section>

        <!-- News Grid -->
        <section class="section">
            <div class="container">
                <div class="grid grid-3">
                    <article class="card fade-in">
                        <div style="position: relative; border-radius: var(--radius-lg); overflow: hidden; margin-bottom: 1rem;">
                            <img src="./assets/images/college.jpg" alt="Journée Portes Ouvertes" style="width: 100%; height: 180px; object-fit: cover;">
                        </div>
                        <span class="section-badge" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">Événement</span>
                        <h3 style="margin-top: 0.75rem;">Journée Portes Ouvertes</h3>
                        <p style="color: var(--gray-600);">Rencontrez nos enseignants et découvrez nos installations le 15 octobre.</p>
                        <a href="contact.php" class="btn btn-outline" style="margin-top: 1rem;">Je m'inscris</a>
                    </article>

                    <article class="card fade-in" style="animation-delay: 0.1s;">
                        <div style="position: relative; border-radius: var(--radius-lg); overflow: hidden; margin-bottom: 1rem;">
                            <img src="./assets/images/primaire.jpg" alt="Concours de Mathématiques" style="width: 100%; height: 180px; object-fit: cover;">
                        </div>
                        <span class="section-badge" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">Succès</span>
                        <h3 style="margin-top: 0.75rem;">Concours de Mathématiques</h3>
                        <p style="color: var(--gray-600);">Félicitations à nos élèves pour leurs résultats remarquables au concours régional.</p>
                        <a href="#" class="btn btn-outline" style="margin-top: 1rem;">Voir les résultats</a>
                    </article>

                    <article class="card fade-in" style="animation-delay: 0.2s;">
                        <div style="position: relative; border-radius: var(--radius-lg); overflow: hidden; margin-bottom: 1rem;">
                            <img src="./assets/images/lycee.jpg" alt="Partenariat Universitaire" style="width: 100%; height: 180px; object-fit: cover;">
                        </div>
                        <span class="section-badge" style="padding: 0.25rem 0.75rem; font-size: 0.75rem;">Annonce</span>
                        <h3 style="margin-top: 0.75rem;">Partenariat Universitaire</h3>
                        <p style="color: var(--gray-600);">Signature d'un partenariat avec une université prestigieuse pour faciliter l'orientation post-bac.</p>
                        <a href="#" class="btn btn-outline" style="margin-top: 1rem;">En savoir plus</a>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <?php include './includes/footer.php'; ?>
    <script src="./assets/js/main.js"></script>
</body>
</html> 