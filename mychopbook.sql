-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 02, 2015 at 07:15 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mychopbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

CREATE TABLE `cuisine` (
`idcuisine` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `icon` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`idcuisine`, `name`, `icon`) VALUES
(1, 'italian', NULL),
(2, 'french', NULL),
(3, 'mexican', NULL),
(4, 'german', NULL),
(5, 'indian', NULL),
(6, 'swedish', NULL),
(8, 'american', NULL),
(9, 'russian', NULL),
(10, 'cuban', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
`idingredient` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `icon` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`idingredient`, `name`, `icon`) VALUES
(1, 'flour', NULL),
(2, 'sugar', NULL),
(3, 'egg', NULL),
(4, 'water', NULL),
(5, 'milk', NULL),
(6, 'baking soda', NULL),
(7, 'tomato', NULL),
(8, 'celery', NULL),
(9, 'cucumber', NULL),
(10, 'dill', NULL),
(11, 'rice', NULL),
(12, 'beans', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mealtype`
--

CREATE TABLE `mealtype` (
`idmealtype` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `icon` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mealtype`
--

INSERT INTO `mealtype` (`idmealtype`, `name`, `icon`) VALUES
(1, 'lunch', NULL),
(2, 'snack', NULL),
(3, 'brunch', NULL),
(4, 'dinner', NULL),
(5, 'dessert', NULL),
(6, 'breakfast', NULL),
(8, 'appetizer', NULL),
(9, 'sides', NULL),
(10, 'healthy', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mychops`
--

CREATE TABLE `mychops` (
  `recipe_idrecipe` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `datecreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mychops`
--

INSERT INTO `mychops` (`recipe_idrecipe`, `user_iduser`, `name`, `datecreated`) VALUES
(1, 1, 'best muffins', '2015-05-18 16:19:53'),
(1, 2, 'son''s fav muffins', '2015-05-18 16:21:40'),
(2, 1, 'simple pancakes', '2015-05-18 16:20:37'),
(3, 1, 'simple dinner', '2015-05-18 16:20:51'),
(4, 1, 'easy pie', '2015-05-18 16:21:12'),
(4, 2, 'best apple pie', '2015-05-18 16:22:07'),
(6, 4, 'quick grilled cheese', '2015-05-18 16:23:13'),
(6, 5, 'tasty grilled cheese', '2015-05-18 16:22:48'),
(7, 6, 'spicy pizza', '2015-05-18 16:23:31'),
(7, 8, 'pefect pizza', '2015-05-18 16:23:44'),
(11, 4, 'Faves', '2015-05-26 14:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `preference`
--

CREATE TABLE `preference` (
`idcategory` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `icon` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `preference`
--

INSERT INTO `preference` (`idcategory`, `name`, `icon`) VALUES
(1, 'vegan', NULL),
(2, 'organic', NULL),
(3, 'gluten free', NULL),
(4, 'sugar free', NULL),
(5, 'vegetarian', NULL),
(6, 'dairy free', NULL),
(7, 'nuts free', NULL),
(9, 'high fiber', NULL),
(10, 'high protein', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prepmethod`
--

CREATE TABLE `prepmethod` (
`idprepmethod` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `icon` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `prepmethod`
--

INSERT INTO `prepmethod` (`idprepmethod`, `name`, `icon`) VALUES
(1, 'fried', NULL),
(2, 'grilled', NULL),
(3, 'baked', NULL),
(4, 'broiled', NULL),
(5, 'seared', NULL),
(6, 'sauteed', NULL),
(7, 'roasted', NULL),
(8, 'smoked', NULL),
(9, 'poached', NULL),
(10, 'steamed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `recipe_idrecipe` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `ratingnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`recipe_idrecipe`, `user_iduser`, `ratingnumber`) VALUES
(1, 1, 5),
(2, 2, 5),
(3, 3, 2),
(4, 4, 3),
(5, 5, 5),
(6, 6, 3),
(7, 7, 4),
(8, 8, 4),
(9, 9, 1),
(10, 10, 5),
(11, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
`idrecipe` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` text NOT NULL,
  `videolink` text,
  `user_iduser` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `cookingskill` varchar(45) NOT NULL,
  `preptime_hours` int(11) DEFAULT NULL,
  `preptime_mins` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`idrecipe`, `name`, `datecreated`, `picture`, `videolink`, `user_iduser`, `status`, `cookingskill`, `preptime_hours`, `preptime_mins`) VALUES
(1, 'Blueberry Muffins', '2015-05-18 15:27:57', '', NULL, 1, '0', 'Advanced', 1, 30),
(2, 'Vanilla Pancakes', '2015-05-18 15:30:34', '', NULL, 2, '1', 'Beginner', 0, 30),
(3, 'Penne Vodka', '2015-05-18 15:31:24', '', NULL, 3, '1', 'Beginner', 1, 5),
(4, 'Apple Pie', '2015-05-18 15:31:59', '', NULL, 4, '1', 'Advanced', 3, 10),
(5, 'Peach Cobbler', '2015-05-18 15:33:12', '', NULL, 5, '0', 'Intermediate', 2, 25),
(6, 'Grilled Cheese', '2015-05-18 15:45:49', '', NULL, 6, '0', 'Advanced', 1, 0),
(7, 'Spanish Pizza', '2015-05-18 15:49:51', '', NULL, 7, '1', 'Intermediate', 1, 30),
(8, 'Cowboy Steak', '2015-05-18 15:50:51', '', NULL, 8, '1', 'Beginner', 0, 25),
(9, 'Garden Salad', '2015-05-18 15:52:48', '', NULL, 9, '1', 'Advanced', 3, 25),
(10, 'Shrimp Scampi', '2015-05-18 15:53:14', '', NULL, 10, '1', 'Beginner', 1, 15),
(11, 'Rice and Beans Cuban style', '2015-05-26 14:23:17', '', NULL, 11, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_has_cuisine`
--

CREATE TABLE `recipe_has_cuisine` (
  `recipe_idrecipe` int(11) NOT NULL,
  `cuisine_idcuisine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipe_has_cuisine`
--

INSERT INTO `recipe_has_cuisine` (`recipe_idrecipe`, `cuisine_idcuisine`) VALUES
(3, 1),
(10, 1),
(7, 3),
(6, 4),
(8, 4),
(4, 6),
(1, 8),
(2, 8),
(5, 8),
(9, 9),
(11, 10);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_has_ingredient`
--

CREATE TABLE `recipe_has_ingredient` (
  `recipe_idrecipe` int(11) NOT NULL,
  `ingredient_idingredient` int(11) NOT NULL,
  `ingredient_amount` decimal(6,2) DEFAULT NULL,
  `ingredient_unit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipe_has_ingredient`
--

INSERT INTO `recipe_has_ingredient` (`recipe_idrecipe`, `ingredient_idingredient`, `ingredient_amount`, `ingredient_unit`) VALUES
(1, 1, 2.00, 'lbs'),
(1, 2, 0.50, 'lbs'),
(1, 3, 6.00, NULL),
(1, 5, 2.00, 'cup(s)'),
(1, 6, 2.00, 'tspn'),
(9, 3, 1.00, NULL),
(9, 7, 3.00, NULL),
(9, 8, 2.00, 'cup(s)'),
(9, 9, 2.00, NULL),
(9, 10, 1.00, 'cup(s)'),
(11, 11, 1.00, 'cup'),
(11, 12, 2.00, 'cups');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_has_mealtype`
--

CREATE TABLE `recipe_has_mealtype` (
  `recipe_idrecipe` int(11) NOT NULL,
  `mealtype_idmealtype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipe_has_mealtype`
--

INSERT INTO `recipe_has_mealtype` (`recipe_idrecipe`, `mealtype_idmealtype`) VALUES
(6, 1),
(11, 1),
(2, 3),
(3, 4),
(7, 4),
(8, 4),
(10, 4),
(11, 4),
(1, 5),
(4, 5),
(5, 5),
(2, 6),
(6, 6),
(9, 8),
(9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_has_preference`
--

CREATE TABLE `recipe_has_preference` (
  `recipe_idrecipe` int(11) NOT NULL,
  `preference_idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipe_has_preference`
--

INSERT INTO `recipe_has_preference` (`recipe_idrecipe`, `preference_idcategory`) VALUES
(4, 1),
(5, 1),
(11, 1),
(2, 2),
(9, 2),
(9, 3),
(7, 4),
(3, 5),
(11, 5),
(1, 7),
(4, 7),
(11, 7),
(6, 10),
(8, 10),
(10, 10),
(11, 10);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_has_prepmethod`
--

CREATE TABLE `recipe_has_prepmethod` (
  `recipe_idrecipe` int(11) NOT NULL,
  `prepmethod_idprepmethod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipe_has_prepmethod`
--

INSERT INTO `recipe_has_prepmethod` (`recipe_idrecipe`, `prepmethod_idprepmethod`) VALUES
(2, 1),
(6, 2),
(8, 2),
(1, 3),
(3, 3),
(4, 3),
(5, 3),
(7, 3),
(10, 6),
(9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `recipe_idrecipe` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `comment` text NOT NULL,
  `datecreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`recipe_idrecipe`, `user_iduser`, `comment`, `datecreated`) VALUES
(1, 1, 'awesome', '2015-05-18 15:55:49'),
(1, 2, 'super easy', '2015-05-18 15:56:05'),
(1, 3, 'my family loved it\n', '2015-05-18 15:56:27'),
(1, 5, 'loved it, was very easy to make', '2015-05-18 15:58:17'),
(2, 4, 'wow wow wow loved it', '2015-05-18 15:57:40'),
(2, 5, 'did not like it', '2015-05-18 15:57:59'),
(3, 6, 'did not like it, no flavor at all', '2015-05-18 15:59:19'),
(3, 7, 'never again!', '2015-05-18 15:59:39'),
(3, 8, 'this recipe is grabage', '2015-05-18 16:00:10'),
(4, 9, 'will make it again and again', '2015-05-18 16:00:35'),
(11, 4, 'Best rice and beans ever! must try', '2015-05-26 14:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `shoppinglist`
--

CREATE TABLE `shoppinglist` (
`idshoppinglist` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `shoppinglist`
--

INSERT INTO `shoppinglist` (`idshoppinglist`, `name`, `user_iduser`) VALUES
(1, 'World Cup Party', 1),
(2, 'Super Bowl', 1),
(3, 'Baby Shower', 2),
(4, 'Sunday Brunch', 3),
(5, '4th of July Party', 4),
(6, 'Memorial Day BBQ', 5),
(7, 'Birthday Party', 6),
(8, 'Sunday Brunch', 7),
(9, 'Lunch Box', 7),
(10, 'Saturday BBQ', 9),
(11, 'Publix Stuff', 11);

-- --------------------------------------------------------

--
-- Table structure for table `shoppinglist_has_ingredient`
--

CREATE TABLE `shoppinglist_has_ingredient` (
  `shoppinglist_idshoppinglist` int(11) NOT NULL,
  `ingredient_idingredient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoppinglist_has_ingredient`
--

INSERT INTO `shoppinglist_has_ingredient` (`shoppinglist_idshoppinglist`, `ingredient_idingredient`) VALUES
(1, 1),
(4, 1),
(5, 1),
(8, 1),
(10, 1),
(1, 2),
(4, 2),
(5, 2),
(1, 3),
(10, 3),
(5, 4),
(1, 5),
(2, 7),
(3, 7),
(7, 7),
(2, 8),
(7, 8),
(9, 8),
(2, 9),
(6, 9),
(9, 9),
(7, 10),
(11, 11),
(11, 12);

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
`idsteps` int(11) NOT NULL,
  `direction` text NOT NULL,
  `picture` text NOT NULL,
  `recipe_idrecipe` int(11) NOT NULL,
  `stepnumber` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`idsteps`, `direction`, `picture`, `recipe_idrecipe`, `stepnumber`) VALUES
(1, 'Place the blueberries in a bowl. Sprinkle 1 tablespoon of flour over them and gently toss to coat. (The flour will help keep the blueberries from sinking in the muffin as it cooks.)', 'http://www.simplyrecipes.com/wp-content/uploads/2006/07/blueberry-muffins-1.jpg', 1, 1),
(2, 'Preheat your oven to 400°F with a rack in the lower middle. In a mixing bowl, whisk together the dry ingredients—the flour, baking soda, baking powder, and salt.', 'http://www.simplyrecipes.com/wp-content/uploads/2006/07/blueberry-muffins-2.jpg', 1, 2),
(3, 'In a large mixing bowl, place the sour cream, sugar, eggs, milk, melted butter, lemon zest, and vanilla (the wet ingredients). Whisk together until smooth.', 'http://www.simplyrecipes.com/wp-content/uploads/2006/07/blueberry-muffins-3.jpg', 1, 3),
(4, 'Add the dry ingredients to the butter/sugar/egg mixture a third at a time and mix until just incorporated.  Do not over mix!', 'http://www.simplyrecipes.com/wp-content/uploads/2006/07/blueberry-muffins-5.jpg', 1, 4),
(5, 'Gently fold the blueberries into the mixture.', 'http://www.simplyrecipes.com/wp-content/uploads/2006/07/blueberry-muffins-6.jpg', 1, 5),
(6, 'Use a standard 12-well muffin pan. Place a muffin liner in each well of the muffin pan, or if you don''t have muffin liners, grease the inside of the muffin pan wells with vegetable oil or butter. Distribute the dough equally among the cups. You''ll need to fill them very high to use all of the batter in 12 muffins, which is fine. They won''t spill. If you still have too much dough, start filling another tin.\r\n', 'http://www.simplyrecipes.com/wp-content/uploads/2006/07/blueberry-muffins-7.jpg', 1, 6),
(7, 'Place the muffins in the oven and bake at 400°F until the muffins are golden brown, about 20 minutes. (If the muffins are getting too brown, tent with foil.) Test with a bamboo skewer to make sure the centers of the muffins are done. Let the muffins cool in the muffin pan for 2 to 3 minutes, then remove them from the pan. Let cool another 10 minutes before eating.\r\n\r\nRead more: http://www.simplyrecipes.com/recipes/blueberry_muffins/#ixzz3ab0jkC00', 'http://www.simplyrecipes.com/wp-content/uploads/2006/07/blueberry-muffins-vertical.jpg', 1, 7),
(8, 'In medium bowl, add eggs, milk, flour, sugar, salt, baking soda, and vanilla. Mix by hand or electric mixer.', 'http://f.tqn.com/y/breadbaking/1/W/F/A/-/-/3167488129_cc7a303896_o.jpg', 2, 1),
(9, 'Drop batter by the 1/4 cup onto hot, greased skillet or griddle. Cook until bubbles form on top side, then flip pancake over and brown the other side. Serve warm with butter and maple syrup.', 'http://f.tqn.com/y/breadbaking/1/W/F/A/-/-/3167488129_cc7a303896_o.jpg', 2, 2),
(10, 'These pancakes can be frozen for a quick, morning breakfast. Just allow the pancakes to cool completely and place them, separated with wax paper, in a freezer bag. Freeze for up to 6 weeks.', 'http://f.tqn.com/y/breadbaking/1/W/F/A/-/-/3167488129_cc7a303896_o.jpg', 2, 3),
(11, 'Boil rice in water', '', 11, 1),
(12, 'Soak black beans in water overnight', '', 11, 2),
(13, 'Cook black beans in pressure cooker until tender', '', 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
`iduser` int(11) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(268) NOT NULL,
  `username` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `password`, `email`, `username`, `name`, `lastname`) VALUES
(1, 'password', 'lanapant@gmail.com', 'lanapant', 'lana', 'pant'),
(2, 'password', 'julissa@gmail.com', 'julissa', 'julissa', 'roa'),
(3, 'password', 'herdney@gmail.com', 'hero', 'herodney', 'emile'),
(4, 'password', 'carlos52292@stu.aii.edu', 'carlos', 'carlos', 'cardozo'),
(5, 'password', 'katie@gmail.com', 'katie', 'katie', 'kay'),
(6, 'password', 'rima@gmail.com', 'rima', 'rima', 'gerhard'),
(7, 'password', 'obama@gmail.com', 'obama', 'barack', 'obama'),
(8, 'password', 'hillary@gmail.com', 'hillary', 'hillary', 'clinton'),
(9, 'password', 'bush@gmail.com', 'gbush', 'george ', 'bush'),
(10, 'password', 'kennedy@gmail.com', 'kennedy', 'john', 'kennedy'),
(11, 'topsecret', '', '', 'Rene', 'Alvarez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuisine`
--
ALTER TABLE `cuisine`
 ADD PRIMARY KEY (`idcuisine`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
 ADD PRIMARY KEY (`idingredient`);

--
-- Indexes for table `mealtype`
--
ALTER TABLE `mealtype`
 ADD PRIMARY KEY (`idmealtype`);

--
-- Indexes for table `mychops`
--
ALTER TABLE `mychops`
 ADD PRIMARY KEY (`recipe_idrecipe`,`user_iduser`), ADD KEY `fk_recipe_has_user_user3_idx` (`user_iduser`), ADD KEY `fk_recipe_has_user_recipe3_idx` (`recipe_idrecipe`);

--
-- Indexes for table `preference`
--
ALTER TABLE `preference`
 ADD PRIMARY KEY (`idcategory`);

--
-- Indexes for table `prepmethod`
--
ALTER TABLE `prepmethod`
 ADD PRIMARY KEY (`idprepmethod`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
 ADD PRIMARY KEY (`recipe_idrecipe`,`user_iduser`), ADD KEY `fk_recipe_has_user_user2_idx` (`user_iduser`), ADD KEY `fk_recipe_has_user_recipe2_idx` (`recipe_idrecipe`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
 ADD PRIMARY KEY (`idrecipe`), ADD KEY `fk_recipe_user_idx` (`user_iduser`);

--
-- Indexes for table `recipe_has_cuisine`
--
ALTER TABLE `recipe_has_cuisine`
 ADD PRIMARY KEY (`recipe_idrecipe`,`cuisine_idcuisine`), ADD KEY `fk_recipe_has_cuisine_cuisine1_idx` (`cuisine_idcuisine`), ADD KEY `fk_recipe_has_cuisine_recipe1_idx` (`recipe_idrecipe`);

--
-- Indexes for table `recipe_has_ingredient`
--
ALTER TABLE `recipe_has_ingredient`
 ADD PRIMARY KEY (`recipe_idrecipe`,`ingredient_idingredient`), ADD KEY `fk_recipe_has_ingredient_ingredient1_idx` (`ingredient_idingredient`), ADD KEY `fk_recipe_has_ingredient_recipe1_idx` (`recipe_idrecipe`);

--
-- Indexes for table `recipe_has_mealtype`
--
ALTER TABLE `recipe_has_mealtype`
 ADD PRIMARY KEY (`recipe_idrecipe`,`mealtype_idmealtype`), ADD KEY `fk_recipe_has_mealtype_mealtype1_idx` (`mealtype_idmealtype`), ADD KEY `fk_recipe_has_mealtype_recipe1_idx` (`recipe_idrecipe`);

--
-- Indexes for table `recipe_has_preference`
--
ALTER TABLE `recipe_has_preference`
 ADD PRIMARY KEY (`recipe_idrecipe`,`preference_idcategory`), ADD KEY `fk_recipe_has_preference_preference1_idx` (`preference_idcategory`), ADD KEY `fk_recipe_has_preference_recipe1_idx` (`recipe_idrecipe`);

--
-- Indexes for table `recipe_has_prepmethod`
--
ALTER TABLE `recipe_has_prepmethod`
 ADD PRIMARY KEY (`recipe_idrecipe`,`prepmethod_idprepmethod`), ADD KEY `fk_recipe_has_prepmethod_prepmethod1_idx` (`prepmethod_idprepmethod`), ADD KEY `fk_recipe_has_prepmethod_recipe1_idx` (`recipe_idrecipe`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
 ADD PRIMARY KEY (`recipe_idrecipe`,`user_iduser`), ADD KEY `fk_recipe_has_user_user1_idx` (`user_iduser`), ADD KEY `fk_recipe_has_user_recipe1_idx` (`recipe_idrecipe`);

--
-- Indexes for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
 ADD PRIMARY KEY (`idshoppinglist`), ADD KEY `fk_shoppinglist_user1_idx` (`user_iduser`);

--
-- Indexes for table `shoppinglist_has_ingredient`
--
ALTER TABLE `shoppinglist_has_ingredient`
 ADD PRIMARY KEY (`shoppinglist_idshoppinglist`,`ingredient_idingredient`), ADD KEY `fk_shoppinglist_has_ingredient_ingredient1_idx` (`ingredient_idingredient`), ADD KEY `fk_shoppinglist_has_ingredient_shoppinglist1_idx` (`shoppinglist_idshoppinglist`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
 ADD PRIMARY KEY (`idsteps`), ADD KEY `fk_steps_recipe1_idx` (`recipe_idrecipe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuisine`
--
ALTER TABLE `cuisine`
MODIFY `idcuisine` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
MODIFY `idingredient` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mealtype`
--
ALTER TABLE `mealtype`
MODIFY `idmealtype` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `preference`
--
ALTER TABLE `preference`
MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `prepmethod`
--
ALTER TABLE `prepmethod`
MODIFY `idprepmethod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
MODIFY `idrecipe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
MODIFY `idshoppinglist` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
MODIFY `idsteps` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `mychops`
--
ALTER TABLE `mychops`
ADD CONSTRAINT `fk_recipe_has_user_recipe3` FOREIGN KEY (`recipe_idrecipe`) REFERENCES `recipe` (`idrecipe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_recipe_has_user_user3` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
ADD CONSTRAINT `fk_recipe_has_user_recipe2` FOREIGN KEY (`recipe_idrecipe`) REFERENCES `recipe` (`idrecipe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_recipe_has_user_user2` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
ADD CONSTRAINT `fk_recipe_user` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipe_has_cuisine`
--
ALTER TABLE `recipe_has_cuisine`
ADD CONSTRAINT `fk_recipe_has_cuisine_cuisine1` FOREIGN KEY (`cuisine_idcuisine`) REFERENCES `cuisine` (`idcuisine`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_recipe_has_cuisine_recipe1` FOREIGN KEY (`recipe_idrecipe`) REFERENCES `recipe` (`idrecipe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipe_has_ingredient`
--
ALTER TABLE `recipe_has_ingredient`
ADD CONSTRAINT `fk_recipe_has_ingredient_ingredient1` FOREIGN KEY (`ingredient_idingredient`) REFERENCES `ingredient` (`idingredient`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_recipe_has_ingredient_recipe1` FOREIGN KEY (`recipe_idrecipe`) REFERENCES `recipe` (`idrecipe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipe_has_mealtype`
--
ALTER TABLE `recipe_has_mealtype`
ADD CONSTRAINT `fk_recipe_has_mealtype_mealtype1` FOREIGN KEY (`mealtype_idmealtype`) REFERENCES `mealtype` (`idmealtype`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_recipe_has_mealtype_recipe1` FOREIGN KEY (`recipe_idrecipe`) REFERENCES `recipe` (`idrecipe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipe_has_preference`
--
ALTER TABLE `recipe_has_preference`
ADD CONSTRAINT `fk_recipe_has_preference_preference1` FOREIGN KEY (`preference_idcategory`) REFERENCES `preference` (`idcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_recipe_has_preference_recipe1` FOREIGN KEY (`recipe_idrecipe`) REFERENCES `recipe` (`idrecipe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipe_has_prepmethod`
--
ALTER TABLE `recipe_has_prepmethod`
ADD CONSTRAINT `fk_recipe_has_prepmethod_prepmethod1` FOREIGN KEY (`prepmethod_idprepmethod`) REFERENCES `prepmethod` (`idprepmethod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_recipe_has_prepmethod_recipe1` FOREIGN KEY (`recipe_idrecipe`) REFERENCES `recipe` (`idrecipe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
ADD CONSTRAINT `fk_recipe_has_user_recipe1` FOREIGN KEY (`recipe_idrecipe`) REFERENCES `recipe` (`idrecipe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_recipe_has_user_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
ADD CONSTRAINT `fk_shoppinglist_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shoppinglist_has_ingredient`
--
ALTER TABLE `shoppinglist_has_ingredient`
ADD CONSTRAINT `fk_shoppinglist_has_ingredient_ingredient1` FOREIGN KEY (`ingredient_idingredient`) REFERENCES `ingredient` (`idingredient`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_shoppinglist_has_ingredient_shoppinglist1` FOREIGN KEY (`shoppinglist_idshoppinglist`) REFERENCES `shoppinglist` (`idshoppinglist`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `steps`
--
ALTER TABLE `steps`
ADD CONSTRAINT `fk_steps_recipe1` FOREIGN KEY (`recipe_idrecipe`) REFERENCES `recipe` (`idrecipe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
