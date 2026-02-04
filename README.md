# Kécolor - Site Vitrine Professionnel

Bienvenue sur le site vitrine de **Kécolor**, une entreprise spécialisée dans la vente de peintures et feutres 100% personnalisables avec les couleurs de votre choix.

## 📋 Structure du Site

### Pages Principales

1. **index.html** - Page d'accueil
   - Présentation générale de Kécolor
   - Avantages et produits en vedette
   - Call-to-action pour découvrir les produits

2. **histoire.html** - Histoire de l'entreprise
   - Timeline chronologique depuis 2015
   - Valeurs d'entreprise
   - Mission de Kécolor

3. **produits.html** - Catalogue des produits
   - **Sélecteur de couleur interactif** pour les peintures acryliques
   - **Configurateur personnalisable** pour les feutres
   - **Kits de produits** prédéfinis (Débutant, Artiste, Studio Pro)
   - Aperçu en temps réel de la couleur sélectionnée

4. **recrutement.html** - Offres d'emploi
   - 6 fiches de postes détaillées :
     - Chimiste Formulateur
     - Responsable Production
     - Développeur Web/Mobile
     - Commercial B2B
     - Responsable Ressources Humaines
     - Responsable Logistique
   - Avantages de rejoindre Kécolor

5. **equipe.html** - Équipe et organigramme
   - **Organigramme interactif** de l'entreprise
   - Détails des 4 départements principaux :
     - R&D et Innovation
     - Production
     - Ventes
     - Informatique
   - Culture d'entreprise
   - Profils détaillés des membres de l'équipe

6. **contact.html** - Formulaire de contact
   - Formulaire de contact fonctionnel
   - Informations de contact détaillées
   - FAQ - Questions fréquemment posées
   - Liens vers les réseaux sociaux

7. **panier.html** - Panier et système de paiement
   - Affichage dynamique du panier
   - Calcul automatique des totaux
   - Système de livraison (Standard, Express, Retrait)
   - Formulaire de paiement sécurisé
   - Code promo fonctionnel
   - Confirmation de commande

## 🎨 Fonctionnalités Principales

### 1. **Sélecteur de Couleur Interactif** (Page Produits)
- Choix de couleur en temps réel avec aperçu visuel
- Entrée manuelle du code HEX
- Mise à jour instantanée de l'affichage
- Deux configurateurs : peintures et feutres

### 2. **Système de Panier** 
- Ajout de produits au panier
- Sauvegarde persistante (LocalStorage)
- Calcul automatique des prix
- Suppression d'articles
- Affichage du total avec TVA

### 3. **Processus de Paiement**
- Validation des informations de livraison
- Choix du mode de livraison
- Saisie des données bancaires
- Codes promo valides :
  - `WELCOME2026` : 10% de réduction
  - `SUMMER50` : 50% de réduction
  - `NEW30` : 30% de réduction

### 4. **Organigramme Interactif**
- Visualisation hiérarchique de l'entreprise
- Détails sur les 14 membres de l'équipe
- Informations par département

### 5. **Design Responsive**
- Entièrement adapté aux mobiles
- Breakpoints: 768px et 480px
- Navigation fluide

## 🚀 Technologies Utilisées

- **HTML5** - Structure sémantique
- **CSS3** - Styling moderne avec variables CSS et Flexbox/Grid
- **JavaScript Vanilla** - Interactivité sans dépendances
- **LocalStorage** - Sauvegarde du panier côté client
- **Design Responsive** - Mobile First

## 💾 Fichiers du Projet

```
site_vitrine/
├── index.html              # Page d'accueil
├── histoire.html           # Histoire de l'entreprise
├── produits.html           # Catalogue & sélecteur de couleur
├── recrutement.html        # Offres d'emploi
├── equipe.html             # Équipe & organigramme
├── contact.html            # Contact & FAQ
├── panier.html             # Panier & paiement
├── style.css               # Feuille de styles complète
├── script.js               # Logique interactif
└── image/
    └── Logo Kecolor avec nom entreprise.png
```

## 🎯 Fonctionnalités JavaScript

### Gestion du Panier
- `addToCart()` - Ajouter un produit
- `removeFromCart()` - Retirer un produit
- `updateCartDisplay()` - Mettre à jour l'affichage
- `applyPromo()` - Appliquer un code promo

### Sélecteur de Couleur
- Synchronisation en temps réel picker/HEX
- Aperçu visuel immédiat
- Stockage de la couleur sélectionnée

### Paiement
- Formatage automatique des numéros de carte
- Validation des formulaires
- Génération des numéros de commande

## 📱 Responsive Design

- **Desktop** (1200px+) : Grilles 3 colonnes, layout complet
- **Tablet** (768px - 1199px) : Grilles 2 colonnes, navigation adaptée
- **Mobile** (< 480px) : 1 colonne, navigation verticale

## 🔐 Sécurité

Le site contient un formulaire de paiement de démonstration. Pour une utilisation en production, intégrer :
- Stripe, PayPal ou autre gateway de paiement
- HTTPS obligatoire
- Validation côté serveur
- Chiffrement des données sensibles

## 📊 Code Promo Actifs

| Code | Réduction | Utilisation |
|------|-----------|-------------|
| WELCOME2026 | 10% | Bienvenue aux nouveaux clients |
| SUMMER50 | 50% | Promotion estivale |
| NEW30 | 30% | Nouveaux produits |

## 🎓 Apprentissages Clés

Ce projet démontre :
- ✅ Architecture HTML bien structurée
- ✅ CSS moderne avec variables et animations
- ✅ JavaScript vanilla sans frameworks
- ✅ LocalStorage pour persistance des données
- ✅ Design responsive mobile-first
- ✅ Accessibilité et sémantique
- ✅ Formulaires validés
- ✅ Gestion d'état utilisateur

## 🚀 Prochaines Améliorations

- Intégration d'une vraie API de paiement
- Base de données pour les produits et utilisateurs
- Système d'authentification
- Dashboard administrateur
- Gallerie de produits avec images
- Système de notation/avis
- Blog d'actualités
- Newsletter
- Chatbot support client

## 📞 Support

Pour toute question ou amélioration :
- Email: contact@kecolor.fr
- Formulaire de contact disponible sur le site

---

**Développé par** : Aymeric Joblin  
**Année** : 2026  
**Version** : 1.0
