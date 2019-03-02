-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 12:56 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hh2`
--

-- --------------------------------------------------------

--
-- Table structure for table `edu_inst`
--

CREATE TABLE IF NOT EXISTS `edu_inst` (
  `mail` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pp_primary` int(3) DEFAULT NULL,
  `pp_secondary` int(3) DEFAULT NULL,
  `pp_inter` int(3) DEFAULT NULL,
  `pp_ug` int(3) DEFAULT NULL,
  `pp_pg` int(3) DEFAULT NULL,
  `about` varchar(5000) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu_inst`
--

INSERT INTO `edu_inst` (`mail`, `name`, `pp_primary`, `pp_secondary`, `pp_inter`, `pp_ug`, `pp_pg`, `about`, `phone`, `photo`) VALUES
('contactalc@gmail.com', 'Andhra Loyola College', NULL, NULL, NULL, 70, 65, 'Andhra Loyola College is managed and administered by the members of the Society of Jesus (Jesuits), a Catholic religious order, which has rendered signal service in the fields of education and service to humanity for over 450 years. The college was founded in December 1953 at the request of the Catholic bishops of Andhra Pradesh and began its academic sessions in July 1954. The college offers Intermediate (+2), Degree, and Postgraduate courses as well as conducts research programmes in collaboration with several reputable universities.  In 1988, the college was accorded the status of Autonomy for the Degree-level programmes by the University Grants Commission (UGC) in recognition of its excellent contribution to the cause of higher education. The degrees for both UG and PG programmes are awarded by Krishna University to which the college is affiliated.  In 2004, the college won the prestigious â€˜College with Potential for Excellenceâ€™ (CPE) status from the UGC.  In September 2008, the college was re-accredited by the National Assessment and Accreditation Council (NAAC), Bangalore, with Grade A (CGPA 3.65 out of 4.00).  During 2016, the Department of Biotechnology, Government of India, New Delhi, has selected our College under Star College Scheme to extend financial support to six of our Science Departments viz. Botany, Biotechnology, Microbiology, Zoology, Chemistry and Physics. Ours is the first and only College in both the Telugu states so far to have been selected under this Scheme.  In its 62-year-long history of operating socially relevant academic programmes in an environment at once disciplined and eco-friendly, given its vast and verdant campus, the college has remained steadfastly committed to its mission of producing men and women of both academic excellence and human excellence.  That a large number of the alumni of the college have distinguished themselves by their signal contribution to their own professions as well as society (details under â€˜Alumniâ€™) does indeed vouch for the excellence the college has achieved.', '8822345678', 'layola.jpeg'),
('dav.vtps@hotmail.com', 'DAV PUBLIC SCHOOL', 85, 90, NULL, NULL, NULL, 'D.A.V. as  esteemed personalities in every field and in every state of the world. During these 28  years, our school has a record of producing cent percent results. Our school produced many sports men in cricket and in athletics. We have an excellent team with 46 teaching, 2 non teaching and 13 ministerial staff. We have an exceptional computer lab with 22 computers with L.E.D. Monitors being connected with LAN and internet. Our school is also enhancing to excel the performance of the students through the smart boards for every class and section. To attain the  be - fitting physique and defense to our students , our school is conducting Marshal Arts Classes for our students. To enhance the creativity and the concentration along with the development of positive attitude we are conducting Yoga Classes every morning in the school', '08662871866', NULL),
('gnou@gmail.com', 'IGNOU - Indira Gandhi National Open University', NULL, NULL, NULL, 80, NULL, 'IGNOU, the National Resource Centre for Open and Distance Learning (ODL), with international recognition and presence, shall provide seamless access to sustainable and learner-centric quality education, skill upgradation and training to all by using innovative technologies and methodologies and ensuring convergence of existing systems for massive human resource required for promoting integrated national development and global understanding.To advance frontiers of knowledge and promote its dissemination through sustainable Open and Distance Learning systems, seamlessly accessible to all, including those hitherto unreached, from among whom the leaders and innovators of tomorrow will emerge, the University shall:', '29533870', 'ignou.jpg'),
('info@pscmr.ac.in', 'PSCMR College of Engineering and TECHNOLOGY', NULL, NULL, NULL, 75, NULL, 'PSCMR College of Engineering & Technology is SKPVV Hindu High Schools Committee’s latest contribution to the cause of education, this time in a new discipline – Engineering & Technology. This shows the Committee’s eagerness to promote education in as many different areas as possible. The Committee, a non-profit academic organization that had been managing very successfully only schools and arts & science colleges till 2008, then extended its educational service activities to technology education area, and that led to the starting that year, of Potti Sriramulu & chalavadi mallikarjuna Rao College of Engg & Technology — almost the first such institute with in the Vijayawada city limits./The college is affiliated to JNTU-Kakinada made a modest beginning with an intake of 240 students, 60 each in the branches of ECE, CSE, EEE and IT. MBA course was added the next year, that is, in 2008. Making steady progress, it has now on its rolls 1200 students in two sections of ECE and CSE each, and one section each in CIVIL,EEE.', '9848222320', 'c.jpg'),
('rmbza@scr.railnet.gov.in', 'Kendriya Vidyalaya', 80, 80, NULL, NULL, NULL, 'To cater to the educational needs of children of transferable Central Government including Defence and Para-military personnel by providing a common programme of education . To pursue excellence and set the pace in the field of school education.To initiate and promote experimentation and innovations in education in collaboration with other bodies like Central Board of Secondary Education (CBSE) and National Council of Educational Research and Training (NCERT) etc. To develop the spirit of national integration and create a sense of "Indianness" among children.', '08662536630', 'kendriya.jpg'),
('schoolconnects@gmail.com', 'Atkinson Senior Secondary High School', 70, 75, NULL, NULL, NULL, 'STEM based learning, soft skills and junior cooking. Another surprising summer camp in the list is the one that prepares a toddler for school, so its easy for the kids to manage the whole new experience of schooling. The more adventurous kids have an interesting list of nature camps, trekking, mountaineering in the wilderness lined up. The creative ones have art classes, music classes, drawing classes, quilling etc. to choose from. The sports loving kids can hone their skills in cricket, football, and badminton classes scheduled around their neighborhood. Most of these camps are making it more parent-friendly by arranging transport pickup for the kids, giving a progress on the kids performance, some include lunch as well.', '7397323140', 'atk.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE IF NOT EXISTS `scholarship` (
  `mail` varchar(50) NOT NULL,
  `name` varchar(15) NOT NULL,
  `pp_primary` int(3) DEFAULT NULL,
  `pp_secondary` int(3) DEFAULT NULL,
  `pp_inter` int(3) DEFAULT NULL,
  `pp_ug` int(3) DEFAULT NULL,
  `pp_pg` int(3) DEFAULT NULL,
  `about` varchar(500) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`mail`, `name`, `pp_primary`, `pp_secondary`, `pp_inter`, `pp_ug`, `pp_pg`, `about`, `phone`, `photo`) VALUES
('charity@ykrscholarships.com', 'Yeruva kotiredd', NULL, NULL, 90, 85, 80, 'The YKR Memorial Scholarship is the coming true of the vision that an extraordinary person had during his life, Mr. YeruvaKoti Reddy.  As an individual who always looked at the world as an expanse of opportunities, Mr. YeruvaKoti Reddy wished to make a difference. Coming from a small village with a meager source of income, he began sowing seeds of his dream which could be carried forward by his son. Faith is taking the first step even when one does not see the whole staircase and Mr. YeruvaKoti ', '9849488845', 'ykr.jpg'),
('cocacola@gmail.com', 'co coa cola ', 80, 85, 90, NULL, NULL, 'The company that brought America â€˜The Pause that Refreshesâ€™ supports a large number of philanthropic initiatives, including a variety of scholarships. The Coca-Cola Scholars Foundation supports the following annual scholarships for college-bound students. The Coca-Cola Scholars Program awards 250 four-year scholarships a year to graduating high school seniors. Scholarship awards are determined by academic achievement, and applicants must undergo an interview process with Coca-Colaâ€™s Nation', '36812368', 'cocacola.png'),
('google@google.com', 'Google', NULL, NULL, NULL, 90, 90, 'Google remains at the forefront of the internet revolution. As one of the most recognized computer software and service organizations around the world, their name has become nearly synonymous with internet use. Google sponsors a number of world wide educational initiatives, and supports a variety of lucrative scholarship programs dedicated to the encouragement and support of women and minorities who are pursuing degrees in science, mathematics and technology. The AISES Google Scholarship is spon', '37923', 'google.jpg'),
('jagadeeshwaravaraprasad@gmail.com', 'JAGADEESHWARA V', NULL, 90, 90, 75, NULL, 'kjjgkggjhghj', '917095403811', NULL),
('microsoft@gmail.com', 'Microsoft', 85, 85, NULL, NULL, NULL, 'A giant in the computer software industry, Microsoft is well know for its charitable contributions. Microsoft supports a number of annual scholarships for minorities and women pursuing degrees in computer sciences and related technical disciplines. The Microsoft Scholarships are divided into four categories: General Scholarships,Womenâ€™s Scholarships,Minority Scholarships,Scholarships for Students with Disabilities All of Microsoftâ€™s scholarship programs require the submission of a resume, le', '37923', 'microsoft-academy-img.png'),
('walmart@gmail.com', 'Wal-Mart', NULL, NULL, 98, 90, 90, 'Wal-Mart is one of the most widely recognized retail chains in the United States. Through their Wal-Mart Foundation they sponsor a variety of philanthropic initiatives, including scholarships for current employees and their dependents. The Wal-Mart Associate Scholarship is available to full or part-time Wal-Mart employees who are enrolled in an accredited community college or university. Applicants must be employed by the company for a minimum of 6 months, and must demonstrate the requisite leve', '3821648', 'walmart.png');

-- --------------------------------------------------------

--
-- Table structure for table `sponsers`
--

CREATE TABLE IF NOT EXISTS `sponsers` (
  `mail` varchar(50) NOT NULL,
  `name` varchar(15) NOT NULL,
  `vollyball` tinyint(1) NOT NULL,
  `tennis` tinyint(1) NOT NULL,
  `cricket` tinyint(1) NOT NULL,
  `kabaddi` tinyint(1) NOT NULL,
  `athletics` tinyint(1) NOT NULL,
  `chess` tinyint(1) NOT NULL,
  `about` varchar(500) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsers`
