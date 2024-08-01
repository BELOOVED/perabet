<div id="allCnt">
   <app-static-inner-content contentcode="m_header_content_area">
      <!---->
   </app-static-inner-content>
   <app-bottom-menu>
      <div class="bottom-fixed-controls">
         <div class="bottom-fixed-wrapper flex-container">
            <a routerlinkactive="active" href="/casino" class="flex-item truncate" id="undefined">
               <i class="icon foot-icon cherry"></i><!----><!----> Casino 
            </a>
            <!----><!----><!----><!---->
            <a routerlinkactive="active" href="/livecasino" class="flex-item truncate" id="undefined">
               <i class="icon foot-icon cards-fill"></i><!----><!----> Canlı Casino 
            </a>
            <!----><!----><!----><!----><!----><!---->
            <a href="javascript:;" class="button-collapse right-sidebar coupon" id="bslpb">
               <i aria-hidden="true" class="fa fa-plus"></i><!---->
            </a>
            <!----><!---->
            <a routerlinkactive="active" href="/live" class="flex-item truncate" id="undefined">
               <!----><i class="material-icons foot-icon">ondemand_video</i><!----> Canlı Bahis 
            </a>
            <!----><!----><!----><!----><!---->
            <a target="_blank'" class="flex-item truncate" id="lc-c" href="https://lc.chat/now/10747192/">
               <!----><i class="material-icons foot-icon">mode_comment</i><!----> Destek 
            </a>
            <!----><!----><!----><!---->
         </div>
      </div>
      <div id="BalanceModal" materialize="modal" class="modal modal-md" style="z-index: 1041;">
         <!---->
      </div>
   </app-bottom-menu>
   <!---->
   <main>
      <router-outlet></router-outlet>
      <app-authentication>
         <router-outlet></router-outlet>
         <app-signin>
            <!---->
            <div class="login-page">
               <div class="filter-toggle"><a class="register-close"><i class="fa fa-times"></i></a></div>
               <!----><!---->
               <form novalidate="" class="login-form clear ng-pristine ng-invalid ng-touched" action="javascript:;" id="login_form" onsubmit="logIn()">
                  <div class="title">
                     <h5>Hesabınıza giriş yapınız</h5>
                  </div>
                  <div class="title">
                     <app-static-inner-content contentcode="m_signin">
                        <!---->
                     </app-static-inner-content>
                  </div>
                  <!----><!---->
                  <div class="input-field">
                     <input type="text" name="login" required="" autocapitalize="none" class="browser-default ng-pristine ng-invalid ng-touched" placeholder="Kullanıcı adı" id="username"><!---->
                     <field-messages>
                        <div>Bu alan boş bırakılamaz.</div>
                        <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                     </field-messages>
                     <!---->
                  </div>
                  <!----><!----><!---->
                  <div class="input-field password">
                     <input formcontrolname="password" name="password" id="password" type="password" required="" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Şifreniz">
                     <password-eye el="password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                     <!---->
                  </div>
                  <!----><!----><button class="btn login-btn"> Giriş Yap </button><!----><!---->
               </form>
               <!---->
               <div class="flex-container btn-group"><a class="forgot-pass" href="/tr/authentication/forgot-password"> Şifremi Unuttum? </a><a class="forgot-username" href="/tr/authentication/forgot-username"> Kullanıcı adını unuttum? </a></div>
               <div class="flex-container btn-group btn-register"><a href="javascript:;" class="register-btn flex-item"><span>Hesabınız yok mu?</span> Yeni hesap oluştur </a></div>
               <!----><a class="contact-support" href="https://lc.chat/now/10747192/"><i class="fa fa-comments left"></i> Canlı Destek </a><!----><!----><!---->
            </div>
         </app-signin>
         <!---->
      </app-authentication>
      <!---->
      <payments-widget>
         <!---->
         <div id="PaymentFormModal" materialize="modal" class="modal modal-md open dshbrd-modal pymnt-mdl black-text" style="z-index: 1025;">
            <div class="modal-header"><a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons white-text">close</i></a></div>
            <!---->
         </div>
      </payments-widget>
   </main>
   <app-footer>
      <!---->
      <footer class="page-footer">
         <div class="footer-menu">
            <ul class="links">
               <li><a href="/tr/contents/about-us">Şirket Hakkında</a></li>
               <li><a href="/tr/contents/support-rules">Kurallar</a></li>
               <li><a href="/tr/contents/about-us-gen-terms-cond">Genel Şartlar ve Kurallar</a></li>
               <li><a href="/tr/contents/about-us-responsible-gaming">Sorumlu Oyun</a></li>
               <li><a href="/tr/contents/about-us-privacy-policy">Gizlilik Politikası</a></li>
               <li><a href="/tr/contents/about-us-terms-of-use">Kullanım Kuralları</a></li>
               <li><a href="/tr/contents/about-us-contact">Bize Ulaşın</a></li>
               <li><a href="/tr/contents/promotions">BONUSLAR</a></li>
               <li><a href="/tr/contents/promotions-general-rules">Genel Bonus Kuralları</a></li>
               <li><a href="/tr/contents/custom-event-rules">Özel Karşılaşmalar</a></li>
               <li><a href="/tr/contents/cashout-content">Bahis Bozdur</a></li>
               <!---->
            </ul>
         </div>
         <div class="social-media">
            <social-links classes="social-links">
               <ul class="social-links">
                  <!----><!----><!----><!----><!---->
                  <li><a target="_blank" href="https://t.me/perabetofficial"><i class="fa fa-telegram"></i></a></li>
                  <!----><!----><!----><!----><!----><!---->
               </ul>
            </social-links>
         </div>
         <div class="footer-copyright">
            <div class="container">
               <span>© 2013 - 2024 Copyright perabet</span>
               <div class="playgo-content">
                  <div class="container flex-container">
                     <div class="playgo-lisans">
                        <app-static-inner-content contentcode="licence-html">
                           <div extroutelink="" id="licence-html">
                              <div id="apg-025a76df-7f8d-46be-9fac-a6ce926d3a82" data-apg-seal-id="025a76df-7f8d-46be-9fac-a6ce926d3a82" data-apg-image-size="32" data-apg-image-type="basic-small"></div>
                           </div>
                           <div></div>
                           <div>
                              <style type="text/css">
                                 #apg-025a76df-7f8d-46be-9fac-a6ce926d3a82> div {min-width:64px !important;}
                              </style>
                           </div>
                           <!----><!---->
                        </app-static-inner-content>
                     </div>
                     <div class="playgo-text flex-item"> Perabet.com website is owned and operated by SXM Management N.V., a company incorporated under the laws of Curacao with company registration number 138661 and having its registered address at Groot Kwartierweg 10 Livestrong Building, Curacao, authorised by Curacao Antillephone N.V. License Validator, Antillephone N.V. license number #8048/JAZ. </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-partner">
            <div class="container"><i class="inline-block icon-footer-wac"></i><i class="inline-block icon-footer-spini"></i><i class="inline-block icon-footer-tomhorn"></i><i class="inline-block icon-footer-paragmatic"></i><i class="inline-block icon-footer-betsoft"></i><i class="inline-block icon-footer-netent"></i><i class="inline-block icon-footer-pronet"></i><i class="inline-block icon-footer-lucky"></i><i class="inline-block icon-footer-xpg"></i><i class="inline-block icon-footer-betgames"></i><i class="inline-block icon-footer-blueprint"></i><i class="inline-block icon-footer-ezugi"></i><i class="inline-block icon-footer-evo"></i><i class="inline-block icon-footer-amusnet"></i></div>
         </div>
         <app-static-inner-content contentcode="m_footer-static">
            <div extroutelink="" id="m_footer-static">
               <section id="footer-bottom-custom-code">
                  <a href="https://peramobile.one/" class="canli-tv-link" target="_blank">
                  <i class="pg-icons fa fa-mobile"></i> <strong>MOBİL</strong> UYGULAMA
                  </a>
                  <a href="http://onay.io/Tv2" class="canli-tv-link" target="_blank">
                  <i class="pg-icons fa fa-television"></i> CANLI MAÇ İZLE
                  </a>
               </section>
            </div>
            <div></div>
            <div>
               <style type="text/css">
                  #footer-bottom-custom-code {
                  position: fixed;
                  z-index: 591;
                  bottom: 50px;
                  left: 0;
                  width: calc(100% - 0px);
                  background-color: #f5bb1b;
                  color: #232a34;
                  font-family: arial;
                  font-size: 12px;
                  display: flex;
                  }
                  #footer-bottom-custom-code a {
                  color: #232a34;
                  text-decoration: none;
                  width: 50%;
                  padding: 10px;
                  font-weight: bold;
                  border-right: 1px solid #232a34;
                  display: flex;
                  align-content: center;
                  align-items: center;
                  justify-content: center;
                  border-bottom: 1px solid #232a34;
                  }
                  #footer-bottom-custom-code a i {
                  padding: 0 10px;
                  }
                  .modal .modal-content {
                  background: #12151a;
                  color: #fff;
                  }
                  #BalanceModal .balance-menu a {
                  color: #fff!important;
                  }
               </style>
            </div>
            <!----><!---->
         </app-static-inner-content>
         <div class="payments">
            <div class="payments-wrapper"><i class="icon-footer p1"></i><i class="icon-footer p2"></i><i class="icon-footer p4"></i><i class="icon-footer p5"></i><i class="icon-footer p6"></i><i class="icon-footer p7"></i><i class="icon-footer p15"></i><i class="icon-footer p12"></i><i class="icon-footer p13"></i><i class="icon-footer p14"></i></div>
         </div>
         <link rel="stylesheet" href="//v3.pronetstatic.com/m-common/assets/css/core.css">
      </footer>
      <app-static-inner-content contentcode="m_footer-for-setup">
         <div extroutelink="" id="m_footer-for-setup">
            <!--  -->
            <!-- Start of smartico code -->
            <!-- End of smartico code -->
         </div>
         <div>
            <script type="text/javascript" src="https://383f9af6-d973-4d64-88dc-e7d0410384bd.snippet.antillephone.com/apg-seal.js"></script><script type="text/javascript" src="https://025a76df-7f8d-46be-9fac-a6ce926d3a82.snippet.antillephone.com/apg-seal.js"></script><script type="text/javascript"></script><script type="text/javascript"></script><script type="text/javascript">
               var sealCDN = setInterval(function(){
                 if(typeof apg_025a76df_7f8d_46be_9fac_a6ce926d3a82 !== 'undefined'){
                   clearInterval(sealCDN);
                   setTimeout(function(){
                     apg_025a76df_7f8d_46be_9fac_a6ce926d3a82.init()
                   })
                 }
               },50);
            </script><script type="text/javascript">
               function setSmarticoUser() {
                   window._smartico_user_id = !!window.isLoggedInUser ? window.isLoggedInUser.customerId : null;
                   window._smartico_language = !!window.isLoggedInUser ? document.documentElement.lang : null;
               }
               
               setTimeout(function() {
                   setSmarticoUser();
               }, 5000);
               
               
               window.addEventListener('trackingDatas', function(event){ 
                   setTimeout(function(){
                   if(event.detail.event === 'userLoggedIn' || event.detail.event === 'userLoggedOut'){
                       setSmarticoUser();
                   }
                   }, 1000);
               });
            </script><script type="text/javascript">
               (function(d, r, b, h, s){h=d.getElementsByTagName('head')[0];s = d.createElement('script');s.onload=b;s.src=r;h.appendChild(s);})
               (document, 'https://libs.smartico.ai/smartico.js', function() {
                   _smartico.init('10018226-67a6-4f46-83c7-6693286374e8-4', { brand_key: 'be6b41e8' });
               });
            </script>
         </div>
         <div>
            <style type="text/css">
               .page-deposit .modul-content .money-list-cont .money-list-menu {display:none;}
            </style>
         </div>
         <!----><!---->
      </app-static-inner-content>
   </app-footer>
</div>