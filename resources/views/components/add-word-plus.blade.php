<div class="text-green">
    @auth()
    <a href="{{route('login')}}"><i class="fa-solid fa-circle-plus"></i></a>
    @else
    <a href="{{route('login')}}"><i class="fa-solid fa-circle-plus"></i></a>
    @endauth

</div>
