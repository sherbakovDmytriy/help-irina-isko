@extends('layouts.admin')

@section('body')
    <h2 class="header-float-top">Админ панель</h2>

    <div class="admin-holder table-responsive">
        <a href="{{url('admin/post')}}">
            <button id="blogBtn" name="add-new-btn" class="add-new-btn">Управление блогом</button>
        </a>
    </div>
@stop