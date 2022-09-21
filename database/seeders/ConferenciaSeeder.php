<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `conferencias` (`confId`, `confNombre`, `lastGiven`) VALUES 
        (1, '¿Conoce bien a Dios?', '2022-01-01'),
        (2, '¿Sobreviviremos a los últimos días?', '2022-03-01'),
        (3, 'Avancemos con la organización unida de Jehová', '2022-10-01'),
        (4, 'El mundo que nos rodea prueba que Dios existe', null),
        (5, 'Ayuda práctica para las familias', null),
        (6, '¿Qué aprendemos del Diluvio universal?', '2022-03-01'),
        (7, 'Imitemos al “Padre de tiernas misericordias”', '2022-08-01'),
        (8, 'Vivamos para hacer la voluntad de Dios, no la nuestra', '2019-09-01'),
        (9, 'Escuchemos y pongamos en práctica la Palabra de Dios', '2021-05-01'),
        (10, 'Seamos honrados en todo', null),
        (11, 'Imitemos a Jesús, y no seamos parte del mundo', '2020-12-01'),
        (12, 'A Dios le importa cómo vemos la autoridad', null),
        (13, 'Cómo ve Dios el sexo y el matrimonio', null),
        (14, 'Un pueblo limpio da gloria a Jehová', '2019-01-01'),
        (15, '“Hagamos el bien a todos”', '2022-01-01'),
        (16, 'Fortalezcamos nuestra amistad con Dios', '2020-03-01'),
        (17, 'Demos gloria a Dios con todo lo que tenemos', '1933-07-01'),
        (18, 'Haga de Jehová su “fortaleza”', '2022-08-01'),
        (19, 'Cómo puede usted conocer su futuro', '2021-09-01'),
        (20, '¿Ha llegado el tiempo para que Dios gobierne el mundo?', '2021-08-01'),
        (21, 'Valoremos nuestro lugar en el Reino de Dios', '2019-05-01'),
        (22, '¿Aprovecha usted todas las ayudas espirituales que Jehová nos da?', '2022-10-01'),
        (23, 'La vida tiene propósito', null),
        (24, '¿Ha encontrado usted “una perla muy valiosa”?', '2021-03-01'),
        (25, 'Luchemos contra el espíritu del mundo', null),
        (26, '¿Le importamos a Dios?', '2022-05-01'),
        (27, 'Cómo iniciar bien el matrimonio', null),
        (28, 'Muestre respeto y amor en su matrimonio', null),
        (29, 'Las responsabilidades y las recompensas que tienen los padres', null),
        (30, 'Cómo mejorar la comunicación en la familia', '2018-09-01'),
        (31, '¿Estamos al tanto de nuestras necesidades espirituales?', null),
        (32, 'Cómo enfrentarse a las inquietudes de la vida', '2021-10-01'),
        (33, '¿Habrá algún día justicia para todos?', '2022-11-01'),
        (34, '(No está disponible)', '2018-09-01'),
        (35, '¿Se puede vivir para siempre? ¿Lo logrará usted?', null),
        (36, '¿Es esta vida todo lo que podemos esperar?', '2019-05-01'),
        (37, '¿Por qué andar en el camino de Dios?', null),
        (38, '¿Cómo puede usted sobrevivir al fin del mundo?', null),
        (39, '¡Seguros de la victoria divina!', '2020-10-01'),
        (40, '(No está disponible)', '2021-01-01'),
        (41, '“Estense quietos y vean cómo los salva Jehová”', '2020-05-01'),
        (42, 'Cómo le afecta a usted el Reino de Dios', null),
        (43, 'Lo que Dios espera de nosotros siempre nos beneficia', '2021-08-01'),
        (44, '¿Cómo le benefician a usted las enseñanzas de Jesús?', null),
        (45, 'Sigamos el camino que lleva a la vida', null),
        (46, 'Mantengamos nuestra confianza fuerte hasta el fin', '2022-05-01'),
        (47, '(No está disponible)', null),
        (48, 'Cómo ser leales ante las pruebas', '2021-03-01'),
        (49, '¿Viviremos algún día en una Tierra limpia?', null),
        (50, 'Cómo tomar buenas decisiones', '2022-09-01'),
        (51, '¿Está la verdad transformando su vida?', '2022-09-01'),
        (52, '¿Quién es su Dios?', null),
        (53, '¿Piensa usted igual que Dios?', '2020-10-01'),
        (54, 'Tenga fe en Dios y sus promesas', null),
        (55, '¿Cómo puede ganarse una buena reputación ante Dios?', '2020-02-01'),
        (56, '¿En qué líder podemos confiar?', '2019-05-01'),
        (57, 'Aguantemos la persecución', '2022-11-01'),
        (58, '¿Quiénes son los verdaderos discípulos de Cristo?', '2019-07-01'),
        (59, 'Se siega lo que se siembra', null),
        (60, '¿Qué propósito tiene su vida?', '2019-11-01'),
        (61, '¿En las promesas de quién confía usted?', null),
        (62, 'El único remedio para la humanidad enferma', null),
        (63, '¿Tiene usted espíritu evangelizador?', '2022-10-01'),
        (64, '¿Amamos los placeres en vez de a Dios?', null),
        (65, '¿Cómo podemos ser pacíficos en un mundo violento?', '2021-10-01'),
        (66, '¿Será usted un buen trabajador en la cosecha?', '2022-09-01'),
        (67, 'Medite en la Palabra de Jehová y en su creación', '2021-01-01'),
        (68, '¿Guarda usted rencor o perdona?', '2022-08-01'),
        (69, '¿Por qué es importante mostrar amor desinteresado?', '2022-10-01'),
        (70, 'Cifre su confianza en Jehová', '2022-06-01'),
        (71, 'Ahora es el momento de estar despiertos', '2020-04-01'),
        (72, 'El amor identifica a la religión verdadera', '2020-12-01'),
        (73, 'Adquiera un corazón de sabiduría', '2021-04-01'),
        (74, 'Los ojos de Jehová están sobre nosotros', '2021-09-01'),
        (75, '¿Reconoce usted la soberanía de Jehová en su vida personal?', '2021-03-01'),
        (76, '¿Pueden los principios bíblicos ayudarnos a afrontar los problemas de nuestro tiempo?', '2020-12-01'),
        (77, 'Sean siempre hospitalarios ', '2022-05-01'),
        (78, 'Sirva a Jehová con alegría', '2021-02-01'),
        (79, '¿A quien prefiere como amigo?', '2022-05-01'),
        (80, '¿Confía usted en la ciencia, o en la Biblia?', null),
        (81, '¿Quiénes están preparados para hacer discípulos?', null),
        (82, 'Jehová y Cristo: ¿son ellos parte de una trinidad?', null),
        (83, 'El tiempo de juicio para la religión', null),
        (84, '¿Escapará usted de lo que le espera a este mundo?', null),
        (85, 'Buenas nuevas en un mundo violento', null),
        (86, 'Las oraciones que Dios escucha', '2020-06-01'),
        (87, '¿Qué relación tiene usted con Dios?', null),
        (88, '¿Por qué regir su vida por las normas bíblicas?', '2020-05-01'),
        (89, '¡Venga, el que tenga sed de la verdad!', null),
        (90, 'Esfuércese por conseguir la vida que realmente es vida', '2021-06-01'),
        (91, 'La presencia y la gobernación del Mesías', null),
        (92, 'El papel de la religión en los asuntos del mundo', null),
        (93, '¿Es Dios el causante de los desastres naturales?', null),
        (94, 'La religión verdadera satisface las necesidades de la sociedad humana', null),
        (95, 'La Biblia ante las prácticas espiritistas', '2022-11-01'),
        (96, '¿Cuál es el futuro de la religión?', null),
        (97, 'Permanezcamos sin culpa en medio de una generación torcida', '2019-10-01'),
        (98, '“La escena de este mundo está cambiando”', '2020-11-01'),
        (99, 'Por qué se puede confiar en la Biblia', null),
        (100, 'La amistad verdadera con Dios y con el prójimo', '2022-09-01'),
        (101, 'Jehová, el Magnífico Creador', null),
        (102, 'Prestemos atención a la palabra profética', null),
        (103, 'Usted puede experimentar gozo al servir a Dios', '2019-06-01'),
        (104, 'Padres, ¿están edificando con materiales incombustibles?', null),
        (105, 'Cómo obtener consuelo en toda tribulación', '2020-06-01'),
        (106, 'Dios dará su merecido a los que arruinan la tierra', null),
        (107, 'Mantengamos una buena conciencia en un mundo pecador', null),
        (108, 'Superemos el temor al futuro', '2020-07-01'),
        (109, 'El Reino de Dios está cerca', null),
        (110, 'La familia feliz es la que pone a Dios en primer lugar', '2019-04-01'),
        (111, '¿Qué logra la curación de las naciones?', null),
        (112, 'Cómo mostrar amor en un mundo desaforado', '2022-04-01'),
        (113, 'Joven, ¿cómo puedes ser feliz y tener éxito?', '2020-09-01'),
        (114, 'Aprecie las maravillas de la creación de Dios', '2021-10-01'),
        (115, 'Cómo protegernos de las trampas de Satanás', '2020-11-01'),
        (116, 'Sea sabio al elegir sus compañías', '2022-06-01'),
        (117, 'Cómo vencer el mal con el bien', '1901-02-22'),
        (118, 'Veamos a los jóvenes como los ve Jehová', '2021-06-01'),
        (119, 'Por qué es provechoso que los cristianos se mantengan separados del mundo', null),
        (120, 'Razones para someterse hoy al gobierno de Dios', null),
        (121, 'Una hermandad mundial rescatada de la calamidad', null),
        (122, '¿De qué fuente vendrá la paz mundial?', null),
        (123, 'Por qué deben ser diferentes los cristianos', '2022-10-01'),
        (124, 'Razones para confiar en el origen divino de la Biblia', null),
        (125, 'Por qué necesita la humanidad un rescate', null),
        (126, '¿Quién puede ser salvo?', null),
        (127, '¿Qué nos sucede cuando morimos?', null),
        (128, '¿Es el infierno realmente un lugar de tormento?', null),
        (129, '¿Es la Trinidad una enseñanza bíblica?', null),
        (130, 'La Tierra existirá para siempre', null),
        (131, '¿De verdad existe el Diablo?', '2018-08-01'),
        (132, 'La resurrección: una victoria sobre la muerte', '2021-01-01'),
        (133, '¿Importa lo que creemos sobre el origen de los seres humanos?', null),
        (134, '¿Deben guardar los cristianos un día de descanso?', null),
        (135, 'La santidad de la vida y la sangre', null),
        (136, '¿Aprueba Dios las imágenes en la adoración?', null),
        (137, '¿De verdad tuvieron lugar los milagros de la Biblia?', null),
        (138, 'Vivamos con buen juicio en un mundo perverso', '2021-02-01'),
        (139, 'Sabiduría piadosa en un mundo de orientación científica', '2018-11-01'),
        (140, 'Quién es Jesucristo en realidad?', null),
        (141, '¿Cuándo dejará de gemir la creación humana?', null),
        (142, 'Por qué refugiarse en Jehová', '2020-12-01'),
        (143, 'Confiemos en el Dios de todo consuelo', '2018-10-01'),
        (144, 'Una congregación leal bajo la dirección de Cristo', '2018-12-01'),
        (145, '¿Quién es como Jehová nuestro Dios?', '2018-09-01'),
        (146, 'Utilice la educación para alabar a Jehová', null),
        (147, 'Confíe en el poder salvador de Jehová', '2022-09-01'),
        (148, '¿Ve usted la vida como la ve Dios?', null),
        (149, '¿Anda usted con Dios?', '2022-02-01'),
        (150, '¿Está este mundo condenado a la destrucción?', null),
        (151, 'Jehová es “una altura segura” para su pueblo', '2020-05-01'),
        (152, '¿Cuándo y por qué vendrá el verdadero Armagedón?', null),
        (153, 'Estemos muy pendientes del “impresionante día de Jehová”', '2020-10-01'),
        (154, 'El gobierno del hombre, pesado en la balanza', null),
        (155, '¿Ha llegado la hora del juicio de Babilonia?', '2020-01-01'),
        (156, '¿Es el Día del Juicio un tiempo de temor, o de esperanza?', '2019-08-01'),
        (157, 'Cómo adornan los cristianos la enseñanza divina', '2019-11-01'),
        (158, 'Seamos valerosos y confiemos en Jehová', null),
        (159, 'Cómo encontrar seguridad en un mundo peligroso', null),
        (160, 'Protejamos nuestra identidad cristiana', '2022-01-01'),
        (161, '¿Por qué sufrió y murió Jesús?', null),
        (162, 'Liberados de un mundo de oscuridad', '2018-10-01'),
        (163, '¿Por qué temer al Dios verdadero?', null),
        (164, '¿Sigue Dios ejerciendo la soberanía sobre la Tierra?', null),
        (165, '¿A qué valores concedemos más importancia?', '2022-11-01'),
        (166, 'Afrontemos el futuro con fe y valor', '2021-11-01'),
        (167, 'Actuemos con sabiduría en este mundo insensato', '2021-06-01'),
        (168, 'Cómo sentirse seguro en este mundo turbulento', '2019-05-01'),
        (169, '¿Por qué debemos guiarnos por la Biblia?', '2021-12-01'),
        (170, '¿Quién es el único que puede gobernar bien a la humanidad?', '2022-05-01'),
        (171, 'Usted puede disfrutar de la vida en paz ahora y para siempre', '2020-02-01'),
        (172, '¿Qué posición tenemos ante Dios?', null),
        (173, '¿Le importa a Dios qué religión tengamos?', null),
        (174, '¿Quién será digno de entrar en el nuevo mundo de Dios?', '2018-08-01'),
        (175, '¿Qué pruebas demuestran la autenticidad de la Biblia?', null),
        (176, '¿Cuándo tendremos verdadera paz y seguridad?', '2021-10-01'),
        (177, '¿A quién podemos acudir en tiempos de angustia?', '2022-02-01'),
        (178, 'Andemos en el camino de la integridad', '2022-06-01'),
        (179, 'Rechace las fantasías mundanales; busque las realidades del Reino', '2021-11-01'),
        (180, '¿Por qué debe ser real para nosotros la esperanza de la resurrección?', '2021-01-01'),
        (181, '¿Faltará menos de lo que usted cree?', '2019-10-01'),
        (182, '¿Qué está haciendo por nosotros el Reino de Dios?', null),
        (183, 'Alejemos la mirada de lo que es inútil', '2019-11-01'),
        (184, '¿Es la muerte el final de todo?', '2020-02-01'),
        (185, '¿Influye la verdad en su vida?', '2022-02-01'),
        (186, 'Unidos al feliz pueblo de Dios', '2022-04-01'),
        (187, '¿Cómo es posible que un Dios de amor permita la maldad?', '2020-01-01'),
        (188, '¿Ha puesto usted su confianza en Jehová?', '2021-09-01'),
        (189, 'Andar con Dios nos beneficia ahora y para siempre', '2021-09-01'),
        (190, 'Una familia unida y feliz para siempre', '2019-03-01'),
        (191, 'Cómo vencen al mundo la fe y el amor', '2022-06-01'),
        (192, '¿Anda usted por el camino que lleva a la vida eterna?', '2019-06-01'),
        (193, 'Pronto se nos librará de la angustia mundial', '2021-10-01'),
        (194, 'Cómo nos beneficia la sabiduría divina', '2022-01-01')");
    }
}