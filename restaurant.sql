-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 12:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`) VALUES
(31, 13, 7, ''),
(36, 1, 7, ''),
(37, 1, 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `Name`) VALUES
(1, 'Meals'),
(2, 'Drinks'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `Name`, `Price`, `Description`, `image`, `category_id`) VALUES
(1, 'Spaghetti Carbonara', '12.99', 'Classic Italian pasta dish with eggs, cheese, pancetta, and black pepper', 'images\\dish1.png', 1),
(2, 'Grilled Chicken Salad', '9.95', 'Fresh mixed greens with grilled chicken, cherry tomatoes, cucumbers, and balsamic vinaigrette', 'images\\meal3.png', 1),
(3, 'Beef Tacos', '8.50', 'Three soft flour tortillas filled with seasoned ground beef, lettuce, tomatoes, and cheddar cheese', 'images\\meal4.png', 1),
(4, 'Vegetarian Pizza', '11.99', 'Thin-crust pizza topped with tomato sauce, mozzarella cheese, bell peppers, onions, and mushrooms', 'images\\dish1.png', 1),
(5, 'Seafood Paella', '16.95', 'Spanish rice dish with shrimp, mussels, clams, and saffron-infused broth', 'images\\meal3.png', 1),
(6, 'BBQ Pulled Pork Sandwich', '10.49', 'Pulled pork slow-cooked in barbecue sauce, served on a toasted bun with coleslaw', 'images\\meal4.png', 1),
(7, 'Coca-Cola', '1.99', 'Classic carbonated soft drink with a refreshing cola flavor', 'images\\drink3.png', 2),
(8, 'Fresh Orange Juice', '3.49', 'Freshly squeezed orange juice, packed with vitamin C', 'images\\drink4.png', 2),
(9, 'Iced Coffee', '2.75', 'Chilled coffee served with ice and optional cream and sugar', 'images\\drinks.png', 2),
(10, 'Sparkling Water', '1.50', 'Carbonated water with a crisp and clean taste', 'images\\drinks3.png', 2),
(11, 'Strawberry Smoothie', '4.25', 'A creamy blend of fresh strawberries, yogurt, and honey', 'images\\drinks4.png', 2),
(12, 'Green Tea', '2.25', 'Hot green tea with a subtle earthy flavor and antioxidants', 'images\\drinks.png', 2),
(13, 'Chocolate Brownie', '4.99', 'A warm and gooey chocolate brownie served with a scoop of vanilla ice cream', 'images\\crepes.png', 3),
(14, 'New York Cheesecake', '6.25', 'Creamy and rich cheesecake with a graham cracker crust, topped with fresh berries', 'images\\dessert2.png', 3),
(15, 'Tiramisu', '5.99', 'A classic Italian dessert made with layers of coffee-soaked ladyfingers and mascarpone cheese', 'images\\dessert3.png', 3),
(16, 'Apple Pie', '5.50', 'Homemade apple pie with a flaky crust, served warm with a scoop of cinnamon ice cream', 'images\\dessert4.png', 3),
(17, 'Crème Brûlée', '7.50', 'A decadent dessert featuring a smooth vanilla custard with a caramelized sugar topping', 'images\\macarons.png', 3),
(18, 'Fruit Sorbet', '4.25', 'A refreshing and dairy-free dessert option with a variety of fruit flavors', 'images\\crepes.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fullname`, `Email`, `Password`) VALUES
(1, 'James Bond', 'james@gmail.com', '$2y$10$Stao.8hPsRMwicvRvBBdZO9SH7D2pxhugW9QPF3MjWItBhxIMjCmy'),
(3, 'Julia King', 'julia@gmail.com', '$2y$10$k1U7NC6xTXBX0L9oGLK0leEAI9M2cRnVEyqq3JSWWItNrA04EA9d6'),
(4, 'Janet Kiwi', 'janet@gmail.com', '$2y$10$VDmW1UJ69xE8KtCKHzzL2uhdTYiIzVvsA6/EMHJJLYxn2lkLWLml.'),
(6, 'So mun', 'somun@gmail.com', '$2y$10$iWw4UuNLsE/ZJ5.CbY33OuyykF/QEjVugp9UhG3rxDW32Xfm6Em1S'),
(7, 'Do hana', 'hana@gmail.com', '$2y$10$vN/9UPGbXSuC40efBJsfvuN959sNdDIkcxOOT3J33.MG2HP3HLL2K'),
(8, 'Ga motak', 'motak@gmail.com', '$2y$10$h22nvasDF2ewY8tLQ1u91.i.4qPQwLXES6LEO91UtAC7NMJoOBmF6'),
(9, 'jin mudeok', 'mudok@gmail.com', '$2y$10$rW2ROFlMfyRhc3sWzpW/xuriMSwo0ET1Mus4Eo4/PcQF1DEF2tMdu'),
(22, 'Kang hina', 'hina@gmail.com', '$2y$10$TKvJwBUWx/7RgcpOQTewp.anAz5rt3Enx5XqqAa3.xJC97sCFjm.u'),
(23, 'Karen Green', 'karen@gmail.com', '$2y$10$0ZdGAOX.3Hd4tqDyxsJ4K.KRBEJu2W0q9jS6TQeGRgrJnBR5QxyQm'),
(27, 'Jacob Green', 'jacob@gmail.com', '$2y$10$PRbC.JtxpdUSkpJtmYd08urJaTcsWSPw6O7/hgi685wxQbP47Gkmy'),
(28, 'Jane Doe', 'jane@gmail.com', '$2y$10$Ix/VBHLs.Gur5XYNQPy4U.lEdzv79drfGL2okRam2M1z7JfXuel0u'),
(29, 'Yuki saga', 'yuki@gmail.com', '$2y$10$LSzYyTCzA1FciS.7ggf49O4n8HZUtlvMtKYDFXzoL00X6IrwslMIm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
