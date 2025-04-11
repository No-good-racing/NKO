<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>

    <header>

        <div class="left-hed">

        </div>

        <div class="main-hed">
            <a href="#"><img src="./img/logo.png"></a>
        </div>

        <div class="right-head">
            
            <a href="#" id="openMenuBtn"><img src="./img/Menu-4.png"></a>

        </div>
        
        
        
    <div id="menu" class="menu">
    <button id="closeMenuBtn" class="close-btn">×</button>
    
    <div class="img-logo"><img src="./img/logogss.png"></div>
    
    <ul>
      <li><a href="#">О курсе</a></li>
      <li><a href="#">Для кого курс</a></li>
      <li><a href="#">Бонусы курса</a></li>
      <li><a href="#">Приемущества</a></li>
      
      <li><a href="#">Обо мне</a></li>
      <li><a href="#">Работы учениц</a></li>
      <li><a href="#">Программа обучения</a></li>
      <li><a href="#">Тарифы</a></li>
      <li><a href="#">Отзывы</a></li>
      
      
    </ul>
    
    
  </div>
  
  
  <script>
      const openMenuBtn = document.getElementById('openMenuBtn');
const closeMenuBtn = document.getElementById('closeMenuBtn');
const menu = document.getElementById('menu');

openMenuBtn.addEventListener('click', () => {
  menu.style.display = 'flex';
});

closeMenuBtn.addEventListener('click', () => {
  menu.style.display = 'none';
});


  </script>

    </header>

    <section class="main-block">

        <img src="./img/first.png">

        <a href="#">Купить курс</a>

    </section>


    <section class="first-block">

        <div class="double-block">

            <div class="big-photo">

                <img src="./img/big.png">

            </div>

            <div class="double-block-img">

                <img src="./img/l1.png">

                <img src="./img/l2.png">
            </div>

        </div>

        <div class="down-block">

            <img src="./img/s1.png">
            <img src="./img/s2.png">
        </div>

    </section>

    <section class="second-block">

        <div class="os-1-w"> 
            <p class="title-n">Кому подойдет обучение</p>
        
            <div class="block-advantage">

                <p class="adv-title">Новичкам</p>
                
                <p class="adv-deckr">Если ты никогда ничем подобным не занималась, но хочешь начать, то это обучение для тебя. Я последовательно объясню по принципу «от простого к сложному»</p>

            </div>

            <div class="block-advantage">

                <p class="adv-title">Тем, кто ищет себя</p>
                
                <p class="adv-deckr">Если ты сейчас в поисках сферы, которой хочешь посвятить себя или ищешь чему бы обучиться, чтобы заработать первые деньги, то это обучение точно для тебя</p>

            </div>


            <div class="block-advantage">

                <p class="adv-title">Готовым мастерам</p>
                
                <p class="adv-deckr">Если ты умеешь делать это, но тебя это не зажигает, как раньше. Мы обновим твои знания и уверенность в себе. Это поднимет тебя как специалиста и увеличим поток клиентов</p>

            </div>


            <div class="block-advantage">

                <p class="adv-title">Застрявшим на низких чеках</p>
                
                <p class="adv-deckr">Есть 2 причины низких чеков: неумение продавать и низкое качество самой услуги. Над обеими причинами мы будем работать на курсе</p>

            </div>


        </div>


    
    </section>
    

    <section class="third-block">

        <div class="hair-block">

            <img src="./img/hair.png">

        </div>


    </section>


    <section class="prichina-block">

        <div class="prich-block"> 
            <p class="pr-small">Причины, по которым</p>

            <img src="./img/text.png" class="t1">

            <img src="./img/p1.png">
            <img src="./img/p2.png">
            <img src="./img/p3.png">
        </div>    



    </section>

    
    <section class="mega-title">

        <img src="./img/text1.png" class="t2">
    </section>

    <section class="gg-sec">
        <img src="./img/gg.png">
    </section>


    <section class="work-sec">
        <div class="title-arr"> 
            <div class="left-arr"> 
        <img src="./img/text2.png" class="t3">
        <img src="./img/zero.png" class="fly-p">
    </div>

    <div class="right-arr"> 
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>
    </div>

        <p class="work-d">Уже на обучении ты сможешь попрактиковаться на моделях и начать собирать своё портфолио</p>

        <div class="slider">
          
            <div class="slider-wrapper">
                <div class="slides">
                    <img src="./img/gl/s1.png" alt="Работа ученицы 1">
                    <img src="./img/gl/s2.png" alt="Работа ученицы 2">
                    <img src="./img/gl/s3.png" alt="Работа ученицы 3">
                    <img src="./img/gl/s4.png" alt="Работа ученицы 4">
                </div>
            </div>
            
        </div>
 

    </section>
    
    
    
        <script>
        
      const slides = document.querySelector(".slides");
