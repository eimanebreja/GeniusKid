<!DOCTYPE html>
<html lang="ja">
  <head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TG4B878');</script>
<!-- End Google Tag Manager -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="お子様の将来を豊かにする英語とプログラミングが 同時に学べる画期的なスクールが開校！" />
    <title>Genius Kids</title>
    <link rel="icon" href="assets/images/icon.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="assets/css/modal.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" rel="stylesheet" />

   <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133547722-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-133547722-1');
    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TG4B878"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="check-content-area">
      <div id="open-modal" class="form-style-design">
        <div>
          <div class="modal-padding">
             <div class="image-header">
               <a href="index">
                <img src="assets/images/logo2.png" />
               </a>
             </div>
               <div class="modal-below-logo">
                <p>お申し込み</p>

              </div>
                <!-- <form method="POST" action="mail.php"> -->
            <div class="form-style">
                  <div class="row sunday">
                        <div class="col s12 m2 l2" style="margin-top:-25px;">
                           <div class="input-field col s12 m12 l12">
                           <label for="firstname">体験希望日</label>
                       </div>
                    </div>



                    <?php
$monthss = "月";
$dayss = "日";
$currentMonth = date('m');
$nextMonth = date('m', strtotime('+1 month'));

$year = date('Y');
$monthsArr = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];

$sundaysArr = array();

for ($j = 0; $j <= count($monthsArr) - 1; $j++) {
    if ($monthsArr[$j] == $currentMonth || $monthsArr[$j] == $nextMonth) {
        $days = cal_days_in_month(CAL_GREGORIAN, $monthsArr[$j], $year);

        for ($i = 1; $i <= $days; $i++) {
            $day = date('Y-' . $monthsArr[$j] . '-' . $i);
            $result = date("l", strtotime($day));

            if ($result == "Sunday") {
                $getSunday = date($monthsArr[$j] . '-d', strtotime($day));
                array_push($sundaysArr, $getSunday);
            }
        }
    }
}

$getCurrDay = date('m-d');
$j = 0;
for ($i = 0; $i < count($sundaysArr) - 1; $i++) {

    if ($getCurrDay < $sundaysArr[$i]) {
        if ($j < 3) {
            $result = explode('-', $sundaysArr[$i]);?>
                    <div class="col s4 m3 l3">
                        <div class="radio">
                            <input name="input-sunday" id="<?php echo $result[0] . '月' . $result[1] . '日'; ?>" type="radio"  value="<?php echo $result[0] . '月' . $result[1] . '日'; ?>" />
                             <label for="<?php echo $result[0] . '月' . $result[1] . '日'; ?>">
                             <?php echo $result[0] . '月' . $result[1] . '日'; ?> <br> <span>11:45~13:30 </span>
            </label>
                        </div>
                      </div>

                      <?php
$j++;
        }

    }
}
?>
                    </div>
                 <div class="row firstname">
                    <div class="col s12 m2 l2">
                        <div class="input-field col s12 m12 l12">
                           <label for="firstname">名前</label>
                       </div>
                    </div>
                    <div class="col s6 m5 l5">
                    <div class="input-field col s12 m12 l12">
                        <input placeholder="姓" name="firstname" type="text" class="validate"  id="input-firstname">
                    </div>
                  </div>
                  <div class="col s6 m5 l5">
                    <div class="input-field col s12 m12 l12">
                        <input id="input-lastname" placeholder="名" name="lastname" type="text" class="validate">
                    </div>
                  </div>
              </div>

              <div class="row say">
                <div class="col s12 m2 l2">
                    <div class="input-field col s12 m12 l12">
                        <label for="firstname">カナ</label>
                      </div>
                  </div>
                  <div class="col s6 m5 l5">
                    <div class="input-field col s12 m12 l12">
                        <input id="input-say" placeholder="セイ" name="say" type="text" class="validate">
                    </div>
                  </div>
                  <div class="col s6 m5 l5">
                    <div class="input-field col s12 m12 l12">
                        <input id="input-may" placeholder="メイ" name="may" type="text" class="validate">
                    </div>
                  </div>
              </div>

              <div class="row email">
                <div class="col s12 m2 l2">
                <div class="input-field col s12 m12 l12">
                  <label for="firstname">E-Mail</label>
                </div>
                </div>
                <div class="col s12 m10 l10">
                <div class="input-field col s12 m12 l12">
                        <input  id="input-email" placeholder="info@sample.jp" name="email" type="text" class="validate">
                    </div>
                </div>
              </div>
              <div class="row phone">
                <div class="col s12 m2 l2">
                <div class="input-field col s12 m12 l12">
                  <label for="firstname">電話番号</label>
                </div>
                </div>
                <div class="col s12 m10 l10">
                <div class="input-field col s12 m12 l12">
                        <input id="input-phone" placeholder="080-1111-1111" name="phone" type="text" class="validate">
                    </div>
                </div>
              </div>

              <div class="row bday">
                <div class="col s12 m2 l2">
                <div class="input-field col s12 m12 l12">
                <label for="firstname">生年月日</label>
                </div>
                </div>
                <div class="col s4 m3 l3">
                    <div class="input-field col s12">
                      <select id="input-years" name="years">
                      <?php
