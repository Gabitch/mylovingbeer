-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 21 Avril 2015 à 17:10
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mylovingbeer`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `author_key` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `published` int(11) NOT NULL,
  `blocked` int(11) NOT NULL DEFAULT '0',
  `mark` int(11) NOT NULL DEFAULT '0',
  `comments` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `author_key`, `title`, `content`, `type`, `img`, `published`, `blocked`, `mark`, `comments`, `created_at`) VALUES
(1, '1', 'Les Ptits Gros !', '<p>Waaa ! Trop bien, un nouveau bar vient d''ouvrir !</p>\r\n<p>Il à l''ai tellement génial !</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porta fringilla ornare. Aenean mattis mattis consectetur. Sed consectetur, orci et ornare dictum, augue nisl gravida massa, sit amet elementum tortor sem id risus. Quisque pellentesque ultricies dolor, at dignissim eros elementum a. Nullam euismod luctus arcu sit amet maximus. Aenean ultricies rhoncus enim, vel tristique turpis. Aliquam a lacus odio. Praesent viverra pharetra neque ac egestas. Ut accumsan, nisi id pellentesque tempor, risus massa interdum lectus, non placerat lacus quam quis ligula. Nulla tempus tincidunt tincidunt. Nunc eget ornare lacus, quis maximus ante. Morbi eget ante pulvinar, euismod metus vitae, blandit nisi. Integer pretium rutrum purus, a ultricies lectus. Morbi cursus et orci sed sodales.</p>\r\n<p>Cras dignissim semper porta. Duis in hendrerit ipsum. Nunc elit sem, egestas id auctor id, congue sed tellus. Suspendisse sodales in lectus in lacinia. Integer egestas, magna et vulputate convallis, est sem vestibulum lorem, in sollicitudin enim nulla sed ex. Nulla commodo feugiat erat, at faucibus ex molestie vel. Cras interdum neque at maximus molestie. Suspendisse potenti. Sed erat ipsum, sodales sed sem vitae, gravida cursus felis. Sed aliquet finibus velit eget gravida.</p>\r\n<p>Nam nibh lectus, gravida ut orci sit amet, egestas commodo nibh. Maecenas non lorem eleifend, molestie turpis vitae, ullamcorper ante. Curabitur suscipit mauris non erat eleifend, eget congue nunc consectetur. Phasellus ac interdum elit, a aliquet augue. Cras aliquet, metus eu maximus porta, est purus blandit massa, eleifend ullamcorper turpis magna nec magna. Aenean vitae ultrices eros. Morbi augue ipsum, auctor eu condimentum eu, tincidunt id nisl. Pellentesque non lacus magna. Quisque sed rutrum dui. Duis vel orci metus.</p>\r\n<p>Proin at ex nec turpis bibendum volutpat. Sed aliquet nibh ac quam luctus volutpat. Etiam in ligula pulvinar, iaculis libero ac, tempor augue. Morbi porttitor tellus quis ex suscipit, non facilisis magna condimentum. Duis a nisl lorem. Praesent quis libero erat. Mauris sodales vel sem in sollicitudin. Vivamus viverra nibh viverra efficitur viverra. Aenean risus elit, volutpat vel condimentum id, fermentum cursus massa. Quisque malesuada sem vel egestas pharetra. Pellentesque tempor orci massa, sollicitudin congue enim egestas eget. Nam efficitur lorem ex, in tincidunt nisi sagittis non. Etiam sed libero lacus.</p>\r\n<p>Nullam auctor risus eget cursus maximus. Praesent commodo arcu vel facilisis tristique. Cras ac odio id purus sodales euismod a nec purus. Vivamus ac odio metus. Phasellus condimentum nisi a lacus volutpat porttitor. Integer ac nisi neque. Vestibulum mattis posuere felis, eget venenatis leo consequat a. Sed ornare suscipit viverra. Vivamus egestas auctor neque. Sed leo nunc, tempus a nibh a, iaculis rhoncus est.</p>', 'bar', 'qs5f15w1dgf15x1f5b5x1f5g1b5.jpg', 1, 0, 27, 1, '2015-03-25 10:28:12'),
(2, '3', 'Leffe', '<p>Nam at consectetur risus. Pellentesque ac faucibus enim, nec bibendum metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed eu condimentum nunc. Nam eu rhoncus sapien, vitae semper mi. Morbi magna velit, vulputate non orci at, pellentesque viverra dolor. Nullam scelerisque metus enim, vel blandit purus sagittis et. Cras congue libero sapien, sed consequat est varius ut. Maecenas in facilisis nibh, ac sollicitudin elit. Cras euismod hendrerit massa ut maximus.</p><p>Aliquam id euismod sem. Donec vitae sapien ex. Aenean congue sapien hendrerit diam bibendum ornare. Donec eget dolor dolor. Nullam vel pellentesque sem, ut facilisis elit. Duis purus risus, eleifend ac sem eu, venenatis sodales felis. Sed varius sem ac convallis ultricies. Nullam congue feugiat lorem, id condimentum eros tincidunt vitae. Donec ac tincidunt purus. Nam ac diam risus. Maecenas at tellus et nibh cursus pretium. Curabitur gravida nunc purus, quis tincidunt massa ullamcorper eu. In aliquet erat eu erat finibus porta. Pellentesque quis sapien ac turpis volutpat tincidunt vel eu risus.</p><p>Quisque a augue eget enim pharetra posuere. Donec egestas ligula eu mattis suscipit. Nulla purus tortor, tincidunt eu lectus ut, vestibulum pretium erat. Nunc dictum est ut justo lobortis, vel rutrum lacus faucibus. Morbi lacinia, eros at finibus vehicula, leo dui ullamcorper quam, id accumsan urna dolor a est. Nullam feugiat faucibus eros at blandit. Nullam porttitor sagittis est, vitae sollicitudin augue tincidunt pulvinar. Fusce id massa ante. Maecenas ornare massa sed ante faucibus commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas et mi blandit, lacinia nulla in, lobortis elit. Aliquam dignissim luctus nulla, ac tincidunt orci ultricies vel. Vivamus suscipit, eros sit amet congue rutrum, nisl sem commodo lorem, ut aliquam enim metus eu leo. Suspendisse sagittis enim in vestibulum mattis.</p>', 'beer', 'aed5q25edv21f5s62wg5vq.jpg', 1, 0, 4, 1, '2015-03-25 10:41:22'),
(3, '2', 'PRON PRON PRON', '<p>pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron pron</p>', 'bar', 'bar.png', 0, 0, 0, 0, '2015-03-25 10:51:57'),
(4, '4', 'Myrha', '<p>Nouvelle bi&egrave;re, pleine de go&ucirc;t, aux saveurs de dattes !</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.</p>\r\n', 'beer', '1c6d4dbfc3668ba3c3bce39c972d67db.jpg', 1, 0, 1, 0, '2015-03-25 11:10:22'),
(5, '3', 'Une bière pleine de mousse !', '<p>WAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA!</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.</p>\r\n', 'beer', '393a0d335f560a5a0cd2d3542dbc7463.jpg', 1, 0, -5, 1, '2015-03-25 11:14:06'),
(6, '1', 'Soiffe - 20e', '<p>Nouveau bar qui viens d&#39;ouvrir, gros choix de bi&egrave;res !</p>\r\n\r\n<p><img alt="" src="/BOURREETOS/src/img/articlesimages/b3.jpg" style="height:300px; width:591px" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis corrupti, quae harum sunt porro omnis dolores, eveniet tempora tenetur, ex et dignissimos iure dolorem sapiente. Aliquam sunt ipsam quia nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'bar', '538473716bf17f0deeb03234191859b0.jpg', 1, 0, 9, 1, '2015-03-25 11:23:53'),
(7, '7', 'Bistro Turgot - 12eme', '<p>Petit bistro poseyyy dans le 12eme, a tester !</p>\r\n\r\n<p>Incenderat autem audaces usque ad insaniam homines ad haec, quae nefariis egere conatibus, Luscus quidam curator urbis subito visus: eosque ut heiulans baiolorum praecentor ad expediendum quod orsi sunt incitans vocibus crebris. qui haut longe postea ideo vivus exustus est.</p>\r\n\r\n<p>Post haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.</p>\r\n\r\n<p>Advenit post multos Scudilo Scutariorum tribunus velamento subagrestis ingenii persuasionis opifex callidus. qui eum adulabili sermone seriis admixto solus omnium proficisci pellexit vultu adsimulato saepius replicando quod flagrantibus votis eum videre frater cuperet patruelis, siquid per inprudentiam gestum est remissurus ut mitis et clemens, participemque eum suae maiestatis adscisceret, futurum laborum quoque socium, quos Arctoae provinciae diu fessae poscebant.</p>\r\n', 'bar', '3765c08c8520ae68bb21a81185cecf52.jpg', 1, 0, 12, 0, '2015-03-28 16:04:00'),
(8, '1', 'Oberkafé - 11e', '<p>Bar d&#39;Oberkanf, ouvert de 10h &agrave; 5h. Le patron est tr&egrave;s sympa !</p>\r\n\r\n<p>Post hanc adclinis Libano monti Phoenice, regio plena gratiarum et venustatis, urbibus decorata magnis et pulchris; in quibus amoenitate celebritateque nominum Tyros excellit, Sidon et Berytus isdemque pares Emissa et Damascus saeculis condita priscis.</p>\r\n\r\n<p>Nihil morati post haec militares avidi saepe turbarum adorti sunt Montium primum, qui divertebat in proximo, levi corpore senem atque morbosum, et hirsutis resticulis cruribus eius innexis divaricaturn sine spiramento ullo ad usque praetorium traxere praefecti.</p>\r\n\r\n<p>Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>\r\n', 'bar', '79df46210f63985c25832435a1b14dfc.jpeg', 1, 0, 25, 1, '2015-03-28 16:07:50'),
(9, '4', 'Le Jockey', '<p>NE PAS Y ALLER !</p>\r\n\r\n<p>Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest, quod ex infinita societate generis humani, quam conciliavit ipsa natura, ita contracta res est et adducta in angustum ut omnis caritas aut inter duos aut inter paucos iungeretur.</p>\r\n\r\n<p>Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de amicitia) querebatur, quod omnibus in rebus homines diligentiores essent; capras et oves quot quisque haberet, dicere posse, amicos quot haberet, non posse dicere et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.</p>\r\n\r\n<p>Quare hoc quidem praeceptum, cuiuscumque est, ad tollendam amicitiam valet; illud potius praecipiendum fuit, ut eam diligentiam adhiberemus in amicitiis comparandis, ut ne quando amare inciperemus eum, quem aliquando odisse possemus. Quin etiam si minus felices in diligendo fuissemus, ferendum id Scipio potius quam inimicitiarum tempus cogitandum putabat.</p>\r\n\r\n<p>Ut enim quisque sibi plurimum confidit et ut quisque maxime virtute et sapientia sic munitus est, ut nullo egeat suaque omnia in se ipso posita iudicet, ita in amicitiis expetendis colendisque maxime excellit. Quid enim? Africanus indigens mei? Minime hercule! ac ne ego quidem illius; sed ego admiratione quadam virtutis eius, ille vicissim opinione fortasse non nulla, quam de meis moribus habebat, me dilexit; auxit benevolentiam consuetudo. Sed quamquam utilitates multae et magnae consecutae sunt, non sunt tamen ab earum spe causae diligendi profectae.</p>\r\n\r\n<p>Altera sententia est, quae definit amicitiam paribus officiis ac voluntatibus. Hoc quidem est nimis exigue et exiliter ad calculos vocare amicitiam, ut par sit ratio acceptorum et datorum. Divitior mihi et affluentior videtur esse vera amicitia nec observare restricte, ne plus reddat quam acceperit; neque enim verendum est, ne quid excidat, aut ne quid in terram defluat, aut ne plus aequo quid in amicitiam congeratur.</p>\r\n', 'bar', 'c97aff0571500971b13c5a3216558b88.jpg', 1, 0, -142, 1, '2015-03-28 16:11:24');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tracker`
--

