@extends('front.layouts.master')

@section('main.content')
<div class="menu-wrapper hidden">
    <div class="row">
        <div class="col-md-6" id="menu-content">
            <nav>
                <ul>
                    <li><a href=""><h1>home</h1></a></li>
                    <li><a href=""><h1>portfolios</h1></a></li>
                    <li><a href=""><h1>skills</h1></a></li>
                    <li><a href=""><h1>about</h1></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="menu">
    <input type="checkbox" id="click"/>

    <label for="click">
        <span class="arrow"></span>
    </label>
</div>

<div id="fullpage">
    <div class="section home-page active">
        <div class="picture" data-depth="0.1">
            <img src="{{ asset('assets/front/images/do-what-you-love2.jpg') }}" alt="">
        </div>
        <div class="content" id="scene" data-relative-input="true">
            <div class="welcome-text" data-depth="0.05">
                <div class="header title">
                    <p>WELCOME !</p>
                </div>
                <div class="description font-size-2-5">
                    <p>I AM A WEB DEVELOPER</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="portfolio-title">
            <h1 class="font-size-5 font-weight-bold text-center mt-5">
                PORTFOLIOS
            </h1>
        </div>
        @foreach($portfolios as $portfolio)
            <div class="slide">
                <div class="portfolio-description">
                    <div class="">
                        <h1 class="font-size-2-5 font-weight-bold">{{ $portfolio->name }}</h1>
                        <a href="{{ $portfolio->link }}" target="_blank">{{ $portfolio->link }}</a>
                        <p class="mt-5 text-justify">
                            {{ $portfolio->description }}
                        </p>
                        <div class="technologies">
                            <div class="tasks">
                                @foreach($portfolio->attributes as $attribute)
                                    <span class="font-size-5">
                                        <i class="{{ $attribute->icon }}" data-toggle="tooltip" data-placement="bottom" title="{{ $attribute->description }}" aria-hidden="true"></i>
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="section skills">
        <div class="portfolio-title">
            <h1 class="font-size-5 font-weight-bold text-center">
                MY SKILLS
            </h1>
        </div>
        <div class="skills">
            <div class="container">
                @if(count($skills) > 2)
                    <div class="row">
                        @foreach($skills[0] as $skill)
                            <div class="skill col-md-2">
                                <div class="skill-item">
                                    <div class="skill-logo">
                                        <img src="{{ asset($skill->file->name) }}" class="skill-tiny-logo" alt="">
                                    </div>
                                    <div class="skill-title">
                                        <h3>{{ $skill->name }}</h3>
                                        <div class="skill-level">
                                            <h1 class="font-size-4">{{ $skill->percent }}%</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="excerpt hidden">
                                    <h1>{{ $skill->name }}</h1>
                                    <h3>{{ $skill->tools }}</h3>
                                    <p>{{ $skill->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @foreach($skills[1] as $skill)
                            <div class="skill col-md-2">
                                <div class="skill-item">
                                    <div class="skill-logo">
                                        <img src="{{ asset($skill->file->name) }}" class="skill-tiny-logo" alt="">
                                    </div>
                                    <div class="skill-title">
                                        <h3>{{ $skill->name }}</h3>
                                        <div class="skill-level">
                                            <h1 class="font-size-4">{{ $skill->percent }}%</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="excerpt hidden">
                                    <h1>{{ $skill->name }}</h1>
                                    <h3>{{ $skill->tools }}</h3>
                                    <p>{{ $skill->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="skill-description hidden" id="description">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                <div class="excerpt"></div>
            </div>
        </div>
    </div>
    <div class="section contact-page">
        <div class="portfolio-title">
            <h1 class="font-size-5 font-weight-bold text-center">
                CONTACT ME
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="terminal">
                        <div id="bar">
                            <div id="red">
                            </div>
                            <div id="yellow">
                            </div>
                            <div id="green">
                            </div>
                        </div>
                        <div id="screen">
                            <p class="font">root@127.0.0.1:~$</p>
                            <p class="line-1 hidden">
                                Hi Mojtaba! we've visited your site and we want to work with you please contact us
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/front/images/type_machine.gif') }}" id="machine-type" alt="">
                    <h3>Name : MOJTABA RAKHISI</h3>
                    <h4>Email : <a href="mailto:mojtaba.street@gmail.com">mojtaba.street@gmail.com</a></h4>
                    <div class="socials">
                        <a href="https://github.com/mojtabaRKS" class="social-item"><i class="fa fa-github" aria-hidden="true"></i></a>
                        <a href="#" class="social-item"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/mojtaba-rakhisi-4125b6a8/" class="social-item"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="https://t.me/mojtabarks" class="social-item"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                        <a href="https://mojtabarakhisi.slack.com" class="social-item"><i class="fa fa-slack" aria-hidden="true"></i></a>
                        <a href="https://stackoverflow.com/users/7551147/mojtaba-rakhisi" class="social-item"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/mojtaba.rks/" class="social-item"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection