-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 05:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doktoret`
--

CREATE TABLE `doktoret` (
  `Id_Doktori` int(11) NOT NULL,
  `Emer_Mbiemer` varchar(50) NOT NULL,
  `CV` varchar(65000) NOT NULL,
  `Foto` mediumblob DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Specializimi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doktoret`
--

INSERT INTO `doktoret` (`Id_Doktori`, `Emer_Mbiemer`, `CV`, `Foto`, `Email`, `Specializimi`) VALUES
(40, 'DR. TEUTA DERVISHI', 'EDUKIMI : â€¢2010-2012 : Fakuleti i MjekÃ«sisÃ«, Universiteti i TiranÃ«s. â€¢1987 â€“ 1991 : Shkolla e Mesme â€œThemistokli Germenjiâ€, KorÃ§Ã«. â€¢2008 : DiplomÃ« nÃ« Endoskopi nÃ« laboratorin e Gastro â€“ HepatoligjisÃ« pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€. â€¢2005 : DiplomÃ« nÃ« Gastro â€“ Hepatologji pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€. â€¢2001 â€“ 2005 : Specializim nÃ« Gastro â€“ Hepatologji pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€, Universiteti i TiranÃ«s. EKSPERIENCA PROFESIONALE: â€¢2010 â€“ nÃ« vazhdim : Alergolog pranÃ« Spitalit Amerikan nÃ« TiranÃ«. â€¢2002 â€“ nÃ« vazhdim: Asistent Alergolog me As.Prof. I. Kajo nÃ« Klinike Private MjekÃ«sore tÃ« pajisur me liÃ§encÃ« nga Ministria e ShÃ«ndetÃ«sisÃ«. â€¢2005 â€“ 2009 : Alergolog nÃ« laboratorin eAlergo â€“ HepatologjisÃ« pranÃ« Spitalit Ushtarak TiranÃ«. â€¢2003 â€“ 2009 : Asistent Alergolog me Prof. As.I. Bibolli nÃ« KlinikÃ« Private MjekÃ«sore tÃ« pajisur me liÃ§encÃ« nga Ministria e ShÃ«ndetÃ«sisÃ«. â€¢2005 â€“ 2009 : Alergolog nÃ« laboratorin e Gastro â€“ HepatologjisÃ« pranÃ« Spitalit Ushtarak TiranÃ«. â€¢1998 â€“ 2005 : Mjek nÃ« qendrÃ«n mjekÃ«sore â€œLozhanâ€ KorÃ§Ã«', NULL, 'joana@gmail.com', 'Endokrinologe'),
(39, 'DR. SOKOL HASA', 'EDUKIMI : â€¢1997 â€“ 2000 : Fakuleti i MjekÃ«sisÃ«, Universiteti i TiranÃ«s. â€¢1987 â€“ 1991 : Shkolla e Mesme â€œThemistokli Germenjiâ€, KorÃ§Ã«. â€¢2008 : DiplomÃ« nÃ« Endoskopi nÃ« laboratorin e Gastro â€“ HepatoligjisÃ« pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€. â€¢2005 : DiplomÃ« nÃ« Gastro â€“ Hepatologji pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€. â€¢2001 â€“ 2005 : Specializim nÃ« Gastro â€“ Hepatologji pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€, Universiteti i TiranÃ«s. EKSPERIENCA PROFESIONALE: â€¢2010 â€“ nÃ« vazhdim : Alergolog pranÃ« Spitalit Amerikan nÃ« TiranÃ«. â€¢2002 â€“ nÃ« vazhdim: Asistent Alergolog me As.Prof. I. Kajo nÃ« Klinike Private MjekÃ«sore tÃ« pajisur me liÃ§encÃ« nga Ministria e ShÃ«ndetÃ«sisÃ«. â€¢2005 â€“ 2009 : Alergolog nÃ« laboratorin eAlergo â€“ HepatologjisÃ« pranÃ« Spitalit Ushtarak TiranÃ«. â€¢2003 â€“ 2009 : Asistent Alergolog me Prof. As.I. Bibolli nÃ« KlinikÃ« Private MjekÃ«sore tÃ« pajisur me liÃ§encÃ« nga Ministria e ShÃ«ndetÃ«sisÃ«. â€¢2005 â€“ 2009 : Alergolog nÃ« laboratorin e Gastro â€“ HepatologjisÃ« pranÃ« Spitalit Ushtarak TiranÃ«. â€¢1998 â€“ 2005 : Mjek nÃ« qendrÃ«n mjekÃ«sore â€œLozhanâ€ KorÃ§Ã«', NULL, 'joana@gmail.com', 'Okulist'),
(38, 'DR. VJOLLCA HAXHIA', 'EDUKIMI : â€¢1992 â€“ 1995 : Fakuleti i MjekÃ«sisÃ«, Universiteti i TiranÃ«s. â€¢1987 â€“ 1991 : Shkolla e Mesme â€œThemistokli Germenjiâ€, KorÃ§Ã«. â€¢2008 : DiplomÃ« nÃ« Endoskopi nÃ« laboratorin e Gastro â€“ HepatoligjisÃ« pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€. â€¢2005 : DiplomÃ« nÃ« Gastro â€“ Hepatologji pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€. â€¢2001 â€“ 2005 : Specializim nÃ« Gastro â€“ Hepatologji pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€, Universiteti i TiranÃ«s. EKSPERIENCA PROFESIONALE: â€¢2010 â€“ nÃ« vazhdim : Alergolog pranÃ« Spitalit Amerikan nÃ« TiranÃ«. â€¢2002 â€“ nÃ« vazhdim: Asistent Alergolog me As.Prof. I. Kajo nÃ« Klinike Private MjekÃ«sore tÃ« pajisur me liÃ§encÃ« nga Ministria e ShÃ«ndetÃ«sisÃ«. â€¢2005 â€“ 2009 : Alergolog nÃ« laboratorin eAlergo â€“ HepatologjisÃ« pranÃ« Spitalit Ushtarak TiranÃ«. â€¢2003 â€“ 2009 : Asistent Alergolog me Prof. As.I. Bibolli nÃ« KlinikÃ« Private MjekÃ«sore tÃ« pajisur me liÃ§encÃ« nga Ministria e ShÃ«ndetÃ«sisÃ«. â€¢2005 â€“ 2009 : Alergolog nÃ« laboratorin e Gastro â€“ HepatologjisÃ« pranÃ« Spitalit Ushtarak TiranÃ«. â€¢1998 â€“ 2005 : Mjek nÃ« qendrÃ«n mjekÃ«sore â€œLozhanâ€ KorÃ§Ã«', NULL, 'joana@gmail.com', 'Neurologe'),
(37, 'DR. BILBIL RAKIPI', 'EDUKIMI : â€¢1995 â€“ 1998 : Fakuleti i MjekÃ«sisÃ«, Universiteti i TiranÃ«s. â€¢1987 â€“ 1991 : Shkolla e Mesme â€œThemistokli Germenjiâ€, KorÃ§Ã«. â€¢2008 : DiplomÃ« nÃ« Endoskopi nÃ« laboratorin e Gastro â€“ HepatoligjisÃ« pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€. â€¢2005 : DiplomÃ« nÃ« Gastro â€“ Hepatologji pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€. â€¢2001 â€“ 2005 : Specializim nÃ« Gastro â€“ Hepatologji pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€, Universiteti i TiranÃ«s. EKSPERIENCA PROFESIONALE: â€¢2010 â€“ nÃ« vazhdim : Alergolog pranÃ« Spitalit Amerikan nÃ« TiranÃ«. â€¢2002 â€“ nÃ« vazhdim: Asistent Alergolog me As.Prof. I. Kajo nÃ« Klinike Private MjekÃ«sore tÃ« pajisur me liÃ§encÃ« nga Ministria e ShÃ«ndetÃ«sisÃ«. â€¢2005 â€“ 2009 : Alergolog nÃ« laboratorin eAlergo â€“ HepatologjisÃ« pranÃ« Spitalit Ushtarak TiranÃ«. â€¢2003 â€“ 2009 : Asistent Alergolog me Prof. As.I. Bibolli nÃ« KlinikÃ« Private MjekÃ«sore tÃ« pajisur me liÃ§encÃ« nga Ministria e ShÃ«ndetÃ«sisÃ«. â€¢2005 â€“ 2009 : Alergolog nÃ« laboratorin e Gastro â€“ HepatologjisÃ« pranÃ« Spitalit Ushtarak TiranÃ«. â€¢1998 â€“ 2005 : Mjek nÃ« qendrÃ«n mjekÃ«sore â€œLozhanâ€ KorÃ§Ã«', NULL, 'joana@gmail.com', 'Kardiolog'),
(24, 'DR. AVNI BUTKA', 'EDUKIMI : â€¢2001 â€“ 2006 : Fakuleti i MjekÃ«sisÃ«, Universiteti i TiranÃ«s.â€¢1987 â€“ 1991 : Shkolla e Mesme â€œThemistokli Germenjiâ€, KorÃ§Ã«.â€¢2008 : DiplomÃ« nÃ« Endoskopi nÃ« laboratorin e Gastro â€“ HepatoligjisÃ« pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€.â€¢2005 : DiplomÃ« nÃ« Gastro â€“ Hepatologji pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€.â€¢2001 â€“ 2005 : Specializim nÃ« Gastro â€“ Hepatologji pranÃ« QendrÃ«s Universitare Spitalore â€œNÃ«nÃ« Terezaâ€, Universiteti i TiranÃ«s.EKSPERIENCA PROFESIONALE:â€¢2010 â€“ nÃ« vazhdim : Alergolog  pranÃ« Spitalit Amerikan nÃ« TiranÃ«.â€¢2002 â€“ nÃ« vazhdim: Asistent Alergolog me As.Prof. I. Kajo nÃ« Klinike Private MjekÃ«sore tÃ« pajisur me liÃ§encÃ« nga Ministria e ShÃ«ndetÃ«sisÃ«.â€¢2005 â€“ 2009 : Alergolog nÃ« laboratorin eAlergo â€“ HepatologjisÃ« pranÃ« Spitalit Ushtarak TiranÃ«.â€¢2003 â€“ 2009 : Asistent Alergolog me Prof. As.I. Bibolli nÃ« KlinikÃ« Private MjekÃ«sore tÃ« pajisur me liÃ§encÃ« nga Ministria e ShÃ«ndetÃ«sisÃ«.â€¢2005 â€“ 2009 : Alergolog nÃ« laboratorin e Gastro â€“ HepatologjisÃ« pranÃ« Spitalit Ushtarak TiranÃ«.â€¢1998 â€“ 2005 : Mjek nÃ« qendrÃ«n mjekÃ«sore â€œLozhanâ€  KorÃ§Ã«', NULL, 'joana@gmail.com', 'Alergolog'),
(25, 'DR. ENTELA TOPTANI', 'EDUKIMI :â€¢1996-2002 : Studime nÃ« Fakultetin e MjekÃ«sisÃ«, Universitetii TiranÃ«s, Dega â€œMjekÃ«si e pÃ«rgjithshmeâ€. Diplomuar me mesatare tÃ« notave nÃ« 6 vite 9.6.â€¢2004 â€“ vazhdim : Ekuivalentimi i diplomÃ«s nÃ« Greqi me vlerÃ«simin â€œshumÃ« mirÃ«â€â€“DIKATSA, AthinÃ«.â€¢2011 - nÃ« vazhdim : NÃ« proces te mbojtjes sÃ« titullit Doktor Shkencash me temÃ«n: Prevalenca e Acne vulgaris dhe impakti psiko-social nÃ« adoleshentÃ«t e Tiranes.â€¢2008-2009 : Specializim pasuniversitar nÃ« klinikÃ«n e MjekÃ«sisÃ« Interne pranÃ« Spitalit tÃ« PÃ«rgjithshÃ«m tÃ« JaninÃ«s-Greqi, si pjesÃ« e programit tÃ« Specializimit nÃ« fushÃ«n e DermatologjisÃ«.â€¢2005-2008 : Specializim pasuniversitar pranÃ« Fakultetit tÃ« MjekÃ«sisÃ«, Universiteti i TiranÃ«s, dega Dermato-Venerologji. Diplomuar me notÃ«n pÃ«rfundimtare 10. EKSPERIENCA PROFESIONALE :â€¢2011-vazhdim : Mjeke Dermato-Venerologe ne Spitalin Amerikan Mjeke Dermatologe ne Kliniken Dermo-estetike â€œViviaâ€.â€¢2010-2011 : Mjeke dermatologe nÃ« Universal Hospital Tirana.â€¢2005-2008 dhe 2009â€“2010 : Pedagoge nÃ« lÃ«ndÃ«n â€œMjekÃ«si Klinikeâ€, pranÃ« Fakultetit tÃ« StomatologjisÃ«, Universiteti UFO.â€¢2008-2009 : Mjeke specializante nÃ« klinikÃ«n e MjekÃ«sisÃ« Interne pranÃ« Spitalit tÃ« PÃ«rgjithshÃ«m tÃ« JaninÃ«s.â€¢2005-2008 : Mjeke specializante nÃ« klinikÃ«n e Dermato-VenerologjisÃ«, qendra spitalore Universitare â€œNÃ«nÃ« Terezaâ€.â€¢2002-2003 : Mjeke Familje.', NULL, 'joana@gmail.com', 'Dermatologe');

