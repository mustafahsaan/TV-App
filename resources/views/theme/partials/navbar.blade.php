<nav class="container  mx-auto p-6"> 
    <div class="flex item-center justify-between py-1">
        <div>
            <a href="{{route('theme.index')}}">
                <img src="{{asset('assets')}}/img/logo.svg" alt="" width="200px">
            </a>
           
        </div>
        <div class="hidden md:flex space-x-8">
          <a class="px-6  py-1  text-xl text-black  hover:text-orange-500" href="{{route('theme.tv')}}">TV Channels</a>
          <a class="px-6  py-1  text-xl text-black  hover:text-orange-500" href="{{route('theme.app')}}">App</a>
          <a class="px-4  py-1  rounded-full text-white bg-orange-500 hover:bg-slate-900" href="{{route('theme.aboute')}}">About Me</a>
        </div>
        
    </div>
   </nav>