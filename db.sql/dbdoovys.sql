-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 08 mars 2025 à 10:09
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbdoovys`
--

-- --------------------------------------------------------

--
-- Structure de la table `effectuer`
--

CREATE TABLE `effectuer` (
  `id_prestataire` int(11) NOT NULL,
  `id_prestation` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `effectuer`
--

INSERT INTO `effectuer` (`id_prestataire`, `id_prestation`, `id_event`) VALUES
(2, 15, 1),
(3, 2, 1),
(4, 15, 1),
(5, 2, 1),
(6, 2, 1),
(14, 8, 1),
(17, 13, 1),
(19, 13, 1),
(20, 8, 1),
(21, 16, 1),
(16, 12, 4),
(1, 15, 9),
(12, 15, 9),
(7, 10, 10),
(8, 17, 10),
(9, 17, 10),
(10, 1, 10),
(11, 18, 10),
(13, 12, 10),
(15, 12, 10),
(18, 18, 10);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nom_event` varchar(50) NOT NULL,
  `description_event` varchar(255) NOT NULL,
  `lieu_event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_event`, `nom_event`, `description_event`, `lieu_event`) VALUES
(1, 'Mariage, Fiançailles, Union ', 'Célébration accueillant plus de 250 personnes', 'Lieu de la célébration '),
(3, 'Baptême/1ère Communion', 'Célébration de baptême ou de de la première Communion ', 'Lieu de célébration'),
(4, 'Baby shower, Naissance', 'Célébration de l\'arrivée d\'enfant', 'Lieu de la célébration ou adresse des futurs parents '),
(5, 'Anniversaire', 'Célébration d\'anniversaire', 'Lieu de la célébration '),
(6, 'Fêtes de communauté et religieuses', 'Noêl, Pâques, Nouvel An, Kermesse, Holi, Divali, halloween, Hanouka, Kipour, Barmitswa, Ramadan, Aïd, circoncision, autres ', 'Lieu de la célébration '),
(7, 'Séminaire, comités d\'entreprise et d\'association', 'Réunions professionnelles', 'Lieu de réunion '),
(9, 'Célébration pour moins de 250 personnes', 'Tout type de célébrations accueillant au maximum 250 convives', 'Adresse de la salle'),
(10, 'Tous types d\'évènements', 'Toutes les célébrations ', 'A domicile');

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

