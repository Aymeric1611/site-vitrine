# 🎓 Projet BTS SIO - HTML/CSS Pur - Guide de Démarrage

## ✅ Résumé des Modifications

Ce projet a été **entièrement adapté pour un BTS SIO** en supprimant tout JavaScript et en gardant **uniquement HTML5 + CSS3**.

### ✨ Avant (Version originale avec JavaScript)
- ❌ 300+ lignes de JavaScript
- ❌ Panier dynamique avec LocalStorage
- ❌ Sélecteur couleur interactif
- ❌ Formulaires avec validation JS
- ❌ Script de gestion du panier

### ✅ Après (Version BTS SIO - HTML/CSS Pur)
- ✅ **ZÉRO JavaScript** - 100% HTML et CSS
- ✅ Formulaires HTML5 pur (validation native)
- ✅ Galerie statique de couleurs
- ✅ Panier remplacé par formulaire de commande
- ✅ Confirmation simple en HTML/CSS

---

## 🚀 Comment Ouvrir le Site

### Méthode 1 : Double-cliquez sur index.html
```
Explorateur de fichiers → index.html → Double-clic
```

### Méthode 2 : Drag & drop dans navigateur
```
Glissez index.html vers votre navigateur
```

### Méthode 3 : Clic-droit → Ouvrir avec
```
Clic-droit sur index.html → Ouvrir avec → Chrome/Firefox/Edge
```

---

## 📁 Structure du Projet

```
site_vitrine/
├── 📄 index.html              ← Commencez ici!
├── 📄 histoire.html           Page timeline
├── 📄 produits.html           Catalogue
├── 📄 panier.html             Formulaire de commande
├── 📄 contact.html            Formulaire de contact
├── 📄 recrutement.html        Offres d'emploi
├── 📄 equipe.html             Organigramme
├── 📄 confirmation.html       Confirmation après commande
├── 📄 style.css               Feuille de styles (900+ lignes)
├── 📄 README_BTS_SIO.md       Documentation détaillée
├── 📁 image/                  Dossier des images
└── 📄 autres fichiers...      Documentation supplémentaire
```

**IMPORTANT:** script.js a été **supprimé** - Ce n'est pas une erreur!

---

## 🔍 Navigation Testée

Vous pouvez cliquer sur tous ces liens:

| Page | Description | Formulaires |
|------|-------------|------------|
| **Accueil** | Page d'accueil avec présentation | Non |
| **Histoire** | Timeline + valeurs de l'entreprise | Non |
| **Produits** | Catalogue avec formulaires | ✅ Oui |
| **Recrutement** | Offres d'emploi | Non |
| **Équipe** | Organigramme + team | Non |
| **Contact** | Formulaire + FAQ | ✅ Oui |
| **Panier** | Formulaire de commande | ✅ Oui |

---

## 📝 Tester les Formulaires

### Formulaire de Commande (panier.html)
1. Allez sur **Panier**
2. Cochez des articles
3. Sélectionnez les options (taille, type, quantité)
4. Remplissez votre adresse
5. Choisissez une méthode de paiement
6. Cliquez **Valider la commande**
7. → Redirection vers **confirmation.html**

**Note:** Les données ne sont pas sauvegardées (HTML pur). C'est normal!

### Formulaire de Contact (contact.html)
1. Allez sur **Contact**
2. Remplissez le formulaire
3. Cliquez **Envoyer**
4. Validation HTML5 native du navigateur

---

## 💡 Concepts à Comprendre

### HTML5 (Balises et Formulaires)
```html
<form method="POST" action="page-suivante.html">
    <fieldset>
        <legend>Mon groupe de champs</legend>
        
        <div class="form-group">
            <label for="mon-input">Libellé *</label>
            <input type="text" id="mon-input" name="mon-input" required>
        </div>
        
        <select name="options">
            <option>-- Sélectionnez --</option>
            <option value="1">Option 1</option>
        </select>
        
        <label>
            <input type="checkbox" name="accord">
            J'accepte les conditions
        </label>
        
        <button type="submit">Envoyer</button>
    </fieldset>
</form>
```

### CSS3 (Responsive & Modern)
```css
/* Variables CSS */
:root {
    --primary-color: #6d2ebf;
    --secondary-color: #2ebfae;
}

/* Flexbox */
.flex-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
}

/* Grid */
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar {
        display: none;
    }
}

/* Transitions */
button {
    transition: all 0.3s ease;
}
button:hover {
    transform: translateY(-2px);
}
```

---

## 🎯 Exercices Suggérés

### Facile (30 min)
1. ✏️ Modifier les couleurs dans `style.css`
   ```css
   --primary-color: #FF0000; /* Changez à rouge */
   ```

2. ✏️ Ajouter un lien dans le menu
   ```html
   <a href="nouvelle-page.html">Ma Page</a>
   ```

3. ✏️ Modifier un texte dans une page

### Moyen (2-3 heures)
1. 📄 Créer une nouvelle page HTML (copier index.html)
2. 🎨 Ajouter du CSS personnalisé
3. 📋 Ajouter un formulaire avec validation HTML5

