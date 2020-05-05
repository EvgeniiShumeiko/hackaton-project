@extends('layouts.app')

@section('content')
<el-container>
    <el-main>
        <el-row>
            <el-col class="bg-white shadow-sm p-3">
                    @if($isStudent)
                    <h2>Кабинет ученика</h2>
                    @endif
                    @if($isTeacher)
                    <h2>Кабинет учителя</h2>
                    @endif
                    @if($isMethodist)
                    <h2>Кабинет методиста</h2>
                    @endif
                
            </el-col>
        </el-row>
        <el-row justify="center" type="flex">
            <el-col class="bg-white shadow-sm p-3" :span="15">
                <el-row justify="center" type="flex">
                    <el-col :span="6" >
                        <div class="block">
                            <el-avatar shape="square" :size="100" src="https://cube.elemecdn.com/9/c2/f0ee8a3c7c9638a54940382568c9dpng.png"></el-avatar>
                            <p>Алексей Никитин</p>
                        </div><br>
                       
                    </el-col>
                    <el-col :span="14">
                    @if($isStudent)
                        <cabinet-tab :home="{{$homeworks}}"  qrcode="{{$qrCode}}"></cabinet-tab>
                    @endif
                    @if($isTeacher)
                        <teacher-tab></teacher-tab>
                        <br>
                        <h1>Новые домашние задания</h1>
                        @foreach($reply->replies as $key => $r)
                        
                               <p>{{$key+1}}.  {{$r->answer}}</p>
                     
                        @endforeach
                    @endif
                    @if($isMethodist)
                        <metodist-tab></metodist-tab>
                    @endif
                    </el-col>
                </el-row>

            </el-col>
            <el-col :span="8" :offset="1">
            <el-row justify="center" type="flex">
                    <el-col>
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <h4>Информация</h4>
                                    
                                </div>
        
                                <p><a href="lesson" class="btn btn-primary">Присоединиться к уроку</a></p>
                            </el-card>
                        </div>
                    </el-col>
                </el-row>
                <el-row justify="center" type="flex">
                    <el-col>
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span>Расписание уроков на сегодня</span>
                                </div>
                                <div style="height: 300px;">
                                    <el-steps direction="vertical" :active="1">
                                        <el-step title="Математика"></el-step>
                                        <el-step title="Русский язык"></el-step>
                                        <el-step title="История"></el-step>
                                        <el-step title="Обществознание"></el-step>
                                        <el-step title="География"></el-step>
                                    </el-steps>
                                </div>
                            </el-card>
                        </div>
                    </el-col>
                </el-row>
                 <el-row justify="center" type="flex">
                    <el-col>
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <h4>Отправляй ДЗ откуда хочешь</h4>
                                </div>
                                <div style="height: 300px;">
                                <el-image
                                style="width: 150px;"
                                src="/img/qr88577499.png"
                                fit="fit"></el-image>
                                <el-image
                                style="width: 150px;"
                                src="/img/whatsapp-qr.png"
                                fit="fit"></el-image>
                                </div>
                            
                            </el-card>
                        </div>
                    </el-col>
                </el-row>
            </el-col>
        </el-row>
    </el-main>
</el-container>
@endsection