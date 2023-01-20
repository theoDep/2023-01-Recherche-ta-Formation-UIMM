-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: database
-- Generation Time: Jan 20, 2023 at 03:12 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `identifier`, `title`) VALUES
(0x0185cec032fc7fbe9df57c87ac1a6afb, 'RS5599', 'Réaliser des applications we b à l ’aide d’un sys tème de gestion de contenus (CMS)'),
(0x0185cec47fc372e4903d968748292215, 'RS5487', 'Gérer un projet en mobi lisant les méthodes agiles'),
(0x0185cec750cf7861ac6c8023833f8b13, 'RNCP31114BC01', 'Analyser et définir la s tratégie d\'un système d\'information'),
(0x0185cec80d2f7ff5847b2863c161231a, 'RNCP31114BC02', 'Assurer la gestion du Système d’information'),
(0x0185ced5326c72118e5a3b85f95ec290, 'RNCP31115BC01', 'Assister les utilisateurs en centre de services'),
(0x0185ced5af45708bb344ed28895a01fc, 'RNCP31115BC02', 'Maintenir, exploiter et sécuriser une infrastructure centralisée'),
(0x0185ced6327a7d5590ad0e1a3413aabb, 'RNCP31115BC03', 'Maintenir et exploiter une infrastructure distribuée et contribuer à sa sécurisation'),
(0x0185ced6b1e673aaa1786c9b3cd9bc55, 'RNCP31115BC04', 'Certificat complémentaires de spécialisation Linux'),
(0x0185ced780157a04b9304b214e0e831d, 'RS5021', 'Analyser les incidents de sécurité détectés'),
(0x0185ced7efe0768bb2022dc35846df32, 'RS5020', 'Survei ller un système d’i nformation s ur des critères de sécurité informatique'),
(0x0185cf3979df739cba803a89ad22300a, 'RNCP35594BC01', 'Concevoir et développer des composants d\'interface utilisateur en intégrant les recommandations de sécurité'),
(0x0185cfa5e3297289aa6485d6b9385ccb, 'RNCP35594BC02', 'Concevoir et développer la persistance des données en intégrant les recommandations de sécurité'),
(0x0185cfa6c0837522854d8a3573a91e82, 'RNCP35594BC03', 'Concevoir et développer une application multicouche répartie en intégrant les recommandations de sécurité');

-- --------------------------------------------------------

--
-- Table structure for table `code_skill`
--

CREATE TABLE `code_skill` (
  `code_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `skill_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `code_skill`
--

INSERT INTO `code_skill` (`code_id`, `skill_id`) VALUES
(0x0185cec032fc7fbe9df57c87ac1a6afb, 0x0185cea955a870edb7226b8c004716e6),
(0x0185cec032fc7fbe9df57c87ac1a6afb, 0x0185ceb80c8b70cbb8085e483506f866),
(0x0185cec032fc7fbe9df57c87ac1a6afb, 0x0185ceb86a2c7d678b51a33b8d93da2e),
(0x0185cec032fc7fbe9df57c87ac1a6afb, 0x0185ceb8b17478bdbd7005561939b06d),
(0x0185cec032fc7fbe9df57c87ac1a6afb, 0x0185ceb8f6a27befa654e51f3e0c03cc),
(0x0185cec032fc7fbe9df57c87ac1a6afb, 0x0185ceb951227eb8b80051e5e8ad3ea9),
(0x0185cec032fc7fbe9df57c87ac1a6afb, 0x0185ceb9bfa174b69b33fb0b42db0654),
(0x0185cec032fc7fbe9df57c87ac1a6afb, 0x0185ceb9f8717fafbc7d43241793802c),
(0x0185cec032fc7fbe9df57c87ac1a6afb, 0x0185ceba37a7707a8f8012094e950c4c),
(0x0185cec47fc372e4903d968748292215, 0x0185cec3391477f492abbae57f27b90e),
(0x0185cec47fc372e4903d968748292215, 0x0185cec366ed704b8634d813ebe601bf),
(0x0185cec47fc372e4903d968748292215, 0x0185cec392c071f497d8d0feb633e420),
(0x0185cec47fc372e4903d968748292215, 0x0185cec3bb9d733e85d6419049a1d0f8),
(0x0185cec750cf7861ac6c8023833f8b13, 0x0185cec52bc8743c8f5f2ebaa2a30909),
(0x0185cec750cf7861ac6c8023833f8b13, 0x0185cec5b4267493bbc5eef449c1f8b3),
(0x0185cec750cf7861ac6c8023833f8b13, 0x0185cec605d3777a9db14e87f6232dcc),
(0x0185cec750cf7861ac6c8023833f8b13, 0x0185cec62c167162bc65ff55f05456d4),
(0x0185cec80d2f7ff5847b2863c161231a, 0x0185cec652fd767db4228d9bc36a3325),
(0x0185cec80d2f7ff5847b2863c161231a, 0x0185cec67afb7fd9b62f7fcc81e70303),
(0x0185cec80d2f7ff5847b2863c161231a, 0x0185cec6a4177390acb137eecdd2e0c9),
(0x0185cec80d2f7ff5847b2863c161231a, 0x0185cec6c8f97bc0ba6618b953612fdf),
(0x0185ced5326c72118e5a3b85f95ec290, 0x0185cecc5bbe71f39cd9079eb807783e),
(0x0185ced5326c72118e5a3b85f95ec290, 0x0185cecc9d8977868dc1033c4e8824fa),
(0x0185ced5326c72118e5a3b85f95ec290, 0x0185cecccc3f7f309d7b94566e4caa3d),
(0x0185ced5326c72118e5a3b85f95ec290, 0x0185cecd070e77659857acce9c358e4e),
(0x0185ced5af45708bb344ed28895a01fc, 0x0185cecd3c37768a9aa5b99906fdf017),
(0x0185ced5af45708bb344ed28895a01fc, 0x0185cecd6dd67d5f99148f0f3abc395a),
(0x0185ced5af45708bb344ed28895a01fc, 0x0185cecdab437e5498cb6515f81843a5),
(0x0185ced5af45708bb344ed28895a01fc, 0x0185cecebf5c71049a8f3539bf3e1f39),
(0x0185ced5af45708bb344ed28895a01fc, 0x0185cecedf4d7979aaf675a30e29438c),
(0x0185ced6327a7d5590ad0e1a3413aabb, 0x0185cecf16dd7677b2ef87517ac5e99b),
(0x0185ced6327a7d5590ad0e1a3413aabb, 0x0185cecf3e107ab7bd195f6f6f7ede21),
(0x0185ced6327a7d5590ad0e1a3413aabb, 0x0185cecf72a27d5c9498bf759ebfe2a8),
(0x0185ced6327a7d5590ad0e1a3413aabb, 0x0185cecfab997fd0ab7d0a2f59b3b7b7),
(0x0185ced6327a7d5590ad0e1a3413aabb, 0x0185cecfcfae7dbc9ce8486cca082a9c),
(0x0185ced6327a7d5590ad0e1a3413aabb, 0x0185cecff876709b91214cf0de2350e9),
(0x0185ced6b1e673aaa1786c9b3cd9bc55, 0x0185ced043f67ad3bebd9da0c7194027),
(0x0185ced6b1e673aaa1786c9b3cd9bc55, 0x0185ced0b9017d0b91cc45e2c742c512),
(0x0185ced6b1e673aaa1786c9b3cd9bc55, 0x0185ced1675d732da853666fb32d0dd8),
(0x0185ced6b1e673aaa1786c9b3cd9bc55, 0x0185ced19971767f8cdbe56727959265),
(0x0185ced6b1e673aaa1786c9b3cd9bc55, 0x0185ced1d18c72c584c8a651dd025994),
(0x0185ced6b1e673aaa1786c9b3cd9bc55, 0x0185ced210fc7355a7691eb76a8c4d8e),
(0x0185ced780157a04b9304b214e0e831d, 0x0185ced25a887b54b78654b627aa77b7),
(0x0185ced780157a04b9304b214e0e831d, 0x0185ced2a2957d05a08e7c1c75983d94),
(0x0185ced780157a04b9304b214e0e831d, 0x0185ced2fd327ce7bb067b294236dfde),
(0x0185ced7efe0768bb2022dc35846df32, 0x0185ced36af37493b0bec24aff98006f),
(0x0185ced7efe0768bb2022dc35846df32, 0x0185ced3e05b71c09e48b7973e7c5074),
(0x0185ced7efe0768bb2022dc35846df32, 0x0185ced44cd375a6adea82cf82c1059e),
(0x0185cf3979df739cba803a89ad22300a, 0x0185cf32af9f77f58bba94f3e2ed99ac),
(0x0185cf3979df739cba803a89ad22300a, 0x0185cf32d4677a6bbe42328eadb0842f),
(0x0185cf3979df739cba803a89ad22300a, 0x0185cf3300937cb9861d1a5733d95e58),
(0x0185cf3979df739cba803a89ad22300a, 0x0185cf332fe47fd8babedbad497e9581),
(0x0185cf3979df739cba803a89ad22300a, 0x0185cf33571277f792ea95431d3ce75d),
(0x0185cfa5e3297289aa6485d6b9385ccb, 0x0185cf33877e7f34873af111a60ab8e4),
(0x0185cfa5e3297289aa6485d6b9385ccb, 0x0185cf33af2b7d33bcd713255642b09c),
(0x0185cfa5e3297289aa6485d6b9385ccb, 0x0185cf33ce0d7c97a79f9623f4cda4a1),
(0x0185cfa6c0837522854d8a3573a91e82, 0x0185cf343fbb76e29566935bc69f9f96),
(0x0185cfa6c0837522854d8a3573a91e82, 0x0185cf345ee47c03878ab12c333c083e),
(0x0185cfa6c0837522854d8a3573a91e82, 0x0185cf348612737bbed798255c67b5e2),
(0x0185cfa6c0837522854d8a3573a91e82, 0x0185cf34ae3f70c7a8b849f48079d477),
(0x0185cfa6c0837522854d8a3573a91e82, 0x0185cf34cc0872e583083b2135664d92),
(0x0185cfa6c0837522854d8a3573a91e82, 0x0185cf34ef027eaf977d50c57f014138),
(0x0185cfa6c0837522854d8a3573a91e82, 0x0185cf3514cc7c7bb30f27e39965affd);

-- --------------------------------------------------------

--
-- Table structure for table `condition`
--

CREATE TABLE `condition` (
  `id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `descriptive` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `condition`
--

INSERT INTO `condition` (`id`, `descriptive`) VALUES
(0x0185ced9fd297bb7a40ef27f30020d62, 'Très forte motivation, à prouver !'),
(0x0185ceda1b9d7d64838350567a8de64f, 'Aucune condition de diplôme'),
(0x0185ceda3714747db59628f4c8ae627f, 'Tests en ligne'),
(0x0185ceda4fd67a1c8ac6e8fa36bfafed, 'Entretien de sélection'),
(0x0185ceda69b5741da5262c0343d9cad1, 'Forte appétence pour le numérique'),
(0x0185cfa317a47ad6997040d66991324d, 'Bac +2 informatique ou selon expérience professionnelle équivalente');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `descriptive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`id`, `descriptive`) VALUES
(0x0185cedd3bea7d7ba324a328eefa676c, 'Pris en charge par la région Grand Est'),
(0x0185cedd5b2078b589d098222070e895, 'Rémunération pour l’apprenant (ASP)'),
(0x0185cfa9d49674cc82ef0947d37f1343, 'Pris en charge par l’entreprise'),
(0x0185cfa9fcdb764783eb12bddd3feefe, 'Rémunération par l’entreprise');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230120100933', '2023-01-20 10:09:40', 687),
('DoctrineMigrations\\Version20230120123002', '2023-01-20 12:30:16', 218);

-- --------------------------------------------------------

--
-- Table structure for table `format`
--

CREATE TABLE `format` (
  `id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `format`
--

INSERT INTO `format` (`id`, `name`) VALUES
(0x0185cf18eba77016abd24ebac76bcb49, 'Formation initiale dans le cadre du Plan Régional de Formation'),
(0x0185cf1931977cfa9f44df18ea0c26ca, 'Alternance');

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studies_level` int NOT NULL,
  `duration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formation`
--

INSERT INTO `formation` (`id`, `name`, `studies_level`, `duration`) VALUES
(0x0185cf2bc57b712ca07daa9f5bf2de82, 'REFERENT DIGITAL', 2, 987),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 'DÉVELOPPEUR WEB ET WEB MOBILE', 2, 987),
(0x0185cf2e772a76a8b30e289b32608933, 'TECHNICIEN SUPÉRIEUR SYSTÈMES ET RÉSEAUX Spécialisation Analyste Cybersécurité', 2, 987),
(0x0185cfa8b63f71ac97f346edea0042bf, 'CONCEPTEUR DEVELOPPEUR D’APPLICATION', 4, 1092);

-- --------------------------------------------------------

--
-- Table structure for table `formation_code`
--

CREATE TABLE `formation_code` (
  `formation_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `code_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formation_code`
--

INSERT INTO `formation_code` (`formation_id`, `code_id`) VALUES
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cec032fc7fbe9df57c87ac1a6afb),
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cec47fc372e4903d968748292215),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cec750cf7861ac6c8023833f8b13),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cec80d2f7ff5847b2863c161231a),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ced5326c72118e5a3b85f95ec290),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ced5af45708bb344ed28895a01fc),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ced6327a7d5590ad0e1a3413aabb),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ced6b1e673aaa1786c9b3cd9bc55),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ced780157a04b9304b214e0e831d),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ced7efe0768bb2022dc35846df32),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cf3979df739cba803a89ad22300a),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cfa5e3297289aa6485d6b9385ccb),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cfa6c0837522854d8a3573a91e82);

-- --------------------------------------------------------

--
-- Table structure for table `formation_condition`
--

CREATE TABLE `formation_condition` (
  `formation_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `condition_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formation_condition`
--

INSERT INTO `formation_condition` (`formation_id`, `condition_id`) VALUES
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185ced9fd297bb7a40ef27f30020d62),
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185ceda1b9d7d64838350567a8de64f),
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185ceda3714747db59628f4c8ae627f),
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185ceda4fd67a1c8ac6e8fa36bfafed),
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185ceda69b5741da5262c0343d9cad1),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185ced9fd297bb7a40ef27f30020d62),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185ceda1b9d7d64838350567a8de64f),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185ceda3714747db59628f4c8ae627f),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185ceda4fd67a1c8ac6e8fa36bfafed),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185ceda69b5741da5262c0343d9cad1),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ced9fd297bb7a40ef27f30020d62),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ceda1b9d7d64838350567a8de64f),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ceda3714747db59628f4c8ae627f),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ceda4fd67a1c8ac6e8fa36bfafed),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185ceda69b5741da5262c0343d9cad1),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185ceda3714747db59628f4c8ae627f),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185ceda4fd67a1c8ac6e8fa36bfafed),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cfa317a47ad6997040d66991324d);

