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
    <link rel="stylesheet" href="css/app.css">
    {{-- AOS CSS  --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Novoterm | Naslovna</title>
</head>
<body>
    
    @include('partials.head')

    {{-- Showcase  --}}
    <div id="showcase" class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="showcase-left">

                    <span class="hero__scroll aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">
                        <br>
                        <i class="chevron bottom"></i>
                    </span>
                    
                    <div class="info-wrapper">
                        <div data-aos="fade-right" data-aos-easing="ease" class="d-flex justify-content-end">
                            <div class="info-x info-1">TOP CENE</div>
                        </div>
                        <div data-aos="fade-right" data-aos-easing="ease" data-aos-delay="400" class="d-flex justify-content-end">
                            <div class="info-x info-2">VELIKI IZBOR</div>
                        </div>
                        <div  data-aos="fade-right" data-aos-easing="ease" data-aos-delay="800" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="d-flex justify-content-end">
                            <div class="info-x info-3">OBEZBEDJEN SERVIS</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="showcase-image">
                    <img data-aos="zoom-in-down" data-aos-duration="1000" class="img-fluid" src="images/pedrolo.jpg" alt="">
                    <img data-aos="zoom-in-up" data-aos-duration="1000" class="img-fluid" src="images/showcase-img.jpg" alt="">
                </div>
            </div>
            <div class="col-12 showcase-line"></div>
        </div>        
    </div>



    {{-- Recomanded  --}}
    <div class="container">
        <div class="row">
            <div class="col-12 subtitle">
                <h2>DOBRODOŠLI NA WEB SAJT KOMPANIJE NOVOTERM</h2>
                <p>Mi se bavimo prodajom i servisom pumpi i prateće opreme</p>
            </div>

            <div class="col-md-4">
                <div class="product1" data-aos="fade-up" data-aos-easing="ease">
                    <div class="product-image1">
                        <div class="effect1">
                            <img class="img-fluid" src="/images/product1.jpg" alt="">
                        </div>
                    </div>
                    <h3>ADUT</h3>
                    <p>Predvidjena za snabdevanje domaćinstava i manjih privrednih objekata pitkom vodom. Proizvedene od kvalitetnog materijala i prilagodjene lakoj montaži na različite sisteme. Zagarantovan dugotrajan rad sa minimalnim održavanjem.</p>
                    <button class="btn-1">KATALOG</button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product1" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">
                    <div class="product-image1">
                        <div class="effect1">
                            <img class="img-fluid" src="/images/product2.jpg" alt="">
                        </div>
                    </div>
                    <h3>ADUT</h3>
                    <p>Predvidjena za snabdevanje domaćinstava i manjih privrednih objekata pitkom vodom. Proizvedene od kvalitetnog materijala i prilagodjene lakoj montaži na različite sisteme. Zagarantovan dugotrajan rad sa minimalnim održavanjem.</p>
                    <button class="btn-1">KATALOG</button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product1" data-aos="fade-up" data-aos-easing="ease"  data-aos-delay="400">
                    <div class="product-image1">
                        <div class="effect1">
                            <img class="img-fluid" src="/images/product3.jpg" alt="">
                        </div>
                    </div>
                    <h3>ADUT</h3>
                    <p>Predvidjena za snabdevanje domaćinstava i manjih privrednih objekata pitkom vodom. Proizvedene od kvalitetnog materijala i prilagodjene lakoj montaži na različite sisteme. Zagarantovan dugotrajan rad sa minimalnim održavanjem.</p>
                    <button class="btn-1">KATALOG</button>
                </div>
            </div>
        </div>
    </div>

    {{-- About  --}}
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="about-image d-inline-block">
                        <div class="red-square"></div>
                        <div class="gray-square"></div>
                        <img class="img-fluid" src="images/product-lg.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="about-text">
                        <h3>O KOMPANIJI NOVOTERM</h3>
                        <p>M. Tomash i M. Drescher 1996. godine osnovali su firmu Novoterm Handles- Gmbh sa sedištem u Salzburgu/Austrija. NOVOTERM group d.o.o. je deo poslovnog lanca Austrijske firme NOVOTERM sa sedi[tem u Beogradu.</p>
                        <p>Prisutnost NOVOTERM grupe na tržištu Srbije i Crne gore je od 2002. godine, od kad je firma uspevala da oformi prodajni centar u Beogradu sa skladišnim prostorijama, servisom i razgranatom mrežom distributera i krajnjih korisnika. NOVOTERM je postao prepoznatljiv na tržištu sa realnim konceptom poslovanja i sa visokim stepenom odgovornosti za preuzete obaveze prema kupcima.</p>
                        <button class="btn-1">SAZNAJTE VIŠE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Recomanded  --}}
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12 subtitle">
                <h2>IZDVAJAMO IZ KATALOGA</h2>
                <p>Visoko kvalitetni uredjaji koji istovremeno omogućavaju našim distributerima razvijanje prednosti u odnosu na konkurenciju</p>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-md-2 offset-md-1 col-sm-4">
                <div class="product2" data-aos="fade-up" data-aos-duration="600">
                    <div class="product-image2">
                        <div class="effect1">
                            <img class="img-fluid" src="/images/pumpa.jpg" alt="">
                        </div>
                    </div>
                    <div class="product-info2 text-center">
                        <h3>TOPLOTNA PUMPA SNAGE 6-40KW</h3>
                        <p>CIRKULACIONE PUMPE</p>
                        <h2>8.520,00</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-2  col-sm-4">
                <div class="product2" data-aos="fade-down" data-aos-duration="600">
                    <div class="product-image2">
                        <div class="effect1">
                            <img class="img-fluid" src="/images/pumpa.jpg" alt="">
                        </div>
                    </div>
                    <div class="product-info2 text-center">
                        <h3>TOPLOTNA PUMPA SNAGE 6-40KW</h3>
                        <p>CIRKULACIONE PUMPE</p>
                        <h2>8.520,00</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-2  col-sm-4">
                <div class="product2" data-aos="fade-up" data-aos-duration="600">
                    <div class="product-image2">
                        <div class="effect1">
                            <img class="img-fluid" src="/images/pumpa.jpg" alt="">
                        </div>
                    </div>
                    <div class="product-info2 text-center">
                        <h3>TOPLOTNA PUMPA SNAGE 6-40KW</h3>
                        <p>CIRKULACIONE PUMPE</p>
                        <h2>8.520,00</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-2  col-sm-4">
                <div class="product2" data-aos="fade-down" data-aos-duration="600">
                    <div class="product-image2">
                        <div class="effect1">
                            <img class="img-fluid" src="/images/pumpa.jpg" alt="">
                        </div>
                    </div>
                    <div class="product-info2 text-center">
                        <h3>TOPLOTNA PUMPA SNAGE 6-40KW</h3>
                        <p>CIRKULACIONE PUMPE</p>
                        <h2>8.520,00</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-2  col-sm-4">
                <div class="product2" data-aos="fade-up" data-aos-duration="600">
                    <div class="product-image2">
                        <div class="effect1">
                            <img class="img-fluid" src="/images/pumpa.jpg" alt="">
                        </div>
                    </div>
                    <div class="product-info2 text-center">
                        <h3>TOPLOTNA PUMPA SNAGE 6-40KW</h3>
                        <p>CIRKULACIONE PUMPE</p>
                        <h2>8.520,00</h2>
                    </div>
                </div>
            </div>
        </div>            
    
    </div>  


    {{-- News  --}}
    <div class="container">
        <div class="row">
            <div class="col-12 subtitle">
                <h2>NOVOSTI I OBAVEŠTENJA</h2>
                <p>Visoko kvalitetni uredjaji koji istovremeno omogućavaju našim distributerima razvijanje prednosti u odnosu na konkurenciju</p>
            </div>

            <div class="col-md-6 mb-4">
                <div class="box-sm d-flex" data-aos="fade-right" data-aos-duration="600">
                    <div class="box-info text-right mr-3">
                        <p>25.8.2020.</p>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="btn-1-sm">DETALJNIJE</button>
                    </div>
                    <div class="box-image">
                        <img src="images/product-sm1.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="box-sm d-flex" data-aos="fade-left" data-aos-duration="600" data-aos-delay="300">
                    <div class="box-image mr-3" >
                        <img src="images/product-sm1.jpg" alt="">
                    </div>
                    <div class="box-info text-left">
                        <p>25.8.2020.</p>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="btn-1-sm">DETALJNIJE</button>
                    </div>
                </div>
            </div>       
   
            <div class="col-md-6 mb-4">
                <div class="box-sm d-flex" data-aos="fade-right" data-aos-duration="600" data-aos-delay="600">
                    <div class="box-info text-right mr-3" >
                        <p>25.8.2020.</p>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="btn-1-sm">DETALJNIJE</button>
                    </div>
                    <div class="box-image">
                        <img src="images/product-sm1.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="box-sm d-flex" data-aos="fade-left" data-aos-duration="600" data-aos-delay="900">
                    <div class="box-image mr-3">
                        <img src="images/product-sm1.jpg" alt="">
                    </div>
                    <div class="box-info text-left">
                        <p>25.8.2020.</p>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="btn-1-sm">DETALJNIJE</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    @include('partials.footer')      

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/app.js"></script>
    {{-- AOS JS  --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>