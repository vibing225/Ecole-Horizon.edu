import { Mail, Phone, MapPin, Facebook, Instagram, Linkedin } from 'lucide-react';
import { Link } from 'react-router-dom';

const Footer = () => {
  return (
    <footer className="bg-primary text-primary-foreground">
      <div className="container mx-auto px-6 py-16">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Logo & Description */}
          <div className="space-y-4">
            <div className="flex items-center space-x-3">
              <div className="w-12 h-12 bg-gradient-accent rounded-xl flex items-center justify-center">
                <span className="text-accent-foreground font-heading font-bold text-lg">NH</span>
              </div>
              <div>
                <h3 className="font-heading font-bold text-xl">Nouveaux Horizon</h3>
                <p className="text-primary-foreground/80 text-sm">École d'Excellence</p>
              </div>
            </div>
            <p className="text-primary-foreground/70 leading-relaxed">
              Façonnons l'avenir de nos étudiants avec excellence, innovation et valeurs solides depuis plus de 20 ans.
            </p>
            <div className="flex space-x-4">
              <a href="#" className="p-2 bg-primary-light rounded-lg hover:bg-accent transition-colors duration-300">
                <Facebook size={20} />
              </a>
              <a href="#" className="p-2 bg-primary-light rounded-lg hover:bg-accent transition-colors duration-300">
                <Instagram size={20} />
              </a>
              <a href="#" className="p-2 bg-primary-light rounded-lg hover:bg-accent transition-colors duration-300">
                <Linkedin size={20} />
              </a>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="font-heading font-semibold text-lg mb-6 text-accent">Liens Rapides</h4>
            <ul className="space-y-3">
              <li>
                <Link to="/" className="text-primary-foreground/70 hover:text-accent transition-colors duration-300">
                  Accueil
                </Link>
              </li>
              <li>
                <Link to="/about" className="text-primary-foreground/70 hover:text-accent transition-colors duration-300">
                  À Propos
                </Link>
              </li>
              <li>
                <Link to="/academics" className="text-primary-foreground/70 hover:text-accent transition-colors duration-300">
                  Programmes
                </Link>
              </li>
              <li>
                <Link to="/admissions" className="text-primary-foreground/70 hover:text-accent transition-colors duration-300">
                  Admissions
                </Link>
              </li>
              <li>
                <Link to="/news" className="text-primary-foreground/70 hover:text-accent transition-colors duration-300">
                  Actualités
                </Link>
              </li>
              <li>
                <Link to="/contact" className="text-primary-foreground/70 hover:text-accent transition-colors duration-300">
                  Contact
                </Link>
              </li>
            </ul>
          </div>

          {/* Programs */}
          <div>
            <h4 className="font-heading font-semibold text-lg mb-6 text-accent">Nos Programmes</h4>
            <ul className="space-y-3">
              <li className="text-primary-foreground/70">Primaire (CP - CM2)</li>
              <li className="text-primary-foreground/70">Collège (6ème - 3ème)</li>
              <li className="text-primary-foreground/70">Lycée (2nde - Terminale)</li>
              <li className="text-primary-foreground/70">Préparation Baccalauréat</li>
              <li className="text-primary-foreground/70">Activités Parascolaires</li>
              <li className="text-primary-foreground/70">Orientation Universitaire</li>
            </ul>
          </div>

          {/* Contact Info */}
          <div>
            <h4 className="font-heading font-semibold text-lg mb-6 text-accent">Contact</h4>
            <div className="space-y-4">
              <div className="flex items-start space-x-3">
                <MapPin className="text-accent mt-1 flex-shrink-0" size={20} />
                <div>
                  <p className="text-primary-foreground/70">
                    123 Avenue de l'Excellence<br />
                    Casablanca, Maroc
                  </p>
                </div>
              </div>
              <div className="flex items-center space-x-3">
                <Phone className="text-accent flex-shrink-0" size={20} />
                <p className="text-primary-foreground/70">+212 522 000 000</p>
              </div>
              <div className="flex items-center space-x-3">
                <Mail className="text-accent flex-shrink-0" size={20} />
                <p className="text-primary-foreground/70">contact@nouveauxhorizon.ma</p>
              </div>
            </div>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="border-t border-primary-light mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
          <p className="text-primary-foreground/60 text-sm">
            © 2024 Complexe Scolaire Nouveaux Horizon. Tous droits réservés.
          </p>
          <div className="flex space-x-6 mt-4 md:mt-0">
            <a href="#" className="text-primary-foreground/60 hover:text-accent text-sm transition-colors duration-300">
              Politique de Confidentialité
            </a>
            <a href="#" className="text-primary-foreground/60 hover:text-accent text-sm transition-colors duration-300">
              Conditions d'Utilisation
            </a>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;