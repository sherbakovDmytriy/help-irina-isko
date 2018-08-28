@extends('layouts.main')

@section('title')
    <title>Статья</title>
@stop


@section('body')

<section class="top content content_sm" id="top">
    <div class="top__image"><img src="img/1.jpg" alt="" width="100%"></div>

    <div class="top__info">
        <h1 id="text1">Добрый день!</h1>
        <h2 id="text2">Меня зовут Ирина и я больна раком молочной железы. </h2>
        
        <p id="text3">Диагноз был поставлен абсолютно случайно – в конце июня этого года я была госпитализирована в клинику в связи с механической желтухой и перенесла операцию по стентированию желчного протока печени. Перед выпиской из больницы врачи решили удостовериться, что все в порядке и сделать КТ, на котором и обнаружили раковую опухоль. После была проведена операция по ее удалению, но для полного выздоровления необходимо пройти несколько курсов химиотерапии. Стоимость препаратов значительно превышает скромный бюджет нашей семьи, заработков мужа и дочери недостаточно для того, чтобы закупить дорогостоящие препараты. Я обращаюсь ко всем неравнодушным и прошу Вашей помощи, потому что любая сумма может дать мне шанс на выздоровление и полноценную жизнь, которая столь прекрасна и удивительна!</p>
        <p id="text4">С уважением, Ирина Исько.</p>
        
        <!-- <div class="button button_green">
            <span id="text5">пожертвовать</span>
            <input type="submit" value="">
        </div> -->
    </div>
</section>

<section class="main-form content content_sm" id="main-form">
    <h2 class="section__header">Реквизиты</h2>
    
    <form>
        <!-- <h2 id="text6">Vix et vocibus suavitate incorrupte, elitr labitur vix ex</h2> -->
        <div class="form-group">
            <div class="text-row">
                <span id="text7">Нужно собрать:</span>
                <span>179 000 грн</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <!-- <div class="form-group">
            <div class="form-offertory">
                <p id="text8">Введите сумму пожертвования:</p>

                <div class="flex flex_nowrap">
                    <input type="text" class="form-control input-summ" id="inputAddress" placeholder="">
                    <select class="form-control select-wallet" id="exampleFormControlSelect1">
                        <option>ГРН</option>
                        <option>USD</option>
                        <option>РУБ</option>
                    </select>
                </div>
            </div>
        </div> -->
        
        <!-- <div class="form-group">
            <div class="flex flex_between">
                <div class="button button_green">
                    <span id="text9">пожертвовать</span>
                    <input type="submit" value="">
                </div>

                <div class="button button_blue">
                    <span id="text10">реквизиты банка</span>
                    <input type="submit" value="">
                </div>
            </div>
        </div> -->

        <div class="modal fade" id="banking3" tabindex="-1" role="dialog" aria-labelledby="banking3Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="text13">
                            BENEFICIARY: ISKO OLHA, 03058, Ukraine, c. Kyiv, st. Borshchahivska
                            IBAN: UA393052990005168745013013153
                            ACCOUNT: 5168745013013153
                            BANK OF BENEFICIARY Beneficiary bank: PRIVATBANK, 1D HRUSHEVSKOGO STR., KYIV, 01001, UKRAINE, SWIFT CODE: PBANUA2X
                            INTERMEDIARY BANK Correspondent bank: Commerzbank AG Frankfurt am Main Germany, SWIFT CODE: COBADEFF
                            CORRESPONDENT ACCOUNT, Beneficiary bank’s account with Correspondent bank: acc № 400 8867004 01
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <ul class="contacts-list list_inline">
            <li class="contacts-list__item" data-toggle="modal" data-target="#banking1">
                <div class="icon-border"><span class="sign">₴</span></div>
                <span class="banking-link">В гривне</span>
            </li>
            <li class="contacts-list__item" data-toggle="modal" data-target="#banking2">
                <div class="icon-border"><span class="sign">$</span></div>
                <span class="banking-link">В долларах</span>
            </li>
            <li class="contacts-list__item" data-toggle="modal" data-target="#banking3">
                <div class="icon-border"><span class="sign">€</span></div>
                <span class="banking-link">В євро</span>
            </li>
        </ul>
    </form>
