-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2017 at 12:05 PM
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
('ICB0001', 'State portraits of Australian business : a report based on the 1995 business longitudinal survey / Small Business Research Program', 'Small Business Research Program (Australia)\r\nAustralia. Office of Small Business ; Aquatech Pty. Ltd.', 'Small business -- Australia -- Statistics;\r\nSmall business -- Australia -- Longitudinal studies;\r\nBusiness enterprises -- Australia -- Longitudinal studies;\r\nBusiness enterprises -- Australia -- Statistics', '', '<Canberra : Office of Small Business> ', '', '', 'xii, 139 p. ; 25 cm.. ', '', '1998', '', 'English', '', '\'Prepared by Aquatech Pty Ltd for the Office of Small Business, Department of Workplace Relations and Small Business\' -- Verso t.p. \r\nChiefly tables. \r\nAGPS cat. no. 9801853. \r\nIncludes bibliographical references (p. 120) ', '', 'ISBN:0646335413 ', '', '21129203210002061 ', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21129203210002061 ', 0),
('ICB0002', 'Microwave and Millimeter-Wave Electronic Packaging.', 'Rick. Sturdivant', 'Electronic books', 'Access available for SLQ members', 'Norwood : Artech House ', '', 'Microwave and Millimeter-Wave Electronic Packaging -- Contents -- Preface -- 1 Introduction -- 1.1 Distributed Effects -- 1.1.1 Distributed Effects in Lumped Elements -- 1.1.2 Undesired Resonances -- 1.1.3 Transmission Lines -- 1.1.4 Dispersion Effects -- 1.1.5 Coupling and Cross-Talk Between Signal Lines -- 1.1.6 Parasitic and Grounding Concerns -- 1.2 Thermal Effects -- 1.3 First-Level Interconnects -- 1.4 Second-Level Interconnects -- 1.5 Modules -- 1.6 Conclusions -- Questions -- References -- 2 Materials -- 2.1 Electrical Parameters and Their Measurement -- 2.1.1 Dielectric Constant -- 2.1.2 Loss Tangent -- 2.1.3 Measurement of Dielectric Constants and Loss Tangents -- 2.1.4 Metal Electrical Conductivity -- 2.2 Mechanical Parameters -- 2.2.1 Thermal Conductivity -- 2.2.2 Thermal Expansion -- 2.2.3 Stress and Strain -- 2.2.4 Young\'s Modulus -- Questions -- References -- 3 Ceramic Packaging -- 3.1 History of Ceramics -- 3.2 Thin-Film Ceramics -- 3.3 Advanced Thin-Film Techniques -- 3.4 Thick-Film Ceramics -- 3.4.1 Thick-Film Paste -- 3.4.2 Squeegee -- 3.4.3 Frame -- 3.4.4 Screen and Mesh -- 3.4.5 Emulsion -- 3.4.6 Desired Metal Pattern -- 3.4.7 Ceramic Substrate -- 3.4.8 Printing Machine -- 3.4.9 Etching -- 3.4.10 Postprocessing -- 3.5 Thermally Enhanced Thick-Film Processes -- 3.6 High-Temperature Cofired Ceramic (HTCC) -- 3.6.1 Slurry -- 3.6.2 Tape Casting -- 3.6.3 Punching -- 3.6.4 Via Filling and Conductor Printing -- 3.6.5 Stacking, Pressing, and Cofiring -- 3.6.6 Postprocessing -- 3.7 Low-Temperature Cofired Ceramic (LTCC) -- Questions -- References -- 4 Laminate Packaging -- 4.1 Laminate Board Fabrication -- 4.1.1 Database Review and Acceptance -- 4.1.2 Artwork Generation -- 4.1.3 Clean Layers -- 4.1.4 Pattern and Etch -- 4.1.5 Bake-Out -- 4.1.6 Oxide Treatment of Inner Layers for Adhesion -- 4.1.7 Alignment and Lamination. \r\n4.1.8 Drill and Deburr -- 4.1.9 Through-Hole Plating -- 4.1.10 Solder Mask -- 4.1.11 Finish Plating -- 4.1.12 Silk Screen and CNC Routing -- 4.1.13 Electrical Testing and Inspection -- 4.2 Cost of Laminates -- 4.3 Laminate Circuit Board Tolerances -- 4.4 High-Performance Laminate Materials -- 4.5 Liquid Crystal Polymer -- 4.6 Laminate Multichip Modules -- 4.7 Conclusions -- Questions -- References -- 5 First-Level Interconnects -- 5.1 Wire Bond Interconnects -- 5.1.1 Wire Bond Manufacturing -- 5.1.2 Wire Bond Reliability -- 5.1.3 Wire Bond Electrical Performance and Modeling -- 5.1.4 Straight Wire Bond Between Substrates -- 5.1.5 Wire Bond Between an MMIC and Substrate -- 5.1.6 Ground Current Parasitics in Wire Bonded Circuits -- 5.1.7 Tuning Wire Bond Interconnects -- 5.1.8 Other RF Uses for Wire Bonds -- 5.2 Ribbon Bonding -- 5.3 Flip Chip Interconnects -- 5.3.1 Types of Flip Chip Interconnects -- 5.3.2 Electrical Modeling of Flip Chip Interconnects -- 5.3.3 Parasitic Modes in Flip Chip Interconnects -- 5.3.4 Thermal Concerns for Flip Chips -- Questions -- References -- 6 Second-Level Interconnects -- 6.1 Electrical Modeling of Surface-Mount Packages -- 6.2 Inductance and Capacitance Matrix Method for Package Model Extraction -- 6.3 Coupled-π Model Method -- 6.4 Hybrid Circuit Model -- Questions -- References -- 7 Modules and Motherboards -- 7.1 Proper Transmission Line Design -- 7.1.1 Conductor-Backed Coplanar Waveguide -- 7.1.2 Striplines -- 7.1.3 Microstrip Lines -- 7.2 Vias for Isolation and Grounding -- 7.3 Cavity Resonances -- Questions -- References -- 8 Transitions and 3D Packaging -- 8.1 Transitions Between Transmission Lines -- 8.1.1 CBCPW to Microstrip Transition -- 8.1.2 Cofired Ceramic Microstrip and Stripline Transition -- 8.1.3 Laminate Board Microstrip to Stripline Transition -- 8.2 Three-Dimensional Packaging. \r\n8.2.1 Stacked Substrate Solderless Interconnects -- 8.2.2 Highly Integrated Modules with Vertical Transitions -- 8.2.3 Using the Package as a Circuit Element: An Integrated 60-GHz Module -- 8.2.4 Three-Dimensional Integration by Stacking ICs and Packages -- 8.3 Conclusions -- Questions -- References -- 9 Heat Transfer -- 9.1 Heat Transfer Mechanisms -- 9.2 Amplifier Efficiency and Dissipated Thermal Power -- 9.3 Reliability and Arrhenius Equation -- 9.4 Device Junction Temperature -- 9.5 Junction Temperature with Multiple Material Layers -- 9.6 Thermal Simulations Using Spice -- 9.7 Thermal Simulation Using the Finite Difference Method -- 9.8 Conclusions -- Questions -- References -- 10 Electromagnetic Modeling -- 10.1 Quasistatic Simulation of Transmission Lines -- 10.2 Method of Moments -- 10.3 Finite Element Method -- 10.4 Finite Difference Time Domain Method -- 10.5 Mode Matching Technique -- 10.6 Integrated Methods -- 10.7 Domain Decomposition Methods -- Questions -- References -- 11 Conclusions and Future Horizons -- 11.1 The 10 Keys to Successful Packaging -- 11.1.1 Careful System Architecture and Solid Specifications -- 11.1.2 Proper Material Selection -- 11.1.3 Electrical Signal Integrity -- 11.1.4 Thermal Management -- 11.1.5 Proper Electrical Modeling -- 11.1.6 Proper Mechanical Modeling -- 11.1.7 Design for Manufacturing -- 11.1.8 Design for Testability -- 11.1.9 Production Process Transition -- 11.1.10 Proper Feedback from Field Failures -- 11.2 Future for Packaging at Microwave Frequencies -- 11.3 Drive for Lower Cost Packaging at Millimeter-Wave Frequencies -- References -- Appendix A -- A.1 Scattering Parameters -- A.2 Impedance Parameters -- Appendix B -- B.1 Multilayer Transmission Line Tool -- B.2 Physical Parameters -- B.3 Numerical Control -- B.4 Analysis -- Appendix C -- C.1 Thermal Calculator Software Tool -- About the Author. \r\nIndex. ', '1 online resource (281 pages). ', 'Packaging of electronic components at microwave and millimeter-wave frequencies requires the same level of engineering effort for lower frequency electronics plus a set of additional activities which are unique due to the higher frequency of operation. This resource presents you with the electronic packaging issues unique to microwave and millimeter-wave frequencies and reviews lower frequency packaging techniques so they can be adapted to higher frequency designs. You are provided with 30 practical examples throughout the book, as well as three free downloadable software analysis programs. ', '2014', '1st ed.. ', 'English', '', '', '', 'ISBN:9781608076987 ', '', '21206550180002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21206550180002061', 0),
('ICB0003', 'Computer methods and advances in geomechanics / edited by G.Beer, J.R.Booker & P.J.Carter', 'International Conference on Computer Methods and Advances in Geomechanics (7th : 1991 : Cairns, Qld.)', 'Computer-aided engineering;\r\nRock mechanics -- Congresses;\r\nSoil mechanics -- Data processing;\r\nEngineering geology -- Data processing -- Congresses;\r\nRock mechanics -- Data processing -- Congresses', '', 'Rotterdam : Brookfield, Vt. : Published on behalf of the International Association for Computing Methods and Advances in Geomechanics by A.A. Balkema ', '', '', '3 v. ; 25 cm.. ', '', '1991', '', 'English', '', 'Proceedings of the seventh international conference on computer methods and advances in geomechanics, Cairns, 6-10 May 1991. \r\nIncludes bibliographies and index. ', '', 'ISBN:9061911893 (set) ', '', '21116073620002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21116073620002061 ', 0),
('ICB0004', 'Computer Forensics : An Essential Guide for Accountants, Lawyers, and Managers', 'Michael. Sheetz', 'Computer crimes -- Investigation;\r\nElectronic books', 'Access available for SLQ members', 'Somerset : John Wiley & Sons, Incorporated ', '', 'Cover -- Title Page -- Copyright -- Contents -- Introduction -- Acknowledgments -- Chapter 1 A Definition of Computer Forensics -- Introduction -- Forensic Science -- History of Computer Forensics -- World Wide Web -- Hacker Community -- Conclusion -- Notes -- Suggested Reading -- Chapter 2 Basics of Computer Forensic Concepts -- Introduction -- Understanding Digital Evidence -- Input -- Storage -- Processing -- What Computer Data Is -- Output -- Conclusion -- Notes -- Suggested Reading -- Chapter 3 Preservation and Collection of Digital Evidence -- Introduction -- Rules of Evidence -- Preservation -- Collection -- Conclusion -- Note -- Suggested Reading -- Chapter 4 Analysis of Digital Evidence -- Introduction -- Forensic Analysis -- Conclusion -- Notes -- Suggested Reading -- Chapter 5 Reporting and Rendering the Opinion -- Introduction -- Preparing the Report -- Photographic Documentation -- Reporting -- Executive Summary or Abstract -- Table of Contents -- Body or Findings -- Conclusion -- Supporting Documents -- Appendixes -- Presentation -- Trial Process -- Dispute -- Complaint -- Service of Process -- Pretrial -- Trial -- Conclusion -- Suggested Reading -- Chapter 6 Computer Attacks -- Hackers and Phreakz Oh My -- Hackers: Unauthorized Use and Trespassing -- Wireless Hacking -- Malware -- Attacks from the Inside -- Conclusion -- Notes -- Suggested Reading -- Chapter 7 Computers as Tools for Evil -- Introduction -- Computers and Crime -- Identity Theft -- Concealment -- Auction Fraud and Retail Cons -- Counterfeiting and Forgery -- Prostitution -- Securities Fraud -- Conclusion -- Notes -- Chapter 8 Computer Tools and the Forensic Examination -- Introduction -- Assuming Control of the Case -- Understanding the Case -- Evaluating the Evidence -- Examining the \"Live\'\' System. \r\nCollecting Data from a Dead System -- Imaging the Drive -- Data Extraction -- Data Analysis -- Time Frame Analysis -- Hidden Data Aanalysis -- Application and File Analysis -- Ownership Analysis -- Conclusion -- Notes -- Chapter 9 Presenting Digital Evidence in Court -- Introduction -- Evidence -- Types of Evidence -- Expert Witnesses -- Legal Requirements of Evidence -- Search and Seizure -- Conclusion -- Notes -- Index.', '1 online resource (352 pages). ', 'Would your company be prepared in the event of: * Computer-driven espionage * A devastating virus attack * A hacker\'s unauthorized access * A breach of data security? As the sophistication of computer technology has grown, so has the rate of computer-related criminal activity. Subsequently, American corporations now lose billions of dollars a year to hacking, identity theft, and other computer attacks. More than ever, businesses and professionals responsible for the critical data of countless customers and employees need to anticipate and safeguard against computer intruders and attacks. The first book to successfully speak to the nontechnical professional in the fields of business and law on the topic of computer crime, Computer Forensics: An Essential Guide for Accountants, Lawyers, and Managers provides valuable advice on the hidden difficulties that can blindside companies and result in damaging costs. Written by industry expert Michael Sheetz, this important book provides readers with an honest look at the computer crimes that can annoy, interrupt--and devastate--a business. Readers are equipped not only with a solid understanding of how computers facilitate fraud and financial crime, but also how computers can be used to investigate, prosecute, and prevent these crimes. If you want to know how to protect your company from computer crimes but have a limited technical background, this book is for you. Get Computer Forensics: An Essential Guide for Accountants, Lawyers, and Managers and get prepared. ', '2015', '1st ed.. ', 'English', '', '', '', 'ISBN:9780470124024 ', '', '21206348640002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21206348640002061 ', 0);

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
('ICEB0001', 'Singing Lessons for Beginners Teach Yourself How to Sing (Free Video Available)', 'LearnToPlayMusic.com.\r\nPeter Gelling', 'School music--Instruction and study;\r\nSinging--Methods -- Juvenile;\r\nSinging;\r\nElectronic books', 'Access available for SLQ members. Onsite login required.', 'LearnToPlayMusic.com', 'Progressive Beginner', 'Cover; Publisher Info; Using This eBook; Contents; Introduction; Lesson One; Everyone Can Sing; Matching Pitches and Rhythms; Vocal Range; Timbre; The Ultimate Melodic Instrument; How We Sing; Breathing; Remember; Posture; Incorrect; Correct; Learning to Sing; Pre-Hearing Notes; Common Problems; Registers; Working With a Teacher; Breath Control; Lesson Two; Understanding Music; How to Read Music; The Treble Clef; The Treble Staff; The Quarter Note; The Four Four Time Signature; The Half Note; When to Breathe; The Whole Note; A Word About Pitch; Rests; The Half Rest; The Whole Rest \r\nThe Quarter RestThe Importance of Timing; Lesson Three; Voice Types and Ranges; How to Find Your Voice Range; The Keyboard; The Bass Clef; The Bass Staff; The Grand Staff; Matching Pitches; The Octave; Lesson Four; The Major Scale; Octave Displacement; Sol-fa Syllables; The Three Four Time Signature; The Dotted Half Note; The Eighth Note; The Dotted Quarter Note; Lesson Five; Sounds Used in Singing; Vowels; Diphthongs; The Shaping of Vowels; Ee; Ay; Ah; Oh; Oo; Consonants; Dynamics; Slurs; Phrasing and Expression; Moving Between Registers; Vibrato; Lesson Six; Sharps and Flats \r\nThe Chromatic ScaleIntervals; Keys; Key Signature of G Major; Key Signature of F Major; Relative Minor Keys; Lesson Seven; The Tie; Syncopation; The Eighth Rest; The Lead-in; First and Second Endings; Lesson Eight; The Triplet; Swing Rhythms; Interpretation and Improvisation; Sixteenth Notes; Lesson Nine; Transposing; The Six Eight Time Signature; Harmony and Chords; The C Major Chord; How Chords Relate to Scales; Arpeggios; Chord Progressions; Lesson Ten; Performing in Public; Overcoming Nerves; Eye Contact; Stage Presence and Stage Craft; Developing Your Own Style; Microphones \r\nMicrophones for Performing LiveMicrophone Technique; Studio Microphones; Warming Up; Looking After Your Voice; Approach to Practice; Listening; Recording Yourself; Glossary of Musical Terms ', '1 online resource (105 p.).', '<![CDATA[Teach yourself how to sing with our easy singing lessons for beginners.\r\n\r\n***Comes with online access to free singing videos and audio demonstrating all examples. See and hear how each one is sung by a teacher, then sing along with the backing band. Also includes music score animation for easy music learning.***\r\n\r\n\"\"Great beginning singing instruction. Great basics in user friendly format for the new singer. Easy to read, great diagrams! Super buy!\"\" - The Sand, Alameda CA [Amazon]\r\n\r\nProgressive Beginner Singing contains all you need to know to start learn', '2014', '', 'English', '', 'Description based upon print version of record.', '', 'ISBN:9789825323297 ', '', '21197105490002061 ', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21197105490002061 ', 0),
('ICEB0002', 'Ballroom dancing with 100 diagrams and photographs of the quickstep, waltz, foxtrot, tango, etc. / Alex Moore ; foreword by Philip J.S. Richardson.', 'Alex. Moore\r\nProQuest (Firm)', 'Ballroom dancing;\r\nElectronic books', 'Access available for SLQ members', 'New York : Routledge. ', '', 'section 1. The quickstep -- section 2. The waltz -- section 3. The foxtrot -- section 4. The tango -- section 5. Rhythm dancing (social foxtrot and quickstep) -- section 6. The Viennese waltz -- section 7. For the keen dancer -- section 8. Ballroom party dances. ', 'xii, 308 p. : ill.. ', '', '2002', '10th ed.. ', 'English', '', '\"A Theatre arts book\"--T.p. verso. ', '', '', '', '21211295020002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21211295020002061 ', 0),
('ICEB0003', 'Michigan manual of plastic surgery / David L. Brown, Gregory H. Borschel.', 'David L Brown (David Lawrence), 1968- ; Gregory H Borschel', 'Surgery, Plastic -- Handbooks, manuals, etc;\r\nElectronic books', 'Access available for SLQ members. SLQ login & ProQuest ebrary account required. ', 'Philadelphia : Lippincott Williams & Wilkins ', '', '', '1 online resource (442 pages) : illustrations. ', '', '2004', '', 'English', '', 'Includes index. ', '', 'ISBN:9781469875606 (e-book) ', 'Portion of title: Manual of plastic surgery ', '21182227350002061 ', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21182227350002061', 0),
('ICEB0004', 'Hospital medicine / editors, Robert M. Wachter, Lee Goldman, Harry Hollander.', 'Robert M Wachter ; Lee Goldman ; Harry Hollander', 'Hospital care;\r\nInternal medicine;\r\nElectronic books', 'Access available for SLQ members. SLQ login & ProQuest ebrary account required. ', 'Philadelphia : Lippincott Williams & Wilkins ', '', 'General issues -- Critical care medicine -- Medical consultation -- Cardiology -- Vascular medicine -- Pulmonary -- Infectious diseases -- Hiv disease -- Gastroenterology -- Hematology - oncology -- Renal -- Endocrinology -- Rheumatology -- Neurology and psychology -- Toxicology and allergy. ', '1 online resource (1314 pages) : illustrations. ', '', '2005', 'Second edition.. ', 'English', '', 'Includes bibliographical references and index. ', '', '', '', '21181915390002061 ', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21181915390002061 ', 0);

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
-- Table structure for table `OA_collections_Books`
--

CREATE TABLE `OA_collections_Books` (
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
-- Table structure for table `OA_collections_ebooks`
--

CREATE TABLE `OA_collections_ebooks` (
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
-- Table structure for table `OA_collections_Images`
--

CREATE TABLE `OA_collections_Images` (
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
('SLQB0001', 'Information technology/Roger Carter', 'Roger Carter 1939-', 'Information techonology; Computer science', '', 'Oxford,UK : Made Simple', 'Made Simple boks', '', 'ix, 169 p. : ill;25cm', '', '1996', '', 'English', '', 'Includes index', '', 'ISBN:0750626771', '', '21137164230002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21137164230002061', 0),
('SLQB0002', 'Information communication technology at university : skills for success/Greg Shaw.', 'Gregory.Shaw', 'Information technology; Information technology -- Problems,exercise,etc', '', 'Darwin, N.T : Charles Darwin University Press', '', '1. Using computer for learning at university and TAFE -- 2.Introduction to information communication technology(ICT)-- 3. Internet $ email-- 4. Word processing -- 5. Spreadsheets -- 6. Packaging your information -- 7. Integrating computer applications -- 8. Tools: Web 2.0 and other tools -- Endnotebut not the final word.', '229 p. : ill. ; 25cm.', '', '2010', '3rd ed..', 'English', '', 'Spiral binding.\r\nPrevious ed.:2009.', '', 'ISBN:9780980665031(pbk.)', '', '21118303790002061', 'http://onesearch.slq.qld.gov.au/SLQ_PCI_EBSCO:slq_alma21118303790002061', 0),
('SLQB0003', 'Anime', 'Colin, Odell Michlle Le Blanc', 'Animated films -- Japan; Electronic books', 'Access available for SLQ members.', 'Herts: Oldcastle Books', '', 'Cover -- Copyright -- Dedication -- Acknowledgements -- Contents -- Introduction -- Glossary-- 1. Key Anime Creators -- 2. A Selection of Anime -- Further Reading -- References -- Index -- Moretitles from Kamera Books.', '1 online resource(161 pages)', 'A complete overview of the art form, from the coauthors of Studio GhibliThis guide to anime offers an overview of the art form, looking at its development in Japan and its export to other cultures. It includes a history of Japanese animation from early examples to the relaunch of animation as a viable commercial entity and its enormous rise in popularity after World War II. The difference between manga and anime is explained, and a breif history of manga is offered, including its development from traditional art from to massive commercial success with millions of readers in Japan and worldwide. Odell and Le Blanc also consider anime style and genres, its market and importance in Japanese culture and its perception in the West, including controversy, such as criticisms of sex and violence in anime that affect other national markets, including the UK(notably Urotsukidoji) and the U.S.', '2014', '', 'English', '', '', '', 'ISBN:9781842435892', '', '21206540400002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21206540400002061', 0),
('SLQB0004', 'Science', 'Korean Overseas Information Service', '', '', 'Seoul', 'Korea background series', '', '95 p.;21cm.', '', '1973', '', 'English', '', '', '', '', '', '211268575300002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21206540400002061', 0);

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
('SLQEB0001', 'Information technology and the conduct of research the user\'s view/ report of the Panel on Information Technology and the Conduct of Research....[et al.].', 'Panel on Information Technology and the Conduct of Research(U.S.)', 'Information technology -- Scientific applications; Research -- Technologyical innovations; Electronic books', 'Access available for SLQ members. SLQ loging & ProQuest ebrary account required.', 'Washington, D.C : National Academy Press', '', '', 'xiv, 76 p : col.ill.', '', '1989', '', 'English', '', 'Includes bibliographical references and index.', '', '', '', '21181215200002061', 'http://onsearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21181215200002061', 0),
('SLQEB0002', 'Managing Corporate Design Best Practices for In-House Graphic Design Departments', 'Peter L. Phillips', 'Business;\r\nLeadership;\r\nManagement;\r\nElectronic books', 'Access available for SLQ members. Onsite login required.', 'New York : Allworth Press', '', 'Cover; Title Page; Copyright; Dedication; Contents; Introduction; Acknowledgements; Chapter 1: Design Management; \"Developing a Framework for Design Management\"; How the Most Successful Design Managers Describe Design Management; So, What\'s My Answer to the Question, \"What Do You Do?\"; Chapter 2: Design Managers Must Be Able to Speak the Language of Business; Words to Avoid in a Corporate Environment; Communicating in Business Terms; Chapter 3: The Model; The Value You Offer; Why Am I Not Invited to Higher Level Strategy Meetings?; Paradoxical Leadership: A Journey with John Tyson \r\nAccountability Versus ResponsibilityAn Exercise to Get You Started; Recognize the Business Role of Graphic Design; Another Worthwhile Exercise; Mutually Valuable Relationships; Use the Organization Chart Exercise Again; Implementing Efficient Work-With Processes; Partnering on a Global Level; Making Change Possible; Should In-House Graphic Design Groups Charge a Fee for Design Work?; Get Out into the Real World; Credibility and Trust; Chapter 4: Determining the Real Work of the Function; Making a Proposal to Hire More In-House Staff; Chapter 5: Maintaining the Momentum \r\nChapter 6: The Collaborative Design BriefClient or Partner?; Co-Ownership; What Level Should the Co-Owners Be?; Getting Started; Rfps Versus Design Briefs; What Must Be in a Proper Design Brief?; What Are the Prime Objectives of the Project?; Why Is this Project Necessary, and Why Is It Necessary Right Now?; What Business Outcomes Are Expected from This Project?; Identify Key Stakeholders; Some Essential Elements to Include in the Design Brief; It\'s Like Stir-Fry Cooking; Design Is Only One Ingredient of a Successful Business; Partners Need to Understand Each Other \r\nThe Design Brief Project TeamFaq; Summary: Ten Basic Rules for the Design Brief Process; Chapter 7: An Example of a Design Brief; Chapter 8: Managing an In-House Graphic Design Staff; Graphic Design Professionals Are Unique; The Design Process; The Climate Needed for In-House Graphic Design; Making Sure Your Graphic Design Staff Is \"On-Board\" with Becoming a Core Strategic Competency; The Importance of Being a Mentor; Professional Development; Chapter 9: Motivating your Graphic Design Staff; You Must Understand Personalities; A Few General Thoughts about Motivation; Physical Environment \r\nChapter 10: Scheduling the WorkloadThe Unknown Projects; Chapter 11: Hiring and Terminating Employees; Structuring the Interview; Portfolio Review; Terminating an Employee; Chapter 12: The Annual Performance Review; A Few Guidelines; Chapter 13: Presenting Design Solutions for Approval; The Design Brief as an Outline for Approval Presentations; Target Audience Testing; Understanding the Final Approver; Subjective Comments Versus Objective Discussion; How Many Graphic Design Solutions Do You Present for Approval?; Anticipating Objections; What If You Can\'t Make the Presentation Yourself? \r\nWhat If You Are Just Not Comfortable Making Presentations to Senior Managers?', '1 online resource (310 p.). ', 'Peter L. Phillips is an internationally recognized expert in developing corporate design management strategies and programs. He has had more than thirty years\' experience as a senior corporate design manager, a consultant for many Fortune 500 companies, and a lecturer. He is the author of several books, including Creating the Perfect Design Brief: How to Manage Design for Strategic Advantage (Allworth Press). He lives in Marblehead, Massachusetts.', '2015', '', 'English', '', 'Description based upon print version of record. ', '', 'ISBN:9781621534716 ', '', '21167016010002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21167016010002061', 0),
('SLQEB0003', 'Management / Brian Tracy.', 'Brian Tracy', 'Management;\r\nElectronic books', 'Access available for SLQ members. SLQ login & ProQuest ebrary account required. ', 'Saranac Lake, New York : AMACOM', '', '', '1 online resource (124 pages).', '', '2014', '', 'English', '', 'Includes bibliographical references and index. ', '', 'ISBN:9780814434208 (e-book) ', '', '21182466050002061 ', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21182466050002061 ', 0),
('SLQEB0004', 'A life worth living contributions to positive psychology / edited by Mihaly Csikszentmihalyi and Isabella Selega Csikszentmihalyi.', ' Mihaly Csikszentmihalyi ; Isabella Selega Csikszentmihalyi ; ebrary, Inc', 'Positive psychology;\r\nElectronic books', 'Access available for SLQ members. SLQ login & ProQuest ebrary account required. ', 'Oxford ; New York : Oxford University Press ', 'Series in positive psychology \r\nSeries in positive psychology. ', 'Positive psychology traditions in classical European psychology / Csaba Pléh -- The Values in Action (VIA) classification of strengths / Christopher Peterson -- Positive personality development : approaching personal autonomy / Dmitry Leontiev -- Spirituality : recent progress / Robert A. Emmons -- The broaden-and-build theory of positive emotions / Barbara L. Fredrickson -- Benefits of emotional intelligence / Daisy D. Grewal and Peter Salovey -- Strategies for achieving well-being / Jane Henry -- Adaptive resources in later life : tenacious goal pursuit and flexible goal adjustment / Jochen Brandtstädter -- The impact of subjective experience on the quality of life : a central issue for health professionals / Antonella Delle Fave -- What works makes you happy : the role of personal goals in life-span development / Jari-Erik Nurmi and Katariina Salmela-Aro -- Materialism and its alternatives / Tim Kasser -- Getting older, getting better? recent psychological evidence / Kennon Sheldon -- Afterword: breaking the 65 percent barrier / Martin E. P. Seligman. ', 'ix, 253 p. : ill..', '', '2006', '', 'English', '', 'Includes bibliographical references and indexes.', '', '', '', '21184491860002061 ', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21184491860002061 ', 0);

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
('SLQI0001', 'Get the net', ' QANTM Australia CMC. Youthworks', 'QANTM Australia CMC. Youthworks -- Posters;\r\nInteractive multimedia -- Publishing -- Posters;\r\nInternet publishing -- Posters', '', 'Brisbane, Qld. : QaNTm Youthworks ', '', '', '1 poster (double-sided): col. ; 42 x 30 cm.. ', 'Poster advertising the services of Youthworks, a unit of QANTM Australia CMC Pty. Ltd, dedicated to the study and teaching of multimedia and internet publishing for youth seeking to further thier career and skills.', '199?', '', 'English', '', '', '', '', '', '21133063560002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21133063560002061 ', 0),
('SLQI0002', 'Mannequin modelling a wedding dress in a fashion parade at Lennon\'s Hotel, Brisbane, 1955', 'Unidentified\r\nTruth (Brisbane, Qld.)', 'fashion models; fashion parades; dresses; wedding dresses; women\'s clothing & accessories; Brisbane (Qld.)', '', 'John Oxley Library, State Library of Queensland', '', '', 'Digital format: image/jpeg ; Original format: copy print : b&w ', 'Model wearing a bridal dress in the Paul\'s fashion parade at Lennon\'s Hotel, Brisbane, in 1955. Women, seated at tables and standing, are watching the parade', '1995', '', '', '', '', '', 'Negative number: 185440 ', '', '201955 ', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_digitool201955 ', 0),
('SLQI0003', 'Arts on radio photography Richard Harris ; design Antart.', 'Richard Harris 1950- ; Australian Broadcasting Corporation ; ABC Radio (Australia) ; Australian Broadcasting Corporation. Radio National.', 'Australian Broadcasting Corporation -- Posters;\r\nABC Radio (Australia) -- Periodicals;\r\nAustralia Broadcasting Commission -- Periodicals;\r\nRadio programs -- Australia -- Posters;\r\nRadio programs -- Australia -- Periodicals;\r\nRadio broadcasting -- Queensland -- Periodicals', '', 'Artamon, N.S.W : ABC Enterprises for the Australian Broadcasting Corporation ', '', 'Verso of poster lists details of programs and regular features broadcast on Radio National.', '1 poster : turquoise and purple ; 36 x 51 cm..', 'Lettering in silver overlays the main image of a cliff and foreshre merging in to a blue sea against the background of a turquoise sea. \r\n', '1994', '', 'English', '', 'Poster promoting the range of programmes aired on ABC Radio National, with details of their frequencies.', 'ABC Radio : for art\'s sake ', '', '', '21106324660002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21106324660002061 ', 0),
('SLQI0004', 'Whatever happened to...? / [design and linocut by Mike Hudson and Jadwiga Jarvis].', 'Mike Hudson\r\nJadwiga Jarvis artist. ; Wayzgoose Press issuing body.', 'Broadsides -- New South Wales -- Katoomba -- Specimens;\r\nPrinting -- New South Wales -- Katoomba -- Specimens;\r\nTechnology -- Social aspects', '', 'Katoomba, N.S.W. : Wayzgoose Press ', 'Broadside ; 40 \r\nBroadside (Wayzgoose Press) ; 40. ', '', '1 broadside : colour ; 70 x 50 cm..', 'Handset and printed broadside on Magnani Incisioni 220gsm paper which features a large image of a a blue hand (reminiscent of the \"like\" button on Facebook) giving a thumbs down above a series of garbage bins in which can be seen numerous yellow rectangles, also appearing below the bins, on which are written the names of things we have lost as a result of new technology. ', '2014', '', 'English', '', 'Caption title. \r\nEdition of 10 signed and numbered copies. ', '', '', '', '21133038380002061', 'http://onesearch.slq.qld.gov.au/SLQ:SLQ_PCI_EBSCO:slq_alma21133038380002061', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Info_collections_Books`
--
ALTER TABLE `Info_collections_Books`
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
-- Indexes for table `OA_collections_Books`
--
ALTER TABLE `OA_collections_Books`
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
-- Indexes for table `SLQ_collections_Books`
--
ALTER TABLE `SLQ_collections_Books`
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
