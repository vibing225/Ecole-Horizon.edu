<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions - Complexe Scolaire Nouveaux Horizon</title>
    <meta name="description" content="Informations sur les admissions, critères, procédures et dates importantes pour rejoindre Nouveaux Horizon.">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php include './includes/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="section" style="padding-top: 140px; background: linear-gradient(135deg, rgba(26, 90, 62, 0.1), rgba(212, 175, 55, 0.1));">
            <div class="container">
                <div class="text-center" style="max-width: 800px; margin: 0 auto;">
                    <h1 class="text-gradient" style="font-size: clamp(3rem, 6vw, 5rem); margin-bottom: 1.5rem;">Admissions</h1>
                    <p style="font-size: 1.25rem; color: var(--gray-600);">
                        Rejoignez une communauté d'excellence. Découvrez le processus d'admission et les critères d'éligibilité.
                    </p>
                </div>
            </div>
        </section>

        <!-- Processus d'Admission -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <div class="section-badge">Processus d'Admission</div>
                    <h2 class="section-title text-gradient">Étapes Simples et Claires</h2>
                    <p class="section-subtitle">Notre équipe vous accompagne à chaque étape pour une inscription sereine.</p>
                </div>

                <div class="grid grid-3">
                    <div class="card fade-in">
                        <h3 style="margin-bottom: 0.75rem;">1. Demande d'Information</h3>
                        <p style="color: var(--gray-600);">Contactez-nous via le formulaire de contact ou par téléphone pour recevoir la brochure et les informations.</p>
                    </div>
                    <div class="card fade-in" style="animation-delay: 0.1s;">
                        <h3 style="margin-bottom: 0.75rem;">2. Dossier de Candidature</h3>
                        <p style="color: var(--gray-600);">Soumettez les documents requis: bulletins, pièce d'identité, photos et frais de dossier.</p>
                    </div>
                    <div class="card fade-in" style="animation-delay: 0.2s;">
                        <h3 style="margin-bottom: 0.75rem;">3. Entretien & Tests</h3>
                        <p style="color: var(--gray-600);">Un entretien et des évaluations adaptées au niveau souhaité nous aident à mieux connaître votre enfant.</p>
                    </div>
                </div>

                <div class="text-center" style="margin-top: 3rem;">
                    <a href="contact.php" class="btn btn-luxury">Commencer la Demande
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12,5 19,12 12,19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Critères & Frais -->
        <section class="section bg-gray-light">
            <div class="container">
                <div class="grid grid-2" style="gap: 3rem; align-items: start;">
                    <div class="card fade-in">
                        <h3 style="margin-bottom: 1rem;">Critères d'Admission</h3>
                        <ul style="list-style: none; display: grid; gap: 0.75rem;">
                            <li style="display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2"><polyline points="20,6 9,17 4,12"></polyline></svg>
                                Dossier scolaire des deux dernières années
                            </li>
                            <li style="display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2"><polyline points="20,6 9,17 4,12"></polyline></svg>
                                Entretien avec l'élève et les parents
                            </li>
                            <li style="display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2"><polyline points="20,6 9,17 4,12"></polyline></svg>
                                Tests de positionnement (selon le niveau)
                            </li>
                        </ul>
                    </div>

                    <div class="card fade-in">
                        <h3 style="margin-bottom: 1rem;">Frais & Bourses</h3>
                        <p style="color: var(--gray-600); margin-bottom: 1rem;">Nous offrons une structure de frais transparente et des possibilités de bourses au mérite.</p>
                        <div style="display: grid; gap: 0.75rem;">
                            <div style="display: flex; justify-content: space-between;"><span>Frais d'inscription</span><strong class="text-accent">1 000 MAD</strong></div>
                            <div style="display: flex; justify-content: space-between;"><span>Scolarité (mensuelle)</span><strong class="text-accent">À partir de 1 800 MAD</strong></div>
                            <div style="display: flex; justify-content: space-between;"><span>Bourses au mérite</span><strong class="text-accent">Jusqu'à 50%</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="section" style="padding-top: 0;">
            <div class="container text-center">
                <div class="card" style="background: linear-gradient(135deg, rgba(var(--primary-rgb), 0.08), rgba(var(--accent-rgb), 0.08));">
                    <h2 class="text-gradient" style="margin-bottom: 0.5rem;">Prêt à rejoindre l'excellence ?</h2>
                    <p style="color: var(--gray-600); margin-bottom: 1.5rem;">Planifiez une visite de l'école et rencontrez notre équipe pédagogique.</p>
                    <a href="contact.php" class="btn btn-luxury">Planifier une Visite
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12,5 19,12 12,19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include './includes/footer.php'; ?>
    <script src="./assets/js/main.js"></script>
</body>
</html> 