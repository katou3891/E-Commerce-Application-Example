E-Commerce Application for a non-existent travel agency
====

A Symfony project created on September 20, 2016, 2:44 pm.

Authors :
Katia Récard
Hugo Rodriguez

Les routes : 
La vérification des rôles de l'utilisateur (Administrateur, Collaborateur (Authentifié), ou Non Authentifié) se fait dans le fichier security.yml.

- Administrateur 
 { path: ^/admin/, role: ROLE_ADMIN }
Les routes commencent toujours par /admin/ et servent à la gestion backend pour la :
    --  Gestion des comptes
         * /admin/accounts pour voir tous les comptes existants et potentiellement en ajouter un ou pour aller en voir un spécifique
         * /admin/account/{id} pour voir un compte spécifique
         * /admin/account/new pour créer un nouveau compte (collaborateur)
         * /admin/account/{id}/edit pour modifier un compte existant
         * /admin/account/{id}/remove pour supprimer un compte
     -- Gestion des Commentaires des clients
         * /admin/circuit{id}/delete_comment{comment_id} pour supprimer un commentaire
            
- Collaborateurs (dont l'administrateur)
{ path: ^/manage/, role: ROLE_USER }
Les routes commencent toujours par /manage/ et servent à la gestion backend pour :
    -- De façon générale
        * /logout pour que les collaborateurs ou l'administrateur puissent se déconnecter
    -- Gestion des circuits 
        * /manage/circuit pour voir tous les circuits existants, qu'ils aient des programmations ou non, que ses programmations soient passées ou non.
        * /manage/circuit/new pour créer un circuit
        * /manage/circuit/{id}/edit pour modifier un circuit existant (défini par son identifiant id)
        * /manage/circuit/editdraft pour éditer un brouillon pour la création d'un circuit
        * /manage/circuit/{id}/remove pour la suppression d'un circuit
    -- Gestion des étapes d'un circuit
        * /manage/circuit{id}/etapes/new pour créer une étape
        * /manage/circuit{id}/etapes/{etape_id}/edit pour modifier une étape d'un circuit
        * /manage/circuit{id}/etapes/{etape_id}/remove pour supprimer une étape
    -- Gestion des programmations d'un circuit
        * /manage/circuit/{id}/programmation/new pour la création d'une programmation
        * /manage/circuit/{id}/programmation/{programmation_id}/edit pour la mise à jour ou la correction d'une programmation
        * /manage/circuit/{id}/programmation/{programmation_id}/remove pour l'annulation, la suppression d'une programmation
    
    -- Gestion de leur compte
        * /manage/mon_profil pour visualiser leur profil personnel
        * /manage/mon_profil_edit pour modifier son profil
    
   
- Utilisateur anonyme : 
Ce sont toutes les autres routes, elles sont utilisées pour le frontend (quand l'utilisateur est anonyme et donc un client)
    -- De façon générale :
        * /accueil pour voir la page d'accueil
        * /contact pour voir la page de contact
        * / presentation pour voir la page "Qui sommes-nous ?"
        * /login pour que les collaborateurs ou l'administrateur puissent se connecter
    -- Concernant le catalogue des circuits :
        * /circuit pour voir la liste des circuits disponibles (avec des programmations futures existantes)
        * /circuit/{id} pour afficher un circuit et les avis des clients (et leur donner la possibilité de donner leur avis)
        * /circuit/{id}/comments/{comment_id} pour afficher un avis spécifique pour un circuit spécifique



Les comptes Utilisateurs
- Administrateur
    Uniquement anna_admin 
    Mot de passe : kitten
Il est imposssible de créer d'autres comptes administrateurs.

- Collaborateurs :
    -- john_user
    Mot de passe : kitten
    -- recard_k
    Mot de passe : kitten
    -- rodriguez_h
    Mot de passe : kitten


    