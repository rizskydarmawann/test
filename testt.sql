-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.20-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table test.deposits: ~6 rows (approximately)
/*!40000 ALTER TABLE `deposits` DISABLE KEYS */;
INSERT INTO `deposits` (`id`, `user_id`, `amount`, `date`) VALUES
	(1, 1, 20000.00, '2023-08-04 21:46:55'),
	(2, 1, 20000.00, '2023-08-04 21:46:58'),
	(3, 1, 20000.00, '2023-08-04 21:47:06'),
	(4, 1, 40000.00, '2023-08-04 21:48:09'),
	(5, 1, 50000000.00, '2023-08-04 22:46:42'),
	(6, 1, 300000.00, '2023-08-04 23:27:54');
/*!40000 ALTER TABLE `deposits` ENABLE KEYS */;

-- Dumping data for table test.expenses: ~1 rows (approximately)
/*!40000 ALTER TABLE `expenses` DISABLE KEYS */;
INSERT INTO `expenses` (`id`, `user_id`, `amount`, `date`, `description`, `category_id`) VALUES
	(1, 1, 99999999.99, '2023-08-05', 'berobat', 5);
/*!40000 ALTER TABLE `expenses` ENABLE KEYS */;

-- Dumping data for table test.expense_categories: ~7 rows (approximately)
/*!40000 ALTER TABLE `expense_categories` DISABLE KEYS */;
INSERT INTO `expense_categories` (`id`, `category_name`) VALUES
	(1, 'Makanan'),
	(2, 'Transportasi'),
	(3, 'Hiburan'),
	(4, 'Belanja'),
	(5, 'Kesehatan'),
	(6, 'Pendidikan'),
	(7, 'Tagihan');
/*!40000 ALTER TABLE `expense_categories` ENABLE KEYS */;

-- Dumping data for table test.savings: ~0 rows (approximately)
/*!40000 ALTER TABLE `savings` DISABLE KEYS */;
INSERT INTO `savings` (`id`, `user_id`, `current_savings`, `auto_savings_amount`, `minimum_balance`) VALUES
	(1, 1, 10000000.00, 1000000.00, 99999999.99);
/*!40000 ALTER TABLE `savings` ENABLE KEYS */;

-- Dumping data for table test.transactions: ~0 rows (approximately)
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

-- Dumping data for table test.transfers: ~2 rows (approximately)
/*!40000 ALTER TABLE `transfers` DISABLE KEYS */;
INSERT INTO `transfers` (`id`, `sender_id`, `receiver_id`, `amount`, `date`) VALUES
	(1, 1, 20199473, 1000.00, '2023-08-04 22:04:07'),
	(2, 1, 20199473, 10200.00, '2023-08-04 22:40:06');
/*!40000 ALTER TABLE `transfers` ENABLE KEYS */;

-- Dumping data for table test.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`, `monthly_income`) VALUES
	(1, 'admin', 'admin', 'admin@gmail.com', 10000.00);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping data for table test.withdrawals: ~3 rows (approximately)
/*!40000 ALTER TABLE `withdrawals` DISABLE KEYS */;
INSERT INTO `withdrawals` (`id`, `user_id`, `amount`, `date`) VALUES
	(1, 1, 1000.00, '2023-08-04 21:56:42'),
	(2, 1, 100299.00, '2023-08-04 22:39:56'),
	(3, 1, 100.00, '2023-08-04 23:28:01');
/*!40000 ALTER TABLE `withdrawals` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
