-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2024 at 11:18 AM
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
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bill`
--

CREATE TABLE `tb_bill` (
  `id_bill` int NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `id_user` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_bill`
--

INSERT INTO `tb_bill` (`id_bill`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `booking_date`, `id_user`, `status`) VALUES
(1, 'Ta Cong Chien', 'sádafsdfasdfsd', '+84367733843', 'chinthuy2004@gmail.com', '2024-01-29', NULL, 1),
(2, 'Ta Cong Chien', 'sádafsdfasdfsd', '+84367733843', 'chinthuy2004@gmail.com', '2024-01-29', NULL, 1),
(3, 'Ta Cong Chien', 'sádafsdfasdfsd', '+84367733843', 'chinthuy2004@gmail.com', '2024-01-29', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bill_details`
--

CREATE TABLE `tb_bill_details` (
  `id` int NOT NULL,
  `idpro` int NOT NULL,
  `img` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `total` int NOT NULL,
  `soluong` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_bill_details`
--

INSERT INTO `tb_bill_details` (`id`, `idpro`, `img`, `name`, `price`, `total`, `soluong`, `idbill`) VALUES
(1, 88, '../Uploads/vay2.jpg', 'Shoes Luxury', 4000, 4000, 1, 1),
(2, 88, '../Uploads/vay2.jpg', 'Shoes Luxury', 4000, 8000, 2, 2),
(3, 88, '../Uploads/vay2.jpg', 'Shoes Luxury', 4000, 4000, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int NOT NULL,
  `name_category` varchar(255) NOT NULL,
  `date_add` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `name_category`, `date_add`, `img`) VALUES
(88, 'Shoes', '11:33:46pm 28/01/2024', 'shoes.jpg'),
(89, 'Skirt', '11:37:43pm 28/01/2024', 'dress.jpg'),
(90, 'Jewerly', '11:46:08pm 28/01/2024', 'nhanh.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_comments`
--

CREATE TABLE `tb_comments` (
  `id_comment` int NOT NULL,
  `content` text NOT NULL,
  `id_product` int NOT NULL,
  `id_user` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id_contact` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `contact_date` date NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id_contact`, `fullname`, `email`, `phone_number`, `address`, `title`, `content`, `contact_date`, `status`) VALUES
(1, 'Nguyễn Trung Xuyên', 'ntx01062004@gmail.com', '0359956926', 'Ba Vì - Hà Nội', 'Mua hàng', '??', '2024-01-01', 2),
(2, 'Nguyễn Thế Thành Đô', 'do1234@gmail.com', '6552365246', 'dfagbkdfg', 'bán hàng', 'sgfdfsgafdg', '2024-01-23', 2),
(3, 'Tạ Công Chiến', 'tacongchien003@gmail.com', '0367733843', 'Hà Nội', 'Mua hàng', 'Hello xin chào tạm biệt', '2024-01-09', 1),
(4, 'Ta Cong Chien', 'chinthuy2004@gmail.com', '+84367733843', 'sádafsdfasdfsd', 'sơ mi nam dài tay', 'dddddddd', '2024-01-29', 1),
(5, 'Ta Cong Chien', 'chinthuy2004@gmail.com', '+84367733843', 'sádafsdfasdfsd', 'sơ mi nam dài tay', 'ffffffffffffvvcbcvb', '2024-01-29', 2),
(6, 'Ta Cong Chien', 'tacongchien003@gmail.com', '+84367733843', 'sádafsdfasdfsd', 'sơ mi nam dài tay', 'dddd', '2024-01-29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_images_product`
--

CREATE TABLE `tb_images_product` (
  `id_image` int NOT NULL,
  `id_product` int NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_images_product`
--

INSERT INTO `tb_images_product` (`id_image`, `id_product`, `img`) VALUES
(8, 26, 'cap-ao-cuoi-trung-quoc-do-theu-rong-phung-1.webp'),
(9, 27, 'cap-ao-cuoi-trung-quoc-do-theu-rong-phung-1.webp'),
(11, 28, 'anhcuoi.jpg'),
(13, 59, 'cap-ao-cuoi-trung-quoc-do-theu-rong-phung-1.webp'),
(15, 60, 'anhcuoi.jpg'),
(16, 61, 'anhcuoi.jpg'),
(17, 27, 'anhcuoi.jpg'),
(23, 28, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(24, 59, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(25, 60, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(26, 61, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(28, 28, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(29, 59, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(30, 60, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(31, 61, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(33, 28, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(34, 59, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(35, 60, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(36, 61, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(37, 27, ''),
(40, 89, 'vay2.jpg'),
(41, 89, 'dress.jpg'),
(44, 90, 'vay2.jpg'),
(45, 90, 'dress.jpg'),
(46, 88, 'vay2.jpg'),
(47, 88, 'dress.jpg'),
(48, 91, 'vay2.jpg'),
(49, 91, 'dress.jpg'),
(50, 92, 'vay2.jpg'),
(51, 92, 'dress.jpg'),
(52, 93, 'vay2.jpg'),
(53, 93, 'dress.jpg'),
(54, 94, 'vay2.jpg'),
(55, 94, 'dress.jpg'),
(56, 88, 'vay2.jpg'),
(57, 88, ''),
(58, 89, ''),
(59, 90, ''),
(60, 91, ''),
(61, 92, ''),
(62, 93, ''),
(63, 94, ''),
(64, 27, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(65, 28, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(66, 59, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(67, 60, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg'),
(68, 61, 'https://camile.vn/wp-content/uploads/2023/10/MAY-COLLECTION-2023-2024-LOOK-8-Net-Dep-Loi-Cuon-Den-Tu-Su-Tinh-Te-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int NOT NULL,
  `tittle` text NOT NULL,
  `content` text NOT NULL,
  `date_post` date NOT NULL,
  `image_Url` text NOT NULL,
  `view` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `tittle`, `content`, `date_post`, `image_Url`, `view`) VALUES
(3, 'Làm sao để trở thành một thằng đần', '<p><a href=\"https://draft.blogger.com/blog/post/edit/8556663924593127761/8826866459527145919#\"><img src=\"https://blogger.googleusercontent.com/img/a/AVvXsEiEXyucNAP1ApkLJqtxWwB6QVNx29byDhooLtsbVjkpW-xqBhZCpncIiFGjuKFPW6jSW7ixICNnhMT8zTG8bsaooYtn-fvNXNYWkPh60cXjDuQmJmnEHjR99HtYUJxzDSjpbiWb_h7zw_yhle2rNpjg0DfKhiipx2u1iVyxBjDRy1_LeAvO0hrNVbpFGM74\" alt=\"\" width=\"240\" height=\"240\"></a></p><p><br>&nbsp;</p><p>&nbsp;</p><p><strong>Thời trang XTĐQL</strong> Shop là một hãng <strong>thời trang</strong> hàng đầu với tầm nhìn và đam mê sáng tạo trong việc đem đến cho khách hàng những trải nghiệm thời trang độc đáo và phong cách.Với sự kết hợp giữa thiết kế tinh tế,chất liệu chất lượng cao và công nghệ tiên tiến,chúng tôi tự hào là người đi đầu trong ngành công nghiệp thời trang.</p><p>Với những bộ sưu tập mới,<strong>XTDQL</strong> luôn mang đến những ý tưởng sáng tạo và không ngừng thử nghiệm để tạo ra những sản phầm độc đáo, phản ánh cá nhân và gu thẩm mỹ của từng khách hàng.Chúng tôi tin rằng mỗi chiếc áo,váy hay quần áo khác nhau có thể nói lên câu chuyện riêng của bạn và làm nổi bật cá nhân bạn trong đám đông.</p><p>Bên cạnh việc đó,việc tạo ra những sản phẩm thời trang&nbsp; xuất sắc , <strong>XTDQL </strong>cũng cam kết đối tác với các nhà cung cấp&nbsp; và xưởng sản xuất tuân thủ các tiêu chuẩn vào việc tạo ra một ngành công nghiệp thời trang bền vững và đảm bảo sự hài lòng của khách hàng.</p><p>&nbsp;</p><p><a href=\"https://draft.blogger.com/blog/post/edit/8556663924593127761/8826866459527145919#\"><img src=\"https://blogger.googleusercontent.com/img/a/AVvXsEhcG1aTvxuOYj2Wsv5VXdopiZIQD4bYC20GT3xtUOTpu_pEdTd1YfvWolyZEyCvc9BSBf1Nf9csLhcFX-jHZQJxgTvmb47ZxmpjBtgPcmQYJDZmygRFJDwUhPb9WFDnWpRodW-EcDp1XDHb7BLhg5WtyOra5-dbZTs-C7IAip60or1HFqU7S91cOE602qw4\" alt=\"\" width=\"320\" height=\"122\"></a></p><p><br><br>&nbsp;</p><p>&nbsp;</p><p>Với sự đa dạng về kiểu dáng,màu sắc và chất liệu<strong>, XTDQL</strong> tự tin rằng sẽ có những sản phẩm phù hợp với mọi cá nhân và dịp khác nhau.Từ những trang phục hàng ngày cho đến những bộ cánh sang trọng cho những buổi tiệc,<strong>XTDQL</strong> luôn mang đến sự tự tin và phong cách cho bạn.</p><p>&nbsp;Với XTĐQL ,thời trang không chỉ là quần áo mà còn là cách biểu đạt bản thân và điểm nhấn, là cách để thể hiện phong cách của mỗi người.Hãy cùng XTĐQL khám phá và truyền cảm hứng qua thế giới thời trang đa dạng và đầy sáng tạo!!!<br>Thời trang Việt Nam đang trải qua một giai đoạn phát triển vượt bậc, và sứ mệnh của nó là đưa cái đẹp văn hóa Việt ra khắp thế giới. Thông qua sự kết hợp tài năng sáng tạo của những nhà thiết kế, nghệ nhân và người làm trong ngành công nghiệp thời trang, chúng ta đã thành công trong việc tạo ra những bộ trang phục mang tính đặc trưng và sự độc đáo của Việt Nam.</p><p>Với tài nguyên văn hoá khổng lồ, những điểm nhấn về truyền thống và sự sáng tạo không giới hạn, thời trang Việt Nam đã trở thành một nguồn cảm hứng không thể bỏ qua trong giới mốt quốc tế. Bằng cách kết hợp những yếu tố truyền thống của Việt Nam với xu hướng thời trang hiện đại, chúng ta đã tạo ra những thiết kế độc đáo và đầy sức hút.</p><p><strong>&nbsp;Sứ mệnh đưa thời trang việt nam vươn ra thế giới</strong></p><p>Sứ mệnh của chúng ta không chỉ dừng lại ở việc giới thiệu những bộ trang phục đẹp mắt ra thế giới, mà còn tạo ra những giá trị bền vững. Chúng ta đề cao sự công bằng xã hội, quan tâm đến môi trường và đảm bảo mọi người tham gia vào quy trình sản xuất thời trang được đối xử công bằng và tôn trọng.</p><p>Với sứ mệnh này, thời trang Việt Nam đã thu hút sự chú ý và lòng tin của không chỉ người tiêu dùng quốc tế mà còn các nhà thiết kế và các nhãn hiệu danh tiếng. Những bộ trang phục của chúng ta đã xuất hiện trên sàn diễn quốc tế, trong các tạp chí thời trang hàng đầu và trở thành lựa chọn ưa thích của nhiều ngôi sao và nhân vật nổi tiếng.</p><p>Đưa thời trang Việt Nam ra thế giới không chỉ mang lại danh tiếng quốc tế cho đất nước mà còn là một cách để gìn giữ và phát triển văn hóa độc đáo của chúng ta. Đồng thời, nó cũng tạo điều kiện thuận lợi để giao lưu văn hoá, thúc đẩy sự đoàn kết và tăng cường quan hệ đối tác với các quốc gia khác.</p>', '2024-01-25', 'conbo.jpg', 0),
(8, 'Hãy là Wibu để được sống', '<p><a href=\"https://draft.blogger.com/blog/post/edit/8556663924593127761/8826866459527145919#\"><img src=\"https://blogger.googleusercontent.com/img/a/AVvXsEiEXyucNAP1ApkLJqtxWwB6QVNx29byDhooLtsbVjkpW-xqBhZCpncIiFGjuKFPW6jSW7ixICNnhMT8zTG8bsaooYtn-fvNXNYWkPh60cXjDuQmJmnEHjR99HtYUJxzDSjpbiWb_h7zw_yhle2rNpjg0DfKhiipx2u1iVyxBjDRy1_LeAvO0hrNVbpFGM74\" alt=\"\" width=\"240\" height=\"240\"></a></p><p><br>&nbsp;</p><p>&nbsp;</p><p><strong>Thời trang XTĐQL</strong> Shop là một hãng <strong>thời trang</strong> hàng đầu với tầm nhìn và đam mê sáng tạo trong việc đem đến cho khách hàng những trải nghiệm thời trang độc đáo và phong cách.Với sự kết hợp giữa thiết kế tinh tế,chất liệu chất lượng cao và công nghệ tiên tiến,chúng tôi tự hào là người đi đầu trong ngành công nghiệp thời trang.</p><p>Với những bộ sưu tập mới,<strong>XTDQL</strong> luôn mang đến những ý tưởng sáng tạo và không ngừng thử nghiệm để tạo ra những sản phầm độc đáo, phản ánh cá nhân và gu thẩm mỹ của từng khách hàng.Chúng tôi tin rằng mỗi chiếc áo,váy hay quần áo khác nhau có thể nói lên câu chuyện riêng của bạn và làm nổi bật cá nhân bạn trong đám đông.</p><p>Bên cạnh việc đó,việc tạo ra những sản phẩm thời trang&nbsp; xuất sắc , <strong>XTDQL </strong>cũng cam kết đối tác với các nhà cung cấp&nbsp; và xưởng sản xuất tuân thủ các tiêu chuẩn vào việc tạo ra một ngành công nghiệp thời trang bền vững và đảm bảo sự hài lòng của khách hàng.</p><p>&nbsp;</p><p><a href=\"https://draft.blogger.com/blog/post/edit/8556663924593127761/8826866459527145919#\"><img src=\"https://blogger.googleusercontent.com/img/a/AVvXsEhcG1aTvxuOYj2Wsv5VXdopiZIQD4bYC20GT3xtUOTpu_pEdTd1YfvWolyZEyCvc9BSBf1Nf9csLhcFX-jHZQJxgTvmb47ZxmpjBtgPcmQYJDZmygRFJDwUhPb9WFDnWpRodW-EcDp1XDHb7BLhg5WtyOra5-dbZTs-C7IAip60or1HFqU7S91cOE602qw4\" alt=\"\" width=\"320\" height=\"122\"></a></p><p><br><br>&nbsp;</p><p>&nbsp;</p><p>Với sự đa dạng về kiểu dáng,màu sắc và chất liệu<strong>, XTDQL</strong> tự tin rằng sẽ có những sản phẩm phù hợp với mọi cá nhân và dịp khác nhau.Từ những trang phục hàng ngày cho đến những bộ cánh sang trọng cho những buổi tiệc,<strong>XTDQL</strong> luôn mang đến sự tự tin và phong cách cho bạn.</p><p>&nbsp;Với XTĐQL ,thời trang không chỉ là quần áo mà còn là cách biểu đạt bản thân và điểm nhấn, là cách để thể hiện phong cách của mỗi người.Hãy cùng XTĐQL khám phá và truyền cảm hứng qua thế giới thời trang đa dạng và đầy sáng tạo!!!<br>Thời trang Việt Nam đang trải qua một giai đoạn phát triển vượt bậc, và sứ mệnh của nó là đưa cái đẹp văn hóa Việt ra khắp thế giới. Thông qua sự kết hợp tài năng sáng tạo của những nhà thiết kế, nghệ nhân và người làm trong ngành công nghiệp thời trang, chúng ta đã thành công trong việc tạo ra những bộ trang phục mang tính đặc trưng và sự độc đáo của Việt Nam.</p><p>Với tài nguyên văn hoá khổng lồ, những điểm nhấn về truyền thống và sự sáng tạo không giới hạn, thời trang Việt Nam đã trở thành một nguồn cảm hứng không thể bỏ qua trong giới mốt quốc tế. Bằng cách kết hợp những yếu tố truyền thống của Việt Nam với xu hướng thời trang hiện đại, chúng ta đã tạo ra những thiết kế độc đáo và đầy sức hút.</p><p><strong>&nbsp;Sứ mệnh đưa thời trang việt nam vươn ra thế giới</strong></p><p>Sứ mệnh của chúng ta không chỉ dừng lại ở việc giới thiệu những bộ trang phục đẹp mắt ra thế giới, mà còn tạo ra những giá trị bền vững. Chúng ta đề cao sự công bằng xã hội, quan tâm đến môi trường và đảm bảo mọi người tham gia vào quy trình sản xuất thời trang được đối xử công bằng và tôn trọng.</p><p>Với sứ mệnh này, thời trang Việt Nam đã thu hút sự chú ý và lòng tin của không chỉ người tiêu dùng quốc tế mà còn các nhà thiết kế và các nhãn hiệu danh tiếng. Những bộ trang phục của chúng ta đã xuất hiện trên sàn diễn quốc tế, trong các tạp chí thời trang hàng đầu và trở thành lựa chọn ưa thích của nhiều ngôi sao và nhân vật nổi tiếng.</p><p>Đưa thời trang Việt Nam ra thế giới không chỉ mang lại danh tiếng quốc tế cho đất nước mà còn là một cách để gìn giữ và phát triển văn hóa độc đáo của chúng ta. Đồng thời, nó cũng tạo điều kiện thuận lợi để giao lưu văn hoá, thúc đẩy sự đoàn kết và tăng cường quan hệ đối tác với các quốc gia khác.</p>', '2024-01-25', 'gf.png', 0),
(9, 'Hãy dạy tôi cách làm con bò', '<p><i><strong>dddddddddddddddd</strong></i></p>', '2024-01-28', 'conbo.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `id_product` int NOT NULL,
  `iddm` int NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `price_product` varchar(255) NOT NULL,
  `description_product` text NOT NULL,
  `date_add` varchar(255) NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`id_product`, `iddm`, `name_product`, `price_product`, `description_product`, `date_add`, `views`, `tags`, `img`) VALUES
(88, 88, 'Shoes Luxury', '4000', '<p><i><strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta perferendis quisquam cumque nisi hic soluta est rem accusamus vel voluptate dolor expedita tempora inventore corporis, eaque provident laboriosam pariatur velit.</strong></i></p>', '01:22:51am 29/01/2024', 0, '', NULL),
(89, 89, 'Skirt Luxury', '5000', '<p><i><strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta perferendis quisquam cumque nisi hic soluta est rem accusamus vel voluptate dolor expedita tempora inventore corporis, eaque provident laboriosam pariatur velit.</strong></i></p>', '11:52:32pm 28/01/2024', 0, '', NULL),
(90, 90, 'Jewerly Luxury', '6000', '<p><i><strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta perferendis quisquam cumque nisi hic soluta est rem accusamus vel voluptate dolor expedita tempora inventore corporis, eaque provident laboriosam pariatur velit.</strong></i></p>', '01:22:32am 29/01/2024', 0, '', NULL),
(91, 88, 'Jewerly Luxury 2', '6000', '<p><i><strong>ddddddddddddd</strong></i></p>', '09:06:06am 29/01/2024', 0, '', NULL),
(92, 89, 'Skirt Luxury 2', '6000', '<p><i><strong>ddddddddddddd</strong></i></p>', '09:06:36am 29/01/2024', 0, '', NULL),
(93, 88, 'Shoes Luxurys 2', '6000', '<p><i><strong>dddddddddddddddddd</strong></i></p>', '09:07:28am 29/01/2024', 0, '', NULL),
(94, 88, 'Shoes Luxurys 2', '6000', '<p><i><strong>dddddddddddddddddd</strong></i></p>', '09:29:39am 29/01/2024', 0, '', NULL),
(95, 88, 'Shoes Luxury', '4000', '<p><i><strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta perferendis quisquam cumque nisi hic soluta est rem accusamus vel voluptate dolor expedita tempora inventore corporis, eaque provident laboriosam pariatur velit.</strong></i></p>', '01:22:51am 29/01/2024', 0, '', NULL),
(96, 89, 'Skirt Luxury', '5000', '<p><i><strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta perferendis quisquam cumque nisi hic soluta est rem accusamus vel voluptate dolor expedita tempora inventore corporis, eaque provident laboriosam pariatur velit.</strong></i></p>', '11:52:32pm 28/01/2024', 0, '', NULL),
(97, 90, 'Jewerly Luxury', '6000', '<p><i><strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta perferendis quisquam cumque nisi hic soluta est rem accusamus vel voluptate dolor expedita tempora inventore corporis, eaque provident laboriosam pariatur velit.</strong></i></p>', '01:22:32am 29/01/2024', 0, '', NULL),
(98, 88, 'Jewerly Luxury 2', '6000', '<p><i><strong>ddddddddddddd</strong></i></p>', '09:06:06am 29/01/2024', 0, '', NULL),
(99, 89, 'Skirt Luxury 2', '6000', '<p><i><strong>ddddddddddddd</strong></i></p>', '09:06:36am 29/01/2024', 0, '', NULL),
(100, 88, 'Shoes Luxurys 2', '6000', '<p><i><strong>dddddddddddddddddd</strong></i></p>', '09:07:28am 29/01/2024', 0, '', NULL),
(101, 88, 'Shoes Luxurys 2', '6000', '<p><i><strong>dddddddddddddddddd</strong></i></p>', '09:29:39am 29/01/2024', 0, '', NULL),
(102, 52, 'Ta Cong Chiendddddddddddddddddddddddd', '444', '<h4><i><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, eum animi iste quasi earum nihil ducimus, vel, eaque velit natus consequatur debitis repudiandae provident quam aspernatur maxime magni minus. A.&nbsp;</strong></i></h4><figure class=\"image\"><img style=\"aspect-ratio:1600/1600;\" src=\"https://blogger.googleusercontent.com/img/a/AVvXsEiEXyucNAP1ApkLJqtxWwB6QVNx29byDhooLtsbVjkpW-xqBhZCpncIiFGjuKFPW6jSW7ixICNnhMT8zTG8bsaooYtn-fvNXNYWkPh60cXjDuQmJmnEHjR99HtYUJxzDSjpbiWb_h7zw_yhle2rNpjg0DfKhiipx2u1iVyxBjDRy1_LeAvO0hrNVbpFGM74\" width=\"1600\" height=\"1600\"><figcaption>&nbsp;</figcaption></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '03:37:07pm 27/01/2024', 0, '[{\"value\":\"[{\"}]', NULL),
(103, 52, 'Ta Cong Chien', '444', 'hhhh', '10:00:48pm 26/01/2024', 0, '[{\"value\":\"dfdf\"}]', NULL),
(104, 52, 'Ta Cong Chien', '444', 'ffff', '01:47:50pm 27/01/2024', 0, '[{\"value\":\"dfdf\"}]', NULL),
(105, 52, 'Ta Cong Chiendddd', '444', 'dddd', '02:55:23pm 27/01/2024', 0, '[{\"value\":\"dfdf\"}]', NULL),
(106, 77, 'Ta Cong Chienddddddd', '444', 'ffffff', '02:57:16pm 27/01/2024', 0, '[{\"value\":\"dfdf\"}]', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int NOT NULL,
  `name_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `name_role`) VALUES
(1, 'Customer'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int NOT NULL,
  `name_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `name_status`) VALUES
(1, 'Processing'),
(2, 'Contacted'),
(3, 'Confirm'),
(4, 'Finish');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone_number` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image_user` text,
  `role` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `username`, `password`, `fullname`, `address`, `email`, `phone_number`, `image_user`, `role`) VALUES
(1, 'admin', '123456', 'ta cong chien', 'Hà Nội', 'tacongchien003@gmail.com', '0367733843', NULL, 1),
(2, 'admin', '123', NULL, 'Hà Nội', 'tacongchien003@gmail.com', '0367733843', NULL, 2),
(5, 'chiencoix2004', 'chiencoix2004', NULL, NULL, NULL, NULL, NULL, 1),
(6, 'chiencoix2004', 'chiencoix2004', NULL, NULL, NULL, NULL, NULL, 1),
(7, 'chiencoix2004', 'chiencoix2004', NULL, NULL, NULL, NULL, NULL, 1),
(8, 'chiencoix2004', 'chiencoix2004', NULL, NULL, NULL, NULL, NULL, 1),
(9, 'chiencoix2004', 'chiencoix2004', NULL, NULL, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Indexes for table `tb_bill_details`
--
ALTER TABLE `tb_bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tb_images_product`
--
ALTER TABLE `tb_images_product`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bill`
--
ALTER TABLE `tb_bill`
  MODIFY `id_bill` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_bill_details`
--
ALTER TABLE `tb_bill_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tb_comments`
--
ALTER TABLE `tb_comments`
  MODIFY `id_comment` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id_contact` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_images_product`
--
ALTER TABLE `tb_images_product`
  MODIFY `id_image` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
