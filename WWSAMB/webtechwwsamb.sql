
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `salon` (
  `id` int(11) NOT NULL,
  `nev` varchar(36) NOT NULL,
  `osszeg` int(11) NOT NULL,
  `row` int(11) NOT NULL,
  `cell` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `salon` (`id`, `nev`, `osszeg`, `row`, `cell`) VALUES
(3, 'a', 2500, 2, 2),
(4, 'a', 2500, 3, 2),
(5, 'Téglás Réka', 2500, 2, 5),
(6, '', 0, 2, 2);


ALTER TABLE `salon`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `salon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

