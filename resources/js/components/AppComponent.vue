<template>
	
	<div>
		<header>
		  <div class="bg-dark collapse" id="navbarHeader" style="">
		    <div class="container">
		      <div class="row">
		        <div class="col-sm-8 col-md-7 py-4">
		          <h4 class="text-white">SPA y Componente</h4>
		          <p class="text-muted">Curso basico de JavaScript para entender componentes y Vue Router SPA</p>
		        </div>
		        <div class="col-sm-4 offset-md-1 py-4">
		          <h4 class="text-white">Navegación</h4>
		          <ul class="list-unstyled">
		            <li><router-link :to="{name: 'home'}">Home</router-link></li>
		            <li><router-link :to="{name: 'blog'}">Blog</router-link></li>
		            <li><a href="#" class="text-white">Link 3</a></li>
		          </ul>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="navbar navbar-dark bg-dark shadow-sm">
		    <div class="container d-flex justify-content-between">
		      <a href="#" class="navbar-brand d-flex align-items-center">
		       
		        <strong>Luis Hurtado</strong>
		      </a>
		      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		    </div>
		  </div>
		</header>		

	<transition name="slide-fade" mode="out-in">
	<router-view></router-view>	
	</transition>	

	</div>

</template>