### Difficile (1 jour)
1. 🌐 Créer un site complet pour une autre entreprise
2. 🎨 Designer un thème cohérent
3. 📱 Assurer le responsive sur mobile/tablet/desktop
4. ♿ Ajouter l'accessibilité (labels, alt text, etc.)

---

## 🧪 Validation du Code

### Valider HTML5
```
https://validator.w3.org/
→ Uploadez un fichier HTML
```

### Valider CSS3
```
https://jigsaw.w3.org/css-validator/
→ Uploadez style.css
```

### Tester le Responsive
1. **F12** dans votre navigateur
2. **Ctrl+Shift+M** pour passer en mode responsive
3. Changez la taille de l'écran

---

## 🔧 Outils Recommandés

### Éditeur de Texte
- **VS Code** (recommandé) - gratuit
- Sublime Text
- Notepad++

### Extensions VS Code
- "Live Server" - Serveur local
- "HTML to CSS autocompletion"
- "Beautify"

### Navigateurs
- Chrome (DevTools excellent)
- Firefox
- Edge

---

## ❌ Points à NE PAS Faire

- ❌ Ne modifiez pas les balises HTML sémantiques
- ❌ N'ajoutez pas de JavaScript (respect du brief)
- ❌ N'oubliez pas les labels sur les formulaires
- ❌ N'utilisez pas !important dans CSS
- ❌ N'oubliez pas les media queries

---

## ✅ Checklist de Qualité

Avant de présenter votre travail:

### HTML
- [ ] Tous les liens fonctionnent
- [ ] Tous les formulaires ont des labels
- [ ] Tous les inputs ont name et id
- [ ] Les images ont alt text
- [ ] Aucune erreur W3C

### CSS
- [ ] Style est cohérent sur toutes les pages
- [ ] Responsive sur mobile/tablet/desktop
- [ ] Pas de scroll horizontal
- [ ] Texte lisible (contraste suffisant)
- [ ] Pas de !important

### Navigation
- [ ] Menu fonctionne partout
- [ ] Footer présent sur chaque page
- [ ] Lien "Accueil" fonctionne
- [ ] Lien retour au panier

---

## 📚 Ressources Utiles

### Tutoriels Officiels
- **HTML5:** https://developer.mozilla.org/en-US/docs/Web/HTML
- **CSS3:** https://developer.mozilla.org/en-US/docs/Web/CSS

### Guides Interactifs
- **Flexbox Froggy:** https://flexboxfroggy.com/
- **Grid Garden:** https://cssgridgarden.com/

### Couleurs et Design
- **Générateur de gradient:** https://www.colorgradient.org/
- **Palette couleur:** https://coolors.co/

### Icons et Images
- **Font Awesome:** https://fontawesome.com/
- **Unsplash:** https://unsplash.com/ (images gratuites)

---

## 📞 Besoin d'Aide?

### Erreurs Communes

**❌ "Fichier non trouvé"**
- ✅ Vérifiez que le fichier existe
- ✅ Vérifiez l'orthographe exacte
- ✅ Les majuscules/minuscules comptent!

**❌ "CSS ne s'applique pas"**
- ✅ Vérifiez le chemin dans `<link href="style.css">`
- ✅ Rafraîchissez la page (F5 ou Ctrl+R)
- ✅ Videz le cache (Ctrl+Shift+Del)

**❌ "Formulaire ne s'envoie pas"**
- ✅ C'est normal en HTML pur (pas de backend)
- ✅ Vérifiez que `<button type="submit">` est présent
- ✅ Vérifiez que `<form>` a un `action`

---

## 🎓 Apprentissage Progressif

### Phase 1 : Découvrir (1-2 jours)
- Ouvrir et explorer les pages
- Comprendre la structure HTML
- Modifier quelques couleurs CSS

### Phase 2 : Modifier (3-5 jours)
- Changer du contenu
- Ajouter du CSS
- Créer une nouvelle page

### Phase 3 : Créer (1-2 semaines)
- Créer un site complet
- Designer votre propre style
- Appliquer tous les concepts

---

## 📊 Statistiques du Projet

| Élément | Nombre |
|---------|--------|
| Pages HTML | 8 |
| Lignes CSS | 900+ |
| Fichiers HTML | 9 |
| Formulaires | 3 |
| Breakpoints responsive | 3 |
| Images | 1+ |
| **JavaScript** | **0** ✅ |

---

## 🎉 Conclusion

Ce projet vous permet d'apprendre:

1. ✅ **HTML5 sémantique** - Structure correcte
2. ✅ **CSS3 moderne** - Flexbox, Grid, Responsive
3. ✅ **Formulaires accessibles** - Labels, validation HTML5
4. ✅ **Responsive Design** - Mobile-first
5. ✅ **Bonnes pratiques** - Code propre et lisible

**Sans vous perdre dans JavaScript!**

---

**Créé pour l'enseignement du BTS SIO**  
**Février 2026**
