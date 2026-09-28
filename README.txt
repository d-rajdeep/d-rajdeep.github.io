RAJDEEP DUTTA — PORTFOLIO REDESIGN

Files
- index.html: Main portfolio
- terms.html: Terms & Conditions
- assets/css/style.css: Shared responsive design system
- assets/js/app.js: Navigation, filters, reveal effects, image fallbacks
- assets/images/apps/: 1600×900 generated application preview images
- assets/images/websites/: local fallback website previews
- refresh-website-screenshots.sh: optional helper to save fresh website screenshots locally

Website screenshots
The project cards request current website screenshots through Thum.io and fall back to local images if a live screenshot cannot load. If you want fully local screenshots, run:
  ./refresh-website-screenshots.sh
Then update the image src values in index.html to assets/images/websites/... if you want to remove remote screenshot requests entirely.

Deployment
Upload the entire folder while preserving the directory structure. No build step is required.