CREATE TABLE `prestataire` (
  `id_prestataire` int(11) NOT NULL,
  `nomPrestataire` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `com` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `tarifs` varchar(50) NOT NULL,
  `description_prestataire` varchar(500) NOT NULL,
  `email_prestataire` varchar(50) NOT NULL,
  `disponibilite` varchar(50) NOT NULL,
  `id_prestation` int(11) NOT NULL,
  `image` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `prestataire`
--

INSERT INTO `prestataire` (`id_prestataire`, `nomPrestataire`, `adresse`, `telephone`, `com`, `logo`, `tarifs`, `description_prestataire`, `email_prestataire`, `disponibilite`, `id_prestation`, `image`) VALUES
(1, 'Dolia Nova', '2 avenue du Vallon, 78450 Chavenay, France', '01 30 55 75 32', 'http://www.instagram.com/dolianova; facebook.com/dolia.nova; https://www.dolia-nova.com/', 'DoliaNova-logo.png', '20€ - 70€ le couvert', 'Situé au cœur de la vieille ville, Dolia Nova est un véritable bijou de la cuisine italienne. Avec une décoration alliant rusticité et élégance, ce restaurant propose une immersion authentique dans les saveurs italiennes. Le menu, élaboré avec des ingrédi', 'dolianova@gmail.com', 'Du lundi au Vendredi de 10h30 à 20h.Samedi de 10h3', 15, 'DoliaNova.png'),
(2, 'La Rose 77', '50 route nationale 7 lieu-dit : ferme de la folie 77310 Boissise le Roi, France', '06 52 18 90 90', 'https://www.instagram.com/; Internet :sallelarose77.fr; Facebook.com/sallelarose77; WhatsApp : +33 6 52 18 90 90; tel2 : 07 68 32 27 57', 'LaRose77-logo.jpg', '1000€ - 3700€', 'Dans un authentique cadre naturel, LA ROSE 77 est heureuse de vous accueillir. Un endroit idyllique, spécialement conçu afin de concrétiser de manière originale vos fêtes. Mariages, Séminaires, congrès ou conférences, réceptions, comité d\'entreprise, soirées.', 'sallelarose77@gmail.com', 'Devis sur rendez-vous', 15, 'SalleLaRose77.png;Salle orientale.png'),
(3, 'Dounia Daiks', 'Déplacements à domicile sur Paris et alentours', '07 81 43 75 64', 'instagram.com/dounia_daiks/; facebook.com/dounia.sadki/', 'DouniaDaiks-logo.jpg', 'A partir de 160€', 'Dounia Daiks, maquilleuse événementielle renommée à Paris et ses alentours, est votre alliée pour des looks impeccables lors de toutes vos occasions spéciales. Spécialisée dans le maquillage pour mariages, soirées, défilés de mode et séances photo, Dounia', 'dounia.daiks008@gmail.com', 'Réservation sur rendez-vous', 2, 'DouniaDaiksMakeup.png;DouniaD4.png;DouniaDaiks1.png;DouniaDaiks2.png;DouniaDaiks3.png;DouniaDaiks4.png;DouniaDaiks5.png;'),
(4, 'Espace Venise', '30 Route de Groslay, 95200 Sarcelles', '01 39 90 53 75', 'espacevenise.com; facebook.com/espace.venise.3; instagram.com/espacevenise/', 'Espace venise.png', 'A partir de 800 €', 'Avec une capacité d\'accueil allant de 150 à 2500 personnes, ce luxueux complexe de réception accueille des événements privés comme professionnels et se module selon les besoins. Avec une architecture moderne, du mobilier haut de gamme et les dernières générations', 'info@espacevenise.com', 'Sur rendez-vous', 15, 'EspaceVenise.png;espace-Venise.avif;EspaceVenise-fb.jpg.'),
(5, 'EssaSublime Makeup Artist', 'Déplacement à domicile sur la région Ile de France. Située à Meaux 77100, France', '07 83 12 50 07', 'http://www.instagram.com/essasublime/ \r\n\r\n', 'EssaSublim.png', '50€ - 150€', 'EssaSublime s’occupe de votre mariage avec une maquilleuse professionnelle. Profitez également de nos services à domicile en région parisienne. ', 'adefinir@gmail.com', 'Réservation ', 2, 'EssaSublime1.png;EssaSublime2.png'),
(6, 'Léna Makeup', 'Déplacements à domicile en Ile de France, Oise.', '07 69 86 30 00', 'instagram.com/lenamaquilleuse/', 'LenaMakeupArtist.png', '80€ - 180€', 'Sublimez votre mariage avec notre maquilleuse professionnelle. Votre éclat est notre mission. Ne manquez pas l\'opportunité de rayonner lors de votre événement. Profitez de notre service à domicile, avec des tarifs hors frais de déplacement.', 'edefini@gmail.com', 'Réservation sur rendez-vous', 2, 'LenaMK2.png;LenaMK3.png;LenaMK4.png;LenaMK5.png'),
(7, 'LissageBySofia', 'Déplacements sur l\'Ile de France. Située à 77100 Meaux.', '06 95 16 83 45', 'http://www.instagram.com/lissbysofia', 'lissagebysofia-logo.png\r\n', '70€ - 100€', 'LissagebysSofia vous propose plusieurs type de lissage. Lissage indien, tanin, brésilien et enfin le soin botox.', 'adefinir@gmail.com', 'Réservation sur rendez-vous', 10, 'lissagebysofia.png'),
(8, 'Ayna Traiteur', 'Déplacements en Ile de France et dans l\'Oise; Pont de Suresne 92150 Suresnes, France', '06 29 77 72 32', 'Whats\'App +33 6 29 77 72 32; facebook.com/profile.php?id=100077681351191', 'Ayna Traiteur-logo.jpg;', 'Fixés sur commande', 'Ayna Traiteur, vous propose ses prestations salées et sucrées pour tous vos événements, de l’anniversaire au mariage ! Livraison disponible en IDF et Oise.', 'aynatraiteur@gmail.com', 'Réservation de commande', 17, 'AynaTraiteur.png;AynaTraiteur1.png;AynaTraiteur2.png;AynaTraiteur3.png;AynaTraiteur4.png;'),
(9, 'Dolia Nova Italia', '2 avenue du Vallon 78450 Chavenay', '01 30 55 75 32', 'facebook.com/dolia.nova; dolia-nova.com; instagram.com/dolianovaitalia/', 'DNovaTraiteur-logo.png', 'Réservation sur commande', 'Dolia Nova est un traiteur italien renommé, basé en région parisienne, spécialisé dans la cuisine authentique et raffinée de l\'Italie. Chaque plat est préparé avec soin en utilisant des ingrédients de première qualité, importés directement d\'Italie pour g', 'adefinir@gmail.com', 'Réservation sur commande', 17, 'Dolia Nova traiteur.png;DNova-Traiteur.png;DNova-1.png;DNova-2.png'),
(10, 'Margot Duquesne', 'Déplacements sur lieu d\'évènement, dans toute la France, Basée 78000 ', '00 00 00 00 00 ', 'instagram.com/margot.duquesne/; www.margotduquesne.com; tiktok.com/@margot.dqn?_t=8kyhPKTzoHJ&_r=1; fr.pinterest.com/margotduquesnephotographe/', 'MargotDuquesne-logo.png\r\n', '530€ - 2900€', 'Photographe professionnelle pour immortaliser tous vos événements, que ce soit votre mariage, couple & grossesse ou votre bébé. Déplacement possible dans toute la France.', 'margot.dqn@gmail.com', 'Réservation ', 1, 'MargotD.png;MargotD2.png;MargotD5.png;MargotD6.png\r\n\r\n'),
(11, 'BR Bakery Pâtisserie', '95200 Sarcelles', '07 49 36 78 16', 'instagram.com/brbakery_patisserie/', 'BR-Bakery.png', '5€ -7€ Gâteaux sur commande', 'Je réalise une variété de délices pâtissiers, allant des classiques tels que le Moka, l\'Opéra, le Framboisier et le Fraisier, aux créations plus artistiques comme les Layer Cakes, Drip Cakes et les somptueux gâteaux à plusieurs étages.', ' adefinir@gmail.com', 'Réservations sur commande', 18, 'BR-Bakery-piece.png;BRBakery1.png;BRBakery2.png;BRBakery3.png;'),
(12, 'Banana Café', '13 rue de la ferronnerie, 75001 Paris', '01 42 33 35 31', 'facebook.com/groups/clubbananacafe/; Instagram.com/bananacafeparis', 'BananaCafe.jpg', '5€ - 300€ Réservation de Salle', 'Cocktails en happy hour, piano bar et Dj sur deux niveaux.', 'adefinir@gmail.com', 'Réservation de salle', 15, 'BananaCafe.png'),
(13, 'Rider web design', '10 rue du colisée 75008 Paris 83220 Toulon', '06 37 50 14 54', 'instagram.com/riderwebdesign.com; www.riderwebdesign.com', 'RiderWebDesign.jpg\r\n', '250€ - 500€', 'Vous avez besoin d’un site web pour promouvoir votre événement inoubliable? Ne cherchez plus!  Avec un design moderne et une navigation intuitive, votre site web attirera l’attention de vos invités et leur donnera toutes les informations nécessaires pour ', 'contact@riderwebdesign.com', 'Réservation', 12, 'VotreHistoire.png;rwd.png;rwd2.png;rwd4.png;'),
(14, 'BM Belle pour son Mariage', '42 rue du vieux chemin de Meaux 60300 Senlis', '07 55 44 10 46', 'instagram.com/bellepoursonmariage; bellepoursonmariage.com; WhatsApp : +33 7 55 44 10 46', 'bellepoursonmariage.png', '550€ - 2900€', 'Ayant une fervente volonté d’offrir à toutes les femmes la robe de leurs rêves, nous vous proposons un large éventail de robe de mariée de tout style. La jeune créatrice passionnée, Amelle, vous accueille dans son grand showroom à 20 minutes de Roissy.', 'contact@bellepourmariage.com', 'Sur rendez-vous via le Site', 8, 'BpsM.png;BpsM13.png'),
(15, 'Imprimeur d’idées en 3D ', '95500 Gonesse', '07 81 36 81 03', 'tiktok.com/@_my3d_?_t=8hnT3PkMOMS&_r=1', 'creation3D.png', '10€ -150€', 'Découvrez l\'impression 3D qui donne vie à vos idées cadeaux! Offrez des moments uniques avec des figurines personnalisées, des prototypes originaux et bien plus encore. Faites de chaque occasion un souvenir inoubliable. Contactez nous pour donner vie à vo', 'adefinir@gmail.com', 'Sur commande', 12, 'creation3D.png'),
(16, 'KPerle', '75016 Paris', '06 95 86 47 74', 'instagram.com/k.perle_; Tiktok : k.perle_; Snapchat: k.perlee', 'KPerle.png;', '5€ - 10€', 'Nous vous donnons l’occasion d’offrir nos bijoux de téléphone 100% personnalisée, selon vos goûts et vos couleurs. Ceci s’adapte pour tout type d’événement, ne rater pas l’occasion de vous démarquer.', 'adefinir@gmail.com', 'Sur commande', 12, 'collier.png'),
(17, 'Inti Event', 'Prestation sur lieu de célébration. Basé au 22 rue de Montigny 95100 Argenteuil', '07 57 83 44 17 - 06 12 69', 'instagram.com/inti_event; facebook.com/intievent; https://www.intieventparis.com; linktr.ee/inti_event; X.com; linkedin.com/', 'IntiEvent.png;', '2500€ - 4500€', 'Chez Inti Event, concevons ensemble le mariage de vos rêves ! Vous profiterez de nos consultations personnalisées, d’une décoration sur mesure et d’une coordination jour J.', 'contact@inti-event.com', 'Réservation rendez-vous Devis ', 13, 'Au Buffet des mariés.png;IntiE1.png;IntiE1.png;IntiE2.png;IntiE3.png;IntiE4.png;IntiE6.png;'),
(18, 'Pâtisserie Vincent Salur', '25 rue de Lourmel 75015 Paris; 6 rue Jouffroy d\'Abbans 75017 Paris', '01 45 78 27 47', 'instagram.com/vincentsalur; facebook.com/vincent.salur; partenariats@vincentsalur.com; youtu.be/O6tKCCNjSqY?si=4VOSpg8mfgtYvaZO; vincentsalur.fr; tiktok.com/@vincentsalur; Snapchat.com/; linktr.ee/vincentsalur', 'Vincent Salur.png', '13€ - 35€', 'Laissez-vous emporter à travers nos créations culinaires inédites. Des créations exquises allient tradition et innovation, offrant des desserts uniques où chaque bouchée révèle notre savoir-faire exceptionnel. ✨🌟', 'adefinir@gmail.com', 'Sur commande', 18, 'PieceMontée-Cygne.png; PieceMontee-Cygne.png'),
(19, 'Déco Mariage D’une Vie ', 'Prestation sur lieu de Célébration. Basé sur Paris', '07 69 71 37 58', 'instagram.com/deco_mariage_dune_vie_/', 'DécoMariageduneVie.png\r\n', 'Sur devis', 'Nous vous proposons une décoration pour votre mariage afin de sublimer et rendre ce moment unique. Nous portons une attention particulière à vos goûts en vous proposant un large choix. Disponible sur Paris, en Île-de-France et sur un rayon de 400km. ', 'evenement36@hotmail.com', 'Réservation sur rendez-vous', 13, 'décor.png;décor-table.png'),
(20, 'Normandie Mariage', '26 la pichotière 61300 Saint Sulpice-sur-Risle ', '06 02 02 59 81', 'instagram.com/normandiemariage; www.normandie-mariage.com/galerie-collection; @biancoevento', 'normandiemariage.png\r\n', '500€ - 2500€', 'Créatrice de robe sur mesure, nous disposons d’un vaste choix pour satisfaire vos envies. Nous somme à votre service depuis 1982, faites confiance à notre expertise.', 'contact@normandie-mariage.com', 'Sur rendez-vous', 8, 'Robe de mariée-boutique.png;NormandieMariage3.png;NormandieMariage4.png;Normandiemariage3.png'),
(21, 'Soumya Couture', '3bis rue Edgar Minoret 95110 Sannois', '06 58 43 18 47', 'instagram.com/soumyacoutureparis;soumyacoutureparis.com', 'SoumyaCouture.png', '100€ - 1800€', 'Soumya Couture vous propose différents services en boutique : la location des robes, la confection sur mesure et la vente d’occasion.', 'soumyacoutureparis@hotmail.com', 'Réservation essayage sur rendez-vous', 6, 'Robe MarieeDos.png;soumiacoutureParis4.png;soumiacoutureParis5.png;soumiacoutureParis2.png;soumiacoutureParis.png');

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE `prestation` (
  `id_prestation` int(11) NOT NULL,
  `description_prestation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`id_prestation`, `description_prestation`) VALUES
(1, 'Photographie, vidéo'),
(2, 'Maquillage professionnel'),
(3, 'Maquillage festif et déguisements'),
(4, 'Soins corporels (manucure, pédicure, soins esthétique et bien être)'),
(5, 'Salon de Coiffure '),
(6, 'Tenues de soirées'),
(8, 'Robe de mariée'),
(9, 'Costume du marié'),
(10, 'Coiffeur mariée à domicile'),
(11, 'Chaussures de soirées'),
(12, 'Créations d\'accessoires multiples pour les mariages, unions, Baptêmes, 1ère Communion et de l\'ensemble des fêtes religieuses existantes. tout autres évènements des communautés'),
(13, 'Décoration'),
(14, 'Location de véhicule haut de gamme'),
(15, 'Salle de réception'),
(16, 'Location des tenues de mariés et soirées'),
(17, 'Traiteur'),
(18, 'Pâtissier spécialisé pièce montée et gâteaux sur mesure '),
(19, 'Orchestres et musiciens '),
(20, 'Bijouterie'),
(21, 'Wedding planner'),
(22, 'Lieux de culte');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `effectuer`
--
ALTER TABLE `effectuer`
  ADD PRIMARY KEY (`id_prestataire`,`id_prestation`),
  ADD KEY `FK_PRESTATION_EFFECTUER` (`id_prestation`),
  ADD KEY `FK_EVENT_EFFECTUER` (`id_event`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Index pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`id_prestataire`),
  ADD KEY `FK-PRESTATAIRE_PRESTATION` (`id_prestation`);

--
-- Index pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD PRIMARY KEY (`id_prestation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `id_prestataire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `prestation`
--
ALTER TABLE `prestation`
  MODIFY `id_prestation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `effectuer`
--
ALTER TABLE `effectuer`
  ADD CONSTRAINT `FK_EVENT_EFFECTUER` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`),
  ADD CONSTRAINT `FK_PRESTATAIRE_EFFECTUER` FOREIGN KEY (`id_prestataire`) REFERENCES `prestataire` (`id_prestataire`),
  ADD CONSTRAINT `FK_PRESTATION_EFFECTUER` FOREIGN KEY (`id_prestation`) REFERENCES `prestation` (`id_prestation`);

--
-- Contraintes pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD CONSTRAINT `FK-PRESTATAIRE_PRESTATION` FOREIGN KEY (`id_prestation`) REFERENCES `prestation` (`id_prestation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
