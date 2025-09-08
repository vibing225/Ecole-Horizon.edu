<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Complexe Scolaire Nouveaux Horizon</title>
    <meta name="description" content="Contactez-nous pour plus d'informations ou planifiez une visite de notre école d'excellence.">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php include './includes/header.php'; ?>

    <main>
        <section class="section" style="padding-top: 140px;">
            <div class="container">
                <div class="text-center" style="margin-bottom: 4rem;">
                    <h1 class="text-gradient" style="font-size: clamp(3rem, 6vw, 5rem); margin-bottom: 1.5rem;">Contactez-Nous</h1>
                    <p style="font-size: 1.25rem; color: var(--gray-600);">
                        Nous sommes là pour répondre à toutes vos questions et vous accompagner dans votre choix éducatif.
                    </p>
                </div>

                <div class="grid grid-2" style="gap: 4rem;">
                    <!-- Contact Form -->
                    <div class="card fade-in">
                        <h2 style="color: var(--gray-800); margin-bottom: 1.5rem;">Envoyez-nous un Message</h2>
                        <form style="display: flex; flex-direction: column; gap: 1.5rem;">
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <input type="text" placeholder="Prénom *" required style="padding: 1rem; border: 1px solid var(--gray-300); border-radius: var(--radius-sm); font-family: var(--font-body);">
                                <input type="text" placeholder="Nom *" required style="padding: 1rem; border: 1px solid var(--gray-300); border-radius: var(--radius-sm); font-family: var(--font-body);">
                            </div>
                            <input type="email" placeholder="Email *" required style="padding: 1rem; border: 1px solid var(--gray-300); border-radius: var(--radius-sm); font-family: var(--font-body);">
                            <input type="tel" placeholder="Téléphone" style="padding: 1rem; border: 1px solid var(--gray-300); border-radius: var(--radius-sm); font-family: var(--font-body);">
                            <select style="padding: 1rem; border: 1px solid var(--gray-300); border-radius: var(--radius-sm); font-family: var(--font-body);">
                                <option value="">Sélectionnez un programme</option>
                                <option value="primaire">Primaire (CP - CM2)</option>
                                <option value="college">Collège (6ème - 3ème)</option>
                                <option value="lycee">Lycée (2nde - Terminale)</option>
                            </select>
                            <textarea placeholder="Votre message *" required rows="4" style="padding: 1rem; border: 1px solid var(--gray-300); border-radius: var(--radius-sm); font-family: var(--font-body); resize: vertical;"></textarea>
                            <button type="submit" class="btn btn-luxury">
                                Envoyer le Message
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 0.5rem;">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22,2 15,22 11,13 2,9 22,2"></polygon>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="fade-in">
                        <div class="card" style="margin-bottom: 2rem;">
                            <h3 style="color: var(--gray-800); margin-bottom: 1.5rem;">Informations de Contact</h3>
                            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                                <div style="display: flex; align-items: flex-start; gap: 1rem;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" style="margin-top: 0.25rem; flex-shrink: 0;">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <div>
                                        <h4 style="color: var(--gray-800); margin-bottom: 0.5rem;">Adresse</h4>
                                        <p style="color: var(--gray-600); margin: 0;">
                                            123 Avenue de l'Excellence<br>
                                            Casablanca, Maroc
                                        </p>
                                    </div>
                                </div>
                                
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" style="flex-shrink: 0;">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <div>
                                        <h4 style="color: var(--gray-800); margin-bottom: 0.5rem;">Téléphone</h4>
                                        <p style="color: var(--gray-600); margin: 0;">+212 522 000 000</p>
                                    </div>
                                </div>
                                
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" style="flex-shrink: 0;">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <div>
                                        <h4 style="color: var(--gray-800); margin-bottom: 0.5rem;">Email</h4>
                                        <p style="color: var(--gray-600); margin: 0;">contact@nouveauxhorizon.ma</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-primary text-white">
                            <h3 style="color: #d4af37; margin-bottom: 1rem;">Heures d'Ouverture</h3>
                            <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                                <div style="display: flex; justify-content: space-between;">
                                    <span>Lundi - Vendredi</span>
                                    <span>8h00 - 17h00</span>
                                </div>
                                <div style="display: flex; justify-content: space-between;">
                                    <span>Samedi</span>
                                    <span>9h00 - 12h00</span>
                                </div>
                                <div style="display: flex; justify-content: space-between;">
                                    <span>Dimanche</span>
                                    <span>Fermé</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include './includes/footer.php'; ?>
    <script src="./assets/js/main.js"></script>
</body>
</html>