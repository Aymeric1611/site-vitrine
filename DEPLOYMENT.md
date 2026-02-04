# 🚀 Déploiement et Configuration - Kécolor

## 📋 Vérification Pré-déploiement

### Checklist Finale

- [x] Tous les fichiers HTML valides
- [x] CSS sans erreurs
- [x] JavaScript fonctionnel
- [x] Images présentes et optimisées
- [x] Tous les liens internes pointent correctement
- [x] Formulaires testés
- [x] Panier localStorage fonctionnel
- [x] Responsive design testé
- [x] Pas d'erreurs console
- [x] Métadonnées correctes

---

## 🔧 Préparation Serveur

### Structure de Fichiers

```
/public_html/  ou  /www/
└── kecolor/
    ├── index.html
    ├── histoire.html
    ├── produits.html
    ├── recrutement.html
    ├── equipe.html
    ├── contact.html
    ├── panier.html
    ├── style.css
    ├── script.js
    ├── data.json
    ├── image/
    │   └── Logo Kecolor avec nom entreprise.png
    └── .htaccess (apache)
```

### Configuration Apache (.htaccess)

```apache
# Activer mod_rewrite
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /kecolor/
    
    # Rediriger les URLs sans extension
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.html [QSA,L]
</IfModule>

# Gestion du cache
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresDefault "access plus 1 day"
    
    # Images - 30 jours
    ExpiresByType image/jpeg "access plus 30 days"
    ExpiresByType image/gif "access plus 30 days"
    ExpiresByType image/png "access plus 30 days"
    
    # CSS et JS - 7 jours
    ExpiresByType text/css "access plus 7 days"
    ExpiresByType application/javascript "access plus 7 days"
</IfModule>

# Compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE image/svg+xml
</IfModule>
```

### Configuration Nginx

```nginx
server {
    listen 80;
    server_name kecolor.fr www.kecolor.fr;
    
    root /var/www/kecolor;
    index index.html;
    
    # Compression
    gzip on;
    gzip_types text/html text/css application/javascript image/svg+xml;
    gzip_min_length 1000;
    
    # Cache statique
    location ~* \.(jpg|jpeg|png|gif|css|js|svg)$ {
        expires 7d;
        add_header Cache-Control "public, immutable";
    }
    
    # Réécriture pour SPA
    location / {
        try_files $uri $uri/ =404;
    }
    
    # Désactiver l'accès à certains fichiers
    location ~ /\. {
        deny all;
    }
}
```

---

## 🔒 Sécurité

### Headers de Sécurité

```apache
# .htaccess - Apache
<IfModule mod_headers.c>
    # Prévention du clickjacking
    Header always set X-Frame-Options "SAMEORIGIN"
    
    # Prévention du MIME-sniffing
    Header always set X-Content-Type-Options "nosniff"
    
    # Protection XSS
    Header always set X-XSS-Protection "1; mode=block"
    
    # CSP - Content Security Policy
    Header always set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data: https:;"
    
    # HTTPS
    Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"
</IfModule>
```

```nginx
# Nginx
add_header X-Frame-Options "SAMEORIGIN" always;
add_header X-Content-Type-Options "nosniff" always;
add_header X-XSS-Protection "1; mode=block" always;
add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;
add_header Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline';" always;
```

### SSL/TLS

```bash
# Avec Let's Encrypt
sudo certbot certonly --webroot -w /var/www/kecolor -d kecolor.fr -d www.kecolor.fr

# Configuration auto-renouvellement
sudo systemctl enable certbot.timer
sudo systemctl start certbot.timer
```

---

## 📊 Analytics et Monitoring

### Google Analytics

```html
<!-- Ajouter dans le <head> de toutes les pages -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

### Monitoring d'Erreurs

```html
<!-- Sentry pour suivre les erreurs -->
<script src="https://browser.sentry-cdn.com/sentry.min.js" crossorigin="anonymous"></script>
<script>
  Sentry.init({
    dsn: "YOUR_SENTRY_DSN",
    tracesSampleRate: 1.0,
  });
</script>
```

---

## 🌍 Déploiement Cloud

### Hébergement Recommandé

| Plateforme | Prix | Avantages |
|-----------|------|-----------|
| **Netlify** | Gratuit/12$/mois | Déploiement facile, SSL gratuit, CDN global |
| **Vercel** | Gratuit/20$/mois | Performance optimale, déploiement instantané |
| **GitHub Pages** | Gratuit | Parfait pour statique, versionning intégré |
| **OVH** | 2-10€/mois | Support local, données EU |

### Déploiement Netlify

```bash
# 1. Installer Netlify CLI
npm install -g netlify-cli

# 2. Login
netlify login

# 3. Initialiser
netlify init

# 4. Déployer
netlify deploy --prod
```

### Déploiement Vercel

```bash
# 1. Installer Vercel CLI
npm install -g vercel

# 2. Déployer
vercel

# 3. Production
vercel --prod
```

### Déploiement GitHub Pages

```bash
# 1. Créer un repo GitHub
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/user/kecolor.git
git push -u origin main

# 2. Activer GitHub Pages dans les Settings
# Branch: main
# Dossier: / (root)

# Le site est disponible sur:
# https://user.github.io/kecolor/
```

---

## 📈 Optimisation de Performance

### Compression d'Images

```bash
# ImageMagick
convert logo.png -quality 85 -strip logo-optimized.png

# OptiPNG
optipng logo.png

# WebP
cwebp logo.png -o logo.webp
```

### Minification

```bash
# CSS
npm install -g cssnano
cssnano style.css -o style.min.css

