import { ArrowRight, Book, Users, Award } from 'lucide-react';
import { Button } from '@/components/ui/button';
import primaireImage from '@/assets/primaire.jpg';
import collegeImage from '@/assets/college.jpg';
import lyceeImage from '@/assets/lycee.jpg';

const ProgramHighlights = () => {
  const programs = [
    {
      id: 'primaire',
      title: 'Primaire',
      subtitle: 'CP - CM2',
      description: 'Fondations solides dans un environnement bienveillant où chaque enfant développe sa curiosité naturelle et ses compétences essentielles.',
      image: primaireImage,
      icon: Book,
      features: ['Classes à effectif réduit', 'Méthodes pédagogiques innovantes', 'Éveil artistique et sportif'],
      color: 'from-emerald-500 to-emerald-600'
    },
    {
      id: 'college',
      title: 'Collège',
      subtitle: '6ème - 3ème',
      description: 'Accompagnement personnalisé pour construire les bases académiques solides et développer l\'autonomie et la confiance en soi.',
      image: collegeImage,
      icon: Users,
      features: ['Orientation personnalisée', 'Laboratoires modernes', 'Projets collaboratifs'],
      color: 'from-blue-500 to-blue-600'
    },
    {
      id: 'lycee',
      title: 'Lycée',
      subtitle: '2nde - Terminale',
      description: 'Préparation excellence au baccalauréat et aux études supérieures avec un accompagnement vers la réussite universitaire.',
      image: lyceeImage,
      icon: Award,
      features: ['Préparation Bac', 'Orientation universitaire', 'Excellence académique'],
      color: 'from-purple-500 to-purple-600'
    }
  ];

  return (
    <section className="py-24 bg-gradient-to-br from-muted/30 to-muted/10">
      <div className="container mx-auto px-6">
        {/* Section Header */}
        <div className="text-center mb-16">
          <div className="inline-block bg-gradient-primary text-primary-foreground rounded-full px-6 py-2 mb-6">
            <span className="font-body font-medium">Nos Programmes d'Excellence</span>
          </div>
          <h2 className="font-heading font-bold text-4xl md:text-5xl mb-6 text-gradient">
            Un Parcours d'Excellence
          </h2>
          <p className="font-body text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            De la petite enfance aux études supérieures, nous accompagnons chaque élève 
            dans son épanouissement personnel et sa réussite académique.
          </p>
        </div>

        {/* Programs Grid */}
        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
          {programs.map((program, index) => {
            const IconComponent = program.icon;
            return (
              <div
                key={program.id}
                className={`card-luxury group overflow-hidden fade-in-up ${
                  index === 0 ? 'lg:translate-y-0' : 
                  index === 1 ? 'lg:translate-y-8' : 'lg:translate-y-0'
                }`}
                style={{ animationDelay: `${index * 200}ms` }}
              >
                {/* Image */}
                <div className="relative overflow-hidden rounded-2xl mb-6">
                  <img 
                    src={program.image} 
                    alt={program.title}
                    className="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110"
                  />
                  <div className={`absolute inset-0 bg-gradient-to-t ${program.color} opacity-20 group-hover:opacity-30 transition-opacity duration-300`}></div>
                  <div className="absolute top-4 left-4">
                    <div className="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                      <IconComponent className="text-white" size={24} />
                    </div>
                  </div>
                </div>

                {/* Content */}
                <div className="space-y-4">
                  <div>
                    <h3 className="font-heading font-bold text-2xl text-foreground mb-1">
                      {program.title}
                    </h3>
                    <p className="font-body text-accent font-medium">
                      {program.subtitle}
                    </p>
                  </div>

                  <p className="font-body text-muted-foreground leading-relaxed">
                    {program.description}
                  </p>

                  {/* Features */}
                  <ul className="space-y-2">
                    {program.features.map((feature, idx) => (
                      <li key={idx} className="flex items-center space-x-2">
                        <div className="w-2 h-2 bg-accent rounded-full"></div>
                        <span className="font-body text-sm text-muted-foreground">{feature}</span>
                      </li>
                    ))}
                  </ul>

                  {/* CTA */}
                  <Button className="btn-outline-luxury w-full group mt-6">
                    En Savoir Plus
                    <ArrowRight className="ml-2 group-hover:translate-x-1 transition-transform" size={16} />
                  </Button>
                </div>
              </div>
            );
          })}
        </div>

        {/* Bottom CTA */}
        <div className="text-center mt-16">
          <Button className="btn-luxury text-lg px-8 py-4">
            Découvrir Tous Nos Programmes
            <ArrowRight className="ml-2" size={20} />
          </Button>
        </div>
      </div>
    </section>
  );
};

export default ProgramHighlights;