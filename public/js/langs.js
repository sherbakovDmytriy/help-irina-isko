var langs = document.getElementById("exampleFormControlSelect1");

langs.addEventListener('change', function() {
    if(langs.value == 'Українська' ) setLengUA();
    else if(langs.value == 'Русский' ) setLengRU();
    else if(langs.value == 'English' ) setLengEN();
    else if(langs.value == 'Español' ) setLengES();
});

function setLengUA(){
    document.getElementById("top1").innerHTML = "Головна";
    document.getElementById("top2").innerHTML = "Реквізити";
    document.getElementById("top3").innerHTML = "Контакти";
    document.getElementById("top4").innerHTML = "Блог";

    document.getElementById("text1").innerHTML = "Вітаю Вас!";
    document.getElementById("text2").innerHTML = "Мене звати Ірина і я хворію на рак молочної залози.";
    document.getElementById("text3").innerHTML = "Діагноз було встановлено випадково – в кінці червня цього року я була госпіталізована в лікарню у зв’язку з механічною жовтяницею і перенесла операцію зі стенування жовчного протоку печінки. Перед випискою з лікарні лікарі вирішили впевнитись, що все в порядку і зробили КТ, на якому було виявлено ракову пухлину. Після була проведена операція з її видалення, але для одужання необхідно пройти кілька курсів хіміотерапії. Вартість препаратів значно перевищує скромний бюджет нашої родини, заробітної плати чоловіка і доньки недостатньо для того, щоб закупити дорогі препарати. Я звертаюсь до всіх небайдужих і прошу Вашої допомоги, тому що будь-яка сума може дати мені шанс на одужання і повноцінне життя, яке настільки прекрасне і дивовижне!";
    document.getElementById("text4").innerHTML = "З повагою, Ірина Ісько.";
    document.getElementById("text5").innerHTML = "Реквізити";
    document.getElementById("text6").innerHTML = "Реквізити картки для грн";
    // document.getElementById("text7").innerHTML = "";
    document.getElementById("text8").innerHTML = "У гривні";
    document.getElementById("text9").innerHTML = "У долларах";
    document.getElementById("text10").innerHTML = "В євро";
    document.getElementById("text11").innerHTML = "Контакти";
    document.getElementById("text12").innerHTML = "Документи";
    document.getElementById("text13").innerHTML = "Виписка з лікарні 1";
    document.getElementById("text14").innerHTML = "Виписка з лікарні 2";
    document.getElementById("text15").innerHTML = "КТ головного мозку";
    document.getElementById("text16").innerHTML = "КТ органів черевної порожнини 1";
    document.getElementById("text17").innerHTML = "КТ органів черевної порожнини 2";
    document.getElementById("text18").innerHTML = "Направлення на гістологію";
    document.getElementById("text19").innerHTML = "Контакти Ольги, доньки Ірини Василівни";
}

function setLengRU(){
    document.getElementById("top1").innerHTML = "Главная";
    document.getElementById("top2").innerHTML = "Реквизиты";
    document.getElementById("top3").innerHTML = "Контакты";
    document.getElementById("top4").innerHTML = "Блог";

    document.getElementById("text1").innerHTML = "Добрый день!";
    document.getElementById("text2").innerHTML = "Меня зовут Ирина и я больна раком молочной железы.";
    document.getElementById("text3").innerHTML = "Диагноз был поставлен абсолютно случайно – в конце июня этого года я была госпитализирована в клинику в связи с механической желтухой и перенесла операцию по стентированию желчного протока печени. Перед выпиской из больницы врачи решили удостовериться, что все в порядке и сделать КТ, на котором и обнаружили раковую опухоль. После была проведена операция по ее удалению, но для полного выздоровления необходимо пройти несколько курсов химиотерапии. Стоимость препаратов значительно превышает скромный бюджет нашей семьи, заработков мужа и дочери недостаточно для того, чтобы закупить дорогостоящие препараты. Я обращаюсь ко всем неравнодушным и прошу Вашей помощи, потому что любая сумма может дать мне шанс на выздоровление и полноценную жизнь, которая столь прекрасна и удивительна!";
    document.getElementById("text4").innerHTML = "С уважением, Ирина Исько.";
    document.getElementById("text5").innerHTML = "Реквизиты";
    document.getElementById("text6").innerHTML = "Реквизиты карты для грн";
    // document.getElementById("text7").innerHTML = "";
    document.getElementById("text8").innerHTML = "В гривне";
    document.getElementById("text9").innerHTML = "В долларах";
    document.getElementById("text10").innerHTML = "В євро";
    document.getElementById("text11").innerHTML = "Контакты";
    document.getElementById("text12").innerHTML = "Документы";
    document.getElementById("text13").innerHTML = "Выписка из больницы 1";
    document.getElementById("text14").innerHTML = "Выписка из больницы 2";
    document.getElementById("text15").innerHTML = "КТ головного мозга";
    document.getElementById("text16").innerHTML = "КТ органов брюшной полости 1";
    document.getElementById("text17").innerHTML = "КТ органов брюшной полости 2";
    document.getElementById("text18").innerHTML = "Направление на гистологию";
    document.getElementById("text19").innerHTML = "Контакты Ольги, дочери Ирины Васильевны:";
}

