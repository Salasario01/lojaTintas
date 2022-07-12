CREATE DATABASE lojatintas;

CREATE TABLE IF NOT EXISTS `lojatintas`.`usuarios` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nomeUsuario` VARCHAR(45) NOT NULL,
  `senha` CHAR(32) NOT NULL,
  `nivel` TINYINT NOT NULL COMMENT '1- Funcionário / 2- Cliente',
  `nomeCompleto` VARCHAR(255) NOT NULL,
  `cpf` BIGINT(11) NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojatintas`.`tintas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojatintas`.`tintas` (
  `idTinta` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `preco` DECIMAL(6,2) NOT NULL,
  `foto` VARCHAR(255) NOT NULL,
  `codigo` VARCHAR(45) NOT NULL,
  `litros` FLOAT NOT NULL,
  PRIMARY KEY (`idTinta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojatintas`.`compras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojatintas`.`compras` (
  `idCompra` INT NOT NULL AUTO_INCREMENT,
  `metodoPagamento` TINYINT NOT NULL COMMENT '1- Boleto / 2- Crédito',
  `cep` INT NOT NULL,
  `numero` INT(6) NOT NULL,
  `observacao` VARCHAR(255) NOT NULL,
  `status` TINYINT NOT NULL COMMENT '1- Enviado / 2- Cancelado / 3- Entregue',
  `usuarios_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idCompra`),
  INDEX `fk_compras_usuarios1_idx` (`usuarios_idUsuario` ASC) ,
  CONSTRAINT `fk_compras_usuarios1`
    FOREIGN KEY (`usuarios_idUsuario`)
    REFERENCES `lojatintas`.`usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojatintas`.`tintas_has_compras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojatintas`.`tintas_has_compras` (
  `tintas_idTinta` INT NOT NULL,
  `compras_idCompra` INT NOT NULL,
  `quantidade` INT NOT NULL,
  PRIMARY KEY (`tintas_idTinta`, `compras_idCompra`),
  INDEX `fk_tintas_has_compras_compras1_idx` (`compras_idCompra` ASC) ,
  INDEX `fk_tintas_has_compras_tintas_idx` (`tintas_idTinta` ASC) ,
  CONSTRAINT `fk_tintas_has_compras_tintas`
    FOREIGN KEY (`tintas_idTinta`)
    REFERENCES `lojatintas`.`tintas` (`idTinta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tintas_has_compras_compras1`
    FOREIGN KEY (`compras_idCompra`)
    REFERENCES `lojatintas`.`compras` (`idCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)

INSERT INTO `tintas` (`idTinta`, `nome`, `preco`, `foto`, `codigo`, `litros`) 
VALUES (NULL, 'Tinta-Amarela Coral ', '160.00', '2022.07.08-01.33.07.jpg', '1', '10'),
(NULL, 'Tinta-Azul Coral', '180.00', '2022.07.08-01.34.06.jpg', '2', '10'),
(NULL, 'Tinta-Bege Suvinil', '120.00', '2022.07.08-01.34.45.jpg', '3', '10'),
(NULL, 'Tinta-Cinza Coral', '135.00', '2022.07.08-01.35.38.jpg', '4', '10'),
(NULL, 'Tinta-Laranja Suvinil', '159.00', '2022.07.08-01.36.35.jpg', '5', '10'),
(NULL, 'Tinta-Preta Novacor', '129.00', '2022.07.08-01.37.11.jpg', '6', '10'),
(NULL, 'Tinta-Verde-Água Suvinil', '209.00', '2022.07.08-01.37.53.jpg', '7', '10'),
(NULL, 'Tinta-Vermelha Novacor', '165.00', '2022.07.08-01.38.37.jpg', '8', '10')  

INSERT INTO `usuarios` (`idUsuario`, `nomeUsuario`, `senha`, `nivel`, `nomeCompleto`, `cpf`) 
VALUES (NULL, 'Gabriel', '123456', '1', 'Gabriel Salasario', '41140342002'),
(NULL, 'Felipe', '123456', '2', 'felipe prim', '96285459061')


INSERT INTO `compras` (`idCompra`, `metodoPagamento`, `cep`, `numero`, `observacao`, `status`, `usuarios_idUsuario`)
VALUES (NULL, '1', '57297', '225', 'casa', '3', '3')
ENGINE = InnoDB;

