/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

INSERT INTO `orders` (`id`, `created_at`, `updated_at`) VALUES
	(2, '2023-11-01 09:40:26', '2023-11-01 09:40:26'),
	(3, '2023-11-01 09:40:26', '2023-11-01 09:40:26'),
	(4, '2023-11-01 09:42:48', '2023-11-01 09:42:48'),
	(5, '2023-11-01 09:49:32', '2023-11-01 09:49:32'),
	(6, '2023-11-01 18:08:13', '2023-11-01 18:08:13');

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `quantity`, `created_at`, `updated_at`) VALUES
	(1, 5, 2, 1, '2023-11-01 09:40:26', '2023-11-01 09:40:26'),
	(2, 2, 3, 1, '2023-11-01 09:40:26', '2023-11-01 09:40:26'),
	(3, 5, 4, 3, '2023-11-01 09:42:48', '2023-11-01 09:42:48'),
	(4, 2, 4, 2, '2023-11-01 09:42:48', '2023-11-01 09:42:48'),
	(5, 6, 5, 1, '2023-11-01 09:49:32', '2023-11-01 09:49:32'),
	(6, 3, 5, 1, '2023-11-01 09:49:32', '2023-11-01 09:49:32'),
	(7, 7, 6, 3, '2023-11-01 18:08:13', '2023-11-01 18:08:13'),
	(8, 1, 6, 1, '2023-11-01 18:08:13', '2023-11-01 18:08:13'),
	(9, 5, 6, 1, '2023-11-01 18:08:13', '2023-11-01 18:08:13');

INSERT INTO `products` (`id`, `product_name`, `product_description`, `photo`, `price`, `created_at`, `updated_at`) VALUES
	(1, 'Hoodie 1', 'ÁO HOODIE COMET', '1.jpg', 100.00, NULL, NULL),
	(2, 'Hoodie 2', 'ÁO HOODIE VENUS', '2.jpeg', 150.00, NULL, NULL),
	(3, 'Hoodie 3', 'ÁO HOODIE SPACE', '3.jpeg', 123.00, NULL, NULL),
	(4, 'Hoodie 4', 'ÁO HOODIE VIP', '4.jpg', 159.00, NULL, NULL),
	(5, 'Hoodie 5', 'ÁO HOODIE MIRROR', '5.jpg', 214.00, NULL, NULL),
	(6, 'Hoodie 6', 'ÁO HOODIE COMET', '6.jpg', 178.00, NULL, NULL),
	(7, 'Hoodie 10', 'Hoodie baby', '1698853965_dorem.jpg', 225.00, '2023-11-01 08:52:45', '2023-11-01 08:52:45');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
