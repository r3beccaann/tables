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
          <div class="row pt-3 pb-3 head justify-content-center">
            <div
              class="col-lg-2 col-md-3 col-2 d-sm-none d-none d-md-flex justify-content-center align-items-center ps-4"
            >

             <!-- match time icon --> 
            <x-time rootStyle="" iconClass="fa-solid fa-stopwatch fa-2xl" iconStyle="color: #ffffff" divClass="col-8 d-block justify-content-center align-items-center" divStyle="line-height:1.2;" divRowClass="row" divRowStyle="" textStartClass="ms-2 head-text text-start" textStartStyle="font-size: 1.7rem;" startText="30 min" matchText="Matches" textMatchesClass="ms-2 head-text" textMatchesStyle="font-size: 1.7rem;" />

            </div>
            <div
              class="col-12 col-lg-8 col-md-6 d-flex align-items-center justify-content-center text-center"
            >
            <!-- title -->
              <x-title rootStyle="" divClass="col justify-content-center align-items-center text-center title" divStyle="" iconClass="" iconStyle="color: #fff" textClass="" textStyle="" text="Premiership"/>
            </div>
            <div
              class="col-lg-2 col-md-3 col-2 d-sm-none d-none d-md-flex d-flex flex-column justify-content-end align-items-center text-center"
              style="line-height: 1.2"
            >
              <!-- title -->
              <x-price rootStyle="" divClass="col  justify-content-center align-items-center text-center title" divStyle="" iconClass="fa-regular fa-calendar-days fa-2xl" iconStyle="color: #fff" textClass="" textStyle="" text="£35" suffixText="PER GAME"/>
            </div>
          </div>

          <!-- main table -->
          <!-- header row -->
          <div class="row mb-2 pt-2 pb-2 px-2">
            <div class="row mx-0 px-0 justify-content-center">
              <div class="col-lg-2 col-md-2 col-3 px-0 text-center">
                <!-- shield -->
                <div class="row g-0">
                <div class="col-4 shieldColHead" style="">
                    <i class="fa-solid fa-shield fa-xl" style="color: #ffa200"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4  text-center positionColHead" style="">
                  <i class="fa-solid fa-arrow-down-up-across-line fa-la" style="color: #ffffff;"></i>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center flagColHead" style="">
               
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-3 col-5 px-0 text-left teamColHead" style="">
              <b>Team</b>
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-3 px-0 text-center">
                <!-- shirt -->
                <div class="row g-0">
                <div class="col-4 shirtColHead" style="">
                    <i class="fa-solid fa-shirt" style="color: #ffa200"></i>
                  </div>
                  <!-- P -->
                  <div class="col-4 text-center pColHead" style="">
                 <b> P </b>
                  </div>
                  <!-- Pts -->
                  <div class="col-4 text-center ptsColHead" style="">
                   <b>Pts</b>
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center d-flex d-md-flex d-none">
                <!-- win / lose / draw -->
                <div class="col-4 d-flex d-md-block d-none text-center winColHead" style="">
                 <b> W </b>
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center d-flex d-md-block d-none loseColHead" style="">
                <b>L</b>
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center d-flex d-md-block d-none drawColHead" style="">
             <b> D </b>
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-1 px-0 text-center plusMinusColHead" style="">
                <i class="fa-solid fa-plus-minus" style="color: #ffffff;"></i>
              </div>

              <div class="col-2 px-0 text-center d-flex d-md-flex d-none">
                <!-- win / lose / draw -->
                <div class="col-3 d-flex d-md-block d-none" style="">
                  <p>For</p>
                </div>
                <!-- win / lose / draw -->
                <div class="col-3 d-flex d-md-block d-none" style="">
                  <p>Agst</p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-3 text-center d-flex d-md-block d-none" style="">
                
                </div>
            <!-- win / lose / draw -->
                <div class="col-3 text-center d-flex d-md-block d-none" style="">
              
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex d-md-flex d-none">
                <!-- win / lose / draw -->
                <div class="col-3 d-flex d-md-block d-none" style="">
                  
                </div>
                 <!-- win / lose / draw -->
                 <div class="col-3 d-flex d-md-block d-none" style="">
                  
                  </div>
              <!-- win / lose / draw -->
                <div class="col-3 text-center d-flex d-md-block d-none" style="">
                
                </div>
            <!-- camera -->
                <div class="col-3 text-center d-flex d-md-block d-none" style="">
                <i class="fa-solid fa-arrow-up-from-bracket fa-xl" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>





          </div>

          <!-- data row -->
          <div class="row foot py-1 px-2">
            <div class="row mx-0 px-0 justify-content-center" style="overflow:hidden;">
              <div class="col-lg-2 col-md-2 col-3 px-0 text-center">
                <!-- shield -->
                <div class="row g-0">
                  <div class="col-4 shieldCol" style="">
                  <i class="fa-solid fa-shield fa-xl" style="color: #1fe7ea;"></i>
                  </div>
                  <!-- up down -->
                  <div class="col-4 text-center  positionCol" style="">
                    <p style="" class="circle text-center">1</p>
                  </div>
                  <!-- flag -->
                  <div class="col-4  text-center flagCol " style="">
                  <img src="https://img.icons8.com/color/48/000000/russian-federation.png" alt="Russia" class="flag me-0">
                  </div>
                </div>
              </div>
            
              <!-- team -->
              <div class="col-lg-1 col-md-1 col-sm-3 col-5 px-0 text-left team-name teamCol" style="">
              <div class="outer">
                <div class="inner">
                Chiellini Con Carne
