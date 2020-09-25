@extends('_layouts.master')

@section('body')
	<div class="container mx-auto">
		<div class="flex flex-wrap content-center full-screen px-3 leading-tight">
			<h1 class="w-full font-title-main text-custom-main-text animation-fade-in-bottom text-6xl sm:text-6.5xl xl:text-7.5xl xl:px-10 xxl:text-8xl">Should YOU be wearing a mask ?</h1>
			<h2 class="w-full font-title-main text-custom-text text-right text-7xl xl:text-8xl mr-8 xl:mr-40">
				<span class="animation-bounce-in inline-block"><a class="underline" href="/science">YES</a></span>
			</h2>
		</div>

		<div class="container mx-auto absolute bottom-0 p-2 font-title-main text-center animation-fade-in-footer text-xs">
			<div class="text-custom-dark-green inline">Site by <a class="text-custom-dark-green underline" href="https://twitter.com/ferpetrelli">Fernando Petrelli</a></div>
			<div class="text-custom-dark-green inline"><span>-</span> Seriously, wear a mask</div>
		</div>
	</div>
@endsection