-- --------------------------------------------------------

--
-- Table structure for table `formation_cost`
--

CREATE TABLE `formation_cost` (
  `formation_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `cost_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formation_cost`
--

INSERT INTO `formation_cost` (`formation_id`, `cost_id`) VALUES
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cedd3bea7d7ba324a328eefa676c),
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cedd5b2078b589d098222070e895),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cedd3bea7d7ba324a328eefa676c),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cedd5b2078b589d098222070e895),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185cedd3bea7d7ba324a328eefa676c),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185cedd5b2078b589d098222070e895),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cedd3bea7d7ba324a328eefa676c),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cedd5b2078b589d098222070e895);

-- --------------------------------------------------------

--
-- Table structure for table `formation_format`
--

CREATE TABLE `formation_format` (
  `formation_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `format_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formation_format`
--

INSERT INTO `formation_format` (`formation_id`, `format_id`) VALUES
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cf18eba77016abd24ebac76bcb49),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cf18eba77016abd24ebac76bcb49),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185cf18eba77016abd24ebac76bcb49),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cf18eba77016abd24ebac76bcb49),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cf1931977cfa9f44df18ea0c26ca);

-- --------------------------------------------------------

--
-- Table structure for table `formation_formation`
--

CREATE TABLE `formation_formation` (
  `formation_source` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `formation_target` binary(16) NOT NULL COMMENT '(DC2Type:uuid)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formation_formation`
--

INSERT INTO `formation_formation` (`formation_source`, `formation_target`) VALUES
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cfa8b63f71ac97f346edea0042bf);

