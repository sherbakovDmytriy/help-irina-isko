var langs = document.getElementById("exampleFormControlSelect1");

langs.addEventListener('change', function() {
    if(langs.value == 'Українська' ) setLengUA();
    else if(langs.value == 'Русский' ) setLengRU();
    else if(langs.value == 'English' ) setLengEN();
});

function setLengUA(){
    document.getElementById("text1").innerHTML = "Вітаю Вас!";
    document.getElementById("text2").innerHTML = "Мене звати Ірина і я хворію на рак молочної залози.";
    document.getElementById("text3").innerHTML = "Діагноз було встановлено випадково – в кінці червня цього року я була госпіталізована в лікарню у зв’язку з механічною жовтяницею і перенесла операцію зі стенування жовчного протоку печінки. Перед випискою з лікарні лікарі вирішили впевнитись, що все в порядку і зробили КТ, на якому було виявлено ракову пухлину. Після була проведена операція з її видалення, але для одужання необхідно пройти кілька курсів хіміотерапії. Вартість препаратів значно перевищує скромний бюджет нашої родини, заробітної плати чоловіка і доньки недостатньо для того, щоб закупити дорогі препарати. Я звертаюсь до всіх небайдужих і прошу Вашої допомоги, тому що будь-яка сума може дати мені шанс на одужання і повноцінне життя, яке настільки прекрасне і дивовижне!";
    document.getElementById("text4").innerHTML = "З повагою, Ірина Ісько.";
    // document.getElementById("text5").innerHTML = "пожертвувати";
    // document.getElementById("text6").innerHTML = "Vix et vocibus suavitate incorrupte, elitr labitur vix ex";
    document.getElementById("text7").innerHTML = "Потрібно зібрати:";
    // document.getElementById("text8").innerHTML = "Введіть суму пожертвування:";
    // document.getElementById("text9").innerHTML = "пожертвувати";
    // document.getElementById("text10").innerHTML = "реквізити банку";
    document.getElementById("text11").innerHTML = "1) У гривні: Одержувач – Ісько Ольга Сергіївна; РАХУНОК 29244825509100; БАНК ОДЕРЖУВАЧА АТ КБ «ПРИВАТБАНК», КИЇВ, Україна; ЄДРПОУ одержувача 14360570; ЄДРПОУ банку 14360570; МФО 305299; ПРИЗНАЧЕННЯ ПЛАТЕЖУ 5168755629111911, ІСЬКО ОЛЬГА СЕРГІЇВНА.";
    document.getElementById("text12").innerHTML = "2)	У долларах: BENEFICIARY: ISKO OLHA, 03058, Ukraine, c. Kyiv, st. Borshchahivska IBAN: UA173052990005168745013013161 ACCOUNT: 5168745013013161 BANK OF BENEFICIARY Beneficiary bank: PRIVATBANK, 1D HRUSHEVSKOGO STR., KYIV, 01001, UKRAINESWIFT CODE: PBANUA2X    INTERMEDIARY BANK Correspondent bank: JP MORGAN CHASE BANK, SWIFT CODE: CHASUS33 CORRESPONDENT ACCOUNT Beneficiary bank’s account with Correspondent Bank: 0011000080";
    document.getElementById("text13").innerHTML = "3)	В євро: BENEFICIARY: ISKO OLHA, 03058, Ukraine, c. Kyiv, st. Borshchahivska IBAN: UA393052990005168745013013153 ACCOUNT: 5168745013013153 BANK OF BENEFICIARY Beneficiary bank: PRIVATBANK, 1D HRUSHEVSKOGO STR., KYIV, 01001, UKRAINE, SWIFT CODE: PBANUA2X INTERMEDIARY BANK Correspondent bank: Commerzbank AG Frankfurt am Main Germany, SWIFT CODE: COBADEFF CORRESPONDENT ACCOUNT, Beneficiary bank’s account with Correspondent bank: acc № 400 8867004 01";
    document.getElementById("text14").innerHTML = "Документи";
    document.getElementById("text15").innerHTML = "Виписка з лікарні 1";
    document.getElementById("text16").innerHTML = "Виписка з лікарні 2";
    document.getElementById("text17").innerHTML = "КТ головного мозку";
    document.getElementById("text18").innerHTML = "КТ органів черевної порожнини 1";
    document.getElementById("text19").innerHTML = "КТ органів черевної порожнини 2";
    document.getElementById("text20").innerHTML = "Направлення на гістологію";
    document.getElementById("text21").innerHTML = "Реквізити картки для грн";
    document.getElementById("text22").innerHTML = "Контакти Ольги, доньки Ірини Василівни";
}

