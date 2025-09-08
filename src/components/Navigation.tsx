import { useState, useEffect } from 'react';
import { Link, useLocation } from 'react-router-dom';
import { Menu, X } from 'lucide-react';
import { Button } from '@/components/ui/button';

const Navigation = () => {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
  const location = useLocation();

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 100);
    };

    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const navItems = [
    { name: 'Accueil', path: '/' },
    { name: 'À Propos', path: '/about' },
    { name: 'Programmes', path: '/academics' },
    { name: 'Admissions', path: '/admissions' },
    { name: 'Actualités', path: '/news' },
    { name: 'Contact', path: '/contact' },
  ];

  return (
    <nav className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
      isScrolled ? 'nav-glass shadow-lg' : 'bg-transparent'
    }`}>
      <div className="container mx-auto px-6 py-4">
        <div className="flex items-center justify-between">
          {/* Logo */}
          <Link to="/" className="flex items-center space-x-3">
            <div className="w-12 h-12 bg-gradient-primary rounded-xl flex items-center justify-center">
              <span className="text-primary-foreground font-heading font-bold text-lg">NH</span>
            </div>
            <div className="hidden md:block">
              <h1 className="font-heading font-bold text-xl text-primary">
                Nouveaux Horizon
              </h1>
              <p className="text-sm text-muted-foreground">École d'Excellence</p>
            </div>
          </Link>

          {/* Desktop Navigation */}
          <div className="hidden lg:flex items-center space-x-8">
            {navItems.map((item) => (
              <Link
                key={item.path}
                to={item.path}
                className={`font-body font-medium transition-colors duration-300 hover:text-primary ${
                  location.pathname === item.path 
                    ? 'text-primary border-b-2 border-primary' 
                    : 'text-foreground'
                }`}
              >
                {item.name}
              </Link>
            ))}
            <Button className="btn-luxury">
              Inscription
            </Button>
          </div>

          {/* Mobile Menu Button */}
          <button
            onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
            className="lg:hidden p-2 text-foreground hover:text-primary transition-colors"
          >
            {isMobileMenuOpen ? <X size={24} /> : <Menu size={24} />}
          </button>
        </div>

        {/* Mobile Menu */}
        {isMobileMenuOpen && (
          <div className="lg:hidden absolute top-full left-0 right-0 bg-white border-t border-border shadow-lg">
            <div className="py-4 px-6 space-y-4">
              {navItems.map((item) => (
                <Link
                  key={item.path}
                  to={item.path}
                  onClick={() => setIsMobileMenuOpen(false)}
                  className={`block font-body font-medium py-2 transition-colors duration-300 hover:text-primary ${
                    location.pathname === item.path ? 'text-primary' : 'text-foreground'
                  }`}
                >
                  {item.name}
                </Link>
              ))}
              <Button className="btn-luxury w-full mt-4">
                Inscription
              </Button>
            </div>
          </div>
        )}
      </div>
    </nav>
  );
};

export default Navigation;