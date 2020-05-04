@extends('layouts.app')

@section('content')
<el-container>
    <el-main>
        <el-row>
            <el-col class="bg-white shadow-sm p-3">
                <h2>Кабинет учителя</h2>
            </el-col>
        </el-row>
        <el-row justify="center" type="flex">
            <el-col class="bg-white shadow-sm p-3" :span="15">
                <el-row justify="center" type="flex">
                    <el-col :span="6" >
                        <div class="block">
                            <el-avatar shape="square" :size="100" src="https://cube.elemecdn.com/9/c2/f0ee8a3c7c9638a54940382568c9dpng.png"></el-avatar>
                            <p>Алексей Никитин</p>
                        </div>
                    </el-col>
                    <el-col :span="14">
                        <teacher-tab :homework="{{$homework}}"></teacher-tab>
                    </el-col>
                </el-row>

            </el-col>
            <el-col :span="8" :offset="1">
            <el-row justify="center" type="flex">
                    <el-col >
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span>Текущий урок</span>
                                </div>
                                <div style="height: 100px;">
                                    <p>8 Б класс</p>
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
                                        <el-step title="8 Б"></el-step>
                                        <el-step title="8 А"></el-step>
                                        <el-step title="9 Б"></el-step>
                                        <el-step title="7 А"></el-step>
                                        <el-step title="6 Г"></el-step>
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