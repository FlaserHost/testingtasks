/* создание таблицы "Спортсмены": */
CREATE TABLE IF NOT EXISTS `спортсмены` (
  `id_спортсмена` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `ФИО` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `телефон` bigint NOT NULL,
  `дата рождения` date NOT NULL,
  `возраст` int NOT NULL,
  `дата и время создания записи` date NOT NULL,
  `номер паспорта` int NOT NULL,
  `среднее место на соревнованиях` decimal(10,0) NOT NULL,
  `биография` varchar(255) NOT NULL,
  `видеопрезентация` tinyint(1) NOT NULL
) ENGINE=InnoDB;

/* выбор топ 5 спортсменов больше других посетивших соревнования */
SELECT COUNT(*) as посещений, res.id_спортсмена as номер, fio.ФИО as ФИО FROM результаты res LEFT JOIN спортсмены fio ON res.id_спортсмена = fio.id_спортсмена GROUP BY res.id_спортсмена ORDER BY 1 DESC LIMIT 5