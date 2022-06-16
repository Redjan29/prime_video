   <!-- modale -->
   <div class="parent-modale" role="dialog">
        <figure class="modale">
            <button aria-label="closed">
                <span class="material-icons">clear</span>
            </button>
            <img src="https://via.placeholder.com/500" alt="picture">
            <figcaption class="desc">
                <h3>title</h3>
                <p>
                   <?php
                   session_start();
                   if($_SESSION["id"]==NULL){

                    echo "<h2> vous pouvez réservé une fois que vous etes connecté <h2>";
                   }
                   else{
                    echo "<a href='#' class= 'subscribe_button'> s'inscrire a lévènement <a>";
                   }
                   ?>
                </p>
                <time datetime="2018-07-07">July 7</time>
            </figcaption>
        </figure>

    </div>
    