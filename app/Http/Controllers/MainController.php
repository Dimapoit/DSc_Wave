<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\About;
use App\Model\Coach;
use App\Model\Contact;
use App\Model\Dancedirection;
use App\Model\Gallery;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Video;
use MetaTag;
use View;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $contact = Contact::all();
        View::share('contact', $contact);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        MetaTag::setTags([
            'title' => trans('site-lang.main-title'),
            'description' => trans('site-lang.main-description'),
            'keywords' => trans('site-lang.main-keywords'),
        ]);
        $sliderData = Slider::all();
        $logoData = Logo::all();
        $abouts = About::all();
        $dancedir = Dancedirection::all();
        $coaches = Coach::all();
        $gallery = Gallery::all();
        $video = Video::all();
        return view('main', compact('sliderData', 'logoData', 'abouts', 'dancedir', 'coaches', 'gallery', 'video'));
    }

//    public function about()
//    {
//        return view('about');
//    }
//
//    public function services()
//    {
//        return view('services');
//    }

    public function rent()
    {
        MetaTag::setTags([
            'title' => trans('site-lang.rent-title'),
            'description' => trans('site-lang.rent-description'),
            'keywords' => trans('site-lang.rent-keywords'),
        ]);
        return view('rent', ['page'=>'rent']);
    }

    public function cafe()
    {
        MetaTag::setTags([
            'title' => trans('site-lang.cafe-title'),
            'description' => trans('site-lang.cafe-description'),
            'keywords' => trans('site-lang.cafe-keywords'),
        ]);
        return view('cafe', ['page'=>'cafe']);
    }

    public function shop()
    {
        MetaTag::setTags([
            'title' => trans('site-lang.shop-title'),
            'description' => trans('site-lang.shop-description'),
            'keywords' => trans('site-lang.shop-keywords'),
        ]);
        return view('shop', ['page'=>'shop']);
    }

    public function studio()
    {
        MetaTag::setTags([
            'title' => trans('site-lang.studio-title'),
            'description' => trans('site-lang.studio-description'),
            'keywords' => trans('site-lang.studio-keywords'),
        ]);
        return view('studio', ['page'=>'studio']);
    }

//    public function blog()
//    {
//        return view('blog', ['page'=>'blog']);
//    }

    public function gallery()
    {
        MetaTag::setTags([
            'title' => trans('site-lang.gallery-title'),
            'description' => trans('site-lang.gallery-description'),
            'keywords' => trans('site-lang.gallery-keywords'),
        ]);
        $gallery = Gallery::all();
        return view('gallery', ['page'=>'gallery'], compact('gallery'));
    }

    public function contact()
    {
        MetaTag::setTags([
            'title' => trans('site-lang.contact-title'),
            'description' => trans('site-lang.contact-description'),
            'keywords' => trans('site-lang.contact-keywords'),
        ]);
        return view('contact', ['page'=>'contact']);
    }