const images = document.querySelectorAll(".slides img");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");

let index = 0;
let autoSlideInterval;

// Функция показа слайда
function showSlide(n) {
    if (n >= images.length) {
        index = 0;
    } else if (n < 0) {
        index = images.length - 1;
    } else {
        index = n;
    }
    slides.style.transform = `translateX(-${index * 100}%)`;
}

// Функция автоматического переключения слайдов
function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        showSlide(index + 1);
    }, 3000); // Автосмена каждые 3 секунды
}

// Функция сброса таймера при ручном переключении
function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}

// Обработчики кнопок
prevBtn.addEventListener("click", () => {
    showSlide(index - 1);
    resetAutoSlide();
});

nextBtn.addEventListener("click", () => {
    showSlide(index + 1);
    resetAutoSlide();
});

// Запуск авто-слайдера при загрузке страницы
startAutoSlide();




        </script>

    <section class="format-sec">

        <img src="./img/format.png">

    </section>


     <section class="project-slider-sec">
    <div class="project-slider-title-arr"> 
        <div class="project-slider-left-arr"> 
            <img src="./img/text4.png" class="project-slider-t92">
        </div>
    </div>

    <div class="project-slider">
        <div class="project-slider-wrapper">
            <div class="project-slides">
                <img src="./img/pr/pr1.png" alt="Проект 1">
                <img src="./img/pr/pr2.png" alt="Проект 2">
                <img src="./img/pr/pr3.png" alt="Проект 3">
                <img src="./img/pr/pr4.png" alt="Проект 4">
                <img src="./img/pr/pr5.png" alt="Проект 5">
                <img src="./img/pr/pr6.png" alt="Проект 6">
                <img src="./img/pr/pr7.png" alt="Проект 7">
                <img src="./img/pr/pr8.png" alt="Проект 8">
                <img src="./img/pr/pr9.png" alt="Проект 9">
            </div>
        </div>
        
        <!-- Контейнер для точек -->
        <div class="project-slider-dots"></div>
    </div>
</section>

<script>
const projectSlides = document.querySelector(".project-slides");
const projectImages = document.querySelectorAll(".project-slides img");
const projectDotsContainer = document.querySelector(".project-slider-dots");

let projectIndex = 0;
let projectAutoSlideInterval;
let touchStartX = 0;
let touchEndX = 0;

// Создание точек
function createDots() {
    for (let i = 0; i < projectImages.length; i++) {
        const dot = document.createElement("span");
        dot.classList.add("project-slider-dot");
        dot.setAttribute("data-index", i);
        dot.addEventListener("click", () => {
            projectShowSlide(i);
            projectResetAutoSlide();
        });
        projectDotsContainer.appendChild(dot);
    }
    updateActiveDot();
}

// Обновление активной точки
function updateActiveDot() {
    document.querySelectorAll(".project-slider-dot").forEach(dot => {
        dot.classList.remove("active");
    });
    document.querySelector(`.project-slider-dot[data-index="${projectIndex}"]`).classList.add("active");
}

// Функция показа слайда
function projectShowSlide(n) {
    if (n >= projectImages.length) {
        projectIndex = 0;
    } else if (n < 0) {
        projectIndex = projectImages.length - 1;
    } else {
        projectIndex = n;
    }
    projectSlides.style.transform = `translateX(-${projectIndex * 100}%)`;
    updateActiveDot();
}

// Функция автоматического переключения слайдов
function projectStartAutoSlide() {
    projectAutoSlideInterval = setInterval(() => {
        projectShowSlide(projectIndex + 1);
    }, 5000);
}

// Функция сброса таймера при ручном переключении
function projectResetAutoSlide() {
    clearInterval(projectAutoSlideInterval);
    projectStartAutoSlide();
}

// Функция для обработки свайпов
function handleTouchStart(event) {
    touchStartX = event.touches[0].clientX;
}

function handleTouchMove(event) {
    touchEndX = event.touches[0].clientX;
}

function handleTouchEnd() {
    if (touchStartX - touchEndX > 50) {
        // Свайп влево
        projectShowSlide(projectIndex + 1);
    } else if (touchEndX - touchStartX > 50) {
        // Свайп вправо
        projectShowSlide(projectIndex - 1);
    }
}

// Инициализация точек и автослайдера
createDots();
projectStartAutoSlide();

