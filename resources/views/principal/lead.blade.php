<section id="lead-bg" class="bg-align-center position-relative text-white" style="background-image: url({{asset('images/backgrounds/downtown.jpg')}})">
	<div class="h-100 w-100 bg-primary opacity-8 position-absolute"></div>
	<div class="h-100vh row align-items-center position-relative no-gutters">
		<div id="lead-text" class="col-lg-5 col-md-6 col-10 offset-lg-2 offset-md-2 offset-1 mt-4">
			<div class="d-flex mb-2">
				<a href="{{social('instagram')}}" target="_blank" class="t-2">@fa(['fa_type' => 'b', 'icon' => 'instagram', 'size' => 'lg'])</a>
				<a href="whatsapp://send?abid={{social('whatsapp')}}" target="_blank" class="t-2">@fa(['fa_type' => 'b', 'icon' => 'whatsapp', 'size' => 'lg'])</a>
			</div>
			<div class="mb-5">
				<h1 class="font-lg mb-3">Advocacia Inovadora e Eficiente para a sua Empresa</h1>
				<h5 class="text-light font-thin">Empresarial / Assessoria / Consultoria / Planejamento de negócios / Planejamento Sucessório</h5>
			</div>
			<a href="{{mailto('Contato pelo website')}}" class="btn btn-lg btn-outline-light mb-3">@fa(['icon' => 'envelope'])Vamos conversar?</a>
			<div>
				<a href="whatsapp://send?abid={{social('whatsapp')}}" target="_blank" class="t-2">@fa(['fa_type' => 'b', 'icon' => 'whatsapp', 'size' => 'lg']){{social('whatsapp')}}</a>
			</div>
		</div>
	</div>
</section>
<a href="{{config('app.map')}}" target="_blank">
	<div class="p-2 text-center bg-light mb-6">
		@fa(['icon' => 'building'])<strong>{{config('app.address')}}</strong>
	</div>
</a>