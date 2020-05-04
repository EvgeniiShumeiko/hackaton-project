@extends('layouts.app')

@section('content')
<el-container>
    <el-main>
        <el-row>
            <el-col class="bg-white shadow-sm p-3">
                <h2>Кабинет ученика</h2>
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
                        <cabinet-tab :home="{{$homeworks}}"  qrcode="{{$qrCode}}"></cabinet-tab>
                    </el-col>
                </el-row>

            </el-col>
            <el-col :span="8" :offset="1">
            <el-row justify="center" type="flex">
                    <el-col>
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span>ДЗ на сегодня</span>
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
                                    <span>Отправляй ДЗ откуда хочешь</span>
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
            <el-row justify="center" type="flex">
                    <el-col >
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span>Текущий урок</span>
                                </div>
                                <div style="height: 100px;">
                                    <p>Математика</p>
                                    <el-button type="primary" plain>Присоединиться к уроку</el-button>
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
                
            </el-col>
        </el-row>
    </el-main>
</el-container>
@endsection