# JavaScript
npm install -g uglify-js
uglifyjs script.js -o script.min.js

# HTML
npm install -g html-minifier
html-minifier index.html -o index.min.html
```

### Vérification de Performance

```bash
# Google Lighthouse CLI
npm install -g lighthouse
lighthouse https://kecolor.fr --view

# PageSpeed Insights
# https://pagespeed.web.dev/
```

---

## 🔄 Mise à Jour Continue

### Versionning Git

```bash
# Initialiser le repo
git init
git config user.name "Aymeric Joblin"
git config user.email "aymeric@kecolor.fr"

# Commit initial
git add .
git commit -m "feat: site vitrine Kécolor initial"

# Tags de version
git tag -a v1.0.0 -m "Version 1.0.0 - Launch"
git push origin main --tags
```

### Workflow de Déploiement

```
Local Development → Commit & Push → GitHub
                                       ↓
                          GitHub Actions Test
                                       ↓
                          Automatic Deploy (Netlify/Vercel)
                                       ↓
                          Production Live
```

---

## 📞 Maintenance

### Backups Réguliers

```bash
# Script de backup
#!/bin/bash
BACKUP_DIR="/backups/kecolor"
SITE_DIR="/var/www/kecolor"
DATE=$(date +%Y-%m-%d)

tar -czf "$BACKUP_DIR/kecolor-$DATE.tar.gz" "$SITE_DIR"
echo "Backup créé: kecolor-$DATE.tar.gz"

# Ajouter à crontab (quotidien)
0 2 * * * /scripts/backup.sh
```

### Monitoring de Disponibilité

```bash
# Ping monitoring
* * * * * curl -f https://kecolor.fr || mail admin@kecolor.fr

# Uptime Robot
# https://uptimerobot.com/ (gratuit jusqu'à 50 moniteurs)
```

### Logs

```bash
# Accès Apache
tail -f /var/log/apache2/access.log

# Erreurs
tail -f /var/log/apache2/error.log

# Application
tail -f /var/log/kecolor/app.log
```

---

## 🎯 SEO

### Métatags Essentiels

```html
<head>
    <!-- Caractères -->
    <meta charset="utf-8">
    
    <!-- Viewport mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Titre unique -->
    <title>Kécolor - Peintures et Feutres 100% Personnalisables</title>
    
    <!-- Description -->
    <meta name="description" content="Découvrez les peintures et feutres 100% personnalisables de Kécolor. Choisissez votre couleur exacte avec notre système innovant.">
    
    <!-- Keywords -->
    <meta name="keywords" content="peinture personnalisée, feutres, couleurs, créatif">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Kécolor - Peintures et Feutres Personnalisés">
    <meta property="og:description" content="Créez votre couleur parfaite">
    <meta property="og:image" content="https://kecolor.fr/image/og-image.png">
    <meta property="og:url" content="https://kecolor.fr">
    
    <!-- Canonical -->
    <link rel="canonical" href="https://kecolor.fr">
    
    <!-- Favicon -->
    <link rel="favicon" href="/favicon.ico">
</head>
```

### Sitemap XML

```xml
<!-- sitemap.xml -->
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://kecolor.fr/</loc>
        <lastmod>2026-02-03</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://kecolor.fr/produits.html</loc>
        <lastmod>2026-02-03</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <!-- Ajouter toutes les URLs -->
</urlset>
```

### robots.txt

```
# robots.txt
User-agent: *
Allow: /
Disallow: /admin/
Disallow: /private/

Sitemap: https://kecolor.fr/sitemap.xml
```

---

## 📧 Configuration Email

### Contact Form Notifications

```javascript
// PHP backend endpoint (exemple)
fetch('/api/contact', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
        name: formData.name,
        email: formData.email,
        message: formData.message
    })
})
.then(res => res.json())
.then(data => alert('Message envoyé!'));
```

### Service Email

- **SendGrid** - API email fiable
- **Mailgun** - Alternative avec bonne délivrabilité
- **AWS SES** - Solution AWS
- **Postmark** - Excellent support transactionnel

---

## 🎓 Checklist de Lancement

- [ ] Domaine enregistré (kecolor.fr)
- [ ] SSL/TLS configuré (HTTPS)
- [ ] Emails configurés
- [ ] Analytics installed
- [ ] Sitemap créé
- [ ] robots.txt présent
- [ ] Métadonnées complètes
- [ ] Images optimisées
- [ ] Performance testée
- [ ] Accessibilité validée
- [ ] Tests cross-browser OK
- [ ] Mobile responsive OK
- [ ] Backup automatique
- [ ] Monitoring actif
- [ ] CDN configuré (optionnel)

---

## 📚 Ressources

### Hébergement
- [Netlify.com](https://netlify.com)
- [Vercel.com](https://vercel.com)
- [GitHub Pages](https://pages.github.com)

### Sécurité
- [OWASP Top 10](https://owasp.org/Top10/)
- [Let's Encrypt](https://letsencrypt.org)
- [SSL Labs](https://www.ssllabs.com/ssltest/)

### Performance
- [Google PageSpeed](https://pagespeed.web.dev/)
- [Lighthouse](https://developers.google.com/web/tools/lighthouse)
- [WebPageTest](https://www.webpagetest.org/)

### SEO
- [Google Search Console](https://search.google.com/search-console)
- [Bing Webmaster Tools](https://www.bing.com/webmasters)
- [Yoast SEO Check](https://yoast.com/wordpress/plugins/seo/)

---

**Document version** : 1.0  
**Dernière mise à jour** : Février 2026  
**Responsable** : Aymeric Joblin
