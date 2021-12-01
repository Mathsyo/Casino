@extends('layouts.home')

@section('content')

        <div id="top_content">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="box-shadow: 0 0 20px rgba(0,0,0,0.25);" class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17758d969d3%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17758d969d3%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.2083282470703%22%20y%3D%22216.8%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Blog</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img style="box-shadow: 0 0 20px rgba(0,0,0,0.25);" class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17758d969d3%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17758d969d3%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.2083282470703%22%20y%3D%22216.8%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Blog</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img style="box-shadow: 0 0 20px rgba(0,0,0,0.25);" class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17758d969d3%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17758d969d3%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.2083282470703%22%20y%3D%22216.8%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Blog</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div> 
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <section>
            <div class="container">
                <!-- <h1 class="text-center"><b>
                    Lorem ipsum dolor sit amet
                </b></h1>
                <p class="text-center" style="font-size: 24px; font-family: open sans,Helvetica,Arial,sans-serif; line-height: 1.55;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                <h5 class="rounded border-theme-dark-red ps-3 text-justify" style="border-left-width: 5px; border-left-style: solid; line-height: 1.6;">
                    Lorem ipsum dolor sit amet. 
                </h5>
                <div class="row mt-5">
                    <div class="col-sm-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet odio dictum, accumsan erat id, congue nulla. Cras aliquet augue nec faucibus ullamcorper. Aliquam mattis ullamcorper erat tristique sodales. Etiam commodo molestie volutpat. Aliquam erat volutpat.  </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet odio dictum, accumsan erat id, congue nulla. Cras aliquet augue nec faucibus ullamcorper. Aliquam mattis ullamcorper erat tristique sodales. Etiam commodo molestie volutpat. Aliquam erat volutpat.  </p>
                    </div>
                    <div class="col-sm-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet odio dictum, accumsan erat id, congue nulla. Cras aliquet augue nec faucibus ullamcorper. Aliquam mattis ullamcorper erat tristique sodales. Etiam commodo molestie volutpat. Aliquam erat volutpat.  </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet odio dictum, accumsan erat id, congue nulla. Cras aliquet augue nec faucibus ullamcorper. Aliquam mattis ullamcorper erat tristique sodales. Etiam commodo molestie volutpat. Aliquam erat volutpat.  </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <a class="icon float-center" href="#"><ion-icon name="folder-open-outline"></ion-icon></a>
                        <h1 class="text-theme-dark-red"><b>Lorem ipsum.</b></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet odio dictum, accumsan erat id, congue nulla. Cras aliquet augue nec faucibus ullamcorper. Aliquam mattis ullamcorper erat tristique sodales. Etiam commodo molestie volutpat. Aliquam erat volutpat.  </p>
                    </div>
                    <div class="col-sm-6">
                        <img style="box-shadow: 0 0 20px rgba(0,0,0,0.25);" class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17758d969ce%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17758d969ce%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22286.1416702270508%22%20y%3D%22216.2%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Third slide">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 ">
                        <img style="box-shadow: 0 0 20px rgba(0,0,0,0.25);" class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17758d969d3%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17758d969d3%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.2083282470703%22%20y%3D%22216.8%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Second slide">
                    </div>
                    <div class="col-sm-6 text-center py-3">
                        <a class="icon float-center" href="#"><ion-icon name="folder-open-outline"></ion-icon></a>
                        <h1 class="text-theme-dark-red"><b>Lorem ipsum.</b></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet odio dictum, accumsan erat id, congue nulla. Cras aliquet augue nec faucibus ullamcorper. Aliquam mattis ullamcorper erat tristique sodales. Etiam commodo molestie volutpat. Aliquam erat volutpat.  </p>
                    </div>
                </div>
            </div>
        </section>
        <section> 
            <div class="container">
                <div class="row">
                    <div class="col text-center py-3">
                        <a class="icon float-center" href="#"><ion-icon name="folder-open-outline"></ion-icon></a>
                        <h1 class="text-theme-dark-red"><b>Lorem ipsum.</b></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet odio dictum, accumsan erat id, congue nulla. Cras aliquet augue nec faucibus ullamcorper. Aliquam mattis ullamcorper erat tristique sodales. Etiam commodo molestie volutpat. Aliquam erat volutpat.  </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col ">
                        <img style="box-shadow: 0 0 20px rgba(0,0,0,0.25);" class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17758d969d3%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17758d969d3%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.2083282470703%22%20y%3D%22216.8%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Second slide">
                    </div>
                </div>
            </div>
        </section>

@endsection

@section('scripts')
    <script>
        $('.carousel .carousel-item img,.carousel .carousel-item svg').css('height',window.innerHeight-50+"px")
    </script>
@endsection

@section('styles')
    <style>
        section {
            padding: 90px 0;
            position: relative;
        }

        section::after {
            content: "";
            position: absolute;
            bottom: -1px;
            z-index: 5000;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 50%;
            height: 2px;
            border-radius: 50px;
            -webkit-transition: .15s;
            -o-transition: .15s;
            transition: .15s;
            background-color: var(--theme-dark-red);
        }

        section:nth-of-type(odd) {
            /* background: #f7f7f7; */
            border-top: solid 1px #cdcdcd;
            border-bottom: solid 1px #cdcdcd;
        }

        section .container .icon {
            display: inline-block;
            width: 60px;
            height: 60px;
            line-height: 50px;
            border-radius: 30px;
            border: solid 1px #222222;
            color: #222222;
            transition: all .2s ease-out;
            font-size: 30px;
            margin: 0 auto 20px;
            text-align: center;
        }

        section .container .icon:hover {
            color:white;
            background-color: #222222;
        }
    </style>
@endsection