</section>

<section class="info content content_sm" id="info">
    <h2 class="section__header">Контакты</h2>

    <div class="flex flex_between">
        <div class="documents panel-bordered">
            <h2 id="text14">Документы</h2>

            <ul class="document-list">
                <li class="document-list__item" >
                    <a href="img/docs/Виписка з лікарні_1.jpg" target="blank"  id="text15">
                        Выписка из больницы 1
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="img/docs/Виписка з лікарні_2.jpg" target="blank" id="text16">
                        Выписка из больницы 2
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="img/docs/КТ_головного мозку.jpg" target="blank" id="text17">
                        КТ головного мозга
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="img/docs/КТ_органів_черевної_порожнини_1.jpg" target="blank" id="text18">
                        КТ органов брюшной полости 1
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="img/docs/КТ_органів_черевної_порожнини_2.jpg" target="blank" id="text19">
                        КТ органов брюшной полости 2
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="img/docs/Направлення на гістологію.jpg" target="blank" id="text20">
                        Направление на гистологию
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="img/docs/Реквізити картки для грн.jpg" target="blank" id="text21">
                        Реквизиты карты для грн
                    </a>
                </li>
            </ul>
        </div>

        <div class="contacts panel-bordered">
            <h2 id="text22">Контакты Ольги, дочери Ирины Васильевны:</h2>

            <ul class="contacts-list">
                <li class="contacts-list__item">
                    <div class="icon-border"><span class="icon icon-phone"></span></div>
                    <span>093-615-40-53</span>
                    <span>099-162-31-36</span>
                </li>
                <li class="contacts-list__item">
                    <div class="icon-border"><span class="icon icon-envelope"></span></div>
                    <span>olhaisko26@gmail.com</span>
                </li>
                <li class="contacts-list__item">
                    <div class="icon-border"><span class="icon icon-social-facebook"></span></div>
                    <span><a href="https://www.facebook.com/profile.php?id=100017221744416">Facebook</a></span>
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="socials">
    <a href="#" class="socials__item socials__item_vkontakte"><span class="icon icon-social-vkontakte"></span></a>
    <a href="#" class="socials__item socials__item_google"><span class="icon icon-social-google"></span></a>
    <a href="#" class="socials__item socials__item_facebook"><span class="icon icon-social-facebook"></span></a>
    <a href="#" class="socials__item socials__item_twitter"><span class="icon icon-social-twitter"></span></a>
</div>

<div class="modal fade" id="banking1" tabindex="-1" role="dialog" aria-labelledby="banking1Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="text11">
                    Одержувач – Ісько Ольга Сергіївна; РАХУНОК 29244825509100; БАНК ОДЕРЖУВАЧА АТ КБ «ПРИВАТБАНК», КИЇВ, Україна; ЄДРПОУ одержувача 14360570; ЄДРПОУ банку 14360570; МФО 305299; ПРИЗНАЧЕННЯ ПЛАТЕЖУ 5168755629111911, ІСЬКО ОЛЬГА СЕРГІЇВНА.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="banking2" tabindex="-1" role="dialog" aria-labelledby="banking2Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="text12">
                    BENEFICIARY: ISKO OLHA, 03058, Ukraine, c. Kyiv, st. Borshchahivska
                    IBAN: UA173052990005168745013013161
                    ACCOUNT: 5168745013013161
                    BANK OF BENEFICIARY Beneficiary bank: PRIVATBANK, 1D HRUSHEVSKOGO STR., KYIV, 01001, UKRAINESWIFT CODE: PBANUA2X
                    INTERMEDIARY BANK Correspondent bank: JP MORGAN CHASE BANK, SWIFT CODE: CHASUS33
                    CORRESPONDENT ACCOUNT Beneficiary bank’s account with Correspondent Bank: 0011000080
                </p>
            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')

    <script>
        $(document).ready(function() {
            $(".header-list__item").click(function() {
                $("html, body").animate({
                    scrollTop: $($(this).attr("href")).offset().top + "px"
                }, {
                    duration: 800,
                    easing: "swing"
                });
                return false;
            });
        });
    </script>

@stop