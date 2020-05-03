@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <div class="row ">
            <div class="col ">
                <div class="row ">
                    <div class="col ">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wo1OhuEL5kQ" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row  mt-3 mb-4">
                    <div class="col">
                        <div class="col p-0">
                            <div class="chatbody">
                                <div class="panel panel-primary">
                                    <div class="panel-heading top-bar">
                                        <div class="col-md-8 col-xs-8">
                                            <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Чат урока математики</h3>
                                        </div>
                                    </div>
                                    <div class="panel-body msg_container_base">
                                        <div class="row msg_container base_sent">
                                            <div class="col-md-10 col-xs-10">
                                                <div class="messages msg_sent">
                                                    <p>домашнее задание выполнено</p>
                                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-2 avatar">
                                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                            </div>
                                        </div>
                                        <div class="row msg_container base_receive">
                                            <div class="col-md-2 col-xs-2 avatar">
                                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                            </div>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="messages msg_receive">
                                                    <p>как перемножить в этой формуле числа?</p>
                                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="input-group">
                                            <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                                            <span class="input-group-btn">
                                  <button class="btn btn-primary btn-sm" id="btn-chat">Отправить<i class="fa fa-send fa-1x" aria-hidden="true"></i></button>
                                  </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 ">
                <div class="row">
                    <div class="col">

                        <ul class="list-group">
                            <li class="list-group-item active">План урока</li>
                            <li class="list-group-item ">1. Организационные моменты</li>
                            <li class="list-group-item">2. ...</li>
                            <li class="list-group-item">3. ...</li>
                            <li class="list-group-item">4. ...</li>
                            <li class="list-group-item">5. ...</li>
                        </ul>

                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <!-- Начало текстового контента -->
                                <h4 class="card-title">Материалы урока</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Подзаголовок карточки</h6>
                                <p class="card-text">Некоторый текст...</p>
                                <a href="#" class="card-link">Первая ссылка</a>
                                <a href="#" class="card-link">Вторая ссылка</a>
                            </div>
                            <!-- Конец текстового контента -->
                        </div>
                        <!-- Конец карточки -->
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <!-- Начало текстового контента -->
                                <h4 class="card-title">Домашнее задание</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Подзаголовок карточки</h6>
                                <p class="card-text">Некоторый текст...</p>
                                <a href="#" class="card-link">Первая ссылка</a>
                                <a href="#" class="card-link">Вторая ссылка</a>
                            </div>
                            <!-- Конец текстового контента -->
                        </div>
                        <!-- Конец карточки -->
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection