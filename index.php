<?php require 'inc/head.php'; 

if (!isset ($_SESSION['basket']))
$_SESSION['basket']=[]; //définition du tableau '$_SESSION['basket']


// on vérifie si des données sont bien envoyées au tableau
if (isset($_GET['id'])&& isset($_GET['name'])) {
  $_SESSION['basket'][] = ['id'=>$_GET['id'],'name'=>$_GET['name'] ];
}

?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <a  href="?id=46&name=pecan" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </a>
            </button>
          </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?id=36&name=chips" class="btn btn-primary"> 
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
                <a  href="?id=58&name=chococookie" class="btn btn-primary">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
                <a  href="?id=32&name=cookie" class="btn btn-primary">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true" type="submit" method="get" action="cart.php" name="cart"></span> Add to cart
                </a>
            </form>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>