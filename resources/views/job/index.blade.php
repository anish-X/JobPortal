<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section class="container px-5 py-12 mx-auto">
    <div class="mb-12">
        <h2 class="text-2xl font-medium text-gray-900 title-font px-4">
            All Jobs({{$lists->count()}})
        </h2>
    </div>
    <div class="-my-6">
        <a href="{{route('job.archive')}}" class="border-b">archive</a>
        @foreach($lists as $list)

            <a
                href="{{route('job.view')}}"
                class="py-6 px-4 flex flex-wrap md:flex-nowrap border-b border-gray-100 {{$list->is_highlighted ? 'bg-yellow-100 hover:bg-yellow-200':'bg-white hover:bg-gray-100' }}">
                <div class="md:w-16 md:mb-0 mb-6 mr-4 flex-shrink-0 flex flex-col">
                    <img src="{{$list->company->logo}}" class="rounded-full object-cover" alt="company logo">
                </div>
                <div class="md:w-1/2 mr-8 flex flex-col items-start justify-center">
                    <h2 class="text-xl font-bold text-gray-900 title-font mb-1">{{$list->title}}</h2>
                    <div class="leading-relaxed text-gray-900">
                        {{$list->company->category->name}} &mdash; <span class="text-gray-600">Itahari-4, Sunsari</span>
                    </div>
                </div>
                <span class="md:flex-grow flex items-center justify-end">
                    <span>{{$list->created_at->diffForHumans()}}</span>
                </span>
                <form method="post" action="{{route('job.delete',$list->id)}}">
                    @csrf
                    <button type="submit" class="btn">delete</button>
                </form>
            </a>
        @endforeach
    </div>
</section>
</body>
</html>
