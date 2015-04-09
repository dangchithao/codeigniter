-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2012 at 12:53 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vitbay`
--

-- --------------------------------------------------------

--
-- Table structure for table `ao`
--

CREATE TABLE IF NOT EXISTS `ao` (
  `id` int(4) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `mau` varchar(10) NOT NULL,
  `soluong` int(4) NOT NULL,
  `size` varchar(3) NOT NULL,
  `gioitinh` varchar(4) NOT NULL,
  `hangsx` varchar(50) NOT NULL,
  `gianhap` int(10) NOT NULL,
  `giaxuat` int(10) NOT NULL,
  `lo` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) NOT NULL,
  `thongtin` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `authors_saches`
--

CREATE TABLE IF NOT EXISTS `authors_saches` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `sach_id` int(4) NOT NULL,
  `author_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `date`, `title`, `content`) VALUES
(27, 'nhocyeuhoc', 'nhocyeuhoc@hotmail.com', '', 'title', 'database lam sao day lam sao day ???'),
(28, 'Dang Chi Thao', 'nhocyeuhoc@gmail.com', '', '', '....Lòng can đảm ấy là sức mạnh của con...'),
(29, 'haha', 'haha@gmail.com', '', '', 'Cái quý nhất của con người là đời sống. Đời người chỉ sống có một lần. Phải sống sao cho khỏi xót xa ân hận vì những năm tháng đã sống hoài, sống phí, cho khỏi hỗ thẹn vì dĩ vãng ti tiện và hèn đớn của mình, để đến khi nhắm mắt xuôi tay có thể nói rằng: tất cả đời ta, tất cả sức ta, ta đã hiến dâng cho sự nghiệp cao đẹp nhất trên đời, sự nghiệp đấu tranh giải phóng loài người. '),
(30, 'hoho', 'hoho@gmail.com', '', '', 'Theo truyền thuyết, có một loài chim chỉ hót lên một lần trong cả đời nó. Tiếng hót đó ngọt ngào hơn bất cứ sinh vật nào trên trái đất này. Ngay khi vừa rời tổ, loài chim ấy đi tìm ngay một thứ cây có những cành đầy gai nhọn và tiếp tục bay mãi, không chịu ngơi nghỉ, cho đến khi tìm được mới thôi. Sau đó nó cất tiếng hót trên những cành cây hoang dại, rồi lao thẳng vào cây gai dài nhất và nhọn nhất. Cây gai xuyên thủng qua ngực. Giữa cơn hấp hối, một tiếng hót vút cao, thánh thót hơn cả tiếng hót của sơn ca, hoạ mi. Tiếng hót tuyệt vời đánh đổi bằng cả cuộc sống. Trời đất ngừng đọng lại để lắng nghe, còn Thượng đế trên cao thì mỉm cười. Bởi rằng sự tuyệt vời chỉ có được bằng niềm đau vô tận ấy...'),
(31, 'abc', 'de', '', '', 'asfasfasfasfasfsafasfas'),
(32, 'fasfsafsa', 'dg', 'Tuesday, 17 July 2012, 11:01:50 AM', '', 'm, con hãy trung thực với lương tâm và tình cảm của mình,con hãy sống cuộc đời của con, và hãy nhớ rằng con chỉ có một cuộc đời mà thôi. Từ nay trở đi, con sẽ phải chịu trách nhiệm về bản thân mình và về những ngừoi con yêu. Con hãy sồng có nhân cách, con hãy yêu đi'),
(33, 'fasfsafsa', 'dg', 'Tuesday, 17 July 2012, 11:01:50 AM', '', 'm, con hãy trung thực với lương tâm và tình cảm của mình,con hãy sống cuộc đời của con, và hãy nhớ rằng con chỉ có một cuộc đời mà thôi. Từ nay trở đi, con sẽ phải chịu trách nhiệm về bản thân mình và về những ngừoi con yêu. Con hãy sồng có nhân cách, con hãy yêu đi'),
(34, 'nhocyeuhoc', 'm sao day lam sao day ???', 'Tuesday, 17 July 2012, 11:17:01 AM', '', 'Đây là cuốn sách rất hữu ích, NHOC đã đọc cuốn này khi bắt đầu nghiên cứu lập trình C. Cách đây 6 năm (năm 2006), Nhoc từng cẩn thận gõ từng dòng code trong cuốn này vào Borland C++ 3.1 để bắt đầu một con đường nghiên cứu lập trình chính thức'),
(35, 'Dang Chi Thao', 'dangchithao@gmail.com', 'Tuesday, 17 July 2012, 11:34:41 AM', '', 'lam sao de ho tro go duoc unikey nhi ???'),
(36, 'Dang Chi Thao', 'dangchithao@gmail.com', 'Tuesday, 17 July 2012, 11:38:01 AM', '', 'lam sao de ho tro go duoc unikey nhi ???'),
(37, 'Dang Chi Thao', 'dangchithao@gmail.com', 'Tuesday, 17 July 2012, 11:39:05 AM', '', 'lam sao de ho tro go duoc unikey nhi ???'),
(38, 'Dang Chi Thao', 'dangchithao@gmail.com', 'Tuesday, 17 July 2012, 11:39:13 AM', '', 'lam sao de ho tro go duoc unikey nhi ???'),
(39, 'jonh conner', 'conner@kehuydiet.film', 'Tuesday, 17 July 2012, 11:45:02 AM', '', 'lam sao bay gio nhi?'),
(40, 'ffasfaf', 'fasfasfafaa', 'Tuesday, 17 July 2012, 11:55:12 AM', '', 'fasfasfsafasfaf'),
(41, 'jonh conner', '', 'Tuesday, 17 July 2012, 11:56:12 AM', '', 'dafasfasfasfsa'),
(42, 'nhocyeuhoc', 'nhocyeuhoc@hotmail.com', 'Tuesday, 17 July 2012, 12:00:24 PM', '', 'afsfhjkaflsafaslfnlkasflka\n'),
(43, 'villa', 'villa@gmail.com', 'Tuesday, 17 July 2012, 13:27:44 PM', '', 'until you.....................:)'),
(44, 'jonh conner', 'john@yahoo.com', 'Tuesday, 17 July 2012, 13:41:00 PM', '', 'lam sao bay h nhi>???'),
(45, 'gsdgsdgs', 'gsdgsdgsdg', 'Tuesday, 17 July 2012, 13:47:21 PM', '', 'gsgsgsgsgs'),
(46, 'fffffffffff', 'aaaaaaaaaa', 'Tuesday, 17 July 2012, 13:49:05 PM', '', 'bvbbbbbbbbbbbbb'),
(47, 'jonh conner', 'dsadas', 'Tuesday, 17 July 2012, 13:55:08 PM', '', 'asdasdasdasdadadas'),
(48, 'sadsada', 'safasfasfsa', 'Tuesday, 17 July 2012, 13:59:43 PM', '', 'fsafasfasfsaf'),
(49, 'asdadada', 'adsadsadas', 'Tuesday, 17 July 2012, 14:06:15 PM', '', 'dadasdsadsadadadasda'),
(50, 'nhocyeuhoc', 'nhocthamlam@facebook.com', 'Wednesday, 18 July 2012, 09:16:36 AM', '', 'Khuyen mai cuc lon 100% :)'),
(51, 'Dang Chi Thao', 'dangchithao@gmail.com', 'Wednesday, 18 July 2012, 09:17:52 AM', '', 'Khuyen mai cuc hot 100% :)'),
(52, 'nhocyeuhoc', 'ta', 'Thursday, 19 July 2012, 09:22:51 AM', '', 'tao tuong tao :)'),
(53, 'nhocyeuhoc', 'ta', 'Thursday, 19 July 2012, 09:22:51 AM', '', 'tao tuong tao :)'),
(54, 'ff', 'fs', 'Thursday, 19 July 2012, 09:23:06 AM', '', 'sfasfa'),
(55, 'ff', 'fs', 'Thursday, 19 July 2012, 09:23:06 AM', '', 'sfasfa'),
(56, 'Dang Chi Thao', 'dangchithao@gmail.com', 'Thursday, 19 July 2012, 09:24:15 AM', '', 'exe............'),
(57, '', '', 'Thursday, 19 July 2012, 09:25:18 AM', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments_saches`
--

CREATE TABLE IF NOT EXISTS `comments_saches` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `sach_id` int(4) NOT NULL,
  `comment_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `comments_saches`
--

INSERT INTO `comments_saches` (`id`, `sach_id`, `comment_id`) VALUES
(1, 1, 27),
(2, 4, 28),
(3, 3, 29),
(4, 2, 28),
(5, 3, 28),
(6, 3, 30),
(7, 1, 34),
(8, 1, 35),
(9, 1, 36),
(10, 1, 37),
(11, 1, 38),
(12, 1, 39),
(13, 2, 42),
(14, 2, 43),
(15, 2, 44),
(16, 2, 45),
(17, 2, 46),
(18, 2, 47),
(19, 2, 48),
(20, 3, 49),
(21, 5, 50),
(22, 14, 51),
(23, 3, 52),
(24, 3, 52),
(25, 3, 54),
(26, 3, 54),
(27, 5, 56),
(28, 5, 57);

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE IF NOT EXISTS `example` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `num` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=790 ;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `num`) VALUES
(682, 222),
(683, 222),
(684, 222),
(685, 222),
(686, 222),
(687, 222),
(688, 222),
(689, 222),
(690, 222),
(691, 222),
(692, 222),
(693, 222),
(694, 222),
(695, 222),
(696, 222),
(697, 222),
(698, 222),
(699, 222),
(700, 222),
(701, 222),
(702, 222),
(703, 222),
(704, 222),
(705, 222),
(706, 222),
(707, 222),
(708, 222),
(709, 222),
(710, 222),
(711, 222),
(712, 222),
(713, 222),
(714, 222),
(715, 222),
(716, 222),
(717, 222),
(718, 222),
(719, 222),
(720, 222),
(721, 222),
(722, 222),
(723, 222),
(724, 222),
(725, 222),
(726, 222),
(727, 222),
(728, 222),
(729, 222),
(730, 222),
(731, 222),
(732, 222),
(733, 222),
(734, 222),
(735, 222),
(736, 222),
(737, 222),
(738, 222),
(739, 222),
(740, 222),
(741, 222),
(742, 222),
(743, 222),
(744, 222),
(745, 222),
(746, 222),
(747, 222),
(748, 222),
(749, 222),
(750, 222),
(751, 222),
(752, 222),
(753, 222),
(754, 222),
(755, 222),
(756, 222),
(757, 222),
(758, 222),
(759, 222),
(760, 222),
(761, 222),
(762, 222),
(763, 222),
(764, 222),
(765, 222),
(766, 222),
(767, 222),
(768, 222),
(769, 222),
(770, 222),
(771, 222),
(772, 222),
(773, 222),
(774, 222),
(775, 222),
(776, 222),
(777, 222),
(778, 222),
(779, 222),
(780, 222),
(781, 222),
(782, 222),
(783, 222),
(784, 222),
(785, 222),
(786, 222),
(787, 222),
(788, 222),
(789, 222);

