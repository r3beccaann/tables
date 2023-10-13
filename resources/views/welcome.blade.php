<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" />

    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>Table</title>

    <!-- styles -->
    <link href="css/app.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&family=Roboto&display=swap"
      rel="stylesheet"
    />

    <!-- fa -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="mt-5" style="margin-left: 10px; margin-right: 10px;">
      <div class="row mt-5 justify-content-center">
        <!-- content -->

        <div class="main col-sm-12 col-md-12 col-lg-12 col-12">
          <!-- top header row -->
          <div class="row pt-2 pb-2 head">
            <div
              class="col-lg-2 d-flex justify-content-start align-items-center ms-3"
            >

             <!-- match time icon --> 
            <x-time rootStyle="" iconClass="fa-solid fa-stopwatch fa-2xl" iconStyle="color: #ffffff" divClass="col-8 d-flex flex-column justify-content-start align-items-center" divStyle="line-height:1.2;" divRowClass="row" divRowStyle="" textStartClass="ms-4 head-text text-start" textStartStyle="font-size: 1.7rem;" startText="30 min" matchText="Matches" textMatchesClass="ms-4 head-text" textMatchesStyle="font-size: 1.7rem;" />

            </div>
            <div
              class="col-8 d-flex align-items-center justify-content-center"
            >
            <!-- title -->
              <x-title rootStyle="" divClass="col  justify-content-center align-items-center text-center title" divStyle="" iconClass="fa-regular fa-calendar-days fa-2xl" iconStyle="color: #fff" textClass="" textStyle="" text="Premiership"/>
            </div>
            <div
              class="col d-flex flex-column justify-content-end align-items-center me-3 text-center"
              style="line-height: 1.2"
            >
              <!-- title -->
              <x-price rootStyle="" divClass="col  justify-content-center align-items-center text-center title" divStyle="" iconClass="fa-regular fa-calendar-days fa-2xl" iconStyle="color: #fff" textClass="mt-2 mb-2" textStyle="" text="£35" suffixText="PER GAME"/>
            </div>
          </div>

          <!-- main table -->
          <!-- header row -->
          <div class="row mb-2 pt-2 pb-2">
            <div class="row mx-0 px-0 justify-content-center">
              <div class="col-lg-2 col-md-2 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shield" style="color: #ffa200"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4  text-center" style="">
                    <i class="fa-solid fa-up-down" style="color: #ffffff"></i>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center" style="">
               
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center " style=" font-size">
                Team
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shirt" style="color: #ffa200"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 text-center" style="">
                  P
                  </div>
                  <!-- flag -->
                  <div class="col-4 text-center" style="">
                    Pts
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center hidden-sm d-sm-none d-md-flex">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  W
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style=")">
                L
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
              D
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center" style="">
                <i class="fa-solid fa-plus-minus" style="color: #ffffff;"></i>
              </div>

              <div class="col-2 px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
              
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                
                </div>
            <!-- camera -->
                <div class="col-4 text-center hidden-sm" style="">
                <i class="fa-solid fa-arrow-up-from-bracket fa-xl" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>





          </div>

          <!-- data row -->
          <div class="row foot pt-3 pb-0">
            <div class="row mx-0 px-0 justify-content-center">
              <div class="col-lg-2 col-md-2 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 my-2">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shield" style="color: #00ff62"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 d-flex text-center justify-content-center" style="">
                    <p style="" class="circle text-center">1</p>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center" style="">
                  <img src="http://html.iwthemes.com/sportscup/run/img/clubs-logos/bra.png" alt="Colombia" height="30px">
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style=" white-space: nowrap; font-size: 16px">
                Team name
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 mb-1 mt-0">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shirt" style="color: #00ff62"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 text-center" style="">
                  4
                  </div>
                  <!-- flag -->
                  <div class="col-4 px-0 text-center" style="">
                  <p class="mx-4 py-1"style="background-color: yellow; border: 1px solid white; color: black;"><b>22</b></p>
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center hidden-sm d-sm-none d-md-flex">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm my-2" style="">
                  4
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
                4
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
              4
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style="">
            10
              </div>

              <div class="col-2 px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: grey; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- camera -->
                <div class="col-4 text-center hidden-sm my-2"  style="">
                  <i class="fa-solid fa-video" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>
          </div>


          <!-- data row -->
          <div class="row foot pt-3 pb-0">
            <div class="row mx-0 px-0 justify-content-center">
              <div class="col-lg-2 col-md-2 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 my-2">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shield" style="color: #6c26ed"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 d-flex text-center justify-content-center" style="">
                    <p style="" class="circle text-center">2</p>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center" style="">
                  <img src="http://html.iwthemes.com/sportscup/run/img/clubs-logos/bra.png" alt="Colombia" height="30px">
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style=" white-space: nowrap; font-size: 16px">
                Team name
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 mb-1 mt-0">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shirt" style="color: #00ff62"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 text-center" style="">
                  4
                  </div>
                  <!-- flag -->
                  <div class="col-4 px-0 text-center" style="">
                  <p class="mx-4 py-1"style="background-color: yellow; border: 1px solid white; color: black;"><b>22</b></p>
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center hidden-sm d-sm-none d-md-flex">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm my-2" style="">
                  4
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
                4
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
              4
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style="">
            10
              </div>

              <div class="col-2 px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: grey; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- camera -->
                <div class="col-4 text-center hidden-sm my-2"  style="">
                  <i class="fa-solid fa-video" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>
          </div>


          <!-- data row -->
          <div class="row foot pt-3 pb-0">
            <div class="row mx-0 px-0 justify-content-center">
              <div class="col-lg-2 col-md-2 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 my-2">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shield" style="color: #ed2690"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 d-flex text-center justify-content-center" style="">
                    <p style="" class="circle text-center">3</p>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center" style="">
                  <img src="http://html.iwthemes.com/sportscup/run/img/clubs-logos/bra.png" alt="Colombia" height="30px">
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style=" white-space: nowrap; font-size: 16px">
                Team name
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 mb-1 mt-0">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shirt" style="color: #00ff62"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 text-center" style="">
                  4
                  </div>
                  <!-- flag -->
                  <div class="col-4 px-0 text-center" style="">
              <p class="mx-4 py-1"style="background-color: yellow; border: 1px solid white; color: black;"><b>22</b></p>
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center hidden-sm d-sm-none d-md-flex">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm my-2" style="">
                  4
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
                4
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
              4
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style="">
            10
              </div>

              <div class="col-2 px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: grey; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- camera -->
                <div class="col-4 text-center hidden-sm my-2"  style="">
                  <i class="fa-solid fa-video" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>
          </div>


          <!-- data row -->
          <div class="row foot pt-3 pb-0">
            <div class="row mx-0 px-0 justify-content-center">
              <div class="col-lg-2 col-md-2 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 my-2">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shield" style="color: #f5e319"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 d-flex text-center justify-content-center" style="">
                    <p style="" class="circle text-center">4</p>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center" style="">
                  <img src="http://html.iwthemes.com/sportscup/run/img/clubs-logos/bra.png" alt="Colombia" height="30px">
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style=" white-space: nowrap; font-size: 16px">
                Team name
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 mb-1 mt-0">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shirt" style="color: #00ff62"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 text-center" style="">
                  4
                  </div>
                  <!-- flag -->
                  <div class="col-4 px-0 text-center" style="">
                  <p class="mx-4 py-1"style="background-color: yellow; border: 1px solid white; color: black;"><b>22</b></p>
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center hidden-sm d-sm-none d-md-flex">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm my-2" style="">
                  4
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
                4
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
              4
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style="">
            10
              </div>

              <div class="col-2 px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: grey; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- camera -->
                <div class="col-4 text-center hidden-sm my-2"  style="">
                  <i class="fa-solid fa-video" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>
          </div>


          <!-- data row -->
          <div class="row foot pt-3 pb-0">
            <div class="row mx-0 px-0 justify-content-center">
              <div class="col-lg-2 col-md-2 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 my-2">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shield" style="color: #19a1f5"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 d-flex text-center justify-content-center" style="">
                    <p style="" class="circle text-center">5</p>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center" style="">
                  <img src="http://html.iwthemes.com/sportscup/run/img/clubs-logos/bra.png" alt="Colombia" height="30px">
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style=" white-space: nowrap; font-size: 16px">
                Team name
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 mb-1 mt-0">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shirt" style="color: #00ff62"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 text-center" style="">
                  4
                  </div>
                  <!-- flag -->
                  <div class="col-4 px-0 text-center" style="">
                  <p class="mx-4 py-1"style="background-color: yellow; border: 1px solid white; color: black;"><b>22</b></p>
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center hidden-sm d-sm-none d-md-flex">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm my-2" style="">
                  4
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
                4
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
              4
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style="">
            10
              </div>

              <div class="col-2 px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: grey; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- camera -->
                <div class="col-4 text-center hidden-sm my-2"  style="">
                  <i class="fa-solid fa-video" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>
          </div>


          <!-- data row -->
          <div class="row foot pt-3 pb-0">
            <div class="row mx-0 px-0 justify-content-center">
              <div class="col-lg-2 col-md-2 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 my-2">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shield" style="color: #f51919"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 d-flex text-center justify-content-center" style="">
                    <p style="" class="circle text-center">6</p>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center" style="">
                  <img src="http://html.iwthemes.com/sportscup/run/img/clubs-logos/bra.png" alt="Colombia" height="30px">
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style=" white-space: nowrap; font-size: 16px">
                Team name
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 mb-1 mt-0">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shirt" style="color: #00ff62"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 text-center" style="">
                  4
                  </div>
                  <!-- flag -->
                  <div class="col-4 px-0 text-center" style="">
                  <p class="mx-4 py-1"style="background-color: yellow; border: 1px solid white; color: black;"><b>22</b></p>
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center hidden-sm d-sm-none d-md-flex">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm my-2" style="">
                  4
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
                4
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
              4
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style="">
            10
              </div>

              <div class="col-2 px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: grey; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- camera -->
                <div class="col-4 text-center hidden-sm my-2"  style="">
                  <i class="fa-solid fa-video" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>
          </div>


          <!-- data row -->
          <div class="row foot pt-3 pb-0">
            <div class="row mx-0 px-0 justify-content-center">
              <div class="col-lg-2 col-md-2 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 my-2">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shield" style="color: #19f5ac"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 d-flex text-center justify-content-center" style="">
                    <p style="" class="circle text-center">7</p>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center" style="">
                  <img src="http://html.iwthemes.com/sportscup/run/img/clubs-logos/bra.png" alt="Colombia" height="30px">
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style=" white-space: nowrap; font-size: 16px">
                Team name
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 mb-1 mt-0">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shirt" style="color: #00ff62"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 text-center" style="">
                  4
                  </div>
                  <!-- flag -->
                  <div class="col-4 px-0 text-center" style="">
                  <p class="mx-4 py-1"style="background-color: yellow; border: 1px solid white; color: black;"><b>22</b></p>
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center hidden-sm d-sm-none d-md-flex">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm my-2" style="">
                  4
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
                4
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
              4
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style="">
            10
              </div>

              <div class="col-2 px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: grey; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- camera -->
                <div class="col-4 text-center hidden-sm my-2"  style="">
                  <i class="fa-solid fa-video" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>
          </div>


          <!-- data row -->
          <div class="row foot pt-3 pb-0">
            <div class="row mx-0 px-0 justify-content-center">
              <div class="col-lg-2 col-md-2 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 my-2">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shield" style="color: #00ff62"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 d-flex text-center justify-content-center" style="">
                    <p style="" class="circle text-center">8</p>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center" style="">
                  <img src="http://html.iwthemes.com/sportscup/run/img/clubs-logos/bra.png" alt="Colombia" height="30px">
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style=" white-space: nowrap; font-size: 16px">
                Team name
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-4 px-0 text-center">
                <!-- shield -->
                <div class="row g-0 mb-1 mt-0">
                  <div class="col-4" style="">
                    <i class="fa-solid fa-shirt" style="color: #00ff62"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 text-center" style="">
                  4
                  </div>
                  <!-- flag -->
                  <div class="col-4 px-0 text-center" style="">
                  <p class="mx-4 py-1"style="background-color: yellow; border: 1px solid white; color: black;"><b>22</b></p>
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center hidden-sm d-sm-none d-md-flex">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm my-2" style="">
                  4
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
                4
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm my-2" style="">
              4
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-2 col-2 px-0 text-center my-2" style="">
            10
              </div>

              <div class="col-2 px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                  <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: grey; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex hidden-sm">
                <!-- win / lose / draw -->
                <div class="col-4 hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: #00ff1e; border: 1px solid white; color: black;"><b>W</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center hidden-sm" style="">
                <p class="mx-4 py-1"style="background-color: red; border: 1px solid white; color: black;"><b>L</b></p>
                </div>
            <!-- camera -->
                <div class="col-4 text-center hidden-sm my-2"  style="">
                  <i class="fa-solid fa-video" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>
          </div>


          <!-- footer row-->
          <div class="row foot">
            <div class="col-12  d-flex justify-content-around m-auto">
              <div class="row mt-4 pt-3 mb-5">
                <!-- icon 1-->
                <div class="col justify-content-center align-items-center text-center">
                <x-icon rootStyle="" divClass="col  justify-content-center align-items-center text-center" divStyle="" iconClass="fa-regular fa-calendar-days fa-2xl" iconStyle="color: #fff" textClass="mt-2" textStyle="" text="FIXTURES"/>
</div>
<!-- icon 2 -->
<div class="col justify-content-center align-items-center text-center">
                <x-icon rootStyle="" divClass="col  justify-content-center align-items-center text-center" divStyle="" iconClass="fa-solid fa-trophy fa-2xl" iconStyle="color: #fff" textClass="mt-2" textStyle="" text="RESULTS"/>
</div>
<!-- icon 3 -->
<div class="col justify-content-center align-items-center text-center">
                <x-icon rootStyle="" divClass="col  justify-content-center align-items-center text-center" divStyle="" iconClass="fa-solid fa-image fa-2xl" iconStyle="color: #fff" textClass="mt-2" textStyle="" text="GALLERY"/>
</div>
             
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
