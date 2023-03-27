create table challenge(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(100) NOT NULL,
   log VARCHAR(255) NOT NULL,
   datetime DATETIME default CURRENT_TIMESTAMP,
   PRIMARY KEY ( id )
);

INSERT INTO `challenge` (`id`, `name`, `log`, `datetime`) VALUES (NULL, 'Parabéns!', 'Voce imprimiu o log de erro', CURRENT_TIMESTAMP);
