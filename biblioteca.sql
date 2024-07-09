CREATE TABLE `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_de_usuario` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `livros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(255) NOT NULL,
  `autor` VARCHAR(255) NOT NULL,
  `disponivel` BOOLEAN NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
);

CREATE TABLE `emprestimos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_usuario` INT NOT NULL,
  `id_livro` INT NOT NULL,
  `data_emprestimo` DATETIME NOT NULL,
  `data_devolucao` DATETIME NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_usuario`) REFERENCES `usuarios`(`id`),
  FOREIGN KEY (`id_livro`) REFERENCES `livros`(`id`)
);
