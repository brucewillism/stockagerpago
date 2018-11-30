CREATE DATABASE `stockager`;

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nomeEmp` varchar(40)  NOT NULL,
  `cnpj` varchar(40)  NOT NULL,
  `fone` varchar(200) NOT NULL,
  `cel` varchar(200) NOT NULL,
  `face` varchar(200) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(40)  NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `nomeRes` varchar(40)  NOT NULL,
  `endereco`varchar(245)NOT NULL,
  `bairro_propietario` varchar(45)NOT NULL,
  `cidade_propietario` varchar(40) NOT NULL,
  `cpf` varchar(255)NOT NULL,
  `nascimento` varchar (255) NOT NULL,
  `rg` varchar (255) NOT NULL,
  `user` varchar(40)  NOT NULL UNIQUE,
  `pw` varchar(40)  NOT NULL,
  `ARQUIVO` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `cat_id` int(110) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_cat` varchar(45) COLLATE utf8_unicode_ci NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categorias` (`cat_id`, `nome_cat`) VALUES
(1,'Artigos Para Festas'),
(2,'Automotivo'),
(3,'Bebidas'),
(4,'Briquedos'),
(5,'Calcados'),
(6,'Comestiveis'),
(7,'Construcao'),
(8,'Eletronicos'),
(9,'Esportes e Lazer'),
(10,'Farmacia'),
(11,'Ferramentas'),
(12,'Games'),
(13,'Higiene pessoal'),
(14,'Informatica'),
(15,'Livros'),
(16,'Moda'),
(17,'Moveis'),
(18,'Pet Shop');

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `pro_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `pro_nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pro_descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_quantidade` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pro_preco` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ARQUIVO` longblob,
  FOREIGN KEY (id_user) REFERENCES usuarios(usuario_id),
  FOREIGN KEY (id_categoria) REFERENCES categorias(cat_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `emails`;

CREATE TABLE `emails` (
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `TB_COMENTARIO`;

CREATE TABLE `TB_COMENTARIO` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `COM_NOME` varchar(255) NOT NULL,
  `COM_COMENTARIO` varchar(255) NOT NULL,
  `id_produto` int(11) NOT NULL,
  FOREIGN KEY (id_produto) REFERENCES produtos(pro_id)
  );

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET time_zone = "+00:00";

-- CREATE TABLE IF NOT EXISTS `fornecedores` (
--   `id` int(11) NOT NULL AUTO_INCREMENT,
--   `cpf` varchar(100) COLLATE utf8_unicode_ci,
--   `cnpj` varchar(100) COLLATE utf8_unicode_ci,
--   `rg` varchar(20) COLLATE utf8_unicode_ci,
--   `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
--   `nome_fantasia` varchar(100) COLLATE utf8_unicode_ci,
--   `cep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
--   `endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
--   `numero` int(11) NOT NULL,
--   `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
--   `complemento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
--   `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
--   `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
--   `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `celular` varchar(20) COLLATE utf8_unicode_ci,
--   `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
--   PRIMARY KEY (`id`),
--   UNIQUE KEY `id` (`id`,`cpf`)
-- ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;


-- CREATE TABLE IF NOT EXISTS `pagamentos` (
--   `id` int(10) NOT NULL AUTO_INCREMENT,
--   `id_for` int(10) NOT NULL,
--   `numero_doc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `serie` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `emissao` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
--   `vencimento` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
--   `prorrogado` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
--   `centro_de_custo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
--   `pagamento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `forma_pagamento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `baixar` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `parcela` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `valor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `acrescimo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `desconto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `total` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   `obs` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
--   PRIMARY KEY (`id`),
--   UNIQUE KEY `id` (`id`)
-- ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(100) COLLATE utf8_unicode_ci,
  `cnpj` varchar(100) COLLATE utf8_unicode_ci,
  `rg` varchar(20) COLLATE utf8_unicode_ci,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nome_fantasia` varchar(100) COLLATE utf8_unicode_ci,
  `cep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8_unicode_ci,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id),
  UNIQUE KEY `id` (`id`,`cpf`,`cnpj`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;
