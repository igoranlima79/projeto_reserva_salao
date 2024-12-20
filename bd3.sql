-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2024 às 03:12
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
-- Banco de dados: `bd3`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `apartamento` int(3) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `assunto` varchar(50) DEFAULT NULL,
  `mensagem` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `apartamento`, `email`, `assunto`, `mensagem`) VALUES
(1, 'Alessandra Coelho Ferreira Lima', 101, 'alecoelho_30@yahoo.com.br', 'Reserva de Salão', 'Disponibilidade'),
(3, 'Matheus Coelho', 403, 'alecoelho_30@yahoo.com.br', 'Dúvida', 'Podemos reservar para o dia 5/11?'),
(5, 'Miguel Coelho', 202, 'coelho@gmail.com', 'Dúvida', 'O salão está disponível em 07/12?'),
(6, 'Rodrigo José', 303, 'rodrigo@gmail.com', 'Cadastro de usuário', 'Rodrigo José, e-mail: rodrigo@gmail.com'),
(7, 'Pedro Borges', 404, 'pedro@gmail.com', 'Cadastro de Usuário', 'Pedro Borges, e-mail pedro@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `apartamento` varchar(3) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `horarioinicial` time DEFAULT NULL,
  `horariofinal` time DEFAULT NULL,
  `observacao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `reserva`
--

INSERT INTO `reserva` (`id`, `nome`, `apartamento`, `data`, `horarioinicial`, `horariofinal`, `observacao`) VALUES
(9, 'Alessandra Coelho Ferreira Lima', '101', '2024-12-07', '10:00:00', '22:00:00', 'Reserva 1'),
(10, 'Matheus Coelho Ferreira Lima', '101', '2024-12-27', '10:00:00', '22:00:00', 'Reserva'),
(11, 'Matheus Coelho Ferreira Lima', '101', '2024-12-18', '18:00:00', '22:00:00', 'Reserva 2'),
(13, 'Pedro Borges', '404', '2025-01-01', '08:00:00', '18:00:00', 'Reserva 4'),
(14, 'Pedro Borges', '404', '2025-01-03', '10:00:00', '22:00:00', 'Reserva 5');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `apartamento` int(3) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `senha` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `apartamento`, `email`, `telefone`, `cidade`, `estado`, `senha`) VALUES
(1, 'Alessandra Coelho Ferreira Lima', 101, 'ale12354@yahoo.com.br', '(83) 98772-0810', 'João Pessoa', 'Paraiba', '12345'),
(2, 'Matheus Coelho Ferreira Lima', 403, 'matheus@gmail.com', '(83) 99999-8888', 'João Pessoa', 'Paraiba', '99999'),
(5, 'Rodrigo José', 303, 'rodrigo@gmail.com', '(83) 99999-8888', 'João Pessoa', 'Paraiba', '45678'),
(6, 'admin', 102, 'inperialluxor@gmail.com', '(83) 99999-8888', 'João Pessoa', 'Paraiba', 'admin'),
(7, 'Pedro Borges', 404, 'pedro@gmail.com', '(83) 99999-8888', 'João Pessoa', 'Paraiba', '98745');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data` (`data`) USING BTREE;

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
