<main>
   <router-outlet></router-outlet>
   <app-games class="ng-star-inserted">
      <router-outlet></router-outlet>
      <app-bingo class="ng-star-inserted">
         <!---->
         <div materialize="modal" class="modal" style="z-index: 1069;">
            <tckn-verification type="openGame">
               <div class="dshbrd-mdl">
                  <div class="mdl-hdr">
                     <div class="inf-hdr"><span class="inf-title">Oturum Güvenliği Kimlik Numarası Kontrolü</span></div>
                  </div>
                  <div class="mdl-cntnt">
                     <div class="tckn-vrfctn">
                        <p>Güvenlik gereği bu işlemi gerçekleştirebilmek için TC Kimlik Numaranızın son 4 hanesini girmeniz gerekmektedir.</p>
                        <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                           <input type="password" id="tckn" required="" name="tckn" pattern="^[0-9]+$" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="TC Kimlik No Son 4 Hanesini giriniz" minlength="4" maxlength="4"><!----><!---->
                           <div class="input-field">
                              <!----><button class="btn ng-star-inserted" disabled="">Gönder</button><!---->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </tckn-verification>
         </div>
         <div class="casino-detail-bg game-id-9427 ng-star-inserted">
            <app-static-inner-content contentcode="bingo-top">
               <!---->
            </app-static-inner-content>
            <div class="casino-detail-cntr">
               <div class="flex-container signin-msg-csn mar-bottom-10 ng-star-inserted">
                  <div class="flex-item">
                     <message-box type="info" content="MESSAGES.LOGIN_TO_PLAY_CASINO">
                        <div class="card-panel message-box info">
                           <!----><!---->
                           <div class="ng-star-inserted">
                              Casino oyunlarını oynamak için giriş yapınız<!----><!----><!----><!---->
                           </div>
                           <!----><!----><!----><!----><!---->
                        </div>
                     </message-box>
                  </div>
                  <button class="btn t1">Giriş Yap</button>
               </div>
               <!---->
               <div class="gm-bx-l">
                  <div class="title flex-container">
                     <div class="flex-item txt"><span class="ctry-n"> Canlı Tombala </span></div>
                     <div class="gm-acn">
                        <a class="btn popup" href="/tr/dashboard/payments/deposit-money"><i class="material-icons pg-icons">account_balance</i></a><a class="btn refresh" href="/tr/dashboard/payments/transfer"><i class="fa fa-exchange pg-icons"></i></a><a href="javascript:;" class="btn refresh"><i class="fa fa-refresh pg-icons"></i></a>
                        <app-user-favorite classes="btn fvrt-lnk">
                           <!---->
                        </app-user-favorite>
                        <a class="btn close" href="/tr/games/livecasino"><i class="material-icons pg-icons">close</i></a>
                     </div>
                  </div>
                  <!----><!---->
                  <div class="gm-bx ng-star-inserted">
                     <iframe id="gm-frm" frameborder="0" class="iframeDefaultSize ng-star-inserted" width="100%" height="909px" src="https://casino.pronetgaming.eu/livegames.php?k=WHdLDv3Ie9aE1i2WcBbu%2Ba5fJJ%2FiWlfgTOydugfqxI7XhmM0iMDmc18qXyDY0qtgLrJeEUE7zH0D5Jf6CmZdchwHzgp4fdESuBBeQTDHFydatVFElz6gvFXSt1PrSTWDKV1TVSGT%2BIoiaFQyR9y2iXr2Eb9hUZUvb2TS4Q0tItnfH6%2FRBW9CGBIEmMUoNieVx1N9ZBl%2FBK95%2Fl8qDGh7G6omI0j71OFNfN3W40%2BuSdpKlFHj%2FOWKFh6Pj8sDwG6rL6rp9rcz%2FefhZz5FpY0ZiHo7nCuaqv%2BsbGWCrFaSXxDoDPd8rAUtbRS%2BSJt0WJ9TTVTwM3G056FyT90ntrk50X%2B4tov69NA4LSiRO1Avu9XTJgHL5TQZkbZfnshtAs8%2BQT44kOgizwb7SExEGDv8tA%3D%3D" allowfullscreen="true"></iframe><!---->
                  </div>
                  <!---->
               </div>
            </div>
            <app-static-inner-content contentcode="bingo-bottom">
               <!---->
            </app-static-inner-content>
         </div>
         <!---->
      </app-bingo>
      <!---->
   </app-games>
   <!---->
</main>