$nowy = date("Y");
for ($i = $nowy; $i >= ($nowy - 100); $i--) {
    echo "<option value='" . $i . "'>" . $i . "年</option>";
}
?>
                      </select>
                    </div>
                </div>
                <div class="col s4 m3 l3">
                    <div class="input-field col s12">
                      <select id="input-months" name="months">
                      <?php
$nowm = date("n");
for ($i = 1; $i <= 12; $i++) {
    if ($i != $nowm) {
        echo "<option value='" . $i . "'>" . $i . "月</option>";
    } else {
        echo "<option value='" . $i . "' selected>" . $i . "月</option>";

    }
}
?>
                      </select>
                    </div>
                </div>
                <div class="col s4 m3 l3">
                    <div class="input-field col s12">
                      <select id="input-days" name="days">
                        <?php
$nowd = date("j");
for ($i = 1; $i <= 31; $i++) {
    if ($i != $nowd) {
        echo "<option value='" . $i . "'>" . $i . "日</option>";
    } else {
        echo "<option value='" . $i . "' selected>" . $i . "日</option>";

    }
}
?>
                      </select>
                    </div>
                </div>
              </div>



              <div class="row message">
                <div class="col s12 m4 l4" style="margin-top: -10px">
                <div class="input-field col s12 m12 l12">
              <label for="firstname">備考(相談内容など)</label>
                </div>
                </div>
              </div>

              <div class="row">
                 <div class="col s12  m10 offset-m2 l10 offset-l2">
                    <div class="input-field col s12 m12 l12">
                       <textarea
                          name="message"
                          id="input-message"
                          class="field-long field-textarea"
                          required ></textarea>
                     </div>
                 </div>
              </div>
              <div class="row">
                <div class="col s12 m12 l12">
                  <center>
                <!-- <input type="submit" onclick="return ask()" name="send" value="記入内容の確認" /> -->
                <button id="save">記入内容の確認</button>
                  </center>
                </div>
              </div>
          </div>
          <!-- </form> -->
          </div>
        </div>
      </div>


<!-- container for modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
    <!-- <span class="close">&times;</span>
    <a href="#" title="Close" class="modal-close">Close</a> -->

      <p>以下の内容で送信してよろしいですか？</p>
      <hr>
        <!-- isset -->
      <form method="POST" action="mail">
        <div class="container">
        <div class="row">
             <div class="col s4 m4 l4 position-right">
                 <p>体験希望日</p>
              </div>
               <div class="col s8 m8 l8 position-left">
                 <p> <span id="sunday"></span></p>
              </div>
           </div>
           <div class="row">
             <div class="col s4 m4 l4 position-right">
                 <p>名前</p>
              </div>
               <div class="col s8 m8 l8 position-left">
                 <p><span id="firstname"></span> <span id="lastname"></span></p>
              </div>
           </div>
           <div class="row">
               <div class="col s4 m4 l4 position-right">
                  <p>カナ</p>
               </div>
               <div class="col s8 m8 l8 position-left">
                  <p><span id="say"></span> <span id="may"></span></p>
               </div>
           </div>
           <div class="row">
               <div class="col s4 m4 l4 position-right">
                  <p>E Mail</p>
               </div>
               <div class="col s8 m8 l8 position-left">
                  <p><span id="email"></span> </p>
               </div>
           </div>
           <div class="row">
               <div class="col s4 m4 l4 position-right">
                  <p>電話番号</p>
               </div>
               <div class="col s8 m8 l8 position-left">
                  <p><span id="phone"></span></p>
               </div>
             </div>
             <div class="row">
               <div class="col s4 m4 l4 position-right">
                  <p>生年月日</p>
               </div>
               <div class="col s8 m8 l8 position-left">
                  <p><span id="years"></span>-<span id="months"></span>-<span id="days"></span></p>
               </div>
             </div>
             <!-- <div class="row">
               <div class="col s4 m4 l4 position-right">
                  <p>職業</p>
               </div>
               <div class="col s8 m8 l8 position-left">
                  <p><span id="profession"></span></p>
               </div>
             </div> -->
             <div class="row">
               <div class="col s4 m4 l4 position-right">
                  <p>備考(相談内容など)</p>
               </div>
               <div class="col s8 m8 l8 position-left">
                  <p><span id="message"></span></p>
               </div>
             </div>
             <hr>

            <input type="hidden" name="sunday" value="" id="sundayy">
            <input type="hidden" name="firstname" value="" id="firstnamme">
            <input type="hidden" name="lastname" value="" id="lastnamme">
            <input type="hidden" name="say" value="" id="sayy">
            <input type="hidden" name="may" value="" id="mayy">
            <input type="hidden" name="phone" value="" id="phonee">
            <input type="hidden" name="email"value="" id="emaill">
            <input type="hidden" name="years" value="" id="yearss">
            <input type="hidden" name="months" value="" id="monthss">
            <input type="hidden" name="days" value="" id="dayss">
            <!-- <input type="hidden" name="profession" value="" id="professionn"> -->
            <input type="hidden" name="message" value="" id="messagee">
             <div class="row" style="padding-top:30px;">
               <div class="col s12 m6 l6 position-right">
               <button class="green-background" type="submit" name="send" id="btn-confirm">送信する</button>
               </div>
             </div>
        </div>
      </form>
      <div class="close-modal">
        <div class="closes">
      <button id="" onclick="return closeModal();" class="red-background">戻る</button>
        </div>
      </div>
    </div>
