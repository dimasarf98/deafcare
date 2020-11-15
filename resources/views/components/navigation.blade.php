<nav class="navigation w-100 bg-white d-flex shadow" style="height: 64px">
    <a class="flex-fill d-flex justify-content-center align-items-center flex-column {{ Route::is('deafcare.home') ? ' active' : '' }}" href="{{route('deafcare.home')}}">
        <i class="fas fa-home"></i>
        <small>Utama</small> 
    </a>
    <a class="flex-fill d-flex justify-content-center align-items-center flex-column {{ Route::is('deafcare.aktivitas') ? ' active' : '' }}" href="{{route('deafcare.aktivitas')}}">
        <i class="fas fa-list"></i>
        <small>Aktivitas</small> 
    </a>
    <a class="flex-fill d-flex justify-content-center align-items-center flex-column {{ Route::is('deafcare.profil') ? ' active' : '' }}" href="{{route('deafcare.profil')}}">
        <i class="fas fa-user"></i>
        <small>Profil</small> 
    </a>
</nav>