function setLengRU(){
    document.getElementById("text1").innerHTML = "Добрый день!";
    document.getElementById("text2").innerHTML = "Меня зовут Ирина и я больна раком молочной железы.";
    document.getElementById("text3").innerHTML = "Диагноз был поставлен абсолютно случайно – в конце июня этого года я была госпитализирована в клинику в связи с механической желтухой и перенесла операцию по стентированию желчного протока печени. Перед выпиской из больницы врачи решили удостовериться, что все в порядке и сделать КТ, на котором и обнаружили раковую опухоль. После была проведена операция по ее удалению, но для полного выздоровления необходимо пройти несколько курсов химиотерапии. Стоимость препаратов значительно превышает скромный бюджет нашей семьи, заработков мужа и дочери недостаточно для того, чтобы закупить дорогостоящие препараты. Я обращаюсь ко всем неравнодушным и прошу Вашей помощи, потому что любая сумма может дать мне шанс на выздоровление и полноценную жизнь, которая столь прекрасна и удивительна!";
    document.getElementById("text4").innerHTML = "С уважением, Ирина Исько.";
    // document.getElementById("text5").innerHTML = "Пожертвовать";
    // document.getElementById("text6").innerHTML = "Vix et vocibus suavitate incorrupte, elitr labitur vix ex";
    document.getElementById("text7").innerHTML = "Нужно собрать:";
    // document.getElementById("text8").innerHTML = "Введите сумму пожертвования:";
    // document.getElementById("text9").innerHTML = "Пожертвовать";
    // document.getElementById("text10").innerHTML = "Реквизиты банка";
    document.getElementById("text11").innerHTML = "1) В гривне: Одержувач – Ісько Ольга Сергіївна; РАХУНОК 29244825509100; БАНК ОДЕРЖУВАЧА АТ КБ «ПРИВАТБАНК», КИЇВ, Україна; ЄДРПОУ одержувача 14360570; ЄДРПОУ банку 14360570; МФО 305299; ПРИЗНАЧЕННЯ ПЛАТЕЖУ 5168755629111911, ІСЬКО ОЛЬГА СЕРГІЇВНА.";
    document.getElementById("text12").innerHTML = "2) В долларах: BENEFICIARY: ISKO OLHA, 03058, Ukraine, c. Kyiv, st. Borshchahivska IBAN: UA173052990005168745013013161 ACCOUNT: 5168745013013161 BANK OF BENEFICIARY Beneficiary bank: PRIVATBANK, 1D HRUSHEVSKOGO STR., KYIV, 01001, UKRAINESWIFT CODE: PBANUA2X    INTERMEDIARY BANK Correspondent bank: JP MORGAN CHASE BANK, SWIFT CODE: CHASUS33 CORRESPONDENT ACCOUNT Beneficiary bank’s account with Correspondent Bank: 0011000080";
    document.getElementById("text13").innerHTML = "3) В евро: BENEFICIARY: ISKO OLHA, 03058, Ukraine, c. Kyiv, st. Borshchahivska IBAN: UA393052990005168745013013153 ACCOUNT: 5168745013013153 BANK OF BENEFICIARY Beneficiary bank: PRIVATBANK, 1D HRUSHEVSKOGO STR., KYIV, 01001, UKRAINE, SWIFT CODE: PBANUA2X INTERMEDIARY BANK Correspondent bank: Commerzbank AG Frankfurt am Main Germany, SWIFT CODE: COBADEFF CORRESPONDENT ACCOUNT, Beneficiary bank’s account with Correspondent bank: acc № 400 8867004 01";
    document.getElementById("text14").innerHTML = "Документы";
    document.getElementById("text15").innerHTML = "Выписка из больницы 1";
    document.getElementById("text16").innerHTML = "Выписка из больницы 2";
    document.getElementById("text17").innerHTML = "КТ головного мозга";
    document.getElementById("text18").innerHTML = "КТ органов брюшной полости 1";
    document.getElementById("text19").innerHTML = "КТ органов брюшной полости 2";
    document.getElementById("text20").innerHTML = "Направление на гистологию";
    document.getElementById("text21").innerHTML = "Реквизиты карты для грн";
    document.getElementById("text22").innerHTML = "Контакты Ольги, дочери Ирины Васильевны:";
}

function setLengEN(){
    console.log("EN");
}