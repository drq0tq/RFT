--
-- Tábla szerkezet ehhez a táblához `orokbefogadhato_allatok`
--

CREATE TABLE `orokbefogadhato_allatok` (
  `id` int(11) NOT NULL,
  `kep` varchar(255),
  `kor` int(11) NOT NULL,
  `nem` tinyint(1) NOT NULL,
  `fajta` varchar(255) NOT NULL,
  `meret` varchar(255) DEFAULT NULL,
  `mozgasigeny` varchar(255) DEFAULT NULL,
  `ivartalanitott` tinyint(1) DEFAULT NULL,
  `gyerekbarat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 
--
ALTER TABLE `orokbefogadhato_allatok` MODIFY  `kep` varchar(255);
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

--
-- A tábla indexei `orokbefogadhato_allatok`
--
ALTER TABLE `orokbefogadhato_allatok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT a táblához `orokbefogadhato_allatok`
--
ALTER TABLE `orokbefogadhato_allatok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;