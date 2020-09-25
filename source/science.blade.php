@extends('_layouts.master')

@section('body')
	<div class="container mx-auto">
		<div class="flex flex-wrap content-start">
			<h1 class="w-full my-10 px-5 md:px-20 font-title-main text-custom-main-text text-6xl xl:text-6.5xl">Common complaints:</h1>

			<h1 class="question xl:text-5xl md:px-20">* It blocks oxygen flow</h1>
			<div class="answer xl:text-5xl md:pl-40">No it doesn't. Oxygen levels in the blood remain the same after many hours of mask wearing. Ask your doctor, surgeons, ER workers, etc.</div>
			<h1 class="question xl:text-5xl md:px-20">* It's not effective</h1>
			<div class="answer xl:text-5xl md:pl-40">Regular face masks are effective in protecting others in case you are an asymptomatic carrier by blocking respiratory droplets.</div>
			<h1 class="question xl:text-5xl md:px-20">* It's expensive</h1>
			<div class="answer xl:text-5xl md:pl-40">If you can't make your own, many people are making reusable cloth masks and selling them online for $10 or less. Let's help them navigate these hard times!</div>
			<h1 class="question xl:text-5xl md:px-20">* It's my american right to not wear a mask</h1>
			<div class="answer xl:text-5xl md:pl-40">..., &nbsp;  ......, &nbsp; wearing a mask is an act of solidarity. Be a good neighbor, friend, citizen and do the right thing.</div>
			<h1 class="w-full px-5 md:px-20 my-20 font-title-main text-custom-main-text text-6xl sm:text-6.5xl "><a class="underline" href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html">Read CDC guidelines for more Information</a></h1>
			<h1 class="w-full px-5 md:px-20 my-20 font-title-main text-custom-text text-right text-6xl sm:text-6.5xl "><a class="underline" href="/">BACK HOME</a></h1>
		</div>

		<div class="container mx-auto mt-10 p-2 font-title-main text-center text-xs">
			<div class="text-custom-dark-green inline">Site by <a class="text-custom-dark-green underline" href="https://twitter.com/ferpetrelli">Fernando Petrelli</a></div>
			<div class="text-custom-dark-green inline"><span>-</span> Seriously, wear a mask</div>
		</div>
	</div>
@endsection
