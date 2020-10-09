CREATE TABLE IF NOT EXISTS `ecommerce_motoboy` ( 
`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`all` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `ecommerce_motoboy` (`id`, `all`) VALUES (1, NULL);

INSERT INTO `ecommerce_plugins` (`id`, `titulo`, `nome`, `tipo`, `path`, `img`, `status`) VALUES (3, 'Motoboy', 'motoboy', 'delivery', 'ecommerce/plugins/delivery/motoboy', 'ecommerce/plugins/delivery/motoboy/wa/assets/img/motoboy.jpg', '');