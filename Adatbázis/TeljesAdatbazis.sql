-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Ápr 17. 12:08
-- Kiszolgáló verziója: 10.1.40-MariaDB
-- PHP verzió: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `menhelydb`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `gondozok`
--

CREATE TABLE `gondozok` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `munkakor` varchar(255) NOT NULL,
  `vegzettseg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `gondozok`
--

INSERT INTO `gondozok` (`id`, `nev`, `munkakor`, `vegzettseg`) VALUES
(1, 'Kis Andrea', 'kutyakikepzo', 'egyetem'),
(2, 'Tóth Kristóf', 'kutyakikepzo', 'okj'),
(3, 'Balog Nóra', 'kutyakozmetikus', 'okj'),
(4, 'Nagy Eszter', 'allatgondozo', 'erettsegi');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orokbefogadasi_szandek`
--

CREATE TABLE `orokbefogadasi_szandek` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `eletkor` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefonszam` varchar(255) NOT NULL,
  `kutyaazonositoja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `orokbefogadasi_szandek`
--

INSERT INTO `orokbefogadasi_szandek` (`id`, `nev`, `eletkor`, `email`, `telefonszam`, `kutyaazonositoja`) VALUES
(1, 'Nagy Fanni', 25, 'nagy.fanni@gmail.com', '+36205463271', 1),
(2, 'Kiss Péter', 48, 'kisspeti@gmail.com', '+36305546753', 5),
(3, 'Kovács Anna', 31, 'kovacsanna27@gmail.com', '+3670982730', 3),
(4, 'Balogh Írisz', 31, 'b.irisz11@gmail.com', '06306425710', 4);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orokbefogadhato_allatok`
--

CREATE TABLE `orokbefogadhato_allatok` (
  `id` int(11) NOT NULL,
  `kep` varchar(255) NOT NULL,
  `kor` int(11) NOT NULL,
  `nem` tinyint(1) NOT NULL,
  `fajta` varchar(255) NOT NULL,
  `meret` varchar(255) DEFAULT NULL,
  `mozgasigeny` varchar(255) DEFAULT NULL,
  `ivartalanitott` tinyint(1) DEFAULT NULL,
  `gyerekbarat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `orokbefogadhato_allatok`
--

INSERT INTO `orokbefogadhato_allatok` (`id`, `kep`, `kor`, `nem`, `fajta`, `meret`, `mozgasigeny`, `ivartalanitott`, `gyerekbarat`) VALUES
(1, 'kep1', 6, 0, 'keverek', 'kicsi', 'közepes', 1, 0),
(2, 'kep2', 2, 1, 'beagle', 'közepes', 'nagy', 0, 1),
(3, 'kep3', 3, 0, 'tacsko', 'nagy', 'nagy', 1, 1),
(4, 'kep4', 1, 1, 'keverek', 'kicsi', 'kicsi', 1, 1),
(5, 'kep5', 4, 0, 'keverek', 'közepes', 'közepes', 0, 1),
(6, 'kep6', 5, 1, 'nemetjuhasz', 'nagy', 'közepes', 0, 1),
(7, 'kep7', 6, 1, 'keverek', 'kicsi', 'nagy', 1, 1),
(8, 'kep8', 2, 0, 'husky', 'közepes', 'kicsi', 1, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `talalt_allatok`
--

CREATE TABLE `talalt_allatok` (
  `id` int(11) NOT NULL,
  `kep` varchar(255),
  `hely` varchar(255) NOT NULL,
  `allapot` varchar(255) NOT NULL,
  `telefonszam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 
--
ALTER TABLE `talalt_allatok` MODIFY  `kep` varchar(255);
--
-- A tábla adatainak kiíratása `talalt_allatok`
--

INSERT INTO `talalt_allatok` (`id`, `kep`, `hely`, `allapot`, `telefonszam`) VALUES
(1, 'kep01', 'Tököl', 'jo', '06306458217'),
(2, 'kep02', 'Isaszeg', 'rossz', '06704314520'),
(3, 'kep03', 'Dunapart', 'atlagos', '36203812482');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `gondozok`
--

ALTER TABLE `gondozok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orokbefogadasi_szandek`
--
ALTER TABLE `orokbefogadasi_szandek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orokbefogadhato_allatok`
--
ALTER TABLE `orokbefogadhato_allatok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `talalt_allatok`
--
ALTER TABLE `talalt_allatok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `gondozok`
--
ALTER TABLE `gondozok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `orokbefogadasi_szandek`
--
ALTER TABLE `orokbefogadasi_szandek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `orokbefogadhato_allatok`
--
ALTER TABLE `orokbefogadhato_allatok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT a táblához `talalt_allatok`
--
ALTER TABLE `talalt_allatok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  `eletkor` int(11) NOT NULL,
    `permission` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `nev`, `email`, `jelszo`, `eletkor`, `permission`) VALUES
(1, 'Guba Ilona', 'guba.ilona@gmail.com', 'Ab213', 39, 0),
(2, 'Tóth Áron', 'totharon23@gmail.com', '124290', 45, 0),
(3, 'Osváth Ádám', 'o.adam1998@gmail.com', '19980215', 23, 0),
(6, 'admin', 'admin@admin.com', 'adminPassword', 22, 1);

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


--
-- Tábla szerkezet ehhez a táblához `orokbefogadott_kepek`
--

CREATE TABLE `orokbefogadott_kepek` (
  `id` int(11) NOT NULL,
  `kep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `orokbefogadott_kepek`
--
ALTER TABLE `orokbefogadott_kepek`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `orokbefogadott_kepek`
--
ALTER TABLE `orokbefogadott_kepek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
