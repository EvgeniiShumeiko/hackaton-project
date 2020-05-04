@extends('layouts.app')

@section('header')

@endsection

@section('content')








<el-container>
    <el-main>
        <el-row :gutter="20" type="flex" justify="center">
            <el-col :span="15">
                <el-row :gutter="20">
                    <el-col>
                        <div class="grid-content bg-purple">
                            <div class="embed-responsive embed-responsive-16by9 video-item">
                            <video id="video" height="120" width="160" autoplay></video>
                                <br>
                                <button onclick="call()">Call!</button><br>
                                <div id="div"></div>
                            <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wo1OhuEL5kQ" allowfullscreen></iframe> -->

                            </div>
                            <div id="errorMsg"></div>
                        </div>
                    </el-col>
                </el-row>
                <el-row :gutter="20">
                    <el-col>
                        <div class="grid-content">
                            <div class="container">
                                <div class="row rounded-lg overflow-hidden shadow">
                                    <!-- Chat Box-->
                                    <div class="col px-0">
                                        <div class="px-4 py-5 chat-box bg-white">
                                            <!-- Sender Message-->
                                            <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                                                <div class="media-body ml-3">
                                                    <div class="bg-light rounded py-2 px-3 mb-2">
                                                        <p class="text-small mb-0 text-muted">Как мне перемножить эти числа?</p>
                                                    </div>
                                                    <p class="small text-muted">12:00 | Май 4</p>
                                                </div>
                                            </div>

                                            <!-- Reciever Message-->
                                            <div class="media w-50 ml-auto mb-3">
                                                <div class="media-body">
                                                    <div class="bg-primary rounded py-2 px-3 mb-2">
                                                        <p class="text-small mb-0 text-white">Спасибо, все понятно</p>
                                                    </div>
                                                    <p class="small text-muted">12:00 | Май 4</p>
                                                </div>
                                            </div>

                                            <!-- Sender Message-->
                                            <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                                                <div class="media-body ml-3">
                                                    <div class="bg-light rounded py-2 px-3 mb-2">
                                                        <p class="text-small mb-0 text-muted">Я думал не так, но после урока думаю так</p>
                                                    </div>
                                                    <p class="small text-muted">12:00 | Май 4</p>
                                                </div>
                                            </div>

                                            <!-- Reciever Message-->
                                            <div class="media w-50 ml-auto mb-3">
                                                <div class="media-body">
                                                    <div class="bg-primary rounded py-2 px-3 mb-2">
                                                        <p class="text-small mb-0 text-white">Отличный урок</p>
                                                    </div>
                                                    <p class="small text-muted">12:00 | Май 4</p>
                                                </div>
                                            </div>

                                            <!-- Sender Message-->
                                            <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                                                <div class="media-body ml-3">
                                                    <div class="bg-light rounded py-2 px-3 mb-2">
                                                        <p class="text-small mb-0 text-muted">Спасибо</p>
                                                    </div>
                                                    <p class="small text-muted">12:00 | Май 4</p>
                                                </div>
                                            </div>

                                            <!-- Reciever Message-->
                                            <div class="media w-50 ml-auto mb-3">
                                                <div class="media-body">
                                                    <div class="bg-primary rounded py-2 px-3 mb-2">
                                                        <p class="text-small mb-0 text-white">Я постараюсь переделать досашнее задание</p>
                                                    </div>
                                                    <p class="small text-muted">12:00 | Май 4</p>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Typing area -->
                                        <form action="#" class="bg-light">
                                            <div class="input-group">
                                                <input type="text" placeholder="Напишите сообщение" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
                                                <div class="input-group-append">
                                                    <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </el-col>
                </el-row>
            </el-col>
            <el-col :span="8" >
                <el-row>
                    <el-col>
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span>План урока</span>
                                    <el-button style="float: right; padding: 3px 0" type="text">Изменить план урока</el-button>
                                </div>
                                <div style="height: 385px;">
                                    <el-steps direction="vertical" :active="1">
                                        <el-step title="Организационные моменты"></el-step>
                                        <el-step title="Объявление темы"></el-step>
                                        <el-step title="Проверка домашнего задания"></el-step>
                                        <el-step title="Разъеснение новой темы"></el-step>
                                        <el-step title="Самостоятельное решение"></el-step>
                                        <el-step title="Подведение итогов"></el-step>
                                        <el-step title="Домашнее задание"></el-step>
                                    </el-steps>
                                </div>
                            </el-card>
                        </div>
                    </el-col>
                </el-row>
                <el-row>
                    <el-col>
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span>Действия</span>
                                </div>
                                <div style="height: 150px;">
                                    <p>Поднять руку</p>
                                </div>
                            </el-card>
                        </div>
                    </el-col>
                </el-row>
                <el-row>
                    <el-col>
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span>Материалы урока</span>
                                    <el-button style="float: right; padding: 3px 0" type="text">Изменить материалы урока</el-button>
                                </div>
                                <div class="block">
                                    <el-timeline>
                                        <el-timeline-item placement="top">
                                            <el-card>
                                                <p>Страница 56, пример № 5, 6, 7</p>
                                            </el-card>
                                        </el-timeline-item>
                                        <el-timeline-item timestamp="2018/4/3" placement="top">
                                            <el-card>
                                                <a href="https://urok.1sept.ru/%D1%81%D1%82%D0%B0%D1%82%D1%8C%D0%B8/604519/">Электронный материал по делению</a>
                                            </el-card>
                                        </el-timeline-item>
                                        <el-timeline-item timestamp="2018/4/2" placement="top">
                                            <el-card>
                                                <a href="">Страница 56 | Электронный учебник</a>
                                            </el-card>
                                        </el-timeline-item>
                                    </el-timeline>
                                </div>
                            </el-card>
                        </div>
                    </el-col>
                </el-row>
                <el-row>
                    <el-col>
                        <div class="grid-content bg-purple">
                            <div class="grid-content bg-purple">
                                <el-card class="box-card">
                                    <div slot="header" class="clearfix">
                                        <span>Домашнее задание</span>
                                    </div>
                                    <div style="height: 385px;">
                                        <home-work></home-work>
                                    </div>
                                </el-card>
                            </div>
                        </div>
                    </el-col>
                </el-row>
            </el-col>
        </el-row>
    </el-main>
</el-container>
@endsection

@section('footer')

<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<script src="https://rawgit.com/jan-ivar/localSocket/master/localSocket.js"></script>

<script>

var pc = new RTCPeerConnection();
var call = e => navigator.mediaDevices.getUserMedia({ video: true, audio: true })
  .then(stream => pc.addStream(video.srcObject = stream)).catch(log);

pc.onaddstream = e => video.srcObject = e.stream;
pc.oniceconnectionstatechange = e => log(pc.iceConnectionState);
pc.onicecandidate = e => sc.send({ice: e.candidate});
pc.onnegotiationneeded = e => pc.createOffer()
  .then(sdp => pc.setLocalDescription(sdp).then(() => sc.send({sdp}))).catch(log);

var sc = new localSocket();
sc.onmessage = ({data: {sdp, ice}}) => sdp && pc.setRemoteDescription(sdp)
  .then(() => pc.signalingState == "stable" || pc.createAnswer()
    .then(sdp => pc.setLocalDescription(sdp).then(() => sc.send({sdp}))))
  .catch(log) || ice && pc.addIceCandidate(ice).catch(log);

var log = msg => div.innerHTML += "<br>" + msg;

    call();
    </script>
@endsection