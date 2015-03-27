-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2012 at 06:53 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `username` varchar(80) NOT NULL,
  `title` varchar(80) NOT NULL,
  `nature` varchar(10) NOT NULL,
  `organized_by` varchar(80) NOT NULL,
  `year` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`username`, `title`, `nature`, `organized_by`, `year`) VALUES
('KulwinderSMann', 'Fundamentals of Research Methodology', 'STP', 'Guru Nanak Dev Engineering College, Ludhiana', '2010-2011'),
('KulwinderSMann', 'Educational Auditing and Feedback System for Excellence in Technical Institution', 'STP', 'Guru Nanak Dev Engineering College, Ludhiana', '2008-2009'),
('AkshayGirdhar', ' 	International Conference on Bioinformatics and Biomedical Engineering', 'IC', 'Advanced Research Center for Sci. & Tech.,Wuhan University, China', '2010-2011'),
('AkshayGirdhar', 'Fundamentals of Research Methodology', 'STP', 'Guru Nanak Dev Engineering College, Ludhiana', '2010-2011'),
('AkshayGirdhar', 'A-VIEW Basics Workshop', 'STP', 'Punjab Technical University, Jalandhar', '2010-2011'),
('AkshayGirdhar', 'Image Processing and Clinical Applications', 'STP', 'University Institute of Engineering and Technology, Panjab University, Chandigar', '2009-2010'),
('kiranjyoti', 'Intelligent Computational Techniques', 'STP', 'Shaheed Bhagat Singh Institute of Engineering and Technology, Ferozepur', '2010-2011'),
('kiranjyoti', 'Current Trends in Research Methodologies', 'STP', 'PSG College of Technology Coimbatoreorganized by', '2010-2011'),
('RaninderKGill', 'Intelligent Computational Techniques', 'STP', 'Shaheed Bhagat Singh Institute of Engineering and Technology, Ferozepur', '2010-2011'),
('RaninderKGill', 'Software Project Management', 'STP', 'IIT Kharagpur Extension Center, Bhubneshwar', '2010-2011'),
('AkshayGirdhar', 'Image Processing and Clinical Applications', 'STP', 'University Institute of Engineering and Technology, Panjab University, Chandigar', '2009-2010'),
('AkshayGirdhar', 'title', 'STP', 'organized by', 'year'),
('AkshayGirdhar', 'title', 'STP', 'organized by', 'year');

-- --------------------------------------------------------

--
-- Table structure for table `expert_talk`
--

