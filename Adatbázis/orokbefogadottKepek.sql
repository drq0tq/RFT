
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