-- --------------------------------------------------------

--
-- Table structure for table `formation_job`
--

CREATE TABLE `formation_job` (
  `formation_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `job_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formation_job`
--

INSERT INTO `formation_job` (`formation_id`, `job_id`) VALUES
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cf12bfcd729597a7d4a7845533e7),
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cf12dd1a709eb61ad6c906bac612),
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cf12f8ff7063aebce041dcc3f66b),
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cf1313ce7f69b28ba6014893305e),
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cf132e6c71a393f586fbb8a33533),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cf135c217f12b7a9e571fce55ba4),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cf137d8c7724b20e96781d670489),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cf13a9477ec9abd5f04a15d0b3f5),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cf13c39a75c288a13d9e39348a89),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185cf144e967b669b6db9acbb8dae4b),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185cf1464b37dc1bfac03aa6e77168e),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185cf14833e7b668091fddd9d84826b),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185cf14a25973d6bd2233f1df368dd1),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185cf14cc8873428d1540128abc90a3),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cfa3b85b7acc92ed9b1b937d9296),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cfa3d6de7b4b87cbe0e000976f9d),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cfa407737676b7a88fa8691a4666),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cfa42a027496bb6ec1ec47a6210e),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cfa456cd739fa74a2b03d6047f83);

-- --------------------------------------------------------

--
-- Table structure for table `formation_location`
--

CREATE TABLE `formation_location` (
  `formation_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `location_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formation_location`
--

INSERT INTO `formation_location` (`formation_id`, `location_id`) VALUES
(0x0185cf2bc57b712ca07daa9f5bf2de82, 0x0185cede7f5572688ed16213dad23dba),
(0x0185cf2d4d8572a6b2c35fb9421cd5a6, 0x0185cede7f5572688ed16213dad23dba),
(0x0185cf2e772a76a8b30e289b32608933, 0x0185cede7f5572688ed16213dad23dba),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cede7f5572688ed16213dad23dba),
(0x0185cfa8b63f71ac97f346edea0042bf, 0x0185cfa273687679a6a6466493143a3f);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `name`) VALUES
(0x0185cf12bfcd729597a7d4a7845533e7, 'Administrateur systèmes, réseaux et sécurité'),
(0x0185cf12dd1a709eb61ad6c906bac612, 'Administrateur d’infrastructures'),
(0x0185cf12f8ff7063aebce041dcc3f66b, 'Administrateur Cloud'),
(0x0185cf1313ce7f69b28ba6014893305e, 'Responsable infrastructure systèmes et réseaux'),
(0x0185cf132e6c71a393f586fbb8a33533, 'Administrateur bases de Données'),
(0x0185cf135c217f12b7a9e571fce55ba4, 'Développeur web et web mobile'),
(0x0185cf137d8c7724b20e96781d670489, 'Développeur logiciel'),
(0x0185cf13a9477ec9abd5f04a15d0b3f5, 'Développeur front'),
(0x0185cf13c39a75c288a13d9e39348a89, 'Développeur backend'),
(0x0185cf144e967b669b6db9acbb8dae4b, 'Technicien systèmes et réseaux'),
(0x0185cf1464b37dc1bfac03aa6e77168e, 'Technicien support'),
(0x0185cf14833e7b668091fddd9d84826b, 'Technicien réseau'),
(0x0185cf14a25973d6bd2233f1df368dd1, 'Technicien informatique'),
(0x0185cf14cc8873428d1540128abc90a3, 'Technicien d’exploitation'),
(0x0185cfa3b85b7acc92ed9b1b937d9296, 'Concepteur Web'),
(0x0185cfa3d6de7b4b87cbe0e000976f9d, 'Concepteur Application Smartphone'),
(0x0185cfa407737676b7a88fa8691a4666, 'Concepteur Fullstack'),
(0x0185cfa42a027496bb6ec1ec47a6210e, 'Concepteur JS'),
(0x0185cfa456cd739fa74a2b03d6047f83, '...');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `line_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `line_1`, `line_2`, `city`, `zip_code`) VALUES
(0x0185cede7f5572688ed16213dad23dba, 'Pôle Formation UIMM – Campus Sup Ardenne', '8 rue Claude Chrétien', 'Charleville-Mézières', 8000),
(0x0185cfa273687679a6a6466493143a3f, 'Pôle Formation UIMM - Reims', '3 rue Max Holste', 'Reims', 51100);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `descriptive` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `descriptive`, `name`) VALUES
(0x0185cea955a870edb7226b8c004716e6, '•Naviguer dans l’interface Wordpress sur le site wordpress.com, version en ligne du CMS\r\n•Identifier les langages des paragraphes de code (HTML, CSS et PHP) ainsi que leur fonction', 'Utiliser Wordpress'),
(0x0185ceb80c8b70cbb8085e483506f866, '•Télécharger la version locale de Wordpress à partir de wordpress.org\r\n•Installer le package Bitnami qui réunit le serveur Apache, la base de donnée (MySQL) et l’interface\r\nd’administration de la base de données (PhPMyAdmin)\r\n•Identifier le rôle de ces différents éléments\r\n•Faire migrer un site existant vers Wordpress à partir du plugin Duplicator', 'Installer Wordpress sur son ordinateur'),
(0x0185ceb86a2c7d678b51a33b8d93da2e, '•Créer et gérer les différents types d’utilisateurs\r\n•Gérer les commentaires', 'Administrer et gérer un site participatif'),
(0x0185ceb8b17478bdbd7005561939b06d, '•Choisir un thème et l’intégrer\r\n•Planifier l’arborescence du site\r\n•Créer un menu\r\n•Créer des articles et des pages\r\n•Créer des catégories et des tags', 'Travailler avec les thèmes'),
(0x0185ceb8f6a27befa654e51f3e0c03cc, '•Déclarer et installer un thème enfant\r\n•Modifier le CSS', 'Modifier et personnaliser les thèmes'),
(0x0185ceb951227eb8b80051e5e8ad3ea9, '•Choisir les widgets et plugins adaptés dans la base disponible\r\n•Ajouter des widgets\r\n•Ajouter des plugins\r\n•Créer un plugin', 'Ajouter des extensions'),
(0x0185ceb9bfa174b69b33fb0b42db0654, '•Faire des sauvegardes\r\n•Créer des pages protégées par mot de passe\r\n•Créer des accès utilisateurs', 'Sécuriser son site'),
(0x0185ceb9f8717fafbc7d43241793802c, '•Optimiser le référencement de son site pour les moteurs de recherches (SEO)\r\n•Analyser le trafic de son site à partir de Google Analytics', 'Exploiter son site'),
(0x0185ceba37a7707a8f8012094e950c4c, '•Choisir une hébergeur\r\n•Utiliser un FTP\r\n•Héberger son site sur un serveur mutualisé ou un serveur dédié', 'Mettre en ligne son site'),
(0x0185cec3391477f492abbae57f27b90e, '- Réaliser un diagnostic de l’environnement, des conditions matérielles, financières et humaines au\r\nregard des objectifs du projet, afin d’évaluer la pertinence d’une approche agile dans la gestion du\r\nprojet.', NULL),
(0x0185cec366ed704b8634d813ebe601bf, 'Sélectionner la méthode de gestion de projet agile adaptée à un projet spécifique, à partir du\r\ndiagnostic préalablement réalisé, afin de garantir l’adéquation entre la méthode utilisée et la\r\nréalisation des objectifs.', NULL),
(0x0185cec392c071f497d8d0feb633e420, '- Préparer le déploiement du projet en concevant les artefacts adaptées et en programmant les rituels\r\nafin de garantir la communication et la transparence entre les différentes parties prenantes.', NULL),
(0x0185cec3bb9d733e85d6419049a1d0f8, '- Animer les rituels d’un projet en méthode agile, en mobilisant les ressources sélectionnées afin de\r\nrépondre de façon adaptée aux besoins potentiellement évolutifs du client.', NULL),
(0x0185cec52bc8743c8f5f2ebaa2a30909, '- Maquetter une application.', NULL),
(0x0185cec5b4267493bbc5eef449c1f8b3, '- Réaliser une interface utilisateur web statique et adaptable.', NULL),
(0x0185cec605d3777a9db14e87f6232dcc, '- Développer une interface utilisateur web dynamique.', NULL),
(0x0185cec62c167162bc65ff55f05456d4, '- Réaliser une interface utilisateur avec une solution de gestion de\r\ncontenu ou e-commerce.', NULL),
(0x0185cec652fd767db4228d9bc36a3325, '- Créer une base de données.', NULL),
(0x0185cec67afb7fd9b62f7fcc81e70303, '- Développer les composants d\'accès aux données.', NULL),
(0x0185cec6a4177390acb137eecdd2e0c9, '- Développer la partie back-end d\'une application web ou web mobile.', NULL),
(0x0185cec6c8f97bc0ba6618b953612fdf, '- Elaborer et mettre en oeuvre des composants dans une application de\r\ngestion de contenu ou e-commerce.', NULL),
(0x0185cecc5bbe71f39cd9079eb807783e, '-Mettre en s ervice un équipement numérique.', NULL),
(0x0185cecc9d8977868dc1033c4e8824fa, '- Assister les utilisateurs sur leurs équipements numériques.', NULL),
(0x0185cecccc3f7f309d7b94566e4caa3d, '- Gérer les incidents et les problèmes.', NULL),
(0x0185cecd070e77659857acce9c358e4e, '- Assister à l’utilisation des ressources collaboratives', NULL),
(0x0185cecd3c37768a9aa5b99906fdf017, '-Maintenir et exploiter le réseau local et la téléphonie.', NULL),
(0x0185cecd6dd67d5f99148f0f3abc395a, '- Sécuriser les accès à internet.', NULL),
(0x0185cecdab437e5498cb6515f81843a5, '-Maintenir et exploiter un environnement virtualisé.', NULL),
(0x0185cecebf5c71049a8f3539bf3e1f39, '-Maintenir et exploiter un domaine Active Directory et les serveurs Windows.', NULL),
(0x0185cecedf4d7979aaf675a30e29438c, '-Maintenir et exploiter un serveur Linux.', NULL),
(0x0185cecf16dd7677b2ef87517ac5e99b, '- Configurer les s ervices de déploiement et de terminaux cl ients légers.', NULL),
(0x0185cecf3e107ab7bd195f6f6f7ede21, '- Automatiser les tâches à l’aide de scripts.', NULL),
(0x0185cecf72a27d5c9498bf759ebfe2a8, '-Maintenir et sécuriser les accès réseaux distants.', NULL),
(0x0185cecfab997fd0ab7d0a2f59b3b7b7, '- Superviser l’infrastructure .', NULL),
(0x0185cecfcfae7dbc9ce8486cca082a9c, '- Intervenir dans un environnement de Cloud Computing.', NULL),
(0x0185cecff876709b91214cf0de2350e9, '- Assurer sa veille technologique', NULL),
(0x0185ced043f67ad3bebd9da0c7194027, '- Administrer les serveurs Linux', NULL),
(0x0185ced0b9017d0b91cc45e2c742c512, '- Installer, paramétrer un service sous Linux.', NULL),
(0x0185ced1675d732da853666fb32d0dd8, '- S’appuyer sur les communautés d’utilisateurs.', NULL),
(0x0185ced19971767f8cdbe56727959265, '-Mettre une application en production.', NULL),
(0x0185ced1d18c72c584c8a651dd025994, '- Développer des scripts d’automatisation.', NULL),
(0x0185ced210fc7355a7691eb76a8c4d8e, '- Superviser les serveurs Linux', NULL),
(0x0185ced25a887b54b78654b627aa77b7, '- L’élaboration de l’analyse des événements de sécurité', NULL),
(0x0185ced2a2957d05a08e7c1c75983d94, '- L’analyse et gestion des incidents de sécurité', NULL),
(0x0185ced2fd327ce7bb067b294236dfde, '- L’élaboration et mise en oeuvre d’une stratégie de veille - technologique pour optimiser la gestion des risques', NULL),
(0x0185ced36af37493b0bec24aff98006f, '- L’analyse des métiers du commanditaire et évaluation globale de la\r\nvulnérabilité de son système d’information', NULL),
(0x0185ced3e05b71c09e48b7973e7c5074, '- L’élaboration et mise e n oeuvre d’une stratégie de collecte d’événements en provenance du système d’information du commanditaire', NULL),
(0x0185ced44cd375a6adea82cf82c1059e, '- L’élaboration et mise e n oeuvre d’une stratégie de veille technologique pour renforcer la gestion des risques', NULL),
(0x0185cf32af9f77f58bba94f3e2ed99ac, '- Maquetter une application.', NULL),
(0x0185cf32d4677a6bbe42328eadb0842f, '- Développer une interface utilisateur de type desktop.', NULL),
(0x0185cf3300937cb9861d1a5733d95e58, '- Développer des composants d\'accès aux données.', NULL),
(0x0185cf332fe47fd8babedbad497e9581, '- Développer la partie front-end d\'une interface utilisateur web.', NULL),
(0x0185cf33571277f792ea95431d3ce75d, '- Développer la partie back-end d\'une interface utilisateur web.', NULL),
(0x0185cf33877e7f34873af111a60ab8e4, '- Concevoir une base de données.', NULL),
(0x0185cf33af2b7d33bcd713255642b09c, '- Mettre en place une base de données.', NULL),
(0x0185cf33ce0d7c97a79f9623f4cda4a1, '- Développer des composants dans le langage d\'une base de données.', NULL),
(0x0185cf343fbb76e29566935bc69f9f96, '- Collaborer à la gestion d\'un projet informatique et à l\'organisation de\r\nl\'environnement de développement.', NULL),
(0x0185cf345ee47c03878ab12c333c083e, '- Concevoir une application.', NULL),
(0x0185cf348612737bbed798255c67b5e2, '- Développer des composants métier.', NULL),
(0x0185cf34ae3f70c7a8b849f48079d477, '- Construire une application organisée en couches.', NULL),
(0x0185cf34cc0872e583083b2135664d92, '- Développer une application mobile.', NULL),
(0x0185cf34ef027eaf977d50c57f014138, '- Préparer et exécuter les plans de tests d\'une application.', NULL),
(0x0185cf3514cc7c7bb30f27e39965affd, '- Préparer et exécuter le déploiement d\'une application.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code_skill`
--
ALTER TABLE `code_skill`
  ADD PRIMARY KEY (`code_id`,`skill_id`),
  ADD KEY `IDX_B268FD3B27DAFE17` (`code_id`),
  ADD KEY `IDX_B268FD3B5585C142` (`skill_id`);

