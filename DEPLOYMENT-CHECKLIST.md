# SCOD Website - Deployment Checklist

## ✅ Pre-Deployment Verification (COMPLETED)

### File Structure ✓
- [x] 25 PHP files organized correctly
- [x] Includes folder with header.php and footer.php
- [x] Services folder with 8 service pages
- [x] Assets, CSS, JS properly organized
- [x] All files use proper `$path_prefix` variable

### Link Verification ✓
- [x] All navigation links use PHP echo with path prefix
- [x] Phone links: `tel:+918130130489` (used consistently across website)
- [x] Email links: `mailto:info@scodclinic.com` (used consistently)
- [x] External links to social media (Facebook, Instagram, LinkedIn)

### Form Verification ✓
- [x] Main contact form: `https://app.formester.com/forms/vt4kzZ2it/submissions`
- [x] Service page forms: Same Formester endpoint
- [x] All forms have proper field validation

---

## 📋 Deployment Steps

### 1. Server Requirements
- [ ] PHP 7.4+ installed and enabled
- [ ] Apache/Nginx web server configured
- [ ] SSL certificate installed (HTTPS)
- [ ] File permissions: 644 for .php files, 755 for directories

### 2. File Upload
```bash
# Upload entire html-version directory to web root
# Recommended: Use FTP/SFTP or cPanel File Manager
# Maintain exact folder structure:
/
├── index.php
├── contact.php
├── about.php
├── [other root .php files]
├── includes/
│   ├── header.php
│   └── footer.php
├── services/
│   ├── index.php
│   ├── bariatric-surgery.php
│   └── [other service pages]
├── assets/
├── css/
│   └── custom.css
├── js/
│   └── main.js
└── components/
```

### 3. Domain Configuration
- [ ] Point domain to web server
- [ ] Ensure document root points to uploaded files
- [ ] Test domain resolves correctly
- [ ] Configure HTTPS redirect

---

## 🧪 Post-Deployment Testing

### Homepage Testing
- [ ] Visit `https://yourdomain.com/`
- [ ] Verify hero section displays correctly
- [ ] Check all navigation links work
- [ ] Test "Book Consultation" button
- [ ] Test "Call Now" button  
- [ ] Verify video plays in About section

### Navigation Testing  
- [ ] Click through all header menu items:
  - [ ] Home → `index.php`
  - [ ] About dropdown:
    - [ ] About Dr. Arush → `about.php`
    - [ ] About Dr. Shivani → `dr-shivani-sabharwal.php`
    - [ ] About SCOD Clinic → `about-clinic.php`
  - [ ] Treatments dropdown:
    - [ ] Surgery Overview → `services/index.php`
    - [ ] Bariatric Surgery → `services/bariatric-surgery.php`
    - [ ] Laparoscopic Surgery → `services/laparoscopic-surgery.php`
    - [ ] Body Contouring → `services/body-contouring.php`
    - [ ] Plant-Based Nutrition → `feel-great-system.php`
  - [ ] Medical Mgmt dropdown:
    - [ ] Metabolic Management → `services/metabolic-surgery.php`
    - [ ] Weight Loss Injectables → `services/weight-loss-injectables.php`
    - [ ] Diet & Counselling → `services/obesity-management.php`
    - [ ] Weight Regain Support → `services/weight-regain.php`
  - [ ] International dropdown:
    - [ ] Overseas Patient Guide → `international-patients.php`
    - [ ] Bariatric Medical Travel → `international-bariatric.php`
    - [ ] International Patient Journey → `patient-journey.php`
  - [ ] Resources dropdown:
    - [ ] FAQs & Guides → `resources.php`
    - [ ] Success Stories → `testimonials.php`
  - [ ] Contact → `contact.php`

### Mobile Menu Testing
- [ ] Open website on mobile device (or resize browser)
- [ ] Click hamburger menu icon
- [ ] Verify mobile menu opens  
- [ ] Test all accordion dropdowns expand/collapse
- [ ] Click through mobile navigation links
- [ ] Verify "Call" button at bottom of mobile menu works

### Button & Link Testing
- [ ] Test all "Call Now" buttons → Should dial +918130130489
- [ ] Test all "Email" links → Should open mail to info@scodclinic.com
- [ ] Test "Book Consultation" buttons → Should go to contact page
- [ ] Test social media links:
  - [ ] Facebook → https://www.facebook.com/scodllp/
  - [ ] Instagram → https://www.instagram.com/scodclinic/
  - [ ] LinkedIn → https://in.linkedin.com/company/scodclinic
- [ ] Test location links (Google Maps):
  - [ ] Vasant Vihar location
  - [ ] Karol Bagh location

### Form Testing
- [ ] Navigate to Contact page
- [ ] Fill out contact form completely
- [ ] Click "Send Message" button
- [ ] Verify form submits successfully
- [ ] Check Formester dashboard for submission
- [ ] (Optional) Test email notification received

### Interactive Elements
- [ ] Test video modals:
  - [ ] Click video thumbnail on homepage
  - [ ] Verify YouTube embed opens
  - [ ] Test close button
  - [ ] Test clicking outside modal to close
- [ ] Test testimonial carousel:
  - [ ] Click prev/next arrows
  - [ ] Verify cards slide correctly
- [ ] Test FAQ accordions:
  - [ ] Click question to expand
  - [ ] Verify answer displays
  - [ ] Click again to collapse
- [ ] Test service tabs:
  - [ ] Click different service options
  - [ ] Verify content changes correctly

### Browser Compatibility
- [ ] Test in Chrome
- [ ] Test in Firefox  
- [ ] Test in Safari
- [ ] Test in Edge
- [ ] Check browser console for JavaScript errors

### Mobile Responsiveness
- [ ] Test on iPhone (iOS Safari)
- [ ] Test on Android phone (Chrome)
- [ ] Test on tablet (iPad/Android tablet)
- [ ] Verify layout adapts correctly
- [ ] Check all buttons are tappable
- [ ] Ensure text is readable

### Performance Check
- [ ] Run Google PageSpeed Insights test
- [ ] Check all images load correctly
- [ ] Verify page load time is acceptable
- [ ] Test all external dependencies load (CDNs):
  - [ ] Tailwind CSS
  - [ ] Feather Icons
  - [ ] Google Fonts

---

## 🚨 Common Issues & Solutions

### Issue: Pages Show PHP Code
**Solution**: Enable PHP on server or check file extensions are `.php`

### Issue: Links Show 404 Errors
**Solution**: Check `.htaccess` file or verify file paths

### Issue: Forms Not Submitting
**Solution**: Verify Formester endpoint is correct and accessible

### Issue: Images Not Loading
**Solution**: Check asset paths and ensure all images are uploaded

### Issue: JavaScript Not Working
**Solution**: Check browser console for errors, verify `main.js` is loaded

---

## 📞 Contact Information (Displayed on Website)

- **Phone**: +91 8130130489
- **Email**: info@scodclinic.com  
- **Locations**: 
  - Vasant Vihar, New Delhi
  - Karol Bagh, New Delhi

---

## 📝 Notes

- All external dependencies load via CDN (no local copies needed)
- Forms submit to Formester (https://app.formester.com)
- Website uses PHP includes for header/footer
- Path prefix system handles relative URLs automatically
- No database required (static content only)

---

**Deployment Date**: _________________

**Deployed By**: _________________

**Domain**: _________________

**All Tests Passed**: ☐ YES   ☐ NO

**Ready for Launch**: ☐ YES   ☐ NO
