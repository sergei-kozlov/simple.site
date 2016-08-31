<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Posts')->delete();
        Post::create([
            'name' => 'Иван Иваниович',
            'email' => 'ivan@ivan.com',
            'subject' => '<b>"В Сингапуре живёт 3 миллиона человек. В основном, китайцы, славящиеся своей послушностью. Ли Куан Ю правитель Сингапура с 1959 по 1990 год обладал там практически неограниченной властью, что позволило ему создать государство-компьютер, тоталитарное государство.

Сингапур состоит из трех зон: туристической, экономической и спальной. Каждая зона отделена от другой границей - безупречным газоном шириной в пять километров (!!!)
Когда в 1965 г. Сингапур отделился от Малайзии, все считали, что мы сдохнем от голода: кругом болота, безработица, есть нечего, завозим всё, включая питьевую воду и песок... А сейчас средняя зарплата местного жителя 3500 долл. в месяц, нашу валюту берут в обменниках по всему миру.
Здесь нет никаких природных ресурсов, а на местной почве нельзя выращивать ни фрукты, ни пшеницу, ни рис. Так почему этот остров вдруг стал богатым?</b>',
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);


        Post::create([
            'name' => 'Петр Петров',
            'email' => 'petr@petrov.com',
            'subject' => '<b>Среди главных причин, приведших к угрозе разбалансировки энергосистемы и отключения электроэнергии он назвал нехватку мощности в системе на уровне 3,5 тыс. МВт по состоянию на 1 июня 2016 г. Чему способствовала сильная жара, местами достигавшая 35-36 градусов по Цельсию.

"Мы сейчас сжигаем около 100 тыс. тонн угля ежесуточно. Это больше, чем во время отопительного периода, когда за сутки расходуется 75-80 тыс. тонн угля. В месяц сжигается около 3 млн тонн угля", — рассказал министр.

По его словам, каждый дополнительный градус тепла приводит к увеличению потребления энергии на 100 МВт.
Кроме жары, нехватка мощностей была обусловлена работой только 9 из 11 блоков АЭС из-за ремонтов, а также остановка с апреля поставок антрацита из зоны АТО.

Тем не менее, по словам чиновника, уже разработан план обеспечения страны углем и бесперебойного прохождения отопительного сезона.

"Несмотря на сложности, мы уверены в том, что нам удастся организовать поставки угля на станции в необходимом объеме. Что позволит избежать веерных отключений до конца года", — заверил Игорь Насалик.</b>',

            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
