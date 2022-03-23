@if (count($comments)>0)
    @foreach ($comments as $comment)
<div class="p-2 flex justify-between gap-2 text-xl">

    <div class="col-span-2 flex items-center">
        <a class="text-green" href="#">
            @if ($comment->user->avatar != NULL)
                @if (Storage::disk('public')->exists($comment->user->avatar))
                <img class="w-12 h-12 rounded-full object-cover p-1 border border-green inline-block" src="{{asset('storage/'.$comment->user->avatar)}}" alt="{{$comment->user->name}}">
                @endif
            @else
            <img class="w-12 h-12 rounded-full object-cover p-1 border border-green inline-block" src="{{asset('images/tree.png')}}" alt="{{$comment->user->name}}">
            @endif{{$comment->user->name}}
        </a>
    </div>
    <div class="grow flex items-center">
        <p class="block">{{$comment->comment}}</p>
    </div>
</div>
@endforeach

@endif
