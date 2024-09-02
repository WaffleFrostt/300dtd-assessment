-- Adminer 4.8.4 MySQL 8.0.39-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `folders`;
CREATE TABLE `folders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `folders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `folders` (`id`, `name`, `user_id`) VALUES
(4,	'Secret Notes',	4),
(6,	'Shopping Lists',	4),
(7,	'Misc',	4),
(9,	'Accounts',	4),
(11,	'English',	4),
(12,	'Target Info',	6),
(17,	'List',	7);

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `folder_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `folder_id` (`folder_id`),
  CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`folder_id`) REFERENCES `folders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `notes` (`id`, `title`, `description`, `content`, `folder_id`, `user_id`) VALUES
(8,	'Nuclear Launch Codes',	'Better to have it and not need it, than need it and not have it.',	'1234',	4,	0),
(9,	'Hardware 14/7',	'My shopping list for the hardware store this weekend.',	'1 Trowel\r\n3 Bags of soil\r\n1 Oil canister\r\n2 Microfiber cloths\r\n1 Canister of lighter fluid\r\n3 French Hens',	6,	0),
(10,	'Lorem Ipsum',	'Lots of Lorem Ipsum.',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consequat mi quis lorem lobortis congue. Aenean consequat ante a faucibus fermentum. Nulla tristique scelerisque leo ut gravida. Aliquam pharetra nec diam non rhoncus. Ut eu augue nisl. \r\n\r\nPhasellus euismod, est nec condimentum ornare, nulla erat viverra leo, non posuere est risus sed purus. Pellentesque dictum nibh in mauris varius, nec placerat libero pulvinar. Nunc semper venenatis mi, nec vestibulum est. \r\n\r\nMaecenas pharetra tellus sit amet ligula ultrices, sit amet feugiat odio rhoncus. Curabitur in tristique quam. Quisque pulvinar ex est, quis efficitur libero finibus non. Sed vel dolor rutrum, egestas lectus non, luctus sapien.\r\n\r\nMaecenas semper eleifend odio, vitae accumsan dolor convallis sit amet. Ut mollis accumsan ligula, vel feugiat risus dictum et. Quisque neque neque, blandit sit amet neque vel, mattis ornare mi. Fusce in ipsum in justo posuere aliquet sed vel ex. Nulla euismod massa lacus, nec ullamcorper orci sodales et. Donec consequat vel augue vitae bibendum. Vivamus finibus lacus magna, in congue nisi facilisis sed. Donec tincidunt dolor quis arcu sodales, efficitur rutrum dolor auctor. Vivamus feugiat felis sed fringilla luctus. Aliquam volutpat nulla a lobortis finibus. Nulla lectus elit, mollis ac nibh ut, convallis facilisis felis. In et dui et tellus accumsan pharetra. Pellentesque sed nisl eu quam sollicitudin maximus.\r\n\r\nPhasellus sodales sem justo, non feugiat velit euismod ac. In feugiat orci justo, eget sodales enim laoreet at. Aliquam erat volutpat. Donec pretium arcu erat, in dapibus enim faucibus eu. Etiam tempor semper velit in mollis. Vestibulum mattis augue nibh, vitae efficitur ligula finibus id. Etiam non felis gravida, consequat nisl ac, maximus dolor. Ut pretium et diam vitae rutrum. Nunc hendrerit dignissim mauris, nec vulputate libero. Etiam ac dignissim augue. Sed mollis est orci, id faucibus erat accumsan ut. Donec vestibulum fringilla vestibulum. Etiam sed posuere metus.\r\n\r\nAenean fringilla maximus rhoncus. Proin quis scelerisque ligula. Cras placerat ex sit amet sem sagittis aliquet. Vivamus a rutrum ipsum, a ornare tellus. Morbi erat ante, blandit id massa in, dapibus ullamcorper ante. Aenean ut ligula id sem sagittis lobortis et a odio. In eget tristique elit, quis varius urna. Vivamus lobortis rhoncus feugiat. Proin eros massa, lobortis sit amet facilisis eget, pulvinar a velit. Curabitur a ultrices enim. Aenean mi arcu, sodales imperdiet nibh sit amet, imperdiet consequat magna. Aenean ullamcorper commodo purus nec condimentum. Mauris mattis euismod feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam efficitur, est quis cursus aliquet, elit sem vestibulum neque, sed tempor est justo ac elit. Nulla sollicitudin arcu a elit suscipit, quis pellentesque justo lobortis.\r\n\r\nVestibulum vel convallis felis. Morbi finibus, dui quis ultrices placerat, enim dolor ultrices ligula, et eleifend mauris arcu ac eros. Pellentesque sed felis nec sapien porttitor eleifend et ac nisl. Nam eu laoreet nisl. Donec iaculis mauris eget gravida maximus. Vivamus mi sapien, finibus vel vehicula quis, maximus eget tellus. Phasellus feugiat, felis sed faucibus rhoncus, velit erat condimentum turpis, et commodo sapien justo ac enim. Fusce blandit faucibus nunc, eu hendrerit ligula imperdiet vel. Aliquam suscipit pulvinar ligula ut venenatis. Integer at odio rhoncus, mollis odio mattis, dapibus sem. Etiam interdum sagittis consectetur. Nunc at dignissim eros, at varius eros. Aenean ut aliquet lorem. Mauris magna odio, semper in lacinia ut, venenatis et ligula. Suspendisse maximus, ex a lobortis facilisis, diam nisl volutpat justo, sed tempor turpis erat sed dolor. ',	7,	0),
(19,	'Accounts for Login',	'Login\'s for various users',	'Jayden:\r\n    username: jmace\r\n    password: jmaster\r\n\r\nJames Bond\r\n    username: 007\r\n    password: SPECTRE',	9,	4),
(23,	'Words',	'Many words',	'Okay I lied, here\'s five.',	11,	4),
(25,	'Hitlist',	'Who to take out',	'I\'m not talking to dinner if you catch my drift...\r\n',	12,	6),
(26,	'Assignment',	'English Critical Text ',	'From a Marxist view, the issue in *Children of Men* is a class conflict. The 2006 film *Children of Men* by Alfonso Cuarón, based on the P.D. James novel of the same name, presents a dystopian future where humanity faces extinction due to complete global infertility. A popular interpretation of the film suggests that the core issue is class conflict. This essay answers the question of whether or not class conflict is the primary issue in *Children of Men* when analysed from a Marxist perspective. Sources include Mark Fisher\'s *Capitalist Realism*, the essay \"Marxism and Semiotics in *Children of Men*\", Mark Hogan\'s essay on *Children of Men*, and J. Jesse Ramirez\'s \"Children of Men, or, Europe: The Finite Task\". This analysis argues that class conflict is the most significant underlying theme.\r\n\r\nHowever, before delving into why class conflict is the primary issue, it is important to consider alternative perspectives. Some might argue that the film\'s depiction of authoritarianism, cultural sterility, or the erosion of public spaces could be seen as the central issues. By examining these aspects in relation to class conflict, this essay will demonstrate why class struggle is the overarching theme that connects and explains these other issues.\r\n\r\nA major part of *Children of Men* that highlights class conflict is the stark socioeconomic disparities depicted in the movie. A notable scene is when Theo visits Nigel at Battersea Power Station, which was turned into a private collection and government building. Mark Fisher describes this scene and notes that \"cultural treasures - Michelangelo\'s David, Picasso\'s Guernica, Pink Floyd\'s inflatable pig - are preserved in a building that is itself a refurbished heritage artefact.\" The preservation of this wealth despite the widespread decay of society as a whole highlights significant class disparities. The elite or bourgeoisie maintain wealth and cultural artefacts while the rest of society deals with degradation. This reflects capitalisms tendency for the bourgeoisie to keep wealth in the hands of the few at the expense of the vast majority of the population, that being the working class or proletariat.\r\n\r\nBut does Fisher\'s interpretation fully capture the complexities of this scene? While Fisher is correct in identifying the hoarding of wealth by the elite, it could also be argued that the preservation of cultural artefacts in such a setting symbolises a deeper cultural sterility. The question then arises: is it the wealth disparity alone that is significant, or does the scene also critique the way in which culture itself has been commodified and stripped of meaning in this dystopian world? This dual interpretation invites us to consider how class conflict intersects with cultural decay, ultimately reinforcing the centrality of class struggle.\r\n\r\nFisher then writes about the film and its downplay of obvious overt totalitarian rule, instead showing the viewer that an authoritarian regime can exist in a democratic-style system. \"For all that we know, the authoritarian measures that are everywhere in place could have been implemented within a political structure that remains, notionally, democratic.\" This quote matches a Marxist critique of the state as a method of class control. The police and the military function entirely to maintain order while suppressing any dissent within the lower class. Marx states that the state will be used to enforce class hierarchy in favour of the bourgeoisie, and this is prevalent in *Children of Men*.\r\n\r\nWhile Fisher’s observation is discerning, it is very much worth looking at whether or not the authoritarianism depicted in the film is simply just a tool of class oppression, or if it is part of a much larger critique on the modern state as a whole. Could the film be suggesting the idea that authoritarian even in a democratic state is an inevitable consequence of capitalism? Engaging with Fisher’s ideas in that way helps deepen our understanding on how *Children of Men* not only critiques just class structures, but the political systems that uphold them. \r\n\r\nPublic spaces are abandoned, and the destruction is celebrated by the neoliberals responsible. This highlights more class conflict in the film. In *Children of Men*, the sites of public spaces holding communal interaction and resistance are neglected. The division in the classes is shown by this neglect as the privileged in society retreat into their privatised spaces away from the lower classes, leaving them to fend for themselves as the public crumbles. Fisher states, \"Neoliberals, the capitalist realists par excellence, have celebrated the destruction of public space but, contrary to their official hopes, there is no withering away of the state in *Children of Men*, only a stripping back of the state to its core military and police functions.\" This quote shows how these very neoliberal policies push for these social inequalities, ultimately leading to the deterioration of public goods and services, which affect almost solely the working class.\r\n\r\nAgain, while Fisher’s critique of neoliberalism is compelling, it is important to ask whether the destruction of public spaces represents more than just class conflict. Could it also symbolize the erosion of collective identity and solidarity? In Marxist terms, public spaces are arenas where class consciousness can develop, and their destruction could be seen as an attempt to prevent the working class from organising and resisting their exploitation. Thus, the film’s depiction of abandoned public spaces can be viewed as both a symptom of class conflict and a strategy to perpetuate it.\r\n\r\nFisher also covers cultural sterility in his analysis. He suggests that the film’s depiction of the sterile and unproductive future is a reflection on the failure of cultural innovation under capitalism. From a Marxist lens, the sterility can also be analysed in the sphere of class conflict. The ruling classes are in control of cultural production, which they then commodify and as a result prevent true innovation. This cycle benefits the ruling class, all while leaving the working class culturally impoverished. Fisher’s reference to T.S. Eliot\'s ideas about the new and the canonical shows the relationship between tradition and innovation. Within capitalism, any cultural production is commodified by the ruling class with their say on what is produced, and what is preserved. The stagnation shown in *Children of Men* is a reflection on capitalism and its ability to prevent cultural innovation through the forces of the market.\r\n\r\nHere, it is important to clearly flag that this interpretation of cultural sterility is my own, building on Fisher’s analysis. While Fisher points out the cultural stagnation in the film, I argue that this sterility is intrinsically linked to class conflict. The ruling class’s control over cultural production not only stifles innovation but also reinforces their dominance over the working class, who are left with no means of expressing or developing their own culture.\r\n\r\nThe film’s sense of despair and the “weak messianic hope” Fisher describes is very much a reflection of class struggle. The hopelessness for future generations is felt immensely by the working class. The ruling class is able to consolidate their wealth and power to live out their life in a dreamlike daze separate from the rest of the world. This is exemplified by Theo’s friends\' response to the future despair and impending doom in *Children of Men*: \"I try not to think about it.\" This hopelessness helps show us how the two classes are divided in their experience and crisis response. The ruling class makes all the calls, and often it is at the working class’s expense. The hopelessness in *Children of Men* clearly shows how class conflict is the primary root cause perpetuating the pain.\r\n\r\nOn top of Fisher’s analysis, Robert Page’s essay \"Marxism and Semiotics in *Children of Men*\" covers the authoritarian state as a means of controlling class and wielding class conflict. His text comments on the state transitioning to militant control, which matches the Marxist critique of the state serving the ruling class by any means necessary, in this case, through force. *Children of Men* has the state portrayed in a way that uses authoritarian means against the lower classes to maintain power and control within the upper class. This control is necessary for maintaining these class hierarchies when inequality is so prevalent. The ruling class will wage war on the lower classes as soon as they are threatened, and the state’s military and police are portrayed to do exactly that.\r\n\r\nWhile Page’s analysis matches that of the Marxist view of the state being a tool of class oppression, it is important that we consider if the film also critiques the complicity of the working class in their ow oppression. Is it possible that *Children of Men* is not only just about the authoritarianism of the ruling class, but also about the failure from the working class to resist or simply recognise their oppression? This interpretation makes us consider the role of ideology in the maintenance of class hierarchies. \r\n\r\nMark Hogan’s essay \"Children of Men\" covers class conflict through the film\'s portrayal of immigration and exclusion. Hogan makes the argument that the treatment of the “fugies” in *Children of Men* is a symbol of the larger marginalisation of the working class as a whole. The film’s depiction of the “fugies” as an oppressed and dehumanised group is created in parallel to the ruling class’s view of the working class. That being the expendability and controllability of the class. The “fugies” are confined to ghettos, victims of violence, and denied basic human rights.\r\n\r\nHogan’s interpretation highlights an important aspect of the film, but it is worth questioning whether the “fugies” are merely a stand-in for the working class or if they also represent a broader critique of how capitalist societies treat marginalized groups. By examining the film’s portrayal of the “fugies,” we can see how *Children of Men* critiques the intersections of class, race, and immigration, ultimately reinforcing the centrality of class conflict in the film.\r\n\r\nThe essay \"Children of Men, or, Europe: The Finite Task\" by J. Jesse Ramirez ties the film and its themes to the European context. Social and economic instability in *Children of Men* makes class conflict a driving factor. The rise in authoritarianism, with its primary function being to control class, is felt mostly by the lower class. In an unstable world like that shown in *Children of Men*, the elites and bourgeoisie must push and wage war on the working class for a continued existence. Ramirez covers this and ties it to the European experience, arguing that the protection of working-class rights in a time of crisis is necessary. Without protection, those in power will undoubtedly consolidate wealth and control, with class conflict as a key issue in this consolidation.\r\n\r\nRamirez’s analysis of the European context adds depth to our understanding of the film’s critique of class conflict, but it also raises the question of whether *Children of Men* is primarily a European or global critique. By examining how the film’s themes resonate beyond Europe, we can explore how class conflict is not just a European issue but a universal one, further reinforcing its significance in the film.\r\n\r\nIn conclusion, *Children of Men* may address other themes, but those are inseparable from the class conflict at the centre of the narrative. The most prominent issue in *Children of Men* from a Marxist analysis is the issue of class conflict. The film shows this through its portrayal of drastic class inequalities and its depiction of a stark dystopian future brought on by class conflict.',	11,	4),
(33,	'Note',	'NOTES',	'blah blah ejbjnejbejdej',	7,	4);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `forename` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `forename`, `surname`, `username`, `password`) VALUES
(4,	'Tom',	'Meldrum',	'tmel',	'$2y$10$K2yR0bfjQ6./JHUwyy/4t.CWt/qKTJ7jRMy43CTbLhul2aTnoqGQS'),
(5,	'Big',	'Man',	'jmace',	'$2y$10$cwFH2J53JpACcOnKwUxiE.xT1LDpO8KkNHEM7sPh6uabbVyJDBhve'),
(6,	'James',	'Bond',	'007',	'$2y$10$dj3jgwh5d1ZA6c1KbplT3uRohA2m/opORYONtMvt5loVxjO2W.Ywm'),
(7,	'Jim',	'Smith',	'jsmith',	'$2y$10$ryMkubXRW4CxhnJiDmYgM.ORfmYJ3J9WgApD6SEvvZjqXlYsCUk2G'),
(8,	'Almond milk',	'Smith',	'almondmilksmith',	'$2y$10$Uj4SlK0E/XLg5eSIFrxH2ORwcG.wC0tze.9cJ9ZurhM6gvZ/oHqni');

-- 2024-09-02 23:24:54
