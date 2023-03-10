@php($main = request()->route()->getName() == 'principal')

<div id="menu" style="{{! $main ? 'padding-bottom: 120px' : null}}">
  <nav class="navbar {{$main ? 'position-absolute' : 'position-fixed'}} py-2 w-100 z-10 t-2 navbar-expand-lg p-0 navbar-dark {{! $main ? 'bg-primary' : null}}">

    @include('layouts.components.logo')
    @include('layouts.components.hamburger')

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link p-4" href="{{route('principal')}}">Principal</a>
        </li>
        <li class="nav-item position-relative">
          <a class="nav-link dropdown-toggle p-4" data-toggle="dropdown" href="#">Nossas práticas</a>
          <div class="dropdown-menu bg-primary-light rounded-0 border-0 animate__animated animate__fadeInUp animate__faster">
            <a class="dropdown-item text-white py-2" href="{{route('praticas.processos')}}">Processos Judiciais e as Empresas</a>
            <a class="dropdown-item text-white py-2" href="{{route('praticas.assessoria')}}">Assessoria e Consultoria Empresarial</a>
            <a class="dropdown-item text-white py-2" href="{{route('praticas.planejamento')}}">Planejamento de Negócios</a>
            <a class="dropdown-item text-white py-2" href="{{route('praticas.family')}}">Family Business Law</a>
            <a class="dropdown-item text-white py-2" href="{{route('praticas.pena')}}">Penal Empresarial</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link p-4" href="{{route('socios')}}">Sócios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-4" href="{{mailto('Contato pelo website')}}">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
</div>