-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 fév. 2025 à 21:28
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
-- Structure de la table `prestataire`
--

CREATE TABLE `prestataire` (
  `id_prestataire` int(11) NOT NULL,
  `nomPrestataire` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `com` varchar(255) NOT NULL,
  `logo_marque` varchar(255) NOT NULL,
  `tarifs` varchar(50) NOT NULL,
  `description_prestataire` varchar(255) NOT NULL,
  `email_prestataire` varchar(50) NOT NULL,
  `disponibilité` varchar(50) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `prestataire`
--

INSERT INTO `prestataire` (`id_prestataire`, `nomPrestataire`, `adresse`, `telephone`, `com`, `logo_marque`, `tarifs`, `description_prestataire`, `email_prestataire`, `disponibilité`, `id_event`) VALUES
(1, 'Dolia Nova', '2 avenue du Vallon, 78450 Chavenay, France', '130557532', 'http://www.instagram.com/dolianova\r\nfacebook.com/dolia.nova\r\nhttps://www.dolia-nova.com/', 'DoliaNova.png', '20€ - 70€ le couvert', 'Situé au cœur de la vieille ville, Dolia Nova est un véritable bijou de la cuisine italienne. Avec une décoration alliant rusticité et élégance, ce restaurant propose une immersion authentique dans les saveurs italiennes. Le menu, élaboré avec des ingrédi', 'dolianova@gmail.com', 'Du lundi au Vendredi de 10h30 à 20h.Samedi de 10h3', 15),
(2, 'La Rose 77', '50 route nationale 7 \r\nlieu-dit : ferme de la folie \r\n77310 Boissise le Roi, France', '652189090', 'https://www.instagram.com/sallelarose77\r\nInternet : larose.fr\r\nFacebook.com/sallelarose77\r\nWhatsApp : +33 6 52 18 90 90\r\ntel2 : 07 68 32 27 57', 'SalleLaRose77.png\r\n', '1000€ - 3700€', 'Dans un authentique cadre naturel, LA ROSE 77 est heureuse de vous accueillir. Un endroit idyllique, spécialement conçu afin de concrétiser de manière originale vos fêtes. Mariages, Séminaires, congrès ou conférences, réceptions, comité d\'entreprise, soir', 'sallelarose77@gmail.com', 'Devis sur rendez-vous', 15),
(3, 'Dounia Daiks', 'Déplacements à domicile sur Paris et alentours', '07 81 43 75 64', 'instagram.com/dounia_daiks/\r\nfacebook.com/dounia.sadki/', 'DouniaDaiksMakeup.png', 'A partir de 160€', 'Dounia Daiks, maquilleuse événementielle renommée à Paris et ses alentours, est votre alliée pour des looks impeccables lors de toutes vos occasions spéciales. Spécialisée dans le maquillage pour mariages, soirées, défilés de mode et séances photo, Dounia', 'dounia.daiks008@gmail.com', 'Réservation sur rendez-vous', 2),
(4, 'Espace Venise', '30 Route de Groslay, 95200 Sarcelles', '01 39 90 53 75', 'espacevenise.com\r\nfacebook.com/espace.venise.3\r\ninstagram.com/espacevenise/\r\n', 'logoEspaceVenise.png', 'A partir de 800 €', 'Avec une capacité d\'accueil allant de 150 à 2500 personnes, ce luxueux complexe de réception accueille des événements privés comme professionnels et se module selon les besoins. Avec une architecture moderne, du mobilier haut de gamme et les dernières gén', 'info@espacevenise.com', 'Sur rendez-vous', 15),
(5, 'EssaSublime Makeup Artist', 'Déplacement à domicile sur la région Ile de France\r\nSituée à Meaux 77100, France', '07 83 12 50 07', 'http://www.instagram.com/essasublime/ \r\n\r\n', 'EssaSublim.png', '50€ - 150€', 'EssaSublime s’occupe de votre mariage avec une maquilleuse professionnelle. Profitez également de nos services à domicile en région parisienne. ', 'adefinir@gmail.com', 'Réservation ', 2),
(6, 'Léna Makeup', 'Déplacements à domicile en Ile de France, Oise.', '07 69 86 30 00', 'instagram.com/lenamaquilleuse/', 'LenaMakeupArtist.png', '80€ - 180€', 'Sublimez votre mariage avec notre maquilleuse professionnelle. Votre éclat est notre mission. Ne manquez pas l\'opportunité de rayonner lors de votre événement. Profitez de notre service à domicile, avec des tarifs hors frais de déplacement.', 'edefini@gmail.com', 'Réservation sur rendez-vous', 2),
(7, 'LissageBySofia', 'Déplacements sur l\'Ile de France\r\nsituée à 77100 Meaux', '06 95 16 83 45', 'http://www.instagram.com/lissbysofia', 'lissagebysofia.png', '70€ - 100€', 'LissagebysSofia vous propose plusieurs type de lissage. Lissage indien, tanin, brésilien et enfin le soin botox. ', 'adefinir@gmail.com', 'Réservation sur rendez-vous', 10),
(8, 'Ayna Traiteur', 'Déplacements en Ile de France et dans l\'Oise;\r\nPont de Suresne 92150 Suresnes, France', '06 29 77 72 32', 'Whats\'App +33 6 29 77 72 32\r\nfacebook.com/profile.php?id=100077681351191\r\n', 'Ayna Traiteur-logo.jpg\r\nAynaTraiteur.png', 'Fixés sur commande', 'Ayna Traiteur, vous propose ses prestations salées et sucrées pour tous vos événements, de l’anniversaire au mariage ! Livraison disponible en IDF et Oise. ', 'aynatraiteur@gmail.com', 'Réservation de commande', 17),
(9, 'Dolia Nova Italia', '2 avenue du Vallon 78450 Chavenay', '01 30 55 75 32', 'facebook.com/dolia.nova\r\ndolia-nova.com\r\ninstagram.com/dolianovaitalia/', 'Dolia Nova traiteur.png\r\n', 'Réservation sur commande', 'Dolia Nova est un traiteur italien renommé, basé en région parisienne, spécialisé dans la cuisine authentique et raffinée de l\'Italie. Chaque plat est préparé avec soin en utilisant des ingrédients de première qualité, importés directement d\'Italie pour g', 'adefinir@gmail.com', 'Réservation sur commande', 17),
(10, 'Margot Duquesne', 'Déplacements sur lieu d\'évènement, dans toute la France,\r\nBasée 78000 ', '00 00 00 00 00 ', 'instagram.com/margot.duquesne/\r\nwww.margotduquesne.com\r\ntiktok.com/@margot.dqn?_t=8kyhPKTzoHJ&_r=1\r\nfr.pinterest.com/margotduquesnephotographe/', 'MargotDuquesne-photographe.png', '530€ - 2900€', 'Photographe professionnelle pour immortaliser tous vos événements, que ce soit votre mariage, couple & grossesse ou votre bébé. Déplacement possible dans toute la France. ', 'margot.dqn@gmail.com', 'Réservation ', 1),
(11, 'BR Bakery Pâtisserie', '95200 Sarcelles', '07 49 36 78 16', 'instagram.com/brbakery_patisserie/\r\n', 'BR-Bakery.png\r\nBR-Bakery-piece.png', '5€ -7€ Gâteaux sur commande', 'Je réalise une variété de délices pâtissiers, allant des classiques tels que le Moka, l\'Opéra, le Framboisier et le Fraisier, aux créations plus artistiques comme les Layer Cakes, Drip Cakes et les somptueux gâteaux à plusieurs étages ', ' adefinir@gmail.com', 'Réservations sur commande', 18),
(12, 'Banana Café', '13 rue de la ferronnerie, 75001 Paris\r\n', '01 42 33 35 31', 'facebook.com/groups/clubbananacafe/\r\nInstagram.com/bananacafeparis', 'BananaCafe.jpg\r\nBananaCafe.png', '5€ - 300€ Réservation de Salle', 'Cocktails en happy hour, piano bar et Dj sur deux niveaux.', 'adefinir@gmail.com', 'Réservation de salle', 15),
(13, 'Rider web design', '10 rue du colisée 75008 Paris\r\n\r\n83220 Toulon', '06 37 50 14 54', 'instagram.com/riderwebdesign.com\r\nwww.riderwebdesign.com\r\n', 'RiderWebDesign.jpg\r\nVotreHistoire.png\r\n', '250€ - 500€', 'Vous avez besoin d’un site web pour promouvoir votre événement inoubliable? Ne cherchez plus!  Avec un design moderne et une navigation intuitive, votre site web attirera l’attention de vos invités et leur donnera toutes les informations nécessaires pour ', 'contact@riderwebdesign.com', 'Réservation', 12),
(14, 'BM Belle pour son Mariage', '42 rue du vieux chemin de Meaux 60300 Senlis', '07 55 44 10 46', 'instagram.com/bellepoursonmariage/\r\nbellepoursonmariage.com\r\nWhatsApp : +33 7 55 44 10 46', 'bellepoursonmariage.png', '550€ - 2900€', 'Ayant une fervente volonté d’offrir à toutes les femmes la robe de leurs rêves, nous vous proposons un large éventail de robe de mariée de tout style. La jeune créatrice passionnée, Amelle, vous accueille dans son grand showroom à 20 minutes de Roissy.', 'contact@bellepourmariage.com', 'Sur rendez-vous via le Site', 8),
(15, 'Imprimeur d’idées en 3D ', '95500 Gonesse', '07 81 36 81 03', 'tiktok.com/@_my3d_?_t=8hnT3PkMOMS&_r=1', 'creation3D.png', '10€ -150€', 'Découvrez l\'impression 3D qui donne vie à vos idées cadeaux! Offrez des moments uniques avec des figurines personnalisées, des prototypes originaux et bien plus encore. Faites de chaque occasion un souvenir inoubliable. Contactez nous pour donner vie à vo', 'adefinir@gmail.com', 'Sur commande', 12),
(16, 'KPerle', '75016 Paris', '06 95 86 47 74', 'instagram.com/k.perle_\r\nTiktok : k.perle_\r\nSnapchat: k.perlee', 'KPerle.png\r\ncollier.png\r\n', '5€ - 10€', 'Nous vous donnons l’occasion d’offrir nos bijoux de téléphone 100% personnalisée, selon vos goûts et vos couleurs. Ceci s’adapte pour tout type d’événement, ne rater pas l’occasion de vous démarquer.', 'adefinir@gmail.com', 'Sur commande', 12),
(17, 'Inti Event', 'Prestation sur lieu de célébration\r\nBasé au 22 rue de Montigny 95100 Argenteuil', '07 57 83 44 17 - 06 12 69', 'instagram.com/inti_event\r\nfacebook.com/intievent\r\nhttps://www.intieventparis.com\r\nlinktr.ee/inti_event\r\nX.com\r\nlinkedin.com/\r\n\r\n\r\n\r\n', 'IntiEvent.png\r\nAu Buffet des mariés.png\r\nSalle des mariés.png\r\n\r\n', '2500€ - 4500€', 'Chez Inti Event, concevons ensemble le mariage de vos rêves ! Vous profiterez de nos consultations personnalisées, d’une décoration sur mesure et d’une coordination jour J.', 'contact@inti-event.com', 'Réservation rendez-vous Devis ', 13),
(18, 'Pâtisserie Vincent Salur', '25 rue de Lourmel 75015 Paris\r\n6 rue Jouffroy d\'Abbans 75017 Paris', '01 45 78 27 47', 'instagram.com/vincentsalur\r\nfacebook.com/vincent.salur\r\npartenariats@vincentsalur.com\r\nyoutu.be/O6tKCCNjSqY?si=4VOSpg8mfgtYvaZO\r\nvincentsalur.fr\r\ntiktok.com/@vincentsalur\r\nSnapchat.com/\r\nlinktr.ee/vincentsalur', 'Vincent Salur.png\r\nPieceMontée-Cygne.png\r\nPieceMontee-Cygne.png', '13€ - 35€', 'Laissez-vous emporter à travers nos créations culinaires inédites. Des créations exquises allient tradition et innovation, offrant des desserts uniques où chaque bouchée révèle notre savoir-faire exceptionnel. ✨🌟', 'adefinir@gmail.com', 'Sur commande', 18),
(19, 'Déco Mariage D’une Vie ', 'Prestation sur lieu de Célébration \r\nBasé sur Paris', '07 69 71 37 58', 'instagram.com/deco_mariage_dune_vie_/', 'DécoMariageduneVie.png\r\n\r\ndécor.png\r\ndécor-table.png\r\n', 'Sur devis', 'Nous vous proposons une décoration pour votre mariage afin de sublimer et rendre ce moment unique. Nous portons une attention particulière à vos goûts en vous proposant un large choix. Disponible sur Paris, en Île-de-France et sur un rayon de 400km. ', 'evenement36@hotmail.com', 'Réservation sur rendez-vous', 13),
(20, 'Normandie Mariage', '26 la pichotière 61300 Saint Sulpice-sur-Risle ', '06 02 02 59 81', 'instagram.com/normandiemariage\r\nwww.normandie-mariage.com/galerie-collection\r\n@biancoevento\r\n', 'normandiemariage.png\r\nRobe de mariée-boutique.png\r\n', '500€ - 2500€', 'Créatrice de robe sur mesure, nous disposons d’un vaste choix pour satisfaire vos envies. Nous somme à votre service depuis 1982, faites confiance à notre expertise.', 'contact@normandie-mariage.com', 'Sur rendez-vous', 8),
(21, 'Soumya Couture', '3bis rue Edgar Minoret\r\n95110 Sannois', '06 58 43 18 47', 'instagram.com/soumyacoutureparis\r\nsoumyacoutureparis.com\r\n', 'SoumyaCouture.png\r\nRobe MarieeDos.png\r\n', '100€ - 1800€', 'Soumya Couture vous propose différents services en boutique : la location des robes, la confection sur mesure et la vente d’occasion.', 'soumyacoutureparis@hotmail.com', 'Réservation essayage sur rendez-vous', 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`id_prestataire`),
  ADD KEY `FK-PRESTATAIRE_PRESTATION` (`id_event`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `id_prestataire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD CONSTRAINT `FK-PRESTATAIRE_PRESTATION` FOREIGN KEY (`id_event`) REFERENCES `prestation` (`id_prestation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