// Добавление событий для свайпов
projectSlides.addEventListener("touchstart", handleTouchStart);
projectSlides.addEventListener("touchmove", handleTouchMove);
projectSlides.addEventListener("touchend", handleTouchEnd);

</script>




    <section class="tarife">

        <img src="./img/text3.png" class="t5">

        <div class="tar-block">

            <img src="./img/text5.png" class="t6">

            <div class="point-tarife">
                <p>Вся программа курса</p>
                <p>Все дополнительные материалы курса</p>
                <p>База поставщиков</p>
                <p>Доступ к материалам навсегда</p>
                <p class="deny">Методическое пособие по реконструкции</p>
                <p class="deny">Обратная связь во время обучения</p>
                <p class="deny">Разбор домашней работы</p>
                <p class="deny">Отработка на болванке и модели</p>
                <p class="deny">Отработка по всем техникам формирования капсул </p>
                <p class="deny">Отработка снятия волос</p>
                <p class="deny">Отработка по перекапсуляции и капсуляции среза</p>
                <p class="deny">Консультация по официальной регистрации деятельности в Германии </p>
                <p class="deny">Именной сертификат по каждому пройденному курсу (EU)</p>
                <p class="deny">Поддержка после обучения</p>
            </div>

            <p class="price-tar">€300</p>

            <div class="double-button">

                <a href="#">Купить</a>
                
                <a gref="#">Купить в рассрочку</a>

            </div>

        </div>




        <div class="tar-block">

            <img src="./img/text6.png" class="t7">

            <div class="point-tarife">
                <p>Вся программа курса</p>
                <p>Все дополнительные материалы курса</p>
                <p>База поставщиков</p>
                <p>Доступ к материалам навсегда</p>
                <p>Методическое пособие по реконструкции</p>
                <p>Обратная связь во время обучения</p>
                <p class="deny">Разбор домашней работы</p>
                <p class="deny">Отработка на болванке и модели</p>
                <p class="deny">Отработка по всем техникам формирования капсул </p>
                <p class="deny">Отработка снятия волос</p>
                <p class="deny">Отработка по перекапсуляции и капсуляции среза</p>
                <p class="deny">Консультация по официальной регистрации деятельности в Германии </p>
                <p class="deny">Именной сертификат по каждому пройденному курсу (EU)</p>
                <p class="deny">Поддержка после обучения</p>
            </div>

            <p class="price-tar">€500</p>

            <div class="double-button">

                <a href="#">Купить</a>
                
                <a gref="#">Купить в рассрочку</a>

            </div>

        </div>






        <div class="tar-block">

            <img src="./img/text7.png" class="t8">

            <div class="point-tarife">
                <p>Вся программа курса</p>
                <p>Все дополнительные материалы курса</p>
                <p>База поставщиков</p>
                <p>Доступ к материалам навсегда</p>
                <p>Методическое пособие по реконструкции</p>
                <p>Обратная связь во время обучения</p>
                <p>Разбор домашней работы</p>
                <p>Отработка на болванке и модели</p>
                <p>Отработка по всем техникам формирования капсул </p>
                <p>Отработка снятия волос</p>
                <p>Отработка по перекапсуляции и капсуляции среза</p>
                <p>Консультация по официальной регистрации деятельности в Германии </p>
                <p>Именной сертификат по каждому пройденному курсу (EU)</p>
                <p>Поддержка после обучения</p>
            </div>

            <p class="price-tar">€2000</p>

            <div class="double-button">

                <a href="#">Купить</a>
                
                <a gref="#">Купить в рассрочку</a>

            </div>

        </div>




    </section>


    
 <section class="work-slider-sec">
    <div class="work-slider-title-arr"> 
        <div class="work-slider-left-arr"> 
            <img src="./img/text8.png" class="work-slider-t9">
        </div>

        <div class="work-slider-right-arr"> 
            <button class="work-slider-prev">&#10094;</button>
            <button class="work-slider-next">&#10095;</button>
        </div>
    </div>

    <div class="work-slider">
        <div class="work-slider-wrapper">
            <div class="work-slides">
                <img src="./img/tz/tz1.png" alt="Изображение 1">
                <img src="./img/tz/tz2.png" alt="Изображение 2">
                <img src="./img/tz/tz3.png" alt="Изображение 3">
                <img src="./img/tz/tz4.png" alt="Изображение 4">
            </div>
        </div>
    </div>
</section>

