<?php include_once 'header.php'; ?>

      <div class="main-container-services homepage">

  <header class="services">
                        <center><h1> Find A Review! </h1></center>
	</header>
        </div> <!-- #main-container -->


  <div class="main-container-what homepage">
                <article>


                  <div class="container-fluid">
                  <form method = "POST" action="search.php?go" id="searchform">
                    <center><p> What would you like to search? </p></center>
                    <center><select name="searching"></center>
                      <option value="">Select...</option>
                      <option value="searchgames">Game</option>
                      <option value="searchcompanies">Company</option>
                      <option value="searchtags">Genres</option>
                      <option value="expansions">Expansions</option>
                    </select>
                    <input type="text" name="result" />
                    <input type="submit" value="Search"/>
                   </p>
                  </form>
</div>
</div>

                </article>
    </div> <!-- #main-container -->


<?php include_once 'footer.php'; ?>