-- --------------------------------------------------------

--
-- Table structure for table `lsach`
--

CREATE TABLE IF NOT EXISTS `lsach` (
  `maloai` char(7) NOT NULL,
  `tenloai` varchar(100) NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lsach`
--

INSERT INTO `lsach` (`maloai`, `tenloai`) VALUES
('MS01', 'Tin học'),
('MS02', 'Văn Học'),
('MS03', 'Kinh Tế'),
('MS04', 'Thương Mại'),
('MS05', 'Tiếng Anh'),
('MS06', 'Truyện Tranh'),
('MS07', 'Tình Cảm');

-- --------------------------------------------------------

--
-- Table structure for table `saches`
--

CREATE TABLE IF NOT EXISTS `saches` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `tensach` varchar(100) NOT NULL,
  `soluong` int(7) NOT NULL,
  `gia` int(10) NOT NULL,
  `giaban` int(10) NOT NULL,
  `tacgia` varchar(100) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `nxb` varchar(100) NOT NULL,
  `namxb` date NOT NULL,
  `loaisach` varchar(100) NOT NULL,
  `danhcho` varchar(50) NOT NULL,
  `ngaynhap` date NOT NULL,
  `mota` varchar(500) NOT NULL,
  `totalcmt` int(5) NOT NULL,
  `status` int(1) NOT NULL,
  `flag` int(1) NOT NULL,
  `matacgia` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `saches`
--

INSERT INTO `saches` (`id`, `tensach`, `soluong`, `gia`, `giaban`, `tacgia`, `picture`, `nxb`, `namxb`, `loaisach`, `danhcho`, `ngaynhap`, `mota`, `totalcmt`, `status`, `flag`, `matacgia`) VALUES
(1, 'Kỹ Thuật Lập trình C', 10, 30000, 25000, 'Phạm Văn Ất', 'ky-thuat-lap-trinh-c.jpg', 'Giao Thông Vận Tải', '2012-06-18', 'tinhoc', 'Lập Trình', '2012-07-02', 'Đây là cuốn sách rất hữu ích, NHOC đã đọc cuốn này khi bắt đầu nghiên cứu lập trình C. Cách đây 6 năm (năm 2006), Nhoc từng cẩn thận gõ từng dòng code trong cuốn này vào Borland C++ 3.1 để bắt đầu một con đường nghiên cứu lập trình chính thức.', 31, 1, 0, 0),
(2, 'Lập Trình PHP', 10, 50000, 42000, 'Phạm Hữu Khang', 'lap-trinh-php.jpeg', 'Phương Đông', '2012-06-08', 'tinhoc', 'Lập Trình', '2011-07-12', 'ASP, PHP là những công cụ giúp bạn lập trình web. Trong đó, PHP là công cụ miễn phí và được khá nhiều người sử dụng bởi tính linh hoạt cao, khả năng hỗ trợ mã nguồn mạnh và dễ triển khai trên nhiều nền tảng khác nhau. Nếu bạn quan tâm đến PHP - MySQL lập trình cơ sở dữ liệu nói chung và ngôn ngữ PHP nói riêng thì quyển e-book này sẽ rất hữu ích dành cho bạn.', 31, 1, 1, 4),
(3, 'Phân Tích Thiết Kế HTTT Trong Lập Trình', 20, 60000, 50000, 'Phạm Hữu Khang', 'phan-tich-thiet-ke-he-thong-trong-lap-trinh.jpg', 'Thống Kê', '2012-06-03', 'tinhoc', 'Lập Trình', '2011-12-30', '', 31, 1, 1, 4),
(4, 'Adobe Photoshop CS', 5, 70000, 62000, 'Nguyễn Văn Đăng', '', 'Thống kê', '2012-06-27', 'tinhoc', '', '2012-02-29', '', 31, 1, 1, 0),
(5, 'Chị Ơi Anh Yêu Em', 8, 50000, 0, 'Cusiu', '', 'Hà Nội', '2012-06-04', 'tinhcam', '', '2011-12-31', '', 31, 1, 1, 0),
(6, 'Thử Vai', 15, 100000, 96000, 'Ryu Murakami ', '', 'nhật bản', '2012-06-01', 'vanhoc', '', '2012-07-14', '', 31, 1, 0, 0),
(7, 'Mặt trời rực rỡ nhất ngày đông', 20, 100000, 0, 'Minh Hiểu Khuê', '', 'Trung Quốc', '2012-06-10', 'vanhoc', '', '2012-07-16', '', 0, 1, 0, 0),
(8, 'Chuyện thần thoại', 10, 100000, 0, 'Minh Hiểu Khuê', '', 'Trung Quốc', '2012-02-01', 'vanhoc', '', '2012-02-22', '', 31, 1, 1, 0),
(9, 'Thuỷ tinh trong suốt', 5, 100000, 0, 'Minh Hiểu Khuê', '', 'Trung Quốc', '2012-02-13', 'vanhoc', '', '2012-05-02', '', 0, 1, 0, 0),
(10, 'Kỹ thuật lập trình C căn bản & nâng cao', 4, 50000, 0, 'Phạm Văn Ất', 'ky-thuat-Lap-trinh-C-can-ban-va-nang-cao.jpg', 'GTVT', '2012-01-16', 'tinhoc', 'Lập Trình', '2012-07-06', ' Lập trình hướng đối tượng dựa trên việc tổ chức chương trình thành các lớp. Khác với hàm và thủ tục, lớp là một đơn vị bao gồm cả dữ liệu và các phương thức xử lý. Vì vậy lớp có thể mô tả các thực thể một cách chân thực, đầy đủ cả phần dữ liệu và yêu cầu quản lý. Tư tưởng lập trình hướng đối tượng được áp dụng cho hầu hết các ngôn ngữ mới chạy trên môi trường Windows như Microsoft Access, Visual Basic, Visual C. Vì vậy việc nghiên cứu phương pháp lập trình mới này là rất cần thiết đối với tất c', 31, 1, 0, 0),
(11, 'Tiếng Gọi Tình Yêu Giữa Lòng Thế Giới', 25, 100000, 0, 'Socrates In Love', '', 'nhật bản', '2012-02-06', 'vanhoc', '', '2012-02-14', '', 0, 1, 1, 0),
(12, 'Vocabulary', 10, 40000, 0, 'Thanh Phong', '', 'Giáo Dục', '2012-06-04', 'tienganh', '', '2012-02-05', '', 0, 1, 1, 0),
(13, 'Hiểu Kinh Tế Qua Một Bài Học', 10, 100000, 0, 'KHÁNH CHÂU', 'hieu-kinh-te-qua-mot-bai-hoc.jpg', 'Kinh tế', '2009-12-29', 'kinhte', '', '2012-01-09', '', 0, 1, 1, 0),
(14, 'Triệu Phú Ổ Chuột', 15, 75000, 0, 'Vikas Swarup', '', 'Văn Học', '2012-06-12', 'vanhoc', '', '2012-04-16', '', 1, 1, 0, 0),
(15, 'Lập trình căn bản JSP', 10, 75000, 50000, 'Phạm Hữu Khang', 'lap-trinh-can-ban-jsp.jpg', 'Thong Ke', '2011-07-21', 'tinhoc', 'Lập Trình', '2012-07-02', 'JSP (viết tắt của tiếng Anh JavaServer Pages) còn được biết đến với một cái tên khác là Java Scripting Preprocessor - tạm dịch là "Bộ tiền xử lý văn lệnh Java" - là một công nghệ Java cho phép các nhà phát triển tạo nội dung HTML, XML hay một số định dạng khác của trang web một cách năng động, trong khi hồi âm yêu cầu của trình khách. Công nghệ này cho phép người ta nhúng mã Java và một số hành động xử lý đã được định trước (pre-defined actions) vào trong nội dung tĩnh của trang.Cú pháp của JSP ', 31, 1, 0, 0),
(16, 'LẬP TRÌNH WEB BẰNG PHP 5.3 & CƠ SỞ DỮ LIỆU MYSQL 5.1 -  Tập 1', 25, 78000, 70000, 'Phạm Hữu Khang', 'lap-trinh-web-php5.3-mysql5.1.jpg', 'Lao động Xã hội ', '2012-07-09', 'tinhoc', 'Lập Trình', '2012-07-05', 'Tiếp theo tập 1, tập 2 của cuốn sách "Lập Trình Web Bằng PHP 5.3 Và Cơ Sở Dữ Liệu MySQL 5.1" bao gồm 10 chương và ứng dụng đính kèm lần lượt giới thiệu cùng bạn đọc các kiến thức liên quan đến Session, Cookie, giỏ hàng trực tuyến, tìm kiếm và phân trang dữ liệu, lập trình hướng đối tượng và sử dụng Zend Framework. ', 31, 1, 0, 0),
(17, 'Xây dựng ứng dụng web bằng PHP và MySQL', 10, 80000, 75000, 'Phạm Hữu Khang', 'xay-dung-ung-dung-web-php.jpg', 'Thong Ke', '2006-07-04', 'tinhoc', 'Lập Trình', '2012-07-16', 'Cuốn sách "Xây dựng và ứng dụng Web bằng PHP và MySQL" này được biên soạn nhằm giúp cho các bạn sinh viên, học sinh hay những người đang làm việc liên quan đến ứng dụng Web; đặc biệt những người phát triển ứng dụng thương mại điện tử có quy mô vừa và nhỏ có được tài liệu học tập, tham khảo, nghiên cứu và ứng dụng thực hành.Với 21 chương, trong đó có 4 chương xây dựng ứng dụng cụ thể, thống kê tất cả kiến thức MySQL và PHP vào một ứng dụng bán hàng qua mạng, giúp cho bạn đọc có một lượng kiến thứ', 0, 1, 0, 0),
(18, 'Lập trình Android', 10, 50000, 45000, 'Trương Thị Ngọc Phượng', 'lap-trinh-android.jpg', 'Thời Đại', '2011-12-12', 'tinhoc', 'Lập Trình', '2012-10-08', '', 31, 1, 0, 0),
(19, 'Ngôn ngữ lập trình Javascript', 10, 40000, 35000, 'Nguyễn Nam Thuận', 'lap-trinh-javascript.jpg', 'Thông Tin Truyền Thông', '2010-10-13', 'tinhoc', 'Lập Trình', '2012-10-02', '', 31, 1, 0, 0),
(20, '101 Thủ thuật bảo mật mạng máy tính', 5, 40000, 35000, 'Nguyễn Trung Kiên', 'sach_thuthuatmaytinh.jpeg', 'Thống kê', '2008-10-08', 'tinhoc', 'Thủ thuật máy tính', '2012-10-17', '', 31, 1, 0, 0),
(21, 'Sổ tay thực hành tin học văn phòng', 6, 40000, 37000, 'Nguyễn Đình Phúc', 'sach_tinhocvp.jpg', 'Thông Tin Truyền Thông', '2009-10-06', 'tinhoc', 'Tin học văn phòng', '2012-10-01', '', 0, 1, 0, 0),
(22, 'Sổ tay lập trình Java', 15, 60000, 50000, 'Trần Phú Tài', 'so-tay-tin-hoc-lap-trinh-java.jpg', 'Thống kê', '2010-10-05', 'tinhoc', 'Lập Trình', '2012-10-07', '', 31, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `token`) VALUES
(1, 'admin', 'admin', 'eccbc87e4b5ce2fe28308fd9f2a7baf3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