</div>

<!-- <div id="confirm-modal" class="modal">
        <div class="modal-content">
          <p>thank you</p>
          <button id="close-confirm">Close</button>
          <button id="close-confirm'">Send</button>
        </div>
    </div> -->

    <script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("save");
var span = document.getElementsByClassName("close")[0];


//input fields -
var inputFirstname = document.getElementById('input-firstname');

var inputSunday = document.getElementsByName('input-sunday');
var inputLastname = document.getElementById('input-lastname');
var inputSay = document.getElementById('input-say');
var inputMay = document.getElementById('input-may');
var inputPhone = document.getElementById('input-phone');
var inputEmail = document.getElementById('input-email');
var inputYears = document.getElementById('input-years');
var inputMonths = document.getElementById('input-months');
var inputDays = document.getElementById('input-days');

// var inputProfession = document.getElementById('input-profession');
var inputMessage = document.getElementById('input-message');
var inputSundayy = document.getElementById('sundayy');
var inputFirstnamee = document.getElementById('firstnamme');
var inputLastnamee = document.getElementById('lastnamme');
var inputSayy = document.getElementById('sayy');
var inputMayy = document.getElementById('mayy');
var inputPhonee = document.getElementById('phonee');
var inputEmaill = document.getElementById('emaill');
var inputYearss = document.getElementById('yearss');
var inputMonthss = document.getElementById('monthss');
var inputDayss = document.getElementById('dayss');
// var inputProfessionn = document.getElementById('professionn');
var inputMessagee = document.getElementById('messagee');

// var closeBtn = document.getElementById('close-btn');




//modal fields
var sunday = document.getElementById('sunday');
var firstname = document.getElementById('firstname');
var lastname = document.getElementById('lastname');
var say = document.getElementById('say');
var may = document.getElementById('may');
var phone = document.getElementById('phone');
var email = document.getElementById('email');
var years = document.getElementById('years');
var months = document.getElementById('months');
var days = document.getElementById('days');
// var profession = document.getElementById('profession');
var message = document.getElementById('message');
var confirmBtn = document.getElementById('btn-confirm');

//confirm modal
var confirmModal = document.getElementById('confirm-modal');
var closeConfirmModal = document.getElementById('close-confirm');

confirmBtn.onclick = function() {
confirmModal.style.display = "block";
}

function closeModal() {
  modal.style.display = "none";
}

btn.onclick = function() {
modal.style.display = "block";
//loop through array of radio buttons

console.log(inputSunday);
for (var i = 0; i < inputSunday.length; i++) {
  // console.log(inputSunday[i]);
  if (inputSunday[i].checked) {
    // console.log(inputSunday[i]);
    sunday.innerHTML = inputSunday[i].value;
    sundayy.value = inputSunday[i].value;
  }
}


firstname.innerHTML = inputFirstname.value;
firstnamme.value = inputFirstname.value;
lastname.value = inputLastname.value;
lastnamme.value = inputLastname.value;
lastname.innerHTML = inputLastname.value;
sayy.value = inputSay.value;
say.innerHTML = inputSay.value;
mayy.value = inputMay.value;
may.innerHTML = inputMay.value;
phonee.value = inputPhone.value;
phone.innerHTML = inputPhone.value;
emaill.value = inputEmail.value;
email.innerHTML = inputEmail.value;
yearss.value = inputYears.value;
years.innerHTML = inputYears.value;
monthss.value = inputMonths.value;
months.innerHTML = inputMonths.value;
dayss.value = inputDays.value;
days.innerHTML = inputDays.value;
// professionn.value = inputProfession.value;
// profession.innerHTML = inputProfession.value;
messagee.value = inputMessage.value;
message.innerHTML = inputMessage.value;
}

closeConfirmModal.onclick = function() {
confirmModal.style.display = "none";
}

span.onclick = function() {
modal.style.display = "none";
}

// close modal when user clicks outside the modal/container
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}

// window.submittingForm = false;
</script>

    </div>
    <script src="assets/js/jquery-2.2.1.min.js"></script>
    <script src="assets/js/init.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/materialize.js"></script>

<script type="application/javascript" src="assets/js/modal.js"></script>
    <script>
    $(document).ready(function(){
$('select').formSelect();
});


</script>
  </body>
</html>