--
-- Indexes for table `condition`
--
ALTER TABLE `condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `format`
--
ALTER TABLE `format`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formation_code`
--
ALTER TABLE `formation_code`
  ADD PRIMARY KEY (`formation_id`,`code_id`),
  ADD KEY `IDX_20CAD5D85200282E` (`formation_id`),
  ADD KEY `IDX_20CAD5D827DAFE17` (`code_id`);

--
-- Indexes for table `formation_condition`
--
ALTER TABLE `formation_condition`
  ADD PRIMARY KEY (`formation_id`,`condition_id`),
  ADD KEY `IDX_77ABD89E5200282E` (`formation_id`),
  ADD KEY `IDX_77ABD89E887793B6` (`condition_id`);

--
-- Indexes for table `formation_cost`
--
ALTER TABLE `formation_cost`
  ADD PRIMARY KEY (`formation_id`,`cost_id`),
  ADD KEY `IDX_4FF971BC5200282E` (`formation_id`),
  ADD KEY `IDX_4FF971BC1DBF857F` (`cost_id`);

--
-- Indexes for table `formation_format`
--
ALTER TABLE `formation_format`
  ADD PRIMARY KEY (`formation_id`,`format_id`),
  ADD KEY `IDX_FEA37CF25200282E` (`formation_id`),
  ADD KEY `IDX_FEA37CF2D629F605` (`format_id`);

