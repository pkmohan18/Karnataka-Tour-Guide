<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Karnataka Tour Guide</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html"><img src="./images/bg.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <div class="nav-det">
                  <li class="nav-item active">
                    <a class="nav-link" href="top15.html">Top 15 destinations <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="http://districts.nic.in/districts.php?sid=KA">Districts <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <div class="dropdown">
                      <button class="dropbtn">Explore</button>
                      <div class="dropdown-content">
                        <a href="https://www.karnatakatourism.org/tour-item/tranquility/">Tranquility</a>
                        <a href="https://www.karnatakatourism.org/tour-item/spirituality/">Spirituality</a>
                        <a href="https://www.karnatakatourism.org/tour-item/festivals/">Festivals</a>
                        <a href="https://www.karnatakatourism.org/tour-item/heritage/">Heritage</a>
                        <a href="https://www.karnatakatourism.org/tour-item/wildlife/">The Wild</a>
                        <a href="https://www.karnatakatourism.org/tour-item/grandeur/">Grandeur</a>
                        <a href="https://www.karnatakatourism.org/tour-item/cuisines/">Cuisines</a>
                        <a href="https://www.karnatakatourism.org/tour-item/artforms/">Art Forms</a>
                      </div>
                    </div>
                  </li>
                </div>
              </ul>
              <form class="form-inline my-2 my-lg-0" style="display: inline; font-weight: bold;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="alert('Loged out successfully...');window.location.href='index.html'">Log out</button>
              </form>
            </div>
          </nav>
    </header>
    <main>
        <section class="carousal">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            </ol>
            <div class="ind-carousal">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://www.karnatakatourism.org/wp-content/uploads/2020/05/om-beach-karnataka.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="carousal-content">
                      <h5>Discover Serenity</h5>
                      <p>Uttara Kannada is surrounded by prime pilgrimage centers and pristine beaches that will always be etched to your memory.</p>
                    </div>
                    <div class="carousal-btn">
                     <a href="https://www.karnatakatourism.org/tour-item/uttara-kannada/"><button>EXPLORE UTTARA KANNADA</button></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://www.karnatakatourism.org/wp-content/uploads/2020/05/Bandipura-national-park-karnataka.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="carousal-content">
                      <h5>Mesmerizing Wildlife</h5>
                      <p>Experience wildlife and nature in their full glory with a forest safari in Nagarhole National Park. 
                      </p>
                    </div>
                    <div class="carousal-btn">
                     <a href="https://www.karnatakatourism.org/tour-item/nagarahole-national-park/"><button>EXPLORE NAGARAHOLE</button></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://www.karnatakatourism.org/wp-content/uploads/2020/05/Elephant-Procession-Banner-1920x850-1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="carousal-content">
                      <h5>Mysuru Dasara</h5>
                      <p>The Greatest Dussehra Celebration - Mysuru Dasara is a royal cultural fest, drawing tourists from across the world. With grand processions, cultural offerings, and traditional art forms, it is a festival everyone must visit. 
                      </p>
                    </div>
                    <div class="carousal-btn">
                     <a href="https://www.karnatakatourism.org/mysore-dasara/"><button>EXPLORE MORE</button></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://www.karnatakatourism.org/wp-content/uploads/2020/05/stone-chariot-hampi-karnataka.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="carousal-content">
                      <h5>Experience Heritage</h5>
                      <p>Hampi, the city housing the remnants and architectural marvels of the erstwhile Vijayanagara Empire.
                      </p>
                    </div>
                    <div class="carousal-btn">
                     <a href="https://www.karnatakatourism.org/tour-item/hampi/"><button>EXPLORE HAMPI</button></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://www.karnatakatourism.org/wp-content/uploads/2017/08/mysore_palace-1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="carousal-content">
                      <h5>Embrace Royalty</h5>
                      <p>The epitome of cultural grandeur and rich heritage, Mysuru is not just a city, it’s an emotion. 
                      </p>
                    </div>
                    <div class="carousal-btn">
                     <a href="https://www.karnatakatourism.org/tour-item/mysuru/"><button>EXPLORE MYSURU</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>
        <section class="dist">
          <p style="color: rgb(150, 0, 0); font-weight: 900; font-size: 35px;letter-spacing: 3px; text-align: center; text-shadow: brown; background-color: rgba(0, 0, 0, 0.295); border-radius: 10px; padding: 10px; margin:20px 50px;">--Districts--</p>
          <div class="rt-container">
            <div class="col-rt-12">
                <ul class="image-list-small">
                  <li>
                    <a href="https://bagalkot.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://cdn.s3waas.gov.in/s3a1d33d0dfec820b41b54430b50e96b5c/uploads/2018/07/2018072683-300x204.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://bagalkot.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Bagalkote</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://ballari.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://cdn.s3waas.gov.in/s37c590f01490190db0ed02a5070e20f01/uploads/bfi_thumb/2018121381-1-olw9xm8t8mk7g6ykho04axect7h6ceblsgc42lnm50.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://ballari.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Ballari (Bellary)</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://www.karnatakatourism.org/tour-item/belagavi/" style="background-image: url(https://www.karnatakatourism.org/wp-content/uploads/2020/06/Kamal-Basti.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://www.karnatakatourism.org/tour-item/belagavi/">Belagavi (Belgaum)</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://bangalorerural.nic.in/en/tourism/" style="background-image: url(https://cdn.s3waas.gov.in/s3aba3b6fd5d186d28e06ff97135cade7f/uploads/bfi_thumb/2018070315-e1533810790454-olwbfvhg70rrq1t3jbwp3j5dj7rx596uh7nu0w0w72.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://bangalorerural.nic.in/en/tourism/">Bengaluru (Bangalore) Rural</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://bengaluruurban.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://cdn.s3waas.gov.in/s33621f1454cacf995530ea53652ddf8fb/uploads/bfi_thumb/2018073097-olw8976aensfaodp5rf8wgwwiwzu2lxqpmfa9m1zb2.jpg); background-position: center;"></a>
                    <div class="details">
                      <h3><a href="https://bengaluruurban.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Bengaluru (Bangalore) Urban</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://bidar.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://cdn.s3waas.gov.in/s32ca65f58e35d9ad45bf7f3ae5cfd08f1/uploads/bfi_thumb/2018081635-olw7lgqyz4d4gw2u0pznhz065h7omz2b8d6uew0r8q.png);"></a>
                    <div class="details">
                      <h3><a href="https://bidar.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Bidar</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://bijapur.gov.in/en/tourist-places/" style="background-image: url(https://i.ytimg.com/vi/c6CLe4PbJh0/maxresdefault.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://bijapur.gov.in/en/tourist-places/">Bijapur (Vijayapura)</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://chamrajnagar.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://cdn.s3waas.gov.in/s3959a557f5f6beb411fd954f3f34b21c3/uploads/bfi_thumb/2019021694-olwaftec0tesck6n38swy4pt63i0v91j6qqa9rhkvy.jpg);background-position: center;"></a>
                    <div class="details">
                      <h3><a href="https://chamrajnagar.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Chamarajanagar</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://www.karnatakatourism.org/tour-item/chikkaballapur/" style="background-image: url(https://www.karnatakatourism.org/wp-content/uploads/2020/06/chikb4-550x550.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://www.karnatakatourism.org/tour-item/chikkaballapur/">Chikkaballapur</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://chikkamagaluru.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/6e/54/05/img-20180922-090745-hdr.jpg?w=1000&h=800&s=1);"></a>
                    <div class="details">
                      <h3><a href="https://chikkamagaluru.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Chikkamagaluru (Chikmagalur)</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://chitradurga.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://cdn.s3waas.gov.in/s3a8ecbabae151abacba7dbde04f761c37/uploads/bfi_thumb/2018091847-olwbdqeomlu9a0x21elaf2lktmbtm2ouum60o776da.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://chitradurga.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Chitradurga</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://dk.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://static2.tripoto.com/media/filter/tst/img/91747/SpotDocument/1542122788_1542122723427.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://dk.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Dakshina Kannada</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://davanagere.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://cdn.s3waas.gov.in/s3a8e864d04c95572d1aece099af852d0a/uploads/bfi_thumb/2018082988-olwbipxuvyo0vjo9x2715bama7qxg9hl7arrc1szcu.jpg);background-position: center;"></a>
                    <div class="details">
                      <h3><a href="https://davanagere.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Davanagere</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://www.karnatakatourism.org/tour-item/dharwad/" style="background-image: url(https://hubballitravels.com/images/blog.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://www.karnatakatourism.org/tour-item/dharwad/">Dharwad</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://gadag.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://cdn.s3waas.gov.in/s3912d2b1c7b2826caf99687388d2e8f7c/uploads/bfi_thumb/2018073039-olwajoifit3iwwnlj6r6v71xokddta8q2j488bsbfm.gif);"></a>
                    <div class="details">
                      <h3><a href="https://gadag.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Gadag</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://hassan.nic.in/en/tourism/" style="background-image: url(https://www.coffeebeanvilla.com/wp-content/uploads/elementor/thumbs/hassan-place-o2g4vsntjzcgkd8nv108adkq2qci41ugtjhka16cua.jpg); background-position: center;"></a>
                    <div class="details">
                      <h3><a href="https://hassan.nic.in/en/tourism/">Hassan</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://haveri.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/" style="background-image: url(https://cdn.s3waas.gov.in/s3d5cfead94f5350c12c322b5b664544c1/uploads/bfi_thumb/2018080219-olwckx3podibtnk6cr0hqob9i55xm8f3rrf0ur7daa.jpg); background-position: center;"></a>
                    <div class="details">
                      <h3><a href="https://haveri.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b3%8b%e0%b2%a6%e0%b3%8d%e0%b2%af%e0%b2%ae/">Haveri</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://www.karnatakatourism.org/tour-item/kalaburagi/" style="background-image: url(https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/fe/20/6f/caption.jpg?w=300&h=300&s=1);"></a>
                    <div class="details">
                      <h3><a href="https://www.karnatakatourism.org/tour-item/kalaburagi/">Kalaburagi (Gulbarga)</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://www.karnatakatourism.org/tour-item/kodagu/" style="background-image: url(	https://www.rentmytent.in/images/blogs/D1DEF380/709E7270.webp);"></a>
                    <div class="details">
                      <h3><a href="https://www.karnatakatourism.org/tour-item/kodagu/">Kodagu</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://www.karnatakatourism.org/tour-item/kolar/" style="background-image: url(https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/df/2a/c1/lrm-export-20160902-230306.jpg?w=500&h=-1&s=1);"></a>
                    <div class="details">
                      <h3><a href="https://www.karnatakatourism.org/tour-item/kolar/">Kolar</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://koppal.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b2%bf-%e0%b2%b8%e0%b3%8d%e0%b2%a5%e0%b2%b3%e0%b2%97%e0%b2%b3%e0%b3%81/" style="background-image: url(https://renghaholidays.com/assets/images/tour/1595856190_0eeaa0711c1ff0561842.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://koppal.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b2%bf-%e0%b2%b8%e0%b3%8d%e0%b2%a5%e0%b2%b3%e0%b2%97%e0%b2%b3%e0%b3%81/">Koppal</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://www.karnatakatourism.org/tour-item/mandya/" style="background-image: url(https://www.karnatakatourism.org/wp-content/uploads/2020/06/mandya1-1.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://www.karnatakatourism.org/tour-item/mandya/">Mandya</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://www.karnatakatourism.org/tour-item/mysuru/" style="background-image: url(https://s3.ap-south-1.amazonaws.com/gw-media/uploads/cms-media/package-gallery/malabar-hills-Mysore38-938-286.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://www.karnatakatourism.org/tour-item/mysuru/">Mysuru (Mysore)</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://raichur.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b2%bf-%e0%b2%b8%e0%b3%8d%e0%b2%a5%e0%b2%b3%e0%b2%97%e0%b2%b3%e0%b3%81/" style="background-image: url(https://chaloghumane.com/wp-content/uploads/2021/09/Raichur.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://raichur.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b2%bf-%e0%b2%b8%e0%b3%8d%e0%b2%a5%e0%b2%b3%e0%b2%97%e0%b2%b3%e0%b3%81/">Raichur</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://ramanagara.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b2%bf-%e0%b2%b8%e0%b3%8d%e0%b2%a5%e0%b2%b3%e0%b2%97%e0%b2%b3%e0%b3%81/" style="background-image: url(https://d2rdhxfof4qmbb.cloudfront.net/wp-content/uploads/20201007162826/iStock-1168730502.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://ramanagara.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b2%bf-%e0%b2%b8%e0%b3%8d%e0%b2%a5%e0%b2%b3%e0%b2%97%e0%b2%b3%e0%b3%81/">Ramanagara</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://www.karnatakatourism.org/tour-item/shivamogga/" style="background-image: url(https://www.mustvisitplace.com/wp-content/uploads/2019/03/3a0fnnk2ndh11.jpg); background-position: center;"></a>
                    <div class="details">
                      <h3><a href="https://www.karnatakatourism.org/tour-item/shivamogga/">Shivamogga (Shimoga)</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://tumkur.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b2%bf-%e0%b2%b8%e0%b3%8d%e0%b2%a5%e0%b2%b3%e0%b2%97%e0%b2%b3%e0%b3%81/" style="background-image: url(https://cdn.s3waas.gov.in/s3edfbe1afcf9246bb0d40eb4d8027d90f/uploads/bfi_thumb/2018082085-olwdnbsbvvjb3gecl6afczd16q5us7m1qguddw7w8u.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://tumkur.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b2%bf-%e0%b2%b8%e0%b3%8d%e0%b2%a5%e0%b2%b3%e0%b2%97%e0%b2%b3%e0%b3%81/">Tumakuru (Tumkur)</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://www.karnatakatourism.org/tour-item/udupi/" style="background-image: url(https://www.karnatakatourism.org/wp-content/uploads/2020/06/Kodi_1-550x550.jpg); background-position: center;"></a>
                    <div class="details">
                      <h3><a href="https://www.karnatakatourism.org/tour-item/udupi/">Udupi</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="http://uttarakannada.nic.in/tourismKannada.html" style="background-image: url(https://www.karnatakatourism.org/wp-content/uploads/2020/06/murudeshwara-image-banner.jpg);"></a>
                    <div class="details">
                      <h3><a href="http://uttarakannada.nic.in/tourismKannada.html">Uttara Kannada (Karwar)</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="karnatakatourism.org/karnatakas-newest-addition-vijayanagara-the-31st-district/" style="background-image: url(https://gumlet.assettype.com/swarajya%2F2018-10%2Fff2498ff-5305-45ce-807c-38ddda4fe47b%2F277a5cb4_8382_43ad_a37c_68f67a185a80.jpg?q=75&auto=format%2Ccompress&w=1200);"></a>
                    <div class="details">
                      <h3><a href="karnatakatourism.org/karnatakas-newest-addition-vijayanagara-the-31st-district/">Vijayanagara</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                  <li>
                    <a href="https://yadgir.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b2%bf-%e0%b2%b8%e0%b3%8d%e0%b2%a5%e0%b2%b3%e0%b2%97%e0%b2%b3%e0%b3%81/" style="background-image: url(https://www.karnatakatourism.org/wp-content/uploads/2020/06/Balichakra1.jpg);"></a>
                    <div class="details">
                      <h3><a href="https://yadgir.nic.in/%e0%b2%aa%e0%b3%8d%e0%b2%b0%e0%b2%b5%e0%b2%be%e0%b2%b8%e0%b2%bf-%e0%b2%b8%e0%b3%8d%e0%b2%a5%e0%b2%b3%e0%b2%97%e0%b2%b3%e0%b3%81/">Yadgir</a></h3>
                      <p class="image-author"></p>
                    </div>
                  </li>
                </ul>
      </div>
      </div>
        </section>
    </main>
    <footer>
      Contact Us at: <a href="mailto:mohanpanathale18@gmail.com">mohanpanathale18@gmail.com</a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>