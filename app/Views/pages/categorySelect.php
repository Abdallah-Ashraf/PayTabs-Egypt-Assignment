<hr class="my-4">

    <div class="col-xs-12">         
        <form method="post" action="<?= site_url("/category/create"); ?>" >

            <div class="form-group">
              <label for="exampleFormControlSelect1">SubCategories</label>
              <select class="form-control"  name="value" >
               <?php if($subCategories){
                    foreach ($subCategories as $category){
                        ?>
                  <option id="<?= $category["id"] ?>" value="<?= $category["title"] ?>"><?= $category["title"] ?></option>
                  <?php
                    }
               } ?>
              </select>
            </div>
            <input type="hidden" class="level" value="<?= $level ?>" name="level">
            <input type="hidden" value="" name='subCategoryId<?= $level ?>' >



        </form>
    </div>

    
