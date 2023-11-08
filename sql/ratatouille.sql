DROP DATABASE IF EXISTS ratatouille;
CREATE DATABASE ratatouille;
USE ratatouille;

CREATE TABLE cadastro (
  userName varchar(30) NOT NULL,
  nome varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  senha varchar(30) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO cadastro (userName, nome, email, senha) VALUES
('Jubs', 'Julia Gabriela ', 'jujubs@gmail.com', '12345678'),
('Marquito', 'Marcos Raphael', 'marquinhos@gmail.com', '123amoajulia');

CREATE TABLE receita (
  idReceita int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  tempoPreparo int(11) NOT NULL,
  quantidade int(11) NOT NULL,
  ingredientes longtext NOT NULL,
  modoPreparo longtext NOT NULL,
  categoria varchar(255) NOT NULL,
  dataPublicacao date NOT NULL,
  imagem longtext NOT NULL,
  userName varchar(30) NOT NULL,
  PRIMARY KEY (idReceita),
  KEY userName (userName)
);

INSERT INTO `receita` (`idReceita`, `nome`, `tempoPreparo`, `quantidade`, `ingredientes`, `modoPreparo`, `categoria`, `dataPublicacao`, `imagem`, `userName`) VALUES
(1, 'HambÃºrguer Vegetariano', 40, 8, '1 caixa de leite condensado\r\n1 colher (sopa) de margarina sem sal\r\n7 colheres (sopa) de achocolatado\r\nchocolate granulado', 'Em um recipiente, misture bem todos os ingredientes.\r\nEm uma assadeira, com o auxÃ­lio de um aro (8 cm de diÃ¢metro), modele os hambÃºrgueres e asse em forno mÃ©dio (180Â°C), preaquecido, por cerca de 30 minutos, virando na metade do tempo. \r\nSirva.', 'Vegetariano', '2022-11-25', 'fotos/pexels-grooveland-designs-3607284.jpg', 'Jubs'),
(2, 'Brigadeiro', 25, 30, '1 xícara (chá) de Aveia Flocos NESTLÉ®\r\n1 xícara (chá) de quinoa cozida\r\nmeia xícara (chá) de cenoura ralada\r\nmeia cebola ralada\r\n2 dentes de alho amassados\r\n2 colheres (chá) de orégano\r\n1 colher (chá) de páprica\r\nmeia colher (chá) de sal\r\n3 colheres (sopa) de cebolinha verde picada\r\n2 colheres (sopa) de gergelim preto\r\n1 colher (chá) de pimenta dedo-de-moça sem sementes e picada\r\n2 ovos', 'Em uma panela funda, acrescente o leite condensado, a margarina e o achocolatado (ou 4 colheres de sopa de chocolate em pÃ³).\r\nCozinhe em fogo mÃ©dio e mexa atÃ© que o brigadeiro comece a desgrudar da panela.\r\nDeixe esfriar e faÃ§a pequenas bolas com a mÃ£o passando a massa no chocolate granulado.', 'Doce', '2022-11-25', 'fotos/pexels-paloma-clarice-9285199.jpg', 'Jubs'),
(3, 'Milk Shake de Chocolate', 10, 1, '1 copo (americano) de leite gelado\r\n2 bolas de sorvete sabor chocolate \r\n3 colheres (sopa) de chocolate em pÃ³\r\n4 Calda de Chocolate', 'Bata tudo no liquidificador, leite e uma ou duas bolas de chocolate para ficar cremoso. \r\nEm seguida coloque tudo no copo e adicione bolas de sorvete.\r\nEm seguida confeite com granulado, chocolate em pÃ³ ou qualquer coisa a sua escolha.', 'Bebida', '2022-11-25', 'fotos/pexels-horizon-content-3727250 (2).jpg', 'Jubs'),
(4, 'Sushi', 60, 30, 'Arroz para Sushi\r\n3 xÃ­cara (chÃ¡) de Ãgua\r\n1/4 xÃ­cara ((cafÃ©) de vinagre de arroz\r\n2 colher (sobremesa) de aÃ§Ãºcar\r\n1 colher (cafÃ©) de sal\r\n2 xÃ­cara (chÃ¡) de arroz japonÃªs\r\nPara montar o sushi\r\nmanga fatiada\r\npepino japones cortar em tiras\r\nfolhas de nori - algas\r\nraiz forte\r\nKani', 'Deixe o arroz de molho por 30 minutos, depois lave bem atÃ© a Ã¡gua ficar cristalina.\r\nColoque no fogo com tampa atÃ© secar e ficar bem inchado\r\nMisture o vinagre o sal e aÃ§Ãºcar, atÃ© dissolver bem.\r\nColoque o arroz ainda quente em uma bacia plÃ¡stica e vÃ¡ despejando devagar a mistura de vinagre mexendo com movimentos rÃ¡pidos\r\nColoque a esteirinha de frente para vocÃª e disponha uma folha de alga sobre ela, deixando um espaÃ§o livre de um centÃ­metro, nas extremidades da esteira.\r\nIsso permite que vocÃª enrole melhor.\r\nVÃ¡ pegando pequenas porÃ§Ãµes de arroz e espalhando sobre a alga.\r\nColoque sobre o arroz, fatias kani e umas tirinhas de pepino e manga e um pouquinho de raiz forte\r\nEnrole apertando com cuidado para dar um formato uniforme e firme.\r\nCorte os sushis com 1,5 cm de altura.', 'Salgado', '2022-11-26', 'fotos/pexels-pixabay-357756.jpg', 'Marquito'),
(5, 'Ratatouille', 80, 10, 'Refogado:\r\n1 abobrinha grande em rodelas finas (0,5 cm)\r\n1 berinjela em rodelas finas (0,5 cm)\r\n1 colher (sopa) de MAGGIÂ® Fondor\r\n4 colheres (sopa) de azeite\r\nmeia cebola picada\r\n2 dentes de alho picados\r\n5 tomates sem pele e sem sementes, picados\r\n2 colheres (sopa) de tomilho\r\n1 ramo de alecrim\r\n1 pitada de pimenta-do-reino\r\n2 colheres (sopa) de manjericÃ£o\r\nMontagem:\r\n1 pimentÃ£o amarelo em rodelas finas\r\n1 pimentÃ£o vermelho em rodelas finas (0,5 cm)\r\nmeia cebola em rodelas finas', 'Refogado:\r\nEm um recipiente, coloque a abobrinha e a berinjela e salpique uma colher (chÃ¡) de MAGGI Fondor por cima.\r\nEspalhe bem e deixe descansar por cerca de 30 minutos.\r\nEscorra toda a Ã¡gua que formar e seque bem cada rodela com um papel-toalha. Reserve.\r\nEm uma frigideira, aqueÃ§a 2 colheres (sopa) de azeite e grelhe a abobrinha e a berinjela reservadas (colocando poucas rodelas por vez na frigideira, com cuidado para nÃ£o amolecerem demais). Reserve.\r\nNa mesma frigideira, aqueÃ§a 1 colher (sopa) de azeite e refogue a cebola e o alho.\r\nAdicione os tomates picados, o tomilho, o alecrim, a pimenta-do-reino e o manjericÃ£o.\r\nCozinhe em fogo baixo atÃ© que o tomate comece a se desmanchar. Reserve.\r\nMontagem:\r\nEm um recipiente refratÃ¡rio, cubra o fundo com o refogado dos tomates reservados e arrume as fatias de legumes, intercalando fatias de abobrinha, pimentÃµes, cebola e berinjela (arrume os vegetais na vertical). Reserve.\r\nEm um recipiente, misture o azeite e o Fondor restantes, e regue os legumes reservados.\r\nCubra com papel-alumÃ­nio e leve ao forno mÃ©dio-alto (200Â°C), preaquecido, por cerca de 30 minutos. Sirva.', 'Vegetariano', '2022-11-26', 'fotos/pexels-codrin-alex-7439978.jpg', 'Marquito');

CREATE TABLE avaliacao (
  idAvaliacao int(11) NOT NULL AUTO_INCREMENT,
  qtdEstrela int(11) NOT NULL,
  data date NOT NULL,
  userName varchar(30) DEFAULT NULL,
  PRIMARY KEY (idAvaliacao),
  KEY userName (userName)
);

INSERT INTO avaliacao (idAvaliacao, qtdEstrela, data, userName) VALUES
(1, 5, '2022-11-25', 'Jubs'),
(2, 5, '2022-11-26', 'Marquito'),
(3, 4, '2022-11-26', '');

select * from cadastro;