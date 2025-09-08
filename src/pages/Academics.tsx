import Navigation from '@/components/Navigation';
import Footer from '@/components/Footer';
import { Book, Users, Award, ArrowRight, CheckCircle } from 'lucide-react';
import { Button } from '@/components/ui/button';
import primaireImage from '@/assets/primaire.jpg';
import collegeImage from '@/assets/college.jpg';
import lyceeImage from '@/assets/lycee.jpg';

const Academics = () => {
  const programs = [
    {
      id: 'primaire',
      title: 'École Primaire',
      subtitle: 'CP - CM2 (6-11 ans)',
      description: 'Fondations solides pour un avenir brillant',
      image: primaireImage,
      icon: Book,
      features: [
        'Classes à effectif réduit (15 élèves max)',
        'Méthodes pédagogiques innovantes',
        'Éveil artistique et sportif',
        'Apprentissage précoce des langues',
        'Accompagnement personnalisé',
        'Développement de l\'autonomie'
      ],
      curriculum: [
        'Français - Lecture, écriture, expression',
        'Mathématiques - Logique et calcul',
        'Sciences - Éveil scientifique',
        'Arabe - Langue et culture',
        'Anglais - Initiation ludique',
        'Arts plastiques et musique'
      ]
    },
    {
      id: 'college',
      title: 'Collège',
      subtitle: '6ème - 3ème (11-15 ans)',
      description: 'Construction des compétences essentielles',
      image: collegeImage,
      icon: Users,
      features: [
        'Orientation personnalisée',
        'Laboratoires scientifiques modernes',
        'Projets collaboratifs',
        'Préparation au BEPC',
        'Clubs et activités parascolaires',
        'Suivi psychopédagogique'
      ],
      curriculum: [
        'Mathématiques avancées',
        'Sciences physiques et SVT',
        'Langues : Français, Arabe, Anglais',
        'Histoire-Géographie',
        'Technologie et informatique',
        'Arts et éducation physique'
      ]
    },
    {
      id: 'lycee',
      title: 'Lycée',
      subtitle: '2nde - Terminale (15-18 ans)',
      description: 'Excellence vers l\'enseignement supérieur',
      image: lyceeImage,
      icon: Award,
      features: [
        'Préparation intensive au Baccalauréat',
        'Orientation universitaire',
        'Filières scientifiques et littéraires',
        'Partenariats universitaires',
        'Stages en entreprise',
        'Développement du leadership'
      ],
      curriculum: [
        'Filière Sciences Mathématiques',
        'Filière Sciences Physiques',
        'Filière Sciences de la Vie et de la Terre',
        'Filière Lettres et Sciences Humaines',
        'Préparation aux concours',
        'Projets de recherche'
      ]
    }
  ];

  return (
    <div className="min-h-screen">
      <Navigation />
      
      <main>
        {/* Hero Section */}
        <section className="pt-32 pb-16 bg-gradient-to-br from-primary/10 to-accent/10">
          <div className="container mx-auto px-6">
            <div className="max-w-4xl mx-auto text-center">
              <h1 className="font-heading font-bold text-5xl md:text-6xl mb-6 text-gradient">
                Nos Programmes Académiques
              </h1>
              <p className="font-body text-xl text-muted-foreground leading-relaxed">
                Un parcours d'excellence de la petite enfance aux études supérieures, 
                conçu pour révéler le potentiel unique de chaque élève.
              </p>
            </div>
          </div>
        </section>

        {/* Programs */}
        {programs.map((program, index) => {
          const IconComponent = program.icon;
          const isReversed = index % 2 === 1;
          
          return (
            <section key={program.id} className={`py-24 ${index % 2 === 1 ? 'bg-gradient-to-br from-muted/30 to-muted/10' : ''}`}>
              <div className="container mx-auto px-6">
                <div className={`grid grid-cols-1 lg:grid-cols-2 gap-16 items-center ${isReversed ? 'lg:grid-flow-col-dense' : ''}`}>
                  {/* Image */}
                  <div className={`${isReversed ? 'lg:col-start-2' : ''}`}>
                    <div className="relative overflow-hidden rounded-3xl shadow-luxury group">
                      <img 
                        src={program.image} 
                        alt={program.title}
                        className="w-full h-96 object-cover transition-transform duration-700 group-hover:scale-110"
                      />
                      <div className="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                      <div className="absolute bottom-6 left-6">
                        <div className="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center">
                          <IconComponent className="text-white" size={32} />
                        </div>
                      </div>
                    </div>
                  </div>

                  {/* Content */}
                  <div className={`space-y-6 ${isReversed ? 'lg:col-start-1' : ''}`}>
                    <div>
                      <h2 className="font-heading font-bold text-4xl md:text-5xl mb-3 text-gradient">
                        {program.title}
                      </h2>
                      <p className="font-body text-xl text-accent font-medium mb-4">
                        {program.subtitle}
                      </p>
                      <p className="font-body text-lg text-muted-foreground leading-relaxed">
                        {program.description}
                      </p>
                    </div>

                    {/* Features */}
                    <div>
                      <h3 className="font-heading font-semibold text-xl mb-4 text-foreground">
                        Points Forts du Programme
                      </h3>
                      <div className="grid grid-cols-1 md:grid-cols-2 gap-3">
                        {program.features.map((feature, idx) => (
                          <div key={idx} className="flex items-center space-x-3">
                            <CheckCircle className="text-accent flex-shrink-0" size={20} />
                            <span className="font-body text-muted-foreground">{feature}</span>
                          </div>
                        ))}
                      </div>
                    </div>

                    {/* Curriculum */}
                    <div>
                      <h3 className="font-heading font-semibold text-xl mb-4 text-foreground">
                        Programme d'Études
                      </h3>
                      <div className="grid grid-cols-1 md:grid-cols-2 gap-3">
                        {program.curriculum.map((subject, idx) => (
                          <div key={idx} className="flex items-center space-x-3">
                            <div className="w-2 h-2 bg-primary rounded-full flex-shrink-0"></div>
                            <span className="font-body text-muted-foreground">{subject}</span>
                          </div>
                        ))}
                      </div>
                    </div>

                    <Button className="btn-luxury group">
                      En Savoir Plus
                      <ArrowRight className="ml-2 group-hover:translate-x-1 transition-transform" size={20} />
                    </Button>
                  </div>
                </div>
              </div>
            </section>
          );
        })}

        {/* Additional Features */}
        <section className="py-24 bg-gradient-to-br from-primary via-primary to-primary-dark text-primary-foreground">
          <div className="container mx-auto px-6">
            <div className="text-center mb-16">
              <h2 className="font-heading font-bold text-4xl md:text-5xl mb-6">
                Excellence Académique Complète
              </h2>
              <p className="font-body text-xl text-primary-foreground/90 max-w-3xl mx-auto leading-relaxed">
                Au-delà des programmes traditionnels, nous offrons un environnement 
                d'apprentissage enrichi et des opportunités uniques.
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              <div className="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                <div className="text-3xl font-heading font-bold text-accent mb-2">15:1</div>
                <div className="font-body text-primary-foreground/80">Ratio Élève/Enseignant</div>
              </div>
              <div className="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                <div className="text-3xl font-heading font-bold text-accent mb-2">3</div>
                <div className="font-body text-primary-foreground/80">Langues Enseignées</div>
              </div>
              <div className="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                <div className="text-3xl font-heading font-bold text-accent mb-2">12</div>
                <div className="font-body text-primary-foreground/80">Clubs Parascolaires</div>
              </div>
              <div className="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center">
                <div className="text-3xl font-heading font-bold text-accent mb-2">100%</div>
                <div className="font-body text-primary-foreground/80">Suivi Personnalisé</div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
};

export default Academics;