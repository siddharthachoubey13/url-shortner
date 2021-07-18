1. MySQL table schema -

Create Table: CREATE TABLE `url_hash` (
  `url` text,
  `click_count` int DEFAULT '0',
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
)

2. Database credential (DB name, Username, Password) should be changed in config/database.php file.

