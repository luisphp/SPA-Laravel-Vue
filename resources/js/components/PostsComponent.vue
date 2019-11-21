<template>
   
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3 mb-3" v-for="item in list">

                    <!--SE configura el enlace dinámico-->
                    


                    <router-link 
                    class="card-header"
                    :to="{name: 'post', params: {slug: item.slug}}"
                    v-text="item.title" 
                    ></router-link>

                    <div class="card-body">
                        <p>ID: {{item.id}}</p>
                        <p class="card-text" v-text="item.excerpt"></p>
                    </div>
                </div>

                <infinite-loading @infinite="infiniteHandler">
                    

                    <!--Cambios en el componente opcionales-->
                    <div slot="no-more">--</div>
                    <div slot="spinner">Cargando...</div>
                    <div slot="no-results">Sin resultados</div>

                </infinite-loading>

            </div>
        </div>
   
</template>

<script>
    export default {
        data(){
            return {
                list: [],
                page: 0,
            };

        },
        methods: {
             infiniteHandler($state){
                //Se conecta al servidor

                this.page++

                let url='http://localhost/spavuelaravel/public/api/post?page='+this.page

                axios.get(url)
                    .then(response =>{
                        let posts = response.data.data

                        if(posts.length){
                            this.list = this.list.concat(posts)
                            $state.loaded()
                        }else{
                            $state.complete()
                        }
                    });

             }
        }
    }
</script>
