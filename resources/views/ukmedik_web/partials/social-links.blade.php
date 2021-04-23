<div class="share-post clearfix">
    <label>Share this Post!</label>
    <ul class="social-rounded">
        <li><a href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }}&title={{ $noticia->titulo }}"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $noticia->titulo }}&via=UkMedik&hashtags=UkMedik"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.google.com/bookmarks/mark?op=edit&bkmk={{ request()->fullUrl() }}&title={{ $noticia->titulo }}&annotation={{ $noticia->titulo }}&labels=UKMedik"><i class="fa fa-google-plus"></i></a></li>
        <!-- <li><a href="#."><i class="fa fa-dribbble"></i></a></li> -->
        <!-- <li><a href="#."><i class="fa fa-youtube"></i></a></li> -->
        <!-- <li><a href="#."><i class="fa fa-vimeo-square"></i></a></li> -->
        <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ request()->fullUrl() }}"><i class="fa fa-linkedin"></i></a></li>
    </ul>
</div>