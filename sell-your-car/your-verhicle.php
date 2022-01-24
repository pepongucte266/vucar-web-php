<?php 
  session_start();
  $display = "display:none;";
  if (isset($_POST['submit']) && $_POST['km'] != "" && $_POST['location'] != "" && $_POST['ar'] != "" && $_POST['color'] != "") {
    $display = "display:block;";
  } 
  else {
    $display = "display:none;";
  } 
  if (isset($_POST['submit']) && $_POST['email'] != "") {
    require_once("../controller/sendMailAction.php");
    $email = $_POST['email'];
    $name = "Guest";
    sendMail($email, $name, "", 'send-price');
  } 
?>

<!doctype html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/driveway.css">
    <link rel="stylesheet" href="../assets/css/test.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon.png">
</head>

<body>
  <form method="post" action="">
    <div @id="root">
        <div class="MuiBox-root jss1">
        <?php require_once('../view/header.php') ?>
        <main class="MuiBox-root jss98" id="maincontent">
            <div class="MuiBox-root jss960 jss478 jss959">
                <div class="MuiBox-root jss961 jss479">
                    <div class="MuiBox-root jss962 jss480">
                        <h3 class="MuiTypography-root jss108 jss485 MuiTypography-h3">Your Vehicle</h3>
                        <div class="MuiBox-root jss978 jss963">
                          

                            <div class="MuiBox-root jss979 jss964">
                                <div class="MuiBox-root jss980">
                                    <div class="MuiPaper-root MuiCard-root jss981 MuiPaper-elevation4 MuiPaper-rounded">
                                        <div class="MuiBox-root jss991 jss984"><img class="jss987" alt="car-placeholder-image" src="../assets/images/placeholder-car.png"></div>
                                        <div class="MuiBox-root jss992 jss982" style = "margin-left: 109px;">
                                            <p class="MuiTypography-root jss118 MuiTypography-body2" id="txtInfo"></p>
                                        </div>
                                        
                                          <div class="MuiBox-root jss993 jss983" style = "margin-left: 46px; margin-top: 36px; <?php echo $display; ?>">
                                              <p class="MuiTypography-root jss117 MuiTypography-body2" style = "font-size: 24px;" id="txtPrice">Chưa có dữ liệu</p>
                                          </div>
                                        
                                        

                                          <div id = "form-input-infor">
                                            <div class = "input-box">
                                              <label class = "label-input" for="">Màu sắc</label>
                                              <select id = "select-color" class = "input-text" name = "color" >
                                                <option value="0"></option>
                                                <option value="white">Trắng</option>
                                                <option value="black">Đen</option>
                                                <option value="red">Đỏ</option>
                                                <option value="blue">Xanh nước biển</option>
                                                <option value="yellow">Vàng</option>
                                                <option value="grey">Xám</option>
                                                <option value="other">Khác</option>
                                              </select>
                                              <input id="input-color" class = "input-text input-other" type="text"> 
                                            </div>
                                            <div class = "input-box">
                                              <label class = "label-input" for="">Số km đã đi</label>
                                              <input class = "input-text" name = "km" type="text">
                                            </div>
                                            <div class = "input-box">
                                              <label class = "label-input" for="">Bạn đang ở đâu?</label>
                                              <select class = "input-text" name = "location" type="text">
                                                <option value="">Tỉnh / Thành phố</option>
                                                <option value="1">An Giang</option>
                                                <option value="2">Bà Rịa - Vũng Tàu</option>
                                                <option value="3">Bạc Liêu</option>
                                                <option value="4">Bắc Kạn</option>
                                                <option value="5">Bắc Giang</option>
                                                <option value="6">Bắc Ninh</option>
                                                <option value="7">Bến Tre</option>
                                                <option value="8">Bình Dương</option>
                                                <option value="9">Bình Định</option>
                                                <option value="10">Bình Phước</option>
                                                <option value="11">Bình Thuận</option>
                                                <option value="12">Cà Mau</option>
                                                <option value="13">Cao Bằng</option>
                                                <option value="14">Cần Thơ</option>
                                                <option value="15">Đà Nẵng</option>
                                                <option value="16">Đắk Lắk</option>
                                                <option value="17">Đắk Nông</option>
                                                <option value="18">Đồng Nai</option>
                                                <option value="19">Đồng Tháp</option>
                                                <option value="20">Điện Biên</option>
                                                <option value="21">Gia Lai</option>
                                                <option value="22">Hà Giang</option>
                                                <option value="23">Hà Nam</option>
                                                <option value="24">Hà Nội</option>
                                                <option value="25">Hà Tĩnh</option>
                                                <option value="26">Hải Dương</option>
                                                <option value="27">Hải Phòng</option>
                                                <option value="28">Hòa Bình</option>
                                                <option value="29">Hậu Giang</option>
                                                <option value="30">Hưng Yên</option>
                                                <option value="31">Thành phố Hồ Chí Minh</option>
                                                <option value="32">Khánh Hòa</option>
                                                <option value="33">Kiên Giang</option>
                                                <option value="34">Kon Tum</option>
                                                <option value="35">Lai Châu</option>
                                                <option value="36">Lào Cai</option>
                                                <option value="37">Lạng Sơn</option>
                                                <option value="38">Lâm Đồng</option>
                                                <option value="39">Long An</option>
                                                <option value="40">Nam Định</option>
                                                <option value="41">Nghệ An</option>
                                                <option value="42">Ninh Bình</option>
                                                <option value="43">Ninh Thuận</option>
                                                <option value="44">Phú Thọ</option>
                                                <option value="45">Phú Yên</option>
                                                <option value="46">Quảng Bình</option>
                                                <option value="47">Quảng Nam</option>
                                                <option value="48">Quảng Ngãi</option>
                                                <option value="49">Quảng Ninh</option>
                                                <option value="50">Quảng Trị</option>
                                                <option value="51">Sóc Trăng</option>
                                                <option value="52">Sơn La</option>
                                                <option value="53">Tây Ninh</option>
                                                <option value="54">Thái Bình</option>
                                                <option value="55">Thái Nguyên</option>
                                                <option value="56">Thanh Hóa</option>
                                                <option value="57">Thừa Thiên - Huế</option>
                                                <option value="58">Tiền Giang</option>
                                                <option value="59">Trà Vinh</option>
                                                <option value="60">Tuyên Quang</option>
                                                <option value="61">Vĩnh Long</option>
                                                <option value="62">Vĩnh Phúc</option>
                                                <option value="63">Yên Bái</option>
                                              </select>
                                            </div>
                                            <div class = "input-box">
                                              <label class = "label-input" for="">Tình trạng của xe?</label>
                                              <div class = "radio-box">
                                                <div>
                                                  <input class = "radio-input" type="radio" name="condition" value="great">
                                                  <span>Great</span>
                                                </div>
                                                <div>
                                                  <input class = "radio-input" type="radio" name="condition" value="good"> 
                                                  <span>Good</span>
                                                </div>
                                                <div>
                                                  <input class = "radio-input" type="radio" name="condition" value="fair">
                                                  <span>Fair</span>
                                                </div>
                                                <div>
                                                  <input class = "radio-input" type="radio" name="condition" value="poor">
                                                  <span>Poor</span>
                                                </div>
                                                
                                              </div>
                                            </div>
                                            <div class = "input-box">
                                              <label class = "label-input" for="">Có đang hiển thị đèn cảnh báo?</label>
                                              <div class = "radio-box">
                                                <div>
                                                  <input class = "radio-input" type="radio" name="wl" value="yes">
                                                  <span>Yes</span>
                                                </div>
                                                <div>
                                                  <input class = "radio-input" type="radio" name="wl" value="no">
                                                  <span>No</span>
                                                </div>
                                              </div>
                                            </div>
                                            <div class = "input-box">
                                              <label class = "label-input" for="">Xe đã từng bị tai nạn?</label>
                                              <div class = "radio-box">
                                                <div>
                                                  <input class = "radio-input" type="radio" name="ar" value="yes">
                                                  <span>Yes</span>
                                                </div>
                                                <div>
                                                  <input class = "radio-input" type="radio" name="ar" value="no">
                                                  <span>No</span>
                                                </div>
                                              </div>
                                            </div>

                                            <div class = "input-box">
                                              <label class = "label-input" for="">Đã từng hút thuốc trong xe?</label>
                                              <div class = "radio-box">
                                                <div>
                                                  <input class = "radio-input" type="radio" name="smoked" value="yes">
                                                  <span>Yes</span>
                                                </div>
                                                <div>
                                                  <input class = "radio-input" type="radio" name="smoked" value="no">
                                                  <span>No</span>
                                                </div>
                                              </div>
                                            </div>

                                            <div class = "input-box">
                                              <label class = "label-input" for="">Xe có đang thế chấp hoặc cho thuê?</label>
                                              <div class = "radio-box">
                                                <div>
                                                  <input class = "radio-input" type="radio" name="loan" value="loan">
                                                  <span>Loan</span>
                                                </div>
                                                <div>
                                                  <input class = "radio-input" type="radio" name="loan" value="lease">
                                                  <span>Lease</span>
                                                </div>
                                                <div>
                                                  <input class = "radio-input" type="radio" name="loan" value="none">
                                                  <span>None</span>
                                                </div>
                                              </div>
                                            </div>

                                            <div class = "input-box">
                                              <label class = "label-input" for="">Xe có bao nhiêu chìa khóa?</label>
                                              <div class = "radio-box">
                                                <div>
                                                  <input class = "radio-input" type="radio" name="keys" value="1">
                                                  <span>1</span>
                                                </div>
                                                <div>
                                                  <input class = "radio-input" type="radio" name="keys" value="2">
                                                  <span>2</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                
                                    <a class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss38 jss39 jss972" tabindex="0" data-cy="continue-confirm-vehicle-button" id="btn-your-vehicle-continue" name = "submit"  type ="submit">
                                      <span class="MuiButton-label">
                                        <span class="button-text">Kiểm định</span>
                                      </span>
                                    </a>

                                    <a href="/vucar" class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss38 jss40 jss973" tabindex="0" type="button" data-cy="edit-confirm-vehicle-button" id="btn-your-vehicle-edit">
                                      <span class="MuiButton-label">
                                        <span class="button-text">Make new Vehicle</span>
                                      </span>
                                    </a>

                                <p class="MuiTypography-root jss117 jss974 MuiTypography-body2">Not your vehicle? Try editing your vehicle information.</p>
                            </div>
                          

                        </div>
                    </div>
                </div>
            </div>
        </main>
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
            <div class="jss338" id="form-send" style="display: none">
              <p>Chúng tôi sẽ gửi định giá cho bạn qua:</p>
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
              </div>
              <div class="flexdd">
                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss39 jss343 MuiButton-fullWidth"
                  tabindex="0" name = "submit" type="submit" data-cy="login-submit-btn">
                  <span class="MuiButton-label">
                    <span class="button-text">Send</span>
                  </span>
                </button>
              </div>
            </div>
            <div class="jss338" id="form-login" style="display: none">
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
              <button
                class="MuiButtonBase-root MuiButton-root MuiButton-text jss34 jss37 jss39 jss343 MuiButton-fullWidth"
                tabindex="0" type="submit" data-cy="login-submit-btn">
                <span class="MuiButton-label">
                  <span class="button-text">Log In</span>
                </span>
              </button>
            </div>
            <div class="jss632" id="form-signup" style="display: none">
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
                  <input aria-invalid="false" autocomplete="email" name="email" type="text" data-cy="email-field"
                    class="MuiInputBase-input MuiInput-input jss242" value="">
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
            </div>

            <section class="jss355"></section>
          </section>
        </div>
      </div>
      <div tabindex="0" data-test="sentinelEnd"></div>
    </div>
  </form>
  <?php require_once('../view/footer.php') ?>
    <script type="module" src="../assets/javascript/data.js"></script>
    <script type="module" src="../assets/javascript/main.js"></script>
    <script type="module" src="../assets/javascript/your-verhicle.js"></script>
    <?php require_once('./boxchat.php') ?>
</body>

</html>
