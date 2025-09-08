import { ArrowRight, Calendar, Phone } from 'lucide-react';
import { Button } from '@/components/ui/button';

const CallToAction = () => {
  return (
    <section className="py-24 bg-gradient-to-br from-primary via-primary to-primary-dark text-primary-foreground relative overflow-hidden">
      {/* Background Pattern */}
      <div className="absolute inset-0 opacity-10">
        <div className="absolute top-0 left-0 w-96 h-96 bg-accent rounded-full -translate-x-48 -translate-y-48"></div>
        <div className="absolute bottom-0 right-0 w-96 h-96 bg-accent rounded-full translate-x-48 translate-y-48"></div>
      </div>

      <div className="container mx-auto px-6 relative z-10">
        <div className="max-w-4xl mx-auto text-center">
          {/* Badge */}
          <div className="inline-block bg-white/10 backdrop-blur-sm rounded-full px-6 py-2 mb-8">
            <span className="font-body font-medium">Rejoignez l'Excellence</span>
          </div>

          {/* Main Heading */}
          <h2 className="font-heading font-bold text-4xl md:text-6xl mb-6 leading-tight">
            Prêt à Offrir le Meilleur 
            <span className="block text-accent">à Votre Enfant ?</span>
          </h2>

          {/* Description */}
          <p className="font-body text-xl md:text-2xl mb-12 leading-relaxed text-primary-foreground/90 max-w-3xl mx-auto">
            Découvrez comment notre approche éducative unique peut transformer 
            l'avenir de votre enfant. Planifiez votre visite dès aujourd'hui.
          </p>

          {/* Stats */}
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div className="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
              <div className="text-3xl font-heading font-bold text-accent mb-2">100%</div>
              <div className="font-body text-primary-foreground/80">Satisfaction Parents</div>
            </div>
            <div className="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
              <div className="text-3xl font-heading font-bold text-accent mb-2">15:1</div>
              <div className="font-body text-primary-foreground/80">Ratio Élève/Enseignant</div>
            </div>
            <div className="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
              <div className="text-3xl font-heading font-bold text-accent mb-2">95%</div>
              <div className="font-body text-primary-foreground/80">Admission Universités</div>
            </div>
          </div>

          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <Button className="bg-accent text-accent-foreground hover:bg-accent-light font-semibold text-lg px-8 py-4 rounded-2xl transition-all duration-300 hover:shadow-glow hover:scale-105 group">
              <Calendar className="mr-2" size={20} />
              Planifier une Visite
              <ArrowRight className="ml-2 group-hover:translate-x-1 transition-transform" size={20} />
            </Button>
            
            <Button className="bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary font-semibold text-lg px-8 py-4 rounded-2xl transition-all duration-300">
              <Phone className="mr-2" size={20} />
              Nous Contacter
            </Button>
          </div>

          {/* Additional Info */}
          <div className="mt-12 pt-8 border-t border-white/20">
            <p className="font-body text-primary-foreground/70 mb-4">
              📞 Appelez-nous au <span className="text-accent font-semibold">+212 522 000 000</span>
            </p>
            <p className="font-body text-primary-foreground/70">
              📧 Ou écrivez-nous à <span className="text-accent font-semibold">contact@nouveauxhorizon.ma</span>
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default CallToAction;