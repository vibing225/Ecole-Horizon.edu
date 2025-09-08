import Navigation from '@/components/Navigation';
import Footer from '@/components/Footer';
import HeroSection from '@/components/HeroSection';
import ProgramHighlights from '@/components/ProgramHighlights';
import TestimonialsCarousel from '@/components/TestimonialsCarousel';
import CallToAction from '@/components/CallToAction';

const Index = () => {
  return (
    <div className="min-h-screen">
      <Navigation />
      <main>
        <HeroSection />
        <ProgramHighlights />
        <TestimonialsCarousel />
        <CallToAction />
      </main>
      <Footer />
    </div>
  );
};

export default Index;
