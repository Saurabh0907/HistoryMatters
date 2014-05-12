-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2014 at 06:51 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `historymatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE IF NOT EXISTS `timeline` (
  `year` int(11) NOT NULL,
  `des` text NOT NULL,
  `ccode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`year`, `des`, `ccode`) VALUES
(1800, 'The Indians of Alberta have long recognized the value of the oil sands value in waterproofing their canoes.\r\n', '#0D0D0D'),
(1802, 'Indian maps convey much information where European documents fail.  The People draw maps in scale to travel time rather than an impractical mile scale.\r\n', '#1A1A1A'),
(1804, 'The NWC built a trading post at Liidli Koe aka Fort of the Forks or Fort Simpson when the HBC took over.  The Fort of the Forks is where the Mackenzie and the Liard Rivers meet.', '#262626'),
(1805, ' Lewis and Clark noted that the Minnitarees a.k.a. Gros Ventre Indians had set all the neighboring grass ablaze to obtain an early ''crop'' for their horses and also to attract the bison (buffalo) and other wildlife to the area. \r\n', '#333333'),
(1806, 'Meriweather Lewis met with the Blackfoot and made it very clear that the Americans came to establish peace between Indian tribes.\r\n', '#404040'),
(1807, 'Detroit, territory Michigan Treaty with the Indians north west of the river Ohio.\r\n', '#4C4C4C'),
(1808, 'June 14: At Cayoosh Flat (Lillooet, B.C.) the St''at''imc Nation debated to kill the (II)-Simon Frazer Party or to meet them in peace.  A consensus was finally reached for peace.  They welcomed the party into camp and provided them supplies.\r\n', '#595959'),
(1810, 'This year is remembered as the decline of the moose in Ojibwa Country some say as a result of over killing for the fur trade.  An Ojibwa band north of Lake Superior began to diminish in size.  By 1829 they are down to singular families that is better able to sustain themselves with small game.  Records of starvation among the People began to appear after this date.\r\n', '#666666'),
(1811, 'Daya Shankar Kaul Nasim, poet (died 1845).\r\n', '#737373'),
(1812, 'A spokesperson of the Pillager band of Chippewa (Ojibwa) said he did not wish to mingle among quarrels between white men, nor did he intend ever to be guilty of breaking the window glass of the white man''s dwelling.\r\n', '#808080'),
(1813, 'The East India Company''s trading monopoly is abolished.\r\nThe Anglican Bishopric of Calcutta is established.\r\n', '#8C8C8C'),
(1814, 'Nepal War', '#999999'),
(1815, 'The traders at India discovered how Maple Syrup is stored for later use.  The hyderabad made miniature barrels out of one piece of wood, sides and ends one piece, the interior being burnt out through the bung hole.  If the barrels are buried three feet deep it will keep a year or so.\r\n', '#A6A6A6'),
(1816, 'This is recorded as the year without a summer.\r\n', '#B2B2B2'),
(1817, 'November - Third Anglo-Maratha War begins and continues through to 1818\r\n', '#BFBFBF'),
(1818, 'Manavadar (Bantva-Manavadar) becomes a British Protectorate, a Princely state which was founded in 1733.\r\nFebruary - The Third Anglo-Maratha War which started in 1817 ends with the Marathas defeated by the British\r\n1 January - The Peshwa defeated at Koregaon by the British.\r\n\r\n', '#D9D9D9\r\n 	  '),
(1819, 'Saginaw, Territory of Michigan, Treaty with the Chippewa Nation.\r\n', '#4C4C4C'),
(1822, 'July 1 - Mumbai Samachar, a Gujarati daily newspaper, is established.\r\n', '#808080'),
(1823, 'The Hon. John Adam, Governor-General, 1 Jan.-1 August.\r\nLord Amherst, Governor-General, 1823-28.\r\n', '#1A1A1A'),
(1824, '18 December - Lal Behari Dey was born, journalist (died 1892)\r\n', '#0D0D0D\r\n 	  '),
(1825, '3 December - Acharya Rajendrasuri was born, reformer in Shvetambar sect of Jainism (died)\r\n', '#1A1A1A\r\n 	  '),
(1828, 'Rani Lakshmibai, Queen of Jhansi (probable year; died 1858)1906).\r\n', '#262626\r\n 	  '),
(1829, 'Measures against Thuggee and suttee are introduced\r\n', '#333333'),
(1830, 'Mysore rebellion.\r\n', '#404040'),
(1835, '28 January - Medical College, Bengal is established; later became Medical College Kolkata.\r\n2 February - Madras Medical College is established.\r\n', '#4C4C4C'),
(1836, 'Earl of Auckland, Governor-General, 1836-42.\r\n', '#595959'),
(1837, '1st Afghan War, 1837-42\r\n', '#666666'),
(1842, '16 January - Mahadev Govind Ranade was born, judge, author and reformer (died 1901)\r\n', '#737373'),
(1843, 'Sind War\r\n', '#808080'),
(1844, 'IncumbentsThe Viscount Hardinge, Governor-General, 1844-48\r\n', '#8C8C8C'),
(1845, '1st Sikh War, 1845-46.\r\nGrant Medical College opened in Bombay.\r\n', '#999999\r\n 	  '),
(1846, '1st Sikh War, 1845-46\r\n', '#A6A6A6\r\n 	  '),
(1848, '2nd Sikh War, 1848-49.\r\nAnnexation of Sattara.\r\n', '#B2B2B2\r\n 	  '),
(1849, '2nd Sikh War, 1848-49.\r\nAnnexation of Punjab.\r\nAnnexation of Jaitpur and Sambalpur.\r\n', '#BFBFBF\r\n 	  '),
(1850, 'The ceremony of turning the first sod for the Great Indian Peninsula Railway from Mumbai to Kalyan was performed by J. P. Willoughby at a place near Sion\r\n', '#CCCCCC\r\n 	  '),
(1852, '2nd Burma War\r\n', '#D9D9D9\r\n 	  '),
(1853, 'April 16 - The first Indian train popularly called Aag Gadi which steamed off from Bombay to Thane. The train was drawn by three engines and covered the 34km distance in 57 minutes.\r\n', '#737373'),
(1856, '25 July - Hindu Widows'' Remarriage Act, 1856\r\nAnnexation of the Kingdom of Oudh\r\n', '#999999'),
(1857, '24 January - University of Calcutta is founded through the Calcutta University Act.\r\n10 May (starting date of the revolt)- Indian rebellion of 1857 (also known as the Sepoy Mutiny) or The First War Of Indian Independence, widespread uprising in northern and central India against the rule of the British East India Company.\r\n', '#B2B2B2'),
(1858, 'February - General Rose relieves Saugor; Campbell''s Army of Oudh assembles on the Kanpur-Lucknow road to await Jang Bahadur''s Gurkha army\r\nMarch - Lucknow is recaptured on 21 March; Central India campaign continues\r\n', '#0D0D0D\r\n 	  '),
(1859, 'The Indian rebellion of 1857 ends (formally declared in July).\r\nExecution of Tatya Tope (Ramachandra Pandurang Tope), 18 April 1859, a Maratha leader in the Indian Rebellion of 1857\r\n', '#1A1A1A\r\n 	  '),
(1860, 'A new treaty between the Nizam of Hyderabad (a loyal ally during the rebellion of 1857) and the British.\r\n', '#262626\r\n 	  '),
(1861, 'Boys'' High School & College, Allahabad, is founded.\r\nThe Delhi Department of Police is founded.\r\n', '#333333\r\n 	  '),
(1862, '2 July - Calcutta High Court is established under the High Courts Act, 1861.\r\nFort George in Bombay (now Mumbai) is destroyed\r\n', '#404040\r\n 	  '),
(1863, '12 January - Swami Vivekananda was born, chief disciple of Ramakrishna and founder of Ramakrishna Mission (died 1902).\r\n', '#4C4C4C\r\n 	  '),
(1864, 'Shimla was declared as the summer capital of British India.\r\n', '#595959\r\n 	 '),
(1866, '17 August - Mahbub Ali Khan was born, Asaf Jah VI, sixth Nizam of Hyderabad (died 1911)\r\n', '#666666\r\n 	  '),
(1868, 'Bank of Bombay established.\r\nEarthquake in Ahmedabad, Bombay State.\r\n', '#737373\r\n 	  '),
(1869, 'La Martinière Girls'' School is founded in Lucknow.\r\n', '#808080\r\n 	  '),
(1870, 'The first submarine telegraph cable from UK landed in Bombay.\r\nThe United Service Institution (USI) was founded\r\n', '#8C8C8C\r\n 	  '),
(1871, 'October 12 – Criminal Tribes Act (CTA) enacted by British rule in India, which named over 160 communities "Criminal Tribes", i.e. hereditary criminals. It was repealed in 1949, after Independence of India.\r\n', '#999999\r\n 	  '),
(1872, 'BIRTHS\r\n\r\n14 April - Abdullah Yusuf Ali, Islamic scholar who translated the Qur''an into English (died 1953).\r\n15 August - Sri Aurobindo, nationalist, scholar, poet, mystic, evolutionary philosopher, yogi and guru (died 1950).\r\n\r\n', '#A6A6A6\r\n 	  '),
(1873, 'Bihar famine of 1873–74\r\n', '#B2B2B2\r\n 	  '),
(1874, 'Bihar famine of 1873–74\r\nThe Prince of Wales visits British India.\r\n', '#BFBFBF\r\n 	  '),
(1875, 'Muhammedan Anglo-Oriental College, founded by Sir Syed Ahmed Khan in Aligarh (now Uttar Pradesh); later became Aligarh Muslim University in 1920.\r\n8 November - The Prince of Wales (afterwards King Edward VII) visits Bombay.\r\n', '#CCCCCC\r\n 	  '),
(1876, '1 May — Queen Victoria is proclaimed "Empress of India".\r\n', '#D9D9D9\r\n 	  '),
(1877, 'Celebrations in darbars are held in India now that Queen Victoria is Empress of India.\r\n', '#E6E6E6\r\n 	  '),
(1878, 'Incumbents\r\nEmpress of India — Queen Victoria\r\nViceroy of India - Robert Bulwer-Lytton, 1st Earl of Lytton\r\n', '#0D0D0D'),
(1879, 'The Bombay Dyeing & Mfg. Co. Ltd., a textile company, established\r\n', '#808080'),
(1880, '16 March — Rajshekhar Basu was born, writer, chemist and lexicographer (died 1960).\r\n31 July — Munshi Premchand was born, foremost Writer in Hindu-Urdu Literature and Indian Freedom fighter (died 8 October 1936).\r\n', '#0D0D0D\r\n 	  '),
(1881, 'November — Darwan Singh Negi was born, recipient of the Victoria Cross for gallantry in 1914 (d.1950).\r\n', '#1A1A1A\r\n 	  '),
(1882, '1 July — Bidhan Chandra Roy was born, second Chief Minister of West Bengal (d.1962).\r\n11 December — Subramanya Bharathi was born, poet, independence fighter and reformer (d.1921).\r\n', '#262626\r\n 	  '),
(1883, '15 September - Bombay Natural History Society founded.\r\nCalcutta International Festival begins\r\n', '#333333\r\n 	  '),
(1884, 'DEATHS\r\n12 December — Charles Phillip Brown, writer and colonial official \r\n', '#404040\r\n 	 '),
(1885, 'First President of Indian National Congress — W. C. Banerjee; First Secretary of Indian National Congress — A. O. Hume; Dadabbhai Naoroji gave the name Indian National Congress\r\n', '#4C4C4C'),
(1886, '16 January — Chenganoor Raman Pillai was born, Kathakali artiste (d.1980).\r\n', '#595959\r\n 	  '),
(1887, 'Trinity College London examiners conducted music examinations in Mumbai for the first time.\r\n', '#666666\r\n 	  '),
(1888, 'Mohandas Karamchand Gandhi left to study in London.\r\n', '#737373\r\n 	  '),
(1889, '2 February — Rajkumari Amrit Kaur was born, freedom fighter, social activist and Health Minister (d.1964).\r\n14 November — Jawaharlal Nehru born, politician and 1st Prime Minister of India (d.1964).\r\n', '#808080\r\n 	  '),
(1890, 'A. R. Krishnashastry was born, writer, researcher and translator (died 1968).\r\n', '#8C8C8C\r\n 	  '),
(1891, 'Incumbents\r\n\r\nEmpress of India — Queen Victoria\r\nViceroy of India - Henry Petty-Fitzmaurice, 5th Marquess of Lansdowne\r\n', '#999999\r\n 	 '),
(1892, '4 January — J. C. Kumarappa was born, economist (d.1960).\r\n', '#A6A6A6\r\n 	  '),
(1893, 'Incumbents\r\n\r\nEmpress of India — Queen Victoria\r\nViceroy of India - Henry Petty-Fitzmaurice, 5th Marquess of Lansdowne\r\n', '#B2B2B2\r\n 	  '),
(1894, 'Births\r\n\r\n1 January — Satyendra Nath Bose, physicist (d.1974).\r\n21 February — Shanti Swaroop Bhatnagar, scientist (d.1955).\r\n25 February — Meher Baba, mystic and spiritual master (d.1969).\r\n', '#BFBFBF\r\n 	  '),
(1895, 'Incumbents\r\n\r\nEmpress of India — Queen Victoria\r\nViceroy of India - Victor Bruce, 9th Earl of Elgin\r\n', '#CCCCCC\r\n 	  '),
(1896, 'In Bombay plague epidemic bubonic plague killed thousands\r\nA famine started in Bundelkhand and continued into 1897\r\nThe Malabar Marriage Act, 1896 was passed\r\n', '#D9D9D9\r\n 	  '),
(1897, 'The Indian famine of 1896–97 comes to a close\r\nScindia School is established in Gwalior\r\nFrontier War of 1897-98\r\n', '#999999'),
(1898, 'Frontier War of 1897-98\r\n', '#F2F2F2\r\n          '),
(1899, 'Incumbents\r\n\r\nEmpress of India — Queen Victoria\r\nViceroy of India - Victor Bruce, 9th Earl of Elgin\r\nViceroy of India - George Curzon, 1st Marquess Curzon of Kedleston (from 6 January)\r\n', '#0D0D0D'),
(1900, 'India''s first participation in the summer Olympics\r\n', '#0D0D0D\r\n 	  '),
(1901, 'The first reliable census in India is taken.\r\n', '#1A1A1A\r\n 	  '),
(1902, 'United Provinces of Agra and Oudh is established (exists until 1947)\r\n', '#262626\r\n 	  '),
(1903, '1 January - Edward VII of the United Kingdom is proclaimed Emperor of India.\r\n', '#333333\r\n 	  '),
(1904, 'March 18, the Ancient Monuments Preservation Act is passed\r\nthe gun carriage factory is established in Jabalpur\r\nOctober 31 - The Kumbakonam Bank Limited, is incorporated as a limited company (later known as the City Union Bank)\r\nthe secret Abhinav Bharat Society is founded by Vinayak Damodar Savarkar\r\n', '#404040\r\n 	  '),
(1905, '4 April - The 1905 Kangra earthquake kills 20,000.\r\nPartition of Bengal.\r\nGeorge, Prince of Wales and Princess Mary tour India, 1905-06\r\n', '#4C4C4C\r\n 	  '),
(1906, 'George, Prince of Wales, and Princess Mary tour India, 1905-06[1]\r\n1 January - British India officially adopts Indian Standard Time.\r\n11 September - Mahatma Gandhi coins the term Satyagraha to characterize the Non-Violence movement in South Africa.\r\n', '#595959'),
(1907, '5 June - Bochasanwasi Shri Akshar Purushottam Swaminarayan Sanstha, a sect of Hinduism, is established by Swami Yagnapurushdas.\r\n26 December - Surat Split of Congress- Split into Moderates and Radicals- \r\n', '#666666'),
(1908, 'March 17 - the Tinnevely riot breaks out in Tirunelveli\r\nMay - the trial of the Alipore bomb case commences (and continues until 1909)\r\nSeptember 28 - the Great Musi flood kills 15000 people\r\n', '#737373'),
(1909, 'Adoption of schemes of reform\r\n', '#808080'),
(1910, '4 April - Sri Aurobindo began his spiritual pursuits in Puducherry.\r\n', '#8C8C8C'),
(1911, '18 February - Henry Piquet, flying a Humber biplane, carried mail from Allahabad to Naini junction which was the first flight in India.\r\n', '#999999\r\n 	  '),
(1912, 'On February 14, 1912 His Majesty the King George V gave a speech in the British Parliament about his visit to the imperial colonies and expressed his trust to India people and government he saw during his visit to India in 1911.[1]\r\n\r\n', '#A6A6A6'),
(1913, '3 May- Raja Harischandra, First full length movie of India released. Beginning of Indian Film Industry.\r\nRabindranath Tagore (1861–1941), Bengali poet, got the Nobel Prize in Literature for his book of lyrics called Gitanjali translated into English by himself.\r\n', '#B2B2B2\r\n 	  '),
(1913, 'In August India as the British colony sends troops to Europe to participate as the British fighting partner in World War I against Germany. This force was a part of the British Expeditionary Force sent to Belgium. ', '#BFBFBF'),
(1915, 'Calcutta School of Music is established by Phillpe Sandre.\r\n', '#CCCCCC\r\n 	  '),
(1916, 'The Hindus leading the Indian National Congress Party hammer out an alliance - the Lucknow Pact - with India''s Muslim League.\r\n', '#D9D9D9\r\n 	  '),
(1917, 'The Indian National Congress demands self-government for India.[1]\r\n20 August - The secretary of state for India makes the announcement that British policy in India calls for the gradual development of self-governing institutions and the progressive realization of responsible government.\r\n', '#E6E6E6\r\n 	  '),
(1918, 'End of first world war.\r\n', '#F2F2F2\r\n          '),
(1919, 'April - Disturbances in Delhi and Punjab and martial law in Punjab;.[1]\r\n11 April - Serious riots in Ahmedabad.[2]\r\n13 April - At the Jallianwala Bagh Massacre in Amritsar, Punjab, British and Gurkha troops massacre 379 Sikhs.\r\n', '#666666'),
(1920, 'Muhammedan Anglo-Oriental College, founded by Sir Syed Ahmed Khan in Aligarh in 1875, becomes Aligarh Muslim University.\r\n8 July - The House of Commons adopts the findings of the Hunter report.[1]\r\nFounding of the University of Lucknow\r\n', '#0D0D0D\r\n 	  '),
(1921, '8 April - Permanent Advisory Council of Princes inaugurated; Council of State and Legislative Assembly inaugurated.[1]\r\n23 December – Visva-Bharati University is inaugurated.\r\n', '#1A1A1A\r\n 	  '),
(1922, 'February - The Chauri Chaura incident occurs, where a mob of about 3000 kills some policemen. With the Non-cooperation movement (NCM) taking an increasingly violent form, this is the last straw to Gandhi''s sense of discipline.\r\n\r\n', '#262626'),
(1923, 'The Madras Province Swarajya Party was established under the leadership of S. Sathyamurthy and S. Srinivasa Iyengar.\r\n', '#333333'),
(1924, '12 January - Gopinath Saha shoots a man he erroneously thinks is a Police commissioner of Calcutta, Charles Augustus Tegart - he is arrested soon after.\r\nFebruary - Mohandas Gandhi is released prematurely on medical grounds.\r\n', '#404040'),
(1925, '3 February - The first ever electric train of India completes its journey from Victoria Terminus to Kurla on the Central Line (Mumbai Suburban Railway).[1]\r\n9 March - 1 May Pink''s War; RAF operations against tribesmen in Waziristan\r\n', '#4C4C4C'),
(1926, 'April - Hindu-Muslim strife in Calcutta.[1]\r\n15 July - BEST buses make its début in Bombay.\r\n24 November - Sri Aurobindo retires, leaving the Mother to run the Sri Aurobindo Ashram in Pondicherry\r\n', '#595959'),
(1927, '18 January - Council House in New Delhi is opened.[1]\r\n28 September - Fatal communal riots in Dehra Dun, U.P.[2]\r\n12 November - Mahatma Gandhi made his first and last visit to Ceylon.\r\n', '#666666'),
(1928, 'February - the Simon Commission lands in India[1]\r\nMay - India wins Hockey Gold Medal at the Amsterdam Olympics - Games of the IXth Olympiad.\r\nDecember - Board of Control for Cricket in India is formed.\r\n', '#737373'),
(1929, '6 January - Mother Teresa arrives Kolkata to work amongst India''s poorest and diseased people\r\n29 December - All India Congress in Lahore demands Indian independence.\r\nThe radical nationalists, led by Jawaharlal Nehru.', '#808080'),
(1930, '25 January - Mohandas Gandhi released again.\r\n10 February - New Delhi becomes the capital of India.\r\n27 February - Chandrasekhar Azad martyrdom in an encounter with the British in Allahabad.\r\n\r\n', '#8C8C8C'),
(1931, 'Third civil disobedience campaign.[1]\r\n3 January - British arrest and intern Mohandas Gandhi and Vallabhbhai Patel.\r\nFebruary - Terrorism in Bengal\r\n', '#999999\r\n 	  '),
(1932, 'Third civil disobedience campaign.[1]\r\n3 January - British arrest and intern Mohandas Gandhi and Vallabhbhai Patel.\r\nFebruary - Terrorism in Bengal.\r\n', '#A6A6A6\r\n 	  '),
(1933, 'January - Extensive prosecutions of Communists for treason.[1]\r\nIndian National Congress meeting at Calcutta prevented by the police.[2]\r\n1 May - Gandhi released\r\n', '#B2B2B2\r\n 	  '),
(1934, '15 January - There is an 8.4 earthquake in India and Nepal in which more than 10,000 people die.\r\n7 April - Mahatma Gandhi suspended his campaign of civil disobedience.\r\n', '#BFBFBF'),
(1935, 'Earthquake destroyed Quetta.\r\n2 August - Government of India Bill, 1935, became law; it provided for development of a popular constitution\r\n', '#CCCCCC'),
(1936, '3 March - Legislative Assembly passed a motion to terminate the Ottawa trade agreement.\r\n8 June - All India Radio was founded.\r\n15-18 October - Religious riots in Bombay.\r\n', '#D9D9D9'),
(1937, 'Provincial autonomy begins with Congress winning power in many states.\r\n20 February - Completion of election to legislative assemblies.[1]\r\n1 April - Provincial autonomy began; Burma and Aden are separated from India\r\n', '#E6E6E6\r\n 	  '),
(1938, 'Minor engagements on the North West Frontier throughout the year.\r\nDecember - Announcement that the Ottawa trade agreeement would not be continued after 31 March 1939.\r\n', '#808080'),
(1939, 'World War II breaks out in 1939 and political dead lock in India.\r\n', '#404040'),
(1940, 'The Muslim League demanded a separate homeland for the Indian Muslims openly for the first time at its annual session held in Lahore.\r\n19 November - The Central Legislative Assembly rejects the Finance Bill.\r\n\r\n', '#0D0D0D\r\n 	  '),
(1941, '28 January - A customs union is established with French India\r\n', '#1A1A1A\r\n 	  '),
(1942, 'March - Freedom fighter Jawaharlal Nehru''s daughter Indira marries a Parsi lawyer and freedom fighter, Feroze Gandhi against her father''s wishes.\r\nThe Cripps mission''s proposals are rejected by Congress\r\n', '#262626\r\n 	  '),
(1943, 'Bengal famine of 1943\r\n10 February - 3 March - Mohandas Gandhi maintains a hunger strike to protest his imprisonment.\r\n5 December - The Japanese attack the Port of Kolkata\r\n', '#333333\r\n 	  '),
(1944, 'March to June - Operation U-Go; Japanese defeated in Manipur.[1]\r\n8 March - Battle of Imphal begins\r\n20 March – Battle of Sangshak begins\r\n', '#404040\r\n 	  '),
(1945, '18 August - Subhas Chandra Bose, one of Indian Freedom movement leaders, allegedly dies in a plane crash in Taiwan.\r\n20 September - Mohandas Gandhi and Jawaharlal Nehru demand that British troops leave India.\r\n', '#4C4C4C\r\n 	  '),
(1946, 'January - Royal Air Force Mutiny of 1946 of British and Indian air force units\r\n11 February - I.N.A. trial demonstrations in Calcutta, several killed\r\n12 February - Hartal in Calcutta over the killing of demonstrators the previous day\r\n', '#595959'),
(1947, '15 March - Hindus and Muslims clash in Punjab.\r\n17 May - Tripura is officially ceded to India after 200 years of independent rule.\r\n7 August - The Bombay Municipal Corporation formally takes over the Bombay Electric Supply and Transport (BEST).\r\n', '#666666'),
(1948, '30 January - Assassination of Mohandas Karamchand Gandhi The spiritual leader of India Mahatma Gandhi is assassinated by Nathuram Godse.\r\n15 February - Junagadh and Manavadar (princely state) Rescinds accession to Pakistan, accedes to India.\r\n', '#737373'),
(1949, '1 January - After eight months of fighting between the Indian forces and the Pakistan Army agreed to a ceasefire, ordered by the United Nations Security Council, takes effect in Kashmir region.\r\n1 April - The Reserve Bank of India is established.\r\n', '#808080\r\n 	  '),
(1950, '25 January – Election Commission is established.\r\n26 January – The Constitution comes into force making India a republic, the day is observed as Republic Day ever since and declares Kashmir and Jammu into the Indian state of Jammu and Kashmir, \r\n', '#8C8C8C'),
(1951, '18 June – First Amendment of the Constitution of India says "state can make special provisions for advancement of any backward class"\r\n5 November – Central Railway is formed by the merger of several government-owned railways.\r\n\r\n', '#999999\r\n 	  '),
(1952, '17 April – Membership of the first lok sabha starts.\r\n13 May – Jawaharlal Nehru forms his first government.\r\n15 May – G.V. Mavlankar handles the charge as Lok Sabha Speaker.\r\n', '#A6A6A6\r\n 	  '),
(1953, '15 June – Indian Airlines created.\r\nAir India nationalised.\r\nGovernment of India sets up first backward classes commission headed by Kaka Kalelkar.\r\n', '#B2B2B2\r\n 	  '),
(1954, '22 March – Jayendra Saraswathi becomes the 70th Shankaracharya of Kanchi.\r\n5 July – The Andhra Pradesh High Court is established.\r\n6 November – Bombay Electricity Board is formed.\r\n', '#BFBFBF\r\n 	  '),
(1955, 'The Imperial Bank of India, the oldest (est. 1921) and the largest commercial bank of the Indian subcontinent, was transformed into the State Bank of India.\r\nThe Hindu Marriage Act enacted\r\n', '#CCCCCC\r\n 	  '),
(1956, '8 March- M. Ananthasayanam Ayyangar handles the charge as Lok Sabha Speaker.\r\n20 March- Sardar Hukam Singh handles the charge as Lok Sabha Deputy Speaker.\r\n14 October – Dr. B. R. Ambedkar, Indian Untouchable leader, converts to Buddhism along with 385,000 followers. See Neo-Buddhism.\r\n', '#D9D9D9'),
(1957, 'India passes a bill making Kashmir under its control as part of the Union.\r\n5 April – First elected government of Kerala. Communist Party of India won the elections and E. M. S. Namboodiripad became the first chief minister of united Kerala.\r\n', '#E6E6E6\r\n 	  '),
(1958, '18 to 20 May – 16th Session of Indian Labour Congress held at New Delhi\r\n11 September – The Armed Forces (Special Powers) Act is passed by the Parliament.\r\n', '#333333'),
(1959, '17 March – Tenzin Gyatso, the 14th Dalai Lama, flees Tibet and travels to India.\r\nSeptember – Doordarshan-India''s national state-owned broadcaster established.\r\nBajaj Auto obtains license from Government of India to manufacture two- and three-wheelers in India.\r\n', '#404040'),
(1960, '1 May - Gujarat State and Maharashtra State are formed from the State of Bombay as laid down by the States Reorganisation Act.\r\n', '#0D0D0D\r\n 	  '),
(1961, '1 November - The Hungry generation Movement is launched in Calcutta.\r\n17 December - India occupies Goa.\r\n', '#1A1A1A\r\n 	  '),
(1962, '3 April - Jawaharlal Nehru is elected de facto Prime Minister of India.\r\n6 May - India defeats the Philippines in the Eastern Zone final of 1962 Davis Cup at New Delhi\r\n', '#262626\r\n 	  '),
(1963, 'Supreme Court of India mandates that reservation should not exceed 50% for any institution.\r\nHazratbal disappearance episode\r\n', '#333333'),
(1964, '27 May - Prime Minister Jawaharlal Nehru dies after a five-month illness; he is succeeded by Lal Bahadur Shastri.\r\nThe Vishva Hindu Parishad is founded.\r\nHazratbal disappearance episode\r\n', '#404040'),
(1965, '26 January - Hindi becomes the official language of India.\r\n26 January - Anti-Hindi agitations break out in India because of which Hindi does not get "National Language" status and remains one of the 23 Official Languages of India.\r\n', '#4C4C4C'),
(1966, '3 January - Prime Minister of India Lal Bahadur Shastri and President of Pakistan Ayub Khan sign a Soviet-mediated peace pact in Tashkent, Uzbek S.S.R.\r\n11 January - Prime Minister Shastri dies of heart attack in Tashkent.\r\n', '#595959'),
(1967, '6 May - Zakir Hussain is the first Muslim to become president of India.\r\n27 May - Naxalite Guerrilla War Beginning with a peasant uprising in the town of Naxalbari, this Marxist/Maoist rebellion sputters on in the Indian countryside. \r\n', '#666666'),
(1968, 'February-The Beatles, Mia Farrow, and several other celebrities visit the ashram of Maharishi Mahesh Yogi in Rishikesh, India\r\n', '#737373'),
(1969, '18 September Start of the 1969 Gujarat riots\r\n', '#808080'),
(1970, '7 September - Maharashtra Pollution Control Board is established under the provisions of Maharashtra Prevention of Water Pollution Act, 1969.\r\nBajaj Auto rolls out its 100,000th vehicle.\r\n', '#8C8C8C'),
(1971, '25 January - Himachal Pradesh becomes the 18th Indian state and East Punjab is reduced to its current form as Doaba.\r\n19 April - The provisional government of Bangladesh exiled flees to West Bengal.\r\n', '#999999\r\n 	  '),
(1972, '21 January - Manipur gets statehood.\r\n19 March - India and Bangladesh sign a friendship treaty, after the withdrawal of the Indian troops\r\n', '#A6A6A6\r\n 	  '),
(1973, '1 April - Government campaign to save the tiger from extinction.\r\n1 November - Karnataka State is formed.\r\n', '#B2B2B2\r\n 	  '),
(1974, 'January to May smallpox epidemic\r\n18 May - Under project Smiling Buddha, India successfully detonates its second nuclear weapon near the Pakistani border, the first time in the country openly becomes the sixth nation to do so.\r\n', '#BFBFBF'),
(1975, '19 April - The first Indian satellite, Aryabhata, goes into Earth''s orbit.\r\n16 May - Sikkim annexed to India after a deposing the monarchy.\r\n', '#CCCCCC\r\n 	  '),
(1976, 'The son of then-Prime Minister Indira Gandhi, Sanjay Gandhi, is largely blamed for what turned out to be a failed program.', '#D9D9D9'),
(1977, 'March - The first non-Congress government sweeps to power following Indira Gandhi''s defeat at the general elections. Morarji Desai becomes prime minister.\r\n3 March - Nehru Planetarium commissioned.\r\n', '#E6E6E6\r\n 	  '),
(1978, '1 January - Air India Flight 855, a Boeing 747 passenger jet, crashes into the Arabian Sea after takeoff near Bombay, killing all 213 on board.\r\n\r\n', '#999999'),
(1979, '31 January - The police under direction of Jyoti Basu, Chief Minister of Communist Party of India (Marxist)-led government of West Bengal, surrounds and opens fire on unarmed refugee settlement of Morichjhapi island in Sunderbans, West Bengal. Hundreds killed but government officially accepts 36 deaths.\r\n', '#666666'),
(1980, '1 January – Dr. Leo Rebello becomes the Director of Natural Health Centre, Bombay.\r\n', '#0D0D0D\r\n 	  '),
(1981, 'July - About 308 people die in Bangalore after drinking illicit liquor (see 1981 Karnataka liquor deaths).\r\nArasan Ganesan Polytechnic is founded in Sivakasi, Tamilnadu. It is a Government aided co-educational technical institute.\r\n', '#1A1A1A'),
(1982, 'April - INSAT-1A launched; deactivated in September.\r\nJuly - NABARD establishment\r\n', '#262626'),
(1983, 'February - Bandit queen Phoolan Devi surrenders.\r\n18 February - Nellie massacre over 2,000 people, mostly Bangladeshi Muslims, were massacred during the Assam agitation.\r\n', '#333333'),
(1984, '5 March - Prime Minister of India Indira Gandhi orders Operation Blue Star.\r\n2 April - Squadron Leader Rakesh Sharma is launched into space, aboard the Soyuz T-11.\r\n', '#404040'),
(1985, '23 June - Air India Flight 182, a Boeing 747, blows up 31,000 feet (9,500 m) above the Atlantic Ocean, south of Ireland, killing all 329 aboard.\r\nThe Narcotic Drugs and Psychotropic Substances Act is passed by Parliament.\r\n', '#4C4C4C'),
(1986, '1 April - VSNL incorporated under the Indian Companies Act, 1956.\r\n30 April - Operation Black Thunder conducted to flush out remainin\r\n', '#595959'),
(1987, '1 April - VSNL incorporated under the Indian Companies Act, 1956.\r\n30 April - Operation Black Thunder conducted to flush out remainin\r\n', '#666666'),
(1988, 'The National Consumer Disputes Redressal Commission is set up under the Consumer Protection Act of 1986.\r\n1988 Bihar earthquake\r\n', '#737373'),
(1989, '14 February – Union Carbide agrees to pay USD $470 million to the Indian government for damages it caused in the 1984 Bhopal Disaster.\r\n2 December – V.P. Singh becomes the Prime Minister of India after Lok Sabha elections.\r\n', '#808080'),
(1990, 'January - An insurgency breaks out in Kashmir Valley, inflaming tensions with Pakistan. New Delhi dissolves the state assembly and imposes direct rule.\r\nMarch - The last Indian troops are withdrawn from Sri Lanka.\r\n', '#8C8C8C'),
(1991, '21 May - Assassination of Rajiv Gandhi Former Prime Minister Rajiv Gandhi is assassinated by a LTTE Suicide Bomber in Sriperumbudur near Chennai in Tamil Nadu during the election campaign.\r\n', '#999999\r\n 	  '),
(1992, '1 February - Chief Judicial Magistrate of Bhopal Court declares Warren Anderson, ex-CEO of Union Carbide, a fugitive under Indian law for failing to appear in the Bhopal Disaster case, and orders the Indian government to press for an extradition from the United States.\r\n\r\n', '#A6A6A6'),
(1993, '9 March - The All Parties Hurriyat Conference is formed in Kashmir.\r\n12 March - A series of bomb blasts, thought to be planted by Muslim underworld figures, rock the country''s commercial capital of Bombay, killing some 260 people. (See 1993 Mumbai bombings.)\r\n', '#B2B2B2\r\n 	  '),
(1994, '26 January - India rolls out the short-range Prithvi missile at Republic Day Parade in New Delhi.\r\n20 May - Sushmita Sen was crowned Miss Universe 1994 in Manila, Philippines .\r\n19 November - Aishwarya Rai was crowned Miss World 1994 in Sun City, South Africa .\r\n', '#BFBFBF\r\n 	  '),
(1995, '5 March - Delhi Metro Rail Corporation Limited founded.[1]\r\n21 September - Reports of the Hindu milk miracle surface.\r\n', '#CCCCCC\r\n 	  '),
(1996, 'January — A major corruption scandal erupts involving allegations that many senior politicians and civil servants have received bribes from prominent businessman Surendra Jain.\r\n', '#D9D9D9\r\n 	  '),
(1997, '7 February - An alliance of Sikh and Hindu nationalist parties wins a resounding victory over the Congress in state assembly elections in Punjab.\r\n28 February - The government is strengthened by a daring, market friendly budget.\r\n', '#E6E6E6'),
(1998, '1 January – The Election Commission announces 16 February as the starting date of the general elections.\r\n11 January – Sonia Gandhi launches her election campaign at Sriperumbudur, where her husband was assassinated.\r\n', '#404040'),
(1999, '12 February - The chief minister of Orissa, Janaki Ballabh Patnaik, resigns after pressure within and outside his Congress Party over recent mob attacks on Christians in the state. On 15 February Giridhar Gomango is named to succeed him.\r\n', '#595959'),
(2000, '3 January - Prime Minister Atal Bihari Vajpayee accuses Pakistan of being behind the hijacking of an Indian plane and urges that Pakistan be declared a terrorist state.\r\n', '#0D0D0D\r\n 	  '),
(2001, '1 January - Calcutta officially becomes Kolkata, reverting to its precolonial name.\r\n1 January Dr. Leo Rebello''s Encyclopedia of Letters Pen Power and All India Letter Writers Association is entered as a World Record in the Limca Book of Records.\r\n', '#1A1A1A\r\n 	  '),
(2002, '9 January – The government announces that it is laying landmines along the entire length of its 2,800-km border with Pakistan.\r\n', '#262626'),
(2003, '26 January - The president of Iran, Mohammad Khatami, is the guest at the Republic Day celebration.\r\n5–9 February - Aero-India show is held in Bangalore.\r\n', '#333333'),
(2004, '17 January - The national executive of the Bharatiya Janata Party (BJP) meets at Hyderabad.\r\n17 January - P.A. Sangma quits the Nationalist Congress Party and decides to ally with the ruling National Democratic Alliance.\r\n', '#404040'),
(2005, '10 January – The Delhi High Court says that a "high claim ratio" cannot be grounds to turn down medical insurance contract renewal requests. The court said that medical policies were liable to be renewed on the same terms and conditions as the old ones. ', '#4C4C4C'),
(2006, '2 January – Rajnath Singh assumes office as Bharatiya Janata Party (BJP) chief.\r\n7–9 January – Pravasi Bharatiya Divas is organized in Hyderabad.\r\n', '#595959'),
(2007, '10 January – India launches four satellites at a time with their PSLV-C7 rocket, including the SRE-1 test article, which will return to Earth in a test for a future Indian manned spaceflight program\r\n', '#666666'),
(2008, '2 February - The activists of Maharashtra Navnirman Sena (MNS) try to disrupt a press conference of Samajwadi Party leader Amar Singh in Mumbai.\r\n', '#737373'),
(2009, '1 January – 2009 Guwahati bombings Five persons, including a boy and a woman, were killed and about 50 injured in serial bomb blasts in Guwahati, Assam.[1]\r\n', '#808080'),
(2010, '2 January - First three Uttar Pradesh rail accidents Three train accidents occur in Uttar Pradesh amid thick fog. Ten people died in the accidents and 45 others were injured.\r\n\r\n', '#8C8C8C'),
(2011, 'Former Telecom Minister A.Raja sent to Tihar Jail in 2G spectrum scam.\r\nBombay High Court upholds death penalty for Ajmal Kasab\r\n', '#999999\r\n 	  '),
(2012, '3 January President inaugurates new SHAR Mission Control Centre.\r\n9 January 10th Pravasi Bharatiya Divas kicks off in Jaipur. Chief guest – kamala Prasad Bisseasar,Prime Minister of Trinidad and Tobago\r\n', '#A6A6A6\r\n 	  '),
(2013, '3 January – 7 January 100th Indian Science Congress at Kolkata\r\n6 January India–Pakistan border incidents begin\r\n\r\n', '#B2B2B2\r\n 	  ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
