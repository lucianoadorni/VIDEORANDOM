-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2024 at 11:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `random_video`
--

CREATE TABLE `random_video` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `info` text NOT NULL,
  `argumento` text NOT NULL,
  `personajes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `random_video`
--

INSERT INTO `random_video` (`id`, `name`, `link`, `info`, `argumento`, `personajes`) VALUES
(1, 'Spider-Man: Across The Spider-Verse', 'Video-Spiderman.mp4', 
'Director: Bob Persichetti, Peter Ramsey, Rodney Rothman</p>\r\n<p>Productores: Avi Arad, Amy Pascal, Phil Lord, Christopher Miller, Christina Steinberg</p>\r\n<p>Guion: Phil Lord, Rodney Rothman</p>\r\n<p>Música: Daniel Pemberton</p>\r\n<p>Estudio: Sony Pictures Animation, Columbia Pictures, Marvel Entertainment, Pascal Pictures</p>\r\n<p>Duración: 117 minutos', 'La historia sigue a un adolescente llamado Miles Morales, quien adquiere habilidades arácnidas y se convierte en Spider-Man después de ser mordido por una araña radioactiva. Descubre un multiverso donde existen múltiples Spider-Personas de diferentes realidades.',
'Miles Morales: Protagonista principal, un adolescente de ascendencia latina y afroamericana que se convierte en Spider-Man.</p>\r\n<p>Peter B. Parker: Un Spider-Man adulto y desilusionado de otra dimensión.</p>\r\n<p>Gwen Stacy / Spider-Woman: Una versión alternativa de Gwen Stacy que también tiene habilidades de Spider-Man.</p>\r\n<p>Spider-Man Noir, Spider-Ham y Peni Parker: Otras versiones de Spider-Man de diferentes dimensiones que se unen a Miles y los demás.'),

(2, 'La la land', 'Video-LaLaLand.mp4', 'Director: Damien Chazelle</p>\r\n<p>Guionista: Damien Chazelle</p>\r\n<p>Productores: Fred Berger, Jordan Horowitz, Gary Gilbert, Marc Platt</p>\r\n<p>Estudio: Summit Entertainment, Black Label Media, Gilbert Films, Imposter Pictures</p>\r\n<p>Duración: 128 minutos</p>\r\n<p>Género: Comedia musical, drama romántico', 
'\"La La Land\" es una historia romántica que sigue las vidas entrelazadas de Mia (interpretada por Emma Stone), una aspirante a actriz, y Sebastian (interpretado por Ryan Gosling), un apasionado pianista de jazz. Ambos luchan por alcanzar sus sueños en la competitiva ciudad de Los Ángeles. A medida que persiguen sus metas, se enamoran y enfrentan desafíos que ponen a prueba su relación y sus ambiciones individuales.', 
'Mia (interpretada por Emma Stone): Una joven aspirante a actriz que trabaja como barista en un café de los estudios de Warner Bros. Está decidida a alcanzar el éxito en la actuación, pero se enfrenta a numerosos rechazos en su búsqueda de oportunidades.</p>\r\n<p>Sebastian (interpretado por Ryan Gosling): Un apasionado pianista de jazz que sueña con abrir su propio club de jazz y preservar el género musical. A pesar de su talento, lucha por mantenerse fiel a sus principios en un mundo cambiante de la música.\r\n\r\n'),

(3, 'The Batman', 'Video-TheBatman.mp4', 
'Título: The Batman</p>\r\n<p>Director: Matt Reeves</p>\r\n<p>Productores: Dylan Clark, Matt Reeves</p>\r\n<p>Escritores del guion: Matt Reeves, Peter Craig</p>\r\n<p>Artistas Musicales: Michael Giacchino (compositor de la banda sonora)</p>\r\nEstudio: Warner Bros. Pictures</p>\r\n<p>Duración: Aproximadamente 2 horas y 55 minutos', 
'En "The Batman", la historia se centra en los primeros días de Bruce Wayne (interpretado por Robert Pattinson) como Batman. Ambientada en Gotham City, la trama sigue a un joven y decidido Bruce Wayne mientras investiga una serie de crímenes que sacuden la ciudad. Se enfrenta a una serie de desafíos y peligros al intentar desentrañar la trama de corrupción que impregna Gotham y descubrir la verdad detrás de los misteriosos crímenes, enfrentándose a icónicos villanos como el Riddler y Catwoman. El enfoque de la película recae en el aspecto detectivesco y la lucha interna de Bruce Wayne para convertirse en el símbolo de esperanza que será conocido como Batman.', 
'Bruce Wayne / Batman: Joven millonario y heredero de Wayne Enterprises, traumatizado por la muerte de sus padres en su infancia. Decide luchar contra el crimen como Batman después de presenciar la corrupción en Gotham.</p>\r\n<p>El Riddler: Un enigmático y astuto villano obsesionado con poner a prueba a Batman y exponer la corrupción en Gotham a través de una serie de crímenes misteriosos y acertijos.</p>\r\n<p>Selina Kyle / Catwoman: Una ladrona hábil y astuta con quien Batman tiene una relación ambigua y compleja. A veces se cruza en su camino como aliada y otras como adversaria.</p>'),

(4, 'The Creator', 'Video-TheCreator.mp4', 
'Director: Gareth Edwards</p>\r\n<p>Productores: Gareth Edwards, Kiri Hart, Arnon Milchan</p>\r\n<p>Escritores del guión: Gareth Edwards, Chris Weitz</p>\r\n<p>Artistas Musicales: Hans Zimmer</p>\r\n<p>Estudio: Regency Enterprises</p>\r\n<p>Duración: 113mins</p>', 
'En 2070, una inteligencia artificial (IA) detona una guerra nuclear sobre Los Ángeles, California. En respuesta, la mayoría de las naciones occidentales libran una guerra contra la IA para evitar la extinción de la humanidad, los pueblos de la llamada Nueva Asia (compuesta por Sudeste Asiático, Japón, Taiwan, Bangladés, Bután, Nepal y partes de la India) se resisten a ellos y siguen adoptando la IA. El ejército busca asesinar a "Nirmata", un misterioso arquitecto principal detrás de los avances de la IA. El USS NOMAD (North American Orbital Mobile Aerospace Defense) está desarrollado como una estación espacial avanzada capaz de lanzar ataques destructivos desde órbita.', 
'John David Washington, un sargento militar y agente encubierto del ejército estadounidense. Tiene un brazo derecho y una pierna izquierda artificiales debido a las lesiones que sufrió durante la explosión nuclear en Los Ángeles, además de perder a sus padres y a su hermano.</p>\r\n<p>Alfa-O, una simuladora robótica con la capacidad de controlar tecnología de forma remota.</p>\r\n<p>Maya Fey-Taylor, la hija y heredera de la Nirmata original y esposa de Joshua.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
