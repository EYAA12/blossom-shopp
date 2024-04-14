<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />



  <title>Blossom shop</title>

  

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/gallerystyle.css" rel="stylesheet" />
  
 
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" >
            <span>
              Blossom shop
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                
                 
  
                <li class="nav-item active">
                  <a class="nav-link" href="gallery.html"> Gallery </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sign-up.html">Account</a>
                </li>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="buy.html">Buy now</a>


              </li>
              <li class="nav-item">
                <a class="nav-link" href= "loginadmini.html">Administrator</a>
              </li>
              </ul>

            </div>
            
            <div class="quote_btn-container ">
              
              <a href="cart.html">
                <img src="images/cart.png" alt="">
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
             
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- gallery section -->
  <section class="gallery_section layout_padding">

    <div class="heading_container justify-content-center">
      <h2>
     
      </section>
      <section class="menu" id="menu">
      <div class="titre">
        <div class="heading_container justify-content-center">
            <h2>
              Our Collection
            </h2>
          </div>
          <p>Choose from our range of rose bouquets the one that best expresses your emotions </p>
      </div>
      <div class="contenu">
          <div class="box">
              <div class="imbox">
                  <img src="im1.jpg" alt="">
              </div>
              <div class="text">
                  <h3>PRICE : 120 D </h3>
              </div>
              <label for="q">Quantité: </label>
      <select id="qt" name="q">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
      </select>
      <button type="button" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>
      
      
      <div class="dropdown">
          <div id="cart">
              <p><span id="in-cart-items-num">0</span> Articles</p>
          </div>
      
          <ul id="cart-dropdown" hidden>
              <li id="empty-cart-msg"><a>Votre panier est vide</a></li>
              <li class="go-to-cart hidden"><a href="/panier/">Voir le panier</a></li>
          </ul>
      </div>
      <table class="table">
          <thead>
              <tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
          </thead>
          <tbody id="cart-tablebody"></tbody>
      </table>
      
      <p>Sous total : <span class="subtotal"></span>D</p>
      
      <button id="confirm-command">Passer la commande</button>
      
      </div>
          <div class="box">
              <div class="imbox">
                  <img src="im2.jpg" alt="">
              </div>
              <div class="text">
                  <h3>PRICE : 199 D </h3>
              </div>
              <label for="q">Quantité: </label>
      <select id="qt" name="q">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
      </select>
      <button type="button" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>
      <div class="dropdown">
          <div id="cart">
              <p><span id="in-cart-items-num">0</span> Articles</p>
          </div>
      
          <ul id="cart-dropdown" hidden>
              <li id="empty-cart-msg"><a>Votre panier est vide</a></li>
              <li class="go-to-cart hidden"><a href="/panier/">Voir le panier</a></li>
          </ul>
      </div>
      <table class="table">
          <thead>
              <tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
          </thead>
          <tbody id="cart-tablebody"></tbody>
      </table>
      
      <p>Sous total : <span class="subtotal"></span>D</p>
      
      <button id="confirm-command">Passer la commande</button>
          </div>
          <div class="box">
              <div class="imbox">
                  <img src="im3.jpg" alt="">
              </div>
              <div class="text">
                  <h3>PRICE : 119 D </h3>
              </div>
              <label for="q">Quantité: </label>
      <select id="qt" name="q">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
      </select>
      <button type="button" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>
      <div class="dropdown">
          <div id="cart">
              <p><span id="in-cart-items-num">0</span> Articles</p>
          </div>
      
          <ul id="cart-dropdown" hidden>
              <li id="empty-cart-msg"><a>Votre panier est vide</a></li>
              <li class="go-to-cart hidden"><a href="/panier/">Voir le panier</a></li>
          </ul>
      </div> 
      <table class="table">
          <thead>
              <tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
          </thead>
          <tbody id="cart-tablebody"></tbody>
      </table>
      
      <p>Sous total : <span class="subtotal"></span>D</p>
      
      <button id="confirm-command">Passer la commande</button>  
      </div>
          <div class="box">
              <div class="imbox">
                  <img src="im4.jpg" alt="">
              </div>
              <div class="text">
                  <h3>PRICE : 180 D</h3>
              </div>
              <label for="q">Quantité: </label>
      <select id="qt" name="q">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
      </select>
      <button type="button" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>
      <div class="dropdown">
          <div id="cart">
              <p><span id="in-cart-items-num">0</span> Articles</p>
          </div>
      
          <ul id="cart-dropdown" hidden>
              <li id="empty-cart-msg"><a>Votre panier est vide</a></li>
              <li class="go-to-cart hidden"><a href="/panier/">Voir le panier</a></li>
          </ul>
      </div>  
      <table class="table">
          <thead>
              <tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
          </thead>
          <tbody id="cart-tablebody"></tbody>
      </table>
      
      <p>Sous total : <span class="subtotal"></span>D</p>
      
      <button id="confirm-command">Passer la commande</button> 
      </div>
          <div class="box">
              <div class="imbox">
                  <img src="im5.jpg" alt="">
              </div>
              <div class="text">
                  <h3>PRICE : 369 D</h3>
              </div>
              <label for="q">Quantité: </label>
              <select id="qt" name="q">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
              </select>
              <button type="button" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>
              
              
              <div class="dropdown">
                  <div id="cart">
                      <p><span id="in-cart-items-num">0</span> Articles</p>
                  </div>
              
                  <ul id="cart-dropdown" hidden>
                      <li id="empty-cart-msg"><a>Votre panier est vide</a></li>
                      <li class="go-to-cart hidden"><a href="/panier/">Voir le panier</a></li>
                  </ul>
              </div>
              <table class="table">
                  <thead>
                      <tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
                  </thead>
                  <tbody id="cart-tablebody"></tbody>
              </table>
              
              <p>Sous total : <span class="subtotal"></span>D</p>
              
              <button id="confirm-command">Passer la commande</button>
              
              </div>
          <div class="box">
              <div class="imbox">
                  <img src="im6.jpg" alt="">
              </div>
              <div class="text">
                  <h3>PRICE : 120 D </h3>
              </div>
              <select id="qt" name="q">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
              </select>
              <button type="button" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>
              
              
              <div class="dropdown">
                  <div id="cart">
                      <p><span id="in-cart-items-num">0</span> Articles</p>
                  </div>
              
                  <ul id="cart-dropdown" hidden>
                      <li id="empty-cart-msg"><a>Votre panier est vide</a></li>
                      <li class="go-to-cart hidden"><a href="/panier/">Voir le panier</a></li>
                  </ul>
              </div>
              <table class="table">
                  <thead>
                      <tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
                  </thead>
                  <tbody id="cart-tablebody"></tbody>
              </table>
              
              <p>Sous total : <span class="subtotal"></span>D</p>
              
              <button id="confirm-command">Passer la commande</button>
              
              </div>
             
          <div class="box">
              <div class="imbox">
                  <img src="im7.jpg" alt="">
              </div>
              <div class="text">
                  <h3>PRICE : 144 D</h3>
              </div>
              <label for="q">Quantité: </label>
              <select id="qt" name="q">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
              </select>
              <button type="button" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>
              
              
              <div class="dropdown">
                  <div id="cart">
                      <p><span id="in-cart-items-num">0</span> Articles</p>
                  </div>
              
                  <ul id="cart-dropdown" hidden>
                      <li id="empty-cart-msg"><a>Votre panier est vide</a></li>
                      <li class="go-to-cart hidden"><a href="/panier/">Voir le panier</a></li>
                  </ul>
              </div>
              <table class="table">
                  <thead>
                      <tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
                  </thead>
                  <tbody id="cart-tablebody"></tbody>
              </table>
              
              <p>Sous total : <span class="subtotal"></span>D</p>
              
              <button id="confirm-command">Passer la commande</button>
              
              </div>
          <div class="box">
              <div class="imbox">
                  <img src="im8.jpg" alt="">
              </div>
              <div class="text">
                  <h3>PRICE : 199 D</h3>
              </div>
              <label for="q">Quantité: </label>
              <select id="qt" name="q">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
              </select>
              <button type="button" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>
              
              
              <div class="dropdown">
                  <div id="cart">
                      <p><span id="in-cart-items-num">0</span> Articles</p>
                  </div>
              
                  <ul id="cart-dropdown" hidden>
                      <li id="empty-cart-msg"><a>Votre panier est vide</a></li>
                      <li class="go-to-cart hidden"><a href="/panier/">Voir le panier</a></li>
                  </ul>
              </div>
              <table class="table">
                  <thead>
                      <tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
                  </thead>
                  <tbody id="cart-tablebody"></tbody>
              </table>
              
              <p>Sous total : <span class="subtotal"></span>D</p>
              
              <button id="confirm-command">Passer la commande</button>
              
              </div>
      </div>
      </div>
      </div>
      <div class="titre">
          <a href="#" class="btn1">Voir Plus</a>
       </div>
  <!-- end gallery section -->


  

 


</body>

</html>
