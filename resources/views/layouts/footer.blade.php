<a href="{{config('app.map')}}" target="_blank">
	<div class="p-2 text-center bg-light">
		@fa(['icon' => 'building'])<strong>{{config('app.address')}}</strong>
	</div>
</a>
<footer>
	<div class="bg-align-center position-relative" style="background-image: url({{asset('images/backgrounds/columns.jpg')}});">
		<div class="h-100 w-100 bg-primary opacity-8 position-absolute" style="left: 0"></div>
		<div class="container py-6">
			<div class="row text-white">
				<div class="col-lg-6 col-md-8 col-12 mx-auto text-center mb-3">
					<img src="{{asset('images/brand/logo-full.svg')}}" style="width: 380px; max-width: 100%;" class="mb-4">
					<p class="opacity-6">Advocacia simplificada, ágil e livre de morosidade. Comunicação acessível e transparente. Você sempre saberá o que está acontecendo.</p>
				</div>
				<div class="col-12 text-center mb-4">
					<a href="{{mailto('Contato pelo website')}}" class="btn btn-lg btn-outline-light mb-4">Entre em contato com a nossa equipe</a>
					<div class="d-flex justify-content-center">
						<a href="{{social('instagram')}}" target="_blank" class="t-2">@fa(['fa_type' => 'b', 'icon' => 'instagram', 'size' => 'lg'])</a>
						<a href="whatsapp://send?abid={{social('whatsapp')}}" target="_blank" class="t-2">@fa(['fa_type' => 'b', 'icon' => 'whatsapp', 'size' => 'lg'])</a>
					</div>
				</div>
				<div class="col-12 mx-auto text-center">
		            <a class="d-block d-md-inline" href="">Processos Judiciais e as Empresas</a> <span class="mx-2 d-none d-md-inline">|</span>
		            <a class="d-block d-md-inline" href="">Assessoria e Consultoria Empresarial</a> <span class="mx-2 d-none d-md-inline">|</span>
		            <a class="d-block d-md-inline" href="">Planejamento de Negócios</a> <span class="mx-2 d-none d-md-inline">|</span>
		            <a class="d-block d-md-inline" href="">Family Business Law</a>
				</div>
			</div>
		</div>
	</div>
	<div class="p-2 d-flex bg-primary-dark">
		<div class="container">
			<div class="d-flex d-apart text-white opacity-6">
				<div><small>© {{now()->year}} Todos os direitos reservados.</small></div>
				<div class="d-flex">
					<a href="{{social('instagram')}}" target="_blank" class="t-2">@fa(['fa_type' => 'b', 'icon' => 'instagram'])</a>
					<a href="whatsapp://send?abid={{social('whatsapp')}}" target="_blank" class="t-2">@fa(['fa_type' => 'b', 'icon' => 'whatsapp'])</a>
				</div>
			</div>
		</div>
	</div>
</footer>