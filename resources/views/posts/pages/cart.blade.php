@extends('layouts.header')

@section('content')
    <div class="col-lg-3"></div>
    <div class="col-lg-6 ">
        <div class="row m-0 posts">
            @foreach($posts as $post)
                <div id="{{$post->id}}" class ="col-lg-4 m-0 p-1">
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
                        <div class="tag">
                            <h2 class="text-right" style="border-bottom: 1px; border-bottom-color: #343a40">#{{$post->id}}</h2>
                        </div>
                        <div class="card-footer d-flex justify-content-around @if($post->color == 'black')black-color
                                                @elseif($post->color == 'white')white-color
                                                @elseif($post->color == 'red')red-color
                                                @elseif($post->color == 'blue')blue-color @endif">
                            <a data-id='{{$post->id}}' class="btn btn-light border-dark del-from-cart" href="">Убрать из избранного</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-lg-3"><a class="btn btn-dark" href="{{ asset('cart/clean') }}">Очистить избранное</a></div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".del-from-cart").click(function () {
                var id = $(this).attr("data-id");
                $.ajax({
                    url:"/posts/delAjax/"+id,
                    type:"get",
                    data:'_token = <?php echo csrf_token() ?> ',
                    dataType: "json",
                    success: function (data) {
                        $("#"+id+"").remove();
                        $("#cart-count").html(data);
                        $("#cart-count_fixed").html(data);
                        $("#cart-countsm").html(data);
                        $("#cart-count_fixedsm").html(data);
                    }
                });
                return false;
            });
        });
    </script>
@endsection
