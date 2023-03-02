-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 12:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamestore_joshua`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `gameName` varchar(255) NOT NULL,
  `descriptionShort` text NOT NULL,
  `price` double NOT NULL,
  `discount` int(11) NOT NULL,
  `posterImage` varchar(50) NOT NULL,
  `aboutThisGame` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `gameName`, `descriptionShort`, `price`, `discount`, `posterImage`, `aboutThisGame`) VALUES
(1, 'Skyrim', 'Winner of more than 200 Game of the Year Awards, Skyrim Special Edition brings the epic fantasy to life in stunning detail. The Special Edition includes the critically acclaimed game and add-ons with all-new features like remastered art and effects, volumetric god rays.', 40.9, 25, '../images/SkyrimPoster01.jpg', 'The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks. It is the fifth main installment in The Elder Scrolls series, following The Elder Scrolls IV: Oblivion, and was released worldwide for Microsoft Windows, PlayStation 3, and Xbox 360 on November 11, 2011.  The game&#39;s main story revolves around the player&#39;s character, the Dragonborn, on their quest to defeat Alduin the World-Eater, a dragon who is prophesied to destroy the world. The game is set 200 years after the events of Oblivion and takes place in Skyrim, the northernmost province of Tamriel. Over the course of the game, the player completes quests and develops the character by improving skills. The game continues the open-world tradition of its predecessors by allowing the player to travel anywhere in the game world at any time, and to ignore or postpone the main storyline indefinitely.  Skyrim was developed using the Creation Engine, rebuilt specifically for the game. The team opted for a unique and more diverse open world than Oblivion&#39;s Imperial Province of Cyrodiil, which game director and executive producer Todd Howard considered less interesting by comparison. The game was released to critical acclaim, with reviewers particularly mentioning the character advancement and setting, and is considered to be one of the greatest video games of all time. Nonetheless it received some criticism, predominantly for its melee combat and numerous technical issues present at launch. The game shipped over seven million copies to retailers within the first week of its release, and over 30 million copies on all platforms as of November 2016, making it one of the best selling video games in history.'),
(2, 'Doom', 'Developed by id software, the studio that pioneered the first-person shooter genre and created multiplayer Deathmatch, DOOM returns as a brutally fun and challenging modern-day shooter experience. Relentless demons, impossibly destructive guns, and fast, fluid movement provide the foundation for intense, first-person combat', 19.99, 5, '../images/DoomBg.jpg', '<p class=‘AboutThisGameText’>\r\nDoom is a first-person shooter video game developed by id Software and published by Bethesda Softworks. It was released worldwide on Windows, PlayStation 4, and Xbox One in May 2016 and is powered by id Tech 6. A port for Nintendo Switch was co-developed with Panic Button and released in November 2017.</p>\r\n <p class=‘AboutThisGameText’>\r\nA reboot of the Doom franchise, it is the fourth title in the main series and the first major installment since Doom 3 in 2004.  Doom was announced as ‘Doom 4’ in 2008, and that version underwent an extensive development cycle with different builds and designs before the game was restarted in 2011 and revealed as simply ‘Doom’ in 2014. It was tested by customers who pre-ordered the 2014 Bethesda game Wolfenstein: The New Order and also by the general public. Mick Gordon composed the music for the game, with additional music contributed by Ben F. Carney, Chris Hite, and Chad Mossholder. </p>\r\n <p class=‘AboutThisGameText’>\r\nPlayers take the role of an unnamed space marine as he battles demonic forces from Hell that have been unleashed by the Union Aerospace Corporation on a future-set colonized planet Mars. The gameplay returns to a faster pace with more open-ended levels, closer to the first two games than the slower survival horror approach of Doom 3. It also features environment traversal, character upgrades, and the ability to perform executions known as ‘glory kills’. </p>\r\n<p class=‘AboutThisGameText’>\r\nThe game also supports an online multiplayer component and a level editor known as ‘SnapMap’, co-developed with Certain Affinityand Escalation Studios, respectively. </p>\r\n'),
(4, 'Red Dead Redemption 2', 'Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, RDR2 is the epic tale of outlaw Arthur Morgan and the infamous Van der Linde gang, on the run across America at the dawn of the modern age. Also includes access to the shared living world of Red Dead Online.', 59.99, 15, '../images/redDeadRedemption2Poster.jpg', '<p class=‘AboutThisGameText’>\r\nArthur Morgan and the Van der Linde gang are outlaws on the run. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threaten to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.</p>\r\n<p class=‘AboutThisGameText’>\r\nNow featuring additional Story Mode content and a fully-featured Photo Mode, Red Dead Redemption 2 also includes free access to the shared living world of Red Dead Online, where players take on an array of roles to carve their own unique path on the frontier as they track wanted criminals as a Bounty Hunter, create a business as a Trader, unearth exotic treasures as a Collector or run an underground distillery as a Moonshiner and much more.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nWith all new graphical and technical enhancements for deeper immersion, Red Dead Redemption 2 for PC takes full advantage of the power of the PC to bring every corner of this massive, rich and detailed world to life including increased draw distances; higher quality global illumination and ambient occlusion for improved day and night lighting; improved reflections and deeper, higher resolution shadows at all distances; tessellated tree textures and improved grass and fur textures for added realism in every plant and animal.</p>\r\n'),
(5, 'The Hunter: Call of the Wild', 'Experience the thrill of the hunt in a visually breathtaking, technically groundbreaking, vast open world. Immerse yourself in the atmospheric single player campaign, or share the ultimate hunting experience with friends', 15.99, 10, '../images/theHunterCallOfTheWildPoster.jpg', '<p class=‘AboutThisGameText’>\r\ntheHunter: Call of the Wild offers the most immersive hunting experience ever created. Step into a beautiful open world teeming with life, from majestic deer and awe-inspiring bison, down to the countless birds, critters and insects of the wilderness.</p>\r\n<p class=‘AboutThisGameText’>\r\n Every inch of the 50-square mile world is crafted using Apex, award-winning technology crafted by Avalanche Studios during a decade of developing explosive action games. In addition to its rich single player experience, theHunter: Call of the Wild offers unique multiplayer options – cooperative and competitive – for up to 8 players. Share the ultimate hunting experience, and earn those bragging rights! </p>\r\n\r\n<p class=‘AboutThisGameText’>\r\ntheHunter: Call of the Wild offers the most immersive hunting experience ever created. Step into a beautiful open world teeming with life, from majestic deer and awe-inspiring bison down to the countless birds, critters and insects of the wilderness.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nExperience complex animal behavior, dynamic weather events, full day and night cycles, simulated ballistics, highly realistic acoustics, scents carried by a sophisticated wind system, and much more. All systems work together to increase immersion and bring out the hunter in you.</p>\r\n'),
(6, 'Hearts of Iron IV', 'Victory is at your fingertips! Your ability to lead your nation is your supreme weapon, the strategy game Hearts of Iron IV lets you take command of any nation in World War II; the most engaging conflict in world history.', 29.99, 30, '../images/heartsOfIronIVPoster.jpeg', '<p class=‘AboutThisGameText’>\r\nVictory is at your fingertips! Your ability to lead your nation is your supreme weapon, the strategy game Hearts of Iron IV lets you take command of any nation in World War II; the most engaging conflict in world history.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nFrom the heart of the battlefield to the command center, you will guide your nation to glory and wage war, negotiate or invade. You hold the power to tip the very balance of WWII. It is time to show your ability as the greatest military leader in the world. Will you relive or change history? Will you change the fate of the world by achieving victory at all costs?</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nTotal strategic war: War is not only won on land, sea and in the air. It’s also achieved in the hearts and minds of men and women.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nAuthentic real-time war simulation: Let the greatest commanders of WW2 fight your war with the tools of the time; tanks, planes, ships, guns and newly discovered weapons of mass destruction.</p>\r\n'),
(7, 'Divinity: Original Sin 2 – Definitive Edition', 'The eagerly anticipated sequel to the award-winning RPG. Gather your party. Master deep, tactical combat. Join up to 3 other players - but know that only one of you will have the chance to become a God.', 22.49, 50, '../images/divinityOriginalSin2Poster.jpg', '<p class=‘AboutThisGameText’>\r\nThe Divine is dead. The Void approaches. And the powers lying dormant within you are soon to awaken. The battle for Divinity has begun. Choose wisely and trust sparingly; darkness lurks within every heart.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nWho will you be?</p>\r\n<p class=‘AboutThisGameText’>\r\n\r\nA flesh-eating Elf, an Imperial Lizard or an Undead, risen from the grave? Discover how the world reacts differently to who - or what - you are.\r\n</p>\r\n<p class=‘AboutThisGameText’>\r\n\r\nIt’s time for a new Divinity!\r\nGather your party and develop relationships with your companions. Blast your opponents in deep, tactical, turn-based combat. Use the environment as a weapon, use height to your advantage, and manipulate the elements themselves to seal your victory.\r\n</p>\r\n<p class=‘AboutThisGameText’>\r\n\r\nAscend as the god that Rivellon so desperately needs.  \r\nExplore the vast and layered world of Rivellon alone or in a party of up to 4 players in drop-in/drop-out cooperative play. Go anywhere, unleash your imagination, and explore endless ways to interact with the world. Beyond Rivellon, there’s more to explore in the brand-new PvP and Game Master modes.</p>\r\n'),
(8, 'RimWorld – Royalty ', 'A sci-fi colony sim driven by an intelligent AI storyteller. Generates stories by simulating psychology, ecology, gunplay, melee combat, climate, biomes, diplomacy, interpersonal relationships, art, medicine, trade, and more.', 29.99, 0, '../images/rimWorldRoyaltyPoster.png', '<p class=‘AboutThisGameText’>\r\nRimWorld is a sci-fi colony sim driven by an intelligent AI storyteller. Inspired by Dwarf Fortress, Firefly, and Dune.</p>\r\n<p class=‘AboutThisGameText’>\r\n\r\nRimWorld is a story generator. It’s designed to co-author tragic, twisted, and triumphant stories about imprisoned pirates, desperate colonists, starvation and survival. It works by controlling the ‘random’ events that the world throws at you.\r\n</p><p class=‘AboutThisGameText’>\r\n Every thunderstorm, pirate raid, and traveling salesman is a card dealt into your story by the AI Storyteller. There are several storytellers to choose from. Randy Random does crazy stuff, Cassandra Classic goes for rising tension, and Phoebe Chillax likes to relax.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nYour colonists are not professional settlers – they’re crash-landed survivors from a passenger liner destroyed in orbit. You can end up with a nobleman, an accountant, and a housewife. You’ll acquire more colonists by capturing them in combat and turning them to your side, buying them from slave traders, or taking in refugees. So your colony will always be a motley crew.</p>\r\n'),
(9, 'Hades', 'Defy the god of the dead as you hack and slash out of the Underworld in this rogue-like dungeon crawler from the creators of Bastion, Transistor, and Pyre.', 20.99, 10, '../images/hadesPoster.jpg', '<p class=‘AboutThisGameText’>\r\nHades is a god-like rogue-like dungeon crawler that combines the best aspects of Supergiant\'s critically acclaimed titles, including the fast-paced action of Bastion, the rich atmosphere and depth of Transistor, and the character-driven storytelling of Pyre.</p>\r\n<p class=‘AboutThisGameText’>\r\nBATTLE OUT OF HELL</p>\r\n<p class=‘AboutThisGameText’>\r\n\r\nAs the immortal Prince of the Underworld, you\'ll wield the powers and mythic weapons of Olympus to break free from the clutches of the god of the dead himself, while growing stronger and unraveling more of the story with each unique escape attempt.</p>\r\n<p class=‘AboutThisGameText’>\r\nUNLEASH THE FURY OF OLYMPUS</p>\r\n<p class=‘AboutThisGameText’>\r\n\r\nThe Olympians have your back! Meet Zeus, Athena, Poseidon, and many more, and choose from their dozens of powerful Boons that enhance your abilities. There are thousands of viable character builds to discover as you go.</p>\r\n'),
(10, 'Monster Hunter: World', 'Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.', 19.79, 35, '../images/monsterHunterWorldPoster.jpg', '<p class=‘AboutThisGameText’>\r\nWelcome to a new world! Take on the role of a hunter and slay ferocious monsters in a living, breathing ecosystem where you can use the landscape and its diverse inhabitants to get the upper hand. Hunt alone or in co-op with up to three other players, and use materials collected from fallen foes to craft new gear and take on even bigger, badder beasts! </p>\r\n<p class=‘AboutThisGameText’>\r\n\r\nINTRODUCTION</p>\r\n<p class=‘AboutThisGameText’>\r\nOverview\r\n</p><p class=‘AboutThisGameText’>\r\nBattle gigantic monsters in epic locales.<p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nAs a hunter, you\'ll take on quests to hunt monsters in a variety of habitats.\r\nTake down these monsters and receive materials that you can use to create stronger weapons and armor in order to hunt even more dangerous monsters.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nIn Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.</p>\r\n'),
(11, 'Farming Simulator 19', 'The best-selling franchise takes a giant leap forward with a complete overhaul of the graphics engine, offering the most striking and immersive visuals and effects, along with the deepest and most complete farming experience ever.', 22.99, 15, '../images/farmingSimPoster.jpg', '<p class=‘AboutThisGameText’>\r\nThe best-selling franchise returns this year with a complete overhaul of the graphics engine, offering the most striking and immersive visuals and effects, along with the deepest and most complete farming experience ever.</p>\r\n<p class=‘AboutThisGameText’>\r\nFarming Simulator 19 takes the biggest step forward yet with the franchise’s most extensive vehicle roster ever!</p><p class=‘AboutThisGameText’>\r\n You’ll take control of vehicles and machines faithfully recreated from all the leading brands in the industry, including for the first time John Deere, the largest agriculture machinery company in the world, Case IH, New Holland, Challenger, Fendt, Massey Ferguson, Valtra, Krone, Deutz-Fahr and many more.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nFarming Simulator 19 will feature new American and European environments in which to develop and expand your farm and will introduce many exciting new farming activities, including new machinery and crops with cotton and oat!</p><p class=‘AboutThisGameText’>\r\n Tend to your livestock of pigs, cows, sheep, and chickens - or ride your horses for the first time, letting you explore in a brand-new way the vast land around your farm.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nFarming Simulator 19 is the richest and most complete farming experience ever made!</p>\r\n'),
(12, 'Football Manager 2020', 'Run your football club, your way. Every decision counts in Football Manager 2020 with new features and polished game mechanics rewarding planning and progression like never before, empowering managers to develop and refine both your club’s and your own unique identity.', 54.99, 5, '../images/footballManager2020Poster.png', '<p class=‘AboutThisGameText’>\r\nRun your football club, your way. Every decision counts in Football Manager 2020 with new features and polished game mechanics rewarding planning and progression like never before, empowering managers to develop and refine both your club’s and your own unique identity.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nWalk down the tunnel to a living, breathing football world with you at the very heart of it. Around here, your opinion matters! </p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nThis is a world that rewards planning and knowledge but, unlike other games, there’s no pre-defined ending or script to follow – just endless possibilities and opportunities. Every club has a story to tell and it’s down to you to create it.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nThey say football is a game of dreams. Well, managers are a special breed of dreamers.</p>\r\n\r\n<p class=‘AboutThisGameText’>\r\nThey don’t see problems, only opportunities: the chance to prove themselves against the best in the world, to develop and instil a new footballing philosophy, to nurture talent through the ranks, to lift the club to greater heights and end the wait for silverware.</p>\r\n<p class=‘AboutThisGameText’>\r\n\r\nHow you get to the top is up to you… you’ll own your decisions, and the consequences they bring…</p>\r\n'),
(13, 'The Witcher 3: Wild Hunt', 'As war rages on throughout the Northern Realms, you take on the greatest contract of your life — tracking down the Child of Prophecy, a living weapon that can alter the shape of the world.', 8.99, 70, '../images/theWitcher3Poster.jpg', 'The Witcher: Wild Hunt is a story-driven open world RPG set in a visually stunning fantasy universe full of meaningful choices and impactful consequences. In The Witcher, you play as professional monster hunter Geralt of Rivia tasked with finding a child of prophecy in a vast open world rich with merchant cities, pirate islands, dangerous mountain passes, and forgotten caverns to explore.PLAY AS A HIGHLY TRAINED MONSTER SLAYER FOR HIRETrained from early childhood and mutated to gain superhuman skills, strength and reflexes, witchers are a counterbalance to the monster-infested world in which they live.Gruesomely destroy foes as a professional monster hunter armed with a range of upgradeable weapons, mutating potions and combat magic.Hunt down a wide range of exotic monsters — from savage beasts prowling the mountain passes, to cunning supernatural predators lurking in the shadows of densely populated towns.'),
(14, 'Cooking Simulator', 'Play one of the best cooking games! Take control of a highly polished, realistic kitchen equipped with all kinds of utensils and stands. Unlock and master over 80 recipes or use dozens of lifelike ingredients to cook everything you like. A simulator spiced up with a dash of real-life physics!', 16.79, 8, '../images/cookingSimPoster.jpg', '<p class=‘AboutThisGameText’>\r\nBecome the ultimate chef! Take control of a highly polished, realistic kitchen equipped with all kinds of utensils and stands. Unlock and master over 80 recipes or use dozens of lifelike ingredients to cook everything you like. A simulator spiced up with a dash of real-life physics!</p>\r\n<p class=‘AboutThisGameText’>\r\nYour kitchen’s got all the gear a chef might need. Griddles, cookers, gas stands, ovens and tons of utensils like pots, pans, plates, knives, spatulas and blenders!</p><p class=‘AboutThisGameText’>\r\n On top of that there are over 140 ingredients available in the pantry: meat and fish, fruit and veggies, dairy products and various liquids. There’s also a full set of spices and herbs for adding that extra flavour!</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `positivity` varchar(30) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `posted` date NOT NULL,
  `gameId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `positivity`, `userName`, `review`, `posted`, `gameId`) VALUES