--

INSERT INTO `sponsers` (`mail`, `name`, `vollyball`, `tennis`, `cricket`, `kabaddi`, `athletics`, `chess`, `about`, `phone`, `photo`) VALUES
('jagadeeshwaravaraprasad@gmail.com', 'JAGADEESHWARA V', 1, 0, 0, 1, 0, 0, 'adhfaldflajhdj', '7095403811', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sportsmen`
--

CREATE TABLE IF NOT EXISTS `sportsmen` (
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sports` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sportsmen`
--

INSERT INTO `sportsmen` (`mail`, `pwd`, `name`, `sports`, `phone`, `photo`) VALUES
('abcd@gmail.com', '12345', 'souji', 'kabaddi', 1234567890, '144650004582148814-lord-surya-seven-horse-chariot.'),
('c@d', '2', 'cd', 'vollyball', 68698660, NULL),
('tejapriyankaammulu666@gmail.com', '1234', 'vishnupriya', 'vollyball', 1234, '14424966_1647827665507829_4423570687006537802_o.jp');

-- --------------------------------------------------------

--
-- Table structure for table `sports_academy`
--

CREATE TABLE IF NOT EXISTS `sports_academy` (
  `mail` varchar(50) NOT NULL,
  `name` varchar(15) NOT NULL,
  `vollyball` tinyint(1) NOT NULL,
  `tennis` tinyint(1) NOT NULL,
  `cricket` tinyint(1) NOT NULL,
  `kabaddi` tinyint(1) NOT NULL,
  `athletics` tinyint(1) NOT NULL,
  `chess` tinyint(1) NOT NULL,
  `about` varchar(500) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports_academy`
--

INSERT INTO `sports_academy` (`mail`, `name`, `vollyball`, `tennis`, `cricket`, `kabaddi`, `athletics`, `chess`, `about`, `phone`, `photo`) VALUES
('mbta@gmail.com', 'Mahesh Bhupathi', 0, 1, 0, 0, 0, 0, 'Mahesh Bhupathi has won several tournaments across the world as a doubles player. He brings all his experience to the fore as he teaches kids and adults the nuances of tennis. MBTA started School Tennis Program to make sure that children get exposed to the game very early in their lives. The main objective of the MBTA was to increase the accessibility of tennis by ensuring that people across all socio-economic groups have the opportunity to experience the joy of tennis. There are 35 centres spre', '7827719099', 'mahesh.jpg'),
('mrf@gmail.com', 'MRF Pace Founda', 0, 0, 1, 0, 0, 0, 'Young aspiring fast bowlers from across the world are trained by Dennis Lillee in Chennai. Notable players to have trained at the institute include Javagal Srinath, RP Singh, Irfan Pathan,MunafPAtel, Zaheer Khan, Venkatesh Prasad.  The likes of Glenn McGrath, Brett Lee and Mitchell Johnson undertook training at the foundation. McGrath was appointed the director of the foundation in 2012.', '9678567832', 'mrf.jpg'),
('netajisubhasinstitution@gmail.com', 'Netaji Subhas N', 1, 1, 1, 1, 1, 1, 'It is Asiaâ€™s largest sports institue and is located in Patiala. The institute is referred as the "Mecca" of Indian Sports and has produced coaches of exemplary nature who have assisted various teams in national and international competitions. The sports training facilities consist of gymnasium, swimming pool, indoor halls, cycling velodrome, squash courts, conditioning units, hockey fields (grass & synthetic), athletic track (cinder & synthetic) & outdoor courts. Sauna Bath, Steam Bath and Hyd', '6464775709', 's1.jpg'),
('sparkacad@gmail.com', 'Spark Chess Aca', 0, 0, 0, 0, 0, 1, 'Spark Chess Academy in Vijayawada. Dance Classes with Address, Contact Number, Photos, Maps. View Spark Chess Academy, Vijayawada on Justdial.  Founded in the year 2004, Spark Chess Academy in P&T Colony, Vijayawada is amongst the revered academies for dance. A team of instructors trains a plethora of students in a variety of dance forms. This school is also instrumental in organising a host of events followed by fests that feature stage shows. At 2(B) on 5 Lane, Srinivas Nagar Bank Colony, loca', '9786543251', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE IF NOT EXISTS `stud` (
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `edu` varchar(10) NOT NULL,
  `percentage` int(11) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`mail`, `pwd`, `name`, `edu`, `percentage`, `phno`, `photo`) VALUES
('a@b', '2', 'ab', 'primary', 85, '967878679', NULL),
('vishnupriya12.1998@gmail.com', 'v1shnu', 'vishnupriya', 'primary', 82, '1234567897', 'Baby-names-Inspired-by-Lord-Krishna.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edu_inst`
--
ALTER TABLE `edu_inst`
 ADD PRIMARY KEY (`mail`), ADD UNIQUE KEY `photo` (`photo`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
 ADD PRIMARY KEY (`mail`), ADD UNIQUE KEY `photo` (`photo`);

--
-- Indexes for table `sponsers`
--
ALTER TABLE `sponsers`
 ADD PRIMARY KEY (`mail`), ADD UNIQUE KEY `photo` (`photo`);

--
-- Indexes for table `sportsmen`
--
ALTER TABLE `sportsmen`
 ADD PRIMARY KEY (`mail`), ADD UNIQUE KEY `photo` (`photo`);

--
-- Indexes for table `sports_academy`
--
ALTER TABLE `sports_academy`
 ADD PRIMARY KEY (`mail`), ADD UNIQUE KEY `photo` (`photo`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
 ADD PRIMARY KEY (`mail`), ADD UNIQUE KEY `photo` (`photo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
