-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Dez-2021 às 03:49
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `natal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_mensagem`
--

CREATE TABLE `cad_mensagem` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `Assunto` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `idade` int(2) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Mensagem` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cad_mensagem`
--

INSERT INTO `cad_mensagem` (`id`, `data`, `nome`, `sexo`, `Assunto`, `idade`, `email`, `Telefone`, `Mensagem`) VALUES
(3, '2021-12-18 00:31:32', 'ANDERSON', 'M', 'Elogio', 24, 'anderso05@hotmail.com', '2147483647', 'legal'),
(4, '2021-12-18 00:55:29', 'ANDERSON', 'M', 'Elogio', 24, 'anderso05@hotmail.com', '2147483647', 'legal'),
(5, '2021-12-18 01:12:49', 'Elias', 'M', 'Reclamacao', 30, 'elias05@hotmail.com', '2147483647', 'ruim'),
(6, '2021-12-18 03:37:01', 'ALISSON', 'M', 'Duvida', 23, 'anderson.glassberg@gmail.com', '2147483647', 'Consegue por mais templates?'),
(7, '2021-12-18 03:56:32', 'Wissal', 'F', 'Sugestao', 17, 'xmas@gmail.com', '2147483647', 'Fazem o gráfico'),
(8, '2021-12-18 03:57:33', 'Vinicius', 'M', 'Reclamacao', 20, 'anderso05@hotmail.com', '2147483647', 'também fazer o gráfico'),
(9, '2021-12-18 04:09:46', 'ANDERSON', 'M', 'Elogio', 24, 'anderso05@hotmail.com', '75982311419', 'legal'),
(10, '2021-12-18 14:23:32', 'Fabiana', 'F', 'Elogio', 35, 'ricardofat.brasil@gmail.com', '113313-0458', 'Show'),
(11, '2021-12-19 02:14:15', '$nome', '$', '$Assunto', 0, '$email', '$Telefone', '$Mensagem'),
(12, '2021-12-19 02:32:33', '', 'M', 'Reclamacao', 24, 'anderso05@hotmail.com', '75982311419', 'legal'),
(13, '2021-12-19 02:34:44', '', 'M', 'Reclamacao', 24, 'anderso05@hotmail.com', '75982311419', 'ruim'),
(14, '2021-12-19 02:37:08', 'ANDERSON', 'M', 'Reclamacao', 24, 'anderso05@hotmail.com', '75982311419', 'legal'),
(15, '2021-12-19 02:48:05', 'LALAU', 'M', 'Sugestao', 30, 'anderso05@hotmail.com', '75999999500', 'Melhorem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartao`
--

CREATE TABLE `cartao` (
  `id` int(11) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `card_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cartao`
--

INSERT INTO `cartao` (`id`, `email`, `texto`, `data`, `card_id`) VALUES
(1, 'eliasvasques74@gmail.com', 'asdf', '2021-12-15 23:44:28', 3),
(2, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:37:39', 3),
(3, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:37:39', 3),
(4, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:37:40', 3),
(5, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:38:53', 3),
(6, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:45:13', 3),
(7, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:45:15', 3),
(8, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:45:56', 3),
(9, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:46:41', 3),
(10, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:46:42', 3),
(11, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:46:43', 3),
(12, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:46:43', 3),
(13, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:46:44', 3),
(14, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:46:44', 3),
(15, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:46:44', 3),
(16, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:46:44', 3),
(17, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:46:44', 3),
(18, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:46:50', 3),
(19, 'eliasvasques74@gmail.com', 'asdf', '2021-12-16 00:51:08', 3),
(20, 'rubemalcantara07@gmail.com', 'asdf', '2021-12-16 00:54:11', 3),
(21, 'elias@gmail.com', 'asdf', '2021-12-16 00:54:43', 3),
(22, 'vasquesalc@gmail.com', 'asdf', '2021-12-16 00:55:56', 3),
(23, 'vasquesalc@gmail.com', 'asdf', '2021-12-16 00:59:05', 3),
(24, 'eliasvasques72@gmail.com', 'asdf', '2021-12-16 01:02:23', 3),
(25, '', '', '2021-12-17 19:19:31', 1),
(26, '', '', '2021-12-17 19:53:36', 2),
(27, 'eliasvasques74@gmail.com', 'você é d+ mina', '2021-12-17 19:55:19', 2),
(28, 'anderson18@ba.estudante.senai.br', 'Feliz Natal', '2021-12-19 01:46:41', 3),
(29, 'anderson.glassberg@gmail.com', 'Feliz Natal', '2021-12-19 01:47:18', 1),
(30, '$email', '$texto', '2021-12-19 02:15:56', 0),
(31, 'elias05@hotmail.com', 'Feliz Natal', '2021-12-19 02:38:31', 2),
(32, 'anderson.glassberg@gmail.com', 'Feliz Natal', '2021-12-19 02:42:07', 3),
(33, 'elias05@hotmail.com', 'Feliz Natal', '2021-12-19 02:45:38', 2),
(34, 'sabrinevarjao@gmail.com', 'Um bom natal', '2021-12-19 02:48:43', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_mensagem`
--
ALTER TABLE `cad_mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cartao`
--
ALTER TABLE `cartao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_mensagem`
--
ALTER TABLE `cad_mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `cartao`
--
ALTER TABLE `cartao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
