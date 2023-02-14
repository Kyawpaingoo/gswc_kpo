-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2023 at 04:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gwsc_kpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `campsite`
--

CREATE TABLE `campsite` (
  `id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `guest` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campsite`
--

INSERT INTO `campsite` (`id`, `image`, `name`, `zone`, `guest`, `description`, `price`) VALUES
(1, 'campsite.jpg', '\"The Riverside Retreat', 'Zone A', '1-6', 'This camping site is located on the banks of a serene and peaceful river. The site is surrounded by lush green forests and offers a tranquil and secluded atmosphere. There are plenty of spots for tents and RVs, as well as designated fire pits and picnic tables. The river is perfect for fishing and swimming, and the nearby trails are great for hiking and bird watching. The Riverside Retreat is an ideal spot for those looking for a peaceful getaway in nature.', '$500'),
(2, 'campsite2.jpg', 'Mountain Vista', 'Zone B', '1-8', 'This camping site is situated high in the mountains, offering panoramic views of the surrounding landscape. The site is surrounded by well-maintained hiking and biking trails, perfect for outdoor enthusiasts. The campground has amenities such as fire pit, picnic tables and clean facilities. The cool mountain air and the serenity of the forest make it an ideal spot for those looking to escape the hustle and bustle of the city and reconnect with nature', '$800'),
(3, 'campsite3.jpg', 'Sandy Shores', 'Zone C', '1-4', 'This camping site is located right on the beach, providing campers with direct access to the water. The site has designated spots for tents and RVs, as well as picnic tables, fire pits and clean facilities. The nearby beach is perfect for swimming, boating, and fishing, and the sunsets are absolutely breathtaking. The Sandy Shores is the perfect spot for a beach vacation with family and friends.', '$700'),
(4, 'campsite4.jpg', 'The Ponderosa', 'Zone D', '1-10', 'This camping site is situated in a dense forest of tall pine trees, providing a true wilderness experience. The site has designated spots for tents and RVs, as well as picnic tables, fire pits and clean facilities. There is a nearby lake for fishing, and the forest is home to a variety of wildlife, including deer, foxes, and birds. The Ponderosa is the perfect spot for nature lovers looking to escape the hustle and bustle of city life and immerse themselves in the beauty of the natural world.\r\n\r\n\r\n\r\n\r\n', '$1500');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Tent'),
(2, 'Motorhome'),
(3, 'Camper');

-- --------------------------------------------------------

--
-- Table structure for table `local_attraction`
--

CREATE TABLE `local_attraction` (
  `id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `local_attraction`
--

INSERT INTO `local_attraction` (`id`, `image`, `title`, `description`) VALUES
(1, 'la5.jpg', 'To the mountain with you', 'Camping in the mountains is a truly unique and exhilarating experience. The rugged terrain, pristine wilderness, and stunning views make it the perfect destination for nature lovers and outdoor enthusiasts.\r\n\r\nOne of the main attractions of camping in the mountains is the opportunity to escape the hustle and bustle of everyday life and connect with nature. The natural surroundings provide a peaceful and serene environment, allowing for a deeper appreciation of the beauty and majesty of the outdoors.\r\n\r\nCamping in the mountains also offers a wide range of outdoor activities for visitors. Hiking is one of the most popular activities, with trails that range from easy nature walks to challenging backcountry treks. Many mountain ranges also offer opportunities for rock climbing, mountaineering, and even skiing or snowboarding during winter months.\r\n\r\nWhen it comes to camping, mountain campsites can vary widely. Some campgrounds have amenities such as running water, flush toilets and fire rings, while others are more primitive and require backpackers to carry all their supplies in. Campers should be prepared for the weather and altitude changes, as well as the possibility of encountering wildlife. It is important to check for reservations, permits, and park specific rules before planning a trip.\r\n\r\nCamping in the mountains can also be a great opportunity for stargazing, as the lack of light pollution allows for clear views of the night sky. The natural surroundings can also provide great opportunities for photography and bird watching.\r\n\r\nOverall, camping in the mountains is a truly unique and rewarding experience. The rugged terrain, pristine wilderness, and stunning views provide a perfect setting for a peaceful and relaxing getaway, as well as a variety of outdoor activities. It is recommended to come prepared and to check for the specific rules and regulations of the area you plan to visit.'),
(2, 'la7.jpg', 'Along the river side', 'Camping along a river is a unique and enjoyable experience that offers a variety of outdoor activities and natural beauty. The soothing sound of flowing water and the close proximity to nature make it the perfect destination for nature lovers and outdoor enthusiasts.\r\n\r\nOne of the main attractions of camping along a river is the opportunity to enjoy a variety of water-based activities. Many campers enjoy swimming, fishing, and kayaking or canoeing in the river. The clear water and the variety of fish species that can be found in rivers make for a great fishing experience. For those who enjoy floating, rafting or tubing, many rivers provide a great way to explore the surrounding area and take in the natural beauty.\r\n\r\nCamping along a river also offers a wide range of outdoor activities for visitors. Hiking is one of the most popular activities, with trails that range from easy nature walks to challenging backcountry treks. Many river-side campsites also offer opportunities for bird watching, photography, and wildlife observation.\r\n\r\nWhen it comes to camping, river-side campsites can vary widely. Some campgrounds have amenities such as running water, flush toilets and fire rings, while others are more primitive and require backpackers to carry all their supplies in. Campers should be prepared for the possibility of encountering wildlife and for the possibility of changing weather conditions. It is important to check for reservations, permits, and park specific rules before planning a trip.\r\n\r\nCamping along a river can also be a great opportunity for stargazing, as the lack of light pollution allows for clear views of the night sky. The natural surroundings can also provide great opportunities for photography and bird watching.\r\n\r\nOverall, camping along a river is a truly unique and rewarding experience. The soothing sound of flowing water and the close proximity to nature provide a perfect setting for a peaceful and relaxing getaway, as well as a variety of outdoor activities. It is recommended to come prepared and to check for the specific rules and regulations of the area you plan to visit.'),
(3, 'river2.jpg', 'A river resort you should go', 'Traveling to a river resort is a great way to escape the hustle and bustle of everyday life and enjoy a relaxing getaway. These resorts offer a wide range of activities and amenities for visitors, making them the perfect destination for nature lovers and outdoor enthusiasts.\r\n\r\nOne of the main attractions of a river resort is the opportunity to enjoy a variety of water-based activities. Many resorts offer swimming, fishing, and kayaking or canoeing in the river, as well as rafting or tubing. The clear water and the variety of fish species that can be found in rivers make for a great fishing experience. Some resorts also offer guided fishing trips or fly fishing lessons for those who want to learn more about the sport.\r\n\r\nRiver resorts also offer a wide range of outdoor activities for visitors. Hiking is one of the most popular activities, with trails that range from easy nature walks to challenging backcountry treks. Many river resorts also offer opportunities for bird watching, photography, and wildlife observation.\r\n\r\nWhen it comes to accommodations, river resorts can vary widely. Some resorts offer luxury cabins or villas, while others offer more rustic camping options such as tents or RV hookups. Many resorts also offer amenities such as spas, fitness centers, and fine dining options for a more upscale experience.\r\n\r\nRiver resorts can also be a great destination for families. Many resorts offer children\'s programs and activities, such as swimming lessons, fishing clinics, and nature walks. This can provide a great opportunity for families to spend quality time together while enjoying the great outdoors.\r\n\r\nOverall, traveling to a river resort is a great way to enjoy a relaxing getaway in a natural setting. '),
(4, 'la10.jpg', 'Rowing in the river ', 'Rowing a boat in a river is a peaceful and serene way to experience the beauty of nature. It allows for a close-up view of the river\'s ecosystem, and the opportunity to enjoy the tranquility and serenity of the flowing water.\r\n\r\nOne of the main attractions of rowing a boat in a river is the opportunity to explore the river\'s ecosystem and appreciate the diverse flora and fauna that can be found\r\n\r\nalong its banks. Rowing allows for a slower pace of travel, which makes it easier to spot birds, fish, and other wildlife that call the river home. It\'s also a great way to enjoy the natural beauty of the river, such as the changing colors of the leaves during fall or the blooming of wildflowers in spring.'),
(5, 'swimmingintheriver.jpg', 'Swimming in the river ', 'Swimming in a river can be a refreshing and invigorating experience. Not only is it a great way to cool off on a hot summer day, but it also provides an opportunity to connect with nature and enjoy the outdoors. However, it is also important to be aware of the potential risks and take proper safety precautions.\r\n\r\nWhen swimming in a river, it\'s important to check the water conditions before you jump in. Look for signs of hazardous conditions such as strong currents, high water levels, or dangerous debris. If the water appears to be dangerous, it\'s best to avoid swimming in that area. Also, it\'s a good idea to familiarize yourself with the area, if you are not familiar with the location, and understand the layout of the river, including any deep pools or shallow areas.\r\n\r\nIt\'s also important to be aware of the potential presence of harmful bacteria or pollutants in the water. Rivers can be affected by agricultural runoff, industrial pollution, and other contaminants. Check with local authorities for any advisories or warnings about the water quality before swimming.\r\n\r\nWhen swimming in a river, it\'s important to wear appropriate clothing and personal flotation devices, especially if you\'re not a strong swimmer or if the water is fast-moving. It\'s also a good idea to bring a buddy or swim with a group for added safety.\r\n\r\nLastly, always respect the natural environment and be mindful of the plants and animals that call the river home. Avoid disturbing the wildlife and refrain from littering or leaving any debris behind.\r\n\r\nIn conclusion, swimming in a river can be a fun and enjoyable experience, but it\'s important to be aware of the potential risks and take proper safety precautions. By following these guidelines, you can enjoy a safe and enjoyable swim in the river while also protecting the environment'),
(6, 'walking2.jpg', 'Walking in the forest', 'Walking in the woods can be a truly magical experience. The tranquility of the forest, the sound of birds singing, and the fresh scent of pine can all contribute to a sense of peace and well-being. However, it\'s important to be aware of the potential risks and take proper safety precautions.\r\n\r\nBefore heading out on your walk, make sure to check the weather forecast and dress appropriately. Wear comfortable shoes, dress in layers, and bring plenty of water. A hat, sunscreen, and insect repellent can also be helpful. It\'s also important to familiarize yourself with the area, especially if you\'re not familiar with the trail or location. If possible, bring a map and compass or download a map on your phone.\r\n\r\nOne of the best things about walking in the woods is the opportunity to take in the natural beauty of the area. The woods are often home to a wide variety of plants and animals, and it\'s not uncommon to spot deer, squirrels, birds, and other animals as you walk. Keep in mind that these animals are wild and should be respected and observed from a safe distance.\r\n\r\nWhen walking in the woods, it\'s important to stay on designated trails and avoid taking shortcuts. Not only is it easier to get lost off the beaten path, but it can also cause damage to the natural environment. It\'s also a good idea to let someone know where you\'re going and when you expect to be back.\r\n\r\nLastly, always respect the natural environment and be mindful of the plants and animals that call the woods home. Avoid disturbing the wildlife and refrain from littering or leaving any debris behind.\r\n\r\nIn conclusion, walking in the woods can be a wonderful way to connect with nature and take in the beauty of the environment. However, it\'s important to be aware of the potential risks and take proper safety precautions. By following these guidelines, you can enjoy a safe and enjoyable walk in the woods while also protecting the environment.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `stock` int NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `name`, `description`, `price`, `stock`, `category_id`) VALUES
(1, 'dome_tent.jpg', 'Dome Tent', '                                        Dome tents consist of two poles which cross over each other to make the tent structure.  The ends of the poles go into the tent’s floor (or ground sheet).  This creates a free-standing structure which doesn’t need guylines or stakes to stay up.  A waterproof layer can go on top of this. They are very easy and quick to set up.\r\n\r\nThe dome shape of the tent means wind can move over the tent easily.  Water will also fall off the tent instead of pooling on the top, so dome tents are great for bad weather.  Dome tents come in all sizes but larger dome tents don’t do as well in bad weather though.\r\n\r\nThe downside of the dome shape is that the walls are curved.  Thus, the ceiling height will be low in many parts of the tent.\r\n\"\r\n                    \"\r\n                    ', 200, 15, 2),
(2, 'extra_dome_tent4.jpg', 'Extended Dome Tent', 'Extended dome tents use the criss-crossing pole design but they also have a curved pole (or poles) which extend off to the size.  This pole is often used to create a vestibule space in front of the tent.\r\n\r\nTwo curved poles can also be added to each side of the dome to create a larger tent or even additional rooms.  The extended area is slanted though, so doesn’t give much extra interior space with headroom.\r\n\r\nThe curved pole does need to be staked down, so the tent is only semi-freestanding.  However, it is still fairly easy to set up.  The design gives you much more space and versatility while still maintaining the benefits of a sturdy dome design.', 800, 19, 1),
(3, 'tunnel_tent3.jpg', 'Tunnel Tent', 'Tunnel tents are made up of two or more curved poles connected by the tent fabric.  The pole design creates a tunnel which has consistent overhead height.  Some tunnel tents have large storage areas in the middle with multiple rooms off to the side.\r\n\r\nIn theory, there is no limit to how many poles a tunnel tent can have, so they come in many different sizes.  However, the design doesn’t usually make sense for more than 6 people.  With 6, you can have a patio in the middle and 3 people sleeping on each side. For more campers than this, you’d have to cram people into the end of the tunnel, meaning they would have to crawl over the other campers to get in/out.\r\n\r\nAssembling tunnel tents is usually pretty easy.  However, they are not freestanding and must be staked out.  This makes tunnel tents a bad choice for rocky ground or sandy soil.  You also have to be careful not to trip on the many guylines.\r\n\r\nIt’s important to pay attention to wind direction when setting up a tunnel tent.  If the wind hits the tunnel straight-on, it can easily cause the tunnel to blow away.   Thus, tunnel tents aren’t recommended for windy weather.', 1200, 9, 1),
(4, 'cabin_tent.jpg', 'Cabin Tent', 'These tents have vertical or near vertical walls, so they resemble a cabin when set up. The vertical walls mean the interior of the tent is very spacious and you have lots of headroom.  They are great for people who don’t want to hunch over in the tent or want to use a cot bed inside the tent\r\n\r\nCabin tents come in various sizes, including sizes for large families and groups.   They sometimes have room dividers or even multiple rooms.\r\n\r\nThe downside of cabin tents is that they are very big and bulky.  The huge footprint means you can’t pitch them just anywhere.  Pitching can be a pain too and usually requires multiple people. They aren’t freestanding and have to be carefully staked out with guylines.  You’ll probably need to bring a hammer to ensure the guylines are secure.\r\n\r\nCabin tents are also not great against high winds.  Because most cabin tents are just one-layer, condensation can build up inside the tent and drip water on you while you sleep.  Because of these issues, cabin tents are mostly recommended for mild weather camping.', 800, 5, 1),
(5, 'rooftop_tent.jpg', 'Rooftop Tent', 'Rooftop tents are installed on top of your vehicle.  Depending on the type, you unfold, inflate, or pop-up the tent when you want to use it.  You use a ladder to climb into the tent.\r\n\r\nWhile mounting the tent to your car can be a pain, pitching rooftop tents is generally quick and easy.  You don’t have to worry about uneven ground or staking out the tent.   You can camp anywhere that you can park your vehicle.\r\n\r\nRooftop tents aren’t for everyone though.  Small children or uneasy sleepers can fall out of rooftop tents.  They perform poorly in wind.  You’ve got to empty the tent and fold it away if you want to drive anywhere.  Most rooftop tents are also pretty pricy.', 1500, 18, 1),
(6, 'frame_tent.jpg', 'Ridge Tent', 'These are the tent design that you might see in cowboy movies.  The construction involves at least two poles to support the front and back of the tent.  These poles are often connected by a center ridgeline pole.   The design means you have slanted walls. While more spacious than a pyramid tent, you still don’t get much headroom.\r\n\r\nRidge tents are usually one-layer so condensation often occurs. They are somewhat difficult to pitch and sagging walls are almost inevitable. This means that rain or snow will pool on tent walls.  Most basic designs don’t handle wind very well either.\r\n\r\nBecause of all of these issues, A-frame tents are rarely used anymore.  The exception is with ultralight backpackers who use A-frame designs for tarp shelters.  There are also some ultralight trekking pole tents which use the A-frame design.', 1000, 12, 1),
(7, 'classA.jpg', 'Class A Motorhome Service', 'A diesel motorhomes or diesel pushers. These RVs are constructed on a specially-designed motor vehicle chassis. The large diesel engine on this motorhome is located in the rear of the coach, and it provides more torque compared to its gas-powered counterpart. The location of the engine also helps provide a quiet and smooth ride. The diesel engine essentially pushes the motorhome down the road. Diesel motorhomes are the epitome of luxury RVs, which makes them great for long trips and cross-country adventures. In many instances, they are the perfect RV for the full-time RVer. The diesel engine usually lasts longer and is more durable than the gas engine on other Class As but that makes them more expensive, too.', 2000, 10, 2),
(8, 'classAGas.jpg', 'Class A Gas Motorhome Service', 'lass A gas motorhomes offer many of the comforts of home. This makes them a popular choice for full-time or long-term RVers. You’ll often find residential-style appliances (from refrigerators and microwaves to washer and dryers), master bathrooms, high-quality electronics, and designer furniture in this type of RV. Most also have multiple slideouts or full-length slideouts for added space. They also have plenty of storage compartments for personal belongings needed for extended travel. Both types of Class A motorhomes resemble a bus, roughly 30 to 40 feet in length, with a vertical front windshield with large windows.', 1500, 4, 2),
(9, 'classC.jpg', 'Class C Motorhome Service', 'A smaller type of motorhome, Class C motorhomes are usually built on a truck chassis. Gas and diesel options are available. Some well-known manufacturers of Class C engines include Chevy, Ford, and Mercedes Benz. Class C RVs have a distinctive “cab-over” profile that makes them easy to recognize (and provides an extra bed or storage space). Many Class C motorhomes offer similar amenities to their Class A counterparts, like kitchens, bathrooms, and slideouts, just on a smaller scale. Their shorter chassis also means these RVs can go places where larger RVs won’t fit, like some state park campsites. Numerous Class C floorplans are available, making this type of RV perfect for anyone that loves remote exploring and camping – especially families and couples who travel with friends.', 800, 10, 2),
(10, 'camper1.jpg', 'Fifth Wheel Campers', 'The largest type of towable RV, fifth wheel campers, are pulled by large pick-up trucks with a special fifth wheel hitch located in the bed of the truck. Because of this hitch, they have a raised forward section where you’ll typically find a bedroom or living room. Fifth wheels are some of the most spacious RVs available thanks to their extended length and slideouts. Some floorplans have up to six slideouts! This makes them a great option for large families or those who want to camp with big groups. Many fifth wheel RVers will park their RV at a campground and detach the towing vehicle for daily travel. As with any towable RV, it’s critical that the towing vehicle is rated to handle the weight of the RV plus its contents.', 3000, 6, 3),
(11, 'camper2.jpg', 'Toy Haulers', 'Toy haulers (sometimes called sport utility RVs) are built to accommodate tons of gear and outdoor toys. Motorcycles, dirt bikes, golf carts, four wheelers, snowmobiles, kayaks, and more – you name it, these RVs will haul it. Designed with a large cargo area/garage, toy haulers have special heavy-duty doors that double as ramps for loading gear. Unlike the previous types of RV that we’ve described, toy haulers are a sub-category of RVs. Toy haulers are available in towable and motorized RV types, but most toy hauler RVs are fifth wheels. The combination of comfortable living space and a garage make these the perfect basecamp for active RVers who want to play hard wherever they travel.', 2500, 4, 3),
(12, 'camper3.jpg', 'Travel Trailers', ' This popular type of RV is towed by a bumper hitch or a frame hitch that extends from the front of the trailer. Travel trailers are ideal for any type of camper because lots of floor plans and styles are available. In fact, their weights can vary greatly – from less than 4,000 lbs to over 10,000 lbs. You can also find travel trailers that have multiple slideouts for increased living areas. Travel trailers are easier to detach and setup in a campground than fifth wheels. They provide the freedom of having a vehicle to enjoy their destination and a complete home unit wherever they travel. This makes travel trailers a favorite type of RV for many.', 1600, 2, 3),
(13, 'camper4.jpg', 'Teardrop Campers / Tiny Trailers', '. Teardrop trailers are ideal for weekend travelers who want basic amenities when they travel. The simplest teardrop RVs are just a bedroom on wheels. Larger floorplans can contain a bed, kitchen/dining area, and wet bath. Like Class B motorhomes, teardrop RVs utilize swivel toilets, folding sinks, convertible beds, and more to make the small floorplan highly functional. Teardrop enthusiasts love the clever design and vintage aesthetic of these trailers, and they gather at rallies like Tearstock with other teardrop owners. It’s very common for these RVers to decorate their tiny trailers with retro fabrics and vintage trimmings. These RVs typically weigh less than 4,000 lbs. This type of RV is gaining popularity thanks to manufacturers, like Liberty Outdoors, who have promoted the tiny trailer movement.', 1200, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `star` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `description`, `city`, `country`, `star`) VALUES
(1, 'Hirai Momo ', 'momo@gmail.com', '\"Camping is a great way to reconnect with nature and get away from the hustle and bustle of everyday life. Whether you\'re camping in a tent or an RV, the experience of being in the great outdoors is truly unique and enjoyable.\"The fresh air, beautiful scenery, and peaceful surroundings make for an unforgettable experience. ', 'Kyoto', 'Japan', 4),
(2, 'Myoui Mina ', 'mina@gmail.com', '\"Camping at GWSC was an incredible experience. The campsite was well-maintained and had all the amenities we needed, including clean bathrooms and fire pits. The surrounding wilderness was breathtaking and provided ample opportunities for hiking and exploring. The staff was also friendly and helpful. We will definitely be back for another camping trip in the future.\"', 'Kobe', 'Japan', 3),
(3, 'Kenvin Skywalker', 'kenvin@gmail.com', '\"I recently went on a camping trip and was disappointed with the overall experience. The campsite was overcrowded and lacked privacy. The bathrooms were dirty and not well-maintained. Additionally, there were no fire pits available, which made it difficult to cook and spend time around the campfire. I would not recommend this campsite to others and will not be returning in the future.\"', ' Yangon ', 'Myanmar', 2),
(4, 'Mia Crown', 'miacrown@gmail.com', '\"Camping at GWSC was an incredible experience. The campsite was well-maintained and had all the amenities we needed, including clean bathrooms and fire pits. The surrounding wilderness was breathtaking and provided ample opportunities for hiking and exploring. The staff was also friendly and helpful. We will definitely be back for another camping trip in the future.\"', 'Yangon', 'Myanmar', 4),
(5, 'Kyaw Paing Oo', 'kyawkyaw@gmail.com', '\"Camping is a great way to reconnect with nature and get away from the hustle and bustle of everyday life. Whether you\'re camping in a tent or an RV, the experience of being in the great outdoors is truly unique and enjoyable.\"The fresh air, beautiful scenery, and peaceful surroundings make for an unforgettable experience.', 'SanChaung', 'Myanmar', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `startdate` date NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `type` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `age`, `country`, `startdate`, `role`, `type`) VALUES
(1, 'Kyaw Paing Oo', 'admin@gmail.com', 'admin123456', 20, 'Myanmar', '2022-01-01', 'admin', 0),
(2, 'Mia Crown', 'miacrow@gmail.com', 'mia123456', 21, 'Japan', '2022-02-07', 'user', 1),
(3, 'Min Min', 'minmin@gmail.com', 'minmin123456', 22, 'Myanmar', '2022-10-14', 'user', 1),
(4, 'James', 'james@gmail.com', 'james123456', 25, 'United Kingdom', '2023-01-20', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campsite`
--
ALTER TABLE `campsite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_attraction`
--
ALTER TABLE `local_attraction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id fr` (`category_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campsite`
--
ALTER TABLE `campsite`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `local_attraction`
--
ALTER TABLE `local_attraction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_id fr` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
