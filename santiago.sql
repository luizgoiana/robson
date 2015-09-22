-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Set-2015 às 03:22
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `santiago`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `keywords` varchar(11) NOT NULL,
  `type` int(1) NOT NULL,
  `imagepath` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `keywords`, `type`, `imagepath`) VALUES
(1, 'Teste', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget interdum nibh. Suspendisse finibus libero lectus, sit amet commodo libero porta nec. Fusce ut facilisis urna. Morbi feugiat erat ac venenatis eleifend. Sed laoreet auctor ipsum, vitae pharetra tellus pretium a. Duis dictum commodo tortor nec facilisis. Sed egestas semper nisi, id suscipit tellus consequat non. Nulla fermentum diam libero, et placerat arcu fermentum vel. Vestibulum hendrerit volutpat dui, non pretium nisl consequat at. Donec porta nunc a ornare venenatis. Nam consequat fringilla nunc, quis laoreet velit. Vestibulum molestie magna pretium enim auctor, in rutrum augue ultricies. Suspendisse sollicitudin lacinia dignissim. Aenean porta malesuada turpis ut gravida. Duis accumsan vehicula ipsum ut pretium.\n\nQuisque eu eleifend massa. Mauris leo purus, sodales id malesuada ut, vehicula ut odio. Maecenas lacinia, eros non vulputate hendrerit, elit turpis sollicitudin sem, quis interdum lorem lacus at augue. Ut a finibus felis. Morbi dignissim, ante non imperdiet finibus, arcu odio aliquet magna, congue dignissim ex justo at risus. Fusce interdum, lectus nec sollicitudin ultricies, enim ipsum placerat sem, a laoreet eros quam eget nibh. Aliquam aliquam, nisi nec maximus porttitor, risus dui laoreet est, sit amet hendrerit dolor lectus vitae arcu. Donec ex lacus, ultricies ac erat ut, bibendum efficitur purus. Duis consequat libero lacus, quis tempor enim bibendum sed. Vestibulum sit amet justo dolor. Phasellus rutrum ut quam ac gravida. Nulla ultrices rhoncus purus sed congue.\n\nNunc vel lorem mi. Aliquam ut erat convallis, imperdiet urna sit amet, porta tellus. Fusce imperdiet interdum justo nec pretium. Vivamus ultricies felis ac lobortis euismod. Integer turpis nisi, vulputate nec leo nec, egestas auctor nulla. Sed vitae nulla porttitor, tristique elit ut, tincidunt erat. Aliquam imperdiet feugiat erat a placerat. Suspendisse in justo ac erat condimentum vestibulum ac nec nisl. Aenean massa eros, fringilla quis imperdiet vel, hendrerit sit amet quam. Duis vestibulum, velit quis pretium gravida, nibh ligula pretium leo, volutpat commodo elit odio et risus. Aenean ipsum mauris, ornare ut condimentum et, egestas sed eros. Donec nec facilisis orci.\n\nPhasellus rutrum dapibus augue, sit amet eleifend massa commodo eu. Fusce auctor arcu non orci posuere tempor. Maecenas tincidunt ornare molestie. Cras mattis, enim vel volutpat imperdiet, nisi nisi volutpat eros, vitae molestie leo lacus vel enim. Suspendisse viverra, turpis non laoreet euismod, ligula nisl consectetur lectus, sed viverra arcu metus vitae mauris. Etiam at sapien imperdiet ante lacinia hendrerit. Phasellus in velit turpis. Nunc at commodo nunc, sit amet laoreet sapien.', '1', 1, 'img/team/1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
