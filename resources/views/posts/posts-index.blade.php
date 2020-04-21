<?php use App\User;?>
@extends('layouts.header')

@section('content')
    <div class="col-lg-2 ml-auto p-0">
        {!! Form::open(['route' => 'posts.store']) !!}
        <div class="form-group">
            {{ Form::label('title','Карточка') }}
            {{ Form::text('title', 'Новая карточка', ['class' => 'form-control'] )}}
            {{ Form::label('cardtext','Описание') }}
            {{ Form::textarea('cardtext', 'Описание новой карточки', ['class' => 'form-control'] )}}
            <select class="custom-select my-1" name="color">
                <option value="black" selected>Выбрать цвет</option>
                <option class="black-color" value="black">Черный</option>
                <option class="white-color" value="white">Белый</option>
                <option class="red-color"  value="red">Красный</option>
                <option class="blue-color"  value="blue">Синий</option>
            </select>
            @auth
                <input name="author_id" value="{{$id = Auth::id()}}" class="invisible">
            @endauth
            {{Form::submit('Создать', ['class' => 'btn btn-dark'])}}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-lg-6">
        <div class="row m-0 posts">
            @foreach($posts as $post)
                <div class ="col-lg-4 m-0 p-1">
                    <div class="card">
                        <div class="card-header @if($post->color == 'black')black-color
                                                @elseif($post->color == 'white')white-color
                                                @elseif($post->color == 'red')red-color
                                                @elseif($post->color == 'blue')blue-color @endif">
                            <h1 class="text-center">{{$post->title}}</h1>
                        </div>
                        <div class="card-body">
                            <p class="">{{$post->cardtext}}</p>
                        </div>
                        <div class="tag d-flex justify-content-between">
                            @if($post->author_id)
                                <div>
                                    <h2 class="text-left" style="border-bottom: 1px; border-bottom-color: #343a40">Автор: {{User::find($post->author_id)->name}}</h2>
                                </div>
                            @endif
                            <div>
                                <h2 class="text-right" style="border-bottom: 1px; border-bottom-color: #343a40">#{{$post->id}}</h2>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-around @if($post->color == 'black')black-color
                                                @elseif($post->color == 'white')white-color
                                                @elseif($post->color == 'red')red-color
                                                @elseif($post->color == 'blue')blue-color @endif">
                            {!!Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id]])!!}
                                {!! Form::submit('Удалить', ['class'=>'btn btn-light border-dark']) !!}
                            {!! Form::close() !!}
                            <a data-id='{{$post->id}}' class="btn btn-light border-dark add-to-cart" href="">В избранное</a>
                            <a data-id="{{$post->id}}a" class="btn btn-light border-dark in-cart disabled">В избранном</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-lg-3 p-0">

    </div>
    <script type='text/javascript'>
        $(document).ready(function(){
            $('.in-cart').hide();
            @foreach ($ids as $id=>$value)
            $('a[data-id={{$value}}]').hide();
            $('a[data-id="{{$value}}a"]').show();
            @endforeach
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".add-to-cart").click(function () {
                var id = $(this).attr("data-id");
                $.ajax({
                    url:"/posts/addAjax/"+id,
                    type:"get",
                    data:'_token = <?php echo csrf_token() ?> ',
                    dataType: "json",
                    success: function (data) {
                        $("#cart-count").html(data);
                        $("#cart-count_fixed").html(data);
                        $("#cart-countsm").html(data);
                        $("#cart-count_fixedsm").html(data);
                    }
                });
                $('a[data-id="'+id+'"]').hide();
                $('a[data-id="'+id+'a"]').show();
                return false;
            });
        });
    </script>
@endsection