-- --------------------------------------------------------

--
-- Table structure for table `rregjistrimi`
--

CREATE TABLE `rregjistrimi` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Emri` varchar(20) NOT NULL,
  `Mbiemri` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Telefoni` int(11) NOT NULL,
  `Rrethi` varchar(50) NOT NULL,
  `Adresa` varchar(50) NOT NULL,
  `Tipi` varchar(30) NOT NULL,
  `Foto` mediumblob DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rregjistrimi`
--

INSERT INTO `rregjistrimi` (`ID`, `Email`, `Emri`, `Mbiemri`, `Password`, `Telefoni`, `Rrethi`, `Adresa`, `Tipi`, `Foto`) VALUES
(77, 'hello@gmail.com', 'Hello test', 'test test', 'd0aabe9a362cb2712ee90e04810902f3', 698989898, 'KavajÃ«', 'Tirane,Yzberisht', 'Perdorues', NULL),
(78, 'admin@gmail.com', 'admin', 'admmin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 698989898, 'TiranÃ«', '21 Dhjetori', 'Perdorues', NULL),
(46, 'joana@gmail.com', 'Joana', 'Shehaj', 'dfb7e4ff99141a5902ba3947b4ed6909', 698246776, 'TiranÃ«', 'Yzberisht', 'Admin', NULL),
(47, 'ildi@gmail.com', 'Ildi', 'Shehi', '24940d008688099070cd3d31977efc70', 697855449, 'TiranÃ«', 'Farke', 'Perdorues', NULL),
(69, 'enxhi@gmail.com', 'Enxhiana', 'Shehaj', 'bfa109f48cda5669dbedb6b58b91943e', 692172776, 'TiranÃ«', 'Yzberisht', 'Perdorues', NULL),
(70, 'ermal@gmail.com', 'Ermal', 'Arapi', 'd220992d313a141289e59301eef94374', 837583457, 'TiranÃ«', 'Tirana, Albania', 'Perdorues', NULL),
(80, 'pi@gmail.com', 'pi', 'pi', 'ba1842878709caefbaa1c6846a25da58', 698765456, 'Gjirokastër', 'test', 'Perdorues', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sherbimet_mjekesore`
--

