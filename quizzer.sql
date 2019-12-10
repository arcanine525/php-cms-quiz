-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 10, 2019 lúc 03:23 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quizzer`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(6, 'Animal'),
(7, 'Other'),
(8, 'Fruits'),
(9, 'New');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `levels`
--

INSERT INTO `levels` (`id`, `name`) VALUES
(4, 'Hard'),
(5, 'Medium'),
(6, 'Easy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `choice4` text NOT NULL,
  `choice5` text NOT NULL,
  `answer` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `quizzes`
--

INSERT INTO `quizzes` (`id`, `title`, `content`, `choice1`, `choice2`, `choice3`, `choice4`, `choice5`, `answer`, `category`, `level`) VALUES
(9, 'Test1', 'Some snakes lay eggs, but _______ give birth to live offspring.', 'other', 'the other ', 'others', 'the others', 'All answers are correct', 3, 6, 4),
(10, 'Test1', 'I can remember _________ you about this three times already.', 'telling', 'to tell', 'told', 'tell', 'All answers are correct', 1, 6, 4),
(11, 'Test1', 'Donâ€™t worry about the party. Iâ€™ll _________ to it.', 'offer', 'care ', 'see ', 'devote', 'All answers are correct', 3, 6, 4),
(12, 'Test1', '_____________ have made communication faster and easier through the use of e-mail and the Internet is', 'It is that computers ', 'That computers ', 'Computers that ', 'That it is computers', 'All answers are correct', 2, 6, 4),
(13, 'Test1', '_________ you should do now is to take a long holiday', 'That ', 'Which ', 'What ', 'It', 'All answers are correct', 1, 6, 4),
(14, 'Test1', '____________ you to be offered that job, would you have to move to another city?', 'Provided that ', 'Should ', 'Were', 'Had', 'All answers are correct', 3, 6, 4),
(15, 'Test1', 'I ___________Katie, an old friend of mine, on the way home from work yesterday.', 'came into ', 'ran into ', 'call off ', 'get into', 'All answers are correct', 2, 6, 4),
(16, 'Test1', 'Tom was wearing a suit, ___________ was unsuitable for an informal gathering.', 'and ', 'it ', 'which ', 'that', 'All answers are correct', 3, 6, 4),
(17, 'Test1', 'Anne: \"Make yourself at home\". -- John : \"._________________.\"', 'Yes Can I help you', 'Not at all Dont mention it', 'Thanks Same to you', 'Thats very kind Thank you', 'All answers are correct', 4, 6, 4),
(18, 'Test1', 'My car would not start ____________ Jennyâ€™s started immediately.', 'whereas ', 'though ', 'however ', 'nevertheless', 'All answers are correct', 1, 6, 4),
(19, 'Test2', 'You work very hard. Iâ€™m sure youâ€™ll have no _______ the exam .', 'difficulties of passing ', 'difficulty passing', 'difficulties to pass ', 'difficulty to pass', 'All answers are correct', 2, 6, 5),
(20, 'Test2', '_____________________ director must have surprised all the staff.', 'You nominated ', 'Your being nominated', 'You have been nominated ', 'Your nominating', 'All answers are correct', 2, 6, 5),
(21, 'Test2', 'This is such an important question that we canâ€™t _________________thinking it over', 'point ', 'use ', 'help ', 'stand', 'All answers are correct', 3, 6, 5),
(22, 'Test2', '________________ the Christmas shopping season begins.', 'That is after Thanksgiving ', 'After Thanksgiving it is', 'It is after Thanksgiving that ', 'It is Thanksgiving that', 'All answers are correct', 3, 6, 5),
(23, 'Test2', 'My new glasses cost me _______ the last pair I bought last month.', 'more than three times ', 'three times as much as', 'more three times than ', 'as much three times as', 'All answers are correct', 2, 6, 5),
(24, 'Test2', 'You will find their house __________ you take a good street map with you', 'as long as ', 'even if ', 'unless ', 'otherwise', 'All answers are correct', 1, 6, 5),
(25, 'Test2', 'By the end of last March, I _____ English for five years.', 'was studying ', 'would be studying', 'has been studying ', 'had been studying', 'All answers are correct', 4, 6, 5),
(26, 'Test2', 'Youâ€™d better stop spending money, _______ you will end up in debt', 'unless ', 'otherwise ', 'if ', 'in case', 'All answers are correct', 2, 6, 5),
(27, 'Test2', 'The people in my class, _____ are very friendly.', 'most of international students ', 'the most international students', 'almost international students ', 'mostly international students', 'All answers are correct', 4, 6, 5),
(28, 'Test2', 'He is determined to finish the job _____________ long it takes', 'whenever ', 'whatever ', 'no matter ', 'however', 'All answers are correct', 4, 6, 5),
(29, 'Test3', 'She _____ for lost time by studying at weekends.', 'got up ', 'set about ', 'made up ', 'put in', 'All answers are correct', 3, 6, 6),
(30, 'Test3', 'What is your opinion about Bobâ€™s condition? - I recommend ___________ as much as possible.', 'him rest ', 'that he rests ', 'that he rest ', 'him to rest', 'All answers are correct', 3, 6, 6),
(35, 'Test3', 'The concert didnâ€™t come ______ our expectations.', 'up to ', 'up against ', 'round', 'up with', 'All answers are correct', 1, 6, 6),
(36, 'Test3', 'Excuse me, is anybody sitting here? -â€œ_________________________â€.', 'No, thanks. ', 'Yes, I am so glad', 'Sorry, the seat is taken ', 'You are welcome.', 'All answers are correct', 3, 6, 6),
(37, 'Test3', 'My uncle _______ golf when he retired from work.', 'took on ', 'took up ', 'took over ', 'took after', 'All answers are correct', 2, 6, 6),
(38, 'Test3', 'By the end of next month, we _______ our English course.', 'have completed ', 'will be completed', 'will have completed ', 'completed', 'All answers are correct', 3, 6, 6),
(39, 'Test4', 'You should be responsible for_______ you have done.', 'that ', 'why ', 'which ', 'what', 'All answers are correct', 4, 7, 4),
(40, 'Test4', '. _______________ in the US in 1977, this festival is celebrated with feasts and songs in the home for seven days and nights.\r\n', 'Africa introduced ', 'Africa introducing', 'Introducing from Africa ', 'Introduced from Africa', 'All answers are correct', 4, 7, 4),
(41, 'Test4', '______________ she spoke did I realized that she was English.', 'No sooner ', 'No longer ', 'Not until ', 'Hardly', 'All answers are correct', 3, 7, 4),
(42, 'Test4', 'Im not opposed to ______ with us, as long as its only for a few days.', 'them to stay ', 'them staying ', 'their stay ', 'their staying', 'All answers are correct', 4, 7, 4),
(45, 'Test3', '______________________, we tried our best to complete it.', 'As though the homework was difficult ', 'Thanks to the difficult homework', 'Difficult as the homework was ', 'Despite the homework was difficult', 'All answers are correct', 3, 6, 6),
(46, 'Test3', 'Alan and Sue ___________ an argument. They are not speaking to each other.', 'must have ', 'must have had ', 'might have ', 'might had', 'All answers are correct', 2, 6, 6),
(47, 'Test3', 'Only when the ground is kept moist, _________________ germinate.', 'will grass seeds ', 'grass seeds will ', 'does grass seeds ', 'grass seeds does', 'All answers are correct', 3, 6, 6),
(48, 'Test3', 'She would rather I ________ harder now.', 'study ', 'studying ', 'am studying ', 'studied', 'All answers are correct', 4, 6, 6),
(49, 'Test4', 'Henry_______________ a rich man today if he had been more careful in the past.', 'will have been ', 'will be ', 'would have been ', 'would be', 'All answers are correct', 4, 7, 4),
(50, 'Test4', '_________ do women do all the housework with their hands.', 'No sooner ', 'Not until ', 'No more ', 'No longer', 'All answers are correct', 4, 7, 4),
(51, 'Test4', 'Please forgive me, I dont ___________ to upset you.', 'think', 'mind ', 'mean ', 'suppose', 'All answers are correct', 3, 7, 4),
(52, 'Test4', '_______ we have finished the course, we should start doing more revision work .', 'For now ', 'Now that ', 'Ever since ', 'By now', 'All answers are correct', 2, 7, 4),
(53, 'Test4', ' _________ we heard at the conference was encouraging.', 'That ', 'Where ', 'When ', 'What', 'All answers are correct', 4, 7, 4),
(54, 'Test4', 'Id _________ you didnâ€™t leave just at the moment.', 'rather ', 'like ', 'better ', 'love', 'All answers are correct', 1, 7, 4),
(55, 'Test5', 'Forget it. It is no use crying over spilt _________.', 'water ', 'juice ', 'milk ', 'lemonade', 'All answers are correct', 3, 7, 5),
(56, 'Test5', 'Smith knew that he could make a success of the little weekly newspaper in the long _______.', 'time ', 'run ', 'distance ', 'step', 'All answers are correct', 2, 7, 5),
(57, 'Test5', '________ that she could not say anything.', 'Upset was she ', 'However upset was she', 'So upset was she that ', 'So upset she was', 'All answers are correct', 3, 7, 5),
(58, 'Test5', 'I ________ my best suit at the party last night - everyone else was very casually dressed.', 'neednt wear ', 'mustnt wear', 'neednt have worn ', 'mustnt have worn', 'All answers are correct', 3, 7, 5),
(59, 'Test5', 'By far, _________________________ of Saudi Arabia is oil.', 'it is the most important export ', 'the most important export', 'the most important export is ', 'that it the most important export', 'All answers are correct', 2, 7, 5),
(60, 'Test5', 'Who did you invite to dinner last night? â€“ No one _______ than Frank and his family.', 'another ', 'the other ', 'other ', 'the others', 'All answers are correct', 3, 7, 5),
(61, 'Test5', 'The man who lives opposite us sometimes comes __________ for a cup of coffee.', 'over ', 'off ', 'on ', 'to', 'All answers are correct', 1, 7, 5),
(62, 'Test5', 'I have three brothers, _____________ are businessmen.', 'that all of them ', 'who they all ', 'all of whom ', 'who all of them', 'All answers are correct', 3, 7, 5),
(63, 'Test5', 'It was _________________ that we spent the whole day at the beach.', 'so nice a weather ', 'such nice weather', 'such nice a weather ', 'so a nice weather', 'All answers are correct', 2, 7, 5),
(64, 'Test5', 'â€œ What are you going to buy in this store?â€_ â€œ Nothing, _________ want is too much expensiveâ€', 'That I ', 'What I ', 'That what I ', 'What do I', 'All answers are correct', 2, 7, 4),
(65, 'Test6', 'There s no ______ fixing that toy. He ll just break it again.', 'point ', 'worth ', 'harm ', 'good', 'All answers are correct', 1, 7, 6),
(66, 'Test6', 'It is important that he ____________ with Dr. Baker immediately.', 'will speak ', 'speaks ', 'speak ', 'speaks', 'All answers are correct', 3, 7, 6),
(67, 'Test6', 'I was just walking along the street when I __________ someone I hadnt seen for years.', 'came across ', 'came over ', 'came by ', 'came off', 'All answers are correct', 1, 7, 6),
(68, 'Test6', 'â€œWhich of the two boys is granted a scholarship? â€œ - â€œ_________ of them is .â€', 'All ', 'None ', 'Neither ', 'Both', 'All answers are correct', 3, 7, 6),
(69, 'Test6', 'I cannot stay up late at night. I prefer ___________ early.', 'turning on ', 'turning up ', 'turning in ', 'turning out', 'All answers are correct', 3, 7, 6),
(70, 'Test6', 'The classroom has not electric fan, ___________ is quite different from that in the advertisement.', 'what ', 'who ', 'which ', 'that', 'All answers are correct', 3, 7, 6),
(71, 'Test6', 'She is so absent-minded.. She _______________ her cell phone three times.', 'lost ', 'was losing ', 'has lost ', 'had lost', 'All answers are correct', 3, 7, 6),
(72, 'Test6', 'He always did well at school, despite ___________his early education disrupted by illness.', 'being ', 'having ', 'putting ', 'sending', 'All answers are correct', 2, 7, 6),
(73, 'Test6', 'Tom has never been to Madrid, but he talks as if he ______ there himself.', 'is ', 'was ', 'were ', 'has been', 'All answers are correct', 4, 7, 6),
(74, 'Test6', '___________________about genetic diseases has increased is welcome news.', 'Scientific knowledge ', 'It was scientific knowledge', 'Though scientific knowledge ', 'That scientific knowledge', 'All answers are correct', 4, 7, 6),
(75, 'Test7', 'You looked tired. _____________________ hard all day?', 'Were you working ', 'Have you been working ', 'Do you work ', 'Are you working', 'All answers are correct', 2, 8, 4),
(76, 'Test7', '______________ that the company has shown rapid growth in the last two ears.', 'It is reported ', 'They are reported ', 'The report was ', 'Reporting', 'All answers are correct', 1, 8, 4),
(77, 'Test7', 'Doing a lot of homework may ___________you to pass the exam.', 'make it easier for ', 'make easier for ', 'be easy for ', 'make easy that', 'All answers are correct', 1, 8, 4),
(78, 'Test7', 'If you need any support, you can _________ me to back you up.', 'believe on ', 'rely on ', 'depend on ', 'put on', 'All answers are correct', 2, 8, 4),
(79, 'Test7', 'It is time the government _________measures to reduce the current high unemployment rate.', 'takes ', 'take ', 'took ', 'must take', 'All answers are correct', 3, 8, 4),
(80, 'Test7', '_________________ nowadays buys goods on the Internet', 'Many people ', 'Almost people ', 'Most people ', 'Many a person', 'All answers are correct', 4, 8, 4),
(81, 'Test7', 'On being told about her sack ____________________.', 'her boss felt sorry for Mary ', 'Mary was shocked', 'Mary s face turned pale ', 'Mary s reaction was normal', 'All answers are correct', 2, 8, 4),
(82, 'Test7', 'They live on a busy street. _______________ a lot of noise and pollution from traffic.', 'It must be ', 'It must have ', 'There must have ', 'There must be', 'All answers are correct', 4, 8, 4),
(83, 'Test7', 'It is essential that Alice __________ Tom of the meeting tomorrow.', 'remind ', 'reminds ', 'will remind ', 'must remind', 'All answers are correct', 1, 8, 4),
(84, 'Test7', '____________ seemed a miracle to us.', 'His recover after so soon ', 'That he recovered so soon', 'His being recovered so soon ', 'When he had recovered so soon', 'All answers are correct', 3, 8, 4),
(85, 'Test8', 'Remember to ____________ the campfire before you leave.', 'put off ', 'put down ', 'put out ', 'put up', 'All answers are correct', 3, 8, 5),
(86, 'Test8', '._________ you visit him, give him my best wishes.', 'Could ', 'Would ', 'Should ', 'Might', 'All answers are correct', 3, 8, 5),
(87, 'Test8', '___________ more help, I can call my neighbor.', 'Should I need ', 'I have needed ', 'I should need ', 'Needed', 'All answers are correct', 1, 8, 5),
(88, 'Test8', 'The house plants need_________ before noon.', 'watering ', 'to water ', 'be watered ', 'being watered', 'All answers are correct', 1, 8, 5),
(89, 'Test8', 'I have never been windsurfing, but Id love to have________ at it.', 'a trial ', 'a look ', 'a taste ', 'a go', 'All answers are correct', 1, 8, 5),
(90, 'Test8', '______________you have watched, which film impresses you most ?', 'All of films ', 'All of the films ', 'Of films all ', 'Of all the films', 'All answers are correct', 4, 8, 5),
(91, 'Test8', 'I am _________tired to think about that problem at the moment.', 'nearly ', 'simply ', 'much more ', 'far too', 'All answers are correct', 4, 8, 5),
(92, 'Test8', 'The teacher as well as all the students ______ very excited about going camping next week.', 'was ', 'were ', 'is ', 'has been', 'All answers are correct', 2, 8, 5),
(93, 'Test8', '______he does sometimes interests me a lot.', 'When ', 'Why ', 'What ', 'How', 'All answers are correct', 3, 8, 5),
(94, 'Test8', '______________ of the students in my class could solve the problem yesterday.', 'Not much ', 'No ', 'None ', 'Neither', 'All answers are correct', 3, 8, 5),
(95, 'Test9', 'People who work as hard as Bill Gates are few and far ________.', 'away ', 'between ', 'from ', 'off', 'All answers are correct', 2, 8, 6),
(96, 'Test9', 'John was praised for his bravery, _______ his colleagues were criticized for their cowardice.', 'though ', 'whereas ', 'however ', 'therefore', 'All answers are correct', 2, 8, 6),
(97, 'Test9', 'We insist that a meeting________ as soon as possible.', 'be held ', 'is held ', 'were held ', 'will be held', 'All answers are correct', 1, 8, 6),
(98, 'Test9', '_____________ I m concerned , it s quite all right for you to leave early.', 'As long as ', 'As far as ', 'As well as ', 'As much as', 'All answers are correct', 2, 8, 6),
(99, 'Test9', 'They are good friends, but in terms of sports, they are worlds ___________.', 'away ', 'separate ', 'apart ', 'different', 'All answers are correct', 3, 8, 6),
(100, 'Test9', 'Her husband treated her badly. Im surprised she ___________________ it for so long.', 'put up with ', 'put off ', 'put through ', 'put up', 'All answers are correct', 1, 8, 6),
(101, 'Test9', 'Our school doesnt break ______ until the end of July.', 'out ', 'in ', 'off ', 'up', 'All answers are correct', 3, 8, 6),
(102, 'Test9', 'AIDS is ______________ that scientists are doing research to find a cure.', 'a so serious disease ', 'so a serious diseases ', 'so serious a disease ', 'a such serious disease', 'All answers are correct', 3, 8, 6),
(103, 'Test9', '_______________ trying to make him change his mind.', 'Its no point ', 'Its no hope ', 'Its useless ', 'Its no use', 'All answers are correct', 4, 8, 6),
(104, 'Test9', 'I think you should choose ________ color. This one is too dark.', 'other ', 'another ', 'the other ', 'others', 'All answers are correct', 2, 8, 6),
(105, 'Test', 'Demo quetion', '1', '2', '3', '4', '5', 5, 6, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `result`
--

INSERT INTO `result` (`id`, `user_id`, `score`, `time`) VALUES
(1, 7, 0, '2019-12-09'),
(2, 7, 4, '2019-12-09'),
(3, 7, 0, '2019-12-09'),
(4, 7, 0, '2019-12-09'),
(5, 8, 0, '2019-12-09'),
(6, 8, 0, '2019-12-10'),
(7, 8, 0, '2019-12-10'),
(8, 8, 0, '2019-12-10'),
(9, 8, 0, '2019-12-10'),
(10, 8, 0, '2019-12-10'),
(11, 8, 0, '2019-12-10'),
(12, 8, 0, '2019-12-10'),
(13, 8, 2, '2019-12-10'),
(14, 8, 0, '2019-12-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `privileges` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `surname`, `email`, `privileges`) VALUES
(7, 'arcanine1450222@gmail.com', 'b62cb40f4d9e78a4437c5227c3948eeb', 'LÃª Hiá»‡p', 'Hiá»‡p', 'arcanine1450222@gmail.com', 1),
(8, 'test', 'b62cb40f4d9e78a4437c5227c3948eeb', 'test', 'demo', 'test@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
