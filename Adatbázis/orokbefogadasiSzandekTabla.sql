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

--
-- A tábla indexei `orokbefogadasi_szandek`
--
ALTER TABLE `orokbefogadasi_szandek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT a táblához `orokbefogadasi_szandek`
--
ALTER TABLE `orokbefogadasi_szandek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;