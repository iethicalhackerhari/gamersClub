CREATE TABLE `quiz` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `quiz` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'What was the first video game genre ever?', 'Racing', 'Adventure', 'Fighting', 'Role-play', 'Adventure', 'Adventure'),
(2, 'Most famous video game character of all the time?', 'Mario', 'Clyde', 'Will Irons', 'Astro Boy', 'Mario', 'Mario'),
(3, 'How many GTA versions have been released?', '10', '11', '14', '15', '15', '15'),
(4, 'What is the #1 game in the year 2020?', 'GTA V', 'Fortnite', 'Apex Legends', 'Minecraft', 'Fortnite', 'Fortnite'),
(5, '_________ is a Sandbox Construction game.', 'Fortnite', 'Fall guys', 'Minecraft', 'Apex Legends', 'Minecraft', 'Minecraft');