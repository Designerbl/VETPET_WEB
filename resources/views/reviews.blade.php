@extends('layouts.app')

@section('title')Страница отзывов@endsection

@section('content')

  <!-- Навигационная панель -->
  <header class="r-navbar-gackground">

    <div class="container navbar d-flex align-items-center">

      <div class="back">
        <a href="/" class="nav-line">На главную</a>
      </div>

      <h1><a href="/" class="color-white"></a>VETPET</a></h1>

      <div class="phone_number d-flex ">
        <i class="bi bi-telephone-fill color-white"></i>
        <span class="color-white ps-2">+7 (383) 213-32-12</span>
      </div>

    </div>
  </header>

  <main>

    <div class="container">

      <h3 class="py-5">Отзывы наших клиентов</h3>

      @yield('sec')

      <!-- Feedback -->
      <section id="feedbackform" class="feedback my-5" id="feedback">
        
        <div class="color-white text-center mb-4">
          <p class="feedback-caption">Оставить отзыв</p>
          <p class="feedback-caption2">Нам важно ваше мнение</p>
        </div>
        
        <form action="{{ route('feedback-form') }}" id="" method="post">
          
          {{ csrf_field() }}

          @include('components.messages')

          <div class="row g-4" novalidate="">
            <div class="col-lg-6 col-md-12">
              <input class="feedback-input form-control" id="name" type="name" name="name" placeholder="Ваше имя"/>
            </div>
            <div class="col-lg-6 col-md-12">
              <input class="feedback-input form-control" id="pet_type" type="name" name="pet_type" placeholder="Вид животного"/>
            </div>
            <div class="col-12">
              <textarea class="feedback-input form-control" id="review_text" rows="3" name="review_text" placeholder="Отзыв"></textarea>
            </div>
            <div class="col-12 mt-5 d-flex justify-content-center">
              <button type="submit" class="feedback-button"><span class="feedback-button-inner">Отправить</span></button>
            </div>
          </div>
        </form>

      </section>

    </div>

    <!-- Подвал -->
    <footer class="r-footer-background d-flex py-5">
      <section class="container d-lg-flex justify-content-between align-items-center text-center">

        <h1>VETPET</h1>
        <p class="copyright py-2">© 2021, Все права защищены. Согласие на обработку персональных данных</p>          

        <!-- Кнопки соцсетей -->
        <div class="wrapper">
          <div class="icon facebook">
            <div class="tooltip">Facebook</div>
            <span><i class="fab fa-facebook-f"></i></span>
          </div>
          <div class="icon twitter">
            <div class="tooltip">Twitter</div>
            <span><i class="fab fa-twitter"></i></span>
          </div>
          <div class="icon instagram">
            <div class="tooltip">Instagram</div>
            <span><i class="fab fa-instagram"></i></span>
          </div>
        </div>

      </section>
    </footer>
  </main>
  