<script>
    const workSlides = document.querySelector(".work-slides");
    const workImages = document.querySelectorAll(".work-slides img");
    const workPrevBtn = document.querySelector(".work-slider-prev");
    const workNextBtn = document.querySelector(".work-slider-next");

    let workIndex = 0;
    let workAutoSlideInterval;

    // Функция показа слайда
    function workShowSlide(n) {
        if (n >= workImages.length) {
            workIndex = 0;
        } else if (n < 0) {
            workIndex = workImages.length - 1;
        } else {
            workIndex = n;
        }
        workSlides.style.transform = `translateX(-${workIndex * 100}%)`;
    }

   
 
    // Обработчики кнопок
    workPrevBtn.addEventListener("click", () => {
        workShowSlide(workIndex - 1);
        workResetAutoSlide();
    });

    workNextBtn.addEventListener("click", () => {
        workShowSlide(workIndex + 1);
        workResetAutoSlide();
    });

    // Запуск авто-слайдера при загрузке страницы
    workStartAutoSlide();
</script>




<section class="gallery-slider-sec  rr11">
    
    <div class="gallery-slider">
        <div class="gallery-slider-wrapper">
            <div class="gallery-slides">
                <img src="./img/pr/z1.png" alt="Галерея 1">
                <img src="./img/pr/z2.png" alt="Галерея 2">
                <img src="./img/pr/z3.png" alt="Галерея 3"> 
            </div>
        </div>
        
        <!-- Контейнер для точек -->
        <div class="gallery-slider-dots"></div>
    </div>
</section>

<script>
    const gallerySlides = document.querySelector(".gallery-slides");
    const galleryImages = document.querySelectorAll(".gallery-slides img");
    const galleryDotsContainer = document.querySelector(".gallery-slider-dots");

    let galleryIndex = 0;
    let galleryAutoSlideInterval;

    // Создание точек
    function createGalleryDots() {
        for (let i = 0; i < galleryImages.length; i++) {
            const dot = document.createElement("span");
            dot.classList.add("gallery-slider-dot");
            dot.setAttribute("data-index", i);
            dot.addEventListener("click", () => {
                galleryShowSlide(i);
                galleryResetAutoSlide();
            });
            galleryDotsContainer.appendChild(dot);
        }
        updateGalleryActiveDot();
    }

    // Обновление активной точки
    function updateGalleryActiveDot() {
        document.querySelectorAll(".gallery-slider-dot").forEach(dot => {
            dot.classList.remove("active");
        });
        document.querySelector(`.gallery-slider-dot[data-index="${galleryIndex}"]`).classList.add("active");
    }

    // Функция показа слайда
    function galleryShowSlide(n) {
        if (n >= galleryImages.length) {
            galleryIndex = 0;
        } else if (n < 0) {
            galleryIndex = galleryImages.length - 1;
        } else {
            galleryIndex = n;
        }
        gallerySlides.style.transform = `translateX(-${galleryIndex * 100}%)`;
        updateGalleryActiveDot();
    }

    // Функция автоматического переключения слайдов
    function galleryStartAutoSlide() {
        galleryAutoSlideInterval = setInterval(() => {
            galleryShowSlide(galleryIndex + 1);
        }, 3000);
    }

    // Функция сброса таймера при ручном переключении
    function galleryResetAutoSlide() {
        clearInterval(galleryAutoSlideInterval);
        galleryStartAutoSlide();
    }

    // Инициализация точек и автослайдера
    createGalleryDots();
    galleryStartAutoSlide();
</script>



    <section class="section-forma">

         
        <img src="./img/text9.png" class="t10">

            <div class="forma">

                <img src="./img/text10.png" class="t11">

                <form class="form">
                    <input type="text" placeholder="Имя" class="input">
                    <input type="tel" placeholder="Номер телефона" class="input">
                    <button type="submit" class="button">Отправить</button>
                </form>
                
 <label class="checkbox-container">
    <input type="checkbox" id="agreement">
    <span class="checkmark"></span>
    <p> Нажимая кнопку, Вы принимаете Положение  и согласие на обработку персональных данных</p>
</label>

            </div>
        
    </section>

    <footer class="footer-bl">

        <div class="mainfooter"> 
        <div class="logo-social">

            <div class="logo-left">

                <img src="./img/logo-b.png">

            </div>

            <div class="social-right">

                <a href="#"><img src="./img/so1.png"></a>
                <a href="#"><img src="./img/so2.png"></a>
                <a href="#"><img src="./img/so3.png"></a>

            </div>


        </div>

        <div class="bottom-footer">

            <div class="menu2">
                <a href="#">Impressum</a>
                <a href="#">AGB</a>
                <a href="#">Datenschutz</a>

            </div>

            <div class="pay-block">

                <img src="./img/pay.png">
                <img src="./img/pay1.png">
            </div>

        </div>


    </div>
    </footer>
    
</body>
</html>