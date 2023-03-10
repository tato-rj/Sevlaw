@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container">
	<div class="row">
		<div class="col-12 mb-5">
			@title(['text' => 'PENA EMPRESARIAL', 'group' => 'Nossas práticas'])

			<p>Nossa sociedade atua em casos envolvendo todos os tipos de crimes previsto no Código Penal Brasileiro e Legislação Complementar, especialmente:</p>

			<ul>
				<li>Lavagem de dinheiro;</li>
			    <li>Corrupção;</li>
			    <li>Crimes ambientais;</li>
			    <li>Crimes contra à ordem tributária;</li>
			    <li>Crimes cometidos por meios eletrônicos;</li>
			    <li>Crimes contra a Saúde Pública;</li>
			    <li>Crimes contra o consumidor;</li>
			    <li>Concorrência desleal;</li>
			    <li>Crimes contra a propriedade intelectual;</li>
			    <li>Crimes contra o sistema financeiro;</li>
			    <li>Crimes falimentares;</li>
			    <li>Acidentes de trabalho;</li>
			    <li>Fraudes em licitações;</li>
			    <li>Fraudes Previdenciárias;</li>
			    <li>Crimes contra a honra.</li>
			</ul>
		</div>
	</div>
	@include('sections.cta')
</section>
@endsection