function setLengEN(){
    document.getElementById("top1").innerHTML = "Main";
    document.getElementById("top2").innerHTML = "Requisites";
    document.getElementById("top3").innerHTML = "Contacts";
    document.getElementById("top4").innerHTML = "Blog";

    document.getElementById("text1").innerHTML = "Good afternoon!";
    document.getElementById("text2").innerHTML = "Hello, my name is Irina and I am sick with breast cancer.";
    document.getElementById("text3").innerHTML = "The diagnosis was made absolutely by accident - at the end of June this year I was hospitalized in the clinic due to mechanical jaundice and underwent an operation for stenting the bile duct of the liver. Before discharge from the hospital, the doctors decided to make sure everything was in order and to do a CT scan, on which a cancer tumor was found. After the operation was performed to remove it, but for a full recovery it is necessary to undergo several courses of chemotherapy. The cost of drugs significantly exceeds the modest budget of our family, the earnings of a husband and daughter are not enough to purchase expensive drugs. I appeal to everyone who is not indifferent and ask for your help, because any amount can give me a chance to recover and a full life, which is so beautiful and amazing!";
    document.getElementById("text4").innerHTML = "Sincerely, Irina Isko.";
    document.getElementById("text5").innerHTML = "Requisites";
    document.getElementById("text6").innerHTML = "Requisites of the card for UAH";
    // document.getElementById("text7").innerHTML = "";
    document.getElementById("text8").innerHTML = "In UAH";
    document.getElementById("text9").innerHTML = "In dollars";
    document.getElementById("text10").innerHTML = "In Euro";
    document.getElementById("text11").innerHTML = "Contacts";
    document.getElementById("text12").innerHTML = "Documentation";
    document.getElementById("text13").innerHTML = "Extract from hospital 1";
    document.getElementById("text14").innerHTML = "Extract from hospital 2";
    document.getElementById("text15").innerHTML = "CT of the brain";
    document.getElementById("text16").innerHTML = "CT of abdominal cavity organs 1";
    document.getElementById("text17").innerHTML = "CT of abdominal cavity organs 2";
    document.getElementById("text18").innerHTML = "Direction of histology";
    document.getElementById("text19").innerHTML = "Contacts Olga, daughter of Irina Vasilyevna:";
}


function setLengES(){
    document.getElementById("top1").innerHTML = "Principal";
    document.getElementById("top2").innerHTML = "Requisitos";
    document.getElementById("top3").innerHTML = "Contactos";
    document.getElementById("top4").innerHTML = "Blog";

    document.getElementById("text1").innerHTML = "Buenos días!";
    document.getElementById("text2").innerHTML = "Me llamo Iryna Isko y estoy enferma con el cáncer de mama.";
    document.getElementById("text3").innerHTML = "Yo descubrí mi diagnóstico por accidente: a fines de junio de este año he llegado al hospital a causa de la ictericia. Me he sometido a una cirugía para colocar un stent en el conducto beliar del hígado. Antes del alta del hospital los médicos decidieron asegurarse de que todo estaba bien y hacer una tomografía computarizada en la que se encontró un tumor canceroso. Después tuve la cirugía para extirpar el tumor. Pero para la recuperación completa tengo que empezar con la quimio. Los costos de medicamentos excede significativamente el presupuesto modesto de nuestra familia. Los ingresos de mis marido y hija no son suficientes para comprar los medicamentos caros. Yo apelo a los todos preocupados y pido ayuda de Usted. Cualquier donación puede darme la oportunidad de recuperar y tener la vida plena que es tan hermosa y sorprendente.";
    document.getElementById("text4").innerHTML = "Atentamente, Iryna Isko.";
    document.getElementById("text5").innerHTML = "Requisitos";
    document.getElementById("text6").innerHTML = "Requisitos de la tarjeta para UAH";
    // document.getElementById("text7").innerHTML = "";
    document.getElementById("text8").innerHTML = "En UAH";
    document.getElementById("text9").innerHTML = "En dolares";
    document.getElementById("text10").innerHTML = "En Euro";
    document.getElementById("text11").innerHTML = "Contactos";
    document.getElementById("text12").innerHTML = "Documentación";
    document.getElementById("text13").innerHTML = "Extracto del hospital 1";
    document.getElementById("text14").innerHTML = "Extracto del hospital 2";
    document.getElementById("text15").innerHTML = "CT del cerebro";
    document.getElementById("text16").innerHTML = "TC de los órganos de la cavidad abdominal 1";
    document.getElementById("text17").innerHTML = "TC de los órganos de la cavidad abdominal 2";
    document.getElementById("text18").innerHTML = "Dirección de histología";
    document.getElementById("text19").innerHTML = "Contactos Olga, hija de Irina Vasilyevna:";
}