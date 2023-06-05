@extends('layouts.app')

@section('content')
<div class="page-row">
<div class="list">
    <div class="list__content">
        @foreach ($marks as $mark)
        <form method='POST' action="{{ url('/remove', ['id' =>  $mark['id']]) }}" class="list-item">
@csrf <!-- {{ csrf_field() }} -->

            <button  class="list-item__remove-button">Удалить</button>
            <h4>
            <span class='student__id'>{{ $mark['id']}}. </span>
            {{ $mark['student'] }}

            </h4>
            <h5>
            {{$mark['object']}} - {{$mark['mark']}}
            </h5>
        </form>
        @endforeach
</div>

</div>
<div class="forms">
<form method="POST" action="create" class="create-form">
@csrf <!-- {{ csrf_field() }} -->
<div class="form-group">
    <label for="student">ФИО студента</label>
    <input required  name="student" type="text" class="form-control" id="student" placeholder="ФИО студента">
  </div>
  <div class="form-group">
    <label for="object">Название предмета</label>
    <input  required name="object" type="text" class="form-control" id="object" placeholder="Название предмета">
  </div>
  <div class="form-group">
    <label for="mark">Оценка</label>
    <input required min='2' max='5' name="mark" type="number" class="form-control" id="mark" placeholder="Оценка">
  </div>
<button class="btn btn-dark">Создать</button>
</form>

<form method="POST" action="update" class="create-form">
@csrf <!-- {{ csrf_field() }} -->
<div class="form-group">
    <label for="id">ID оценки</label>
    <input required  name="id" type="text" class="form-control" id="id" placeholder="ID студента">
  </div>
<div class="form-group">
    <label for="student">ФИО студента</label>
    <input required  name="student" type="text" class="form-control" id="student" placeholder="ФИО студента">
  </div>
  <div class="form-group">
    <label for="object">Название предмета</label>
    <input  required name="object" type="text" class="form-control" id="object" placeholder="Название предмета">
  </div>
  <div class="form-group">
    <label for="mark">Оценка</label>
    <input required min='2' max='5' name="mark" type="number" class="form-control" id="mark" placeholder="Оценка">
  </div>
<button class="btn btn-dark">Изменить</button>
</form>
</div>
</div>


    <style>
        .forms{
            display:flex;
            flex-direction: column;
            justify-content:flex-start;
            align-items:center;
            gap: 30px;
            flex-shrink:0;
            flex-grow:1;
            max-width: 300px;

        }
        .create-form{
            display: flex;
            align-items: stretch;
            justify-content: flex-start;
            flex-direction:column;
            flex-shrink:0;
            flex-grow:1;
            gap: 10px;
        }
        .page-row{
            display: flex;
            flex-direction:row;
            justify-content: space-between;
            align-items: flex-start;
            gap:40px;
            flex-shrink: 0;
            flex-grow:1;
        }
        .list{
            flex-grow: 1;
        }
        .list__content{
            margin-top: 10px;
            overflow: visible;
            display: grid;
            grid-template-columns:1fr;
            gap:30px;
            width: 100%;
            flex-grow: 1;
        }
        .list-item{
        position: relative;
            border:1px solid rgba(0,0,0,0.1);
            box-shadow: 0 0 10px 1px rgba(0,0,0,0.1);
            border-radius: 10px;
            padding: 10px;
            transition: 0.2s;
            cursor: pointer;
            text-decoration: none;
            color: black;
          
        }
        .list-item__remove-button{
            position: absolute;
            bottom:calc(100% + 5px);
            right:0;
            color: red;
            font-size: 12px;
            cursor: pointer;
            background: transparent;
            transition: .25s;
            border: none;
        }
        .list-item__remove-button:hover{
            opacity: 0.9;
        }
        .list-item:hover{
            border: 1px solid transparent;
            box-shadow: 0 0 10px 1px rgba(0,0,0,0.2);
            transform: scale(1.01);
        }
    </style>
    
@endsection
