<?php 
 header("Location: /sell-your-car")
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vucar</title>
  <link rel="stylesheet" href="style.css">
  <link href="//db.onlinewebfonts.com/c/326619a7a5fb14952717941fcc7b05b8?family=Nokio+Medium" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="header flex-div">
    <div class= "left-block flex-div">
      <div class="left-block">
        <h2>
          Find cars
        </h2>
      </div>
      <div class="left-block">
        <h2>
          How it works
        </h2>
      </div>
      <div class="left-block">
        <h2>
          Support
        </h2>
      </div>
    </div>

    <div class="middle-block">
      <h2 class = "logo">vucar</h2>
    </div>

    <div class="right-block">
      <h2>login</h2>
    </div>
  </div>
  <div class="main flex-div">
    <div class="content">
      <h1>Your car <br> on your terms</h1>
      <p>Starting at $80/week</p>
      <input class = "main-btn" type="button" value="Find your car">
    </div>
    <div class="banner">
      <img src="images/baner.jpg" alt="">
    </div>
  </div>
  <div class="mission flex-div">
    <div class = "slogan">
      <h2>Flex car</h2>
      <h2>your next car</h2>
    </div>
    <div class = "flex-div">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="none" fill-rule="evenodd"><path d="M40.7998 44.4V39.795L46.1413 31.3503C47.8999 28.1073 45.7692 22.9942 44.0367 18" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M39.5999 32.3406L37.6174 24.7959C37.5325 24.4542 37.384 24.1336 37.1803 23.8526C36.9767 23.5716 36.7221 23.3358 36.4311 23.1589C36.1402 22.982 35.8187 22.8675 35.4854 22.822C35.1521 22.7766 34.8135 22.801 34.4892 22.8939C34.1649 22.9869 33.8614 23.1465 33.5962 23.3635C33.331 23.5805 33.1094 23.8506 32.9442 24.1582C32.7791 24.4658 32.6736 24.8048 32.634 25.1555C32.5944 25.5062 32.6213 25.8617 32.7134 26.2014L34.9045 34.5113L33.4208 37.3243C32.7304 39.6122 32.3861 41.9998 32.4003 44.3998" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.2002 44.4V39.795L1.85821 31.3503C0.100878 28.103 2.23007 22.9942 3.96142 18" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.3999 32.3396L10.3824 24.7957C10.4673 24.454 10.6158 24.1334 10.8195 23.8525C11.0231 23.5715 11.2777 23.3358 11.5687 23.1589C11.8596 22.982 12.1811 22.8675 12.5144 22.822C12.8477 22.7766 13.1863 22.801 13.5106 22.8939C13.8349 22.9868 14.1384 23.1464 14.4036 23.3634C14.6688 23.5804 14.8904 23.8505 15.0556 24.1581C15.2207 24.4657 15.3262 24.8046 15.3658 25.1553C15.4054 25.5059 15.3784 25.8614 15.2864 26.201L13.0953 34.5101L14.579 37.3229C15.2696 39.6112 15.6139 41.9993 15.5995 44.3998" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24.0088 37.2066L24 37.2002L30 40.8002" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.54727 28.1329L2.6423 14.943C2.40517 14.4888 2.33902 13.9566 2.45712 13.453C2.57522 12.9494 2.86882 12.5117 3.27904 12.2277L13.572 4.96599C13.7186 4.86514 13.8882 4.80802 14.0628 4.80063C14.2375 4.79324 14.4108 4.83585 14.5646 4.92399C14.7183 5.01213 14.8467 5.14252 14.9363 5.30144C15.0259 5.46035 15.0733 5.64191 15.0736 5.82698V12.675H18.5668C18.824 12.675 19.0708 12.7832 19.2527 12.9758C19.4346 13.1683 19.5368 13.4295 19.5368 13.7019V21.3899L25.4876 29.9998V20.5499C25.4878 20.3902 25.5231 20.2328 25.5908 20.09L28.5821 13.242C28.6628 13.0713 28.7869 12.9279 28.9403 12.8277C29.0938 12.7276 29.2706 12.6747 29.4509 12.675H32.9262V5.82698C32.9265 5.64191 32.9739 5.46035 33.0635 5.30144C33.1531 5.14252 33.2815 5.01213 33.4353 4.92399C33.589 4.83585 33.7623 4.79324 33.937 4.80063C34.1116 4.80802 34.2812 4.86514 34.4278 4.96599L44.7208 12.2277C45.131 12.5117 45.4246 12.9494 45.5427 13.453C45.6608 13.9566 45.5946 14.4888 45.3575 14.943L38.4525 28.1329" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M23.9912 37.2066L24 37.2002L18 40.8002" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
      <h3>No long-term commitments, just a weekly bill  </h3>
    </div>
    <div class = "flex-div">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44"><g fill="none" fill-rule="evenodd"><path d="M45.302 10.7742C44.3133 8.78752 42.7625 7.13527 40.8423 6.02297C38.922 4.91067 36.7172 4.3874 34.502 4.51823C29.932 4.77023 28.02 7.06623 24 10.5002C19.98 7.06623 18.068 4.77023 13.5 4.51823C11.2847 4.3874 9.07989 4.91067 7.15968 6.02297C5.23947 7.13527 3.6886 8.78752 2.69996 10.7742C-3.00004 22.5002 14.736 35.8482 24 43.5002C33.264 35.8482 51 22.5002 45.302 10.7742Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24 10.5V43.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24 21L31.5 28.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16.5 28.5L24 21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24 21.0002L30.514 14.4862C30.9577 14.0423 31.5041 13.7148 32.1046 13.5326C32.7052 13.3503 33.3414 13.319 33.9569 13.4415C34.5725 13.5639 35.1483 13.8362 35.6334 14.2343C36.1186 14.6325 36.498 15.1441 36.7382 15.7239C36.9784 16.3038 37.0718 16.9339 37.0102 17.5584C36.9487 18.183 36.734 18.7827 36.3853 19.3045C36.0366 19.8263 35.5646 20.254 35.011 20.5498C34.4575 20.8456 33.8396 21.0003 33.212 21.0002H24Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24.0008 21.0002L17.4868 14.4862C17.0431 14.0423 16.4968 13.7148 15.8962 13.5326C15.2956 13.3503 14.6594 13.319 14.0439 13.4415C13.4283 13.5639 12.8525 13.8362 12.3674 14.2343C11.8822 14.6325 11.5028 15.1441 11.2626 15.7239C11.0225 16.3038 10.929 16.9339 10.9906 17.5584C11.0521 18.183 11.2668 18.7827 11.6155 19.3045C11.9642 19.8263 12.4362 20.254 12.9898 20.5498C13.5433 20.8456 14.1612 21.0003 14.7888 21.0002H24.0008Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
      <h3>Insurance, maintenance, and roadside included</h3>
    </div>
    <div class = "flex-div">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="none" fill-rule="evenodd"><path d="M8.95 20.7459L4.5 23.7459L1.5 19.2959" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.50293 23.748C4.56564 18.6612 6.47276 13.77 9.86997 9.98331C13.2672 6.19662 17.9235 3.77186 22.9737 3.15955C28.024 2.54724 33.1248 3.78902 37.3285 6.65415C41.5322 9.51929 44.553 13.813 45.8295 18.7375C47.106 23.662 46.5515 28.8824 44.269 33.4289C41.9865 37.9753 38.1313 41.5387 33.4195 43.4569C28.7078 45.3751 23.4599 45.5176 18.6509 43.8581C13.842 42.1986 9.7989 38.8499 7.27293 34.434" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.75 27.9668V29.4998C15.75 29.8976 15.908 30.2792 16.1893 30.5605C16.4706 30.8418 16.8522 30.9998 17.25 30.9998C17.6478 30.9998 18.0294 30.8418 18.3107 30.5605C18.592 30.2792 18.75 29.8976 18.75 29.4998V27.9998" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M36.75 27.9668V29.4998C36.75 29.8976 36.592 30.2792 36.3107 30.5605C36.0294 30.8418 35.6478 30.9998 35.25 30.9998C34.8522 30.9998 34.4706 30.8418 34.1893 30.5605C33.908 30.2792 33.75 29.8976 33.75 29.4998V27.9998" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M34.125 24.25C34.2245 24.25 34.3198 24.2895 34.3902 24.3598C34.4605 24.4302 34.5 24.5255 34.5 24.625" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M33.75 24.625C33.75 24.5255 33.7895 24.4302 33.8598 24.3598C33.9302 24.2895 34.0255 24.25 34.125 24.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M34.125 25C34.0255 25 33.9302 24.9605 33.8598 24.8902C33.7895 24.8198 33.75 24.7245 33.75 24.625" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M34.5 24.625C34.5 24.7245 34.4605 24.8198 34.3902 24.8902C34.3198 24.9605 34.2245 25 34.125 25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.375 24.25C18.2755 24.25 18.1802 24.2895 18.1098 24.3598C18.0395 24.4302 18 24.5255 18 24.625" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.75 24.625C18.75 24.5255 18.7105 24.4302 18.6402 24.3598C18.5698 24.2895 18.4745 24.25 18.375 24.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.375 25C18.4745 25 18.5698 24.9605 18.6402 24.8902C18.7105 24.8198 18.75 24.7245 18.75 24.625" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18 24.625C18 24.7245 18.0395 24.8198 18.1098 24.8902C18.1802 24.9605 18.2755 25 18.375 25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 21.25H35.5C36.0304 21.25 36.5391 21.4607 36.9142 21.8358C37.2893 22.2109 37.5 22.7196 37.5 23.25V27C37.5 27.2652 37.3946 27.5196 37.2071 27.7071C37.0196 27.8946 36.7652 28 36.5 28H16C15.7348 28 15.4804 27.8946 15.2929 27.7071C15.1054 27.5196 15 27.2652 15 27V23.25C15 22.7196 15.2107 22.2109 15.5858 21.8358C15.9609 21.4607 16.4696 21.25 17 21.25V21.25Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M35.25 21.25L33.55 17.46C33.3893 17.0312 33.1016 16.6616 32.7253 16.4007C32.3489 16.1398 31.9019 16 31.444 16H21.059C20.6006 15.9994 20.1529 16.1389 19.776 16.3999C19.399 16.6608 19.1108 17.0307 18.95 17.46L17.25 21.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
      <h3>Swap to another car or return anytime you like</h3>
    </div>
  </div>

  <div class="wrap">
    <div class="body-top">
      <h2>Choose your car</h2>
    </div>
    <div class="body-cards">
      <a class = "card" href="">
        <div class="card-title">economy</div>
        <div class="card-detail">
          <div class="card-detail-price">$80.00/wk + $0.49/mi </div>
          <div class="card-detail-price-flexcar">
            <div>$60.00/wk + $0.39/mi </div>
            <div>Flexcar</div>
          </div>
        </div>
      </a>
      <a class = "card" href="">
        <div class="card-title">economy</div>
        <div class="card-detail">
          <div class="card-detail-price">$80.00/wk + $0.49/mi </div>
          <div class="card-detail-price-flexcar">
            <div>$60.00/wk + $0.39/mi </div>
            <div>Flexcar</div>
          </div>
        </div>
      </a>
      <a class = "card" href="">
        <div class="card-title">economy</div>
        <div class="card-detail">
          <div class="card-detail-price">$80.00/wk + $0.49/mi </div>
          <div class="card-detail-price-flexcar">
            <div>$60.00/wk + $0.39/mi </div>
            <div>Flexcar</div>
          </div>
        </div>
      </a>
      <a class = "card" href="">
        <div class="card-title">economy</div>
        <div class="card-detail">
          <div class="card-detail-price">$80.00/wk + $0.49/mi </div>
          <div class="card-detail-price-flexcar">
            <div>$60.00/wk + $0.39/mi </div>
            <div>Flexcar</div>
          </div>
        </div>
      </a>
    </div>
  
    <div class="body-footer">
      <div class="body-footer-logo">Flexcar+</div>
      <div class="body-footer-content">
        Save $20/week on your car plus discounted mileage with our Flexcar+ membership plan ($199/year).
      </div>
    
      <div class="body-footer-learnmore">
        <div>Learn more</div>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M 18.5 12 H 5 M 14.75 15.75 L 18.5 12 L 14.75 8.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
      </div>
    </div>
  </div>

  <div class="hiw">
    <div class="hiw-box">
      <h1>How it works</h1>
      <div class="space"></div>
      <div class="hiw-flex">
        <div class="hiw-cards">
          <div class="hiw-card">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="none" fill-rule="evenodd"><path d="M31.5 40.5C37.299 40.5 42 35.799 42 30C42 24.201 37.299 19.5 31.5 19.5C25.701 19.5 21 24.201 21 30C21 35.799 25.701 40.5 31.5 40.5Z" stroke="#00FFCD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M31.5 23C34.091 23 36.3532 24.4077 37.5635 26.5" stroke="#00FFCD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M46.5 45L38.972 37.472" stroke="#00FFCD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.90205 13.716L9.40005 5.92C9.7222 5.06172 10.2987 4.32224 11.0524 3.80043C11.8062 3.27863 12.7013 2.99937 13.6181 3H31.3821C32.2989 2.9988 33.1943 3.27784 33.9482 3.79972C34.702 4.3216 35.2784 5.0614 35.6001 5.92L39.1021 13.72" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 26.6V30C3 30.7956 3.31607 31.5587 3.87868 32.1213C4.44129 32.6839 5.20435 33 6 33C6.79565 33 7.55871 32.6839 8.12132 32.1213C8.68393 31.5587 9 30.7956 9 30V27" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.25 19.5C8.05109 19.5 7.86032 19.579 7.71967 19.7197C7.57902 19.8603 7.5 20.0511 7.5 20.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 20.25C9 20.0511 8.92098 19.8603 8.78033 19.7197C8.63968 19.579 8.44891 19.5 8.25 19.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.25 21C8.44891 21 8.63968 20.921 8.78033 20.7803C8.92098 20.6397 9 20.4489 9 20.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 20.25C7.5 20.4489 7.57902 20.6397 7.71967 20.7803C7.86032 20.921 8.05109 21 8.25 21" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M42.696 16.5C42.1691 15.5873 41.4111 14.8295 40.4982 14.3029C39.5854 13.7762 38.5499 13.4993 37.496 13.5H7.49605C5.90475 13.5 4.37863 14.1321 3.25341 15.2574C2.12819 16.3826 1.49605 17.9087 1.49605 19.5V24C1.49605 24.7956 1.81212 25.5587 2.37473 26.1213C2.93734 26.6839 3.7004 27 4.49605 27H15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
            <div class="hiw-card-content">
              <div class="hiw-card-title">Choose your car</div>
              <div class="hiw-card-detail">
                Choose from a range of makes and models for a low weekly payment, plus mileage. Insurance and maintenance included.
              </div>
            </div>
          </div>
          <div class="hiw-card">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="none" fill-rule="evenodd"><path d="M31.5 40.5C37.299 40.5 42 35.799 42 30C42 24.201 37.299 19.5 31.5 19.5C25.701 19.5 21 24.201 21 30C21 35.799 25.701 40.5 31.5 40.5Z" stroke="#00FFCD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M31.5 23C34.091 23 36.3532 24.4077 37.5635 26.5" stroke="#00FFCD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M46.5 45L38.972 37.472" stroke="#00FFCD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.90205 13.716L9.40005 5.92C9.7222 5.06172 10.2987 4.32224 11.0524 3.80043C11.8062 3.27863 12.7013 2.99937 13.6181 3H31.3821C32.2989 2.9988 33.1943 3.27784 33.9482 3.79972C34.702 4.3216 35.2784 5.0614 35.6001 5.92L39.1021 13.72" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 26.6V30C3 30.7956 3.31607 31.5587 3.87868 32.1213C4.44129 32.6839 5.20435 33 6 33C6.79565 33 7.55871 32.6839 8.12132 32.1213C8.68393 31.5587 9 30.7956 9 30V27" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.25 19.5C8.05109 19.5 7.86032 19.579 7.71967 19.7197C7.57902 19.8603 7.5 20.0511 7.5 20.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 20.25C9 20.0511 8.92098 19.8603 8.78033 19.7197C8.63968 19.579 8.44891 19.5 8.25 19.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.25 21C8.44891 21 8.63968 20.921 8.78033 20.7803C8.92098 20.6397 9 20.4489 9 20.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 20.25C7.5 20.4489 7.57902 20.6397 7.71967 20.7803C7.86032 20.921 8.05109 21 8.25 21" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M42.696 16.5C42.1691 15.5873 41.4111 14.8295 40.4982 14.3029C39.5854 13.7762 38.5499 13.4993 37.496 13.5H7.49605C5.90475 13.5 4.37863 14.1321 3.25341 15.2574C2.12819 16.3826 1.49605 17.9087 1.49605 19.5V24C1.49605 24.7956 1.81212 25.5587 2.37473 26.1213C2.93734 26.6839 3.7004 27 4.49605 27H15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
            <div class="hiw-card-content">
              <div class="hiw-card-title">Choose your car</div>
              <div class="hiw-card-detail">
                Choose from a range of makes and models for a low weekly payment, plus mileage. Insurance and maintenance included.
              </div>
            </div>
          </div>
          <div class="hiw-card">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="none" fill-rule="evenodd"><path d="M31.5 40.5C37.299 40.5 42 35.799 42 30C42 24.201 37.299 19.5 31.5 19.5C25.701 19.5 21 24.201 21 30C21 35.799 25.701 40.5 31.5 40.5Z" stroke="#00FFCD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M31.5 23C34.091 23 36.3532 24.4077 37.5635 26.5" stroke="#00FFCD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M46.5 45L38.972 37.472" stroke="#00FFCD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.90205 13.716L9.40005 5.92C9.7222 5.06172 10.2987 4.32224 11.0524 3.80043C11.8062 3.27863 12.7013 2.99937 13.6181 3H31.3821C32.2989 2.9988 33.1943 3.27784 33.9482 3.79972C34.702 4.3216 35.2784 5.0614 35.6001 5.92L39.1021 13.72" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 26.6V30C3 30.7956 3.31607 31.5587 3.87868 32.1213C4.44129 32.6839 5.20435 33 6 33C6.79565 33 7.55871 32.6839 8.12132 32.1213C8.68393 31.5587 9 30.7956 9 30V27" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.25 19.5C8.05109 19.5 7.86032 19.579 7.71967 19.7197C7.57902 19.8603 7.5 20.0511 7.5 20.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 20.25C9 20.0511 8.92098 19.8603 8.78033 19.7197C8.63968 19.579 8.44891 19.5 8.25 19.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.25 21C8.44891 21 8.63968 20.921 8.78033 20.7803C8.92098 20.6397 9 20.4489 9 20.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 20.25C7.5 20.4489 7.57902 20.6397 7.71967 20.7803C7.86032 20.921 8.05109 21 8.25 21" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M42.696 16.5C42.1691 15.5873 41.4111 14.8295 40.4982 14.3029C39.5854 13.7762 38.5499 13.4993 37.496 13.5H7.49605C5.90475 13.5 4.37863 14.1321 3.25341 15.2574C2.12819 16.3826 1.49605 17.9087 1.49605 19.5V24C1.49605 24.7956 1.81212 25.5587 2.37473 26.1213C2.93734 26.6839 3.7004 27 4.49605 27H15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
            <div class="hiw-card-content">
              <div class="hiw-card-title">Choose your car</div>
              <div class="hiw-card-detail">
                Choose from a range of makes and models for a low weekly payment, plus mileage. Insurance and maintenance included.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="space"></div>
    </div>

    <input class = "main-btn hiw-btn" type="button" value="Find your car">
  </div>

  <div class="flexcar-header">
    <h2>Why customers love Flexcar</h2>
  </div>

  <div class="flexcar-main">
    <div class="flexcar-cards">
      <div class="flexcar-card">
        <svg class="flex-card-icon" xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40"><g fill="none" fill-rule="evenodd"><path d="M13.4164 0L24.2669 5.99251C20.259 13.3833 18.1818 20.2996 18.0352 26.7416V40H0V27.6405C0.0488759 23.0961 1.36852 18.2272 3.95894 13.0337C6.54936 7.79026 9.70186 3.44569 13.4164 0ZM39.1496 0L50 5.99251C45.9922 13.3833 43.915 20.2996 43.7683 26.7416V40H25.7331V27.6405C25.782 23.0961 27.1017 18.2272 29.6921 13.0337C32.2825 7.79026 35.435 3.44569 39.1496 0Z" fill="#00FFCD"></path></g></svg>
        <div class="flexcar-card-content">
          <span>"The convenience of having a car but not having the responsibility of it is great. Other companies I've tried make you pay extra for everything while Flexcar is upfront about all the costs and most importantly, affordable."</span>
          <div class="author">Jasmine Z, Atlanta</div>
        </div>
        
      </div>
      <div class="flexcar-card">
        <svg class="flex-card-icon" xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40"><g fill="none" fill-rule="evenodd"><path d="M13.4164 0L24.2669 5.99251C20.259 13.3833 18.1818 20.2996 18.0352 26.7416V40H0V27.6405C0.0488759 23.0961 1.36852 18.2272 3.95894 13.0337C6.54936 7.79026 9.70186 3.44569 13.4164 0ZM39.1496 0L50 5.99251C45.9922 13.3833 43.915 20.2996 43.7683 26.7416V40H25.7331V27.6405C25.782 23.0961 27.1017 18.2272 29.6921 13.0337C32.2825 7.79026 35.435 3.44569 39.1496 0Z" fill="#00FFCD"></path></g></svg>
        <div class="flexcar-card-content">
          <span>"The convenience of having a car but not having the responsibility of it is great. Other companies I've tried make you pay extra for everything while Flexcar is upfront about all the costs and most importantly, affordable."</span>
          <div class="author">Jasmine Z, Atlanta</div>
        </div>
        
      </div>
      <div class="flexcar-card">
        <svg class="flex-card-icon" xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40"><g fill="none" fill-rule="evenodd"><path d="M13.4164 0L24.2669 5.99251C20.259 13.3833 18.1818 20.2996 18.0352 26.7416V40H0V27.6405C0.0488759 23.0961 1.36852 18.2272 3.95894 13.0337C6.54936 7.79026 9.70186 3.44569 13.4164 0ZM39.1496 0L50 5.99251C45.9922 13.3833 43.915 20.2996 43.7683 26.7416V40H25.7331V27.6405C25.782 23.0961 27.1017 18.2272 29.6921 13.0337C32.2825 7.79026 35.435 3.44569 39.1496 0Z" fill="#00FFCD"></path></g></svg>
        <div class="flexcar-card-content">
          <span>"The convenience of having a car but not having the responsibility of it is great. Other companies I've tried make you pay extra for everything while Flexcar is upfront about all the costs and most importantly, affordable."</span>
          <div class="author">Jasmine Z, Atlanta</div>
        </div>
        
      </div>
      <div class="flexcar-card">
        <svg class="flex-card-icon" xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40"><g fill="none" fill-rule="evenodd"><path d="M13.4164 0L24.2669 5.99251C20.259 13.3833 18.1818 20.2996 18.0352 26.7416V40H0V27.6405C0.0488759 23.0961 1.36852 18.2272 3.95894 13.0337C6.54936 7.79026 9.70186 3.44569 13.4164 0ZM39.1496 0L50 5.99251C45.9922 13.3833 43.915 20.2996 43.7683 26.7416V40H25.7331V27.6405C25.782 23.0961 27.1017 18.2272 29.6921 13.0337C32.2825 7.79026 35.435 3.44569 39.1496 0Z" fill="#00FFCD"></path></g></svg>
        <div class="flexcar-card-content">
          <span>"The convenience of having a car but not having the responsibility of it is great. Other companies I've tried make you pay extra for everything while Flexcar is upfront about all the costs and most importantly, affordable."</span>
          <div class="author">Jasmine Z, Atlanta</div>
        </div>
        
      </div>
    </div>
  </div>

</body>
</html> -->
