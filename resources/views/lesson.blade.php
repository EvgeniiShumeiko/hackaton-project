@extends('layouts.app')

@section('content')
<el-container>
    <el-main>
        <el-row :gutter="20">
            <el-col :span="15">
                <div class="grid-content bg-purple">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wo1OhuEL5kQ" allowfullscreen></iframe>
                    </div>
                </div>
            </el-col>
            <el-col :span="8" :offset="1">
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
        <el-row :gutter="20">
            <el-col :span="15">
                <div class="grid-content bg-purple"></div>
            </el-col>
            <el-col :span="8" :offset="1">
                <div class="grid-content bg-purple">
                    <el-card class="box-card">
                        <div slot="header" class="clearfix">
                            <span>Материалы урока</span>
                            <el-button style="float: right; padding: 3px 0" type="text">Изменить материалы урока урока</el-button>
                        </div>
                        <div class="block">
                            <el-timeline>
                                <el-timeline-item timestamp="2018/4/12" placement="top">
                                    <el-card>
                                        <h4>Update Github template</h4>
                                        <p>Tom committed 2018/4/12 20:46</p>
                                    </el-card>
                                </el-timeline-item>
                                <el-timeline-item timestamp="2018/4/3" placement="top">
                                    <el-card>
                                        <h4>Update Github template</h4>
                                        <p>Tom committed 2018/4/3 20:46</p>
                                    </el-card>
                                </el-timeline-item>
                                <el-timeline-item timestamp="2018/4/2" placement="top">
                                    <el-card>
                                        <h4>Update Github template</h4>
                                        <p>Tom committed 2018/4/2 20:46</p>
                                    </el-card>
                                </el-timeline-item>
                            </el-timeline>
                        </div>
                    </el-card>
                </div>
            </el-col>
        </el-row>
        <el-row :gutter="20">
            <el-col :span="15">
                <div class="grid-content bg-purple"></div>
            </el-col>
            <el-col :span="8" :offset="1">
                <div class="grid-content bg-purple">
                <div class="grid-content bg-purple">
                    <el-card class="box-card">
                        <div slot="header" class="clearfix">
                            <span>Домашнее задание</span>
                        </div>
                        <div style="height: 385px;">

                        </div>
                    </el-card>
                </div>
                </div>
            </el-col>
        </el-row>
    </el-main>
</el-container>
@endsection