@extends('layouts.app')

@section('content')
<el-container>
    <el-main>
        <el-row>
            <el-col class="bg-white shadow-sm p-3">
                <h2>Домашнее задание {{$subjectModel->name}}</h2>
            </el-col>
        </el-row>
        <el-row justify="center" type="flex">
            <el-col class="bg-white shadow-sm p-3" :span="18">
                <el-row justify="center" type="flex">
                    <el-col :span="6">
                        <div class="block">
                            <div slot="header" class="clearfix">
                                <span>Отправка домажнего задания через социальные сети</span>
                            </div>
                            <p>
                            {!!$qrCode!!}
                        </div>
                    </el-col>
                    <el-col :span="17" :offset="1">
                        <form action="" method="POST">
                            <h2>{{$homeWork->title}}</h2>
                            
                               <p>{{$homeWork->description}}</p> <br>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Введите ответ на задание</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Выберите файл</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                        
                    </el-col>
                </el-row>

            </el-col>
            <el-col :span="6" :offset="1">
                <el-row justify="center" type="flex">
                    <el-col>
                        <div class="grid-content bg-purple">
                            <el-card class="box-card">
                                <div slot="header" class="clearfix">
                                    <span> <h3>Электронные материалы по теме</h3> </span>
                                </div>
                                <p>
                                 Дополнительные материалы
                                </p>
                            </el-card>
                        </div>
                    </el-col>
                </el-row>
            </el-col>
        </el-row>
    </el-main>
</el-container>
@endsection

@section('footer')

@endsection