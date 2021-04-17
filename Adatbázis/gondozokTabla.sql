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

--
-- A tábla indexei `gondozok`
--
ALTER TABLE `gondozok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT a táblához `gondozok`
--
ALTER TABLE `gondozok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;