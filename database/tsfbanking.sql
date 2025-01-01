SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mariadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `transact`
--

CREATE TABLE `transact` (
  `id` int(11) NOT NULL,
  `sender` varchar(10) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `datentime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transact`
--

INSERT INTO `transact` (`id`, `sender`, `receiver`, `amount`, `status`,`datentime`) VALUES
(1, '7653902188', '2039574711', 20, 'success', '2022-09-10 09:48:22'),
(2, '4170032874', '4390537511', 900, 'success', '2022-09-10 09:51:24'),
(3, '2039574711', '7653902188', 0, 'failure', '2022-09-16 10:15:19'),
(4, '1234567980', '4170032874', -400, 'failure', '2022-09-16 10:20:03'),
(5, '4390537511', '7653902188', 750, 'success', '2022-09-17 10:54:41');


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `accno` varchar(10) NOT NULL,
  `balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`,`lastname`,  `email`, `accno`, `balance`) VALUES
(1, 'Pallavi','Jha', 'pj@gmail.com', '1234567980', 99030),
(2, 'Kunal','Nayyar', 'kNayyar@gmail.com', '2938170003', 107270),
(3, 'Maitreyi','Ramakrishnan', 'treyi@hotmail.com', '9234723500', 10079),
(4, 'Rudra','Sharma', 'rudra.s@gmail.com', '4170032874', 1600093),
(5, 'Ajith','Kumar', 'surviva@gmail.com', '7653902188', 18200),
(6, 'Pushpa','Rajkumar', 'srivalli@hotmail.com', '7653902188', 20000),
(7, 'Rani','Mukherjee', 'aparichth@gmail.com', '4390537511', 2390012),
(8, 'Mahesh','Talpade', 'JKMT@gmail.com', '2039574711', 109430);


--
-- Indexes for dumped tables

-- Indexes for table `transact`
--
ALTER TABLE `transact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transact`
--
ALTER TABLE `transact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;