(1, 'Overwhelmingly Positive', 'Zoner', '<p class=’ReviewText’>Pros: Extremely good graphics, Very intelligent AI, Very realistic.Cons: Too much dlcs with way too high prices</p>', '2020-02-24', 1),
(2, 'Mainly Positive', 'kraghak', '<p class=’ReviewText’>Let me start by saying the negative reviews are valid, Rockstar bungled the release of this game. I had to struggle with my settings to get the game working and its understandable that some may not want to go through this hassle when I game that matches your specs should just install and work.</p><p class=’ReviewText’>\r\n\r\nThat being said, once I got the game working it was a masterpiece. This game has a story that choked me up at certain points but it still delivers on its promise horse ridin, gun shootin, cowboy action. I would put this up with the original Bioshock as games that could be literature.</p>\r\n', '2020-01-31', 4),
(3, 'Mainly Positive', 'GameBoyDelta', '<p class=’ReviewText’>Rockstar Games is like a restaurant. Their service is very slow but their food is worth each and every penny and the wait.</p>\r\n<p class=’ReviewText’>\r\n\r\nBought this on Lunar sale. I wasn\'t sure whether to buy this after seeing it has mixed reviews.\r\nThe first time when I ran it, it had an infinite loading screen. Second time, it loaded flawlessly in 30 seconds and the game\'s running at 30-45 FPS on my GTX 1050ti. Never crashed, which made me really happy.</p>\r\n', '2020-01-28', 4),
(4, 'Mainly Negitive', 'Cotamatic', '<p class=’ReviewText’>I don\'t think, in my years of gaming, other than maybe fallout new Vegas or oblivion, I have ever had such horrendous issues with getting a game optimized and running correctly.</p><p class=’ReviewText’> It will run flawlessly one day, then the next a blurry laggy clunky mess. As a game it is fantastic, as a piece of software it is trash.</p>', '2020-01-30', 4),
(5, 'Mainly Positive', 'SilverMaster', '<p class=’ReviewText’>So currently in Germany, it is winter, and actually… it quite heats up my room pretty good.</p><p class=’ReviewText’> In only one hour my room temperature went from 19 degrees Celsius to 24 degrees Celsius. I recommend this game if you don’t have a heater at home and wanna heat up your room.</p>', '2019-12-11', 4),
(6, 'Mainly Negitive', 'Andorax', '<p class=’ReviewText’>Due to a corrputed save i have lost all progress in the game. This problem has been around for some time but the developers has not done anything to prevent it</p>', '2020-02-17', 5),
(7, 'Mainly Negitive', 'CasualSocks', '<p class=’ReviewText’>\"Lost connection to the Steam server, this game will now quit.\" Not acceptable for a single player game.</p>', '2020-02-23', 5),
(8, 'Mainly Positive', 'BioTOXIN88', '<p class=’ReviewText’>Overall this game is really fun to play, has beautiful maps and offers a lot of content. The game takes on a realistic approach to real life hunting, however, falls victim to a few bugs here and there which are usually pretty funny.</p><p class=’ReviewText’>\r\n\r\nThanks to the developers for continuing to support this game. Also the developers are active with the community and the game has received constant updates ever since release.</p><p class=’ReviewText’> This game has come a long way and is probably the best hunting game the gaming industry has ever had.</p>\r\n', '2020-02-19', 5),
(10, 'Overwhelmingly Positive', 'CanardViolet', '<p class=’ReviewText’>\r\nI\'ve tried lots of games but this is the sh*t that you want to buy. Trust me. You wont regret it... Plus, If you\'re not a WW2 fan already, you will be.</p><p class=’ReviewText’>\r\n\r\nHEARTS OF IRON?</p><p class=’ReviewText’>\r\n\r\nNah, more like: \r\nHEARTS OF GOLD!</p>\r\n', '2020-02-01', 6),
(11, 'Mainly Positive', 'CovetousSix', '<p class=’ReviewText’>\r\nI would recommed this game to people who likes the \"learning experience\". And with the content the game has in dlcs and workshop addons there is plenty of stuff to do.</p><p class=’ReviewText’>\r\n With there being a whole world to play as. You can do a lot of fun stuff. such as unifying the Middle East/South America or having the perfect germany/japan game. </p><p class=’ReviewText’>\r\nor defending agaist Germany as Soviet union, Poland or France. you could even release more contries to play as. or launch a successful dday as UK/US. And sometimes there are stalemates so you need to be strategic insted of just throwing your men at the enemy.</p><p class=’ReviewText’>\r\n Such as Distract with a paradrop or a naval invasion. and some micro management. And taking large amount of casualties will hurt you in the long run If you are a minor country. Unless you are a major country like US, USSR, China or germany these countries can take large amount of casualties without getting overwhelming debuffs with conscription. After 1000 hours on the game i\'m gonna take a break. Thnxcya.</p>\r\n', '2020-02-15', 6),
(12, 'Mainly Positive', 'Gunnzig', '<p class=’ReviewText’>\r\nThe “Germany would have won WW2 if only they…” Game</p>\r\n', '2020-02-26', 6),
(13, 'Overwhelmingly Positive', 'R_', '<p class=’ReviewText’>\r\nTrue RPG where you can actually role-play as many things</p><p class=’ReviewText’>\r\n\r\nPro</p><p class=’ReviewText’>\r\n\r\n- Interesting Story and World Lore\r\n- Interesting Companion/Origin character\r\n- Deep Customization system from class, skill, talent, race, etc.\r\n- Offer Freedom to Gameplay mechanic where you can exploit it in anyway you see fit\r\n- 5 Different Difficulty, from Story mode until Hard mode with Perma-death\r\n- Smart AI that offer challenging Gameplay\r\n- Tons of decision can affect the game world from early until the end\r\n- NPC react depends on lots of thing and make the world feel believable\r\n- Great Soundtrack and Voice acting\r\n- Rewarding Exploration\r\n- High Replay Value\r\n- Character Design\r\n- Beautiful Graphics\r\n- Steam Workshop</p>\r\n<p class=’ReviewText’>\r\nCons</p><p class=’ReviewText’>\r\n\r\n- Confusing Inventory & Journal System</p>\r\n<p class=’ReviewText’>\r\nBest Role Playing Games to date, Larian outdid themselves in this Games\r\nPersonal 2017 Game of the Year</p><p class=’ReviewText’>\r\n\r\nScore 95</p>\r\n', '2020-02-05', 7),
(14, 'Mainly Positive', 'PeebChochman', '<p class=’ReviewText’>\r\nOne of the best, deepest RPGs I\'ve ever played. Can\'t believe the amount of attention that went into the writing, voice acting and player choice interactions.</p>\r\n', '2020-02-15', 7),
(15, 'Mainly Negitive', 'Lolozaur', '<p class=’ReviewText’>\r\nGame is good overall, but at launch it’s a bugfest, I cant even finish it because of a gamebreaker near the end. Wait a few months or EE.</p>\r\n', '2017-09-30', 7),
(16, 'Overwhelmingly Positive', 'Chronos', '<p class=’ReviewText’>\r\nI mean at this point the guy could release a Trojan Virus DLC and I\'d probably still get it.</p>\r\n', '2020-02-25', 8),
(17, 'Mainly Positive', 'Captain Kaivarian', '<p class=’ReviewText’>\r\nThis DLC is a bit on the pricey side. However, if you do a few playthroughs, you can get 100+ hours worth of entertainment, so you are still getting value.</p><p class=’ReviewText’>\r\n\r\n\r\n\'Royalty\' adds a high-tech spacefaring imperial faction, plus another victory condition (befriending the empire). New allies and enemies have been added, and the imperial quests are unique and never seen before in vanilla.\r\n</p><p class=’ReviewText’>\r\n\r\nNewbies don\'t need this DLC. The vanilla game is very sufficient. \'Royalty\' is more suited for veteran players looking for a change or a new goal.</p>\r\n', '2020-02-25', 8),
(18, 'Mainly Negitive', 'Boartato', '<p class=’ReviewText’>\r\nI love rimworld, I\'m happy to buy more or less any reasonable DLC for such a great game, but I\'m putting this as negative because at this point in time I\'m not happy with the DLC and I\'d like people to see what the honest criticisms are. The free update content from 1.1 is excellent however, and I appreciate the work put into both immensely.</p><p class=’ReviewText’>\r\n\r\n\r\nFirst problem is what I mentally refer to as the modder\'s complex. Rimworld has such good modding support that it\'s genuinely difficult to work on an idea that modders haven\'t already done. </p><p class=’ReviewText’>\r\nWhether or not they do it badly, I can see why a dev wouldn\'t want to put out \"copycat\" content.\r\n</p><p class=’ReviewText’>\r\n\r\nThis leads to the second problem: The mod doesn\'t quite... fit the lore. An interstellar empire zipping to and from the surface in shuttles shakes the lore foundation behind why your people are stuck on the planet. Why do you need to go to incredible lengths to build a ship to escape when minor nobles are zipping around constantly. </p>\r\n', '2020-02-25', 8),
(19, 'Mainly Positive', 'uhruhri', '<p class=’ReviewText’>\r\nBasically another wizard of legend for me</p>\r\n<p class=’ReviewText’>\r\n\r\nFast paced combat, challenging, superb action, alot of replayability, alot of things to accomplish and achieve</p><p class=’ReviewText’>\r\n\r\nCons : No achievement yet :D</p>\r\n', '2020-01-28', 9),
(20, 'Mainly Positive', 'ZatOne', '<p class=’ReviewText’>\r\nThis game is just freakin\' awesome. Tight controls, sensible weapons, kick-@$$ soundtrack, and tons of variety for each playthrough has me already sold for the first 4 hours I\'ve played this game.</p><p class=’ReviewText’>\r\n Memories of Bastion and Transistor keep coming back every minute. My rating won\'t change no matter what happens next, cuz I already got my money\'s worth. ^_^ Kudos, Supergiant. This is yet another masterpiece.</p>\r\n', '2020-02-02', 9),
(21, 'Overwhelmingly Positive', 'pyrhic', '<p class=’ReviewText’>\r\nReally digging this game. I love the voice acting. I love the action. I love the mythology. I love the weapons, skills and trees. ♥♥♥♥, i just love petting Cerberus - can we have more Cerberus petting options?</p>\r\n', '2020-02-01', 9),
(22, 'Overwhelmingly Positive', 'Crowzer', '<p class=’ReviewText’>\r\nIt\'s been ages that I saw MONSTER HUNTER WORLD always on the top seller games on Steam; since its release actually.</p><p class=’ReviewText’>\r\n\r\nA couple of days after the release of Iceborn, I saw a small discount promotion about it on a website. So I decided to try.</p><p class=’ReviewText’>\r\n\r\nWell I bought the game the 19th january, and today is the 29th janurary. My playtime is around 120 hours so far.</p><p class=’ReviewText’>\r\n\r\nI will let you to do the math.... Yeah, almost 12 hours per day of playing. It\'s extremely rare for me to play like that.</p><p class=’ReviewText’>\r\n\r\nThis game is so good and addicting !</p>\r\n', '2020-02-12', 10),
(23, 'Mainly Positive', 'JuneJusagi', '<p class=’ReviewText’>Great game that brings another great experience with the monster series.\r\nThe only downside with this game in my opinion is the story cut scenes, I understand lots of work was put into this and the developers want you to see it but, what if you lost your save file and have to do it all over?</p><p class=’ReviewText’>\r\nRegardless, still a great game and i would recommend it to anyone.</p>\r\n', '2020-02-26', 10),
(24, 'Mainly Negitive', 'Timbloxrox', '<p class=’ReviewText’>\r\nI really do love the game but now i cant play more than a few hunts without the game stuttering really badly making it unplayable denuvo ruins this game even with a high end pc it lags</p>\r\n', '2020-02-09', 10),
(25, 'Mainly Positive', 'MonsterGinger', '<p class=’ReviewText’>\r\nVery calming game to sit down and burn a few hours.</p>\r\n', '2020-02-14', 11),
(26, 'Mainly Positive', '382', '<p class=’ReviewText’>\r\nGreat Game!</p>\r\n', '2020-02-22', 11),
(27, 'Mainly Positive', 'petuniarubarb', '<p class=’ReviewText’>\r\ni really like this game cause you can really get a feel for how farming works.</p>\r\n', '2020-02-27', 11),
(28, 'Overwhelmingly Positive', 'Mtropel', '<p class=’ReviewText’>Other games: 20 min. intro and tutorial.\r\n</p>\r\n<p class=’ReviewText’>Doom: Here is a gun. Shoot everything.</p>', '2020-03-19', 2),
(29, 'Mainly Positive', 'InvertMouse', '<p class=’ReviewText’>Remember when Doom 2016 released the multiplayer beta test first, and we rightfully worried the game would be a flop? Thankfully, the campaign instead blew us away.</p>', '2020-03-18', 2),
(30, 'Mainly Positive', 'addo', '<p class=’ReviewText’>I think there\'s a lot more to come from you and I completely believe you\'ve got what it takes.</p>\r\n', '2020-03-09', 12),
(31, 'Mainly Negitive', 'bakir', '<p class=’ReviewText’>Having played every FM since 2013, this is the least enjoyable FM ever. Goals are scored only in these situations:</p><p class=’ReviewText’>\r\n- set pieces (especially indirect FK)\r\n- long shots ( overpowered definitely)\r\n- volley and half-volley shots are almost unstoppable for opposition GKs\r\n- crossing</p>', '2020-03-15', 12),
(32, 'Overwhelmingly Positive', 'evilApple', '<p class=’ReviewText’>One of the rare games I would physically force somebody to play if they outright refused to.</p>', '2020-03-02', 13),
(33, 'Mainly Positive', 'Yaerverth', '<p class=’ReviewText’>The Witcher 3: Wild Hunt is regarded as the best game ever created by many people but is it true? Mostly yes but giving a game the title \"best\" shouldn\'t be that easy.</p><p class=’ReviewText’> If you\'re going to call this \"the best game\" then I assume, as a customer, you know what to expect from a game and the genre it was created for. The Witcher 3 is an ARPG and it nearly meets most of the things you\'d expect from a perfect ARPG game.</p>', '2020-03-14', 13),
(34, 'Overwhelmingly Positive', 'Rogue', '<p class=’ReviewText’>the open world is one of the richest I have ever seen it still amazes me how much detail is put it because of a smart decision of splitting it into 6 parts,which allowed them to focus on detail in each area for example.</p><p class=’ReviewText’>You can instantly tell apart which is novigrad or skellige they do not blend together like cities in assassins origins for example.</p>', '2020-03-14', 13),
(35, 'Overwhelmingly Positive', 'Annabear', '<p class=’ReviewText’>Step 1: Throw Fish on floor</p><p class=’ReviewText’>\r\nStep 2: Crouch down to season tf out of it</p><p class=’ReviewText’>\r\nStep 3: Throw it in the microwave</p><p class=’ReviewText’>\r\nStep 4: Boil a Lemon</p><p class=’ReviewText’>\r\nStep 5: Put entire boiled Lemon and microwaved whole Fish in a soup bowl with a bit of Milk</p><p class=’ReviewText’>\r\nStep 6: Season with 63 grams of Cayenne Pepper</p><p class=’ReviewText’>\r\nStep 7: Serve to customer</p><p class=’ReviewText’>\r\n\r\n4/5 taste customer is satisfied.</p>', '2020-03-01', 14),
(36, 'Mainly Positive', 'Darodo', '<p class=’ReviewText’>Tumbs up, nice game. The cooking simulation is awsome. I love it.</p>\r\n<p class=’ReviewText’>\r\n\r\nBut...</p><p class=’ReviewText’>\r\n\r\nThe management part is too basic. It\'s a very nice game and I\'ll play again.</p><p class=’ReviewText’> But if they was able to do more in the management like, starting with only basic appliance (only the oven?), dirty kitchen, low fund, few recipes with low profit</p><p class=’ReviewText’>. That you need to work hard to buy recipe, more appliance, etc... To finaly became a 5 stars restaurants... That game would be addictive! :)</p>', '2020-03-14', 14);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `description`) VALUES
(1, 'admin', 'System administrator'),
(2, 'manager', 'GameStore manager'),
(3, 'user', 'GameStore user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `country` varchar(30) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `birthDay` int(11) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` year(4) NOT NULL,
  `email` varchar(70) NOT NULL,
  `role_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `country`, `fullName`, `birthDay`, `month`, `year`, `email`, `role_id`) VALUES
(3, 'admin', 'admin', 'Ireland', 'John Doe', 23, 'February', 1980, 'JohnDoe@gmail.com', 1),
(4, 'manager', 'manager', 'England', 'Fred Mercuary', 10, 'April', 1999, 'Fred@gmail.com', 2),
(5, 'joe', 'joe', 'Wales', 'Joe Joe', 2, 'November', 1994, 'Joejoe@gmail.com', 3),
(6, 'Joshua', '$2y$10$1We2XkjrDFn9EGlahNpWo.XV7TU91qZC73LYxr5Wl/dWsPHVPzwEa', 'Ireland', 'Joshua Seymour', 19, 'January', 1999, 'joshua@gmail.com', 3),
(9, 'Joshua01', '$2y$10$RGBs67ew4TI3FFXpLiFtC.ULklTUNVdS5gQ3bGy9Nbe1YaM7bejJC', 'England', 'Joshua', 13, 'March', 2000, 'joshua@gmail.com', 3),
(10, 'Joshua001', '$2y$10$7sTDxGRh5iOC.EaNLQkaKe4X//VvTQKYnJQOhbiCogardIxdz3kpq', 'England', 'Joshua Seymour', 10, 'July', 2011, 'joshua@gmail.com', 3),
(11, 'Joshua02', '$2y$10$UKm0O7FhxgzmkHBNAz6TPOTyZDSqzzJdnkGons4/dN3vLlNdqW6FS', 'England', 'Joshua Seymour', 10, 'August', 2000, 'joshua@gmail.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_table_role_id_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
