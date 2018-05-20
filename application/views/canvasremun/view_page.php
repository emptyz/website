<section id="page-title" class="page-title-mini">

    <div class="container clearfix">
        <h1><?php echo $record['judul']; ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $record['judul']; ?></li>
        </ol>
    </div>

</section><!-- #page-title end -->

<section id="content">

    <div class="content-wrap">	
        <div class="container clearfix">
        
        <p><?php echo $record['isi_halaman']; ?></p>
        
        </div>
        
    </div>
</section>