-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: eshop
-- ------------------------------------------------------
-- Server version	5.6.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `prodotti`
--

DROP TABLE IF EXISTS `prodotti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodotti` (
  `idprodotto` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descrizione` varchar(1000) NOT NULL,
  `prezzo` float NOT NULL,
  `immagine` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`idprodotto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodotti`
--

LOCK TABLES `prodotti` WRITE;
/*!40000 ALTER TABLE `prodotti` DISABLE KEYS */;
INSERT INTO `prodotti` VALUES (1,'Shampoo Delicato','Con tensioattivi di origine vegetale è stato formulato per un’azione lenitiva e depurativa del cuoio capelluto. Contiene mirati estratti bio di rose e olio di Argan. Indicato per cuti sensibili. L\'olio di Argan ha un effetto lenitivo e nutriente per il cuoio capelluto.',15,'shampoo_delicato.jpg','capelli'),(2,'Shampoo Purificante','Con tensioattivi di origine vegetale è stato formulato per un’azione normalizzante, lenitiva e dermopurificante del cuoio capelluto. Contiene mirati estratti bio di bardana, edera, ginepro e betulla in sinergia con Alpaflor® Alp-sebum®, un principio funzionale innovativo ad azione seboregolatrice e anti-infiammatoria. È indicato per cuoi capelluti grassi.',15,'shampoo.jpg','capelli'),(3,'Balsamo Nutriente','Un innovativo balsamo ricco di principi funzionali formulato in modo da districare, nutrire e proteggere il capello senza appesantirlo, lasciandolo quindi leggero e libero per i successivi trattamenti styling Biofficina Toscana. La sinergia Uviox®-Oleox® brevettata e testata per agire in soli pochi minuti è adatta anche per i prodotti a risciacquo. Protegge i capelli dallo stress e districa e volumizza i capelli.',17,'balsamo.jpg','capelli'),(4,'Balsamo Fortificante','L’unione dell’olio extravergine di oliva “Toscano IGP” bio con gli estratti di edera, ortica, ippocastano, salvia e timo, coadiuvata da un’efficace molecola di derivazione vegetale, conferisce a questa maschera proprietà ristrutturanti e disciplinanti. Un ideale trattamento per capelli mossi e ricci oppure fini a cui dà lucentezza e volume senza appesantirli.',17,'balsamo_fortificante.jpg','capelli'),(5,'Olio Semi di Lino','Puro al 100%, lasciato agire per alcuni minuti prima dello shampoo, ridona energia ai capelli sfibrati e trattati. Dopo, lavare abbondantemente.\n Usato dopo lo shampoo, sulle punte ancora bagnate, rinforza e dona vigore al capello anche dopo l’asciugatura.\nSui capelli particolarmente crespi e secchi può essere usata qualche goccia sia a capello asciutto che bagnato. Per capelli più lucidi e ordinati. Applicare la giusta quantità di prodotto solo sulle punte e sui capelli molto danneggiati, meglio se erogato prima sul palmo delle mani e quindi distribuito.',20,'olio_semi_lino.jpg','capelli'),(6,'Olio di Argan','Lasciati sedurre dalla bellezza dell’oro con l’Olio di Argan nutriente, ideale per tutti i tipi di capelli. Sfruttando la sua composizione ricca di elementi tonificanti come la Vitamina E e le sue proprietà antiossidanti ed anti-age, l’Olio di Argan offre lucentezza e morbidezza immediate, senza lasciare residui, senza appesantire i capelli, e, allo stesso tempo, riparandoli e proteggendone il colore. Solo poche gocce di questo straordinario elisir ti faranno riscoprire una chioma sana e brillante, ottenere capelli dall’aspetto liscio e setoso che sprigioneranno una nuova, sorprendente luminosità, senza lasciare residui.',20,'olio_argan.jpg','capelli'),(7,'Crema Corpo Nutriente','Una crema corpo idratante ma leggero e di facile assorbimento. Contiene Rubiox® un esclusivo principio funzionale brevettato, derivato da frutti rossi delle colline toscane, con proprietà antiossidanti, protettive e lenitive. La sua azione si unisce a quella degli estratti bio lenitivi di malva e altea, dei fattori di idratazione naturale e di ingredienti idratanti- emollienti come il miele bio toscano, l’olio bio locale di girasole e cere vegetali. Dalla consistenza morbida e cremosa è piacevole da spalmare, lascia la pelle vellutata e delicatamente profumata.',30,'crema_corpo_nutriente.jpg','corpo'),(8,'Crema Corpo Rassodante','Un innovativo fluido per viso, corpo e capelli composto da due fasi: una oleosa e una acquosa. Nella fase oleosa l’olio bio locale di girasole agisce in sinergia con lo squalano, l’estratto di carota e la vitamina E. Nella fase acquosa puro succo di aloe bio è arricchito da fattori di idratazione naturale e da un principio funzionale innovativo ad azione idratante-lenitiva. Dà sollievo alla pelle stressata con un effetto calmante-lenitivo, idrata senza ungere e valorizza l’abbronzatura lasciando un fresco profumo floreale.',30,'crema_corpo_rassodante.jpg','corpo'),(9,'Doccia Schiuma Idratante','Proprietà rinfrescanti, lenitive, addolcenti e idratanti che nutrono la pelle lasciandola fresca e vellutata. Le sue foglie carnose contengono polisaccaridi dalle note proprietà idratanti, aminoacidi, vitamine e minerali, preziosi elementi nutritivi per la pelle. Il nuovo Bagnoschiumal L\'Angelica Officinalis all’ Aloe Vera contiene succo d\'aloe derivato direttamente dal gel purissimo presente nellefoglie della pianta.Le sue note proprietà rinfrescanti,lenitive, addolcenti ed idratanti, lasciano la pelle fresca evellutata.\nProprietà rinfrescanti, lenitive, addolcenti e idratanti che nutrono la pelle lasciandola fresca e vellutata. Le sue foglie carnose contengono polisaccaridi dalle note proprietà idratanti, aminoacidi, vitamine e minerali, preziosi elementi nutritivi per la pelle. Il nuovo Bagnoschiumal L\'Angelica Officinalis all’ Aloe Vera contiene succo d\'aloe derivato direttamente dal gel purissimo presente nellefoglie della pianta.Le sue note proprietà rinfrescanti,lenitive, addolc',10,'doccia_schiuma.jpg','corpo'),(10,'Gel Doccia Energizzante','Il gel doccia emolliente Buon Umore, alla gemma di pioppo protettiva, è senza sapone ed ha un pH neutro per la pelle. La sua texture corposa arricchita in agenti idratanti, deterge delicatamente proteggendo anche la pelle secca e sensibile.\nFrizzante ed energico, il suo profumo associa fragranze fruttate (uva, ananas, pesca) ad un bouquet fiorito (gelsomino, violetta, rosa), per regalare leggerezza e buon umore fin dal mattino.',10,'gel_doccia.jpg','corpo'),(11,'Scrub Purificante','Pregiata miscela di oli bio, burri vegetali e sali marini. Leviga la pelle del corpo eliminando le cellule morte e la nutre lasciandola più morbida. L\'aroma sprigionato dall\' olio essenziale di melissa rilassa mente e spirito.Consigliato una volta a settimana nei normali periodi dell’anno è utile in modo particolare per preparare la pelle al sole e subito dopo il periodo estivo per eliminare le cellule morte.',18,'scrub_purificante.jpg','corpo'),(12,'Scrub Nutriente','Uno scrub corpo a duplice azione: esfoliante-idratante e detergente. Con granuli bio di melograno, sale marino, zucchero e bicarbonato esfolia delicatamente ed efficacemente grazie alla combinazione delle diverse granulometrie. Gli oli ed i burri nutrono la pelle, il succo bio di melograno toscano con proprietà antiossidanti la rivitalizza. Grazie ai tensioattivi vegetali, presenti in quantità misurata, svolge anche una delicata azione detergente.',18,'scrub_nutriente.jpg','corpo'),(13,'Crema Viso Giorno','Trattamento formulato specificatamente per proteggere la pelle dai fattori ambientali e dallo stress e difenderla dalla comparsa dei primi segni d\'espressione. I tratti appaiono più distesi, la pelle radiosa e pronta a rispondere al meglio al trascorrere del tempo. ',40,'cremaviso.jpg','viso'),(14,'Crema Viso Notte','Trattamento ricco per la notte, si adatta al ritmo del riposo notturno della pelle per ricaricarla di preziosi elementi nutritivi e combattere così la comparsa dei primi segni del tempo. La sua forza è la combinazione di l\'Argireline®, estratto di Mirtillo e Pluridefence®, brevetto esclusivo di Bottega Verde, che è in grado di difendere la vitalità delle cellule cutanee. La texture ricca e vellutata e la sua fragranza destressante potenziano l\'effetto della crema, sintonizzandoci ad ogni applicazione su onde piacevolmente rilassanti.',40,'cremaviso_notte.jpg','viso'),(15,'Latte Detergente','Formulato con tensioattivi di origine vegetale ed estratti di finocchio e calendula, con ph 5 è adatto all’igiene quotidiana del viso. Svolge una delicata azione lenitiva lasciando un naturale, gradevole profumo. È indicato per pelli sensibili e delicate.',22,'lattedetergente.jpg','viso'),(16,'Acqua Micellare','Ideale per per pelli sensibili, multi azione:\nstrucca, deterge e lenisce.\nNon c’è bisogno di risciacquare!\nFormulata per detergere perfettamente viso, occhi e labbra.\nDelicata sulle pelli sensibili, è ipoallergenica* e testata dermatologicamente e oftalmicamente. Per una pulizia completa del viso.',18,'acqua_micellare.jpg','viso'),(17,'Burrocacao','Caratterizzato da un\'ottima scorrevolezza ed un\'eccezionale emollienza, protegge e mantiene morbide a lungo le labbra. L\'olio di Argan, prezioso elisir di bellezza delle donne berbere, esercita un\'azione antietà, nutriente e restitutiva... per un sorriso sempre giovane! Rende le labbra morbide ed effetto lifting.',13,'burrocacao.jpg','viso'),(18,'Scrub Labbra','Un efficace scrub per iniziare il trattamento labbra. Elimina le pellicine in modo delicato e lascia le labbra rosee e morbidissime. Può essere usato anche nella zona del contorno labbra contro punti neri e impurità. L’aroma dolce e zuccherino renderà quest’operazione un piacevole momento di cura personale.<br><br> Un prodotto coccola particolare che…una volta provato diventerà un must della vostra bio routine!',16,'scrub_labbra.jpg','');
/*!40000 ALTER TABLE `prodotti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utenti`
--

DROP TABLE IF EXISTS `utenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utenti` (
  `idutente` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`idutente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utenti`
--

LOCK TABLES `utenti` WRITE;
/*!40000 ALTER TABLE `utenti` DISABLE KEYS */;
INSERT INTO `utenti` VALUES (1,'giulia','giulia','giulia','giulia@gmail.com'),(2,'ila','ila','ila','ila@gmail.com'),(3,'nick','nick','nick','nick@gmail.com');
/*!40000 ALTER TABLE `utenti` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-01 19:13:19