//    public function sliderData()
//    {
//        $array = [
//            new class {
//                public $id = 1;
//                public $path_image = "images/slider/wave_1.jpg";
//                public $title_big = "focus on the next wave";
//                public $title_small = ">Be One Of Us";
//            },
//            new class {
//                public $id = 2;
//                public $path_image = "images/slider/wave_2.jpg";
//                public $title_big = "Challenge Yourself";
//                public $title_small = "Be One Of Us";
//            },
//            new class {
//                public $id = 3;
//                public $path_image = "images/slider/wave_3.jpg";
//                public $title_big = "Life's a wave, catch it...";
//                public $title_small = "Be One Of Us";
//            }
//        ];
//        return $array;
//    }
//
//    public function logoData()
//    {
//        $array = [
//            new class {
//                public $id = 1;
//                public $path_image = "images/logo/audsf.png";
//                public $link_logo = "https://audsf.com.ua/news/";
//            },
//            new class {
//                public $id = 2;
//                public $path_image = "images/logo/scu.png";
//                public $link_logo = "https://scu.org.ua/";
//            },
//            new class {
//                public $id = 3;
//                public $path_image = "images/logo/noc.png";
//                public $link_logo = "http://noc-ukr.org/";
//            },
//            new class {
//                public $id = 4;
//                public $path_image = "images/logo/mincult.png";
//                public $link_logo = "https://mkip.gov.ua/ru/";
//            },
//            new class {
//                public $id = 5;
//                public $path_image = "images/logo/wdsf.png";
//                public $link_logo = "https://www.worlddancesport.org/";
//            },
//            new class {
//                public $id = 6;
//                public $path_image = "images/logo/msport.png";
//                public $link_logo = "https://www.facebook.com/msportukraine/";
//            }
//        ];
//        return $array;
//    }
//
//    public function aboutData()
//    {
//        $array = [
//            new class {
//                public $id = 1;
//                public $text_ua = "Найбільші та комфортні танцювальні зали у місті";
//                public $text_ru = "Самые большие и комфортные танцевальные залы в городе";
//            },
//            new class {
//                public $id = 2;
//                public $text_ua = "Найпотужніша тренерська команда професіоналів - фанатів своєї справи";
//                public $text_ru = "Мощнейшая тренерская команда профессионалов - фанатов своего дела";
//            },
//            new class {
//                public $id = 3;
//                public $text_ua = "Магазин та ательє спеціалізованого танцювального одягу";
//                public $text_ru = "Магазин и ателье специализированной танцевальной одежды";
//            },
//            new class {
//                public $id = 4;
//                public $text_ua = "Індивідуальний підхід до розвитку Вас або Вашої дитини";
//                public $text_ru = "Индивидуальный подход к развитию Вас или Вашего ребенка";
//            },
//            new class {
//                public $id = 5;
//                public $text_ua = "Фреш-бар, кафе";
//                public $text_ru = "Фреш-бар, кафе";
//            }
//        ];
//        return $array;
//    }
//
//    public function danceDirectionData()
//    {
//        $array = [
//            new class {
//                public $id = 1;
//                public $path_photo = "images/direction/ballroom.jpg";
//                public $title_ua = "Спортивний танець";
//                public $title_ru = "Спортивный танец";
//                public $textShort_ua = "";
//                public $textShort_ru = "";
//                public $text_ua = "Спортивний танець - це одне з найвдаліших поєднань спорту та мистецтва у сучасному світі. Яскраві та емоційні дії спортсменів насичені духом змагань і турнірів. Світ спортивних бальних танців сьогодні надзвичайно широкий та багатогранний, він набуває популярності в усіх країнах світу. Спеціалізований танцювальний центр відкриває можливості для всіх, хто бажає стати часткою цього дивовижного поєднання музики та рухів.";
//                public $text_ru = 'Спортивный танец - это одно из самых удачных сочетаний спорта и искусства в современном мире. Яркие и эмоциональные действия спортсменов напитаны духом соревнований и турниров. Мир спортивных бальных танцев сегодня чрезвычайно широк и многогранен, он обретает популярность во всех странах мира. Специализированный танцевальный центр открывает возможности для всех желающих стать частью этого удивительного сочетания музыки и движений.';
//            },
//            new class {
//                public $id = 2;
//                public $path_photo = "images/direction/babydance.jpg";
//                public $title_ua = "BabyDance";
//                public $title_ru = "BabyDance";
//                public $textShort_ua = "";
//                public $textShort_ru = "";
//                public $text_ua = "Ваш малюк з перших років життя вражає своїми здібностями та почуттям ритму? У нашому танцювальному центрі є чудова можливість розкрити талант Вашої дитини, і з ранніх років почати навчання в розважально-ігровій формі. У групах ... 3-5 років під керівництвом нашого професійного педагога на Ваших дітей чекає цілий комплекс цікавих занять: розвиток координації і ритму, розтяжка, вивчення танцювальних елементів та ігрових танців.";
//                public $text_ru = "Ваш малыш с первых лет жизни поражает своими способностями и чувством ритма? В нашем танцевальном центре есть чудесная возможность раскрыть талант Вашего ребенка, и с самых ранних лет начать обучение в развлекательно-игровой форме. В группах baby dance 3-5 лет, под руководством нашего профессионального педагога Ваших детей ожидает целый комплекс увлекательных занятий: развитие координации и ритма, растяжка, изучение танцевальных элементов и игровых танцев.";
//            },
//            new class {
//                public $id = 3;
//                public $path_photo = "images/direction/cheer.jpg";
//                public $title_ua = "Чирлiдинг";
//                public $title_ru = "Чирлидинг";
//                public $textShort_ua = "";
//                public $textShort_ru = "";
//                public $text_ua = "Чирлідинг - це сучасний спортивно-танцювальний напрямок. Чирлідинг поєднує в собі елементи хореографії, акробатики та гімнастики. Помпони та яскраві костюми перетворюють чир-виступи у грандіозне шоу. Це видовищний, незвичайний, стильний різновид танцювального спорту.";
//                public $text_ru = "Чирлидинг - это современное спортивно-танцевальное направление. Чирлидинг сочетает в себе элементы хореографии, акробатики и гимнастики. Помпоны и яркие костюмы превращают чир-выступления в грандиозное шоу. Это зрелищный, необычный, стильный вид танцевального спорта.";
//            },
//            // new class {
//            //     public $id = 4;
//            //     public $path_photo = "images/direction/program-4.jpg";
//            //     public $title_ua = "Аргентинське танго";
//            //     public $title_ru = "Аргентинское танго";
//            //     public $textShort_ua = "";
//            //     public $textShort_ru = "";
//            //     public $text_ua = "Спочатку ми вибираємо танго, потім танго вибирає нас. Танго індивідуально і колективно одночасно. Ви можете самостійно тренуватися, покращувати взаємодію в парі і танцювати на мілонгах. Танго об'єднує протилежності, знімаючи протиріччя між ними, налаштовує на співпрацю і взаємодію заради танцю. Вивчаючи танго, можна створювати прекрасний світ танцю для себе та інших.";
//            //     public $text_ru = "Сначала мы выбираем танго, потом танго выбирает нас. Танго индивидуально и коллективно одновременно. Вы можете самостоятельно тренироваться, улучшать взаимодействие в паре и танцевать на милонгах. Танго объединяет противоположности, снимая противоречия между ними, настраивает на сотрудничество и взаимодействие ради танца. Изучая танго, можно создавать прекрасный мир танца для себя и других.";
//            // },
//            new class {
//                public $id = 5;
//                public $path_photo = "images/direction/wedding.jpg";
//                public $title_ua = "Весiльний танець";
//                public $title_ru = "Свадебный танец";
//                public $textShort_ua = "";
//                public $textShort_ru = "";
//                public $text_ua = "Ваша головна подія в житті залишиться назавжди у Вашому серці та у спогадах Ваших шановних гостей. Наш танцювальний центр надає послугу постановки весільного танцю на Ваше свято. Досвідчений педагог за кілька занять поставить Вам танець Вашої мрії, з урахуванням Ваших побажань та стилістики Вашого заходу.";
//                public $text_ru = "Ваше главное событие в жизни останется навсегда в Вашем сердце и в воспоминаниях Ваших дорогих гостей. Наш танцевальный центр предоставляет услугу постановки свадебного танца на Ваше торжество. Опытный педагог за несколько занятий поставит Вам танец Вашей мечты, с учетом Ваших пожеланий и стилистики Вашего мероприятия.";
//            },
//            new class {
//                public $id = 6;
//                public $path_photo = "images/direction/pro-am.jpg";
//                public $title_ua = "Pro-Am";
//                public $title_ru = "Pro-Am";
//                public $textShort_ua = "";
//                public $textShort_ru = "";
//                public $text_ua = "Уявімо: Ви доросла людина і вам хочеться танцювати. Тільки Ви не вмієте або вмієте не дуже добре. У Вас виникають питання: де шукати потрібного тренера, партнера? З чого почати навчання? І ось тут і розкриваються всі плюси Pro-Am: партнером шукати не потрібно, бо у його ролі виступає тренер; у парі з професіоналом навчання йде набагато швидше, ніж з партнером-любителем; Ви зможете здивувати своїх близьких і друзів яскравим і незвичайним хобі; тренер на заняттях буде займатися тільки з Вами, а індивідуальний підхід, як відомо, найефективніший в будь-якому навчанні.";
//                public $text_ru = "Представим: Вы взрослый человек и вам хочется танцевать. Только Вы не умеете или умеете не очень хорошо. У Вас возникают вопросы: где искать подходящего тренера, партнера? С чего начать обучение? И вот тут-то раскрываются все плюсы Pro-Am: партнера искать не нужно, потому что в его роли выступает тренер; в паре с профессионалом обучение идет гораздо быстрее, чем с партнером-любителем; вы сможете удивить своих близких и друзей ярким и необычным хобби; тренер на занятиях будет заниматься только с Вами, а индивидуальный подход, как известно, самый эффективный в любом обучении.";
//            }];
//        return $array;
//    }
//
//    public function coachesData()
//    {
//        $array = [
//            new class {
//                public $id = 1;
//                public $name = "Назар Шашков";
//                public $danceDirection_id = 1;
//                public $description = "A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country";
//                public $path_photo = "images/coaches/nazarshashkov.jpg";
//                public $link_fb = 'https://www.facebook.com/nazar.shashkov';
//                public $link_insta = '';
//            },
//            new class {
//                public $id = 2;
//                public $name = "Ганна Шашаєва";
//                public $name_ru = "Анна Шашаева";
//                public $danceDirection_id = 1;
//                public $description = "A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country";
//                public $description_ru = '';
//                public $path_photo = "images/coaches/annashashaeva.jpg";
//                public $link_fb = '';
//                public $link_insta = 'https://www.instagram.com/a_shashaeva';
//            },
//            new class {
//                public $id = 3;
//                public $name = "Георгій Ломакін";
//                public $name_ru = "Георгий Ломакин";
//                public $danceDirection_id = 1;
//                public $description = "A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country";
//                public $description_ru = '';
//                public $path_photo = "images/coaches/Georgiy. lomakin.jpg";
//                public $link_fb = 'https://ru-ru.facebook.com/people/%D0%93%D0%B5%D0%BE%D1%80%D0%B3%D0%B8%D0%B9-%D0%9B%D0%BE%D0%BC%D0%B0%D0%BA%D0%B8%D0%BD/100023192010467';
//                public $link_insta = '';
//            },
//            new class {
//                public $id = 4;
//                public $name = "Катерина Заіка";
//                public $name_ru = "Екатерина Заика";
//                public $danceDirection_id = 2;
//                public $description = "A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country";
//                public $description_ru = '';
//                public $path_photo = "images/coaches/Ekaterina.jpg";
//                public $link_fb = '';
//                public $link_insta = 'https://www.instagram.com/ket.dance_mrpl';
//            },
//            new class {
//                public $id = 5;
//                public $name = "Iрина Перченко";
//                public $name_ru = "Ирина Перченко";
//                public $danceDirection_id = 2;
//                public $description = "A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country";
//                public $description_ru = '';
//                public $path_photo = "images/coaches/irina.jpg";
//                public $link_fb = '';
//                public $link_insta = 'https://www.instagram.com/v.l.s.v07';
//            },
//            new class {
//                public $id = 6;
//                public $name = "Ольга Смолiна";
//                public $name_ru = "Ольга Смолина";
//                public $danceDirection_id = 2;
//                public $description = "A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country";
//                public $description_ru = '';
//                public $path_photo = "images/coaches/Smolina.jpg";
//                public $link_fb = '';
//                public $link_insta = 'https://www.instagram.com/smolina_olga_';
//            }];
//        return $array;
//    }
//
//    public function galleryData()
//    {
//        $array = [
//            "images/gallery/gallery_1.jpg",
//            "images/gallery/gallery_2.jpg",
//            "images/gallery/gallery_3.jpg",
//            "images/gallery/gallery_4.jpg",
//            "images/gallery/gallery_5.jpg",
//            "images/gallery/gallery_6.jpg",
//            "images/gallery/gallery_7.jpg",
//            "images/gallery/gallery_8.jpg",
//            "images/gallery/gallery_9.jpg",
//            "images/gallery/gallery_10.jpg",
//            "images/gallery/gallery_11.jpg",
//            "images/gallery/gallery_12.jpg",
//            "images/gallery/gallery_13.jpg",
//            "images/gallery/gallery_14.jpg",
//            "images/gallery/gallery_15.jpg"
//        ];
//        return $array;
//    }
//
//    public function contactData()
//    {
//        $contact =
//            new class {
//                public $id = 1;
//                public $address_ua = "СК Іллічівець, східна трибуна, проспект Нахімова, 53, ТСЦ Wave Маріуполь";
//                public $address_ru = "СК Ильичевец, восточная трибуна, проспект Нахимова, 53, ТСЦ Wave Мариуполь";
//                public $phone = '+380985674170';
//                public $email = 'nazarshashkov@gmail.com';
//            };
//        return $contact;
//    }
}
