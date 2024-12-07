<x-master title="d">

    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title">Trend Blogger</h2>
            <span class="home-subtitle">Your source of great content</span>
        </div>
      </section>
      
 
      

@foreach (array_slice($sports, 0, 2)  as $sport)
    

    <section class="about container" id="about">
        <div class="contentBx">
            <h2 class="titleText">{{$sport['title']}}</h2>
            <p class="title-text">
             {!! Str::limit($sport['description'],250,' ....etc')!!}
            </p>
            <a href="#" class="btn2">Read more</a>
        </div>
        <div class="imgBx">
            <img src=" {{$sport['image']}}" alt="" class="fitBg">
        </div>
    </section>
    @endforeach
    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter="all">All</span>
        <span class="filter-item" data-filter="sport">sport</span>
        <span class="filter-item" data-filter="food">Food</span>
        <span class="filter-item" data-filter="news">News</span>
    </div>
    
    <div class="post container">
        <!-- Post 1 -->
        @foreach ($sports  as $sport)
        <div class="post-box sport">
            <img src="{{$sport['image']}}" alt="" class="post-img">
            <h2 class="category">sport</h2>
            <a href="#" class="post-title">   {!! Str::limit($sport['title'],50,' ....etc')!!}</a>
            <span class="post-date">{{$sport['date']}}</span>
            <p class="post-description"> {!! Str::limit($sport['description'],50,' ....etc')!!}</p>
            <div class="profile">
                <img src="{{$sport['authoravatar']}}" alt="" class="profile-img">
                <span class="profile-name">{{$sport['author']}}</span>
            </div>
        </div>
        @endforeach
        <!-- Post 3 -->
        <div class="post-box food">
            <img src="images/img3.jpg" alt="" class="post-img">
            <h2 class="category">Food</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">a</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img">
                <span class="profile-name">MKHB</span>
            </div>
        </div>


        <!-- Post 6 -->
        <div class="post-box news">
            <img src="images/img4.jpg" alt="" class="post-img">
            <h2 class="category">News</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img">
                <span class="profile-name">a</span>
            </div>
        </div>
   
  
  
    </div>




</x-master>