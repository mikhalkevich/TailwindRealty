<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <a class="p-1 pt-2 text-sm leading-relaxed inline-block mr-4 py-2 whitespace-nowrap text-black-300" href="/"><img src="http://event.webtm.ru/img/logo_cleaning_small.png" class=""> </a>
        <div class="flex items-center lg:order-2">
            <div class="hidden mt-2 mr-4 sm:inline-block">
                <span></span>
            </div>
            <div class=" justify-center items-center">
                <div class="w-[50px] text-gray-900 dark:text-gray-100">
                    <div class="relative w-full group">
                        <button class=" px-3 w-full md:text-sm text-site bg-transparent  peer flex items-center justify-between rounded font-semibold">

                            <img id="imgNavDeu" src="http://event.webtm.ru/img/flag/ru_40.jpg" alt="..." class="img-thumbnail icon-small border">
                        </button>
                        <div class="absolute z-[99] top-[100%] left-[50%] translate-x-[-50%] rounded-md overflow-hidden shadow-lg min-w-[50px] w-max peer-focus:visible peer-focus:opacity-100 opacity-0 invisible duration-200 p-1 bg-gray-100 dark:bg-gray-800  border border-dimmed text-xs md:text-sm">

                            <div class="px-3 py-2 rounded-md">
                                <a href="/?lang=en">
                                    <img id="imgNavDeu" src="http://event.webtm.ru/img/flag/eng_40.jpg" alt="..." class="img-thumbnail icon-small">
                                </a>
                            </div>
                            <div class="px-3 py-2 rounded-md">
                                <a href="/?lang=ru">
                                    <img id="imgNavDeu" src="http://event.webtm.ru/img/flag/rus.jpg" alt="..." class="img-thumbnail icon-small">
                                </a>
                            </div>
                            <div class="px-3 py-2 rounded-md">
                                <a href="/?lang=pl">
                                    <img id="imgNavDeu" src="http://event.webtm.ru/img/flag/Pol_40.png" alt="..." class="img-thumbnail icon-small">
                                </a>
                            </div>
                            <div class="px-3 py-2 rounded-md">
                                <a href="/?lang=fr">
                                    <img id="imgNavDeu" src="http://event.webtm.ru/img/flag/fra_40.jpg" alt="..." class="img-thumbnail icon-small">
                                </a>
                            </div>
                            <div class="px-3 py-2 rounded-md">
                                <a href="/?lang=de">
                                    <img id="imgNavDeu" src="http://event.webtm.ru/img/flag/deu_40.jpg" alt="..." class="img-thumbnail icon-small">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul>
                                    <li>
                        <a href="/login" class="text-base focus:ring-4 font-medium rounded-lg px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 ">Вход</a>
                    </li>
                            </ul>
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="true">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col font-medium lg:flex-row">
                <li>
                                            <a href="/sponsor" class="block p-3 dark:text-white hover:shadow-2xl"> Спонсоры</a>
                    
                </li>
                <li>
                                            <a href="/event" class="block p-3 dark:text-white hover:shadow-2xl" aria-current="page">События</a>
                                    </li>

                <li>
                                            <span class="block bg-gray-100 p-3 dark:text-white"> Блог</span>
                                    </li>
                <li>
                                            <a href="/work" class="block p-3 dark:text-white hover:shadow-2xl">Работа</a>
                                    </li>
                <li>
                                            <a href="/service" class="block p-3 dark:text-white hover:shadow-2xl">Услуги</a>
                    
                </li>
                <li>
                                            <a href="/market" class="block p-3 dark:text-white hover:shadow-2xl">Магазин</a>
                                    </li>
                <li>
                    <div class="group relative cursor-pointer ">
                        <div class="flex items-center justify-between space-x-5 bg-white pl-3">
                            <a class="menu-hover my-2  text-base font-medium text-black pt-1">
                                Недвижимость
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 relative -left-2 pt-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </div>
                        <div class="invisible absolute z-50 flex w-full flex-col bg-gray-100 py-1 px-2 pb-2 text-gray-800 shadow-xl group-hover:visible">
                            <a href="/items" class="block p-3 dark:text-white hover:shadow-2xl">Продажа</a>
                            <a href="/items" class="block p-3 dark:text-white hover:shadow-2xl">Аренда</a>
                            <a href="/items" class="block p-3 dark:text-white hover:shadow-2xl">Разное</a>
                        </div>
                    </div>
                </li>
                <li>
                                            <a href="/feed" class="block p-3 dark:text-white hover:shadow-2xl"> <i title="Price" class="fa-solid fa-fire"></i></a>
                                    </li>
                <li>
                                            <a href="/glossary" class="block p-3 dark:text-white hover:shadow-2xl"><i title="Glossary" class="fa-solid fa-book"></i></a>
                                    </li>
            </ul>
        </div>
    </div>
</nav>
<div class="p-6">
<div role="tablist" class="tabs tabs-lifted">
  <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Аренда"  checked="checked" />
  <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
    <div class="text-3xl">Форма поиска арендной недвижимости</div>
	<div>
	 <form method="get" action="">
	   <div class="grid grid-cols-1 md:grid-cols-2">
<label class="input input-bordered flex items-center gap-2 w-full">
  <input type="text" class="grow" name="name" placeholder="Search" />
  <svg
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 16 16"
    fill="currentColor"
    class="h-4 w-4 opacity-70">
    <path
      fill-rule="evenodd"
      d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
      clip-rule="evenodd" />
  </svg>
</label>
<select class="select select-bordered w-full" name="status">
  <option disabled selected>Аренда</option>
  <option>Продажа</option>
  <option>Разное</option>
</select>
	   </div>
	   <div class="grid grid-cols-1 md:grid-cols-3">
	    <div>
<div class="form-control">
  <label class="label cursor-pointer">
    <span class="label-text">Новостройка</span>
    <input type="checkbox" class="toggle" name="newbilding" checked="checked" />
  </label>
</div>
		</div>
		<div class="p-6 ml-6 mr-6">
		<input type="range" min="0" max="100" value="40" class="range range-error" />
		</div>
		<div>
		<button type="submit" class="btn btn-active btn-secondary">Send</button>
		</div>
	   </div>
	 </form>
	</div>
  </div>

  <input
    type="radio"
    name="my_tabs_2"
    role="tab"
    class="tab"
    aria-label="Продажа"
    />
  <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
     <div class="text-3xl">Форма продажи недвижимости</div>
  </div>

  <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Разное" />
  <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
    Разное
  </div>
</div>
</div>
<div class="w-full mb-6">
<div class="grid grid-cols-1 md:grid-cols-2 ml-6 mr-6">
  <div class="border p-6">01</div>
  <div class="border bg-white p-6">
   <div class="text-center text-emerald-800">Название недвижимости</div>
   <div class="rating rating-lg">
  <input type="radio" name="rating-9" class="rating-hidden" />
  <input type="radio" name="rating-9" class="mask mask-star-2" />
  <input type="radio" name="rating-9" class="mask mask-star-2" checked="checked" />
  <input type="radio" name="rating-9" class="mask mask-star-2" />
  <input type="radio" name="rating-9" class="mask mask-star-2" />
  <input type="radio" name="rating-9" class="mask mask-star-2" />
</div>
<div class="block mt-6">
<div class="tooltip tooltip-left" data-tip="кол-во комнат">
  <button class="btn">3</button>
</div>
<div class="tooltip tooltip-left" data-tip="этаж">
  <button class="btn">1</button>
</div>
<div class="tooltip tooltip-left" data-tip="&euro;">
  <button class="btn">10000</button>
</div>
</div>
  </div>
</div>
</div>
</body>
</html>