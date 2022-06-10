	<div class="row mb-5">
		<div class="col-12">
			@title(['text' => $name, 'group' => $position])
		</div>
		<div class="col-lg-8 col-md-6 col-12 order-lg-1 order-md-1 order-2">
			<div class="mb-5">
				{{$bio}}
			</div>

			<div class="mb-5">
				<h2 class="text-primary">Formação Acadêmica</h2>
				<ul class="mb-4">
					{{$academic ?? null}}
				</ul>
			</div>
			@isset($extension)
			<div>
				<h2 class="text-primary">Extensão:</h2>
				<ul class="mb-4">
					{{$extension ?? null}}
				</ul>
			</div>
			@endisset
		</div>
		<div class="col-lg-4 col-md-6 col-10 mx-auto order-lg-2 order-md-2 order-1">
			<img class="w-100 mb-5" src="{{asset('images/socios/'.str_slug($name).'.jpg')}}">
		</div>
	</div>