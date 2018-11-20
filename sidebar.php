<div class="sidebar">

<h3>Website visitors: <?php echo $nr_vizite?></h3>

<h3>Latest News</h3>
        <?php
        $interogare = "SELECT titlu_stire, continut, data FROM stiri";
        $rezultat = $conn->query($interogare);

        if($rezultat->num_rows) {
            while($intrare = $rezultat->fetch_assoc()){
                echo'<h4>'.$intrare['titlu_stire'] .'</h4>';
                echo'<h5>'.$intrare['data'].'</h5>';
                echo'<p>'.$intrare['continut'].'<br/><a href="#">Read more</a></p>';
            }
        }

        ?>

        <!-- insert your sidebar items here -->
        
        <!-- <h4>titlu</h4>
        <h5>August 1st, 2013</h5>
        <p>2013 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <p></p>
        <h4>New Website Launched</h4>
        <h5>August 1st, 2013</h5>
        <p>2013 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p> -->
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>