CREATE TABLE yeucau (
  `id` varchar(30),
  `maso` varchar(30) CHARACTER SET utf8 ,
  `ten` varchar(255) CHARACTER SET utf8 ,
  `ngaysinh` date ,
  `diachi` varchar(255) CHARACTER SET utf8 ,
  `sodienthoai` varchar(15) CHARACTER SET utf8 ,
  `avatar` varchar(255) CHARACTER SET utf8 ,
  `gioitinh` varchar(10),
  `lop` varchar(10),
  `tenbo` varchar(255) CHARACTER SET utf8,
  `namsinhbo` int(11) ,
  `tenme` varchar(255) CHARACTER SET utf8 ,
  `namsinhme` int(11) NOT NULL,
  `sdt` varchar(20) ,
  `lopchunhiem` varchar(10),
  `subject1` varchar(10),
  `subject2` varchar(10),
  `subject3` varchar(10),
  `subject4` varchar(10),
  `subject5` varchar(10)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 15, 2021 lúc 05:50 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlytruonghoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `maso` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0000',
  `diemtoan6` float NOT NULL DEFAULT 0,
  `diemvan6` float NOT NULL DEFAULT 0,
  `diemanh6` float NOT NULL DEFAULT 0,
  `diemli6` float NOT NULL DEFAULT 0,
  `diemhoa6` float NOT NULL DEFAULT 0,
  `diemtheduc6` float NOT NULL DEFAULT 0,
  `diemlichsu6` float NOT NULL DEFAULT 0,
  `diemdiali6` float NOT NULL DEFAULT 0,
  `diemgdcd6` float NOT NULL DEFAULT 0,
  `diemcongnghe6` float NOT NULL DEFAULT 0,
  `diemtrungbinh6` float NOT NULL DEFAULT 0,
  `diemtoan7` float NOT NULL DEFAULT 0,
  `diemvan7` float NOT NULL DEFAULT 0,
  `diemanh7` float NOT NULL DEFAULT 0,
  `diemli7` float NOT NULL DEFAULT 0,
  `diemhoa7` float NOT NULL DEFAULT 0,
  `diemtheduc7` float NOT NULL DEFAULT 0,
  `diemlichsu7` float NOT NULL DEFAULT 0,
  `diemdiali7` float NOT NULL DEFAULT 0,
  `diemgdcd7` float NOT NULL DEFAULT 0,
  `diemcongnghe7` float NOT NULL DEFAULT 0,
  `diemtrungbinh7` float NOT NULL DEFAULT 0,
  `diemtoan8` float NOT NULL DEFAULT 0,
  `diemvan8` float NOT NULL DEFAULT 0,
  `diemanh8` float NOT NULL DEFAULT 0,
  `diemli8` float NOT NULL DEFAULT 0,
  `diemhoa8` float NOT NULL DEFAULT 0,
  `diemtheduc8` float NOT NULL DEFAULT 0,
  `diemlichsu8` float NOT NULL DEFAULT 0,
  `diemdiali8` float NOT NULL DEFAULT 0,
  `diemgdcd8` float NOT NULL DEFAULT 0,
  `diemcongnghe8` float NOT NULL DEFAULT 0,
  `diemtrungbinh8` float NOT NULL DEFAULT 0,
  `diemtoan9` float NOT NULL DEFAULT 0,
  `diemvan9` float NOT NULL DEFAULT 0,
  `diemanh9` float NOT NULL DEFAULT 0,
  `diemli9` float NOT NULL DEFAULT 0,
  `diemhoa9` float NOT NULL DEFAULT 0,
  `diemtheduc9` float NOT NULL DEFAULT 0,
  `diemlichsu9` float NOT NULL DEFAULT 0,
  `diemdiali9` float NOT NULL DEFAULT 0,
  `diemgdcd9` float NOT NULL DEFAULT 0,
  `diemcongnghe9` float NOT NULL DEFAULT 0,
  `diemtrungbinh9` float NOT NULL DEFAULT 0,
  `sinhhoc6` float NOT NULL DEFAULT 0,
  `sinhhoc7` float NOT NULL DEFAULT 0,
  `sinhhoc8` float NOT NULL DEFAULT 0,
  `sinhhoc9` float NOT NULL DEFAULT 0,
  `hocluc6` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `hanhkiem6` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `hocluc7` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `hanhkiem7` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `hocluc8` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `hanhkiem8` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `hocluc9` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `hanhkiem9` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`maso`, `diemtoan6`, `diemvan6`, `diemanh6`, `diemli6`, `diemhoa6`, `diemtheduc6`, `diemlichsu6`, `diemdiali6`, `diemgdcd6`, `diemcongnghe6`, `diemtrungbinh6`, `diemtoan7`, `diemvan7`, `diemanh7`, `diemli7`, `diemhoa7`, `diemtheduc7`, `diemlichsu7`, `diemdiali7`, `diemgdcd7`, `diemcongnghe7`, `diemtrungbinh7`, `diemtoan8`, `diemvan8`, `diemanh8`, `diemli8`, `diemhoa8`, `diemtheduc8`, `diemlichsu8`, `diemdiali8`, `diemgdcd8`, `diemcongnghe8`, `diemtrungbinh8`, `diemtoan9`, `diemvan9`, `diemanh9`, `diemli9`, `diemhoa9`, `diemtheduc9`, `diemlichsu9`, `diemdiali9`, `diemgdcd9`, `diemcongnghe9`, `diemtrungbinh9`, `sinhhoc6`, `sinhhoc7`, `sinhhoc8`, `sinhhoc9`, `hocluc6`, `hanhkiem6`, `hocluc7`, `hanhkiem7`, `hocluc8`, `hanhkiem8`, `hocluc9`, `hanhkiem9`) VALUES
