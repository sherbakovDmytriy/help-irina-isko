@extends('layouts.main')

@section('title')
    <title>Мене звати Ірина і я хворію на рак молочної залози.</title>
@stop


@section('body')

<section class="top content content_sm" id="top">
    <div class="top__image"><img src="img/1.jpg" alt="" width="100%"></div>

    <div class="top__info">
        <h1 id="text1">Вітаю Вас!</h1>
        <h2 id="text2">Мене звати Ірина і я хворію на рак молочної залози.</h2>
        
        <p id="text3">Діагноз було встановлено випадково – в кінці червня цього року я була госпіталізована в лікарню у зв’язку з механічною жовтяницею і перенесла операцію зі стенування жовчного протоку печінки. Перед випискою з лікарні лікарі вирішили впевнитись, що все в порядку і зробили КТ, на якому було виявлено ракову пухлину. Після була проведена операція з її видалення, але для одужання необхідно пройти кілька курсів хіміотерапії. Вартість препаратів значно перевищує скромний бюджет нашої родини, заробітної плати чоловіка і доньки недостатньо для того, щоб закупити дорогі препарати. Я звертаюсь до всіх небайдужих і прошу Вашої допомоги, тому що будь-яка сума може дати мені шанс на одужання і повноцінне життя, яке настільки прекрасне і дивовижне!</p>
        <p id="text4">З повагою, Ірина Ісько.</p>
        
        <!-- <div class="button button_green">
            <span id="text5">пожертвовать</span>
            <input type="submit" value="">
        </div> -->
    </div>
</section>

<section class="main-form content content_sm" id="main-form">
    <h2 class="section__header" id="text5">Реквізити</h2>
    
    <form>
        <span style="margin-left: 40%;">
            <a href="{{ asset('img/docs/Rekvizit.pdf') }}" target="blank" id="text6">Реквізити картки для грн</a>
        </span>
        <br><br>
        <!-- <h2 id="text6">Vix et vocibus suavitate incorrupte, elitr labitur vix ex</h2> -->
        <!-- <div class="form-group">
            <div class="text-row">
                <span id="text6">Нужно собрать:</span>
                <span>179 000 грн</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div> -->

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
                        <p id="text7">
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
                <span class="banking-link" id="text8">У гривні</span>
            </li>
            <li class="contacts-list__item" data-toggle="modal" data-target="#banking2">
                <div class="icon-border"><span class="sign">$</span></div>
                <span class="banking-link" id="text9">У долларах</span>
            </li>
            <li class="contacts-list__item" data-toggle="modal" data-target="#banking3">
                <div class="icon-border"><span class="sign">€</span></div>
                <span class="banking-link" id="text10">В євро</span>
            </li>
        </ul>
    </form>
</section>

<section class="info content content_sm" id="info">
    <h2 class="section__header" id="text11">Контакти</h2>

    <div class="flex flex_between">
        <div class="documents panel-bordered">
            <h2 id="text12">Документи</h2>

            <ul class="document-list">
                <li class="document-list__item" >
                    <a href="{{ asset('img/docs/vipiska1.pdf') }}" target="blank"  id="text13">
                        Виписка з лікарні 1
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="{{ asset('img/docs/vipiska2.pdf') }}" target="blank" id="text14">
                        Виписка з лікарні 2
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="{{ asset('img/docs/KTGlavnogoMozga.pdf') }}" target="blank" id="text15">
                        КТ головного мозку
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="{{ asset('img/docs/KTOrganivCHerevnoiPorognini1.pdf') }}" target="blank" id="text16">
                        КТ органів черевної порожнини 1
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="{{ asset('img/docs/KTOrganivCHerevnoiPorognini2.pdf') }}" target="blank" id="text17">
                        КТ органів черевної порожнини 2
                    </a>
                </li>
                <li class="document-list__item">
                    <a href="{{ asset('img/docs/NapravlennaNaGistologiu.pdf') }}" target="blank" id="text18">
                        Направлення на гістологію
                    </a>
                </li>
            </ul>
        </div>

        <div class="contacts panel-bordered">
            <h2 id="text19">Контакти Ольги, доньки Ірини Василівни:</h2>

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
    <a href="mailto:olhaisko26@gmail.com" class="socials__item socials__item_google">
        <span class="icon icon-social-google"></span>
    </a>
    <a href="https://www.facebook.com/profile.php?id=100017221744416" class="socials__item socials__item_facebook">
        <span class="icon icon-social-facebook"></span>
    </a>
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
                <p id="text20">
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
                <p id="text21">
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