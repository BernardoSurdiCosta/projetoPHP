-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_produtos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_produtos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_produtos` DEFAULT CHARACTER SET utf8 ;
USE `db_produtos` ;

-- -----------------------------------------------------
-- Table `db_produtos`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_produtos`.`produtos` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `qtd_estoque` INT NOT NULL,
  `preco_venda` DOUBLE NOT NULL,
  `likes` INT NULL,
  `dislikes` INT NULL,
  `imagem` VARCHAR(255) NULL,
  PRIMARY KEY (`id_produto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_produtos`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_produtos`.`usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