('SV0001', 9, 7, 9, 7, 0, 10, 10, 10, 10, 8, 8.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 0, 0, 0, 'Giỏi', 'Tốt', 'Trung bình', '', '', '', '', ''),
('Sv0002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieu234`
--

CREATE TABLE `thoikhoabieu234` (
  `lop` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '6A',
  `st2t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st2t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st2t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st2t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st2t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct2t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct2t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct2t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct2t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct2t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st3t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st3t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st3t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st3t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st3t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct3t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct3t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct3t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct3t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct3t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st4t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st4t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st4t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st4t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st4t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct4t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct4t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct4t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct4t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct4t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thoikhoabieu234`
--

INSERT INTO `thoikhoabieu234` (`lop`, `st2t1`, `st2t2`, `st2t3`, `st2t4`, `st2t5`, `ct2t1`, `ct2t2`, `ct2t3`, `ct2t4`, `ct2t5`, `st3t1`, `st3t2`, `st3t3`, `st3t4`, `st3t5`, `ct3t1`, `ct3t2`, `ct3t3`, `ct3t4`, `ct3t5`, `st4t1`, `st4t2`, `st4t3`, `st4t4`, `st4t5`, `ct4t1`, `ct4t2`, `ct4t3`, `ct4t4`, `ct4t5`) VALUES
('6A', 'ChaoCo', 'Toan', 'Li', 'Hoa', 'Toan', 'Anh', 'Li', 'Sinh', 'DiaLi', 'Sinh', '   ChaoCo', '   Toan', '   Li', '   Hoa', '   Toan', '   Anh', '   Li', '   Sinh', '   DiaLi', '   Sinh', 'GDCD', 'Toan', 'Li', 'Hoa', 'LichSu', 'Toan', 'Li', 'Sinh', 'Cong nghe', 'Sinh'),
('6B', 'ChaoCo', 'Toan', 'Toan', 'Hoa', 'DiaLi', 'Toan', 'DiaLi', 'Sinh', 'LichSu', 'DiaLi', ' ChaoCo', ' Toan', ' Toan', ' Hoa', ' DiaLi', ' Toan', ' DiaLi', ' Sinh', ' LichSu', ' DiaLi', 'DiaLi', 'GDCD', 'TheDuc', 'Hoa', 'Toan', 'Hoa', 'GDCD', 'Sinh', 'Toan', 'LichSu'),
('7A', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh'),
('7B', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh'),
('8A', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh'),
('8B', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh'),
('9A', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh'),
('9B', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieu567`
--

CREATE TABLE `thoikhoabieu567` (
  `lop` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '6A',
  `st5t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st5t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st5t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st5t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st5t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct5t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct5t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct5t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct5t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct5t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st6t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st6t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st6t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st6t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st6t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct6t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct6t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct6t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct6t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct6t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st7t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st7t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st7t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st7t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st7t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct7t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct7t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct7t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct7t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct7t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thoikhoabieu567`
--

INSERT INTO `thoikhoabieu567` (`lop`, `st5t1`, `st5t2`, `st5t3`, `st5t4`, `st5t5`, `ct5t1`, `ct5t2`, `ct5t3`, `ct5t4`, `ct5t5`, `st6t1`, `st6t2`, `st6t3`, `st6t4`, `st6t5`, `ct6t1`, `ct6t2`, `ct6t3`, `ct6t4`, `ct6t5`, `st7t1`, `st7t2`, `st7t3`, `st7t4`, `st7t5`, `ct7t1`, `ct7t2`, `ct7t3`, `ct7t4`, `ct7t5`) VALUES
('6A', 'TheDuc', 'Toan', 'LichSu', 'LichSu', 'Toan', 'Van', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'TheDuc', 'Toan', 'LichSu', 'LichSu', 'Toan', ' ', ' ', ' ', ' ', ' ', 'TheDuc', 'Toan', 'Li', 'Hoa', 'SHCN', ' ', ' ', ' ', ' ', ' '),
('6B', 'Li', 'TheDuc', 'LichSu', 'GDCD', 'DiaLi', 'Toan', 'Toan', 'LichSu', 'Sinh', 'GDCD', 'Li', 'TheDuc', 'LichSu', 'GDCD', 'DiaLi', 'Toan', 'Toan', 'LichSu', 'Sinh', 'GDCD', 'Toan', 'Van', 'Anh', 'Hoa', 'SHCN', 'Li', 'Li', 'GDCD', 'LichSu', ' '),
('7A', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh'),
('7B', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh'),
('8A', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh'),
('8B', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh'),
('9A', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh'),
('9B', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh', 'Toan', 'Toan', 'Li', 'Hoa', 'Toan', 'Toan', 'Li', 'Hoa', 'Cong nghe', 'Sinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieugv234`
--

CREATE TABLE `thoikhoabieugv234` (
  `maso` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0000',
  `st2t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st2t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st2t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st2t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st2t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct2t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct2t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct2t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct2t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct2t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st3t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st3t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st3t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st3t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st3t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct3t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct3t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct3t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct3t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct3t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st4t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st4t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st4t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st4t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st4t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct4t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct4t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct4t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct4t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct4t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thoikhoabieugv234`
--

INSERT INTO `thoikhoabieugv234` (`maso`, `st2t1`, `st2t2`, `st2t3`, `st2t4`, `st2t5`, `ct2t1`, `ct2t2`, `ct2t3`, `ct2t4`, `ct2t5`, `st3t1`, `st3t2`, `st3t3`, `st3t4`, `st3t5`, `ct3t1`, `ct3t2`, `ct3t3`, `ct3t4`, `ct3t5`, `st4t1`, `st4t2`, `st4t3`, `st4t4`, `st4t5`, `ct4t1`, `ct4t2`, `ct4t3`, `ct4t4`, `ct4t5`) VALUES
('giaovien', '6A', '8A', '7B', '6A', '8A', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', '  Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieugv567`
--

CREATE TABLE `thoikhoabieugv567` (
  `maso` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0000',
  `st5t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st5t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st5t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st5t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st5t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct5t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct5t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct5t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct5t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct5t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st6t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st6t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st6t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st6t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st6t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct6t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct6t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct6t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct6t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct6t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st7t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st7t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st7t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st7t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `st7t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct7t1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct7t2` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct7t3` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct7t4` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi',
  `ct7t5` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Nghi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thoikhoabieugv567`
--

INSERT INTO `thoikhoabieugv567` (`maso`, `st5t1`, `st5t2`, `st5t3`, `st5t4`, `st5t5`, `ct5t1`, `ct5t2`, `ct5t3`, `ct5t4`, `ct5t5`, `st6t1`, `st6t2`, `st6t3`, `st6t4`, `st6t5`, `ct6t1`, `ct6t2`, `ct6t3`, `ct6t4`, `ct6t5`, `st7t1`, `st7t2`, `st7t3`, `st7t4`, `st7t5`, `ct7t1`, `ct7t2`, `ct7t3`, `ct7t4`, `ct7t5`) VALUES
('giaovien', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi', 'Nghi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `id` varchar(20) DEFAULT NULL,
  `nguoinhan` varchar(10) DEFAULT NULL,
  `title` varchar(10000) CHARACTER SET utf8 DEFAULT NULL,
  `noidung` mediumtext CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`id`, `nguoinhan`, `title`, `noidung`) VALUES
('agp832jxdzlht41', 'SV0002', 'Tiêu đề của thông báo', 'Thông báo đến n'),
('3i2uv8bwhzc4txk', 'ALL', 'Tieeu ddeef thong bao taat ca', 'Các thuyền thúng đánh bắt gần bờ ở Phan Thiết trúng ghẹ trong chuyến xuất hành đầu năm Tân Sửu, thu nhập 2-3 triệu đồng mỗi người.\r\n\r\nMùng 3 Tết (14/2), bến cá cầu Tàu trước làng chài Tiến Đức nhộn nhịp sau nhiều ngày nghỉ. 6h, thuyền thúng từ ngoài biển bắt đầu trở về bờ, ngư dân tập trung gỡ lưới để bán chợ sớm.\r\nNhững con ghẹ lớn hơn bàn tay đang cựa quậy trong lưới của ngư dân Phạm Văn Dũng (phường Đức Long). Anh gỡ ra, bỏ vào giỏ lưới nằm âm dưới nước. Mỗi con được buộc dây thun néo cặp càng tránh bị gãy khi chúng cựa quậy. 6 ký ghẹ và gần chục ký cá lưới tươi rói được anh chuyển ra khỏi thúng, cân bán ngay tại bến hơn 3 triệu đồng.\r\n\r\n\"Một mình một thúng, ra đánh hôm qua, sáng nay vào, hai ngày được như vậy là quá trúng\", anh Dũng hồ hởi.\r\n\r\nKề đó, tấm lưới trong thuyền thúng của anh Nguyễn Duy Út (xã Tiến Thành) cũng dày ghẹ và cá. 7 giờ mùng 2 Tết, anh Út xuất hành thả lưới cách bờ chừng 3-4 hải lý, hai tiếng sau vào bờ lại. Khuya, anh chạy thúng ra thu lưới và rạng sáng mùng 3 vào bờ.\r\nGhẹ và cá dính lưới quá nhiều, anh Út gỡ không kịp, phải nhờ người nhà xuống giúp. Được gần chục ký ghẹ, anh bán ngay tại bến được hơn 2,5 triệu. \"Ngày xuất hành trúng lớn, anh em bổn đạo ở đây ai cũng vui\", anh Út nói.\r\n\r\nCũng vừa vào bến sáng nay, ông Mai Văn Vinh, ngư dân phường Đức Long đánh được 7 ký ghẹ loại lớn cùng hơn chục ký cá mòi, cá đục... Trừ phí tổn chưa đầy 100.000 đồng tiền dầu, chuyến này ông Vinh lời 3,3 triệu đồng.\r\n\r\n\"Xuất hành lấy ngày cho vui nhưng không những tôi mà nhiều người khác cũng kiếm được vài triệu trong chuyến này\", ông Vinh nói và cho biết những ngày tới ngư dân tiếp tục ra khơi vì ghẹ đang xuất hiện dày đặc ở vùng biển Phan Thiết.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtingiaovien`
--

CREATE TABLE `thongtingiaovien` (
  `maso` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ten` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `gioitinh` varchar(10) NOT NULL DEFAULT 'nam',
  `ngaysinh` date NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Viet Nam',
  `sodienthoai` varchar(15) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `avatar` varchar(255) CHARACTER SET utf8 DEFAULT 'https://ref.vn/jjbhhb',
  `lopchunhiem` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `subject1` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `subject2` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `subject3` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `subject4` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `subject5` varchar(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtingiaovien`
--

INSERT INTO `thongtingiaovien` (`maso`, `ten`, `gioitinh`, `ngaysinh`, `diachi`, `sodienthoai`, `avatar`, `lopchunhiem`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`) VALUES
('GV0001', 'Lê Thị Lan', 'nam', '0000-00-00', 'Cát Hưng Phù Cát Bình Định', '0979853486', '', '6A', 'Toan', 'Dialy', 'GDCD', 'Congnghe', 'Theduc'),
('giaovien', '', 'nam', '0000-00-00', 'Viet Nam', '0', 'https://ref.vn/jjbhhb', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinphuhuynh`
--

CREATE TABLE `thongtinphuhuynh` (
  `maso` varchar(255) DEFAULT NULL,
  `ten` varchar(255) DEFAULT NULL,
  `tencon` varchar(255) DEFAULT NULL,
  `masocon` varchar(255) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtinphuhuynh`
--

INSERT INTO `thongtinphuhuynh` (`maso`, `ten`, `tencon`, `masocon`, `sdt`) VALUES
('PHSV0001', 'Nguyễn Văn Toàn', 'Nguyễn Văn An', 'SV0001', '03278765134'),
('PHSv0002', NULL, NULL, 'Sv0002', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinsinhvien`
--

CREATE TABLE `thongtinsinhvien` (
  `maso` varchar(30) CHARACTER SET utf8 NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ngaysinh` date NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Viet Nam',
  `sodienthoai` varchar(15) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `avatar` varchar(255) CHARACTER SET utf8 DEFAULT 'https://ref.vn/jjbhhb',
  `gioitinh` varchar(10) NOT NULL DEFAULT 'nam',
  `lop` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `tenbo` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Chưa có thông tin',
  `namsinhbo` int(11) NOT NULL DEFAULT 0,
  `tenme` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Chưa có thông tin',
  `namsinhme` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--4297f44b13955235245b2497399d7a93
-- Đang đổ dữ liệu cho bảng `thongtinsinhvien`
--

INSERT INTO `thongtinsinhvien` (`maso`, `ten`, `ngaysinh`, `diachi`, `sodienthoai`, `avatar`, `gioitinh`, `lop`, `tenbo`, `namsinhbo`, `tenme`, `namsinhme`) VALUES
('SV0001', 'Nguyễn Văn An', '2021-02-09', 'Cát Thắng Phù Cát Bình Định', '0353571047', '', 'Nam', '6A', 'Nguyễn Văn Toàn', 1994, 'Nguyễn Thị Lan', 1997),
('sinhvien', '', '0000-00-00', 'Viet Nam', '0', 'https://ref.vn/jjbhhb', 'nam', NULL, 'Chưa có thông tin', 0, 'Chưa có thông tin', 1997),
('Sv0002', '', '0000-00-00', 'Viet Nam', '0', 'https://ref.vn/jjbhhb', 'nam', NULL, 'Chưa có thông tin', 0, 'Chưa có thông tin', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_account`
--

CREATE TABLE `user_account` (
  `maso` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0000',
  `user_password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lv` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_account`
--

INSERT INTO `user_account` (`maso`, `user_password`, `lv`) VALUES
('SV0001', '123123', 1),
('GV0001', '123123', 2),
('Hieutruong', '123123', 5),
('quanly', '123123', 3),
('giaovien', '123123', 2),
('ql', '123123', 3),
('Sv0002', '123123', 1),
('PHSv0002', '123123', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeucau`
--

CREATE TABLE `yeucau` (
  `maso` varchar(255) DEFAULT NULL,
  `noidung` varchar(255) DEFAULT NULL,
  `chucvu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `yeucau`
--

INSERT INTO `yeucau` (`maso`, `noidung`, `chucvu`) VALUES
('SV0001', 'Yêu cầu đổi tên bố thành Nguyễn Văn A', 'Học Sinh'),
('GV0001', 'Yêu cầu đổi tên thành Nguyễn Văn An', 'Giáo Viên');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
