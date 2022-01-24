<?php
  session_start();
  require_once('../model/PostModel.php');
  $postModel = new PostModel();
  $posts = $postModel->getPostById($_GET['id']);
  $post = $posts[0];
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>
  <link href="../assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/driveway.css">
  <link rel="stylesheet" href="../assets/css/test.css">
  <link rel="stylesheet" href="../assets/css/detail.css">
</head>

<body>
  <div @id="root">
    <div class="MuiBox-root jss1">
      <?php require_once('../view/header.php') ?>
      <main class="MuiBox-root jss85">
        <div class="jss1298">
          <section class="jss1299">
            <nav class="jss1301">
              <div class="jss1308">
                <a href="/shop">
                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss35 jss43 has-icon" tabindex="0" type="button" id="back-to-search-results" aria-label="back to search results">
                  <span class="MuiButton-label"><span class="MuiButton-startIcon MuiButton-iconSizeMedium">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.99854 11.9998C1.99854 11.3095 2.55818 10.7498 3.24854 10.7498H20.7485C21.4389 10.7498 21.9985 11.3095 21.9985 11.9998C21.9985 12.6902 21.4389 13.2498 20.7485 13.2498H3.24854C2.55818 13.2498 1.99854 12.6902 1.99854 11.9998Z"
                            fill="currentColor"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.36465 12.8837C1.8765 12.3955 1.8765 11.6041 2.36465 11.1159L11.1147 2.36593C11.6028 1.87777 12.3943 1.87777 12.8824 2.36593C13.3706 2.85409 13.3706 3.64554 12.8824 4.1337L5.0163 11.9998L12.8824 19.8659C13.3706 20.3541 13.3706 21.1455 12.8824 21.6337C12.3943 22.1219 11.6028 22.1219 11.1147 21.6337L2.36465 12.8837Z"
                            fill="currentColor"></path>
                        </svg>
                      </span>
                      <span class="button-text">Back to Search</span>
                    </span>
                  </button>
                </a>
              </div>
            </nav>
            <div>
              <div class="MuiGrid-root jss1309 MuiGrid-container">
                <div class="MuiGrid-root jss1316 jss1320 jss1312 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-lg-7">
                  
                  <div class="jss1324" id="carousel">
                    <div class="jss1324" id="carousel">
                      <div data-cy="carousel-slider-main" class="jss1325">
                        <div class="jss1343 jss1336">
                          <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss41 jss30 jss1345 jss1340" tabindex="0" type="button" aria-label="Favorite Icon" aria-pressed="false" data-cy="favorite-icon" data-testid="FavoriteIcon">
                            <span class="MuiButton-label"><span class="button-text"><div class="jss31 jss1346"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="jss1342"><path d="M11.9977 20.8702C11.879 20.8702 11.7602 20.8245 11.678 20.7332L3.60311 12.6583C1.46563 10.5208 1.46563 7.04058 3.60311 4.90311C5.74058 2.76563 9.22083 2.76563 11.3583 4.90311L12.0069 5.55166L12.6554 4.90311L12.6645 4.89397C14.802 2.76563 18.2731 2.77477 20.4015 4.90311C21.4337 5.94444 22 7.32375 22 8.78527C22 10.2468 21.4337 11.6261 20.3923 12.6583L12.3174 20.7332C12.2352 20.8245 12.1165 20.8702 11.9977 20.8702ZM7.47614 4.21802C6.30692 4.21802 5.1377 4.66561 4.24252 5.55166C2.46129 7.33289 2.46129 10.2285 4.24252 12.0098L11.9977 19.7649L19.7529 12.0098C20.6116 11.1511 21.0865 10.0093 21.0865 8.78527C21.0865 7.56125 20.6116 6.41944 19.7529 5.55166C18.8851 4.69301 17.7342 4.21802 16.5193 4.21802C15.3044 4.21802 14.1535 4.69301 13.2857 5.55166C13.2857 5.55166 13.2857 5.55166 13.2765 5.56079L12.3174 6.51992C12.1439 6.69347 11.8424 6.69347 11.6689 6.51992L10.7006 5.55166C9.81457 4.66561 8.64535 4.21802 7.47614 4.21802Z" fill="currentColor"></path><path d="M11.9977 20.8702C11.879 20.8702 11.7602 20.8245 11.678 20.7332L3.60311 12.6583C1.46563 10.5208 1.46563 7.04058 3.60311 4.90311C5.74058 2.76563 9.22083 2.76563 11.3583 4.90311L12.0069 5.55166L12.6554 4.90311L12.6645 4.89397C14.802 2.76563 18.2731 2.77477 20.4015 4.90311C21.4337 5.94444 22 7.32375 22 8.78527C22 10.2468 21.4337 11.6261 20.3923 12.6583L12.3174 20.7332C12.2352 20.8245 12.1165 20.8702 11.9977 20.8702ZM7.47614 4.21802C6.30692 4.21802 5.1377 4.66561 4.24252 5.55166C2.46129 7.33289 2.46129 10.2285 4.24252 12.0098L11.9977 19.7649L19.7529 12.0098C20.6116 11.1511 21.0865 10.0093 21.0865 8.78527C21.0865 7.56125 20.6116 6.41944 19.7529 5.55166C18.8851 4.69301 17.7342 4.21802 16.5193 4.21802C15.3044 4.21802 14.1535 4.69301 13.2857 5.55166C13.2857 5.55166 13.2857 5.55166 13.2765 5.56079L12.3174 6.51992C12.1439 6.69347 11.8424 6.69347 11.6689 6.51992L10.7006 5.55166C9.81457 4.66561 8.64535 4.21802 7.47614 4.21802Z" fill="currentColor"></path></svg></div></span></span>
                          </button>
                        </div>
                        <div class="slick-slider jss1338 slick-initialized">
                          <div class="slick-list">
                            <img src="<?php echo $post['img']; ?>" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="MuiGrid-root jss1316 jss1351 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-lg-5">
                  <div data-cy="title-lock-up-container" class="jss1355">
                    <div data-cy="title-header-container" class="jss1362">
                      <h6 class="MuiTypography-root jss112 jss1361 MuiTypography-subtitle1"><?php echo $post['mfg']; ?></h6>
                    </div>
                    <div data-cy="title-container" class="jss1366">
                      <h4 class="MuiTypography-root jss109 MuiTypography-h4"><?php echo $post['brand']; ?> <?php echo $post['model'] . ' '; ?></h4>
                    </div>
                    <div class="jss1370">
                      <div data-cy="price-container" class="jss1367">
                        <h5 class="MuiTypography-root jss110 MuiTypography-h5"><span><?php echo $post['price']; ?>VND</span></h5>
                      </div>
                      <div data-cy="mileage-container" class="jss1369">
                        <p class="MuiTypography-root jss117 jss1358 MuiTypography-body2"><span><?php echo $post['km']; ?> miles</span></p>
                      </div>
                    </div>
                  </div>
                  <div data-cy="vdp-siderail" class="jss1313">
                    <div>

                    </div>
                    <div data-cy="get-started-zone-container" class="jss1372">
                      <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss38 jss39 MuiButton-fullWidth" tabindex="0" type="button" id="buy-it-now" aria-label="Get Started" data-cy="get-started-btn">
                        <span class="MuiButton-label">
                          <span class="button-text">Get Started</span>
                        </span>
                      </button>
                      <div></div>
                      <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss36 jss43 has-icon jss1373" tabindex="0" type="button" data-cy="ready-to-buy-button" aria-label="Open how it works modal">
                        <span class="MuiButton-label">
                          <span class="MuiButton-startIcon MuiButton-iconSizeMedium">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"></circle><path d="M8.62988 9.9043H10.4824C10.5234 9.13184 11.043 8.63281 11.8291 8.63281C12.6084 8.63281 13.1279 9.10449 13.1279 9.75391C13.1279 10.4033 12.8613 10.7383 11.9795 11.2646C11.0361 11.8184 10.6602 12.4336 10.749 13.5068L10.7627 13.9033H12.5742V13.541C12.5742 12.8711 12.8271 12.5361 13.7363 12.0098C14.7002 11.4424 15.1992 10.7246 15.1992 9.69238C15.1992 8.13379 13.9072 7.04688 11.9521 7.04688C9.85352 7.04688 8.66406 8.22266 8.62988 9.9043ZM11.6924 17.1709C12.3145 17.1709 12.8135 16.6992 12.8135 16.0977C12.8135 15.4961 12.3145 15.0244 11.6924 15.0244C11.0771 15.0244 10.5781 15.4961 10.5781 16.0977C10.5781 16.6992 11.0771 17.1709 11.6924 17.1709Z" fill="currentColor"></path>
                          </svg>
                        </span>
                        <span class="button-text">Ready to buy? Here's how it works.</span></span>
                      </button>
                      <div class="MuiPaper-root jss1374 jss1375 MuiPaper-elevation16 MuiPaper-rounded" data-cy="sticky-header">
                        <div class="MuiGrid-root MuiGrid-container">
                          <div class="MuiGrid-root jss1376 MuiGrid-item MuiGrid-grid-md-7">
                            <div class="jss1376">
                              <img class="jss1377" src="https://vehicle-images.driveway.com/t_dw_iso/t_dw_md/106357/4T1B11HK4KU264671/61eb60c21613152009be780c-ISOLATED.jpg" alt="2019 Toyota Camry">
                            </div>
                            <div class="jss1378">
                              <p class="MuiTypography-root jss118 MuiTypography-body2">2019 Toyota Camry</p>
                              <p class="MuiTypography-root jss119 jss1379 MuiTypography-body2">XLE | <span>47,115 miles</span></p>
                              <p class="MuiTypography-root jss120 MuiTypography-body2"><span>$27,490</span></p>
                            </div>
                          </div>
                          <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-md-5 MuiGrid-grid-lg-5">
                            <div class="jss1380">
                              <div class="jss1381">
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss40 jss45 jss30 jss1386 jss1384" tabindex="0" type="button" aria-label="Open how it works modal"><span class="MuiButton-label"><span class="button-text"><div class="jss31 jss1387"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"></circle><path d="M8.62988 9.9043H10.4824C10.5234 9.13184 11.043 8.63281 11.8291 8.63281C12.6084 8.63281 13.1279 9.10449 13.1279 9.75391C13.1279 10.4033 12.8613 10.7383 11.9795 11.2646C11.0361 11.8184 10.6602 12.4336 10.749 13.5068L10.7627 13.9033H12.5742V13.541C12.5742 12.8711 12.8271 12.5361 13.7363 12.0098C14.7002 11.4424 15.1992 10.7246 15.1992 9.69238C15.1992 8.13379 13.9072 7.04688 11.9521 7.04688C9.85352 7.04688 8.66406 8.22266 8.62988 9.9043ZM11.6924 17.1709C12.3145 17.1709 12.8135 16.6992 12.8135 16.0977C12.8135 15.4961 12.3145 15.0244 11.6924 15.0244C11.0771 15.0244 10.5781 15.4961 10.5781 16.0977C10.5781 16.6992 11.0771 17.1709 11.6924 17.1709Z" fill="currentColor"></path></svg></div></span></span></button><button class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss38 jss39 jss1382" tabindex="0" type="button" id="buy-it-now" aria-label="Get Started"><span class="MuiButton-label"><span class="button-text">Get Started</span></span></button></div></div></div></div></div></div><div data-cy="mini-seven-day-guarantee-container" class="jss1411"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="jss1414"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.6202 8.21813C17.0535 8.56477 17.1271 9.2013 16.7846 9.63986L11.5606 16.3298C11.2281 16.7666 10.7087 17.0157 10.1638 16.9992C9.61982 16.9828 9.11685 16.7036 8.81058 16.249L7.18263 13.9105C6.86452 13.4536 6.97262 12.8221 7.42408 12.5001C7.87555 12.1781 8.49942 12.2875 8.81753 12.7445L10.2284 14.7712L15.2155 8.38458C15.558 7.94602 16.1869 7.8715 16.6202 8.21813ZM10.4603 15.1047C10.4617 15.1066 10.4631 15.1086 10.4644 15.1107L10.4603 15.1047Z" fill="white"></path></svg><div><p class="MuiTypography-root jss116 jss1412 MuiTypography-body2" data-cy="mini-seven-day-guarantee-header">7-Day Money Back Guarantee</p><p class="MuiTypography-root jss115 jss1413 MuiTypography-body2" data-cy="mini-seven-day-guarantee-body">Love it or leave it, no questions asked.</p></div></div><div data-cy="value-proposition-container" class="jss1415">
                                  <div data-cy="value-prop-container-Complete-Transparency" class="jss1416"><div class="jss1418"><p class="MuiTypography-root jss1440 jss1419 MuiTypography-body2">Complete Transparency</p><p class="MuiTypography-root jss1439 jss1419 jss1420 MuiTypography-body2">We provide the complete CARFAX vehicle history to help you choose the right ride.</p><div data-cy="carfax-section-container" class="jss1421"><a href="https://www.carfax.com/VehicleHistory/p/Report.cfx?partner=LTH_0&amp;vin=4T1B11HK4KU264671" class="jss1423" target="_blank" aria-label="CarFax Report">View CARFAX Report<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="jss1424"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 7C4.73478 7 4.48043 7.10536 4.29289 7.29289C4.10536 7.48043 4 7.73478 4 8V19C4 19.2652 4.10536 19.5196 4.29289 19.7071C4.48043 19.8946 4.73478 20 5 20H16C16.2652 20 16.5196 19.8946 16.7071 19.7071C16.8946 19.5196 17 19.2652 17 19V13C17 12.4477 17.4477 12 18 12C18.5523 12 19 12.4477 19 13V19C19 19.7957 18.6839 20.5587 18.1213 21.1213C17.5587 21.6839 16.7957 22 16 22H5C4.20435 22 3.44129 21.6839 2.87868 21.1213C2.31607 20.5587 2 19.7956 2 19V8C2 7.20435 2.31607 6.44129 2.87868 5.87868C3.44129 5.31607 4.20435 5 5 5H11C11.5523 5 12 5.44772 12 6C12 6.55228 11.5523 7 11 7H5Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M14 3C14 2.44772 14.4477 2 15 2H21C21.5523 2 22 2.44772 22 3V9C22 9.55228 21.5523 10 21 10C20.4477 10 20 9.55228 20 9V4H15C14.4477 4 14 3.55228 14 3Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M21.7071 2.29289C22.0976 2.68342 22.0976 3.31658 21.7071 3.70711L10.7071 14.7071C10.3166 15.0976 9.68342 15.0976 9.29289 14.7071C8.90237 14.3166 8.90237 13.6834 9.29289 13.2929L20.2929 2.29289C20.6834 1.90237 21.3166 1.90237 21.7071 2.29289Z" fill="currentColor"></path></svg></a></div></div></div></div></div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
      <?php require_once('../view/footer.php') ?>
    </div>
  </div>
</body>

</html>