</div>
</div>
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-3 px-0 text-center">
                <!-- shirt-->
                <div class="row g-0 mt-0">
                <div class="col-4 shirtCol" style="">
                    <i class="fa-solid fa-shirt" style="color: #1fe7ea;"></i>
                  </div>
                  <!-- P -->
                  <div class="col-4 text-center pCol" style="">
                  4
                  </div>
                  <!-- Pts -->
                  <div class="col-4 px-0 text-center ptsCol" style="">
                  <p class=" box"style="background-color: yellow; border: 1px solid white; color: black; margin: auto;"><b>22</b></p>
                  </div>
                </div>
              </div>

            <div class="col-md-2 px-0 text-center d-flex d-md-flex d-none">
                <!-- win / lose / draw -->
                <div class="col-4 d-flex d-md-block d-none text-center winCol" style="">
                  4
                </div>
              <!-- win / lose / draw -->
                <div class="col-4 text-center d-flex d-md-block d-none loseCol" style="">
                4
                </div>
            <!-- win / lose / draw -->
                <div class="col-4 text-center d-flex d-md-block d-none drawCol" style="">
              4
                </div>
              </div>

              <!-- plus minus -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-1 px-0 text-center plusMinusCol" style="">
            10
              </div>

              <div class="col-2 px-0 text-center d-flex d-md-flex d-none">
                <!-- win / lose / draw -->
                <div class="col-3 d-md-block d-none" style="">
                  <p >10</p>
                </div>
                 <!-- win / lose / draw -->
                 <div class="col-3 d-md-block d-none" style="">
                  <p >10</p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-3 text-center d-flex d-md-block d-none" style="">
                <p class=" box"style="background-color: red; border: 1px solid white; color: black; margin: auto;"><b>L</b></p>
                </div>
            <!-- win / lose / draw -->
                <div class="col-3 text-center d-flex d-md-block d-none" style="">
                <p class=" box"style="background-color: grey; border: 1px solid white; color: black; margin: auto;"><b>D</b></p>
                </div>
              </div>

              <div class="col-2  px-0 text-center d-flex d-md-flex d-none">
                <!-- win / lose / draw -->
                <div class="col-3 d-flex d-md-block d-none" style="">
                <p class=" box"style="background-color: red; border: 1px solid white; color: black; margin: auto;"><b>L</b></p>
                </div>
                 <!-- win / lose / draw -->
                 <div class="col-3 d-flex d-md-block d-none" style="">
                <p class=" box"style="background-color: red; border: 1px solid white; color: black; margin: auto;"><b>L</b></p>
                </div>
              <!-- win / lose / draw -->
                <div class="col-3 text-center d-flex d-md-block d-none" style="">
                <p class=" box"style="background-color: #00ff1e; border: 1px solid white; color: black; margin: auto;"><b>W</b></p>
                </div>
            <!-- camera -->
                <div class="col-3 text-center d-flex d-md-block d-none"  style="">
                  <i class="fa-solid fa-video" style="color: #ffffff;"></i>
                </div>
              </div>
            </div>
          </div>

           


        




          <!-- footer row-->
          <div class="row foot">
            <div class="col-12  d-flex justify-content-around m-auto">
              <div class="row pt-3 pb-3">
                <!-- icon 1-->
                <div class="col justify-content-center align-items-center text-center px-3 cursor"  style="border-right: 1px solid yellow; z-index: 9999">
                <x-icon rootStyle="" divClass="col  justify-content-center align-items-center text-center" divStyle="" iconClass="fa-regular fa-calendar-days fa-2xl" iconStyle="color: #fff" textClass="mt-2" textStyle="" text="FIXTURES"/>
</div>
<!-- icon 2 -->
<div class="col justify-content-center align-items-center text-center px-3 cursor" style="z-index: 9999">
                <x-icon rootStyle="" divClass="col  justify-content-center align-items-center text-center" divStyle="" iconClass="fa-solid fa-trophy fa-2xl" iconStyle="color: #fff" textClass="mt-2" textStyle="" text="RESULTS"/>
</div>
<!-- icon 3 -->
<div class="col justify-content-center align-items-center text-center px-3 cursor"  style="border-left: 1px solid yellow; z-index: 9999">
                <x-icon rootStyle="" divClass="col  justify-content-center align-items-center text-center" divStyle="" iconClass="fa-solid fa-image fa-2xl" iconStyle="color: #fff" textClass="mt-2" textStyle="" text="GALLERY"/>
</div>
             
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal slide in -->



    

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