--
-- Indexes for table `formation_formation`
--
ALTER TABLE `formation_formation`
  ADD PRIMARY KEY (`formation_source`,`formation_target`),
  ADD KEY `IDX_8A3D71627F93715E` (`formation_source`),
  ADD KEY `IDX_8A3D7162667621D1` (`formation_target`);

--
-- Indexes for table `formation_job`
--
ALTER TABLE `formation_job`
  ADD PRIMARY KEY (`formation_id`,`job_id`),
  ADD KEY `IDX_4C88858C5200282E` (`formation_id`),
  ADD KEY `IDX_4C88858CBE04EA9` (`job_id`);

--
-- Indexes for table `formation_location`
--
ALTER TABLE `formation_location`
  ADD PRIMARY KEY (`formation_id`,`location_id`),
  ADD KEY `IDX_990CDE3A5200282E` (`formation_id`),
  ADD KEY `IDX_990CDE3A64D218E` (`location_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `code_skill`
--
ALTER TABLE `code_skill`
  ADD CONSTRAINT `FK_B268FD3B27DAFE17` FOREIGN KEY (`code_id`) REFERENCES `code` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B268FD3B5585C142` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `formation_code`
--
ALTER TABLE `formation_code`
  ADD CONSTRAINT `FK_20CAD5D827DAFE17` FOREIGN KEY (`code_id`) REFERENCES `code` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_20CAD5D85200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `formation_condition`
--
ALTER TABLE `formation_condition`
  ADD CONSTRAINT `FK_77ABD89E5200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_77ABD89E887793B6` FOREIGN KEY (`condition_id`) REFERENCES `condition` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `formation_cost`
--
ALTER TABLE `formation_cost`
  ADD CONSTRAINT `FK_4FF971BC1DBF857F` FOREIGN KEY (`cost_id`) REFERENCES `cost` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4FF971BC5200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `formation_format`
--
ALTER TABLE `formation_format`
  ADD CONSTRAINT `FK_FEA37CF25200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FEA37CF2D629F605` FOREIGN KEY (`format_id`) REFERENCES `format` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `formation_formation`
--
ALTER TABLE `formation_formation`
  ADD CONSTRAINT `FK_8A3D7162667621D1` FOREIGN KEY (`formation_target`) REFERENCES `formation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8A3D71627F93715E` FOREIGN KEY (`formation_source`) REFERENCES `formation` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `formation_job`
--
ALTER TABLE `formation_job`
  ADD CONSTRAINT `FK_4C88858C5200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4C88858CBE04EA9` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `formation_location`
--
ALTER TABLE `formation_location`
  ADD CONSTRAINT `FK_990CDE3A5200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_990CDE3A64D218E` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