CREATE TABLE `expert_talk` (
  `username` varchar(80) NOT NULL,
  `title` varchar(200) NOT NULL,
  `organization` varchar(200) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert_talk`
--

INSERT INTO `expert_talk` (`username`, `title`, `organization`, `year`) VALUES
('KulwinderSMann', 'Role of E.H.R', 'Cyber Star Infotech, Ludhiana', '2011-02-24'),
('KulwinderSMann', 'Interview Skills', 'Gulzar Institute of Engineering and Technology, Khanna', '2011-02-24'),
('AkshayGirdhar', ' 	Fundamentals of Programming', 'Doraha Institute of Management and Information Technology, Doraha', '2011-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(4) NOT NULL auto_increment,
  `username` varchar(80) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `designation` varchar(50) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `research_interest` varchar(500) NOT NULL,
  `office_address` varchar(500) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `e_id` varchar(50) NOT NULL,
  `conference` varchar(9999) NOT NULL,
  `expert_talk` varchar(9999) NOT NULL,
  `publication` varchar(9999) NOT NULL,
  `thesis_guided` varchar(9999) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `username`, `password`, `name`, `dob`, `designation`, `experience`, `qualification`, `research_interest`, `office_address`, `contact_no`, `e_id`, `conference`, `expert_talk`, `publication`, `thesis_guided`) VALUES
(1, 'AkshayGirdhar', 'hod', 'Akshay Girdhar ', '1976-06-23', 'Associate Professor and Head', '1.) Assistant Professor(G.N.D.E.C.,Ludhiana)[from Aug,2005 to till date] <br/> 2.) Lecturer(G.T.B.K.I.E.T,Malout)[from Nov,1998 to Aug, 2005] <br/> 3.) Research Associate(G.T.B.K.I.E.T,Malout)[from Sep,1998 to Nov, 1998]', '1.) M.Tech(I.T.)[2004] <br/> 2.) B.E.(Electronics)[1998] <br/> 3.) 10+2[1994] 4.Matriculation[1992]', 'Digital Image Processing', 'Head of Department Office Information Technology, Post Graduate Block, GNDEC Ludhiana', '--', 'akshay_girdhar@gndec.ac.in  ', '<table width="667">     <tr>       <td width="50"><strong>Sr. No.</strong></td>     <td width="233"><span class="style10">Title</span></td>     <td width="52"><span class="style10">Nature</span></td>     <td width="233"><span class="style10">Organized By</span></td>     <td width="75"><span class="style10">Year</span></td>     </tr>     <tr>       <td>1.</td>       <td height="54"><span class="style5">International Conference on Bioinformatics and Biomedical Engineering</span></td>       <td><span class="style5">IC</span></td>       <td><span class="style5">Advanced Research Center for Sci. &amp; Tech.,Wuhan University, China</span></td>       <td><span class="style5">2010-2011</span></td>     </tr>     <tr>       <td>2.</td>       <td height="46"><span class="style5">Fundamentals of<br />         Research Methodology</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">Guru Nanak Dev Engineering<br />         College, Ludhiana</span></td>       <td><span class="style5">2010-2011</span></td>     </tr>     <tr>       <td>3.</td>       <td height="48"><span class="style5">A-VIEW Basics<br />         Workshop</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">Punjab Technical University,<br />         Jalandhar</span></td>       <td><span class="style5">2010-2011</span></td>     </tr>     <tr>       <td>4.</td>       <td height="69"><span class="style5">Image Processing and<br />         Clinical Applications</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">University Institute of<br />         Engineering and Technology,<br />         Panjab University, Chandigarh</span></td>       <td><span class="style5">2009-2010</span></td>     </tr>     <tr>       <td>5.</td>       <td height="71"><span class="style5">Recent Advances And<br />         Future Trends in Image<br />         Processing</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">Punjabi University, Patiala</span></td>       <td><span class="style5">2009-2010</span></td>     </tr>     <tr>       <td>6.</td>       <td><span class="style5">Educational Auditing and<br />         Feedback System for<br />         Excellence in Technical<br />         Institutions</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">Guru Nanak Dev Engineering<br />         College, Ludhiana</span></td>       <td><span class="style5">2008-2009</span></td>     </tr>     </table>', '<table width="637">     <tr>       <td width="55"><strong>Sr. No.</strong></td>     <td width="170"><span class="style10">Title</span></td>     <td width="319"><span class="style10">Organization</span></td>     <td width="73"><span class="style10">Year</span></td>     </tr>     <tr>       <td>1.</td>       <td height="54"><span class="style5">Fundamentals of Programming</span></td>       <td><span class="style5">Doraha Institute of Management and Information Technology, Doraha</span></td>       <td><span class="style5">14/10/2011</span></td>     </tr>     </table>     ', '<table width="597" border="1"><tr><td width="46"><span class="style10">Sr No.</span></td>         <td width="124"><span class="style10">Nature</span></td><td width="405"><span class="style10">Details</span></td></tr><tr><td><span class="style5">1.</span></td><td><span class="style5">International Journal</span></td>         <td><span class="style5">Kaur, R., Girdhar, A. and<br />           Gupta, S. (2011), "Color Image Quantization based on Bacteria Foraging Optimization", International Journal of Computer Applications, (0975 – 8887) Vol. 25, No.7,<br /> pp. 33-42.</span></td></tr><tr><td>2.</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr>         <td>3.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>4.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>5.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>6.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>7.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>8.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>9.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>10.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>11.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>12.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>13.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>14.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>15.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>16.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>17.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>18.</td>         <td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>19.</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>20.</td><td>&nbsp;</td><td>&nbsp;</td></tr></table>', '<table width="630" border="1">       <tr>         <td width="52"><strong>Sr. No.</strong></td>         <td width="232"><strong>Title of Thesis</strong></td>         <td width="114"><strong>Name of Student</strong></td>         <td width="104"><strong>Supervisor/Co<br />         -Supervisor</strong></td>         <td width="94"><strong>Year</strong></td>       </tr>       <tr>         <td>1.</td>         <td>Image Segmentation: Objective<br />         Evaluation and A New Approach</td>         <td>Silky<br />         Dhawan</td>         <td>Supervisor</td>         <td>2008-2009</td>       </tr>       <tr>         <td>2.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>3.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>         <td>&nbsp;</td>         <td>&nbsp;</td>       </tr>       <tr>         <td>4.</td>         <td>&nbsp;</td>         <td>&nbsp;</td>         <td>&nbsp;</td>         <td>&nbsp;</td></tr><tr><td>5.</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>6.</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>7.</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table>'),
(2, 'KulwinderSMann', 'dean', 'Kulwinder Singh Mann ', '1973-08-07', 'Associate Professor', '1.Assistant Professor(G.N.D.E.C. Ludhiana)[from Aug 2006 to till date] <br/> 2.Lecturer(G.N.D.E.C.,Ludhiana)[from Aug 2004 to Jul 2006]', '1.M.Tech(IT)[2003] <br/> 2.B.Tech(CSE)[1998] <br/> 3.Diploma(Computer Application and Programming)[1995] <br/> 4.Certificate(D.O.W.P)[1993] <br/> 5.10+2[1991] <br/> 6.Matriculation[1989]', 'Web Technologies', 'T&P Office, Ground Floor, Post Graduate Block, GNDEC Ldh.', ' --', 'mannkulvinder@gndec.ac.in ', '<table width="667">     <tr>       <td width="50"><strong>Sr. No.</strong></td>     <td width="233"><span class="style10">Title</span></td>     <td width="52"><span class="style10">Nature</span></td>     <td width="233"><span class="style10">Organized By</span></td>     <td width="75"><span class="style10">Year</span></td>     </tr>     <tr>       <td>1.</td>       <td height="54"><span class="style5">Fundamentals of Research Methodology</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">Guru Nanak Dev Engineering College, Ludhiana</td>       <td><span class="style5">2010-2011</span></td>     </tr>     <tr>       <td>2.</td>       <td height="46"><span class="style5">Educational Auditing and Feedback System for Excellence in Technical Institutions</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">Guru Nanak Dev Engineering<br />         College, Ludhiana</span></td>       <td><span class="style5">2010-2011</span></td>     </tr>     </table>', '<table width="637">     <tr>       <td width="55"><strong>Sr. No.</strong></td>     <td width="170"><span class="style10">Title</span></td>     <td width="319"><span class="style10">Organization</span></td>     <td width="73"><span class="style10">Year</span></td>     </tr>     <tr>       <td>1.</td>       <td height="54"><span class="style5">Role of E.H.R</span></td>       <td><span class="style5">Cyber Star Infotech, Ludhiana</span></td>       <td><span class="style5">24/02/11</span></td>     </tr>     <tr>       <td>1.</td>       <td height="54"><span class="style5">Interview Skills</span></td>       <td><span class="style5">Gulzar Institute of Engineering and Technology, Khanna</span></td>       <td><span class="style5">24/02/11</span></td>     </tr>     </table>     ', '<table width="597" border="0"><tr><td width="50"><span class="style10">Sr No.</span></td>         <td width="154"><span class="style10">Nature</span></td><td width="405"><span class="style10">Details</span></td></tr><tr><td><span class="style5">1.</span></td><td><span class="style5">International Journal</span></td>         <td><span class="style5">Mann, K. S., Kaur, A. (2010), "Component based software Engineering", International Journal oF Computer Applications (0975-8887) Vol. 2, No.1, pp.105-108.</span></td></tr></table>', '<table width="630" border="0">       <tr>         <td width="52"><strong>Sr. No.</strong></td>         <td width="232"><strong>Title of Thesis</strong></td>         <td width="134" align="centre"><strong>Name of Student</strong></td>         <td width="104"><strong>Supervisor/Co<br />         -Supervisor</strong></td>         <td width="94"><strong>Year</strong></td>       </tr>       <tr>         <td>1.</td>         <td>Component Selection For Component Based Software Engineering</td>         <td align="centre">Arvinder Kaur</td>         <td>Supervisor</td>         <td>2009-2010</td>       </tr>       <tr>         <td>2.</td>         <td>A New Conceptual Framework for the Assesment of HIS</td>         <td align="centre">Kamaljit Kaur</td>         <td>Supervisor</td>         <td>2010-2011</td>       </tr></table>'),
(3, 'KiranJyoti', 'kj', 'Kiran Jyoti', '1978-08-09', 'Associate Professor', '1.Lecturer(G.N.D.E.C.,Ludhiana)[from Nov,2000 to till date] <br/> 2.Lecturer(B.A.M.S.E.C,Agra)[from Jul,2000 to Oct,2000]', '1.M.Tech.(CSE)[2007] <br/> 2.B.Tech.(CSE)[2000] <br/> 3.10+2[1996] <br/> 4.Matriculation[1994]', 'Data Mining', '2nd Floor, Post Graduate Block, GNDEC Ldh.', '', 'kiranjyotibains@gndec.ac.in', '<table width="667">     <tr>       <td width="50"><strong>Sr. No.</strong></td>     <td width="233"><span class="style10">Title</span></td>     <td width="52"><span class="style10">Nature</span></td>     <td width="233"><span class="style10">Organized By</span></td>     <td width="75"><span class="style10">Year</span></td>     </tr>     <tr>       <td>1.</td>       <td height="54"><span class="style5">Intelligent Computational Techniques</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">Shaheed Bhagat Singh Institute of Engineering and Technology, Ferozepur</span></td>       <td><span class="style5">2010-2011</span></td>     </tr>     <tr>       <td>2.</td>       <td height="46"><span class="style5">Current Trends in Research Methodologies in Information Retrieval</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">PSG College of Technology Coimbatore</span></td>       <td><span class="style5">2010-2011</span></td>     </tr>     <tr>       <td>3.</td>       <td height="48"><span class="style5">Environment management in Process Industries</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">National Institute of Technology, Jalandhar</span></td>       <td><span class="style5">2010-2011</span></td>     </tr>     <tr>       <td>4.</td>       <td height="69"><span class="style5">Object Oriented Analysis and Design using UML with Essentials of Rational Software Architect</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">Guru Nanak Dev Engineering College, Ludhiana</span></td>       <td><span class="style5">2009-2010</span></td>     </tr>     <tr>       <td>5.</td>       <td height="71"><span class="style5">Understanding SoftComputing and its Applications</span></td>       <td><span class="style5">STP</span></td>       <td><span class="style5">Guru Nanak Dev Engineering College, Ludhiana</span></td>       <td><span class="style5">2008-2009</span></td>     </tr> </table>', '', '<table width="597"><tr><td width="46"><span class="style10">Sr No.</span></td>         <td width="124"><span class="style10">Nature</span></td><td width="405"><span class="style10">Details</span></td></tr><tr><td><span class="style5">1.</span></td><td><span class="style5">International Journal</span></td>         <td><span class="style5">Jyoti, K., and Singh, S. (2011), "Investigation on Various ANN and PSO based data clustering techniques for industrial process application", International Journal of Computer Science and Technology, Vol. 2, No. 2, pp. 355-363.</span></td></tr><tr><td>2.</td><td>International Journal</td><td>Jyoti, K., and Singh, S. (2011), "Data Clustering Approach to Industrial Process Monitoring, Fault Detection and Isolation", International Journal of Computer Application (0976-8887) Vol. 17, No. 2, pp. 41-45.</td></tr> <tr> <td>3.</td>  <td>International Journal</td> <td>Johal, N.K., Kamra, A. and Jyoti, K. (2010), "A New Method for Fingerprint Core Point Detection based upon Orientation Field", CiiT International Journal of Biometrics and Bioinformatics, (0974-9675) Vol. 2, No. 11, pp. 327-330.</td> </tr>       <tr>         <td>4.</td>         <td>National Conference</td>         <td>Sandhu, R., Jyoti, K., Kaur, M. and Arya, H. (2011), "Polarity Decomposition of Feature based web opinions", Latest Advancements in Science , Engineering and Research (978-93-81361-07-8) at Baba Farid College of Engineering and Technology, Bathinda pp. 188-192.</td>       </tr>       <tr>         <td>5.</td>         <td>National Conference</td>         <td>Jyoti, K., and Singh, S. (2011), "Data Clustering: A Review", Impact of management and Technological Advancements in Technical Education and industrial sector at Jasdev Singh Sandhu College of Education, Patiala, pp. 93-95.</td>       </tr>       <tr>         <td>6.</td>         <td>National Seminar</td>         <td>Jyoti, K., and Sandhu, R. (2011), "Extraction and Decomposition of Feature Based Web Opinions", National Seminar on Advances in Computer Application held at IET, Bhaddal.</td>       </tr</table>', ''),
(4, 'AmitKamra', 'a.kamra', 'Amit Kamra', '1978-07-05', 'Associate Professor', '', '', 'Medical Image Processing, Detection of Cancer, Biometrics ', '---', '---', 'amit_kamra@gndec.ac.in', '', '', '', ''),
(6, 'HarbhagSSohal', 'hss', 'Harbhag Singh Sohal', '1988-11-01', 'Assistant Professor(Computer Programmer) ', 'Assistant Professor & Computer Programmer (GNDEC, Ludhiana) [August, 2011 - till date] ', '', '', '', '', 'harbhag@gndec.ac.in', '', '', '', ''),
(7, 'ManpreetSingh', 'mpreet', 'Manpreet Singh', '1978-08-23', 'Assistant Professor ', 'Lecturer(G.N.D.E.C.,Ludhiana)[from Feb,2004 to till date]', '', 'Bio-informatics,Data Mining ', 'PG Block 1st Floor', '', 'mpreet@gndec.ac.in', '', '', '', ''),
(9, 'ManjotKGill', 'mkg', 'Manjot Kaur Gill', '1984-09-05', 'Assistant Professor', 'Lecturer(G.N.D.E.C.,Ludhiana)[from Aug 2008 to till date] ', '', 'Speech Recognition, Natural Language Processing ', 'PG Block top Floor', '', 'manjotgill@gndec.ac.in', '', '', '', ''),
(10, 'RaninderKGill', 'rkg', 'Raninder Kaur Gill', '1979-07-22', 'Assistant Professor', '', '', 'Data Mining,Bio-Informatics,Network Security ', 'PG Block 1st Floor', '', 'rgill@gndec.ac.in', '', '', '', ''),
(11, 'KamaljitKDhillon', 'kkd', 'Kamaljit Kaur Dhillon', '1977-06-26', 'Assistant Professor', 'Lecturer(GNDEC,Ludhiana)[from Oct 2002 to till date]<br/>Lecturer(Dasmesh Girls College, Badal)[from Jun 2001 to Mar 2002]', 'M.Tech.(CSE)[2007] , B.Tech.(CSE)[2001] , Diploma(CSE)[1997] ,Certificate(Data Entry Operator)[1995]', 'Digital Image Processing ', 'PG Block 1stFloor', '', 'kamaldhillon@gndec.ac.in', '', '', '', ''),
(12, 'PankajBhambri', 'pankaj', 'Pankaj Bhambri', '1979-10-03', 'Assistant Professor', 'Lecturer(G.N.D.E.C.,Ludhiana)[from Aug,2004 to till date] <br/> Lecturer(V Squara Infotech,Jalandhar)[from Feb,2004 to Aug,2004] <br/> Software Trainee(Nestle India Ltd.,Moga)[from Aug,2003 to Feb,2004]', 'M.Tech.(CSE)[2009] <br/>B.E.(IT) with honors[2003] <br/>Diploma[2000] 4.10+2[1997] <br/>Matriculation[1995] ', 'C,C++,Software Engineering and Distributed Systems ', 'PG Block 1st Floor', '', 'pkbhambri@gndec.ac.in', '', '', '', ''),
(13, 'ParminderKWadhwa', 'pwadhwa', 'Parminder Kaur Wadhwa', '0000-00-00', 'Assistant Professor', '', '', '', '', '', 'parminder_engg@gndec.ac.in', '', '', '', ''),
(14, 'PriyankaArora', 'parora', 'Priyanka Arora', '1986-10-29', 'Assistant Professor', 'Asstt. Prof.(G.N.D.E.C.,Ludhiana)[Mar,2011 to till date] ', ' M.E (CSE)[2011] <br/>  B.Tech (CSE) [2008] ', 'Grid Computing', 'PG Block 1st Floor', '', 'priyankaarora@gndec.ac.in', '', '', '', ''),
(15, 'RanjodhKaur', 'rkaur', 'Ranjodh Kaur', '0000-00-00', 'Assistant Professor', 'Assistant Professor(G.N.D.E.C. Ludhiana)[from Aug 2006 to till date] <br/> 2.Lecturer(G.N.D.E.C.,Ludhiana)[from Mar2011 to till date]]', 'M.Tech(CSE) B.Tech(IT)', '', '', '', 'ranjodh_kaur@gndec.ac.in', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `username` varchar(80) NOT NULL,
  `nature` varchar(200) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`username`, `nature`, `details`) VALUES
('KulwinderSMann', 'International Journal', 'Mann, K. S., Awarti, H. and Meenakshi (2011), "A New Framework for Semantically interoperable hospital information system", International Journal of Information Technology and Knowledge Management, (0973-4414) Vol. 4, No. 2, pp. 643-47.'),
('KulwinderSMann', 'International Journal', 'Mann, K. S., Sadawarti, H.,Kaur, P. and Kang, H.S. (2011), "A Web-Based HL7 Validation System Architecture", International Journal of Information Technology and Knowledge Management, (0973-4414) Vol. 4, No. 2, pp. 447-450.'),
('AkshayGirdhar', 'International Journal', 'Kaur, R., Girdhar, A. and Gupta, S. (2011), "Color Image Quantization based on Bacteria Foraging Optimization", International Journal of Computer Applications, (0975 - 8887) Vol. 25, No.7, pp. 33-42.'),
('kiranjyoti', 'International Journal', 'Jyoti, K., and Singh, S. (2011), "Investigation on Various ANN and PSO based data clustering techniques for industrial process application", International Journal of Computer Science and Technology, Vol. 2, No. 2, pp. 355-363.'),
('RaninderKGill', 'International Journal', 'Kaur, R., Shakti, V. and Kaur, S.(2010), "A Tajima Nei Method for detecting HIV", International Journal of Computer Science and Communication, (0973-7391), Vol. 1, No.1, pp. 215-219.'),
('RaninderKGill', 'International Journal', 'Kaur, R., Kaur, S. Kaur, A., Kaur R.K. and Sohal, A. K. (2010), "Characterization of Parathyroid Hormone using HMM Framework", International Journal of Computer Applications, (0975 - 8887), Vol. 1, No. 16 , pp. 65-68'),
('RaninderKGill', 'International Conference', 'Kaur, R., Kaur, S. and Salwan, P. (2010), "Challenges in Bioinformatics", International Conference on Industrial Competitiveness at GGI, Ludhiana.');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `title` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`title`, `link`) VALUES
('Akshay Girdhar', 'http://localhost/faculty_profile/AkshayGirdhar.php'),
('Kulwinder Mann', 'http://localhost/faculty_profile/KulwinderSMann.php'),
('Amit Kamra', 'http://localhost/faculty_profile/AmitKamra.php'),

('Harbhag Singh', 'http://localhost/faculty_profile/HarbhagSSohal.php'),

('Kamaljit Kaur', 'http://localhost/faculty_profile/KamaljitKDhillon.php'),
('Kiran Jyoti', 'http://localhost/faculty_profile/KiranJyoti.php'),
('Manjot Kaur', 'http://localhost/faculty_profile/ManjotKGill.php'),
('Manpreet Singh', 'http://localhost/faculty_profile/ManpreetSingh.php'),
('Pankaj Bhambri', 'http://localhost/faculty_profile/PankajBhambri.php'),
('Parminder Wadwa', 'http://localhost/faculty_profile/ParminderKWadwa.php'),
('Priyanka Arora', 'http://localhost/faculty_profile/PriyankaArora.php'),
('Raninder Kaur', 'http://localhost/faculty_profile/RaninderKaur.php'),
('Ranjodh Kaur', 'http://localhost/faculty_profile/RanjodhKaur.php');

-- --------------------------------------------------------

--
-- Table structure for table `thesis_guided`
--

CREATE TABLE `thesis_guided` (
  `username` varchar(80) NOT NULL,
  `title` varchar(200) NOT NULL,
  `name` varchar(80) NOT NULL,
  `supervisor` varchar(80) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis_guided`
--

INSERT INTO `thesis_guided` (`username`, `title`, `name`, `supervisor`, `year`) VALUES
('KulwinderSMann', 'Component Selection For Component Based Software Engineering', 'Arvinder Kaur', 'Supervisor', '2009-2010'),
('KulwinderSMann', 'A New Conceptual Framework for the Assesment of HIS', 'Kamaljit Kaur', 'Supervisor', '2010-2011'),
('AkshayGirdhar', 'Image Segmentation: Objective Evaluation and A New Approach', 'Silky Dhawan', 'Supervisor', '2008-2009'),
('RaninderKGill', 'Detection of Origin of the Human Immunodeficiency virus using Phylogenetic Trees', 'Vijay Shakti', 'Supervisor', '2008-2009');
