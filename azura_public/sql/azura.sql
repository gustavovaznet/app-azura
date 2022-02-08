CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `date_register` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `confirm_password`, `date_register`) VALUES
(1, 'Administrador', 'adm@adm.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2020-11-09 15:09:23'),
(2, 'Maicon Silva', 'maiconsilva@yahoo.com', 'c33367701511b4f6020ec61ded352059', 'c33367701511b4f6020ec61ded352059', '2020-11-09 15:10:02'),
(3, 'Marina Oliveira', 'marina2020@bol.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'bfd59291e825b5f2bbf1eb76569f8fe7', '2020-11-09 15:10:50');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
