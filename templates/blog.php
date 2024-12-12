 <!-- Banner -->
 <div class="banner">
        <h1>Bienvenido a Young Dev Blog - listado de blogs</h1>
        <p>Aquí encontrarás todos mis artículos y tutoriales recientes.</p>
    </div>

   <!-- Todos los Blogs -->
   <div class="container my-5">
        <h2>Últimos Blogs</h2>
        <?php foreach ($allBlogs as $blog): ?>  
            <div class="blog-post">
                <h3><?php echo $blog["title"] ?></h3> <!-- aqui debemos agregar el url a la pagina con el blog -->
                <p><?php echo $blog["excerpt"] ?> <br> <a href="#">Leer más...</a></p>
            </div>
        <?php endforeach ?>
    </div>