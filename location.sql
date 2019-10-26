
CREATE TABLE `sh_location` (
  `location_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `geocode` varchar(32) NOT NULL,
  `open` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `sh_location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `name` (`name`);
ALTER TABLE `sh_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;
