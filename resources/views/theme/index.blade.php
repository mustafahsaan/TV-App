@extends('theme.master')

@section('title','TV')

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
						<img class="inline-block mt-28 hidden xl:block" src="{{asset('assets')}}/img/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png"></div>
						<div>
							<img class="inline-block mt-24 md:mt-0 p-8 md:p-0"  src="{{asset('assets')}}/img/116969931-bedb0100-acd4-11eb-99a9-ff5e0ee9f31f.png"></div>
							<div>
								<img class="inline-block mt-28 hidden lg:block" src="{{asset('assets')}}/img/116969935-c13d5b00-acd4-11eb-82b1-5ad2ff10fb76.png"></div>
							</div>
						</div>
					</div>
				</div>
</section>

@endsection   

@section('content')

<div class="container mx-auto ">
  <div class="flex  justify-center ">
    <div>
      <P class="mt-24 mb-6 w-3/5 text-2xl">Professional presentation of Iraqi and international sports
      </P>
      <span>High quality, analytical studios, distinguished commentary
      </span>
   </div>
    <div>
      <img src="{{asset('assets')}}/img/img1.png" alt=""  width="500px">
  </div>
</div>

<hr>
<div class="flex  justify-center  ">
<div>
<img src="{{asset('assets')}}/img/img4.png" alt=""  width="500px">
</div>
<div>
<P class="mt-24 mb-6 ml-72 w-3/5 text-2xl">Professional presentation of Iraqi and international sports
</P>
<span class="ml-24 ml-72">High quality, analytical studios, distinguished commentary
</span>
</div>
</div>
<hr>
</div>

@endsection




  
