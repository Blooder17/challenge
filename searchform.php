<form class="search-form my-4" role="search" method="get" action="<?php echo home_url('/'); ?>">
    <fieldset>
        <input class="form-control" type="text" name="s" value="<?php the_search_query(); ?>">
        <button class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
    </fieldset>
</form>