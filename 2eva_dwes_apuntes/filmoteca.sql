-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2017 a las 12:47:431308,
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `filmoteca`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
  `cod_pelicula` smallint(5) unsigned NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `fecha` year(4) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `duracion` smallint(6) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  PRIMARY KEY (`cod_pelicula`),
  UNIQUE KEY `foto` (`foto`),
  UNIQUE KEY `sinopsis` (`sinopsis`),
  UNIQUE KEY `trailer` (`trailer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(31, 'Gattaca', 1997, '../media/img/peliculas/gattaca.jpg', 106, 'Ambientada en una sociedad futura, la mayor parte de los niños son concebidos in vitro y con técnicas de selección genética. Vincent, uno de los últimos niños concebidos de modo natural, nace con una deficiencia cardíaca y no le dan más de 30 años de vida', 'https://www.youtube.com/watch?v=PC6ZA1dFkVk'),
(32, 'La roca', 1996, '../media/img/peliculas/la_roca.jpg', 125, 'Francis Hummel pretende que se indemnice a las familias de los soldados muertos en misiones secretas. Tras robar 16 misiles equipados con gas venenoso, toma Alcatraz y amenaza con lanzarlos sobre San Francisco', 'https://www.youtube.com/watch?v=yYXlDplZHfA'),
(33, 'Los intocables de Eliot Ness', 1987, '../media/img/peliculas/los_intocables_de_eliot_ness.jpg', 119, 'Chicago, años 30. Época de la Ley Seca. El idealista agente federal Eliot Ness persigue implacablemente al gángster Al Capone, amo absoluto del crimen organizado en la ciudad. Ness intentará encontrar algún medio para inculparlo por otra clase de delitos.', 'https://www.youtube.com/watch?v=fvOLY4hJTfs'),
(34, 'Mensaje en una botella', 1999, '../media/img/peliculas/mensaje_en_una_botella.jpg', 123, 'Durante un paseo por la playa, una periodista del Chicago Tribune, divorciada y con un hijo, encuentra una botella con una carta de amor en su interior. Intrigada, decide buscar a su autor, un marinero viudo que intenta superar la pérdida de su mujer.', 'https://www.youtube.com/watch?v=fvOLY4hJTfsm/watch?v=Wpb616fwYMk'),
(35, 'No hay salida', 1987, '../media/img/peliculas/no_hay_salida.jpg', 116, 'El Secretario de Defensa David Brice mata a su amante en un arrebato de furia. Para encubrir el escándalo, su fiel ayudante hace que las sospechas recaigan sobre un espía ruso, y para encontrarlo recluta al comandante de marina Tom Farrell.', 'https://www.youtube.com/watch?v=lypNWLvpb0I');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(46, 'Marea Roja', 1995, '../media/img/peliculas/marea_roja.jpg', 112, 'El submarino nuclear que dirigen el impulsivo capitán del Alabama, Frank Ramsey, y su lugarteniente, el reflexivo Teniente Coronel Ron Hunter,  se ve amenazado por un desequilibrado nacionalista ruso que quiere provocar la Tercera Guerra Mundial.', 'https://youtu.be/iS4I2Z1RBIw'),
(47, 'La Caza del Octubre Rojo', 1990, '../media/img/peliculas/la_caza_del_octubre_rojo.jpg', 132, 'Un submarino nuclear, al mando del general de la URSS (Connery), se interna en el Atlántico con rumbo a los EEUU. La CIA, que ignora si pretende atacarles o desertar de su país, encarga al agente Jack Ryan (Baldwin) averiguar sus verdaderas intenciones.', 'https://youtu.be/iGfk_IU3Wlo'),
(48, 'Tiburón', 1975, '../media/img/peliculas/tiburon.jpg', 124, 'En la costa de un pequeño pueblo del este de los EEUU, un enorme tiburón ataca a varias personas. Cuando el terror se apodera de todos, un veterano cazador de tiburones, un oceanógrafo y el jefe de la policía local se unen para capturar al escualo.', 'https://youtu.be/JvF0ECpkrqw'),
(49, 'La Trampa', 1999, '../media/img/peliculas/la_trampa.jpg', 115, 'Siguiendo la pista de una valiosa pieza de arte robada, la agente de seguros Gin Baker convence a su compañía para que le permitan llevar a cabo un golpe en colaboración con un prestigioso y veterano ladrón, Robert "Mac" MacDouglas.', 'https://youtu.be/FGfYYPRj4yU'),
(50, 'La Momia', 1999, '../media/img/peliculas/la_momia.jpg', 125, 'Durante una batalla en Egipto, el legionario Rick O''Connell y un compañero descubren las ruinas de Hamunaptra, la ciudad de los muertos. Algún tiempo después vuelven al mismo lugar con una egiptóloga y su hermano.', 'https://youtu.be/OmP7iifqO5Y'),
(81, 'La habitación de Fermat', 2007, '../media/img/peliculas/la_habitacion_de_fermat.jpg', 87, 'Cuatro desconocidos matemáticos son invitados por un misterioso anfitrión para  resolver un gran enigma. Se encuentran en una sala que empieza a menguar y corren el riesgo de morir aplastados. ¿Qué relación hay entre ellos? ¿Por qué quieren asesinarlos?', 'https://youtu.be/Gn3vwVRg_T0');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(76, 'Un golpe de altura', 2011, '../media/img/peliculas/un_golpe_de_altura.jpg', 104, 'Un multimillonario sin escrúpulos  ha estafado a sus empleados dejandolos sin blanca. Estos, encabezados por el gerente del edificio en el que vive, deciden vengarse atracando su vivienda', 'https://www.youtube.com/watch?v=M_lCuLcKf6c'),
(77, 'Descalzos por el parque', 1967, '../media/img/peliculas/descalzos_por_el_parque.jpg', 105, 'Un joven y conservador abogado  es la quintaesencia de la sensatez y el sentido común. En cambio, su esposa es un poco alocada y sólo piensa en pasárselo lo mejor posible. Ambos se enamoran al instante y se casan de inmediato.', 'https://www.filmaffinity.com/es/evideos.php?movie_id=863988'),
(78, 'Desayuno con diamantes', 1961, '../media/img/peliculas/desayuno_con_diamantes.jpg', 115, 'Holly Golightly es una bella joven neoyorquina que, aparentemente, lleva una vida fácil y alegre. Tiene un comportamiento bastante extravagante, por ejemplo, desayunar contemplando el escaparate de la lujosa joyería Tiffanys', 'https://www.youtube.com/watch?v=SYTQrywSPYI'),
(79, 'Un mundo perfecto', 1993, '../media/img/peliculas/un_mundo_perfecto.jpg', 138, 'Texas, año 1963. Butch Haynes es un peligroso e inteligente asesino que se ha escapado de la cárcel en compañía de otro preso. Durante la huida ambos se ven obligados a tomar como rehén al joven Philip un niño de ocho años', 'https://www.youtube.com/watch?v=SY-J2aOGxd0'),
(80, 'Cadena perpetua', 1994, '../media/img/peliculas/cadena_perpetua.jpg', 142, 'Acusado del asesinato de su mujer, Andrew Dufresne, tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank. Con los años conseguirá ganarse el respeto de sus compañeros , especialmente de Red, el jefe de la mafia de los sobornos', 'https://www.filmaffinity.com/es/evideos.php?movie_id=161026');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(66, 'Despertares', 1990, '../media/img/peliculas/despertares.jpg', 121, 'A finales de los años sesenta, el doctor Malcolm Sayer (Robin Williams), un neurólogo neoyorquino, decide utilizar un medicamento nuevo para tratar a sus pacientes de encefalitis letárgica.', 'https://www.youtube.com/watch?v=8ErH9IkqKZw'),
(67, 'Jumanji', 1995, '../media/img/peliculas/jumanji.jpg', 104, 'Alan Parris queda atrapado durante 25 años en un juego de mesa mágico y muy antiguo llamado Jumanji. Cuando, por fin, es liberado por dos niños, una manada de animales exóticos queda también en libertad.', 'https://www.youtube.com/watch?v=KcgsDnt3CIw'),
(68, 'Siempre el mismo día', 2011, '../media/img/peliculas/siempre_el_mismo_dia.jpg', 108, 'Emma (Hathaway) y Dexter (Sturgess) se conocen el día de su graduación universitaria, un 15 de julio.Ella es una chica idealista de clase trabajadora. Él, en cambio, es un joven rico con ganas de comerse el mundo. ', 'https://www.youtube.com/watch?v=XJGRkUtSFBo'),
(69, 'La jungla de cristal', 1988, '../media/img/peliculas/la_jungla_de_cristal.jpg', 131, 'En lo alto de la ciudad de Los Ángeles, un grupo terrorista se ha apoderado de un edificio tomando a un grupo de personas como rehenes.Sólo un hombre, el policía de Nueva York John McClane (Bruce Willis), ha conseguido escapar del acoso terrorista.', 'https://www.youtube.com/watch?v=hmYpNgC9n2M'),
(70, 'El caballero oscuro', 2008, '../media/img/peliculas/el_caballero_oscuro.jpg', 152, 'Batman/Bruce Wayne (Christian Bale) regresa para continuar su guerra contra el crimen.Con la ayuda del teniente Jim Gordon (Gary Oldman) y del Fiscal del Distrito Harvey Dent (Aaron Eckhart), Batman se propone destruir el crimen en la ciudad de Gotham.', 'https://www.youtube.com/watch?v=zrXP6TYK8rY');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(71, 'Mi vida es mía', 1981, '../media/img/peliculas/mi_vida_es_mia.jpg', 118, 'Ken Harrison, un escultor felizmente casado, tiene un día un accidente de coche en el que queda paralizado del cuello para abajo. A partir de entonces tendrá que aprender a enfrentarse a su nueva y dura situación.', 'https://www.filmaffinity.com/es/evideos.php?movie_id=718279'),
(72, 'Querido intruso', 1991, '../media/img/peliculas/querido_intruso.jpg', 115, 'Renata quiere casarse, pero el mismo día de la boda de su hermana, su novio la abandona. Para superarlo comienza a hacer un curso para vendedores y allí conoce a Sam, un hombre mucho mayor que ella y entrometido, pero millonario.', 'https://www.filmaffinity.com/es/evideos.php?movie_id=148820'),
(73, 'El planeta de los simios', 1968, '../media/img/peliculas/el_planeta_de_los_simios.jpg', 112, 'George Taylor es un astronauta que forma parte de una misión de larga duración que se estrella en un planeta desconocido en el que, a primera vista, no hay vida inteligente. Sin embargo, muy pronto se dará cuenta de que está gobernado por simios.', 'https://www.filmaffinity.com/es/evideos.php?movie_id=674289'),
(74, 'El último golpe', 2001, '../media/img/peliculas/el_ultimo_golpe.jpg', 107, 'Al jefe de una banda de atracadores de joyerías, un mafioso muy amigo suyo le encarga un gran golpe. Pero, a pesar de amistad, el mafioso envía a su sobrino para supervisar el plan, y para evitar que alguien se escape con el botín.', 'https://www.filmaffinity.com/es/evideos.php?movie_id=756264'),
(75, 'Capitan Phillips', 2013, '../media/img/peliculas/capitan_phillips.jpg', 135, 'En el año 2009, en aguas internacionales cerca de Somalia, en el cuerno de África, el buque carguero “Maersk Alabama”, al mando del capitán de la marina mercante estadounidense, Richard Phillips, fue abordado y retenido por piratas somalíes.', 'https://www.filmaffinity.com/es/evideos.php?movie_id=179609');

INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(1, 'Bailando con Lobos', 1990, '../media/img/peliculas/bailando_con_lobos.jpg', 180, 'Tras la Guerra de Secesión (1861-1865) y en plena colonización del Oeste (1785-1890), el teniente John J. Dunbar se dirige a un lejano puesto fronterizo que ha sido abandonado por los soldados. Su soledad lo impulsa a entrar en contacto con los indios sio', 'https://www.youtube.com/watch?v=g2P5QuLP7GE'),
(2, 'Kramer contra Kramer', 1979, '../media/img/pelicular/kramer_contra_kramer.jpg', 104, 'Cuando Ted Kramer, un ejecutivo de publicidad, es abandonado por su mujer, tiene que hacerse cargo por primera vez de su hijo: deberá conquistar el afecto del niño y hacer de padre y madre a la vez, sin descuidar su carrera profesional', 'https://www.youtube.com/watch?v=jNLcfJ06y34'),
(3, 'Los Hombres de Negro I', 1997, '../media/img/pelicular/los_hombre_de_negro_1.jpg', 98, 'Durante muchos años los extraterrestres han vivido en la Tierra, mezclados con los seres humanos, sin que nadie lo supiese. Los Hombres de Negro son agentes especiales que forman parte de una unidad altamente secreta del gobierno; su misión consiste en co', 'https://www.youtube.com/watch?v=PcXlZ-2NPi8'),
(4, 'Los Hombres de Negro II', 2002, '../media/img/pelicular/los_hombre_de_negro_2.jpg', 88, 'Cuatro años después, el agente K vuelve a trabajar en el servicio postal mientras que el agente J sigue persiguiendo alienígenas. Cuando la integridad de la Tierra vuelve a estar en peligro, J tendrá que convencer a K para que se aliste de nuevo', 'https://www.youtube.com/watch?v=Y2iscsPp26Y'),
(5, 'Los Hombres de Negro III', 2013, '../media/img/pelicular/los_hombre_de_negro_3.jpg', 103, 'Cuando el MIB recibe la información de que el Agente K podría morir a manos de un alienígena, lo que cambiaría la historia para siempre, el Agente J es enviado a los años 60 para evitarlo. Tercera entrega de la popular saga Men in Black', 'https://www.youtube.com/watch?v=LRMDiL4nRao');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(26, 'Una historia del Bronx ', 1993, '../media/img/peliculas/una_historia_del_bronx.jpg', 122, 'El gángster Sonny es el rey del barrio del Bronx, donde vive el pequeño Calogero. Un tiroteo, presenciado por el niño, es el punto de partida de una duradera relación entre el gángster y el pequeño.', 'https://youtu.be/dOvfhOV8GTE'),
(27, 'Blade Runner', 1982, '../media/img/peliculas/blade_runner.jpg', 112, 'A principios del siglo XXI, la poderosa Tyrell Corporation creó, un robot llamado Nexus 6, idéntico al hombre pero superior a él en fuerza y agilidad, al que se dio el nombre de Replicante.Los Replicantes fueron desterrados de la Tierra trás la rebelión.', 'https://youtu.be/eogpIG53Cis'),
(28, 'El Fugitivo', 1993, '../media/img/peliculas/el_fugitivo.jpg', 133, 'La vida del doctor R. Kimble, un reputado cirujano con una bella esposa y una lujosa casa en un barrio de Chicago, se desmorona el día en que su mujer es brutalmente asesinada por un misterioso manco. Kimble es acusado del crimen y condenado a muerte.', 'https://youtu.be/ETPVU0acnrE'),
(29, 'El color del dinero', 1986, '../media/img/peliculas/el_color_del_dinero.jpg', 117, 'Eddie Felson, antiguo campeón de billar ,conoce a Vincent, un joven jugador de billar, que aún no ha encontrado un oponente de su talla, y que siempre va acompañado de su novia, que es la que se encarga de las apuestas que se hacen a favor de Vincent.', 'https://youtu.be/J8ysns3Vo3M'),
(30, 'Enemigo público', 1988, '../media/img/peliculas/enemigo_público.jpg', 132, 'La feliz vida y brillante carrera del abogado Robert Clayton Dean están a punto de desmoronarse, cuando llega a sus manos una cinta de vídeo que contiene imágenes del asesinato de un miembro del Congreso de los Estados Unidos', 'https://youtu.be/nf8daE3su4A');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(21, 'Misión Imposible I', 1996, '../media/img/peliculas/mision_imposible_1.jpg', 110, 'Ethan Hunt participa en una dificilísima misión: evitar la venta de un disco robado que contiene información secreta de vital importancia.', 'https://www.youtube.com/watch?v=Cx44ALwmpcs'),
(22, 'Misión Imposible II', 2000, '../media/img/peliculas/mision_imposible_2.jpg', 121, 'La nueva misión del agente especial Ethan Hunt consiste en impedir que un despiadado ex-agente que se ha convertido en terrorista internacional se apodere de un virus mortal.', 'https://www.youtube.com/watch?v=5A8k1NZfov8'),
(23, 'Misión Imposible III', 2006, '../media/img/peliculas/mision_imposible_3.jpg', 126, 'El agente especial Ethan Hunt se ha retirado del servicio activo y se ha prometido con su amada Julia. Pero, cuando es secuestrado uno de los agentes entrenados por él, volverá de nuevo a la acción.', 'https://www.youtube.com/watch?v=PRskl3TBa3s '),
(24, 'Misión Imposible IV', 2011, '../media/img/peliculas/mision_imposible_4.jpg', 127, 'El agente Ethan Hunt  es acusado de un atentado terrorista con bombas contra el Kremlin. Abandonado a su suerte y sin recursos, el objetivo de Ethan es rehabilitar el buen nombre de su agencia e impedir un nuevo ataque.', 'https://www.youtube.com/watch?v=NPjnoBd5GOM'),
(25, 'Misión Imposible V', 2015, '../media/img/peliculas/mision_imposible_5.jpg', 131, 'Con la FMI disuelta y Ethan Hunt , el equipo tiene que enfrentarse contra el Sindicato, una red de agentes especiales altamente preparados y entrenados. Estos grupos están empeñados en crear un nuevo orden mundial mediante una serie de ataques terroristas', 'https://www.youtube.com/watch?v=tk21zh9YWnQ');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(61, 'La Lista de Schindler', 1993, '../media/img/peliculas/pelicula_61.jpg', 195, 'La lista de Schindler es una película estadounidense de 1993 dirigida por Steven\r\nSpielberg. La película cuenta la historia de Oskar Schindler, un empresario alemán que salvó la vida de alrededor de 1100 judíos polacos durante el\r\nHolocausto.', 'https://www.youtube.com/watch?v=wsIQIPmiAuc'),
(62, 'Cuatro bodas y un Funeral', 1994, '../media/img/peliculas/pelicula_62.jpg', 117, 'Charles (Hugh Grant) y sus amigos, todos ellos solteros y sin compromiso, han llegado a una edad en la que casi todos sus conocidos se han casado. En una de las bodas, a la que el grupo ha sido invitado, Charles conoce a Carrie (Andie Macdowell), una amer', 'https://www.youtube.com/watch?v=Tx2eju6PaRQ'),
(63, 'El Padrino: parte I', 1972, '../media/img/peliculas/pelicula_63.jpg', 175, 'América, años 40. Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Fredo (John Cazale) y Michae', 'https://www.youtube.com/watch?v=gCVj1LeYn'),
(64, 'El padrino: parte II', 1974, '../media/img/peliculas/pelicula_64.jpg', 200, 'Vito Corleone, inmigrante italiano, llegó a Nueva York a principios de siglo,\r\nrápidamente, se convirtió en uno de los cabecillas del barrio usando la violencia como medio para solucionar cualquier asunto. Solo en sus primeros años levantó un\r\nverdadero i', 'https://www.youtube.com/watch?v=98m3mzZJyDg'),
(65, 'Avatar', 2009, '../media/img/peliculas/pelicula_65.jpg', 162, 'En un futuro indeterminado, el soldado Jake Sully (Sam Worthington), veterano de guerra con\r\nimportantes problemas físicos, es enviado al planeta Pandora con el objetivo de robar una importante materia prima. Pero allí habita una raza alienígena que posee', 'https://www.youtube.com/watch?v=kbA9TfGphOI');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(16, 'BraveHeart', 1995, '../media/img/peliculas/brave_heart.jpg', 177, 'En el siglo XIV, los escoceses viven oprimidos por los gravosos tributos y las injustas leyes impuestas por los ingleses', 'https://www.youtube.com/watch?v=wo_EIFELKcI'),
(17, 'Buenas noches y buena suerte', 2005, '../media/img/peliculas/buenas_noches_y_buena_suerte.jpg', 90, 'Ambientada en 1953, narra el enfrentamiento real que, en defensa del periodismo independiente, mantuvieron el famoso periodista y presentador de la CBS Edward R. Murrow (David Strathairn) y su productor Fred Friendly ', 'https://www.youtube.com/watch?v=0v_r2jewQKo'),
(18, 'Fargo', 1996, '../media/img/peliculas/fargo.jpg', 97, 'Un hombre apocado y tímido, casado con la hija de un millonario que le impide disfrutar de su fortuna, decide contratar a dos delincuentes para que secuestren a su mujer con el fin de montar un negocio propio con el dinero del rescate. Pero, por una serie', 'https://www.youtube.com/watch?v=-vFPtCfVBOo'),
(19, 'La Mision', 1997, '../media/img/peliculas/la_mision.jpg', 125, 'Hispanoamérica, siglo XVIII. En plena jungla tropical junto a las cataratas de Iguazú un misionero jesuita, el padre Gabriel, sigue el ejemplo de un jesuita crucificado, sin más armas que su fe y una flauta', 'https://www.youtube.com/watch?v=llNgmwzyR7M'),
(20, 'Locos en Alabama', 1999, '../media/img/peliculas/locos_en_alabama.jpg', 104, 'Peter Joseph, al que todos llaman Peejoe, tiene doce años y vive en una pequeña localidad sureña de Alabama; su rutinaria existencia se verá alterada cuando su tía Lucille, que acaba de matar a su marido, decide irse a Hollywood ', 'https://www.youtube.com/watch?v=_gPN4sWxEUg');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(1000, 'Náufrago', 2000, '../media/img/peliculas/naufrago.jpg', 143, 'Chuck Noland, un ejecutivo de la empresa multinacional de mensajería FedEx, se ve apartado de su cómoda vida y de su prometida a causa de un accidente de avión que lo deja aislado de la civilización en una remota isla tropical en medio del océano. Tras cu', 'https://www.traileraddict.com/cast-away/trailer'),
(1001, 'Doce hombres sin piedad', 1957, '../media/img/peliculas/doce_hombres_sin_piedad.jpg', 95, 'Los doce miembros de un jurado deben juzgar a un adolescente acusado de haber matado a su padre. Todos menos uno están convencidos de la culpabilidad del acusado. El que disiente intenta con sus razonamientos introducir en el debate una duda razonable que', 'https://youtu.be/A7CBKT0PWFA'),
(1002, 'Guerra mundial Z', 2013, '../media/img/peliculas/guerra_mundial_z.jpg', 116, 'Cuando el mundo comienza a ser invadido por una legión de muertos vivientes, Gerry Lane (Brad Pitt), un experto investigador de las Naciones Unidas, intentará evitar el fin de la civilización en una carrera contra el tiempo y el destino. La destrucción a ', 'https://youtu.be/qbWQs2X6IZ4'),
(1003, 'La huella', 1972, '../media/img/peliculas/la_huella.jpg', 138, 'Andrew Wyke (Laurence Olivier) es un prestigioso escritor de novelas de intriga. Además, su pasión por los juegos de ingenio y las adivinanzas lo ha llevado a convertir su gran mansión en una especie de museo, donde se exponen los juguetes y mecanismos má', 'https://youtu.be/LsHf-RQiO40'),
(1004, 'Al final de la escalera', 1980, '../media/img/peliculas/al_final_de_la_escalera.jpg', 109, 'John (George C. Scott) es un compositor que acaba de perder a su familia de manera trágica y trata de superarlo marchándose a vivir a una casa apacible y solitaria. Sin embargo, al poco de tiempo de instalarse empiezan a suceder cosas extrañas... Hasta qu', 'https://youtu.be/AzWmUM-U3wY');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(11, 'Ocean´s Eleven', 2001, '../media/img/peliculas/oceans_eleven.jpg', 117, 'Danny Ocean es un carismático ladrón que, tan sólo 24 horas después de cumplir una larga condena en prisión,ya está planeando su próximo delito. Su objetivo: realizar el mayor atraco de casinos de la historia.', 'https://www.youtube.com/watch?v=ImMGNQ2OEjo'),
(12, 'Ocean´s Thirteen', 2007, '../media/img/peliculas/oceans_thirteen.jpg', 115, 'Danny Ocean (George Clooney) y su banda preparan un ambicioso y arriesgado plan para robar un casino. Su único objetivo, en este caso, es defender a uno de los suyos, que ha sido engañado por Willy Bank (Al Pacino), el despiadado dueño del casino.', 'https://www.youtube.com/watch?v=L-EyG12LxME'),
(13, 'Ocean´s Twelve', 2004, '../media/img/peliculas/oceans_twelve.jpg', 120, 'Danny Ocean (Clooney), Tess (Roberts) y su banda vuelven a formar equipo. Esta vez el golpe será múltiple: tres espectaculares atracos en tres lugares diferentes, Roma, París y Ámsterdam.', 'https://www.youtube.com/watch?v=Ze4WPu2kHus'),
(14, 'Pulp Fiction', 1994, '../media/img/peliculas/pulp-fiction.jpg', 153, 'Jules y Vincent, dos asesinos a sueldo con no demasiadas luces, trabajan para el gángster Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su atractiva mujer.', 'https://www.youtube.com/watch?v=ZFYCXAG6fdo'),
(15, 'Tienes un E-mail', 1998, '../media/img/peliculas/tienes_un_e-mail.jpg', 119, 'Kathleen Kelly, la propietaria de una pequeña librería de cuentos infantiles, ve peligrar su negocio cuando una cadena de grandes librerías abre un local al lado de su tienda.', 'https://www.youtube.com/watch?v=9yCXXKktFyM');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(36, 'Dos hombres y un Destino', 1969, '../media/img/peliculas/dos_hombre_y_un_destino.jpg', 112, 'Una compañía de trenes tras sufrir varios atracos por una banda de forajidos decide contratar a un pelotón de hombre que los elimine, la banda decide separarse, Sundance y Butch junto con la novia del primero inician un viaje que les llevara a Bolivia', 'https://www.youtube.com/watch?v=S2OdPDEG6aQ'),
(37, 'El Golpe', 1973, '../media/img/peliculas/el_golpe.jpg', 129, 'Chicago, años treinta.Hooker y Gondorff son dos timadores que deciden vengar la muerte de un viejo y querido colega asesinado por orden del capo Lonnegan.Para ello urdirán un ingenioso y complicado plan con la ayuda de todos sus amigos y conocidos', 'https://www.youtube.com/watch?v=w98KZJ749E0'),
(38, 'El Rey Pescador', 1991, '../media/img/peliculas/el_rey_pescador.jpg', 137, 'Uno de los programas del locutor de radio Jack Luca provoca que un oyente asesine en un bar a siete personas y se suicide, a partir de esto su carrera se arruina y decide suicidarse, en ese momento un vagabundo le salva e inician la búsqueda del Grial', 'https://www.youtube.com/watch?v=4MFprCoM7IE'),
(39, 'Heat', 1995, '../media/img/peliculas/heat.jpg', 172, 'Neil McCauley es un experto ladrón en una banda de criminales profesionales. El detective Vincent Hanna, un hombre obsesionado con su trabajo. McCauley prepara el golpe definitivo, Hannah se dispone a evitarlo, produciéndose un desafío entre ambos', 'https://www.youtube.com/watch?v=LG5GxARepqM'),
(40, 'Insomnio', 2002, '../media/img/peliculas/insomnio.jpg', 118, 'Will Dormer, un veterano detective de Los Ángeles, viaja a un pequeño pueblo de Alaska con su compañero para investigar un asesinato, entran en contacto con Walter Finch, un novelista solitario que es sospechoso. En Los Ángeles queda pendiente un asunto', 'https://www.youtube.com/watch?v=I6-XzKkQRCc');









INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(6, 'Los Puentes de Madison', 1995, '../media/img/peliculas/los_puentes_de_madison.jpg', 135, ' Los puentes de Madison es una película estadounidense de 1995 dirigida por Clint Eastwood e interpretada por el propio Eastwood junto a Meryl Streep, Annie Corley, Victor Slezak y Jim Haynie, entre otros.', 'https://www.youtube.com/watch?v=yuzgpOEN7NA'),
(7, 'Spy Game', 2001, '../media/img/peliculas/spy_game.jpg', 127, ' Spy Game es una película de espionaje estadounidense del año 2001 dirigida por Tony Scott, y protagonizada por Robert Redford y Brad Pitt.', 'https://www.youtube.com/watch?v=M1f0c3utHGI'),
(8, 'Cara a Cara', 1997, '../media/img/peliculas/cara_a_cara.jpg', 140, ' Face/Off,  dirigida por John Woo  y protagonizada por J. Travolta y Nicolas Cage. Un agente del FBI asume la apariencia física de su peor enemigo con el objetivo de parar un plan terrorista, y al mismo tiempo cómo el enemigo luego se convierte en él.', 'https://www.youtube.com/watch?v=8MZvnEb6POg'),
(9, 'Ciudad de Ángeles', 1998, '../media/img/peliculas/ciudad_de_angeles.jpg', 116, '  City of Angels es una película estadounidense de 1998, dirigida por Brad Silberling. Protagonizada por Nicolas Cage y Meg Ryan, transcurre en Los Ángeles, California. Está inspirada en la película alemana de Wim Wenders, Cielo sobre Berlín.', 'https://www.youtube.com/watch?v=_iQbnYsXAMI'),
(10, 'Argo', 2012, '../media/img/peliculas/argo.jpg', 116, '  Argo es una película estadounidense de suspense producida en el año 2012. Fue dirigida por Ben Affleck y resultó ganadora del Oscar a la mejor película.', 'https://www.youtube.com/watch?v=Ou2JnNCys10');



INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(41, 'Pactar con el Diablo', 1998, '../media/img/peliculas/pactar_con_el_diablo.jpg', 144, 'Kevin Lomax es un joven y brillante abogado. Vive en Florida con Mary. Recibe la visita de un abogado de Nueva York que representa a un poderoso bufete que tiene la intención de contratarlo. Al frente de la prestigiosa empresa se encuentra John Milton.', 'https://youtu.be/LpkTjtmuNA4'),
(42, 'Rain man', 1989, '../media/img/peliculas/rain_man.jpg', 129, 'Charlie Babbitt, un joven egoísta que espera heredar la fortuna de padre, se entera que el beneficiario es su hermano, un autista. Ambos harán un viaje. Al principio, a Charlie, el comportamiento de su hermano lo irrita, pero, aprenderá a quererlo.', 'https://youtu.be/KKC3W0awjm0'),
(43, 'Alien: el Octavo Pasajero', 1979, '../media/img/peliculas/alien_el_octavo_pasajero.jpg', 116, 'La nave Nostromo interrumpe su viaje y despierta a sus tripulantes. El ordenador central,  ha detectado una transmisión de una forma de vida desconocida, de un planeta aparentemente deshabitado. La nave se dirige al extraño planeta para investigar.', 'https://youtu.be/bEVY_lonKf4'),
(44, 'Un Franco, 14 Pesetas', 2006, '../media/img/peliculas/un_franco_14_pesetas.jpg', 105, 'Martín vive con su mujer y su hijo, en el sótano de sus padres. La situación provoca que decidan emigrar a Suiza, sin contrato de trabajo y haciéndose pasar por turistas. Pablo se enfrentará a cambios drásticos: ver marchar a su padre, cambiar de país.', 'https://youtu.be/XQWbVmKVtao'),
(45, 'Mientras Duermes', 2011, '../media/img/peliculas/mientras_duermes.jpg', 107, 'César es el portero de un edificio de apartamentos y no cambiaría este trabajo por ningún otro. Si quisiera podría controlar sus vidas. César guarda un secreto muy peculiar: le gusta hacer daño.la nueva vecina no deja de sonreír.', 'https://youtu.be/pJFXlyd9JwM');


INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `fecha`, `foto`, `duracion`, `sinopsis`, `trailer`) VALUES
(56, 'Que ruina de funcion', 1992, '../media/img/peliculas/Que_ruina_de_funcion.jpg', 143, ' (titulada ¡Qué ruina de función! en España y Detrás del telón en Hispanoamérica) es una comedia de 1992, dirigida por Peter Bogdanovich y protagonizada por Carol Burnett, Michael Caine y Christopher Reeve entre otros. La película está basada en una aclam', 'https://www.youtube.com/watch?v=4G9ZwPVQKic'),
(57, 'Lo que la verdad esconde', 2000, '../media/img/peliculas/Lo_que_la_verdad esconde.jpg', 130, 'Una pareja madura ve como su hija se ha hecho mayor y se va de la casa entrando en una nueva fase de su vida Ella (Claire) cada vez pasa más tiempo en casa  ahora vive en una orilla', 'https://www.youtube.com/watch?v=Ls6CNaZLrr8'),
(58, 'Algunos hombres buenos', 1992, '../media/img/peliculas/Algunos_hombres_ buenos.jpg', 138, ' Según la acusación han matado a un compañero. Ellos mantienen, sin embargo, que cumplieron órdenes del coronel Nathan R. Jessep para castigar a su compañero William T. Santiago por haber infringido el código de honor del Cuerpo de Marines', 'https://www.youtube.com/watch?v=WIupxAWMNdU'),
(59, 'Celda 211', 2009, '../media/img/peliculas/Celda_211.jpg', 140, 'En un momento dado la policía ve por medio de una cámara a unos presos de ETA que Malamadre ha capturado, revelándose el auténtico motivo del motín: montar aquella reyerta y capturar a unos presos importantes ', 'https://www.youtube.com/watch?v=M1MNb836IGw'),
(60, 'Fracture', 2007, '../media/img/peliculas/Fracture.jpg', 90, ' película estadounidense del año 2007, dirigida por Gregory Hoblit, del género suspense. Está protagonizada por Anthony Hopkins, Ryan Gosling, David Strathairn y Rosamund Pik', 'https://www.youtube.com/watch?v=xjgtpsCFFmY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE IF NOT EXISTS `generos` (
  `cod_genero` tinyint(3) unsigned NOT NULL,
  `genero` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_genero`),
  UNIQUE KEY `genero` (`genero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`cod_genero`, `genero`) VALUES
(8, 'Acción'),
(14, 'Aventuras'),
(19, 'Bélico'),
(5, 'Ciencia Ficción'),
(22, 'Cine Familiar'),
(7, 'Cine Negro'),
(1, 'Comedia'),
(11, 'Comedia Romántica'),
(17, 'Crimen'),
(2, 'Drama'),
(13, 'Espionaje'),
(16, 'Fantástico'),
(18, 'Gánster'),
(6, 'Histórico'),
(12, 'Intriga'),
(23, 'Otros'),
(21, 'Policiaco'),
(15, 'Romántico'),
(4, 'Suspense'),
(3, 'Terror'),
(10, 'Terrorismo'),
(9, 'Thriller'),
(20, 'Western');



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `cod_persona` smallint(5) unsigned NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(80) NOT NULL,
  `fecha_nacimiento` year(4) DEFAULT NULL,
  `nacionalidad` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`cod_persona`),
  UNIQUE KEY `foto` (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(600, 'Andrew', 'Niccol', 1964, 'Neozelandés', '../media/img/personas/andrew_niccol.jpg'),
(601, 'Michael', 'Bay', 1965, 'Estadounidense', '../media/img/personas/michael_bay.jpg'),
(602, 'Brian', 'De Palma', 1940, 'Estadounidense', '../media/img/personas/brian_de_palma.jpg'),
(603, 'Luis', 'Mandoki', 1954, 'Mexicano', '../media/img/personas/luis_mandoki.jpg'),
(604, 'Roger', 'Donaldson', 1945, 'Australiano', '../media/img/personas/roger_donaldson.jpg'),
(605, 'Ethan', 'Hawke', 1970, 'Estadounidense', '../media/img/personas/ethan_hawke.jpg'),
(607, 'Uma', 'Thurman', 1970, 'Estadounidense', '../media/img/personas/uma_thurman.jpg'),
(608, 'Nicolas', 'Cage', 1964, 'Estadounidense', '../media/img/personas/nicolas_cage.jpg'),
(609, 'Robin', 'Wright', 1966, 'Estadounidense', '../media/img/personas/robin_wright.jpg'),
(610, 'Jude', 'Law', 1972, 'Británico', '../media/img/personas/jude_law.jpg'),
(611, 'Ed', 'Harris', 1950, 'Estadounidense', '../media/img/personas/ed_harris.jpg'),
(612, 'Paul', 'Newman', 1925, 'Estadounidense', '../media/img/personas/paul_newman.jpg'),
(613, 'Charles', 'Martin Smith', 1953, 'Estadounidense', '../media/img/personas/charles_martin_smith.jpg'),
(614, 'Andy', 'García', 1956, 'Estadounidense', '../media/img/personas/andy_garcia.jpg'),
(615, 'Billy', 'Drago', 1949, 'Estadounidense', '../media/img/personas/billy_drago.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(900, 'Gene', 'Hackman', 1930, 'Estadounidense', '..media/img/personas/gene_hackman.jpg'),
(901, 'Denzel', 'Washington', 1954, 'Estadounidense', '../media/img/personas/denzel_washington.jpg'),
(902, 'George', 'Dzundza', 1945, 'Estadounidense', '../media/img/personas/george_dzundza.jpg'),
(903, 'Viggo', 'Mortensen', 1958, 'Estadounidense', '../media/img/personas/viggo_mortensen.jpg'),
(904, 'James', 'Gandolfini', 1961, 'Estadounidense', '../media/img/personas/james_gandolfini.jpg'),
(905, 'Ryan', 'Phillippe', 1974, 'Estadounidense', '../media/img/personas/ryan_phillippe.jpg'),
(906, 'John', 'McTiernan', 1951, 'Estadounidense', '../media/img/personas/john_mctiernan.jpg'),
(907, 'Alec', 'Baldwin', 1958, 'Estadounidense', '../media/img/personas/alec_baldwin.jpg'),
(908, 'Sean', 'Connery', 1930, 'Escocesa', '../media/img/personas/sean_connery.jpg'),
(909, 'Sam', 'Neill', 1947, 'Neozelandesa', '../media/img/personas/sam_neill.jpg'),
(910, 'Scott', 'Glenn', 1941, 'Estadounidense', '../media/img/personas/scott_glenn.jpg'),
(911, 'Tim', 'Curry', 1946, 'Británica', '../media/img/personas/tim_curry.jpg'),
(912, 'James Earl', 'Jones', 1931, 'Estadounidense', '../media/img/personas/james_earljones.jpg'),
(913, 'Steven', 'Spielberg', 1946, 'Estadounidense', '../media/img/personas/steven_spielberg.jpg'),
(914, 'Roy', 'Scheider', 1932, 'Estadounidense', '../media/img/personas/roy_scheider.jpg'),
(915, 'Robert', 'Shaw', 1927, 'Británica', '../media/img/personas/robert_shaw.jpg'),
(916, 'Richard', 'Dreyfuss', 1947, 'Estadounidense', '../media/img/personas/richard_dreyfuss.jpg'),
(917, 'Jon', 'Amiel', 1948, 'Británica', '../media/img/personas/jon_amiel.jpg'),
(919, 'Will', 'Patton', 1954, 'Estadounidense', '../media/img/personas/will_patton.jpg'),
(920, 'Stephen', 'Sommers', 1962, 'Estadounidense', '../media/img/personas/stephen_sommers.jpg'),
(921, 'Brendan', 'Fraser', 1968, 'Estadounidense', '../media/img/personas/brendan_fraser.jpg'),
(922, 'Rachel', 'Weisz', 1970, 'Británica', '../media/img/personas/rachel_weisz.jpg'),
(923, 'John', 'Hannah', 1962, 'Escocesa', '../media/img/personas/john_hannah.jpg'),
(924, 'Luis', 'Piedrahita', 1977, 'Española', '../media/img/personas/luis_piedrahita.jpg'),
(925, 'Rodrigo', 'Sopeña', 1977, 'Española', '../media/img/personas/rodrigo_sopena.jpg'),
(926, 'Alejo', 'Sauras', 1979, 'Española', '../media/img/personas/alejo_sauras.jpg'),
(927, 'Elena', 'Ballesteros', 1981, 'Española', '../media/img/personas/elena_ballesteros.jpg'),
(928, 'Santi', 'Millán', 1968, 'Española', '../media/img/personas/santi_millan.jpg'),
(929, 'Lluís', 'Homar', 1957, 'Española', '../media/img/personas/lluis_homar.jpg'),
(930, 'Federico', 'Luppi', 1936, 'Argentina', '../media/img/personas/federico_luppi.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(1500, 'Brett', 'Ratner', 1969, 'Estadounidense', '../media/img/personas/brett_ratner.jpg'),
(1501, 'Ben', 'Stiller', 1965, 'Estadounidense', 'media/imag/personas/ben_stiller.jpg'),
(1502, 'Tea', 'Leoni', 1966, 'Estadounidense', '../media/img/personas/tea_leoni.jpg'),
(1503, 'Matthew', 'Broderick', 1962, 'Estadounidense', '../media/img/personas/mathew_broderick.jpg'),
(1504, 'Casey', 'Affleck', 1975, 'Estadounidense', '../media/img/personas/cassey_affleck.jpg'),
(1505, 'Alan', 'Alda', 1936, 'Estadounidense', '../media/img/personas/alan_alda.jpg'),
(1506, 'Gene', 'Saks', 1921, 'Estadounidense', '../media/img/personas/gen_saks.jpg'),
(1507, 'Robert', 'Redford', 1936, 'Estadounidense', '../media/img/personas/robert_redford.jpg'),
(1508, 'Jane', 'Fonda', 1937, 'Estadounidensea', '../media/img/personas/jane_fonda.jpg'),
(1509, 'Charles', 'Boyer', 0000, 'Francesa', '../media/img/personas/charles_boyer.jpg'),
(1510, 'Mildred', 'Natwick', 1905, 'Estadounidense', '../media/img/personas/mildred_natwick.jpg'),
(1511, 'Herb', 'Edelman', 1933, 'Estadounidense', '../media/img/personas/herb_edelman.jpg'),
(1512, 'Fritz', 'Feld', 0000, 'Alemana', '../media/img/personas/fritz_feld.jpg'),
(1513, 'Blake', 'Edwards', 1922, 'Estadounidense', '../media/img/personas/blake_edwards.jpg'),
(1514, 'Audrey', 'Hepburn', 1929, 'Belga', '../media/img/personas/audrey_hepburn.jpg'),
(1515, 'George', 'Peppard', 1928, 'Estadounidense', '../media/img/personas/george_peppard.jpg'),
(1516, 'Patricia', 'Neal', 1926, 'Estadounidense', '../media/img/personas/patricia_neal.jpg'),
(1517, 'Buddy', 'Ebsen', 1908, 'Estadounidense', '../media/img/personas/buddy_ebsen.jpg'),
(1518, 'Martin', 'Balsam', 1919, 'Estadounidense', '../media/img/personas/martin_balsam.jpg'),
(1519, 'Mickey', 'Rooney', 1920, 'Estadounidense', '../media/img/personas/mickey_rooney.jpg'),
(1520, 'Clint', 'Eastwood', 1930, 'Estadounidense', '../media/img/personas/clint_eastwood.jpg'),
(1521, 'Laura', 'Dern', 1967, 'Estadounidense', '../media/img/personas/laura_dern.jpg'),
(1522, 'T.J.', 'Lowther', 1986, 'Estadounidense', '../media/img/img/tj_lowther.jpg'),
(1523, 'Keith', 'Szarabajka', 1952, 'Estadounidense', '../media/img/personas/keith_szarabajka.jpg'),
(1524, 'Leo', 'Burmester', 1944, 'Estadounidense', '../media/img/personas/leo_burmester.jpg'),
(1525, 'Frank', 'Darabont', 1959, 'Francesa', '../media/img/personas/frank_darabont.jpg'),
(1526, 'Morgan', 'Freeman', 1937, 'Estadounidense', '../media/img/personas/morgan_freeman.jpg'),
(1527, 'Tim', 'Robbins', 1958, 'Estadounidense', '../media/img/personas/tim_robbins.jpg'),
(1528, 'Bob', 'Gunton', 1945, 'Estadounidense', '../media/img/personas/bob_gunton.jpg'),
(1529, 'James', 'Whitmore', 1948, 'Estadounidense', '../media/img/personas/james_whitmore.jpg'),
(1530, 'Gil', 'Bellows', 1967, 'Canadiense', '../media/img/personas/gill_bellows.jpg'),
(1531, 'William', 'Sadler', 1950, 'Estadounidense', '../media/img/personas/william_sadler.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(1300, 'Penny', 'Marshall', 1943, 'Estadounidense', '../media/img/personas/penny_marshall.jpg'),
(1301, 'Robin', 'Williams', 1951, 'Estadounidense', '../media/img/personas/robin_williams.jpg'),
(1302, 'Julie', 'Kavner', 1950, 'Estadounidense', '../media/img/personas/julie_kavner.jpg'),
(1303, 'Ruth', 'Nelson', 1905, 'Estadounidense', '../media/img/personas/ruth_nelson.jpg'),
(1304, 'John', 'Heard', 1945, 'Estadounidense', '../media/img/personas/john_heard.jpg'),
(1305, 'Joe', 'Johnston', 1950, 'Estadounidense', '../media/img/personas/joe_johnston.jpg'),
(1306, 'Kirsten', 'Dunst', 1982, 'Estadounidense', '../media/img/personas/kirsten_dunst.jpg'),
(1307, 'David Alan', 'Grier', 1956, 'Estadounidense', '../media/img/personas/david_alan_grier.jpg'),
(1308, 'Bonnie', 'Hunt', 1961, 'Estadounidense', '../media/img/personas/bonnie_hunt.jpg'),
(1309, 'Jonathan', 'Hyde', 1948, 'Australiana', '../media/img/personas/jonathan_hyde.jpg'),
(1310, 'Lone', 'Scherfig', 1959, 'Danesa', '../media/img/personas/lone_scherfig.jpg'),
(1311, 'Anne', 'Hathaway', 1982, 'Estadounidense', '../media/img/personas/anne_hathaway.jpg'),
(1312, 'Jim', 'Sturgess', 1978, 'Britanica', '../media/img/personas/jim_sturgess.jpg'),
(1313, 'Patricia', 'Clarkson', 1959, 'Britanica', '../media/img/personas/patricia_clarkson.jpg'),
(1314, 'Romola', 'Garai', 1982, 'Hong Kong britanico', '../media/img/personas/romola_garai.jpg'),
(1315, 'Rafe', 'Spall', 1983, 'Britanica', '../media/img/personas/rafe_spall.jpg'),
(1316, 'Bruce', 'Willis', 1955, 'Estadounidense', '../media/img/personas/bruce_willis.jpg'),
(1317, 'Bonnie', 'Bedelia', 1948, 'Estadounidense', '../media/img/personas/bonnie_bedelia.jpg'),
(1318, 'Alan', 'Rickman', 1946, 'Britanica', '../media/img/personas/alan_rickman.jpg'),
(1319, 'Alexander', 'Godunov', 1949, 'Rusa', '../media/img/personas/alexander_godunov.jpg'),
(1320, 'Reginald', 'Veljohnson', 1952, 'Estadounidense', '../media/img/personas/reginald_veljohnson.jpg'),
(1321, 'Christian', 'Bale', 1974, 'Britanica', '../media/img/personas/christian_bale.jpg'),
(1322, 'Heath', 'Ledger', 1979, 'Estadounidense', '../media/img/personas/heath_ledger.jpg'),
(1323, 'Aaron', 'Eckhart', 1968, 'Estadounidense', '../media/img/personas/aaron_eckhart.jpg'),
(1324, 'Michael', 'Caine', 1933, 'Britanica', '../media/img/personas/michael_caine.jpg'),
(1325, 'Gary', 'Oldman', 1958, 'Britanica', '../media/img/personas/gary_oldman.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(1400, 'John', 'Badham', 1939, 'Estadounidense', '../media/img/personas/john_badham.jpg'),
(1401, 'John', 'Cassavetes', 1929, 'Estadounidense', '../media/img/personas/john_cassavetes.jpg'),
(1402, 'Christine', 'Lahti', 1950, 'Estadounidense', '../media/img/personas/christine _lahti.jpg'),
(1403, 'Bob', 'Balaban', 1945, 'Estadounidense', '../media/img/personas/bob _balaban.jpg'),
(1404, 'Lasse', 'Hallström', 1946, 'Sueco', '../media/img/personas/lasse_hallström.jpg'),
(1405, 'Holly', 'Hunter', 1958, 'Estadounidense', '../media/img/personas/holly_hunter.jpg'),
(1406, 'Danny', 'Aiello', 1933, 'Estadounidense', '../media/img/personas/danny_aiello.jpg'),
(1407, 'Gena', 'Rowlands', 1930, 'Estadounidense', '../media/img/personas/gena_rowlands.jpg'),
(1408, 'Laura', 'San Giacomo', 1962, 'Estadounidense', '../media/img/personas/laura_san_giacomo.jpg'),
(1409, 'Franklin J.', 'Schaffner', 1920, 'Estadounidense', '../media/img/personas/franklin_Schaffner.jpg'),
(1410, 'Charlton', 'Heston', 1923, 'Estadounidense', '../media/img/personas/charlton_heston.jpg'),
(1411, 'Roddy', 'McDowall', 1928, 'Estadounidense', '../media/img/personas/roddy_mcdowall.jpg'),
(1412, 'Kim', 'Hunter', 1922, 'Estadounidense', '../media/img/personas/kim_hunter.jpg'),
(1413, 'Linda', 'Harrison', 1945, 'Estadounidense', '../media/img/personas/linda_harrison.jpg'),
(1414, 'Maurice', 'Evans', 1901, 'Británica', '../media/img/personas/maurice_evans.jpg'),
(1415, 'David', 'Mamet', 1947, 'Estadounidense', '../media/img/personas/david_mamet.jpg'),
(1416, 'Danny', 'DeVito', 1944, 'Estadounidense', '../media/img/personas/danny_devito.jpg'),
(1417, 'Rebecca', 'Pidgeon', 1965, 'Estadounidense', '../media/img/personas/rebecca_pidgeon.jpg'),
(1418, 'Delroy', 'Lindo', 1952, 'Británica', '../media/img/personas/delroy_lindo.jpg'),
(1419, 'Sam', 'Rockwell', 1968, 'Estadounidense', '../media/img/personas/sam_rockwell.jpg'),
(1420, 'Paul', 'Greengrass', 1955, 'Británica', '../media/img/personas/paul_greengrass.jpg'),
(1421, 'Barkhad', 'Abdi', 1985, 'Somalí', '../media/img/personas/barkhad_abdi.jpg'),
(1422, 'Catherine', 'Keener', 1959, 'Estadounidense', '../media/img/personas/catherine_keener.jpg'),
(1423, 'Max', 'Martini', 1969, 'Estadounidense', '../media/img/personas/max_martini.jpg'),
(1424, 'Faysal', 'Ahmed', 1985, 'Somalí', '../media/img/personas/faysal_ahmed.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(1, 'Kevin', 'Reynolds', 1955, 'Estadounidense', '../media/img/personas/kevin_reynolds.jpg'),
(2, 'Mary Eileen', 'MacDonnell', 1952, 'Estadounidense', '../media/img/personas/mary_mcdonnell.jpg'),
(3, 'Graham', 'Greene', 1952, 'Canadiense', '../media/img/personas/graham_greene.jpg'),
(4, 'Robert', 'Douglas Benton', 1932, 'Estadounidense', '../media/img/personas/robert_benton.jpg'),
(5, 'Dustin', 'Hoffman', 1937, 'Estadounidense', '../media/img/personas/dustin_hoffman.jpg'),
(6, 'Jane', 'Alexander', 1939, 'Estadounidense', '../media/img/personas/jane_moore,jpg'),
(7, 'Barry', 'Sonnenfeld', 1953, 'Estadounidense', '../media/img/personas/barry_sonnenfeld.jpg'),
(8, 'Tommy Lee', 'Jones', 1946, 'Estadounidense', '../media/img/personas/tommy_lee_jones.jpg'),
(9, 'Will', 'Smith', 1968, 'Estadounidense', '../media/img/personas/will_smith.jpg'),
(10, 'Linda', 'Fiorentino', 1958, 'Estadounidense', '../media/img/personas/linga_fiorentino.jpg'),
(11, 'Rip', 'Torn', 1931, 'Estadounidense', '../media/img/personas/rip_torn.jpg'),
(12, 'Lara', 'Flynn Boyle', 1970, 'Estadounidense', '../media/img/personas/lara_flynn_boyle.jpg'),
(13, 'Josh', 'Brolin', 1968, 'Estadounidense', '../media/img/personas/josh_brolin.jpg'),
(14, 'Jemaine', 'Clemente', 1974, 'Neozelandesa', '../media/img/personas/jemaine_clement.jpg'),
(606, 'Kevin', 'Costner', 1955, 'Estadounidense', '../media/img/personas/kevin_costner.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(500, 'Robert', 'De Niro', 1943, 'Estadounidense', '../media/img/personas/robert_de_niro.jpg'),
(501, 'Chazzn', 'Palmintieri', 1952, 'Estadounidense', '../media/img/personas/chazz_palminteri.jpg'),
(502, 'Lillo', 'Brancato', 1976, 'Colombiano', '../media/img/personas/lillo_brancato.jpg'),
(503, 'Francis', 'Capra', 1983, 'Estadounidense', '../media/img/personas/francis_capra.jpg'),
(504, 'Taral', 'Hicks', 1974, 'Estadounidense', '../media/img/personas/taral_hicks.jpg'),
(505, 'Ridley', 'Scott', 1937, 'Británico', '../media/img/personas/riddley_scott.jpg'),
(506, 'Rutger', 'Hauer', 1944, 'Holandes', '../media/img/personas/rutger_hauer.jpg'),
(507, 'Sean', 'Young', 1959, 'Estadounidense', '../media/img/personas/sean_young.jpg'),
(508, 'Daryl', 'Hannah', 1960, 'Estadounidense', '../media/img/personas/daryl_hannah.jpg'),
(509, 'Edward James', 'Olmos', 1947, 'Estadounidense', '../media/img/personas/edward_james_olmos.jpg'),
(510, 'Andrew', 'Davis', 1946, 'Estadounidense', '../media/img/personas/andrew_davis.jpg'),
(511, 'Jeroen', 'Krabbé', 1944, 'Estadounidense', '../media/img/personas/jeroen_krabbe.jpg'),
(512, 'Joe', 'Pantoliano', 1951, 'Estadounidense', '../media/img/personas/joe_pantoliano.jpg'),
(513, 'Julianne', 'Moore', 1960, 'Estadounidense', '../media/img/personas/julianne_moore.jpg'),
(514, 'Martin', 'Scorsese', 1942, 'Estadounidense', '../media/img/personas/martin_scorsese.jpg'),
(515, 'Mary Elizabeth', 'Mastrantonio', 1958, 'Estadounidense', '../media/img/personas/mary_elizabeth_mastrantonio.jpg'),
(516, 'John', 'Turturro', 1957, 'Estadounidense', '../media/img/personas/john_turturro.jpg'),
(517, 'Forest', 'Whitaker', 1961, 'Estadounidense', '../media/img/personas/forest_whitaker.jpg'),
(518, 'Helen', 'Shaver', 1951, 'Canadiense', '../media/img/personas/helen_shaver.jpg'),
(519, 'Lisa', 'Bonet', 1967, 'Estadounidense', '../media/img/personas/lisa_bonet.jpg'),
(520, 'Jason', 'Lee', 1970, 'Estadounidense', '../media/img/personas/jason_lee.jpg'),
(521, 'Ian', 'Hart', 1964, 'Británico', '../media/img/personas/ian_hart.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(400, 'Emmanuelle', 'Béart', 1963, 'Francesa', '../media/img/personas/emmanuelle_beart.jpg'),
(401, 'Jean', 'Reno', 1948, 'Francesa', '../media/img/personas/jean_reno.jpg'),
(402, 'Vanessa', 'Redgrave', 1937, 'Británica', '../media/img/personas/vanessa_redgrave.jpg'),
(403, 'John', 'Woo', 1946, 'China', '../media/img/personas/john_woo.jpg'),
(404, 'Dougray', 'Scott', 1946, 'Escocesa', '../media/img/personas/dougray_scott.jpg'),
(405, 'Thandie', 'Newton', 1972, 'Británica', '../media/img/personas/thandie_newton.jpg'),
(406, 'J.J.', 'Abrams', 1966, 'Estadounidense', '../media/img/personas/jj_abrams.jpg'),
(407, 'Ving', 'Rhames', 1959, 'Estadounidense', '../media/img/personas/ving_rhames.jpg'),
(408, 'Keri', 'Russell', 1976, 'Estadounidense', '../media/img/personas/keri_russell.jpg'),
(409, 'Brad', 'Bird', 1957, 'Estadounidense', '../media/img/personas/brad_bird.jpg'),
(410, 'Paula', 'Patton', 1975, 'Estadounidense', '../media/img/personas/paula_patton.jpg'),
(411, 'Simon', 'Pegg', 1970, 'Británoco', '../media/img/personas/simon_pegg.jpg'),
(412, 'Christopher', 'McQuarrie', 1968, 'Estadounidense', '../media/img/personas/christopher_mcquarrie.jpg'),
(413, 'Rebecca', 'Ferguson', 1983, 'Sueca', '../media/img/personas/rebecca_ferguson.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(1200, 'Ben', 'Kingsley', 1943, 'Britanica', '../media/img/personas/ben_kingsley.jpg'),
(1201, 'Liam', 'Neeson', 1952, 'Estadounidense-Britanica-Irlan', '../media/img/personas/liam_neeson.jpg'),
(1202, 'Ralph', 'Fiennes', 1962, 'Británica', '../media/img/personas/ralph_fiennes.jpg'),
(1203, 'Caroline', 'goodall', 1959, 'Británica', '../media/img/personas/caroline_goodall.jpg'),
(1204, 'Embeth', 'Davidtz', 1965, 'Estadounidense', '../media/img/personas/embeth_davidtz.jpg'),
(1205, 'Jonathan', 'Sagall', 1959, 'Canadiense', '../media/img/personas/jonathan_sagall.jpg'),
(1206, 'Mike', 'Newell', 1942, 'Británica', '../media/img/personas/mike_newell.jpg'),
(1207, 'Hugh', 'Grant', 1960, 'Británica', '../media/img/personas/hugh_grant.jpg'),
(1208, 'Andie', 'MacDowell', 1958, 'Estadounidense', '../media/img/personas/andie_macDowell.jpg'),
(1209, 'Kristin', 'Scott Thomas', 1960, 'Británica', '../media/img/personas/kristin_scott_thomas.jpg'),
(1210, 'Simon', 'Callow', 1949, 'Británica', '../media/img/personas/simon_callow.jpg'),
(1211, 'Rowan', 'Atkinson', 1955, 'Británico', '../media/img/personas/rowan_atkinson.jpg'),
(1212, 'Marlon', 'Brando', 1924, 'Estadounidense', '../media/img/personas/marlon_brando.jpg'),
(1214, 'Robert', 'Duvall', 1931, 'Estadounidense', '../media/img/personas/robert_duvall.jpg'),
(1215, 'Diane', 'Keaton', 1946, 'Estadounidense', '../media/img/personas/diane_keaton.jpg'),
(1216, 'John', 'Cazale', 1935, 'Estadounidense', '../media/img/personas/john_cazale.jpg'),
(1217, 'Francis', 'Ford Coppola', 1939, 'Estadounidense', '../media/img/personas/francis_ford_coppola.jpg'),
(1218, 'Lee', 'Strasberg', 1901, 'Estadounidense', '../media/img/personas/lee_strasberg.jpg'),
(1219, 'James', 'Cameron', 1954, 'Canadiense', '../media/img/personas/james_cameron.jpg'),
(1220, 'Sam', 'Worthington', 1976, 'Británico', '../media/img/personas/sam_worthington.jpg'),
(1221, 'Zoe', 'Saldaña', 1978, 'Estadounidense', '../media/img/personas/zoe_saldaña.jpg'),
(1222, 'Sigourney', 'Weaver', 1949, 'Estadounidense', '../media/img/personas/sigourney_weaver.jpg'),
(1223, 'Michelle', 'Rodriguez', 1978, 'estadounidense', '../media/img/personas/michelle_rodriguez.jpg'),
(1224, 'Stephen', 'Lang', 1952, 'estadounidense', '../media/img/personas/stephen_lang.jpg'),
(1225, 'Giovanni', 'Ribisi', 1974, 'estadounidense', '../media/img/personas/giovanni_ribisi.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(300, 'Mel', 'Gibson', 1956, 'Irlandes', '../media/img/personas/mel_gibson.jpg'),
(301, 'Sophie', 'Marceau', 1966, 'Francesa', '../media/img/personas/sophie_marceau.jpg'),
(303, 'Patrick', 'McGoohan', 1928, 'Estadounidense', '../media/img/personas/patrick_mcgoohan.jpg'),
(304, 'Tommy', 'Flanagan', 1965, 'Escoces', '../media/img/personas/tommy_flanagan.jpg'),
(306, 'David', 'Strathairn', 1949, 'Estadounidense', '../media/img/personas/david_strathairn.jpg'),
(313, 'Jeff', 'Daniels', 1955, 'Estadounidense', '../media/img/personas/jeff_daniels.jpg'),
(314, 'Frank', 'Langella', 1938, 'Estadounidense', '../media/img/personas/frank_langella.jpg'),
(320, 'Joel', 'Coen', 1954, 'Estadounidense', '../media/img/personas/joel_coen.jpg'),
(321, 'Frances', 'Mcdormand', 1957, 'Estadounidense', '../media/img/personas/frances_mcdormand.jpg'),
(322, 'William', 'Macy', 1957, 'Estadounidense', '../media/img/personas/william_macy.jpg'),
(323, 'Steve', 'Buscemi', 1957, 'Estadounidense', '../media/img/personas/steve_buscemi.jpg'),
(324, 'Peter', 'Stormare', 1953, 'Sueco', '../media/img/personas/peter_stormare.jpg'),
(325, 'Roland', 'Joffé', 1945, 'Britanica', '../media/img/personas/roland_joffé.jpg'),
(330, 'Jeremy', 'Irons', 1948, 'Britanica', '../media/img/personas/jeremy_irons.jpg'),
(331, 'Ray', 'Mcanally', 1951, 'Irlandesa', '../media/img/personas/ray_mcanally.jpg'),
(332, 'Aidan', 'Quinn', 1959, 'Estadounidense', '../media/img/personas/aidan_quinn.jpg'),
(333, 'Cherie', 'Lunghi', 1952, 'Britanica', '../media/img/personas/cherie_lunghi.jpg'),
(334, 'Antonio', 'Banderas', 1960, 'Española', '../media/img/personas/antonio_banderas.jpg'),
(341, 'Melanie', 'Griffith', 1957, 'Estadounidense', '../media/img/personas/melanie_griffith.jpg'),
(342, 'David', 'Morse', 1953, 'Estadounidense', '../media/img/personas/david_morse.jpg'),
(343, 'Lucas', 'Black', 1982, 'Estadounidense', '../media/img/personas/lucas_black.jpg'),
(344, 'Cathy', 'Moriarty', 1960, 'Estadounidense', '../media/img/personas/cathy_moriarty.jpg'),
(345, 'Meat', 'Loaf', 1947, 'Estadounidense', '../media/img/personas/meat_loaf.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(1000, 'Robert', 'Zemeckis', 1952, 'Estadunidese', '../media/img/personas/robert_zemeckis.jpg'),
(1001, 'Helen ', 'Hunt', 1963, 'Estadunidese', '../media/img/personas/Helen_Hunt.jpg'),
(1002, 'Lari', 'White', 1965, 'Estadunidese', '../media/img/personas/Lari_White.jpg'),
(1003, 'Nick', 'Searcy', 1959, 'Estadunidese', '../media/img/personas/nick_searcy.jpg'),
(1004, 'Chris', 'Noth', 1954, 'Estadunidese', '../media/img/personas/Chris_Noth.jpg'),
(1005, 'Geoffrey', 'Blake', 1962, 'Estadunidese', '../media/img/personas/Geoffrey_Blake.jpg'),
(1006, 'Sidney', 'Lumet', 1924, 'Estadunidese', '../media/img/personas/Sidney_Lumet.jpg'),
(1007, 'Henry', 'Fonda', 1905, 'Estadunidese', '../media/img/personas/Henry_Fonda.jpg'),
(1008, 'Lee J.', 'Cobb', 1911, 'Estadunidese', '../media/img/personas/Lee J._Cobb.jpg'),
(1009, 'Jack', 'Klugman', 1922, 'Estadunidese', '../media/img/personas/Jack_Klugman.jpg'),
(1010, 'E.G.', 'Marshall', 1914, 'Estadunidese', '../media/img/personas/E.G._Marshall.jpg'),
(1011, 'Joseph', 'Sweeney', 0000, 'Estadunidese', '../media/img/personas/joseph_sweeney.jpg'),
(1012, 'Marc', 'Forster', 1969, 'Alemán', '../media/img/personas/Marc_Forster.jpg'),
(1013, 'Mireille', 'Enos', 1975, 'Estadunidese', '../media/img/personas/Mireille_Enos.jpg'),
(1014, 'Daniella', 'Kertesz', 1989, 'Israelí', '../media/img/personas/Daniella_Kertesz.jpg'),
(1015, 'Matthew', 'Fox', 1966, 'Estadunidese', '../media/img/personas/matthew_fox.jpg'),
(1016, 'James Badge', 'Dale', 1978, 'Estadunidese', '../media/img/personas/james_badge_dale.jpg'),
(1017, 'Joseph L. Mankiewicz', 'Mankiewicz', 1909, 'Estadunidese', '../media/img/personas/joseph_l._mankiewicz.jpg'),
(1018, 'Laurence', 'Olivier', 1907, 'Británica', '../media/img/personas/Laurence_Olivier.jpg'),
(1019, 'Peter', 'Medak', 1937, 'Húngara', '../media/img/personas/Peter_Medak.jpg'),
(1020, 'George C.', 'Scott', 1927, 'Estadunidese', '../media/img/personas/George_C._Scott.jpg'),
(1021, 'Trish', 'Van Devere', 1941, 'Estadunidese', '../media/img/personas/trish_van_devere.jpg'),
(1022, 'Melvyn', 'Douglas', 1901, 'Estadunidese', '../media/img/personas/Melvyn_Douglas.jpg'),
(1023, 'Jean', 'Marsh', 1934, 'Británica', '../media/img/personas/jean_marsh.jpg'),
(1024, 'John', 'Colicos', 1928, 'Canadiense', '../media/img/personas/John_Colicos.jpg'),
(1025, 'Barry', 'Morse', 1918, 'Británica', '../media/img/personas/Barry_Morse.jpg'),
(1026, 'Michael', 'Kaine', 1933, 'Británica', '../media/img/personas/Michael_Kaine.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(201, 'Steven', 'Soderbergh', 1963, 'Estadounidense', '../media/img/personas/steven_soderbergh.jpg'),
(202, 'Quentin', 'Tarantino', 1963, 'Estadounidense', '../media/img/personas/quentin_tarantino.jpg'),
(203, 'Nora ', 'Ephron', 1941, 'Estadounidense', '../media/img/personas/nora_ephron.jpg'),
(204, 'George', 'Clooney', 1962, 'Estadounidense', '../media/img/personas/george_clooney.jpg'),
(205, 'Meg ', 'Ryan', 1961, 'Estadounidense', '../media/img/personas/meg_ryan.jpg'),
(206, 'Brad', 'Pitt', 1963, 'Estadounidense', '../media/img/personas/brad_pitt.jpg'),
(207, 'John ', 'Travolta', 1954, 'Estadounidense', '../media/img/personas/john_travolta.jpg'),
(208, 'Tom ', 'Hanks', 1956, 'Estadounidense', '../media/img/personas/tom_hanks.jpg'),
(209, 'Matt', 'Damon', 1970, 'Estadounidense', '../media/img/personas/matt_damon.jpg'),
(210, 'Greg ', 'Kinnear', 1963, 'Estadounidense', '../media/img/personas/greg_kinnear.jpg'),
(211, 'Julia ', 'Roberts', 1967, 'Estadounidense', '../media/img/personas/julia_roberts.jpg'),
(214, 'Tim ', 'Roth', 1961, 'Británico', '../media/img/personas/tim_roth.jpg'),
(215, 'Catherine ', 'Zeta-Jones', 1969, 'Británica', '../media/img/personas/catherine_z_jones.jpg'),
(216, 'Harvey ', 'Keitel', 1939, 'Británico', '../media/img/personas/arvey_keitel.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(700, 'George', 'Roy Hill', 1921, 'estadounidense', '../media/img/personas/george_roy_hill.jpg'),
(701, 'Terry', 'Gilliam', 1940, 'británico', '../media/img/personas/terry_gilliam.jpg'),
(702, 'Michael', 'Mann', 1943, 'estadounidense', '../media/img/personas/michael_mann.jpg'),
(703, 'Christopher', 'Nolan', 1970, 'anglo_estadounidense', '../media/img/personas/christopher_nolan.jpg'),
(705, 'Jeff', 'Bridges', 1949, 'estadounidense', '../media/img/personas/jeff _bridges.jpgh'),
(707, 'Al', 'Pacino', 1940, 'estadounidense', '../media/img/personas/al_pacino.jpg'),
(708, 'Katharine', 'Ross', 1940, 'estadounidense', '../media/img/personas/katharine_ross.jpg'),
(710, 'Amanda', 'Plummer', 1957, 'estadounidense', '../media/img/personas/amanda_plummer'),
(711, 'Val', 'Kilmer', 1959, 'estadounidense', '../media/img/personas/val _kilmer.jpg'),
(712, 'Hilary', 'Swank', 1974, 'estadounidense', '../media/img/personas/hilary_swank.jpg'),
(713, 'Jon', 'Voight', 1938, 'estadounidense', '../media/img/personas/jon_voight.jpg'),
(714, 'Ashley', 'Judd', 1968, 'estadounidense', '../media/img/persons/ashley_judd.jpg'),
(715, 'Diane', 'Venora', 1952, 'estadounidense', '../media/img/personas/diane_venora.jpg');









INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(100, 'Meryl', 'Streep', 1949, 'Estadounidense', '../media/img/personas/meryl _streep.jpg'),
(101, 'Annie', 'Corley', 1952, 'Estadounidense', '../media/img/personas/annie_corley.jpg'),
(102, 'Victor', 'Slezak', 1957, 'estadounidense', '../media/img/personas/victor _slezak'),
(103, 'Jim', 'Haynie', 1940, 'estadounidense', '../media/img/personas/jim_haynie'),
(104, 'Tony', 'Scott', 1944, 'estadounidense', '../media/img/personas/tony_scott.jpg'),
(105, 'Catherine', 'McCormack', 1972, 'estadounidense', '../media/img/personas/catherine_mccormack.jpg'),
(106, 'Stephen', 'Dillane', 1957, 'estadounidense', '../media/img/personas/stephen_dillane.jpg'),
(107, 'Marianne Jean', 'baptiste', 1967, 'estadounidense', '../media/img/personas/marianne_jean_baptiste.jpg'),
(108, 'Dominique', 'Swain', 1980, 'estadounidense', '../media/img/personas/dominique_swain.jpg'),
(109, 'Joan', 'Allen', 1956, 'estadounidense', '../media/img/personas/joan_allen.jpg'),
(110, 'Gina', 'Gershon', 1962, 'estadounidense', '../media/img/personas/gina_gershon.jpg'),
(111, 'Andre', 'Braugher', 1962, 'estadounidense', '../media/img/personas/andre_braugher.jpg'),
(112, 'Colm', 'Feore', 1958, 'estadounidense', '../media/img/personas/colm_feore.jpg'),
(113, 'Dennis', 'Franz', 1944, 'estadounidense', '../media/img/personas/dennis_franz.jpg'),
(114, 'Ben', 'Affleck', 1972, 'estadounidense', '../media/img/personas/ben_affleck.jpg'),
(115, 'Alan', 'Arkin', 1934, 'estadounidense', '../media/img/personas/alan_arkin.jpg'),
(116, 'John ', 'Goodman', 1952, 'estadounidense', '../media/img/personas/john_goodman.jpg'),
(117, 'Clea ', 'DuVall', 1977, 'estadounidense', '../media/img/personas/clea_duvall.jpg'),
(119, 'Brad', 'Silberling', 1963, 'estadounidense', '../media/img/personas/brad_silberling'),
(120, 'Bryan', 'Cranston', 1956, 'estadounidense', '../media/img/personas/bryan_cranston.jpg');


INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(800, 'Taylor', 'Hackford', 1944, 'estadounidense', '../media/img/personas/taylor_hackford.jpg'),
(801, 'Keanu', 'Reeves', 1964, 'libanes', 'media/img/personas/keanu_reeves.jpg'),
(802, 'Charlize', 'Theron', 1975, 'estadounidense', '../media/img/personas/charlize_theron.jpg'),
(803, 'Connie', 'Nielsen', 1965, 'danesa', '../media/img/personas/connie_nielsen.jpg'),
(804, 'Craig', 'T. Nelson', 1944, 'estadounidense', '../media/img/personas/craig_t_nelson.jpg'),
(805, 'Judith', 'Ivey', 1951, 'estadounidense', '../media/img/personas/judith_ivey.jpg'),
(806, 'Barry', 'Levinson', 1942, 'Estadounidense', '../media/img/personas/barry_levinson.jpg'),
(807, 'Valeria', 'Golino', 1965, 'Greco-italiana', '../media/img/personas/valeria_golino.jpg'),
(808, 'Gerald', 'R. Molen', 1944, 'Estadounidense', '../media/img/personas/gerald_r_molen.jpg'),
(809, 'Lucinda', 'Jenney', 1954, 'Estadounidense', '../media/img/personas/lucinda_jenney.jpg'),
(810, 'Tom', 'Skerritt', 1933, 'estadounidense', '../media/img/personas/tom_skerrit.jpg'),
(811, 'John', 'Hurt', 1940, 'Britanico', '../media/img/personas/john_hurt.jpg'),
(812, 'Harry', 'Dean', 1926, 'Estadounidense', '../media/img/personas/harry_dean.jpg'),
(813, 'Yaphet', 'Kotto', 1939, 'Estadounidense', '../media/img/personas/yaphet_kotto.jpg'),
(814, 'Ian', 'Holm', 1931, 'Britanico', '../media/img/personas/ian_holm.jpg'),
(815, 'Carlos', 'Iglesias', 1955, 'Española', '../media/img/personas/carlos_iglesia.jpg'),
(816, 'Javier', 'Gutierrez', 1971, 'Española', '../media/img/personas/javier_gutierrez.jpg'),
(817, 'Angela', 'del Salto', 1980, 'Española', '../media/img/personas/angela_del_salto.jpg'),
(818, 'Isabel', 'blanco', 1974, 'Española', '../media/img/personas/isabel_blanco.jpg'),
(819, 'Nieves', 'de Medina', 1962, 'Espoañola', '../media/img/personas/nieves_medina.jpg'),
(820, 'Eloisa', 'Vargas', 1965, 'Española', '../media/img/personas/eloisa_vargas.jpg'),
(821, 'Jaume', 'Balaguero', 1968, 'Española', '../media/img/personas/jaume_balguero.jpg'),
(822, 'Luis', 'Tosar', 1971, 'Española', '../media/img/personas/luis_tosar.jpg'),
(823, 'Alberto', 'San Juan', 1968, 'Española', '../media/img/personas/alberto_san_juan.jpg'),
(824, 'Iris', 'Almeida', 1992, 'Española', '../media/img/personas/iris_almeida.jpg'),
(825, 'Petra', 'Martinez', 1944, 'Espoañola', '../media/img/personas/petra_martinez.jpg'),
(826, 'Pep', 'Tosar', 1961, 'Española', '../media/img/personas/pep_tosar.jpg');



INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `foto`) VALUES
(1100, 'Peter ', 'Bogdanovich', 1939, 'estadounidense', '../media/img/personas/Peter_Bogdanovich.jpg'),
(1102, 'Rob', 'Reiner', 1947, 'Estadounidense', '../media/img/personas/Rob_Reiner.jpg'),
(1104, 'Daniel', ' Monzon', 1968, 'Española', '../media/img/personas/Daniel_Monzon.jpg'),
(1105, 'Gregory', 'Hoblit\r\n', 1944, 'Estadounidense', '../media/img/personas/Gregory_Hoblit.jpg'),
(1106, 'Harrison', 'Ford', 1942, 'Estadounidense', '../media/img/personas/harrison_ford.jpg'),
(1107, 'Tom', 'Cruise', 1962, 'Estadounidense', '../media/img/personas/Thomas_Cruise.jpg'),
(1108, 'Anthony ', 'Hopkins', 1937, 'Britanica', '../media/img/personas/Anthony_Hopkins.jpg'),
(1109, 'Carol ', 'Burnett', 1933, 'Estadounidense', '../media/img/personas/Carol_Burnett.jpg'),
(1110, 'Michelle ', 'Pfeiffer', 1958, 'Estadounidense', '../media/img/persona/Michelle_Pfeiffer.jpg'),
(1111, 'Kevin', ' Bacon', 1974, 'Estadounidense', '../media/img/personas/Kevin_Bacon.jpg'),
(1112, 'Alberto ', 'Ammann', 1978, 'Argentina', '../media/img/personas/Alberto_Ammann.jpg'),
(1113, 'Ryan ', 'Gosling', 1980, 'Britanica', '../media/img/personas/Ryan_Gosling.jpg'),
(1114, 'Nicolette ', 'Sheridan', 1963, 'Britanica', '../media/img/personas/Nicolette_Sheridan.jpg'),
(1115, 'Joe', 'Morton ', 1947, 'Estadounidense', '../media/img/personas/Joe_Morton.jpg'),
(1116, 'Jack ', 'Nicholson', 1937, 'Estadounidense', '../media/img/personas/Jack_Nicholson.jpg'),
(1117, 'Antonio ', 'Resines', 1954, 'Española', '../media/img/personas/Antonio_Resines.jpg'),
(1118, 'Christopher ', 'Reeve', 1952, 'Estadounidense', '../media/img/personas/Christopher_Reeve.jpg'),
(1119, 'Miranda ', 'Otto', 1967, 'Australiana', '../media/img/personas/Miranda_Otto.jpg'),
(1120, 'Kiefer ', 'Sutherland', 1966, 'Britanico', '../media/img/personas/Kiefer_Sutherland.jpg'),
(1121, 'Marta', 'Etura', 1978, 'Española', '../media/img/personas/Marta_Etura.jpg'),
(1122, 'Rosamund ', 'Pike', 1976, 'Britanica', '../media/img/personas/Rosamund_Pike.jpg'),
(1123, 'Kevin ', 'Pollak', 1957, 'Estadounidense', '../media/img/personas/Kevin_Pollak.jpg'),
(1124, 'Manuel ', 'Moron', 1956, 'Española', '../media/img/personas/Manuel_Moron.jpg'),
(1125, 'Cliff ', 'Curtis', 1968, 'nueva zelandes', '../media/img/personas/Cliff_Curtis.jpg'),
(1126, 'Fiona ', 'Shaw', 1958, 'Irlandesa', '../media/img/personas/Fiona_Shaw.jpg');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas_generos`
--

CREATE TABLE IF NOT EXISTS `peliculas_generos` (
  `cod_pelicula` smallint(5) unsigned NOT NULL,
  `cod_genero` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`cod_pelicula`,`cod_genero`),
  KEY `cod_genero` (`cod_genero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas_generos`
--

INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(33, 2),
(34, 2),
(31, 5),
(33, 7),
(32, 8),
(33, 8),
(33, 9),
(35, 9),
(32, 10),
(31, 12),
(35, 12),
(34, 15),
(33, 18),
(31, 23);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(48, 2),
(48, 3),
(50, 6),
(46, 8),
(47, 8),
(49, 8),
(50, 8),
(81, 9),
(47, 12),
(49, 12),
(81, 12),
(46, 13),
(47, 13),
(50, 14),
(50, 16);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(76, 1),
(79, 2),
(80, 2),
(77, 11),
(78, 11);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(66, 2),
(68, 2),
(70, 2),
(69, 8),
(70, 8),
(69, 9),
(70, 9),
(69, 10),
(67, 14),
(68, 15),
(67, 16),
(67, 22);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(71, 2),
(75, 2),
(73, 5),
(74, 9),
(75, 9),
(72, 11),
(74, 11),
(73, 14);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(3, 1),
(4, 1),
(5, 1),
(2, 2),
(3, 5),
(4, 5),
(5, 5),
(3, 8),
(4, 8),
(5, 8),
(1, 14),
(1, 15),
(3, 16),
(4, 16),
(1, 20),
(2, 22);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(26, 2),
(29, 2),
(27, 5),
(27, 8),
(28, 8),
(30, 8),
(30, 9),
(28, 12),
(30, 12),
(28, 17),
(26, 18),
(27, 23);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(21, 8),
(22, 8),
(23, 8),
(24, 8),
(25, 8),
(21, 9),
(24, 9),
(25, 9),
(21, 12),
(21, 13),
(22, 13),
(23, 13),
(24, 13),
(25, 13);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(61, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 5),
(65, 8),
(62, 11),
(65, 14),
(65, 16),
(63, 18),
(64, 18);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(20, 1),
(16, 2),
(17, 2),
(19, 2),
(20, 2),
(17, 9),
(18, 9),
(17, 12),
(18, 12),
(16, 14),
(19, 14);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(1003, 1),
(1000, 2),
(1001, 2),
(1003, 2),
(1002, 3),
(1004, 3),
(1002, 5),
(1002, 8),
(1002, 9),
(1004, 9),
(1001, 12),
(1003, 12),
(1000, 14),
(1000, 23),
(1001, 23),
(1002, 23),
(1004, 23);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(15, 1),
(11, 9),
(12, 9),
(13, 9),
(14, 9),
(15, 11),
(11, 12),
(12, 12),
(13, 12),
(14, 17);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(37, 1),
(37, 2),
(38, 2),
(39, 8),
(39, 9),
(40, 9),
(37, 12),
(39, 12),
(40, 12),
(36, 20);











INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(6, 2),
(9, 2),
(10, 2),
(9, 4),
(10, 4),
(8, 6),
(7, 13),
(6, 15),
(9, 15),
(9, 16);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(44, 1),
(41, 2),
(42, 2),
(44, 2),
(43, 3),
(45, 3),
(43, 5),
(41, 9),
(45, 9),
(42, 22);


INSERT INTO `peliculas_generos` (`cod_pelicula`, `cod_genero`) VALUES
(56, 2),
(58, 3),
(60, 3),
(57, 5),
(59, 5);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas_personas`
--

CREATE TABLE IF NOT EXISTS `peliculas_personas` (
  `cod_pelicula` smallint(5) unsigned NOT NULL,
  `cod_persona` smallint(5) unsigned NOT NULL,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_pelicula`,`cod_persona`,`rol`),
  KEY `cod_persona` (`cod_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas_personas`
--

INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(33, 500, 'Actor'),
(35, 507, 'Actriz'),
(31, 600, 'Director'),
(32, 601, 'Director'),
(33, 602, 'Director'),
(34, 603, 'Director'),
(35, 604, 'Director'),
(31, 605, 'Actor'),
(33, 606, 'Actor'),
(34, 606, 'Actor'),
(35, 606, 'Actor'),
(31, 607, 'Actriz'),
(32, 608, 'Actor'),
(34, 609, 'Actriz'),
(31, 610, 'Actor'),
(32, 611, 'Actor'),
(34, 612, 'Actor'),
(33, 613, 'Actor'),
(33, 614, 'Actor'),
(33, 615, 'Actor'),
(35, 900, 'Actor'),
(32, 908, 'Actor'),
(33, 908, 'Actor');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(46, 104, 'Director'),
(49, 215, 'Actriz'),
(46, 900, 'Actor'),
(46, 901, 'Actor'),
(46, 902, 'Actor'),
(46, 903, 'Actor'),
(46, 904, 'Actor'),
(46, 905, 'Actor'),
(47, 906, 'Director'),
(47, 907, 'Actor'),
(47, 908, 'Actor'),
(49, 908, 'Actor'),
(47, 909, 'Actor'),
(47, 910, 'Actor'),
(47, 911, 'Actor'),
(47, 912, 'Actor'),
(48, 913, 'Director'),
(48, 914, 'Actor'),
(48, 915, 'Actor'),
(48, 916, 'Actor'),
(49, 917, 'Director'),
(49, 919, 'Actor'),
(50, 920, 'Director'),
(50, 921, 'Actor'),
(50, 922, 'Actriz'),
(50, 923, 'Actor'),
(81, 924, 'Director'),
(81, 925, 'Director'),
(81, 926, 'Actor'),
(81, 927, 'Actor'),
(81, 928, 'Actor'),
(81, 929, 'Actor'),
(81, 930, 'Actor');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(78, 606, 'Actor'),
(76, 1500, 'Director'),
(76, 1501, 'Actor'),
(76, 1502, 'Actor'),
(76, 1503, 'Actor'),
(76, 1504, 'Actor'),
(76, 1505, 'Actor'),
(77, 1506, 'Director'),
(77, 1507, 'Actor'),
(77, 1508, 'Actor'),
(77, 1509, 'Actor'),
(77, 1510, 'Actor'),
(77, 1511, 'Actor'),
(77, 1512, 'Actor'),
(78, 1513, 'Director'),
(78, 1514, 'Actor'),
(78, 1515, 'Actor'),
(78, 1516, 'Actor'),
(78, 1517, 'Actor'),
(78, 1518, 'Actor'),
(78, 1519, 'Actor'),
(79, 1520, 'Actor'),
(79, 1520, 'Director'),
(79, 1521, 'Actor'),
(79, 1522, 'Actor'),
(79, 1523, 'Actor'),
(79, 1524, 'Actor'),
(80, 1525, 'Director'),
(80, 1526, 'Actor'),
(80, 1527, 'Actor'),
(80, 1528, 'Actor'),
(80, 1529, 'Actor'),
(80, 1530, 'Actor'),
(80, 1531, 'Actor');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(66, 500, 'Actor'),
(70, 703, 'Director'),
(69, 906, 'Director'),
(66, 1300, 'Directora'),
(66, 1301, 'Actor'),
(67, 1301, 'Actor'),
(66, 1302, 'Actriz'),
(66, 1303, 'Actriz'),
(66, 1304, 'Actor'),
(67, 1305, 'Director'),
(67, 1306, 'Actriz'),
(67, 1307, 'Actor'),
(67, 1308, 'Actriz'),
(67, 1309, 'Actor'),
(68, 1310, 'Directora'),
(68, 1311, 'Actriz'),
(68, 1312, 'Actor'),
(68, 1313, 'Actriz'),
(68, 1314, 'Actriz'),
(68, 1315, 'Actor'),
(69, 1316, 'Actor'),
(69, 1317, 'Actriz'),
(69, 1318, 'Actor'),
(69, 1319, 'Actor'),
(69, 1320, 'Actor'),
(70, 1321, 'Actor'),
(70, 1322, 'Actor'),
(70, 1323, 'Actor'),
(70, 1324, 'Actor'),
(70, 1325, 'Actor');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(75, 208, 'Actor'),
(74, 900, 'Actriz'),
(71, 916, 'Actor'),
(72, 916, 'Actor'),
(71, 1400, 'Director'),
(71, 1401, 'Actor'),
(71, 1402, 'Actriz'),
(71, 1403, 'Actor'),
(72, 1404, 'Director'),
(72, 1405, 'Actor'),
(72, 1406, 'Actor'),
(72, 1407, 'Actriz'),
(72, 1408, 'Actriz'),
(73, 1409, 'Director'),
(73, 1410, 'Actor'),
(73, 1411, 'Actor'),
(73, 1412, 'Actriz'),
(73, 1413, 'Actriz'),
(73, 1414, 'Actor'),
(74, 1415, 'Director'),
(74, 1416, 'Actor'),
(74, 1417, 'Actriz'),
(74, 1418, 'Actor'),
(74, 1419, 'Actor'),
(75, 1420, 'Director'),
(75, 1421, 'Actriz'),
(75, 1422, 'Actor'),
(75, 1423, 'Actor'),
(75, 1424, 'Actor');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(1, 1, 'Director'),
(1, 2, 'Actriz'),
(1, 3, 'Actor'),
(2, 4, 'Director'),
(2, 5, 'Actor'),
(2, 6, 'Actriz'),
(3, 7, 'Director'),
(4, 7, 'Director'),
(5, 7, 'Director'),
(3, 8, 'Actor'),
(4, 8, 'Actor'),
(5, 8, 'Actor'),
(3, 9, 'Actor'),
(4, 9, 'Actor'),
(5, 9, 'Actor'),
(3, 10, 'Actriz'),
(4, 11, 'Actor'),
(4, 12, 'Actriz'),
(5, 13, 'Actor'),
(5, 14, 'Actriz'),
(2, 100, 'Actriz'),
(1, 606, 'Actor'),
(1, 606, 'Director');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(28, 8, 'Actor'),
(30, 9, 'Actor'),
(30, 104, 'Director'),
(26, 500, 'Actor'),
(26, 500, 'Director'),
(26, 501, 'Actor'),
(26, 502, 'Actor'),
(26, 503, 'Actor'),
(26, 504, 'Actriz'),
(27, 505, 'Director'),
(27, 506, 'Actor'),
(27, 507, 'Actriz'),
(27, 508, 'Actriz'),
(27, 509, 'Actor'),
(28, 510, 'Director'),
(28, 511, 'Actor'),
(28, 512, 'Actor'),
(28, 513, 'Actriz'),
(29, 514, 'Director'),
(29, 515, 'Actor'),
(29, 516, 'Actor'),
(29, 517, 'Actor'),
(29, 518, 'Actriz'),
(30, 519, 'Actriz'),
(30, 520, 'Actor'),
(30, 521, 'Actor'),
(29, 612, 'Actor'),
(30, 713, 'Actor'),
(30, 900, 'Actor'),
(27, 1106, 'Actor'),
(28, 1106, 'Actor'),
(29, 1107, 'Actor');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(21, 400, 'Actriz'),
(21, 401, 'Actor'),
(21, 402, 'Actriz'),
(22, 403, 'Director'),
(22, 404, 'Actor'),
(22, 405, 'Actriz'),
(23, 406, 'Director'),
(23, 407, 'Actor'),
(24, 407, 'Actor'),
(25, 407, 'Actor'),
(23, 408, 'Actriz'),
(24, 409, 'Director'),
(24, 410, 'Actriz'),
(24, 411, 'Actor'),
(25, 411, 'Actor'),
(25, 412, 'Director'),
(25, 413, 'Actriz'),
(21, 602, 'Director'),
(21, 713, 'Actor'),
(25, 907, 'Actor'),
(21, 1107, 'Actor'),
(22, 1107, 'Actor'),
(23, 1107, 'Actor'),
(24, 1107, 'Actor'),
(25, 1107, 'Actor');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(64, 500, 'Actor'),
(63, 707, 'Actor'),
(64, 707, 'Actor'),
(61, 913, 'Director'),
(62, 923, 'Actor'),
(61, 1200, 'Actor'),
(61, 1201, 'Actor'),
(61, 1202, 'Actor'),
(61, 1203, 'Actriz'),
(61, 1204, 'Actriz'),
(61, 1205, 'Actor'),
(62, 1206, 'Director'),
(62, 1207, 'Actor'),
(62, 1208, 'Actriz'),
(62, 1209, 'Actriz'),
(62, 1210, 'Actor'),
(62, 1211, 'Actor'),
(63, 1212, 'Actor'),
(63, 1214, 'Actor'),
(64, 1214, 'Actor'),
(63, 1215, 'Actriz'),
(64, 1215, 'Actor'),
(63, 1216, 'Actor'),
(64, 1216, 'Actor'),
(63, 1217, 'Director'),
(64, 1217, 'Director'),
(63, 1218, 'Actor'),
(64, 1218, 'Actor'),
(65, 1219, 'Director'),
(65, 1220, 'Actor'),
(65, 1221, 'Actriz'),
(65, 1222, 'Actriz'),
(65, 1223, 'Actriz'),
(65, 1224, 'Actor'),
(65, 1225, 'Actor');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(16, 105, 'Actriz'),
(17, 204, 'Actor'),
(17, 204, 'Director'),
(16, 300, 'Actor'),
(16, 300, 'Director'),
(16, 301, 'Actor'),
(16, 303, 'Actor'),
(16, 304, 'Actor'),
(17, 306, 'Actor'),
(17, 313, 'Actor'),
(17, 314, 'Actor'),
(18, 320, 'Director'),
(18, 321, 'Actriz'),
(18, 322, 'Actor'),
(18, 323, 'Actor'),
(18, 324, 'Actor'),
(19, 325, 'Director'),
(19, 330, 'Actor'),
(19, 331, 'Actor'),
(19, 332, 'Actor'),
(19, 333, 'Actor'),
(20, 334, 'Director'),
(20, 341, 'Actriz'),
(20, 342, 'Actor'),
(20, 343, 'Actor'),
(20, 344, 'Actriz'),
(20, 345, 'Actor'),
(19, 500, 'Actor'),
(17, 1313, 'Actriz');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(1002, 206, 'Actor'),
(1000, 208, 'Actor'),
(1002, 342, 'Actor'),
(1000, 1000, 'Director'),
(1000, 1001, 'Actriz'),
(1000, 1002, 'Actriz'),
(1000, 1003, 'Actor'),
(1000, 1004, 'Actor'),
(1000, 1005, 'Actor'),
(1001, 1006, 'Director'),
(1001, 1007, 'Actor'),
(1001, 1008, 'Actor'),
(1001, 1009, 'Actor'),
(1001, 1010, 'Actor'),
(1001, 1011, 'Actor'),
(1002, 1012, 'Director'),
(1002, 1013, 'Actriz'),
(1002, 1014, 'Actriz'),
(1002, 1015, 'Actor'),
(1002, 1016, 'Actor'),
(1003, 1017, 'Director'),
(1003, 1018, 'Actor'),
(1004, 1019, 'Director'),
(1004, 1020, 'Actor'),
(1004, 1021, 'Actriz'),
(1004, 1022, 'Actor'),
(1004, 1023, 'Actriz'),
(1004, 1024, 'Actor'),
(1004, 1025, 'Actor'),
(1003, 1026, 'Actor'),
(1001, 1518, 'Actor');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(11, 201, 'Director'),
(12, 201, 'Director'),
(13, 201, 'Director'),
(14, 202, 'Actor'),
(14, 202, 'Director'),
(15, 203, 'Directora'),
(11, 204, 'Actor'),
(12, 204, 'Actor'),
(13, 204, 'Actor'),
(15, 205, 'Actriz'),
(11, 206, 'Actor'),
(12, 206, 'Actor'),
(13, 206, 'Actor'),
(14, 207, 'Actor'),
(15, 208, 'Actor'),
(11, 209, 'Actor'),
(12, 209, 'Actor'),
(13, 209, 'Actor'),
(15, 210, 'Actor'),
(11, 211, 'Actriz'),
(12, 211, 'Actriz'),
(13, 211, 'Actriz'),
(14, 1316, 'Actor'),
(11, 614, 'Actor'),
(12, 614, 'Actor'),
(13, 614, 'Actor'),
(14, 214, 'Actor'),
(13, 215, 'Actriz'),
(14, 216, 'Actor'),
(14, 607, 'Actriz'),
(12, 707, 'Actriz');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(39, 500, 'Actor'),
(36, 612, 'Actor'),
(37, 612, 'Actor'),
(36, 700, 'Director'),
(37, 700, 'Director'),
(38, 701, 'Director'),
(39, 702, 'Director'),
(40, 703, 'Director'),
(36, 1507, 'Actor'),
(37, 1507, 'Actor'),
(38, 705, 'Actor'),
(39, 707, 'Actor'),
(40, 707, 'Actor'),
(36, 708, 'Actriz'),
(38, 710, 'Actriz'),
(39, 711, 'Actor'),
(40, 712, 'Actriz'),
(39, 713, 'Actor'),
(39, 714, 'Actriz'),
(39, 715, 'Actriz'),
(37, 915, 'Actor'),
(38, 1301, 'Actor'),
(40, 1301, 'Actor');






INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(6, 100, 'Actriz'),
(6, 101, 'Actriz'),
(6, 102, 'Actor'),
(6, 103, 'Actor'),
(7, 104, 'Director'),
(7, 105, 'Actriz'),
(7, 106, 'Actor'),
(7, 107, 'Actriz'),
(8, 108, 'Actriz'),
(8, 109, 'Actriz'),
(8, 110, 'Actriz'),
(9, 111, 'Actor'),
(9, 112, 'Actor'),
(9, 113, 'Actor'),
(10, 114, 'Actor'),
(10, 114, 'Director'),
(10, 115, 'Actor'),
(10, 116, 'Actor'),
(10, 117, 'Actriz'),
(8, 403, 'Director'),
(9, 119, 'Director'),
(10, 120, 'Actor'),
(9, 205, 'Actriz'),
(7, 206, 'Actor'),
(8, 207, 'Actor'),
(8, 608, 'Actor'),
(9, 608, 'Actor'),
(7, 1507, 'Actor'),
(6, 1520, 'Director');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(42, 5, 'Actor'),
(43, 505, 'Director'),
(41, 707, 'Actor'),
(41, 800, 'Director'),
(41, 801, 'Actor'),
(41, 802, 'Actriz'),
(41, 803, 'Actriz'),
(41, 804, 'Actor'),
(41, 805, 'Actriz'),
(42, 806, 'Director'),
(42, 807, 'Actriz'),
(42, 808, 'Actor'),
(42, 809, 'Actriz'),
(43, 810, 'Actor'),
(43, 811, 'Actor'),
(43, 812, 'Actor'),
(43, 813, 'Actor'),
(43, 814, 'Actor'),
(44, 815, 'Actor'),
(44, 815, 'Director'),
(44, 816, 'Actor'),
(44, 817, 'Actriz'),
(44, 818, 'Actriz'),
(44, 819, 'Actriz'),
(44, 820, 'Actriz'),
(45, 821, 'Director'),
(45, 822, 'Actor'),
(45, 823, 'Actor'),
(45, 824, 'Actriz'),
(45, 825, 'Actriz'),
(45, 826, 'Actor'),
(42, 1107, 'Actor'),
(45, 1121, 'Actriz'),
(43, 1222, 'Actriz'),
(42, 1308, 'Actor');


INSERT INTO `peliculas_personas` (`cod_pelicula`, `cod_persona`, `rol`) VALUES
(60, 306, 'Actor'),
(57, 1000, 'Director'),
(56, 1026, 'Actor'),
(56, 1100, 'Director'),
(58, 1102, 'Director'),
(59, 1104, 'Director'),
(60, 1105, 'Director'),
(57, 1106, 'Actor'),
(58, 1107, 'Actor'),
(60, 1108, 'Actor'),
(56, 1109, 'actriz'),
(57, 1110, 'Actor'),
(58, 1111, 'Actor'),
(59, 1112, 'Actor'),
(60, 1113, 'Actor'),
(56, 1114, 'Actriz'),
(57, 1115, 'Actor'),
(58, 1116, 'Actor'),
(59, 1117, 'Actor'),
(56, 1118, 'Actor'),
(57, 1119, 'Actriz'),
(58, 1120, 'Actor'),
(59, 1121, 'Actriz'),
(60, 1122, 'Actriz'),
(58, 1123, 'Actor'),
(59, 1124, 'Actor'),
(60, 1125, 'Actor'),
(60, 1126, 'Actor'),
(59, 822, 'Actor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoras`
--

CREATE TABLE IF NOT EXISTS `productoras` (
  `cod_productora` tinyint(3) unsigned NOT NULL,
  `productora` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_productora`),
  UNIQUE KEY `productora` (`productora`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productoras`
--

INSERT INTO `productoras` (`cod_productora`, `productora`) VALUES
(4, '20th Century Fox'),
(34, 'A3 Media'),
(19, 'Alcon Entertainment'),
(52, 'Alibaba Pictures'),
(31, 'Amblin Entertainment'),
(42, 'Apparatus Productions'),
(49, 'Atlas Entertainment'),
(47, 'Beacon Pictures'),
(23, 'Bel-Air Entertainment'),
(32, 'Channel Four Films'),
(26, 'Color Force'),
(1, 'Columbia Pictures'),
(8, 'Dream Works Pictures'),
(12, 'Filmax'),
(25, 'Focus Features'),
(40, 'Gk Films'),
(43, 'Hemisphere Media Capital'),
(20, 'Hollywood Pictures'),
(54, 'Icon Productions'),
(36, 'Imagemovers'),
(35, 'Jerry Bruckheimer Films'),
(22, 'Jersey Films'),
(55, 'Ladd Company'),
(44, 'Latina Picture'),
(24, 'Legendary Pictures'),
(9, 'Metro Goldwyn Meyer'),
(46, 'Miramax Films'),
(11, 'New Line Cinema'),
(38, 'Orion Nova Productions'),
(21, 'Orion Pictures'),
(45, 'Palomar Pictures'),
(6, 'Paramount Pictures'),
(48, 'Permut Presentations'),
(7, 'Pixar'),
(41, 'Plan B Entertainment'),
(37, 'Playtone'),
(30, 'Polygram Film Entertainment'),
(27, 'Random House Films'),
(17, 'Regency Enterprises'),
(14, 'Savoy Pictures'),
(16, 'Silver Screen Partners'),
(39, 'Skydance Productions'),
(51, 'Skylands Productions'),
(50, 'Smoke House Pictures'),
(10, 'Sony Pictures'),
(53, 'Telecinco Cinema'),
(13, 'Touchtones'),
(15, 'Tribeca Productions'),
(28, 'Tristar Pictures'),
(29, 'United Artists'),
(2, 'Universal Pictures'),
(5, 'Walt Disney Pictures'),
(3, 'Warner Bros'),
(33, 'Working Title'),
(18, 'Zanuck-Brown Productions');



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas_productoras`
--

CREATE TABLE IF NOT EXISTS `peliculas_productoras` (
  `cod_pelicula` smallint(5) unsigned NOT NULL,
  `cod_productora` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`cod_pelicula`,`cod_productora`),
  KEY `cod_productora` (`cod_productora`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas_productoras`
--

INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(31, 1),
(34, 3),
(33, 6),
(32, 20),
(35, 21),
(31, 22),
(34, 23);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(48, 2),
(50, 2),
(49, 4),
(47, 6),
(81, 7),
(49, 17),
(46, 35);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(80, 1),
(79, 3),
(77, 6),
(78, 6),
(76, 36);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(66, 1),
(70, 3),
(69, 4),
(70, 24),
(68, 25),
(68, 26),
(68, 27),
(67, 28);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(71, 1),
(75, 1),
(72, 2),
(74, 3),
(73, 4);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(2, 1),
(3, 1),
(4, 1),
(5, 6),
(1, 31),
(1, 38);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(27, 3),
(28, 3),
(29, 13),
(30, 13),
(26, 14),
(26, 15),
(29, 16),
(30, 35),
(27, 55);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(21, 6),
(22, 6),
(23, 6),
(24, 6),
(25, 6),
(25, 51),
(25, 52);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(61, 2),
(65, 4),
(63, 6),
(64, 6),
(62, 30),
(61, 31),
(62, 32),
(61, 33);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(20, 1),
(17, 2),
(17, 3),
(19, 3),
(16, 4),
(19, 6),
(18, 30),
(18, 33),
(20, 40),
(16, 54),
(16, 55);

INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(1004, 2),
(1000, 4),
(1003, 4),
(1002, 6),
(1000, 8),
(1001, 9),
(1000, 36),
(1000, 37),
(1001, 38),
(1002, 39),
(1002, 40),
(1002, 41),
(1002, 42),
(1002, 43),
(1002, 44),
(1003, 45);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(38, 1),
(37, 2),
(39, 3),
(40, 3),
(36, 4),
(39, 17),
(37, 18),
(40, 19);


INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(11, 3),
(12, 3),
(13, 3),
(15, 3),
(14, 46);












INSERT INTO `peliculas_productoras` (`cod_pelicula`, `cod_productora`) VALUES
(6, 3),
(10, 3),
(6, 31),
(10, 40),
(7, 47),
(8, 48),
(9, 49),
(10, 50);


--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas_generos`
--
ALTER TABLE `peliculas_generos`
  ADD CONSTRAINT `peliculas_generos_ibfk_1` FOREIGN KEY (`cod_pelicula`) REFERENCES `peliculas` (`cod_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peliculas_generos_ibfk_2` FOREIGN KEY (`cod_genero`) REFERENCES `generos` (`cod_genero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `peliculas_personas`
--
ALTER TABLE `peliculas_personas`
  ADD CONSTRAINT `peliculas_personas_ibfk_1` FOREIGN KEY (`cod_pelicula`) REFERENCES `peliculas` (`cod_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peliculas_personas_ibfk_2` FOREIGN KEY (`cod_persona`) REFERENCES `personas` (`cod_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `peliculas_productoras`
--
ALTER TABLE `peliculas_productoras`
  ADD CONSTRAINT `peliculas_productoras_ibfk_1` FOREIGN KEY (`cod_pelicula`) REFERENCES `peliculas` (`cod_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peliculas_productoras_ibfk_2` FOREIGN KEY (`cod_productora`) REFERENCES `productoras` (`cod_productora`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
