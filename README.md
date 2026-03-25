# SCOD Clinic - Website Documentation

## Overview

This is the production-ready PHP website for SCOD Clinic, a premier bariatric and metabolic surgery center in Delhi, India.

## Technology Stack

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3 (Tailwind via CDN), JavaScript
- **Styling**: Tailwind CSS v3 (CDN), Custom CSS
- **Icons**: Feather Icons (CDN)
- **Forms**: Formester (External Service)

## Project Structure

```
html-version/
├── index.php                     # Homepage
├── about.php                     # About Dr. Arush
├── about-clinic.php              # About SCOD Clinic
├── dr-shivani-sabharwal.php      # About Dr. Shivani
├── contact.php                   # Contact page
├── testimonials.php              # Patient testimonials
├── resources.php                 # FAQs and resources
├── patient-journey.php           # Patient journey info
├── international-patients.php    # International patient guide
├── international-bariatric.php   # Medical travel info
├── feel-great-system.php         # Nutrition program
├── surgery-overview.php          # Surgery overview
├── risks-costs.php               # Risks and costs
├── privacy-policy.php            # Privacy policy
├── thank-you.php                 # Thank you page
│
├── includes/
│   ├── header.php                # Site header with navigation
│   └── footer.php                # Site footer
│
├── services/
│   ├── index.php                 # Services overview
│   ├── bariatric-surgery.php     # Bariatric surgery details
│   ├── laparoscopic-surgery.php  # Laparoscopic surgery
│   ├── body-contouring.php       # Body contouring
│   ├── metabolic-surgery.php     # Metabolic surgery
│   ├── weight-loss-injectables.php
│   ├── obesity-management.php
│   └── weight-regain.php
│
├── assets/
│   └── scod/                     # Local images
│
├── css/
│   └── custom.css                # Custom styles
│
├── js/
│   └── main.js                   # Main JavaScript file
│
└── components/
    └── [reusable components]
```

## Key Features

### 1. **Dynamic Header/Footer System**
- Uses PHP includes for consistent navigation
- Path prefix variable handles relative URLs
- Transparent header on homepage, solid on other pages
- Fully responsive mobile menu

### 2. **Navigation Structure**
- **About**: Dr.  Arush, Dr. Shivani, SCOD Clinic
- **Treatments**: 5 surgical procedures
- **Medical Management**: 4 treatment options
- **International**: Patient guides and travel info
- **Resources**: FAQs and testimonials

### 3. **Interactive Elements**
- Video testimonial carousels
- Image galleries with before/after transformations
- FAQ accordions
- Service procedure tabs
- Modal windows for videos and images

### 4. **Forms**
- Contact form submission via Formester
- Consultation request forms on service pages
- All forms include validation

## Configuration

### Path Prefix System

The website uses a `$path_prefix` variable to handle relative paths:

```php
<?php
// Root level pages
$path_prefix = '';
include 'includes/header.php';
?>
```

```php
<?php
// Service pages (one level deep)
$path_prefix = '../';
include '../includes/header.php';
?>
```

### Homepage Transparent Header

```php
<?php
// Set home page flag for transparent header
$is_home = true;
include 'includes/header.php';
?>
```

## Contact Information

- **Phone**: +91 8130130489
- **Email**: info@scodclinic.com
- **Address**: 
  - Vasant Vihar, New Delhi
  - Karol Bagh, New Delhi

## External Dependencies

All dependencies are loaded via CDN:

1. **Tailwind CSS**: `https://cdn.tailwindcss.com`
2. **Feather Icons**: `https://unpkg.com/feather-icons`
3.  **Google Fonts**: Nunito Sans
4. **Formester Forms**: `https://app.formester.com`

## Server Requirements

- PHP 7.4 or higher
- Apache or Nginx web server
- HTTPS/SSL certificate (recommended)
- No database required

## Deployment Instructions

1. Upload entire `html-version` directory to web root
2. Maintain folder structure exactly as is
3. Set file permissions:
   - Files: 644
   - Directories: 755
4. Configure domain to point to uploaded files
5. Enable HTTPS (redirect HTTP to HTTPS)
6. Test all pages and functionality

See `DEPLOYMENT-CHECKLIST.md` for detailed deployment and testing procedures.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Android)

## Maintenance

### Adding New Pages

1. Copy an existing PHP file as template
2. Set appropriate `$path_prefix` variable
3. Include header and footer
4. Update navigation in `includes/header.php`

### Updating Contact Information

Edit the following files:
- `includes/header.php` (navigation phone number)
- `includes/footer.php` (footer details)
- `contact.php` (contact cards)

### Updating Forms

Forms are managed via Formester. To change form behavior:
1. Log into Formester dashboard
2. Update form settings
3. Form submissions will reflect changes automatically

## JavaScript Functions

Main functionality in `js/main.js`:

- Navbar scroll effects
- Mobile menu toggle
- Dropdown menus
- Video/image modals
- Testimonial carousels
- FAQ accordions
- Active link highlighting
- Intersection observers for animations

## Support

For technical support or questions about this website:
- Email: info@scodclinic.com
- Phone: +91 8130130489

---

**Version**: 1.0  
**Last Updated**: January 2026  
**Maintained By**: Branding Pioneers
