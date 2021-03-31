<?php

class Model_Portfolio extends Model {

    public function get_data() {
        // Здесь мы просто сэмулируем реальные данные.

        return array(

            array(
                'Year' => '2020',
                'Site' => 'http://www.erlib.com',
                'Description' => 'Erlib - виртуальная библиотека - Поэзия и драматургия, проза, любовные романы'
            ),

            array(
                'Year' => '2019',
                'Site' => 'http://www.evartist.narod.ru',
                'Description' => 'Статьи и книги по журналистике, PR и связанным темам, Рефераты'
            ),

            array(
                'Year' => '2018',
                'Site' => 'http://shard1.narod.ru',
                'Description' => 'Античная, историческая и художественная литература, мемуары русских эмигрантов, путешествия и географические открытия.'
            ),

        );
    }
}