<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('node_modules/fullpage.js/dist/jquery.fullpage.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/app.css') }}"/>
    <title>Mojtaba Rakhisi</title>
</head>
<body>
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
        <div class="slide">
            <div class="portfolio-description">
                <div class="">
                    <h1 class="font-size-2-5 font-weight-bold">CotintGroup</h1>
                    <a href="https://www.cotintgroup.com/">cotintgroup.com</a>
                    <p class="mt-5 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda beatae blanditiis debitis dolorum eos esse est harum, illum numquam possimus quibusdam quod repudiandae rerum veniam! Aliquid cupiditate facilis illo illum officiis quaerat quisquam reprehenderit, vero! Aliquid assumenda autem consectetur culpa cum distinctio doloremque dolores eius facere fuga impedit ipsa iure labore laborum nulla odio officia omnis optio quo rerum, sunt tempore veniam vitae voluptatibus voluptatum. A adipisci animi assumenda atque blanditiis consectetur distinctio, dolor eligendi enim excepturi explicabo inventore minus nulla praesentium provident quas qui repellendus rerum sed similique sunt ullam velit voluptatum! Ex exercitationem odit quam qui quisquam.</p>
                    <div class="technologies">
                        <div class="tasks">
                                    <span class="font-size-5">
                                        <i class="fa fa-tachometer" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-wordpress" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-briefcase" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-moon-o" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-search" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="portfolio-description">
                <div class="">
                    <h1 class="font-size-2-5 font-weight-bold">CotintGroup</h1>
                    <a href="https://www.cotintgroup.com/">cotintgroup.com</a>
                    <p class="mt-5 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda beatae blanditiis debitis dolorum eos esse est harum, illum numquam possimus quibusdam quod repudiandae rerum veniam! Aliquid cupiditate facilis illo illum officiis quaerat quisquam reprehenderit, vero! Aliquid assumenda autem consectetur culpa cum distinctio doloremque dolores eius facere fuga impedit ipsa iure labore laborum nulla odio officia omnis optio quo rerum, sunt tempore veniam vitae voluptatibus voluptatum. A adipisci animi assumenda atque blanditiis consectetur distinctio, dolor eligendi enim excepturi explicabo inventore minus nulla praesentium provident quas qui repellendus rerum sed similique sunt ullam velit voluptatum! Ex exercitationem odit quam qui quisquam.</p>
                    <div class="technologies">
                        <div class="tasks">
                                    <span class="font-size-5">
                                        <i class="fa fa-tachometer" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-wordpress" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-briefcase" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-moon-o" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-search" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="portfolio-description">
                <div class="">
                    <h1 class="font-size-2-5 font-weight-bold">CotintGroup</h1>
                    <a href="https://www.cotintgroup.com/">cotintgroup.com</a>
                    <p class="mt-5 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda beatae blanditiis debitis dolorum eos esse est harum, illum numquam possimus quibusdam quod repudiandae rerum veniam! Aliquid cupiditate facilis illo illum officiis quaerat quisquam reprehenderit, vero! Aliquid assumenda autem consectetur culpa cum distinctio doloremque dolores eius facere fuga impedit ipsa iure labore laborum nulla odio officia omnis optio quo rerum, sunt tempore veniam vitae voluptatibus voluptatum. A adipisci animi assumenda atque blanditiis consectetur distinctio, dolor eligendi enim excepturi explicabo inventore minus nulla praesentium provident quas qui repellendus rerum sed similique sunt ullam velit voluptatum! Ex exercitationem odit quam qui quisquam.</p>
                    <div class="technologies">
                        <div class="tasks">
                                    <span class="font-size-5">
                                        <i class="fa fa-tachometer" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-wordpress" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-briefcase" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-moon-o" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-search" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="portfolio-description">
                <div class="">
                    <h1 class="font-size-2-5 font-weight-bold">CotintGroup</h1>
                    <a href="https://www.cotintgroup.com/">cotintgroup.com</a>
                    <p class="mt-5 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda beatae blanditiis debitis dolorum eos esse est harum, illum numquam possimus quibusdam quod repudiandae rerum veniam! Aliquid cupiditate facilis illo illum officiis quaerat quisquam reprehenderit, vero! Aliquid assumenda autem consectetur culpa cum distinctio doloremque dolores eius facere fuga impedit ipsa iure labore laborum nulla odio officia omnis optio quo rerum, sunt tempore veniam vitae voluptatibus voluptatum. A adipisci animi assumenda atque blanditiis consectetur distinctio, dolor eligendi enim excepturi explicabo inventore minus nulla praesentium provident quas qui repellendus rerum sed similique sunt ullam velit voluptatum! Ex exercitationem odit quam qui quisquam.</p>
                    <div class="technologies">
                        <div class="tasks">
                                    <span class="font-size-5">
                                        <i class="fa fa-tachometer" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-wordpress" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-briefcase" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-moon-o" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                            <span class="font-size-5">
                                        <i class="fa fa-search" data-toggle="tooltip" data-placement="bottom" title="asdas" aria-hidden="true"></i>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section skills">
        <div class="portfolio-title">
            <h1 class="font-size-5 font-weight-bold text-center">
                MY SKILLS
            </h1>
        </div>
        <div class="skills">
            <div class="container">
                <div class="row">
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                    <div class="skill col-md-2">
                        <div class="skill-item">
                            <div class="skill-logo">
                                <img src="{{ asset('assets/front/images/edited/tiny/php.png') }}" class="skill-tiny-logo" alt="">
                            </div>
                            <div class="skill-title">
                                <h3>PHP</h3>
                                <div class="skill-level">
                                    <h1 class="font-size-4">80%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt hidden">
                            <h1>PHP</h1>
                            <h3>OOP , MVC , functional , flat , Design patterns</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus ea magnam. Doloremque eligendi harum iste itaque modi molestiae, molestias non quibusdam sunt tempora tempore ut vel veniam! Accusamus deleniti dicta dolor doloribus enim et excepturi, explicabo laudantium nesciunt nostrum porro, quae quas quod reprehenderit, veniam veritatis voluptatum. Explicabo, nulla!</p>
                        </div>
                    </div>
                </div>
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
                            <p class="line-1 hidden">Animation typewriter style using css steps()</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/front/images/type_machine.gif') }}" id="machine-type" alt="">
                    <h3>Name : MOJTABA RAKHISI</h3>
                    <h4>Email : <a href="mailto:mojtaba.street@gmail.com">mojtaba.street@gmail.com</a></h4>
                    <div class="socials">
                        <a href="#" class="social-item"><i class="fa fa-github" aria-hidden="true"></i></a>
                        <a href="#" class="social-item"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" class="social-item"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#" class="social-item"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        <a href="#" class="social-item"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                        <a href="#" class="social-item"><i class="fa fa-slack" aria-hidden="true"></i></a>
                        <a href="#" class="social-item"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a>
                        <a href="#" class="social-item"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('node_modules/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('node_modules/fullpage.js/vendors/jquery.easings.min.js') }}"></script>
<script src="{{ asset('assets/front/vendor/popper-js/popper.min.js') }}"></script>
<script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('node_modules/parallax-js/dist/parallax.min.js') }}"></script>
<script src="{{ asset('node_modules/fullpage.js/dist/jquery.fullpage.min.js') }}"></script>
<script src="{{ asset('node_modules/fullpage.js/vendors/scrolloverflow.min.js') }}"></script>
<script src="{{ asset('assets/front/vendor/tilt-js/dest/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/front/js/page-movements.js') }}"></script>
<script src="{{ asset('assets/front/js/Call-Plugins.js') }}"></script>
<script src="{{ asset('assets/front/js/scripts.js') }}"></script>
</body>
</html>