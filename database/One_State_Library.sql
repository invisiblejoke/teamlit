-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2018 at 08:47 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `One_State_Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Info_collections_Books`
--

CREATE TABLE `Info_collections_Books` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `Info_collections_Books`
--

INSERT INTO `Info_collections_Books` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('ICB0001', 'State portraits of Australian business : a report based on the 1995 business longitudinal survey / Small Business Research Program', 'Small Business Research Program (Australia)\nAustralia. Office of Small Business ; Aquatech Pty. Ltd.', 'Small business -- Australia -- Statistics;\nSmall business -- Australia -- Longitudinal studies;\nBusiness enterprises -- Australia -- Longitudinal studies;\nBusiness enterprises -- Australia -- Statistics', '', '<Canberra : Office of Small Business> ', '', '', 'xii, 139 p. ; 25 cm.. ', '', '1998', '', 'English', '', '\'Prepared by Aquatech Pty Ltd for the Office of Small Business, Department of Workplace Relations and Small Business\' -- Verso t.p. \nChiefly tables. \nAGPS cat. no. 9801853. \nIncludes bibliographical references (p. 120) ', '', 'ISBN:0646335413 ', '', '21129203210002061 ', 'http://catalogimages.johnwiley.com.au/Cover/300W/97807303/9780730314141.jpg', 0),
('ICB0002', 'Microwave and Millimeter-Wave Electronic Packaging.', 'Rick. Sturdivant', 'Electronic books', 'Access available for SLQ members', 'Norwood : Artech House ', '', 'Microwave and Millimeter-Wave Electronic Packaging -- Contents -- Preface -- 1 Introduction -- 1.1 Distributed Effects -- 1.1.1 Distributed Effects in Lumped Elements -- 1.1.2 Undesired Resonances -- 1.1.3 Transmission Lines -- 1.1.4 Dispersion Effects -- 1.1.5 Coupling and Cross-Talk Between Signal Lines -- 1.1.6 Parasitic and Grounding Concerns -- 1.2 Thermal Effects -- 1.3 First-Level Interconnects -- 1.4 Second-Level Interconnects -- 1.5 Modules -- 1.6 Conclusions -- Questions -- References -- 2 Materials -- 2.1 Electrical Parameters and Their Measurement -- 2.1.1 Dielectric Constant -- 2.1.2 Loss Tangent -- 2.1.3 Measurement of Dielectric Constants and Loss Tangents -- 2.1.4 Metal Electrical Conductivity -- 2.2 Mechanical Parameters -- 2.2.1 Thermal Conductivity -- 2.2.2 Thermal Expansion -- 2.2.3 Stress and Strain -- 2.2.4 Young\'s Modulus -- Questions -- References -- 3 Ceramic Packaging -- 3.1 History of Ceramics -- 3.2 Thin-Film Ceramics -- 3.3 Advanced Thin-Film Techniques -- 3.4 Thick-Film Ceramics -- 3.4.1 Thick-Film Paste -- 3.4.2 Squeegee -- 3.4.3 Frame -- 3.4.4 Screen and Mesh -- 3.4.5 Emulsion -- 3.4.6 Desired Metal Pattern -- 3.4.7 Ceramic Substrate -- 3.4.8 Printing Machine -- 3.4.9 Etching -- 3.4.10 Postprocessing -- 3.5 Thermally Enhanced Thick-Film Processes -- 3.6 High-Temperature Cofired Ceramic (HTCC) -- 3.6.1 Slurry -- 3.6.2 Tape Casting -- 3.6.3 Punching -- 3.6.4 Via Filling and Conductor Printing -- 3.6.5 Stacking, Pressing, and Cofiring -- 3.6.6 Postprocessing -- 3.7 Low-Temperature Cofired Ceramic (LTCC) -- Questions -- References -- 4 Laminate Packaging -- 4.1 Laminate Board Fabrication -- 4.1.1 Database Review and Acceptance -- 4.1.2 Artwork Generation -- 4.1.3 Clean Layers -- 4.1.4 Pattern and Etch -- 4.1.5 Bake-Out -- 4.1.6 Oxide Treatment of Inner Layers for Adhesion -- 4.1.7 Alignment and Lamination. \r\n4.1.8 Drill and Deburr -- 4.1.9 Through-Hole Plating -- 4.1.10 Solder Mask -- 4.1.11 Finish Plating -- 4.1.12 Silk Screen and CNC Routing -- 4.1.13 Electrical Testing and Inspection -- 4.2 Cost of Laminates -- 4.3 Laminate Circuit Board Tolerances -- 4.4 High-Performance Laminate Materials -- 4.5 Liquid Crystal Polymer -- 4.6 Laminate Multichip Modules -- 4.7 Conclusions -- Questions -- References -- 5 First-Level Interconnects -- 5.1 Wire Bond Interconnects -- 5.1.1 Wire Bond Manufacturing -- 5.1.2 Wire Bond Reliability -- 5.1.3 Wire Bond Electrical Performance and Modeling -- 5.1.4 Straight Wire Bond Between Substrates -- 5.1.5 Wire Bond Between an MMIC and Substrate -- 5.1.6 Ground Current Parasitics in Wire Bonded Circuits -- 5.1.7 Tuning Wire Bond Interconnects -- 5.1.8 Other RF Uses for Wire Bonds -- 5.2 Ribbon Bonding -- 5.3 Flip Chip Interconnects -- 5.3.1 Types of Flip Chip Interconnects -- 5.3.2 Electrical Modeling of Flip Chip Interconnects -- 5.3.3 Parasitic Modes in Flip Chip Interconnects -- 5.3.4 Thermal Concerns for Flip Chips -- Questions -- References -- 6 Second-Level Interconnects -- 6.1 Electrical Modeling of Surface-Mount Packages -- 6.2 Inductance and Capacitance Matrix Method for Package Model Extraction -- 6.3 Coupled-π Model Method -- 6.4 Hybrid Circuit Model -- Questions -- References -- 7 Modules and Motherboards -- 7.1 Proper Transmission Line Design -- 7.1.1 Conductor-Backed Coplanar Waveguide -- 7.1.2 Striplines -- 7.1.3 Microstrip Lines -- 7.2 Vias for Isolation and Grounding -- 7.3 Cavity Resonances -- Questions -- References -- 8 Transitions and 3D Packaging -- 8.1 Transitions Between Transmission Lines -- 8.1.1 CBCPW to Microstrip Transition -- 8.1.2 Cofired Ceramic Microstrip and Stripline Transition -- 8.1.3 Laminate Board Microstrip to Stripline Transition -- 8.2 Three-Dimensional Packaging. \r\n8.2.1 Stacked Substrate Solderless Interconnects -- 8.2.2 Highly Integrated Modules with Vertical Transitions -- 8.2.3 Using the Package as a Circuit Element: An Integrated 60-GHz Module -- 8.2.4 Three-Dimensional Integration by Stacking ICs and Packages -- 8.3 Conclusions -- Questions -- References -- 9 Heat Transfer -- 9.1 Heat Transfer Mechanisms -- 9.2 Amplifier Efficiency and Dissipated Thermal Power -- 9.3 Reliability and Arrhenius Equation -- 9.4 Device Junction Temperature -- 9.5 Junction Temperature with Multiple Material Layers -- 9.6 Thermal Simulations Using Spice -- 9.7 Thermal Simulation Using the Finite Difference Method -- 9.8 Conclusions -- Questions -- References -- 10 Electromagnetic Modeling -- 10.1 Quasistatic Simulation of Transmission Lines -- 10.2 Method of Moments -- 10.3 Finite Element Method -- 10.4 Finite Difference Time Domain Method -- 10.5 Mode Matching Technique -- 10.6 Integrated Methods -- 10.7 Domain Decomposition Methods -- Questions -- References -- 11 Conclusions and Future Horizons -- 11.1 The 10 Keys to Successful Packaging -- 11.1.1 Careful System Architecture and Solid Specifications -- 11.1.2 Proper Material Selection -- 11.1.3 Electrical Signal Integrity -- 11.1.4 Thermal Management -- 11.1.5 Proper Electrical Modeling -- 11.1.6 Proper Mechanical Modeling -- 11.1.7 Design for Manufacturing -- 11.1.8 Design for Testability -- 11.1.9 Production Process Transition -- 11.1.10 Proper Feedback from Field Failures -- 11.2 Future for Packaging at Microwave Frequencies -- 11.3 Drive for Lower Cost Packaging at Millimeter-Wave Frequencies -- References -- Appendix A -- A.1 Scattering Parameters -- A.2 Impedance Parameters -- Appendix B -- B.1 Multilayer Transmission Line Tool -- B.2 Physical Parameters -- B.3 Numerical Control -- B.4 Analysis -- Appendix C -- C.1 Thermal Calculator Software Tool -- About the Author. \r\nIndex. ', '1 online resource (281 pages). ', 'Packaging of electronic components at microwave and millimeter-wave frequencies requires the same level of engineering effort for lower frequency electronics plus a set of additional activities which are unique due to the higher frequency of operation. This resource presents you with the electronic packaging issues unique to microwave and millimeter-wave frequencies and reviews lower frequency packaging techniques so they can be adapted to higher frequency designs. You are provided with 30 practical examples throughout the book, as well as three free downloadable software analysis programs. ', '2014', '1st ed.. ', 'English', '', '', '', 'ISBN:9781608076987 ', '', '21206550180002061', 'https://images-na.ssl-images-amazon.com/images/I/41CDCtld9rL._SX331_BO1,204,203,200_.jpg', 0),
('ICB0003', 'Computer methods and advances in geomechanics / edited by G.Beer, J.R.Booker & P.J.Carter', 'International Conference on Computer Methods and Advances in Geomechanics (7th : 1991 : Cairns, Qld.)', 'Computer-aided engineering;\nRock mechanics -- Congresses;\nSoil mechanics -- Data processing;\nEngineering geology -- Data processing -- Congresses;\nRock mechanics -- Data processing -- Congresses', '', 'Rotterdam : Brookfield, Vt. : Published on behalf of the International Association for Computing Methods and Advances in Geomechanics by A.A. Balkema ', '', '', '3 v. ; 25 cm.. ', '', '1991', '', 'English', '', 'Proceedings of the seventh international conference on computer methods and advances in geomechanics, Cairns, 6-10 May 1991. \nIncludes bibliographies and index. ', '', 'ISBN:9061911893 (set) ', '', '21116073620002061', 'https://i.imgur.com/cSUMetj.jpg', 0),
('ICB0004', 'Computer Forensics : An Essential Guide for Accountants, Lawyers, and Managers', 'Michael. Sheetz', 'Computer crimes -- Investigation;\nElectronic books', 'Access available for SLQ members', 'Somerset : John Wiley & Sons, Incorporated ', '', 'Cover -- Title Page -- Copyright -- Contents -- Introduction -- Acknowledgments -- Chapter 1 A Definition of Computer Forensics -- Introduction -- Forensic Science -- History of Computer Forensics -- World Wide Web -- Hacker Community -- Conclusion -- Notes -- Suggested Reading -- Chapter 2 Basics of Computer Forensic Concepts -- Introduction -- Understanding Digital Evidence -- Input -- Storage -- Processing -- What Computer Data Is -- Output -- Conclusion -- Notes -- Suggested Reading -- Chapter 3 Preservation and Collection of Digital Evidence -- Introduction -- Rules of Evidence -- Preservation -- Collection -- Conclusion -- Note -- Suggested Reading -- Chapter 4 Analysis of Digital Evidence -- Introduction -- Forensic Analysis -- Conclusion -- Notes -- Suggested Reading -- Chapter 5 Reporting and Rendering the Opinion -- Introduction -- Preparing the Report -- Photographic Documentation -- Reporting -- Executive Summary or Abstract -- Table of Contents -- Body or Findings -- Conclusion -- Supporting Documents -- Appendixes -- Presentation -- Trial Process -- Dispute -- Complaint -- Service of Process -- Pretrial -- Trial -- Conclusion -- Suggested Reading -- Chapter 6 Computer Attacks -- Hackers and Phreakz Oh My -- Hackers: Unauthorized Use and Trespassing -- Wireless Hacking -- Malware -- Attacks from the Inside -- Conclusion -- Notes -- Suggested Reading -- Chapter 7 Computers as Tools for Evil -- Introduction -- Computers and Crime -- Identity Theft -- Concealment -- Auction Fraud and Retail Cons -- Counterfeiting and Forgery -- Prostitution -- Securities Fraud -- Conclusion -- Notes -- Chapter 8 Computer Tools and the Forensic Examination -- Introduction -- Assuming Control of the Case -- Understanding the Case -- Evaluating the Evidence -- Examining the \"Live\'\' System. \r\nCollecting Data from a Dead System -- Imaging the Drive -- Data Extraction -- Data Analysis -- Time Frame Analysis -- Hidden Data Aanalysis -- Application and File Analysis -- Ownership Analysis -- Conclusion -- Notes -- Chapter 9 Presenting Digital Evidence in Court -- Introduction -- Evidence -- Types of Evidence -- Expert Witnesses -- Legal Requirements of Evidence -- Search and Seizure -- Conclusion -- Notes -- Index.', '1 online resource (352 pages). ', 'Would your company be prepared in the event of: * Computer-driven espionage * A devastating virus attack * A hacker\'s unauthorized access * A breach of data security? As the sophistication of computer technology has grown, so has the rate of computer-related criminal activity. Subsequently, American corporations now lose billions of dollars a year to hacking, identity theft, and other computer attacks. More than ever, businesses and professionals responsible for the critical data of countless customers and employees need to anticipate and safeguard against computer intruders and attacks. The first book to successfully speak to the nontechnical professional in the fields of business and law on the topic of computer crime, Computer Forensics: An Essential Guide for Accountants, Lawyers, and Managers provides valuable advice on the hidden difficulties that can blindside companies and result in damaging costs. Written by industry expert Michael Sheetz, this important book provides readers with an honest look at the computer crimes that can annoy, interrupt--and devastate--a business. Readers are equipped not only with a solid understanding of how computers facilitate fraud and financial crime, but also how computers can be used to investigate, prosecute, and prevent these crimes. If you want to know how to protect your company from computer crimes but have a limited technical background, this book is for you. Get Computer Forensics: An Essential Guide for Accountants, Lawyers, and Managers and get prepared. ', '2015', '1st ed.. ', 'English', '', '', '', 'ISBN:9780470124024 ', '', '21206348640002061', 'https://images-na.ssl-images-amazon.com/images/I/41hZMu-cDnL._AC_US218_.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Info_collections_DatabaseTitle`
--

CREATE TABLE `Info_collections_DatabaseTitle` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `Info_collections_DatabaseTitle`
--

INSERT INTO `Info_collections_DatabaseTitle` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('ICDT0001', 'Falling in love with other essays on more exact branches of science / by Grant Allen.', 'Grant Allen 1848-1899.', 'Natural history;\r\nScience', '', 'Salt Lake City, Utah : Project Gutenberg ', '', 'Falling in love -- Right and left -- Evolution -- Strictly incog. -- Seven-year sleepers -- A fossil continent -- A very old master -- British and foreign -- Thunderbolts -- Honey-dew -- The milk in the coconut -- Food and feeding -- De banana -- Go to the ant -- Big animals -- Fossil food -- Ogbury Barrows -- Fish out of water -- The first potter -- The recipe for genius -- Desert sands. ', '', '', '2005', '', 'English', '', 'Mode of access: Internet via World Wide Web.', '', '', '', '21108278190002061 ', 'https://cf1.s3.souqcdn.com/item/2017/01/18/12/86/47/49/item_XL_12864749_19170652.jpg', 0),
('ICDT0002', 'ANTE Abstracts in new technologies and engineering.', '', 'Technology -- Indexes -- Periodicals;\r\nTechnology -- Abstracts -- Periodicals;\r\nEngineering -- Abstracts -- Periodicals;\r\nEngineering -- Indexes -- Periodicals', '', 'East Grinstead, England : Bowker-Saur ', '', 'ANTE: Abstracts in New Technologies and Engineering (formerly Current Technology Database), is an abstracting and indexing service monitoring publications from the U.K. and the U.S. Coverage includes new technologies such as information technology and computing, electronics, biotechnology, medical technology, as well as engineering (including construction, electrical and chemical engineering) and allied subject areas. Abstracts are available from January 1993 to the present, with citations available from 1980. Sources covered include over 350 periodicals, conference proceedings, technical reports, trade journal/newsletter items, patents, books, and press releases. Over 2,705,647 records as of July 2008. ', '', '', '199?', '', 'English', '', 'Title from title screen (viewed on Aug. 22, 2008).', 'Data issued also in printed form and CD-ROM. ', '', 'Abstracts in new technologies and engineering net \r\nANTE net ', '21109885500002061 ', 'https://thumb7.shutterstock.com/display_pic_with_logo/1316821/621406889/stock-vector-abstract-technology-background-vector-illustration-621406889.jpg', 0),
('ICDT0003', 'The Cochrane library.', '', 'Evidence-based medicine -- Databases;\r\nClinical trials -- Databases;\r\nSystematic reviews (Medical research) -- Databases;\r\nEvidence-Based Medicine;\r\nClinical Trials as Topic', '', 'Hoboken, N.J. : Wiley-Interscience. ', '', '', '', '\"The Cochrane Library is a collection of databases that contain high-quality, independent evidence to inform healthcare decision-making. It includes reliable evidence from Cochrane and other systematic reviews, clinical trials and more\"--Database home page. ', '1999', '', 'English', '', 'Title from home page (viewed on Oct. 28, 2008). ', '', '', '', '21214035250002061 ', 'https://image.slidesharecdn.com/thecochranelibrary-anintroductionforrheumatologists-17feb2014-140310192816-phpapp02/95/the-cochrane-library-an-introduction-for-rheumatologists-17-feb-2014-1-638.jpg?cb=1394479769', 0),
('ICDT0004', 'Underground tales of hacking, madness & obsession on the electronic frontier / Suelette Dreyfus ; with research by Julian ', 'Suelette. Dreyfus\r\nJulian Assange', 'Hackers -- Australia -- Biography;\r\nComputer crimes -- Australia;\r\nComputer security -- Australia', '', 'Salt Lake City, Utah : Project Gutenberg ', '', '', '', '', '2003', '', 'English', '', 'Mode of access: Internet via World Wide Web. ', '', '', '', '21108316970002061 ', 'https://images-na.ssl-images-amazon.com/images/I/51vswnqgncL._SX311_BO1,204,203,200_.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Info_collections_ebooks`
--

CREATE TABLE `Info_collections_ebooks` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `Info_collections_ebooks`
--

INSERT INTO `Info_collections_ebooks` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('ICEB0001', 'Singing Lessons for Beginners Teach Yourself How to Sing (Free Video Available)', 'LearnToPlayMusic.com.\r\nPeter Gelling', 'School music--Instruction and study;\nSinging--Methods -- Juvenile;\nSinging;\nElectronic books', 'Access available for SLQ members. Onsite login required.', 'LearnToPlayMusic.com', 'Progressive Beginner', 'Cover; Publisher Info; Using This eBook; Contents; Introduction; Lesson One; Everyone Can Sing; Matching Pitches and Rhythms; Vocal Range; Timbre; The Ultimate Melodic Instrument; How We Sing; Breathing; Remember; Posture; Incorrect; Correct; Learning to Sing; Pre-Hearing Notes; Common Problems; Registers; Working With a Teacher; Breath Control; Lesson Two; Understanding Music; How to Read Music; The Treble Clef; The Treble Staff; The Quarter Note; The Four Four Time Signature; The Half Note; When to Breathe; The Whole Note; A Word About Pitch; Rests; The Half Rest; The Whole Rest \r\nThe Quarter RestThe Importance of Timing; Lesson Three; Voice Types and Ranges; How to Find Your Voice Range; The Keyboard; The Bass Clef; The Bass Staff; The Grand Staff; Matching Pitches; The Octave; Lesson Four; The Major Scale; Octave Displacement; Sol-fa Syllables; The Three Four Time Signature; The Dotted Half Note; The Eighth Note; The Dotted Quarter Note; Lesson Five; Sounds Used in Singing; Vowels; Diphthongs; The Shaping of Vowels; Ee; Ay; Ah; Oh; Oo; Consonants; Dynamics; Slurs; Phrasing and Expression; Moving Between Registers; Vibrato; Lesson Six; Sharps and Flats \r\nThe Chromatic ScaleIntervals; Keys; Key Signature of G Major; Key Signature of F Major; Relative Minor Keys; Lesson Seven; The Tie; Syncopation; The Eighth Rest; The Lead-in; First and Second Endings; Lesson Eight; The Triplet; Swing Rhythms; Interpretation and Improvisation; Sixteenth Notes; Lesson Nine; Transposing; The Six Eight Time Signature; Harmony and Chords; The C Major Chord; How Chords Relate to Scales; Arpeggios; Chord Progressions; Lesson Ten; Performing in Public; Overcoming Nerves; Eye Contact; Stage Presence and Stage Craft; Developing Your Own Style; Microphones \r\nMicrophones for Performing LiveMicrophone Technique; Studio Microphones; Warming Up; Looking After Your Voice; Approach to Practice; Listening; Recording Yourself; Glossary of Musical Terms ', '1 online resource (105 p.).', '<![CDATA[Teach yourself how to sing with our easy singing lessons for beginners.\r\n\r\n***Comes with online access to free singing videos and audio demonstrating all examples. See and hear how each one is sung by a teacher, then sing along with the backing band. Also includes music score animation for easy music learning.***\r\n\r\n\"\"Great beginning singing instruction. Great basics in user friendly format for the new singer. Easy to read, great diagrams! Super buy!\"\" - The Sand, Alameda CA [Amazon]\r\n\r\nProgressive Beginner Singing contains all you need to know to start learn', '2014', '', 'English', '', 'Description based upon print version of record.', '', 'ISBN:9789825323297 ', '', '21197105490002061 ', 'https://images-na.ssl-images-amazon.com/images/I/51YZkzy09nL._SY346_.jpg', 0),
('ICEB0002', 'Ballroom dancing with 100 diagrams and photographs of the quickstep, waltz, foxtrot, tango, etc. / Alex Moore ; foreword by Philip J.S. Richardson.', 'Alex. Moore\r\nProQuest (Firm)', 'Ballroom dancing;\r\nElectronic books', 'Access available for SLQ members', 'New York : Routledge. ', '', 'section 1. The quickstep -- section 2. The waltz -- section 3. The foxtrot -- section 4. The tango -- section 5. Rhythm dancing (social foxtrot and quickstep) -- section 6. The Viennese waltz -- section 7. For the keen dancer -- section 8. Ballroom party dances. ', 'xii, 308 p. : ill.. ', '', '2002', '10th ed.. ', 'English', '', '\"A Theatre arts book\"--T.p. verso. ', '', '', '', '21211295020002061', 'https://images-na.ssl-images-amazon.com/images/I/41HYnlLMoEL.jpg', 0),
('ICEB0003', 'Michigan manual of plastic surgery / David L. Brown, Gregory H. Borschel.', 'David L Brown (David Lawrence), 1968- ; Gregory H Borschel', 'Surgery, Plastic -- Handbooks, manuals, etc;\nElectronic books', 'Access available for SLQ members. SLQ login & ProQuest ebrary account required. ', 'Philadelphia : Lippincott Williams & Wilkins ', '', '', '1 online resource (442 pages) : illustrations. ', '', '2004', '', 'English', '', 'Includes index. ', '', 'ISBN:9781469875606 (e-book) ', 'Portion of title: Manual of plastic surgery ', '21182227350002061 ', 'https://images-na.ssl-images-amazon.com/images/I/51mjM9KHgBL._SX311_BO1,204,203,200_.jpg', 0),
('ICEB0004', 'Hospital medicine / editors, Robert M. Wachter, Lee Goldman, Harry Hollander.', 'Robert M Wachter ; Lee Goldman ; Harry Hollander', 'Hospital care;\nInternal medicine;\nElectronic books', 'Access available for SLQ members. SLQ login & ProQuest ebrary account required. ', 'Philadelphia : Lippincott Williams & Wilkins ', '', 'General issues -- Critical care medicine -- Medical consultation -- Cardiology -- Vascular medicine -- Pulmonary -- Infectious diseases -- Hiv disease -- Gastroenterology -- Hematology - oncology -- Renal -- Endocrinology -- Rheumatology -- Neurology and psychology -- Toxicology and allergy. ', '1 online resource (1314 pages) : illustrations. ', '', '2005', 'Second edition.. ', 'English', '', 'Includes bibliographical references and index. ', '', '', '', '21181915390002061 ', 'https://images-na.ssl-images-amazon.com/images/I/51S9ECQF43L._SX386_BO1,204,203,200_.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Info_collections_Images`
--

CREATE TABLE `Info_collections_Images` (
  `ID` int(5) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` date NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `Info_collections_Website_Title`
--

CREATE TABLE `Info_collections_Website_Title` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `Info_collections_Website_Title`
--

INSERT INTO `Info_collections_Website_Title` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('ICWT0001', 'The Avalon Project at the Yale Law School : documents in law, history and diplomacy.', 'William C Fray ; Lisa A Spar ; Yale Law School.', 'Law -- Sources;\r\nPolitical science literature -- Sources;\r\nUnited States -- History -- Sources', '', 'New Haven, Conn. : Avalon Project ', '', 'Major collections: Pre 18th century -- 18th century -- 19th century -- 20th century -- 21st century -- African-Americans -- biography, autobiography and history -- American Constitution -- a documentary record -- American diplomacy: bilateral treaties 1778-1999 -- American diplomacy: multilateral treaties 1864-1999 -- American history: a chronology 1492-1988 -- Ancient, Medieval and Renaissance documents -- Annual messages of the Presidents -- Austrian-American diplomacy -- Barbary Treaties 1816-1836 -- Belgian-American diplomacy -- Blackstone\'s commentaries on the laws of England 1765-1769 -- Brazilian-American diplomacy 1829- -- British-American diplomacy 1782- -- Chilean-American diplomacy 1832- -- Cold War -- Cold War diplomacy -- Defense treaties of the United States -- Colonial charters, grants and related documents -- Confederate States of America : papers -- Congressional Resolutions -- Diplomatic document collections -- Economic and legal treatises-- European diplomacy 870- : bilateral treaties and agreements -- European history: a chronology 802-1992 -- Federalist papers -- Foreign relations of the United States -- Franco-American diplomacy -- From Versailles to NATO: 1918-1949 -- German-American diplomacy -- History treatises -- Inaugural addresses of the Presidents -- Indochina -- Vietnam, Cambodia and Laos -- Inter-American system: agreements, conventions and other documents -- International agreements and Diplomatic Documents -- International Military Tribunal for Germany -- Jefferson Papers -- Journals of the Continental Congress 1774-1789: selected documents -- Laws of war: Hague and Geneva Conventions -- League of Nations -- Madison\'s notes on debates in the Federal Convention of 1787 -- Mexican-American diplomacy -- Middle East 1916-2002: a documentary record -- Native Americans: documents 1789-1887 -- Nazi -- Soviet Relations 1939-1941 -- Nuremberg War Crimes Trial-- Papers Relating to the Foreign Relations of the United States -- Peace Conference at the Hague 1899: correspondence, instructions and reports -- Presidential papers -- Project DIANA -- an online human rights archive -- Quasi War with France 1791-1800 -- September 11, 2001 : Attack on America -- a collection of documents -- Slavery: statutes and treaties -- Soviet-American diplomacy -- Spanish-American diplomacy -- State constitutions 1776- -- Texas: from independence to annexation 1836-1846 -- Treaties between the United States and Native Americans -- United Nations: documents -- United States, Southeast Asia and the Pacific Area 1950-1999 -- United States statutes -- United States statutes concerning Native Americans -- United States statutes concerning slavery -- Western European security and co-operation 1948- -- World War II: documents 1940-1945. ', '', 'Contains digital documents relevant to the fields of law, history, economics, politics, diplomacy and government. ', '1996', '', 'English', '', 'Title from title screen caption (viewed Oct. 4, 2007). \r\nProject co-directors, <Aug. 14, 2003->: William C. Fray and Lisa A. Spar; project director, <Oct. 4, 2007>: William C. Fray. \r\nMode of access: Internet via World Wide Web. ', '', '', 'Portion of title: Avalon Project \r\nPortion of title: Documents in law, history and diplomacy ', '21214035270002061 ', 'https://i.pinimg.com/564x/27/12/3b/27123be83551d201d690c3aeae884c73--us-history-american-history.jpg', 0),
('ICWT0002', 'Australian statistical geography standard (ASGS) Volume 2 : indigenous structure.', 'Australian Bureau of Statistics', 'Geographical location codes -- Classification;\r\nGeographic information systems -- Australia -- Classification;\r\nCensus districts -- Australia -- Classification;\r\nAustralia -- Geography -- Classification', '', 'Canberra : Australian Bureau of Statistics ', 'ABS Statistics electronic collection ', '', '', 'The ASGS Indigenous Structure is the second in a series of Volumes concerning ASGS 2011 and aims to provide a geographical standard for the publication of statistics about the Indigenous population of Australia. The digital boundaries, codes and labels for each of the Indigenous Structure regions can be obtained as downloads from the ABS website free of charge. ', '2011', '', 'English', '', 'Caption title. \r\nTitle from title screen (viewed September 21, 2011) \r\nCatalogue number 1270.0.55.002. \r\nAvailable online (as at 20/06/13) at: http://www.abs.gov.au/ausstats/abs@.nsf/cat/1270.0.55.002. ', '', '', '', '21119399390002061 ', 'http://abs.gov.au/ausstats/wmdata.nsf/activeotherresource/ABS_Logo_333/$File/ABS_Logo_333.svg', 0),
('ICWT0003', 'Australia New Zealand food standards code', 'Food Standards Australia New Zealand.', 'Food -- Standards -- Australia;\r\nFood -- Standards -- New Zealand;\r\nFood adulteration and inspection -- Australia;\r\nFood adulteration and inspection -- New Zealand;\r\nFood law and legislation -- Australia;\r\nFood law and legislation -- New Zealand', '', 'Barton, A.C.T. : Food Standards Australia New Zealand ', '', '', '', '', '2000', '', 'English', '', 'Title from title screen (viewed 10/02/10) \r\n\'This is an unofficial consolidated version of the Australia New Zealand Food Standards Code provided for your convenience only.\' -- t.p. verso. \r\nSystem requirements: Web browser, internet access, Adobe Acrobat Reader. \r\nAvailable online (as at 4/5/11) at: http://www.foodstandards.gov.au/foodstandards/foodstandardscode.cfm ', '', '', 'Australian food standards code \r\nFood standards code \r\nANZ food standards code ', '21107437810002061 ', 'http://www.foodstandards.gov.au/publications/PublishingImages/Safe%20Food%20Australia%20cover%20image.jpg', 0),
('ICWT0004', 'Victorian year book Australian Bureau of Statistics.', 'Australian Bureau of Statistics', 'Victoria -- Statistics -- Periodicals;\r\nElectronic books', '', 'Canberra : Australian Bureau of Statistics. ', 'ABS Statistics electronic collection ', '', '', 'Provides a comprehensive collection of statistical information (both ABS and Non-ABS) about Victoria. Topics covered include climate/physiography, government, demography, labour, education, health, social, crime and justice, service industries, trade, agriculture, manufacturing, mining and energy, prices and expenditure, finance, housing and construction, transport/communication and tourism. There is a feature article and a special article provided by the Victorian Treasury \'Victoria in perspective\'. It also includes an appendix of historical statistics. \r\nFrom the 1999 issue onwards, includes regional data. ', '1903', '', 'English', '', 'Caption title from title screen (viewed February 18, 2012). \r\nCatalogue no.: 1301.2. \r\nAvailable online (as at 20/06/13) at: http://www.abs.gov.au/ausstats/abs@.nsf/cat/1301.2 ', '', '', '', '21119401100002061 ', 'https://images-na.ssl-images-amazon.com/images/I/41p2ZSR0SWL.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `OA_collections_Books`
--

CREATE TABLE `OA_collections_Books` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `OA_collections_Books`
--

INSERT INTO `OA_collections_Books` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('OAB0001', 'https://images-na.ssl-images-amazon.com/images/I/913a4Vx1P3L.jpg', 'Alexa Chung 1983-', 'Chung, Alexa, 1983-;\r\nClothing and dress;\r\nFashion;\r\nFashion editors -- United States -- Anecdotes', '', 'New York : Penguin Books ', '', '', '192 pages : illustrations (chiefly colour) ; 21 cm.. ', 'This book, a collection of Alexa Chung\'s writing, doodles and photographs, combines stories of early style inspirations such as her grandpa and the Spice Girls with discussion of figures of obsession like Jane Birkin and Annie Hall, reflecting on heartbreak, how to get dressed in the morning, the challenges of taking a good selfie, and more. Interspersed with pages from Alexa\'s notebooks and many a photo of a good night out, this book is now perfectly sized for any bag - handbag or otherwise. Witty, charming and with a refreshingly down-to-earth attitude, this is a must-have for anyone who loves fashion, worries about growing up, or loves just about everything about Alexa Chung. She is a model and contributing editor to British Vogue. The recipient of numerous style awards, Alexa has won the prestigious British Style Award (voted for by the public) three years in a row. ', '2014', '', 'English', 'General. ', 'Originally published: London: Particular, 2013. \r\nPart of the Asia Pacific Design Library ', '', 'ISBN:9780143126768', '', '21196369280002061 ', 'https://images-na.ssl-images-amazon.com/images/I/913a4Vx1P3L.jpg', 0),
('OAB0002', 'Psychology / Lorelle Burton, Drew Westen, Robin M Kowalski.', 'Lorelle Burton 1971-\r\nDrew Westen 1959- ; Robin M Kowalski', 'Psychology -- Australia -- Textbooks;\r\nPsychology -- New Zealand -- Textbooks', '', 'Milton, Qld. : John Wiley & Sons ', '', '', '1 v .(various pagings) : ill., (some col.), ports. ; 28 cm.. ', '', '2009', '2nd Australian and New Zealand ed.. ', 'English', '', 'Includes index. \r\nBibliography: p. R.1-R.96. ', '', 'ISBN:9780470813478 (pbk.) ', '', '21128438820002061 ', 'https://pictures.abebooks.com/MARKRUSSELL/md/md22580328270.jpg', 0),
('OAB0003', 'Animal biology / Richard D. Jurd.', 'R. D. Jurd (Richard David), 1946-\r\nR. D Jurd (Richard David), 1946-', 'Zoology -- Outlines, syllabi, etc;\r\nPhysiology -- Outlines, syllabi, etc', '', 'London, New York : Bios Scientific Publishers ', 'Instant notes \r\nInstant notes series. ', '', 'ix, 300 p. : ill. ; 25 cm.. ', '', '2004', '2nd ed.. ', 'English', '', 'Rev. ed. of: Instant notes in animal biology. 1997. \r\nIncludes bibliographical references and index ', '', 'ISBN:1859963250 (alk. paper) ', 'Portion of title: Instant notes animal biology ', '21126571480002061 ', 'https://pictures.abebooks.com/isbn/9781859963258-uk-300.jpg', 0),
('OAB0004', 'Brisbane / Matthew Condon.', 'Matthew Condon (Matthew Steven), 1962-', 'Condon, Matthew (Matthew Steven), 1962- -- Homes and haunts;\r\nBrisbane (Qld.) -- Description and travel;\r\nBrisbane (Qld.) -- History;\r\nBrisbane (Qld.) -- Social life and customs;\r\nBrisbane (Qld.) -- Biography', '', 'Sydney : University of NSW Press ', '', '', '301 p. ; 19 cm.. ', 'I keep coming back to the light of Brisbane. If you are born into it, this palette of gentle pinks and oranges at dawn and dusk, the blast white of midday in summer, the lemon luminescence of mid-morning and mid-afternoon, you keep it with you, and measure all other light by it. ', '2010', '', 'English', '', 'Includes index. \r\nBibliography. ', '', 'ISBN:9781742230283 (hbk.) ', '', '21119757720002061 ', 'https://ms-newsouthbooks-com-au.s3.amazonaws.com/WorkImage/WorkEdition/9781742230283.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `OA_collections_DatabaseTitle`
--

CREATE TABLE `OA_collections_DatabaseTitle` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `OA_collections_DatabaseTitle`
--

INSERT INTO `OA_collections_DatabaseTitle` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('OADT0001', 'Collecting colonialism : material culture and colonial change / Chris Gosden and Chantal Knowles.', 'Chris Gosden 1955-\r\nChantal Knowles', 'Material culture -- Papua New Guinea -- History -- 20th century;\r\nGreat Britain -- Colonies -- Oceania;\r\nPapua New Guinea -- Civilization -- Foreign influences\r\nPublisher: Oxford : Berg ', '', 'Oxford : Berg ', '', '', 'xxii, 234 p. : ill., maps ; 24 cm.. ', '', '2001', '', 'English', '', 'Includes index. \r\nBibliography p. 217-227. ', '', 'ISBN:1859734030 ', 'Portion of title: Material culture and colonial change ', '21135817990002061 ', 'https://images-na.ssl-images-amazon.com/images/I/41MTBAV937L._SX331_BO1,204,203,200_.jpg', 0),
('OADT0002', 'Diagnostics of traditional Chinese medicine = Zhong yi zhen duan xue / compiled by Nanjing University of Traditional Chinese Medicine, translated by Shanghai University of Traditional Chinese Medicine.', '南京中医药大学; 上海中医药大学 ; Nanjing Zhong yi yao da xue. ; Shanghai Zhong yi yao da xue.', 'Medicine, Chinese', '', 'Shanghai China : Publishing House of Shanghai University of Traditional Chinese Medicine ', 'A newly compiled practical English-Chinese library of traditional Chinese medicine = (英汉对照)新编实用中医文库 \r\nNewly compiled practical English-Chinese library of traditional Chinese medicine = Ying Han dui zhao xin bian shi yong Zhong yi wen ku ', '', '3, 3, 5, 12, 280 p. : ill. (some col.) ; 25 cm.. ', '', '2002', '', 'English,Chiense', '', 'Window of Shanghai Collection \r\nParallel text in English and Chinese. ', '', '', '', '21109251460002061 ', 'https://imgv2-2-f.scribdassets.com/img/document/293861871/original/b7c84fcb20/1500521766', 0),
('OADT0003', 'Music / by Ting and Neil Morris ; illustrated by Ruth Levy', 'Ting Morris', 'Musical instruments -- Construction;\r\nMusical instruments -- Juvenile literature', '', 'London : Watts Books ', 'Sticky fingers ', '', '', '', '1993', '', 'English', '', 'Includes index. \r\nBibliography: p. 31. ', '', 'ISBN:0749612460 ', '', '21137120780002061 ', 'https://image.isu.pub/141111200249-9e743873f31ed9c93b892ab0f9524417/jpg/page_1_thumb_large.jpg', 0),
('OADT0004', '21st-century networking : how to become a natural networker / David Sole.', 'David Sole', 'Business networks;\r\nCareer development -- Handbooks, manuals, etc', '', 'London, England : Elliott and Thompson Limited ', '', '', 'x, 212 pages ; 22 cm.. ', 'The essential guide to connecting for success. It is easy to underestimate the power of a strong business network. Many people see it as an \'optional extra\' - another task to fit into an already crammed diary. However, interpersonal relationships remain at the heart of success. Unless we invest time in networking, we are limiting our ability to achieve, to grow and to develop our business. The good news is, it\'s never too late to start networking. In straightforward and simple terms, 21st Century Networking shows you how to take a pragmatic and practical approach to developing this core skill. Including chapters on how to assess your networks, developing your personal brand, the softer skills of networking, using social media and making networking part of your everyday life, the book is filled with case studies to bring the theory to life through real examples. 21st Century Networking provides all you need to take charge of your network - today. ', '2015', '', 'English', '', '', '', 'ISBN:9781783962310 ', '', '21187990230002061 ', 'http://t1.gstatic.com/images?q=tbn:ANd9GcTMIMu988pS1rzws4CC38GFoUwf4-QTLIzuuQUt4UC8_iKBjWxi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `OA_collections_ebooks`
--

CREATE TABLE `OA_collections_ebooks` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `OA_collections_ebooks`
--

INSERT INTO `OA_collections_ebooks` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('OAEB0001', 'Nyangumarta dictionary 2008 by Brian Geytenbeek ; an interactive dictionary designed & produced by Albert Burgman.', 'Brian. Geytenbeek\r\nAlbert Burgman ; Wangka Maya Pilbara Aboriginal Language Centre.', 'English language -- Dictionaries -- Nyangumarta;\r\nNyangumarta language -- Dictionaries -- English', '', 'South Hedland, W.A. : Wangka Maya, Pilbara Aboriginal Language Centre ', '', '', '1 computer optical disc ; 4 3/4 in.. ', '', '2008', '', 'English', '', 'Title from disc label. \r\nCD-ROM. \r\nSystem requirements: Any PC. ', '', 'ISBN:1921312076 ', 'Portion of title: Nyangumarta dictionary 2008 : an interactive dictionary ', '21139271820002061 ', 'https://imgur.com/a/2ydcX', 0),
('OAEB0002', '21st-century Gothic : great Gothic novels since 2000 / edited by Danel Olson.', 'Danel Olson', 'Gothic fiction (Literary genre) -- 21st century -- History and criticism;\r\nHorror tales -- History and criticism', '', 'Lanham, Md. : Scarecrow Press ', '', '', 'xxxiii, 675 p. : ill. ; 24 cm.. ', 'Selected by a poll of more than 180 Gothic specialists (creative writers, professors, critics, and Gothic Studies program developers at universities), the fifty-three original works discussed in Twenty-First-Century Gothic represent the most impressive Gothic novels written around the world between 2000-2010. The essays in this volume discuss the merits of these novels, highlighting the influences and key components that make them worthy of inclusion. Many of the pioneer voices of Gothic Studies, as well as other key critics of the field, have all contributed new essays to this volume, including David Punter, Jerrold Hogle, Karen F. Stein, Marie Mulvey-Roberts, Mary Ellen Snodgrass, Tony Magistrale, Don D\'Ammassa, Mavis Haut, Walter Rankin, James Doig, Laurence A. Rickels, Douglass H. Thomson, Sue Zlosnik, Carol Margaret Davision, Ruth Bienstock Anolik, Glennis Byron, Judith Wilt, Bernice Murphy, Darrell Schweitzer, and June Pulliam. The guide includes a preface by one of the world\'s leading authorities on the weird and fantastic, S. T. Joshi. Sharing their knowledge of how traditional Gothic elements and tensions surface in a changed way within a contemporary novel, the contributors enhance the reader\'s dark enjoyment, emotional involvement, and appreciation of these works. These essays show not only how each of these novels are Gothic but also how they advance or change Gothicism, making the works both irresistible for readers and establishing their place in the Gothic canon. ', '2011', '', 'English', '', 'Includes bibliographical references and index. ', '', 'ISBN:9780810877283 (hbk.) ;ISBN:0810877287 (hbk.) ;ISBN:9780810877290 (ebk.) ;ISBN:0810877295 (ebk.) ', '', '21134184530002061 ', 'https://images-na.ssl-images-amazon.com/images/I/41H3LDQ93oL._SX313_BO1,204,203,200_.jpg', 0),
('OAEB0004', 'Close the gap : National Indigenous Health Equality targets : outcomes from the National Indigenous Health Equality Summit Canberra, March 18-20, 2008.', 'National Indigenous Health Equality Summit (2008 : Canberra, A.C.T.)', 'Aboriginal Australians -- Government policy;\r\nAboriginal Australians -- Health and hygiene;\r\nAboriginal Australians -- Social conditions;\r\nEquality -- Australia', '', 'Sydney : Human Rights and Equal Opportunity Commission ', '', '', '', '\"On 20 December 2007, the Council of Australian Governments (COAG) agreed to a partnership between all levels of government to work with Indigenous1 communities to achieve the target of \'closing the gap\' on Indigenous disadvantage; and notably, to close the 17-year gap in life expectancy within a generation, and to halve the mortality rate of Indigenous children within ten-years.\"', '2008', '', 'English', '', '\"March 2008\" \r\nIncludes bibliographical references. \r\nSystem requirements: Adobe Acrobat for viewing pdf files ', '', '', 'Close the gap : outcomes from the National Indigenous Health Equality Summit, Canberra, March 18-20, 2008 ', '21115067840002061 ', 'https://i.imgur.com/ki2pnMG.png', 0),
('OAEC0003', 'Delinquent-prone communities / Don Weatherburn, Lind Bronwyn', 'Don Weatherburn [Weatherburn Donald James]\r\nBronwyn Lind', 'Juvenile delinquency -- New South Wales;\r\nJuvenile delinquency;\r\nCrime -- Economic aspects;\r\nCrime;\r\nJuvenile delinquents -- Family relationships -- New South Wales;\r\nJuvenile delinquents -- Family relationships;\r\nCommunity life', '', 'Cambridge ; New York : Cambridge University Press ', 'Cambridge criminology series ', '', 'x, 211 p. : ill. ; 23 cm.. ', '\"Our contention is that economic and social stress create fertile conditions for the development of crime-prone communities, not because they drive otherwise law-abiding people into crime but because they are corrosive of the quality of parenting in a way which renders juveniles more susceptible to delinquent peer influence.\" - page 3. ', '2006', '1st digitally printed pbk. version.. ', '', '', 'Includes bibliographical references (p. 189-206) and index. ', '', 'ISBN:9780521026970 ', '', '21135285950002061 ', 'http://i.ebayimg.com/images/i/381469036004-0-1/s-l1000.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `OA_collections_Images`
--

CREATE TABLE `OA_collections_Images` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `OA_collections_Images`
--

INSERT INTO `OA_collections_Images` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('OAI0001', 'If your kid feels hot with the flu get to the fever clinic', '', 'Queensland Health -- Posters;\r\nAboriginal Australians -- Health and hygiene -- Posters;\r\nTorres Strait Islanders -- Health and hygiene -- Posters;\r\nInfluenza -- Queensland -- Prevention -- Posters', '', 'Brisbane,Qld. : Queensland Health ', 'Keep the flu off you ', 'One of a series of \"Keep the Flu Off You\" posters by Queensland Health\'s, Resources for Aboriginal and Torres Strait Islanders. ', '1 poster : col. ; 42 x 30 cm.. ', '', '2009', '', 'English', '', '', '', '', '', '21117994900002061 ', 'https://i.imgur.com/ki2pnMG.png', 0),
('OAI0002', 'Custard new single out now, Flanelette, Rockfish Anna, Singlette.', '', 'Custard (Musical group) -- Posters;\r\nCustard (Musical group) -- Performances -- Posters;\r\nRock concerts -- Queensland -- Brisbane -- Posters', '', 'Australia : RA? ', '', 'Poster features graphic (male and female \"superhero\" cartoon figures) in yellow and black, \"Custard\" in yellow and orange (flame style lettering), black and white text on red background, includes Chinese characters. ', '1 poster : col. ; 72 x 48 cm.. ', '', '1993', '', 'English', '', 'At upper right-hand corner of poster: RA [record company logo]. \r\nAt base of poster: (Handwritten) \"Roxy Feb 11th\". ', 'A digital copy is available at http://hdl.handle.net/10462/deriv/252598 ', '', '', '21122147900002061 ', 'https://i.imgur.com/7aFIniw.jpg', 0),
('OAI0003', 'The phonetic alphabet Queensland.', 'Gillian Miles Learning Skills for Children.', 'English language -- Alphabet -- Study and teaching (Primary);\r\nEnglish language -- Alphabet -- Posters', '', 'St. Ives, N.S.W. : Gillian Miles Learning Skills for Children ', '', '', '1 poster : col. ill. ; 68 x 50 cm.. ', '', '2006', '', 'English', '', '\"Queensland beginners fonts\"--at base of poster.', '', 'ISBN:1920926003 ', '', '21119492990002061 ', 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/mid/9780/9579/9780957920279.jpg', 0),
('OAI0004', 'Blockade the Stock Exchange business is booming : capitalism blows me away.', ' Inkahoots.', 'Anti-globalization movement -- Queensland -- Brisbane -- Posters;\r\nProtest movements -- Queensland -- Brisbane -- Posters', '', 'Newstead, Qld. : Inkahoots ', '', '', '1 poster : pink &w., 53 x 38 cm. ', 'Poster advertising rally or blockade 1 May, 2001. Australian Stock Exchange, Eagle St. Brisbane 7 am Tues. May 1. 2001 ', '2001', '', 'English', '', 'Design: Inkahoots. \r\nAt head of title: M1 : 01/05/01 : 7AM ', 'A digital copy is available at http://hdl.handle.net/10462/deriv/28183 ', '', 'Business in booming : capitalism blows me away ', '21115686140002061 ', 'https://kathyetzblog.files.wordpress.com/2017/04/c7be253895dafed03cac0d2998ea2220-1000x1000x11.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `OA_collections_Website_Title`
--

CREATE TABLE `OA_collections_Website_Title` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `OA_collections_Website_Title`
--

INSERT INTO `OA_collections_Website_Title` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('OAWT0001', 'D.E.S.I.G.N. / by Ewa Solarz ; illustrated by Aleksandra & Daniel Mizieliński ; translated by Elżbieta Wójcik-Leese.', 'Ewa. Solarz\r\nAleksandra Mizieliński ; Daniel Mizieliński', 'Design -- History -- Juvenile literature;\r\nDesigners -- Juvenile literature;\r\nHouse furnishings -- Design -- Juvenile literature', '', 'Wellington, N.Z. : Gecko Press ', '', '', '163 p. : ill. ; 21 cm..', 'The story of design in a nutshell D.E.S.I.G.N. is a fascinating review of 69 of the most innovative household items from the past 150 years - from the classic to the most crazy. These are icons of design from the most eminent designers in the world, from the \'Le Corbusier\' chair by Philippe Starck, to the \'Puddle Vase\' by Aalto. Through light and witty descriptions, colourful anecdotes and bold illustrations, D.E.S.I.G.N entertains, amazes and teaches us about the origins, aesthetics and form of objects that surround us. Designers include: Charles Rennie Macintosh; Alvar Aalto; Arne Jacobsen; Charles & Ray Eames; Philippe Starck; Frank Gehry; and many others. Designs span 1859 to 2009. Objects include: chairs; tables; beds; an orange juicer; shelves and storage; a bath; lights; and much more. ', '2011', '', 'English', '', 'Translated from Polish. ', '', 'ISBN:9781877467837 (hbk.) ;ISBN:1877467839 (hbk.) ', '', '21137300540002061 ', 'http://www.polishculture.org.uk/fileadmin/_processed_/9/c/csm_design_cover_small_640d532f09.jpg', 0),
('OAWT0002', 'Financial accounting / John Hoggett ... [et al.].', 'John Hoggett 1948-', 'Accounting;\r\nAccounting -- Australia', '', 'Milton, Qld. : John Wiley & Sons ', '', '', 'xxii, 911 p. : ill. ; 28 cm.. ', '\"This new edition illustrates the applications of accounting and explains the role of accounting in business decision making. Accordingly, information on the accounting process and the regulatory environment has been thoroughly updated in line with recent changes to AIFRSs and the Framework as per International Accounting Standards Board developments.\"--Provided by publisher. ', '2009', '7th ed.. ', 'English', '', 'Previous ed.: 2006. \r\nIncludes index. ', '', 'ISBN:9780470816783 (pbk.) ', '', '21117935790002061 ', 'http://images.amazon.com/images/P/0470816783.01.MZZZZZZZ.jpg', 0),
('OAWT0003', 'Math and art : an introduction to visual mathematics / Sasho Kalajdzievski ; in collaboration with R. Padmanabhan.', 'Sasho. Kalajdzievski\r\nR Padmanabhan (Ranganathan), 1938-', 'Design;\r\nGeometry in art;\r\nGeometry', '', 'Boca Raton : CRC Press ', '', 'Euclidean Geometry -- The Five Axioms of Euclidean Geometry -- Ruler and Compass Constructions -- The Golden Ratio -- Fibonacci Numbers -- Plane Transformations -- Plane Symmetries -- Plane Symmetries, Vectors, and Matrices -- Groups of Symmetries of Planar Objects -- Frieze Patterns -- Wallpaper Designs and Tiling of the Plane -- Tilings and Art -- Similarities, Fractals, and Cellular Automata -- Similarities and Some Other Planar Transformations -- Complex Numbers (Optional) -- Fractals: Definition and Some Examples -- Julia Sets -- Cellular Automata -- Hyperbolic Geometry -- Non-Euclidean Geometries: Background and Some History -- Inversion -- Hyperbolic Geometry -- Some Basic Constructions in the Poincaré Model -- Tilings of the Hyperbolic Plane -- Perspective and Some Three-Dimensional Objects -- Perspective -- Mathematics of Perspective Drawing: A Brief Overview (Optional) -- Regular and Other Polyhedra -- Sphere, Cylinder, Cone, and Conic Sections -- Geometry, Tilings, Fractals, and Cellular Automata in Three Dimensions -- Topology -- Homotopy of Spaces: An Informal Introduction -- Two-Manifolds and the Euler Characteristic -- Nonorientable Two-Manifolds and Three-Manifolds. ', 'xv, 254 p. : ill. (some col.) ; 26 cm. + 1 CD-ROM (4 3/4 in.). ', '', '2008', '', 'English', '', 'Includes index. \r\nIncludes bibliographical references and index. ', '', 'ISBN:9781584889137 (alk. paper) ', '', '21134274900002061 ', 'https://images.gr-assets.com/books/1348975540l/4495424.jpg', 0),
('OAWT0004', 'The ancient Bing-fa martial arts strategy the science of personal power / by Sun Tzu & Gary Gagliardi.', 'Sun-tzu, 6th cent. B.C.\r\nGary Gagliardi', 'Martial arts;\r\nMilitary art and science -- China -- Early works to 1800;\r\nHand-to-hand fighting, Oriental', '', 'Seattle, Wash. : Science of Strategy Institute ', '', '', '189 p. ill. ; 24 cm.. ', 'Includes index. ', '2006', '', 'English', '', '', '', 'ISBN:1929194382 (hbk.) ;ISBN:9781929194384 (hbk.) ', '', '21109212170002061 ', 'https://images-na.ssl-images-amazon.com/images/I/51g1qSH0q7L._SX358_BO1,204,203,200_.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Sample table`
--

CREATE TABLE `Sample table` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `SLQ_collections_Books`
--

CREATE TABLE `SLQ_collections_Books` (
  `ID` varchar(254) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(24) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `SLQ_collections_Books`
--

INSERT INTO `SLQ_collections_Books` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('SLQB0001', 'Information technology/Roger Carter', 'Roger Carter 1939-', 'Information techonology; Computer science', '', 'Oxford,UK : Made Simple', 'Made Simple boks', '', 'ix, 169 p. : ill;25cm', '', '1996', '', 'English', '', 'Includes index', '', 'ISBN:0750626771', '', '21137164230002061', 'https://pictures.abebooks.com/isbn/9780750636575-us-300.jpg', 0),
('SLQB0002', 'Information communication technology at university : skills for success/Greg Shaw.', 'Gregory.Shaw', 'Information technology; Information technology -- Problems,exercise,etc', '', 'Darwin, N.T : Charles Darwin University Press', '', '1. Using computer for learning at university and TAFE -- 2.Introduction to information communication technology(ICT)-- 3. Internet $ email-- 4. Word processing -- 5. Spreadsheets -- 6. Packaging your information -- 7. Integrating computer applications -- 8. Tools: Web 2.0 and other tools -- Endnotebut not the final word.', '229 p. : ill. ; 25cm.', '', '2010', '3rd ed..', 'English', '', 'Spiral binding.\r\nPrevious ed.:2009.', '', 'ISBN:9780980665031(pbk.)', '', '21118303790002061', 'http://t2.gstatic.com/images?q=tbn:ANd9GcS9vp0FP6aJVo4y8iG8hUiMGkVLFn5M3J-U_HaiRll5-duTgbWQ', 0),
('SLQB0003', 'Anime', 'Colin, Odell Michlle Le Blanc', 'Animated films -- Japan; Electronic books', 'Access available for SLQ members.', 'Herts: Oldcastle Books', '', 'Cover -- Copyright -- Dedication -- Acknowledgements -- Contents -- Introduction -- Glossary-- 1. Key Anime Creators -- 2. A Selection of Anime -- Further Reading -- References -- Index -- Moretitles from Kamera Books.', '1 online resource(161 pages)', 'A complete overview of the art form, from the coauthors of Studio GhibliThis guide to anime offers an overview of the art form, looking at its development in Japan and its export to other cultures. It includes a history of Japanese animation from early examples to the relaunch of animation as a viable commercial entity and its enormous rise in popularity after World War II. The difference between manga and anime is explained, and a breif history of manga is offered, including its development from traditional art from to massive commercial success with millions of readers in Japan and worldwide. Odell and Le Blanc also consider anime style and genres, its market and importance in Japanese culture and its perception in the West, including controversy, such as criticisms of sex and violence in anime that affect other national markets, including the UK(notably Urotsukidoji) and the U.S.', '2014', '', 'English', '', '', '', 'ISBN:9781842435892', '', '21206540400002061', 'https://images-na.ssl-images-amazon.com/images/I/41-m4tPaRjL.jpg', 0),
('SLQB0004', 'Science', 'Korean Overseas Information Service', '', '', 'Seoul', 'Korea background series', '', '95 p.;21cm.', '', '1973', '', 'English', '', '', '', '', '', '211268575300002061', 'https://oup.com.pk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/9/7/9780199060498_1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `SLQ_collections_DatabaseTitle`
--

CREATE TABLE `SLQ_collections_DatabaseTitle` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `SLQ_collections_DatabaseTitle`
--

INSERT INTO `SLQ_collections_DatabaseTitle` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('SLQDT0001', 'Directory of Australian associations', 'Crown Content Pty Ltd.', 'Associations, institutions, etc -- Australia -- Directories', 'Access available for SLQ members ', 'Melbourne : Crown Content Pty Ltd. ', '', '', '', 'The ultimate guide to Australian associations. With more than 5,500 entries the Directory of Australian Associations covers national and state associations, foundations, marketing bodies, institutes and committees. Also included are international associations with branches in Australia. ', '2003', '', 'English', '', 'Title from database search page (viewed 6/07/10) \r\nMode of access: World Wide Web. ', 'Also published in print. ', '', 'Directory of Australian associations live \r\nDAA live ', '61150843440002061 ', 'http://connectweb.com.au/imagegen.ashx?width=161&image=/media/85704/daa_flat_cover__2_.jpg', 0),
('SLQDT0002', 'Lynda.com', 'Lynda.com (Firm)', 'Computer software -- Web-based instruction;\r\nComputer animation -- Web-based instruction;\r\nApplication software -- Web-based instruction;\r\nBusiness -- Computer programs -- Web-based instruction;\r\nProject management -- Web-based instruction;\r\nWeb sites -- Authoring programs -- Web-based instruction;\r\nWeb sites -- Design -- Web-based instruction;\r\nSound -- Recording and reproducing -- Web-based instruction;\r\nPhotography -- Digital techniques -- Web-based instruction;\r\nImage processing -- Digital techniques -- Web-based instruction;\r\nVocational education -- Web-based instruction;\r\nComputer-assisted instruction', 'Access available for SLQ members ', 'Carpinteria, CA : lynda.com. ', '', '', '', 'Lynda.com is a constantly growing library of more than 1400 courses and 82,000 videos in streaming video format, and new material is added every week. Courses are offered at different skill levels in over 140 specialties. Subjects covered range from 3D + Animation; Audio; Business including Office and Google software; Design; Developer; Photography and Video; and Web and social media. Videos use screenshots, narration, live action, smart boards, charts and graphics, audio and include captioning. ', '2002', '', 'English', '', 'Title from home page (viewed April 22, 2013) \r\nLynda.com was founded by Lynda Weinman and Bruce Heavin in 1995; Online training library became available in 2002. \r\nSystem requirements: Apple QuickTime 7.5, MS Windows Media Player 10+ and Adobe Flash Player 9+ for PCs ; QuickTime 7.5.5 with Safari for Macs. \r\nMode of access: World Wide Web. ', '', '', '', '61152455300002061 ', 'http://s3.amazonaws.com/libapps/accounts/51774/images/Lynda.jpg', 0),
('SLQDT0003', 'Civil procedure Queensland.', 'LexisNexis (Firm), issuing body.', 'Civil procedure -- Queensland -- Databases;\r\nOnline databases', 'Access available for SLQ members for private research and study only. ', 'Chatswood, NSW : LexisNexis ', '', '', '1 online resource. ', 'Civil Procedure Queensland is the definitive work for practice in the civil courts of Queensland. For actions brought or defended in the Supreme, District and Magistrates Courts, this database provides all the essential information required in an easy to use practice orientated format. Includes Civil Procedure Qld District & Magistrates Courts Practice, Civil Procedure Qld Supreme Court Practice and Civil Procedure Qld Uniform Civil Procedure Rules. ', '1999', '', 'English', '', 'Title from database screen (viewed on June 14, 2016). ', 'Civil Procedure Qld District & Magistrates Courts Practice \r\nCivil Procedure Qld Supreme Court Practice \r\nCivil Procedure Qld Uniform Civil Procedure Rules ', '', 'Civil procedure Qld ', '51196856970002061 ', 'http://legal.thomsonreuters.com.au/Images/product/AU/120840.jpg', 0),
('SLQDT0004', 'TumbleBooks', '', 'Electronic books;\r\nOnline databases;\r\nChildren\'s literature -- Computer network resources;\r\nPuzzles -- Computer network resources', 'Access available for SLQ members and onsite. ', 'Toronto, Ontario : Tumblebooks ', '', '', '1 online resource. ', 'TumbleBooks are a database specially for children. Tumblebooks are created by taking existing picture books, adding animation, sound, music and narration to produce an electronic picture book which you can read, or have read to you. Also included in the database are videos, language and learning and puzzles and games. ', '2003', '', 'English', '', '', '', '', '', '61186262390002061 ', 'http://pcpl21.org/wp-content/uploads/2014/10/tumblebookslibrary.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `SLQ_collections_ebooks`
--

CREATE TABLE `SLQ_collections_ebooks` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `SLQ_collections_ebooks`
--

INSERT INTO `SLQ_collections_ebooks` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('SLQEB0001', 'Information technology and the conduct of research the user\'s view/ report of the Panel on Information Technology and the Conduct of Research....[et al.].', 'Panel on Information Technology and the Conduct of Research(U.S.)', 'Information technology -- Scientific applications; Research -- Technologyical innovations; Electronic books', 'Access available for SLQ members. SLQ loging & ProQuest ebrary account required.', 'Washington, D.C : National Academy Press', '', '', 'xiv, 76 p : col.ill.', '', '1989', '', 'English', '', 'Includes bibliographical references and index.', '', '', '', '21181215200002061', 'https://www.nap.edu/cover/9829/450', 0),
('SLQEB0002', 'Managing Corporate Design Best Practices for In-House Graphic Design Departments', 'Peter L. Phillips', 'Business;\nLeadership;\nManagement;\nElectronic books', 'Access available for SLQ members. Onsite login required.', 'New York : Allworth Press', '', 'Cover; Title Page; Copyright; Dedication; Contents; Introduction; Acknowledgements; Chapter 1: Design Management; \"Developing a Framework for Design Management\"; How the Most Successful Design Managers Describe Design Management; So, What\'s My Answer to the Question, \"What Do You Do?\"; Chapter 2: Design Managers Must Be Able to Speak the Language of Business; Words to Avoid in a Corporate Environment; Communicating in Business Terms; Chapter 3: The Model; The Value You Offer; Why Am I Not Invited to Higher Level Strategy Meetings?; Paradoxical Leadership: A Journey with John Tyson \r\nAccountability Versus ResponsibilityAn Exercise to Get You Started; Recognize the Business Role of Graphic Design; Another Worthwhile Exercise; Mutually Valuable Relationships; Use the Organization Chart Exercise Again; Implementing Efficient Work-With Processes; Partnering on a Global Level; Making Change Possible; Should In-House Graphic Design Groups Charge a Fee for Design Work?; Get Out into the Real World; Credibility and Trust; Chapter 4: Determining the Real Work of the Function; Making a Proposal to Hire More In-House Staff; Chapter 5: Maintaining the Momentum \r\nChapter 6: The Collaborative Design BriefClient or Partner?; Co-Ownership; What Level Should the Co-Owners Be?; Getting Started; Rfps Versus Design Briefs; What Must Be in a Proper Design Brief?; What Are the Prime Objectives of the Project?; Why Is this Project Necessary, and Why Is It Necessary Right Now?; What Business Outcomes Are Expected from This Project?; Identify Key Stakeholders; Some Essential Elements to Include in the Design Brief; It\'s Like Stir-Fry Cooking; Design Is Only One Ingredient of a Successful Business; Partners Need to Understand Each Other \r\nThe Design Brief Project TeamFaq; Summary: Ten Basic Rules for the Design Brief Process; Chapter 7: An Example of a Design Brief; Chapter 8: Managing an In-House Graphic Design Staff; Graphic Design Professionals Are Unique; The Design Process; The Climate Needed for In-House Graphic Design; Making Sure Your Graphic Design Staff Is \"On-Board\" with Becoming a Core Strategic Competency; The Importance of Being a Mentor; Professional Development; Chapter 9: Motivating your Graphic Design Staff; You Must Understand Personalities; A Few General Thoughts about Motivation; Physical Environment \r\nChapter 10: Scheduling the WorkloadThe Unknown Projects; Chapter 11: Hiring and Terminating Employees; Structuring the Interview; Portfolio Review; Terminating an Employee; Chapter 12: The Annual Performance Review; A Few Guidelines; Chapter 13: Presenting Design Solutions for Approval; The Design Brief as an Outline for Approval Presentations; Target Audience Testing; Understanding the Final Approver; Subjective Comments Versus Objective Discussion; How Many Graphic Design Solutions Do You Present for Approval?; Anticipating Objections; What If You Can\'t Make the Presentation Yourself? \r\nWhat If You Are Just Not Comfortable Making Presentations to Senior Managers?', '1 online resource (310 p.). ', 'Peter L. Phillips is an internationally recognized expert in developing corporate design management strategies and programs. He has had more than thirty years\' experience as a senior corporate design manager, a consultant for many Fortune 500 companies, and a lecturer. He is the author of several books, including Creating the Perfect Design Brief: How to Manage Design for Strategic Advantage (Allworth Press). He lives in Marblehead, Massachusetts.', '2015', '', 'English', '', 'Description based upon print version of record. ', '', 'ISBN:9781621534716 ', '', '21167016010002061', 'https://images-na.ssl-images-amazon.com/images/I/51pkDNHCakL._SY344_BO1,204,203,200_.jpg', 0),
('SLQEB0003', 'Management / Brian Tracy.', 'Brian Tracy', 'Management;\r\nElectronic books', 'Access available for SLQ members. SLQ login & ProQuest ebrary account required. ', 'Saranac Lake, New York : AMACOM', '', '', '1 online resource (124 pages).', '', '2014', '', 'English', '', 'Includes bibliographical references and index. ', '', 'ISBN:9780814434208 (e-book) ', '', '21182466050002061 ', 'https://images-na.ssl-images-amazon.com/images/I/41Sj%2BbJOg0L._SX343_BO1,204,203,200_.jpg', 0),
('SLQEB0004', 'A life worth living contributions to positive psychology / edited by Mihaly Csikszentmihalyi and Isabella Selega Csikszentmihalyi.', ' Mihaly Csikszentmihalyi ; Isabella Selega Csikszentmihalyi ; ebrary, Inc', 'Positive psychology;\r\nElectronic books', 'Access available for SLQ members. SLQ login & ProQuest ebrary account required. ', 'Oxford ; New York : Oxford University Press ', 'Series in positive psychology \r\nSeries in positive psychology. ', 'Positive psychology traditions in classical European psychology / Csaba Pléh -- The Values in Action (VIA) classification of strengths / Christopher Peterson -- Positive personality development : approaching personal autonomy / Dmitry Leontiev -- Spirituality : recent progress / Robert A. Emmons -- The broaden-and-build theory of positive emotions / Barbara L. Fredrickson -- Benefits of emotional intelligence / Daisy D. Grewal and Peter Salovey -- Strategies for achieving well-being / Jane Henry -- Adaptive resources in later life : tenacious goal pursuit and flexible goal adjustment / Jochen Brandtstädter -- The impact of subjective experience on the quality of life : a central issue for health professionals / Antonella Delle Fave -- What works makes you happy : the role of personal goals in life-span development / Jari-Erik Nurmi and Katariina Salmela-Aro -- Materialism and its alternatives / Tim Kasser -- Getting older, getting better? recent psychological evidence / Kennon Sheldon -- Afterword: breaking the 65 percent barrier / Martin E. P. Seligman. ', 'ix, 253 p. : ill..', '', '2006', '', 'English', '', 'Includes bibliographical references and indexes.', '', '', '', '21184491860002061 ', 'https://global.oup.com/academic/covers/pop-up/9780195176797', 0);

-- --------------------------------------------------------

--
-- Table structure for table `SLQ_collections_Images`
--

CREATE TABLE `SLQ_collections_Images` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `SLQ_collections_Images`
--

INSERT INTO `SLQ_collections_Images` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('SLQI0001', 'Get the net', ' QANTM Australia CMC. Youthworks', 'QANTM Australia CMC. Youthworks -- Posters;\nInteractive multimedia -- Publishing -- Posters;\nInternet publishing -- Posters', '', 'Brisbane, Qld. : QaNTm Youthworks ', '', '', '1 poster (double-sided): col. ; 42 x 30 cm.. ', 'Poster advertising the services of Youthworks, a unit of QANTM Australia CMC Pty. Ltd, dedicated to the study and teaching of multimedia and internet publishing for youth seeking to further thier career and skills.', '199?', '', 'English', '', '', '', '', '', '21133063560002061', 'https://i.pinimg.com/236x/53/99/c6/5399c60a25c0459de8829139cfde69fd.jpg', 0),
('SLQI0002', 'Mannequin modelling a wedding dress in a fashion parade at Lennon\'s Hotel, Brisbane, 1955', 'Unidentified\r\nTruth (Brisbane, Qld.)', 'fashion models; fashion parades; dresses; wedding dresses; women\'s clothing & accessories; Brisbane (Qld.)', '', 'John Oxley Library, State Library of Queensland', '', '', 'Digital format: image/jpeg ; Original format: copy print : b&w ', 'Model wearing a bridal dress in the Paul\'s fashion parade at Lennon\'s Hotel, Brisbane, in 1955. Women, seated at tables and standing, are watching the parade', '1995', '', '', '', '', '', 'Negative number: 185440 ', '', '201955 ', 'https://i.pinimg.com/originals/58/7b/db/587bdb441fc0ae2fc3a6e710572c3d40.jpg', 0),
('SLQI0003', 'Arts on radio photography Richard Harris ; design Antart.', 'Richard Harris 1950- ; Australian Broadcasting Corporation ; ABC Radio (Australia) ; Australian Broadcasting Corporation. Radio National.', 'Australian Broadcasting Corporation -- Posters;\r\nABC Radio (Australia) -- Periodicals;\r\nAustralia Broadcasting Commission -- Periodicals;\r\nRadio programs -- Australia -- Posters;\r\nRadio programs -- Australia -- Periodicals;\r\nRadio broadcasting -- Queensland -- Periodicals', '', 'Artamon, N.S.W : ABC Enterprises for the Australian Broadcasting Corporation ', '', 'Verso of poster lists details of programs and regular features broadcast on Radio National.', '1 poster : turquoise and purple ; 36 x 51 cm..', 'Lettering in silver overlays the main image of a cliff and foreshre merging in to a blue sea against the background of a turquoise sea. \r\n', '1994', '', 'English', '', 'Poster promoting the range of programmes aired on ABC Radio National, with details of their frequencies.', 'ABC Radio : for art\'s sake ', '', '', '21106324660002061', 'http://www.weddingrelated.co.uk/Images/CompanyImages/Wedding%20Listing/Richard-Harris-Photography-1061242-4.jpeg', 0),
('SLQI0004', 'Whatever happened to...? / [design and linocut by Mike Hudson and Jadwiga Jarvis].', 'Mike Hudson\nJadwiga Jarvis artist. ; Wayzgoose Press issuing body.', 'Broadsides -- New South Wales -- Katoomba -- Specimens;\nPrinting -- New South Wales -- Katoomba -- Specimens;\nTechnology -- Social aspects', '', 'Katoomba, N.S.W. : Wayzgoose Press ', 'Broadside ; 40 \r\nBroadside (Wayzgoose Press) ; 40. ', '', '1 broadside : colour ; 70 x 50 cm..', 'Handset and printed broadside on Magnani Incisioni 220gsm paper which features a large image of a a blue hand (reminiscent of the \"like\" button on Facebook) giving a thumbs down above a series of garbage bins in which can be seen numerous yellow rectangles, also appearing below the bins, on which are written the names of things we have lost as a result of new technology. ', '2014', '', 'English', '', 'Caption title. \nEdition of 10 signed and numbered copies. ', '', '', '', '21133038380002061', 'https://i.pinimg.com/736x/65/8a/d1/658ad16860959e58608fa23c3284b64f--michael-keaton-michael-okeefe.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `SLQ_collections_Website_Title`
--

CREATE TABLE `SLQ_collections_Website_Title` (
  `ID` varchar(24) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `Subjects` text NOT NULL,
  `Access_restrictions` text NOT NULL,
  `Publisher` text NOT NULL,
  `Series` text NOT NULL,
  `Scope_and_content` text NOT NULL,
  `Description` text NOT NULL,
  `Summary` text NOT NULL,
  `Date` varchar(4) NOT NULL,
  `Edition` text NOT NULL,
  `Language` varchar(254) NOT NULL,
  `Target_audience` text NOT NULL,
  `Notes` text NOT NULL,
  `Other_title` text NOT NULL,
  `Identifier` text NOT NULL,
  `More_title_information` text NOT NULL,
  `Record_num` varchar(254) NOT NULL,
  `Link` text NOT NULL,
  `viewcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `SLQ_collections_Website_Title`
--

INSERT INTO `SLQ_collections_Website_Title` (`ID`, `Title`, `Author`, `Subjects`, `Access_restrictions`, `Publisher`, `Series`, `Scope_and_content`, `Description`, `Summary`, `Date`, `Edition`, `Language`, `Target_audience`, `Notes`, `Other_title`, `Identifier`, `More_title_information`, `Record_num`, `Link`, `viewcount`) VALUES
('SLQTW0001', 'BHP Billiton skills.net roadshow Queensland', 'State Library of Queensland.\r\nBHP Billiton.', 'State Library of Queensland;\r\nInternet searching -- Study and teaching -- Queensland;\r\nWeb search engines -- Study and teaching -- Queensland;\r\nElectronic mail systems -- Study and teaching -- Queensland;\r\nWeb sites -- Design -- Study and teaching -- Queensland;\r\nLibraries and the Internet -- Queensland', '', 'Brisbane : State Library of Queensland ', 'PANDORA electronic collection ', 'These pages, archived from the Library\'s Web site, describe the BHP Billiton skills.net roadshow Queensland. The Roadshow delivers free Internet training to regional, rural and remote communities throughout the State, in a partnership between the State Library, BHP Billiton, Telstra Country Wide and IPEX Information Technology Group. ', '', '', '2003', '', 'English', '', 'Title from title screen (viewed on Aug. 25, 2005) \r\nMode of access: World Wide Web.', '', '', '', '21138318980002061 ', 'https://www.prosafetytraining.com.au/pst/wp-content/uploads/gravity_forms/2-74ea9757063866adaa4a0b5aef0ddc03/2017/09/BHP-Biliton.jpg', 0),
('SLQTW0002', 'Nurse endoscopy in Queensland / Nursing and Midwifery Office, Queensland.', 'Queensland Health. Nursing and Midwifery Office,', 'Endoscopy -- Queensland;\r\nNursing models -- Queensland', '', 'Herston, Queensland : Nursing and Midwifery Office, Queensland ', 'PANDORA electronic collection ', '', '1 online resource..', 'Website of the Nursing and Midwifery Office, Queensland, providing details of the internationally successful nurse endoscopy model which is being adopted in Queensland to address the rapidly growing demand for endoscopy services. Under the model, nurses carry out endoscopic procedures within collaborative multidisciplinary teams supported by medical staff. Includes an overview of the implementation of the model, credentialling and training pathways. ', '2014', '', 'English', '', 'Title from title screen (viewed on January 19, 2015) \r\nIncludes bibliographical references. \r\nMode of access: Available online (as at 19/01/15) at: http://www.health.qld.gov.au/nmoq/optimisingnursing/endoscopy.asp ', '', '', '', '21133286520002061 ', 'https://www.google.com.au/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&ved=0ahUKEwimudTbx4nXAhVKuY8KHfOpA2sQjBwIBA&url=https%3A%2F%2Fwww.health.qld.gov.au%2F__data%2Fassets%2Fimage%2F0034%2F667249%2Fbtn-career-structure.jpg&psig=AOvVaw37cvU7xB5Mv4610V7N-R-a&ust=1508944773022110', 0),
('SLQTW0003', 'The programming historian.', '', 'Digital humanities;\r\nElectronic information resources -- Management;\r\nPython (Computer program language)', 'Adheres to a \'Gold\' open access model of publishing; record is made freely available without subscription fee or restrictions on access. ', 'Place of publication not identified : Editorial Board of the Programming Historian ', '', 'About -- Lessons -- Contribute -- Project team -- Research -- Blog -- Español. ', '1 online resource. ', 'Offers novice-friendly, peer-reviewed tutorials that help humanists learn a wide range of digital tools, techniques, and workflows to facilitate their research.', '2012', '[2nd edition]', 'English', '', 'Originally written as a series of (mostly) Python lessons. \r\nThis work is licensed under Creative Commons Attribution 2.0 Generic. \r\nRefereed/Peer-reviewed \r\nMode of access: World Wide Web. ', '', 'ISSN:2397-2068 ', '', '51192654310002061 ', 'https://programminghistorian.org/images/Launch-PH-Spanish/Launch-PH-Spanish.jpg', 0),
('SLQTW0004', 'Kidsafe Queensland.', 'Kidsafe Queensland, compiler.', 'Kidsafe Queensland;\r\nChildren\'s accidents -- Queensland -- Prevention;\r\nChildren -- Health and hygiene -- Queensland;\r\nChildren -- Wounds and injuries -- Queensland;\r\nTraffic safety and children -- Queensland;\r\nPlaygrounds -- Queensland -- Safety measures', '', 'Herston, Qld : Kidsafe Queensland ', 'PANDORA electronic collection ', '', '1 online resource : colour illustrations.. ', 'Website of Kidsafe Queensland, a community organisation dedicated to the prevention of unintentional injury and injury death in children from birth to 16 years of age, which provides resources, information and education to parents, carers, early childcare workers and others who care for children, on the hazards children face and what can be done to prevent these injuries occurring and minimise the severity of the injury. The website provides information on road safety, home safety, school safety and playground safety, details about the Organisation and the services provided, campaigns, news releases, and publications including fact sheets, brochures, posters and newsletters, events and an online shop. ', '', '', 'English', '', 'Title from title screen (viewed on July 24, 2014) \r\nMode of access: Available online (as at 24/07/14) at: http://www.kidsafeqld.com.au/ ', '', '', '', '21122596490002061 ', 'https://media.apnarm.net.au/media/images/2014/06/01/kidsafe_with_kidsafe_qld_inc-232q7z69nhtjlhzo8i2_t300.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Info_collections_Books`
--
ALTER TABLE `Info_collections_Books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Info_collections_DatabaseTitle`
--
ALTER TABLE `Info_collections_DatabaseTitle`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Info_collections_ebooks`
--
ALTER TABLE `Info_collections_ebooks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Info_collections_Images`
--
ALTER TABLE `Info_collections_Images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Info_collections_Website_Title`
--
ALTER TABLE `Info_collections_Website_Title`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `OA_collections_Books`
--
ALTER TABLE `OA_collections_Books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `OA_collections_DatabaseTitle`
--
ALTER TABLE `OA_collections_DatabaseTitle`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `OA_collections_ebooks`
--
ALTER TABLE `OA_collections_ebooks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `OA_collections_Images`
--
ALTER TABLE `OA_collections_Images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `OA_collections_Website_Title`
--
ALTER TABLE `OA_collections_Website_Title`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Sample table`
--
ALTER TABLE `Sample table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `SLQ_collections_Books`
--
ALTER TABLE `SLQ_collections_Books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `SLQ_collections_DatabaseTitle`
--
ALTER TABLE `SLQ_collections_DatabaseTitle`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `SLQ_collections_ebooks`
--
ALTER TABLE `SLQ_collections_ebooks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `SLQ_collections_Images`
--
ALTER TABLE `SLQ_collections_Images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `SLQ_collections_Website_Title`
--
ALTER TABLE `SLQ_collections_Website_Title`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
