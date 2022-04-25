-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 03:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upmeal`
--

-- --------------------------------------------------------

--
-- Table structure for table `checklists`
--

CREATE TABLE `checklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklists`
--

INSERT INTO `checklists` (`id`, `item`, `quantity`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Apple', 10, 2, '2022-04-10 23:43:44', '2022-04-22 22:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `cuisines`
--

CREATE TABLE `cuisines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cuisines`
--

INSERT INTO `cuisines` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Malaysians', 'malaysians', 'Malaysian\'s meals', '2022-04-08 00:32:17', '2022-04-18 05:26:01'),
(2, 'Singaporean', 'singaporean', 'Singaporean\'s meal', '2022-04-08 00:32:35', '2022-04-08 00:32:35'),
(3, 'Thai', 'thai', 'Thailand\'s meal', '2022-04-08 00:32:49', '2022-04-08 00:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(28, '2022_01_10_144021_create_sessions_table', 1),
(29, '2022_01_17_144832_create_checklists_table', 1),
(30, '2022_02_14_141112_create_posts_table', 1),
(31, '2022_03_11_073033_create_cuisines_table', 1),
(32, '2022_04_04_164615_create_wishlists_table', 1),
(33, '2022_04_07_065036_create_recomendeds_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cuisine_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ct_hrs` int(11) NOT NULL,
  `ct_min` int(11) NOT NULL,
  `ingredients` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `steps` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cuisine_id`, `title`, `description`, `ct_hrs`, `ct_min`, `ingredients`, `steps`, `image`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nasi lemaks', 'Malaysian coconut milk rice, served with sambal, fried crispy anchovies, toasted peanuts and cucumbers', 1, 2, 'coconut milk steamed rice, 2 cups rice, 3 screwpine leaves, tie them into a knot as shown above, salt to taste, 1 can coconut milk (5.6 oz. / /150 ml-180 ml), some water', 'Just like making steamed rice, rinse your rice and drain. Add the coconut milk, a pinch of salt, and some water. Add the pandan leaves into the rice and cook your rice. Rinse the dried anchovies and drain the water. Fry the anchovies until they turn light brown and put aside. Pound the prawn paste together with shallots, garlic, and deseeded dried chilies with a mortar and pestle. You can also grind them with a food processor. Slice the red onion into rings. Soak the tamarind pulp in water for 15 minutes. Squeeze the tamarind constantly to extract the flavor into the water. Drain the pulp and save the tamarind juice.', 'public/img/posts/HZM0PLwbiCA3nOA4IWBlL1ATlSyCiL7bUrLuqpoJ.jpg', 'nasi-lemak', 2, '2022-04-08 01:09:27', '2022-04-24 18:32:34'),
(2, 1, 'Cendol', 'a sweet, layered, iced dessert containing green worm-shaped  jellies (made with either rice flour or green bean flour), coconut milk and a sugar syrup known as gulu melaka, or palm sugar.', 1, 30, '150 g gula melaka, 200 ml coconut milk, 30 g rice flour, 10 g tapioca flour, 10 g mung bean flour, 1 tsp pandan extract, 12 pandan leaves (2 knotted, 6 cut into 2cm segments, 4 knotted), 2 tbsp brown sugar, ½ + 1 tsp salt, 1 ½ + 1 cups water, 10 tbsp kidney beans', 'In a blender, blend 6 pandan leaves and 1½ cup water until fine, then strain and set aside pandan juice. In a pot, boil coconut milk, ½ tsp salt, 4 knotted pandan leaves. Once the liquid starts to boil, turn off the heat to let it cool. Set aside flavoured coconut milk. In a separate pot on medium heat, mix gula melaka, 1 tsp salt, 2 knotted pandan leaves, 1 cup water and 2 tbsp brown sugar until gula melaka melts and slightly thickens. Once thickens, set aside gula melaka syrup for cooling.\r\nIn a pan, add rice flour, tapioca flour, mung bean flour, strained pandan juice and 1 tsp pandan extract. Mix well, then transfer batter to a stove and use medium heat to cook the batter. Use a spoon and mix well. Prepare a large bowl of cold water to cool down the batter. Once the batter has turned into a thick paste, take it off the heat and place into a plastic piping bag with a very small tip (depending on preference of thickness for the cendol jellies). Pipe directly into cold water to create small cendol jellies. Leave it in the cold water to firm up. To serve, add some cendol jelly and kidney beans to a tall glass or small bowl and top with lots of shaved ice. Drizzle gula melaka syrup and coconut milk to finish.', 'public/img/posts/1HTioiaJj6yfseR0PyGxLw91tD3NogNHURyJjftH.jpg', 'cendol', 2, '2022-04-08 01:34:59', '2022-04-08 01:34:59'),
(3, 2, 'Singapore Noodles // Singapore Mei Fun', 'A popular dish on any Chinese take-out menu', 1, 1, '5 ounces dried vermicelli rice noodles, 12 large frozen shrimp (peeled, deveined, and butterflied), 2 1/2 tablespoons vegetable oil (divided), 2 eggs (beaten), 2 cloves garlic (chopped), 4 ounces char siu (Chinese Roast Pork) (can substitute Virginia ham or Chinese Sausage/traditional sweet Lop Cheung), 3 dried red chili peppers, 9 ounces napa cabbage (shredded, about 3 cups), 1 medium carrot (about 2.5 ounces/70g), 1 tablespoon Shaoxing wine (can substitute dry cooking sherry), 2 tablespoons curry powder or to taste, 1 teaspoon salt or to taste, 1/4 teaspoon sugar, 1/8 teaspoon white pepper, 2-4 tablespoons chicken stock or water (optional), ½ teaspoon sesame oil, 1 ½ teaspoons soy sauce (can substitute GF soy sauce to make this gluten-free), 1 scallion (julienned), ½ of a red onion (about 2.5 ounces/70g, thinly sliced)', 'Rehydrate the rice noodles either by soaking in cold water overnight, soaking in hot water for at least 30 minutes, or boiling for 1 minute (check package instructions before boiling). Drain the noodles in a colander just before you’re ready to cook. It’s ok if the noodles aren’t completely dry. Use kitchen shears to cut the long strands into 8-10 inch lengths, so they are easier to stir-fry and eat. On to the shrimp. We call for a dozen large shrimp in this recipe. You can also use a larger quantity of smaller shrimp if you like, as long as it’s about 6-8 ounces/170-225g. Peel the shrimp, butterfly them from the back, and de-vein. Rinse and pat dry before cooking. Heat your wok over medium heat, and add 1 tablespoon of oil. Add the eggs, and when they’ve cooked and bubbled along the sides, flip them over. Break the egg up into rough strips with your wok spatula. Remove from the wok and set aside.', 'public/img/posts/UVfwvIqDhK01a7IdDGhNH6C6tS2L37ZQdLZvfHkG.jpg', 'singapore-noodles-singapore-mei-fun', 2, '2022-04-08 01:43:29', '2022-04-08 01:43:29'),
(7, 1, 'Roti canai', 'A crispy, buttery and flaky Indian flat bread originated from southern India', 1, 1, '3 1/2 cups (1 1/4 lb. / 580 g) all purpose flour, 1 1/2 teaspoon kosher salt, 1 teaspoon granulated sugar, 3/4 cup ghee, room temperature, 1 large egg, beaten, 3/4 cup whole milk, 1/2 cup water', 'Heat a griddle or large saute pan over low heat. Firmly flatten and spread one disc of dough until it is 7 inches to 8 inches in diameter or (18 to 20 cm). The dough will be elastic, and may pull back a little. Drizzle the griddle with a little ghee. Add one bread to the pan, and cook slowly, turning once, 3 to 4 minutes per side, rotating occasionally to ensure even browning. Cook until each side is deep golden brown. Transfer the breads to a work surface, and then use a clapping motion (careful it will be hot), slapping the bread together between your hands to separate the layers. Repeat with remaining roti, cooking as many as will fit in the pan at one time. Serve immediately with curry sauce or sugar.', 'public/img/posts/9ypbwkssnXXUi19nhUrEV1rvp7OwEbHyUdGP38AR.jpg', 'roti-canai', 2, '2022-04-22 01:35:23', '2022-04-22 01:35:23'),
(8, 1, 'Penang Laksa', 'Malaysian\'s cuisine', 1, 22, '-1 kg pre-cooked laksa noodles (or thick round rice noodles) *Ground spice paste* 15 fresh red chilies and 10 dried red chilies (or 3 tbsp freshly ground chili paste), 10 shallots, 6 cloves garlic, 1 inch of galangal (lengkuas), 2 cm knob of fresh turmeric, 2 stalks lemongrass, minced (use the white part only), 1 1/2 tbsp belacan (dried shrimp paste), or if in block form, use 3/4 of a block', 'Blend spice paste ingredients into a fine paste. Heat a pot of water and add lemongrass, galangal, torch ginger flower. Bring to a boil and then add fish. Boil on medium heat for 15-20 minutes or until the fish is cooked. Transfer cooked fish to a bowl and let cool. Strain broth to remove spices. Add to the broth the Vietnamese mint, tamarind juice and tamarind peel and continue to boil on low heat. Break the fish meat into tiny pieces, but keep some in bigger chunks. Add the fish flakes back into the pot, along with the spice paste. When it reaches a boil, reduce heat and simmer for 40 minutes to one hour. While simmering, add salt and sugar to balance the spiciness and sourness for your taste. Rinse laksa noodles in cold water and strain. Place one serving of noodles into a bowl, and pour laksa soup with fish flakes over the top. Top with garnishing, and serve with a spoonful of shrimp paste if you like.', 'public/img/posts/o5zey9uaIsDUQN3JZIuosAvvNztHV8BMaLldGcHc.jpg', 'penang-laksa', 2, '2022-04-22 01:45:32', '2022-04-22 01:45:32'),
(9, 1, 'Char kuey teow', 'A flat rice noodles stir-fried with shrimp, bloody cockles, Chinese lap cheong (sausage), eggs, bean sprouts, and chives in a mix of soy sauce.', 1, 11, '3 cloves garlic, chopped finely, 12 shelled prawn, submerge in ice cold water plus 2 tablespoons sugar for 30 minutes, 1 lb. (0.4 kg) fresh flat rice noodles, completely loosened and no clumps, 1 lb. (0.4 kg) bloody cockles, extract the cockles by opening its shell, 2 Chinese sausages, sliced diagonally, 1 bunch fresh bean sprouts, rinsed with cold water and drained, 4 large eggs, 1 bunch Chinese chives, removed about 1-inch of the bottom section and cut into 2-inch lengths', 'Grind all the ingredients of the chili paste using a mini food processor until fine. Heat up a wok with 1 teaspoon oil and stir-fry the chili paste until aromatic. Dish out and set aside. Clean the wok thoroughly and heat it over high flame until it starts to smoke. Add 2 tablespoons oil/lard into the wok and add half the portion of chopped garlic into the wok and do a quick stir. Transfer six (6) prawn out of water and half the sausage slices into the wok. Make a few quick stirs with the spatula until the prawn starts to change color and you smell the aroma of the Chinese sausage. Add half the bean sprouts into the wok. Immediately follow by 8 oz. or half portion of the flat noodles.', 'public/img/posts/aRWFnF6WKZMRBucUB8DzhHeAgftJyPIWTbhbQEJR.jpg', 'char-kuey-teow', 2, '2022-04-22 02:18:50', '2022-04-22 02:18:50'),
(10, 2, 'Sambal stingray', 'Grilled over a large banana leaf and slathered over with shallots, garlic, ginger and herby lemongrass, and of course a dollop of sweet, creamy sambal belacan.', 1, 12, '150 g shallots (peeled), 75 g garlic (peeled), 15 g ginger (peeled), 40 g lemongrass (rough cut), 50 g red chillies (rough cut), 15 g dried chillies (soaked in water till soft and cut), 15 g toasted belacan, 20 g tamarind paste (mix with 3 tbsp water and remove pulp), ½ cup oil, 30 g palm sugar (roughly chopped), ¼ tsp salt, 1 piece stingray wing (400g –500g) - washed and sprinkled with salt (cut 2-3 slits if the ray is thick), ½ tsp salt, 3-4 pieces banana leaf, 1 calamansi (halved), 1 red onion (thinly sliced), ½ cucumber (sliced)', 'In a blender, combineshallots, garlic, ginger, lemongrass and red chillies, dried chillies and belacan till smooth. Heat up a pan with oil. Stir fry sambal paste over medium heat till fragrant and colour darkens (about 15 min). Remove from heat. Leave to cool. Heat up a grill pan. Place a banana leaf on grill pan, lightly brush with oil. Place stingray on leaf, white side up. Spread a layer of sambal on top. Grill till 70%-80% cooked, or banana leaf is toasted. (about 7 min depending on thickness). Cover the grill pan if possible. Place another leaf on a platter. (or you can use the grilled banana leaf together with the fish, if preferred). Flip fish onto it, spoon more sambal over the top and garnish with calamansi, red onions and cucumber.', 'public/img/posts/UzcHMNkm6kcacnWxdDluvn3cBA4891xhJC9HU0Gx.jpg', 'sambal-stingray', 2, '2022-04-22 04:23:23', '2022-04-22 04:23:23'),
(11, 2, 'Ban mian soup', 'Cooked in a savory soup, this is a perfect comfort food for rainy days!', 1, 20, '90 g pork mince, 1.5 L chicken broth, 30 g dried anchovies, 150 g plain flour, 3 eggs, 2 tbsp + ½ tsp cornstarch, 1 stalk baby bok choy, 1 tbsp deep-fried anchovies, 1 chili padi (sliced), 1 tbsp spring onion, 1 tsp fried shallots, 3 tbsp light soy sauce, 1 tbsp + 1 tsp white pepper, ½ tbsp sugar, 1 tsp sesame oil, 1 tsp salt, 70 ml water', 'In a large pot on medium-low heat, add chicken broth and dried anchovies. Allow to simmer for 20 minutes. In a bowl, add flour, 2 tbsp cornstarch, and 1 tsp salt. Make a well in the centre of the flour, then add in the egg. Knead into a dough, then add water tablespoon by tablespoon and continue to knead until it forms a dough. Set aside, covered, to rest for 10 minutes. Roll out dough to about 2mm thick. Dust with cornstarch, then roll into a slightly flat swiss roll. Cut sections about 1 cm thick, then unravel to reveal noodles. Set aside until ready to cook. While dough is resting, make the meatballs. In a mixing bowl, add pork mince, 1 tbsp light soy sauce, ½ tbsp sugar, ½ tsp cornstarch, 1 tsp white pepper, and 1 tsp sesame oil. Mix well, and set aside to marinate until ready to cook. Bring the pot with chicken broth to a boil. Add the noodles, baby bok choy, drop tablespoons of meatballs, and 2 eggs. Boil for 2 - 3 minutes, then ladle into bowls. Garnish with chili padi, 1 Tbsp deep-fried anchovies, 2 Tbsp light soy sauce, 1 Tbsp white pepper, 1 Tbsp spring onion and 1 Tsp fried shallots. Serve hot.', 'public/img/posts/uLnlqxsKUlTWvZljXf1tgh2T7TQVa5S9MakwFHnb.jpg', 'ban-mian-soup', 2, '2022-04-22 04:27:05', '2022-04-22 04:27:05'),
(12, 2, 'Oyster omelette', 'A dish of Hokkien and Teochew origin that is renowned for its savory flavor in its native Chaoshan and Minnan region', 1, 12, 'Flour mixture: 130 g tapioca flour, 720 ml water, 70 g plain flour, 1 tsp salt, Rice flour mixture (sticky white slurry) : 30 g rice flour, 400 ml water Omelette condiments: 120 ml oil, 6 eggs, 2 tsp fish sauce (red boat), 4 tsp soy sauce, 2 tsp cooking wine, 2 cloves garlic (chopped), 8 pcs oysters (substitute oysters with prawns), 2 tbsp spring onion (chopped), 2 tbsp chili paste pepper, scallions (sliced), 1 sprig coriander', 'Mix the tapioca flour, plain flour and salt into a bowl. Add water and mix. Strain and set aside. Mix the rice flour with water and strain. Set aside. Heat up an oiled pan. Spread ½ ladle of rice flour mixture covering the entire surface. Cook until the base is formed. Next, add about 1 ladle of tapioca flour mix over medium heat. Add 3 beaten eggs, 2 tsp light soy sauce and 1 tsp fish sauce. Spread evenly over entire surface. Lower the heat and fry. Turn over when the underside is slightly browned.  Drizzle some oil in the middle and cut up omelette and push to side of pan. Add 1 tsp garlic, 1 tbsp chili paste and 2 tbsp oil in the middle and fry. Then mix the omelette in. Add 4 pcs oysters onto centre of pan, searing it a few seconds. Add 1 tsp cooking wine. Mix the oysters with the omelette and spring onions. Transfer to serving dish and garnish with coriander.', 'public/img/posts/9vclbArH16YdfYyutKjGlktFciUl6Xrgs03f7Iel.jpg', 'oyster-omelette', 2, '2022-04-22 04:31:12', '2022-04-22 04:31:12'),
(13, 2, 'Prawn noodle soup', 'Singaporean\'s meal', 1, 12, '500 g pork ribs (blanched with hot water), 4 tbsp oil, 4 clove garlic (sliced), 1 kg prawns (remove shells and head, set aside), 220 g pork loin, 2 star anise, 4 cloves, 3 tbsp brown sugar, 2 L boiling water, 2 tbsp white peppercorn, 30 g rock sugar, 2 tsp salt, 1 tbsp fish sauce, 1 tbsp dark soya sauce, salt and pepper (to taste), 200 g yellow noodles, 25 g bean sprouts, 5 sprigs kang kong, 2 red cut chili, 2 tbsp red chili powder, ½ cup fried shallots', 'Heat oil in a pot.  Add garlic and fry for 30 seconds. Add in the prawn shells and head, brown sugar and sauté until they are fragrant and the colour changes to orange. Add water and bring to a boil. Let it simmer for 20 minutes. Strain the stock and discard the shells. Pour the prawn stock into another clean pot.  Bring it to a boil. Add the blanched pork ribs, star anise, cloves, white peppercorns, rock sugar, fish sauce, salt.  Bring to boil and let it simmer for 1 ½ hours or until the ribs are tender but not falling apart. Once the soup base is done cooking, taste and add more salt, sugar and pepper if needed. Add the dark soya sauce for colour if needed. Blanch the prawns you will be serving with the noodles briefly in the soup base until they turn pink and cook through.  Remove and set aside. Using the boiling soup base, blanch the pork loin till cooked.  Remove and cut the pork loin into thin slices. Bring a small pot of water to a boil. Then portion out the noodles, bean sprouts and kangkong and blanch them. Transfer into serving bowls. Top with prawns, pork slices.', 'public/img/posts/duMRSMhl7ND3ropVLB5mbZ5oltyvrY6yphzLlJ08.jpg', 'prawn-noodle-soup', 2, '2022-04-22 04:41:26', '2022-04-22 04:41:26'),
(14, 3, 'Pineapple fried rice', 'Best Thai pineapple fried rice with shrimp, cashew nuts and pineapple', 1, 1, '2 tablespoons oil, 2 cloves garlic, minced, 1 teaspoon Thai shrimp paste, optional, 4 oz. (115 g) shelled and deveined shrimp, tail-on, 8 oz. (226 g) leftover steamed rice, 4 oz. (115 g) fresh pineapple, cut into small cubes, 1/2 red or green chili, finely sliced, optional, 1 tablespoon fish sauce, 1/4 teaspoon dark soy sauce, 2 tablespoons cashew nuts, Cilantro, for garnishing', 'Heat up a wok and add cooking oil. Stir-fry the garlic, and shrimp paste (if using) until aromatic. Add shrimp and stir-fry until half-cooked. Add rice, pineapple pieces, chili (if using) and do a few quick stirs. Add fish sauce and dark soy sauce to blend well with rice. Stir-fry for another minute or so, add the cashew nuts, stir to combine well, dish out, garnish with cilantro and serve immediately.', 'public/img/posts/07fkNqqeErLLnUidd5thgJuOCSe2ZR9cBJ5pbMdc.jpg', 'pineapple-fried-rice', 2, '2022-04-22 04:48:27', '2022-04-22 04:48:27'),
(15, 3, 'Pad thai', 'Authentic and the best Pad Thai recipe with rice noodles stir-fried with homemade Pad Thai sauce', 1, 12, '4 oz. (115 g) packaged flat rice noodles, 2 tablespoons oil, 1 clove garlic, finely minced, 4 oz. (115 g) medium-sized shrimp, shelled and deveined, 2 oz. (56 g) fried firm tofu, cut into slices, 1 large egg, 4-6 oz. (115 g-170 g) bean sprouts, 1 oz. (30 g) chinese chives or scallions, cut into 2-inch lengths, 2 tablespoons crushed peanuts, lime wedges, pad thai sauce', 'Follow the package instructions to boil the dry rice noodles. The rice noodles should be soft (but still chewy and not mushy) after boiling. Rinse the boiled noodles with cold running water. Heat up a skillet on high heat and add the oil. As soon as the oil is heated, add the garlic into the skillet and start stirring until you smell the aroma of the garlic. Add the shrimp and the tofu pieces into the skillet and continue stirring. As soon as the shrimp changes color, add the noodles into the skillet and stir continuously, about 30 seconds. Use the spatula to push the noodles to one side of the skillet, and crack the egg on the empty side of the skillet. Use the spatula to break the egg yolk and blend with the egg white, let cook for about 30 seconds. Combine the egg and the noodles, and add the Seasoning sauce. Stir to combine well with the noodles. Next, add the bean sprouts and chives and continue stirring. As soon as the bean sprouts are cooked, stir-in the crushed peanut. Turn off the heat and serve the Pad Thai immediately with the lime wedges.', 'public/img/posts/Kv31rPcR1NUUXoWsfQJMiQ1q5koNchnmblRlWpgF.jpg', 'pad-thai', 2, '2022-04-22 04:53:04', '2022-04-22 04:53:04'),
(16, 3, 'Thai fried chicken', 'BEST fried chicken recipe ever, marinated with cilantro, garlic and Asian seasonings', 1, 30, '2 lbs. (1 kg) chicken, drumsticks, thighs, breasts, or cut-up chicken pieces, 6 cloves garlic, peeled and pounded, 2 tablespoons cilantro roots or use the cilantro stems, without leaves, 1 teaspoon sea salt, large-grained or kosher salt, 4 tablespoons fish sauce, 2 tablespoons oyster sauce, 1/2 tablespoon ground black pepper, oil for deep-frying, FLOUR MIXTURE: 4 tablespoons all-purpose flour, 4 tablespoons corn starch, 4 tablespoons rice flour', 'Clean the chicken and pat dry with paper towels. Use a mini food processor or a mortar and pestle to blend the garlic, cilantro roots and salt until they become a fine paste. Add the paste, fish sauce, oyster sauce, ground black peppper to the chicken and mix well. Transfer the chicken into a big Ziploc bag and marinate for four (4) to six (6) hours in the fridge, or best overnight. When ready, heat up a pot of cooking oil or use a deep fryer. While waiting for the oil to heat up, mix the three types of flour together in a new Ziploc bag. Add the chicken and coat evenly with the flour mixture. Shake the excess flour off. Drop the chicken gently into the oil and deep fry the chicken until crispy and golden brown (the inside should cook thoroughly but remains juicy). Transfer the fried chicken out on a plate lined with paper towels to soak up the excess oil. Serve the fried chicken immediately with Thai sweet chili sauce.', 'public/img/posts/4NHlISTMCEPqlmBZCxGrbD6Y0hqS5soaAq3WEjJK.jpg', 'thai-fried-chicken', 2, '2022-04-22 05:10:12', '2022-04-22 05:10:12'),
(17, 3, 'Thai pork satay', 'These skewers of pork marinated and grilled to perfection make delicious and easy Thai satay in your very own home!', 1, 30, 'SPECIAL EQUIPMENT: 36 wood skewers, 8 inches or so each, soaked in tepid water for 30 minutes, 1 Thai granite mortar and pestle, 1 charcoal grill, highly recommended, grates oiled, MEAT: 1 piece pork back fat (highly recommended but optional) (6-ounce/170 grams), 2 pounds (1 kg) boneless pork loin, cut into strips that are approximately 3 inches long(7cm), 1 inch (2 cm) wide, and 1/4 inch (0.5cm) thick, MARINADE: 11/2 teaspoons coriander seeds, 1 pinch cumin seeds, 1 teaspoon kosher salt, plus extra for seasoning the skewers, 14 grams thinly sliced lemongrass, tender parts only, from about 2 large stalks, 1 piece peeled fresh or frozen (not defrosted) galangal, thinly sliced against grain (14 gram), 1 piece peeled fresh or frozen (not defrosted) yellow turmeric root, thinly sliced against grain (14 g), 2 tablespoons granulated sugar, 6 tablespoons sweetened condensed milk, preferably Black & White or Longevity brand, 1/2 teaspoon ground white pepper, 1 cup unsweetened coconut milk, boxed, preferably', 'Put the fat in a small pot, add just enough water to cover, and set the pot over high heat. Bring the water to a rolling simmer, decrease the heat to maintain it, and cook until the opaque white fat has turned slightly translucent, about 5 minutes. Drain the fat, discarding the water, and cut it into approximately 3/4-inch squares that are about 1/4 inch thick. Skewer one fat cube per skewer (discard any extras), pushing the cubes down to about 4 inches from the tip. Weave one skewer through the center of each strip of pork, exiting and entering several times, so the strip is fixed firmly to it and ends just below the tip of the skewer. Combine the coriander and cumin in a small pan, set the pan over medium-low heat, and cook, stirring and tossing often, until the spices are very fragrant and the coriander seeds turn a shade or two darker, about 8 minutes. Let the spices cool slightly and pound them in a granite mortar (or grind them in a spice grinder) to a coarse powder. Combine the spice powder, condensed milk, lemongrass, galangal, turmeric, sugar, salt, pepper, and all but a few tablespoons of the coconut milk in a blender. Blend until smooth, then pour the marinade into a container, preferably a deep, narrow one. Swish the remaining coconut milk in the blender and pour it into the container.', 'public/img/posts/T8xHoXqEMY1K72guv6nhTGy6OKdy4bhh8JzNfnRQ.jpg', 'thai-pork-satay', 2, '2022-04-22 05:14:31', '2022-04-22 05:14:31'),
(18, 3, 'Thai green curry', 'Easy green curry with chicken in rich coconut curry sauce', 1, 12, '1 1/2 tablespoons oil, 2 tbsp green curry paste, Maesri brand preferred, 8 oz. (226 g) chicken breast, cut into bite-sized pieces, 1/2 cup coconut milk, 1/2 cup water, 4 oz. (115 g) bamboo shoot, 5 kaffir lime leaves , lightly bruised, 2 red chilies, cut into thick strips, 1 tablespoon fish sauce, 1 tablespoon sugar or palm sugar (preferred), 1/4 cup Thai basil leaves', 'Heat up a pot over medium heat and add the oil. Saute the green curry paste until aromatic, add the chicken and stir to combine well with the curry paste. Add the coconut milk and water and bring it to a quick boil. Add the bamboo shoots, kaffir lime leaves, and red chilies. Lower the heat to simmer, cover the pot and let simmer for 10 minutes or until the curry slightly thickens.\r\nAdd the fish sauce, sugar, and basil leaves. Stir to mix well. Turn off the heat and serve immediately with steamed rice.', 'public/img/posts/CvdreyLRXlfq2sLIknysyVOLvx1ULMV4HEU599zH.jpg', 'thai-green-curry', 2, '2022-04-22 05:17:04', '2022-04-22 05:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `recomendeds`
--

CREATE TABLE `recomendeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cuisine_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recomendeds`
--

INSERT INTO `recomendeds` (`id`, `user_id`, `cuisine_id`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2022-04-08 01:09:31', '2022-04-24 18:58:19'),
(2, 3, 1, '2022-04-18 00:59:37', '2022-04-18 02:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@upmeal.com', 'ADM', NULL, '$2y$10$dskXiny1n.3TANZ2DeKVAuVOcLxyiLMm8lyCRkq5.ec2Qpqj7H8b.', NULL, NULL, NULL, NULL, NULL, '2022-04-08 00:31:01', '2022-04-22 04:42:31'),
(2, 'henz', 'henz@gmail.com', 'USR', NULL, '$2y$10$kXRbzSJIvmt0l5Cf6niofO9jOHwqcplmV7K8cHzwdL8q/6OGB2oMi', NULL, NULL, 'rKtBKDuCwz33ldeCokJteOIqFoKdNp2JzPiSN5D1RR7vJ3uNDLBbpyfistkX', NULL, 'profile-photos/VnlEJSwn84Ip9huKhqVrV1aRAXdrLLuLpDQ8tgPA.jpg', '2022-04-08 00:31:26', '2022-04-08 02:54:28'),
(3, 'dmenaze1', 'dmenaze1@gmail.com', 'USR', NULL, '$2y$10$ZLf8NKKQwZCHQHgKRj6pF.Mcqf.ZxmOUrbtrCkKoDls6YsoUIDQpi', NULL, NULL, NULL, NULL, 'profile-photos/OlFGESyBYCnKwrSa5HYEtrwLTgh5IhgdTg2e3eBW.jpg', '2022-04-17 23:58:34', '2022-04-18 00:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checklists`
--
ALTER TABLE `checklists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checklists_user_id_index` (`user_id`);

--
-- Indexes for table `cuisines`
--
ALTER TABLE `cuisines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_index` (`user_id`);

--
-- Indexes for table `recomendeds`
--
ALTER TABLE `recomendeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recomendeds_user_id_foreign` (`user_id`),
  ADD KEY `recomendeds_cuisine_id_foreign` (`cuisine_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_post_id_foreign` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checklists`
--
ALTER TABLE `checklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cuisines`
--
ALTER TABLE `cuisines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `recomendeds`
--
ALTER TABLE `recomendeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recomendeds`
--
ALTER TABLE `recomendeds`
  ADD CONSTRAINT `recomendeds_cuisine_id_foreign` FOREIGN KEY (`cuisine_id`) REFERENCES `cuisines` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recomendeds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