CREATE TABLE `sherbimet_mjekesore` (
  `Id_sherbimi` int(11) NOT NULL,
  `Titulli` varchar(50) NOT NULL,
  `Pershkrimi` varchar(65000) NOT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sherbimet_mjekesore`
--

INSERT INTO `sherbimet_mjekesore` (`Id_sherbimi`, `Titulli`, `Pershkrimi`, `Foto`, `Email`) VALUES
(17, 'DERMATOLOGJIA', 'NÃ« specialitetin e DermatologjisÃ« ky spital ofron njÃ« tÃ«rÃ«si shÃ«rbimesh mjekÃ«sore tÃ« njÃ« niveli tÃ« lartÃ«, tÃ« krahasueshme me shumÃ« qendra spitalore prestigjioze nÃ« EvropÃ«.\r\nDiagnostikimi dhe trajtimi:\r\nSÃ«mundjet e lÃ«kurÃ«s janÃ« tÃ« shumta, por vetÃ«m disa prej tyre detyrojnÃ« pacientÃ«t qÃ« tÃ« paraqiten tek mjeku dhe tÃ« marrin mjekim. Kjo ndodh edhe pÃ«r faktin se duke u nÃ«nvlerÃ«suar ato, ose mjekohen keq duke krijuar rezistenca ndaj medikamenteve dhe kalojnÃ« nÃ« patologji kronike, ose nuk trajtohen dhe evoluojnÃ« deri nÃ« gjeneralizim tÃ« tyre.\r\nNÃ« spitalin tonÃ« ne diagnostikojmÃ« dhe ndjekim nÃ« vazhdimÃ«si trajtimet e kartelizuara tÃ« pacientÃ«ve pÃ«r patologjitÃ« dermatologjike tÃ« moshÃ«s pediatrike, sÃ«mundjet kronike, diagnostikimin e patologjive malinje, trajtimin e patologjive tÃ« thonjve, flokÃ«ve, mukozÃ«s nÃ« gojÃ« dhe infeksioneve gjenitale.\r\nPraktika klinike bashkÃ«vepron tÃ«rÃ«sisht me ekzaminimet laboratorike tÃ« njÃ« niveli tÃ« lartÃ« dhe konsultat e mjekÃ«ve tÃ« specialiteteve tÃ« tjera pÃ«r tÃ« arritur njÃ« diagnostikim dhe trajtim adekuat.\r\nDermopatologjia\r\nKÃ«tu kryhen procedurat e marrjes sÃ« biopsisÃ« nÃ« lÃ«kurÃ« dhe nÃ«pÃ«rmjet njÃ« personeli tÃ«rÃ«sisht tÃ« kualifikuar dhe aparaturave laboratorike moderne kryhet ekzaminimi dhe interpretimi i tyre duke pÃ«rcaktuar me saktÃ«si detajet e ndryshimeve patologjike nÃ« nivelin mikroskopik. MÃ« pas konfrontimi me planin klinik dhe konsultat me mjekun dermatolog e bÃ«jnÃ« mÃ« tÃ« thjeshtÃ« diagnostikimin dhe mjekimin e duhur tÃ« pacientit.\r\nLaboratori dermopatologjik Ã«shtÃ« pjesÃ« e njÃ« departamenti tÃ« tÃ«rÃ« ku kryhen tÃ« gjitha testet dhe analizat mÃ« specifike.\r\nProcedura tÃ« veÃ§anta\r\nInjeksionet intralezionale\r\nInjeksionet intralezionale janÃ« tÃ« nevojshme pÃ«r trajtimin e sÃ«mundjeve si Alopecia areata (humbja e lokalizuar e flokÃ«ve) ose prania e keloideve. Ky injeksion kryhet direkt nÃ« vendin e lokalizimit tÃ« patologjisÃ« dhe ndihmon pÃ«r pÃ«rshpejtimin e proceseve rigjeneruese tÃ« lÃ«kurÃ«s dhe marrjen e njÃ« pÃ«rgjigjeje mÃ« tÃ« shpejtÃ« e kombinuar gjithsesi dhe me njÃ« mjekim tjetÃ«r etiologjik ose simptomatik.\r\nKirurgjia dermatologjike\r\nProcedurat e mÃ«poshtme kryhen nÃ« ambiente bashkÃ«kohore, duke respektuar tÃ« gjitha rregullat e asepsisÃ« dhe nÃ« bashkÃ«punim me specialistÃ«t e kirurgjisÃ« plastike.\r\nâ€¢	Ekzicion tÃ« lezioneve malinje dhe beninje;\r\nâ€¢	Trajtimi me krioterapi i shumÃ« patologjive tÃ« lÃ«kurÃ«s;\r\nâ€¢	Trajtimet invazive tÃ« pacientÃ«ve me akne tÃ« gradÃ«s sÃ« dytÃ« dhe tÃ« tretÃ«.\r\nDermatologjia kozmetike\r\nâ€¢	Piling kimik;\r\nâ€¢	Injeksionet e Botox;\r\nâ€¢	Injeksione me fillÃ«r tÃ« ndryshÃ«m;\r\nâ€¢	Skleroterapi pÃ«r teleangiektazitÃ« dhe venat e vogla.\r\nTerapia me laser\r\nLaseri Ã«shtÃ« njÃ« nga teknologjitÃ« mÃ« tÃ« pÃ«rparuar qÃ« duke u rinovuar nÃ« vazhdimÃ«si ka bÃ«rÃ« tÃ« mundur trajtimin me sukses edhe tÃ« shumÃ« patologjive specifike nÃ« dermatologji duke dhÃ«nÃ« efikasitet maksimal dhe efekte anÃ«sore tÃ« pakonsiderueshme.\r\nNdÃ«r patologjitÃ« qÃ« trajtohen me shumÃ« sukses, por jo tÃ« vetmet, janÃ«:\r\nâ€¢	Shenjat qÃ« mbeten nga aknet;\r\nâ€¢	Rigjenerimi i lÃ«kurÃ«s nÃ« regjionin e qafÃ«s, kraharorit dhe duarve;\r\nâ€¢	Melasma;\r\nâ€¢	Lezionet e pigmentuara tÃ« lÃ«kurÃ«s tÃ« lokalizuara kudo nÃ« trup;\r\nâ€¢	Heqje tatuazhesh;\r\nâ€¢	RrudhÃ«zat pÃ«rreth syve;\r\nâ€¢	Ã‡ikatricat kirurgjikale;\r\nâ€¢	Keratozat aktinike, etj.\r\n', '', 'joana@gmail.com'),
(18, 'KARDIOKIRURGJIA', 'Nderhyrjet torakale\r\nâ€¢	Operacionet a kancerit te mushkerive ( lobektomi, pneumonektomi)\r\nâ€¢	Operacionet e tumoreve benigne te mushkeris dhe kutise torakale ( wedge resection, lobectomi, pneumonektomi)\r\nâ€¢	Operacionet e infekcioneve te mushkeris\r\nâ€¢	Operacionet e infekcionit te pleures ( empiema), dekortikim i mushkerise.\r\nâ€¢	VATS (video assisted thoracic surgery) per pneumotorax, biopsi te mushkeris, dreinim i fluidit pleural\r\nâ€¢	Mediastinoskopi biopsi e gjendrrave limfatike\r\nâ€¢	Mediastinotomi\r\nâ€¢	Operacionet e defekteve te kutis torakale (pectus excavatum, pectus carinatum)\r\nâ€¢	Transplantimi i mushkeris\r\nNdÃ«rhyrjet kardiokirurgjikale\r\nâ€¢	Bypass koronar (me ose pa qarkullim ekstrakorporal);\r\nâ€¢	Riparim apo zÃ«vendÃ«sim i valvulÃ«s sÃ« aortÃ«s;\r\nâ€¢	Riparim apo zÃ«vendÃ«sim i valvulÃ«s mitrale;\r\nâ€¢	NdÃ«rhyrje multivalvulare;\r\nâ€¢	Riparim i sÃ«mundjeve kongjenitale tek tÃ« rriturit;\r\nâ€¢	Riparimi i aneurizmÃ«s sÃ« aortÃ«s;\r\nâ€¢	Ã‡arjet e aortÃ«s;\r\nâ€¢	TÃ« tjera ndÃ«rhyrje kirurgjikale tek pacientÃ«t me insuficience kardiake te avancuar.\r\nNdÃ«rhyrjet vaskulare\r\nâ€¢	SÃ«mundjet periferike arteriale (bypass aorto-bifemoral, aorto-femoral, femoro-politeal, bypasset ekstraanatomike etj.);\r\nâ€¢	NdÃ«rhyrjet nÃ« arteriet karotide;\r\nâ€¢	NdÃ«rhyrjet nÃ« venat varikoze.', NULL, 'joana@gmail.com'),
(19, 'ENDOKRONOLOGJIA', 'Endokrinologjia Ã«shtÃ« njÃ« pjesÃ« e mjekÃ«sisÃ« interne, po ashtu ka edhe kirurgji endokrine.\r\nGjÃ«ndra endokrine quhen ato gjÃ«ndra, tÃ« cilat japin prodhimet e tyre brenda nÃ« trup, direkt nÃ« gjak dhe tÃ« cilat pÃ«r dallim nga gjÃ«ndrat eksokrine nuk kanÃ« njÃ« lidhje qÃ« drejton nga jashtÃ«.\r\nEndokrinologjia merret me shÃ«rimin e sÃ«mundjeve endokrine. TÃ« gjitha sÃ«mundjet endokrine janÃ« pasojÃ« e Ã§rregullimeve tÃ« prodhimit tÃ« hormoneve, Ã§rregullimit tÃ« mekanizmave me tÃ« cilat rregullohet prodhimi dhe lirimi i tyre, ose e ndryshimeve nÃ« pÃ«rgjigjen e indit ku vepron hormoni . NdÃ«r  semundjet endorine janÃ« tÃ« njohura edhe kÃ«to:\r\nâ€¢	SÃ«mundjet e gjÃ«ndrÃ«s tiroide\r\nâ€¢	Diabetes mellitus (SÃ«mundja e sheqerit)\r\nâ€¢	Diabetes insipidus\r\nâ€¢	Sindroma e Connit\r\nâ€¢	Sindroma Cushing\r\nâ€¢	Morbus Adisson\r\nâ€¢	Sindroma adrenogenitale\r\nâ€¢	SÃ«mundjet e gjÃ«ndrÃ«s paratiroide\r\nâ€¢	Karcinoide\r\nâ€¢	MangÃ«sia apo teprica e hormoneve seksuale\r\n', NULL, 'joana@gmail.com'),
(24, 'NEUROLOGJIA', 'Neurologjia Ã«shtÃ« specialitet mjekÃ«sor qÃ« ka tÃ« bÃ«jÃ« me Ã§rregullime tÃ« sistemit nervor. Neurologjia merret me diagnostikimin dhe trajtimin e tÃ« gjitha kategorive tÃ« sÃ«mundjeve qÃ« pÃ«rfshijnÃ« sistemin nervor qendror dhe periferik ose ndryshe, sistemin nervor autonom dhe sistemin nervor somatik. Neurologu nÃ« ShÃ«rbimin e NeurologjisÃ« nÃ« QSUT Ã«shtÃ« njÃ« mjek i specializuar nÃ« Neurologji i trajnuar pÃ«r tÃ« diagnostikuar dhe trajtuar Ã§rregullime neurologjike. NjÃ« numÃ«r i madh i Ã§rregullimeve neurologjike ndikojnÃ« nÃ« sistemin nervor qendror (truri dhe palca kurrizore), sistemin nervor periferik ose sistemin autonom nervor.\r\n\r\nShumÃ« neurologÃ« kanÃ« trajnime shtesÃ« nÃ« njÃ« fushÃ« tÃ« neurologjisÃ« tÃ« tilla si neurologjia vaskulare, neurosonologjia, pÃ«r sÃ«mundjet epileptike, neuromuskulore, neurologjia e sjelljes, menaxhimi i dhimbjes, neurofiziologjia ose trajtimi i Ã§rregullimeve tÃ« lÃ«vizjes. GjatÃ« njÃ« ekzaminimi neurologjik, neurologu shqyrton historinÃ« shÃ«ndetÃ«sore tÃ« pacientit, teston statusin mendor, funksionin e nervave tÃ« kokÃ«s, forcÃ«n, koordinimin, reflekset dhe ndjesinÃ«. Ky informacion ndihmon neurologun tÃ« pÃ«rcaktojÃ« nÃ«se problemi ekziston nÃ« sistemin nervor dhe, nÃ«se po, ta lokalizojÃ« atÃ«. Lokalizimi i patologjisÃ« Ã«shtÃ« procesi kryesor me tÃ« cilin neurologÃ«t zhvillojnÃ« diagnozÃ«n diferenciale. Analiza tÃ« mÃ«tejshme mund tÃ« jenÃ« tÃ« nevojshme pÃ«r tÃ« konfirmuar diagnozÃ«n dhe udhÃ«hequr terapinÃ« dhe menaxhimin e duhur.\r\n\r\nTestet qÃ« pÃ«rdoren zakonisht nÃ« neurologji pÃ«rfshijnÃ« studime tÃ« imazhit tÃ« tilla si tomografia aksiale, MRI, angiografia, elektroencefalografia (EEG), elektromiografia (EMG), ekzaminimi i likuidit cerebrospinal.', NULL, 'joana@gmail.com'),
(25, 'OKULISTIKA', 'Okulistika Ã«shtÃ« dega e mjekÃ«sisÃ« e cila merret me sÃ«mundjet e kirurgjisÃ« dhe rrugeve vizive, duke pÃ«rfshirÃ« tÃ« syve, trurit, dhe zonat pÃ«rreth syve, tÃ« tilla si sistemi lakrimal dhe lotimi. Nga konventa termi okulist Ã«shtÃ« shumÃ« me i kufizuar dhe nÃ«nkupton njÃ« specialist mjekesor te trajnuar ne kirurgji . kjo ndryshon nga ophthalmologists kryen operacione nÃ« sy, ato nÃ« pÃ«rgjithÃ«si janÃ« tÃ« kategorizuara si kirurge. Fjala OkulistikÃ« vjen nga rrÃ«njÃ«t greke \"ophthalmos\" kuptimi i sy dhe mendim ; okulistikÃ« e perkthyer fjalÃ« pÃ«r fjalÃ« Ã«shtÃ« \"shkenca e syve\". Si njÃ« disiplinÃ«, kjo vlen edhe pÃ«r tÃ« kafshÃ«ve sytÃ«, qÃ« nga dallimet nga praktika e njeriut janÃ« tÃ« habitshme tÃ« vogla dhe janÃ« tÃ« lidhura kryesisht me dallimet nÃ« Anatomi ose prevalencÃ«, jo dallime nÃ« proceset e sÃ«mundjes. MegjithatÃ«, veterinari rregullohet veÃ§mas nÃ« shumÃ« vende dhe shtete / krahina rezultuar nÃ« disa ophthalmologists trajtojnÃ« tÃ« dy njerÃ«zve dhe e kafshÃ«ve.', NULL, 'joana@gmail.com'),
(26, 'KIRURGJIA', 'Kirurgjia (nga greqisht : Ï‡ÎµÎ¹ÏÎ¿Ï…ÏÎ³Î¹ÎºÎ® ,  do tÃ« thotÃ« \"dore punÃ«n\") Ã«shtÃ« njÃ« specialitet mjekÃ«sor qÃ« pÃ«rdor doracak operativ dhe teknikat e dobishme pÃ«r njÃ« durim pÃ«r tÃ« hetuar dhe/ose i trajtojnÃ« njÃ« gjendje patologjike tÃ« tilla si sÃ«mundje apo lÃ«ndim, pÃ«r tÃ« tÃ« ndihmojÃ« nÃ« pÃ«rmirÃ«simin funksion ose paraqitja trupore, ose nganjÃ«herÃ« pÃ«r disa arsye tÃ« tjera. NjÃ« akt i kryer operacioni mund tÃ« quhet njÃ« procedure kirurgjikale, operacioni, apo thjesht njÃ« operacioni. NÃ« kÃ«tÃ« kontekst, do tÃ« thotÃ« qÃ« veprojnÃ« folje kryerjen kirurgji.\r\n\r\nMbiemÃ«r i kirurgjikale do tÃ« thotÃ« tÃ« bÃ«jnÃ« me kirurgji ; p. sh. kirurgjikale instrumenteve kirurgjike ose nga infermierja. Pacienti ose subjekt mbi tÃ« cilin Ã«shtÃ« kryer operacioni mund tÃ« jetÃ« njÃ« person apo njÃ« kafshÃ«ve. NjÃ« kirurg i Ã«shtÃ« njÃ« person i cili kryen operacione tÃ« pacientÃ«ve. Personat e pÃ«rshkroi si surgeons janÃ« zakonisht mjekÃ«sore mjekÃ«t, por termi Ã«shtÃ« aplikuar edhe pÃ«r tÃ« mjekÃ«ve, podiatric mjekÃ«ve, dentistÃ«ve dhe veterinerÃ«t. KirurgjisÃ« mund tÃ« zgjasÃ« nga minuta nÃ« orÃ«, por nuk Ã«shtÃ« nÃ« mÃ«nyrÃ« tipike tÃ« vazhdueshme ose periodike llojin e mjekimit. Termi mund gjithashtu operacioni i referohen ne vendin ku e kirurgjisÃ« Ã«shtÃ« kryer, apo thjesht zyrÃ«n e njÃ« mjek, dentist, veterinar', NULL, 'joana@gmail.com'),
(27, 'HEMATOLOGJIA', 'Hematologjia Ã«shtÃ« shkenca e cila merret me studimin e gjakut (pÃ«rbÃ«rjes, sÃ«mundjet e gjakut,etj). PÃ«r kÃ«tÃ« qÃ«llim pÃ«rdorÃ« disa mÃ«nyra ndÃ«r tÃ« cilat Ã«shtÃ« e njohur pasqyra e gjakut (analizat e gjaku) nÃ«pÃ«rmjet tÃ« cilÃ«s mblidhen shÃ«nime mbi gjendjen e gjakut nÃ« njÃ« qenie.\r\nHematolgjia meret me studimin fiziologjik, fiziopatologjik si dhe tÃ« sÃ«mundjeve tÃ« gjakut. Ajo pÃ«rfshin tÃ« gjithat sÃ«mundjet e gjakut, ndryshimet nÃ« pasqyrÃ«n e gjakut, ndryshime nÃ« pasqyrÃ«n e palcÃ«s sÃ« ashtit, ndryshime tÃ« gjakut pÃ«rmes procesit imunologjik, pengesa tÃ« gjakut (Diatezat hemarogjike, Hemofili) dhe pakÃ«simi i gjakut (Trombofili). KÃ«to dy sÃ«mundjet e fundit, emÃ«rohen edhe me emrin Hemostazologjia.\r\nHematology, gjithashtu dha Haematology, Ã«shtÃ« dega e biologjisÃ« (fiziologji), patologji, klinike laboratorike, mjekÃ«si tÃ« brendshme, dhe pediatri qÃ« ka tÃ« bÃ«jÃ« me studimin e gjakut, e-formimin e organeve tÃ« gjakut, sÃ«mundjet e gjakut. Hematology pÃ«rfshin studimin e etiologji, diagnozÃ«n, trajtimin, prognozÃ«, dhe parandalimin e sÃ«mundjeve tÃ« gjakut. Laboratorin e punÃ«s qÃ« hyn nÃ« studimin e gjakut Ã«shtÃ« bÃ«rÃ« nga njÃ« teknolog mjekÃ«sore.\r\n\r\n', NULL, 'joana@gmail.com'),
(28, 'PNEUMOLOGJIA', 'Pneumologjia ose Pulmologjia (rrjedh prej gjuhÃ«s greke Ï€Î½ÎµÏ…Î¼Î¿Î½Î¿Î»Î¿Î³Î¯Î± lÃ«nda mbi shÃ«rimin e mushkÃ«rinjÃ«veâ€œ, nga Ï€Î½ÎµÏÎ¼Î¿Î½Î±Ï‚ qÃ« do tÃ« thotÃ« â€žmushkÃ«riâ€œ dhe nga Ï€Î½ÎµÏÎ¼Î± â€žfrymÃ«marrjaâ€œ dhe Î»ÏŒÎ³Î¿Ï‚ â€žshkencÃ«â€œ ndÃ«rsa nÃ« gjuhÃ«n latine pulmo â€žmushkÃ«riâ€œ) Ã«shtÃ« degÃ« e mjekÃ«sisÃ« sÃ« brendshme (interne), e cila merret kryesisht me sÃ«mundjet e mushkÃ«rive.\r\n\r\nPneumologjia merret me profilaksÃ«n, zbulimin dhe trajtimin konservativ tÃ« sÃ«mundjeve tÃ« mushkÃ«rive, bronkieve, mediastinusit si dhe tÃ« pleurÃ«s. NdÃ«rsa Kirurgia toraksale Ã«shtÃ« pjesÃ« e kirurgjisÃ«, kurse rrezatimi i tumoreve tÃ« mushkÃ«rive Ã«shtÃ« pjesÃ« e radiologjisÃ«, kurse kemoterapia e tumoreve tÃ« mushkÃ«rive Ã«shtÃ« pjesÃ« e onkologjisÃ« por nuk hyn direkt nÃ« Pneumologji.\r\n\r\nSÃ«mundjet mÃ« tÃ« shpeshta nÃ« Pneumologji:\r\nPneumonia (Pneumonia bakteriale, Pneumonia atipike, Pneumonia fungale, Pneumonia virale)\r\nSarkoidoza\r\nTuberkulozi\r\nHipoksemia\r\nTumoret e mushkÃ«rive\r\nTumoret mediastinale\r\nSÃ«mundja obstruktive kronike (Emfizema, Bronkiti kronik, Astma, Bronkiektazia)\r\nSÃ«mundja restriktive (PakÃ«simi i indit mushkÃ«ror, SÃ«mundjet e parenkimÃ«s mushkÃ«rore, Fibroza intersticiale, Efuzionet pleurale)\r\nSÃ«mundjet vaskulare (Edema pulmonare, Embolizmi pulmonar, Hipertensioni pulmonar)', NULL, 'joana@gmail.com'),
(29, 'ORTOPEDIA', 'Ortopedi ortopedik ose kirurgjia (gjithashtu dha ortopedi) Ã«shtÃ« dega e kirurgjisÃ« nÃ« fjalÃ« qÃ« kanÃ« tÃ« bÃ«jnÃ« me kushtet e sistemit musculoskeletal. Ortopedik surgeons pÃ«rdorimin kirurgjik tÃ« dy dhe jo-kirurgjikale do tÃ« thotÃ« pÃ«r tÃ« trajtuar musculoskeletal trauma, dÃ«mtime sportive, degenerative sÃ«mundjeve, infeksioneve, tumors, dhe kushtet kongjenitale. Nikolas Andry coined fjalÃ«n \"ortopedi\", rrjedh nga fjalÃ«t greke pÃ«r orthos ( \"korrekt\", \"normal\") dhe paideia ( \"rearing\" (zakonisht i fÃ«mijÃ«s)), nÃ« 1741, kur nÃ« moshÃ«n 81 ai botoi Orthopaedia: ose korrigjimin e Artit dhe Deformities nÃ« parandalimin e FÃ«mijÃ«ve. NÃ« SHBA tÃ« spelling ortopedi Ã«shtÃ« standardi [citim nevojshme], edhe pse shumica e programeve universitare dhe banimin [citim nevojshme], dhe madje edhe tÃ« AAOS, ende pÃ«rdorimin e Andry spelling. TjetÃ«rkund, pÃ«rdorimi nuk Ã«shtÃ« uniforme; nÃ« Kanada, tÃ« dyja janÃ« tÃ« zakonshme spellings; ortopedi zakonisht mbizotÃ«ron nÃ« pjesÃ«n tjetÃ«r tÃ« Commonwealth, veÃ§anÃ«risht nÃ« Britani.', NULL, 'joana@gmail.com'),
(30, 'LABORATOR', 'QendÃ«r ose institucion qÃ« bÃ«n eksperimente e kÃ«rkime nÃ« njÃ« fushÃ« tÃ« shkencÃ«s a tÃ« teknikÃ«s, analiza e prova tÃ« ndryshme sipas kÃ«rkesave tÃ« prodhimit, tÃ« mjekÃ«sisÃ« etj. ose pÃ«rpunon a prodhon diÃ§ka sipas kÃ«tyre kÃ«rkesave; dhoma ose ndÃ«rtesa e pajisur me mjetet dhe aparatet e nevojshme pÃ«r kÃ«tÃ« punÃ«. Laborator kÃ«rkimor (shkencor). Laborator bakteriologjik (gjeologjik). Laborator fotografik. LaboratorÃ«t e shkollave. Laboratori i kimisÃ« (i fizikÃ«s, i biologjisÃ«). Laboratori i rrezatimeve bÃ«rthamore. ', NULL, 'joana@gmail.com'),
(31, 'KIRURGJI PLASTIKE', 'Kirurgjia plastike Ñ‘shtÑ‘ njÑ‘ degÑ‘ e kirurgjisÑ‘ qÑ‘ synon si korrigjimin ashtu dhe riparimin apo restaurimin e funksioneve tÑ‘ alteruara nga defektet kongjenitale apo nga ato sekondare si pasojÑ‘ e traumave apo neoplazive gjithashtu dhe sÑ‘mundjeve degjeneruese, qÑ‘ pÑ‘rmirÑ‘son formen dhe estetiken e pjesÑ‘ve tÑ‘ modifikuara tÑ‘ indit qÑ‘ ka pÑ‘suar nÑ‘ kohÑ‘.\r\nUniteti i KirurgjisÑ‘ Plastike Ñ‘shtÑ‘ nÑ‘ gjÑ‘ndje qÑ‘ tâ€™i ofrojÑ‘ pacientÑ‘ve njÑ‘ proces tÑ‘ plotÑ‘ qÑ‘ fillon me diagnostikimin, trajtimin kirurgjikal dhe pÑ‘rfundon me dekursin post operator.', NULL, 'joana@gmail.com'),
(15, 'ALERGOLOGJIA', 'SÃ«mundjet qÃ« TrajtojmÃ«\r\nâ€¢	astma\r\nâ€¢	riniti alergjik\r\nâ€¢	sinusiti\r\nâ€¢	urtikaria\r\nSpecialisti i alergjisÃ« trajton probleme tÃ« alergjisÃ« sÃ« ilaÃ§eve, eozinofilisÃ«, astmÃ«s tÃ« kontrolluar me vÃ«shtirÃ«si, alergjisÃ« tÃ« ushqimeve.\r\nNe kujdesemi pÃ«r pacientÃ«t qÃ« tÃ« marrin njÃ« diagnozÃ« eksperti dhe trajtim, qÃ« pÃ«rfshin identifikimin dhe eliminimin e shkakut tÃ« alergjisÃ« sÃ« tyre mÃ« tepÃ«r se njÃ« trajtim i thjeshtÃ« i simptomave.\r\nDiagnoza e plotÃ«\r\nKur pacientÃ«t drejtohen tek ne, ne administrojmÃ« njÃ« diagnozÃ« eksperti pas disa vizitave.\r\nKÃ«to ekzaminime pÃ«rfshijnÃ«:\r\nâ€¢	NjÃ« histori tÃ« detajuar tÃ« alergjisÃ«, duke pÃ«rfshirÃ« pÃ«rshkrimin e vendit ku banon dhe ku punon;\r\nâ€¢	Histori tÃ« dietÃ«s;\r\nâ€¢	Ekzaminim fizik;\r\nâ€¢	Testet pÃ«r diagnostikim.\r\nNÃ«se Ã«shtÃ« e nevojshme, ne administrojmÃ« teste tÃ« tjera tÃ« alergjisÃ«, derisa tÃ« jemi tÃ« sigurt pÃ«r gjendjen e pacientit. Ne ofrojmÃ« testet e laboratorit pÃ«r pneumoalergjenÃ«t dhe pÃ«r alergjenÃ«t ushqimor.\r\nTrajtim\r\nPasi pacientÃ«t diagnostikohen, ne paraqesim metodat e pÃ«rgjithshme tÃ« trajtimit qÃ« janÃ« jo vetÃ«m simptomatike, po edhe si tÃ« eliminohen shkaqet e pjesÃ«s mÃ« tÃ« madhe tÃ« alergjive.\r\nKontrolli i mjedisit: Trajtimi i shkallÃ«s sÃ« parÃ« pÃ«r tÃ« gjithÃ« pacientÃ«t pÃ«rfshin identifikimin e burimit tÃ« alergjisÃ« pÃ«r pacientin si p.sh. jastÃ«kÃ«t me pupla, kafshÃ«t dhe myku. Pastaj pÃ«rpiqemi qÃ« tâ€™i ndajmÃ« pacientÃ«t nga kÃ«to shkaqe aq sa mundemi. Kjo mund tÃ« pÃ«rfshijÃ« edhe eliminim e plotÃ« tÃ« shkaqeve alergjike qÃ« prekin lÃ«kurÃ«n si dorashkat dhe elementÃ«t kimik. Kur pacienti Ã«shtÃ« alergjik ndaj ushqimeve ne japim kÃ«shilla specifike pÃ«r eliminimin e kÃ«tyre produkteve.\r\nTerapia me ilaÃ§e: ShumÃ« pacientÃ« marrin ilaÃ§e qÃ« tÃ« pÃ«rmirÃ«sojnÃ« simptomat e tyre dhe kualitetin e jetÃ«s.\r\n\r\n', NULL, 'joana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vizita`
--

CREATE TABLE `vizita` (
  `SSN` int(11) NOT NULL,
  `Emer_Mbiemer` varchar(50) NOT NULL,
  `Nr_Celularit` varchar(100) NOT NULL,
  `Sherbimet_Mjekesore` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vizita`
--

INSERT INTO `vizita` (`SSN`, `Emer_Mbiemer`, `Nr_Celularit`, `Sherbimet_Mjekesore`, `Email`) VALUES
(41, 'Joana Shehaj', '02349823598324', 'Endokrinologjia', 'joana@gmail.com'),
(30, 'HELOO', '876789697', 'Laborator', 'ildi@gmail.com'),
(6, 'Ermal Arapi', '698653534', 'Ambulator', 'joana@gmail.com'),
(42, 'Armir Shehaj', '3873984', 'Hematologjia', 'joana@gmail.com'),
(43, 'demo', '23478237482374', 'Zgjidhni shërbimin mjekësor', 'joana@gmail.com'),
(44, 'Joana Shehaj', '0689767654', 'Kirurgjia Plastike', 'pi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doktoret`
--
ALTER TABLE `doktoret`
  ADD PRIMARY KEY (`Id_Doktori`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `rregjistrimi`
--
ALTER TABLE `rregjistrimi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sherbimet_mjekesore`
--
ALTER TABLE `sherbimet_mjekesore`
  ADD PRIMARY KEY (`Id_sherbimi`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `vizita`
--
ALTER TABLE `vizita`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `Email` (`Email`),
  ADD KEY `Email_2` (`Email`),
  ADD KEY `Email_3` (`Email`),
  ADD KEY `Email_4` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doktoret`
--
ALTER TABLE `doktoret`
  MODIFY `Id_Doktori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `rregjistrimi`
--
ALTER TABLE `rregjistrimi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `sherbimet_mjekesore`
--
ALTER TABLE `sherbimet_mjekesore`
  MODIFY `Id_sherbimi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2930;

--
-- AUTO_INCREMENT for table `vizita`
--
ALTER TABLE `vizita`
  MODIFY `SSN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
