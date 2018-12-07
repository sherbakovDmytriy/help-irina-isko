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
    </div>
</section>

<section class="main-form content content_sm" id="main-form">
    <h2 class="section__header" id="text5">Реквізити</h2>
    
    <form>
        <span style="margin-left: 40%;">
            <a href="{{ asset('img/docs/Rekvizit.pdf') }}" target="blank" id="text6">Реквізити картки для грн</a>
        </span>
        <br><br>
        <h2 id="text6-1" class="text-center">4 хімії по 16 тисяч</h2>
        <br>
         <div class="form-group">
            <div class="text-row">
                <span id="text6-2">Потрібно зібрати:</span>
                <span>64 000 UAH</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 48.28%" aria-valuenow="30900" aria-valuemin="0" aria-valuemax="64000">30 900</div>
            </div>
        </div>

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
    <a href="tg://resolve?domain=olhaisko" class="socials__item socials__item_telegram">
        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="1 -35 511.99993 511" width="24px" height="24px">
            <path d="m121.453125 253.171875 63.554687 158.886719 82.75-82.753906 141.535157 112.503906 102.707031-441.308594-512 205.480469zm-39.933594-47.640625 244.046875-97.945312-194.074218 117.363281zm287.535157-89.25-161.980469 148.1875-19.484375 73.425781-36.035156-90.085937zm-149.851563 219.230469 9.816406-36.996094 15.144531 12.035156zm171.65625 53.394531-147.386719-117.152344 221.902344-203.007812zm0 0" fill="#FFFFFF"/></svg>
        </span>
    </a>
    <a href="viber://chat?number=+380936154053" class="socials__item socials__item_viber">
        <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52.511 52.511" style="enable-background:new 0 0 52.511 52.511;" xml:space="preserve" width="24px" height="24px">
                <g>
                    <g>
                        <path d="M31.256,0H21.254C10.778,0,2.255,8.521,2.255,18.995v9.01c0,7.8,4.793,14.81,12,17.665v5.841    c0,0.396,0.233,0.754,0.595,0.914c0.13,0.058,0.268,0.086,0.405,0.086c0.243,0,0.484-0.089,0.671-0.259L21.725,47h9.531    c10.476,0,18.999-8.521,18.999-18.995v-9.01C50.255,8.521,41.732,0,31.256,0z M48.255,28.005C48.255,37.376,40.63,45,31.256,45    h-9.917c-0.248,0-0.487,0.092-0.671,0.259l-4.413,3.997v-4.279c0-0.424-0.267-0.802-0.667-0.942    C8.81,41.638,4.255,35.196,4.255,28.005v-9.01C4.255,9.624,11.881,2,21.254,2h10.002c9.374,0,16.999,7.624,16.999,16.995V28.005z" fill="#FFFFFF"/>
                        <path d="M39.471,30.493l-6.146-3.992c-0.672-0.437-1.472-0.585-2.255-0.423c-0.784,0.165-1.458,0.628-1.895,1.303l-0.289,0.444    c-2.66-0.879-5.593-2.002-7.349-7.085l0.727-0.632h0c1.248-1.085,1.379-2.983,0.294-4.233l-4.808-5.531    c-0.362-0.417-0.994-0.46-1.411-0.099l-3.019,2.624c-2.648,2.302-1.411,5.707-1.004,6.826c0.018,0.05,0.04,0.098,0.066,0.145    c0.105,0.188,2.612,4.662,6.661,8.786c4.065,4.141,11.404,7.965,11.629,8.076c0.838,0.544,1.781,0.805,2.714,0.805    c1.638,0,3.244-0.803,4.202-2.275l2.178-3.354C40.066,31.413,39.934,30.794,39.471,30.493z M35.91,34.142    c-0.901,1.388-2.763,1.782-4.233,0.834c-0.073-0.038-7.364-3.835-11.207-7.75c-3.592-3.659-5.977-7.724-6.302-8.291    c-0.792-2.221-0.652-3.586,0.464-4.556l2.265-1.968l4.152,4.776c0.369,0.424,0.326,1.044-0.096,1.411l-1.227,1.066    c-0.299,0.26-0.417,0.671-0.3,1.049c2.092,6.798,6.16,8.133,9.13,9.108l0.433,0.143c0.433,0.146,0.907-0.021,1.155-0.403    l0.709-1.092c0.146-0.226,0.37-0.379,0.63-0.434c0.261-0.056,0.527-0.004,0.753,0.143l5.308,3.447L35.91,34.142z" fill="#FFFFFF"/>
                        <path d="M28.538,16.247c-0.532-0.153-1.085,0.156-1.236,0.688c-0.151,0.531,0.157,1.084,0.688,1.235    c1.49,0.424,2.677,1.613,3.097,3.104c0.124,0.44,0.525,0.729,0.962,0.729c0.09,0,0.181-0.012,0.272-0.037    c0.531-0.15,0.841-0.702,0.691-1.234C32.405,18.578,30.69,16.859,28.538,16.247z" fill="#FFFFFF"/>
                        <path d="M36.148,22.219c0.09,0,0.181-0.012,0.272-0.037c0.532-0.15,0.841-0.703,0.691-1.234c-1.18-4.183-4.509-7.519-8.689-8.709    c-0.531-0.153-1.084,0.158-1.235,0.689c-0.151,0.531,0.157,1.084,0.688,1.235c3.517,1,6.318,3.809,7.311,7.328    C35.311,21.931,35.711,22.219,36.148,22.219z" fill="#FFFFFF"/>
                        <path d="M27.991,7.582c-0.532-0.153-1.085,0.156-1.236,0.689c-0.151,0.531,0.157,1.084,0.688,1.235    c5.959,1.695,10.706,6.453,12.388,12.416c0.124,0.44,0.525,0.729,0.962,0.729c0.09,0,0.181-0.012,0.272-0.037    c0.531-0.15,0.841-0.703,0.691-1.234C39.887,14.753,34.613,9.467,27.991,7.582z" fill="#FFFFFF"/>
                    </g>
                </g>
            </svg>
        </span>
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