CREATE TABLE IF NOT EXISTS `tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_key` int(11) NOT NULL,
  `article_key` int(11) NOT NULL,
  `mark` int(11) NOT NULL DEFAULT '0',
  `read_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tracker`
--

INSERT INTO `tracker` (`id`, `user_key`, `article_key`, `mark`, `read_at`) VALUES
(1, 1, 3, 0, '2015-04-21 16:15:36'),
(2, 1, 2, 0, '2015-04-09 17:19:54'),
(3, 1, 1, 1, '2015-04-21 16:39:51'),
(4, 1, 4, 1, '2015-04-09 17:26:36'),
(5, 1, 9, -1, '2015-04-21 16:10:45');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `status` varchar(255) NOT NULL DEFAULT 'user',
  `write_block` int(11) NOT NULL DEFAULT '0',
  `comment_block` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `pseudo`, `mail`, `password`, `avatar`, `status`, `write_block`, `comment_block`) VALUES
(1, 'Admin', 'Admin', 'admin', 'admin@mylovingbeer.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'avatar.png', 'admin', 0, 0),
(2, 'Gabou', 'Victor', 'gabitch', 'victor.gabou@outlook.fr', '45d1c8015b7902dda948bd36245309f84b4aad7b', 'gabitch.png', 'ban', 1, 1),
(3, 'Tom', 'Barnier', 'wop3476', 'tom.barnier@y-nov.com', 'b4bd652501d3db5494363f8cf9dcea288da788a6', 'avatar.png', 'writer', 0, 0),
(4, 'Laurent', 'Marc', 'nomilktoday', 'marc.laurent@y-nov.com', '5d4c1cef0bbdc2008ffe167f2cbe7772abfbe4a1', 'avatar.png', 'writer', 0, 1),
(5, 'Jean', 'Charles', 'jcharles', 'jean.charles@gmail.com', 'aff10576e6de0514a42b5ec91defa9cafc4edf34', 'avatar.png', 'user', 0, 0),
(6, 'Pasdeloup', 'Fergal', 'fergalou', 'fergal.bougerol@y-nov.com', '13429ea33178cbefe9425308b0d3acb4b79ab214', 'avatar.png', 'ban', 1, 1),
(7, 'Doe', 'John', 'jojo', 'johndoe@gmail.com', 'e5191e0ff4ad464b8c47e14617aeffc56b1c33fb', 'avatar.png', 'writer', 0, 0),
(8, 'Dupond', 'Jean', 'jeandupond', 'jeandupond@mlb.com', 'e2d914d7a7fd5f371447dabe4752dba5964a6b78', 'avatar.png', 'user', 0, 1),
(9, 'Dupont', 'Jean', 'jeandupont', 'jeandupont@mlb.com', 'fd411d252fa5f74ed6c3bbfd62a3b91101e9f673', 'avatar.png', 'user', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
