@include('tmp/head')
@include('tmp/header')
<script src="https://kit.fontawesome.com/ca3f6ce531.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/loeaded.css') }}">

<script src="{{ asset('assets/js/scrollLock.js') }}"></script>
<script src="{{ asset('assets/js/anime.js') }}"></script>

<div id="home">
  <section id="photograph">
    <div class="home_outline">
      <div class="img">
        <a href="#">
          <img src="{{asset('assets/img/Photograph.png')}}" alt="フォトグラファー" class="pc">
          <img src="{{asset('assets/img/tPhotograph.png')}}" alt="フォトグラファー" class="tab">
        </a>
      </div>
      <div class="text">
        <h2 class="title">Photograph</h2>
        <p>市川 徹宏が見ている風景。</p>
      </div>
    </div><!-- home_outline -->
  </section><!-- #photograph -->

  <section id="art">
    <div class="home_outline ">
      <div class="img">
        <a href="#">
          <img src="{{asset('assets/img/Art.png')}}" alt="アート" class="pc">
          <img src="{{asset('assets/img/tArt.png')}}" alt="アート" class="tab">
        </a>
      </div>
      <div class="text">
        <h2 class="title">Art</h2>
        <p>市川 徹宏が創造するモノたち。</p>
      </div>
    </div><!-- home_outline -->
  </section><!-- #art -->

  <section id="schatten_u.">
    <div class="home_outline ">
      <div class="img">
        <a href="#">
          <img src="{{asset('assets/img/schatten.png')}}" alt="shatten u." class="pc">
          <img src="{{asset('assets/img/tschatten.png')}}" alt="ssatten u." class="tab">
        </a>
      </div>
      <div class="text">
        <h2 class="title">schatten u.</h2>
        <p>市川 徹宏の趣味から生まれた映像屋</p>
      </div>
    </div><!-- home_outline -->
  </section><!-- #schatten u. -->

  <section id="cafe">
    <div class="home_outline ">
      <div class="img">
        <a href="#">
          <img src="{{asset('assets/img/らいくあかふぇ.png')}}" alt="らいくあかふぇ" class="pc">
          <img src="{{asset('assets/img/tらいくあかふぇ.png')}}" alt="らいくあかふぇ" class="tab">
        </a>
      </div>
      <div class="text">
        <h2 class="title">らいくあかふぇ</h2>
        <p>市川 徹宏の珈琲好きが爆発したカフェ。</p>
      </div>
    </div><!-- home_outline -->
  </section><!-- #cafe -->

  <section id="profile">
    <div class="home_outline ">
      <div class="img">
        <a href="#">
          <img src="{{asset('assets/img/Profile.png')}}" alt="市川徹宏" class="pc">
          <img src="{{asset('assets/img/tProfile.png')}}" alt="市川徹宏"class="tab">
        </a>
      </div>
      <div class="text">
        <h2 class="title">Profile</h2>
        <p>市川 徹宏のこと</p>
      </div>
    </div><!-- home_outline -->
  </section><!-- #profile -->

  <section id="contact">
    <div class="home_outline ">
      <div class="img">
        <a href="contact">
          <img src="{{asset('assets/img/Contact.png')}}" alt="問い合わせ" class="pc">
          <img src="{{asset('assets/img/tContact.png')}}" alt="問い合わせ" class="tab">
        </a>
      </div>
      <div class="text">
        <h2 class="title">Contact</h2>
        <p>市川 徹宏が創造するモノたち。</p>
      </div>
    </div><!-- home_outline -->
  </section><!-- #contact -->
</div><!-- #home -->

<script src="{{ asset('assets/js/scroll.js') }}"></script>
@include('tmp/footer') 
@include('tmp/foot')
