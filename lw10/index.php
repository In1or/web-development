<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Don't do it</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>

	<div class="bkb hidden">
  </div>
	<?php include 'form.php';?>

  <div class="header">
  	<img class="header__logo" src="images/logo.svg" alt="Don't do it">
    <div class="header__nav-bar">
      <nav class="header__link">
        <a href="#aboutCourse" class="header__text text_what-will">Что будет на курсе?</a>
        <a href="#" class="header__text text_questions">Вопросы</a>
        <a href="#" class="header__text text_author">Автор</a>
      </nav>
  	<button class="header__button button-register">
      Записаться на курс
    </button>
    </div>
  </div>  
  <div class="main">
    <div class="top">
      <div class="top__info">
        <h1 class="top__title">Не <span class="text_color">делай</span> это</h1>
        <p class="top__text">
          Онлайн-курс для творческих людей, о том, как управлять своим временем 
        </p>
        <button class="top__button button-register">
          Записаться на курс
        </button>
      </div>
      <img class="top__image" src="images/done.png"  alt="image">
    </div>
    <div class="short-description">
      <div class="short-descritpion__content">
        <div class="short-description__time">
          <img class="short-description__image image-time" src="images/time.svg" alt="time">
          <p class="short-description__text text-time short-description_text">
            Для тех, у кого слишком много идей и слишком мало времени
          </p>
        </div>
        <div class="short-description__notebook">
          <img class="short-description__image image-notebook" src="images/notebook.svg" alt="notebook">
          <p class="short-description__text text-notebook short-description_text">
            Метод «списка не дел», который позволит успевать и реализовывать
          </p>
        </div>
        <div class="short-description__target ">
          <img class="short-description__image image-target" src="images/target.svg" alt="time">
          <p class="short-description__text text-target short-description_text">
            Курс научит творческих людей сосредоточиваться
          </p>
        </div>  
      </div>	  	
    </div>
    <div class="blog">
      <div class="blog__creation">
        <img class="blog__finances_image" src="images/finances.png" alt="image">
        <div class="finances_content">
          <p class="blog__title title-creation">Ты не успеешь</p>
          <p class="blog__text text-creation">
            Всех творческих людей объединяет одна проблема - отсутствие 
            времени на реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.
          </p>
        </div>
      </div>
      <div class="blog__deadline">
        <div class="deadline_content">
          <p class="blog__title title-deadline">Опять дедлайн</p>
          <p class="blog__text text-deadline">
            В мире, где столько всего интересного, когда же успевать жить?
          </p>
        </div>
        <img class="blog__blowing_image" src="images/mind_blowing.png" alt="image">
      </div>  	
    </div>
    <div class="about-course" id="aboutCourse">
      <p class="about-course__title">На курсе ты <span class="text_color">сможешь</span></p>
      <div class="about-course-tiles">
        <div class="about-course-box">
          <img class="about-course__images image_first" src="images/finger_one.svg" alt="finger one">
          <p class="about-course__text first-step-text">
            Понять, что нужно делать, а что делать не стоит.
          </p>
        </div>
        <div class="about-course-box">
          <img class="about-course__images image_second" src="images/finger_two.svg" alt="finger two">
          <p class="about-course__text second-step-text">
            Перестать себя искусственно ограничивать.
          </p>
        </div>  
        <div class="about-course-box">
          <img class="about-course__images image_third" src="images/finger_three.svg" alt="finger three">
          <p class="about-course__text third-step-text">
            Определить сильные стороны и начать использовать слабые.
          </p>
        </div> 
        <div class="about-course-box">
          <img class="about-course__images image_fourth" src="images/finger_four.svg" alt="finger four">
          <p class="about-course__text fourth-step-text">
            Научиться достигать любой цели в 3 понятных шага.
          </p>
        </div> 
        <div class="about-course-box">
          <img class="about-course__images image_fifth" src="images/finger_five.svg" alt="finger five">
          <p class="about-course__text fifth-step-text">
            Сотрудничать эффективно и с правильными людьми.
          </p>
        </div> 
        <div class="about-course-box">
          <img class="about-course__images image_sixth" src="images/finger_six.svg" alt="finger six">
          <p class="about-course__text sixth-step-text">
            Оптимизировать общение с клиентами и проведение совещаний.
          </p>
        </div>  
      </div>		
    </div>
  </div>
  <div class="footer">
  	<img class="footer__image" src="images/logo_footer.svg" alt="logo">
  </div>
  <script src="script/script.js"></script>
</body>
</html>