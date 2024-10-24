
@extends('theme.master')
@section('title','Channels')


@section('hero')
<section>
	<div class="bg-black text-white py-20">
		<div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
			<div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
				<h1 class="text-3xl md:text-5xl p-2 text-orange-500 tracking-loose">Shwf Tv</h1>
				<h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">It is a site for you and your family to watch the most enjoyable TV channels
				</h2>
				
			</div>
			<div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
				<div class="h-48 flex flex-wrap content-center">
					<div>
						<img class="inline-block mt-28  xl:block" src="{{asset('assets')}}/img/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png"></div>
						<div>
							<img class="inline-block mt-24 md:mt-0 p-8 md:p-0"  src="{{asset('assets')}}/img/116969931-bedb0100-acd4-11eb-99a9-ff5e0ee9f31f.png"></div>
							<div>
								<img class="inline-block mt-28  lg:block" src="{{asset('assets')}}/img/116969935-c13d5b00-acd4-11eb-82b1-5ad2ff10fb76.png"></div>
							</div>
						</div>
					</div>
				</div>
</section>

@endsection   

@section('content')
<div class=" flex w-11/12 mx-auto bg-black m-2 p-2 rounded-full">
    <div class="flex w-1/2">
        <h1 class=" text-white p-2  m-4  text-2xl">Channels</h1>
    </div>
    <div class="hidden md:flex  w-1/2 justify-end space-x-8 p-2 text-white  m-4  text-2xl self-start">
        <a href="">All</a>
        <a href="">Sport</a>
        <a href="">Moves</a>
        <a href="">Eedshen</a>  
    </div>
</div>








  <div class="mx-auto p-5 sm:p-10 md:p-2">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-6 gap-4">
        <!-- CARD 1 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col">
            <a href="#"></a>
            <div class="relative"><a href="{{route('theme.show')}}">
                    <img class="w-full"
                        src="/assets/img/hero2.png"
                        alt="Sunset in the mountains">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>
                <a href="#!">
                    <div
                        class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        sport
                    </div>
                </a>
            </div>
            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <span class="ml-0">BinSport</span>
                </span>
            </div>
        </div>

                <!-- CARD 1 -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <a href="#"></a>
                    <div class="relative"><a href="#">
                            <img class="w-full"
                                src="/assets/img/hero2.png"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>
                        <a href="#!">
                            <div
                                class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                sport
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="ml-0">BinSport</span>
                        </span>
                    </div>
                </div>

                

                        <!-- CARD 1 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col">
            <a href="#"></a>
            <div class="relative"><a href="#">
                    <img class="w-full"
                        src="/assets/img/hero2.png"
                        alt="Sunset in the mountains">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>
                <a href="#!">
                    <div
                        class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        sport
                    </div>
                </a>
            </div>
            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <span class="ml-0">BinSport</span>
                </span>
            </div>
        </div>




                <!-- CARD 1 -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <a href="#"></a>
                    <div class="relative"><a href="#">
                            <img class="w-full"
                                src="/assets/img/hero2.png"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>
                        <a href="#!">
                            <div
                                class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                sport
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="ml-0">BinSport</span>
                        </span>
                    </div>
                </div>

                


                        <!-- CARD 1 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col">
            <a href="#"></a>
            <div class="relative"><a href="#">
                    <img class="w-full"
                        src="/assets/img/hero2.png"
                        alt="Sunset in the mountains">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>
                <a href="#!">
                    <div
                        class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        sport
                    </div>
                </a>
            </div>
            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <span class="ml-0">BinSport</span>
                </span>
            </div>
        </div>





                <!-- CARD 1 -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <a href="#"></a>
                    <div class="relative"><a href="#">
                            <img class="w-full"
                                src="/assets/img/hero2.png"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>
                        <a href="#!">
                            <div
                                class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                sport
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="ml-0">BinSport</span>
                        </span>
                    </div>
                </div>

                



                        <!-- CARD 1 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col">
            <a href="#"></a>
            <div class="relative"><a href="#">
                    <img class="w-full"
                        src="/assets/img/hero2.png"
                        alt="Sunset in the mountains">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>
                <a href="#!">
                    <div
                        class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        sport
                    </div>
                </a>
            </div>
            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <span class="ml-0">BinSport</span>
                </span>
            </div>
        </div>



                <!-- CARD 1 -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <a href="#"></a>
                    <div class="relative"><a href="#">
                            <img class="w-full"
                                src="/assets/img/hero2.png"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>
                        <a href="#!">
                            <div
                                class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                sport
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="ml-0">BinSport</span>
                        </span>
                    </div>
                </div>

                

                        <!-- CARD 1 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col">
            <a href="#"></a>
            <div class="relative"><a href="#">
                    <img class="w-full"
                        src="/assets/img/hero2.png"
                        alt="Sunset in the mountains">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>
                <a href="#!">
                    <div
                        class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        sport
                    </div>
                </a>
            </div>
            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <span class="ml-0">BinSport</span>
                </span>
            </div>
        </div>





    </div>

</div>


@endsection

































  
