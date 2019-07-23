@extends('front.master')
@section('title')
    Home
@endsection

@section('content')
    <aside id="colorlib-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumbs text-center">
                    <h2>About Me</h2>
                    <p><span><a href="index.html">Home</a></span> / <span>About</span></p>
                </div>
            </div>
        </div>
    </aside>

    <div id="colorlib-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="{{asset('/front/')}}/images/author.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <p>Hi! My Name is <strong>Rich</strong> Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                    <blockquote>
                        A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                    </blockquote>
                    <p class="first-letra">Far far away, <strong><a href="#">behind the word mountains</a></strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>
                    <ul class="colorlib-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endsection