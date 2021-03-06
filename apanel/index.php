<?php
// Название  программы: Белая CMS
// Версия: v.1.7 Free
// URL: http://BlondeCMS.ru

require_once('header.php');
?>
<h1>Главная страница</h1>
<b>Сегодня: <input name="ddleto" id="slav-date" type="text"> л&#1123;то от СМЗХ</b> - <a target="_blank" href="../engine/kalendar.php">Календарь</a>
<script src="jscripts/leto.js"></script>
<script>KrugoLet();</script>
<br><br>
<div class="question"> Назначение страниц в Админке</div>
<div class="answer">

		<div id="i">
		<a href="page.php">Страницы</a> ( здесь Вы стразу увидите "Список созданных страниц"<br><br>
		<img src="images/glaz.png" title="Отображается в меню"> Иконка показывает что страница отображается в меню сайта<br>
		<img src="images/hide.png" title="Не отображается в меню"> Показывает, что страница отключена от меню сайта, но на неё можно поставить ссылку вручную на любой странице<br>
		<img src="images/lamp.png" title="Страница включена"> Показывает что страница включена на сайте (активна)<br>
		<img src="images/lamp_off.png" title="Страница выключена"> Иконка показывает, что страница Не активна (например: пока черновик)<br>
		<img src="images/up.png" title="Вверх"> и <img src="images/down.png" title="Вниз"> - изменяют порядок пунктов меню<br>
		<img src="images/edit.png" title="Редактировать"> Клик по этой иконке направит Вас на страницу Редактирования выбранной страницы<br>
		<img src="images/remove.png" title="Удалить страницу"> Полностью удаляет страницу с сервера, без возможности востановления<br><br>
		При создании новой страницы, Вы можете создать как простую страницу, так и подключить к ней "Магазин" - подключается магазин автоматичести, нужно только в дополнительное поле добавить переменную {SHOP} и заполнить поля (Артикул и цена товара)<br><br>
		В BlondeCMS используется редактор CKEditor со встраенным менеджером изображений, адаптированный с библиотекой Highslide. С помощью этих мощьных инструментов, Вы легко сможете сделать "<b>Галерею</b>" на любой странице сайта.
		</div>

		<div id="i">
		<a href="article.php">Статьи</a> ( На этой странице список созданных Вами статей. Статьи имеют краткое описание и саму статью - которая выводится на отдельной странице.
		</div>

		<div id="i">
		<a href="buy.php">Магазин</a> ( Здесь вы можете увидет заказаные у Вас товары и услуги
		</div>

		<div id="i">
		<a href="news.php">Новости</a> ( Страница для создания на сайте кратких новостей
		</div>

		<div id="i">
		<a href="site_blok.php">Блоки</a> ( В Блоках хранится информация, которая выводится абсолютно на всех страницах сайта<br>
		Блок для Скриптов и стилей - вставит содержимое в шаблон между тегами &lt;head&gt; и &lt;/head&gt;<br>
		Блок для Рекламы - можете что нибудь порекламировать :)<br>
		Блок для Контактной информации (без комментариев)<br>
		Блок Нижнее меню сайта - вставляйте туда ссылки на любые нужные Вам страницы<br>
		Блок Кнопки, статистика - выводит на сайт статистику посещения, так же можно вставить любые скрипты или использовать для вывода любой другой информации
		</div>

		<div id="i">
		<a href="feedback.php">Нам пишут</a> ( Тут можно прочитать сообщения оставленные посетителями вашего сайта. Так же сообщения дублируются на ваш эл.адрес - если в настройках заполнено поле E-mail администратора ).
		</div>

		<div id="i">
		<a href="templates.php">Шаблон</a> ( На этой странице можно отредактировать шаблон, который включен по умолчанию на странице настроек
		</div>

		<div id="i">
		<a href="settings.php">Настройки</a> ( Здесь нужно заполнить URL домена -для правильной генерации ссылок и защиты сайта. Также на этой странице можно выбрать "Используемый шаблон" который будет по умолчанию для всех страниц сайта. Включите защиту Админ Панели по IP адресу и заполните поле с IP адресом, замените (127.0.) на свой адрес. Также впишите свой E-mail администратора на который будут приходить сообщения отставленные вашими посетителями. Если это поле не заполнено, то сообщения будут сохраняться только в админ панели.
		</div>
</div>


<div class="question"> Прикручиваем собственный шаблон</div>
<div class="answer">
		<div id="i">Покажу пример на простом HTML шаблоне<br><br>
		У нас есть папка, например называется шаблон4682 внутри которой файл index.html , style.css , папка с картинками images.
		Картинки могут лежать и не в отдельной папке, да и стилей может быть больше, это не важно.
		<ol>
			<li>Нам нужно папку переименовать латинскими символами, например будет krasota1
			<li>Файл index.html нужно переименовать в skin.html
			<li>Открыть в текстовом редакторе skin.html и прописать в HEAD пути для стилей и до самого шаблона, а так же переменные,<br>
			&nbsp; &nbsp; которые будут выводить блоки и текст сайта.<br>
			Пути до шаблона: http://{SITE}/templates/{SKIN}/skin.html и стилей: http://{SITE}/templates/{SKIN}/style.css<br>
			Если в шаблоне больше файлов со стилями, то пути прописываем для всех, а так же для скриптов если они есть.<br>
			<li>По FTP залить свой шаблон krasota1 на хостинг, в папку с шаблонами templates<br>
			<li>Зайти в Панель администратора на страницу настройки и выбрать свой шаблон из выпадающего списка.<br>
		</ol>
		</div>
</div>


<div class="question"> Используемые переменные в шаблоне</div>
<div class="answer">
		<div id="i">
		{ROBOT} - Если страница не существует, то выведет инструкцию поисковому роботу, что данную страницу индексировать не следует <br>{HEAD} - располагается между тегами &lt;head&gt; и &lt;/head&gt;<br>{TITLE} - выводит название страницы<br>{H1} - выводит заголовок страницы<br>{TOPMENU} - верхнее меню (ссылки добавляюся вручную)<br>{MENU} - основное меню (заполняется автоматически)<br>{BOTMENU} - нижнее меню (ссылки добавляюся вручную)<br>{PATH} - выводит "Хлебные крошки"<br>{CONTENT} - Содержание страницы<br>{SUBCONTENT} - Дополниельное содержание страницы<br>{REKLAMA} - выводит блок рекламы (на всех страницах)<br>{CONTACT} - выводит блок ваших контактов (на всех страницах)<br>{ARTICLES} - Блок последних статей на сайте (на всех страницах)<br>{COPY} - Копирайтер, автор сайта (на всех страницах)<br>{STAT} - Вывод статистики (кнопки)<br>{SITE} - Подставляет адрес сайта "site.ru" - без http:// и закрывающего слеша /<br>{SKIN} - Подставляет название используемого шаблона<br>{LETO} - выводит дату документа (страницы)
		</div>
</div>


<div class="question"> Права на запись для папок и файлов</div>
<div class="answer">
		<div id="i">
		На разных хостингах права могут отличаться, более подробно о используемых правах можно узнать у вашего хостера<br><br>
		Установите права 777 либо достаточные для записи на папки: <br>
		<div style="margin:0 0 0 15px">
		admin - название админки может отличаться, также советуем переименовать папку, например в admin_nik_sdfg<br>
		images<br>
		file<br>
		engine/content<br>
		engine/article<br>
		engine/article_big
		</div><br>

		Установите права 666 либо достаточные для записи на файлы: <br>

		<div style="margin:0 0 0 15px">
		settings.dat<br>
		engine/menu.csv<br>
		engine/messages.csv<br>
		engine/article.csv<br>
		engine/buy.csv<br>
		engine/site_blok.dat<br>
		engine/news.dat<br>
		engine/buy_text.dat<br>
		engine/content/*.dat (все .dat файлы)<br>
		engine/article/*.dat (все .dat файлы)<br>
		engine/article_big/*.dat (все .dat файлы)<br>
		templates/ваш_шаблон/skin.html<br>
		templates/ваш_шаблон/style.css<br>
		templates/ваш_шаблон/menu.css<br>
		</div>
		</div>
</div>


<div class="question"> Дополнительная информация, Часто задаваемые вопросы</div>
<div class="answer">
		<div id="i">Раздел наполняется<br>
		Админ панель, в целях безопасности, нельзя назвать admin и всё что связанно с этим корнем<br>
		Логин и пароль к админке меняется в админке, файл: user_pass.php (в поле pass можно использовать символы: -/*`~@#$%^&=+-_ )
		</div>
</div>


<?php
require_once('footer.php');	
?>