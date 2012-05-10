-- nome para banco de dados: bd_blog

-- configurar o arquivo em 'appication/config/database.php' , adcionar usuário e senha do banco

-- POSTS
CREATE TABLE IF NOT EXISTS `posts`(
`id` INT(8) NOT NULL AUTO_INCREMENT,
`titulo` VARCHAR(30) NOT NULL,
`chamada` TEXT NOT NULL,
`texto` TEXT NOT NULL,
`data_registro` DATETIME,
PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




