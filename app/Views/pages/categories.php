
<section>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">PayTabs Egypt Team</h1>
    <p class="lead">Thank you for informing ,me that my resume has been shortlisted in the screening process .</p>
    <hr class="my-4">
  <p>Job Applicant : Abdallah Ashraf Mohamed</p>
  </div>
</div>
</section>


<section>
    <div class="container card" >
        <div class="row">
            <div class="col-xs-12 col-md-6" id="content">
                <form method="post" action="<?= site_url("/category/create"); ?>" >

                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Categories</label>
                      <select class="form-control"  name="value" >
                       <?php if($mainCategories){
                            foreach ($mainCategories as $category){
                                ?>
                          <option id="<?= $category["id"] ?>" value="<?= $category["title"] ?>">Category <?= $category["title"] ?></option>
                          <?php
                            }
                       } ?>
                      </select>
                    </div>
                    <input type="hidden" class="level"  value="0" name="level">
                    <input type="hidden" value="" name='subCategoryId0' >
                   

                </form>
                
                <form method="post" action="<?= site_url("/category/reset"); ?>" id="resetForm" >
                    <button class="btn bg-dark " style="color:white;">Reset</button>
                </form>
                
                
            </div>    
            <div class="col-xs-12 col-md-6" >
                <p class="lead">Table design in the database for all categories and subs</p>
                <hr class="my-4">
                <p>
<pre>

    CREATE TABLE `category` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
        `value` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
        `subCategoryId` int(11) DEFAULT NULL,
        `level` int(11) NOT NULL,
        PRIMARY KEY (`id`)
       )

</pre>                    
                </p>




            </div> 
        </div>
            
    </div>
</section>