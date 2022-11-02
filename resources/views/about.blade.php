@extends('layouts.main')

@section('container')

        <section class="jumbotron text-center post">
            <img src="{{ $picture }}" alt="{{ $name }}" width="200" class="rounded-circle">
            <h1 class="display-4 fs-1">{{ $name }}</h1>
            <p class="lead">{{ $nim }}</p>
            <p class="lead">{{ $email }}</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0D0A0B" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

          </section>
      
          <section id="about" class="post">
            <div class="container">
              <div class="row text-center mb-3">
                <div class="col">
                  <h2>Curriculum Vitae</h2>
                </div>
              </div>
              <div class="row justify-content-center fs-5 justify">
                <img src="{{ $flat }}" alt="flat image" id="flat">
                <div class="col-md-5">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi saepe fugit magnam veniam aspernatur libero enim vero aut quam reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, et recusandae nobis nisi omnis labore officia distinctio quae, accusantium similique hic, quasi culpa architecto. Omnis adipisci enim doloremque expedita error reiciendis animi obcaecati commodi placeat? Aut, eum aliquam magnam necessitatibus nam facere, molestias quasi, eaque recusandae hic natus tempore repudiandae.</p>
                </div>
                <div class="col-md-5">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto nostrum non veritatis quia dignissimos laborum modi sunt laboriosam ad, illo voluptatibus atque omnis voluptates doloremque tenetur deserunt! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi saepe fugit magnam veniam aspernatur libero enim vero aut quam reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, et recusandae nobis nisi omnis labore officia distinctio quae, accusantium similique hic, quasi culpa architecto. Omnis adipisci enim doloremque expedita error reiciendis animi obcaecati commodi placeat? Aut, eum aliquam magnam necessitatibus nam facere, molestias quasi, eaque recusandae hic natus tempore repudiandae.</p>
                </div>
              </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fffcf2" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
          </section>

@endsection