-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2017 às 19:07
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_top`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `email`, `senha`) VALUES
(21, 'Jhones silva gonçalves', 'jhones.goncalves@outlook.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE `config` (
  `id` int(10) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `base_url` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `nomeDaEmpresa` varchar(255) DEFAULT NULL,
  `sobre` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`id`, `nome`, `base_url`, `facebook`, `twitter`, `linkedin`, `nomeDaEmpresa`, `sobre`) VALUES
(1, 'Gazeta Esportiva', 'http://localhost/top_cms/', 'http://facebook.com.br', 'http://twitter.com.br', 'http://linkedin.com.br', 'InfoTech', '<p style="margin-top: 30px; margin-bottom: 30px; line-height: 1.5; font-family: Lora, &quot;Times New Roman&quot;, serif; font-size: 20px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p><p style="margin-top: 30px; margin-bottom: 30px; line-height: 1.5; font-family: Lora, &quot;Times New Roman&quot;, serif; font-size: 20px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p><p style="margin-top: 30px; margin-bottom: 30px; line-height: 1.5; font-family: Lora, &quot;Times New Roman&quot;, serif; font-size: 20px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum molestiae debitis nobis, quod sapiente qui voluptatum, placeat magni repudiandae accusantium fugit quas labore non rerum possimus, corrupti enim modi! Et.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(10) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `mensagem` text,
  `telefone` varchar(20) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `nome`, `email`, `mensagem`, `telefone`, `data`) VALUES
(8, 'Jhones da silva gonçalves', 'jhones.goncalves@outlook.com', 'O Power over Ethernet (POE), é um adaptador que permite transmitir energia elétrica usando o próprio cabo de rede, juntamente com os dados através de dois pares do cabo que não são utilizados para transmissão de dados. Atualmente é bastante utilizado para instalação de equipamentos wireless, como: Routerboard, Roteadores, Access Point, entre outros, normalmente esses equipamentos são instalados em torres ou telhados e com o Kit POE a instalação é simplificada, bastando somente um cabo de rede para que seja levado até o rádio a conexão de rede e também a alimentação.', '1141313170', '2017-06-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `subTitulo` varchar(150) DEFAULT NULL,
  `corpo` longtext,
  `data` datetime DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `subTitulo`, `corpo`, `data`, `nome`) VALUES
(1, 'Eu gosto de bala de goma', 'Problems look mighty small from 150 miles up', '  To go places and do things that have never been done before – that’s what living is all about.<p></p>\r\n\r\n<p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>\r\n\r\n<p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>\r\n\r\n<p>Placeholder text by <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>\r\n\r\n<p>"&gt;</p>\r\n\r\n<p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman\'s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>\r\n\r\n<p>Science cuts two ways, of course; its products can be used for both good and evil. But there\'s no turning back from science. The early warnings about technological dangers also come from science.</p>\r\n\r\n<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>\r\n\r\n<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That\'s how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>\r\n\r\n<p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>\r\n\r\n<h2>The Final jhones</h2>\r\n\r\n<p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n<p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n<blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>\r\n\r\n<p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>\r\n\r\n<h2>Reaching for the Estrela</h2>\r\n\r\n<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>\r\n\r\n<p><a href="#"><img alt="" class="img-responsive" src="http://localhost/top_cms/templates/clean/img/post-sample-image.jpg"> </a> To go places and do things that have never been done before – that’s what living is all about.</p>\r\n\r\n<p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>\r\n\r\n<p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>\r\n\r\n<p>Placeholder text by <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>\r\n"&gt;"&gt;', NULL, NULL),
(2, 'I believe every human has a finite number of heartbeats', 'I don\'t intend to waste any of mine.', '<p>&nbsp;tudo bem?</p><img width="200" height="200" src="http://localhost/trumbowyg/img/curso bootstrap.PNG" alt=""><img>', NULL, NULL),
(3, 'Science has not yet mastered prophecy', 'We predict too much for the next year and yet far too little for the next ten.', NULL, NULL, NULL),
(4, 'Failure is not an option', 'Many say exploration is part of our destiny, but it’s actually our duty to future generations.', NULL, NULL, NULL),
(5, 'Man must explore, and this is exploration at its greatest', 'Problems look mighty small from 150 miles up', NULL, NULL, NULL),
(6, 'Man must explore, and this is exploration at its greatest', 'Problems look mighty small from 150 miles up', NULL, NULL, NULL),
(10, 'opa', 'asasa', '<img src="http://localhost/trumbowyg/img/aHR0cDovL3d3dy5jbGlja2dyYXRpcy5jb20uYnIvZm90b3MtaW1hZ2Vucy9pbWFnZW0vYUhSMGNEb3ZMMjV2ZEdsamFXRnpMblZ1YVhabGNuTnBZUzVqYjIwdVluSXZibVYwTDJsdFlXZGxjeTlqYjI1elpXcHZjeTF3Y205bVpYTnBiMjVoYkdWekwyMHZiVzh2Ylc5MEwyMXZkR2wyYjNNdGFXNW.jpg" alt=""><img>', '2017-06-07 00:00:00', 'Jhones silva gonçalves'),
(8, 'noticia 2', '', '<p>Bom dia galera do whattsap</p><img src="http://localhost/trumbowyg/img/aHR0cDovL3d3dy5jbGlja2dyYXRpcy5jb20uYnIvZm90b3MtaW1hZ2Vucy9pbWFnZW0vYUhSMGNEb3ZMMjV2ZEdsamFXRnpMblZ1YVhabGNuTnBZUzVqYjIwdVluSXZibVYwTDJsdFlXZGxjeTlqYjI1elpXcHZjeTF3Y205bVpYTnBiMjVoYkdWekwyMHZiVzh2Ylc5MEwyMXZkR2wyYjNNdGFXNW.jpg" alt=""><img>', '2017-06-07 00:00:00', 'Jhones silva gonçalves'),
(9, 'Noticia teste', 'subtitulo', '<img src="http://localhost/trumbowyg/img/aHR0cDovL3d3dy5jbGlja2dyYXRpcy5jb20uYnIvZm90b3MtaW1hZ2Vucy9pbWFnZW0vYUhSMGNEb3ZMMjV2ZEdsamFXRnpMblZ1YVhabGNuTnBZUzVqYjIwdVluSXZibVYwTDJsdFlXZGxjeTlqYjI1elpXcHZjeTF3Y205bVpYTnBiMjVoYkdWekwyMHZiVzh2Ylc5MEwyMXZkR2wyYjNNdGFXNW.jpg" alt=""><img>', '2017-06-07 00:00:00', 'Jhones silva gonçalves'),
(11, 'noticia 3', 'mais uma', '<img src="http://localhost/trumbowyg/img/aHR0cDovL3d3dy5jbGlja2dyYXRpcy5jb20uYnIvZm90b3MtaW1hZ2Vucy9pbWFnZW0vYUhSMGNEb3ZMMjV2ZEdsamFXRnpMblZ1YVhabGNuTnBZUzVqYjIwdVluSXZibVYwTDJsdFlXZGxjeTlqYjI1elpXcHZjeTF3Y205bVpYTnBiMjVoYkdWekwyMHZiVzh2Ylc5MEwyMXZkR2wyYjNNdGFXNW.jpg" alt=""><img>', '2017-06-07 00:00:00', 'Jhones silva gonçalves'),
(12, 'mais uma', 'de', '<img src="http://localhost/trumbowyg/img/aHR0cDovL3d3dy5jbGlja2dyYXRpcy5jb20uYnIvZm90b3MtaW1hZ2Vucy9pbWFnZW0vYUhSMGNEb3ZMMjV2ZEdsamFXRnpMblZ1YVhabGNuTnBZUzVqYjIwdVluSXZibVYwTDJsdFlXZGxjeTlqYjI1elpXcHZjeTF3Y205bVpYTnBiMjVoYkdWekwyMHZiVzh2Ylc5MEwyMXZkR2wyYjNNdGFXNW.jpg" alt=""><img>', '2017-06-07 18:18:28', 'Jhones silva gonçalves'),
(13, 'agora', 'opa', '<img src="http://localhost/trumbowyg/img/aHR0cDovL3d3dy5jbGlja2dyYXRpcy5jb20uYnIvZm90b3MtaW1hZ2Vucy9pbWFnZW0vYUhSMGNEb3ZMMjV2ZEdsamFXRnpMblZ1YVhabGNuTnBZUzVqYjIwdVluSXZibVYwTDJsdFlXZGxjeTlqYjI1elpXcHZjeTF3Y205bVpYTnBiMjVoYkdWekwyMHZiVzh2Ylc5MEwyMXZkR2wyYjNNdGFXNW.jpg" alt=""><img>', '2017-06-07 15:20:17', 'Jhones silva gonçalves');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina`
--

CREATE TABLE `pagina` (
  `id` int(10) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `corpo` text NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pagina`
--

INSERT INTO `pagina` (`id`, `titulo`, `corpo`, `descricao`, `tags`) VALUES
(3, 'About', '<p><img alt="" src="img/f.png" style="border-style:solid; border-width:1px; height:153px; margin:12px; width:450px" /></p>\r\n\r\n<p>kljdwkjehwjdkjfnwe dswfhewoiufhewoifdm,asc &nbsp;<strong>wejkfweo</strong>ifhwom, <strong>ckwjedfhwe</strong>uiofhdeoiw</p>\r\n', '  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et ', 'tag1, tag2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `id` int(10) NOT NULL,
  `sobre` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitas`
--

CREATE TABLE `visitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `uniques` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `pageviews` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `visitas`
--

INSERT INTO `visitas` (`id`, `data`, `uniques`, `pageviews`) VALUES
(1, '2017-06-06', 10, 62),
(2, '2017-06-07', 1, 82);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data` (`data`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
