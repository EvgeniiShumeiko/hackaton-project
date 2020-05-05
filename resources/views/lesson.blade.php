@extends('layouts.app')

@section('header')
<style>
    /*
 *  Copyright (c) 2015 The WebRTC project authors. All Rights Reserved.
 *
 *  Use of this source code is governed by a BSD-style license
 *  that can be found in the LICENSE file in the root of the source
 *  tree.
 */

    .hidden {
        display: none;
    }

    .highlight {
        background-color: #eee;
        font-size: 1.2em;
        margin: 0 0 30px 0;
        padding: 0.2em 1.5em;
    }

    .warning {
        color: red;
        font-weight: 400;
    }

    @media screen and (min-width: 1000px) {

        /* hack! to detect non-touch devices */
        div#links a {
            line-height: 0.8em;
        }
    }

    audio {
        max-width: 100%;
    }

    body {
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        margin: 0;
        padding: 1em;
        word-break: break-word;
    }

    button {
        background-color: #d84a38;
        border: none;
        border-radius: 2px;
        color: white;
        font-family: 'Roboto', sans-serif;
        font-size: 0.8em;
        margin: 0 0 1em 0;
        padding: 0.5em 0.7em 0.6em 0.7em;
    }

    button:active {
        background-color: #cf402f;
    }

    button:hover {
        background-color: #cf402f;
    }

    button[disabled] {
        color: #ccc;
    }

    button[disabled]:hover {
        background-color: #d84a38;
    }

    canvas {
        background-color: #ccc;
        max-width: 100%;
        width: 100%;
    }

    code {
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
    }

    div#container {
        margin: 0 auto 0 auto;
        max-width: 60em;
        padding: 1em 1.5em 1.3em 1.5em;
    }

    div#links {
        padding: 0.5em 0 0 0;
    }

    h1 {
        border-bottom: 1px solid #ccc;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        margin: 0 0 0.8em 0;
        padding: 0 0 0.2em 0;
    }

    h2 {
        color: #444;
        font-weight: 500;
    }

    h3 {
        border-top: 1px solid #eee;
        color: #666;
        font-weight: 500;
        margin: 10px 0 10px 0;
        white-space: nowrap;
    }

    li {
        margin: 0 0 0.4em 0;
    }

    html {
        /* avoid annoying page width change
  when moving from the home page */
        overflow-y: scroll;
    }

    img {
        border: none;
        max-width: 100%;
    }

    input[type=radio] {
        position: relative;
        top: -1px;
    }

    p {
        color: #444;
        font-weight: 300;
    }

    p#data {
        border-top: 1px dotted #666;
        font-family: Courier New, monospace;
        line-height: 1.3em;
        max-height: 1000px;
        overflow-y: auto;
        padding: 1em 0 0 0;
    }

    p.borderBelow {
        border-bottom: 1px solid #aaa;
        padding: 0 0 20px 0;
    }

    section p:last-of-type {
        margin: 0;
    }

    section {
        border-bottom: 1px solid #eee;
        margin: 0 0 30px 0;
        padding: 0 0 20px 0;
    }

    section:last-of-type {
        border-bottom: none;
        padding: 0 0 1em 0;
    }

    select {
        margin: 0 1em 1em 0;
        position: relative;
        top: -1px;
    }

    h1 span {
        white-space: nowrap;
    }

    a {
        color: #6fa8dc;
        font-weight: 300;
        text-decoration: none;
    }

    h1 a {
        font-weight: 300;
        margin: 0 10px 0 0;
        white-space: nowrap;
    }

    a:hover {
        color: #3d85c6;
        text-decoration: underline;
    }

    a#viewSource {
        display: block;
        margin: 1.3em 0 0 0;
        border-top: 1px solid #999;
        padding: 1em 0 0 0;
    }

    div#errorMsg p {
        color: #F00;
    }

    div#links a {
        display: block;
        line-height: 1.3em;
        margin: 0 0 1.5em 0;
    }

    div.outputSelector {
        margin: -1.3em 0 2em 0;
    }

    p.description {
        margin: 0 0 0.5em 0;
    }

    strong {
        font-weight: 500;
    }

    textarea {
        resize: none;
        font-family: 'Roboto', sans-serif;
    }

    video {
        background: #222;
        margin: 0 0 20px 0;
        --width: 100%;
        width: var(--width);
        height: calc(var(--width) * 0.75);
    }

    ul {
        margin: 0 0 0.5em 0;
    }

    @media screen and (max-width: 650px) {
        .highlight {
            font-size: 1em;
            margin: 0 0 20px 0;
            padding: 0.2em 1em;
        }

        h1 {
            font-size: 24px;
        }
    }

    @media screen and (max-width: 550px) {
        button:active {
            background-color: darkRed;
        }

        h1 {
            font-size: 22px;
        }
    }

    @media screen and (max-width: 450px) {
        h1 {
            font-size: 20px;
        }
    }
</style>
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
                                <div id="container">

                                    <video id="gum-local" autoplay playsinline></video>

                                </div>
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
            <el-col :span="8">
                <el-row>
                    <el-col>
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span>План урока</span>
                                    <el-button style="float: right; padding: 3px 0" type="text">Изменить план урока</el-button>
                                </div>
                                <button id="showVideo">Запустить трансляцию</button>
                            </el-card>
                        </div>
                    </el-col>
                </el-row>
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
<script src="https://cdn.socket.io/socket.io-1.0.0.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<script>
    $(document).ready(function() {
        /*
         *  Copyright (c) 2015 The WebRTC project authors. All Rights Reserved.
         *
         *  Use of this source code is governed by a BSD-style license
         *  that can be found in the LICENSE file in the root of the source
         *  tree.
         */
        'use strict';

        // Put variables in global scope to make them available to the browser console.
        const constraints = window.constraints = {
            audio: false,
            video: true
        };

        function handleSuccess(stream) {
            const video = document.querySelector('video');
            const videoTracks = stream.getVideoTracks();
            console.log('Got stream with constraints:', constraints);
            console.log(`Using video device: ${videoTracks[0].label}`);
            window.stream = stream; // make variable available to browser console
            video.srcObject = stream;
        }

        function handleError(error) {
            if (error.name === 'ConstraintNotSatisfiedError') {
                const v = constraints.video;
                errorMsg(`The resolution ${v.width.exact}x${v.height.exact} px is not supported by your device.`);
            } else if (error.name === 'PermissionDeniedError') {
                errorMsg('Permissions have not been granted to use your camera and ' +
                    'microphone, you need to allow the page access to your devices in ' +
                    'order for the demo to work.');
            }
            errorMsg(`getUserMedia error: ${error.name}`, error);
        }

        function errorMsg(msg, error) {
            const errorElement = document.querySelector('#errorMsg');
            errorElement.innerHTML += `<p>${msg}</p>`;
            if (typeof error !== 'undefined') {
                console.error(error);
            }
        }

        async function init(e) {
            try {
                const stream = await navigator.mediaDevices.getUserMedia(constraints);
                handleSuccess(stream);
                e.target.disabled = true;
            } catch (e) {
                handleError(e);
            }
        }

        document.querySelector('#showVideo').addEventListener('click', e => init(e));
    })
</script>
@endsection