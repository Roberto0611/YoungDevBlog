 <!-- Banner -->
 <div class="banner">
        <h1>Bienvenido a Young Dev Blog</h1>
        <p>Un lugar donde comparto mis conocimientos y experiencias en desarrollo.</p>
    </div>

    <!-- About Me -->
    <div class="container my-5">
        <h2>Sobre mí</h2>
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="resources/img/aboutMe.png" alt="Foto sobre mí" class="img-fluid" style="border-radius: 5px;">
            </div>
            <div class="col-md-8">
                <p style="font-size: 20px;">Hola, Soy Roberto Ochoa Cuevas un joven desarrollador apasionado por la tecnologia y la programacion, siempre interesado en aprender nuevas tecnologias y trabajar en diferentes proyectos <br><br> Actualmente mi enfoque principal esta en el desarrollo web principalmente en la parte back-end (html, css, javascript, php) pero tambien tengo conocimientos en otros lenguajes como seria Python. Para mas informacion sobre mi y mis proyectos pueden consultar mi pagina web portfolio. <br><br> <a href="https://roberto0611.github.io/new_portfolio/">Mi portfolio web</a></p>
            </div>
        </div>
    </div>

    <!-- Últimos Blogs -->
    <div class="container my-5">
        <h2>Últimos Blogs</h2>
        <?php foreach ($RecentPosts as $blog): ?>  
            <div class="blog-post">
                <a href="?page=readBlog&id=<?php echo $blog["ID"] ?>"><h3 ><?php echo $blog["title"] ?></h3></a> 
                <p><?php echo $blog["excerpt"] ?> <br> <a href="#">Leer más...</a></p>
            </div>
        <?php endforeach ?>
    </div>