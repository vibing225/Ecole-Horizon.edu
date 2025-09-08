import Navigation from '@/components/Navigation';
import Footer from '@/components/Footer';
import { Target, Eye, Heart, Users, Award, Globe } from 'lucide-react';

const About = () => {
  const values = [
    {
      icon: Target,
      title: 'Excellence Académique',
      description: 'Nous visons l\'excellence dans tous les aspects de l\'éducation, offrant un enseignement de qualité supérieure qui prépare nos élèves aux défis de demain.'
    },
    {
      icon: Heart,
      title: 'Bienveillance',
      description: 'Un environnement chaleureux et bienveillant où chaque élève se sent valorisé, respecté et encouragé à donner le meilleur de lui-même.'
    },
    {
      icon: Globe,
      title: 'Ouverture au Monde',
      description: 'Nous préparons nos élèves à devenir des citoyens du monde, ouverts aux autres cultures et conscients des enjeux globaux.'
    }
  ];

  const leadership = [
    {
      name: 'Dr. Rachid Benali',
      role: 'Directeur Général',
      description: 'PhD en Sciences de l\'Éducation, 25 ans d\'expérience dans l\'enseignement privé d\'excellence.',
      avatar: 'RB'
    },
    {
      name: 'Mme Aicha Mansouri',
      role: 'Directrice Pédagogique',
      description: 'Spécialiste en pédagogie innovante et développement des programmes éducatifs.',
      avatar: 'AM'
    },
    {
      name: 'M. Kamal El Fassi',
      role: 'Directeur des Admissions',
      description: 'Expert en orientation scolaire et accompagnement personnalisé des élèves.',
      avatar: 'KE'
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
                À Propos de Nous
              </h1>
              <p className="font-body text-xl text-muted-foreground leading-relaxed">
                Depuis plus de 20 ans, nous façonnons l'avenir de nos élèves avec passion, 
                dévouement et excellence. Découvrez notre histoire et nos valeurs.
              </p>
            </div>
          </div>
        </section>

        {/* Mission & Vision */}
        <section className="py-24">
          <div className="container mx-auto px-6">
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
              {/* Mission */}
              <div className="card-luxury">
                <div className="flex items-center space-x-4 mb-6">
                  <div className="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center">
                    <Target className="text-primary-foreground" size={32} />
                  </div>
                  <h2 className="font-heading font-bold text-3xl text-gradient">Notre Mission</h2>
                </div>
                <p className="font-body text-lg text-muted-foreground leading-relaxed">
                  Offrir une éducation d'excellence qui permet à chaque élève de révéler son plein potentiel, 
                  de développer ses talents uniques et de devenir un citoyen responsable et engagé. 
                  Nous croyons que chaque enfant mérite une éducation qui l'inspire et le prépare à un avenir brillant.
                </p>
              </div>

              {/* Vision */}
              <div className="card-luxury">
                <div className="flex items-center space-x-4 mb-6">
                  <div className="w-16 h-16 bg-gradient-accent rounded-2xl flex items-center justify-center">
                    <Eye className="text-accent-foreground" size={32} />
                  </div>
                  <h2 className="font-heading font-bold text-3xl text-accent-gradient">Notre Vision</h2>
                </div>
                <p className="font-body text-lg text-muted-foreground leading-relaxed">
                  Être reconnue comme l'école de référence au Maroc, formant les leaders de demain 
                  grâce à une approche pédagogique innovante, des valeurs humaines fortes et 
                  un accompagnement personnalisé qui honore la diversité et l'excellence.
                </p>
              </div>
            </div>
          </div>
        </section>

        {/* Values */}
        <section className="py-24 bg-gradient-to-br from-muted/30 to-muted/10">
          <div className="container mx-auto px-6">
            <div className="text-center mb-16">
              <h2 className="font-heading font-bold text-4xl md:text-5xl mb-6 text-gradient">
                Nos Valeurs Fondamentales
              </h2>
              <p className="font-body text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                Ces valeurs guident chacune de nos actions et façonnent l'expérience éducative 
                que nous offrons à nos élèves.
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
              {values.map((value, index) => {
                const IconComponent = value.icon;
                return (
                  <div
                    key={index}
                    className="card-luxury text-center group"
                  >
                    <div className="w-20 h-20 bg-gradient-primary rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:shadow-glow transition-all duration-300">
                      <IconComponent className="text-primary-foreground" size={36} />
                    </div>
                    <h3 className="font-heading font-bold text-2xl mb-4 text-foreground">
                      {value.title}
                    </h3>
                    <p className="font-body text-muted-foreground leading-relaxed">
                      {value.description}
                    </p>
                  </div>
                );
              })}
            </div>
          </div>
        </section>

        {/* Leadership Team */}
        <section className="py-24">
          <div className="container mx-auto px-6">
            <div className="text-center mb-16">
              <h2 className="font-heading font-bold text-4xl md:text-5xl mb-6 text-gradient">
                Notre Équipe Dirigeante
              </h2>
              <p className="font-body text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                Une équipe expérimentée et passionnée, dédiée à l'excellence éducative 
                et à l'épanouissement de chaque élève.
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
              {leadership.map((leader, index) => (
                <div
                  key={index}
                  className="card-luxury text-center group"
                >
                  <div className="w-24 h-24 bg-gradient-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span className="font-heading font-bold text-2xl text-accent-foreground">
                      {leader.avatar}
                    </span>
                  </div>
                  <h3 className="font-heading font-bold text-xl mb-2 text-foreground">
                    {leader.name}
                  </h3>
                  <p className="font-body text-accent font-medium mb-4">
                    {leader.role}
                  </p>
                  <p className="font-body text-muted-foreground text-sm leading-relaxed">
                    {leader.description}
                  </p>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* Stats Section */}
        <section className="py-24 bg-gradient-to-br from-primary via-primary to-primary-dark text-primary-foreground">
          <div className="container mx-auto px-6">
            <div className="text-center mb-16">
              <h2 className="font-heading font-bold text-4xl md:text-5xl mb-6">
                Nos Réalisations
              </h2>
              <p className="font-body text-xl text-primary-foreground/90 max-w-3xl mx-auto leading-relaxed">
                Des chiffres qui témoignent de notre engagement envers l'excellence 
                et la réussite de nos élèves.
              </p>
            </div>

            <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
              <div className="text-center">
                <div className="text-4xl md:text-5xl font-heading font-bold text-accent mb-2">500+</div>
                <div className="font-body text-primary-foreground/80">Élèves Formés</div>
              </div>
              <div className="text-center">
                <div className="text-4xl md:text-5xl font-heading font-bold text-accent mb-2">98%</div>
                <div className="font-body text-primary-foreground/80">Taux de Réussite</div>
              </div>
              <div className="text-center">
                <div className="text-4xl md:text-5xl font-heading font-bold text-accent mb-2">45</div>
                <div className="font-body text-primary-foreground/80">Enseignants Experts</div>
              </div>
              <div className="text-center">
                <div className="text-4xl md:text-5xl font-heading font-bold text-accent mb-2">20+</div>
                <div className="font-body text-primary-foreground/80">Années d'Excellence</div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
};

export default About;