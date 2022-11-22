-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2022 às 12:28
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `farmacia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(30) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` int(40) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `cpf`, `email`) VALUES
(2, 'é isto', 1, '34w3546546@fghfg.fdkfmdk'),
(4, '4', 5, '6'),
(5, '1', 2, '3'),
(6, '5', 6, '7'),
(7, '1', 2, '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionarios` int(30) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `cpf` int(30) NOT NULL,
  `email` varchar(90) NOT NULL,
  `funcao` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionarios`, `nome`, `cpf`, `email`, `funcao`) VALUES
(17, '1', 1, '1', 'Farmacêutico'),
(18, 'aaaaaa', 4343434, '344343', 'Entregador'),
(19, '1', 1, '1', 'Vendedor'),
(29, '1', 1, '1', 'Vendedor'),
(30, '13', 12, '2', 'Entregador'),
(36, '1', 2, '3', 'Vendedor'),
(37, '33', 33, '33', 'Vendedor'),
(39, '1', 1, '1', 'Vendedor'),
(40, '1', 40, '8808080', 'Estagiário'),
(41, '3453434', 4154545, '2454545', 'Entregador'),
(42, '2', 2, '2', 'Entregador'),
(43, '1', 1, '1', 'Estagiário'),
(44, '14545', 445654, '154656', 'Entregador'),
(54, 'nome gigante para testar23', 54, '54', 'Estagiário'),
(55, '6', 7, '8', 'Entregador'),
(56, '9', 56, '4', 'Estagiário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produtos` int(30) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `codigo_produto` int(30) NOT NULL,
  `preco` float NOT NULL,
  `quantidade` int(30) NOT NULL,
  `tipo` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `nome_produto`, `codigo_produto`, `preco`, `quantidade`, `tipo`) VALUES
(1, '12', 13, 14, 15, 'med'),
(2, '1', 2, 3, 4, '5'),
(3, '111111', 22222, 3333, 4444, 'limpeza'),
(5, 'teste', 12345, 12345, 90, 'limpeza'),
(6, '1', 2, 3, 4, 'coisas de saude'),
(7, 'teste', 12345667, 1234570, 4567788, 'pet'),
(8, '2', 2, 2, 2, 'limpeza'),
(9, '1', 1, 1, 1, 'pet'),
(10, '2', 2, 2, 2, 'pet'),
(12, '2', 2, 2, 2, 'pet'),
(14, '5445', 4545, 6565, 8787, 'med'),
(15, '2', 2, 2, 2, 'pet'),
(16, '2', 2, 2, 2, 'cos'),
(17, '2', 2, 2, 2, 'med'),
(19, '2', 2, 2, 2, 'med'),
(20, 'nome', 12345, 9, 150, 'pet'),
(21, '1', 2, 3, 4, 'comida'),
(22, 'teste', 12345, 1232, 1234, 'med'),
(24, '3', 4, 5, 6, 'cos'),
(25, '1', 2, 3, 4, 'pet'),
(26, 'nome gigante para testar', 1, 2, 3, 'med'),
(27, 'nome grande para teste23', 2888888, 3, 4, 'med');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionarios`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produtos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionarios` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produtos` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
