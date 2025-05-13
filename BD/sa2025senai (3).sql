-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/05/2025 às 02:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sa2025senai`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(80) NOT NULL,
  `cnpj_empresa` char(18) NOT NULL,
  `nome_fantasia` varchar(80) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` int(50) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `cep` char(9) NOT NULL,
  `telefone` int(11) NOT NULL,
  `flg_ativo` char(1) NOT NULL COMMENT 'S ou N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_movimentacao`
--

CREATE TABLE `tb_movimentacao` (
  `id_movi` int(11) NOT NULL,
  `tipo_mov` char(1) NOT NULL COMMENT 'Entrada(E) ou Saída(S)',
  `data_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_salas`
--

CREATE TABLE `tb_salas` (
  `id_sala` int(11) NOT NULL,
  `numero_sala` int(11) NOT NULL,
  `flg_ativo` char(1) NOT NULL COMMENT 'S ou N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tipo_usuario`
--

CREATE TABLE `tb_tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(15) NOT NULL COMMENT 'admin ou comum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usu` varchar(80) NOT NULL,
  `cpf_usu` varchar(14) NOT NULL,
  `login_usu` varchar(100) NOT NULL,
  `senha_usu` varchar(35) NOT NULL,
  `flg_ativo` char(1) NOT NULL COMMENT 'S ou N',
  `cod_cracha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices de tabela `tb_movimentacao`
--
ALTER TABLE `tb_movimentacao`
  ADD PRIMARY KEY (`id_movi`);

--
-- Índices de tabela `tb_salas`
--
ALTER TABLE `tb_salas`
  ADD PRIMARY KEY (`id_sala`);

--
-- Índices de tabela `tb_tipo_usuario`
--
ALTER TABLE `tb_tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_movimentacao`
--
ALTER TABLE `tb_movimentacao`
  MODIFY `id_movi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_salas`
--
ALTER TABLE `tb_salas`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_tipo_usuario`
--
ALTER TABLE `tb_tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_tipo_usuario`
--
ALTER TABLE `tb_tipo_usuario`
  ADD CONSTRAINT `tb_tipo_usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tb_usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
