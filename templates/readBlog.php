
    <!-- Contenido del Blog -->
    <div class="container my-5">
        <h1><?php echo $selectedPost[0]["title"] ?></h1>
        <p class="text-muted">Publicado el <?php echo $selectedPost[0]["published-o"] ?> </p> 
        <p><?php echo $selectedPost[0]["content"] ?></p>
        <!-- Enlace para volver al listado de blogs -->
        <a href="?page=blog" class="btn btn-primary mt-4">Volver al listado de blogs</a>
    </div>