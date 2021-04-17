--
-- Tábla szerkezet ehhez a táblához `talalt_allatok`
--

CREATE TABLE `talalt_allatok` (
  `id` int(11) NOT NULL,
  `kep` varchar(255) NOT NULL,
  `hely` varchar(255) NOT NULL,
  `allapot` varchar(255) NOT NULL,
  `telefonszam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `talalt_allatok`
--

INSERT INTO `talalt_allatok` (`id`, `kep`, `hely`, `allapot`, `telefonszam`) VALUES
(1, 'kep01', 'Tököl', 'jo', '06306458217'),
(2, 'kep02', 'Isaszeg', 'rossz', '06704314520'),
(3, 'kep03', 'Dunapart', 'atlagos', '36203812482');

--
-- A tábla indexei `talalt_allatok`
--
ALTER TABLE `talalt_allatok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT a táblához `talalt_allatok`
--
ALTER TABLE `talalt_allatok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;