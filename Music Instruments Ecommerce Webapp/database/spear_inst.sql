-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 07:36 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spear_inst`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_location`) VALUES
(1, 'spear njoroge', 'spear@gmail.com', '12345', 'spear.jpg', '0705599224', 'limuru');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'keyboards', 'Yamahas korgs Rollands we got it all not forgetting midi controllers from re known manufactures'),
(2, 'virtual studio tech', 'checkout some of the best virtual studio instruments in the market at affordable prices.'),
(3, 'studio equipment', 'hot sales on studio monitors,video and audio recorders and many more...'),
(4, 'orchestral & drums', ' 								high quality sounding instruments such as strings and brass not forgetting our high quality percussion instruments and drumsets 							'),
(5, 'others', 'we also sell music support tools such as music stands, microphone, music books etc');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_loc` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `type` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `type`, `order_date`, `order_status`) VALUES
(1, 6, 7531, 1102348694, 1, 'Brand New', '2019-04-14 02:50:35', 'Complete'),
(2, 6, 700, 1102348694, 1, 'Brand New', '2019-04-14 02:54:46', 'Complete'),
(3, 6, 1786, 347810320, 1, 'Brand New', '2019-04-14 02:58:45', 'Complete'),
(4, 7, 7531, 1209342305, 1, 'Refubished', '2019-04-15 01:58:30', 'pending'),
(5, 6, 10000, 452799818, 2, 'Brand New', '2019-05-02 06:48:47', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(4, 452799818, 10000, 'Equity', 666, 666, '5/2/2019'),
(5, 953894266, 15062, 'Equity', 9494, 9494, '5/2/2019'),
(6, 397529596, 34154, 'Mpesa', 77, 77, '5/2/2019'),
(7, 777615478, 1400, 'Mpesa', 9988, 9988, '5/3/2019');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `type` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `type`, `order_status`) VALUES
(1, 6, 1102348694, '21', 1, 'Brand New', 'Complete'),
(2, 6, 1102348694, '20', 1, 'Brand New', 'Complete'),
(3, 6, 347810320, '19', 1, 'Brand New', 'Complete'),
(4, 7, 1209342305, '21', 1, 'Refubished', 'pending'),
(5, 6, 452799818, '18', 2, 'Brand New', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_price`, `product_desc`, `product_keywords`) VALUES
(1, 21, 1, '2019-04-23 07:04:12', 'NOVATION LAUNCH-KEY MIDI keyboard', '1.png', '1a.png', 6500, 'Available in black and gray.This midi keyboard fuses the power of software instruments with the live playability of keyboard workstations allowing you to easily create tracks like never before.To add to this the different knobs in this amazing midi convert computer based plugins into an entirely hands on playing experience.								', 'novation'),
(2, 21, 1, '2019-04-23 09:07:28', 'IMPACT LX24+ nektar MIDI keyboard', 'IMPACT LX24+ nektar MIDI keyboard.png', 'IMPACT LX24+ nektar MIDI keyboard2.png', 7500, '									Available in black and gray. This unique midi provides flawless real time control and feedback to all virtual instruments eliminating the  dividing line between software - hardware instruments latency.To add to this the it  instantly adapts itself to the selected pluginâ€™s controls, delivering immediate 1:1 access to the instrument and various editable functions. this makes it one of the best selling keyboards in our website.								', 'lx24 nektar impact'),
(3, 21, 1, '2019-04-23 07:04:04', 'ALESIS -vxl 34 MIDI keyboard', '2.png', '2.png', 25000, 'This amazing keyboard supports a new feature called Advance Keyboardâ€™s custom-designed Virtual Instrument Player (VIP) software application where your entire VSTi library is controlled by one application. VIP operates as a plugin inside any major digital audio workstation (DAW) or as a stand-alone application on both Mac and Windows operating systems which integrates perfectly with this keyboard allowing you to take your creativity to a whole new leval', 'alesis vlx34'),
(4, 21, 1, '2019-04-23 09:05:21', 'AKAI Professional Advance 988 MIDI keyboard', 'AKAI Professional Advance 988 MIDI keyboard_2.png', 'AKAI Professional Advance 988 MIDI keyboard.png', 34000, '									This is sophisticated yet easy to Use keyboard.Dedicated physical controls are thoughtfully included, with our RGB backlit, velocity- and pressure-sensitive pads on each keyboard surface. Rubberized pitch and modulation wheels provide simple, direct note manipulation with musically natural action. Easily-gripped, continuously-variable endless knobs let you make adjustments with granular or dramatic effect.This is one of the best keyboards for professionals.								', 'akai advance988'),
(5, 21, 1, '2019-04-23 07:05:54', 'AKAI vpx-25 knobs & pad MIDI keyboard', 'midi.png', 'midi.png', 7500, 'This is a small affordabele yet very functional keyboard. Youâ€™ll also love VIPâ€™s facilities that come with it after purchase for hyper-fast instrument and patch browsing, key zone splitting, layering of up to 8 instruments per VIP instance, expansive custom mapping capabilities, and support for any VSTi plugin. You can run as many instances of the Virtual Instrument Player as your computer allows. VIP runs as a VSTi, AU, or AAX plugin, allowing you access to VSTiâ€™s in virtually any DAW, such as Pro Tools, Logic Pro X and Ableton Live.', 'vpx akai 25'),
(6, 21, 1, '2019-04-23 07:03:41', 'IMPACT lx49+ nektar MIDI keyboard', '3.png', '3.png', 35999, ' this 64key Keyboard comes with a free 16GB download of over 10,000 sounds from industry-leading developers at AIR Music Technology, SONiVOX, and TOOLROOM RECORDS as bonus after purchase. This comprehensive collection of nine plugins provides you with an instant palette of contemporary, sought-after sounds for both live performance and studio production that smoothly integrate with this keyboard.', 'impact lx49 nektar'),
(7, 21, 1, '2019-04-23 07:02:17', 'M-AUDIO code61 MIDI keyboard', '2a.png', '2a.png', 37200, 'This unbelievable 64 key keyboard allows mastering right on spot.Some of its major highlights include support of  advanced virtual instrument performance software,dedicated interface buttons,provides 1:1, real-time feedback of plugin parameters.To add to this it comes with a free Virtual Instrument Player software for unprecedented virtual instrument preset management, control mapping and multi patch creation for our esteemed customers.', 'm-audio code61_keyboard'),
(8, 21, 1, '2019-04-23 07:14:30', 'ROLAND juno-d MIDI keyboard', '8.png', '8.png', 38999, 'Made from one of the most reputable industries in the market today.it comes equiped with a 49 premium, semi-weighted velocity-sensitive keybed with aftertouch,5 large, endless and continuously variable control knobs,8 mastering leval knobs,multiple plug and play ports includinga 3 USB and 5-pin MIDI Input/Output for use with any MIDI capable software or hardware for intergration with diferent devices and not forgeting Rubberized Pitch and Modulation wheels.', 'roland juno-d'),
(10, 22, 2, '2019-04-23 07:57:33', 'TOTAL PRODUCER 3 producer bundle kit', '11.png', '11.png', 1100, 'contains Royalty Free Loops Vol.7,\r\nModern Melodies,\r\nTrap Star Loops ,\r\nSilver Keys,\r\nReturn Of The Crate Diggers,\r\nSamples Of Mass Destruction,\r\nDope Samples Vol.2,\r\nKiller Samples Vol.2,\r\nDrum Dealer: Rainbow Edition,\r\nDrum Dealer: Crystal Edition,\r\n808 Godz Volume One,\r\nDrum Goonies: Hat Loop Edition,\r\nDrum Goonies: Snare Loop Edition,\r\nUrban Thunder and\r\nGlobal Pop ', 'bundle producerbundle totalproducer3'),
(13, 22, 2, '2019-04-23 00:09:11', 'BAY AREA MEGAPACK drum collection', '10.png', '10_2.png', 850, 'contains juicy oldschool drum kits such as Non Stop Pop,\r\nLove & Hip Hop,\r\nSet If Off ,\r\nTRIGGERMAN,\r\nFuture House,\r\nPrimal Vol.1,\r\nHUSTLE,\r\nPianoman,\r\nGlobal Reggaeton and\r\nSuper crank.', 'bay bayarea '),
(15, 22, 2, '2019-04-23 06:27:28', 'DIVA REVAMP & WOBBLE kit combo', '4.png', 'i.png', 700, 'this is a nice blend of 2 powerfull rnb kits providing a wide range of sift acustic sounds for your track currently on offer.the offer extend only till next month.', 'diva wobble divaandwobble combo'),
(16, 22, 2, '2019-04-23 06:26:58', 'WONDERFUL TIMES & bracks kit', 'h.png', '6.png', 1100, '									this kit will knock all trap producers off their feat.it contains 27 Kicks,\r\n26 Snares,\r\n3 Claps,\r\n6 Snaps,\r\n25 Loops & Things,\r\n3 Fills,\r\n3 Vox Hits,\r\n18 Stabs,\r\n44.1 KHz 24-Bit WAV Format and\r\n83.5 MB Download File Size (Zipped)								', 'wonderfull time bracks '),
(18, 22, 2, '2019-04-23 06:28:30', 'BOY1DA OFFiCIAL DRUMS + goldmine kits', 'boyid.png', 'goldie.png', 1500, 'The variety is REAL. Complete with 26 Snaretastic Snares, 24 Flippin Loops, 17 Crunchy Kicks, 3 Claps, 3 Fills, 6 Shwazy Snaps, 17 Stabs AND 3 Vox FX, youâ€™ll have everything you need to crush your next session with creative possibilities. In fact, you may want to warn your friends and family that they might not hear from you for a few days after you download this pack. These sounds are so addicting the inspiration and musical genius wonâ€™t stop.', 'boy1da boy boyoneda gold goldmine'),
(19, 22, 2, '2019-04-23 11:16:59', 'ULTIMATE 808 KIT + lofi ultimate kit', 'ultimate 808.png', 'lofi1sss.png', 1300, '																		this kit will knock all trap producers off their feat.it contains 27 Kicks,\r\n26 Snares,\r\n3 Claps,\r\n6 Snaps,\r\n25 Loops & Things,\r\n3 Fills,\r\n3 Vox Hits,\r\n18 Stabs,\r\n44.1 KHz 24-Bit WAV Format and\r\n83.5 MB Download File Size (Zipped)																', 'lofi 808 ultimate ultimatekit '),
(21, 17, 2, '2019-04-23 08:06:00', 'ADITIVE KEYS studio collection', 'aditive1.png', 'aditive2.png', 5000, 'This amaizing pluggin entails A virtual rock drummer with real drum performances,\r\nFull control over tempo, timbre and variations. \r\n5 meticulously recorded kits. \r\n30 styles, 720 patterns (intro, verse, chorus, fill, ending). \r\nCustom FX algorithms: Slam and Character.', 'aditive studiocollection collection'),
(22, 17, 2, '2019-04-23 08:14:32', 'Refx NEXUS 2 + 10 free banks', 'refxnexs.png', 'refxnexs_2.png', 3000, 'nexus 2 is a forceful all rounded vst for music specialist. For all genres from soft pop rock ballads to Seattle-style overdrive grunge, nexus adds a wide range of percusion styles and sounds in your production.\r\nsound and melodies were recorded with great attention to detail and love for the genreâ€™s specialities, selected fitting recording rooms with prime acoustical space, and employed only the finest microphones, outboard gear and mixing equipment making it worth purchasing.', 'refx nexus2 '),
(26, 17, 2, '2019-04-23 08:40:35', 'HALION SONIC 3 mac vst + 122 presets', 'hsonic.png', 'hsonic2.png', 27890, 'this is one of the best mac plugins in the market .It Load up to 10 reference tracks to compare sections of your song with easy A/B referencing and playback and come with Assistants that streamline the mixing and mastering process by analyzing your audio, then intelligently suggesting a custom starting point for your tracks..', 'halion sonic mac sonic3'),
(27, 17, 2, '2019-04-23 08:50:56', 'KOMLETE ULTIMATE 11 & 9 megabundle', 'kompultmate.png', 'komp9.png', 40000, 'this is an all in one bundle upto 100gb of fine tuned instruments sounds from orchestra to drums to melodies;you name it.Comes with a Visual Mixer that analyzes your music and creates a picture of the entire soundstage. View the panning, volume, and stereo-width of your individual tracks from a single window.\r\nThe kick drum is the backbone of many modern music genres, both electronic and acoustic. Itâ€™s Often times the thing you start with in a new mix, but to get it sounding just right can be a complex task.\r\n\r\nThis pluggin  is also  modelled after analogue filters and separates the relevant frequency ranges in a very transparent way & can help you get your pads,kicks,percusion etc sounding extremely tight in a matter of just a few clicks.', 'komlete complete ultimate'),
(28, 17, 2, '2019-04-23 08:56:52', 'VIR2 MASTERS COLLETION + W.I bank', 'vir2 pec.png', 'vir2 native coll.png', 13000, 'this amaizing pluggin can be used directly on both mono and stereo tracks. For most electronic kicks it is best used first or early in your mixing chain. For live recorded acoustic kicks however, it can be beneficial to use a shelving equaliser to achieve a general frequency balance before applying KickBox.\r\none of its sweetest parts is its The EQ section which has been stepped to target the most common areas of the frequency spectrum, allowing you to achieve precise balanced adjustments in a matter of a few clicks.\r\nEach band has a frequency and db control and can be operated with simple click. The allows you to run through the values without looking at the plugin, so you can trust your ears and not your eyes', 'vir2 vir masterscollectin masters wibank'),
(29, 17, 2, '2019-04-23 09:03:53', 'ERECTRA X vsti + sick2 expantion', 'electrax.png', 'sickvst.png', 28700, 'the most unique thing is that this vst comes with a unique compressor designed with a completely unique algorithm that has been designed to get your sounds and melodies sounding punchy and clear.\r\nThe controls are the same Ratio, Threshold, Attack, Release and Make Up that are found on most compressors, so the workflow remains familiar to the user', 'electra sick sick2 ex'),
(30, 19, 4, '2019-04-23 09:24:38', 'Yamaha A3m Sunburst TBS guitar', 'git1.png', 'git11.png', 7500, 'this is an allrounded  beginner, intermediate, advanced, and professional guitar for sale, all with a best price guarantee.its low and flat arching combined with strong outlines and magnificent F-holes create a very powerful and rich tone', 'Yamaha A3m Sunburst TBS guitar'),
(31, 19, 4, '2019-04-23 09:29:39', 'Fiddlerman OB1 Violin + case', 'vio 2.png', 'vio 2_2.png', 5700, 'comes with Warm Brown Varnish,\r\nGuarneri Pattern,\r\nAged Spruce and Maple, dried for 10+ years\r\nQuality Ebony Fittings and Ebony Fingerboard\r\n to add to this it comes with additonal offers  and accessories such as \r\nOne-year warranty on all accessories\r\nFiddlerman Quality Oblong Violin Case FC100\r\nCase includes padded straps, music pocket, storage compartments, four bow holders, Hygrometer\r\nHolstein Premium Violin Rosin\r\nUltra Practice Mute\r\nFiddlerman Wood Violin Shoulder Rest\r\nFiddlershop Polishing Cloth', 'Fiddlerman OB1'),
(32, 19, 4, '2019-04-23 10:00:07', 'Tower Strings Midnight Violin Outfit', 'vio3.png', 'vio3_2.png', 28000, 'this is our top recommendations for beginners on a budget. It is well crafted from aged tonewoods, finished with a beautiful dark varnish, set up here in our shop to perfection, and produces deep and brilliant tones.\r\n\r\n', 'deulex concert'),
(33, 19, 4, '2019-04-23 10:11:24', 'cecilio violin cvn 200 + case', 'vio4.png', 'vio4_2.png', 27000, 'This violin is possible because of the combination of great connections and strong buying power! The fact that we can offer a quality violin that will last for years with an advancing level outfit is truly AMAZING. It\'s not uncommon to find this level violin for ksh4000 to ksh.50000 at other violin shops, (and that is without a quality outfit). Each violin is tested and will arrive ready to play out of the box. ', 'cecilio violin cvn'),
(34, 19, 4, '2019-04-23 10:17:49', 'Holstein Bench Strad 1715 Violin', 'vio-3.png', 'vio-3_2.png', 24000, 'comes with Solid-carved spruce and maple tone woods,\r\n100% ebony fingerboard, pegs & fittings\r\nCarbon Tailpiece with 4x Fine Tuners\r\nHand-carved french Aubert or Teller bridge\r\nSpirit-based durable dark brown finish (no thick lacquer),\r\nWood dried a minimum of 4 years,\r\nInstalled Dâ€™Addario Prelude Strings (teacher preferred),\r\nGreat for Suzuki and NAfME students,\r\nPrecisely measured string height for easy and comfortable playability and \r\nThe violin will arrive ready to play out of the box\r\n', 'holstein bench strad 1715'),
(35, 19, 4, '2019-04-23 10:24:00', 'knilling impuls acoustic electric  violin', 'vio5.png', 'vio5_2.png', 23000, 'comes with Strong, responsive, high-grade Carbon Fiber (far superior to Brazilwood)\r\nDurable Siberian horse hair for a smooth, full tone\r\nNickel-mounted true ebony frog,\r\nGenuine mother-of-pearl inlays to add to this a bonus is given to the first 15 customers eg One-year warranty on all accessories\r\nSturdy light weight high-quality oblong violin case\r\nCase includes straps, music pocket, storage compartments, four or two bow holders\r\nFiddlershop/Fiddlerman Rosin\r\nFiddlerman carbon violin Shoulder Rest\r\nUltra Practice Mute\r\nFiddlershop polishing cloth\r\nCarbon composite tailpiece with built-in fine tuners', 'knilling impuls acoustic electric  violin'),
(36, 16, 1, '2019-04-23 10:34:41', 'PERZINA GP-187 ROYAL GRAND PIANO', 'PERZINA GP-187 ROYAL.png', 'PERZINA GP-187 ROYAL (2).png', 40000, 'The â€œ187 ROYALâ€ is the ultimate addition to your home, studio or institution. Itâ€™s an exquisite performer, bringing an  bass response and a distinctly  clarity to bear.\r\nAn exacting level of finish, both in aesthetics and musical quality, makes this 187cm / 6â€™2â€³ instrument a dominant and substantial contender to the 21st century piano world and simply must be a consideration for any piano purchaser in its category.', 'PERZINA GP-187 ROYAL'),
(37, 16, 1, '2019-04-23 10:49:57', 'LUDWIG GP-187-empire-bubinga', 'ludwigb.png', 'ludiwiga.png', 50000, 'The pinnacle of craftsmanship, incorporating two of the worldâ€™s most beautiful things into one: aged, exotic woods and a perfectly crafted grand piano.\r\nThe \"LUDWIG GP-187-empire-bubingaâ€ is perhaps the finest example of Waterfall Bubinga veneering in both the musical and furniture worlds, and the attention to detail is evident at every turn.', 'LUDWIG GP 187 empire-bubinga'),
(38, 16, 1, '2019-04-23 10:53:42', 'YAMAHA GP-187 EMPIRE BUBINGA', 'YAMAHA (2).png', 'YAMAHA.png', 70000, 'this piano has the following specs. Length: 187cm / 6â€™2â€³,\r\nWidth: 152.7cm / 60â€³,\r\nHeight: 112.5cm / 44â€³,\r\nWeight: 322kg / 710lbs (net),\r\nCurved lines along with restrained ornament are the characteristics of this beautiful piano decorated in a style that developed during, and after, the reign of Anne, Queen of Great Britain (1702-1714).\r\nThe design is smaller, lighter and more comfortable than other â€œroyalâ€ examples and Perzina, in full line with the style, places emphasis on the form rather than the ornament.', 'yamah GP-187 EMPIRE BUBINGA'),
(39, 16, 1, '2019-04-23 10:59:16', 'YAMAHA PREZINA GP-160-sylvr', 'whited.png', 'whiteds.png', 120000, 'specs include :  Length: 187cm / 6â€™2â€³,\r\nWidth: 152.7cm / 60â€³,\r\nHeight: 112.5cm / 44â€³,\r\nWeight: 322kg / 710lbs (net),\r\n.This brand was originally from Berlin in 1908. After a short takeover period by the English Bentley Piano Company from 1984 to 1992, the brand was again taken over by Whelpdale, Maxwell & Codd Ltd. from 1993 to 1998 and finally to be abolished in 2003.\r\nSince that time, yamaha has been built as a separate line at the Perzina factory in Yantai in China.', 'yamaha prezina gp-160'),
(40, 16, 1, '2019-04-23 11:04:34', 'PERZINA DL-152 QUEEN ANNE', 'brownie (2).png', 'brownie.png', 90000, 'queen anne instruments are characterized by their excellent price-quality ratio and beautiful designs. The fine touch and the beautiful warm sounds provide a very pleasant playing experience, with which you can discover the secrets of the rich piano literature in your own way.\r\n\r\nSpecial characteristics:\r\n\r\nStudy pedal,\r\nSolid chrome hinges,\r\nSwiss top quality lacquers,\r\nSolid Maple variety,\r\nOther versions: White, high-gloss walnut and mahogany â€“ Cherry, beech, maple and other matt wood available at extra cost', 'PERZINA DL-152 QUEEN ANNE'),
(41, 16, 1, '2019-04-23 11:07:45', 'ESTONIA CONCERT GRAND- MODEL 274', 'coldin.png', 'coldin (2).png', 120000, 'The combination of old-world piano making philosophy with cutting edge design and production methods is the source of the romantic sound of Estonia pianos.\r\n\r\nRim: Thick Baltic wood, multiple layers to support the special Estonia sound\r\n\r\nBraces: Spruce, cross-cut approx. 5 x 2 in (12 x 5,5 cm),\r\n\r\nPinblock: Highest grade, from Germany,\r\n\r\nSoundboard: Made of the highest quality European spruce, imported from Germany. All clear grade, specially selected\r\n\r\nSoundboard area: 22,93 sq.ft (2,13 sq.m),\r\n\r\nRibs: 17 radial grain, made of spruce,\r\n\r\nLongest bass wire: 6â€™7 in (202 cm),\r\n\r\nHammers: The highest quality hammers â€“ Renner Blue, made by the Renner Company, Germany,\r\n\r\n \r\n\r\nAction: First class actions by Renner, Germany,\r\n\r\nKeys: Kluge, Germany,\r\n\r\nFelts: The best wool, special order from Germany and England and \r\n\r\nPedals: Three pedals: Una corda, Full sostenuto, and Full sustain', 'ESTONIA CONCERT GRAND- MODEL 274'),
(42, 23, 4, '2019-04-23 11:41:05', 'YAMAHA REC CUSTOM 6 PIECE-drumset', 'yello.png', 'yello_2.png', 50000, 'this is a new series Yamaha Recording custom drumset with classic yellow look .Sizes are 22 inch bass drum, 10 and 12 inch toms and 14 and 16 inch floor toms. Shell pack only. It is in excellent condition and i have never gigged with them. The shells are lacquer finished and are birch with 30 degree bearing edges. ', 'yamaha recording 6-piece'),
(43, 23, 4, '2019-04-23 11:45:23', 'LUDWIG 5 PIECE ROCKER Power drum-set', 'browniew.png', 'browniew_2.png', 55000, '\r\nFinish is broen to black fade ..\r\nLudwig 5 piece Rocker Power drum-set (9-ply cross-laminated veneers with maple inner ply): -36\"x22\" bass -16\"x16\" floor tom -10\"x12\" tom -11\"x13\" tom -6.5\"x14 snare All Zildjian cymbals with heavy duty boom stands: -Zildjian 14\" A new beat higats -Zildjian 20\" A medium ride -Zildjian 10\" A custom splash -Zildjian 14\"', 'LUDWIG 5SET ROCKER Power drum-set'),
(44, 23, 4, '2019-04-23 14:27:58', 'LUDWIG GIT LITE SHELL PACK drumset	', 'GRYAWHIT.png', 'GRYAWHIT_2.png', 54999, 'check out our new Drums +cymbals +stands  Ludwig Gig Lite shell pack. includes 20\" bass drum, 13\" snare, 10\" & 13\" toms and two padded cymbles to carry them in. Monroe Badge era drums .... these are a LOT nicer drums than those Ludwig Questlove sets they are selling now and a lot easier to pack in and out for a one ni ...', 'LUDWIG GIT LITE SHELL PACK'),
(45, 23, 4, '2019-04-23 11:59:59', 'SONAR SELECT FORCE DRUMS&TOM', '7.png', '7_2.png', 70000, 'Your looking at a Sonor Select Force drums&Tom red sparkle drum kit excellent condition Tom\'s size are 8 10 bass and  snare. All Tom\'s except floor Tom is on uni mounts which mount to a pearl drum rack snare is a signature Ian pace deep snare. ', ' Sonor Select Force drums&Tom red sparkle'),
(46, 23, 4, '2019-04-23 12:05:10', ' DW ZILIDJIAN TOP LINE DRUMSET', 'DUD.png', 'DUD_2.png', 70000, 'Beautiful new condition kit with: 24\" Bass 14\" Snare 10\" & 13\" TomToms 16\" Floor Tom All New Heads 14\" HiHats 8\", 16\" and 18\" Zildjian Cymbals - All New 2 Cowbells RhythmTech DST Tambourine Music Stand...and many more extras! ...', ' DW Zildjian Top Line Kit'),
(47, 23, 4, '2019-04-23 12:13:17', 'KAMPEX TAMA EMPERIAL STAR DRUMSET', 'tamaa.png', 'tamaa_2.png', 90500, '									specs inc: Drums 10\" & 12 \" Tom 14\" & 16\" Floor toms 20 X 22\" Bass drum 14\" Peal Sensitone snare Cymbals Sabian 18\" AAX China Zildjian 8\" Splash 14\" K Fast Crash 17\" Custom A Crash 2 sets Pearl Rack								', 'kampex tama emperial start '),
(48, 18, 3, '2019-04-23 12:29:21', 'AKAI Audio AV32.1 studio monitors', 'yalla.png', 'yalla (2).png', 140000, 'this is a 5.1-Channel Powered Speaker System\r\nit is a complete high-performance sound system that delivers deep, lifelike, full-range sound. It is ideal for use with TVs, computers, portable music players or any device that has analog or digital outputs.\r\nThe system is comprised of  compact speakers and a powerful subwoofer. The speakers each use a 3-inch high-definition polypropylene driver for accurate midrange reproduction and a 1-inch soft-dome tweeter in our exclusive OptImageâ„¢ IV Waveguide for pristine highs and precise acoustic imaging.', 'AKAI AV32.1 studio monitors'),
(49, 18, 3, '2019-04-23 12:35:15', 'MARANTZ MS20 STUDIO SCOPE 6', 'bwhite.png', 'bwhite (2).png', 124000, 'this are studio spearkers and entails an  internal custom-equalized amplifier with a down-firing, long-excursion 6 1/2 -inch woofer that delivers high-impact bass down to 36Hz (-3dB). Completing the system is a compact and convenient remote control that powers the system on or off, adjusts the volume and provides a sub bypass option. This is also an ideal system for monitoring and mixdown use. The two speakers deliver musically-accurate, detailed sound so you can clearly hear whatâ€™s on your mix, while the subwoofer bypass mode on the remote control enables you to do an instant A-B check of how your recording sounds with or without a subwoofer.', 'marantz ms20 studio scope 6'),
(50, 18, 3, '2019-04-23 12:40:01', 'SOUNDMAX TOONY REVEAL 800 monitors', 'prod1.png', 'prod1_2.png', 127500, 'entails a 3-channel amplifier in sub cabinet powers the subwoofer and two speakers,\r\nDigital (optical), analog RCA and TRS inputs for connection to virtually any equipment and an\r\n\r\ninbuilt Subwoofer that uses powerful down-firing 6 1/2-inch woofer in ported enclosure for deep bass to 36Hz\r\n\r\nSpeakers have 3-inch polypropylene midrange drivers and 1-inch silk dome tweeters.\r\n\r\nRemote control switches unit in and out of standby, adjusts volume, and bypasses sub.\r\nCables included to connect speakers to subwoofer and system to your personal music player', 'tannoy-reveal-402-monitors'),
(51, 18, 4, '2019-04-23 12:44:48', 'PIONEER DJ AXL700 studio monitors', 'carzt white.png', 'crazt wite.png', 150000, 'entails : high-Frequency Driver: 6.5â€³ diameter, coated paper, with high-temperature voice coil,\r\n\r\nFrequency Response:400Hz â€“ 600 Hz,\r\n\r\nCrossover Frequency: 100 Hz\r\n,\r\nInput Connectors include:\r\n\r\nLeft and right RCA line input,\r\n\r\nLeft and right TRS balanced/unbalanced input connector,\r\n\r\nDigital (optical) supporting PCM up to 24bit/192kHz,\r\n\r\nPolarity: Positive signal at â€œ+â€ input produces outward low-frequency cone displacement and \r\n\r\nInput Impedance: 20 KÎ© balanced, 10KÎ© unbalanced', 'PIONEER DJ AXL700 studio monitors'),
(52, 18, 3, '2019-04-23 12:55:19', 'CERWIN-VEGA SUPERMAX speakers', 'redround.png', 'blackround.png', 5100, 'specs: \r\n3-inch polypropylene-coated woofers for tight, accurate bass\r\n\r\n1-inch ferrofluid-cooled silk cone tweeters for clear, pristine highs\r\n\r\nOptImage IV tweeter wave guides for superior imaging and detail\r\n\r\n10-watt per channel amplifier\r\n\r\nRCA inputs for connecting gaming systems, DJ gear, mixers, and more\r\n\r\nFront-panel 1/8-inch stereo auxiliary input for connecting your laptop or desktop computer, MP3 player, or other audio sources\r\n requirements inc:\r\nMonitors (RMS/Music): 20W+20W/25W+25W,\r\n\r\nSubwoofer (RMS/Music): 70W/100,\r\n\r\nProtection: RF interference, output current limiting, over temperature, turn on/off transient, subsonic filter,\r\n\r\nIndicator: White LED for power/standby and indicating remote control operation,\r\n\r\nPower Requirements: Factory-programmed for 100-120V/~50/60 Hz, 220-240V/~50/60 Hz,\r\n\r\nCabinet: Vinyl-laminated high-acoustic-efficiency MDF.', 'cerwig supermax vega'),
(53, 18, 3, '2019-04-23 12:59:53', 'MEGA MAX 126J PA system', 'bluedeam.png', 'browndeam.png', 165000, 'features a 20 -inch polypropylene-coated woofers for tight, accurate bass,\r\n\r\n1-inch ferrofluid-cooled silk cone tweeters for detailed, intelligible high frequencies,\r\n\r\nTweeter mounted in proprietary wave guide for optimum sound coverage\r\n,\r\n40W Class A/B amplifier architecture (20W per channel),\r\n\r\nAcoustically inert MDF cabinets with bass reflex design for deep, rich lows\r\n,\r\nRear-ported bass reflex design for deep, extended low frequency response,\r\n\r\nBack-panel 1/4â€³ TRS balanced and RCA unbalanced inputs\r\n,\r\nFront-panel 1/8â€³ stereo auxiliary input for connection of mp3 players or other devices,\r\n\r\nFront-panel 1/8â€³ headphone jack\r\n\r\nFront-panel volume control', 'mega max megamax '),
(54, 24, 3, '2019-04-23 13:32:39', 'sE ELECTRONIC 4400A mic', 'golden.png', 'golden_2.png', 40000, 'Entails Multi-pattern Large-diaphragm Condenser Microphone with Shockmount.\r\nit has four polar patterns, a vintage-style brass capsule, two bass cuts and two pads, and the most adaptable shockmount around â€“ the 4400a is pure modern classic. Much like a few particularly well-known classic European condensers, the 4400a is a true all-rounder. You can put it up on just about anything and itâ€™ll sound great. Unfortunately for many studio owners, those â€œclassic condensersâ€ are often not what they used to be. Capsule designs change over time, capacitors dry out, metal switches are replaced with plastic buttons and LEDs, and the mics that were once so versatile are now mere shadows of their former selves.\r\n\r\n', 'sE Electronics 4400a'),
(55, 24, 3, '2019-04-23 13:38:39', 'sE ELECTRONIC RUPERT NEVE rnt mic', 'sofisticatd.png', 'sofisticatd_2.png', 45600, 'entails a Large-diaphragm Tube Condenser Microphone with 9 Polar Patterns, 2 Highpass Filters, and Custom Rupert Neve Transformers.Delivers the pristine, musical sonic character and uncompromising performance of the worldâ€™s most prized recording equipment.\r\n\r\nThe RNT is the third microphone in the collaboration between sE Electronics and Rupert Neve Designs, founded by the legendary audio designer Mr. Rupert Neve.\r\nAll in all, this new flagship tube microphone brings the larger-than-life sounds of classic studio microphones into the modern age with greater depth and clarity than ever before.', 'sE Electronics Rupert Neve RNT'),
(56, 24, 3, '2019-04-23 13:48:06', 'RODE NT2-A soundaware mic', 'simple black mic.png', 'simple black mic_2.png', 72000, '									this mic is top seller due to its amainzing nternal featers that make it posible to record cristal clear sounds.Here are some of its specs :\r\nThe finest and most complex capsule sE has ever built\r\nHand-crafted and individually tuned in our very own factory\r\nRefined electrode design delivers supremely natural sound quality;\r\nNINE SELECTABLE POLAR PATTERNS\r\n\r\nPrecisely-tuned dual-diaphragm capsule design allows you to choose the perfect setting for every application\r\nMinimize unwanted signal bleed with ease\r\nHAND-SELECTED ECC82 TUBE & CUSTOM RUPERT NEVE DESIGNS AUDIO TRANSFORMER\r\n\r\nEach microphone-grade tube is carefully selected and pretested in-house\r\nAllows for stunning realism and depth in recordings\r\nUnique tube circuit design optimized for driving the first custom-made transformer\r\nHAND-CRAFTED METAL HOUSING WITH PREMIUM FINISH\r\n\r\nAll-metal construction built with highest attention to detail\r\nEfficient rejection of any electrical interference and noise\r\nHigh quality finish ensures a great look for many years								', 'rode nt2 a '),
(57, 24, 3, '2019-04-23 13:59:28', 'AUDIO-TECHNICA cm-700 headsets', 'alesis.png', 'alesis_2.png', 5800, 'this killer headsets are ment for audio greatness. they provide spic and span sounds thus suitable for mixing and mastering tracks by professional producers', 'AUDIO TECHNICA cm-700 headsets'),
(58, 24, 2, '2019-04-23 14:03:30', 'CREATIVE - AURVANA AIR hq-1600', 'sonyxrp.png', 'sonyxrp_2.png', 4200, 'this headsets are like no other; they provide super clear sounds allowing producers descern low frequency sounds that would otherwise not be heard using common headsets making them perfect for mastering and mixing', 'creative aurvana air hq-1600'),
(59, 24, 3, '2019-04-23 14:07:04', 'BEATS BY DRE mmonster- s460 ', 'bearts bt dre.png', 'bearts bt dre_2.png', 50500, 'this headsets are like no other; they provide super clear sounds allowing producers descern low frequency sounds that would otherwise not be heard using common headsets making them perfect for mastering and mixing', 'beatbydre dre mmonster'),
(60, 20, 5, '2019-04-23 14:14:54', 'MUSIC THEORY beginer to expert', 'musictbto exp.png', 'musictbto exp_2.png', 1250, 'Get the rock-solid fundamentals of rhythm, pitch and harmony with this easy-to-use book/CD pack. Learn the universal language used by all musicians, regardless of instrument. Includes concise, detailed explanations, illustrations and written exercises with a full CD of examples and practice drills. This book will teach you how to: construct scales, chords and intervals, identify major and minor key centers and common chord progressions, accurately play various rhythm feels and figures, learn the basic principles of form and compositional analysis. Â©2006, Book & CD.', 'MUSIC THEORY beginer to expert'),
(61, 20, 5, '2019-04-23 14:29:15', 'TONAL HARMONY modern music theory', 'tonham.png', 'tonham_2.png', 2100, 'Learn today\'s music theory in today\'s language, with Hands-On Music Theory.\r\nWritten in fresh, accessible language, and illustrated with examples that draw on modern tools such as sequencer piano rolls and guitar tabs, this book offers practical, hands-on, easy-to understand instruction on key points of modern pop, rock, jazz, and electronica music theory.\r\n\r\nYou\'ll find a wealth of practical examples and familiar references, with links to music that you can listen to online', 'TONAL HARMONY modern music theory'),
(62, 20, 5, '2019-04-23 14:33:03', 'MODERN MUSIC THEORY for guitarist', 'oneman.png', 'oneman_2.png', 2800, 'Written in fresh, accessible language, and illustrated with examples that draw on modern tools such as sequencer  guitar tabs, this book offers practical, hands-on, easy-to understand instruction on key points of modern pop, rock, jazz, and electronica music theory.You\'ll find a wealth of practical examples and familiar references, with links to music that you can listen to online', 'guitarist modern music theroy '),
(63, 20, 5, '2019-04-23 14:36:45', 'MUSIC THEORY - computer musicians', 'greenredb.png', 'greenredb_2.png', 2000, 'A Fun and Simple Guide to Understanding Music If you wish there was a fun and engaging way to help you understand the fundamentals of music, then this is it. Whether it\'s learning to read music, understanding chords and scales, musical forms, or improvising and composing, this enjoyable guide will help you to finally start understanding the structure and design of music. This fun-filled, easy-to-use guide includes: Music notation Scales and modes Melody harmonization and counterpoint Chord progressions', 'computer musicians'),
(64, 20, 5, '2019-04-23 14:39:12', 'MUSIC THEORY - electronic musicians', 'Gini-1_2.png', 'Gini-1.png', 2800, 'Song form and structure Listen and learn with the CD that has 90 tracks, including over 50 popular songs such as: Beauty and the Beast, Candle in the Wind, Imagine, In the Air Tonight, Killing Me Softly with His Song, Let It Be, Message in a Bottle, Misty, Satin Doll, Take the \'A\' Train, Unchained Melody, What\'d I Say, and more! ©2009, Book & CD, 216 pages', ' electronic musicians'),
(65, 20, 5, '2019-04-23 14:42:48', 'THEORY OF MUSIC made easy ', 'fruity lop.png', 'fruity lop_2.png', 1000, 'Many DJs, gigging musicians, and electronic music producers understand how to play their instruments or make music on the computer, but they lack the basic knowledge of music theory needed to take their music-making to the next level and compose truly professional tracks. Beneath all the enormously different styles of modern electronic music lie certain fundamentals of the musical language that are exactly the same no matter what kind of music you write. It is very important to acquire an understanding of these fundamentals if you are to develop as a musician and music producer. Put simply, you need to know what you are doing with regard to the music that you are writing. i>Music Theory for Computer Musicians explains these music theory fundamentals in the most simple and accessible way possible. Concepts are taught using the MIDI keyboard environment and today\'s computer composing and recording software.', 'made easy theory'),
(66, 20, 5, '2019-04-23 14:58:22', 'ORCHESTRAL SHEET MUSIC stand', 'stand.png', 'stand_2.png', 5300, 'this is a factory adjustable metal stand allowind users of diffenet heights and postures use this stand without straing as they read shee music', 'stand'),
(67, 20, 5, '2019-04-23 15:02:41', 'MXR HD monitor speaker cable ', 'hdspeaker cable.png', 'hdspeaker cable_2.png', 4000, 'this specal cable allows better transmisson of sound from soundcards compared to other cables', 'MXR HD monitor speakercable '),
(68, 20, 5, '2019-04-23 15:06:10', '1m analog to jack sound cable', '2.1 jac.png', '2.1 jac_2.png', 500, 'connect woofer to a laptop or desctop computer ', 'jack soundcable cable'),
(69, 20, 5, '2019-04-23 16:03:39', 'I BRICK 12 PAIRS 5A DRUMSTICKS', 'drumstic.png', 'drumstic_2.png', 4300, 'made of oak wood and are guaranteed to last you for a very very long time', '1-brick-12-pairs--5A-wood-nylon-tips'),
(70, 20, 5, '2019-04-23 16:05:53', 'FIXPRO guitar and brass toolkit', 'toola.png', 'toolb.png', 25000, 'specs: Harley Benton Guitar & Bass toolkit, complete installation kit with the all basic tools for small adjustments for most types of guitars or basses, 6-in-1Â screwdriver 1-Pce incl. 4Â Phillips bits (Phillips 1Â #, 2Â #, 1/4Â \", fessurate slots 3Â mm), nut and 2Â keys (1/4\" and 5/16Â \"Thickness from 1Â to 14Â Pin blade (meter), 0.05, 0.06, 0.07, 0.08, 0.09, 0.10, 0.15, 0.20, 0.25, 0.3, 0.4, 0.5, 0.75, 1.0Â mm) 1Â piece steel, ruler (15Â cm diameter and 6Â inches), taglierin\r\n\r\n', 'fix toolkit toolbox'),
(71, 20, 5, '2019-04-23 16:08:42', 'GUITAR & VIOLA lether straps', 'strappp.png', 'strapp.png', 900, 'made of leather and guaranteed to last for many years to come', 'straps'),
(72, 22, 2, '2019-04-23 16:14:19', 'GHOST RIDER ULTIMATE + LOFI3 kits', 'GHOSTR.png', 'goldie.png', 1220, 'Whether itâ€™s a track for Big Sean, Flume or James Blunt,THIS Drum Kit has you covered.The variety is REAL. Complete with 26 Snaretastic Snares, 24 Flippin Loops, 17 Crunchy Kicks, 3 Claps, 3 Fills, 6 Shwazy Snaps, 17 Stabs AND 3 Vox FX, youâ€™ll have everything you need to crush your next session with creative possibilities. \r\nProduct Includes:\r\n27 Kicks,\r\n26 Snares,\r\n3 Claps,\r\n6 Snaps,\r\n25 Loops & Things,\r\n3 Fills,\r\n3 Vox Hits,\r\n18 Stabs,\r\n44.1 KHz 24-Bit WAV Format,\r\n83.5 MB Download File Size (Zipped) &\r\n105 MB of Content (Unzipped)								', 'boy1da boy boyoneda gold goldmine'),
(73, 22, 2, '2019-04-23 16:16:00', 'MMG MEGA trap & rnb drumkit', 'b.png', 'b_2.png', 1250, 'entails Killer Samples Vol.2,\r\nDrum Dealer: Rainbow Edition,\r\nDrum Dealer: Crystal Edition,\r\n808 Godz Volume One,\r\nDrum Goonies: Hat Loop Edition,\r\nDrum Goonies: Snare Loop Edition,\r\nUrban Thunder,\r\nGlobal Pop.,\r\nSmoke & Mirrors 4,\r\nGlobal Pop 2,\r\nImmortal,\r\nJuice World,\r\nTrippy kits', 'maybach mmg'),
(74, 22, 2, '2019-04-23 16:16:10', 'METROBOOMIN drum collection', 'a.png', 'a.png', 1500, 'This kit inspired by award winning producer metroboomin.\r\nWithin this Construction Kit pack you have 5 varieties of D-Block,&nbsp;Jadakiss, Sheek Louch and Styles P&nbsp;type drums that you can work with at ease to create your own hard Urban/Hip Hop beat.', 'metro metroboomin metro-boomin drumcollection'),
(75, 17, 2, '2019-04-23 16:19:29', 'SPECTRASONIC TRILIAN 7 + bass exp vsti', 'trilian.png', 'trilian_2.png', 28000, 'trilian is a game changing bass bundle. Save 30% when you get trilian Advanced and Ozone 8 Advanced together.it also comes with \r\nAn industry-first, Tonal Balance Control  analysis tool that helps you easily visualize your audio against a reference target. Compare your work with track references and genre standards informed by analysis on years of popular masters.', 'spec spectra trilian bass expantion bass'),
(76, 17, 2, '2019-04-23 16:19:37', 'SPECTRASONIC KEYSCAPE 2 vsti', 'keyscape.png', 'keyscape_2.png', 28000, 'this is the best piano sound based vst that is quite complex yet so easy to use.\r\nSystem Requirements inc:\r\nOperating Systems:\r\n\r\nWindows 7 or later, Mac OS X 10.9 or later\r\nYou may run it on earlier versions but we donâ€™t support them\r\nPlugin Formats:\r\n\r\nVST\r\nAU\r\nAAX\r\nMinimum Requirements:\r\n\r\n4 GB of RAM\r\n1.6 GB of Disk Space\r\n1280x768 px Display\r\nInternet Connection\r\nDelivery Format:\r\n\r\nDownloadable Installer File\r\nSupported Standards:\r\n\r\nMIDI', 'spec spectra keyscape'),
(77, 17, 2, '2019-04-23 16:19:57', 'SPECTRASONIC OMNISPHERE 2 vsti', 'sphere.png', 'sphere_2.png', 30000, 'this is the best all rounded vsti pluggin.it comes with 1130 styles, 77420 rhythm patterns played on 5 drum kits covering any musical genre that benefits from high energy rock drumming.one can also Select from ready-made mix character presets that drive a sophisticated array of algorithms under the hood. Imagine an automated mixing engineer, what you click is what you get.', 'spec spectra omnisphere'),
(78, 22, 2, '2019-04-23 16:20:22', 'SONIC DOPE HIP-HOP drums', 'g.png', 'g_2.png', 1999, 'This is a no-brainer... Use the opportunity to fill your with this kit as it is one of the best sound kits in the industry today! it is packed with unique features such as BPM  inclution on all samples,\r\nSample Collections include Track Separations,\r\n100% Royalty-Free.', 'sonic dope sonicdope '),
(79, 22, 2, '2019-04-23 16:20:32', 'RYTHMIC ODYESSY drumkit', '5.png', 'f.png', 700, 'this is a top seller kit feature the hotest trap ,hip hop ,dub step and rnb samples from top producers such as dr-dre, sony digital, mafia 808, metroboomin ,boy1da  all packed into one.our customers get the Red Umblera drum kit too 50% off .					', 'rythmic odyssy ');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(16, 'Grand pianos ', 'We offer  the best deals on upright and grand pianos in Kenya & Africa. Buy pianos with an outstanding sound, beautiful design and the ability to offer pleasure for generations to come; all at an affordable price.\r\n We are exclusive Africa distributors of the finest and the best Piano brands in the world including Gebr. Perzina, C. Bechstein, Bechstein Academy, Gerh. Steinberg, Yamaha, W. Hoffmann, Steingraeber & Sohne, Estonia and the Bolan Silent Systems.'),
(17, 'plugins', 'here at spear instruments, we have some of them most high quality plugins such as omnisphere , Refx nexus, kontakt etc all at very affordable prices'),
(18, 'studio monitors', '					We stock a large variety of audio recording equipment for studio and personal use and you can be rest assured what you are looking for is available.'),
(19, 'string instruments', 'We have unmatchable sets of percussion, strings and brass equipment to cater for any hungry musician or producer such mainly guitars and violines'),
(20, 'accessories', 'We avail all kinds of music gears such as headsets, piano benches ,jack and cables etc to enable our esteemed customers make the best off their musical talents.'),
(21, 'MIDI keyboards', 'AKAI,AKM,M-Audio,IK Multimedia midi keyboard ; we got it all and at favorable prices.our keyboard offer unprecedented pliability and unrestricted manipulation of any virtual instrument. Available in 25,49 and 61 key sizes'),
(22, 'soundkits', '	Want the best old school and modern instrument sounds for any form of genre you could ever think off, well here at spear instruments we provide amazing drum  sounds and presets from the most some of the most renown producers such as metroboomin ,wasafi records etc.take a pick and build amazing tracks.'),
(23, 'drumsets', '	\r\ncheckout our latest set of drumsets from reknown brands such as yamaha ,DPD lx,risen,ludwig and what have you at crazy affordable prices available as brand new and refubished '),
(24, 'microphones & headsets', 'chechout our lates microphones with higher sound sensistivity and noice filtering technology that allows you to record clean sound than ever before and also our hiqh quality headsets for music producers out there.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
