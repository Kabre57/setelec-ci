# Stratégie de Nettoyage du Projet SETELEC v2

## Fichiers et Dossiers à Supprimer :

### Contrôleurs :
- /home/ubuntu/setelec-site-v2/app/Http/Controllers/MultipagesController.php
- /home/ubuntu/setelec-site-v2/app/Http/Controllers/OnePageController.php
- /home/ubuntu/setelec-site-v2/app/Http/Controllers/PagesController.php

### Vues (Dossiers complets) :
- /home/ubuntu/setelec-site-v2/resources/views/OnePage/
- /home/ubuntu/setelec-site-v2/resources/views/multiPages/
- /home/ubuntu/setelec-site-v2/resources/views/pages/

### Vues (Fichiers individuels) :
- /home/ubuntu/setelec-site-v2/resources/views/blog-col-1.blade.php
- /home/ubuntu/setelec-site-v2/resources/views/blog-col-2.blade.php
- /home/ubuntu/setelec-site-v2/resources/views/blog-details-2.blade.php
- /home/ubuntu/setelec-site-v2/resources/views/blog-details.blade.php
- /home/ubuntu/setelec-site-v2/resources/views/blog.blade.php
- /home/ubuntu/setelec-site-v2/resources/views/service-details.blade.php
- /home/ubuntu/setelec-site-v2/resources/views/team-details.blade.php

### Routes :
- Supprimer les sections commentées dans `/home/ubuntu/setelec-site-v2/routes/web.php`.

## Fichiers et Dossiers à Conserver :

- Contrôleurs : `Controller.php`, `HomeController.php`
- Vues : `index.blade.php`, `about.blade.php`, `service.blade.php`, `contact.blade.php`
- Layouts : `layouts/layout1.blade.php`, `layouts/layout2.blade.php`
- Composants : `components/*`
- Routes : Les 4 routes actives dans `routes/web.php`
- Assets : `public/assets/*`
- Fichiers principaux de Laravel (config, bootstrap, etc.)

