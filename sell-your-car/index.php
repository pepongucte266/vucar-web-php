<?php 
  session_start();
  $email = isset($_POST['email']) ? $_POST['email'] : false;
  $password = isset($_POST['password']) ? $_POST['password'] : false;
  $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : false;
  $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : false;
  $phone = isset($_POST['phone']) ? $_POST['phone'] : NULL;

  require_once("../controller/UserController.php");
  $userController = new UserController();
  $userController->login($email,$password);

  if($email && $password && $firstName && $lastName && $phone) {
    $name =  $firstName. " " . $lastName;
    $userController->signup($name,$email,$password,$phone);
    $userController->login($email,$password);
  }
?>

<!doctype html>
<html lang="en">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>
  <link href="../assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/driveway.css">
  <link rel="stylesheet" href="../assets/css/test.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon.png">
</head>

<body>
  <div @id="root">
    <div class="MuiBox-root jss1">
      <?php require_once('../view/header.php') ?>
      
      <main class="MuiBox-root jss98" id="maincontent">
        <div class="MuiBox-root jss218 jss206">
          <div class="jss207"><img class="jss208" src="../assets/images/driveway.jpg"
              alt="Person holding mobile phone looking in front passenger side of car."></div>
          <div class="jss209">
            <h3 class="MuiTypography-root jss121 jss210 MuiTypography-h3">Sell your car online</h3>
            <p class="MuiTypography-root jss128 jss211 MuiTypography-body2">Vucar can help you sell your car for cash
              or trade it in to start your next adventure.</p>
            <div class="MuiPaper-root jss212 MuiPaper-elevation16 MuiPaper-rounded">
              <div class="MuiBox-root jss219 jss201">
                <h4 class="MuiTypography-root jss122 jss204 MuiTypography-h4">Start by finding your vehicle.</h4>
                <div class="MuiTabs-root jss220 jss224 jss222">
                  <div class="MuiTabs-scroller MuiTabs-fixed" style="overflow: hidden;">
                    <div class="MuiTabs-flexContainer" role="tablist">
                      <button class="MuiButtonBase-root MuiTab-root jss226 MuiTab-textColorInherit Mui-selected jss228 jss202"
                          tabindex="0" type="button" role="tab" aria-selected="false" data-cy="ymmt-tab"><span
                            class="MuiTab-wrapper">Make/Model</span></button>
                      <button class="MuiButtonBase-root MuiTab-root jss226 MuiTab-textColorInherit jss228 jss202 jss227"
                        tabindex="-1" type="button" role="tab" aria-selected="true" data-cy="lp-tab"><span
                          class="MuiTab-wrapper">License Plate</span></button>
                      
                    </div>
                    <span class="jss229 jss230 MuiTabs-indicator jss221" style="left: 4px; width: 110.469px;"></span>
                  </div>
                </div>
              </div>
              <div class="MuiBox-root tabcontent jss233 jss191 active" id="ymmt-tab">
                <p class=" MuiTypography-root jss116 MuiTypography-body2 ">Enter Your Vehicle Information</p>
                <p class="MuiTypography-root jss119 jss1789 MuiTypography-body2 ">We recommend entering your VIN or
                  license plate number. With that, we can give you an instant cash offer in most cases.</p>
                <div class="MuiBox-root jss1796 jss1787 ">
                  <div class="MuiFormControl-root jss1798 jss1788 MuiFormControl-fullWidth "><label class="MuiFormLabel-root MuiInputLabel-root jss1799 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink
                                " data-shrink="true " id="year-label ">Year</label>
                    <div class="MuiInputBase-root MuiInput-root MuiInputBase-formControl MuiInput-formControl "
                      data-cy="year-select ">
                      <select
                        class="MuiSelect-root jss1802 jss1808 MuiSelect-select MuiSelect-selectMenu MuiInputBase-input MuiInput-input "
                        tabindex="0 " role="button " aria-haspopup="listbox " aria-labelledby="year-label year"
                        id="year" aria-describedby="year-helper-text ">
                        <option value="0"></option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                      </select>
                      <input name="yearSelect " aria-hidden="true " tabindex="-1 " class="MuiSelect-nativeInput "
                        value=" "><svg width="24 " height="24 " viewBox="0 0 24 24 " fill="none " xmlns="http://www.w3.org/2000/svg
                                " class="MuiSelect-icon jss1797 ">
                        <path fill-rule="evenodd " clip-rule="evenodd "
                          d="M12.8081 16.6778C12.3618 17.1074 11.6382 17.1074 11.1919 16.6778L4.33474 10.0778C3.88842 9.64824 3.88842 8.95176 4.33474 8.52218C4.78105 8.09261 5.50467
                                8.09261 5.95098 8.52218L12 14.3444L18.049 8.52218C18.4953 8.09261 19.219 8.09261 19.6653 8.52218C20.1116 8.95176 20.1116 9.64824 19.6653 10.0778L12.8081 16.6778Z "
                          fill="currentColor "></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="MuiBox-root jss1813 jss1787 ">
                  <div class="MuiFormControl-root jss1798 jss1788 MuiFormControl-fullWidth "><label class="MuiFormLabel-root MuiInputLabel-root jss1799 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink
                                " data-shrink="true " id="make-label ">Make</label>
                    <div
                      class="MuiInputBase-root MuiInput-root Mui-disabled Mui-disabled MuiInputBase-formControl MuiInput-formControl "
                      data-cy="make-select ">
                      <select
                        class="MuiSelect-root jss1802 jss1808 MuiSelect-select MuiSelect-selectMenu MuiInputBase-input MuiInput-input  "
                        role="button " aria-disabled="true" aria-haspopup="listbox " aria-labelledby="make-label make"
                        id="make" disabled aria-describedby="make-helper-text ">

                      </select>
                      <input name="makeSelect " aria-hidden="true " tabindex="-1 " class="MuiSelect-nativeInput "
                        value=" "><svg width="24 " height="24 " viewBox="0 0 24 24 " fill="none " xmlns="http://www.w3.org/2000/svg
                                " class="MuiSelect-icon Mui-disabled jss1797 ">
                        <path fill-rule="evenodd " clip-rule="evenodd "
                          d="M12.8081 16.6778C12.3618 17.1074 11.6382 17.1074 11.1919 16.6778L4.33474 10.0778C3.88842 9.64824 3.88842 8.95176 4.33474 8.52218C4.78105
                                8.09261 5.50467 8.09261 5.95098 8.52218L12 14.3444L18.049 8.52218C18.4953 8.09261 19.219 8.09261 19.6653 8.52218C20.1116 8.95176 20.1116 9.64824 19.6653 10.0778L12.8081 16.6778Z "
                          fill="currentColor "></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="MuiBox-root jss1814 jss1787 ">
                  <div class="MuiFormControl-root jss1798 jss1788 MuiFormControl-fullWidth "><label class="MuiFormLabel-root MuiInputLabel-root jss1799 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink
                                " data-shrink="true" id="model-label ">Model</label>
                    <div
                      class="MuiInputBase-root MuiInput-root Mui-disabled Mui-disabled MuiInputBase-formControl MuiInput-formControl "
                      data-cy="model-select ">
                      <select
                        class="MuiSelect-root jss1802 jss1808 MuiSelect-select MuiSelect-selectMenu MuiInputBase-input MuiInput-input  "
                        role="button " aria-disabled="true" aria-haspopup="listbox " aria-labelledby="model-label model"
                        id="model" disabled aria-describedby="model-helper-text ">

                      </select>
                      <input name="modelSelect " aria-hidden="true " tabindex="-1 " class="MuiSelect-nativeInput "
                        value=" "><svg width="24 " height="24 " viewBox="0 0 24 24 " fill="none " xmlns="http://www.w3.org/2000/svg
                                " class="MuiSelect-icon Mui-disabled jss1797 ">
                        <path fill-rule="evenodd " clip-rule="evenodd "
                          d="M12.8081 16.6778C12.3618 17.1074 11.6382 17.1074 11.1919 16.6778L4.33474 10.0778C3.88842 9.64824 3.88842 8.95176 4.33474 8.52218C4.78105
                                8.09261 5.50467 8.09261 5.95098 8.52218L12 14.3444L18.049 8.52218C18.4953 8.09261 19.219 8.09261 19.6653 8.52218C20.1116 8.95176 20.1116 9.64824 19.6653 10.0778L12.8081 16.6778Z "
                          fill="currentColor "></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <!-- <div class="MuiBox-root jss1815 jss1787 ">
                                    <div class="MuiFormControl-root jss1798 jss1788 MuiFormControl-fullWidth "><label class="MuiFormLabel-root MuiInputLabel-root jss1799 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink
                                " data-shrink="true " id="trim-label ">Trim</label>
                                        <div class="MuiInputBase-root MuiInput-root Mui-disabled Mui-disabled MuiInputBase-formControl MuiInput-formControl " data-cy="trim-select ">
                                            <select class="MuiSelect-root jss1802 jss1808 MuiSelect-select MuiSelect-selectMenu MuiInputBase-input MuiInput-input  " role="button " aria-disabled="true
                                " aria-haspopup="listbox " aria-labelledby="trim-label trim " id="trim " aria-describedby="trim-helper-text ">
                                            </select>
                                            <input name="trimSelect " aria-hidden="true " tabindex="-1 " class="MuiSelect-nativeInput " value=" "><svg width="24 " height="24 " viewBox="0 0 24 24 " fill="none " xmlns="http://www.w3.org/2000/svg
                                " class="MuiSelect-icon Mui-disabled jss1797 "><path fill-rule="evenodd " clip-rule="evenodd " d="M12.8081 16.6778C12.3618 17.1074 11.6382 17.1074 11.1919 16.6778L4.33474 10.0778C3.88842 9.64824 3.88842 8.95176 4.33474 8.52218C4.78105
                                8.09261 5.50467 8.09261 5.95098 8.52218L12 14.3444L18.049 8.52218C18.4953 8.09261 19.219 8.09261 19.6653 8.52218C20.1116 8.95176 20.1116 9.64824 19.6653 10.0778L12.8081 16.6778Z " fill="currentColor "></path></svg></div>
                                    </div>
                                </div> -->
                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss47 jss50 jss52 jss203" tabindex="0"
                  type="button " data-cy="step1-get-started" id="start">
                  <span class="MuiButton-label">
                    <span class="button-text ">Get Started</span>
                  </span>
                </button>
              </div>
              <div class="MuiBox-root tabcontent jss233 jss191" id="lp-tab">
                <p class="MuiTypography-root jss129 MuiTypography-body2">Enter Your Vehicle Information</p>
                <div class="MuiBox-root jss240 jss234">
                  <div class="MuiFormControl-root MuiTextField-root jss235 MuiFormControl-fullWidth"><label
                      class="MuiFormLabel-root MuiInputLabel-root jss246 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                      data-shrink="true" for="plateNumberInput" id="plateNumberInput-label">Plate Number</label>
                    <div
                      class="MuiInputBase-root MuiInput-root jss241 MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                      <input aria-invalid="false" id="plateNumberInput" placeholder="EX: ABCD46" type="text"
                        maxlength="7" class="MuiInputBase-input MuiInput-input jss242" value="">
                    </div>
                  </div>
                </div>
                <div class="MuiBox-root jss250 jss236">
                  <div class="MuiFormControl-root jss252 jss237 MuiFormControl-fullWidth"><label
                      class="MuiFormLabel-root MuiInputLabel-root jss253 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                      data-shrink="true" id="stateSelect-label">Registered State</label>
                    <div class="MuiInputBase-root MuiInput-root MuiInputBase-formControl MuiInput-formControl">
                      <div
                        class="MuiSelect-root jss256 jss262 MuiSelect-select MuiSelect-selectMenu MuiInputBase-input MuiInput-input"
                        tabindex="0" role="button" aria-haspopup="listbox"
                        aria-labelledby="stateSelect-label stateSelect" id="stateSelect"
                        aria-describedby="stateSelect-helper-text"><span class="jss257"><span
                            class="jss263"></span></span>
                      </div><input aria-hidden="true" tabindex="-1" class="MuiSelect-nativeInput" value=""><svg
                        width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="MuiSelect-icon jss251">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.8081 16.6778C12.3618 17.1074 11.6382 17.1074 11.1919 16.6778L4.33474 10.0778C3.88842 9.64824 3.88842 8.95176 4.33474 8.52218C4.78105 8.09261 5.50467 8.09261 5.95098 8.52218L12 14.3444L18.049 8.52218C18.4953 8.09261 19.219 8.09261 19.6653 8.52218C20.1116 8.95176 20.1116 9.64824 19.6653 10.0778L12.8081 16.6778Z"
                          fill="currentColor"></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss47 jss50 jss52 jss203" tabindex="0"
                  type="button" data-cy="step1-get-started"><span class="MuiButton-label"><span class="button-text">Get
                      Started</span></span></button>
              </div>

              

            </div>
          </div>
        </div>
        <div class="MuiBox-root jss274 jss267 ">
          <div class="MuiBox-root jss324 jss276 jss275 jss268 "><span
              class="MuiTypography-root jss135 jss273 MuiTypography-overline ">WHY DRIVEWAY?</span>
            <h3 class="MuiTypography-root jss121 jss271 MuiTypography-h3 ">We're Different</h3>
            <div class="MuiBox-root jss325 jss272 ">
              <div class="MuiBox-root jss326 jss269 ">
                <div class="jss282 "><img aria-hidden="true " src="../assets/images/tag-search-icon.svg " alt="logo ">
                  <h3 class="MuiTypography-root jss121 jss280 MuiTypography-h3 ">Transparent</h3>
                  <p class="MuiTypography-root jss128 jss281 MuiTypography-body2 ">No tricks. No haggling. We show you
                    exactly how we determine the value of your vehicle.</p>
                </div>
              </div>
              <div class="MuiBox-root jss327 jss269 ">
                <div class="jss282 "><img aria-hidden="true " src="../assets/images/check-badge-icon.svg " alt="logo ">
                  <h3 class="MuiTypography-root jss121 jss280 MuiTypography-h3 ">Safe</h3>
                  <p class="MuiTypography-root jss128 jss281 MuiTypography-body2 ">Ditch the classified section and
                    questionable meet-ups. Our professional staff is fully vetted.</p>
                </div>
              </div>
              <div class="MuiBox-root jss328 jss269 ">
                <div class="jss282 "><img aria-hidden="true " src="../assets/images/hands-car-icon.svg " alt="logo ">
                  <h3 class="MuiTypography-root jss121 jss280 MuiTypography-h3 ">Local</h3>
                  <p class="MuiTypography-root jss128 jss281 MuiTypography-body2 ">Hey, neighbor. By selling your car to
                    us, you're partnering with a company close to your zip code.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="MuiBox-root jss290 jss285 ">
                    <div class="MuiBox-root jss291 jss286 "><span class="MuiTypography-root jss135 MuiTypography-overline ">HOW IT WORKS</span>
                        <h1 class="MuiTypography-root jss119 MuiTypography-h1 ">We Make It Easy</h1>
                    </div>
                    <div class="MuiBox-root jss292 ">
                        <div class="MuiBox-root jss296 info-card jss293 " id="about-car ">
                            <div class="MuiBox-root jss297 jss294 ">
                                <div class="lazyload-wrapper ">
                                    <div class="lazyload-placeholder "></div>
                                </div>
                            </div>
                            <div class="MuiBox-root jss298 jss295 ">
                                <div><span class="MuiTypography-root jss135 landing-page-info-card-sub-header MuiTypography-overline ">STEP ONE</span>
                                    <h3 class="MuiTypography-root jss121 jss299 landing-page-info-card-header MuiTypography-h3 ">Get to Know Each Other</h3>
                                    <p class="MuiTypography-root jss128 landing-page-info-card-body MuiTypography-body2 ">Provide details about the history and condition of your ride. We'll go over it together at the inspection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="MuiBox-root jss301 info-card jss293 " id="get-offer ">
                            <div class="MuiBox-root jss302 jss294 ">
                                <div class="lazyload-wrapper ">
                                    <div class="lazyload-placeholder "></div>
                                </div>
                            </div>
                            <div class="MuiBox-root jss303 jss295 ">
                                <div><span class="MuiTypography-root jss135 landing-page-info-card-sub-header MuiTypography-overline ">STEP TWO</span>
                                    <h3 class="MuiTypography-root jss121 jss299 landing-page-info-card-header MuiTypography-h3 ">Get an Offer You Trust</h3>
                                    <p class="MuiTypography-root jss128 landing-page-info-card-body MuiTypography-body2 ">Review our guaranteed price for your vehicle–valid for 7 days. We take the guesswork out so you get paid fast.</p>
                                </div>
                            </div>
                        </div>
                        <div class="MuiBox-root jss304 info-card jss293 " id="get-paid ">
                            <div class="MuiBox-root jss305 jss294 ">
                                <div class="lazyload-wrapper ">
                                    <div class="lazyload-placeholder "></div>
                                </div>
                            </div>
                            <div class="MuiBox-root jss306 jss295 ">
                                <div><span class="MuiTypography-root jss135 landing-page-info-card-sub-header MuiTypography-overline ">STEP THREE</span>
                                    <h3 class="MuiTypography-root jss121 jss299 landing-page-info-card-header MuiTypography-h3 ">Sell or Trade Your Car</h3>
                                    <p class="MuiTypography-root jss128 landing-page-info-card-body MuiTypography-body2 ">After we perform a brief inspection, you get cash for your car or you can trade it in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="MuiBox-root jss311 jss307 ">
                    <div class="MuiBox-root jss312 jss308 " id="about-us ">
                        <div class="MuiBox-root jss313 ">
                            <div class="MuiBox-root jss314 "><span class="MuiTypography-root jss135 MuiTypography-overline ">Our Commitment To You</span></div>
                            <div class="MuiBox-root jss315 ">
                                <h3 class="MuiTypography-root jss121 MuiTypography-h3 ">The Driveway Promise</h3>
                            </div>
                            <div class="MuiBox-root jss316 ">
                                <p class="MuiTypography-root jss128 MuiTypography-body2 ">Delivering the most value for your car with an instant offer and an easy pick-up or drop-off experience.</p>
                            </div>
                            <div class="MuiBox-root jss317 "><button class="MuiButtonBase-root MuiButton-root MuiButton-text jss47 jss50 jss52 view-change " tabindex="0 " type="button "><span class="MuiButton-label "><span class="button-text ">Get Started</span></span></button></div>
                        </div>
                        <div class="MuiBox-root jss318 jss309 ">
                            <div class="lazyload-wrapper ">
                                <div class="lazyload-placeholder "></div>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- <div class="jss100 add-extra-space-for-anchor-links ">
                    <a role="button " class="jss101 " data-index="325 " data-name="Text Icon Button " title="TEXT US " aria-label="TEXT US " style="background-image: url(&quot;/static/media/text.fdceb937.svg&quot;); "></a>
                    <a role="button " class="jss101 " data-index="313 " data-name="Chat Icon Button " title="CHAT " aria-label="CHAT " style="background-image: url(&quot;/static/media/chat.551014fe.svg&quot;); "></a>
                </div> -->
      </main>
      <?php require_once('../view/footer.php') ?>
      
    </div>
  </div>
  <div role="dialog" id="popup" class="MuiDialog-root" aria-modal="true"
    style="position: fixed; z-index: 1300; inset: 0px; display: none;">
    <div class="MuiBackdrop-root" aria-hidden="true"
      style="opacity: 1; background-color: rgba(53, 53, 53, 0.5); transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
    </div>
    <div tabindex="0" data-test="sentinelStart"></div>
    <div class="MuiDialog-container MuiDialog-scrollPaper" id="popup-login" role="none presentation" tabindex="-1"
      style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
      <div class="MuiPaper-root jss385 jss572 MuiDialog-paper MuiDialog-paperScrollPaper MuiDialog-paperWidthSm MuiDialog-paperFullWidth MuiPaper-elevation24 MuiPaper-rounded" role="dialog" aria-describedby="modal-content" aria-labelledby="modal-title">
        <section class="jss350" data-cy="auth-modal">
          <i id="close" style="cursor: pointer; position: absolute; top: 1%; right: 2%;">&#10006;</i>
          <div class="jss330"><img alt="" class="jss332" src="../assets/images/woman-tossing-keys.cda39cbe.svg"
              data-testid="woman-tossing-keys-img">
            <h4 class="MuiTypography-root jss109 jss336 MuiTypography-h4">V U C A R</h4>
            <p class="MuiTypography-root jss115 jss336 jss335 MuiTypography-body2">New to Vucar?
              <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss43 jss334" tabindex="0"
                type="button" data-cy="nav-signup-btn">
                <span class="MuiButton-label">
                  <span class="button-text">Create an Account</span>
                </span>
              </button>
            </p>
          </div>
          <!-- <button
            class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss36 jss40 has-icon MuiButton-fullWidth"
            tabindex="0" type="button" data-cy="google-login-btn">
            <span class="MuiButton-label"><span class="MuiButton-startIcon MuiButton-iconSizeMedium"><svg
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                  <defs>
                    <style>
                    .cls-1 {
                      fill: #3e82f1;
                    }

                    .cls-1,
                    .cls-2,
                    .cls-3,
                    .cls-4 {
                      fill-rule: evenodd;
                    }

                    .cls-2 {
                      fill: #32a753;
                    }

                    .cls-3 {
                      fill: #f9bb00;
                    }

                    .cls-4 {
                      fill: #e74235;
                    }

                    </style>
                  </defs>
                  <g id="icon_social_google">
                    <path class="cls-1"
                      d="M14.62,6.73H8.14v2.7h3.71a3.17,3.17,0,0,1-1.38,2.11h0L12.7,13.3h0a6.87,6.87,0,0,0,2.05-5.14A7.39,7.39,0,0,0,14.62,6.73Z">
                    </path>
                    <path class="cls-2"
                      d="M10.47,11.54A4.12,4.12,0,0,1,4.29,9.33h0L2,11.14H2A6.88,6.88,0,0,0,8.14,15a6.52,6.52,0,0,0,4.56-1.7Z">
                    </path>
                    <path class="cls-3"
                      d="M1.25,8A7.14,7.14,0,0,0,2,11.14L4.29,9.33A4.21,4.21,0,0,1,4.08,8a4.51,4.51,0,0,1,.21-1.33h0L2,4.86A7.14,7.14,0,0,0,1.25,8Z">
                    </path>
                    <path class="cls-4"
                      d="M8.14,3.79a3.7,3.7,0,0,1,2.63,1l2-2A6.52,6.52,0,0,0,8.14,1,6.88,6.88,0,0,0,2,4.86L4.29,6.67A4.08,4.08,0,0,1,8.14,3.79Z">
                    </path>
                  </g>
                </svg></span><span class="button-text">Continue with Google</span></span></button>
          <button
            class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss36 jss40 has-icon jss346 MuiButton-fullWidth"
            tabindex="0" type="button" data-cy="facebook-login-btn"><span class="MuiButton-label"><span
                class="MuiButton-startIcon MuiButton-iconSizeMedium"><svg id="icon_social_facebook"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                  <defs>
                    <style>
                    .cls-1 {
                      fill: #00608c;
                    }

                    </style>
                  </defs>
                  <path class="cls-1"
                    d="M8,1A7,7,0,0,0,6.83,14.92V9.49H5.14v-2H6.83V6.09A2.36,2.36,0,0,1,9.34,3.5c.72,0,1.33,0,1.52.07V5.32h-1c-.81,0-1,.38-1,.95V7.52h1.94l-.25,2H8.85V15A7,7,0,0,0,8,1Z">
                  </path>
                </svg></span>
              <span class="button-text">Continue with Facebook</span>
            </span>
          </button> -->
          <p class="MuiTypography-root jss117 jss337 jss336 MuiTypography-body2">Or</p>
          <form method="post" class="jss338" id="form-login" style = "display: none">
            <div class="MuiFormControl-root MuiTextField-root jss339 MuiFormControl-fullWidth"><label
                class="MuiFormLabel-root MuiInputLabel-root jss246 jss342 jss336 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                data-shrink="true" for="email" id="email-label">Email</label>
              <div
                class="MuiInputBase-root MuiInput-root jss241 Mui-error Mui-error MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedEnd">
                <input aria-invalid="true" autocomplete="email" id="email" name="email" type="text"
                  data-cy="email-field" class="MuiInputBase-input MuiInput-input jss242 MuiInputBase-inputAdornedEnd"
                  value="" aria-describedby="email-helper-text">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  data-testid="error-icon" class="jss243 jss244">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12 3.81818C7.48131 3.81818 3.81818 7.48131 3.81818 12C3.81818 16.5187 7.48131 20.1818 12 20.1818C16.5187 20.1818 20.1818 16.5187 20.1818 12C20.1818 7.48131 16.5187 3.81818 12 3.81818ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                    fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.3702 8.62991C15.7253 8.98494 15.7253 9.56054 15.3702 9.91556L9.91568 15.3701C9.56066 15.7251 8.98506 15.7251 8.63004 15.3701C8.27501 15.0151 8.27501 14.4395 8.63004 14.0845L14.0846 8.62991C14.4396 8.27489 15.0152 8.27489 15.3702 8.62991Z"
                    fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.63004 8.62991C8.98506 8.27489 9.56066 8.27489 9.91568 8.62991L15.3702 14.0845C15.7253 14.4395 15.7253 15.0151 15.3702 15.3701C15.0152 15.7251 14.4396 15.7251 14.0846 15.3701L8.63004 9.91556C8.27501 9.56054 8.27501 8.98494 8.63004 8.62991Z"
                    fill="currentColor"></path>
                </svg>
              </div>
              <p class="MuiFormHelperText-root jss249 Mui-error" id="email-helper-text">Please enter your email address.
              </p>
            </div>
            <div class="MuiFormControl-root MuiTextField-root jss340 MuiFormControl-fullWidth"><label
                class="MuiFormLabel-root MuiInputLabel-root jss246 jss342 jss336 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                data-shrink="true" for="password" id="password-label">Password</label>
              <div
                class="MuiInputBase-root MuiInput-root jss241 MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedEnd">
                <input aria-invalid="false" autocomplete="password" id="password" name="password" type="password"
                  data-cy="password-field" class="MuiInputBase-input MuiInput-input jss242 MuiInputBase-inputAdornedEnd"
                  value="">
                <button
                  class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss40 jss45 jss46 jss30 jss366 jss348"
                  tabindex="0" type="button" aria-label="toggle password visibility" aria-pressed="false"
                  data-cy="password-visibility-icon">
                  <span class="MuiButton-label">
                    <span class="button-text">
                      <div class="jss31 jss367">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.78396 11.5001C3.87504 11.6574 3.99578 11.858 4.14536 12.0896C4.52955 12.6845 5.09849 13.4756 5.83714 14.2635C7.32964 15.8555 9.41631 17.3334 12.0001 17.3334C14.5838 17.3334 16.6705 15.8555 18.163 14.2635C18.9017 13.4756 19.4706 12.6845 19.8548 12.0896C20.0044 11.858 20.1251 11.6574 20.2162 11.5001C20.1251 11.3427 20.0044 11.1421 19.8548 10.9105C19.4706 10.3156 18.9017 9.52454 18.163 8.73665C16.6705 7.14466 14.5838 5.66668 12.0001 5.66668C9.41631 5.66668 7.32964 7.14466 5.83714 8.73665C5.09849 9.52454 4.52955 10.3156 4.14536 10.9105C3.99578 11.1421 3.87504 11.3427 3.78396 11.5001ZM21.1668 11.5001C21.9122 11.1274 21.912 11.1271 21.9119 11.1268L21.9105 11.1241L21.9077 11.1184L21.8982 11.0999C21.8902 11.0844 21.879 11.0628 21.8645 11.0354C21.8355 10.9806 21.7935 10.9027 21.7385 10.805C21.6287 10.6097 21.4669 10.3346 21.2549 10.0063C20.8318 9.35113 20.2028 8.47553 19.3789 7.59674C17.7464 5.85538 15.2497 4 12.0001 4C8.75046 4 6.25377 5.85538 4.62124 7.59674C3.79738 8.47553 3.1684 9.35113 2.74529 10.0063C2.53321 10.3346 2.3715 10.6097 2.26164 10.805C2.20669 10.9027 2.16462 10.9806 2.13563 11.0354C2.12113 11.0628 2.1099 11.0844 2.10195 11.0999L2.09249 11.1184L2.08962 11.1241L2.08864 11.126C2.08849 11.1264 2.08798 11.1274 2.83334 11.5001L2.08798 11.1274C1.97067 11.362 1.97067 11.6381 2.08798 11.8727L2.83334 11.5001C2.08798 11.8727 2.08782 11.8724 2.08798 11.8727L2.08962 11.876L2.09249 11.8817L2.10195 11.9002C2.1099 11.9157 2.12113 11.9373 2.13563 11.9647C2.16462 12.0195 2.20669 12.0974 2.26164 12.1951C2.3715 12.3904 2.53321 12.6655 2.74529 12.9938C3.1684 13.649 3.79738 14.5246 4.62124 15.4034C6.25377 17.1447 8.75046 19.0001 12.0001 19.0001C15.2497 19.0001 17.7464 17.1447 19.3789 15.4034C20.2028 14.5246 20.8318 13.649 21.2549 12.9938C21.4669 12.6655 21.6287 12.3904 21.7385 12.1951C21.7935 12.0974 21.8355 12.0195 21.8645 11.9647C21.879 11.9373 21.8902 11.9157 21.8982 11.9002L21.9077 11.8817L21.9105 11.876L21.9115 11.8741C21.9117 11.8738 21.9122 11.8727 21.1668 11.5001ZM21.1668 11.5001L21.9122 11.8727C22.0295 11.6381 22.0292 11.3614 21.9119 11.1268L21.1668 11.5001Z"
                            fill="currentColor"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.9999 9.83338C11.0794 9.83338 10.3332 10.5796 10.3332 11.5001C10.3332 12.4205 11.0794 13.1667 11.9999 13.1667C12.9203 13.1667 13.6665 12.4205 13.6665 11.5001C13.6665 10.5796 12.9203 9.83338 11.9999 9.83338ZM8.6665 11.5001C8.6665 9.6591 10.1589 8.1667 11.9999 8.1667C13.8408 8.1667 15.3332 9.6591 15.3332 11.5001C15.3332 13.341 13.8408 14.8334 11.9999 14.8334C10.1589 14.8334 8.6665 13.341 8.6665 11.5001Z"
                            fill="currentColor"></path>
                        </svg>
                      </div>
                    </span>
                  </span>
                </button>
              </div>
            </div>
            <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss43" tabindex="0"
              type="button" data-cy="nav-forgot-btn">
              <span class="MuiButton-label">
                <span class="button-text">Forgot your password?</span>
              </span>
            </button>
            <button
              class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss39 jss343 MuiButton-fullWidth"
              tabindex="0" type="submit" data-cy="login-submit-btn">
              <span class="MuiButton-label">
                <span class="button-text">Log In</span>
              </span>
            </button>
          </form>

          <form method="post" class="jss632" id = "form-signup" style = "display: none">
            <section class="jss661">
              <div class="MuiFormControl-root MuiTextField-root jss662 jss633">
                <label
                  class="MuiFormLabel-root MuiInputLabel-root jss246 jss636 jss630 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                  data-shrink="true" for="firstName" id="firstName-label">First Name</label>
                <div
                  class="MuiInputBase-root MuiInput-root jss241 Mui-error Mui-error MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedEnd">
                  <input aria-invalid="true" autocomplete="given-name" id="firstName" name="firstName" type="text"
                    data-cy="first-name-field"
                    class="MuiInputBase-input MuiInput-input jss242 MuiInputBase-inputAdornedEnd" value=""
                    aria-describedby="firstName-helper-text">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    data-testid="error-icon" class="jss243 jss244">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M12 3.81818C7.48131 3.81818 3.81818 7.48131 3.81818 12C3.81818 16.5187 7.48131 20.1818 12 20.1818C16.5187 20.1818 20.1818 16.5187 20.1818 12C20.1818 7.48131 16.5187 3.81818 12 3.81818ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                      fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M15.3702 8.62991C15.7253 8.98494 15.7253 9.56054 15.3702 9.91556L9.91568 15.3701C9.56066 15.7251 8.98506 15.7251 8.63004 15.3701C8.27501 15.0151 8.27501 14.4395 8.63004 14.0845L14.0846 8.62991C14.4396 8.27489 15.0152 8.27489 15.3702 8.62991Z"
                      fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M8.63004 8.62991C8.98506 8.27489 9.56066 8.27489 9.91568 8.62991L15.3702 14.0845C15.7253 14.4395 15.7253 15.0151 15.3702 15.3701C15.0152 15.7251 14.4396 15.7251 14.0846 15.3701L8.63004 9.91556C8.27501 9.56054 8.27501 8.98494 8.63004 8.62991Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="MuiFormControl-root MuiTextField-root jss663 jss633">
                <label
                  class="MuiFormLabel-root MuiInputLabel-root jss246 jss636 jss630 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                  data-shrink="true" for="lastName" id="lastName-label">Last Name</label>
                <div class="MuiInputBase-root MuiInput-root jss241 MuiInputBase-formControl MuiInput-formControl">
                  <input aria-invalid="false" autocomplete="family-name" id="lastName" name="lastName" type="text"
                    data-cy="last-name-field" class="MuiInputBase-input MuiInput-input jss242" value="">
                </div>
              </div>
            </section>
            <div class="MuiFormControl-root MuiTextField-root jss633 MuiFormControl-fullWidth">
              <label
                class="MuiFormLabel-root MuiInputLabel-root jss246 jss636 jss630 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                data-shrink="true" for="phone" id="phone-label">Phone Number</label>
              <div
                class="MuiInputBase-root MuiInput-root jss241 MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                <input aria-invalid="false" autocomplete="tel-national" id="phone" name="phone"
                  placeholder="(___) ___-____" type="text" data-cy="phone-field"
                  class="MuiInputBase-input MuiInput-input jss242" value="">
              </div>
            </div>
            <div class="MuiFormControl-root MuiTextField-root jss633 MuiFormControl-fullWidth">
              <label
                class="MuiFormLabel-root MuiInputLabel-root jss246 jss636 jss630 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                data-shrink="true" for="email" id="email-label">Email</label>
              <div
                class="MuiInputBase-root MuiInput-root jss241 MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                <input aria-invalid="false" autocomplete="email" name="email" type="text"
                  data-cy="email-field" class="MuiInputBase-input MuiInput-input jss242" value="">
              </div>
            </div>
            <div class="jss667">
              <div class="MuiFormControl-root MuiTextField-root jss634 MuiFormControl-fullWidth"><label
                  class="MuiFormLabel-root MuiInputLabel-root jss246 jss636 jss630 MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink"
                  data-shrink="true" for="password" id="password-label">Password</label>
                <div
                  class="MuiInputBase-root MuiInput-root jss241 MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedEnd">
                  <input aria-invalid="false" autocomplete="new-password" name="password" type="password"
                    data-cy="password-field"
                    class="MuiInputBase-input MuiInput-input jss242 MuiInputBase-inputAdornedEnd" value=""><button
                    class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss40 jss45 jss46 jss30 jss673 jss642"
                    tabindex="0" type="button" aria-label="toggle password visibility" aria-pressed="false"
                    data-cy="password-visibility-icon"><span class="MuiButton-label"><span class="button-text">
                        <div class="jss31 jss674"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3.78396 11.5001C3.87504 11.6574 3.99578 11.858 4.14536 12.0896C4.52955 12.6845 5.09849 13.4756 5.83714 14.2635C7.32964 15.8555 9.41631 17.3334 12.0001 17.3334C14.5838 17.3334 16.6705 15.8555 18.163 14.2635C18.9017 13.4756 19.4706 12.6845 19.8548 12.0896C20.0044 11.858 20.1251 11.6574 20.2162 11.5001C20.1251 11.3427 20.0044 11.1421 19.8548 10.9105C19.4706 10.3156 18.9017 9.52454 18.163 8.73665C16.6705 7.14466 14.5838 5.66668 12.0001 5.66668C9.41631 5.66668 7.32964 7.14466 5.83714 8.73665C5.09849 9.52454 4.52955 10.3156 4.14536 10.9105C3.99578 11.1421 3.87504 11.3427 3.78396 11.5001ZM21.1668 11.5001C21.9122 11.1274 21.912 11.1271 21.9119 11.1268L21.9105 11.1241L21.9077 11.1184L21.8982 11.0999C21.8902 11.0844 21.879 11.0628 21.8645 11.0354C21.8355 10.9806 21.7935 10.9027 21.7385 10.805C21.6287 10.6097 21.4669 10.3346 21.2549 10.0063C20.8318 9.35113 20.2028 8.47553 19.3789 7.59674C17.7464 5.85538 15.2497 4 12.0001 4C8.75046 4 6.25377 5.85538 4.62124 7.59674C3.79738 8.47553 3.1684 9.35113 2.74529 10.0063C2.53321 10.3346 2.3715 10.6097 2.26164 10.805C2.20669 10.9027 2.16462 10.9806 2.13563 11.0354C2.12113 11.0628 2.1099 11.0844 2.10195 11.0999L2.09249 11.1184L2.08962 11.1241L2.08864 11.126C2.08849 11.1264 2.08798 11.1274 2.83334 11.5001L2.08798 11.1274C1.97067 11.362 1.97067 11.6381 2.08798 11.8727L2.83334 11.5001C2.08798 11.8727 2.08782 11.8724 2.08798 11.8727L2.08962 11.876L2.09249 11.8817L2.10195 11.9002C2.1099 11.9157 2.12113 11.9373 2.13563 11.9647C2.16462 12.0195 2.20669 12.0974 2.26164 12.1951C2.3715 12.3904 2.53321 12.6655 2.74529 12.9938C3.1684 13.649 3.79738 14.5246 4.62124 15.4034C6.25377 17.1447 8.75046 19.0001 12.0001 19.0001C15.2497 19.0001 17.7464 17.1447 19.3789 15.4034C20.2028 14.5246 20.8318 13.649 21.2549 12.9938C21.4669 12.6655 21.6287 12.3904 21.7385 12.1951C21.7935 12.0974 21.8355 12.0195 21.8645 11.9647C21.879 11.9373 21.8902 11.9157 21.8982 11.9002L21.9077 11.8817L21.9105 11.876L21.9115 11.8741C21.9117 11.8738 21.9122 11.8727 21.1668 11.5001ZM21.1668 11.5001L21.9122 11.8727C22.0295 11.6381 22.0292 11.3614 21.9119 11.1268L21.1668 11.5001Z"
                              fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M11.9999 9.83338C11.0794 9.83338 10.3332 10.5796 10.3332 11.5001C10.3332 12.4205 11.0794 13.1667 11.9999 13.1667C12.9203 13.1667 13.6665 12.4205 13.6665 11.5001C13.6665 10.5796 12.9203 9.83338 11.9999 9.83338ZM8.6665 11.5001C8.6665 9.6591 10.1589 8.1667 11.9999 8.1667C13.8408 8.1667 15.3332 9.6591 15.3332 11.5001C15.3332 13.341 13.8408 14.8334 11.9999 14.8334C10.1589 14.8334 8.6665 13.341 8.6665 11.5001Z"
                              fill="currentColor"></path>
                          </svg></div>
                      </span></span></button>
                </div>
              </div>
            </div>
            <div class="jss664"><span
                class="MuiButtonBase-root MuiIconButton-root jss691 MuiCheckbox-root MuiCheckbox-colorSecondary jss665 jss692 Mui-checked MuiIconButton-colorSecondary"
                aria-disabled="false"><span class="MuiIconButton-label"><input class="jss694" id="marketing-opt-in"
                    name="marketing-opt-in" type="checkbox" data-indeterminate="false" data-cy="marketing-opt-in"
                    value="" checked=""><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="jss678">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M20.8362 4.07089C21.3494 4.53272 21.391 5.32308 20.9291 5.83622L9.15991 18.9131C8.91826 19.1816 8.57227 19.3325 8.21108 19.3268C7.84988 19.3211 7.50882 19.1594 7.27576 18.8834L2.04499 12.6891C1.59959 12.1616 1.6661 11.373 2.19355 10.9276C2.721 10.4822 3.50966 10.5487 3.95506 11.0761L8.26081 16.175L19.0709 4.1638C19.5327 3.65067 20.3231 3.60907 20.8362 4.07089Z"
                      fill="currentColor"></path>
                  </svg></span></span>
              <p class="MuiTypography-root jss117 jss630 MuiTypography-body2">Keep me updated on the latest
                Driveway news, tips, and special offers.</p>
            </div>
            <button
              class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss39 jss637 MuiButton-fullWidth"
              tabindex="0" type="submit" data-cy="signup-btn"><span class="MuiButton-label"><span
                  class="button-text">Create Account</span></span></button>
            <div class="jss640">
              <p class="MuiTypography-root jss117 jss630 MuiTypography-body2">By signing in or registering, you
                acknowledge and agree to Driveway’s <a href="https://www.lithia.com/lithia-privacy.htm" component="span"
                  target="_blank">Terms of Use</a> and <a href="https://www.lithia.com/lithia-privacy.htm"
                  component="span" target="_blank">Privacy
                  Policy</a>.</p>
            </div>
          </form>
          <section class="jss355"></section>
        </section>
      </div>
    </div>
    <div tabindex="0" data-test="sentinelEnd"></div>
  </div>
  <script type="module" src="../assets/javascript/data.js"></script>

  <script type="module" src="../assets/javascript/main.js"></script>
  <?php require_once('./boxchat.php') ?>
</body>

</html>
