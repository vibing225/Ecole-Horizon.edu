import { useEffect, useState } from 'react';
import { ArrowRight, Star } from 'lucide-react';
import { Button } from '@/components/ui/button';
import heroImage from '@/assets/hero-school.jpg';

const HeroSection = () => {
  const [isVisible, setIsVisible] = useState(false);

  useEffect(() => {
    setIsVisible(true);
  }, []);

  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Background Image */}
      <div className="absolute inset-0">
        <img 
          src={heroImage} 
          alt="École Nouveaux Horizon" 
          className="w-full h-full object-cover"
        />
        <div className="absolute inset-0 hero-overlay"></div>
      </div>

      {/* Content */}
      <div className="relative z-10 container mx-auto px-6 text-center text-white">
        <div className={`transition-all duration-1000 transform ${
          isVisible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'
        }`}>
          {/* Badge */}
          <div className="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
            <Star className="text-accent" size={20} />
            <span className="font-body font-medium">École d'Excellence depuis 2004</span>
          </div>

          {/* Main Heading */}
          <h1 className="font-heading font-bold text-5xl md:text-7xl lg:text-8xl mb-6 leading-tight">
            Complexe Scolaire
            <span className="block text-accent">Nouveaux Horizon</span>
          </h1>

          {/* Subheading */}
          <p className="font-body text-xl md:text-2xl mb-8 max-w-3xl mx-auto leading-relaxed text-white/90">
            Façonnons l'avenir de nos étudiants avec excellence académique, 
            innovation pédagogique et valeurs humaines solides.
          </p>

          {/* Program Pills */}
          <div className="flex flex-wrap justify-center gap-4 mb-12">
            <div className="bg-white/10 backdrop-blur-sm rounded-full px-6 py-2">
              <span className="font-body font-medium">Primaire</span>
            </div>
            <div className="bg-white/10 backdrop-blur-sm rounded-full px-6 py-2">
              <span className="font-body font-medium">Collège</span>
            </div>
            <div className="bg-white/10 backdrop-blur-sm rounded-full px-6 py-2">
              <span className="font-body font-medium">Lycée</span>
            </div>
          </div>

          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <Button className="btn-luxury text-lg px-8 py-4 group">
              Découvrir Nos Programmes
              <ArrowRight className="ml-2 group-hover:translate-x-1 transition-transform" size={20} />
            </Button>
            <Button className="btn-outline-luxury text-lg px-8 py-4">
              Planifier une Visite
            </Button>
          </div>
        </div>

        {/* Stats */}
        <div className={`grid grid-cols-1 md:grid-cols-3 gap-8 mt-20 transition-all duration-1000 delay-500 transform ${
          isVisible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'
        }`}>
          <div className="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
            <div className="text-3xl font-heading font-bold text-accent mb-2">500+</div>
            <div className="font-body text-white/80">Élèves Excellents</div>
          </div>
          <div className="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
            <div className="text-3xl font-heading font-bold text-accent mb-2">98%</div>
            <div className="font-body text-white/80">Taux de Réussite</div>
          </div>
          <div className="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
            <div className="text-3xl font-heading font-bold text-accent mb-2">20+</div>
            <div className="font-body text-white/80">Années d'Excellence</div>
          </div>
        </div>
      </div>

      {/* Scroll Indicator */}
      <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <div className="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
          <div className="w-1 h-3 bg-white/70 rounded-full mt-2 animate-bounce"></div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;