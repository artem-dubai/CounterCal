@extends('layouts.app')
@vite(['resources/css/login.css'])
@section('content')
<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <form method="post" action="/users" class="register-form" id="register-form">
                    @csrf
                    <div class="form-row">
                        <h2>Регистрация</h2>
                        <h2 > <a class="login"  id="login"  href="/login">Eсть аккаунт?</a> </h2>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Имя :</label>
                            <input type="text" name="name" id="name" value="{{old('name')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="father_name">Фамилия :</label>
                            <input type="text" name="father_name" id="father_name" value="{{old('father_name')}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age">Возраст :</label>
                        <input type="number" name="age" id="age"  value="{{old('age')}}">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="height">Рост(см) :</label>
                            <input type="number" name="height" id="height" value="{{old('height')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="weight">Вес(кг) :</label>
                            <input type="number" name="weight" id="weight" value="{{old('weight')}}"/>
                        </div>
                    </div>

                    <div class="form-radio">
                        <label for="gender" class="radio-label">Пол :</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="male" value="0" @if(old('gender') == 0) checked @endif>
                            <label for="male">Мужской</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="female" value="1" @if(old('gender') == 1) checked @endif>
                            <label for="female">Женский</label>
                            <span class="check"></span>
                        </div>
                    </div>


                    <div class="form-radio">
                        <label for="goal" class="radio-label">Цель:</label>
                        <div class="form-radio-item">
                            <input type="radio" name="goal" id="loss" value="0" @if(old('goal') == 0) checked @endif>
                            <label for="loss">Похудение</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="goal" id="normal" value="1" @if(old('goal') == 1) checked @endif>
                            <label for="normal">Поддержание формы</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="goal" id="gain" value="2" @if(old('goal') == 2) checked @endif>
                            <label for="gain">Набор массы</label>
                            <span class="check"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="physical-activity">Физическая активность :</label>
                        <div class="form-select-1">
                            <select name="physical-activity" id="physical-activity">
                                <option value="min" {{ (old("physical-activity") == "min" ? "selected":"") }}">минимальная/отсутствие тренировок</option>
                                <option value="light" {{ (old("physical-activity") == "light" ? "selected":"") }}>легкая нагрузка 1-3 раза в неделю</option>
                                <option value="middle" {{ (old("physical-activity") == "middle" ? "selected":"") }}>3-5 тренировок в неделю</option>
                                <option value="high" {{ (old("physical-activity") == "high" ? "selected":"") }}>высокая(спортсмены)</option>
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email-sign">Почта :</label>
                        <input type="text" name="email-sign" id="email-sign" value="{{old('email-sign')}}"/>
                    </div>
                    <div class="form-group">
                        <label for="password-sign">Пароль :</label>
                        <input type="password" name="password-sign" id="password-sign">
                    </div>
                    <div class="form-group">
                        <label for="password-repeat">Пароль :</label>
                        <input type="password" name="password-repeat" id="password-repeat">
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Сбросить все" class="submit-sign" name="reset" id="reset" />
                        <input type="submit" value="Зарегистрироваться" class="submit-sign" name="submit-sign" id="submit-sign" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection