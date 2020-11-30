<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CSS  --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    {{-- Fontawsome Icons with my KIT CODE  --}}
    <script src="https://kit.fontawesome.com/7532718861.js"></script>

    {{-- Custom Style  --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">    
    {{-- AOS CSS  --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Novoterm | Naslovna</title>
</head>
<body>

    @include('partials.head')

    {{-- Title  --}}
    <div id="title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="zoom-in" class="main-caption">SANITARNI PROGRAM - ARMATURE STANDARDNE</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- Navigator  --}}
    <div id="navigator">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="nav-text d-flex align-items-center">
                        <p>Vi ste ovde: Naslovna</p>
                        <img src="images/icon-play.png" alt=""> 
                        <p>Pumpe za vodu</p>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="categories" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="title-underline">MENI</h2>
                    @include('includes.accordion')
                </div>
                <div class="col-lg-9">
                    <h2 class="title-underline break-margin-lg">SANITARNI PROGRAM - ARMATURE STANDARDNE</h2>
                    @include('includes.product')
                </div>
            </div>
        </div>
    </section>




    {{-- Recomanded  --}}
    <section id="recomanded">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product1">
                        <div class="product-image1">
                            <img class="img-fluid" src="/images/product1.jpg" alt="">
                        </div>
                        <h3>PUMPE ZA VODU</h3>
                        <p>Predvidjena za snabdevanje domaćinstava i manjih privrednih objekata pitkom vodom. Proizvedene od kvalitetnog materijala i prilagodjene lakoj montaži na različite sisteme. Zagarantovan dugotrajan rad sa minimalnim održavanjem.</p>
                        <button class="btn-1">POGLEDAJTE PROIZVODE</button>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="product1">
                        <div class="product-image1">
                            <img class="img-fluid" src="/images/product2.jpg" alt="">
                        </div>
                        <h3>ADUT</h3>
                        <p>Predvidjena za snabdevanje domaćinstava i manjih privrednih objekata pitkom vodom. Proizvedene od kvalitetnog materijala i prilagodjene lakoj montaži na različite sisteme. Zagarantovan dugotrajan rad sa minimalnim održavanjem.</p>
                        <button class="btn-1">POGLEDAJTE PROIZVODE</button>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="product1">
                        <div class="product-image1">
                            <img class="img-fluid" src="/images/product3.jpg" alt="">
                        </div>
                        <h3>HIDROKOMPLETI</h3>
                        <p>Predvidjena za snabdevanje domaćinstava i manjih privrednih objekata pitkom vodom. Proizvedene od kvalitetnog materijala i prilagodjene lakoj montaži na različite sisteme. Zagarantovan dugotrajan rad sa minimalnim održavanjem.</p>
                        <button class="btn-1">POGLEDAJTE PROIZVODE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')   


    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="{{asset('js/app.js')}}"></script>
    {{-- AOS JS  --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>