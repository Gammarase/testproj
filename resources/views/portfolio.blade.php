@extends('default_layout')
@section('style')
<link rel="stylesheet" href="{{ asset('css/portfolio_style.css') }}">
@endsection

@section('content')
<div class="title">
    <h1>Наші проєкти</h1>
</div>

<div class="alarm">
    <div class="content">
        <h1>Смарт будильник</h1>
        <p>Мобільний додаток, який допомагає користувачам встановлювати будильники та керувати ними на своєму
            пристрої. Він може включати такі функції, як встановлення кількох будильників, вибір власних звуків
            будильника, встановлення повторюваних будильників і поступове збільшення гучності будильника, щоб м'яко
            розбудити користувача.</p>
    </div>

    <img src="assets/Bodick_interface_of_mobile_alarm_3bb2b2e9-b7f4-4f54-8337-d13a368a8fd6.png" alt="phone-alarm">
</div>

<div class="finances">
    <img src="assets/Bodick_model_of_ui_for_online_banking_app_adde06af-e2fc-42be-b1c8-7579b270773b(1).png"
        alt="finances-app">
    <div class="content">
        <h1>Фінансовий менеджмент</h1>
        <p>Мобільний додаток, який допомагає користувачам відстежувати свої доходи, витрати та бюджет. Він може
            містити такі функції, як автоматична категоризація витрат, відстеження бюджету, нагадування про рахунки
            та відстеження інвестицій. Додаток також може надавати інформацію та рекомендації про те, як
            заощаджувати гроші та ефективно управляти фінансами.</p>
    </div>

</div>

<div class="library">
    <div class="content">
        <h1>Бібліотека</h1>
        <p>Мобільний додаток, що дозволяє користувачам керувати своєю музичною колекцією. Він може включати такі
            функції, як створення списків відтворення, перегляд і пошук пісень, синхронізація музики між пристроями
            та відтворення музики в режимі офлайн. Деякі додатки для музичних бібліотек також пропонують
            персоналізовані рекомендації, засновані на історії прослуховування та вподобаннях користувачів.</p>
    </div>

    <img src="assets/Bodick_smartphone_in_vertical_position_with_music_ui_on_screen_0d9aba16-ceec-4b2a-8726-88c0cd197e7d.png"
        alt="library-app">
</div>

<div class="final-interact">
    <h1>Отримайте безкоштовний макет вашого майбутнього додатку</h1>
    <div class="reg-button">
        <p>Хочу макет!</p>
    </div>
</div>




@endsection