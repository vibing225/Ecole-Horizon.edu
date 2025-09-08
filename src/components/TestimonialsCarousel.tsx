import { useState, useEffect } from 'react';
import { ChevronLeft, ChevronRight, Star, Quote } from 'lucide-react';

const TestimonialsCarousel = () => {
  const [currentSlide, setCurrentSlide] = useState(0);

  const testimonials = [
    {
      id: 1,
      name: 'Mme Amina Benali',
      role: 'Parent d\'élève - CM2',
      content: 'Nouveaux Horizon a transformé l\'approche éducative de ma fille. L\'attention personnalisée et la qualité d\'enseignement sont exceptionnelles. Elle s\'épanouit chaque jour davantage.',
      rating: 5,
      avatar: 'AB'
    },
    {
      id: 2,
      name: 'M. Karim Mansouri',
      role: 'Parent d\'élève - 3ème',
      content: 'Un établissement qui allie excellence académique et valeurs humaines. Mon fils a développé une véritable passion pour les sciences grâce aux méthodes innovantes des enseignants.',
      rating: 5,
      avatar: 'KM'
    },
    {
      id: 3,
      name: 'Sarah El Idrissi',
      role: 'Ancienne élève - Promotion 2023',
      content: 'Grâce à la préparation exceptionnelle reçue à Nouveaux Horizon, j\'ai intégré l\'université de mes rêves. Les enseignants croient vraiment en le potentiel de chaque élève.',
      rating: 5,
      avatar: 'SE'
    },
    {
      id: 4,
      name: 'Mme Fatima Zahra',
      role: 'Parent d\'élève - CP',
      content: 'L\'environnement bienveillant et stimulant de l\'école a permis à mon fils de développer sa confiance en lui. Il adore aller à l\'école chaque matin !',
      rating: 5,
      avatar: 'FZ'
    }
  ];

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentSlide((prev) => (prev + 1) % testimonials.length);
    }, 5000);

    return () => clearInterval(timer);
  }, [testimonials.length]);

  const nextSlide = () => {
    setCurrentSlide((prev) => (prev + 1) % testimonials.length);
  };

  const prevSlide = () => {
    setCurrentSlide((prev) => (prev - 1 + testimonials.length) % testimonials.length);
  };

  return (
    <section className="py-24 bg-gradient-to-br from-primary/5 to-accent/5">
      <div className="container mx-auto px-6">
        {/* Section Header */}
        <div className="text-center mb-16">
          <div className="inline-block bg-gradient-accent text-accent-foreground rounded-full px-6 py-2 mb-6">
            <span className="font-body font-medium">Témoignages</span>
          </div>
          <h2 className="font-heading font-bold text-4xl md:text-5xl mb-6 text-gradient">
            Ce Que Disent Nos Familles
          </h2>
          <p className="font-body text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            Découvrez les expériences authentiques de nos élèves et parents qui témoignent 
            de l'excellence de notre accompagnement éducatif.
          </p>
        </div>

        {/* Carousel */}
        <div className="relative max-w-4xl mx-auto">
          <div className="overflow-hidden">
            <div 
              className="flex transition-transform duration-700 ease-in-out"
              style={{ transform: `translateX(-${currentSlide * 100}%)` }}
            >
              {testimonials.map((testimonial) => (
                <div key={testimonial.id} className="w-full flex-shrink-0 px-4">
                  <div className="card-luxury text-center max-w-3xl mx-auto">
                    {/* Quote Icon */}
                    <div className="flex justify-center mb-6">
                      <div className="w-16 h-16 bg-gradient-accent rounded-full flex items-center justify-center">
                        <Quote className="text-accent-foreground" size={28} />
                      </div>
                    </div>

                    {/* Stars */}
                    <div className="flex justify-center space-x-1 mb-6">
                      {[...Array(testimonial.rating)].map((_, i) => (
                        <Star key={i} className="text-accent fill-current" size={20} />
                      ))}
                    </div>

                    {/* Content */}
                    <blockquote className="font-body text-lg md:text-xl text-foreground mb-8 leading-relaxed italic">
                      "{testimonial.content}"
                    </blockquote>

                    {/* Author */}
                    <div className="flex items-center justify-center space-x-4">
                      <div className="w-14 h-14 bg-gradient-primary rounded-full flex items-center justify-center">
                        <span className="font-heading font-bold text-primary-foreground">
                          {testimonial.avatar}
                        </span>
                      </div>
                      <div className="text-left">
                        <div className="font-heading font-semibold text-lg text-foreground">
                          {testimonial.name}
                        </div>
                        <div className="font-body text-muted-foreground">
                          {testimonial.role}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>

          {/* Navigation Buttons */}
          <button
            onClick={prevSlide}
            className="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-4 w-12 h-12 bg-white shadow-elegant rounded-full flex items-center justify-center hover:shadow-luxury transition-all duration-300 hover:scale-110"
          >
            <ChevronLeft className="text-primary" size={24} />
          </button>
          
          <button
            onClick={nextSlide}
            className="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-4 w-12 h-12 bg-white shadow-elegant rounded-full flex items-center justify-center hover:shadow-luxury transition-all duration-300 hover:scale-110"
          >
            <ChevronRight className="text-primary" size={24} />
          </button>

          {/* Dots */}
          <div className="flex justify-center space-x-3 mt-8">
            {testimonials.map((_, index) => (
              <button
                key={index}
                onClick={() => setCurrentSlide(index)}
                className={`w-3 h-3 rounded-full transition-all duration-300 ${
                  index === currentSlide 
                    ? 'bg-accent w-8' 
                    : 'bg-border hover:bg-accent/50'
                }`}
              />
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default TestimonialsCarousel;