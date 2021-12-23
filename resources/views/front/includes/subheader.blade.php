<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h2 class="title">{{$category->name}}</h2>
            <!--BreadCrumbs area-->

            <a href="{{route('category', $category->slug)}}">
                {{$category->name}}
            </a>
            <span>
                <i class="icon-right-open"></i>
            </span>


            @isset($category->childrens)
                @foreach($category->childrens as $childern)

                    <a href="{{route('category', $childern->slug )}}">
                        {{$childern->name}}
                    </a>
                    <span>
                        <i class="icon-right-open"></i>
                    </span>

                @endforeach
            @endisset

            <a href="{{route('home')}}">
                {{__('site/mainhome.Home')}}
            </a>


        </div>
    </div>
</div>
