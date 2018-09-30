-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 04:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(100) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mydate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name`, `description`, `category`, `tag`, `img`, `email`, `mydate`) VALUES
(5, 'What is Lorem Ipsum do u know?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by one..\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by one..\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).																																														', 'Sports', 'lorem,cricket', 'upload/6.jpg', 'umesh@gmail.com', '30-Sept-18'),
(8, 'What is Lorem Ipsum', 'demo', 'Business', 'hello', 'upload/2.jpeg', 'umesh@gmail.com', '30-Sept-18'),
(9, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'Science', 'Humour', 'upload/4.jpg', 'chiky@gmail.com', '30-Sept-18'),
(10, 'India vs WI ODI likely to be shifted from Indore', 'The second One-Dayer between India and West Indies on October 24 could be shifted out of Indore due to a tussle between BCCI and Madhya Pradesh Cricket Association (MPCA) for complimentary passes.\r\n\r\nBCCI logo. Photograph: Reuters\r\nAs per new BCCI constitution, 90 per cent tickets of the total capacity of the stadium should be put on public sale which effectively means 10 per cent of complimentary tickets left with state units.\r\n\r\nIn this case, the Holkar stadium has capacity to accommodate 27,000 fans and MPCA will be left with 2700 complimentary tickets.\r\n\r\nThe BCCI also demands its share of free passes for its sponsors and thus the bone of contention.\r\n\r\n\"The managing committee of MPCA has decided that it is not possible to organise the second ODI between India and West Indies in Indore if BCCI doesn\'t back down from its demand of complimentary tickets. We have intimated BCCI,\'\' MCA joint secretary Milind Kanmadikar told PTI today.\r\n\r\n\"We cannot accept BCCI\'s demand for hospitality tickets. We have only 7000 seats in the pavilion (hospitality) gallery and going by 10 percent, we would be left with only 700 seats. Now if we give five percent of that, we are left with only 350 hospitality tickets,\'\' Kanmadikar said.\r\n\r\n\"Even we have to cater demands of our members, various government agencies. We also have only 10 percent complimentaries in our state unit\'s constitution but from that we can give the amount (five percent from each gallery) BCCI wants,\'\' he said.\r\n\r\nThe clamour for free passes during international games has always been an issue with BCCI affiliated units but BCCI brass termed it as \'\'blackmailing tactic\'\' from Kanmadikar.\r\n\r\n\'\'We don\'t want to shift the match from Indore but if they create issues we have to prepare an alternate venue. This is pure blackmailing tactic from Kanmadikar,\'\' a senior BCCI official said.\r\n\r\nThe official also suggested that the issue is not that of tickets but something else.\r\n\r\n\'\'During India\'s tour of West Indies in 2017, Milind Kanmadikar was supposed to be the administrative manager but CoA chief Vinod Rai scuttled it as he felt that it was a glorified junket for state unit officials. Kanmadikar has not forgotten that slight and this is his way of getting back,\'\' the official said.\r\n\r\nHowever, another BCCI official said that it would be inappropriate to insinuate that Kanmadikar is settling scores with the CoA for the scuttled West Indies tour.\r\n\r\n\"Please check the record. Indore has hosted two international matches after Kanmadikar\'s West Indies tour was stalled by the CoA. It is not appropriate to level this kind of allegation against a senior state unit official,\" the official said.\r\n\r\nIt has also been learnt that all the units that are hosting matches in the West Indies series are finding it difficult to figure out how they can manage with 10 per cent complimentary passes if BCCI happens to demand 5 per cent of that allocation.', 'Sports', 'ODI,Cricket', 'upload/download (5).jpg', 'chiky@gmail.com', '30-09-18'),
(11, 'MTV Love School 3 winner Lalit Choudhary: Divya and I played it fair and won with dignity', 'On Saturday, Love School 3 found its winners in Lalit Choudhary and Divya Sharma. Hosted by Karan Kundrra and Anusha Dandekar, the reality show aired on MTV. After winning the show, Lalit shared that throughout his stint, he was hoping to be the champion.\r\n\r\nâ€œOf course, I was expecting to win. But the final task was a really difficult one. For a moment, we thought that we might not win. But I am really excited that we could be the ultimate winners,â€ Lalit shared in an exclusive chat with indianexpress.com.\r\n\r\nTalking about his experience on being in Love School, the young man from Jaipur said, â€œIt was great. I had left home long ago to enter the entertainment industry. And being on a reality show was always on my to-do list. I finally managed to do it and even won it. I am a very shy person in real life so being on the show was a difficult process. I also made some really great friends in the show except Aviral of course (laughs).â€\r\n\r\nLalit further shared that he is thoroughly enjoying his newfound fame. â€œI have been a model and even participated in Mr. India. But the love, support and fandom I got from Love School are unmatchable. Even when I am at a club or mall, people recognise me and want to click pictures. It really feels great to become popular,â€ he shared.\r\n\r\nAlso Read | Lalit Choudhary and Divya Sharma win MTV Love School 3\r\n\r\nThe reality show winner said that while he is not dating Divya, they definitely share a special bond. Lalit said â€œWe never thought we will bond as we started the game with different partners. But as we paired up, we started building a bond. And now that I look back, I really think this was always supposed to happen, While I am in Mumbai, Divya is in Delhi, so we donâ€™t get much time to spend together. But whenever we meet, itâ€™s always fun to hang out together. We played it fair and won with dignity.â€\r\n\r\nLalit also had a lot of good things to say about the hosts and mentors Karan Kundrra and Anusha Dandekar. â€œEven before the show, they had been my favourites. They are an ideal match and such great people. They really helped us a lot and motivated us in the game. Karan and Anusha were also our cheerleaders during each task,â€ he said.\r\n\r\nConcluding the conversation, the ex-Mr India said, â€œPeople say that you can never find love on a reality show but I think otherwise. Being in such a conducive environment, you are bound to get attracted. If it culminates into love or not, totally depends on the person involved.â€\r\n\r\nLalit and Divya beat Ujjwal Pathak-Aditi Pandey and Aviral Gupta-Sakshi Mago to win MTV Love School 3.', 'Entertainment', 'MTV,Bollywood', 'upload/lalit-759.jpg', 'pankaj@gmail.com', '30-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Sports'),
(2, 'Business'),
(3, 'Entertainment'),
(4, 'Science'),
(5, 'Politics'),
(6, 'World News');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`firstname`, `lastname`, `phone`, `email`, `dob`, `password`, `category`) VALUES
('Chikoo', 'Verma', '9876545444', 'chikoo@gmail.com', '2018-09-13', 'chikoo', ', Business, , , Politics, '),
('Chiky', 'Verma', '8383838838', 'chiky@gmail.com', '1995-02-31', 'chikoo', 'Sports, Entertainment, Science'),
('Pankaj', 'Kumar', '8723872382', 'pankaj@gmail.com', '1992-11-12', 'pankaj', ', , , Science, Politics, '),
('Umesh', 'Rana', '7283728372', 'umesh@gmail.com', '2018-09-08', 'umesh', ', Business, Entertainment, Science, , World News');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
