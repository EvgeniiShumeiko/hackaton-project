@extends('layouts.app')

@section('content')
<el-container>
    <el-main>
        <el-row>
            <el-col class="bg-white shadow-sm p-3">
                <h2>Кабинет методиста</h2>
            </el-col>
        </el-row>
        <el-row justify="center" type="flex">
            <el-col class="bg-white shadow-sm p-3" :span="18">
                <el-row justify="center" type="flex">
                    <el-col :span="6" >
                        <div class="block">
                            <el-avatar shape="square" :size="100" src="https://cube.elemecdn.com/9/c2/f0ee8a3c7c9638a54940382568c9dpng.png"></el-avatar>
                            <p>Алексей Никитин</p>
                        </div>
                    </el-col>
                    <el-col :span="18">
                        <metodist-tab></metodist-tab>
                    </el-col>
                </el-row>

            </el-col>
            <el-col :span="6" :offset="1">
            <el-row justify="center" type="flex">
                    <el-col >
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span>Полезные ресурсы</span>
                                </div>
                                   <p><el-link type="primary">ЯКласс</el-link></p> 
                                   <p><el-link type="primary">УчиРу</el-link></p> 
                            </el-card>
                        </div>
                    </el-col>
                </el-row>
                <el-row justify="center" type="flex">
                    <el-col>
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span></span>
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