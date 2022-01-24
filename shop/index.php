<?php
  session_start();
  // require_once('../controller/PostController.php');
  // $postController = new PostController();
  // $postController->show();
  // if($postController->show()) {
  //   var_dump($posts);
  // }
  require_once('../model/PostModel.php');
  $postModel = new PostModel();
  $posts = $postModel->getPosts();
  
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="../assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/driveway.css">
  <link rel="stylesheet" href="../assets/css/test.css">
  <link rel="stylesheet" href="../assets/css/shop.css">
</head>

<body>
  <div @id="root">
    <div class="MuiBox-root jss1">
      <?php require_once('../view/header.php') ?>
      <main class="MuiBox-root jss85" id="maincontent">
        <div class="jss201">
          <div class="jss203">
            <div>
              <div class="jss204">
                <div class="jss217">
                  <div class="MuiFormControl-root MuiTextField-root jss218" data-cy="srp-search-bar-text-field"
                    data-testid="search-field"><label
                      class="MuiFormLabel-root MuiInputLabel-root jss225 sr-only MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                      data-shrink="true" for="search-field" id="search-field-label">search-field</label>
                    <div class="MuiInputBase-root MuiInput-root jss220 MuiInputBase-formControl MuiInput-formControl">
                      <input aria-invalid="false" id="search-field" placeholder="Search makes, models, keywords"
                        type="text" class="MuiInputBase-input MuiInput-input jss221" value=""></div>
                  </div><button
                    class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss39 jss30 jss233 jss219"
                    tabindex="0" type="button" aria-label="search"><span class="MuiButton-label"><span
                        class="button-text">
                        <div class="jss31 jss234"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="2"></circle>
                            <rect x="14" y="15.4142" width="2" height="9" rx="1" transform="rotate(-45 14 15.4142)"
                              fill="currentColor"></rect>
                          </svg></div>
                      </span></span></button>
                </div><button class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss36 jss39 jss238"
                  tabindex="0" type="button" id="srp-location-btn" data-cy="srp-location-btn"><span
                    class="MuiButton-label"><span class="button-text"><svg width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg" class="jss237">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12 3.66668C10.3026 3.66668 8.67475 4.36906 7.47452 5.61932C6.27428 6.86957 5.6 8.56527 5.6 10.3334C5.6 12.9151 7.21259 15.4203 8.98076 17.3645C9.84849 18.3186 10.7189 19.0997 11.3733 19.6425C11.6169 19.8445 11.8296 20.0128 12 20.144C12.1704 20.0128 12.3831 19.8445 12.6267 19.6425C13.2811 19.0997 14.1515 18.3186 15.0192 17.3645C16.7874 15.4203 18.4 12.9151 18.4 10.3334C18.4 8.56527 17.7257 6.86957 16.5255 5.61932C15.3253 4.36906 13.6974 3.66668 12 3.66668ZM12 21.1668C11.5562 21.8602 11.556 21.8601 11.5558 21.8599L11.5535 21.8583L11.5482 21.8546L11.5299 21.8417C11.5143 21.8306 11.4921 21.8148 11.4636 21.7943C11.4068 21.7533 11.3252 21.6936 11.2222 21.6161C11.0164 21.4613 10.7251 21.2353 10.3767 20.9463C9.68107 20.3693 8.75151 19.5358 7.81924 18.5107C5.98741 16.4966 4 13.585 4 10.3334C4 8.12324 4.84285 6.00361 6.34315 4.4408C7.84344 2.87798 9.87827 2 12 2C14.1217 2 16.1566 2.87798 17.6569 4.4408C19.1571 6.00361 20 8.12324 20 10.3334C20 13.585 18.0126 16.4966 16.1808 18.5107C15.2485 19.5358 14.3189 20.3693 13.6233 20.9463C13.2749 21.2353 12.9836 21.4613 12.7778 21.6161C12.6748 21.6936 12.5932 21.7533 12.5364 21.7943C12.5079 21.8148 12.4857 21.8306 12.4701 21.8417L12.4518 21.8546L12.4465 21.8583L12.4448 21.8595C12.4446 21.8596 12.4438 21.8602 12 21.1668ZM12 21.1668L12.4438 21.8602C12.175 22.0468 11.8245 22.0465 11.5558 21.8599L12 21.1668Z"
                          fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.0003 8.66674C11.1166 8.66674 10.4003 9.41294 10.4003 10.3334C10.4003 11.2539 11.1166 12.0001 12.0003 12.0001C12.8839 12.0001 13.6003 11.2539 13.6003 10.3334C13.6003 9.41294 12.8839 8.66674 12.0003 8.66674ZM8.80029 10.3334C8.80029 8.49246 10.233 7.00006 12.0003 7.00006C13.7676 7.00006 15.2003 8.49246 15.2003 10.3334C15.2003 12.1744 13.7676 13.6668 12.0003 13.6668C10.233 13.6668 8.80029 12.1744 8.80029 10.3334Z"
                          fill="currentColor"></path>
                      </svg>
                      <p class="MuiTypography-root jss118 MuiTypography-body2">Location</p><svg width="24" height="24"
                        viewBox="0 0 24 24" fill="#767676" xmlns="http://www.w3.org/2000/svg" class="jss239">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M18.7071 9.70711C19.0976 9.31658 19.0976 8.68342 18.7071 8.29289C18.3166 7.90237 17.6834 7.90237 17.2929 8.29289L12 13.5858L6.70711 8.29289C6.31658 7.90237 5.68342 7.90237 5.29289 8.29289C4.90237 8.68342 4.90237 9.31658 5.29289 9.70711L11.2929 15.7071C11.6834 16.0976 12.3166 16.0976 12.7071 15.7071L18.7071 9.70711Z">
                        </path>
                      </svg>
                    </span></span></button>
              </div>
              <hr class="MuiDivider-root jss205">
              <div class="jss215">
                <div class="jss216">
                  <h1 class="MuiTypography-root jss117 MuiTypography-body2">25,670 Used Cars For Sale</h1>
                </div>
                <div class="jss249"><button
                    class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss40 jss45 jss246" tabindex="0"
                    type="button" aria-haspopup="true" aria-controls="sorting-menu" aria-expanded="false"
                    data-cy="sort"><span class="MuiButton-label"><span class="button-text">
                        <p class="MuiTypography-root jss118 MuiTypography-body2">Sort:</p>
                        <p class="MuiTypography-root jss118 jss250 MuiTypography-body2" data-cy="sort-value">Recommended
                        </p><svg width="24" height="24" viewBox="0 0 24 24" fill="#767676"
                          xmlns="http://www.w3.org/2000/svg" class="">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M18.7071 9.70711C19.0976 9.31658 19.0976 8.68342 18.7071 8.29289C18.3166 7.90237 17.6834 7.90237 17.2929 8.29289L12 13.5858L6.70711 8.29289C6.31658 7.90237 5.68342 7.90237 5.29289 8.29289C4.90237 8.68342 4.90237 9.31658 5.29289 9.70711L11.2929 15.7071C11.6834 16.0976 12.3166 16.0976 12.7071 15.7071L18.7071 9.70711Z">
                          </path>
                        </svg>
                      </span></span></button></div>
              </div>
            </div>
            <ul class="MuiGrid-root jss259 MuiGrid-container" data-cy="result-grid">
              <?php foreach ($posts as $post) : ?>

              <li class="MuiGrid-root jss266 jss451 jss267 jss452 jss268 jss453 jss269 jss454 jss261 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-xl-6"  data-cy="result-grid-item">
                <div class="jss455" data-cy="result-card">
                  <div class="jss492 jss456">
                    <button
                      class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss41 jss30 jss494 jss489"
                      tabindex="0" type="button" aria-label="Favorite Icon" aria-pressed="false"
                      data-cy="favorite-icon">
                      <span class="MuiButton-label">
                        <span class="button-text">
                          <div class="jss31 jss495">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg" class="jss491">
                              <path
                                d="M11.9977 20.8702C11.879 20.8702 11.7602 20.8245 11.678 20.7332L3.60311 12.6583C1.46563 10.5208 1.46563 7.04058 3.60311 4.90311C5.74058 2.76563 9.22083 2.76563 11.3583 4.90311L12.0069 5.55166L12.6554 4.90311L12.6645 4.89397C14.802 2.76563 18.2731 2.77477 20.4015 4.90311C21.4337 5.94444 22 7.32375 22 8.78527C22 10.2468 21.4337 11.6261 20.3923 12.6583L12.3174 20.7332C12.2352 20.8245 12.1165 20.8702 11.9977 20.8702ZM7.47614 4.21802C6.30692 4.21802 5.1377 4.66561 4.24252 5.55166C2.46129 7.33289 2.46129 10.2285 4.24252 12.0098L11.9977 19.7649L19.7529 12.0098C20.6116 11.1511 21.0865 10.0093 21.0865 8.78527C21.0865 7.56125 20.6116 6.41944 19.7529 5.55166C18.8851 4.69301 17.7342 4.21802 16.5193 4.21802C15.3044 4.21802 14.1535 4.69301 13.2857 5.55166C13.2857 5.55166 13.2857 5.55166 13.2765 5.56079L12.3174 6.51992C12.1439 6.69347 11.8424 6.69347 11.6689 6.51992L10.7006 5.55166C9.81457 4.66561 8.64535 4.21802 7.47614 4.21802Z"
                                fill="currentColor"></path>
                              <path
                                d="M11.9977 20.8702C11.879 20.8702 11.7602 20.8245 11.678 20.7332L3.60311 12.6583C1.46563 10.5208 1.46563 7.04058 3.60311 4.90311C5.74058 2.76563 9.22083 2.76563 11.3583 4.90311L12.0069 5.55166L12.6554 4.90311L12.6645 4.89397C14.802 2.76563 18.2731 2.77477 20.4015 4.90311C21.4337 5.94444 22 7.32375 22 8.78527C22 10.2468 21.4337 11.6261 20.3923 12.6583L12.3174 20.7332C12.2352 20.8245 12.1165 20.8702 11.9977 20.8702ZM7.47614 4.21802C6.30692 4.21802 5.1377 4.66561 4.24252 5.55166C2.46129 7.33289 2.46129 10.2285 4.24252 12.0098L11.9977 19.7649L19.7529 12.0098C20.6116 11.1511 21.0865 10.0093 21.0865 8.78527C21.0865 7.56125 20.6116 6.41944 19.7529 5.55166C18.8851 4.69301 17.7342 4.21802 16.5193 4.21802C15.3044 4.21802 14.1535 4.69301 13.2857 5.55166C13.2857 5.55166 13.2857 5.55166 13.2765 5.56079L12.3174 6.51992C12.1439 6.69347 11.8424 6.69347 11.6689 6.51992L10.7006 5.55166C9.81457 4.66561 8.64535 4.21802 7.47614 4.21802Z"
                                fill="currentColor"></path>
                            </svg>
                          </div>
                        </span>
                      </span>
                    </button>
                  </div>
                  <a class="jss457" aria-label="Link To Vehicle Details Page" data-cy="result-link"
                    href="detail.php?id=<?php echo $post['id']; ?>">
                    <div class="MuiPaper-root MuiCard-root jss496 jss497 MuiPaper-elevation1 MuiPaper-rounded"
                      id="https://vehicle-images.driveway.com/t_dw_iso/106357/4T1B11HK4KU264671/61eb60c21613152009be780c-ISOLATED.jpg"
                      tabindex="0" data-cy="vehicle-card">
                      <div class="jss499" data-cy="vehicle-card-image">
                        <div class="lazyload-wrapper ">
                          <img class="MuiCardMedia-root jss500 MuiCardMedia-media MuiCardMedia-img"
                            src="<?php echo $post['img']; ?>"
                            alt="image of 2019 Toyota Camry">
                        </div>
                      </div>
                      <hr class="MuiDivider-root jss543" aria-hidden="true">
                      <div class="MuiCardContent-root jss504" data-cy="vehicle-card-content">
                        <div id="upper-srp-card-content" class="jss542" style="min-height: 170px;">
                          <div>
                            <p class="MuiTypography-root jss119 jss505 MuiTypography-body2" data-cy="vehicle-card-year">
                            <?php echo $post['mfg']; ?></p>
                            <h5 class="MuiTypography-root jss110 jss506 MuiTypography-h5" id="card-make-model-text"
                              data-cy="vehicle-card-make-model"><?php echo $post['brand']; ?> <?php echo $post['model']; ?></h5>
                            <div class="jss509">
                              <hr class="MuiDivider-root jss508 MuiDivider-vertical" aria-hidden="true">
                              <p class="MuiTypography-root jss119 jss507 MuiTypography-body2"
                                data-cy="vehicle-card-mileage">
                                <span><?php echo $post['km']; ?> miles</span>
                              </p>
                            </div>
                          </div>
                          <div>
                            <hr class="MuiDivider-root jss544" aria-hidden="true">
                            <div class="lazyload-wrapper ">
                              <div class="jss532">
                                <p class="MuiTypography-root jss114 jss511 MuiTypography-body1"
                                  data-cy="vehicle-card-price"><span><?php echo $post['price']; ?> VND</span></p>
                                <!-- <div class="jss522" data-cy="result-card-payment-variant">
                                  <p class="MuiTypography-root jss119 jss517 MuiTypography-body2">Est. Loan Payment</p>
                                  <div class="jss518">
                                    <h5 class="MuiTypography-root jss110 jss516 MuiTypography-h5"
                                      data-cy="vehicle-card-monthly-price"><span>$524</span></h5>
                                    <p class="MuiTypography-root jss118 jss519 MuiTypography-body2">/Month</p>
                                  </div>
                                  <p class="MuiTypography-root jss119 jss521 MuiTypography-body2"><span>$1,000 Cash
                                      Down</span></p>
                                </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="jss534 jss536"></div>
                    </div>
                  </a>
                  <div><button
                      class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss35 jss43 has-icon jss552"
                      tabindex="0" type="button"><span class="MuiButton-label"><span
                          class="MuiButton-startIcon MuiButton-iconSizeMedium"><svg width="16" height="17"
                            viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.0404 10.7907C15.4309 11.1812 15.4309 11.8144 15.0404 12.2049C14.6499 12.5954 14.0167 12.5954 13.6262 12.2049L8.33333 6.91201L3.04044 12.2049C2.64991 12.5954 2.01675 12.5954 1.62623 12.2049C1.2357 11.8144 1.2357 11.1812 1.62623 10.7907L7.62622 4.79069C8.01675 4.40017 8.64991 4.40017 9.04044 4.79069L15.0404 10.7907Z"
                              fill="currentColor"></path>
                          </svg></span><span class="button-text">Adjust Terms</span></span></button>
                    <div class="MuiDrawer-root MuiDrawer-docked jss553">
                      <div
                        class="MuiPaper-root MuiDrawer-paper MuiDrawer-paperAnchorBottom MuiDrawer-paperAnchorDockedBottom MuiPaper-elevation0"
                        style="visibility: hidden; width: 100%; position: absolute; max-width: initial; border: none; transform: translateY(506px) translateY(555.578px);">
                        <div class="jss554"><button
                            class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss36 jss39 jss45 jss557"
                            tabindex="0" type="button"><span class="MuiButton-label"><span class="button-text"><svg
                                  width="24" height="24" viewBox="0 0 24 24" fill="#767676"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.7071 9.70711C19.0976 9.31658 19.0976 8.68342 18.7071 8.29289C18.3166 7.90237 17.6834 7.90237 17.2929 8.29289L12 13.5858L6.70711 8.29289C6.31658 7.90237 5.68342 7.90237 5.29289 8.29289C4.90237 8.68342 4.90237 9.31658 5.29289 9.70711L11.2929 15.7071C11.6834 16.0976 12.3166 16.0976 12.7071 15.7071L18.7071 9.70711Z">
                                  </path>
                                </svg></span></span></button></div>
                        <div class="jss556">
                          <div class="jss481 jss558">
                            <div>
                              <div class="jss458">
                                <div class="jss479">
                                  <h6 class="MuiTypography-root jss111 jss460 MuiTypography-h6">Buy for&nbsp;</h6>
                                  <div class="jss480">
                                    <h6 class="MuiTypography-root jss111 jss460 MuiTypography-h6"><span>$524</span></h6>
                                    <p class="MuiTypography-root jss118 jss462 MuiTypography-body2">/Month*</p>
                                  </div>
                                </div>
                                <p class="MuiTypography-root jss119 jss465 MuiTypography-body2"><span>$1,000 Cash
                                    Down</span></p>
                              </div>
                              <div class="jss458"></div>
                              <p class="MuiTypography-root jss119 jss474 MuiTypography-body2">*Estimated monthly payment
                                based on a 60 month loan at 6.95% APR</p>
                            </div><a class="jss478" href="/shop/vehicle/65940984#minicart-jumplink"><button
                                class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss36 jss39 jss476"
                                tabindex="0" type="button"><span class="MuiButton-label"><span
                                    class="button-text">Customize Payment</span></span></button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <?php endforeach; ?>

            </ul>
          </div>
        </div>
      </main>
      <?php require_once('../view/footer.php') ?>
    </div>
  </div>
</body>

</html>
