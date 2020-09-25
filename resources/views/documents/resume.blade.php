<!doctype html>
<html>
<head>

    <title>Resume</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="card-body">

    <div class="container">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-6">
                    <h1>Andrii Lavryniuk</h1>
                </div>
                <div class="col-6">
                    <p class="text-right"><a href="#{{--{{ route('resume.pdf') }}--}}">Download my Resume</a></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="media">
                        <img class="mr-3" src=" {{ asset('images/resume/andr.jpg') }}"
                             alt="Generic placeholder image"
                             height="150px"
                             width="90px">
                        <div class="media-body">
                            <h5 class="mt-0">Web Developer</h5>
                            Квалифицированный, инновационный разработчик PHP с опытом кодирования веб-сайтов,
                            в частности в формате PHP с использованием фреймворка Yii2 и других технологий. Способен
                            быстро
                            освоить новые технологии и оценить их применимость.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="row justify-content-md-around m-1">
                        <address>
                            <strong>Andrii Lavryniuk</strong><br>
                            L.Ukrainky 123<br>
                            Peremyshl, Slavutskyi<br>
                            Khmelnytska obl,Ukraina<br>
                            <abbr title="Phone">t:</abbr> (+380) 686-987-691<br>
                            <a href="mailto:#">splaandrey@gmail.com</a>
                        </address>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2>Education</h2>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <h4>Эвропейський университет</h4>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right"><span aria-hidden="true"></span> Sen 2014 - D 2018</h5>
                        </div>
                    </div>
                    <h5><span class="badge badge-secondary">«Computer Science» </span></h5>
                    <p>
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <h4>Курсы</h4>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right"><span aria-hidden="true"></span> Sen 2016 - Mar 2017</h5>
                        </div>
                    </div>
                    <h5><span class="badge badge-secondary"></span></h5>
                    <p>
                        Академия ШАГ (Разрабтка мобильных приложений под Androеd/Java)
                        SoftGroup Drupal <a href="http://academy.softgroup.ua/">(курсы)</a> <br>
                        SoftGroup PHP Academy <a href="http://academy.softgroup.ua/">(курсы)</a> <br>
                        SoftGroup Yii2 <a href="http://academy.softgroup.ua/">(курсы)</a>
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <h4>Доп. Инфо</h4>
                        </div>
                    </div>
                    <h5><span class="badge badge-secondary"></span></h5>
                    <p>
                        Иностранные языки:(Английский: чтение технической документации) <br>
                    </p>

                </div>
                <div class="col-md-6 col-sm-12">
                    <h2>Skill Set</h2>
                    <hr>
                    <div class="progress mt-4">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                             aria-valuemax="100" style="width: 85%"> HTML
                        </div>
                    </div>
                    <div class="progress mt-4">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                             aria-valuemax="100" style="width: 80%"> CSS
                        </div>
                    </div>
                    <div class="progress mt-4">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                             aria-valuemax="55" style="width: 40%"> JavaScript React,Vue
                        </div>
                    </div>
                    <div class="progress mt-4">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                             aria-valuemax="100" style="width: 50%"> PHP
                        </div>
                    </div>
                    <div class="progress mt-4">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                             aria-valuemax="100" style="width: 60%"> Yii2
                        </div>
                    </div>
                    <div class="progress mt-4">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                             aria-valuemax="100" style="width: 70%"> Laravel
                        </div>
                    </div>

                    <div class="progress mt-4">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                             aria-valuemax="100" style="width: 20%">Symfony
                        </div>
                    </div>
                    <div class="progress mt-4">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                             aria-valuemax="100" style="width: 20%">OpenCart 2
                        </div>
                    </div>

                    <div class="progress mt-4">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                             aria-valuemax="100" style="width: 79%">Git
                        </div>
                    </div>
                    <div class="progress mt-4">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                             aria-valuemax="100" style="width: 69%"> Docker Docker-compose
                        </div>
                    </div>
                    <div class="progress mt-4">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="15" aria-valuemin="0"
                             aria-valuemax="100" style="width: 69%"> AWS GoogleCloud DevOps Heroku
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h2>Portfolio</h2>
            <hr>
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-4 col-12 p-0">
                        <div>
                            Тестовое задание: <br>
                            <a href="https://artjoker.ua/">Artjoker</a>"PHP": <br>
                            Data: 7 бер 2020 <br>
                            link: <a href="http://35.198.71.142/"> GCloud</a><br>
                            GitHub: <a href="https://github.com/splaa/test-php-version-mvc">ссылка</a> <br>
                        </div>
                        <div><a href="http://35.198.71.142/registration/">
                                <img class="img-thumbnail"
                                     src="{{ asset('images/resume/portfolio-test-one.png') }}"
                                     alt="Тестовое задание"
                                     height="300px"
                                >
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 p-0">
                        <div>
                            Tестовое Задание: <br>
                            <a href="https://beejee.ru/">BeeJee</a> "PHP": <br>
                            Data: 20.03.2020: <br>
                            link: <a href="http://35.206.99.76/"> GCloud</a><br>
                            GitLab: <a href="https://gitlab.com/splaa/test-task">ссылка</a> <br>
                        </div>
                        <div><a href="http://35.206.99.76/">
                                <img class="img-thumbnail"
                                     src="{{ asset('images/resume/portfolio-test-bee-jee.png') }}"
                                     alt="Тестовое задание"
                                     height="300px"
                                >
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 p-0">
                        <div>
                            Описание: <br>
                            Задание "PHP HTML": <br>
                            Data: 9.09.0009 <br>
                            Domain: <a href="http://35.198.71.142/"> Ссылка на domain</a><br>
                            GitHub: <a href="#">ссылка на репозиторий</a> <br>
                        </div>
                        <div><a href="#">
                                <img class="img-thumbnail"
                                     src="{{ asset('images/resume/300X200.gif') }}"
                                     alt="Фото задания"
                                     height="300px"
                                >
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 p-0">
                        <img class="img-thumbnail"
                             src="{{asset('/images/resume/300X200.gif')}}"
                             alt=""></div>
                    <div class="col-sm-4 col-12 p-0">
                        <img class="img-thumbnail"
                             src="{{ asset('/images/resume/300X200.gif') }}"
                             alt=""></div>
                    <div class="col-sm-4 col-12 p-0">
                        <img class="img-thumbnail"
                             src="{{ asset('images/resume/300X200.gif') }}"
                             alt=""></div>
                </div>
            </div>
            <hr>
            <h2>Contact</h2>
            <hr>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8  col-12 jumbotron">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Email Address"
                                       aria-describedby="emailHelp">
                                <span id="emailHelp" class="form-text text-muted" style="display: none;">Please enter a valid e-mail address.</span>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" name="message"
                                          placeholder="Message" aria-describedby="messageHelp"></textarea>
                                <span id="messageHelp" class="form-text text-muted" style="display: none;">Please enter a message.</span>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <footer class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p>Copyright © MyWebsite. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
</body>
</html>
